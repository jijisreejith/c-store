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
     VIEW FEEDBACK</h1>     <table>
          
          <tr>
               <th> Your Name</th>
               <th>Phone Number</th>
               <th>Email</th>
               <th>Message</th>
         </tr>
       @foreach($result as $value)
          <tr>

             <td>{{$value->yourname}}</td>
             <td>{{$value->phonenumber}}</td>
             <td>{{$value->email}}</td>
             <td>{{$value->message}}</td>
            
          </tr>
           @endforeach
     </center>
     </table>
     @endsection
