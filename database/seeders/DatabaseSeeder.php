<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('users')->insert([
            'name' => "User",
            'email' => 'user@gmail.com',
            'gender' =>"Male",
            'img_path' => "1653852000-spider.jpg",
            'password' => \Hash::make('user1234'),
        ]);

        \DB::table('users')->insert([
            'name' => "Tony",
            'email' => 'tony@gmail.com',
            'gender' =>"Male",
            'img_path' => "1653728113-Tony.jpg",
            'password' => \Hash::make('123456'),
        ]);

        \DB::table('users')->insert([
            'name' => "Captain",
            'email' => 'captain@gmail.com',
            'gender' =>"Male",
            'img_path' => "1653852078-captain.jpg",
            'password' => \Hash::make('123456'),
        ]);

        \DB::table('users')->insert([
            'name' => "Thor",
            'email' => 'thor@gmail.com',
            'gender' =>"Male",
            'img_path' => "1653730558-thor.jpg",
            'password' => \Hash::make('123456'),
        ]);

    }
}


