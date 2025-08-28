<div>
<form wire:submit.prevent="save" class="bg-white p-6 rounded shadow-md " style="width: 300px; margin: auto; margin-top: 100px;">
        <h1 class="text-2xl fond-bold text-blue-600">Sign Up</h1>
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="input border-1" wire:model="name"/>
                @error('name') <span class="text-red-600">{{ $message }}</span> @enderror <br><br>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="input border-1" wire:model="email"/>
                @error('email') <span class="text-red-600">{{ $message }}</span> @enderror<br><br>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="input border-1" wire:model="password"/>
                @error('password') <span class="text-red-600">{{ $message }}</span> @enderror<br><br>
            </div>

            <div>
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="input border-1" wire:model="password_confirmation"/>
                @error('password_confirmation') <span class="text-red-600">{{ $message }}</span> @enderror<br><br>
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>
            <a href="/" class="btn btn-soft">Cancel</a>



</form>
</div>
