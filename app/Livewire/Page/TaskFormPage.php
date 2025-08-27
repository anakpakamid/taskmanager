<?php

namespace App\Livewire\Page;

use Livewire\Component;

class TaskFormPage extends Component
{
    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        return view('livewire.page.task-form-page')
            ->layout('layout.dashboard');

    }
}
