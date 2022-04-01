@extends('user.userheader')
@section('mainbody')
    <!-- slider section -->

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
                     Online Medicines<br />
                      
                    </h1>
                    <a href="" class="">
                      buy Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      02
                    </h5>
                    <h1>
                    Your Online Medical Store in India <br />
                      
                    </h1>
                    <a href="" class="">
                      buy Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
        </ol>
      </div>
    </section>
    <!-- end slider section -->
  </div>
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

 

  

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact <span>Us</span>
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container contact-form">
            <form action="">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- veg section -->
  @endsection

  

  

 