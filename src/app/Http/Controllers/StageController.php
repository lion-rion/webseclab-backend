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
    public function check($course, $stage, Request $request){
        //jsonで返す
        header("Content-type: application/json; charset=UTF-8");
        if($course == 'sqli' && $stage == 'stage1' && $request->flag == 'test1') {
            $judge = Check::find(\Auth::user()->checks_id);
            //成功したらstageを1にする
            $judge->stage1 = 1;
            $judge->save();
            echo json_encode("true");
        } else{
            echo json_encode("false");
        }
        
    }
}
