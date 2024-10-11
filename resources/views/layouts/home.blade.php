@extends('layouts.app')
@section('home')
<main>
    <div class="mih-h-full">
        @include('layouts.userAuth.navbar')
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
              <h1 class="text-3xl font-bold tracking-tight text-gray-900">Sole City Kicks</h1>
            </div>
        </header>
        <div class="mx-auto w-full px-6 py-8 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </div>
</main>
@endsection