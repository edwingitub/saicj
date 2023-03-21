<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class LwUser extends Component
{
    public function render()
    {
      
       $list=User::all();
        return view('livewire.user')
               ->with("list",$list);
    }
}
