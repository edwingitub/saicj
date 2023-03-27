<?php

namespace Database\Seeders;
use App\Models\Departamento;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $obj=new Departamento();
        $obj->id=1;
        $obj->name="Santa Ana";
        $obj->save();

        $obj=new Departamento();
        $obj->id=2;
        $obj->name="Sonsonate";
        $obj->save();

        $obj=new Departamento();
        $obj->id=3;
        $obj->name="Ahuachapán";
        $obj->save();

        $obj=new Departamento();
        $obj->id=4;
        $obj->name="Chalatenango";
        $obj->save();

        $obj=new Departamento();
        $obj->id=5;
        $obj->name="La Libertad";
        $obj->save();

        $obj=new Departamento();
        $obj->id=6;
        $obj->name="San Salvador";
        $obj->save();

        $obj=new Departamento();
        $obj->id=7;
        $obj->name="La Paz";
        $obj->save();

        $obj=new Departamento();
        $obj->id=8;
        $obj->name="Cabañas";
        $obj->save();

        $obj=new Departamento();
        $obj->id=9;
        $obj->name="Usulután";
        $obj->save();

        $obj=new Departamento();
        $obj->id=10;
        $obj->name="San Miguel";
        $obj->save();

        $obj=new Departamento();
        $obj->id=11;
        $obj->name="Morazan";
        $obj->save();

        $obj=new Departamento();
        $obj->id=12;
        $obj->name="la Unión";
        $obj->save();
    }
}
