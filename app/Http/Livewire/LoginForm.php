<?php
namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginForm extends Component
{
    public $password, $name, $email;
    public function addTodo(){
        return '50';
    }

    protected $rules = [
        'name' => 'required|min:2|regex:/^[\pL\s\-]+$/u|max:30|min:3',
        'password' => 'required|min:8|max:100',
    ];

    public function render()
    {
        return view('livewire.login-form');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function login()
    {
        $validatedData = $this->validate();

        if(Auth::attempt(['name' => $this->name, 'password' => $this->password])){
            session()->flash('success', 'Connexion reussie');
            return redirect()->intended('home'); 
        }else{
            
            session()->flash('no_log', ' nom ou mot de passe incorrect');
        }
    }

   
}