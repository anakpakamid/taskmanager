<?php

namespace App\Livewire\Page;

use Livewire\Component;
use App\Models\Task;
use App\Models\Category;
use App\Models\User;

class TaskFormPage extends Component
{
    public $taskId;
    public $title;
    public $status = 'Pending';
    public $category_id;
    public $assigned_to;

    public $categories = [];
    public $users = [];


    public function mount($id)
    {
        $this->categories = Category::pluck('name', 'id')->toArray();
        $this->users = User::pluck('name', 'id')->toArray();

        if ($id != "create") {
            $task = Task::findOrFail($id);
            $this->taskId = $task->id;
            $this->title = $task->title;
            $this->status = $task->status;
            $this->category_id = $task->category_id;
            $this->assigned_to = $task->assigned_to;
        }

    }

    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'status' => 'required',
            'category_id' => 'required|exists:categories,id',
            'assigned_to' => 'nullable|exists:users,id',
        ]);

        try {

            if ($this->taskId) {
                // Update existing task
                    $task = Task::findOrFail($this->taskId);
                    $task->update([
                        'title' => $this->title,
                        'status' => $this->status,
                        'category_id' => $this->category_id,
                        'assigned_to' => $this->assigned_to,
                    ]);
                    session()->flash('success', 'Task updated successfully!');

            } else {


                // if(!auth()->user()->canAny(['tasks.create','tasks.create.own'])){
                //     session()->flash('danger', 'You do not have permission to create tasks.');
                // }

                // if(!auth()->user()->can('tasks.create.own') && $this->assigned_to == null){
                //     session()->flash('danger', 'You do not have permission to create tasks.');
                // }

                // Create new task
                Task::create([
                    'title' => $this->title,
                    'status' => $this->status,
                    'category_id' => $this->category_id,
                    'assigned_to' => $this->assigned_to,
                ]);

            }
        }
        catch (\Exception $e) {
            session()->flash('danger', $e->getMessage() );
        }

        return redirect()->route('task-page');
    }


    public function render()
    {
        return view('livewire.page.task-form-page')
            ->layout('layout.dashboard');

    }
}
