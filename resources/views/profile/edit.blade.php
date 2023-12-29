<x-app-layout title="{{ __('Profile') }}">
    <x-header value="{{ __('Profile') }}" />

    {{-- Session Status --}}
    <x-session-status />

    <div class="grid w-full grid-cols-1 gap-6 lg:grid-cols-2 mb-6">
        <div>
            @include('profile.partials.update-profile-information-form')
        </div>

        <div>
            @include('profile.partials.update-password-form')
        </div>
    </div>

    <div>
        @include('profile.partials.delete-user-form')
    </div>
</x-app-layout>
