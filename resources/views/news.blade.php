<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #660000;
            font-family: Arial, sans-serif;
        }
        .navbar {
            margin-bottom: 20px;
            color: white;
            background-color: #660000;
        }
        .navbar .nav-link, .navbar .navbar-brand {
            color: white !important;
        }
        .navbar .nav-link:hover {
            color: #ccc !important;
        }
        /* Card Styling */
        .news-article {
            margin-bottom: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .news-article img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .news-article-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .news-article h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .news-article p {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #555;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            flex-grow: 1;
        }
        .news-article a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            margin-top: auto;
        }
        .news-article a:hover {
            text-decoration: underline;
        }
        
        .news-card-container {
            display: flex;
            flex-wrap: wrap;
        }
        .news-card-container .col-md-4 {
            display: flex;
        }
  
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="#">Sneaks App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/shop">Shop</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item ">
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

    <!-- News Container -->
    <div class="container mt-5 pt-4">
        <div class="row news-card-container">
            <!-- News Article 1 -->
            <div class="col-md-4 d-flex">
                <div class="news-article">
                    <img src="{{asset('images/max.webp')}}" alt="Nike Air Max">
                    <div class="news-article-content">
                        <h2>The Nike Air Max 2024 Release</h2>
                        <p>The new Nike Air Max 2024 has been officially released and it's already creating a buzz in the sneaker world...</p>
                        <a href="#" data-toggle="modal" data-target="#newsModal1">Read more</a>
                    </div>
                </div>
            </div>
            <!-- News Article 2 -->
            <div class="col-md-4 d-flex">
                <div class="news-article">
                    <img src="{{asset('images/boost.webp')}}" alt="Adidas Ultra Boost">
                    <div class="news-article-content">
                        <h2>Adidas Ultra Boost: A Sneaker Revolution</h2>
                        <p>The Adidas Ultra Boost continues to dominate the market with its unparalleled comfort and performance...</p>
                        <a href="#" data-toggle="modal" data-target="#newsModal2">Read more</a>
                    </div>
                </div>
            </div>
            <!-- News Article 3 -->
            <div class="col-md-4 d-flex">
                <div class="news-article">
                    <img src="{{asset('images/chuck.webp')}}" alt="Converse Chuck Taylor">
                    <div class="news-article-content">
                        <h2>Converse Chuck Taylor: The Timeless Classic</h2>
                        <p>Converse Chuck Taylor sneakers remain a timeless classic in the world of fashion...</p>
                        <a href="#" data-toggle="modal" data-target="#newsModal3">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 1 -->
    <div class="modal fade" id="newsModal1" tabindex="-1" aria-labelledby="newsModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newsModalLabel1">Nike Air Max 2024 Release</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>The new Nike Air Max 2024 has been officially released and it's already creating a buzz in the sneaker world. With innovative cushioning technology and sleek design, this release is set to be a game-changer for sneaker enthusiasts.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="newsModal2" tabindex="-1" aria-labelledby="newsModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newsModalLabel2">Adidas Ultra Boost</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>The Adidas Ultra Boost continues to dominate the market with its unparalleled comfort and performance. The latest version includes enhancements that promise an even more comfortable and stylish experience.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="newsModal3" tabindex="-1" aria-labelledby="newsModalLabel3" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newsModalLabel3">Converse Chuck Taylor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Converse Chuck Taylor sneakers remain a timeless classic in the world of fashion. From streetwear to high fashion, Chuck Taylors have become a staple in many wardrobes, transcending generations.</p>
                </div>
            </div>
        </div>
    </div>

  

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
