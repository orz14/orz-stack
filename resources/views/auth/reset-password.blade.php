<x-guest-layout>
    <x-slot name="title">
        {{ __('Reset Password') }}
    </x-slot>

    <h1 class="mb-5 text-xl font-medium text-center text-gray-800 sm:text-2xl">
        {{ __('Reset Password') }}
    </h1>

    <main>
        <form action="{{ route('password.store') }}" method="POST" class="space-y-4">
            @csrf

            {{-- Password Reset Token --}}
            <input type="hidden" name="token" value="{{ $request->route('token') }}" />

            {{-- Email --}}
            <div>
                <x-input-label for="email" :text="__('Email')" />
                <x-text-input type="email" name="email" id="email" class="mt-1" :value="old('email', $request->email)" required readonly />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            {{-- Password --}}
            <div>
                <x-input-label for="password" :text="__('Password')" />
                <x-text-input type="password" name="password" id="password" class="mt-1" required autofocus />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            {{-- Confirm Password --}}
            <div>
                <x-input-label for="password_confirmation" :text="__('Confirm Password')" />
                <x-text-input type="password" name="password_confirmation" id="password_confirmation" class="mt-1" required />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <x-button class="w-full bg-gray-800 hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900">
                {{ __('Reset Password') }}
            </x-button>
        </form>
    </main>
</x-guest-layout>
