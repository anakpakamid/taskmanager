<?php

namespace App\Livewire\Page;

use Livewire\Component;
use App\Models\Category;

class CategoryFormPage extends Component
{
    public $categoryId;
    public $name;
    public $color;

    public function mount($id)
    {
        // $this->categoryId = $id;

        if ($id != "create") {
            $category = Category::findOrFail($id);
            $this->categoryId = $category->id;
            $this->name = $category->name;
            $this->color = $category->color;
        }
    }

    public function save()
    {
        // dd($this->all());
        $this->validate([
            'name' => 'required|string|max:255',
            'color' => 'required|string|max:7',
        ]);

        if ($this->categoryId) {
            // Update existing category
            $category = Category::findOrFail($this->categoryId);
            $category->update([
                'name' => $this->name,
                'color' => $this->color,
            ]);
            session()->flash('success', 'Category updated successfully!');
        } else {
            // Create new category
            Category::create([
                'name' => $this->name,
                'color' => $this->color,
            ]);
            session()->flash('success', 'Category created successfully!');
        }

        return redirect()->route('category');
    }


    public function render()
    {
        return view('livewire.page.category-form-page')->layout('layout.dashboard');
    }
}
