<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Check;

class CourseController extends Controller
{
    //
    public function index()
    {
        //コース一覧に表示するために、ユーザーのチェックテーブルを取得
        $judge = Check::find(\Auth::user()->checks_id);

        return view('courses.index', [
            'judge' => $judge,
        ]);
    }
}
