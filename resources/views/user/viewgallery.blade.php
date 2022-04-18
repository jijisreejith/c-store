<html>
<head>
     <style>
     table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 50%;
}

th {
  height: 40px;
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
   <h2>VIEW GALLERY</h2>      
     <table>

       <tr>
               <th>Add Gallery</th>
               <th>Description</th>
        </tr>
       @foreach($result as $value)
        <tr>

             <td><img src="images/{{$value->addgallery}}" height="100px" width="100px"></td>
             <td>{{$value->description}}</td>
             <td><a href="/editgallery/{{$value->id}}">Edit</a></td>

        </tr>
           @endforeach
     </center>
     </table>
   </head>
     </html>
   
