<?php
class Jadwal extends Model
{
    protected $table = 'jadwal_akademik';
    protected $fillable = [
        'matakuliah_id','dosen_id','ruang_id','hari','jam','golongan_id'
    ];

    public function matakuliah(){
        return $this->belongsTo(Matakuliah::class);
    }

    public function dosen(){
        return $this->belongsTo(Dosen::class);
    }
}
