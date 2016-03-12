<div class="updatesContent">
	<div class="container">
		<?php
		if(!empty($blogs)){
			foreach ($blogs as $blog){?>
				<div class="row updatesSection">
					<h3><?php echo $blog['title'];?></h3>
					<div class="col-xs-12">
					<div class="">
						<p><?php echo $blog['description'];?></p>
					</div>
					</div>
				</div><!--row ends-->
		<?php
			}
		}		
		?>		
	</div>
</div>
