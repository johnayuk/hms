<?php

// "barryvdh/laravel-snappy": "^0.4.8",

namespace App\Controllers;

use Illuminate\Http\Request;
use App;
use App\Models\AdmitedPatient;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use PDF;

class PdfController extends Controller
{
    public function downloadPDF($id)
    {
        // $user = Auth::user();
        $patient= AdmitedPatient::find($id);

       
        // $patient = $id->first();

       

        // dd($patient);
        

        $data = App::make('dompdf.wrapper');
        // dd($data);
        $data = PDF::loadView('PDFs.patientpdf',compact('patient'));

        // return $data->download('disney.pdf');

        return $data->stream();
    }




    public function doctorPDF($id)
    {
        // $user = Auth::user();
        $doctor = Doctor::find($id);

       
        // $patient = $id->first();

       

        // dd($patient);
        

        $data = App::make('dompdf.wrapper');
        // dd($data);
        $data = PDF::loadView('PDFs.doctorpdf',compact('doctor'));

        // return $data->download('disney.pdf');

        return $data->stream();
    }

}
