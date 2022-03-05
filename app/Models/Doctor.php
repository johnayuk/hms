<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Patient;

class Doctor extends Model
{

    protected $primaryKey = 'id';

        protected $guarded=[];


        public function admitedpatient(){
            return $this->hasMany('App\Models\AdmitedPatient');
        }

        public function appointments(){
            return $this->hasMany('App\Models\Appointment');
        }

        public function department(){
            return $this->belongsTo('App\Models\Department');
        }

        public function user(){
            return $this->belongsTo('App\Models\User');
        }

        public function experiencedoctors()
    {
      return $this->hasMany('App\Models\ExperienceDoctor');
    }

        public function setPasswordAttribute($password)
        {   
            $this->attributes['password'] = bcrypt($password);
        }
    

}