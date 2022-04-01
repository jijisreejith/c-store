 @extends('user.userheader')
@section('mainbody')
         <div>
        @foreach($result as $value)
        <center>
        <h1 style="padding: 3%; background-color: rgb(67, 66, 68); color: rgb(240, 236, 236); text-align: center;background-size: 25%;"><b> Welcome {{$value->name}} </b></h1>
      </center>
        @endforeach
    </div>


    <style>body {
  background: lightgray;
    }</style>
    @endsection