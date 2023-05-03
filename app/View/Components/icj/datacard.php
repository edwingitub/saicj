<?php

namespace App\View\Components\icj;

use Closure;
use App\Models\Employee;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class datacard extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;

    public function __construct($id)
    {
        $this->id=$id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $data=Employee::where('id',$this->id)->get();
        return view('components.icj.datacard')->with("id",$this->id)->with("data",$data[0]);
    }
}
