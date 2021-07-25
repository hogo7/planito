<?php

namespace App\Http\Controllers;
use App\Http\Controllers\SystemController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\systems as sys;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SystemController as sysControl;
class mbtiController extends Controller{


  public function check($id){
    $selected = DB::table('systems')->where('userId',$id)->get()->toArray()[0];

    ($selected->mbtiStatus)?true:false;
  }

    public function index(){

          //check user
        if(!Auth::check()){
            redirect('login');
      }else{
        //check mbtiStatus
        $user       = Auth::user()->toarray();
        $system     = new sysControl;
        //check system-
        $selected = $system->get($user['id']);
        ($selected)? : $system->set($user['id']);
        //mbtiStatus is 0 test have been taken

        $selected=$this->check($user['id']);

        if($selected==0){
        return view('layouts.mbti');
      }else{
          return redirect('home');
          //mbtiStatus 1}
        }

    }
}
    public function pages($page){

        return view('pages.mbti.'.$page);
    }

    public function create(Request $request){

        $user=Auth::user()->toarray();
        $data=$request->toArray();

        //check system get system
       // dd($selected);
        if(Auth::check()){
        //E~I~N~S~T~P~F~J
        $mbtiScore=$data['Eres'].'~'.$data['Ires'].'~'.$data['Nres'].'~'.$data['Sres'].'~'.$data['Tres'].'~'.$data['Pres'].'~'.$data['Fres'].'~'.$data['Jres'];
        //$mbtiScore=explode('~',$mbtiScore);

        //update system

        $updateList=[
         'mbtiResult'=>$data['result'],
         'mbtiScore'=>$mbtiScore,
         'mbtiStatus'=>'1',
         'userId'=>$user['id']];
         sys::where('userId',$user['id'])->update($updateList);
         $request->session()->flash('path', 'mbti');
        return redirect()->route('chart');
        }else if($selected['mbtiStatus']){
            return redirect()->home();
        }

        else{
            redirect()->login();
        }
    }



}
