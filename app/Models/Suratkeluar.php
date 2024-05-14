<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suratkeluar extends Model
{
    use HasFactory;

    protected $table = 'Suratkeluar';

    protected $fillable = [
        'tanggal',
        'no_surat',
        'perihal',
        'tujuan',
        'isi_surat',
        'namatandatangan_id',
        'user_id',
    ];

    public function penerima()
    {
        return $this->belongsTo(NamaTandaTangan::class, 'penerima_id');
    }
}
