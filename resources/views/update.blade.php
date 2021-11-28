@extends('layout')
@section('content')



<div class="container">
    <h2>update</h2>
    <form class="form-horizontal" action="{{url('student.update')}}/{{$student->id}}" method="post">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2 " for="task"><h4>Task:</h4></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="{{$student->task}}" id="task"  name="task">
            </div>
          </div>
         
   <br>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
  </div>
  
  @endsection