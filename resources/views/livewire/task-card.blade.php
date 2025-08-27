

{{-- <div style="border: 1px solid #ccc; padding: 10px; border-radius: 5px; margin-bottom: 10px;bg-red-100;bgcolor: red;"> --}}
<div class="mb-2 p-4 border rounded shadow-sm bg-red-100">

    {{-- In work, do what you enjoy. --}}
    {{ $task['title'] }} <br>
    {{ $task['category'] }} <br>
    <button wire:click="view" class="px-4 py-2 bg-blue-500 text-white rounded">
        View
    </button>
</div>

