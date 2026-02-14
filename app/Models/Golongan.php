<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    protected $table = 'golongan';
    protected $primaryKey = 'id_gol';
    protected $fillable = ['nama_gol'];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class,'id_gol');
    }
}
