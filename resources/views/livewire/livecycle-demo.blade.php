<div class="p-6">
   <h2 class="text-xl font-bold">Livewire Lifecycle Demo</h2>

   <input type="text" wire:model="name" class="border p-2 mt-3" placeholder="Enter your name">

   <p class="mt-3">Hello, {{ $name }} 👋</p>

   <button wire:click="$refresh" class="bg-blue-500 text-white px-3 py-1 rounded">
       Force Re-render
   </button>
</div>
