<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>PetCo Shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/litera/bootstrap.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       
    </head>
    <body style="background-image:url({{url('/assets/sldr_img/bg5.jpg')}});background-size:cover;background-position:center">
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

<div class="row">
<br>
<a href="http://www.dogbazar.org" class="logo-main"><img src="{{ URL::to('/assets/logo.png') }}" alt="" height="70" /></a>
<br>

<div  class="col  bg-light" >
  
   <div class="row ml-auto col-auto float-right " >
        <ul class="nav nav-pills   my-2 mr-auto">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Portals</a>
              <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="/admin">Admin</a>
                
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </li>
          </ul>
                 
       <button type="button"   class="btn btn-link"> <a class="btn-link"  href="/register">Register
        </a></button>
  
          <button type="button"  class="btn btn-link"> <a class="btn-link"  href="/login">Log In</a></button>
          <form class="form-inline my-2 my-lg-0">

          <input class="form-control outline-success mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
          
          
        
           <button type="button"    class="btn btn-link">Contact : +0199999999</button>
  
  
  </div>

  </div>

</div>
</div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-info" >
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a class="navbar-brand visible-xs" href="">PetCo Shop</a>
        <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>-->
    </div>

  <div class="collapse navbar-collapse" id="navbarColor02" >
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link text-light" href="{{ URL::to('/') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="{{ URL::to('gallery') }}">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="{{ URL::to('home') }}">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="{{ URL::to('gallery') }}">About</a>
      </li>
    </ul>
    
    
  </div>
</nav>

<!--<div class="container ">-->
<div >
  
    @yield('content')
  
</div>

<br>

<!--Footer starts-->

          
            <div class="card-footer text-white bg-info mb-3">
              <div class="card-header">PetcoShop</div>
                <div class="card-body">
                  <div class="footer-content container">
                   <ul>
                    <li>Follow Me:</li>
                    <li><a href="#"><i class="fa fa-globe"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
              </div>
                  <h4 class="card-title">Address</h4>
                     <p class="card-text"> House No, 30 Rd No. 3, Dhaka 1205<br>
                            Hours: <br>
                            Open:12AM Closes:10PM<br>
                            Phone: 01976-437643</p>
                </div>
               </div>
            
          </div>



     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    </body>
</html>
