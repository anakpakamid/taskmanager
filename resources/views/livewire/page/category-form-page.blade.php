<div>
    <form wire:submit.prevent="save" class="bg-white p-6 rounded shadow-md " style="width: 300px; margin: auto; margin-top: 100px;">
        <h1 class="text-2xl fond-bold text-blue-600">Category</h1> <br>

            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="input border-1" wire:model="name"/>
                @error('name') <span class="text-red-600">{{ $message }}</span> @enderror
                <br><br>

            </div>
            <div>
                <label for="email" form-control w-full max-w-xs>Color:</label>
                <input type="color" class="input input-bordered w-full max-w-xs" name="color" id="color" wire:model="color" />
                @error('color') <span class="text-red-600">{{ $message }}</span> @enderror

                <br><br>
            </div>


            <div class="flex justify-end space-x-2">
            <a href="{{ route('category') }}" class="btn btn-soft">Cancel</a>

            <button type="submit" class="btn btn-primary">
            {{ $categoryId ? 'Update' : 'Create' }}
            </button>
        </div>



    </form>
</div>
