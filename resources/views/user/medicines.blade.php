 @extends('user.userheader')
    @section('mainbody')
<html>

<head>
     <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: coral;}

</style>
</head>
<body>
   <center> 
 <h1 style="padding: 1%; background-color: rgb(67, 66, 68); color: rgb(240, 236, 236); text-align: center;background-size: 25%; ">
     MEDICINES</h1>    
     <table>
        <table cellpadding="10px" align="center">
          
          <tr>
               <th>Product Image</th>
               <th>Product Name</th>
               <th>Product Price</th>
               <th>Date</th>
         </tr>
       @foreach($result as $value)
          <tr>

             <td><img src="images/{{$value->productimage}}" height="100px" width="100px"></td>
             <td>{{$value->productname}}</td>
             <td>{{$value->productprice}}</td>
             <td>{{$value->date}}</td>
            
        
          </tr>
           @endforeach
     </center>
     </table>
     @endsection
