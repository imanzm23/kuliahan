@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Tambah Mahasiswa</h1>
        <form action="{{ route('mahasiswa.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" required>
            </div>

            <div class="form-group">
                <label for="nim">Nim:</label>
                <input type="text" class="form-control" name="nim" required>
            </div>

            <div class="form-group">
                <label for="prodi">Prodi:</label>
                <select class="form-control" name="prodi" required>
                    @foreach ($prodi as $prodi)
                        <option value="{{ $prodi->id_prodi }}">{{ $prodi->nama_prodi }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Tambah</button>
        </form>

        <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary mt-3">Kembali ke Daftar Mahasiswa</a>
    </div>
@endsection
