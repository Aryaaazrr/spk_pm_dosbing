<?php

namespace App\Models;

use App\Events\SubmissionCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submissions extends Model
{
    use HasFactory;

    protected $table = 'submission';

    protected $primaryKey = 'id_submission';

    protected $fillable = [
        'id',
        'judul',
        'deskripsi',
        'prodi',
        'angkatan',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($submission) {
            event(new SubmissionCreated($submission));
        });
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function submission_detail()
    {
        return $this->hasMany(SubmissionDetail::class, 'id_submission');
    }

}