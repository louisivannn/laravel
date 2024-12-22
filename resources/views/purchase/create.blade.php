<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
            background-color: #660000; 
            color: black; 
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #660000;
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .purchase-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        .product-info {
            text-align: center;
        }
        .product-info h2 {
            color: #660000;
        }
        .payment-form {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        .payment-form h3 {
            color: #660000;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group input {
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
        }
        .form-group input:focus {
            border-color: #660000;
            outline: none;
        }
        .btn-submit-payment {
            background-color: #28a745;
            color: #fff;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 18px;
            width: 100%;
            cursor: pointer;
        }
        .btn-submit-payment:hover {
            background-color: #218838;
        }
        .gcash-form {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        .gcash-form h3 {
            color: #660000;
            text-align: center;
            margin-bottom: 20px;
        }
        .gcash-form input {
            margin-bottom: 15px;
        }
        .gcash-btn {
            background-color: #0000ff; /* GCash Blue */
            color: white;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 18px;
            width: 100%;
            cursor: pointer;
        }
        .gcash-btn:hover {
            background-color: #0061f2;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="#">Sneaks App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
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
                <ul class="navbar-nav ms-auto">
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
    <?php
$product = request()->query('product');
$price = request()->query('price');
$image = request()->query('image');
?>
    <div class="container">
        <div class="purchase-container">
            <div class="product-info">
                <h2>Purchase Product</h2>
                <img src="{{ $image }}" alt="Product Image" class="product-image">
                <p><strong>Product Name:</strong> {{ $product ?? 'Not Available' }}</p>
                <p><strong>Price:</strong> ${{ $price ?? 'Not Available' }}</p>
            </div>
        </div>

        <div class="payment-form">
            <h3>Payment Details</h3>
            <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <label for="card-name">Cardholder Name</label>
                    <input type="text" id="card-name" name="card_name" placeholder="Enter your name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="card-number">Card Number</label>
                    <input type="text" id="card-number" name="card_number" placeholder="Enter your card number" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="expiry-date">Expiry Date (MM/YY)</label>
                    <input type="text" id="expiry-date" name="expiry_date" placeholder="MM/YY" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="CVV" class="form-control" required>
                </div>
                <button type="submit" class="btn-submit-payment">Submit Credit Card Payment</button>
            </form>
        </div>

        <div class="gcash-form">
            <h3>GCash Payment</h3>
            <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <label for="gcash-phone">GCash Phone Number</label>
                    <input type="text" id="gcash-phone" name="gcash_phone" placeholder="Enter your GCash phone number" class="form-control" required>
                </div>
                <button type="submit" class="gcash-btn">Submit GCash Payment</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
