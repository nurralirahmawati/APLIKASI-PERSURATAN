<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;

    protected $table = 'surat_masuk';

    protected $fillable = [

    'id_kop',
    'tanggal',
    'no_surat',
    'asal_surat',
    'perihal',
    'disp1',
    'disp2',
    'id_tandatangan',
    'image',
    ];
    public function kepalasurat(){
        return $this->belongsTo(KepalaSurat::class, 'id_kop', 'id');
    }
    public function tandatgn(){
        return $this->belongsTo(NamaTandatgn::class, 'id_tandatangan', 'id');
    }
}
