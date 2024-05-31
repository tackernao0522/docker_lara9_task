<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Takaki',
                'email' => 'takaki55730317@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
            ],
            [
                'name' => 'Naomi',
                'email' => 'takaki_5573031@yahoo.co.jp',
                'password' => Hash::make('password123'),
                'created_at' => now(),
            ],
        ]);
    }
}