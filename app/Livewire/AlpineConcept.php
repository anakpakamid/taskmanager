<?php

namespace App\Livewire;

use Livewire\Component;

class AlpineConcept extends Component
{
    public function render()
    {
        return view('livewire.alpine-concept')->layout('layout.dashboard');
    }
}
