<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\JobType;
use App\Models\Job;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class LwJobType extends Component
{
    use WithPagination;

//variables de busqueda
public $search="";
public $search_subaccount="";

//Variables de campos
public $my_id=0;
public $account="";
public $name="";
public $amount=0;

//Variables de vista
public $vtable='block';
public $vform='hidden';
public $vmode='insert';

//reglas

protected $rules = [
  'account' => 'required',
  'name' => 'required',
  'amount' => 'required',

];

//mensajes
protected $messages = [
];


//Mount
public function mount(){
}

//crear
public function  create(){
  $this->default();
  $this->vtable='hidden';
  $this->vform="block";
  }

  //insertar
  public function store(){

  $this->validate();

   $obj= new JobType();
   $obj->account=$this->account;
   $obj->name=$this->name;
   $obj->amount=$this->amount;
   $obj->save();

   $this->vtable='block';
   $this->vform="hidden";
   $this->vmode="insert";

   session()->flash('message', 'Registro guardado');

  }


//editar
public function  edit($id){
$obj=JobType::find($id);
$this->my_id=$obj->id;
$this->account=$obj->account;
$this->name=$obj->name;
$this->amount=$obj->amount;



$this->vtable='hidden';
$this->vform="block";
$this->vmode="update";
}


//modificar
public function update(){

  $this->validate();

   $obj= JobType::find($this->my_id);
   $obj->account=$this->account;
   $obj->name=$this->name;
   $obj->amount=$this->amount;
   $obj->save();


   $this->vtable='block';
   $this->vform="hidden";
   $this->vmode="insert";

   session()->flash('message', 'Registro guardado');
}


//borrar
    public function delete(JobType $obj){
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
        'account',
        'name',
        'amount',
        'vtable',
        'vform',
        'vmode'

    ]);

    }

    //Limpiar mensaje
    public function clear_message(){
     session()->forget('message');
    }

    //puestos utilizados
    public function usedJobs($id){
          return Job::where('job_type_id',$id)->count();
    }

       //puestos utilizados totales
       public function totalUsedJobs(){
        return Job::count();
       }
       //puestos nominales totales
        public function totalJobTypes(){
        return JobType::sum('amount');
   }


     //Render
    public function render()
    {

       $list=JobType::orderBy('account',"asc") ->paginate(15);

        return view('livewire.lw-job-type')
               ->with("list",$list);
    }
}

