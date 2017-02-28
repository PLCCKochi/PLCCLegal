@extends('kl.layout.master')
@section('title', 'Contact Us')
@section('company', 'PLCC Legal')
@section('content')
  @component('kl.component.search')
  @endcomponent
  @component('kl.component.banner')
    @slot('pagetitle')
      Contact Us
    @endslot
        <li class="active">Contact Us</li>
  @endcomponent
  <!--MAIN START-->
  <div id="main"> 
    <!--CONTACT STYLE 1 START-->
    <section class="cp-contact-style-1 padding-tb-60">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="left-box">
              <h3>Please fill this form to get in touch with us</h3>
              <form action="form.php" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="name" placeholder="First Name *" required pattern="[a-zA-Z ]+">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="name" placeholder="Last Name *" required pattern="[a-zA-Z ]+">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="email" required placeholder="Your Email *" pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="subject" placeholder="Subject *" required>
                  </div>
                  <div class="col-md-12">
                    <textarea name="comments" cols="10" rows="10" placeholder="Message *" required></textarea>
                  </div>
                  <div class="col-md-12">
                    <input type="submit" value="Post Message">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <div class="right-box">
              <h3>Contact Information</h3>
              <p>Feel free to drop by at any time. We are open 6 days a week, from 9am to 6pm. Even if we aren't open, you may give us a ring and we'll be able to work something out.</p>
              <address>
              <ul>
                <li> <i class="fa fa-home"></i><b>{{$settings->caddress}}</b> </li>
                <li><i class="fa fa-phone"></i>{{$settings->cphone}}</li>
                <li><i class="fa fa-print"></i>{{$settings->cfax}}</li>
                <li><i class="fa fa-envelope-o"></i><a href="mainto:{{$settings->cemail}}"></a>{{$settings->cemail}}</li>
                <!--<li><i class="fa fa-skype"></i>001 (407) 901-6400</li>-->
                <li><i class="fa fa-globe"></i><a href="{{$settings->cwebsite}}">{{$settings->cwebsite}}</a></li>
              </ul>
              </address>
            </div>
          </div>
        </div>
      </div>
      <div class="cp-map-row">
        <div id="map_contact_2" class="map_canvas active"></div>
      </div>
    </section>
    <!--CONTACT STYLE 1 END--> 
  </div>
  <!--MAIN END--> 
@endsection