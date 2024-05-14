<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suratmasuk extends Model
{
    use HasFactory;

    protected $table = 'Suratmasuk';

    protected $fillable = [
        'tanggal',
        'no_surat',
        'asal_surat',
        'perihal',
        'disp1',
        'disp2',
        'namatandatangan_id',
        'image',
    ];

    public function pengirim()
    {
        return $this->belongsTo(Kepalasurat::class, 'pengirim_id');
    }
}
