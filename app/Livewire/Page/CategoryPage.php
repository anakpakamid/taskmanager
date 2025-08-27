<?php

namespace App\Livewire\Page;

use Livewire\Component;

class CategoryPage extends Component
{
   public $columns = [
        ['field' => 'id', 'label' => 'ID'],
        ['label' => 'Category', 'field' => 'name'],
        ['label' => 'Description', 'field' => 'description'],
        ['label' => 'Created At', 'field' => 'created_at'],
    ];

    public $route = 'category';

    public $rows = [
        ['id'=> '1','name' => 'Work', 'description' => 'Tasks related to work', 'created_at' => '2024-01-01'],
        ['id'=> '2','name' => 'Personal', 'description' => 'Personal tasks and errands', 'created_at' => '2024-02-15'],
        ['id'=> '3','name' => 'Shopping', 'description' => 'Grocery and shopping lists', 'created_at' => '2024-03-10'],
    ];

    public function render()
    {
        return view('livewire.page.category-page')->layout('layout.dashboard');
    }
}
