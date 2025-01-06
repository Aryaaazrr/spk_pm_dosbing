<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    const TIPE_CORE = 'Core Factor';
    const TIPE_SECONDARY = 'Secondary Factor';

    protected $table = 'kriteria';

    protected $primaryKey = 'id_kriteria';

    protected $fillable = [
        'kode_kriteria',
        'id_aspek',
        'kriteria_name',
        'tipe',
        'keterangan'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($kriteria) {
            $latestKriteria = self::latest('id_kriteria')->first();
            $lastNumber = $latestKriteria ? intval(substr($latestKriteria->kode_kriteria, 1)) : 0;
            $newNumber = $lastNumber + 1;

            $kriteria->kode_kriteria = 'K' . str_pad($newNumber, 3, '0', STR_PAD_LEFT);
        });
    }

    public static function getTipeOptions()
    {
        return [
            self::TIPE_CORE => 'Core Factor',
            self::TIPE_SECONDARY => 'Secondary Factor',
        ];
    }

    public function aspek()
    {
        return $this->belongsTo(Aspek::class, 'id_aspek');
    }
}