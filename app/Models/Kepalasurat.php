<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepalasurat extends Model
{
    use HasFactory;

    protected $table = 'kepalasurat';

    protected $fillable = [
        'user_id',
        'nama_kop',
        'alamat_kop',
        'nama_tujuan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
