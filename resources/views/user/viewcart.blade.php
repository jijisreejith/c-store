<head>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
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
</head
   <center> 
 <h1 style="padding: 1%; background-color: rgb(67, 66, 68); color: rgb(240, 236, 236); text-align: center;background-size: 25%; ">
     VIEW CART</h1>     <table>
          
          <tr><th></th>

               <th>Product Image</th>
               <th>Product Name</th>
               <th>Product Price</th>
               <th>Quantity</th>
               <th>Total price</th>
         </tr>
     
          
             @foreach($result as $value)
           <tr class="text-center">
                                <td class="product-remove"><a href="/delete/{{$value->id}}"><i class='fa fa-remove'></i></a></td>
                                <td>{{$value->id}}</td>
                                <td><img src="images/{{$value->productimage}}" height="100px" width="100px"></td>
                                <td >{{$value->productname}}
                            
                                </td>
                                
                                <td class="price">
                                <div class="input-group mb-3">
                                {{$value->productprice}}
                                    <input type="hidden" name="price" id="productprice" value="{{$value->productprice}}"></td>
</div>
                                <td class="quantity">
                                    <div class="input-group mb-3">
                                    <input type="number" name="qnty" id="qnty" class="quantity" value="{{$value->quantity}}" min="1" >
                                </div>
                              </td>
                                
                                <td class="total">
                                    <div class="input-group mb-3">
                                    <input type="text" name="total" id="totalprice" class="quantity form-control input-number" value="{{$value->price}}">
                                </div>
                            </td>
                            <td><input type="hidden" name="pid" id="pid" value="{{$value->id}}"></td>
                           
                              </tr>
                               
                               @endforeach
     </center>
     </table>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
        $(".quantity").on('change', function()
        {
            var row = $(this).closest('tr');
    var pid = parseInt(row.find("#pid").val());
    alert(pid)    
    var quantity = parseInt(row.find(this).val());
    // alert(quantity)
    var price = parseInt(row.find('#productprice').val());
    // alert(price)
    var total= parseInt(quantity)*parseInt(price);
    // alert(total)
    // row.find('#total').html(total);
    row.find('#total').val(total);
// alert('hi')
            // var x=$('#qnty').val();
            // alert(x)
            // var pid = $("#pid").val();
            // // alert(pid)
            // var prize = $("#prize").val();
            // // alert(prize)
            // // var pname= $('#pname').val();
            // var qnty = $("#qnty").val();
            // // alert (prize)
            // var total= parseInt(prize)*parseInt(qnty);
            // $('#total').val(total);
            // $.ajax({
            //     type:"post",
            //     url:"prize.php",
            //     data:{
            //         pid:pid,
            //         qnty:qnty,
            //         total:total
            //         // pname:$('#pname').val(),
            //         // id:$('#id').val()
            //     },
            //     success:function(result)
            //     {
            //         // alert('hi')
            //         $('#total').html(result);
            //     }
            // });
        });
    });
</script>
