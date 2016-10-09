<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AwsummitRequest extends Request
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
            'title'=>'required|max:10',
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:20',
            'organization' => 'required|max:50',
            'jobposition' => 'max:50',
            'department' => 'max:50',
            'street' => 'required|max:50',
            'town' => 'required|max:50',
            'county' => 'max:50',
            'postcode' => 'required|max:10',
            'country' => 'max:50',
            'phone' => 'required|max:20',
            'email' => 'email|required',
        ];
    }



    public function messages()
    {
        return [
            'title.required' => 'Please select your Title',
            'title.max:100' => 'Title may not be greater than 10 characters.',

            'first_name.required' => 'First Name field is required',
            'first_name.max:20' => 'First Name may not be greater than 20 characters.',

            'last_name.required' => 'Last Name field is required',
            'last_name.max:20' => 'Last Name may not be greater than 20 characters.',

            'organization.required' => 'Organization field is required',
            'organization.max:50' => 'Organization may not be greater than 50 characters.',

            'jobposition.max:50' => 'Job Position may not be greater than 50 characters.',
            'department.max:50' => 'Department may not be greater than 50 characters.',

            'street.required' => 'Street address field is required',
            'street.max:50' => 'Street may not be greater than 50 characters.',

            'town.required' => 'Town field is required',
            'town.max:50' => 'Town may not be greater than 50 characters.',

            'county.max:50' => 'County may not be greater than 50 characters.',

            'phone.required' => 'Phone number field is required',
            'phone.max:20' => 'Phone number may not be greater than 20 characters.',

            'email.email' => 'Email field should follow email format',
            'email.required' => 'Email field is required',

        ];
    }





}
