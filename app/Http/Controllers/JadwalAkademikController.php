<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalAkademikController extends Controller
{
    public function index()
    {
        $data = JadwalAkademik::with(['matkul','ruang','golongan'])->get();
        return view('jadwal.index', compact('data'));
    }

    public function create()
    {
        return view('jadwal.create',[
            'matkul'=>MataKuliah::all(),
            'ruang'=>Ruang::all(),
            'gol'=>Golongan::all()
        ]);
    }

    public function store(Request $r)
    {
        JadwalAkademik::create($r->all());
        return redirect('/jadwal');
    }

    public function edit($id)
    {
        return view('jadwal.edit',[
            'data'=>JadwalAkademik::findOrFail($id),
            'matkul'=>MataKuliah::all(),
            'ruang'=>Ruang::all(),
            'gol'=>Golongan::all()
        ]);
    }

    public function update(Request $r,$id)
    {
        JadwalAkademik::findOrFail($id)->update($r->all());
        return redirect('/jadwal');
    }

    public function destroy($id)
    {
        JadwalAkademik::destroy($id);
        return back();
    }
}
