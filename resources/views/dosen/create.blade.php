@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Tambah dosen</h1>
        <form action="{{ route('dosen.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="nip">NIP:</label>
                <input type="text" class="form-control" name="nip" required>
            </div>
            
            <div class="form-group">
                <label for="nama_dosen">Nama Dosen:</label>
                <input type="text" class="form-control" name="nama_dosen" required>
            </div>

            <button type="submit" class="btn btn-success">Tambah</button>
        </form>

        <a href="{{ route('dosen.index') }}" class="btn btn-primary mt-3">Kembali ke Daftar Dosen</a>
    </div>
@endsection
