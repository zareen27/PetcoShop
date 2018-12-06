<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>User Profile</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        
    </head>
    <body>
        <header>
            <div class="top-nav container">
                <div class="logo"></div>
                <ul>
                    <li><a href="/shop">Shop</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="/cart">Cart</a></li>
                    <li><a href="/">Log Out</a></li>
                </ul>
            </div> <!-- end top-nav -->

            <div class="hero container">
                <div class="hero-copy">
                    <h1>PetCo Shop Online</h1>
                    <p> One stop preferance for bringing home to your new pets.</p><br>
                    <p> A sister concern of PetCo Chain.</p>
                    <div class="hero-buttons">
                        <a href="#" class="button button-white">Button 1</a>
                        <a href="#" class="button button-white">Button 2</a>
                    </div>
                </div> <!-- end hero-copy -->

                
            </div> <!-- end hero -->
        </header>

        <div class="featured-section">
            <div class="container">
                <h1 class="text-center">Know the Breeds</h1>

                <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid earum fugiat debitis nam, illum vero, maiores odio exercitationem quaerat. Impedit iure fugit veritatis cumque quo provident doloremque est itaque.</p>

                <div class="text-center button-container">
                    <a href="#" class="button">Featured</a>
                    <a href="#" class="button">On Sale</a>
                </div>


                <div class="products text-center">
                    
                    
                    <div class="product">
                        <a href="#"><img src="{{ URL::to('/img/bike_2.jpg') }}" alt="product"></a>
                        <a href="#"><div class="product-name">Bengal Cat</div></a>
                        <div class="product-price">$39.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="{{ URL::to('/img/bike_4.jpg') }}" alt="product"></a>
                        <a href="#"><div class="product-name">Cute Mini</div></a>
                        <div class="product-price">$29.99</div>
                    </div>
                       @foreach($products as $product)
                       <div class="product">
                        <a href="#"><img src="{{ URL::to('/img/bike_1.jpg') }}" alt="product"></a>
                        <a href="#"><div class="product-name">{{$product->name}}</div></a>
                        <div class="product-price">{{$product->price}}</div>
                    </div>
                    @endforeach
                    <div class="product">
                        <a href="#"><img src="{{ URL::to('/img/plane_2.jpg') }}" alt="product"></a>
                        <a href="#"><div class="product-name">Doggy Dusty</div></a>
                        <div class="product-price">$49.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="{{ URL::to('/img/plane_3.jpg') }}" alt="product"></a>
                        <a href="#"><div class="product-name">Chow chow</div></a>
                        <div class="product-price">$39.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="{{ URL::to('/img/plane_4.jpg') }}" alt="product"></a>
                        <a href="#"><div class="product-name">American Eskimo</div></a>
                        <div class="product-price">$29.99</div>
                    </div>

                </div> <!-- end products -->

                <div class="text-center button-container">
                    <a href="{{route('shop.index')}}" class="button">View more products</a>
                </div>

            </div> <!-- end container -->

        </div> <!-- end featured-section -->

        <div class="blog-section">
            <div class="container">
                <h1 class="text-center">From Our Blog</h1>

                <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sed accusantium maxime dolore cum provident itaque ea, a architecto alias quod reiciendis ex ullam id, soluta deleniti eaque neque perferendis.</p>

                <div class="blog-posts">
                    <div class="blog-post" id="blog1">
                        <a href="#"><img src="{{ URL::to('/img/plane_spa1.jpg') }}" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Dog Spa and Care </h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                    </div>
                    <div class="blog-post" id="blog2">
                        <a href="#"><img src="{{ URL::to('/img/food.jpg') }}" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Food for Pets</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                    </div>
                    <div class="blog-post" id="blog3">
                        <a href="#"><img src="{{ URL::to('/img/bike_spa.jpg') }}" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Cat Spa and Parlour</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                    </div>
                </div> <!-- end blog-posts -->
            </div> <!-- end container -->
        </div> <!-- end blog-section -->

        <footer>
            <div class="footer-content container">
                <div class="made-with">Made with <i class="fa fa-heart"></i> by Zareen Tasnim</div>
                <ul>
                    <li>Follow Me:</li>
                    <li><a href="#"><i class="fa fa-globe"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div> <!-- end footer-content -->
        </footer>

    </body>
</html>