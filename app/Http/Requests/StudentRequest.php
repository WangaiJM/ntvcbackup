<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'lastname' => 'required|max:255',
            'firstname' => 'required|max:255',
            'surname' => 'required|max:255',
            'idNumber' => 'required|numeric',
            'address' => 'required|numeric',
            'postalcode' => 'required|numeric',
            'town' => 'required|max:255',
            'contacts' => 'required|numeric',
            'dateOfBirth' => 'required|max:255',
            'lastSchool' => 'required|max:255',
            'gender' => 'required|max:255',
            'email' => 'required|max:255|email',
            'course' => 'required|max:255',
            'religion' => 'required|max:255',
            'glastname' => 'required|max:255',
            'gfirstname' => 'required|max:255',
            'gsurname' => 'required|max:255',
            'gaddress' => 'required|numeric',
            'gpostalcode' => 'required|numeric',
            'gtown' => 'required|max:255',
            'gcontacts' => 'required|numeric',
            'ggender' => 'required|max:255',
        ];
    }
}
