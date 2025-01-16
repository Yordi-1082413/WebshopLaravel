@extends('layouts.app')
<style>
.boventext{
    text-align: center;
    font-size: 30px;
}

.numberinput{
height: 35px;
width: 80px
}
</style>


{{-- {{dd($producten)}} --}}
@section('content')
<div class="boventext">Producten</div>
<div class="row">
    @foreach ($producten as $product)
     <div class="col-lg-4 mb-2"> 
     <div class="card mx-auto" style="width:18rem;"> 
 
             <img src="../{{$product['foto']}}" class="card-img-top" alt="...">
             <a href="{{route('product', $product['id'])}}" class="btn" style="background-color: red; color: white;">Details</a>
             <div class="card-body">
               <h5 class="card-title"> {{$product['naam']}}</h5>  
               <div class="header"> {{$product['prijs']}}</div>
                <form method="POST" action="{{route('addtocart', [Auth::user()->id, $product['id']]  )}}">
                    @csrf
                    <input class="btn" type="submit" value="Toevoegen" style="background-color: red; color: white;">
                    <input class="numberinput" type="number" id="quantity" name="quantity" min="1" max="100">
                </form>
          </div> 
     </div> 
 </div>  


  
     @endforeach  
 </div>
 
 </div>
 @endsection
