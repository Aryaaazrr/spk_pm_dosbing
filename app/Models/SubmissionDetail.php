<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmissionDetail extends Model
{
    use HasFactory;
    
    protected $table = 'submission_detail';

    protected $primaryKey = 'id_submission_detail';

    protected $fillable = [
        'id_submission',
        'id_alternatif',
    ];

    public function submission()
    {
        return $this->belongsTo(Submissions::class, 'id_submission');
    }

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'id_alternatif');
    }
}