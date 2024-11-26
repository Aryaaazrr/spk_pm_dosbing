<x-guest-layout>

    <div class="flex flex-col items-center justify-center">
        <div class="w-9/12 py-4">
            <h1 class="text-center font-bold text-2xl"> {{ __('Login') }}</h1>
            <p class="text-center py-2"> {{ __('Enter your email below to login to your account') }}</p>
        </div>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                placeholder="Enter your email" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                placeholder="Enter your password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-2">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:text-gray-900"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot Password?') }}
                </a>
            @endif
        </div>

        <div class="flex flex-wrap gap-4 mt-4">
            <x-primary-button class="w-full justify-center capitalize bg-primary py-3">
                {{ __('Login') }}
            </x-primary-button>

            <x-secondary-button class="w-full justify-center capitalize text-primary py-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 me-2">
                    <path
                        d="M3.06364 7.50914C4.70909 4.24092 8.09084 2 12 2C14.6954 2 16.959 2.99095 18.6909 4.60455L15.8227 7.47274C14.7864 6.48185 13.4681 5.97727 12 5.97727C9.39542 5.97727 7.19084 7.73637 6.40455 10.1C6.2045 10.7 6.09086 11.3409 6.09086 12C6.09086 12.6591 6.2045 13.3 6.40455 13.9C7.19084 16.2636 9.39542 18.0227 12 18.0227C13.3454 18.0227 14.4909 17.6682 15.3864 17.0682C16.4454 16.3591 17.15 15.3 17.3818 14.05H12V10.1818H21.4181C21.5364 10.8363 21.6 11.5182 21.6 12.2273C21.6 15.2727 20.5091 17.8363 18.6181 19.5773C16.9636 21.1046 14.7 22 12 22C8.09084 22 4.70909 19.7591 3.06364 16.4909C2.38638 15.1409 2 13.6136 2 12C2 10.3864 2.38638 8.85911 3.06364 7.50914Z">
                    </path>
                </svg>
                {{ __('Login with Google') }}
            </x-secondary-button>
        </div>

        <div class="flex items-center justify-center mt-4">
            <p class="me-2">{{ __('Dont Have Account?') }}</p>
            <a class="text-primary dark:text-primary hover:text-secondary dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-0"
                href="{{ route('register') }}">
                {{ __('Register') }}
            </a>
        </div>
    </form>
</x-guest-layout>
