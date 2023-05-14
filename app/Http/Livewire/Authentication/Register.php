<?php

namespace App\Http\Livewire\Authentication;

use App\Actions\Fortify\CreateNewUser;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
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

        Fortify::authenticateUsing(function (Request $request) use ($user) {
            $user = User::where('email', $user->email)->first();

            if ($user) {
                $this->emit('updateView', 'success');
            }
        });
    }
}
