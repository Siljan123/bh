<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

   
          
            <p class="mt-2 text-center text-gray-500 dark:text-gray-400">Sign in to your account</p>

            <form method="POST" action="{{ route('login') }}" class="mt-6">
                @csrf
                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm text-gray-700 dark:text-gray-200">Email Address</label>
                    <input id="email" name="email" type="email" :value="old('email')" required autofocus autocomplete="email"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-green-500 focus:ring focus:ring-green-300 focus:outline-none focus:ring-opacity-50"
                        placeholder="Enter your email">
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="block text-sm text-gray-700 dark:text-gray-200">Password</label>
                    <input id="password" name="password" type="password" required autocomplete="current-password"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-green-500 focus:ring focus:ring-green-300 focus:outline-none focus:ring-opacity-50"
                        placeholder="Enter your password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
                </div>

                <!-- Forgot Password -->
                <div class="mt-2 text-right">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="text-sm text-green-600 hover:underline dark:text-green-400">Forgot your password?</a>
                    @endif
                </div>

                <!-- Submit Button -->
                <div class="mt-6">
                    <button type="submit"
                        class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-300 transform bg-green-600 rounded-lg hover:bg-green-700 focus:outline-none focus:ring focus:ring-green-300 focus:ring-opacity-50">
                        Sign In
                    </button>
                </div>
            </form>
       
        <!-- Footer -->
        <div class="flex items-center justify-center py-4 bg-gray-50 dark:bg-gray-700">
            <p class="text-sm text-gray-600 dark:text-gray-200">Don't have an account? 
                <a href="{{ route('register') }}" class="font-medium text-green-600 hover:underline dark:text-green-400">Register</a>
            </p>
        </div>

</x-guest-layout>
