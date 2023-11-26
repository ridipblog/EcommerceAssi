<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $count;
    public function __construct($count)
    {
        $this->count = $count;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-component');
    }
}
