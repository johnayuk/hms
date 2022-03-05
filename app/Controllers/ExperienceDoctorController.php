<?php

namespace App\Controllers;

use App\Models\Doctor;
use App\Models\ExperienceDoctor;
use Illuminate\Http\Request;

class ExperienceDoctorController extends Controller
{
     public function index()
     {
         $doctors = Doctor::all();

         $experience_doctors = ExperienceDoctor::all();
        //  dd($experience_doctors);

        return view('experienceDoctor',compact('doctors','experience_doctors'));
     }
     

     public function createExperienceDoctors(Request $data)
     {
      
        $experience= ExperienceDoctor::create([
            'doctor_id' => $data['doctor_id'],
            ]);

            return redirect('experianceDoctor');

     }


     public function removeDoctor($id)
     {
        $experience_doctors = ExperienceDoctor::where('id',$id)->delete();

        return redirect('experianceDoctor');

     }
}
