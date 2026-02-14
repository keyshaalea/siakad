<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    public function index()
    {
        $data = Golongan::all();
        return view('golongan.index', compact('data'));
    }

    public function create()
    {
        return view('golongan.create');
    }

    public function store(Request $r)
    {
        Golongan::create($r->all());
        return redirect('/golongan');
    }

    public function edit($id)
    {
        $data = Golongan::findOrFail($id);
        return view('golongan.edit', compact('data'));
    }

    public function update(Request $r,$id)
    {
        Golongan::findOrFail($id)->update($r->all());
        return redirect('/golongan');
    }

    public function destroy($id)
    {
        Golongan::destroy($id);
        return back();
    }
}
