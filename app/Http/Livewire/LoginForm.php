<?php
namespace App\Http\Livewire;
use Livewire\Component;
use Hash;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{
    public $password, $name;
    public $registerForm = false;

    protected $rules = [
        'name' => 'required|min:6|regex:/^[\pL\s\-]+$/u',
        'password' => 'required|min:8|',
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
            return redirect()->intended('home'); 
        }else{
            session()->flash('error', 'email and password are wrong.');
        }
    }
    //public function register()
    //{
    //    $this->registerForm = !$this->registerForm;
    //}
    //public function registerStore()
    //{
    //    $validatedDate = $this->validate([
    //        'name' => 'required',
    //        'email' => 'required|email',
    //        'password' => 'required',
    //    ]);
    //    $this->password = Hash::make($this->password); 
    //    User::create(['name' => $this->name, 'email' => $this->email,'password' => $this->password]);
    //    session()->flash('message', 'Your register successfully Go to the login page.');
    //    $this->resetInputFields();
    //}
}