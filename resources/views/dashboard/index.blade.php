@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <x-title>
        {{ __('Dashboard') }}
    </x-title>

    <x-card>
        {{ __("You're logged in!") }}
    </x-card>
@endsection
