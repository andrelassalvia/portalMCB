<?php

namespace App\View\Components\button;

use Illuminate\View\Component;

class buttonMcb extends Component
{
    /**
     * Register variables
     */
    public $route;
    public $params;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $params, $title)
    {
        $this->route = $route;
        $this->params = $params;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button.button-mcb');
    }
}
