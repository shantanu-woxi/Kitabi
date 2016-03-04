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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/cycle.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
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