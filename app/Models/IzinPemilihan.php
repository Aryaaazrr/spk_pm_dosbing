<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IzinPemilihan extends Model
{
    protected $table = 'izin_pengajuan';

    protected $primaryKey = 'id_pengaturan';

    protected $fillable = [
        'izin',
    ];
}