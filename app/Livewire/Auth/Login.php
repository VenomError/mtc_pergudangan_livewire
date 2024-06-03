<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class Login extends Component
{
    #[Validate('required|email:dns')]
    public $email;

    #[Validate('required')]
    public $password;

    public $rememberMe = false;

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login()
    {
        $this->validate();

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->rememberMe)) {
            throw ValidationException::withMessages([
                'login' => 'Login Failed',
            ]);
        }
        session()->regenerate();

        flash()->option('position', 'bottom-right')->success("welcome " . Auth::user()->name);
        return redirect()->intended('/');
    }
}
