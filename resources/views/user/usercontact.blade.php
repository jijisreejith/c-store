 @extends('user.userheader')
@section('mainbody')


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
            <form method="post" action="/usercontactindex">
               @csrf
              <div>
                <input type="text" placeholder="yourname"  name="yourname" id="name"/>
              </div>
              <div>
                <input type="text" placeholder="phonenumber" name="phonenumber" />
              </div>
              <div>
                <input type="email" placeholder="email" name="email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="message" name="message" />
              </div>
              <div class="btn_box">
                 <input class="btn btn-danger" type="submit" name="submit" value="send">
                 <input class="btn btn-primary" type="reset" value="clear">
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
   @endsection
  