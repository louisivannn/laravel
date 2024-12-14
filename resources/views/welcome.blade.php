<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneaks App</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
            background-color: #660000; /* Dark red background */
          
            color: black; /* White text for better contrast */
        }
        .navbar {
            background-color: #660000;
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
        .carousel {
            height: 70vh; 
        }
        .carousel-inner {
            height: 100%;
        }
        .carousel-item {
          
            height: 100%; 
           
            align-items: center; 
            justify-content: center; 
            background-color: #fff;  
        }
        .carousel-item img {
            max-height: 100%; 
            max-width: 100%; 
            object-fit: contain;
            display: block; 
            margin: auto; 
        }
        .carousel-caption {
            position: absolute;
            bottom: 40px; 
            left: 50%;
            transform: translateX(-50%); 
            text-align: center; 
            color: #fff; 
            background: rgba(0, 0, 0, 0.7); 
            padding: 15px 20px; 
            border-radius: 5px; 
        }
        .btn-buy-now {
            background-color: green; 
            color: #fff; 
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            text-transform: uppercase;
            cursor: pointer;
        }
        .btn-buy-now:hover {
            background-color: black; 
        }
        .section-title {
            text-align: center;
            margin: 40px 0;
            font-weight: bold;
            color: #fff;
        }
        .testimonial {
            background: #e9ecef;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            margin: 20px 0;
            height: 150px; 
        }
        footer {
            background-color: #660000;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
     
        .product-card {
            height: 400px; 
        }
        .product-card img {
            height: 200px; 
            object-fit: cover; 
        }
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between; 
            height: 200px; 
        }
       
    </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="#">Sneaks App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/shop">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/news">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/feedback">Feedback</a>
                </li>
            </ul>

            @if (Route::has('login'))
                <ul class="navbar-nav ml-auto">
                    @auth
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            @endif
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide mt-5">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/jordan.webp')}}" alt="Sneakers">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Air Jordan 4 Retro 'White Thunder'</h5>
                    <p>Air Jordan / sneakers / Air Jordan 4</p>
                    <a href="#" class="btn btn-buy-now">Buy Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/nike.webp')}}" alt="Dref">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Air Sunder Max 'Canyon Gold'</h5>
                    <p>Nike / sneakers / Air Sunder Max</p>
                    <a href="#" class="btn btn-buy-now">Buy Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/kobe.webp')}}" alt="Evander">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Kobe 9 Elite Protro 'Halo'</h5>
                    <p>Nike / sneakers / Kobe 9</p>
                    <a href="#" class="btn btn-buy-now">Buy Now</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Featured Products Section -->
    <div class="container my-5">
        <h2 class="section-title">Featured Products</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="{{asset('images/jordan.webp')}}" class="card-img-top" alt="Air Jordan 4">
                    <div class="card-body">
                        <h5 class="card-title">Air Jordan 4 Retro</h5>
                        <p class="card-text">Price: $199.99</p>
                        <a href="#" class="btn btn-buy-now">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="{{asset('images/nike.webp')}}" class="card-img-top" alt="Air Sunder Max">
                    <div class="card-body">
                        <h5 class="card-title">Air Sunder Max</h5>
                        <p class="card-text">Price: $149.99</p>
                        <a href="#" class="btn btn-buy-now">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="{{asset('images/kobe.webp')}}" class="card-img-top" alt="Kobe 9 Elite">
                    <div class="card-body">
                        <h5 class="card-title">Kobe 9 Elite Protro</h5>
                        <p class="card-text">Price: $249.99</p>
                        <a href="#" class="btn btn-buy-now">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="container my-5">
        <h2 class="section-title">What Our Customers Say</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial">
                    <p>"Great quality and excellent service!"</p>
                    <h6>- Miguel Calimlim </h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial">
                    <p>"Fast shipping and perfect fit. Highly recommend!"</p>
                    <h6>- Jan Drefner Santos</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial">
                    <p>"Best sneakers I've ever bought. Will be back for more!"</p>
                    <h6>- Lebron James</h6>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter Signup -->
    <div class="container my-5">
        <h2 class="section-title">Subscribe to Our Newsletter</h2>
        <form class="form-inline justify-content-center">
            <input class="form-control mr-2" type="email" placeholder="Enter your email" required>
            <button class="btn btn-buy-now" type="submit">Subscribe</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Sneaks App. All Rights Reserved.</p>
    </footer>

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
