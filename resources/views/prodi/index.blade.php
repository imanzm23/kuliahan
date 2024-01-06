@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Prodi</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prodi as $prodi)
                    <tr>
                        <td>{{ $prodi->id_prodi }}</td>
                        <td>{{ $prodi->nama_prodi }}</td>
                        <td>
                            <a href="{{ route('prodi.edit', $prodi->id_prodi) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('prodi.destroy', $prodi->id_prodi) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('prodi.create') }}" class="btn btn-success">Tambah Prodi</a>
    </div>
</body>
</html>
@endsection