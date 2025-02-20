<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void{
    $faker =Faker::create();
    
        for($i =0 ; $i <200;$i++)
        {
        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => $faker->password,
        ]);
        }  }
    
}
