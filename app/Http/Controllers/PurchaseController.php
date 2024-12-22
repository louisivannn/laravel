<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function showPurchasePage(Request $request)
{
    $productName = $request->query('product');
    $price = $request->query('price');
    $image = $request->query('image');

    if (!$productName || !$price || !$image) {
        abort(404, 'Product information not available');
    }

    return view('purchase', [
        'productName' => $productName,
        'price' => $price,
        'image' => $image, 
    ]);
}

    public function create(Request $request)
    {
        $productName = $request->query('product');
        $price = $request->query('price');
        $image = $request->query('image'); 
        return view('purchase.create', compact('productName', 'price', 'image'));
    }
}