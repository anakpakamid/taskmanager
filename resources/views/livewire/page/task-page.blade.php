<div x-cloak x-data="{ showForm: false }" x-init="setTimeout(() => showForm = true, 200)" x-show="showForm"
x-transition>
    {{-- @foreach ($tasks as $task)
        <livewire:task-card :task="$task" />
    @endforeach


    <livewire:livecycle-demo name="Liza" />

    <livewire:counter :start='5' />

    <livewire:toast-action /> --}}

    {{-- <livewire:widget.table :columns="$columns" :rows="$rows" :route="$route" /> --}}
    <div x-data="{
    filters: @entangle('filters'),
    showFilters: false,
    }" class="py-4 bg-white w-full rounded-lg shadow">
        <div class="px-4 mb-5">
        <!-- Toggle filters -->
        <div class="flex flex-col">
            <button type="button" x-on:click="showFilters = !showFilters"
            class="my-5 w-1/6 flex-end bg-gray-200 text-gray-800 font-bold py-2 px-4">
            Toggle Filters
            </button>

           <a href="{{ route('task.form', 'create') }}"
                wire:navigate
                class="my-5 flex-end bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4">
                Create Task
            </a>


            <form wire:submit="loadTask()" x-show="showFilters" x-transition class="my-2 w-full">
            <!-- Search Form -->
            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" x-model="filters.title"
                class="border rounded px-2 py-1 w-full mb-2">
            </div>
            <div>
                <label for="status">Status:</label>
                <select id="status" x-model="filters.status" class="border rounded px-2 py-1 w-full mb-2">
                <option value="">All</option>
                <option value="Pending">Pending</option>
                <option value="In Progress">In Progress</option>
                <option value="Completed">Completed</option>
                </select>
            </div>
            <div>
                <label for="status">Category:</label>
                <select id="status" x-model="filters.category_id"
                class="border rounded px-2 py-1 w-full mb-2">
                <option value="">-- Select Status --</option>
                @foreach ($categories as $category)
                <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                @endforeach
                </select>
            </div>

            <div>
                <label for="status">Assigned To:</label>
                <select id="status" x-model="filters.assigned_to"
                class="border rounded px-2 py-1 w-full mb-2">
                <option value="">-- Select User --</option>
                 @foreach ($users as $user) --}}
                 <option value="{{ $user['id'] }}">{{ $user['name'] }}</option>
                @endforeach
                </select>
            </div>
            <button type="button"
                class="float-right my-5 ml-2 bg-red-200 hover:bg-red-300 text-gray-800 font-bold py-2 px-4"
                x-on:click="filters = { title: '', status: '', assigned_to: '', category_id: '' }"
                wire:click="resetTable()">
                Reset
            </button>
            <button type="submit"
            class="float-right my-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2
            px-4">Search
            </button>

            </form>
        </div>
    </div>
    <div class="px-4">
    <livewire:widget.table :columns="$columns" :rows="$rows" :route="$route"
    :current-page="$page" :total-pages="$totalPages"
    form-route="task-form" :key="md5(json_encode($rows))" class="mt-5" />
    </div>

    </div>

</div>
