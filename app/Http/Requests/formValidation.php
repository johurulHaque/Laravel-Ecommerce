<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formValidation extends FormRequest
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
    //before go the Registration controller specified function return the validation message then go to the controller function 
    public function rules()
    {
        return [
            'name'     => ['bail','required','between:4,10','regex:/^[a-zA-Z]+[0-9]*$/'],  
            //^[] outsidebraket must 1st character alfabet //bail if find error then stop //(The regex rules share an error message by default—i.e. four failing regex rules result in one error message)
            //unique which table related
            'email'    => ['bail','required','email','unique:users','regex:/^([a-zA-Z0-9_\.\-]+)@([a-zA-Z0-9\-]+)\.([a-zA-Z]{2,5})(\.[a-z]{2,5})?$/'],  
            //confirm msg copy to next field
            'password' =>  ['bail','regex:/[a-zA-Z0-9]+/','required','confirmed'], 
            'password_confirmation' => 'bail|required|same:password'
        ];
    }

    // custome msg for server-side validate field
    // custome msg for server-side validate field
    public function messages()
    {
        return [
            'name.required'   => ':attribute field can not be blanked',
            'name.string'   => ':attribute field can not be blanked',
            'name.between'    => ':attribute should be between 4 to 10 character',

            'email.required'  => ':attribute field can not be blanked',
            'email.unique'    => ':attribute already taken', //check when input in DB
            'email'           => ':attribute should be valid',// same as email.email
            // 'email.regex'     => 'You should follow the valid :attribute format ',
             
            'password.required'=> ':attribute field can not be blanked',           
            'password.between' => ':attribute should be between 4 to 10 character',
            //doest not match not found (question)
        ];
    }

       /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
    //added by a site but not sure of the use .later check
    // public function filters()
    // {
    //     return [
    //         'email' => 'trim|lowercase',
    //         'name' => 'trim|capitalize|escape'
    //     ];
    // }
}
