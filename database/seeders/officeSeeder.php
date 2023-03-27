<?php

namespace Database\Seeders;

use App\Models\Office;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class officeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
           $obj=new Office();
           $obj->id=1;
           $obj->code="1";
           $obj->name="Dirección Ejecutiva";
           $obj->save();
            
           $obj=new Office();
           $obj->id=2;
           $obj->code="10";
           $obj->name="Gerencia Operativa";
           $obj->save();

           $obj=new Office();
           $obj->id=3;
           $obj->code="20";
           $obj->name="Gerencia Técnica";
           $obj->save();

           $obj=new Office();
           $obj->id=4;
           $obj->code="11";
           $obj->name="Departamento de Tecnología y Desarrollo Informático";
           $obj->save();




}
}