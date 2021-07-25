<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\systems;
use App\task;
use PDF;
use PdfMerger;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\SystemController as sysCont;
use App\Http\Controllers\chartController as chart;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request){
      // dd($request->session());

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function checkUser(Request $request){

        dd($request->session());
        //if($request->session())


    }


public function index(){
        if(Auth::check()){
        $user=Auth::user()->toarray();
        $userData   = new systems;
        $taskData   = new task;
        $matchThese = ['userId' => $user['id'] ];
        $userSelected   = $userData->where($matchThese)->count();
        $taskSelected   = $taskData->where($matchThese)->count();

        if($userSelected==0){
        // $userSelected   = $userData->where($matchThese)->get()->toarray()[0];
        // $taskSelected   = $taskData->where($matchThese)->get()->toarray();
            sysCont::set($user['id']);
        }else{
            $userSelected   = $userData->where($matchThese)->get()->toarray()[0];
        }
            
        $lastPath=session()->all()['_previous']['url'];
            $lastPath=explode('/',$lastPath);

        //$lastPath[3] is last class 
        //$lastPath[4] is last function
        //dd($lastPath);
        $info=[
            'lastClass'=> $lastPath[3]
        ];
        if(isset($lastPath[4])){
            $info['lastfunc']=$lastPath[4];
        }
        if(isset($userSelected['mbtiResult'])){
            $info['mbti']=$userSelected['mbtiResult'];
        }
        
     return View::make('home')->with('info',$info);
    }
    else{
       return redirect()->route('login');
      }

}


public function chart(){
    
    if(Auth::check()){
    
        $user  =    Auth::user()->toarray();    
        $sys   =    new systems;
        $sys= $sys->where('userId',$user['id'])->get()->toarray()[0];
       $data=[];
        if($sys['mbtiStatus']==1){
            $mbtiChart= new chart;
            $data['mbti'] = $mbtiChart->mbti($user['id']);
        
        }
        
        if($sys['taskStatus']==1){
            $tsuChart= new chart;
            $data['isu'] = $tsuChart->isu($user['id']);    
            }

        return View::make('charts')->with('info',$data);
            
        
        }else{
        return redirect()->route('login');
       }

}


public function taskChart(Type $var = null)
{
    # code...
}


public function pdf(){
    if(Auth::check()){
        $user=Auth::user()->toarray();
        $userData   = new systems;
        $taskData   = new task;
        $matchThese = ['userId' => $user['id'] ];
        $userSelected   = $userData->where($matchThese)->count();
        $taskSelected   = $taskData->where($matchThese)->count();
 
     if($userSelected>0 && $taskSelected>0){
        $userSelected   = $userData->where($matchThese)->get()->toarray()[0];
        $taskSelected   = $taskData->where($matchThese)->get()->toarray();
        //dd($taskSelected);
        $i=0;
        foreach ($taskSelected as $task) {
            $taskScore = $task['taskScore'];
            $taskScore = explode('@',$task['taskScore']);
            $taskSelect[$i]=[
                'taskName'=>$task['taskName'],
                'i'=>$taskScore[0],
                's'=>$taskScore[1],
                'e'=>$taskScore[2],
            ];
            $i++;
        }
 
 
        $mbtiScore      = explode('~',$userSelected['mbtiScore']);
 
        //E~I~N~S~T~P~F~J
        $info=[
            'E'     =>(isset($mbtiScore[0])?$mbtiScore[0]:null),
            'I'     =>(isset($mbtiScore[1])?$mbtiScore[1]:null),
            'N'     =>(isset($mbtiScore[2])?$mbtiScore[2]:null),
            'S'     =>(isset($mbtiScore[3])?$mbtiScore[3]:null),
            'T'     =>(isset($mbtiScore[4])?$mbtiScore[4]:null),
            'P'     =>(isset($mbtiScore[5])?$mbtiScore[5]:null),
            'F'     =>(isset($mbtiScore[6])?$mbtiScore[6]:null),
            'J'     =>(isset($mbtiScore[7])?$mbtiScore[7]:null),
            'result'=>(isset($userSelected['mbtiResult'])?$userSelected['mbtiResult']:null),
            'task'  =>(isset($taskSelect)?$taskSelect:null),
        ];
        $pdf = PDF::loadView('charts',$info);
        return $pdf->download('result.pdf');
              
    }
        }else{
         return redirect()->route('login');
        }
 



    
    # code...
}
}