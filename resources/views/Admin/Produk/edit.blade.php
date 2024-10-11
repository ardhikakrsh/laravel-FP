<!-- resources/views/mahasiswa/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Mahasiswa</h1>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
        </div>

        <div class="form-group">
            <label for="nrp">NRP:</label>
            <input type="text" name="nrp" id="nrp" class="form-control" value="{{ $mahasiswa->nrp }}" required>
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan:</label>
            <input type="text" name="jurusan" id="jurusan" class="form-control" value="{{ $mahasiswa->jurusan }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
