<?php

namespace App\Livewire\Widget;

use Livewire\Component;

class Table extends Component
{
    public $columns = [];
    public $rows = [];
    public $currentPage = 1;
    public $totalPages = 1;
    public $formRoute = 1;

    public $route = '';

    public function mount($columns=[], $rows=[], $route='',$currentPage, $totalPages, $formRoute)
    {
        $this->currentPage = $currentPage;
        $this->totalPages = $totalPages;
        $this->formRoute = $formRoute;
        $this->columns = $columns;
        $this->rows = $rows;
        $this->route = $route;
    }

     public function onPreviousPage()
    {
        if ($this->currentPage > 1) {
            $this->dispatch('previousPage');
        }
    }

    public function onNextPage()
    {
        if ($this->currentPage < $this->totalPages) {
            $this->dispatch('nextPage');
        }
    }

    public function render()
    {
        return view('livewire.widget.table');
    }
}
