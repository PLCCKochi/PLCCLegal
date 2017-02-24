@extends('kl.layout.master')

@section('title', 'Page Title')
@section('company', 'Kochi Law')

@section('content')
<!--BANNER START-->
  <div id="cp-banner">
    <ul id="cp-home-banner">
      @{foreach banner in model.banner}
        <li> <img src="../../../images/@{banner.image}" alt="img">
          <div class="caption"> <strong class="title">@{banner.text1}<span><!--Pro--></span></strong>
            <h1>@{banner.text2}</h1>
            <div class="banner-btn-row">
              <a href="@{banner.buttons[0].link}" class="btn-style-1">@{banner.buttons[0].title}</a>
              <a href="@{banner.buttons[1].link}" class="btn-style-1 btn-style-2">@{banner.buttons[1].title}</a>
            </div>
          </div>
        </li>
      @{end}
      <!--
      <li> <img src="images/banner-img-2.jpg" alt="img">
        <div class="caption"> <strong class="title">We are Lawyers <span>Pro</span></strong>
          <h1>We’re Voice of Justice!<br>
            Not An Echo</h1>
          <div class="banner-btn-row"> <a href="#" class="btn-style-1">Learn More</a> <a href="contact-1.html" class="btn-style-1 btn-style-2">Contact Us</a> </div>
        </div>
      </li>
      -->
    </ul>
  </div>
  <!--BANNER END-->   
  <!--MAIN START-->
  <div id="main"> 
    <!--WELCOME SECTION START-->
    <section class="cp-welcome padding-tb-60">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="cp-heading-1">
              <h2>Welcome to <span>@{repository.data.company.name}</span></h2>
              <em>@{repository.data.company.tagline}</em></div>
            <div class="cp-outer-box">
              @{foreach step in model.threestep}
              <div class="cp-box">
                <div class="icon-box"><img src="../../../images/icon-img-@{index+1}.jpg" alt="img"></div>
                <div class="cp-text-box">
                  <h3><a href="#">@{step.title}</a></h3>
                  <p>@{step.description}</p>
                </div>
              </div>
              @{end}
            </div>
          </div>
          <div class="col-md-6">
            <div class="welcome-slider">
              <ul id="cp-welcome-slider">
                @{foreach event in model.fevents}
                  <li>
                    <div class="frame"><img src="../../../images/@{event.image}" alt="img"></div>
                    <div class="cp-text-box">
                      <p>@{event.details}</p>
                    </div>
                  </li>
                @{end}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--WELCOME SECTION END--> 
    
    <!--PRACTICE SECTION START-->
    <section class="cp-practice-section padding-top-60">
      <div class="container">
        <div class="cp-heading-1">
          <h2>Practice Areas</h2>
        </div>
      </div>
      <div class="cp-practice-slider">
        <div id="cp-practice" class="owl-carousel">
          @{foreach area in repository.data.practice.areas}
            <div class="item">
              <div class="cp-box"> <i class="fa fa-@{area.value.icon}"></i>
                <h3><a href="#">@{area.value.title}</a></h3>
                <div class="dddotwrapper">
                  <p>@{area.value.decalExcerpt}</p>
                </div>
              </div>
            </div>
          @{end}
        </div>
      </div>
    </section>
    <!--PRACTICE SECTION END--> 
    
    <!--ATTORNEYS TEAM SECTION START-->
    <section class="cp-attorneys-team padding-tb-60">
      <div class="container">
        <div class="cp-heading-1">
          <h2>Our Advocates <span>Team</span></h2>
        </div>
        <div class="row">
          @{foreach advocate in repository.data.advocate}
            <div class="col-md-3 col-sm-6">
              <div class="cp-attorneys-style-1">
                <div class="frame"> <a href="../../../advocates/@{advocate.key}"><img src="../../../images/advocates/@{advocate.value.photo}" alt="img"></a>
                  <div class="caption">
                    <div class="holder">
                      <ul>
                        <li><a href="https://twitter.com/@{advocate.value.social.tw}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://facebook.com/@{advocate.value.social.fb}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://linkedin.com/@{advocate.value.social.li}"><i class="fa fa-linkedin"></i></a></li>
                      </ul>
                      <p>
                        @{advocate.value.caption}
                      </p>
                      <a href="../../../advocates/@{advocate.key}" class="btn-style-1">Read Profile</a> </div>
                  </div>
                </div>
                <div class="cp-text-box">
                  <h3><a href="../../../advocates/@{advocate.key}">@{advocate.value.name}</a></h3>
                  <em>@{advocate.designation}</em></div>
              </div>
            </div>
          @{end}
        </div>
      </div>
    </section>
    <!--ATTORNEYS TEAM SECTION END--> 
    
    <!--CHOOSE LAWYERS SECTION START-->
    <section class="cp-choose-lawyers">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="left-box">
              <div class="frame">
                <img src="images/choose-lawyer-img.jpg" alt="img">
                <img src="images/choose-lawyer-img.jpg" alt="img">
                <div class="choose-logo-box">
                  <a href="#">
                    <img src="images/choose-logo.png" alt="img">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-box">
              <div class="cp-text-box">
                <div class="cp-heading-1">
                  <h2>Why Choose <span>@{repository.data.company.name}</span></h2>
                  <em>@{repository.data.company.tagline}</em>
                </div>
                @{foreach step in model.threestepb}
                  <div class="detail-box">
                    <div class="icon-box"><i class="fa fa-@{step.logo}"></i></div>
                    <div class="inner">
                      <h3><a href="#">@{step.title}</a></h3>
                      <p>@{step.description}</p>
                    </div>
                  </div>
                @{end}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--CHOOSE LAWYERS SECTION END--> 
    
    <!--FACTS AND FIGERS SECTION START-->
    <section class="cp-facts-section padding-btm-60">
      <div class="container">
        <div class="holder">
          <div class="row">
            @{foreach count in model.stats}
              <div class="col-md-3 col-sm-6">
                <div class="cp-box">
                  <strong class="title counter">@{count.number}</strong>
                  <span>@{count.title}</span>
                </div>
              </div>
            @{end}
          </div>
        </div>
      </div>
    </section>
    <!--FACTS AND FIGERS SECTION END--> 
    
    <!--NEWS SECTION START-->
    <section class="cp-news-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-box">
              <h2>Legal <span>News</span></h2>
              @{foreach post in model.posts}
                <div class="cp-box">
                  <div class="row">
                    <div class="col-md-4 col-sm-6">
                      <div class="frame cp-img-effect-1"><a href="../../../blog/@{post}"><img src="../../../images/posts/@{repository.data.blog[post].image}" alt="img"></a></div>
                    </div>
                    <div class="col-md-8 col-sm-6">
                      <div class="cp-text-box">
                        <h3>
                        <a href="../../../blog/@{post}">@{repository.data.blog[post].title}</a></h3>
                        <a href="../../../blog/@{post}" class="detail-text">@{repository.data.blog[post].date}<span>//</span></a>
                        <a href="../../../advocates/@{repository.data.blog[post].author}" class="detail-text">@{repository.data.blog[post].author}</a>
                        <p>@{!repository.data.blog[post].postExcerptMDd}</p>
                      </div>
                    </div>
                  </div>
                </div>
              @{end}
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-box">
              <h2>Happy <span>Clients</span></h2>
              <ul id="cp-client">
                @{foreach client in model.testimonials}
                  <li>
                    <div class="client-col">
                      <blockquote>
                      <q>@{repository.data.client[client].testimonial}</q>
                        <div class="frame"><img src="images/pocs/@{repository.data.client[client].pocpic}" alt="img"></div>
                        <div class="text-box"> <strong class="name">@{repository.data.client[client].poc}</strong> <em>@{repository.data.client[client].post}, @{repository.data.client[client].company}</em> </div>
                      </blockquote>
                    </div>
                  </li>
                @{end}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--NEWS SECTION END--> 
    
    <!--CONSULTATION SECTION START-->
    <section class="cp-consultation padding-tb-60">
      <div class="container">
        <div class="cp-heading-1">
          <h2>Free <span>Consultation</span></h2>
          <em>Everything good starts over a cup of coffee. Drop a line here and we'll fix a time for coffee.</em> </div>
        <form action="form-2.php" method="post">
          <div class="row">
            <div class="col-md-3">
              <input type="text" name="name" placeholder="Your Name *" required pattern="[a-zA-Z ]+">
            </div>
            <div class="col-md-3">
              <input type="text" name="email" placeholder="Your Email *" pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$">
            </div>
            <div class="col-md-3">
              <input type="text" name="phone" placeholder="Phone Number *" required pattern="(\+?\d[- .]*){7,13}">
            </div>
            <div class="col-md-3">
              <div class="selector">
                <select class="full-width">
                  <option value="1">Practice Area</option>
                  <option value="2">Practice Area 2</option>
                  <option value="3">Practice Area 3</option>
                  <option value="4">Practice Area 4</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <textarea name="comments" cols="10" rows="10" placeholder="Case Description *"></textarea>
            </div>
            <div class="col-md-12">
              <input type="submit" class="btn-style-1" value="Send Request">
            </div>
          </div>
        </form>
      </div>
    </section>
    <!--CONSULATATION SECTION END--> 
    
    <!--CLIENTS SECTION START-->
    <section class="cp-client-section padding-tb-60">
      <div class="container">
        <h2>Cilents <span>We Deal</span></h2>
        <ul>
          @{foreach client in model.clients}
            <li><a href="#"><img class="smallp" src="../../../images/clients/@{repository.data.client[client].logo}" alt="img"></a></li>
          @{end}
        </ul>
      </div>
    </section>
    <!--CLIENTS SECTION END--> 
  </div>
  <!--MAIN END--> 
@endsection