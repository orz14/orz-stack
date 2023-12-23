@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <x-title>
        {{ __('Dashboard') }}
    </x-title>

    <x-card>
        {{ __("You're logged in!") }}
    </x-card>

    <form action="{{ route('logout') }}" method="POST" class="mt-4">
        @csrf

        <x-button class="bg-gray-800 hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900" onclick="return confirm('Are you sure want to logout?')">
            {{ __('Logout') }}
        </x-button>
    </form>
@endsection
