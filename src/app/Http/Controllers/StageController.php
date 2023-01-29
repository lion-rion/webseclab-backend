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
        //ddd($course, $stage, $request->flag);
        //ユーザーのチェックテーブルを取得
        $judge = Check::find(\Auth::user()->checks_id);

        //jsonで返す設定
        header("Content-type: application/json; charset=UTF-8");

        //連想配列を作成
        $check = array(
            "sqli" => array(
                "stage1" => array("test1" => ["https://localhost:8080"]),
                "stage2"=>  array("test2" => ["https://localhost:8080"]),
            ),
            "xss" => array(
                "stage1" => array("test1" => ["https://localhost:8080"]),
                "stage2"=>  array("test2" => ["https://localhost:8080"]),
            ),
        );

        if(isset($check[$course][$stage][$request->flag])){
            //存在していた場合はクリアなので、1に設定する
            $column = $course . "_" . $stage;
            $judge->$column = 1;
            $judge->save();
            echo json_encode($check[$course][$stage][$request->flag]);
        } else{
            echo json_encode("false");
        }
    }
}
