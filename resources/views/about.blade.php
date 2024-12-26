<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
            background-color: #660000; 
          
            
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background-color: #660000; 
        }

        .navbar-brand, .nav-link {
            color: #fff !important; 
        }

        .about-us {
            padding: 50px 0;
        }

        .about-us .container {
            text-align: center;
        }

        .about-us h1{
            margin-bottom: 30px;
            color: #fff;
            font-weight: bold;
        }

        .about-us h2 {
            margin-bottom: 30px;
            color: #333;
            font-weight: bold;
        }
        .about-us p {
            margin-bottom: 50px;
            font-size: 1.2rem;
            color: #fff;
        }

        .team-member {
            text-align: center;
            transition: transform 0.3s; 
        }

        .team-member:hover {
            transform: translateY(-10px);
        }

        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            display: block;
            margin: 0 auto;
            padding-bottom: 10px;
            border: 3px solid #007bff;
            transition: transform 0.3s; 
        }

        .team-member img:hover {
            transform: scale(1.1); 
        }

        .team-member h4, .team-member p {
            color: #333;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border: none;
            background-color: #ffffff;
        }

        .card-body {
            padding: 30px;
        }

        .card-title, .card-text {
            color: #333;
        }

        footer {
            background-color: #660000; 
            color: white; 
            text-align: center;
            padding: 20px 0;
        }

       
        @media (max-width: 768px) {
            .team-member {
                margin-bottom: 30px;
            }
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

    <!-- About Us -->
    <div class="container about-us">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1>About Us</h1>
                <p>We are a team of 4th-year BSIT (Bachelor of Science in Information Technology) students from the University of Santo Tomas (UST). Our goal is to provide innovative and effective solutions through our projects, leveraging our academic knowledge and practical experience.</p>
            </div>
        </div>

        <!-- Meet the Team -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h2>Meet the Team</h2>
                        <div class="row justify-content-center">
                            <div class="col-md-4 team-member">
                                <img src="{{asset('images/ej.jpg')}}" alt="Elpidio James">
                                <h4>Elpidio James</h4>
                                <p>CEO</p>
                            </div>

                            <div class="col-md-4 team-member">
                                <img src="{{asset('images/josh.jpg')}}" alt="Josh Riles">
                                <h4>Josh Riles</h4>
                                <p>Developer</p>
                            </div>

                            <div class="col-md-4 team-member">
                                <img src="{{asset('images/ez.jpg')}}" alt="Ezrah Agustin">
                                <h4>Ezrah Agustin</h4>
                                <p>Developer</p>
                            </div>

                            <div class="col-md-4 team-member">
                                <img src="{{asset('images/ivan.jpg')}}" alt="Ayban Virgo">
                                <h4>Ayban Virgo</h4>
                                <p>Marketing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Sneaks App. All rights reserved.</p>
    </footer>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
