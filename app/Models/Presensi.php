<?php
class Presensi extends Model
{
    protected $table = 'presensi_akademik';
    protected $fillable = [
        'nim','jadwal_id','tanggal','status'
    ];

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class,'nim');
    }
}
