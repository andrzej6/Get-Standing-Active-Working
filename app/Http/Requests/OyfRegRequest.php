<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class OyfRegRequest extends Request
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
            'title'=>'required|max:5',
            'fname' => 'required|max:100',
            'lname' => 'required|max:100',
            'email' => 'email|required',
            'workphone' => 'required|max:20',
            'mobilephone' => 'max:20',
            'ename' => 'required|max:80',
            'address1' => 'required|max:100',
            'address2' => 'max:100',
            'postcode' => 'required|max:100',
            'city' => 'required|max:100',
            'county' => 'max:100',
            'jpos' => 'max:10',
            'dep' => 'max:100',
            'behalf' => 'required|max:100',
            'event_loc' =>'required|max:50',
            'workplace_size'=>'required|max:30'
        ];
    }


    public function messages()
    {
        return [
            'title.required' => 'Please select your Title',

            'fname.required' => 'First Name field is required',
            'fname.max:100' => 'First Name may not be greater than 100 characters.',

            'lname.required' => 'Last Name field is required',
            'lname.max:100' => 'Last Name may not be greater than 100 characters.',

            'email.required' => 'Email field is required',

            'workphone.required' => 'Work phone number field is required',
            'workphone.max:20' => 'Work phone number may not be greater than 20 characters.',

            'mobilephone.required' => 'Mobile phone number field is required',

            'ename.required' => 'Company Name field is required',
            'ename.max:80' => 'Company Name may not be greater than 80 characters.',

            'address1.required' => 'Company address line1 field is required',
            'address1.max:100' => 'Company address line1 may not be greater than 100 characters.',

            'address2.max:100' => 'Company address line2 may not be greater than 100 characters.',

            'postcode.required' => 'Post Code field is required',
            'postcode.max:100' => 'Post Code may not be greater than 100 characters.',

            'city.required' => 'City field is required',
            'city.max:100' => 'City may not be greater than 100 characters.',

            'county.max:100' => 'County may not have more than 100 characters.',
            'jpos.max:100' => 'Job Position may not be greater than 100 characters.',
            'dep.max:100' => 'Department may not be greater than 100 characters.',
            'behalf.required' => 'Please select behalf option',

            'event_loc.required' =>'Please select where the event is happening',
            'workplace_size.required'=>'Please select how many employees is participating'

        ];
    }



}
