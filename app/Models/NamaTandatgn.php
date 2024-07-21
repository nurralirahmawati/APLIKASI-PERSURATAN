<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaTandatgn extends Model
{
    use HasFactory;

    protected $table = 'nama_tandatgn';

    protected $fillable =[
    'id_tandatangan',
    'nama_tandatgn',
    'jabatan',
    'nip',
    ];
    public function dataTambahSuratKeluar(){
        return $this->hasOne(SuratKeluar::class,'id_tandatangan');
    }
    public function dataTambahSuratMasuk(){
        return $this->hasOne(SuratMasuk::class,'id_tandatangan');
    }

}
