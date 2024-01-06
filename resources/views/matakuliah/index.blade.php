@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Mata Kuliah</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Mata Kuliah</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mata_kuliah as $mata_kuliah)
                    <tr>
                        <td>{{ $mata_kuliah->id_matkul }}</td>
                        <td>{{ $mata_kuliah->nama_matkul }}</td>
                        <td>
                            <a href="{{ route('matakuliah.edit', $mata_kuliah->id_matkul) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('matakuliah.destroy', $mata_kuliah->id_matkul) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-success">Tambah Mata Kuliah Baru</a>
    </div>
</body>
</html>
@endsection