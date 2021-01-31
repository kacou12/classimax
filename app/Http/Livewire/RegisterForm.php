<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegisterForm extends Component
{
    public $password, $name, $email, $password_confirmation;
    public $registerForm = false;
    
    protected $rules = [
        'name' => 'required|min:2|unique:App\Models\User|regex:/^[\pL\s\-]+$/u|max:30',
        'email' =>'required|email|unique:App\Models\User|min:5',
        'password' => 'required|min:8|confirmed|max:100',
        // 'password_confirmation' =>'required|min:8'
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
        if(User::create(['name' => $this->name, 'email' => $this->email,'password' => $this->password])){
            session()->flash('success', 'Enregistrement reussi , veillez vous connecter');
            return redirect()->route('login');
        }
        session()->flash('no_log', 'Veillez verifier les informations saisies');
    }
}
