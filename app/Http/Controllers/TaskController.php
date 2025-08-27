<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = [
            ['id' => 1, 'title' => 'Task 1', 'category' => 'Work', 'due_date' => '2023-10-01', 'status' => 'Pending'],
            ['id' => 2, 'title' => 'Task 2', 'category' => 'Personal', 'due_date' => '2023-10-05', 'status' => 'Completed'],
            ['id' => 3, 'title' => 'Task 3', 'category' => 'Shopping', 'due_date' => '2023-10-03', 'status' => 'Pending'],
        ];


        return view('task', compact('tasks'));
    }
}
