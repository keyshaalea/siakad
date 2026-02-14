<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Golongan;


class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::with('golongan')->get();
    return view('admin.mahasiswa.index', compact('data'));
    }

    public function create()
    {
        $gol = Golongan::all();
        return view('mahasiswa.create', compact('gol'));
    }

    public function store(Request $r)
    {
        Mahasiswa::create($r->all());
        return redirect('/mahasiswa');
    }

    public function edit($nim)
    {
        $data = Mahasiswa::findOrFail($nim);
        $gol = Golongan::all();
        return view('mahasiswa.edit', compact('data','gol'));
    }

    public function update(Request $r,$nim)
    {
        Mahasiswa::findOrFail($nim)->update($r->all());
        return redirect('/mahasiswa');
    }

    public function destroy($nim)
    {
        Mahasiswa::destroy($nim);
        return back();
    }
}


