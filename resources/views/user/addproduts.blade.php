
@extends('adminheader')
@section('mainbody')

<div class="container">
    <center>
     <div>
       

    <div class="row">
        <div class="col-sm-3">
            
     </div>
        <div class="col-sm-9">
            
   <h2> ADD PRODUCTS </h2>

        
   <form method="post" action="/addproductsindex" enctype="multipart/form-data">
    <table cellpadding="10px" align="center">
        @csrf
        <div>
            <label>Product Image</label>
            <input class="form-control" type="file" name="productimage">
        </div>
        <div>
            <label>Product Name</label>
            <input  class="form-control" type="productname" name="productname"> 
        </div>
        <div class="form-group">
            <label>Product Price</label>
            <input class="form-control" type="productprice" name="productprice"> 
        </div>
            <div class="form-group">    
            <label>Date</label>
            <input class="form-control" type="date" name="date">
        </div>
         
        <div>
            <input class="btn btn-danger" type="submit" name="submit" value="Addbook">
            <input class="btn btn-primary" type="reset" value="clear">
        </div>
    </table>
        </form>
    </div>
</div>
    </div>
</center>
</div>
       
  
  
    @endsection