<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //  protected $fillable = [
    // 'name','last_name', 'condition', 'doctor_id', 'ward', 'phone',
    //  ];

    protected $primaryKey = 'id';

    protected $table = 'patients';

    protected $guarded=[];

    //  public function doctor(){
    //      return $this->belongsTo('App\Models\Doctor'); 
    //  }


     public function setPasswordAttribute($password)
     {   
         $this->attributes['password'] = bcrypt($password);
     }


    

     public function appointments()
     {
         return $this->hasMany('App\Models\Appointment');
     }

     public function user()
     {
         return $this->belongsTo('App\Models\User', 'id');
     }

     public function admitedPatient()
     {
         return $this->hasMany('App\Models\AdmitedPatient');
     }

}
