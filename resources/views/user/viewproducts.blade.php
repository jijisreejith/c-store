 @extends('adminheader')
    @section('mainbody')
<head>
     <style>
      table {
  border-collapse: collapse;
  border: 1px solid black;
} 
      th,td {
  border: 1px solid black;
}
table.c {
  table-layout: auto;
  width: 100%;  
}
th {
  background-color: blue;
  color: white;
}
body {
  background-color: lightgray;
  height: 100%;
    }
</style>

   <center> 
 <h1 style="padding: 1%; background-color: rgb(67, 66, 68); color: rgb(240, 236, 236); text-align: center;background-size: 25%; ">
     VIEW CART</h1>     <table>
          
          <tr>
               <th>Product Image</th>
               <th>Product Name</th>
               <th>Product Price</th>
               <th>Date</th>
               <th>Action</th>
         </tr>
       @foreach($result as $value)
          <tr>

             <td><img src="images/{{$value->productimage}}" height="100px" width="100px"></td>
             <td>{{$value->productname}}</td>
             <td>{{$value->productprice}}</td>
             <td>{{$value->date}}</td>
             <td><a href="/delete/{{$value->id}}">Delete</a></td>
             <td><a href="/edit/{{$value->id}}">Edit</a></td>
            
          </tr>
           @endforeach
     </center>
     </table>
     @endsection
