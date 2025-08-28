<div >

       <form wire:submit.prevent="authenticate" class="bg-white p-6 rounded shadow-md " style="width: 300px; margin: auto; margin-top: 100px;">
        <h1 class="text-2xl fond-bold text-blue-600">Sign In</h1>
        @if(session()->has('error'))
        <div class="px-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded" role="alert">
            <strong class="font-bold">Danger!</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
        @endif
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="input border-1" wire:model="email"/>
                @error('email') <span class="text-red-600">{{ $message }}</span> @enderror
                <br><br>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="input border-1" wire:model="password"/>
                @error('password') <span class="text-red-600">{{ $message }}</span> @enderror
                <br><br>
            </div>

            <button type="submit" class="btn btn-primary">Sign In</button>
            <a href="/" class="btn btn-soft">Cancel</a>

        </form>
</div>
