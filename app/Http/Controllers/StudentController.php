<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StudentController extends Controller
{
    public function displayform() 
    {
        return view('studentform');
    }
    public function save(Request $request)
    {
       $student_name = $request->input('stud_name'); 
       $student_number = $request->input('stud_number'); 
       $student_course = $request->input('stud_course'); 
       $student_address = $request->input('stud_address'); 


       DB::insert('insert into student (stud_name,stud_number,stud_course,stud_address) values (?,?,?,?)'
       ,[$student_name, $student_number, $student_course, $student_address]);
       return redirect('student')->with('success','Data Saved');
   }
   public function viewform()
   {
       return view('studentview');
   }

   public function index()
   {
       $student = DB::select('select * from student');
       return view('studentview', ['student'=>$student]);
   }

   public function edit_function($id)
    {
        $student = DB::select('select * from student where id = ?', [$id]);
        return view('studentedit',['student'=>$student]);
    }

    public function update_function(Request $request,$id)
    {
        $student_name = $request->input('stud_name');
        $student_number = $request->input('stud_number');
        $student_course = $request->input('stud_course');
        $student_address = $request->input('stud_address');

        DB::update('update student set stud_name = ?, stud_number = ?, stud_course = ?, stud_address = ? where id = ?'
        , [$student_name, $student_number, $student_course, $student_address, $id]);

        return redirect('studentview')->with('success', 'Data updated');
    }

    public function delete_function($id)
    {
        DB::delete('delete from student where id = ?', [$id]);
        return redirect('studentview')->with('success', 'Data Deleted');
    }
}
