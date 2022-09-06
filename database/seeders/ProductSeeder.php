<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'description' => 'test description',
            'manufacturer' => 'walmart',
            'category' => 'test',
            'model' => 'tST0001111',
            'upc' => '1234556677',
            'msrp' => '1234.00',
            'created_at' => Carbon::now()
        ]);
    }
}
