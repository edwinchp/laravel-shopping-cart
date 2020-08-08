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
            'imagePath' => 'https://i.pinimg.com/originals/7b/bb/19/7bbb19a5afada8428f3921233f91be4f.jpg',
            'title' => 'Happy potter and the crack stone',
            'description' => 'Happy potter finds out he can smoke the crack stone and come out with new adventures.',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51Vjb2qJwzL._SY445_QL70_ML2_.jpg',
            'title' => 'Happy potter 2',
            'description' => 'Happy potter does not do something special on this year on Howard but it is important to read it just for the record.',
            'price' => 20
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://media.harrypotterfanzone.com/deathly-hallows-us-childrens-edition.jpg',
            'title' => 'Happy potter and the global warming',
            'description' => 'Happy potter stops eating meat in order to decrease the climate change impact.',
            'price' => 30
        ]);
        $product->save();


        $product = new \App\Product([
            'imagePath' => 'https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=399&h=532&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F6%2F2016%2F09%2F9781408855669.jpg',
            'title' => 'Happy potter and the México drug cartels',
            'description' => 'Happy potter goes to vacation to México and things get out of the control.',
            'price' => 31
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/81iqZ2HHD-L.jpg',
            'title' => 'Happy potter and the covid-19',
            'description' => 'No Harry, that is not just a simple flu, please stay on Howards.',
            'price' => 19
        ]);
        $product->save();

    }
}
