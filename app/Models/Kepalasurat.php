<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepalaSurat extends Model
{
    use HasFactory;

    protected $table = 'kepala_surat';

    protected $fillable = [
    'id_kop',
    'nama_kop',
    'alamat_kop',
    'nama_tujuan',
    'id_user',
    ];
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_user');
    }
    public function dataTambahSuratMasuk(){
        return $this->hasOne(SuratMasuk::class,'id_suratmasuk');
    }
}
