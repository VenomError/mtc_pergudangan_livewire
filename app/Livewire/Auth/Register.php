<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    #[Validate('required')]
    public $name;

    #[Validate('required|email:rfc|unique:users,email')]
    public $email;

    #[Validate('required|numeric|unique:users,phone')]
    public $phone;

    #[Validate('required')]
    public $password;

    public $button = "Sign Up";

    public function render()
    {
        return view('livewire.auth.register');
    }

    public function register()
    {
        $this->validate();
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => Hash::make($this->password)
        ];
        if (User::create($data)) {
            flash()->success(title: "Register Success", message: "Welcome $this->name");
            return redirect()->route('login');
        }
        flash()->error(title: "Register Failed", message: "Failed to Register , please try again");
    }
}
