<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modalAlert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $btncancel;
    public $btnok;

    public function __construct($btncancel, $btnok)
    {
        $this->btncancel = $btncancel;
        $this->btnok = $btnok;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal-alert');
    }
}
