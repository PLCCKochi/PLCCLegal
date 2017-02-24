@extends('kl.layout.master')
@section('title', 'Ooops')
@section('company', 'PLCC Legal')
@section('content')
  @component('kl.component.search')
  @endcomponent
  @component('kl.component.banner')
    @slot('pagetitle')
      Ooops
    @endslot
  @endcomponent
  <!--MAIN START-->
  <div id="main">     
    <!--ERROR PAGE START-->
    <section class="cp-error-page">
      <div class="container">
        <div class="holder"> <strong class="title">404</strong> <strong class="text">Page Not Found!<br>
          The requested page cannot be found</strong>
          <form action="#">
            <input type="text" placeholder="Type your text here" required>
            <button><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div>
    </section>
    <!--ERROR PAGE END--> 
  </div>
  <!--MAIN END--> 
@endsection