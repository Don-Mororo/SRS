<?php

namespace App\Http\Controllers;
use App\Subject;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function course(){
        $subjects = Subject::all();
        return view('admin.classView',['subjects'=>$subjects]);
    }
}
