<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class LivecycleDemo extends Component
{
    public $name='Guest';

    // Called once when the component is first loaded
    public function mount($name = "Guest")
    {
        $this->name = $name;
        Log::info("mount() called: name = { $this->name}");
    }

    // Called before a property is updated
    public function updating($name, $value)
    {
        Log::info("updating() called: { $name} is changing to { $value}");
    }

    // Called after a property is updated
    public function updated($name, $value)
    {
        Log::info("updated() called: { $name} is now {$value}");
    }



    // Called before a specific property updates
    public function updatingName($value)
    {
        Log::info("updatingName() called: new value =
        {$value}");
    }
    // Called after a specific property updates
    public function updatedName($value)
    {
        Log::info("updatedName() called: updated value =
        {$value}");
    }

    // Called before re-render on each
    public function hydrate()
    {
    Log::info("hydrate() called");
    }
    // Called after rendering is done
    public function dehydrate()
    {
        Log::info("dehydrate() called");
    }

    // Called whenever Livewire re-renders
    public function render()
    {
        Log::info("render() called" );

        return view('livewire.livecycle-demo' );
    }
}
