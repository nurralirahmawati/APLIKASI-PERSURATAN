<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;

    protected $table = 'surat_keluar';

    protected $fillable = [
    'id_kop',
    'tanggal',
    'no_surat',
    'perihal',
    'tujuan',
    'isi_surat',
    'id_tandatangan',
    'id_user',
    ];
    public function pengguna(){
        return $this->belongsTo(Pengguna::class, 'id_user', 'id');
    }
    public function tandatgn(){
        return $this->belongsTo(NamaTandatgn::class, 'id_tandatangan', 'id');
    }
}
