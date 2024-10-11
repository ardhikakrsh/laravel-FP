@extends('layouts.app')
@section('guest')
<main>
    <div class="mih-h-full">
            @include('layouts.userGuest.navbar')
            <div class="mx-auto w-full px-6 py-8 sm:px-6 lg:px-8">
                @yield('content')
            </div>
            @include('layouts.userGuest.footer')
        </div>
    </div>
</main>
@endsection