<div class="updatesContent">
	<div class="container">
		<?php
		if(!empty($questions)){
			foreach ($questions as $question) {?>
				<div class="row updatesSection">
					<h3><?php echo $question['title'];?></h3>
					<?php if($question['image_name'] != null){ ?>
					<div class="col-xs-3">
						<img src='assets/questions/<?php echo $question['image_name'];?>' class="img-thumbnail img-question" alt='<?php echo $question['title'];?>'/>			
					</div>
					<?php } ?>
					<div class="col-xs-9">
					<div class="">
						<p><?php echo $question['description'];?></p>
					</div>
					</div>
				</div><!--row ends-->
			<?php
			}
		}
		else{?>
				<div class="row updatesSection">
					<h3 class="color-red">No Questions Found .....</h3>					
				</div><!--row ends-->
		<?php } ?>
	</div>
    <div class="row bottom-60">
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
