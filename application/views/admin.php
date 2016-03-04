    <div class="welcomeStrip">
      <?php 
        if(empty($this->session->userdata['id'])){
            return $this->load->view("index");
        }
      ?>
      <h4>Welcome to Dashboard</h4>
    </div>
    <div class="container-fluid dashboardWrap">
      <div class="sidebarNav">
        <div class="dashboardMenu">
          <ul class="nav nav-pills nav-stacked dashboardNav">
            <li role="presentation" class="active"><a  href="#create" data-toggle="tab">Create Section</a></li>
            <li role="presentation"><a  href="#uploads" data-toggle="tab">Upload Section</a></li>
            <li role="presentation"><a  href="#blogs" data-toggle="tab">Create Blog</a></li>
            <li role="presentation"><a  href="#pracQuestion" data-toggle="tab">Practice Questions</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tests
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#sectionTest">Section Test</a></li>
                <li><a data-toggle="tab" href="#fullTest">Full Length</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="dashboardContent">
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="create">
              <h2 class="dashboardTitles">Create Section</h2>
              <div class="row">    
                <div class="col-xs-6 col-xs-offset-2">    
                  <div class="createForm">
                    <form action="section" method="POST">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Subject</label>
                        <select class="form-control" name="subject_Names">
                          <option>English</option>
                          <option>G.K.</option>
                          <option>Maths</option>
                          <option>Reasoning</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Section Number</label>
                        <input type="text" class="form-control" name="section_Number">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Section Name</label>
                        <input type="text" class="form-control" name="section_Name">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="uploads">
              <h2 class="dashboardTitles">Uploads Section</h2>
              <div class="row">    
                <div class="col-xs-6 col-xs-offset-2">    
                  <div class="createForm">
                    <form action="upload" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Subject</label>
                        <select class="form-control" name="upload_subject_name">
                          <option>English</option>
                          <option>G.K.</option>
                          <option>Maths</option>
                          <option>Reasoning</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Section</label>
                        <select class="form-control" name="upload_section_number">
                          <option>Section 1</option>
                          <option>Section 2</option>
                          <option>Section 3</option>
                          <option>Section 4</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Upload PDF</label>
                        <input type="file" id="exampleInputFile" name="userfile" multiple="multiple">
                        <p class="help-block">Example chapter1.pdf</p>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="blogs">
              <h2 class="dashboardTitles">Blogs Section</h2>
              <div class="row">    
                <div class="col-xs-6 col-xs-offset-2">    
                  <div class="createForm">
                    <form>
                      <div class="form-group">
                        <label for="blogtitle">Blog Title</label>
                        <input type="text" class="form-control" id="blogtitle">
                      </div>
                      <div class="form-group">
                        <label for="blogtitle">Blog Data</label>
                        <textarea class="form-control" rows="3"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div><!--row-->
            </div>
            <div role="tabpanel" class="tab-pane fade" id="pracQuestion">
              <h2 class="dashboardTitles">Practice Questions</h2>
              <div class="row">    
                <div class="col-xs-6 col-xs-offset-2">    
                  <div class="createForm">
                    <form>
                      <div class="form-group">
                        <label for="blogtitle">Blog Title</label>
                        <input type="text" class="form-control" id="blogtitle">
                      </div>
                      <div class="form-group">
                        <label for="blogtitle">Blog Data</label>
                        <textarea class="form-control" rows="3"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="sectionTest">
              <h2 class="dashboardTitles">Section Test</h2>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="fullTest">
              <h2 class="dashboardTitles">Full Test</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>

</html>