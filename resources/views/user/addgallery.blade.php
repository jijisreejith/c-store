@extends('adminheader')
@section('mainbody')

<div class="container">
    <center>
     <div>
       

    <div class="row">
        <div class="col-sm-3">
            
     </div>
        <div class="col-sm-9">
            
   <h2> ADD GALLERY</h2>

        
   <form method="post" action="/addgalleryindex" enctype="multipart/form-data">
    <table cellpadding="10px" align="center">
        @csrf
        <div>
             <div  class="form-group">
            <label>Add Gallery</label>
            <input class="form-control" type="file" name="addgallery">
        </div>
            <div  class="form-group">
            <label>Description</label>
            <input class="form-control" type="text" name="description">
        </div>
        <div  class="form-group">
            <input class="btn btn-danger" type="submit" name="submit" value="save">
            <input class="btn btn-primary" type="reset" value="clear">
        </div>
    </div>
</table>
</form>
</div>
</center>
</div>
</center>
</div>
@endsection