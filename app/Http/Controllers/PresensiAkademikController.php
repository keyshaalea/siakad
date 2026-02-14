<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class PresensiAkademikController extends Controller
{
    public function index()
    {
        $data = PresensiAkademik::with(['mahasiswa','matkul'])->get();
        return view('presensi.index', compact('data'));
    }

    public function create()
    {
        return view('presensi.create',[
            'mhs'=>Mahasiswa::all(),
            'mk'=>MataKuliah::all()
        ]);
    }

    public function store(Request $r)
    {
        PresensiAkademik::create($r->all());
        return redirect('/presensi');
    }

    public function destroy($id)
    {
        PresensiAkademik::destroy($id);
        return back();
    }
}
