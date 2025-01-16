<!doctype html>
<style>
body{
    background-color:black;
    }
</style>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>

      .container-fluid {
    overflow: hidden;
    margin-top: 50px;
    background: white;
    color: black !important;
    margin-bottom: 0;
    padding-bottom: 0
}

.bovenstebar{
            background-color: red;
            color: white;
            text-align: center
            }

    .shoppingicon{
       font-size: 40px;
       color: red;
    }

    .count{
        border-radius: 100px;
        background: red;
        color: white;
    }


    </style>
</head>
<body>
    
    <div class="bovenstebar">Gebruik de code: korting99 voor 10% korting!</div>
     
    <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: white;">
        <div class="container">
           <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a> 

            
         
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            


    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                </ul>

                <form class="search" type="get" action="{{ route('search') }}">
                
                    <div class="input-group md-form form-sm form-1 pl-0">
                      <div class="input-group-prepend">
                        <span class="input-group-text purple lighten-3" id="basic-text1"><i class="fas fa-search text-danger"
                            aria-hidden="true"></i></span>
                      </div>
                      <input class="form-control my-0 py-1" name="query" type="search" placeholder="Zoek" aria-label="Search">
                    </div>
                </form>
                  
                  
               
                    

                <!-- Right Side Of Navbar -->
              
                <ul class="navbar-nav ml-auto" style="color: white;">
                    <!-- Authentication Links -->
                    @guest
                    
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown" >
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>


                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('products') }}">
                                    {{ __('All Produts') }}
                                </a>

                                
                                <a class="dropdown-item" href="{{ route('contact') }}">
                                    {{ __('Contact') }}
                                </a>


                              

                                @if (Auth::user()->user_role === 'admin')
                                <a class="dropdown-item" href="{{ route('addcategorie') }}">
                                    {{ __('Add Category') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('addproduct') }}">
                                    {{ __('Add Product') }}
                                </a>

                                
                                
                                @endif

                                
                  

                        
                        
                                  
                            
            


                                

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <li>
                            <a href="{{route('shoppingcart')}}">
                                <i class="shoppingicon fas fa-shopping-cart"></i>

                            </a>
                        </li>
                         {{-- <li>
                         <div class="count">{{count($items)}}</div> 
                        </li> 
                         --}}
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

        

        <main class="py-4">
            <div class="container">
            
            @yield('content')
        </div>
        </main>
   
</body>
<div class="container-fluid pb-0 mb-0 justify-content-center text-light ">
    <footer>
        <div class="row text-center">
            <div class="col-md-4">
                <hr class="light"  style="background-color: red">
                <h5>Gegevens</h5>
                <hr class="light"  style="background-color: red">
                <p>06123456</p>
                <p>info@GameZone.nl</p>
            </div>

            <div class="col-md-4">
                <hr class="light"  style="background-color: red">
                <h5>Onze uren</h5>
                <hr class="light"  style="background-color: red">
                <p>maandag t/m vrijdag: 08:00 - 17:00</p>
                <p>zaterdag: 10:00 - 15:00</p>
                <p>zondag: Gesloten</p>
            </div>

            <div class="col-md-4">
                <hr class="light" style="background-color: red">
                <h5>Land</h5>
                <hr class="light"  style="background-color: red">
                <p>Nederland</p>
            </div>
            <div class="col-12">
                <hr class="light"  style="background-color: red">
                <h5>&copy;  GameZone.nl</h5>
            </div>
        </div>
    </footer>
</div>
</html>
