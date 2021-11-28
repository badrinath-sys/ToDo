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
            "task"=>$request->task,
          

        ]);
        $request->session()->flash('message', 'task details added successfully');
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
            'task'=>'required',  
          
        ]);  
  
        $student = student::find($id);  
        $student->task=  $request->get('task');  
      
        
        $student->save();  
        $request->session()->flash('message', 'task  updated successfully');
        return redirect("/");
                  }  


    public function delete(Request $request, $id)  
    {  
        $student=student::find($id);  
        $student->delete();  
        $request->session()->flash('message', 'task  deleted successfully');
        return redirect("/");
       
    }  
    
}
