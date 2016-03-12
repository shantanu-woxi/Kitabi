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
            <li role="presentation" class="active "><a  href="#create" data-toggle="tab">Create Section</a></li>
            <li role="presentation"><a  href="#uploads" data-toggle="tab">Upload Section</a></li>
            <li role="presentation"><a  href="#blogs" data-toggle="tab">Important Update</a></li>
            <li role="presentation"><a  href="#pracQuestion" data-toggle="tab">Practice Question</a></li>
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
             <?php if(!empty($message) && $message!=''){echo $message;}?>
              <h2 class="dashboardTitles">Create Section</h2>
              <div class="row">    
                <div class="col-xs-6 col-xs-offset-2">    
                  <div class="createForm">
                    <form action="section" method="POST">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Subject</label>
                        <select class="form-control" name="subject_id" value="">
                          <option value="1" name="English">English</option>
                          <option value="2" name="G.K.">G.K.</option>
                          <option value="3" name="Maths">Maths</option>
                          <option value="4" name="Reasoning">Reasoning</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Section Number</label>
                        <input type="number" class="form-control" name="section_Number" maxlength="5">
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
                    <form id="uploads-section" action="upload" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Subject</label>
                        <select class="form-control" name="upload_subject_number" id="selectSubjectId" onchange="loadChapters(this.options[this.selectedIndex].value)">
                          <option value="-1">Select Subject</option>
                          <option value="1" name="English">English</option>
                          <option value="2" name="G.K.">G.K.</option>
                          <option value="3" name="Maths">Maths</option>
                          <option value="4" name="Reasoning">Reasoning</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Select Section</label>
                        <select class="form-control" id="selectSectionId" name="upload_section_number">
                        </select>
                        <span id="loader"></span>
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
              <h2 class="dashboardTitles">Important Update</h2>
              <div class="row">    
                <div class="col-xs-6 col-xs-offset-2">    
                  <div class="createForm">
                    <form id="important-update" action="blog" method="post">
                      <div class="form-group">
                        <label for="blogtitle">Important Update Title</label>
                        <input type="text" class="form-control" id="blogtitle" name="title">
                      </div>
                      <div class="form-group">
                        <label for="blogtitle">Description</label>
                        <textarea class="form-control" rows="3" name="description"></textarea>
                      </div>                      
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div><!--row-->
            </div>
            <div role="tabpanel" class="tab-pane fade" id="pracQuestion">
              <h2 class="dashboardTitles">Practice Question</h2>
              <div class="row">    
                <div class="col-xs-6 col-xs-offset-2">    
                  <div class="createForm">
                    <form id="practice-questions" action="store-practice-question" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="blogtitle">Practice Question</label>
                        <input type="text" class="form-control" id="practice-question-title" name="title">
                      </div>
                      <div class="form-group">
                        <label for="blogtitle">Description</label>
                        <textarea class="form-control" rows="3" id="practice-question-description" name="description"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Upload Image</label>
                        <input type="file" id="quesimage" name="userfile" multiple="multiple">
                        <p class="help-block">Example aster.jpg</p>
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
  </body>
<script>
      $(document).ready( function(){
         
          $("#uploads-section").validate({
          rules: 
              {
                upload_subject_number: 
                {
                  required: true,
                },
                upload_section_number: 
                {
                  required: true,
                },
                userfile: 
                {
                  required: true,
                },
              }
            });    
          $("#important-update").validate({
            rules: 
                {
                  title: 
                  {
                    required: true,
                  },
                  description: 
                  {
                    required: true,
                  }
                }
           });    
          $("#practice-questions").validate({
            rules: 
                {
                  title: 
                  {
                    required: true,
                  },
                  description: 
                  {
                    required: true,
                  },
                  userfile: 
                  {
                    required: true,
                  }
                }
           });    
            
      });    
    </script>
</html>