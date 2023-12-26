<x-guest-layout>
    <x-slot name="title">
        {{ __('Register') }}
    </x-slot>

    <h1 class="mb-5 text-xl font-medium text-center text-gray-800 sm:text-2xl">
        {{ __('Register') }}
    </h1>

    <main>
        <form action="{{ route('register') }}" method="POST" class="space-y-4">
            @csrf

            {{-- Name --}}
            <div>
                <x-input-label for="name" :text="__('Name')" />
                <x-text-input name="name" id="name" class="mt-1" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            {{-- Email --}}
            <div>
                <x-input-label for="email" :text="__('Email')" />
                <x-text-input type="email" name="email" id="email" class="mt-1" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            {{-- Password --}}
            <div>
                <x-input-label for="password" :text="__('Password')" />
                <x-text-input type="password" name="password" id="password" class="mt-1" required />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            {{-- Confirm Password --}}
            <div>
                <x-input-label for="password_confirmation" :text="__('Confirm Password')" />
                <x-text-input type="password" name="password_confirmation" id="password_confirmation" class="mt-1" required />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <x-button class="w-full bg-gray-800 hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900">
                {{ __('Register') }}
            </x-button>
        </form>

        <div class="pt-4 text-sm text-center text-gray-700">
            {{ __('Already have an account?') }} <a href="{{ route('login') }}" class="text-indigo-700 underline transition hover:text-indigo-500 decoration-2 decoration-indigo-500/30">{{ __('Login') }}</a>
        </div>
    </main>
</x-guest-layout>
