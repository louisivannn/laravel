<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
            background-color: #660000; /* Dark red background */
            color: #fff; /* White text for better contrast */
        }
        .navbar {
            background-color: #660000; /* Dark red navbar */
        }
        .navbar-brand, .nav-link {
            color: #fff !important; /* White text for navbar links */
        }
        .sneaker-card {
            margin-bottom: 30px;
            transition: transform 0.3s; /* Smooth transition for hover effect */
            background-color: #fff; /* White background for sneaker cards */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        .sneaker-card img {
            width: 100%;
            height: auto;
            border-radius: 8px 8px 0 0; /* Rounded top corners */
        }
        .sneaker-card h4 {
            margin-top: 10px;
            font-size: 1.2rem;
            color: #333; /* Dark text for sneaker titles */
        }
        .sneaker-card p {
            font-size: 1rem;
            color: #8B0000; /* Maroon color for price */
            font-weight: bold; /* Bold price text */
        }
        .sneaker-card:hover {
            transform: translateY(-10px); /* Lift effect on hover */
        }
        footer {
            background-color: #660000; /* Dark red footer */
            color: white; /* White text for footer */
            text-align: center;
            padding: 20px 0;
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
                <li class="nav-item active">
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

    <!-- Shop -->
    <div class="container my-5">
        <div class="row">
            <!-- Example Sneaker 1 -->
            <div class="col-md-4">
                <div class="card sneaker-card">
                    <img src="https://via.placeholder.com/300" alt="Sneaker 1">
                    <div class="card-body">
                        <h4>Air Sunder Max 'Canyon Gold</h4>
                        <p>$99.99</p>
                    </div>
                </div>
            </div>

            <!-- Example Sneaker 2 -->
            <div class="col-md-4">
                <div class="card sneaker-card">
                    <img src="https://via.placeholder.com/300" alt="Sneaker 2">
                    <div class="card-body">
                        <h4>Kobe 9 Elite Protro 'Halo'</h4>
                        <p>$129.99</p>
                    </div>
                </div>
            </div>

            <!-- Example Sneaker 3 -->
            <div class="col-md-4">
                <div class="card sneaker-card">
                    <img src="https://via.placeholder.com/300" alt="Sneaker 3">
                    <div class="card-body">
                        <h4>Air Jordan 4 Retro 'White Thunder'</h4>
                        <p>$149.99</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card sneaker-card">
                    <img src="https://via.placeholder.com/300" alt="Sneaker 4">
                    <div class="card-body">
                        <h4>Nike Air Max 270</h4>
                        <p>$119.99</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card sneaker-card">
                    <img src="https://via.placeholder.com/300" alt="Sneaker 5">
                    <div class="card-body">
                        <h4>Adidas UltraBoost 21</h4>
                        <p>$179.99</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card sneaker-card">
                    <img src="https://via.placeholder.com/300" alt="Sneaker 6">
                    <div class="card-body">
                        <h4>Puma RS-X</h4>
                        <p>$109.99</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Sneaks App. All rights reserved.</p>
    </footer>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
