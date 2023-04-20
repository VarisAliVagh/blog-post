<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $type;
    public $name;
    public $value;
    public $class;
    public $placeholder;
    public $max;
    public $min;
    public $autocomplete;
    public $size;
    public $minlength;
    public $maxlength;
    // public $pattern;
    public $step;
    public $src;
    public $alt;
    public $width;
    public $height;

    public function __construct($type='',$id='',$name='',$value='',$class='',$placeholder='',$max='',$min='',$autocomplete='',$size='',$minlength='',$maxlength='',/*$pattern=''*/$step='',$src='',$alt='',$width='',$height='')
    {
        $this->id = $id;    
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->class = $class;
        $this->placeholder = $placeholder;
        $this->max = $max;
        $this->min = $min;
        $this->autocomplete = $autocomplete;
        $this->size = $size;
        $this->minlength = $minlength;
        $this->maxlength = $maxlength;
        // $this->pattern = $pattern;
        $this->src = $src;
        $this->alt = $alt;
        $this->width = $width;
        $this->height = $height;
        $this->step = $step;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
