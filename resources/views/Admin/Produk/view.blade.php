@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Detail Mahasiswa</h1>
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" class="form-control" value="{{ $mahasiswa->nama }}" disabled>
    </div>
    <div class="form-group">
        <label for="nrp">NRP:</label>
        <input type="text" name="nrp" id="nrp" class="form-control" value="{{ $mahasiswa->nrp }}" disabled>
    </div>
    <div class="form-group">
        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" class="form-control" value="{{ $mahasiswa->jurusan }}" disabled>
    </div>
    <br>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Back</a>
</div>    
@endsection