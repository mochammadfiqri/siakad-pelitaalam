<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class IndexRombel extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 5;
    public $search;
    
    public function render()
    {
        return view('livewire.index-rombel');
    }
}
