<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $obj= new Employee();
         $obj->id=1;
         $obj->photo="xxxx";
         $obj->first_name="xxxx";
         $obj->second_name="xxxx";
         $obj->thrid_name="xxxx";
         $obj->first_last_name="xxxx";
         $obj->second_last_name="xxxx";
         $obj->thrid_last_name="xxxx";
         $obj->birthday='2023-01-01';
         $obj->start='2023-01-01';
         $obj->end='2023-01-01';
         $obj->active=1;
         $obj->comments="xxxx";
         $obj->save();
    }
}
