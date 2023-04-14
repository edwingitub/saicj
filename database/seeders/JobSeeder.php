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
            'name' => 'Pendiente',
            'job_type_id'=>'1',
            'employee_id'=>'1',
            'office_id'=>'1',
            'subaccount'=>'1',
            'boss'=>'1',
        ]);

        DB::table('jobs')->insert([
            'id' => '2',
            'name' => 'Pendiente',
            'job_type_id'=>'2',
            'employee_id'=>'2',
            'office_id'=>'2',
            'subaccount'=>'1',
            'boss'=>'1'
        ]);

        DB::table('jobs')->insert([
            'id' => '3',
            'name' => 'Pendiente',
            'job_type_id'=>'3',
            'employee_id'=>'3',
            'office_id'=>'3',
            'subaccount'=>'1',
            'boss'=>'1'
        ]);
    }
}
