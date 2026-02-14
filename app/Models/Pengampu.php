<?php
class Pengampu extends Model
{
    protected $table = 'pengampu';
    public $timestamps = false;

    protected $fillable = ['kode_mk','nip'];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class,'nip');
    }

    public function matkul()
    {
        return $this->belongsTo(MataKuliah::class,'kode_mk');
    }
}

