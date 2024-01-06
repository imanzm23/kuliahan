@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Edit Dosen</h1>
        <form action="{{ route('dosen.update', $dosen->nip) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama_dosen">Nama Dosen:</label>
                <input type="text" class="form-control" name="nama_dosen" value="{{ $dosen->nama_dosen }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <p class="mt-3"><a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali ke Daftar Dosen</a></p>
    </div>
@endsection
