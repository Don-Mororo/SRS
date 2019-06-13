<?php

namespace App\Http\Controllers;
use App\Banner;
use App\grade;
use App\guardian;
use App\student;
use App\Subject;
use App\teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class BannersController extends Controller
{
    public function classHome(){
        $grades = grade::all();
        #echo '<pre>';
        #print_r($grades);
        #echo '</pre>';
       return view('admin.classes',['grades'=>$grades]);
    }
    public function addGrade(Request $request){
        $grades = new grade();
        $grades->id =$request->input('id');
        $grades->Grade =$request->input('grade');
        $grades->Stream = $request->input('stream');
       #$grades->master =$request->input('master_id');
       # $grades->status=$request->input('status');
        $grades->save();
        return redirect('classes')->with('info','class created successful');
       // return view('addBanner');
    }
    public function course(Request $request){
//        dd($grade);
        $grade = App\grade::where('id',$request->id)->first();
        $subjects = Subject::all();
        if ($grade){
            $subjects = App\subject::where('class_id',$grade->id)->get();
        }
        return view('admin.classView',['subjects'=>$subjects]);
    }
    public function viewGrade($id){
        $grades = grade::find($id);
        return view('admin.classView', ['grades' => $grades]);
    }

    public function viewStaff($id){
        $teacher = teacher::find($id);
        return view('admin.viewStaff', ['teacher' => $teacher]);
    }
    public function home(){
        return view('general.landing');
    }

    public function sign_In(Request $request){
      #  dd($request->all());
      $username = $request ->input('username');
      $pass = $request ->input('pass');
       if ($username == 'admin' && $pass=='123'){
           return view('admin.index');
       }
     else {
       return'123';
     }
    }
    public function studentPersonalInfo1(){
        return view('admin.parents');
}
#student info. registration
    public function studentPersonalInfo(Request $request){
        $students = new student();
        $students->gender = $request->input('student_gender');
        $students->first_name= $request->input('student_Fname');
        $students->other_name=$request->input('student_Mname');
        $students->last_name=$request->input('student_surname');
        $students->date_of_birth=$request->input('student_DOB');
        $students->save();
        return view('admin.parents');
}
#guardian info. registration
public function guardianPersonalInfo(Request $request){
        $guardians = new guardian();
        $grades = grade::all();
        $guardians->gender=$request->input('Title');
        $guardians->first_name=$request->input('parent_Fname');
        $guardians->other_name=$request->input('parent_Mname');
        $guardians->last_name=$request->input('parent_surname');
        $guardians->date_of_birth=$request->input('parent_DOB');
        $guardians->relation=$request->input('parent_Relation');
        $guardians->email=$request->input('parent_Email');
        $guardians->address=$request->input('parent_Address');
        $guardians->phone1=$request->input('parent_Phone1');
        $guardians->phone2=$request->input('parent_Phone2');
        $guardians->save();
        #return '123';
       return view('admin.studentProfile',['grades'=>$grades]);
    }
    #staff info. registration
    public function staffPersonalInfo(Request $request){
        $teachers = new teacher();
        $teachers->gender=$request->input('Title');
        $teachers->first_name=$request->input('staff_Fname');
        $teachers->other_name=$request->input('staff_Mname');
        $teachers->last_name=$request->input('staff_surname');
        $teachers->date_of_birth=$request->input('staff_DOB');
        $teachers->email=$request->input('staff_Email');
        $teachers->address=$request->input('staff_Address');
        $teachers->phone1=$request->input('staff_Phone1');
        $teachers->phone2=$request->input('staff_Phone2');
        $teachers->save();
       # return '123';
        return redirect('staff');
    }
    public function staffList(){
        $teachers = teacher::all();
        return view ('admin.staff',['teachers'=>$teachers]);
    }

    //subject registration
    public function subjects(Request $request){
//        $grades = grade::pluck('id')->toArray();
       // $teachers = teacher::pluck('last_name','id')->toArray();
        $subjects = new subject();
        $subjects->id=$request->input('');
        $subjects->name=$request->input('subjectName');
        $subjects->code=$request->input('code');
        $subjects->teacher_id=$request->input('teacher');
        $subjects->class_id = $request->$grades->id;
        $subjects->class_id=$request->input('');
        $subjects->save();
       // return'1234';
        echo '<pre>';
        print_r($subjects);
        echo '</pre>';
        #echo '<pre>';
        #print_r($grades);
        #echo '</pre>';
    }
}