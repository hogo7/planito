<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\sessionCreator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class sessionController extends Controller{

    public function index(){
        return view('auth.login');
    }

    public function createSession(sessionCreator $request){

        $validator = $request->validated();
        
       //dd($validator);
        $user = new User;
       // $matchThese = ['field' => 'value', 'password' => Hash::make()];
       $matchThese = ['email' => $request['email']];  
       $selected= $user->where($matchThese)->get();
       $TheUser=$selected->toArray();
       $TheUser=$TheUser[0];
       $passCheck=Hash::check($request['password'], $TheUser['password']);
       
       if($passCheck){
       $request->session()->put('name',$TheUser['name']);
       $request->session()->put('userid',$TheUser['id']);
       $request->session()->put('Phone',$TheUser['PhoneNumber']);
       $request->session()->put('email',$TheUser['email']);
       
      // dd($request->session());
       //  $request->session()->put('')
       Auth::loginUsingId($TheUser['id'], TRUE);
       return redirect()->route('home');
        }
      
    }
    
    public function deleteSession(Request $request){

            $request->session()->flush();
         //   dd($request->session());
            Auth::logout();
            return redirect()->route('home');

    }
}
