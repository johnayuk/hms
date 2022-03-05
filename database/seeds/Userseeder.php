<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role'=> 'admin',
            'name' => 'Jano Banos',
            'email' => 'admin@admin.com',
            'image'=>'128874.jpg',
            'password' => Hash::make('password'),
        ]);
    }

}