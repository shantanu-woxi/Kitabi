    <div class="banner">
      <div class="">
        <div class="cycle-slideshow"
          data-cycle-timeout=4000
          data-cycle-next="#next"
          data-cycle-prev="#prev"
          data-cycle-fx=tileSlide
          data-cycle-tile-vertical=false
          data-cycle-tile-count=15
          >
          <img src="assets/images/banner 1.jpg">
          <img src="assets/images/banner 1.jpg">
        </div>
        <div class="center bannerNav">
          <a href=# id="prev" class="pull-left"><img src="assets/images/left arrow.png" alt=""></a>
          <a href=# id="next" class="pull-right"><img src="assets/images/right arrow.png" alt=""></a>
        </div>
      </div>
    </div><!--banner ends-->
    <div class="secNav"  id="coursesOffered">
      <div class="container">
        <ul class="row list-unstyled text-center">
          <li class="col-xs-3"><a href=""><img src="assets/images/4.png" alt=""><span>Courses Offered</span></a></li>
          <li class="col-xs-3"><a href=""><img src="assets/images/3.png" alt=""><span>Online Lessons</span></a></li>
          <li class="col-xs-3"><a href=""><img src="assets/images/2.png" alt=""><span>Test Sessions</span></a></li>
          <li class="col-xs-3"><a href=""><img src="assets/images/1.png" alt=""><span>Practice Questions</span></a></li>
        </ul>
      </div>
    </div><!--secNav ends-->
    <div class="introSection">
      <div class="container">
        <div class="row">
          <div class="col-xs-4">
            <div class="impUpdates">
              <h4 class="text-center">Important Updates</h4>
              <ul class="impUpdatesList">
                <li>
                  <a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis blandit nibh.</a>
                </li>
                <li>
                  <a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis blandit nibh.</a>
                </li>
                <li>
                  <a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis blandit nibh.</a>
                </li>
                <li>
                  <a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis blandit nibh.</a>
                </li>
                <li>
                  <a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis blandit nibh.</a>
                </li>
                <li>
                  <a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis blandit nibh.</a>
                </li>
                <li>
                  <a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis blandit nibh.</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xs-8">
            <div class="subjTabs">
              <h4>Exam Preparation</h4>
              <!-- Nav tabs -->
              <ul class="nav nav-pills" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">English</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Maths</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">GK</a></li>
                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Reasoning</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content subjectContentInfo">
                <div role="tabpanel" class="tab-pane active" id="examperp">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis blandit nibh. Nulla facilisi. Pellentesque enim nulla, aliquet eu faucibus sed, bibendum sit amet nisi. Duis ut accumsan nibh, quis malesuada nisi. Nullam dictum vulputate libero, in elementum odio imperdiet non. Fusce eget orci arcu. Aliquam faucibus accumsan sem vitae venenatis. Sed porta fringilla risus nec rutrum
                  </p>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis blandit nibh. Nulla facilisi. Pellentesque enim nulla, aliquet eu faucibus sed, bibendum sit amet nisi. Duis ut accumsan nibh, quis malesuada nisi. Nullam dictum vulputate libero, in elementum odio imperdiet non. Fusce eget orci arcu. Aliquam faucibus accumsan sem vitae venenatis. Sed porta fringilla risus nec rutrum Nullam dictum vulputate libero, in elementum odio imperdiet non. Fusce eget orci arcu. Aliquam faucibus accumsan sem vitae venenatis. Sed porta fringilla risus nec rutrum
                  </p>
                  <p>
                    <?php if(empty($this->session->userdata['id'])){?>
                      <a href="contact" class="btn-primary">Read More ></a>
                    <?php }else{?>
                      <a href="dashboard" class="btn-primary">Read More ></a>
                    <?php }?>                    
                  </p>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis blandit nibh. Nulla facilisi. Pellentesque enim nulla, aliquet eu faucibus sed, bibendum sit amet nisi.
                  </p>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis blandit nibh. Nulla facilisi. Pellentesque enim nulla, aliquet eu faucibus sed, bibendum sit amet nisi. Duis ut accumsan nibh, quis malesuada nisi. Nullam dictum vulputate libero, in elementum odio imperdiet non. Fusce eget orci arcu. Aliquam faucibus accumsan sem vitae venenatis. Sed porta fringilla risus nec rutrum Nullam dictum vulputate libero, in elementum odio imperdiet non. Fusce eget orci arcu. Aliquam faucibus accumsan sem vitae venenatis. Sed porta fringilla risus nec rutrum
                  </p>
                  <p>
                    <?php if(empty($this->session->userdata['id'])){?>
                      <a href="contact" class="btn-primary">Read More ></a>
                    <?php }else{?>
                      <a href="dashboard" class="btn-primary">Read More ></a>
                    <?php }?>                    
                  </p>
                </div>
                <div role="tabpanel" class="tab-pane" id="messages">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis blandit nibh. Nulla facilisi. Pellentesque enim nulla, aliquet eu faucibus sed, bibendum sit amet nisi. Duis ut accumsan nibh, quis malesuada nisi. Nullam dictum vulputate libero, in elementum odio imperdiet non. Fusce eget orci arcu. Aliquam faucibus accumsan sem vitae venenatis. Sed porta fringilla risus nec rutrum
                  </p>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis blandit nibh. Nulla facilisi. Pellentesque enim nulla, aliquet eu faucibus sed, bibendum sit amet nisi. Duis ut accumsan nibh, quis malesuada nisi. Nullam dictum vulputate libero, in elementum odio imperdiet non. Fusce eget orci arcu. Aliquam faucibus accumsan sem vitae venenatis. Sed porta fringilla risus nec rutrum Nullam dictum vulputate libero, in elementum odio imperdiet non. Fusce eget orci arcu. Aliquam faucibus accumsan sem vitae venenatis. Sed porta fringilla risus nec rutrum
                  </p>
                  <p>
                    <?php if(empty($this->session->userdata['id'])){?>
                      <a href="contact" class="btn-primary">Read More ></a>
                    <?php }else{?>
                      <a href="dashboard" class="btn-primary">Read More ></a>
                    <?php }?>                    
                  </p>
                </div>
                <div role="tabpanel" class="tab-pane" id="settings">
                  <p>
                     Aliquam faucibus accumsan sem vitae venenatis. Sed porta fringilla risus nec rutrum Nullam dictum vulputate libero, in elementum odio imperdiet non. Fusce eget orci arcu. Aliquam faucibus accumsan sem vitae venenatis. Sed porta fringilla risus nec rutrum Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis blandit nibh. Nulla facilisi. Pellentesque enim nulla, aliquet eu faucibus sed, bibendum sit amet nisi.
                  </p>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis blandit nibh. Nulla facilisi. Pellentesque enim nulla, aliquet eu faucibus sed, bibendum sit amet nisi. Duis ut accumsan nibh, quis malesuada nisi. Nullam dictum vulputate libero, in elementum odio imperdiet non. Fusce eget orci arcu. Aliquam faucibus accumsan sem vitae venenatis. Sed porta fringilla risus nec rutrum Nullam dictum vulputate libero, in elementum odio imperdiet non. Fusce eget orci arcu. Aliquam faucibus accumsan sem vitae venenatis. Sed porta fringilla risus nec rutrum
                  </p>
                  <p>
                    <?php if(empty($this->session->userdata['id'])){?>
                      <a href="contact" class="btn-primary">Read More ></a>
                    <?php }else{?>
                      <a href="dashboard" class="btn-primary">Read More ></a>
                    <?php }?>                    
                  </p>
                </div>
              </div>

            </div><!--subjTabs ends-->
          </div>
        </div>
      </div>
    </div>
    <!-- 
    <div class="features">
      <div class="container">
        <h2 class="text-center pageTitle">Features</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="featureContent text-center">
              <img src="assets/images/am.png" alt="">
              <h4>Online Mock Test</h4>
              <p>Give our mock tests to see how much you are prepared</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="featureContent text-center">
              <img src="assets/images/ac2.png" alt="">
              <h4>Prepare at your comfort</h4>
              <p>Easily accessible data anytime on your personal computer, save your valueable time.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="featureContent text-center">
              <img src="assets/images/ao2.png" alt="">
              <h4>Study Materials</h4>
              <p>Simple and easy to understand notes for all subjects specially created to score high in the exam.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="pageContent homeCotent connect">
      <div class="container">
        <h2 class="text-center pageTitle">Connect with Us</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="connectContent">
              <h4 class="subTitles">
                <i class="fa fa-facebook-square"></i>Facebook
                <hr>
              </h4>
              <h5>Like our Facebook page</h5>
              <p><a href="#">www.facebook.com/kautilyaa</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="connectContent">
              <h4 class="subTitles">
                <i class="fa fa-twitter-square"></i>Twitter
                <hr>
              </h4>
              <h5>Follow us on Twitter</h5>
              <p><a href="#">www.twitter.com/kautilyaa</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="connectContent">
              <h4 class="subTitles">
                <i class="fa fa-google-plus-square"></i>Facebook
                <hr>
              </h4>
              <h5>Connect with us on Google Plus</h5>
              <p><a href="#">www.plus.google.com/kautilyaa</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="blogContainer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="blogHeading">
              <h3>STAY UPDATED FOR CURRENT AFFAIRS</h3>
              <h4>Visit Our Daily Blog for new updates</h4>
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="blogLink"><a href="">KITABEE BLOG</a></h2>
          </div>
        </div>
      </div>
    </div> -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-3 footerAddress">
            <p>
              <a href="javascript:void(0);">
                <i class="fa fa-map-marker"></i>
                <span>lknasd lkansd lknag <br> fkerlknmc lkn <br> lknasd lkansd lknag <br> fkerlknmc lkn</span>
              </a>
            </p>
            <p>
              <a href="javascript:void(0);">
                <i class="fa fa-mobile"></i>
                <span>9874563210</span>
              </a>
            </p>
            <p>
              <a href="javascript:void(0);">
                <i class="fa fa-envelope"></i>
                <span>abcdefg@kitabee.com</span>
              </a>
            </p>
          </div>
          <div class="col-xs-3">
            <ul class="list-unstyled footerNavs">
              <li><a href="">HOME</a></li>
              <li><a href="">EXAM</a></li>
              <li><a href="">COURSES OFFERED</a></li>
              <li><a href="">PRACTICE QUESTIONS</a></li>
            </ul>
          </div>
          <div class="col-xs-3">
            <ul class="list-unstyled footerNavs">
              <li><a href="">DASHBOARD</a></li>
              <li><a href="">ABOUT US</a></li>
              <li><a href="contact">CONTACT US</a></li>
            </ul>
          </div>
          <div class="col-xs-3">

          </div>
        </div>
        <h6 class="text-center">Kitabee Education Services. All rights reserved.</h6>
      </div>
    </div>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/cycle.js"></script>
    <script type="text/javascript" src="assets/js/cycle-tiles.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>

  </body>

</html>