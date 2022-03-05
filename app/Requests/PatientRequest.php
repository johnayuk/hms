<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
    {return [
        // "id"=>"required|exist:students.id",
        "room"=>"required",
        "case_type"=>"required",
        "doctor_id"=>"required",
        "patient_id"=>"required",
    ];
}

public function messages(){
    return [
        "room.required" => 'Ward is required!',
        "case_type.required" => 'Case is required!',
        "doctor_id.required" => 'Doctor is required!',
        "patient_id.required" => 'Patient is required!',
    ];
    }

    // 'name' => ['required', 'string',],
    // 'last_name' => ['required', 'string',],
    // 'condition' => ['required','string'],
    // 'ward' => ['required','string'],
    // 'doctor_id' => ['required'],
    // 'ward'=>['required','string', 'max:100'],
    // 'phone'=> ['required','string', 'max:100'],
}
