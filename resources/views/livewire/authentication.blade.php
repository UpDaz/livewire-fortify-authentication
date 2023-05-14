<div>
    <div wire:key="login-view">
        @if($currentView == 'login')
        @livewire('authentication.login')
        @endif
    </div>
    <div wire:key="register-view">
        @if($currentView == 'register')
        @livewire('authentication.register')
        @endif
    </div>
    <div wire:key="forgot-password-view">
        @if($currentView == 'forgot-password')
        @livewire('authentication.forgot-password')
        @endif
    </div>
    <div wire:key="register-view">
        @if($currentView == 'success')
        <b>Sign in successfully !</b>
        <a wire:click.prevent="$emit('logoutUser')" href="#" class="flex w-full justify-center rounded-md bg-blue-700 mt-6 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700">
            Log out
        </a>
        @endif
    </div>
</div>
