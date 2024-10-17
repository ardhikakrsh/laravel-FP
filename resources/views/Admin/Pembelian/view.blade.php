@extends('layouts.userAuth.auth')

@section('title', 'Edit Order')

@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-2xl mx-auto">
    <h1 class="bg-indigo-700 text-3xl font-semibold text-white pl-6 pt-6 pb-3 rounded-t-lg">Edit Order</h1>
    <div class="p-8 bg-white rounded-lg shadow"> 
        <form action="{{ route('pembelian.update', $pembelian->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="space-y-6">
                <!-- Nama Pembeli -->
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Nama Pembeli</label>
                    <div class="block w-full p-3 text-sm text-gray-900 bg-gray-100 border border-gray-300 rounded-lg">
                        {{ $users->firstWhere('id', $pembelian->users_id)->nama ?? 'Tidak ditemukan' }}
                    </div>
                </div>

                <!-- Pilih Barang -->
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Barang</label>
                    <div class="block w-full p-3 text-sm text-gray-900 bg-gray-100 border border-gray-300 rounded-lg">
                        {{ $barangs->firstWhere('id', $pembelian->barang_id)->nama ?? 'Tidak ditemukan' }}
                    </div>
                </div>

                <!-- Tanggal Pembelian -->
                <div>
                    <label for="tanggal_pembelian" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Pembelian</label>
                    <input type="date" id="tanggal_pembelian" name="tanggal_pembelian" value="{{ $pembelian->tanggal_pembelian }}" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500" disabled>
                </div>

                <!-- Harga Barang -->
                <div>
                    <label for="total_harga" class="block mb-2 text-sm font-medium text-gray-900">Harga Barang</label>
                    <input type="text" id="total_harga" name="total_harga" value="{{ $pembelian->total_harga }}" class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-indigo-500 focus:border-indigo-500" disabled>
                </div>
            </div>
            <div class="flex justify-end mt-6 space-x-2"> 
                <a href="{{ route('pembelian.index') }}" class="w-20 text-sm font-medium text-white bg-gray-400 rounded-lg hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 text-center py-2">Back</a>
            </div>  
        </form>
    </div>
</div>

<script>
    // Script untuk update harga barang sesuai barang yang dipilih
    document.getElementById('barang_id').addEventListener('change', function() {
        const harga = document.querySelector(`#barang_id option[value="${this.value}"]`).getAttribute('data-harga');
        document.getElementById('total_harga').value = harga;
    });

    // Set harga awal barang yang terpilih tidak perlu di format harga
    document.addEventListener('DOMContentLoaded', function() {
        const selectedBarang = document.querySelector('#barang_id option:checked');
        if (selectedBarang) {
            const harga = selectedBarang.getAttribute('data-harga');
            document.getElementById('total_harga').value = harga;}
    });
</script>
@endsection
