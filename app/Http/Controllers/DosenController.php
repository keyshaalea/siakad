<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = Dosen::all();
        return view('dosen.index', compact('data'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $r)
    {
        Dosen::create($r->all());
        return redirect('/dosen');
    }

    public function edit($nip)
    {
        $data = Dosen::findOrFail($nip);
        return view('dosen.edit', compact('data'));
    }

    public function update(Request $r,$nip)
    {
        Dosen::findOrFail($nip)->update($r->all());
        return redirect('/dosen');
    }

    public function destroy($nip)
    {
        Dosen::destroy($nip);
        return back();
    }
}
