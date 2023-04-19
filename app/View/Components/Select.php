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
    public $name='';
    public $optAttrValue='';
    public $optValue='';

    public function __construct($name,$optAttrValue,$optValue)
    {
        $this->name = $name;
        $this->optValue = $optValue;
        $this->optAttrValue = $optAttrValue;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select');
    }
}
