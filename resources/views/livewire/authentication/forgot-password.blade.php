<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="https://www.updaz.fr/img/logo-blue.png" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Forgot password ?</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form wire:submit.prevent="sendResetLink" class="space-y-6" action="#" method="POST">
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
          <div class="mt-2">
            <input wire:model.defer="email" id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-700 sm:text-sm sm:leading-6">
          </div>
          <div> @error('email'){{ $message }}@enderror </div>
        </div>
  
        <div>
            <button wire:loading.remove type="submit" class="flex w-full justify-center rounded-md bg-blue-700 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700">
                Send reset link
            </button>
            <div wire:loading>
                Processing...
            </div>
        </div>
      </form>
      
      <p class="mt-10 text-left text-sm text-gray-500">
        Remember your password ?
        <br/>
        <a wire:click.prevent="$emit('updateView', 'login')" href="#" class="font-semibold leading-6 text-blue-700 hover:text-blue-500">Sign in to your account</a>
      </p>
      <p class="mt-10 text-left text-sm text-gray-500">
        Not a member ?
        <a wire:click.prevent="$emit('updateView', 'register')" href="#" class="font-semibold leading-6 text-blue-700 hover:text-blue-500">New account</a>
      </p>
    </div>
  </div>
  