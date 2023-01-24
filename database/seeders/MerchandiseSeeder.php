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
        
        DB:: table('merchandises')->insert([
            'id' => 6,
            'name' => "Komodo Coffee Mug",
            'price' => 60000,
            'detail' => "Holds 11 oz. (325 ml), Dishwasher-safe ceramic",
            'stock' => 300,
            'image' => "https://rlv.zcache.com/realistic_komodo_dragon_monitor_lizard_coffee_mug-r2f0eeaf6be724aaab22a0aba689e6d7f_x7jg5_8byvr_736.webp"
        ]);
        
        DB:: table('merchandises')->insert([
            'id' => 7,
            'name' => "Komodo Throw Pillow",
            'price' => 50000,
            'detail' => "Full-color double-sided design printed, Machine washable",
            'stock' => 200,
            'image' => "https://res.cloudinary.com/teepublic/image/private/s--4smZA6fs--/c_crop,x_10,y_10/c_fit,h_788/c_crop,g_north_west,h_1051,w_1051,x_-214,y_-129/l_upload:v1507037314:production:blanks:gbajnunp66ec7xftnpq1/fl_layer_apply,g_north_west,x_-319,y_-228/b_rgb:ffffff/c_limit,f_auto,h_630,q_90,w_630/v1668282209/production/designs/36467378_0.jpg"
        ]);
        
        DB:: table('merchandises')->insert([
            'id' => 8,
            'name' => "Komodo Phone Case",
            'price' => 70000,
            'detail' => "Thickness 1/16 inch (1.6mm), Available for iPhone 7 Plus / 8 Plus",
            'stock' => 300,
            'image' => "https://m.media-amazon.com/images/I/41FZFxUwsdS._AC_SY580_.jpg"
        ]);
    }
}
