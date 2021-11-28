@extends('layout')
@section('content')


<h1 class='mb10'>Add Task</h1>
<a href="{{url('/')}}">
<button type="button" class="btn btn-success">Back</button>
</a>

<div class="container">
    <h2></h2>
    <form class="form-horizontal" action="{{route('student.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="task"><h4>Task</h4></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="task" placeholder="Enter task details" name="task">
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