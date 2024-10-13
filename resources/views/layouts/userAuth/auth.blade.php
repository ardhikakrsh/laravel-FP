@extends('layouts.app')
@section('auth')
@include('layouts.userAuth.sidebar')
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        @yield('content')
        {{-- @include('layouts.userAuth.footer') --}}
    </div>
</div>
@endsection