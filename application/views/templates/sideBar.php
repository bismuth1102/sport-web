<div class="row" >
	<asid class='col-sm-2 hidden-xs' style="border: 1px solid #c5c2c3;margin-right:30px">
		<div style='clear:both;'>
			<a href=<?php echo site_url('mine'); ?> ><center><img src=<?php echo site_url("application/views/images/".$avatar) ?> style='width:100px;height:100px;' /></center></a>
		</div>
		<div class='blank10'></div>
		<div style='clear:both;'>	
			<a class='user_badge d_badge_bright d_badge_icon<?php echo $icon ?>'>
	 			<div class='d_badge_title '><?php echo $title ?></div>
	 			<div class='d_badge_lv'><?php echo $level ?></div>
 			</a>		 			
		</div>
		<div style='clear:both;'>
			<center><a href=<?php echo site_url('mine'); ?> ><?php echo $id ?></a></center>
		</div>


		<div class='blank20'></div>
		<ul class='nav nav-pills nav-stacked text-center'>
		    <li id='sideMine'><a href=<?php echo site_url('mine'); ?> >account</a></li>
		    <li id='sideAttention'><a href=<?php echo site_url('attention/star'); ?> >friends</a></li>
		    <li id='sideBoard'><a href=<?php echo site_url('board/'.$id); ?> >message</a></li>
		    <li id='sideMessage'><a href=<?php echo site_url('mail/unread'); ?> >email</a></li>
		</ul>
		<div class='blank20'></div>
	</asid>
	