
@extends('user.userheader')
@section('mainbody')
<section>
<div class="container">
    <center><h1> USER REGISTER</h1></center>
    <div class="row">
        <div class="col-md-6">
          <div class="form_container contact-form">
            <form method="post" action="/userregindex">
     
          @csrf
        <div  class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>
        <div  class="form-group">
            <label>Contact Number</label>
            <input  class="form-control" type="number" name="contactnumber"> 
        </div>
        <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="email" name="email"> 
        </div>
            <div class="form-group">    
            <label>Password</label>
            <input class="form-control" type="password" name="password">
        </div>
        <div  class="form-group">
            <input class="btn btn-danger" type="submit" name="submit" value="save">
            <input class="btn btn-primary" type="reset" value="clear">
        </div>
        </form>
            </div>
        </div>
    </div>
    </div>
</section>
    @endsection



      
       
  