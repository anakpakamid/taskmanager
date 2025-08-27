<?php

namespace App\Livewire;

use Livewire\Component;

class TaskCard extends Component
{
    public $task;

    public function mount($task)
    {
        $this->task = $task;
    }

    public function render()
    {
        return view('livewire.task-card');
    }
}
