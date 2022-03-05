<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceDoctor extends Model
{

    protected $guarded = [];

    public function doctor()
    {
        return $this->belongsTo('App\Models\Doctor', 'doctor_id');
    }
}
