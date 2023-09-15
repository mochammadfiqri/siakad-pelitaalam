<?php

namespace App\View\Components;

use Illuminate\View\Component;

class tblMapel extends Component
{
    public $dataMapel;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($dataMapel)
    {
        $this->dataMapel = $dataMapel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tbl-mapel');
    }
}
