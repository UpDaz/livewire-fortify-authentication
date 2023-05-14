<?php

namespace App\Http\Livewire\Authentication;

use Illuminate\Support\Facades\Password;
use Livewire\Component;

class ForgotPassword extends Component
{
    public $email;

    protected $queryString = [];

    protected $rules = [
        'email' => 'required|email'
    ];

    public function render()
    {
        return view('livewire.authentication.forgot-password');
    }

    public function sendResetLink()
    {
        $this->validate();

        Password::sendResetLink([
            'email' => $this->email,
        ]);

        $this->emit('updateView', 'login');
    }
}
