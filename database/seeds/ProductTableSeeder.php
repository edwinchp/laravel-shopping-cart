<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/81iqZ2HHD-L.jpg',
            'title' => 'Happy potter and the crack stone',
            'description' => 'Happy potter finds out he can smoke the crack stone and come out with new adventures.',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/81iqZ2HHD-L.jpg',
            'title' => 'Happy potter and the crack stone',
            'description' => 'Happy potter finds out he can smoke the crack stone and come out with new adventures.',
            'price' => 20
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/81iqZ2HHD-L.jpg',
            'title' => 'Happy potter and the crack stone',
            'description' => 'Happy potter finds out he can smoke the crack stone and come out with new adventures.',
            'price' => 30
        ]);
        $product->save();


    }
}
