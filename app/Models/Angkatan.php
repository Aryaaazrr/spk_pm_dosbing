<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Angkatan extends Model
{
    protected $table = 'angkatan';

    protected $primaryKey = 'id_angkatan';

    protected $fillable = [
        'tahun',
        'jumlah_mahasiswa',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'id_angkatan');
    }
}