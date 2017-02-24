@extends('kl.layout.master')
@section('title', 'Advocate '.$model->name)
@section('company', 'PLCC Legal')
@section('content')
  @component('kl.component.search')
  @endcomponent
  @component('kl.component.banner')
    @slot('pagetitle')
      {{$model->name}}
    @endslot
        <li><a href="../../../advocates">Advocates</a></li>
        <li class="active">{{$model->name}}</li>
  @endcomponent
  <!--MAIN START-->
  <div id="main"> 
    <!--ATTORNEYS PROFILE START-->
    <section class="cp-attorneys-profile">
      <div class="attorney-details">
        <div class="container">
          <div class="holder">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="cp-frame-box">
                  <div class="frame"><img src="../../../{{$model->photo}}" alt="img"></div>
                </div>
              </div>
              <div class="col-md-8 col-sm-6">
                <div class="cp-text-box">
                  <h3>{{$model->name}}</h3>
                  <span>{{$model->caption}}</span>
                  <address>
                  <ul>
                    <li><i class="fa fa-phone"></i><a href="tel:{{$model->mobile}}">{{$model->mobile}}</a></li>
                    <li><i class="fa fa-building-o"></i><a href="tel:{{$model->office}}">{{$model->office}}</a></li>
                    <li><i class="fa fa-envelope-o"></i><a href="mailto:{{$model->email}}">{{$model->email}}</a></li>
                    <li><i class="fa fa-skype"></i><a href="skype:{{$model->skype}}">{{$model->skype}}</a></li>
                    <!--<li><i class="fa fa-globe"></i><a href="#">www.lawyer.com</a></li>-->
                  </ul>
                  </address>
                  <div class="attorney-details-social">
                    <ul>
                      <li><a href="https://twitter.com/{{$model->tw}}"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="https://facebook.com/{{$model->fb}}"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="https://linkedin.com/{{$model->li}}"><i class="fa fa-linkedin"></i></a></li>
                      <!--<li><a href="#"><i class="fa fa-instagram"></i></a></li>-->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cp-experience padding-btm-60">
        <div class="container">
          <h3>Professional Experience</h3>
          {!! $model->proexp !!}
        </div>
      </div>
      <!--
      <div class="accordions-row">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="cp-accordions">
                <h3>Practice Areas</h3>
                <div class="accordion-style-1">
                  @{foreach area in model.practice.areas}
                  <div class="cp_aaccordion-row">
                    <div class="accordion_cp" id="section9">@{repository.data.practice.areas[area].title}<span><i class="fa fa-@{repository.data.practice.areas[area].icon}"></i></span> </div>
                    <div class="contain_cp_accor">
                      <div class="content_cp_accor">
                        <p>@{repository.data.practice.areas[area].decal}</p>
                      </div>
                    </div>
                  </div>
                  @{end}
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="cp-bar-addmissions">
                <h3>Bar Addmissions</h3>
                <ul>
                  @{foreach admission in model.practice.admissions}
                    <li><a>@{repository.data.practice.admissions[admission]}</a></li>
                  @{end}
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="education-row">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="cp-box">
                <h3>Education &amp; Trainings</h3>
                <ul>
                  @{foreach admission in model.education}
                    <li> <strong class="year">@{admission.year}</strong>
                      <div class="cp-text-box">
                        <strong class="title">@{admission.univ}</strong><p>@{admission.remark}</p>
                      </div>
                    </li>
                  @{end}
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="cp-box">
                <h3>Honors &amp; Awards</h3>
                @{foreach award in model.awards}
                  <div class="honors-box">
                    <div class="icon-box"><i class="fa fa-@{award.icon}"></i></div>
                    <div class="cp-text-box"><strong class="title">@{award.name}</strong>
                      <p>@{award.remark}</p>
                    </div>
                  </div>
                @{end}
              </div>
            </div>
            <div class="col-md-4">
              <div class="cp-box">
                <h3>Best Skills</h3>
                @{foreach skill in model.skills}
                  <div class="cp-progress-box"> <strong class="title"><i class="fa fa-caret-right"></i>@{repository.data.practice.admissions[skill.key]}</strong>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="@{skill.value}" aria-valuemin="0" aria-valuemax="100" style="width: @{skill.value}%;"> @{skill.value}%</div>
                    </div>
                  </div>
                @{end}
              </div>
            </div>
          </div>
        </div>
      </div>
      -->
      <!--
      <div class="cp-clients-row cp-client-section">
        <div class="container">
          <h3>{{$model->shortname}}’s Clients</h3>
          <ul>
            @{foreach client in model.clients}
              <li>
                <a href="../../../clients/@{client}">
                  <img class="smallp" alt="img" src="../../../images/clients/@{repository.data.client[client].logo}">
                </a>
              </li>
            @{end}
          </ul>
        </div>
      </div>
      -->
      <div class="contact-form-area">
        <div class="cp-author-box">
          <div class=" container">
            <h2>Contact with {{$model->shortname}}</h2>
            <form action="form-2.php" method="post">
              <div class="row">
                <div class="col-md-4">
                  <input type="text" name="name" placeholder="First Name *" required pattern="[a-zA-Z ]+">
                </div>
                <div class="col-md-4">
                  <input type="text" name="name" placeholder="Last Name *" required pattern="[a-zA-Z ]+">
                </div>
                <div class="col-md-4">
                  <input type="text" name="phone" placeholder="Your Phone *" required pattern="(\+?\d[- .]*){7,13}">
                </div>
                <div class="col-md-12">
                  <textarea required name="comments" placeholder="Comment *" rows="10" cols="10"></textarea>
                </div>
                <div class="col-md-12">
                  <input type="submit" value="Submit Message">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--ATTORNEYS PROFILE END--> 
  </div>
  <!--MAIN END--> 
@endsection