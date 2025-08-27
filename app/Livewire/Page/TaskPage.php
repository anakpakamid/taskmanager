<?php

namespace App\Livewire\Page;

use Livewire\Component;
use App\Models\Task;

class TaskPage extends Component
{

     public $tasks = [];

    public $columns = [
            ['field' => 'id', 'label' => 'ID'],
            ['field' => 'title', 'label' => 'Title'],
            // ['field' => 'description', 'label' => 'Description'],
            ['field' => 'category_name', 'label' => 'Category Name'],
            ['field' => 'assigned_user_name', 'label' => 'Assigned To'],
            ['field' => 'status', 'label' => 'Status'],
        ];

    public $rows = [];

    public $route = 'task-page';

    public function mount(){
        $this->rows = Task::with([
            'category',
            'assignedUser'
        ])->get()
        ->each(function($task){
           $task->append(['category_name', 'assigned_user_name']);
        });

    }
    public function render()
    {
        return view('livewire.page.task-page')
            ->layout('layout.dashboard');
    }
}
