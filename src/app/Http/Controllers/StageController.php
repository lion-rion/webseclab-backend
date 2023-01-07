<?php

namespace App\Http\Controllers;

use App\Models\Check;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class StageController extends Controller
{
    //

    public function detail($course, $stage){
        //ddd($course, $stage);
        return view("courses.{$course}.{$stage}");
    }


    public function check(Request $request){

        
        if($request->messege == 'test'){
            $judge = Check::find(\Auth::user()->checks_id);
            //成功したらstageを1にする
            $judge->stage1 = 1;
            $judge->save();
        }
        
    }
}
