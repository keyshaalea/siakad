<?php
class JadwalAkademik extends Model
{
    protected $table = 'jadwal_akademik';
    protected $primaryKey = 'id_jadwal';

    protected $fillable = ['hari','kode_mk','id_ruang','id_gol'];

    public function matkul()
    {
        return $this->belongsTo(MataKuliah::class,'kode_mk');
    }

    public function ruang()
    {
        return $this->belongsTo(Ruang::class,'id_ruang');
    }

    public function golongan()
    {
        return $this->belongsTo(Golongan::class,'id_gol');
    }
}
