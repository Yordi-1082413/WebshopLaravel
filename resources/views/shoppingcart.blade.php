<style>
    * {
      box-sizing: border-box;
    }
    
    .hidden {
  display: none;
}
    /* Create three equal columns that floats next to each other */
    .column {
        border-top: 1px solid red;
      float: left;
      width: 25%;
      padding: 10px;
      height: 60px; /* Should be removed. Only for demonstration */
    }

    .column2 {
 
      float: left;
      width: 13%;
   
      height: 30px; /* Should be removed. Only for demonstration */
    }

    .row2:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    </style>
@extends('layouts.app')

@section('content')

<div class="row">
    <div class="column" >
      <h3>Product</h2>
    </div>
    <div class="column" >
      <h3>Aantal</h2>
    </div>
    <div class="column">
      <h3>Prijs</h2>
    </div>
    <div class="column" >
        <h2></h2>
      </div>
  </div>


@foreach ($items as $item)

<div class="row">
    <div class="column" >
      <h4>{{$item['product_naam']}}</p>
    </div>
    <div class="column">
      <h4>{{$item['product_quantity']}}</p>
    </div>
    <div class="column" >
      <h4>{{$item['product_price']}}</p>
    </div>
    <div class="column" >
        <a href="{{route('destroycartitem', $item['id'])}}" class="btn" style="background-color: red; color: white;" role="button">Delete</a>
      </div>
  </div>
@endforeach

<form method="POST" action="{{ route('checkKorting')}}">
  @csrf
  <input type="hidden" name="items" value="{{serialize($items)}}">
   <input type="hidden" name="total" value="{{$total}}"> 
  <input type="text" id="korting" name="korting" style="height: 35px; border: 2px solid red" placeholder="voeg kortingscode toe">
  <input type="submit" class="btn" style="background-color: red; color: white" value="Voeg toe">
</form> 

<div class="row2">
    <div class="column2" >
      <h4>Subtotaal:</h2>
    </div>
    <div class="column2" >
      <h4>{{$total}}</h2> 
  </div>

    </div>

    <div class="row2">
      <div class="column2" >
        <h4>Korting:</h2>
      </div>
      <div class="column2" >
        <h4>{{isset($totalminprocent) ? $total - $totalminprocent : 0}}</h2> 
    </div>
  </div>

    <div class="row2">
      <div class="column2" >
        <h4>Totaal:</h2>
      </div>
      <div class="column2" >
        <h4>{{isset($totalminprocent) ? $totalminprocent : $total}}</h2> 
    </div>

  
      </div>
  



  
  


@endsection