
  @extends('user.customerheader')
@section('mainbody')

    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      01
                    </h5>
                    <h1>
                      @foreach($user as $value)

                      welcome{{$value->name}}
                      @endforeach
                      <br>

                     Online Medicines<br />
                      
                    </h1>
                    
                  </div>
                </div>
              </div>
            </div>
</div>
        </div>
        
      </div>
    </section>
     <section class="veg_section layout_padding" style="background-color: ;">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Medicines
        </h2>
        <p>
          which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't an
        </p>
      </div>
      <div class= container>
        <div class="row" >
        @foreach($result as $value)
        <div class="col-lg-3">
          <div class=" col-lg-3">
            
          <center>
            <div class="box"  >
            <div class="img-box">
              <img style="padding-left:50px" src="images/{{$value->productimage}}" alt="">
            </div>
            <div class="detail-box">
              <a href="/userlogin">
                {{$value->productname}}
              </a>
              <div class="price_box">
                <h6 class="price_heading" style="padding-left:20px">
                  ${{$value->productprice}}
                </h6>
              </div>
              <center>
              <div class="">
                <button class="btn btn-danger btn-block"><a class="" href="/addcart/{{$value->id}}">Add Cart</a></button>
              </div>
              </center>
            </div>
          </div>
          </center>
          
        </div>
        </div>
        @endforeach
    </div>
  </div>
  </section>

  <!-- end veg section -->
  @endsection