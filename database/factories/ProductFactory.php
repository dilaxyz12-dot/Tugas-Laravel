<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $products = [
            ['name' => 'Laptop Asus VivoBook', 'price' => 7500000],
            ['name' => 'Mouse Logitech Wireless', 'price' => 150000],
            ['name' => 'Keyboard Mechanical RGB', 'price' => 500000],
            ['name' => 'Monitor Samsung 24 Inch', 'price' => 2000000],
            ['name' => 'Printer Epson L3210', 'price' => 1800000],
            ['name' => 'Headset Gaming Rexus', 'price' => 300000],
            ['name' => 'Harddisk External 1TB', 'price' => 900000],
            ['name' => 'Webcam HD 1080p', 'price' => 250000],
            ['name' => 'Speaker Bluetooth JBL', 'price' => 400000],
        ];

        $product = fake()->randomElement($products);

        return [
            'name' => $product['name'],
            'price' => $product['price'],
            'description' => fake()->sentence(),
        ];
    }
}