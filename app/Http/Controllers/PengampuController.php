<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengampuController extends Controller
{
    public function index()
    {
        $data = Pengampu::with(['dosen','matkul'])->get();
        return view('pengampu.index', compact('data'));
    }

    public function create()
    {
        return view('pengampu.create',[
            'dosen'=>Dosen::all(),
            'matkul'=>MataKuliah::all()
        ]);
    }

    public function store(Request $r)
    {
        Pengampu::create($r->all());
        return redirect('/pengampu');
    }

    public function destroy($id)
    {
        Pengampu::destroy($id);
        return back();
    }
}
