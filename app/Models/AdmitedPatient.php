<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmitedPatient extends Model
{
    // protected $fillabele = [
    //     'room',
    //     'case_type',
    //     'doctor_id',
    //     'patient_id',
    //    ];

    protected $guarded = [];
   
   
       public function patient(){
           return $this->belongsTo('App\Models\Patient', 'patient_id');
       }
   
       public function doctor(){
           return $this->belongsTo('App\Models\Doctor', 'doctor_id');
       }
}
