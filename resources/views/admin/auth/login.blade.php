<x-guest-layout>
    <div class="flex flex-col items-center justify-center">
        <div class="w-9/12 py-4">
            <h1 class="text-center font-bold text-2xl"> {{ __('Login Administrator') }}</h1>
            <p class="text-center py-2"> {{ __('Enter your email below to login to your account') }}</p>
        </div>
    </div>

    <!-- Session Status -->
    @if (session('error'))
        <x-auth-session-error class="mb-4" :status="session('error')" />
    @else
        <x-auth-session-status class="mb-4" :status="session('status')" />
    @endif

    <form method="POST" action="{{ route('admin.auth.login.process') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex flex-col items-center justify-center my-6">
            <x-primary-button class="w-full justify-center capitalize bg-primary py-3">
                {{ __('Login') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
