<?php

namespace App\View\Components\select;

use Illuminate\View\Component;

class optionAndForeach extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $arr;
    public $column;
    public $value;

    public function __construct($arr, $column, $value)
    {
        $this->arr = $arr;
        $this->column = $column;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $arr = $this->arr;
        return view('components.select.option-and-foreach', compact($arr));
    }

}
