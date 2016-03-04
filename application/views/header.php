<html>
  <head>
    <meta charset="UTF-8">
    <title>Title of the document</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!--<link rel="stylesheet" href="assets/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  </head>
  <body>
    <div class="header">
      <div class="topHeader clearfix">
        <div class="container">
          <h4 class="pull-left">SSC/BANK P.O. PREPRATORY CLASSES</h4>
          <ul class="list-unstyled list-inline pull-right socialHeader">
            <li>
              <a href="">
                <i class="fa fa-facebook-square"></i>
              </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-google-plus-square"></i>
              </a>
            </li>
            <li>
              <a href="contact" class="loginHref">
                SignUp
              </a> <span class="loginHref">|</span>
            </li>
            <li class="loginMenu">
                <?php if(empty($this->session->userdata['id'])){?>
                     <a class="loginLink loginHref" href="#">Login</a>
                <?php }else{?>
                     <a class="logoutLink logoutHref" href="logout">Logout</a>
                <?php }?>
                    <div class="loignForm">
                        <form action="dashboard" method="post">
                          <ul class="list-unstyled">
                            <li class="form-group">
                              <label> Email</label>
                              <input class="form-control" name="usernamefield" type="email">
                            </li>
                            <li class="form-group">
                              <label> Password</label>
                              <input class="form-control" name="passfield" type="password">
                            </li>
                            <li>
                              <input type="submit" class="btn-primary">
                            </li>
                          </ul>
                        </form>
                    </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="logoHeader">
        <div class="container clearfix">
          <div class="row">
            <div class="col-md-12">
              <div class="clearfix navWrapper">
                <a class="brand pull-left" href="welcome"><img src="assets/images/logo.jpg"></a>
                <div class="logins pull-right">
                  <ul class="navs list-unstyled list-inline">
                      <li><a class="home" href="welcome"><i class="fa fa-home"></i></a></li>
                    <li><a href="dashboard">Dashboard</a></li>
                    <li><a href="welcome#coursesOffered">Courses Offered</a></li>
                    <li><a href="practiceques">Practice Questions</a></li>
                    <li><a href="contact">Contact Us</a></li>
                    <li><a href="aboutus">About Us</a></li>                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--header ends-->
