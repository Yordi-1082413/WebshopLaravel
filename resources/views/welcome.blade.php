<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    

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

        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }

            .container{
               text-align: center;
            }

            .row{
          text-align: center;
            }
            
            .card{
                margin-left: 10px;
                margin-bottom: 10px;
                text-align: center
            }

            body {
  font-family: Arial, Helvetica, sans-serif;
}

    


         .logo{
height: 70px;
width: 70px
          }
    
            .carousel-item{
              margin-top: 50px;
                width: 100%;
                height: auto;
            }

            .card{
                width: 30%;
                height: auto;
            }

            .bovenstebar{
            background-color: red;
            color: white;
            text-align: center
            }

          

.container-fluid {
    overflow: hidden;
    margin-top: 50px;
    background: white;
    color: black !important;
    margin-bottom: 0;
    padding-bottom: 0
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
    <body class="antialiased">

        <div class="bovenstebar">Vandaag besteld morgen in huis!!</div>
      



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
                               </li> --}}
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

      
        


       <div class="container">

<div id="demo" class="carousel slide" data-ride="carousel"> 
<div class="carousel-inner ">
  <div class="carousel-item active">
    <img src="img/web4.jpg" alt="Los Angeles" width="93%" height="60%">
  </div>
  <div class="carousel-item">
    <img src="img/gta.jpg" alt="Chicago" width="93%" height="60%">
  </div>
  <div class="carousel-item">
    <img src="img/webshophome..png" alt="New York" width="93%" height="60%">
  </div>
</div>
</div>

<br>

<div class="row">
   @foreach ($categorieen as $categorie)
   <div class="col-lg-4 mb-3"> 
    <div class="card mx-auto" style="width:17rem;"> 
        <img class="card-img-top" src="{{$categorie['foto']}}" style="min-height: 150px">
                

        <div class="card-body"> 

              
            <a href="{{route('onecategorie', $categorie['id'])}}" class="btn" style="background-color: red; color: white;"> 
                {{$categorie['naam']}}
            </a> 
        </div> 
    </div> 
</div> 

    @endforeach  
</div>

</div>





          
        
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
