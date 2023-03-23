<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class LwUser extends Component
{


public $my_id=0;
public $name="";
public $email="";
public $password="";

public $vtable='block';
public $vform='hidden';
public $vmode='insert';


public function  create(){
  $this->vtable='hidden';
  $this->vform="block";
  }

  public function store(){
   $obj= new User();
   $obj->name=$this->name;
   $obj->email=$this->email;
   $obj->password=$this->password;
   $obj->save();

   $this->vtable='block';
   $this->vform="hidden";
   $this->vmode="insert";
  
  }
  

public function  edit($id){
$obj=User::find($id);
$this->my_id=$obj->id;
$this->name=$obj->name;
$this->email=$obj->email;
$this->password=$obj->password;

$this->vtable='hidden';
$this->vform="block";
$this->vmode="update";
}

public function update(){
   $obj= User::find($this->my_id);
   $obj->name=$this->name;
   $obj->email=$this->email;
   $obj->password=$this->password;
   $obj->save();
   $this->vtable='block';
   $this->vform="hidden";
   $this->vmode="insert";
}



    public function delete(User $user){
      $user->delete();
     
    }

    public function cancel()
    {
     $this->default();
      
    }

    private function default(){
      $this->reset(['my_id','name','email','password','vform','vtable','vmode']);

    }


    public function render()
    {
      
       $list=User::all();
        return view('livewire.user')
               ->with("list",$list);
    }
}
