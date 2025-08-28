<?php

namespace App\Livewire\Page;

use Livewire\Component;

class SigninPage extends Component
{
    public $email;
    public $password;

    public function mount()
    {
        $this->email = '';
        $this->password = '';
    }

    public function authenticate()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('success', 'Login successful!');
            return redirect()->route('task-page');
        } else {
            session()->flash('error', 'Invalid credentials. Please try again.');
        }

    }
    public function render()
    {
        return view('livewire.page.signin-page')->layout('layout.app');
    }
}
