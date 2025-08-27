<div>
    <button wire:click="success" class="px-4 py-2 bg-green-500 text-white rounded">
        Success
    </button>

    <button wire:click="error" class="px-4 py-2 bg-red-500 text-white rounded">
        Error
    </button>

     <button wire:click="warning" class="px-4 py-2 bg-yellow-500 text-white rounded">
        Warning
    </button>

    <br/>
    <br/>
    <div class="bg-{{$color}}-500">
        {{$status}}
    </div>
</div>
