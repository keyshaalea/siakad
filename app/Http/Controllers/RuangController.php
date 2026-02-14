<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    public function index()
    {
        $data = Ruang::all();
        return view('ruang.index', compact('data'));
    }

    public function create()
    {
        return view('ruang.create');
    }

    public function store(Request $r)
    {
        Ruang::create($r->all());
        return redirect('/ruang');
    }

    public function edit($id)
    {
        $data = Ruang::findOrFail($id);
        return view('ruang.edit', compact('data'));
    }

    public function update(Request $r,$id)
    {
        Ruang::findOrFail($id)->update($r->all());
        return redirect('/ruang');
    }

    public function destroy($id)
    {
        Ruang::destroy($id);
        return back();
    }
}
