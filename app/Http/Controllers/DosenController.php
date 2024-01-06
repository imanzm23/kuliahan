<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', compact('dosen'));
    }

    public function create()
    {
        $dosen = Dosen::all();
        return view('dosen.create', compact('dosen'));
    }

    public function store(Request $request)
    {
        Dosen::create($request->all());
        return redirect()->route('dosen.index');
    }

    public function edit($id)
    {
        $dosen = Dosen::find($id);
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, $id)
    {
        Dosen::find($id)->update($request->all());
        return redirect()->route('dosen.index');
    }

    public function destroy($id)
    {
        Dosen::destroy($id);
        return redirect()->route('dosen.index');
    }
}
