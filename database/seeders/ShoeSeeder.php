<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shoe;

class ShoeSeeder extends Seeder
{
    public function run()
    {
        Shoe::truncate();

        Shoe::create([
            'name' => 'Air Max 90',
            'brand' => 'Nike',
            'size' => 10,
            'color' => 'Black/White',
            'price' => 120.00,
            'stock_quantity' => 15,
            'description' => 'Classic design with a mix of leather and mesh',
        ]);

        Shoe::create([
            'name' => 'UltraBoost 21',
            'brand' => 'Adidas',
            'size' => 9,
            'color' => 'Blue',
            'price' => 180.00,
            'stock_quantity' => 20,
            'description' => 'High-performance running shoes with Boost sole',
        ]);

        Shoe::create([
            'name' => 'Gel-Kayano 27',
            'brand' => 'Asics',
            'size' => 11,
            'color' => 'Grey/Orange',
            'price' => 160.00,
            'stock_quantity' => 10,
            'description' => 'Stability shoes with advanced cushioning',
        ]);

        Shoe::create([
            'name' => 'Chuck Taylor All Star',
            'brand' => 'Converse',
            'size' => 8,
            'color' => 'Red',
            'price' => 65.00,
            'stock_quantity' => 25,
            'description' => 'Iconic canvas sneakers with rubber sole',
        ]);

        Shoe::create([
            'name' => 'Classic Slip-On',
            'brand' => 'Vans',
            'size' => 9.5,
            'color' => 'Checkered',
            'price' => 50.00,
            'stock_quantity' => 30,
            'description' => 'Easy-to-wear slip-on with a signature pattern',
        ]);

        Shoe::create([
            'name' => 'Fresh Foam 1080v11',
            'brand' => 'New Balance',
            'size' => 10.5,
            'color' => 'White/Black',
            'price' => 150.00,
            'stock_quantity' => 12,
            'description' => 'Lightweight and cushioned for long-distance runs',
        ]);

        Shoe::create([
            'name' => 'Air Jordan 1',
            'brand' => 'Nike',
            'size' => 12,
            'color' => 'Red/Black',
            'price' => 200.00,
            'stock_quantity' => 8,
            'description' => 'Retro basketball shoes with premium leather',
        ]);

        Shoe::create([
            'name' => 'NMD_R1',
            'brand' => 'Adidas',
            'size' => 8.5,
            'color' => 'Black',
            'price' => 140.00,
            'stock_quantity' => 18,
            'description' => 'Streetwear-inspired with a flexible knit upper',
        ]);

        Shoe::create([
            'name' => 'ZoomX Vaporfly NEXT%',
            'brand' => 'Nike',
            'size' => 10.5,
            'color' => 'Pink',
            'price' => 250.00,
            'stock_quantity' => 5,
            'description' => 'Elite racing shoes designed for speed',
        ]);

        Shoe::create([
            'name' => 'Old Skool',
            'brand' => 'Vans',
            'size' => 11,
            'color' => 'Black/White',
            'price' => 60.00,
            'stock_quantity' => 22,
            'description' => 'Skate shoes with durable suede and canvas',
        ]);
        Shoe::create([
            'name' => 'Air Force 1',
            'brand' => 'Nike',
            'size' => 10,
            'color' => 'White',
            'price' => 90.00,
            'stock_quantity' => 20,
            'description' => 'Classic basketball shoes with a timeless design',
        ]);
        
        Shoe::create([
            'name' => 'Huarache',
            'brand' => 'Nike',
            'size' => 9,
            'color' => 'Black/White',
            'price' => 110.00,
            'stock_quantity' => 15,
            'description' => 'Lightweight and breathable for comfort',
        ]);
        
        Shoe::create([
            'name' => 'Revolution 5',
            'brand' => 'Nike',
            'size' => 10,
            'color' => 'Grey',
            'price' => 70.00,
            'stock_quantity' => 25,
            'description' => 'Running shoes with a soft foam midsole',
        ]);
        
        Shoe::create([
            'name' => 'Equinox',
            'brand' => 'Puma',
            'size' => 11,
            'color' => 'Blue',
            'price' => 85.00,
            'stock_quantity' => 10,
            'description' => 'Stylish sneakers perfect for everyday wear',
        ]);
        
        Shoe::create([
            'name' => 'The Classic',
            'brand' => 'New Balance',
            'size' => 10,
            'color' => 'Black',
            'price' => 75.00,
            'stock_quantity' => 12,
            'description' => 'Comfortable and classic sneakers for casual use',
        ]);
        
        Shoe::create([
            'name' => 'Dunk Low',
            'brand' => 'Nike',
            'size' => 8.5,
            'color' => 'Orange/White',
            'price' => 120.00,
            'stock_quantity' => 15,
            'description' => 'Iconic low-top sneakers with a retro vibe',
        ]);
        
        Shoe::create([
            'name' => 'RS-X3',
            'brand' => 'Puma',
            'size' => 9,
            'color' => 'Neon',
            'price' => 100.00,
            'stock_quantity' => 18,
            'description' => 'Chunky sneakers with bold colorways',
        ]);
        
        Shoe::create([
            'name' => 'Speedcross 5',
            'brand' => 'Salomon',
            'size' => 10,
            'color' => 'Black/Red',
            'price' => 130.00,
            'stock_quantity' => 10,
            'description' => 'Trail running shoes for rugged terrain',
        ]);
        
        Shoe::create([
            'name' => 'Classic Leather',
            'brand' => 'Reebok',
            'size' => 11,
            'color' => 'White',
            'price' => 65.00,
            'stock_quantity' => 22,
            'description' => 'Timeless leather sneakers that go with everything',
        ]);
        
    }
}
