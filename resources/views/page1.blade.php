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
 <br>
 <div class="container bg-info">
<div class="jumbotron bg-light">
  <h1 class="display-4 text-success">WELCOME!</h1>
   <hr>
  
    <br>
    <p class="text-info">With a view to reducing troubles of travelling we provide an online solution to ease the hassles of shopping.</p>


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


 

<div class="row ">

        <div class="col">
         <div class="card border-info" style="width: 24rem;">
          <img class="card-img-top" src="{{ URL::to('/assets/sldr_img/dogs2.jpg') }}" alt="Card image cap">
         <div class="card-body">
           <h5 class="card-title text-info">Join Us at PetCo Shop!!</h5>
           <p class="card-text"><p class="text-info">We provide all kind of accessories for your adorable pets.<br>Drop by to enjoy our service.</p></p>
          <a href="Home.html" class="btn btn-info">More info</a>
           </div>
           </div>
        </div>

       
        <div class="col">
          <br>
          <br>
        <div class="card bg-info" style="width: 24rem;">
           <img class="card-img-top" src="{{ URL::to('/assets/sldr_img/dogs2.jpg') }}" alt="Card image cap">
         <div class="card-body">
           <h5 class="card-title text-light">Soothing Rooftop View</h5>
           
          <a href="#" class="btn btn-light text-info">More Info</a>
           </div>
        </div>
      </div>
    
     
          <div class="col">
        <div class="card border-primary" style="width: 24rem;">
           <img class="card-img-top" src="{{ URL::to('/assets/sldr_img/dogs2.jpg') }}" alt="Card image cap">
         <div class="card-body">
           <h5 class="card-title text-primary">Luxurious Inner View</h5>
           <p class="card-text"><p class="text-primary">Extremely comfortable dine is guaranted<br>
            Ready for all the occassions.Dine with luxury at affrdable price.</p></p>
          <a href="#" class="btn btn-info">More info</a>
            </div>
        </div>
      </div>

     <div class="col">
              <br>
           <div class="card border-info" style="width: 24rem;">
           <img class="card-img-top" src="{{ URL::to('/assets/sldr_img/dogs2.jpg') }}" alt="Card image cap">
            <div class="card-body">
           <h5 class="card-title text-info">Mouth Watering Cuisines</h5>
           
          <a href="#" class="btn btn-info">More info</a>
                  </div>
              </div>
           </div>



   </div>
 
 
<!-----Second Section------>
             <div class="row ">
    <br>
 
              <div class="col">
              <br>
           <div class="card border-info" style="width: 50rem;">
           <img class="card-img-top" src="{{ URL::to('/assets/sldr_img/dogs2.jpg') }}" alt="Card image cap">
            <div class="card-body">
           <h5 class="card-title text-info">Mouth Watering Cuisines</h5>
           
          <a href="#" class="btn btn-info">More info</a>
                  </div>
              </div>
           </div>




           

           

            
    

            

      <div class="col">
          <br>
       <div class="card border-primary" style="width: 50rem;">
           <img class="card-img-top" src="{{ URL::to('/assets/sldr_img/dogs2.jpg') }}" alt="Card image cap">
         <div class="card-body">
           <h5 class="card-title text-primary">Exquisite Parties</h5>
           
          <a href="#" class="btn btn-info">More info</a>
                  
            
        </div>
       </div>
     </div>
    </div>
  







                               <!-----Third Section------>



   <div class="row ">
    <br>
 
              <div class="col">
              <br>
           <div class="card border-info" style="width: 24rem;">
           <img class="card-img-top" src="{{ URL::to('/assets/sldr_img/dogs2.jpg') }}" alt="Card image cap">
            <div class="card-body">
           <h5 class="card-title text-info">Mouth Watering Cuisines</h5>
           
          <a href="#" class="btn btn-info">More info</a>
                  </div>
              </div>
           </div>




           <div class="col">
              <br>
           <div class="card border-info" style="width: 24rem;">
           <img class="card-img-top" src="{{ URL::to('/assets/sldr_img/dogs2.jpg') }}" alt="Card image cap">
            <div class="card-body">
           <h5 class="card-title text-info">Mouth Watering Cuisines</h5>
           
          <a href="#" class="btn btn-info">More info</a>
                  </div>
              </div>
           </div>


           

            
    <div class="col">
      <br>
       <div class="card bg-info" style="width: 24rem;">
           <img class="card-img-top" src="{{ URL::to('/assets/sldr_img/dogs2.jpg') }}" alt="Card image cap">
         <div class="card-body">
           <h5 class="card-title text-light">Expert Chefs</h5>
           <p class="card-text"><p class="text-light">Its all about Art of Cooking.<br>
           Some of the expert chefs are ensuring the quality of the food per meal everyday</p>
         </p>
          <a href="#" class="btn btn-light text-info">More info</a>
          </div>
        </div>
     </div>

            

      <div class="col">
          <br>
       <div class="card border-primary" style="width: 24rem;">
           <img class="card-img-top" src="{{ URL::to('/assets/sldr_img/dogs2.jpg') }}" alt="Card image cap">
         <div class="card-body">
           <h5 class="card-title text-primary">Exquisite Parties</h5>
           
          <a href="#" class="btn btn-info">More info</a>
                  
            
        </div>
       </div>
     </div>
    </div>




<!------FeedBack Section --->

<br>
<button type="button" class="btn btn-info btn-lg btn-block"><legend>Feedback Section</legend></button>
<br>

<div class="container bg-light ">


  <form>
  <fieldset>
    
    
    <div class="form-group">
      <br>
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    
    
    
    <div class="form-group">
      <label for="exampleTextarea">Message</label>
      <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
      <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
    </div>
    <fieldset class="form-group">
      <legend>Ratings</legend>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
         Good
        </label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
         Better
        </label>
      </div>
      <div class="form-check ">
      <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3">
         Best
        </label>
      </div>
    </fieldset>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
<br>

  </div>








   @endsection