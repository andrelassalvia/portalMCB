<?php

namespace App\View\Components\input;

use Illuminate\View\Component;

class inputAndLabel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title;
    public $type;
    public $id;
    public $name;
    public $value;

    public function __construct($title, $type, $id, $name, $value)
    {
        $this->title = $title;
        $this->type = $type;
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input.input-and-label');
    }
}
