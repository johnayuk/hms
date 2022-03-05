<?php

namespace App\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Requests\PatientRequest;
use App\Repositories\AdmitedPatientRepository;
use App\Models\Doctor;

class AdmitedPatientController extends Controller
{
    protected $admitedpatientRepository;

    public function __construct(admitedpatientRepository $admitedpatientRepository){
        $this->admitedpatientRepository = $admitedpatientRepository;
    }

     public function createPatient(PatientRequest $request){
        $validated = $request->validated();

       $patient = $this->admitedpatientRepository->create($request);

        return redirect('/user_patient')->withErrors(['status' => 'patient record successfully']);
    }


    public function updatePatient(PatientRequest $request,$id)
    {
        $validated = $request->validated();

        $doctor = $this->admitedpatientRepository->update($id);

        return redirect('/user_patient')->withErrors(['status'=>'patient record successfully']);
    }



    public function delete($id)
    {
        $doctor = $this->admitedpatientRepository->delete($id);

        return redirect('/user_patient')->withErrors(['status' => 'patient deleted successfully']);
    }

}


