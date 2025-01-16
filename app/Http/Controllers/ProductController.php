<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Repositories\Producten\ProductenRepositoryInterface;
use App\Repositories\Categorieen\CategorieenRepositoryInterface;

class ProductController extends Controller
{
    private $categorieen;
    private $producten;

    public function __construct(ProductenRepositoryInterface $producten, CategorieenRepositoryInterface $categorieen)
    {
        $this->producten = $producten;
        $this->categorieen = $categorieen;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorieen = $this->categorieen->getCategorieen();
        return view('welcome', ['categorieen'=>$categorieen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $categorieNamen = $this->categorieen->allCategorieen();

      return view('addproduct',['categorienamen'=>$categorieNamen]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->input();

        $this->producten->storeProduct($input);
        
        return $this->index();
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $producten = $this->producten->getProducts();
        return view('products' , ['producten'=>$producten]); 
    }

    public function oneProduct($id)
    {
        $product = ProductModel::find($id);
        return view('product' , ['product'=>$product]); 
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $product = ProductModel::find($id);
         return view('updateproduct', ['product'=>$product]);
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // $request,
    public function update(Request  $request, $id)
    {

        $input = $request->input();
        $this->producten->updateProduct($input);
        
        return $this->index();
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $product = ProductModel::find($id);
       $product->delete();
    return redirect()->route('products');
    } 

    public function search(){
        $search_text = $_GET['query'];
        $zoeken = ProductModel::where('naam','LIKE', '%' .$search_text.'%')->get();
        
        return view('zoeken',compact('zoeken'));
    }

    
   
 






}

