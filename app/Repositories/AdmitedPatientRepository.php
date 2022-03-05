<?php

namespace App\Repositories;

use App\Models\AdmitedPatient;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdmitedPatientRepository{

    public function create($data)
    {

        $patient = new AdmitedPatient();
        $patient->room = $data['room'];
        $patient->case_type = $data['case_type'];
        $patient->patient_id = $data['patient_id'];
        $patient->doctor_id = $data['doctor_id'];

        $patient->save();

        return $patient;

    }



    public function update($id)
    {
        
        $patient = AdmitedPatient::where('id',$id)->firstorFail();

        $patient->update(request(['room','case_type','patient_id','doctor_id']));
    }

    public function delete($id)
    {
        $patient = AdmitedPatient::where('id',$id)->delete();
    }
}