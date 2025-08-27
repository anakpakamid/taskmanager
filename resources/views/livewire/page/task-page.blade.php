<div>
    {{-- @foreach ($tasks as $task)
        <livewire:task-card :task="$task" />
    @endforeach


    <livewire:livecycle-demo name="Liza" />

    <livewire:counter :start='5' />

    <livewire:toast-action /> --}}

    <livewire:widget.table :columns="$columns" :rows="$rows" :route="$route" />
</div>
