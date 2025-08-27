<?php

namespace App\Livewire\Component;

use Livewire\Component;

class SideMenu extends Component
{
    public $active = 'bg-gray-100 text-gray-900';
    public $inactive = 'text-gray-600 hover:bg-gray-50 hover:text-gray-900';

    public function isActive($path)
    {
       return str_contains(request()->path(), $path) ? $this->active : $this->inactive;
    }
    public function render()
    {
        return view('livewire.component.side-menu');
    }
}
