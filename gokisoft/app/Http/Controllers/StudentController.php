<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
class StudentController extends Controller {

    public function addStudent(Request $request){
        //var_dump($request ->all());
        $fullname=$request->fullname;
        $age=$request->age;
        $address=$request->address;
        DB::table('student_table')->insert([
           'fullname'=>$fullname,
            'age'=>$age,
            'address'=>$address
        ]); 
        return redirect('/input-student');
    }
    public function showStudentList(Request $request){
        $studentList = DB::table('student_table')->get();
        return view('student_list')->with([
            'studentList'=>$studentList
        ]);
    }

}