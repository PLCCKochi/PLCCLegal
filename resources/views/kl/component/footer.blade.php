  <!--FOOTER START--> 
  <footer id="footer"> 
    <!--TWITTER SECTION START-->
    <section class="cp-twitter-footer">
      <div class="container">
        <div class="holder">
          <ul id="cp-footer-twitter">
          
          {{$tweets}}

          </ul>
        </div>
      </div>
    </section>
    <!--FOOTER CONTENT AREA START-->
    <section class="cp-footer-content">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <div class="cp-box">
              <strong class="footer-logo">
                <a href="../../">
                  <img src="../../../images/footer-logo.png" alt="img">
                </a>
              </strong>
              {!! $excerpt !!}
            </div>
          </div>
          <!--
          <div class="col-md-4 col-sm-4">
            <div class="cp-box">
              <h3>Practice Areas</h3>
              <div class="practice-area">
                <ul>
                  @{foreach x in repository.data.company.practice}
                      <li>
                      <a href="#"><i class="fa fa-@{repository.data.practice.areas[x].icon}"></i>
                        @{repository.data.practice.areas[x].title}
                      </a>
                      </li>
                  @{end}
                </ul>
              </div>
            </div>
          </div>
          -->
          <div class="col-md-4 col-sm-4">
            <div class="cp-box">
              {{$local}}
            </div>
          </div>
        </div>
        {{$copyright}}
      </div>
    </section>
    <!--FOOTER CONTENT AREA END--> 
  </footer>
  <!--FOOTER END--> 