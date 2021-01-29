<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegisterForm extends Component
{
    public $password, $name, $email;
    public $registerForm = false;
    
    protected $rules = [
        'name' => 'required|min:2|regex:/^[\pL\s\-]+$/u|max:30|min:30',
        'email' =>'required|',
        'password' => 'required|min:8',
    ];

    public function render()
    {
        return view('livewire.register-form');
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function register()
    {
        $validatedData = $this->validate();

        $this->password = Hash::make($this->password); 
        User::create(['name' => $this->name, 'email' => $this->email,'password' => $this->password]);
        session()->flash('register-message', 'Your register successfully Go to the login page.');

        return redirect()->route('livewire-login');
    }
}
