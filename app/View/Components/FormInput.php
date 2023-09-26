<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormInput extends Component
{
    public $label, $model, $type, $placeholder;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $model, $type, $placeholder)
    {
        $this->label = $label;
        $this->model = $model;
        $this->type = $type;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-input');
    }
}
