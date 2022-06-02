<?php

namespace App\View\Components\select;

use Illuminate\View\Component;

class selectAndLabel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $id;
    public $name;
    public $req;

    public function __construct($title, $id, $name, $req)
    {
        $this->title = $title;
        $this->id = $id;
        $this->name = $name;
        $this->req = $req;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select.select-and-label');
    }
}
