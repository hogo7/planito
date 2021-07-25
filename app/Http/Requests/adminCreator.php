<?php

namespace App\Http\Requests;
use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class adminCreator extends FormRequest
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
            'email'    =>'required|E-mail|Exists:admin,email',
            'password' =>'required|min:8',
        ];
    }
    public function messages(){ 
       return [
            'email.required'    =>'ایمیلت چیه?',
            'email.exists'       =>'این ایمیل ثبت نشده',
            'password.required' =>'رمز بزن بیا تو ' ,
            'password.min'      =>'حداقل هشتا بزن که کسی شک نکنه ',         
        ];
    
    }

}
