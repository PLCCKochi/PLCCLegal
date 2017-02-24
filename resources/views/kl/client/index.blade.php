@extends('kl.layout.master')
@section('title', 'Clients')
@section('company', 'PLCC Legal')
@section('content')
  @component('kl.component.search')
  @endcomponent
  @component('kl.component.banner')
    @slot('pagetitle')
      Our Clients
    @endslot
        <li class="active">Clients</li>
  @endcomponent
  <!--MAIN START-->
  <div id="main"> 
    <!--GALLERY SECTION START-->
    <section class="cp-gallery padding-tb-60 cp-masonary greybg">
      <div class="container" role="main">
        <ul class="gallery" id="gallery-grid-1-masonrywrap">
          @foreach($clients as $client)
            <li class="loop-entry">
              <div class="cp-box">
                <div class="frame">
                  <img src="../../../{{$client->logo}}" alt="img">
                  <!--
                  <div class="caption">
                    <a href="../../../{{$client->logo}}" class="zoom" data-rel="prettyPhoto"> <i class="fa fa-search-plus"></i>
                    </a>
                  </div>
                  -->
                </div>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </section>
    <!--GALLERY SECTION END--> 
  </div>
  <!--MAIN END--> 
@endsection