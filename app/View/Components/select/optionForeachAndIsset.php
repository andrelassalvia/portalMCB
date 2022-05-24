<?php

namespace App\View\Components\select;

use Illuminate\View\Component;

class optionForeachAndIsset extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $object;
    public $arr;
    public $value;
    public $foreignId;
    public $column;


    public function __construct($object, $arr, $value, $foreignId, $column)
    {
        $this->object = $object;
        $this->arr = $arr;
        $this->value = $value;
        $this->foreignId = $foreignId;
        $this->column = $column;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select.option-foreach-and-isset');
    }
}
