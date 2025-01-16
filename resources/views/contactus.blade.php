
@extends('layouts.app')

@section('content')
<style>
    .center{
        text-align: center
    }

    .container{
        text-align: center
    }


    </style>
    <h1 style="text-align: center">Wij zijn te bereiken via</h1>
    <div class="container">
        <div class="card-columns">
          <div class="card">
              <div class="center">
            <i style="color: red; font-size: 100px; margin: auto;"  class="primary fas fa-envelope-open-text"></i>
              </div>
            <div class="card-body">
                <h5 class="card-title">E-mail</h5>
             
                <a class="btn" style="background-color: red; color: white;" href="mailto: yvanberkumm@gmail.com">Stuur E-mail</a>
            </div>
          </div>

          <div class="card">
            <div class="center">
            <i style="color: red; font-size: 100px; margin: auto " class="fas fa-phone-volume"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title">Telefoon</h5>
              <a href="#" class="btn" style="background-color: red; color: white;">0626347282</a>
            </div>
          </div>

          <div class="card">
            <div class="center">
            <i style="color: red; font-size: 100px; margin: auto "  class="fab fa-instagram"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title">Instagram</h5>
              <a href="https://www.instagram.com/dutchfails/" class="btn" style="background-color: red; color: white;">Naar Instagram</a>
            </div>
          </div>




        </div>



        </div>


@endsection

