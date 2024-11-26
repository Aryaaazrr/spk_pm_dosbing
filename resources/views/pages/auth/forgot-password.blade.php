<x-guest-layout>

    <div class="flex flex-col items-center justify-center">
        <div class="w-9/12 py-4">
            <h1 class="text-center font-bold text-2xl"> {{ __('Forgot Password') }}</h1>
            <p class="text-center py-2"> {{ __('Enter your email below to reset your account password') }}</p>
        </div>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                placeholder="Enter your email" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex flex-wrap gap-4 my-4">
            <x-primary-button class="w-full justify-center capitalize bg-primary py-3">
                {{ __('Send Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
