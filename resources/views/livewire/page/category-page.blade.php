<div x-cloak x-data="{ showForm: false }" x-init="setTimeout(() => showForm = true, 200)" x-show="showForm"
x-transition>

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

            <form wire:submit="loadTask()" x-show="showFilters" x-transition class="my-2 w-full">
            <!-- Search Form -->
            <div>
                <label for="title">Name:</label>
                <input type="text" id="name" x-model="filters.name"
                class="border rounded px-2 py-1 w-full mb-2">
            </div>
            <div>
                <label for="title">Color:</label>
                <input type="text" id="color" x-model="filters.color"
                class="border rounded px-2 py-1 w-full mb-2">
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

        @if(session()->has('success'))
        <div class="px-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif

    <a href="{{ route('category.form', 'create') }}"
        wire:navigate
        class="my-5 flex-end bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-4 float-right">
        Create Category
    </a>

      <livewire:widget.table :columns="$columns" :rows="$rows" :route="$route"
        :current-page="$page" :total-pages="$totalPages"
        form-route="category" :key="md5(json_encode($rows))" class="mt-5" />

</div>
