<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        // Create products first
        $product1 = Product::create(['name' => 'Product 1', 'price' => 50.00]);
        $product2 = Product::create(['name' => 'Product 2', 'price' => 30.00]);

        $order1 = Order::create([
            'customer_name' => 'John Doe',
            'customer_email' => 'johndoe@example.com',
            'shipping_address' => '123 Main St, Cityville',
            'total_amount' => 132.00,
            'status' => 'pending',
            'payment_status' => 'unpaid',
            'refund_status' => null,
        ]);

        $order1->products()->attach($product1->id, ['quantity' => 1, 'price' => $product1->price]);
        $order1->products()->attach($product2->id, ['quantity' => 2, 'price' => $product2->price]);

        $order2 = Order::create([
            'customer_name' => 'Jane Smith',
            'customer_email' => 'janesmith@example.com',
            'shipping_address' => '456 Oak Ave, Townsville',
            'total_amount' => 80.50,
            'status' => 'shipped',
            'payment_status' => 'paid',
            'refund_status' => null,
        ]);

        $order2->products()->attach($product1->id, ['quantity' => 1, 'price' => $product1->price]);
    }
}