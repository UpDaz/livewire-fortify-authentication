<?php

namespace App\Http\Livewire\Authentication;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $terms = false;

    protected $queryString = [];

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required|same:password',
        'terms' => 'required|accepted',
    ];

    public function render()
    {
        return view('livewire.authentication.register');
    }

    public function registerUser()
    {
        $this->validate();

        $user = (new CreateNewUser())->create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'password_confirmation' => $this->password_confirmation,
        ]);

        if (
            Auth::attempt([
                'email' => $this->email,
                'password' => $this->password,
            ])
        ) {
            $this->emit('updateView', 'success');
        }
    }
}
