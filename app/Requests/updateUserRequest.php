<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateUserRequest extends FormRequest
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
            // "id"=>"required|exist:students.id",
            "name"=>"required",
           
            "email"=>"required",
            "image"=>"mimes:jpeg,jpg,png,gif|required|max:10000",
        ];
    }

    public function messages(){
        return [
            "name.required" => 'Name is required!',
            "email.required" => ' Email required!',
            "image.required" => 'image is required! and must be an image',
        ];
    }
}
