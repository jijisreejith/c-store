@extends('adminheader')
@section('mainbody')
<div class="container">
    <center>
     <div>
        <h1>Edit Products</h1>
<body>
    @foreach($result as $value)
	<form method="post" action="/updatedata/{{$value->id}}" enctype="multipart/form-data">
        @csrf

            <label>Product Image</label>
            <input type="file" name="productimage" id="productimage" value="{{$value->productimage}}"> <br>
            <label>Product Name</label>
            <input type="productname" name="productname" value="{{$value->productname}}"><br>
            <label>Product Price</label>
            <input type="productprice" name="productprice" value="{{$value->productprice}}"><br>
            <label>Date</label>
            <input type="text" name="date" value="{{$value->date}}"><br>
            <input type="submit" name="submit" value="save">

        </form>
        @endforeach
    </body>
    </html>
    @endsection