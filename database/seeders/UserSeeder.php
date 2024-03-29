<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Administrator',
            'username'=>'admin',
            'role'=>'admin',
            'email'=>'admin@gmail.com',
            'remember_token'=>Str::random(40),
            'email_verified_at'=>now(),
            'password'=>bcrypt('rahasia')
        ]);
    }
}
