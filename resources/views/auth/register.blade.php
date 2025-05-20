<x-guest-layout>
    <h3 class="mt-3 text-2xl font-bold text-center text-gray-800 dark:text-gray-200 mb-6">Create Your Account</h3>
    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Full Name')" class="text-lg font-medium text-gray-700" />
            <x-text-input id="name" class="block mt-2 w-full px-4 py-2 border rounded-lg focus:ring focus:ring-green-300" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500 text-sm" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email Address')" class="text-lg font-medium text-gray-700" />
            <x-text-input id="email" class="block mt-2 w-full px-4 py-2 border rounded-lg focus:ring focus:ring-green-300" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" class="text-lg font-medium text-gray-700" />
            <x-text-input id="password" class="block mt-2 w-full px-4 py-2 border rounded-lg focus:ring focus:ring-green-300"
                          type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-lg font-medium text-gray-700" />
            <x-text-input id="password_confirmation" class="block mt-2 w-full px-4 py-2 border rounded-lg focus:ring focus:ring-green-300"
                          type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500 text-sm" />
        </div>

        <div class="flex flex-col sm:flex-row items-center justify-between mt-6">
            <a class="text-sm text-gray-600 dark:text-gray-400 hover:underline focus:outline-none focus:ring focus:ring-green-300" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            <button class="mt-4 sm:mt-0 px-6 py-2 text-lg font-medium text-white bg-green-500 rounded-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring focus:ring-orange-300">
                Register
            </button>
        </div>
    </form>
</x-guest-layout>
