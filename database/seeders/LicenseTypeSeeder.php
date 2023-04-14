<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LicenseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('license_types')->insert([
            'id' => '1',
            'name' => 'Personal',
            'created_at'=>Carbon::now()
        ]);
        DB::table('license_types')->insert([
            'id' => '2',
            'name' => 'Enfermedad',
            'created_at'=>Carbon::now()
        ]);
        DB::table('license_types')->insert([
            'id' => '3',
            'name' => 'Obligaciónes Familiares',
            'created_at'=>Carbon::now()
        ]);
        DB::table('license_types')->insert([
            'id' => '4',
            'name' => 'Prestaciónes ISSS',
            'created_at'=>Carbon::now()
        ]);
        DB::table('license_types')->insert([
            'id' => '5',
            'name' => 'Incapacidad',
            'created_at'=>Carbon::now()
        ]);

    }
}
