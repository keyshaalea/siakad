<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $fillable = [
        'nim','nama','alamat','nohp','semester','golongan_id'
    ];

    public function golongan(){
        return $this->belongsTo(Golongan::class);
    }
}
