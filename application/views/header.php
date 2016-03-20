<html>
  <head>
    <meta charset="UTF-8">
    <title>Kitabee</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="assets/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sweetalert.css">
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
    <script src="<?php echo base_url();?>assets/js/sweetalert-dev.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <?php if(!empty($this->session->flashdata('item'))){echo "<script>var message='".$this->session->flashdata('item')."';</script>";}else{echo "<script>var message=null;</script>";}?>
    <script>
      $(document).ready(function(){
            if(message!=null){
              swal({
                title: message,
                timer: 2000,
                showConfirmButton: false
              });
            }
      });
    </script>
  </head>
  <body>

    <div class="header">
      <div class="topHeader clearfix">
        <div class="container">
           <div class="pull-left upperlogo" href="welcome"><img src="<?php echo base_url();?>assets/images/textlogo.png"></div> 
          <h4 class="pull-left">SSC/BANK P.O. PREPRATORY CLASSES</h4>
          <ul class="list-unstyled list-inline pull-right socialHeader">
            <li>
              <a href="http://www.Facebook.com/kitabee/?fref=ts">
                <i class="fa fa-facebook-square"></i>
              </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-google-plus-square"></i>
              </a>
            </li>
            <li class="v-top">
              <a href="contact" class="loginHref">
                SignUp
              </a> <span class="loginHref">|</span>
            </li>
            <li class="loginMenu v-top">
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
                <a class="brand pull-left" href="welcome"><img src="<?php echo base_url();?>assets/images/logo-original.png"></a>
                <div class="logins pull-right">
                  <ul class="navs list-unstyled list-inline">
                      <li><a class="home" href="<?php echo base_url();?>welcome"><i class="fa fa-home"></i></a></li>
                    <li><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
                    <li><a href="<?php echo base_url();?>welcome#coursesOffered">Courses Offered</a></li>
                    <li><a href="<?php echo base_url();?>practice-questions">Practice Questions</a></li>
                    <li><a href="<?php echo base_url();?>contact">Contact Us</a></li>
                    <li><a href="<?php echo base_url();?>aboutus">About Us</a></li>                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--header ends-->
