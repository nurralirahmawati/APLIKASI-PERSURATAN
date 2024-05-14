<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Namatandatangan extends Model
{
    use HasFactory;

    protected $table = 'Namatandatangan';

    protected $fillable = [
        'nama_tandatangan',
        'jabatan',
        'nip',
    ];
}
