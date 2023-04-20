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
    public $id;
    public $name;
    public $rows;
    public $cols;
    public $class;
    public $placeholder;
    public $dirname;
    public $form;
    public $maxlength;
    public $wrap;
    public $value;

    public function __construct($name="",$id="",$class="",$cols="",$rows="",$placeholder="",$dirname="",$form="",$maxlength="",$wrap="",$value="")
    {
        $this->name = $name;
        $this->id = $id;
        $this->cols = $cols;
        $this->rows = $rows;
        $this->class = $class;
        $this->placeholder = $placeholder;
        $this->dirname = $dirname;
        $this->form = $form;
        $this->maxlength = $maxlength;
        $this->wrap  = $wrap ;
        $this->value  = $value ;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.text-area');
    }
}
