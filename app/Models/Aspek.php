<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aspek extends Model
{
    protected $table = 'aspek';

    protected $primaryKey = 'id_aspek';

    protected $fillable = [
        'kode_aspek',
        'aspek_name',
        'persentase',
        'keterangan'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($aspek) {
            $latestAspek = self::latest('id_aspek')->first();
            $lastNumber = $latestAspek ? intval(substr($latestAspek->kode_aspek, 1)) : 0;
            $newNumber = $lastNumber + 1;

            $aspek->kode_aspek = 'A' . str_pad($newNumber, 3, '0', STR_PAD_LEFT);
        });
    }

    public function kriteria()
    {
        return $this->hasMany(Kriteria::class, 'id_aspek');
    }
}