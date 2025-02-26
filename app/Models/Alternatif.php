<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    protected $table = 'alternatif';

    protected $primaryKey = 'id_alternatif';

    protected $fillable = [
        'nip',
        'name',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (!empty($model->nip)) {
                $model->nip = self::formatNip($model->nip);
            }
        });
    }

    public static function formatNip($nip)
    {
        $nip = preg_replace('/\s+/', '', $nip);

        return substr($nip, 0, 8) . ' ' .
               substr($nip, 8, 6) . ' ' .
               substr($nip, 14, 1) . ' ' .
               substr($nip, 15);
    }

    public function profile_method()
    {
        return $this->hasMany(ProfileMethod::class, 'id_alternatif');
    }

    public function submission_detail()
    {
        return $this->hasMany(SubmissionDetail::class, 'id_alternatif');
    }
}