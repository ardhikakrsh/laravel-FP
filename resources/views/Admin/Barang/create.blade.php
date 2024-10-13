@extends('layouts.userAuth.auth')

@section('title', 'Tambah Barang')

@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-2xl mx-auto"> <!-- Mengubah lebar maksimum menjadi max-w-2xl -->
    <h1 class="bg-indigo-700 text-3xl font-semibold text-white dark:text-indigo-600 pl-6 pt-6 pb-3 rounded-t-lg">Tambah Barang</h1> <!-- Menambah padding pada judul -->
    <div class="p-8 bg-white rounded-lg shadow dark:bg-gray-800"> <!-- Menambah padding card form -->
        <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-6"> <!-- Menambah space antar elemen menjadi space-y-6 -->
                <!-- Nama Barang -->
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Barang</label>
                    <input type="text" id="nama" name="nama" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Masukkan Nama Barang" required>
                </div>
                <!-- Ukuran -->
                <div>
                    <label for="ukuran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ukuran</label>
                    <input type="text" id="ukuran" name="ukuran" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Masukkan Ukuran" required>
                </div>
                <!-- Harga -->
                <div>
                    <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                    <input type="number" id="harga" name="harga" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Masukkan Harga" required>
                </div>
                <!-- Deskripsi -->
                <div>
                    <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Deskripsi" required></textarea>
                </div>
                <!-- Foto Barang -->
                <div>
                    <label for="foto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto Barang</label>
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600"> <!-- Menambah tinggi dropzone menjadi h-48 -->
                            <div class="flex flex-col items-center justify-center pt-4 pb-4"> <!-- Menambah padding pada dropzone -->
                                <svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div> 
                </div>
            </div>
            <div class="flex justify-end mt-6 space-x-2"> 
                <a href="{{ route('barang.index') }}" class="w-20 text-sm font-medium text-white bg-gray-400 rounded-lg hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-800 text-center py-2">Back</a>
                <button type="submit" class="w-20 text-sm font-medium text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 text-center py-2">Add</button>
            </div>  
        </form>
    </div>
</div>
@endsection
