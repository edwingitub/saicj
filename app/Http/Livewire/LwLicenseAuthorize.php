<?php

namespace App\Http\LivewireAuthorize;

use Livewire\Component;
use App\Models\License;

use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;
use Livewire\WithFileUploads;


class LwLicenseAuthorize extends Component
{
  use WithPagination;
  use WithFileUploads;

public $search="";

public $my_id=0;
public $photo="";
public $first_name="";
public $second_name="";
public $thrid_name="";
public $first_last_name="";
public $second_last_name="";
public $thrid_last_name="";
public $birthday="";
public $start="";
public $end="";

public $phone="";
public $email="";
public $dui="";
public $nr="";

public $active="";
public $comments="";


public $vtable='block';
public $vform='hidden';
public $vmode='insert';


protected $rules = [
  'first_name' => 'required|min:2',
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

   $obj= new License();
   $obj->photo=$this->photo->store('photos');
   $obj->first_name=$this->first_name;
   $obj->second_name=$this->second_name;
   $obj->thrid_name=$this->thrid_name;
   $obj->first_last_name=$this->first_last_name;
   $obj->second_last_name=$this->second_last_name;
   $obj->thrid_last_name=$this->thrid_last_name;
   $obj->birthday=$this->birthday;
   $obj->start=$this->start;
   $obj->end=$this->end;

   $obj->phone=$this->phone;
   $obj->email=$this->email;
   $obj->dui=$this->dui;
   $obj->nr=$this->nr;

   $obj->active=$this->active;
   $obj->comments=$this->comments;
   $obj->save();

   $this->vtable='block';
   $this->vform="hidden";
   $this->vmode="insert";

   session()->flash('message', 'Registro guardado');

  }



public function  edit($id){
$obj=License::find($id);
$this->my_id=$obj->id;
$this->photo=$obj->photo;
$this->first_name=$obj->first_name;
$this->second_name=$obj->second_name;
$this->thrid_name=$obj->thrid_name;
$this->first_last_name=$obj->first_last_name;
$this->second_last_name=$obj->second_last_name;
$this->thrid_last_name=$obj->thrid_last_name;
$this->birthday=$obj->birthday;
$this->start=$obj->start;
$this->end=$obj->end;
$this->active=$obj->active;
$this->comments=$obj->comments;

$this->phone=$obj->phone;
$this->email=$obj->email;
$this->dui=$obj->dui;
$this->nr=$obj->nr;

$this->vtable='hidden';
$this->vform="block";
$this->vmode="update";
}

public function update(){

  $this->validate();

   $obj= License::find($this->my_id);
   if(!($this->photo== $obj->photo)){
     $obj->photo=$this->photo->store('photos');
   }
   $obj->first_name=$this->first_name;
   $obj->second_name=$this->second_name;
   $obj->thrid_name=$this->thrid_name;
   $obj->first_last_name=$this->first_last_name;
   $obj->second_last_name=$this->second_last_name;
   $obj->thrid_last_name=$this->thrid_last_name;
   $obj->birthday=$this->birthday;
   $obj->start=$this->start;
   $obj->end=$this->end;

   $obj->phone=$this->phone;
   $obj->email=$this->email;
   $obj->dui=$this->dui;
   $obj->nr=$this->nr;

   $obj->active=$this->active;
   $obj->comments=$this->comments;
   $obj->save();


   $this->vtable='block';
   $this->vform="hidden";
   $this->vmode="insert";

   session()->flash('message', 'Registro guardado');
}



    public function delete(License $license){
      $license->delete();
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
        'photo',
        'first_name',
        'second_name',
        'thrid_name',
        'first_last_name',
        'second_last_name',
        'thrid_last_name',
        'birthday',
        'start',
        'end',
        'phone',
        'email',
        'dui',
        'nr',
        'active',
        'comments',
        'vform',
        'vtable',
        'vmode'
    ]);

    }

    public function clear_message(){
     session()->forget('message');
    }


    public function render()
    {

       $list=License::where('first_name',"like","%".$this->search."%")->get();
        return view('livewire.lw-license-auth   orize')
               ->with("list",$list);
    }
}
