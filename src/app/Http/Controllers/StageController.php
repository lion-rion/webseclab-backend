<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StageController extends Controller
{
    //

    public function detail($course, $stage){
        //ddd($course, $stage);
        return view("courses.{$course}.{$stage}");
    }
}
