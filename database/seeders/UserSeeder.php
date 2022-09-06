<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                    'name' => 'Developer',
                    'email' => 'dev@example.com',
                    'password' => Hash::make('12345678'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    ]);
    }
}
