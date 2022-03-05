<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    // protected $fillabele = [
    //  'time',
    //  'service',
    //  'doctor_id',
    //  'patient_id',
    // ];

    // public $timestamps = false;

    protected $guarded = []; 


    public function patient(){
        return $this->belongsTo('App\Models\Patient', 'patient_id');
    }

    public function doctor(){
        return $this->belongsTo('App\Models\Doctor', 'doctor_id');
    }
}
