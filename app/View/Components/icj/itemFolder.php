<?php

namespace App\View\Components\icj;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class itemFolder extends Component
{
    /**
     * Create a new component instance.
     */

    public $header;
    public $detail;
    public $options;

    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.icj.item-folder');
    }
}
