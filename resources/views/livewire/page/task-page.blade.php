<div>
    {{-- @foreach ($tasks as $task)
        <livewire:task-card :task="$task" />
    @endforeach


    <livewire:livecycle-demo name="Liza" />

    <livewire:counter :start='5' />

    <livewire:toast-action /> --}}

    {{-- <livewire:widget.table :columns="$columns" :rows="$rows" :route="$route" /> --}}
    
    <livewire:widget.table :columns="$columns" :rows="$rows" :route="$route" current-page=“1” total-pages=“2”
            form-route="task-form" :key="md5(json_encode($rows))" class="mt-5" />
</div>
