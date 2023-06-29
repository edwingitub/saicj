<?php

namespace App\Http\Livewire;

use App\Models\Log;
use Livewire\Component;
use Livewire\WithPagination;

class LwLog extends Component
{
    use WithPagination;

    public $search_user="";
    public $search_form="";
    public $search_action="";
    public $search_record_id="";
    public $search_created_at="";






    public function mount(){}
    public function  create(){}
    public function store(){}
    public function  edit($id){}
    public function update(){ }
    public function delete(Log $obj){ }
    public function cancel(){ }
    private function default(){}
    public function clear_message(){}

    public function render()
    {
        $list=Log::where('user',"like","%".$this->search_user."%")
                 ->where('form',"like","%".$this->search_form."%")
                 ->where('action',"like","%".$this->search_action."%")
                 ->where('record_id',"like","%".$this->search_record_id."%")
                 ->where('created_at',"like","%".$this->search_created_at."%")
                 ->orderBy('created_at', 'desc')
                 ->paginate(10);
        return view('livewire.lw-log')->with("list",$list);;
    }
}
