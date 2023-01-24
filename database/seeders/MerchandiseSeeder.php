<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MerchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merchandises')->insert([
            'id' => 1,
            'name' => "Komodo Plush",
            'price' => 50000,
            'detail' => "This is a huggable komodo plush. DISCLAIMER: real life komodos are not huggable, unlike this plush!",
            'stock' => 500,
            'image' => "https://safariwonders.com/wp-content/uploads/2016/08/50.-komodo-32_dsc7679-1471577190-320x320.jpg"
        ]);

        DB:: table('merchandises')->insert([
            'id' => 2,
            'name' => "Komodo T-Shirt",
            'price' => 60000,
            'detail' => "Cotton Combed 20s, Size - Unisex: L ( LD 50, P 71 )",
            'stock' => 300,
            'image' => "https://id-live-01.slatic.net/p/9fdc7f8a0cb52b59966486b711a954bc.jpg"
        ]);
        
        DB:: table('merchandises')->insert([
            'id' => 3,
            'name' => "Komodo Sticker",
            'price' => 30000,
            'detail' => "Super durable and water-resistant",
            'stock' => 200,
            'image' => "https://ih1.redbubble.net/image.1669427998.4622/st,small,507x507-pad,600x600,f8f8f8.jpg"
        ]);
        
        DB:: table('merchandises')->insert([
            'id' => 4,
            'name' => "I Love Komodo Sticker",
            'price' => 30000,
            'detail' => "Super durable and water-resistant",
            'stock' => 400,
            'image' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSasEYnv8hLLMggAleOplaV9GDlVEV1i3bT8a-6bhCCWDiTHSGEcyu27rVw8UCiW-lf38o&usqp=CAU"
        ]);
        
        DB:: table('merchandises')->insert([
            'id' => 5,
            'name' => "Komodo Post Card",
            'price' => 20000,
            'detail' => "Unique artwork, Digitally printed cards on heavyweight stock",
            'stock' => 150,
            'image' => "https://ih1.redbubble.net/image.651703652.5608/paperpc,750x,w,f8f8f8-pad,1000x1000,f8f8f8.u2.jpg"
        ]);
    }
}
