@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Edit prodi</h1>
        <form action="{{ route('prodi.update', $prodi->id_prodi) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="id_prodi">ID:</label>
                <input type="text" class="form-control" name="id_prodi" value="{{ $prodi->id_prodi }}" required>
            </div>

            <div class="form-group">
                <label for="nama_prodi">Nama:</label>
                <input type="text" class="form-control" name="nama_prodi" value="{{ $prodi->nama_prodi }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <p class="mt-3"><a href="{{ route('prodi.index') }}" class="btn btn-secondary">Kembali ke Daftar Mahasiswa</a></p>
    </div>
@endsection
