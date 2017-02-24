  <!--HEADER START-->
  <header id="header"> 
    <!--HEADER TOP BAR SECTION START-->
    <section class="cp-head-topbar">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-box">
              <ul>
                {{$contact}}
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-box"> <a href="../../../consult" class="btn-consultation">Get Free Consultation</a>
              <!--
              <ul>
                <li><a href="register.html">Sign up</a></li>
                <li><a href="login.html">Log in</a></li>
              </ul>
              -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--HEADER TOP BAR SECTION END--> 
    
    <!--NAVIGATION SECTION START-->
    <section class="cp-navigation-section">
      <div class="container"> <strong class="logo"><a href="index.html"><img src="../../../images/logo.png" alt="img"></a></strong>
        <div class="navigation-right"> 
          <!--Burger-->
          <!--TOP BAR SEARCH START-->
          <div class="search-box"> <a href="#" id="searchtoggl"><i class="fa fa-search"></i></a> </div>
          <!--TOP BAR SEARCH END--> 
          
          <!--NAVIGATION START-->
          <nav class="navbar navbar-inverse">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul id="nav" class="navbar-nav">
                {!! $slot !!}
              </ul>
            </div>
          </nav>
          <!--NAVIGATION END--> 
        </div>
      </div>
    </section>
    <!--NAVIGATION SECTION END--> 
  </header>
  <!--HEADER END--> 