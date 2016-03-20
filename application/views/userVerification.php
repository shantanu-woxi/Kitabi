


<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="assets/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap-toggle.min.js"></script>
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
</head>
<body>
    <input type='hidden' id='base_url' value="<?php base_url();?>">
<?php
                 //       print_r($user_list);

                        ?>
<div class="container">
  <h2>User Information</h2>
  <div class="panel-group">
      <?php 
        foreach($user_list as $x)
        {
            
            ?>
    <div class="panel panel-default">
      <div class="panel-heading" style="height: 55px">
        <h4 class="panel-title">
            <span class="inline"><a data-toggle="collapse" href="#user-<?php echo $x['id']; ?>"><?php echo $x['first_name']." ".$x['last_name']; ?></a></span>
            <div class="checkbox pull-right">
            <label class="checkbox-inline">
                <?php 
                    if($x['verified']==1)
                    {
                ?>
                        <input type="checkbox" class='change-verification' checked data-toggle="toggle" value='<?php echo $x['id']?>'> 
                <?php 
                    }
                    else
                    {
                        ?>
                        <input type="checkbox" class='change-verification' data-toggle="toggle" value='<?php echo $x['id']?>'> 
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
                    <li class='list-group-item'>Email: <?php echo $x['email_id'];?></li>
                    <li class='list-group-item'>Phone Number: <?php echo $x['phone_number'];?></li>
                    <li class='list-group-item'>Address: <?php echo $x['address'];?></li>
                    <li class='list-group-item'>City:<?php echo $x['city'];?></li>
                    
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
    
</body>
</html>
