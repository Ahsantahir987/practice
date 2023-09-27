<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentController extends Controller
{
    public function index(){
        $student = Student::all();
        return view('welcome', compact('student'));
    }
    public function add(){
        
        return view('/add');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|string', 
            'rollno'=>'required|numeric', 
        ]);

        $student = new Student();
        $student->name = $request->input('name');
        $student->rollno = $request->input('rollno');
        
        $student->save();
        return redirect()->route('/');
    }
    public function delete($id){
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('/');
    }

    public function edit($id){
        $student = Student::find($id);
        return view('edit', compact('student'));
    }
    
    public function update(Request $request,$id){
        $request->validate([
            'name'=>'required|string', 
            'rollno'=>'required|numeric', 
        ]);

        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->rollno = $request->input('rollno');
        
        $student->save();
        return redirect()->route('/');
    }

}
