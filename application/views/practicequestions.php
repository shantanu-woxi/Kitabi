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
</div>
