<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mata_kuliah = MataKuliah::all();
        return view('matakuliah.index', compact('mata_kuliah'));
    }

    public function create()
    {
        $mata_kuliah = MataKuliah::all();
        return view('matakuliah.create', compact('mata_kuliah'));
    }

    public function store(Request $request)
    {
        MataKuliah::create($request->all());
        return redirect()->route('matakuliah.index');
    }

    public function edit($id)
    {
        $mata_kuliah = MataKuliah::find($id);
        return view('matakuliah.edit', compact('mata_kuliah'));
    }

    public function update(Request $request, $id)
    {
        MataKuliah::find($id)->update($request->all());
        return redirect()->route('matakuliah.index');
    }

    public function destroy($id_matkul)
    {
        MataKuliah::destroy($id_matkul);
        return redirect()->route('matakuliah.index');
    }
}
