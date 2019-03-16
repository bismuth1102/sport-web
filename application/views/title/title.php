

			<div class="col-sm-10">
				<table class="table table-striped">
				  	<thead>
				    	<tr>
				    	  	<th><center>头衔</center></th>
				     	 	<th><center>所需经验值</center></th>
				   	 	</tr>
				 	</thead>
				 	<tbody>

<?php foreach ($titles as $title): ?>
	<tr>
		<td>
			<a href="#" class="user_badge d_badge_bright d_badge_icon<?php echo $title['icon'] ?>" >
			<input type="text" class="d_badge_title" placeholder="<?php echo $title['title'] ?>" >
 			<div class="d_badge_lv"><?php echo $title['level'] ?></div>
			</a>
		</td>
		<td><center><?php echo $title['maxExp'] ?></center></td>
	</tr>
<?php endforeach; ?>
				    	
				    	
				 	 </tbody>
				</table>

				<div class="blank10"></div>
				<div style="float:right;">
					<button id="save" type="button" class="btn btn-success">保存</button>
				</div>
				
				<div class="blank30"></div>
				<div class="blank30"></div>
				<div class="blank30"></div>
			</div>
		</div>
