<?php

namespace App\Livewire\Page;

use Livewire\Component;
use App\Models\User;

class SignupPage extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function mount()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->password_confirmation = '';
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Registration logic here (e.g., create user, send verification email, etc.)
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        session()->flash('success', 'Registration successful! Please check your email to verify your account.');

        // Optionally, redirect to another page
        return redirect()->route('auth.sign-in');
    }

    public function render()
    {
        return view('livewire.page.signup-page')->layout('layout.app');
    }
}
