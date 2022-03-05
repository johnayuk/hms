<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            // "first_name"=>"required",
            // "last_name"=>"required",
            "user_id"=>"required",
            // "email"=>"required|unique:users",
            "image"=>"mimes:jpeg,jpg,png,gif|required|max:10000",
        ];
    }

    public function messages(){
        return [
            // "first_name.required" => 'Name is required!',
            // "email.required" => 'email is required!',
            // "last_name.required" => 'last_name is required!',
            "user_id.required" => 'user_id is required!',
            "image.required" => 'is required! and must be an image'
        ];
    }
}