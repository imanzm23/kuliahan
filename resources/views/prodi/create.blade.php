@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Tambah Prodi</h1>
        <form action="{{ route('prodi.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="id_prodi">ID:</label>
                <input type="text" class="form-control" name="id_prodi" required>
            </div>

            <div class="form-group">
                <label for="nama_prodi">Nama:</label>
                <input type="text" class="form-control" name="nama_prodi" required>
            </div>

            <button type="submit" class="btn btn-success">Tambah</button>
        </form>

        <a href="{{ route('prodi.index') }}" class="btn btn-primary mt-3">Kembali ke Daftar prodi</a>
    </div>
@endsection
