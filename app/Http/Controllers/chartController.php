<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\systems;
use App\task;

class chartController extends Controller
{
    public function mbti ($userid){
        $userData   = new systems;
        $matchThese = ['userId' => $userid];
        $userSelected   = $userData->where($matchThese)->count();
    if($userSelected==1){
        $userSelected   = $userData->where($matchThese)->get()->toarray()[0];
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
        'result'=>(isset($userSelected['mbtiResult'])?$userSelected['mbtiResult']:null)
    ];

    return $info ;

    }

}

    
    public function isu($userid)
    {
    $taskData   = new task;
    $matchThese = ['userId' => $userid ];
    $taskSelected   = $taskData->where($matchThese)->count();
        if($taskSelected==40){
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

    return($taskSelect);

    }
    else 
    return 'nau';
}
}
