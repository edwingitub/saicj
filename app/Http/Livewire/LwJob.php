<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\JobType;
use App\Models\Job;
use App\Models\Employee;
use App\Models\Office;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class LwJob extends Component
{
    use WithPagination;

//variables de busqueda
public $search="";
public $search_account="";
public $search_subaccount="";

//Variables de campos
public $my_id=0;
public $subaccount="";
public $name="";
public $job_type_id=0;
public $employee_id=0;
public $office_id=0;

//Variables de vista
public $vtable='block';
public $vform='hidden';
public $vmode='insert';

//reglas

protected $rules = [
  'subaccount' => 'required',
  'name' => 'required',
  'job_type_id' => 'required|not_in:0',
  'employee_id' => 'required|not_in:0',
  'office_id' => 'required|not_in:0',
  
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

   $obj= new Job();
   $obj->subaccount=$this->subaccount;
   $obj->name=$this->name;
   $obj->job_type_id=$this->job_type_id;
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
$this->subaccount=$obj->subaccount;
$this->name=$obj->name;
$this->job_type_id=$obj->job_type_id;
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
   $obj->subaccount=$this->subaccount;
   $obj->name=$this->name;
   $obj->job_type_id=$this->job_type_id;
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
        'subaccount',
        'name',
        'job_type_id',
        'employee_id',
        'office_id',
        'vtable',
        'vform',
        'vmode'

    ]);

    }

    //Limpiar mensaje
    public function clear_message(){
     session()->forget('message');
    }

     //Render
    public function render()
    {

       $list=Job::where('subaccount',"like","%".$this->search_subaccount."%")
                 ->whereRelation('jobType', 'account',"like","%".$this->search_account."%")
                 ->where(function(Builder $q) {
                  $q->orWhereRelation('employee', 'first_name',"like","%".$this->search."%")
                  ->orWhereRelation('employee', 'first_last_name',"like","%".$this->search."%");
                  })
                  ->paginate(15);

       $cat_employees=Employee::select(['id',DB::raw("CONCAT(first_last_name,' ',
                                                             second_last_name,' , ',
                                                             first_name,' ',
                                                             second_name) AS name")])->orderBy('name','asc')->get();   
       $cat_offices=Office::orderBy('name','asc')->get();  
       $cat_job_types=JobType::orderBy('name','asc')->get();                                             
                                                             
                                                             
            
        return view('livewire.lw-job')
               ->with("list",$list)
               ->with("cat_employees",$cat_employees)
               ->with("cat_offices",$cat_offices)
               ->with("cat_job_types",$cat_job_types);
    }
}
