<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('job_types')->insert([
            'id' => '1',
            'name' => 'Jefatura I',
            'salary'=>0.00,
            'account'=>'1',
            'amount'=>'1',
        ]);

        DB::table('job_types')->insert([
            'id' => '2',
            'name' => 'Coordinador I',
            'salary'=>0.00,
            'account'=>'2',
            'amount'=>'1',
        ]);

        DB::table('job_types')->insert([
            'id' => '3',
            'name' => 'Técnico I',
            'salary'=>0.00,
            'account'=>'3',
            'amount'=>'1',
        ]);
    }
}
