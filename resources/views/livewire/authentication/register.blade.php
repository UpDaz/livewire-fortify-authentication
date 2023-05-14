<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="https://www.updaz.fr/img/logo-blue.png" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create new account</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form wire:submit.prevent="registerUser" class="space-y-6" action="#" method="POST">
        <div>
            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Full name</label>
            <div class="mt-2">
              <input wire:model.defer="name" id="name" name="name" type="text" autocomplete="name" required class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-700 sm:text-sm sm:leading-6">
            </div>
            <div> @error('name'){{ $message }}@enderror </div>
          </div>

        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
          <div class="mt-2">
            <input wire:model.defer="email" id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-700 sm:text-sm sm:leading-6">
          </div>
          <div> @error('email'){{ $message }}@enderror </div>
        </div>

        <div>
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            <div class="mt-2">
              <input wire:model.defer="password" id="password" name="password" type="password" required class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-700 sm:text-sm sm:leading-6">
            </div>
            <div> @error('password'){{ $message }}@enderror </div>
        </div>

        <div>
            <label for="password-confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirm password</label>
            <div class="mt-2">
              <input wire:model.defer="password_confirmation" id="password-confirmation" name="password-confirmation" type="password" required class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-700 sm:text-sm sm:leading-6">
            </div>
            <div> @error('password'){{ $message }}@enderror </div>
        </div>

        <div>
            <div class="flex items-center gap-2">
                <input wire:model.defer="terms" id="terms" name="terms" type="checkbox" required class="h-4 w-4 rounded ring-1 ring-inset ring-gray-300">
                <label for="terms" class="block text-sm font-medium leading-6 text-gray-900 ml-3">I accept the <a href="#" class="underline">Terms ans Conditions</a></label>
            </div>
            <div> @error('terms'){{ $message }}@enderror </div>
        </div>
       
        <div>
          <button wire:loading.remove type="submit" class="flex w-full justify-center rounded-md bg-blue-700 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700">Sign in</button>
          <div wire:loading>
              Processing...
          </div>
        </div>
      </form>
  
      <p class="mt-10 text-center text-sm text-gray-500">
        Already an account ?
        <a wire:click.prevent="$emit('updateView', 'login')" href="#" class="font-semibold leading-6 text-blue-700 hover:text-blue-500">Sign in to your account</a>
      </p>
    </div>
  </div>
  