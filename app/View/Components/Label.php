<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Label extends Component
{
    /**
     * Create a new component instance.
     */
    public $label;
    public $class;
    public $for;
    public $id;
    public function __construct($label="",$for="",$class="",$id="")
    {
        $this->label=$label;
        $this->for=$for;
        $this->class=$class;
        $this->id=$id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.label');
    }
}
