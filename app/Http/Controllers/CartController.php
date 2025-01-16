<?php

namespace App\Http\Controllers;
use App\Models\CartItemModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\CartModel;
use App\Models\KortingModel;
use App\Repositories\Producten\ProductenRepositoryInterface;
use Illuminate\Support\Arr;
use Session;

class CartController extends Controller
{
  private $producten;

  public function __construct(ProductenRepositoryInterface $producten)
  {
      $this->producten = $producten;
  }
  
  public function CheckAddUserCart($user_id, $product_id , $product_quantity)
  {
    $user_id = Auth::id();
    $cart_id = CartModel::where("user_id", $user_id)->value("id");
    if(CartModel::where("user_id", $user_id)->first() === null){
      $cart = new CartModel;
      $cart->user_id = $user_id;
      $cart->save();

      $productPrice = ProductModel::find($product_id)->value('prijs') * $product_quantity;

      $cartItem = new CartItemModel;
      $cartItem->cart_id = $cart->id;
      $cartItem->product_id = $product_id;
      $cartItem->product_quantity = $product_quantity;
      $cartItem->product_price = $productPrice;
      $cartItem->save();
    }elseif(CartModel::where("user_id", $user_id)->first() !== null && CartItemModel::where("cart_id", $cart_id)->where("product_id" , $product_id)->get()->isEmpty()){
      $cartId = CartModel::where("user_id", $user_id)->value("id");

      $productPrice = ProductModel::find($product_id)->value('prijs') * $product_quantity;

      $cartItem = new CartItemModel;
      $cartItem->cart_id = $cartId;
      $cartItem->product_id = $product_id;
      $cartItem->product_quantity = $product_quantity;
      $cartItem->product_price = $productPrice;
      $cartItem->save();
    }else{
    //je wordt terug gestuurd naar de index door de addtocart functie return

    }
  }

  public function addtocart($user_id, $product_id, Request $request)
  {
          $this->CheckAddUserCart($user_id, $product_id, $request->quantity);
            return redirect()->route('index');
  }



  public function shoppingcart(Request $request){

    $user_id = Auth::id();
    $cart_id = CartModel::where("user_id", $user_id)->value("id");
    $cartItems = CartItemModel::where("cart_id", $cart_id)->get();

    $sessionData = array();

    $items = array();

    $total = 0;

    for ($i=0; $i < count($cartItems); $i++) { 
      $items[$i]['id'] = $cartItems[$i]['id'];
      $items[$i]['product_naam'] = ProductModel::where("id", $cartItems[$i]['product_id'])->value('naam');
      $items[$i]['product_id'] = $cartItems[$i]['product_id'];
      $items[$i]['product_quantity'] = $cartItems[$i]['product_quantity'];
      $items[$i]['product_price'] = ($cartItems[$i]['product_price']);
      $total += $cartItems[$i]['product_price'];

    }

    // $sessionData[$user_id] = $items;
    // $request->session()->flush();
    // dd($request->session()->has($user_id));
    // dd(array_keys($request->session()->all()));

    // foreach ($request->session()->all() as $sessionKey) {
    //   array_keys($request->session()->all());
    //   echo '<br>';
    // }
   

  // dd($request->session()->get($i));
  // dd($request->session()->has('_token'));
  // echo '<br>';
    // if($request->session()->has('key'))
    // {
    // }
    
//     if ($request->session()->has($user_id)) {
//       // $currentSession = session($user_id);
//       // $request->session()->forget($user_id);
// $sessionData = $request->session()->forget('sessionData', $sessionData);
// $sessionData[$user_id] = $items;
// session($sessionData);
// dd($request->session()->all());
//       // Arr::pull($sessionArr, $user_id);
   
//       // dd($request->session()->all());
//     } else {
//       session($sessionData);
    
    



  

    // Session::put(['items'=>$items]);

    // $value = Session::get('items');

    // dd($value);

    

 return view('shoppingcart' , ['items'=>$items, 'total'=>$total]); 

}




public function destroycartitem($id){
  $cartItem = CartItemModel::find($id);
  $cartItem->delete();
return redirect()->route('shoppingcart');
}

public function updatecartitemquan($id){
  $items = CartItemModel::find($id);
  return view('updatecartitemquan', ['items'=>$items]);
}



public function checkKorting(Request $request){
  $code = $request->input("korting");
  $total = $request->input("total");
  

   $input = KortingModel::where("code", $code)->value("korting");

   if($input == null){
    return redirect()->route('shoppingcart');
   }elseif($input !== null){
   $totaldeeld100 = $total / 100;
   $totalkeerinput = $totaldeeld100 * $input;
   $totalminprocent = $total - $totalkeerinput;

   $items = unserialize($request->items);

  return view('shoppingcart', ['items' => $items, 'totalminprocent' => $totalminprocent, 'total' => $total]);
   }


  
  // $total = $totaal / $input;
    
}
        
}