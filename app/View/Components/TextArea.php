<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextArea extends Component
{
    /**
     * Create a new component instance.
     */
    public $label = '';
    public $for = '';
    public $name = '';
    public $id = '';
    public $cols = '';
    public $rows = '';

    public function __construct($label,$for,$name,$id,$cols,$rows)
    {
        $this->label = $label;
        $this->for = $for;
        $this->name = $name;
        $this->id = $id;
        $this->cols = $cols;
        $this->rows = $rows;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.text-area');
    }
}
