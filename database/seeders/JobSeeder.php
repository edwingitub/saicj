<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jobs')->insert([
            'id' => '1',
            'name' => 'Vacante',
            'employee_id'=>'1',
            'office_id'=>'1',
            'subaccount'=>'1'
        ]);

        DB::table('jobs')->insert([
            'id' => '2',
            'name' => 'Vacante',
            'employee_id'=>'2',
            'office_id'=>'2',
            'subaccount'=>'1'
        ]);

        DB::table('jobs')->insert([
            'id' => '3',
            'name' => 'Vacante',
            'employee_id'=>'3',
            'office_id'=>'3',
            'subaccount'=>'1'
        ]);
    }
}
