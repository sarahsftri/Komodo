<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'email' => "admin@savekomodo.com",
            'password' => bcrypt("adminpunyapassword"),
            'role' => "admin"
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'email' => "member@gmail.com",
            'password' => "passwordmember",
        ]);
    }
}
