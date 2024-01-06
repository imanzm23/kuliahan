@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Edit Mahasiswa</h1>
        <form action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" value="{{ $mahasiswa->nama }}" required>
            </div>

            <div class="form-group">
                <label for="nama_prodi">Prodi:</label>
                <select class="form-control" name="nama_prodi" required>
                    @foreach ($prodi as $prodi)
                        <option value="{{ $prodi->id_prodi }}" @if($prodi->id == $mahasiswa->id_prodi) selected @endif>{{ $prodi->nama_prodi }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <p class="mt-3"><a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali ke Daftar Mahasiswa</a></p>
    </div>
@endsection
