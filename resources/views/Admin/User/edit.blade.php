@extends('layouts.userAuth.auth')

@section('title', 'Edit User')

@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-2xl mx-auto">
    <h1 class="bg-indigo-700 text-3xl font-semibold text-white pl-6 pt-6 pb-3 rounded-t-lg">Edit User</h1>
    <div class="p-8 bg-white rounded-lg shadow"> 
        <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="space-y-6">
                <!-- Nama User -->
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama User</label>
                    <input type="text" id="nama" name="nama" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500" value="{{ $user->nama }}" required autocomplete="off">
                </div>
                <!-- Alamat Email -->
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" id="email" name="email" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500" value="{{ $user->email }}" required autocomplete="off">
                </div>
                <!-- Role User -->
                <div>
                    <label for="role" class="block mb-2 text-sm font-medium text-gray-900">Role</label>
                    <select id="role" name="role" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500" required>
                        <option value="admin" @if($user->role == 'admin') selected @endif>Admin</option>
                        <option value="user" @if($user->role == 'user') selected @endif>User</option>
                    </select>
                </div>
            </div>
            <div class="flex justify-end mt-6 space-x-2"> 
                <a href="{{ route('users.index') }}" class="w-20 text-sm font-medium text-white bg-gray-400 rounded-lg hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 text-center py-2">Back</a>
                <button type="submit" class="w-20 text-sm font-medium text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:ring-primary-300 text-center py-2">Save</button>
            </div>  
        </form>
    </div>
</div>
@endsection
