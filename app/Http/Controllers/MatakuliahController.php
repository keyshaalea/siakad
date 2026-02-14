<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = MataKuliah::all();
        return view('matkul.index', compact('data'));
    }

    public function create()
    {
        return view('matkul.create');
    }

    public function store(Request $r)
    {
        MataKuliah::create($r->all());
        return redirect('/matakuliah');
    }

    public function edit($kode)
    {
        $data = MataKuliah::findOrFail($kode);
        return view('matkul.edit', compact('data'));
    }

    public function update(Request $r,$kode)
    {
        MataKuliah::findOrFail($kode)->update($r->all());
        return redirect('/matakuliah');
    }

    public function destroy($kode)
    {
        MataKuliah::destroy($kode);
        return back();
    }
}

