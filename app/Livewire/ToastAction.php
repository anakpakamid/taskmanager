<?php

namespace App\Livewire;

use Livewire\Component;

class ToastAction extends Component
{
    public $color="";
    public $status="";

    public function mount($color="",$status="")
    {
        $this->color = $color;
        $this->status = $status;
    }

    public function success(){
        $this->status = 'Task completed successfully!';
        $this->color = 'green';
    }

   public function error(){
        $this->status = 'Error completing task.';
        $this->color = 'red';
    }

    public function warning(){
        $this->status = 'Warning: Check your task.';
        $this->color = 'yellow';
    }
    public function render()
    {
        return view('livewire.toast-action');
    }
}
