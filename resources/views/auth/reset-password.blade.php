@extends('layouts.default')

@section('content')

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="https://www.updaz.fr/img/logo-blue.png" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Reset your password</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{ route('password.update') }}" method="POST">
        @csrf
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Your email</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" value="{{ request()->query('email') }}" required class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-700 sm:text-sm sm:leading-6">
          </div>
          <div> @error('email'){{ $message }}@enderror </div>
        </div>

        <div>
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">New password</label>
            <div class="mt-2">
              <input wire:model.defer="password" id="password" name="password" type="password" required class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-700 sm:text-sm sm:leading-6">
            </div>
            <div> @error('password'){{ $message }}@enderror </div>
        </div>

        <div>
            <label for="password-confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirm password</label>
            <div class="mt-2">
              <input id="password-confirmation" name="password_confirmation" type="password" required class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-700 sm:text-sm sm:leading-6">
            </div>
            <div> @error('password_confirmation'){{ $message }}@enderror </div>
        </div>
        <input type="hidden" name="token" value="{{ $token }}">
        <div>
          <button wire:loading.remove type="submit" class="flex w-full justify-center rounded-md bg-blue-700 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700">Sign in</button>
          <div wire:loading>
              Processing...
          </div>
        </div>
      </form>
    </div>
</div>
@endsection
