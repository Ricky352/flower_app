<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['first_name' => "Rose", 'last_name' => "Raaa", 'city' => 'differdange', 'postal_code' => 4451, 'email' => 'ricky@gmail.com', 'password' => '12345', 'remember_token' => 123],
            ['first_name' => "Rose", 'last_name' => "Raaa", 'city' => 'differdange', 'postal_code' => 4451, 'email' => 'rick@gmail.com', 'password' => '12345', 'remember_token' => 123],
            ['first_name' => "Rose", 'last_name' => "Raaa", 'city' => 'differdange', 'postal_code' => 4451, 'email' => 'riy@gmail.com', 'password' => '12345', 'remember_token' => 123],
            ['first_name' => "Rose", 'last_name' => "Raaa", 'city' => 'differdange', 'postal_code' => 4451, 'email' => 'rcky@gmail.com', 'password' => '12345', 'remember_token' => 123],
            ['first_name' => "Rose", 'last_name' => "Raaa", 'city' => 'differdange', 'postal_code' => 4451, 'email' => 'icky@gmail.com', 'password' => '12345', 'remember_token' => 123],
            ['first_name' => "Rose", 'last_name' => "Raaa", 'city' => 'differdange', 'postal_code' => 4451, 'email' => 'riky@gmail.com', 'password' => '12345', 'remember_token' => 123],
        ]);
    }
}