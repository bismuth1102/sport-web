
<div class="col-sm-3" style="margin-left:30px; float:left;top:30px">
	<div class="row">
		<div class = "col-sm-4" >
			<img style = "height：10px;width：10px;" src=<?php echo site_url("application/views/images/team.png") ?> alt=" ">

		</div> 
		<div class = "col-sm-8" >
			<p style="line-height:64px;color: rgba(49,111,204,0.8);font-size: 24px">rank</p>
		</div>
	</div>

	<table class="table">
		<tr>
			<td style="padding: 4px;">
				<div class="row">
					<div class = "col-sm-4" style="font-weight: bold;font-size: 15px;text-align: center">
						rank
					</div>
					<div class = "col-sm-4" style="font-weight: bold;font-size: 15px;text-align: center">
						nickname
					</div>
					<div class = "col-sm-4" style="font-weight: bold;font-size: 15px;text-align: center">
						steps
					</div>
				</div>
			</td>
		</tr>

		<tr>
			<td style="padding: 4px;">
				<div class="row">
					<div class = "col-sm-4" style="text-align: center">
						<img style = "height：5px;width：5px" src=<?php echo site_url("application/views/images/ath.png") ?> alt=" ">
					</div>
					<div class = "col-sm-4" style=";font-size: 14px;line-height: 32px;text-align: center">
						lin
					</div>
					<div class = "col-sm-4" style=";font-size: 14px;line-height: 32px;text-align: center">
						16125
					</div>
				</div>
			</td>
		</tr>

		<tr>
			<td style="background: rgba(107,155,237,0.5);padding: 4px;">
				<div class="row">
					<div class = "col-sm-4" style="text-align: center">
						<img style = "height：5px;width：5px" src=<?php echo site_url("application/views/images/bth.png") ?> alt=" ">
					</div>
					<div class = "col-sm-4" style=";font-size: 14px;line-height: 32px;text-align: center">
						luo
					</div>
					<div class = "col-sm-4" style=";font-size: 14px;line-height: 32px;text-align: center">
						14123
					</div>
				</div>
			</td>
		</tr>

		<tr>
			<td style="padding: 4px;">
				<div class="row">
					<div class = "col-sm-4" style="text-align: center" >
						<img style = "height：5px;width：5px" src=<?php echo site_url("application/views/images/cth.png") ?> alt=" ">
					</div>
					<div class = "col-sm-4" style=";font-size: 14px;line-height: 32px;text-align: center">
						liang
					</div>
					<div class = "col-sm-4" style=";font-size: 14px;line-height: 32px;text-align: center">
						11923
					</div>
				</div>
			</td>
		</tr>
		
		<tr>
			<td  style="padding: 4px;">
				<div class="row">
					<div class = "col-sm-4" style="text-align: center">
						<img style = "height：5px;width：5px" src=<?php echo site_url("application/views/images/dth.png") ?> alt=" ">
					</div>
					<div class = "col-sm-4" style=";font-size: 14px;line-height: 32px;text-align: center">
						li
					</div>
					<div class = "col-sm-4" style=";font-size: 14px;line-height: 32px;text-align: center">
						11546
					</div>
				</div>
			</td>
		</tr>

		<tr>
			<td  style="padding: 4px;">
				<div class="row">
					<div class = "col-sm-4" style="text-align: center">
						<img style = "height：5px;width：5px" src=<?php echo site_url("application/views/images/dth.png") ?> alt=" ">
					</div>
					<div class = "col-sm-4" style=";font-size: 14px;line-height: 32px;text-align: center">
						zhang
					</div>
					<div class = "col-sm-4" style=";font-size: 14px;line-height: 32px;text-align: center">
						9716
					</div>
				</div>
			</td>
		</tr>

	</table>

</div>




 <div class=" col-sm-7" style="top:30px;" >


 <div style="position: absolute;margin-left: 70%">
	<img style = "height：5px;width：5px" src=<?php echo site_url("application/views/images/adv3.png") ?> alt=" ">
</div>


		<div class="form-horizontal" style="margin-left: 0px;margin-top: 20px">

			<div class="form-group font5">
				<div class="col-sm-3 noPadding">
					<span style="float: right">competition ID:</span>
				</div>
				<div class="col-sm-9">
	  				<?php echo $comp['textID']; ?>
				</div>
			</div>

			<div class="form-group font5">
	  			<div class="col-sm-3 noPadding">
					<span style="float: right">competition name:</span>
				</div>
				<div class="col-sm-9">
	  				<?php echo $comp['name']; ?>
				</div>
			</div>

			<div class="form-group font5">
				<div class="col-sm-3 noPadding">
					<span style="float: right">creator:</span>
				</div>
				<div class="col-sm-9">
					<a style="align-content: center" class="font5" href=<?php echo site_url('other/'.$comp['creatorID']) ?> style="position:relative;top:5px;margin-right:10px;" id="creator"><?php echo $comp['creatorID']; ?></a>
				</div>
			</div>

	        <div class="form-group font5">
				<div class="col-sm-3 noPadding">
					<span style="float: right">visibility:</span>
				</div>
				<div class="col-sm-9">
					<span id="public"></span>
				</div>
			</div>

			<div class="form-group font5">
				<div class="col-sm-3 noPadding">
					<span style="float: right">number of people:</span>
				</div>
				<div class="col-sm-9">
					<span id="number" style="align-content:center; position:relative;"><?php echo $comp['attendNo']; ?>/<?php echo $comp['allowNo']; ?></span>
				</div>
			</div>

			<div class="blank10"></div>

			<div class="col-sm-8 col-sm-offset-2">
				<?php foreach ($userInfos as $userInfo): ?>
					<div class="form-group" >

						<div style="float: left;margin-right: 10px;">
							<a href=<?php echo site_url("other/".$userInfo['id']) ?> >
					  			<img src=<?php echo site_url("application/views/images/".$userInfo['avatar']) ?> width='30' height='30' alt='avatar' />
					  		</a>
						</div>

						<div style="float: left;">
							<a href=<?php echo site_url("other/".$userInfo['id']) ?> >
								<?php echo $userInfo['id'] ?>
							</a>
						</div>
						
				  		<div style="float: left;" class=" d_badge_icon<?php echo $userInfo['icon'] ?>" >
				 			<div style="position: relative;left: 0;margin-left: 5px" class="d_badge_lv"><?php echo $userInfo['level'] ?></div>
			 			</div>

					</div>
				<?php endforeach; ?>
			</div>

		<div class="blank20"></div>

		<div class="form-group font5">
		   <div class="col-sm-3 noPadding">
				<span style="float: right">begin time:</span>
			</div>
			<div class="col-sm-9">
				<?php echo $comp['startYear']; ?>/
				<?php echo $comp['startMonth']; ?>/
				<?php echo $comp['startDay']; ?>
				<?php echo $comp['startHour']; ?>:
				<?php echo $comp['endMinute']; ?>
			</div>
		</div>
		  
		<div class="form-group font5">
			<div class="col-sm-3 noPadding">
				<span style="float: right">end time:</span>
			</div>
			<div class="col-sm-9">
				<?php echo $comp['endYear']; ?>/
				<?php echo $comp['endMonth']; ?>/
				<?php echo $comp['endDay']; ?>
				<?php echo $comp['endHour']; ?>:
				<?php echo $comp['endMinute']; ?>
			</div>
		</div>

	   	<div class="form-group font5">
			<div class="col-sm-3 noPadding">
				<span style="float: right">remark:</span>
			</div>
			<div class="col-sm-9">
				<span>
		   			<?php echo $comp['note']; ?>
		   		</span>
			</div>
	   	</div>

	   <div class="blank20"></div>

	   <div class="form-group col-sm-12" style="margin-top: 20px;padding: 0">
		   <div style="float: right">
			   <button style="margin-right: 10px" class="btn btn-default" id="back"> return</button>
			   <button class="btn btn-success" id="attend">join</button>
			   <button class="btn btn-warning" id="quit">quit</button>
		   </div>
	   	</div>

		</div>


	</div>


  </div>
