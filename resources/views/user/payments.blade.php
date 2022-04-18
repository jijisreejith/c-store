@extends('user.userheader')
@section('mainbody')
<section>
<div class="container">
    <center><h1>PAYMENT METHOD</h1></center>
    <div class="row">
        <div class="col-md-6">
          <div class="form_container contact-form">
            <form method="post" action="/paymentindex" id="payments">
     
          @csrf
        <div  class="form-group">
            <label>Debit Card Number</label>
            <input class="form-control" type="number" name="debitcardnumber">
        </div>
        <div  class="form-group">
            <label>Cvv</label>
            <input class="form-control" type="number" name="cvv">
        </div>
        <div  class="form-group">
            <label>Expiry Date</label>
            <input class="form-control" type="date" name="expirydate">
        </div>
        
        
         <div  class="form-group">
            <label>Card Holder Name</label>
            <input class="form-control" type="name" name="cardholdername">
        </div>
        @foreach($sum as $value)
           <div  class="form-group">
            <label>Amount</label>
            <input class="form-control" type="number" name="amount" value="{{$value->psum}}">
        </div>
        @endforeach
        <div  class="form-group">
            <input class="btn btn-danger" type="submit" name="submit" value="save">
            <input class="btn btn-primary" type="reset" value="clear">
        <//div>
    </div>
    </div>
</section>
        </form>
            </div>
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>

<script type="text/javascript">
    $('#payments').validate({
        rules:{
            debitcardnumber:{
                required:true,
                minlength:12
            },
            cvv:{
                required:true,
               minLength:3
            },
            expirydate:{
                required:true
             
            },
             cardholdername:{
                required:true
            },
            
      
         }
        
        
    });
</script>
</body>
</html>


    @endsection
