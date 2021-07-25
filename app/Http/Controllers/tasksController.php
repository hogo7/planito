<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\systems as sys;
use App\task;
class tasksController extends Controller
{
    //for tasks list

    public function index(){

      if(!Auth::check()){
          redirect('login');
    }else{
      $user       = Auth::user()->toarray();
      $system     = new sys;
      $matchThese = ['userId' => $user['id']];
      $selected   = $system->where($matchThese)->count();
      if($selected!=0){
      $selected   = $system->where($matchThese)->get()->toArray()[0]['taskStatus'];
      }
      if($selected==0){
          return view('layouts.tasks');
      }else {
          return redirect('home');
      }

  }
}
    public function pages($page){

        return view('pages.tasks.'.$page);
    }
    public function create(Request $request){
        $system     = new sys;
        $user=Auth::user()->toarray();
        $data=$request->toArray();
        $matchThese = ['userId' => $user['id']];
        $selected= $system->where($matchThese)->count();
        if($selected>0)
        $selected= $system->where($matchThese)->get()->toarray()[0];

       // dd($selected);
        if(Auth::check()&& ($selected['taskStatus']!=1 || !isset($selected['taskStatus']))){

//             "task1Name" => "مدیریت افراد"
//   "l1i" => "8"
//   "l1s" => "4"
//   "l1e" => "8"
            for($conter=1;$conter<=40;$conter++){
              $task = new task;
              $thisTaskName =  $data['task'.$conter.'Name'];
              $thisTaskScore= [
                  $data['l'.$conter.'i'],
                  $data['l'.$conter.'s'],
                  $data['l'.$conter.'e']
            ];
            $thisTaskScore=implode('@',$thisTaskScore);
            $task->taskScore = $thisTaskScore;
            $task->taskName=$thisTaskName;
            $task->userId=$user['id'];

            $task->save();
        }
        //check to see update or new !!!
        $matchThese = ['userId' => $user['id']];
         sys::where($matchThese)->update(['taskStatus' => 1]);
        return redirect('home');
        }else if($selected['taskStatus']){
        dd('in costruction 405');
        }
        else{
            redirect()->login();
        }


    }
    public function show(){

    }

}
