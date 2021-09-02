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
        DB::table('users')->insert(['name'=>'maria','email'=>'maria@empresa.com','password'=>bcrypt('maria123'),'personal_id'=>'2']);
        DB::table('users')->insert(['name'=>'jose','email'=>'jose@empresa.com','password'=>bcrypt('josea123'),'personal_id'=>'3']);
        DB::table('users')->insert(['name'=>'jaime','email'=>'jaime@empresa.com','password'=>bcrypt('jaime123'),'personal_id'=>'1']);
        DB::table('users')->insert(['name'=>'luis','email'=>'luis@empresa.com','password'=>bcrypt('luis123'),'personal_id'=>'4']);
    }
}
