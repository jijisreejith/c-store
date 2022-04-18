@extends('adminheader')
@section('mainbody')
<div class="container">
    <center>
     <div>
        <h1>Edit Gallery</h1>

    @foreach($result as $value)
	<form method="post" action="/updategallery/{{$value->id}}" enctype="multipart/form-data">
        @csrf

            <label>Add Gallery</label>
            <input type="file" name="addgallery" id="addgallery" value="{{$value->addgallery}}"> <br>
            <label>Description</label>
            <input type="description" name="description" value="{{$value->description}}"><br>
            <input type="submit" name="submit" value="save">

        </form>
        @endforeach
 

    @endsection