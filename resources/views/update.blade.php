@extends('layout')
@section('content')



<div class="container">
    <h2>update</h2>
    <form class="form-horizontal" action="{{url('student.update')}}/{{$student->id}}" method="post">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Firstname:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="{{$student->firstname}}" id="firstname"  name="firstname">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">lastname:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="{{$student->lastname}}" id="lastname"  name="lastname">
            </div>
          </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" value="{{$student->email}}" id="email"  name="email">
        </div>
      </div>
     
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
  </div>
  
  @endsection