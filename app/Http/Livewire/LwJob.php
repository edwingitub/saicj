<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;

class LwJob extends Component
{
    use WithPagination;

//variables de busqueda
public $search="";

//Variables de campos
public $my_id=0;
public $name="";
public $employee_id=0;
public $office_id=0;

//Variables de vista
public $vtable='block';
public $vform='hidden';
public $vmode='insert';

//reglas
protected $rules = [

];

//mensajes
protected $messages = [
];


//Mount
public function mount(){
}

//crear
public function  create(){
  $this->vtable='hidden';
  $this->vform="block";
  }

  //insertar
  public function store(){

  $this->validate();

   $obj= new Job();
   $obj->name=$this->name;
   $obj->employee_id=$this->employee_id;
   $obj->office_id=$this->office_id;
   $obj->save();

   $this->vtable='block';
   $this->vform="hidden";
   $this->vmode="insert";

   session()->flash('message', 'Registro guardado');

  }


//editar
public function  edit($id){
$obj=Job::find($id);
$this->my_id=$obj->id;
$this->name=$obj->name;
$this->employee_id=$obj->employee_id;
$this->office_id=$obj->office_id;


$this->vtable='hidden';
$this->vform="block";
$this->vmode="update";
}


//modificar
public function update(){

  $this->validate();

   $obj= Job::find($this->my_id);
   $obj->name=$this->name;
   $obj->employee_id=$this->employee_id;
   $obj->office_id=$this->office_id;

   $obj->save();


   $this->vtable='block';
   $this->vform="hidden";
   $this->vmode="insert";

   session()->flash('message', 'Registro guardado');
}


//borrar
    public function delete(Job $obj){
      $obj->delete();
      session()->flash('message', 'Registro eliminado');

    }

    public function cancel()
    {
     $this->default();

    }

    private function default(){

      $this->resetValidation();
      $this->reset([
        'my_id',
        'name',
        'employee_id',
        'office_id',
        'vtable',
        'vform',
        'vmode'

    ]);

    }

    public function clear_message(){
     session()->forget('message');
    }


    public function render()
    {

       $list=Job::where('name',"like","%".$this->search."%")->paginate(15);
        return view('livewire.lw-job')
               ->with("list",$list);
    }
}
