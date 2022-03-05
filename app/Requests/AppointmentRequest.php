<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "time"=>"required",
            "service"=>"required",
            // "patient_id"=>"required",
            // "doctor_id"=>"required",

        ];
    }

    public function messages(){
        return [
            "time.required" => 'Time is required!',
            "service.required" => 'Service is required!',
            // "doctor_id.required" => 'Doctor is required!',
            // "patient_id.required" => 'Patient is required!',

        ];
    }
}

