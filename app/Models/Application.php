<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ['job_id', 'applicant_id', 'status', 'notes', 'application_date'];

    // Define relationships
    public function jobVacancy()
    {
        return $this->belongsTo(JobVacancy::class, 'job_id');
    }

    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'applicant_id');
    }
}
