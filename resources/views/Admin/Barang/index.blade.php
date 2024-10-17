@extends('layouts.userAuth.auth')
@section('title', 'Data Products')
@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <h1 class="bg-indigo-700 text-3xl font-semibold text-white pl-4 pt-2 rounded-t-lg">Data Products</h1>
    <div class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4 bg-indigo-700">
        <div class="w-full md:w-1/2">
            <form class="flex items-center">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <input type="text" id="simple-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-primary-500 focus:border-primary-500" placeholder="Search" required="" autocomplete="off">
                </div>
            </form>
        </div>
        <div class="flex justify-end w-full md:w-auto">
            <a href="{{ route('barang.create') }}" class="flex items-center px-4 py-2 text-sm font-medium text-white bg-black rounded-lg hover:bg-indigo-600 focus:ring-4 focus:ring-primary-300 focus:outline-none">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"/>
                </svg>
                Add Product
            </a>
        </div>
    </div>

    <table class="w-full text-sm text-center text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Foto</th>
                <th scope="col" class="px-6 py-3">Nama</th>
                <th scope="col" class="px-6 py-3">Ukuran</th>
                <th scope="col" class="px-6 py-3">Harga</th>
                <th scope="col" class="px-6 py-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangs as $barang)
            <tr class="bg-white text-center border-b hover:bg-gray-50">
                <td class="px-6 py-4">{{ $loop->iteration }}</td>
                <td class="px-6 py-4">
                    <div class="flex justify-center">
                        <img src="{{ asset('assets/img/' . $barang->foto) }}" alt="{{ $barang->nama }}" width="125">
                    </div>
                </td>
                <td class="px-6 py-4">{{ $barang->nama }}</td>
                <td class="px-6 py-4">{{ $barang->ukuran }}</td>
                <td class="px-6 py-4">Rp{{ number_format($barang->harga, 0, ',', '.') }}</t</td>
                <td class="px-6 py-4">
                    <div class="flex space-x-2 justify-center">
                        <!-- View Button -->
                        <a href="{{ route('barang.show', $barang->id) }}" class="flex items-center justify-center px-2 py-1 text-blue-500 hover:text-blue-700 bg-blue-100 rounded-md transition duration-300 transform hover:scale-105">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round"     stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5s8.268 2.943 9.542 7c-1.274 4.057-5.065 7-9.542 7s-8.268-2.943-9.542-7z"/>
                            </svg>
                            View
                        </a>
                        <!-- Edit Button with provided icon -->
                        <a href="{{ route('barang.edit', $barang->id) }}" class="flex items-center justify-center px-2 py-1 text-yellow-500 hover:text-yellow-700 bg-yellow-100 rounded-md transition duration-300 transform hover:scale-105">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                            Edit
                        </a>
                        <!-- Delete Button -->
                        <form action="{{ route('barang.destroy', $barang->id) }}" method="POST" onsubmit="return confirmDelete();" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="flex items-center justify-center px-2 py-1 text-red-500 hover:text-red-700 bg-red-100 rounded-md transition duration-300 transform hover:scale-105">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916" />
                                </svg>
                                Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
