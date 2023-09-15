<?php

namespace App\View\Components;

use Illuminate\View\Component;

class btnTambahData extends Component
{
    public $toggle;
    public $target;
    // public $href;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($toggle, $target, $href)
    {
        $this->toggle = $toggle;
        $this->target = $target;
        // $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.btn-tambah-data');
    }
}
