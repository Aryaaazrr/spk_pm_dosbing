<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submissions extends Model
{
    protected $table = 'submission';

    protected $primaryKey = 'id_submission';

    protected $fillable = [
        'id',
        'id_alternatif',
        'judul',
        'deskripsi',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id');
    }
    
    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'id_alternatif');
    }

}