<?php

namespace App\View\Components\Modal;

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
    public $routecancel;
    public $routeok;

    public function __construct($btncancel, $btnok, $routecancel, $routeok)
    {
        $this->btncancel = $btncancel;
        $this->btnok = $btnok;
        $this->routecancel = $routecancel;
        $this->routeok = $routeok;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        
        return view('components.modal.modal-alert');
    }
}
