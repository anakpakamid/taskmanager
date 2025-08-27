<?php

namespace App\Livewire\Page;

use Livewire\Component;
use App\Models\Task;
use App\Models\Category;
use App\Models\User;

class TaskPage extends Component
{

     public $tasks = [];

     public $filters = [
        'title' => '',
        'status' => '',
        'category_id' => '',
        'assigned_user_id' => '',
     ];

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

    public $page=1;
    public $totalPages=0;
    public $limit=10;

    public $listeners = [
        'previousPage' => 'onPreviousPage',
        'nextPage' => 'onNextPage',
    ];

    public $categories = [];
    public $users = [];

    // public function mount(){

    //     $this->totalPages = (int) ceil(Task::count() / $this->limit);
    //     $offset = ($this->page - 1) * $this->limit;

    //     $this->rows = Task::with([
    //         'category',
    //         'assignedUser'
    //     ])
    //     ->limit($this->limit)
    //     ->offset($offset)
    //     ->get()
    //     ->each(function($task){
    //        $task->append(['category_name', 'assigned_user_name']);
    //     });

    // }

    public function mount()
    {
        #load sekali jadi takyah load banyak kali sbb mount panggil sekali je
        #klu letak di loadTask, dia akan load banyak kali
        $this->categories = Category::all()->toArray();
        $this->users = User::all()->toArray();
        $this->loadTask();
    }

    public function loadTask()
    {
        $offset = ($this->page - 1) * $this->limit;

        $query = Task::search($this->filters);

        $this->totalPages = (int) ceil(Task::count() / $this->limit);
        $offset = ($this->page - 1) * $this->limit;
        $this->rows = $query
            ->limit($this->limit)
            ->offset($offset)
            ->get()
            ->each(fn($task) => $task->append(['assigned_user_name', 'category_name']));

    }

    public function onPreviousPage()
    {
        if ($this->page > 1) {
            $this->page--;
            $this->loadTask();
        }
    }

    public function onNextPage()
    {
        if ($this->page < $this->totalPages) {
            $this->page++;
            $this->loadTask();
        }
    }

    public function resetTable()
    {
       $this->filters = [
            'title' => '',
            'status' => '',
            'category_id' => '',
            'assigned_user_id' => '',
       ];
       $this->loadTask();
    }
    public function render()
    {
        return view('livewire.page.task-page')
            ->layout('layout.dashboard');
    }
}
