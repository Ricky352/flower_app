<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('flowers')->insert([
            ['name' => "Rose", 'price' => 10],
            ['name' => "Dandelion", 'price' => 15],
            ['name' => "Daisy", 'price' => 20],
        ]);
    }
}
