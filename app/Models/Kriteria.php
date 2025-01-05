<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = 'kriteria';

    protected $primaryKey = 'id_kriteria';

    protected $guarded = [];

    public function aspek()
    {
        return $this->belongsTo(Aspek::class, 'id_aspek');
    }
}