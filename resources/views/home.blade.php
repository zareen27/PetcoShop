@extends('welcome')

@section('content')
   
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ URL::to('/assets/sldr_img/cow.png') }}" alt="First slide">
     <div class="carousel-caption d-none d-md-block">
      <legend class="text-center "><h2 class="text-light font-bold">Welcome to PetCo Shop!</h2></legend>
       
     </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ URL::to('/assets/sldr_img/dogs.jpg') }}" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
      <legend class="text-center  "><h2 class="text-success font-bold">Loyal Animal Dogs!</h2></legend>
       <p class="font-italic">Hurry up we have brought the best of breeds! <br>
        Waiting just for you to join you at your place.</p>
     </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ URL::to('/assets/sldr_img/cats.jpg') }}" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
      <legend class="text-center "><h2 class="text-success font-bold">Cute Cats</h2></legend>
       <p class="text-light font-italic"> All at affordable price <br>
        Join Us! </p>
     </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




   @endsection