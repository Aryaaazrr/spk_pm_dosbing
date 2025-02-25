<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';

    protected $primaryKey = 'id_nilai';

    protected $fillable = [
        'value',
    ];

    public function subkriteria()
    {
        return $this->hasMany(Subkriteria::class, 'id_nilai');
    }
}