@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Mahasiswa</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Prodi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->nim }}</td>
                        <td>{{ $mahasiswa->prodi }}</td>
                        <td>
                            <a href="{{ route('mahasiswa.edit', $mahasiswa->nim) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('mahasiswa.destroy', $mahasiswa->nim) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-success">Tambah Mahasiswa Baru</a>
    </div>
</body>
</html>
@endsection