@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Edit matakuliah</h1>
        <form action="{{ route('matakuliah.update', $mata_kuliah->id_matkul) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama_matkul">Mata Kuliah:</label>
                <input type="text" class="form-control" name="nama_matkul" value="{{ $mata_kuliah->nama_matkul }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <p class="mt-3"><a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali ke Daftar Mata Kuliah</a></p>
    </div>
@endsection
