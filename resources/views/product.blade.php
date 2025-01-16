
@extends('layouts.app')

<style>
  .card{
      text-align: center
  }
    </style>
</head>


{{-- {{dd($producten)}} --}}
@section('content')


 <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">{{$product['naam']}}</h5>
      
      <p class="card-text">{{$product['beschrijving']}}</p>
      <hr>
      <div class="header"> {{$product['prijs']}}</div>  
      @if (Auth::user()->user_role === 'admin')
      <a href="{{route('destroy', $product['id'])}}" class="btn btn-danger" role="button">Delete</a>
      <a href="{{route('edit', $product['id'])}}" class="btn btn-success" role="button">Update</a>
      @endif
    </div>
  </div>
 @endsection
