<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subkriteria extends Model
{
    protected $table = 'subkriteria';

    protected $primaryKey = 'id_subkriteria';

    protected $fillable = [
        'id_kriteria',
        'subkriteria_name',
        'nilai',
    ];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id_kriteria');
    }

    public function profile_method()
    {
        return $this->hasMany(ProfileMethod::class, 'id_subkriteria');
    }

}