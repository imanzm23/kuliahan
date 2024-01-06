@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Dosen</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dosen as $dosen)
                    <tr>
                        <td>{{ $dosen->nip }}</td>
                        <td>{{ $dosen->nama_dosen }}</td>
                        <td>
                            <a href="{{ route('dosen.edit', $dosen->nip) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('dosen.create') }}" class="btn btn-success">Tambah Dosen</a>
    </div>
</body>
</html>
@endsection