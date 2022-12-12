<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
		   'name' => 'required', 'string', 'max:255',
		   'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
		   'password' => 'required','confirmed','min:5 ',
		   'phone' => 'required|digits:11',
		   'image' => 'nullable','image','mimes:jpeg,png,jpg,gif,svg','max:1024',
        ];
    }

    public function messages()
    {
	    return [
		    'name.required' => 'Enter the name',
		    'email.required' => 'Enter the email',
		    'password.required' => 'Enter the password',
		    'phone.required' => 'Enter the phone number',
	    ];
    }

}