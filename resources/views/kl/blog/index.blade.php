@extends('kl.layout.master')
@section('title', 'Blog')
@section('company', 'PLCC Legal')
@section('content')
  @component('kl.component.search')
  @endcomponent
  @component('kl.component.banner')
    @slot('pagetitle')
      Blog
    @endslot
        <li class="active">Blog</li>
  @endcomponent
  <!--MAIN START-->
  <div id="main"> 
    <!--BLOG SECTION START-->
    <section class="cp-blog padding-top-60">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            
          </div>
          <div class="col-md-8">
            @foreach($posts as $post)
            <div class="cp-post-box">
              <div class="frame cp-img-effect-1"> <a href="../../../blog/{{$post->id}}"><img src="{{$post->photo}}" alt="img"></a> </div>
              <div class="cp-text-box">
                <h2><a href="../../../blog/{{$post->id}}">{{$post->title}}</a></h2>
                <div class="detail-row">
                  <ul>
                    <li><a href="../../../blog/{{$post->id}}">{{$post->stamp}}</a></li>
                    <!-- <li>By: <a href="../../../advocate/{{$post->advocate_id}}">Advocate Name</a></li> -->
                    <!--<li><a href="#">20 Comments</a></li>-->
                  </ul>
                </div>
                <div class="shaved10x">
                {!! $post->content !!}
                </div>
                <a href="../../../blog/{{$post->id}}" class="btn-style-1">Read More</a> </div>
            </div>
            @endforeach
            <!--PAGINATION START-->
            <!--
            <div class="cp-pagination">
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
          <!--
          <div class="col-md-3">
            <aside>
              <div class="cp-sidebar">
                <div class="cp-sidebar-box">
                  <h3>Search</h3>
                  <form action="#">
                    <input type="text" placeholder="Type your text here" required>
                    <button><i class="fa fa-search"></i></button>
                  </form>
                </div>
                <div class="cp-sidebar-box">
                  <h3>Areas of Practice</h3>
                  <div class="cp-practice-area">
                    <ul>
                      <li><a href="practice-area-detail.html"><i class="fa fa-bank"></i>Corporate</a></li>
                      <li><a href="practice-area-detail.html"><i class="fa fa-medkit"></i>Personal Injury</a></li>
                      <li><a href="practice-area-detail.html"><i class="fa fa-building-o"></i>Family Law Consultant</a></li>
                      <li><a href="practice-area-detail.html"><i class="fa fa-car"></i>Serious Car Crash</a></li>
                      <li><a href="practice-area-detail.html"><i class="fa fa-money"></i>Money Laundering</a></li>
                      <li><a href="practice-area-detail.html"><i class="fa fa-truck"></i>Truck Accident</a></li>
                      <li><a href="practice-area-detail.html"><i class="fa fa-intersex"></i>Sexual Abuse</a></li>
                      <li><a href="practice-area-detail.html"><i class="fa fa-bug"></i>Drug Offences</a></li>
                      <li><a href="practice-area-detail.html"><i class="fa fa-paper-plane-o"></i>Shoplifting</a></li>
                    </ul>
                  </div>
                </div>
                <div class="cp-sidebar-box">
                  <h3>Meet Attorneys</h3>
                  <div class="cp-attorneys-box">
                    <div id="cp-attorneys-slider" class="owl-carousel owl-theme">
                      <div class="item">
                        <div class="holder">
                          <div class="frame"><a href="attorney-profile.html"><img src="images/blog/attorneys-img-1.jpg" alt="img"></a></div>
                          <strong class="name">Lee Stewart</strong> <b>Criminal Lawyer</b> </div>
                      </div>
                      <div class="item">
                        <div class="holder">
                          <div class="frame"><a href="attorney-profile.html"><img src="images/blog/attorneys-img-2.jpg" alt="img"></a></div>
                          <strong class="name">Aleen Jhon</strong> <b>Lawyer</b> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cp-sidebar-box">
                  <h3>Legal News</h3>
                  <div class="cp-legal-news">
                    <ul>
                      <li><a href="blog-detail.html">Consetetur sadipscing elit sed<i class="fa fa-angle-double-right"></i></a></li>
                      <li><a href="blog-detail.html">Magna aliquyam erat, sed <i class="fa fa-angle-double-right"></i></a></li>
                      <li><a href="blog-detail.html">Qui sequitur mutationem <i class="fa fa-angle-double-right"></i></a></li>
                      <li><a href="blog-detail.html">Magna aliquyam erat, sed <i class="fa fa-angle-double-right"></i></a></li>
                      <li><a href="blog-detail.html">Qui sequitur mutationem <i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="cp-sidebar-box">
                  <h3>Recent Posts</h3>
                  <div class="cp-recent-post">
                    <ul>
                      <li>
                        <div class="frame cp-img-effect-1"><a href="blog-detail.html"><img src="images/blog/recent-post-img-1.jpg" alt="img"></a></div>
                        <a href="blog-detail.html">Sexual Assault
                        on College Campuses</a> <span>23 November, 2015</span> <b>By: John Patrick</b> </li>
                      <li>
                        <div class="frame cp-img-effect-1"><a href="blog-detail.html"><img src="images/blog/recent-post-img-2.jpg" alt="img"></a></div>
                        <a href="blog-detail.html">Pleasure to graduate
                        with excellent!</a> <span>23 November, 2015</span> <b>By: John Patrick</b> </li>
                      <li>
                        <div class="frame cp-img-effect-1"><a href="blog-detail.html"><img src="images/blog/recent-post-img-3.jpg" alt="img"></a></div>
                        <a href="blog-detail.html">Pleasure to graduate
                        with excellent!</a> <span>23 November, 2015</span> <b>By: John Patrick</b> </li>
                    </ul>
                  </div>
                </div>
                <div class="cp-sidebar-box">
                  <h3>Tags</h3>
                  <div class="cp-tags">
                    <ul>
                      <li><a href="#">Lawyer</a></li>
                      <li><a href="#">Justice</a></li>
                      <li><a href="#">Business</a></li>
                      <li><a href="#">Employment Law</a></li>
                      <li><a href="#">Attorneys</a></li>
                      <li><a href="#">Injury</a></li>
                      <li><a href="#">Car Crash</a></li>
                      <li><a href="#">Study Law</a></li>
                      <li><a href="#">Criminal</a></li>
                      <li><a href="#">Family Law</a></li>
                    </ul>
                  </div>
                </div>
                <div class="cp-sidebar-box">
                  <h3>Happy Client Say’s</h3>
                  <div class="cp-client-box">
                    <div id="cp-client-slider" class="owl-carousel">
                      <div class="item">
                        <div class="holder"> <em> Because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter conseque that are extremely painful. Nor again is there anyone. </em>
                          <div class="frame"><a href="#"><img src="images/client-img-1.jpg" alt="img"></a></div>
                          <div class="cp-text-box"> <strong class="name">John Patrick</strong> <span>Businessman</span> </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="holder"> <em> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi . </em>
                          <div class="frame"><a href="#"><img src="images/client-img-2.jpg" alt="img"></a></div>
                          <div class="cp-text-box"> <strong class="name">Roy Miller</strong> <span>Lawyer</span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cp-sidebar-box">
                  <h3>Instagram</h3>
                  <div class="cp-instagram">
                    <ul>
                      <li class="cp-img-effect-1"><a href="#"><img src="images/blog/instagram/instagram-img-1.jpg" alt="img"></a></li>
                      <li class="cp-img-effect-1"><a href="#"><img src="images/blog/instagram/instagram-img-2.jpg" alt="img"></a></li>
                      <li class="cp-img-effect-1"><a href="#"><img src="images/blog/instagram/instagram-img-3.jpg" alt="img"></a></li>
                      <li class="cp-img-effect-1"><a href="#"><img src="images/blog/instagram/instagram-img-4.jpg" alt="img"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </aside>
          </div>
          -->
        </div>
      </div>
    </section>
    <!--BLOG SECTION END--> 
  </div>
  <!--MAIN END--> 
@endsection