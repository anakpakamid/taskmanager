<?php

namespace App\Livewire\Page;

use Livewire\Component;
use App\Models\Category;
class CategoryPage extends Component
{
    public $categories = [];

    public $filters = [
        'name' => '',
        'color' => '',
     ];
    public $allowEdit ;
    public $allowDelete ;

   public $columns = [
            ['field' => 'id', 'label' => 'ID'],
            ['field' => 'name', 'label' => 'Name'],
            ['field' => 'color', 'label' => 'Color'],
        ];

    public $rows = [];

    public $route = 'category';

    public $page=1;
    public $totalPages=0;
    public $limit=10;

    public $listeners = [
        'previousPage' => 'onPreviousPage',
        'nextPage' => 'onNextPage',
    ];

    public function mount(){

        $this->loadTask();
    }

    public function loadTask(){
        $offset = ($this->page - 1) * $this->limit;

        $query = Category::search($this->filters);

        $this->totalPages = (int) ceil(Category::count() / $this->limit);
        $offset = ($this->page - 1) * $this->limit;
        $this->rows = $query
            ->limit($this->limit)
            ->offset($offset)
            ->get();
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
            'name' => '',
            'column' => '',
       ];
       $this->loadTask();
    }

    public function render()
    {
        return view('livewire.page.category-page')->layout('layout.dashboard');
    }
}
