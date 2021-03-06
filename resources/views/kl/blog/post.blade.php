@extends('kl.layout.master')
@section('title', $model->title)
@section('company', 'PLCC Legal')
@section('content')
  @component('kl.component.search')
  @endcomponent
  @component('kl.component.banner')
    @slot('pagetitle')
      {{$model->title}}
    @endslot
        <li><a href="../../../blog">Blog</a></li>
        <li class="active">{{$model->title}}</li>
  @endcomponent  
  <!--MAIN START-->
  <div id="main"> 
    <!--BLOG SECTION START-->
    <section class="cp-blog padding-top-60">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="cp-post-box">
              <div class="frame cp-img-effect-1"><a href="../../../blog/{{$model->id}}"><img height="350px" width="850px" src="../../../{{$model->photo}}" alt="img"></a></div>
              <div class="cp-text-box">
                <h2><a href="#">{{$model->title}}</a></h2>
                <div class="detail-row">
                  <ul>
                    <li><a href="../../../blog/{{$model->id}}">{{$model->stamp}}</a></li>
                    <li>By: <a href="../../../advocate/{{$model->advocate_id}}">Advocate Name</a></li>
                    <!--<li><a href="#">20 Comments</a></li>-->
                  </ul>
                </div>

                {!!$model->content!!}
                <div class="cp-share-post-row"> <strong class="title">Share Post:</strong>
                  <ul>
                    <li><a target="_blank" href="https://www.facebook.com/sharer.php?u={!!$settings['cwebsite']!!}/blog/{{$model->id}}"><i class="fa fa-facebook"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/intent/tweet?url={!!$settings['cwebsite']!!}/blog/{{$model->id}}&text=@{repository.page.title}&via=kochilaw&hashtags=kochilaw,plcc"><i class="fa fa-twitter"></i></a></li>
                    <li><a target="_blank" href="https://plus.google.com/share?url={!!$settings['cwebsite']!!}/blog/{{$model->id}}"><i class="fa fa-google-plus"></i></a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/shareArticle?url={!!$settings['cwebsite']!!}/blog/{{$model->id}}&title=@{repository.page.title}"><i class="fa fa-linkedin"></i></a></li>
                    <!--<li><a href=""><i class="fa fa-dribbble"></i></a></li>-->
                    <!--<li><a href=""><i class="fa fa-instagram"></i></a></li>-->
                    <!--<li><a href=""><i class="fa fa-pinterest-p"></i></a></li>-->
                  </ul>
                </div>
                <!--
                <div class="cp-author-box">
                  <h3>About Post Author</h3>
                  <div class="thumb"><a href="../../../advocate/@{repository.data.blog[repository.entity].author}"><img height="85px" width="85px" class="thumbscale" src="../../../images/advocates/@{repository.data.advocate[repository.data.blog[repository.entity].author].photo}" alt="@{repository.data.advocate[repository.data.blog[repository.entity].author].name}"></a></div>
                  <div class="text-box"><strong class="name">@{repository.data.advocate[repository.data.blog[repository.entity].author].shortname}</strong>
                  <p>@{repository.data.advocate[repository.data.blog[repository.entity].author].caption}</p>
                  </div>
                  -->
                  <!--
                  <h3>Write a Comment</h3>
                  <form action="form-3.php" method="post">
                    <div class="row">
                      <div class="col-md-4">
                        <input type="text" name="name" placeholder="First Name *" required pattern="[a-zA-Z ]+">
                      </div>
                      <div class="col-md-4">
                        <input type="text" name="name" placeholder="Last Name *" required pattern="[a-zA-Z ]+">
                      </div>
                      <div class="col-md-4">
                        <input type="text" name="email" placeholder="Your Email *" required pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$">
                      </div>
                      <div class="col-md-12">
                        <textarea cols="10" rows="10" placeholder="Comment *" required></textarea>
                      </div>
                      <div class="col-md-12">
                        <input type="submit" value="Post Comment">
                      </div>
                    </div>
                  </form>
                  -->
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <aside>
              <div class="cp-sidebar">
                <!--
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
                      <li><a href="#"><i class="fa fa-bank"></i>Corporate</a></li>
                      <li><a href="#"><i class="fa fa-medkit"></i>Personal Injury</a></li>
                      <li><a href="#"><i class="fa fa-building-o"></i>Family Law Consultant</a></li>
                      <li><a href="#"><i class="fa fa-car"></i>Serious Car Crash</a></li>
                      <li><a href="#"><i class="fa fa-money"></i>Money Laundering</a></li>
                      <li><a href="#"><i class="fa fa-truck"></i>Truck Accident</a></li>
                      <li><a href="#"><i class="fa fa-intersex"></i>Sexual Abuse</a></li>
                      <li><a href="#"><i class="fa fa-bug"></i>Drug Offences</a></li>
                      <li><a href="#"><i class="fa fa-paper-plane-o"></i>Shoplifting</a></li>
                    </ul>
                  </div>
                </div>
                <div class="cp-sidebar-box">
                  <h3>Meet Attorneys</h3>
                  <div class="cp-attorneys-box">
                    <div id="cp-attorneys-slider" class="owl-carousel owl-theme">
                      <div class="item">
                        <div class="holder">
                          <div class="frame"><a href="#"><img src="images/blog/attorneys-img-1.jpg" alt="img"></a></div>
                          <strong class="name">Lee Stewart</strong> <b>Criminal Lawyer</b> </div>
                      </div>
                      <div class="item">
                        <div class="holder">
                          <div class="frame"><a href="#"><img src="images/blog/attorneys-img-2.jpg" alt="img"></a></div>
                          <strong class="name">Aleen Jhon</strong> <b>Lawyer</b> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cp-sidebar-box">
                  <h3>Legal News</h3>
                  <div class="cp-legal-news">
                    <ul>
                      <li><a href="#">Consetetur sadipscing elit sed<i class="fa fa-angle-double-right"></i></a></li>
                      <li><a href="#">Magna aliquyam erat, sed <i class="fa fa-angle-double-right"></i></a></li>
                      <li><a href="#">Qui sequitur mutationem <i class="fa fa-angle-double-right"></i></a></li>
                      <li><a href="#">Magna aliquyam erat, sed <i class="fa fa-angle-double-right"></i></a></li>
                      <li><a href="#">Qui sequitur mutationem <i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                  </div>
                </div>
                -->
                <!--
                <div class="cp-sidebar-box">
                  <h2>Other Posts</h2>
                  <div class="cp-recent-post">
                    <ul>

                      @{foreach post in repository.data.blog}
                        @{if post.key !== 'feature'}
                          @{if post.key !== repository.entity}
                            <li>
                              <div class="frame cp-img-effect-1">
                                <a href="../../../blog/">
                                  <img 
                                    src="{!! $model->photo !!}"
                                    alt="img"
                                    width="100px"
                                    height="100px">
                                </a>
                              </div>
                              <br>
                              <a href="../../../blog/@{post.key}"><h3>@{repository.data.blog[post.key].title}</h3></a>
                              @{repository.data.blog[post.key].date} // <a href="../../../advocates/@{post.value.author}">@@{post.value.author}</a>
                            </li>
                          @{fi}
                        @{fi}
                      @{end}

                      <li>
                        <div class="frame cp-img-effect-1"><a href="#"><img src="images/blog/recent-post-img-1.jpg" alt="img"></a></div>
                        <a href="#">Sexual Assault
                        on College Campuses</a> <span>23 November, 2015</span> <b>By: John Patrick</b> </li>
                      <li>
                        <div class="frame cp-img-effect-1"><a href="#"><img src="images/blog/recent-post-img-2.jpg" alt="img"></a></div>
                        <a href="#">Pleasure to graduate
                        with excellent!</a> <span>23 November, 2015</span> <b>By: John Patrick</b> </li>
                      <li>
                        <div class="frame cp-img-effect-1"><a href="#"><img src="images/blog/recent-post-img-3.jpg" alt="img"></a></div>
                        <a href="#">Pleasure to graduate
                        with excellent!</a> <span>23 November, 2015</span> <b>By: John Patrick</b> </li>
                      
                    </ul>
                  </div>
                </div>
                -->
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
    <!--BLOG SECTION END--> 
  </div>
  <!--MAIN END--> 
@endsection