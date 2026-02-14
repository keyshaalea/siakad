<?php
class Krs extends Model
{
    protected $table = 'krs';
    public $timestamps = false;

    protected $fillable = ['nim','kode_mk'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class,'nim');
    }

    public function matkul()
    {
        return $this->belongsTo(MataKuliah::class,'kode_mk');
    }
}
