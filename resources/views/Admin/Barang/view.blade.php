@extends('layouts.userAuth.auth')

@section('title', 'View Product')

@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-6xl mx-auto"> 
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center mt-6"> 
        
        <!-- Gambar Barang -->
        <div class="flex justify-center">
            <img src="{{ asset('assets/img/' . $barang->foto) }}" alt="{{ $barang->nama }}" class="rounded-lg shadow-lg w-full max-w-md h-auto">
        </div>

        <!-- Form -->
        <div class="p-8 bg-white rounded-tr-lg rounded-br-lg shadow w-full"> 
            <h1 class="text-2xl font-semibold text-gray-900 mb-6 text-center">Edit Product</h1>
            <form action="{{ route('barang.update', $barang->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="space-y-6">
                    <!-- Nama Barang -->
                    <div>
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Barang</label>
                        <input type="text" id="nama" name="nama" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500" value="{{ $barang->nama }}" disabled>
                    </div>
                    <!-- Ukuran -->
                    <div>
                        <label for="ukuran" class="block mb-2 text-sm font-medium text-gray-900">Ukuran</label>
                        <input type="text" id="ukuran" name="ukuran" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500" value="{{ $barang->ukuran }}" disabled>
                    </div>
                    <!-- Harga -->
                    <div>
                        <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                        <input type="number" id="harga" name="harga" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500" value="{{ $barang->harga }}" disabled>
                    </div>
                    <!-- Deskripsi -->
                    <div>
                        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                        <div class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100">
                            {{ $barang->deskripsi }}
                        </div>
                    </div>                    
                </div>
                <div class="flex justify-end mt-6 space-x-2"> 
                    <a href="{{ route('barang.index') }}" class="w-20 text-sm font-medium text-white bg-gray-400 rounded-lg hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 text-center py-2">Back</a>
                </div>                
            </form>
        </div>
    </div>  
</div>
@endsection
