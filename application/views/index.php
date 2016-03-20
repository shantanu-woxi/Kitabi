<div class="banner">
      <div class="container">
        <div class="cycle-slideshow"
          data-cycle-timeout=4000
          data-cycle-next="#next"
          data-cycle-prev="#prev"
          data-cycle-fx=tileSlide
          data-cycle-tile-vertical=false
          data-cycle-tile-count=15
          >
          <!--<img src="assets/images/banner 1.jpg">-->
          <img src="assets/images/gk.jpg">
          <img src="assets/images/quant- image.jpg">
          <img src="assets/images/reasoning.jpg">
          <img src="assets/images/verbal.jpg">
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
          <li class="col-xs-4"><a href=""><img src="assets/images/3.png" alt=""><span>Online Lessons</span></a></li>
          <li class="col-xs-4"><a href=""><img src="assets/images/2.png" alt=""><span>Test Sessions</span></a></li>
          <li class="col-xs-4"><a href=""><img src="assets/images/1.png" alt=""><span>Practice Questions</span></a></li>
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
                <?php 
                if(!empty($blog_title)){
                  foreach($blog_title as $title){ ?>
                  <li>
                  <a href="important-update"><?php echo $title;?></a>
                 </li>
                 <?php
                  }
                }else{?>
                    <li class="color-red">There are no Updates.</li>
                <?php
                }?>
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
                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Reasoning</a>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content subjectContentInfo">
                <div role="tabpanel" class="tab-pane active" id="examperp">
                  <p>
                   For most competitive exams the verbal section poses some serious challenges to the exam takers primarily because the linguistic and grammatical nuances taught in schools are either long forgotten or never learnt properly. secondly, due to the pervasive influence of mass media on our lives we "iternalise" wrong semantic and grammatical constructions. the advertisers and columnists are not scored on the correct application of english grammar but as test takers you could be! however on the difficult scale would be Reading comprehension passages, parajumbles, etc. these are not very difficult to solve once you understand the dynamics. however, since practice makes perfect one needs to practice these a lot.. finally, the prospective candidate, meaning you, has to deal with a ton of vocabulary based questions. that is the easiest of the lot if you prepare for it right. but you understand that in most exams unless you have a strong vocabulary base you are unlikely to succeed. most institutions shy away from this aspect of the exam because of the costs and efforts involved. not us!
we realize well the importance of every section discussed above and have the expertise and the will to work with you to help you excel.
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
                <p>Quantitative Aptitude essentially means the math that you have studied till X standard. Almost every 

aptitude exam has a section dedicated to this subject and evaluates an aspirant’s skills in solving 

problems that involve a mathematical approach. This section can be a nightmare for those who were 

not comfortable with the math during  their school days. But the good news is that this section has a 

limited syllabus. Also the concepts and theories remain static and universal. So, the Basic Proportionality 

Theorem that you studied in class IX, still holds true.</p><p>The entire Quant syllabus comprises of the following major topics:</p>
<ul class="list-unstyled">
<li>1. Geometry</li>
<li>2. Arithmetic</li>
<li>3. Algebra</li>
<li>4. Trigonometry</li>
<li>5. Number System</li>
<li>6. Data Interpretation</li>
</ul>
<p>
So, the above said reasons can be a big push for you to prepare well for this section.  But there are two 

factors that will eventually determine your success in this section- Conceptual Clarity and Speed. We at 

Kitabee recognize this very well and make sure that our students are crystal clear with all the 

mathematical theorems and properties and they know how to apply them in solving problems instead of 

making them mug up some random short tricks. For speed we ensure that our students practice tons of 

questions and solve numerous assignments along with a test after every class.
</p><p>Quantitative Aptitude is a high scoring area and its preparation is a journey that requires systematic and 

continuous efforts from your side.  Team Kitabee promises that we will not leave any stone unturned to 

help you in making this journey meaningful and successful.</p>
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
                    GK section plays an important role in all Govt. exams as is evident  form the pattern. While others sections have a fixed syllabi, GS owing to its dynamic nature is unpredictable.</p>
<p>
We at Kitabee have tried to solve this problem by addressing the core GS issues at length. Comprehensive classes and content would certainly make the aspirants more than comfortable in the most unpredictable section of exams.The static part of GS like History, Geography, Economics (theoretical) &  Polity were considered relatively easy owing to its fixed content.</p>
<p>
However, recent trends show an increased tendency of questions from what's happening contemporarily in the static subjects as well. It needs clarirty of concepts and demands awareness of day to day events. Dynamic parts like Economics (Applied), International Relations, International Organisations, Current Affairs of course have never been easy.</p>
<p>
Our attempt is a detailed yet to the point coverage of the same in class.GS is different from other sections, so our treatment of GS is different too! It's very scoring  and with Kitabee we guarantee your score in it.
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
                    This section fetches you the maximum score when it comes to SSC/bank PO. All The reliability comes from straight questions based on logic, where you neither have to mug up clumsy formulae, nor you get all obfuscated after having a look at the options. These are quickly solvable and can bring you to the highest accuracy when compared to other sections.
The major topics that come under the bracket of Logical Reasoning follow:</p>
<ul class="list-unstyled">
<li>Sequences and Series</li>
<li>Coding Decoding</li>
<li>Directions</li>
<li>Blood Relations</li>
<li>Arrangements</li>
<li>Arithmetic and Alphabetic Puzzles</li>
<li>Visual Reasoning</li>
<li>Non Verbal Reasoning</li>
<li>Statement conclusion assertion</li>
<li>Decision making</li>
<li>Clocks cubes callenders</li>
<li>Logical Matching</li>
<li>Syllogism</li>
<li>....And many more</li>    
</ul>
<p>
The cones are that this topic does not have a structured course, neither would you get a systemized approach to solve questions. When it comes to CAT or other MBA entrance exams, it is not a cake walk. We at Kitabee have some excellent set of Tricks and Practice questions which can very well carve your ability to approach the section. Yes, there are a few things that come only with some amazing techniques that Kitabee has to offer, and of course, lots of practice.
So, In the end, it all boils down to your Zeal of grabbing your dream hard, and wether you allow Kitabee to hold a chance and make your success more possible or not.
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
    <script type="text/javascript" src="assets/js/cycle.js"></script>
    <script type="text/javascript" src="assets/js/cycle-tiles.js"></script>

  </body>

</html>