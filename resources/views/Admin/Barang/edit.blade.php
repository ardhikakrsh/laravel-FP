@extends('layouts.userAuth.auth')

@section('title', 'Edit Product')

@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-6xl mx-auto"> 
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center mt-6"> 
        
        <!-- Gambar Barang -->
        <div class="flex justify-center">
            <img src="{{ asset('assets/img/' . $barang->foto) }}" alt="{{ $barang->nama }}" class="rounded-lg shadow-lg w-full max-w-md h-auto"> 
        </div>

        <!-- Form -->
        <div class="p-8 bg-white rounded-tr-lg rounded-br-lg shadow w-full"> <!-- Menambahkan w-full agar form memenuhi ruang -->
            <h1 class="text-2xl font-semibold text-gray-900 mb-6 text-center">Edit Product</h1>
            <form action="{{ route('barang.update', $barang->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="space-y-6">
                    <!-- Nama Barang -->
                    <div>
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Barang</label>
                        <input type="text" id="nama" name="nama" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500" value="{{ $barang->nama }}" required>
                    </div>
                    <!-- Ukuran -->
                    <div>
                        <label for="ukuran" class="block mb-2 text-sm font-medium text-gray-900">Ukuran</label>
                        <input type="text" id="ukuran" name="ukuran" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500" value="{{ $barang->ukuran }}" required>
                    </div>
                    <!-- Harga -->
                    <div>
                        <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                        <input type="number" id="harga" name="harga" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500" value="{{ $barang->harga }}" required>
                    </div>
                    <!-- Deskripsi -->
                    <div>
                        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500" required>{{ $barang->deskripsi }}</textarea>
                    </div>
                    <!-- Foto Barang -->
                    <div>
                        <label for="foto" class="block mb-2 text-sm font-medium text-gray-900">Foto Barang</label>
                        <input type="file" id="foto" name="foto" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" required>
                    </div>
                </div>
                <div class="flex justify-end mt-6 space-x-2"> 
                    <a href="{{ route('barang.index') }}" class="w-20 text-sm font-medium text-white bg-gray-400 rounded-lg hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 text-center py-2">Back</a>
                    <button type="submit" class="w-20 text-sm font-medium text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:ring-primary-300 text-center py-2">Save</button>
                </div>  
            </form>
        </div>
    </div>
</div>
@endsection
