<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'name' => 'Edwin Monterroza',
            'email' => 'edwin.monterroza@icj.gob.sv',
            'password' => Hash::make('12345678'),
        ]);

       
       // User::factory() ->count(50)->create();
        
    }
}