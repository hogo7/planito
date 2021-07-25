<?php
namespace App\Http\Controllers;
use App\http\admin as admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\adminCreator;
use App\Http\Controllers\chartController as chart;
use App\systems; 
use App\task;
class AdminController extends Controller
{

    //isAdmin
    public function isAdmin(Request $request)
    {
        $admin=$request->session()->get('admin');

        if($admin){
            return $admin;
        }else {
            return $admin;
        }

    }

    //TODO admin index
    public function index(Request $request){
        if ( $this->isAdmin($request) ){
            return view('admin.index');
        }else {
            return redirect()->route('authGet');
        }
    }
    //TODO admin create
    public function add(Request $request){

        $user= new admin;
        $user->name         =   $validated['name'];
        $user->email        =   $validated['email'];
        $user->password     =   Hash::make($validated['password']);
        $user->accessLevel  =   $validated['accessLevel'];
        $user->PhoneNumber  =   $validated['Phone'];
        
        //store 
        $user->save();
       // dd('test');

    }

    //TODO userlist
    public function userList($page=0){
        $users =DB::table('users')->orderBy('id')->get()->chunk(10)->toarray();
        $system=DB::table('systems')->orderBy('userId')->get()->chunk(10)->toarray();

    if($system==[]){
        $haveSys='0';
        return view('admin/userlist')->with('users',$users[$page])->with('pages',count($users))
        ->with('curentPage',$page)->with('notSys',$haveSys);
    }
     // $user= count($user);  
     //TODO make data packet
     //Todo make view 
     //todo show result
            
            return view('admin/userlist')->with('users',$users[$page])->with('pages',count($users))
            ->with('curentPage',$page)->with('status',$system[$page]);
    }
    
    //user old chart
    public function chartold($userId){

        $matchThese   =  ['id' => $userId ];
        $users        =  DB::table('users')->where($matchThese)->get();
        $userData     =  new systems;
        $taskData     =  new task;
        $matchThese   =  ['userId' => $userId ];
        $userSelected =  $userData->where($matchThese)->count();
        $taskSelected =  $taskData->where($matchThese)->count();
        
        if($userSelected>0 && $taskSelected>0){
           
            $userSelected = $userData->where($matchThese)->get()->toarray()[0];
           
            $taskSelected = $taskData->where($matchThese)->get()->toarray();
           
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
           return view('charts')->with('info',$info);
             
        }else{
          
            return redirect()->back();
        }
        
    }


    public function chart($userId){
    
        if(true){
            $matchThese   =  ['id' => $userId ];
            $user =  DB::table('users')->where($matchThese)->get()->toArray()[0];
            
            $sys   =    new systems;
            $sys   = $sys->where('userId',$user->id)->get()->toarray()[0];
           $data=[];
            
           if($sys['mbtiStatus']==1){
                $mbtiChart= new chart;
                $data['mbti'] = $mbtiChart->mbti($user->id);
            
            }
            
            if($sys['taskStatus']==1){
                $tsuChart= new chart;
                $data['isu'] = $tsuChart->isu($user->id);    
                }
    
            return \View::make('charts')->with('info',$data);
                
            
            }else{
            return redirect()->route('login');
           }
    
    }
    




    

    //TODO admin list
    public function adminList($page=0){
        $admin =DB::table('admin')->orderBy('id')->get()->chunk(10)->toarray();
     // $user= count($user);  
     //TODO make data packet
     //Todo make view 
     //todo show result

            return view('admin/adminlist')->with('users',$admin[$page])->with('pages',count($admin))
            ->with('curentPage',$page);
    }    

    //TODO admin update


    //TODO admin delete
    public function sessionCreator($admin,Request $request){
       // dd($admin);
        $request->session()->put('admin',true);
        $request->session()->put('access',$admin->accessLevel);
        $request->session()->put('name',$admin->name);
        # code...
    }

    //TODO admin auth 
    public function authPost(adminCreator $request){
        $arrRequest=$request->toarray();
        $admin=DB::table('admin')->where('email',$arrRequest['email'])->get()->toarray()[0];

        $passMatch=password_verify($arrRequest['password'],$admin->password);
        if($passMatch){
            $this->sessionCreator($admin,$request);
        return  redirect()->route('adminIndex');
    }
    $data['error']='ایمیل یا سورد اشتباه است';
     return redirect()->route('authGet')->with('data',$data);    

    }      
    
  
public function authGet(){
    if (!(session('admin')=='admin')) {
        return view('admin.login');
    }else {
        return view('admin.index');
    }    
    }
    

    //TODO
    
    //TODO
}
