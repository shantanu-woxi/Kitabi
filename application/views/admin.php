<div class="welcomeStrip">
    <?php
    if (empty($this->session->userdata['id'])) {
        return $this->load->view("index");
    }
    ?>
    <h4>Welcome to Dashboard</h4>
</div>
<div class="container-fluid dashboardWrap">
    <div class="sidebarNav">
        <div class="dashboardMenu">
            <ul class="nav nav-pills nav-stacked dashboardNav">
                <li role="presentation"  class="active "><a  href="#create" data-toggle="tab">Create Section</a></li>
                <li role="presentation" ><a  href="#uploads" data-toggle="tab">Upload Section</a></li>
                <li role="presentation" ><a href="#blogs" data-toggle="tab">Important Update</a></li>
                <li role="presentation" ><a href="#pracQuestion" data-toggle="tab">Practice Question</a></li>
                <li role="presentation" ><a href="#user-list" data-toggle="tab">User List</a></li>
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
                    <?php
                    if (!empty($message) && $message != '') {
                        echo $message;
                    }
                    ?>
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
                    <?php
                    if (!empty($message) && $message != '') {
                        echo $message;
                    }
                    ?>
                    <h2 class="dashboardTitles">Uploads Section</h2>
                    <div class="row">    
                        <div class="col-xs-6 col-xs-offset-2">    
                            <div class="createForm">
                                <form id="uploads-section" action="upload" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Select Subject</label>
                                        <select class="form-control" name="upload_subject_number" id="selectSubjectId" onchange="loadChapters(this.options[this.selectedIndex].value, 'upload')">
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
<?php
if (!empty($message) && $message != '') {
    echo $message;
}
?>
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
                                        <textarea class="form-control" rows="8" name="description"></textarea>
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
                                        <textarea class="form-control" rows="8" id="practice-question-description" name="description"></textarea>
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
                <div role="tabpanel" class="tab-pane fade" id="user-list">
                    <h2 class="dashboardTitles">User list</h2>
                    <div class="row">    
                        <div class="col-xs-6 col-xs-offset-2">    
                            <div class="createForm">
                                <input type='hidden' id='base_url' value="<?php base_url(); ?>">
<?php
foreach ($user_list as $x) {
    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" style="height: 55px">
                                            <h4 class="panel-title">
                                                <span class="inline"><a data-toggle="collapse" href="#user-<?php echo $x['id']; ?>"><?php echo $x['first_name'] . " " . $x['last_name']; ?></a></span>
                                                <div class="checkbox pull-right">
                                                    <label class="checkbox-inline">
                                                        <?php
                                                        if ($x['verified'] == 1) {
                                                            ?>
                                                            <input type="checkbox" class='change-verification' checked data-toggle="toggle" value='<?php echo $x['id'] ?>'> 
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <input type="checkbox" class='change-verification' data-toggle="toggle" value='<?php echo $x['id'] ?>'> 
        <?php
    }
    ?>
                                                    </label>
                                                </div>
                                            </h4>
                                        </div>
                                        <div id="user-<?php echo $x['id']; ?>" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <ul class='list-group'>
                                                    <li class='list-group-item'>Email: <?php echo $x['email_id']; ?></li>
                                                    <li class='list-group-item'>Phone Number: <?php echo $x['phone_number']; ?></li>
                                                    <li class='list-group-item'>Address: <?php echo $x['address']; ?></li>
                                                    <li class='list-group-item'>City:<?php echo $x['city']; ?></li>

                                                </ul>
                                            </div>
                                            <div class="panel-footer">Panel Footer</div>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
    <?php
}
?>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="sectionTest">
                    <h2 class="dashboardTitles">Section Test</h2>
                    <div class="row">    
                        <div class="col-xs-6 col-xs-offset-2">    
                            <div class="createForm">
                                <form action="createTest" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Select Subject</label>
                                        <select class="form-control" name="upload_subject_number" id="selectTestSubjectId" onchange="loadChapters(this.options[this.selectedIndex].value, 'section_test')">
                                            <option value="-1">Select Subject</option>
                                            <option value="1" name="English">English</option>
                                            <option value="2" name="G.K.">G.K.</option>
                                            <option value="3" name="Maths">Maths</option>
                                            <option value="4" name="Reasoning">Reasoning</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Select Section</label>
                                        <select class="form-control" id="selectTestSectionId" name="upload_section_number">
                                        </select>
                                        <span id="test_loader"></span>
                                    </div>
<?php for ($i = 1; $i <= 10; $i++) { ?>
                                        <div class="form-group">
                                            <label for="question">Question No.<?php echo $i; ?></label>
                                            <input type="text" class="form-control" id="question<?php echo $i; ?>" name="question_<?php echo $i; ?>">
                                        </div>
                                        <div class="form-group">Answer Type: &nbsp;&nbsp;
                                            <label class="radio-inline">
                                                <input type="radio" name="anstype<?php echo $i; ?>" value="Text" onchange="displayOptionType(<?php echo $i; ?>, 'text')">Text
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="anstype<?php echo $i; ?>" value="Image" onchange="displayOptionType(<?php echo $i; ?>, 'image')">Image
                                            </label>
                                        </div>
                                        <div class="text-block">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="Option<?php echo $i . '1'; ?>" class="col-xs-1">A</label>
                                                    <input type="text" class="form-control width-11" id="Option<?php echo $i . '1'; ?>" name="question<?php echo $i; ?>_option<?php echo 1; ?>">
                                                </div>                        
                                                <div class="form-group">
                                                    <label class="col-xs-1" for="Option<?php echo $i . '2'; ?>">B</label>
                                                    <input type="text" class="form-control width-11" id="Option<?php echo $i . '2'; ?>" name="question<?php echo $i; ?>_option<?php echo 2; ?>">
                                                </div>                          
                                                <div class="form-group">
                                                    <label class="col-xs-1" for="Option<?php echo $i . '3'; ?>">C</label>
                                                    <input type="text" class="form-control width-11" id="Option<?php echo $i . '3'; ?>" name="question<?php echo $i; ?>_option<?php echo 3; ?>">
                                                </div>                          
                                                <div class="form-group">
                                                    <label class="col-xs-1" for="Option<?php echo $i . '4'; ?>">D</label>
                                                    <input type="text" class="form-control width-11" id="Option<?php echo $i . '4'; ?>" name="question<?php echo $i; ?>_option<?php echo 4; ?>">
                                                </div>
                                                <div class="form-group">Answer:&nbsp;&nbsp; 
                                                    <label class="radio-inline">
                                                        <input type="radio" name="answer_<?php echo $i; ?>" value= "question<?php echo $i; ?>_option<?php echo 1; ?>" >A
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="answer_<?php echo $i; ?>" value= "question<?php echo $i; ?>_option<?php echo 2; ?>" >B
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="answer_<?php echo $i; ?>" value= "question<?php echo $i; ?>_option<?php echo 3; ?>" >C
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="answer_<?php echo $i; ?>" value= "question<?php echo $i; ?>_option<?php echo 4; ?>" >D
                                                    </label>
                                                </div>
                                            </div>    
                                        </div>                  
                                        <div class="image-block">
                                            <div class="form-group">
                                                <label class="col-xs-1" for="optionFile<?php echo $i . '1'; ?>">A</label>
                                                <input type="file" class="width-11" id="questionimage<?php echo $i . '1'; ?>" name="question<?php echo $i; ?>_option<?php echo 1; ?>" multiple="multiple">                        
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-1" for="optionFile<?php echo $i . '2'; ?>">B</label>
                                                <input type="file" class="width-11" id="quesimage<?php echo $i . '2'; ?>" name="question<?php echo $i; ?>_option<?php echo 2; ?>" multiple="multiple">                        
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-1" for="optionFile<?php echo $i . '3'; ?>">C</label>
                                                <input class="width-11" type="file" id="quesimage<?php echo $i . '3'; ?>" name="question<?php echo $i; ?>_option<?php echo 3; ?>" multiple="multiple">                        
                                            </div>
                                            <div class="form-group">
                                                <label class="col-xs-1" for="optionFile<?php echo $i . '4'; ?>">D</label>
                                                <input type="file" class="width-11" id="quesimage<?php echo $i . '4'; ?>" name="question<?php echo $i; ?>_option<?php echo 4; ?>" multiple="multiple">                        
                                            </div>
                                            <div class="form-group">Answer: &nbsp;&nbsp; 
                                                <label class="radio-inline">
                                                    <input type="radio" name="answer_<?php echo $i; ?>" value= "question<?php echo $i; ?>_option<?php echo 1; ?>" >A
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="answer_<?php echo $i; ?>" value= "question<?php echo $i; ?>_option<?php echo 2; ?>">B
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="answer_<?php echo $i; ?>" value= "question<?php echo $i; ?>_option<?php echo 3; ?>" >C
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="answer_<?php echo $i; ?>" value= "question<?php echo $i; ?>_option<?php echo 4; ?>">D
                                                </label>
                                            </div>
                                        </div>
<?php } ?>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="fullTest">
                    <h2 class="dashboardTitles">Full Test</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="assets/js/cycle.js"></script>
<script type="text/javascript" src="assets/js/cycle-tiles.js"></script>
<script>
                                                $(document).ready(function () {
                                                    var url = window.location.href;
                                                    if (url.indexOf('section') > 0) {
                                                        $("[href='#create']").trigger('click');
                                                    }
                                                    if (url.indexOf('upload') > 0) {
                                                        $("[href='#uploads']").trigger('click');
                                                    }
                                                    if (url.indexOf('blog') > 0) {
                                                        $("[href='#blogs']").trigger('click');
                                                    }
                                                    if (url.indexOf('store-practice-question') > 0) {
                                                        $("[href='#practice-question']").trigger('click');
                                                    }

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
<script>
    $(document).ready(function(){
    $('body').delegate('.change-verification','change',function(){
            
            if($(this).prop('checked'))
            {
                $.ajax({
                  url:"set-user-confirmation",
                  type: 'post',
                  data:{user_id: $(this).val(),verification: 1},
                  success:function(){ }
                });
            }
            else
            {
                $.ajax({
                  url:"set-user-confirmation",
                  type: 'post',
                  data:{user_id: $(this).val(),verification: 0},
                  success:function(){ }
                });
            }
        });    
    });    
    
        
    </script>
</body>
</html>