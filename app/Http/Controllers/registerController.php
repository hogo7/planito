<?php
namespace App\Http\Controllers;
use App\Http\Requests\createUser;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class registerController extends Controller {
    
    public function index(){ 
        return view('auth.register');
    }

    public function create(CreateUser $request){
        
    //     $valid= new validate;
        
    //    $validator=$valid->registerVal($request);
    //     //validation

        //dd($request->all('name'));

          $validator = $request->validated();

      //    dd($validator);
        //      if ($validator->fails()) {

        //          Session::flash('error', $validator->messages()->first());
        
        //         return redirect()->back()->withInput();
        
        //      }

        //TODO make age func 
        //INFO dd/mm/yy

      //  dd($request->all());
       $birthY=$request->input('birthY');
        
        //dd($birthY);
        $birthY+=622;
        $age=date('Y')-$birthY;
        if($age<=15){
            $validator['birth']='سن کمتر از 15 سال';
            return redirect()->back()->withErrors($validator)->withInput();
        }else {
            $birth=$validator['birthY'].'/'.$validator['birthM'].'/'.$validator['birthD'];
        
        }
        //---
        
        $user= new User;
        $user->name         =   $validator['name'];
        $user->email        =   $validator['email'];
        $user->password     =   Hash::make($validator['password']);
        $user->gender       =   $validator['gender'];
        $user->birthDate    =   $birth;
        $user->PhoneNumber  =   $validator['Phone'];
        //store 
        $user->save();
       // dd('test');


       auth()->login($user);
        //redirect

        return redirect()->home();
}



}
