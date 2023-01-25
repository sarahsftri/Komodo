<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'image' => "merch/komodo-plush.jpg"
        ]);

        DB:: table('merchandises')->insert([
            'id' => 2,
            'name' => "Komodo T-Shirt",
            'price' => 60000,
            'detail' => "Cotton Combed 20s, Size - Unisex: L ( LD 50, P 71 )",
            'stock' => 300,
            'image' => "merch/komodo-tshirt.jpg",
        ]);

        DB:: table('merchandises')->insert([
            'id' => 3,
            'name' => "Komodo Sticker",
            'price' => 30000,
            'detail' => "Super durable and water-resistant",
            'stock' => 200,
            'image' => "merch/komodo-sticker.jpg"
        ]);

        DB:: table('merchandises')->insert([
            'id' => 4,
            'name' => "I Love Komodo Sticker",
            'price' => 30000,
            'detail' => "Super durable and water-resistant",
            'stock' => 400,
            'image' => "merch/i-love-komodo.jpeg"
        ]);

        DB:: table('merchandises')->insert([
            'id' => 5,
            'name' => "Komodo Post Card",
            'price' => 20000,
            'detail' => "Unique artwork, Digitally printed cards on heavyweight stock",
            'stock' => 150,
            'image' => "merch/komodo-post-card.jpg"
        ]);

        DB:: table('merchandises')->insert([
            'id' => 6,
            'name' => "Komodo Coffee Mug",
            'price' => 60000,
            'detail' => "Holds 11 oz. (325 ml), Dishwasher-safe ceramic",
            'stock' => 300,
            'image' => "merch/komodo-mug.png"
        ]);

        DB:: table('merchandises')->insert([
            'id' => 7,
            'name' => "Komodo Throw Pillow",
            'price' => 50000,
            'detail' => "Full-color double-sided design printed, Machine washable",
            'stock' => 200,
            'image' => "merch/komodo-pillow.png"
        ]);

        DB:: table('merchandises')->insert([
            'id' => 8,
            'name' => "Komodo Phone Case",
            'price' => 70000,
            'detail' => "Thickness 1/16 inch (1.6mm), Available for iPhone 7 Plus / 8 Plus",
            'stock' => 300,
            'image' => "merch/komodo-phone-case.jpg"
        ]);

        DB:: table('merchandises')->insert([
            'id' => 9,
            'name' => "Komodo Drawstring Bag",
            'price' => 80000,
            'detail' => "Made from 100% polyester woven fabric with high-quality metal grommets",
            'stock' => 500,
            'image' => "merch/komodo-drawstring-bag.jpg"
        ]);

        DB:: table('merchandises')->insert([
            'id' => 10,
            'name' => "Komodo Spiral Notebook",
            'price' => 30000,
            'detail' => "120 pages, Cover 350gsm, paper stock 90gsm",
            'stock' => 200,
            'image' => "merch/komodo-spiral-notebook.jpg"
        ]);
    }
}
