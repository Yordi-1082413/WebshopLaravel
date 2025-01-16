


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
                <form method="POST" action="{{route('upda' , $product['id'])}}">
                        @csrf 
                    
                    <input type="hidden" name="id" value="{{$product['id']}}">
                    <label for="categorie_id">{{ __('Categorie') }}</label>
                    <input type="text" name="categorie_id" value="{{$product['categorie_id']}}">
                    <label for="naam">{{ __('Naam') }}</label>
                    <input type="text" name="name" value="{{$product['naam']}}">
                    <label for="prijs">{{ __('Prijs') }}</label>
                    <input type="text" name="prijs" value="{{$product['prijs']}}">
                    <label for="Beschrijving">{{ __('Beschrijving') }}</label>
                    <input type="text" name="beschrijving" value="{{$product['beschrijving']}}">
                    <label for="foto">{{ __('Foto') }}</label>
                    <input type="text" name="foto" value="{{$product['foto']}}">





                        <button type="submit" class="btn" style="background-color: red; color: white">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
