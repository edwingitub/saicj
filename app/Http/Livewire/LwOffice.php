<?php

namespace App\Http\Livewire;

use App\Models\Office;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class LwOffice extends Component
{
  use WithPagination;

public $search="";

public $my_id=0;

public $code="";
public $name="";

public $vtable='block';
public $vform='hidden';
public $vmode='insert';


protected $rules = [
  'name' => 'required|min:6',
];

protected $messages = [
];


public function mount(){
}

public function  create(){
  $this->vtable='hidden';
  $this->vform="block";
  }

  public function store(){

  $this->validate();

   $obj= new Office();
   $obj->code=$this->code;
   $obj->name=$this->name;
   $obj->save();

   $this->vtable='block';
   $this->vform="hidden";
   $this->vmode="insert";

   session()->flash('message', 'Registro guardado');
  
  }
  
  

public function  edit($id){
$obj=Office::find($id);
$this->my_id=$obj->id;
$this->code=$obj->code;
$this->name=$obj->name;


$this->vtable='hidden';
$this->vform="block";
$this->vmode="update";
}

public function update(){

  $this->validate();

   $obj= Office::find($this->my_id);
   $obj->code=$this->code;
   $obj->name=$this->name;
 
   $obj->save();


   $this->vtable='block';
   $this->vform="hidden";
   $this->vmode="insert";

   session()->flash('message', 'Registro guardado');
}



    public function delete(Office $office){
      $office->delete();
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
        'code',
        'name',
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
    
      
       $list=Office::where('name',"like","%".$this->search."%")->orderBy('code','asc')->paginate(15);
        return view('livewire.lw-office')
               ->with("list",$list);
    }
}
