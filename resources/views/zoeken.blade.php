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

<form class="search" type="get" action="{{ route('search') }}">
    @csrf                 
    <div class="input-group md-form form-sm form-1 pl-0">
      <div class="input-group-prepend">
        <span class="input-group-text purple lighten-3" id="basic-text1"><i class="fas fa-search text-danger"
            aria-hidden="true"></i></span>
      </div>
      <input class="form-control my-0 py-1" name="query" type="search" placeholder="Zoek" aria-label="Search">
    </div>
</form>

<div class="boventext">Producten waarop u zocht</div>
<div class="row">
    @foreach ($zoeken as $zoek)
     <div class="col-lg-4 mb-2"> 
     <div class="card mx-auto" style="width:18rem;"> 
 
             <img src="{{$zoek['foto']}}" class="card-img-top" alt="...">
             <a href="{{route('product', $zoek['id'])}}" class="btn" style="background-color: red; color: white;">Details</a>
             <div class="card-body">
               <h5 class="card-title"> {{$zoek['naam']}}</h5>  
               <div class="header"> {{$zoek['prijs']}}</div>
                <form method="POST" action="{{route('addtocart', [Auth::user()->id, $zoek['id']]  )}}">
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


