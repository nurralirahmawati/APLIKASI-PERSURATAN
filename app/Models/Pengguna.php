<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';

    protected $fillable = [
        'id_user',
        'username',
        'password',
        'status',
        'nama_ptgs'
    ];
    public function dataTambahKepalaSurat(){
        return $this->hasOne(KepalaSurat::class,'id_kepalasurat');
    }
    public function dataTambahSuratKeluar(){
        return $this->hasOne(SuratKeluar::class,'id_suratkeluar');
    }
}
