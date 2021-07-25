<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\mbtiController;

class TestsController extends Controller
{
    public function __construct()
    {
        
        $this->middleware('auth');

    }
    //mbti text 
    /**
     * duty of this function is access mbti class 
     * dsign in SOLID mthod 
     *
     */

    public function mbti($task, $page=' '){

        $test=new mbtiController;
        
        switch ($task) {
        
        case 'create':

            $result=$this->test->create();
                break;


            case 'show':
            $result=$this->test->show($data);
                break;
           
           
            case 'index':
            return $test->index();
                break;

            case 'page':
            
        return $test->pages($page);
            
        break;
        default :
        dd('123');
                     }

        


                                                    }



    //task table
    public function tasks($task, $page=' '){

        $test=new tasksController;
        switch ($task) {
           
                
            case 'create':
            $result=$this->test->create($data);
                break;


            case 'show':
            $result=$this->test->show($data);
                break;
           
           
            case 'index':
            return $test->index();
                break;

            case 'page':
            
        return $test->pages($page);
            break;
                     }

        

        return $result;


    //perpos and link



}

}
