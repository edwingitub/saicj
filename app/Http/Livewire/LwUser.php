<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;

class LwUser extends Component
{
  use WithPagination;

public $search="";

public $my_id=0;
public $name="";
public $email="";
public $role_id="";
public $password="";
public $password_confirm="";

public $cat_roles="";
public $vtable='block';
public $vform='hidden';
public $vmode='insert';


protected $rules = [

  'name' => 'required|min:6',
  'email' => 'required|email',
  'password' => 'required|min:8',

  'password_confirm' =>'required|same:password'
];

protected $messages = [
  'name.required' => 'Falta nombre.',
  'email.required' => 'Falta correo.',
  'password.required' =>'Falta password',
  'password_confirm.same' =>'Los password no coinciden',
];


public function mount(){
       $this->cat_roles=Role::all();
}

public function  create(){
  $this->vtable='hidden';
  $this->vform="block";
  }

  public function store(){

  $this->validate();

   $obj= new User();
   $obj->name=$this->name;
   $obj->email=$this->email;
   $obj->role_id=$this->role_id;
   $obj->password=Hash::make($this->password);
   $obj->save();

   $this->vtable='block';
   $this->vform="hidden";
   $this->vmode="insert";

   session()->flash('message', 'Registro guardado');
  
  }
  
  

public function  edit($id){
$obj=User::find($id);
$this->my_id=$obj->id;
$this->name=$obj->name;
$this->email=$obj->email;
$this->role_id=$obj->role_id;
$this->password="";
//$this->password=$obj->password;

$this->vtable='hidden';
$this->vform="block";
$this->vmode="update";
}

public function update(){

  $this->validate();

   $obj= User::find($this->my_id);
   $obj->name=$this->name;
   $obj->email=$this->email;
   $obj->role_id=$this->role_id;
   $obj->password=Hash::make($this->password);
   $obj->save();
   $this->vtable='block';
   $this->vform="hidden";
   $this->vmode="insert";

   session()->flash('message', 'Registro guardado');
}



    public function delete(User $user){
      $user->delete();
      session()->flash('message', 'Registro eliminado');
     
    }

    public function cancel()
    {
     $this->default();
      
    }

    private function default(){

      $this->resetValidation();
      $this->reset(['my_id','name','email','password','password_confirm','role_id','vform','vtable','vmode']);

    }

    public function clear_message(){
     session()->forget('message');
    }


    public function render()
    {
      
       $list=User::where('name',"like","%".$this->search."%")->paginate(15);
        return view('livewire.lwuser')
               ->with("list",$list);
    }
}
