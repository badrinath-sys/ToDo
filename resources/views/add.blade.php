@extends('layout')
@section('content')


<h1 class='mb10'>Add Student</h1>
<a href="{{url('/')}}">
<button type="button" class="btn btn-success">Back</button>
</a>

<div class="container">
    <h2></h2>
    <form class="form-horizontal" action="{{route('student.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Firstname:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">lastname:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname">
            </div>
          </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
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