<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobVacancy extends Model
{
    protected $fillable = ['title', 'description', 'salary', 'qualification'];

    // Define relationships
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
