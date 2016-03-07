    <div class="welcomeStrip">
      <h4>Welcome to Dashboard</h4>
    </div>
    <div class="container-fluid dashboardWrap">
      <div class="sidebarNav">
        <div class="dashboardMenu">
          <ul class="nav nav-pills nav-stacked dashboardNav">
            <li role="presentation"><a  href="#home" data-toggle="tab">Start</a></li>
            <li role="presentation"><a  href="#1" data-toggle="tab">Profile</a></li>
            <li role="presentation" class="active"><a  href="#2" data-toggle="tab">Subjects</a></li>
            <!-- <li role="presentation"><a  href="#3" data-toggle="tab">Tests</a></li> -->
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tests
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#submenu3">Submenu 1-1</a></li>
                <li><a data-toggle="tab" href="#submenu4">Submenu 1-2</a></li>
                <li><a data-toggle="tab" href="#submenu5">Submenu 1-3</a></li>
              </ul>
            </li>
            <li role="presentation"><a  href="#4" data-toggle="tab">Profile</a></li>
            <li role="presentation"><a  href="#5" data-toggle="tab">Messages</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="dashboardContent">
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade" id="home">
              <h2 class="dashboardTitles">Dashboard</h2>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="1">2</div>
            <div role="tabpanel" class="tab-pane fade" id="submenu3">submenu3</div>
            <div role="tabpanel" class="tab-pane fade" id="submenu4">submenu4</div>
            <div role="tabpanel" class="tab-pane fade" id="submenu5">submenu5</div>
            <div role="tabpanel" class="tab-pane fade in active" id="2">
              <div class="subjectsWrap">  
                <h2 class="dashboardTitles">Subjects</h2>
                <div class="row text-center subjectsListLinks">
                  <div class="col-xs-6 subImgContainer">
                    <a href="javascript:void(0);" id="engcall">
                      <img src="assets/images/slate-english.png">
                    </a>
                  </div>
                  <div class="col-xs-6 subImgContainer">
                    <a href="javascript:void(0);" id="gkcall">
                      <img src="assets/images/slate-gk.png">
                    </a>
                  </div>
                  <div class="col-xs-6 subImgContainer">
                    <a href="javascript:void(0);" id="mathscall">
                      <img src="assets/images/slate-maths.png">
                    </a>
                  </div>
                  <div class="col-xs-6 subImgContainer">
                    <a href="javascript:void(0);" id="reasoncall">
                      <img src="assets/images/slate-reasoning.png">
                    </a>
                  </div>
                </div>
              </div>
              <div class="englishWrap subjectData" id="engLessons">
                <div class="panel panel-default">
                  <!-- Default panel contents -->
                  <div class="panel-heading">ENGLISH<a href="javascript;void(0);" class="backToSubjects pull-right"><i class="fa fa-angle-left"></i>Back to Subjects</a></div>
                  <div class="panel-body">
                    <p>
                      Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                  </div>
                  <div class="lessonTableWrap">
                    <!-- Table -->
                    <table class="table table-striped">
                      <tbody id="englishContent">                        
                      </tbody>
                    </table>
                  </div>  
                </div>
              </div><!--engLessons ends-->

              <div class="gkWrap subjectData" id="gkLessons">
                <div class="panel panel-default">
                  <!-- Default panel contents -->
                  <div class="panel-heading">G.K. <a href="javascript;void(0);" class="backToSubjects pull-right"><i class="fa fa-angle-left"></i>Back to Subjects</a></div>
                  <div class="panel-body">
                    <p>
                      Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                  </div>
                  <div class="lessonTableWrap">
                    <!-- Table -->
                    <table class="table table-striped">
                      <tbody id="gkContent">                        
                      </tbody>
                    </table>
                  </div>  
                </div>
              </div><!--gkLessons ends-->

              <div class="mathsWrap subjectData" id="mathsLessons">
                <div class="panel panel-default">
                  <!-- Default panel contents -->
                  <div class="panel-heading">Maths <a href="javascript;void(0);" class="pull-right backToSubjects"><i class="fa fa-angle-left"></i>Back to Subjects</a></div>
                  <div class="panel-body">
                    <p>
                      Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                  </div>
                  <div class="lessonTableWrap">
                    <!-- Table -->
                    <table class="table table-striped">
                      <tbody id="mathsContent">
                      </tbody>
                    </table>
                  </div>  
                </div>
              </div><!--mathsLessons ends-->

              <div class="reasonsWrap subjectData" id="reasonLessons">
                <div class="panel panel-default">
                  <!-- Default panel contents -->
                  <div class="panel-heading">Reasoning <a href="javascript;void(0);" class="backToSubjects pull-right"><i class="fa fa-angle-left"></i>Back to Subjects</a></div>
                  <div class="panel-body">
                    <p>
                      Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                  </div>
                  <div class="lessonTableWrap">
                    <!-- Table -->
                    <table class="table table-striped">
                      <tbody id="reasoningContent">
                      </tbody>
                    </table>
                  </div>  
                </div>
              </div><!--reasonLessons ends-->

            </div>
            <div role="tabpanel" class="tab-pane fade" id="3">4</div>
            <div role="tabpanel" class="tab-pane fade" id="4">5</div>
            <div role="tabpanel" class="tab-pane fade" id="5">6</div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
  </body>

</html>