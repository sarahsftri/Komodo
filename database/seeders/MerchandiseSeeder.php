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
    }
}
