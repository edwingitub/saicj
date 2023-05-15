<?php

namespace Database\Seeders;

use App\Models\License;
use App\Models\Employee;
use App\Models\Office;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $obj_emp=Employee::find(2);
        $obj_boss=Employee::find(3);
        $obj_office=Office::find(2);
        $obj=new License();
        $obj->id=1;
        $obj->employee_id= $obj_emp->id;
        $obj->license_type_id=1;
        $obj->license_state_id=1;

        $obj->first_name=$obj_emp->first_name;
        $obj->second_name=$obj_emp->second_name;
        $obj->thrid_name=$obj_emp->thrid_name;

        $obj->first_last_name=$obj_emp->first_last_name;
        $obj->second_last_name=$obj_emp->second_last_name;
        $obj->thrid_last_name=$obj_emp->thrid_last_name;

        $obj->office=$obj_office->name;
        $obj->start=Carbon::now();
        $obj->end=Carbon::now();

        $obj->boss_first_name=$obj_boss->first_name;
        $obj->boss_second_name=$obj_boss->second_name;
        $obj->boss_thrid_name=$obj_boss->thrid_name;

        $obj->boss_first_last_name=$obj_boss->first_last_name;
        $obj->boss_second_last_name=$obj_boss->second_last_name;
        $obj->boss_thrid_last_name=$obj_boss->thrid_last_name;

        $obj->reason="enfermedad";

        $obj->save();

        $obj=new License();
        $obj->id=2;
        $obj->employee_id= $obj_emp->id;
        $obj->license_type_id=1;
        $obj->license_state_id=1;

        $obj->first_name=$obj_emp->first_name;
        $obj->second_name=$obj_emp->second_name;
        $obj->thrid_name=$obj_emp->thrid_name;

        $obj->first_last_name=$obj_emp->first_last_name;
        $obj->second_last_name=$obj_emp->second_last_name;
        $obj->thrid_last_name=$obj_emp->thrid_last_name;

        $obj->office=$obj_office->name;
        $obj->start=Carbon::now();
        $obj->end=Carbon::now();

        $obj->boss_first_name=$obj_boss->first_name;
        $obj->boss_second_name=$obj_boss->second_name;
        $obj->boss_thrid_name=$obj_boss->thrid_name;

        $obj->boss_first_last_name=$obj_boss->first_last_name;
        $obj->boss_second_last_name=$obj_boss->second_last_name;
        $obj->boss_thrid_last_name=$obj_boss->thrid_last_name;

        $obj->reason="enfermedad";

        $obj->save();


    }
}
