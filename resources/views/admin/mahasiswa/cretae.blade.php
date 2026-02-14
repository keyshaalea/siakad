@extends('layouts.app')

@section('content')
<h3>Tambah Mahasiswa</h3>

<form action="{{ route('mahasiswa.store') }}" method="POST">
@csrf

<div class="form-group">
    <label>NIM</label>
    <input type="text" name="nim" class="form-control">
</div>

<div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control">
</div>

<div class="form-group">
    <label>Semester</label>
    <input type="number" name="semester" class="form-control">
</div>

<div class="form-group">
    <label>Golongan</label>
    <select name="id_gol" class="form-control">
        @foreach($gol as $g)
        <option value="{{ $g->id_gol }}">{{ $g->nama_gol }}</option>
        @endforeach
    </select>
</div>

<button class="btn btn-success mt-2">Simpan</button>

</form>
@endsection
