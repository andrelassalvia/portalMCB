<?php

namespace App\View\Components\input;

use Illuminate\View\Component;

class checkAndLabel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $name;
    public $id;
    public $obj;

    public function __construct($title, $name, $id, $obj)
    {
        $this->title = $title;
        $this->name = $name;
        $this->id = $id;
        $this->obj = $obj;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input.check-and-label');
    }
}
