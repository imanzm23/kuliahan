<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class ProdiController extends Controller
{
    public function index()
    {
        $prodi= Prodi::all();
        return view('prodi.index', compact('prodi'));
    }

    public function create()
    {
        $prodi = Prodi::all();
        return view('prodi.create', compact('prodi'));
    }

    public function show($id)
    {
        $prodi = Prodi::findOrFail($id);

        return view('prodi.show', compact('prodi'));
    }

    public function store(Request $request)
    {
        Prodi::create($request->all());
        return redirect()->route('prodi.index');
    }

    public function edit($id)
    {
        $prodi = Prodi::find($id);
        return view('prodi.edit', compact('prodi'));
    }

    public function update(Request $request, $id)
    {
        Prodi::find($id)->update($request->all());
        return redirect()->route('prodi.index');
    }

    public function destroy($id_prodi)
    {
        Prodi::destroy($id_prodi);
        return redirect()->route('prodi.index');
    }
}
