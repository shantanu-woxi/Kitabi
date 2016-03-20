<div class="pageContent">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="contactDetails">
              <h2 class="pageTitle">Contact Us</h2>
              <div class="contactForm">
                <div class="row">
                <div class="col-md-6">
                  <ul class="list-unstyled">
                    <li>
                      <label>Address</label>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        <br>Pune- 411110,
                        <br>Maharashtra,
                        <br>India
                      </p>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <label>Contact Number</label>
                  <p>
                    Office- 020 202020<br>
                    Mobile- 987456321
                  </p>
                </div>
              </div>
              </div>        
            </div><!--contact details ends-->        

            <p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.0301426301626!2d72.83894901490021!3d19.018393387120952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cedb5f922119%3A0xad0504e291eb87dd!2sSanketkar+Sweets!5e0!3m2!1sen!2sin!4v1451226806167" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            </p>
          </div>
          <div class="col-xs-offset-2 col-md-5">
            <div class="contactForm">
              <div class="contactDetails">
                <h2 class="pageTitle">Get Registered</h2>
                <form action="registration" method="post" name="registrationForm" id="registrationForm">
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Your Firstname" name="first_name" id="first_name">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Your Lastname" name="last_name" id="last_name">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="email" placeholder="Your Email" name="email_id" id="email_id">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="password" placeholder="Your Password" name="password" id="password">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="password" placeholder="Confirm Your Password" name="confirm_password" id="confirm_password">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="number" max.length="10" placeholder="Your Phone Number/Mobile Number" name="phone_number" id="phone_number">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="4" placeholder="Your Address" name="address" id="address"></textarea>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Your City" name="city" id="city">
                  </div>                
                  <div class="form-group">
                    <button type="submit" class="form-control btn-primary" onClick="">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div><!--row-->
      </div>
    </div>
<div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-xs-3 footerAddress">
            <p>
              <a href="javascript:void(0);">
                <i class="fa fa-map-marker"></i>
                <span>123, Basement, Kingsway Camp, <br> (Near GTB Nagar Metro Station Gate No.1) <br>Delhi- 110009</span>
              </a>
            </p>
            <p>
              <a href="javascript:void(0);">
                <i class="fa fa-mobile"></i>
                <span>9811373577</span>
              </a>
              
            </p> 
            <p>
              <a href="javascript:void(0);">
                <i class="fa fa-mobile"></i>
                <span>7838804491</span>
              </a>
              
            </p> 
            <p>
              <a href="javascript:void(0);">
                <i class="fa fa-mobile"></i>
                <span>9718375475</span>
              </a>
              
            </p>            
            <p>
              <a href="javascript:void(0);">
                <i class="fa fa-envelope"></i>
                <span>contactus@kitabee.in</span>
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
         <h6 class="text-center">CAT, XAT, SNAP, IIFT, SSC-CGL/CHSL, AAO, IBPS, SBI PO and more</h6>
      </div>
    </div>
    <script>
      $(document).ready( function(){
          $("#registrationForm").validate({
          rules: 
              {
                first_name: 
                {
                  required: true,
                  minlength: 2
                },
                last_name: 
                {
                  required: true,
                  minlength: 2
                },
                email_id: 
                {
                  required: true,
                  email: true,
                  minlength: 8
                },
                password: 
                {
                  required: true,
                  minlength: 6
                },
                confirm_password: 
                {
                  required: true,
                  equalTo: "#password"
                },
                phone_number: 
                {
                  required: true,
                  minlength: 8
                },
                address:
                {
                  required: true,
                  rangelength:[10,250]
                },
                city: 
                {
                  required: true,
                  minlength: 2
                }
              }
            });         
      });    
    </script>
  </body>
</html>