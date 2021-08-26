<?php

namespace Database\Seeders;

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
        DB::table('users')->truncate();
        DB::table('users')->insert(['id'=>'1','name'=>'maria','email'=>'maria@empresa.com','password'=>'maria123','personal_id'=>'134']);
        DB::table('users')->insert(['id'=>'2','name'=>'jose','email'=>'jose@empresa.com','password'=>'josea123','personal_id'=>'135']);
        DB::table('users')->insert(['id'=>'3','name'=>'jaime','email'=>'jaime@empresa.com','password'=>'jaime123','personal_id'=>'133']);
        DB::table('users')->insert(['id'=>'4','name'=>'luis','email'=>'luis@empresa.com','password'=>'luis123','personal_id'=>'136']);
    }
}
