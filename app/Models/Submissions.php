<?php

namespace App\Models;

use App\Events\SubmissionCreated;
use App\Observers\SubmissionsObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
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
    ];

    // protected static function booted()
    // {
    //     static::observe(SubmissionsObserver::class);
    // }

    public function users()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function submission_detail()
    {
        return $this->hasMany(SubmissionDetail::class, 'id_submission');
    }

}