@extends('kl.layout.master')
@section('title', 'Services')
@section('company', 'PLCC Legal')
@section('content')
  @component('kl.component.search')
  @endcomponent
  @component('kl.component.banner')
    @slot('pagetitle')
      Services
    @endslot
        <li class="active">Services</li>
  @endcomponent
  <!--MAIN START-->
  <div id="main"> 
    <!--PRACTICE AREA SECTION START-->
    <section class="cp-practice-area cp-practice-space padding-top-60">
      <div class="container">
        <div class="row">
          @foreach($services as $service)
          <div class="col-md-3">
            <div class="cp-box">
              <div class="frame"> <img class="serviceimg" src="../../../{{$service->image}}" alt="img">
                <div class="caption"><a href="../../../services/{{$service->id}}" class="link"><i class="fa fa-link"></i></a></div>
              </div>
              <div class="cp-text-box">
                <h3><a href="../../../services/{{$service->id}}">{{$service->name}}</a></h3>
                <div class="shaved02x">
                  <!-- Content -->
                </div><br>
                <a href="../../../services/{{$service->id}}" class="btn-style-1">Read More</a> </div>
            </div>
          </div>
          @endforeach
        </div>
        <!--PAGINATION START-->
        <!--
        <div class="cp-pagination margin-60">
          <nav>
            <ul class="pagination">
              <li> <a href="#" aria-label="Previous"> <i class="fa fa-angle-left"></i> </a> </li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li> <a href="#" aria-label="Next"> <i class="fa fa-angle-right"></i> </a> </li>
            </ul>
          </nav>
        </div>
        -->
        <!--PAGINATION END--> 
      </div>
    </section>
    <!--PRACTICE AREA SECTION END--> 
  </div>
  <!--MAIN END-->
@endsection