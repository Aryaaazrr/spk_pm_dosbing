<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aspek extends Model
{
    protected $table = 'aspek';

    protected $primaryKey = 'id_aspek';

    protected $guarded = [];

    public function kriteria()
    {
        return $this->hasMany(Kriteria::class, 'id_aspek');
    }
}