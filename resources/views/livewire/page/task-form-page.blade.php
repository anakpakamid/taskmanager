<div>

    <div class="max-w-2xl mx-auto mt-10 bg-white rounded-lg shadow p-4" x-cloak x-data="{ showForm: false }"
    x-init="setTimeout(() => showForm = true, 200)" x-show="showForm" x-transition>
        <h1 class="text-2xl font-bold mb-6">
        {{ $taskId ? 'Edit Task' : 'Create Task' }}
        </h1>
    <form wire:submit.prevent="save" class="space-y-4">
        <!-- Title -->
        <div>
            <label class="block font-medium">Title</label>
            <input type="text" wire:model="title" class="w-full border rounded p-2" />
            @error('title') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>
        <!-- Status -->
        <div>
            <label class="block font-medium">Status</label>
            <select wire:model="status" class="w-full border rounded p-2">
            <option value="Pending">Pending</option>
            <option value="In Progress">In Progress</option>
            <option value="Completed">Completed</option>
            </select>
            @error('status') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <!-- Category -->
        <div>
            <label class="block font-medium">Category</label>
            <select wire:model="category_id" class="w-full border rounded p-2">
                <option value="">-- Select Category --</option>
                @foreach($categories as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
            @error('category_id') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>
        <!-- Assigned To -->
        <div>
            <label class="block font-medium">Assigned To</label>
            <select wire:model="assigned_to" class="w-full border rounded p-2">
                <option value="">-- Unassigned --</option>
                @foreach($users as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
            @error('assigned_to') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

<br>
        <!-- Submit -->
        <div class="flex justify-end space-x-2">
            <a href="{{ route('task-page') }}" class="px-4 py-2 bg-gray-400 text-white rounded">Cancel</a>

            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">
            {{ $taskId ? 'Update' : 'Create' }}
            </button>
        </div>


    </form>
    </div>
</div>
