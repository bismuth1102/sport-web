
		<div class="row">
			<div class="col-sm-2 hidden-xs">
				<div style="clear:both;">
					<a href=<?php echo site_url('other/'.$other['id']); ?> ><center><img src=<?php echo site_url("application/views/images/".$other['avatar'])?> style="width:100px;height:100px;"/></center></a>
				</div>
				<div class="blank10"></div>
				<div style="clear:both;">	
					<a class="user_badge d_badge_bright d_badge_icon<?php echo $other['icon'] ?>">
			 			<div class="d_badge_title "><?php echo $other['title'] ?></div>
			 			<div class="d_badge_lv"><?php echo $other['level'] ?></div>
		 			</a>		 			
				</div>
				<div style="clear:both;">
					<center><a href=<?php echo site_url('other/'.$other['id']); ?> ><?php echo $other['id'] ?></a></center>
				</div>

			</div>
			
			<div class="col-sm-10">

				<div class="form-horizontal" role="form">

					<div style="position: absolute;margin-left: 500px;margin-top: 80px">
						<img style = "height：5px;width：5px" src=<?php echo site_url("application/views/images/adv1.png") ?> alt=" ">
					</div>

					<div class="visible-xs">
						<div style="clear:both;">
							<a href=<?php echo site_url('other/'.$other['id']); ?> ><center><img src=<?php echo site_url("application/views/images/".$other['avatar'])?> style="width:100px;height:100px;" /></center></a>
						</div>
						<div class="blank10"></div>
						<div style="clear:both;">	
							<a class="user_badge d_badge_bright d_badge_icon<?php echo $other['icon'] ?>">
					 			<div class="d_badge_title "><?php echo $other['title'] ?></div>
					 			<div class="d_badge_lv"><?php echo $other['level'] ?></div>
				 			</a>		 			
						</div>
						<div style="clear:both;">
							<center><a href=<?php echo site_url('other/'.$other['id']); ?> ><?php echo $other['id'] ?></a></center>
						</div>
					</div>

					<div class="blank10"></div>

					<div class="col-xs-12">
						<div class="col-sm-5 col-sm-offset-7 col-xs-7 col-xs-offset-5">
							<button id="attentionButton" class="btn btn-warning" style="margin-right: 10px">
								<div class="haveAttention">
									<span class="glyphicon glyphicon-remove"> unfollow</span>
								</div>
								<div class="cancelAttention hidden">
									<span class="glyphicon glyphicon-ok"> follow</span>
								</div>
							</button>
							<a href="<?php echo site_url('board/' . $other['id']); ?>" class="m_inline">
								<button class="btn btn-success">
									<span class="glyphicon glyphicon-pencil"> message</span>
								</button>
							</a>
						</div>
					</div>

					<div class="blank10"></div>
					
					<div class="form-group">
						<div class="col-xs-10" style="border-bottom:1px solid black"></div>
					</div>

					<br>

					<div class="form-group" name="signature">
						<label class="col-sm-2 font5 control-label">description</label>
						<div class="col-sm-8">
							<label class="control-label font5"><?php echo $other['signature'] ?></label>
						</div>
					</div>

					<div class="form-group" name="history">
						<label class="col-sm-2 font5 control-label">best score</label>
						<div class="col-sm-8 " style="padding-left:0;">
							
							<div class="col-sm-5">
								<table class="table font5">
									<tr>
										<td class="col-sm-4">walk</td>
										<td class="col-sm-4"><b><?php echo $other['bdkm']; ?></b></td>
										<td class="col-sm-4">km</td>
									</tr>
									<tr>
										<td>burn</td>
										<td><b><?php echo $other['bdcal']; ?></b></td>
										<td>calorie</td>
									</tr>
									<tr>
										<td>walk</td>
										<td><b><?php echo $other['bdstep']; ?></b></td>
										<td>steps</td>
									</tr>
								</table>
							</div>
							
							
							<div class="blank10"></div>	
							
						</div>
					</div>

					<div class="form-group" name="competition">
						<label class="col-sm-2 font5 control-label">join</label>
						<div class="col-sm-8" style="padding-left:0;">
							
							<div class="col-sm-5">
								<table class="table font5">
									<tr>
										<td class="col-sm-4">total</td>
										<td class="col-sm-4"><b><?php echo $other['compTotal']; ?></b></td>
										<td class="col-sm-4"></td>
									</tr>
									<tr>
										<td>win</td>
										<td><b><?php echo $other['compWin']; ?></b></td>
										<td></td>
									</tr>
								</table>
							</div>
							
							
							<div class="blank10"></div>	
							
						</div>
					</div>

				</div>

			</div>

		</div>

