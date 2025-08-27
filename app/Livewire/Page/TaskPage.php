<?php

namespace App\Livewire\Page;

use Livewire\Component;

class TaskPage extends Component
{

     public $tasks = [
            ['id' => 1, 'title' => 'Task 1', 'category' => 'Work', 'due_date' => '2023-10-01', 'status' => 'Pending'],
            ['id' => 2, 'title' => 'Task 2', 'category' => 'Personal', 'due_date' => '2023-10-05', 'status' => 'Completed'],
            ['id' => 3, 'title' => 'Task 3', 'category' => 'Shopping', 'due_date' => '2023-10-03', 'status' => 'Pending'],
        ];

    public $columns = [
            ['field' => 'id', 'label' => 'ID'],
            ['field' => 'title', 'label' => 'Title'],
            ['field' => 'category', 'label' => 'Category'],
            ['field' => 'due_date', 'label' => 'Due Date'],
            ['field' => 'status', 'label' => 'Status'],
        ];

    public $rows = [
            ['id' => 1, 'title' => 'Task 1', 'category' => 'Work', 'due_date' => '2023-10-01', 'status' => 'Pending'],
            ['id' => 2, 'title' => 'Task 2', 'category' => 'Personal', 'due_date' => '2023-10-05', 'status' => 'Completed'],
            ['id' => 3, 'title' => 'Task 3', 'category' => 'Shopping', 'due_date' => '2023-10-03', 'status' => 'Pending'],
        ];

    public $route = 'task-page';

    public function render()
    {
        return view('livewire.page.task-page')
            ->layout('layout.dashboard');
    }
}
