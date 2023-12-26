@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <x-header>
        {{ __('Dashboard') }}
    </x-header>

    <x-card>
        {{ __("You're logged in!") }}
    </x-card>
@endsection
