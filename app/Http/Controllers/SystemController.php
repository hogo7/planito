<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Http\Requests\createUser;
use App\User;
use Illuminate\Support\Facades\DB;
use App\systems as sys;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SystemController extends Controller
{
    public static function set($id){
      $sys= new sys;
      $sys->userId     =$id;
      $sys->taskStatus =  0;
      $sys->mbtiStatus =  0;
      $sys->mbtiScore  =  0;
      $sys->save();
    }

    public static function get($id){
        $selected = DB::table('systems')->where('userId',$id)->count();

      if($selected==1){
        $selected = DB::table('systems')->where('userId',$id)->get()->toArray()[0];
        $result=[
           'status'=>true,
           'mbtiScore'  =>$selected->mbtiScore,
           'mbtiStatus' =>$selected->mbtiStatus,
           'taskStatus' =>$selected->taskStatus,
         ];
        return $result;

      }else{
        return false;
      }
  }

}
