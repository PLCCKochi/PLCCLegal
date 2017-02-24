@extends('kl.layout.master')
@section('title', 'Testimonials')
@section('company', 'PLCC Legal')
@section('content')
  @component('kl.component.search')
  @endcomponent
  @component('kl.component.banner')
    @slot('pagetitle')
      Testimonials
    @endslot
        <li class="active">Testimonials</li>
  @endcomponent
  <!--MAIN START-->
  <div id="main"> 
    <!--TESTIMONIALS SECTION START-->
    <section class="cp-testimonials">
      <div class="testimonials-style-1 padding-tb-60">
        <div class="container">
          <h2>Banks</h2>
          <div id="testimonial-style-1" class="owl-carousel">
            @foreach($model as $testimonial)
              @if ($testimonial->category == "Bank")
                <div class="item">
                  <div class="cp-box">                      
                    <blockquote><q>{{$testimonial->testimonial}}</q>
                    <div class="frame"><img alt="img" src="../../../{{$testimonial->pocpic}}"></div>
                    <div class="text-box"><strong class="name">{{$testimonial->poc}}</strong><em>{{$testimonial->post}}, {{$testimonial->company}}</em></div>
                    </blockquote>
                  </div>
                </div>
              @endif
            @endforeach
          </div>
        </div>
      </div>
      <div class="testimonials-style-2 padding-tb-60">
        <div class="container">
          <h2>Builders</h2>
          <div id="testimonial-style-2" class="owl-carousel">
            @foreach($model as $testimonial)
              @if ($testimonial->category == "Builders")
                <div class="item">
                  <div class="cp-box">
                    <div class="frame">
                      <a href="#">
                        <img src="../../../{{$testimonial->pocpic}}" alt="img">
                      </a>
                      <strong class="name">{{$testimonial->poc}}</strong>
                      <em>{{$testimonial->post}}, {{$testimonial->company}}</em> 
                    </div>
                    <div class="cp-text-box"> <em>{{$testimonial->testimonial}}</em> </div>
                  </div>
                </div>
              @endif
            @endforeach
          </div>
        </div>
      </div>
      <div class="testimonials-style-3 padding-tb-60">
        <div class="container">
          <h2>Corporates</h2>
          <div id="testimonial-style-3" class="owl-carousel">
            @foreach($model as $testimonial)
              @if ($testimonial->category == "Corporate")
                <div class="item">
                  <div class="cp-box-outer">
                    <div class="cp-box"> <i class="fa fa-quote-left"></i>
                      <p>{{$testimonial->testimonial}}</p>
                    </div>
                    <div class="frame"><a href="#"><img src="../../../{{$testimonial->pocpic}}" alt="img"></a></div>
                    <strong class="name">{{$testimonial->poc}}</strong> <em>{{$testimonial->post}}, {{$testimonial->company}}</em> </div>
                </div>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!--TESTIMONIALS SECTION END--> 
  </div>
  <!--MAIN END-->
@endsection