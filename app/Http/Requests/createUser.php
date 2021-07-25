<?php
namespace App\Http\Requests;

use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class createUser extends FormRequest{
    
    

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
            'name'      => 'required|max:255|min:3'
            ,'email'    => 'string|required|E-mail|unique:users,email'
            ,'birthY'   => 'required|min:4|max:4'
            ,'birthM'   => 'required'
            ,'birthD'   => 'required'
            ,'gender'   => 'required'
            ,'Phone'    => 'required|min:11|max:11'
            ,'password' => 'required|min:8|confirmed'
        ];

    }

    public function messages(){

        return [
            'name.required' => "اسمت چیه ؟!!",
            'name.max' =>'اسمه یا تریلی!!!!!',
            'name.min' => 'خطا اسم ',
            'email.required' => 'ایمیلت چیه?',
            'email.unique' => 'عضوی و خودت خبر نداری ؟',
            'gender.required' => 'سرکار خانم یا جناب آقای ؟',
            'Phone.required'    =>'شماره ما توی درباره ما هست  شما بدین شاید باهتون کار داشتیم',
            'birthY.required'  => 'تولدت کیه ؟',
            'birthY.min'  => 'سال ها چهار رقمیه گلم',
            'birthY.max'  => 'سال ها چهار رقمیه گلم',
            'password.required' =>'رمز بزار تا امن باشی ' ,
            'password.min' =>'حداقل هشتا بزن که کسی شک نکنه ',
            'password.confirmed' =>'هنوز هیچی نشده یادت رفت پسوردت رو  تایید کن تا بفهمم یاد داری',
            'Phone.min' =>  'شمارتو با صفر بزن لطفا'         
        ];
    }
   

}
