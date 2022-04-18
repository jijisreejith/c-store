<html>
<head>
    <!-- <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script> -->
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
    <th>Product id</th>
    <th>Product Image</th>
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Quantity</th>
    <th>Total price</th>
    </tr>

     
    @foreach($result as $value)
   
    <tr class="text-center">
        @if($value->status=="addcart")
    <td class="product-remove"><a href="/delete/{{$value->pid}}"><i class='fa fa-remove'></i></a></td>
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
    <input type="text" name="total" id="totalprice" class=" form-control input-number" value="{{$value->price}}">
     </div>
     </td>
     <td><input type="hidden" name="pid" id="pid" value="{{$value->pid}}"></td>
        <td><input type="hidden" name="cid" id="cid" value="{{$value->id}}"></td>
        <td> <button class="btn btn-danger"><a href="/deletedata/{{$value->id}}">Delete</button></td>
                           @endif
     </tr>
                            
     @endforeach
     <tr>
       <td> <button class="btn btn-danger"> <a href="/home">Add Product</button></td>

       <td> <button class="btn btn-danger"> <a href="/buyproduct/{{$value->id}}">Buy Product</button></td>

     </tr>


     
     </table>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
        $(".quantity").on('change', function(e)
        {
            e.stopPropagation();
            var row = $(this).closest('tr');
    var pid = parseInt(row.find("#pid").val());
    // alert(pid)    
    var quantity = parseInt(row.find(this).val());
    // alert(quantity)
    var pric
    e = parseInt(row.find('#productprice').val());
    // alert(price)
    var total= parseInt(quantity) * parseInt(price);
    // alert(total)
    // row.find('#total').html(total);
    row.find('#totalprice').val(total);

// alert('hi')
var x = parseInt(row.find('#cid').val());
alert(x)
$.ajax({
                method:"get",
                url:"/totalprize/"+x,
                data:{
                    pid:pid,
                    qnty:quantity,
                    total:total
                },
                success:function(result)
                { 
                    $('#total').html(result);
                }
            });
        });
        // location.reload(true);
    });
</script></html>