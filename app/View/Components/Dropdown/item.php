<?php

namespace App\View\Components\Dropdown;

use Illuminate\View\Component;
use Illuminate\Support\Arr;

class item extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $route;
    public $title;

    public function __construct($route, $title)
    {
        $this->route = $route;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.dropdown.item');
    }

    public function findRoute($route)
    {
        if($route){
            $path = Arr::get($route, 'route');
            $param = Arr::get($route, 'param');
            return route($path, $param);
        }
    }
}
