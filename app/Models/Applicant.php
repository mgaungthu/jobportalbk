<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = ['salutation', 'git_url', 'authorization', 'sponsorship', 'first_name', 'last_name', 'email', 'phone', 'country', 'former_employee', 'confirm_policy'];

    // Define relationships
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
