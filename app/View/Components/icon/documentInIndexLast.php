<?php

namespace App\View\Components\icon;

use Illuminate\View\Component;

class documentInIndexLast extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $iconSuccess;
    public $iconDanger;
    public $column;
    public $item;

    public function __construct($iconSuccess, $iconDanger, $column, $item)
    {
        $this->iconSuccess = $iconSuccess;
        $this->iconDanger = $iconDanger;
        $this->column = $column;
        $this->item = $item;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.icon.document-in-index-last');
    }
}
