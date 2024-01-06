@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Tambah matakuliah</h1>
        <form action="{{ route('matakuliah.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="id_matkul">ID Matkul:</label>
                <input type="text" class="form-control" name="id_matkul" required>
            </div>

            <div class="form-group">
                <label for="nama_matkul">Mata Kuliah:</label>
                <input type="text" class="form-control" name="nama_matkul" required>
            </div>

            <button type="submit" class="btn btn-success">Tambah</button>
        </form>

        <a href="{{ route('matakuliah.index') }}" class="btn btn-primary mt-3">Kembali ke Daftar Mata Kuliah</a>
    </div>
@endsection
