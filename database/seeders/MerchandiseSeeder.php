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
            'image' => ""
        ]);

        DB:: table('merchandises')->insert([
            'id' => 1,
            'name' => "Komodo Plush",
            'price' => 50000,
            'detail' => "This is a huggable komodo plush. DISCLAIMER: real life komodos are not huggable, unlike this plush!",
            'stock' => 500,
            'image' => ""
        ]);
    }
}
