<?php

namespace App\Livewire\Widget;

use Livewire\Component;

class Table extends Component
{
    public $columns = [];
    public $rows = [];

    public $route = '';

    public function mount($columns=[], $rows=[], $route='')
    {
        $this->columns = $columns;
        $this->rows = $rows;
        $this->route = $route;
    }

    public function render()
    {
        return view('livewire.widget.table');
    }
}
