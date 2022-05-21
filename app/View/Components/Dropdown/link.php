<?php

namespace App\View\Components\Dropdown;

use Illuminate\View\Component;

class link extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dropdown.link');
    }
}
