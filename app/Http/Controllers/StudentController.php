<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public function index()
    {
       $result['student']=student::all();
       return view('index', $result);

    }

   public function create()
   {
       return view('add');
   }



    function store(Request $request)
    {
        student::create([
            "firstname"=>$request->firstname,
            "lastname"=>$request->lastname,
            "email"=>$request->email,
            "created_at"=>now(),

        ]);
        $request->session()->flash('message', 'student details added successfully');
        return redirect('/');
        
    }  
    public function edit($id)  
    {  
        //  
     $student= student::find($id);  
     return view('update', compact('student'));  
    }  
   
        public function update(Request $request, $id)  
                 {  
        //  
       $request->validate([  
            'firstname'=>'required',  
            'lastname'=>'required',  
            'email'=>'required' 
             
        ]);  
  
        $student = student::find($id);  
        $student->firstname =  $request->get('firstname');  
        $student->lastname = $request->get('lastname');    
        $student->email = $request->get('email');  
        
        $student->save();  
        $request->session()->flash('message', 'student details  updated successfully');
        return redirect("/");
                  }  


    public function delete(Request $request, $id)  
    {  
        $student=student::find($id);  
        $student->delete();  
        $request->session()->flash('message', 'student details  deleted successfully');
        return redirect("/");
       
    }  
    
}
