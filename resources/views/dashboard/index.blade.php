<x-app-layout title="{{ __('Dashboard') }}">
    <x-header value="{{ __('Dashboard') }}" />

    {{-- Session Status --}}
    <x-session-status />

    <x-card>
        {{ __("You're logged in!") }}
    </x-card>
</x-app-layout>
