<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['nim','nama','alamat','nohp','semester','id_gol'];

    public function golongan()
    {
        return $this->belongsTo(Golongan::class,'id_gol', 'id_gol');
    }

    public function krs()
    {
        return $this->hasMany(Krs::class,'nim', 'nim');
    }

    public function presensi()
    {
        return $this->hasMany(PresensiAkademik::class,'nim');
    }
}
