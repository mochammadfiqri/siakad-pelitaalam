<?php

namespace App\View\Components;

use Illuminate\View\Component;

class btnSearch extends Component
{
    public $style;
    public $placeholder;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($style, $placeholder)
    {
        $this->style = $style;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.btn-search');
    }
}
