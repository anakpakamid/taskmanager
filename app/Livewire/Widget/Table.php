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
    public $allowEdit = '';
    public $allowDelete = '';

    public $route = '';

    public function mount($columns=[], $rows=[], $route='',$currentPage, $totalPages, $formRoute,$allowDelete,$allowEdit)
    {
        $this->currentPage = $currentPage;
        $this->totalPages = $totalPages;
        $this->formRoute = $formRoute;
        $this->columns = $columns;
        $this->rows = $rows;
        $this->route = $route;
        $this->allowEdit = $this->allowEdit;
        $this->allowDelete = $this->allowDelete;
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
