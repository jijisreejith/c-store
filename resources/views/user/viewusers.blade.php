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
   <h2>VIEW USERS</h2>      
     <table>
          
          <tr>
               <th>Name</th>
               <th>Contact Number</th>
               <th>Email</th>
               <th>Password</th>
         </tr>
       @foreach($result as $value)
          <tr>

             <td>{{$value->name}}</td>
             <td>{{$value->contactnumber}}</td>
             <td>{{$value->email}}</td>
             <td>{{$value->password}}</td>
            
          </tr>
           @endforeach
     </center>
     </table>
     @endsection
