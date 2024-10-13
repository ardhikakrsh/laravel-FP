<!-- resources/views/mahasiswa/create.blade.php -->
@extends('layouts.userAuth.auth')
@section('title', 'Tambah Mahasiswa')

@section('content')
<div class="max-w-lg mx-auto mt-8 bg-white p-6 rounded-lg shadow-md dark:bg-gray-800">
    <h1 class="text-2xl font-semibold text-gray-700 dark:text-gray-200 mb-6">Tambah Mahasiswa</h1>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <!-- Nama -->
        <div class="mb-4">
            <label for="nama" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama:</label>
            <input type="text" name="nama" id="nama" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 @error('nama') border-red-500 @enderror" value="{{ old('nama') }}" required>
            @error('nama')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- NRP -->
        <div class="mb-4">
            <label for="nrp" class="block text-sm font-medium text-gray-700 dark:text-gray-300">NRP:</label>
            <input type="text" name="nrp" id="nrp" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 @error('nrp') border-red-500 @enderror" value="{{ old('nrp') }}" required>
            @error('nrp')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Jurusan -->
        <div class="mb-6">
            <label for="jurusan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Jurusan:</label>
            <input type="text" name="jurusan" id="jurusan" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 @error('jurusan') border-red-500 @enderror" value="{{ old('jurusan') }}" required>
            @error('jurusan')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Buttons -->
        <div class="flex items-center justify-between">
            <button type="submit" class="px-4 py-2 text-white bg-primary-700 rounded-md hover:bg-primary-800 focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-opacity-50 dark:bg-primary-600 dark:hover:bg-primary-700">Save</button>
            <a href="{{ route('mahasiswa.index') }}" class="text-sm text-gray-700 hover:underline dark:text-gray-300">Kembali</a>
        </div>
    </form>
</div>
@endsection
