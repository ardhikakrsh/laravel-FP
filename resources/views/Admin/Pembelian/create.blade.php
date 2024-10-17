@extends('layouts.userAuth.auth')

@section('title', 'Add Order')

@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-2xl mx-auto">
    <h1 class="bg-indigo-700 text-3xl font-semibold text-white pl-6 pt-6 pb-3 rounded-t-lg">Add Order</h1>
    <div class="p-8 bg-white rounded-lg shadow">
        <form action="{{ route('pembelian.store') }}" method="POST">
            @csrf
            <div class="space-y-6">

                <!-- Pilih Pembeli -->
                <div>
                    <label for="users_id" class="block mb-2 text-sm font-medium text-gray-900">Pilih Pembeli</label>
                    <select id="users_id" name="users_id" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500" required>
                        <option value="">-- Pilih Pembeli --</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Pilih Barang -->
                <div>
                    <label for="barang_id" class="block mb-2 text-sm font-medium text-gray-900">Pilih Barang</label>
                    <select id="barang_id" name="barang_id" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500" required>
                        <option value="">-- Pilih Barang --</option>
                        @foreach($barangs as $barang)
                            <option value="{{ $barang->id }}" data-harga="{{ $barang->harga }}">{{ $barang->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Tanggal Pembelian -->
                <div>
                    <label for="tanggal_pembelian" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Pembelian</label>
                    <input type="date" id="tanggal_pembelian" name="tanggal_pembelian" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500" required>
                </div>
                
                <!-- Harga Barang -->
                <div>
                    <label for="total_harga" class="block mb-2 text-sm font-medium text-gray-900">Harga Barang</label>
                    <input type="text" id="total_harga" name="total_harga" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500" required>
                </div>

                <!-- Barang -->
                {{-- <div>
                    <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900">Jumlah Barang</label>
                    <input type="number" id="jumlah" name="jumlah" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Masukkan Jumlah Barang" min="1" required>
                </div> --}}

            </div>

            <div class="flex justify-end mt-6 space-x-2">
                <a href="{{ route('pembelian.index') }}" class="w-20 text-sm font-medium text-white bg-gray-400 rounded-lg hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 text-center py-2">Back</a>
                <button type="submit" class="w-20 text-sm font-medium text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:ring-primary-300 text-center py-2">Add</button>
            </div>
        </form>
    </div>
</div>

<script>
    // ambil harga barang sesuai barang yang dipilih
    document.getElementById('barang_id').addEventListener('change', function() {
        const harga = document.querySelector(`#barang_id option[value="${this.value}"]`).getAttribute('data-harga');
        document.getElementById('total_harga').value = harga;
    });
</script>

@endsection
