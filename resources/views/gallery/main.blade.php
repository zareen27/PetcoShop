<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>PetCo Shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/litera/bootstrap.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="{{asset('css/gallery.css')}}">
         
        <!-- Styles -->
       
    </head>
    <body style="background-image:url({{url('/assets/sldr_img/bg8.png')}});background-size:cover;background-position:center">
    <!--    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>-->


                                      <!-- Basic Nav Bar-->
        <nav class="navbar navbar-expand-lg navbar-info bg-info">
  <a class="navbar-brand text-light" href="{{ URL::to('/') }}">PetcoShop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link text-light" href="{{ URL::to('/') }}">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-light" href="{{ URL::to('gallery') }}">Gallery<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="{{ URL::to('home') }}">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="{{ URL::to('gallery2') }}">About</a>
      </li>
    </ul>
        <div><ul class="navbar-nav mr-auto">
          <!--<button type="button" class="btn btn-outline-primary my-2 my-sm-0">--> 
            <li class="nav-item"><a class="nav-link text-light" href="{{ route('register') }}">Register</a></li>
          <!--<button type="button" class="btn btn-outline-success my-2 my-sm-0">--> 
            <li class="nav-item"><a class="nav-link text-light" href="{{ URL::to('home') }}">Log In</a></li>
          <br>
        </ul>

          </div>
          <br>
    <form class="form-inline my-2 my-lg-0">

      <input class="form-control outline-success mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!--<div class="container ">-->
<div class="container">
  
    @yield('content')
  
</div>



<!--Footer starts-->

          
            <div class="card-footer text-white bg-info mb-3">
              <div class="card-header">PetcoShop</div>
                <div class="card-body">
                  <h4 class="card-title">Address</h4>
                     <p class="card-text"> House No, 30 Rd No. 3, Dhaka 1205<br>
                            Hours: <br>
                            Open:12AM Closes:10PM<br>
                            Phone: 01976-437643</p>
                </div>
               </div>
            
          </div>

     
      <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/isotope.pkgd.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/gallery.js')}}"></script>
     
     

     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    </body>
</html>
