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
            'account'=>'1',
            'amount'=>'10',
        ]);

        DB::table('job_types')->insert([
            'id' => '2',
            'name' => 'Coordinador I',
            'account'=>'2',
            'amount'=>'15',
        ]);

        DB::table('job_types')->insert([
            'id' => '3',
            'name' => 'Técnico I',
            'account'=>'3',
            'amount'=>'40',
        ]);
    }
}
