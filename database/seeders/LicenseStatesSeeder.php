<?php

namespace Database\Seeders;

use App\Models\LicenseState;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LicenseStatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $obj=new LicenseState();
        $obj->id=1;
        $obj->name="Borrador";
        $obj->save();

        $obj=new LicenseState();
        $obj->id=2;
        $obj->name="Enviado";
        $obj->save();

        $obj=new LicenseState();
        $obj->id=3;
        $obj->name="Autorizado";
        $obj->save();

        $obj=new LicenseState();
        $obj->id=4;
        $obj->name="Procesado";
        $obj->save();

        $obj=new LicenseState();
        $obj->id=5;
        $obj->name="Denegado";
        $obj->save();


    }
}
