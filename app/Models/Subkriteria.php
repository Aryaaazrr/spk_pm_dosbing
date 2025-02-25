<?php

namespace App\Models;

use App\Events\KuotaUpdated;
use Illuminate\Database\Eloquent\Model;

class Subkriteria extends Model
{
    protected $table = 'subkriteria';

    protected $primaryKey = 'id_subkriteria';

    protected $fillable = [
        'id_kriteria',
        'subkriteria_name',
        'id_nilai'
    ];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id_kriteria');
    }

    public function nilai()
    {
        return $this->belongsTo(nilai::class, 'id_nilai');
    }

    public function profile_method()
    {
        return $this->hasMany(ProfileMethod::class, 'id_subkriteria');
    }
}