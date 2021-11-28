@extends('layout')
@section('content')

<div class="row">
    <div class="col-lg-12 marigin-tb">
        <div class="pull-left">
            <h2>ToDo Application</h2>
        </div>
    </div>
</div>

@if(session()->has('message'))
<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">              										
        {{session('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
</div>
@endif


<div class="row" align="left">
    <div class="pull-right">
        <a class="btn btn-success" href="{{url('students')}}">Add Task</a>
    </div>
</div>

@if($message=Session::get('success'))
<div class="alert alert-success"><p>{{$message}}</p></div>
@endif
    
<table class="table">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Task</th>
   
        <th>Action</th>
      </tr>
      
    </thead>
    <tbody>
        @foreach ($student as $student)
            
       
      <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->task}}</td>
    
                                                  
        <td>
            
            <a href="{{url('student.update')}}/{{$student->id}}">
             <button type="button" class="btn btn-success">Edit task</button>
            </a>
                  


                <a href="{{url('student.delete')}}/{{$student->id}}"> 
                <button type="button" class="btn btn-danger">Delete task</button>
               </a>
              
                
            </td>
      </tr>
     @endforeach
    </tbody>
  </table>

  @endsection