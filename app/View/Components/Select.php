<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $id;
    public $option;
    public $class;


    public function __construct($name = "", $id = "", $option = [], $class = "")
    {
        $this->name = $name;
        $this->id = $id;
        $this->option = $option;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select');
    }
}
