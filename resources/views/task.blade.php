@extends('layout.dashboard')

@section('title', 'Task Details')

@section('content')
    {{-- <p>Task Page</p> --}}

    {{-- Generate component --}}

    @foreach ($tasks as $task)
        <livewire:task-card :task="$task" />
    @endforeach

    <livewire:livecycle-demo name="Liza" />

    <livewire:counter :start='5' />

    <livewire:toast-action />
    <livewire:widget.table />
@endsection
