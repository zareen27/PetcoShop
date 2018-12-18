@extends('welcome')

@section('content')
   
   <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ URL::to('/img/plane_spa1.jpg') }}" alt="First slide">
     <div class="carousel-caption d-none d-md-block">
      <legend class="text-center "><h2 class="text-success font-bold">PetCo Shop Online</h2></legend>
       
     </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ URL::to('/assets/sldr_img/dogs2.jpg') }}" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
      <legend class="text-center  "><h2 class="text-success font-bold">Loyal Animal Dogs!</h2></legend>
       <p class="font-italic">Hurry up we have brought the best of breeds! <br>
        Waiting just for you to join you at your place.</p>
     </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ URL::to('/assets/sldr_img/cats2.jpg') }}" alt="Third slide">
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
 

 <section id="one" class="wrapper style1 special">
        <div class="container">
          <header class="major">
            <h2 >Welcome to Petco Shop Online</h2>
            <p>Your would be choice for buying favourite pets and shop for their daily necessities!</p>
            <h3 class="text-success">Brief Overview of our products</h3>
          </header>
          <div class="row 150%">
            <div class="4u 12u$(medium)">
              <section class="box">
                <img class="card-img-top" src="{{ URL::to('/img/products/desktop-18.jpg') }}" alt="Card image cap">
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quam consectetur quibusdam magni minus aut modi aliquid.</p>
              </section>
            </div>
            <div class="4u 12u$(medium)">
              <section class="box">
                <img class="card-img-top" src="{{ URL::to('/img/products/laptop-5.jpg') }}" alt="Card image cap">
                <h3>Consectetur adipisicing</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium ullam consequatur repellat debitis maxime.</p>
              </section>
            </div>
            <div class="4u$ 12u$(medium)">
              <section class="box">
                <img class="card-img-top" src="{{ URL::to('/img/products/camera-4.jpg') }}" alt="Card image cap">
                <h3>Adipisicing elit totam</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eaque eveniet, nesciunt molestias. Ipsam, voluptate vero.</p>
              </section>
            </div>

            <!--New--> 
            <div class="4u 12u$(medium)">
              <section class="box">
                <img class="card-img-top" src="{{ URL::to('/img/products/appliance-2.jpg') }}" alt="Card image cap">
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quam consectetur quibusdam magni minus aut modi aliquid.</p>
              </section>
            </div>
            <div class="4u 12u$(medium)">
              <section class="box">
                <img class="card-img-top" src="{{ URL::to('/img/products/appliance-6.jpg') }}" alt="Card image cap">
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quam consectetur quibusdam magni minus aut modi aliquid.</p>
              </section>
            </div>
            <div class="4u 12u$(medium)">
              <section class="box">
                <img class="card-img-top" src="{{ URL::to('/img/products/phone-8.jpg') }}" alt="Card image cap">
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quam consectetur quibusdam magni minus aut modi aliquid.</p>
              </section>
            </div>



          </div>
        </div>
      </section>
 <section id="one" class="wrapper style1 special">
        <div class="container">
<div class="jumbotron bg-light">
  <h1 class="display-4 text-success">About Us!</h1>
   <hr>
  
    <br>
    <p class="text-info">With a view to reducing troubles of travelling we provide an online solution to ease the hassles of shopping.</p>
    <p class="text-info">PetCo is a world wide chain for providing best products. The store is a sister concern for the PetCo chain first delivering products in BANGLADESH currently.</p>


<hr>

<legend class="text-success">Our facilities</legend>

<li class="text-info">Pet Delivery</li>
<li class="text-info">Secured Payments.
</li>
<li class="text-info">Assurance.</li>
<li class="text-info">Discounts.</li>
<li class="text-info">Product Quality Guaranteed.</li>
<li class="text-info">We also offer additional requirements for the product you buy**. </li>

</p>
  <hr class="my-4">
 
  <p class="lead">
    <a class="btn btn-info btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
</div>
</section>

  

<!--Practice-->


<section id="one" class="wrapper style1 special">
        <div class="container">
          <header class="major">
            <h2 class="text-info">Additional Products and services! </h2>
            <p>Lorem ipsum dolor sit amet, delectus consequatur, similique quia!</p>
          </header>
          <div class="row 150%">
            <div class="4u 12u$(medium)">
              <section class="box">
                <img class="card-img-top" src="{{ URL::to('/img/products/appliance-4.jpg') }}" alt="Card image cap">
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quam consectetur quibusdam magni minus aut modi aliquid.</p>
              </section>
            </div>
            <div class="4u 12u$(medium)">
              <section class="box">
                <img class="card-img-top" src="{{ URL::to('/img/bike_spa.jpg') }}" alt="Card image cap">
                <h3>Consectetur adipisicing</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium ullam consequatur repellat debitis maxime.</p>
              </section>
            </div>
            <div class="4u$ 12u$(medium)">
              <section class="box">
                <img class="card-img-top" src="{{ URL::to('/img/products/tv-8.jpg') }}" alt="Card image cap">
                <h3>Adipisicing elit totam</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eaque eveniet, nesciunt molestias. Ipsam, voluptate vero.</p>
              </section>
            </div>
          </div>
        </div>
      </section>










<!------FeedBack Section --->





    <!-- Three -->
      <section id="three" class="wrapper style3 special">
        <div class="container">
          <header class="major">
            <h2>Contact us today!</h2>
            <p>The page is responsive. Typically replies message. Delivery available 24/7</p>
          </header>
        </div>
        <div class="container 50%">
          <form action="#" method="post">
            <div class="row uniform">
              <div class="6u 12u$(small)">
                <input name="name" id="name" value="" placeholder="Name" type="text">
              </div>
              <div class="6u$ 12u$(small)">
                <input name="email" id="email" value="" placeholder="Email" type="email">
              </div>
              <div class="12u$">
                <textarea name="message" id="message" placeholder="Message" rows="6"></textarea>
              </div>
              <div class="12u$">
                <ul class="actions">
                  <li><input value="Send Message" class="special big" type="submit"></li>
                </ul>
              </div>
            </div>
          </form>
        </div>
      </section>

    






   @endsection