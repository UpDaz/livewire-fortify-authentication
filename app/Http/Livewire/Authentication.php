<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Authentication extends Component
{
    protected $listeners = [
        'logoutUser' => 'logoutCurrentUser',
        'updateView' => 'updateCurrentView'
    ];

    protected $views = [
        'login',
        'register',
        'forgot-password',
        'success',
    ];

    public $currentView;

    public $register = [
        'email' => null,
        'password' => null,
        'confirm-password' => null,
        'terms' => false,
    ];

    public function mount()
    {
        $this->currentView = (Auth::check()) ? 'success' : 'login';
    }

    public function render()
    {
        return view('livewire.authentication');
    }

    public function updateCurrentView($selectedView)
    {
        $this->currentView = $selectedView;
    }

    public function logoutCurrentUser()
    {
        Auth::logout();
        $this->emit('updateView', 'login');
    }
}
