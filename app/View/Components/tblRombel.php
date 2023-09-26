<?php

namespace App\View\Components;

use Illuminate\View\Component;

class tblRombel extends Component
{
    public $dataRombel;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($dataRombel)
    {
        $this->dataRombel = $dataRombel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tbl-rombel');
    }
}
