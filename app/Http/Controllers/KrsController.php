<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class KrsController extends Controller
{
    public function index()
    {
        $data = Krs::with(['mahasiswa','matkul'])->get();
        return view('krs.index', compact('data'));
    }

    public function create()
    {
        return view('krs.create',[
            'mhs'=>Mahasiswa::all(),
            'mk'=>MataKuliah::all()
        ]);
    }

    public function store(Request $r)
    {
        Krs::create($r->all());
        return redirect('/krs');
    }

    public function destroy($id)
    {
        Krs::destroy($id);
        return back();
    }
}
