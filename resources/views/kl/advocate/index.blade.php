@extends('kl.layout.master')
@section('title', 'Advocates')
@section('company', 'PLCC Legal')
@section('content')
  @component('kl.component.search')
  @endcomponent
  @component('kl.component.banner')
    @slot('pagetitle')
      Advocates
    @endslot
        <li class="active">Advocates</li>
  @endcomponent
  <!--MAIN START-->
  <div id="main"> 
    
    <!--ATTORNEYS TEAM SECTION START-->
    <section class="cp-attorneys-team cp-attorneys-team-space padding-top-60">
      <div class="container">
        <div class="cp-heading-1">
          <h2>Advocates <span>Team</span></h2>
        </div>
        <div class="row">
          @foreach ($advocates as $advocate)
          <div class="col-md-3 col-sm-6">
            <div class="cp-attorneys-style-1">
              <div class="frame"> <a href="../../../advocates/{{$advocate->username}}"><img src="{{$advocate->photo}}" alt="img"></a>
                <div class="caption">
                  <div class="holder">
                    <ul>
                      <li><a href="https://twitter.com/{{$advocate->tw}}"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="https://facebook.com/{{$advocate->fb}}"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="https://linkedin.com/{{$advocate->li}}"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    <p>
                      {{$advocate->caption}}
                    </p>
                    <a href="../../../advocates/{{$advocate->username}}" class="btn-style-1">Read Profile</a> </div>
                </div>
              </div>
              <div class="cp-text-box">
                <h3><a href="../../../advocates/{{$advocate->username}}">{{$advocate->name}}</a></h3>
                <em>{{$advocate->title}}</em></div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!--ATTORNEYS TEAM SECTION END--> 
  </div>
  <!--MAIN END--> 
@endsection