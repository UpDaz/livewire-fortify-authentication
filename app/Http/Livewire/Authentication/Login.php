<?php

namespace App\Http\Livewire\Authentication;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Fortify;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $remember_me = false;

    protected $queryString = [];

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function render()
    {
        return view('livewire.authentication.login');
    }

    public function authenticateUser()
    {
        $this->validate();

        $email = $this->email;
        $password = $this->password;
        $user = User::where('email', $email)->first();
        if (
            $user &&
            Hash::check($password, $user->password)
        ) {
            Auth::attempt([
                'email' => $this->email,
                'password' => $this->password,
            ], $this->remember_me);
            $this->emit('updateView', 'success');
        }
    }
}
