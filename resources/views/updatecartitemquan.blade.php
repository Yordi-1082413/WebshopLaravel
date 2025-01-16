

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Product') }}</div>

               
                        {{-- @error('categorie_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}

                <div class="card-body">
                <form method="POST" action="{{route('updatecartquan' , $items['id'])}}">
                        @csrf 
                    
                    <input type="hidden" name="id" value="{{$items['id']}}">
                    <input type="hidden" name="product_naam" value="{{$items['product_naam']}}">
                    <label for="categorie_id">{{ __('Aantal') }}</label>
                    <input type="text" name="product_quantity" value="{{$items['product_quantity']}}">
                    <input type="hidden" name="product_price" value="{{$items['product_price']}}">





                        <button type="submit" class="btn" style="background-color: red; color: white">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
