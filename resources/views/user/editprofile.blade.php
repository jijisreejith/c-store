
@extends('user.customerheader')
@section('mainbody')
<section>
<div class="container">
    <center><h1> EDIT PROFILE</h1></center>
    <div class="row">
        <div class="col-md-6">
          <div class="form_container contact-form">

    @foreach($result as $value)
            <form method="post" action="/updateprofile/{{$value->id}}" enctype="multipart/form-data">
     
          @csrf
        <div  class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="name" id="name" value="{{$value->name}}">
        </div>
        <div  class="form-group">
            <label>Contact Number</label>
            <input  class="form-control" type="number" name="contactnumber" value="{{$value->contactnumber}}"><br>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="email" name="email" value="{{$value->email}}"><br>
        </div>
            <div class="form-group">    
            <label>Password</label>
            <input class="form-control" type="password" name="password" value="{{$value->Password}}"><br>
        </div>
        <div  class="form-group">
            <input class="btn btn-danger" type="submit" name="submit" value="save">
            <input class="btn btn-primary" type="reset" value="clear">
        </div>
        </form>
        @endforeach
            </div>
        </div>
    </div>
    </div>
</section>
    @endsection



      
       
  