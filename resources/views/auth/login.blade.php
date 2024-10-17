@extends('layouts.userGuest.guest')
@section('title', 'Login')
@section('content')
<x-auth-session-status class="mb-4" :status="session('status')" />
<div class="h-screen md:flex">
    <div class="relative overflow-hidden md:flex w-full md:w-1/2 justify-around items-center hidden md:block" style="background-image: url('/assets/img/slide2.jpg'); background-size: cover; background-position: center;">
        <div>
            <h1 class="text-white font-bold text-6xl font-sans">Sole City Kicks</h1>
            <p class="text-white mt-1 text-2xl">The most fresh sneakers in the city</p>
        </div>
    </div>      
    <div class="flex md:w-1/2 justify-center py-10 items-center bg-gray-200">
        <div class="bg-white shadow-lg rounded-lg p-16 max-w-md w-full">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1 class="text-gray-800 font-bold text-3xl mb-2">Hello Again!</h1>
                <p class="text-sm font-normal text-gray-600 mb-6">Welcome Back</p>
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-indigo-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="off" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-indigo-500" type="password" name="password" required autocomplete="off" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <button type="submit" class="block w-full bg-indigo-600 hover:bg-indigo-700 mt-6 py-2 rounded-xl text-white font-semibold transition duration-300 ease-in-out"> {{ __('Log in') }}</button>
                
                <div class="mt-4">
                    <span class="text-sm text-gray-500">Forgot Password?</span>
                    <a href="#" class="text-sm text-indigo-600 font-semibold hover:text-blue-500">here</a>
                </div>
                
                <div class="mt-4">
                    <span class="text-sm text-gray-500">Don't have an account?</span>
                    <a href="{{ route('register') }}" class="text-sm text-indigo-600 font-semibold hover:text-blue-500">Sign Up</a>
                </div>  
            </form>
        </div>
    </div>
    
</div>
@endsection
{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
