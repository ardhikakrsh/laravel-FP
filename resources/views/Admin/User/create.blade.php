@extends('layouts.userAuth.auth')

@section('title', 'Tambah User')

@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-2xl mx-auto">
    <h1 class="bg-indigo-700 text-3xl font-semibold text-white dark:text-indigo-600 pl-6 pt-6 pb-3 rounded-t-lg">Tambah User</h1>
    <div class="p-8 bg-white rounded-lg shadow dark:bg-gray-800"> 
        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-6">
                <!-- Nama User -->
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama User</label>
                    <input type="text" id="nama" name="nama" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Masukkan Nama User" required autocomplete="off">
                </div>
                <!-- Password User -->
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password" name="password" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Masukkan Password" required>
                </div>
                <!-- Alamat Email -->
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" id="email" name="email" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="email@solecity.com" required autocomplete="off">
                </div>
                <!-- Role User -->
                <div>
                    <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                    <select id="role" name="role" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" required>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
            </div>
            <div class="flex justify-end mt-6 space-x-2"> 
                <a href="{{ route('users.index') }}" class="w-20 text-sm font-medium text-white bg-gray-400 rounded-lg hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-800 text-center py-2">Kembali</a>
                <button type="submit" class="w-20 text-sm font-medium text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 text-center py-2">Tambah</button>
            </div>  
        </form>
    </div>
</div>
@endsection