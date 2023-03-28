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
         $obj->first_name="Edwin";
         $obj->second_name="Adonay";
         $obj->thrid_name="";
         $obj->first_last_name="Monterroza";
         $obj->second_last_name="Portillo";
         $obj->thrid_last_name="";
         $obj->birthday='2023-01-01';
         $obj->start='2023-01-01';
         $obj->end='2023-01-01';
         $obj->email="edwin.monterroza@icj.gob.sv";
         $obj->phone="7777-7777";
         $obj->dui="00000000234";
         $obj->nr="00000000234234";
         $obj->active=1;
         $obj->comments="xxxx";
         $obj->save();

         $obj= new Employee();
         $obj->id=2;
         $obj->photo="xxxx";
         $obj->first_name="Marvin";
         $obj->second_name="Alberto";
         $obj->thrid_name="";
         $obj->first_last_name="Miranda";
         $obj->second_last_name="Guzman";
         $obj->thrid_last_name="";
         $obj->birthday='2023-01-01';
         $obj->start='2023-01-01';
         $obj->end='2023-01-01';
         $obj->email="edwin.monterroza@icj.gob.sv";
         $obj->phone="7777-7777";
         $obj->dui="00000000234";
         $obj->nr="00000000234234";
         $obj->active=1;
         $obj->comments="xxxx";
         $obj->save();

         $obj= new Employee();
         $obj->id=3;
         $obj->photo="xxxx";
         $obj->first_name="Edwin";
         $obj->second_name="Adonay";
         $obj->thrid_name="";
         $obj->first_last_name="Monterroza";
         $obj->second_last_name="Portillo";
         $obj->thrid_last_name="";
         $obj->birthday='2023-01-01';
         $obj->start='2023-01-01';
         $obj->end='2023-01-01';
         $obj->email="edwin.monterroza@icj.gob.sv";
         $obj->phone="7777-7777";
         $obj->dui="00000000234";
         $obj->nr="00000000234234";
         $obj->active=1;
         $obj->comments="xxxx";
         $obj->save();

         $obj= new Employee();
         $obj->id=4;
         $obj->photo="xxxx";
         $obj->first_name="Edwin";
         $obj->second_name="Adonay";
         $obj->thrid_name="";
         $obj->first_last_name="Monterroza";
         $obj->second_last_name="Portillo";
         $obj->thrid_last_name="";
         $obj->birthday='2023-01-01';
         $obj->start='2023-01-01';
         $obj->end='2023-01-01';
         $obj->email="edwin.monterroza@icj.gob.sv";
         $obj->phone="7777-7777";
         $obj->dui="00000000234";
         $obj->nr="00000000234234";
         $obj->active=1;
         $obj->comments="xxxx";
         $obj->save();

    }
}
