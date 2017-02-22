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