<?php

namespace App\Http\Livewire;

use App\Models\Log;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use App\Models\Employee;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LwUser extends Component
{
  use WithPagination;

public $search="";

public $my_id=0;
public $employee_id="";
public $email="";
public $role_id="";
public $password="";
public $password_confirm="";
public $active=1;

public $cat_roles="";
public $cat_employees="";

public $vtable='block';
public $vform='hidden';
public $vmode='insert';


protected $rules = [

  'email' => 'required|email',
  'password' => 'required|min:8',
  'password_confirm' =>'required|same:password'
];

protected $messages = [

  'email.required' => 'Falta correo.',
  'password.required' =>'Falta password',
  'password_confirm.same' =>'Los password no coinciden',
];


public function mount(){
       $this->cat_roles=Role::all();
       $this->cat_employees=Employee::all();
}

public function  create(){
  $this->vtable='hidden';
  $this->vform="block";
  }

  public function store(){

  $this->validate();

   $obj= new User();
   $obj->employee_id=$this->employee_id;
   $obj->email=$this->email;
   $obj->role_id=$this->role_id;
   $obj->password=Hash::make($this->password);
   $obj->active=$this->active;
   $obj->save();

   $log=new Log();
   $log->user=Auth::user()->email;
   $log->form ="Users";
   $log->action="store";
   $log->record_id=$obj->id;
   $log->record_complete=$obj;
   $log->save();

   $this->vtable='block';
   $this->vform="hidden";
   $this->vmode="insert";
   $this->default();
   session()->flash('message', 'Registro guardado');

  }



public function  edit($id){



$obj=User::find($id);
$this->my_id=$obj->id;
$this->employee_id=$obj->employee_id;
$this->email=$obj->email;
$this->role_id=$obj->role_id;
$this->password="";
$this->password_confirm="";
$this->active=$obj->active;


$this->vtable='hidden';
$this->vform="block";
$this->vmode="update";
}

public function update(){

    $validatedData = $this->validate([
            'email' => 'required|email',
            'password_confirm' =>'same:password',
        ]);

   $obj= User::find($this->my_id);
   $obj->employee_id=$this->employee_id;
   $obj->email=$this->email;
   $obj->role_id=$this->role_id;

   if(strlen($this->password)>0){
    $obj->password=Hash::make($this->password);
   }
   $obj->active=$this->active;
   $obj->save($validatedData);

   $log=new Log();
   $log->user=Auth::user()->email;
   $log->form ="Users";
   $log->action="update";
   $log->record_id=$obj->id;
   $log->record_complete=$obj;
   $log->save();



   $this->vtable='block';
   $this->vform="hidden";
   $this->vmode="insert";

   session()->flash('message', 'Registro guardado');
}



    public function delete(User $obj){

        $log=new Log();
        $log->user=Auth::user()->email;
        $log->form ="Users";
        $log->action="delete";
        $log->record_id=$obj->id;
        $log->record_complete=$obj;
        $log->save();

      $obj->delete();



      session()->flash('message', 'Registro eliminado');

    }

    public function cancel()
    {
     $this->default();

    }

    private function default(){

      $this->resetValidation();
      $this->reset(['my_id','employee_id','email','password','password_confirm','role_id','active','vform','vtable','vmode']);

    }

    public function clear_message(){
     session()->forget('message');
    }


    public function render()
    {
       $list_employees=Employee::all();
       $list=User::where('email',"like","%".$this->search."%")->paginate(15);
        return view('livewire.lwuser')
               ->with("list",$list);
    }
}
