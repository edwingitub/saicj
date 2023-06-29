<?php

namespace App\Http\Livewire;

use App\Models\Job;
use App\Models\Log;
use App\Models\JobType;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Builder;

class LwJobType extends Component
{
    use WithPagination;

//variables de busqueda

public $search_account="";
public $search_name="";
public $search_salary="";


//Variables de campos
public $my_id=0;
public $account="";
public $name="";
public $salary="0.00";
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
  'salary' => 'required',

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
   $obj->salary=$this->salary;
   $obj->amount=$this->amount;
   $obj->save();

   $log=new Log();
   $log->user=Auth::user()->email;
   $log->form ="JobType";
   $log->action="store";
   $log->record_id=$obj->id;
   $log->record_complete=$obj;
   $log->save();



   for($i=0;$i<$obj->amount;$i++){
    $job= new Job();
    $job->subaccount=$i+1;
    $job->name="Pendiente";
    $job->job_type_id=$obj->id;
    $job->employee_id=1;
    $job->office_id=1;
    $job->boss=0;
    $job->save();

   }

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
$this->salary=$obj->salary;
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
   $obj->salary=$this->salary;
   $obj->save();

   $log=new Log();
   $log->user=Auth::user()->email;
   $log->form ="JobType";
   $log->action="update";
   $log->record_id=$obj->id;
   $log->record_complete=$obj;
   $log->save();


   $this->vtable='block';
   $this->vform="hidden";
   $this->vmode="insert";

   session()->flash('message', 'Registro guardado');
}


//borrar
    public function delete(JobType $obj){
      $jobs=Job::where('job_type_id',$obj->id)->count();
      if($jobs==0){

        $log=new Log();
        $log->user=Auth::user()->email;
        $log->form ="JobType";
        $log->action="delete";
        $log->record_id=$obj->id;
        $log->record_complete=$obj;
        $log->save();

        $obj->delete();
        session()->flash('message', 'Registro eliminado');
      }
      else {
        session()->flash('message', 'No se puede borrar. Se usa en puestos funcionales');
      }
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
        'salary',
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

       $list=JobType::where("account","like","%".$this->search_account."%")
                      ->where("name","like","%".$this->search_name."%")
                      ->where("salary","like","%".$this->search_salary."%")
                      ->orderBy('account',"asc")
                      ->paginate(15);

        return view('livewire.lw-job-type')
               ->with("list",$list);
    }
}

