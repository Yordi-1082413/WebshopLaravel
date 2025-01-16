


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product toevoegen') }}</div>

               
                        {{-- @error('categorie_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}

                <div class="card-body">
                    <form method="POST" action="{{ route('storeProduct')}}">
                        @csrf
                        <div class="form-group">
                          <label for="name">{{ __('Naam') }}</label>
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('naam') }}" required autocomplete="categorie_id" autofocus>
                        </div>

                        <div class="form-group">
                            <label for="categorie">{{ __('Categorie') }}</label>
                            <select name="categorie" id="categorie">
                            @foreach ($categorienamen as $naam)
                            <option value="{{$naam}}">{{$naam}}</option>
                            @endforeach
                            </select>
                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('naam') }}" required autocomplete="categorie_id" autofocus> --}}
                    
                          </div>

                          <div class="form-group">
                            <label for="prijs">{{ __('Prijs') }}</label>
                            <input id="prijs" type="text" class="form-control @error('prijs') is-invalid @enderror" name="prijs" value="{{ old('prijs') }}" required autocomplete="prijs" autofocus>
                           
                          </div>

                          <div class="form-group">
                            <label for="beschrijving">{{ __('Beschrijving') }}</label>
                            <input id="beschrijving" type="text" class="form-control @error('beschrijving') is-invalid @enderror" name="beschrijving" value="{{ old('beschrijving') }}" required autocomplete="beschrijving" autofocus>
                           
                          </div>

                          <div class="form-group">
                            <label for="foto">{{ __('Foto') }}</label>
                            <input id="foto" type="text" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" required autocomplete="foto" autofocus>
                           
                          </div>






                        <button type="submit" class="btn" style="background-color: red; color: white;">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
