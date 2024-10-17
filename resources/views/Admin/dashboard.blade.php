@extends('layouts.userAuth.auth')
@section('title', 'Admin Dashboard')
@section('content')

<h1 class="text-3xl text-black pb-6">Dashboard</h1>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <div class="bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-lg font-semibold text-gray-700">Total Users</h2>
        <p class="text-2xl font-bold text-indigo-600">{{ $totalUsers }}</p>
    </div>
    
    <div class="bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-lg font-semibold text-gray-700">Total Customers</h2>
        <p class="text-2xl font-bold text-indigo-600">{{ $totalCustomers }}</p>
    </div>

    <div class="bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-lg font-semibold text-gray-700">Total Orders</h2>
        <p class="text-2xl font-bold text-indigo-600">{{ $totalOrders }}</p>
    </div>
    
    <div class="bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-lg font-semibold text-gray-700">Total Products</h2>
        <p class="text-2xl font-bold text-indigo-600">{{ $totalProducts }}</p>
    </div>
</div>

<!-- Recent Activity -->
<div class="bg-white shadow-lg rounded-lg p-6 mb-6">
    <h2 class="text-xl font-semibold text-gray-700 mb-4">Recent Activity</h2>
    <ul>
        @foreach($recentUsers as $user)
        <li class="mb-3">
            <p class="text-gray-600">{{ $user->nama }} registered a new account.</p>
            <p class="text-sm text-gray-500">{{ $user->created_at->diffForHumans() }}</p>
        </li>
        @endforeach
        
        @foreach($recentOrders as $pembelian)
            @if($pembelian->created_at)
            <li class="mb-3">
                <p class="text-gray-600">Order #{{ $pembelian->id }} was placed by {{ $pembelian->user->nama }}.</p>
                <p class="text-sm text-gray-500">{{ $pembelian->created_at->diffForHumans() }}</p>
            </li>
            @else 
            <li class="mb-3">
                <p class="text-sm text-gray-500">data not available</p>  
            </li> 
            @endif    
        @endforeach 
    </ul>
</div>
@endsection
