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
    <body>
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

<a href="http://www.dogbazar.org" class="logo-main"><img src="{{ URL::to('/assets/logo.png') }}" alt="" height="70" /></a>
<div class="col-md-4" style="background-image:url({{url('/assets/sldr_img/bg5.jpg')}});background-position:center">
</div>

<div class="col-md-6" style="background-image:url({{url('/assets/sldr_img/bg5.jpg')}});background-position:center">
<div class="container" >
   <div class="row mr-auto" >
    
        <button type="button" href="{{ route('register') }}"   class="btn btn-link">Register</button>
  
          <button type="button" href="{{ URL::to('home') }}" class="btn btn-link">Log In</button>
          <form class="form-inline my-2 my-lg-0">

          <input class="form-control outline-success mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
           <button type="button"    class="btn btn-link">Contact:0199999999</button>
  
    </div>
  </div>
</div>
</div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

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
        <a class="nav-link text-light" href="#">About</a>
      </li>
    </ul>
        
  </div>
</nav>

<!--<div class="container ">-->
<div class="container">
  
    @yield('content')
  
</div>



<!--Footer starts-->

          
            <div class="card-footer text-white bg-success mb-3">
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



     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    </body>
</html>
