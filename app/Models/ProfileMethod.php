<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileMethod extends Model
{
    protected $table = 'profile_method';

    protected $primaryKey = 'id_profile';

    protected $fillable = [
        'id_alternatif',
        'id_kriteria',
        'id_subkriteria',
    ];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id_kriteria');
    }

    public function subkriteria()
    {
        return $this->belongsTo(Subkriteria::class, 'id_subkriteria');
    }

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'id_alternatif');
    }
}