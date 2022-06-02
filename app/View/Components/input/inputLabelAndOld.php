<?php

namespace App\View\Components\input;

use Illuminate\View\Component;

class inputLabelAndOld extends Component
{
    public $id;
    public $title;
    public $type;
    public $name;
    public $req;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $title, $type, $name, $req)
    {
        $this->id = $id;
        $this->title = $title;
        $this->type = $type;
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
        return view('components.input.input-label-and-old');
    }
}
