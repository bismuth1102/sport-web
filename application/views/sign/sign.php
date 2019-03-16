
<div id="fullpage">

	<div class="section" id="section0">
	
		<script>
			$('#password').bind('keyup', function(event) {
				if (event.keyCode == "13") {
					//回车执行查询
					$('#signin').click();
				}
			});
		</script>

		

		<div class="col-lg-4 col-lg-offset-2 col-md-6 col-md-offset-1 col-sm-8" id="formDiv">
			<form id="signForm" class="form-horizontal" action=<?php echo site_url("sign/verify")?> method="post" accept-charset="utf-8" onSubmit="return false">

				<div class="col-xs-8 col-xs-offset-2">

					<div style="padding-top: 20%;font-size: 3em;">
						vancleef sport
					</div>

					<div class="blank20"></div>

					<div class="form-group">
						<input type="text" class="form-control" id="id" name="id" placeholder="username">
					</div>

					<div class="form-group">
						<input type="password" class="form-control" id="password" name="password" placeholder="password">
					</div>

					<div id="tag" style="visibility: hidden;">
						<p style="color:#ffd452">
							sorry the username or password are wrong
						</p>
					</div>

					<div class="form-group" style="float: right;">
						<button class="btn btn-primary" style="margin-right: 10px;" id="register">register</button>
						<button class="btn btn-success" id="signin">login</button>
					</div>
				</div>
				
			</form>
		</div>
		
	</div>


	<div class="section" id="section1">

		<!-- <div class="visible-xs">
			<section id="gallery">
				<div class="container">
					<ul id="myRoundabout">
						<li><img src=<?php echo site_url("application/views/images/chart1.png") ?> alt=""></li>
						<li><img src=<?php echo site_url("application/views/images/chart2.png") ?> alt=""></li>
						<li><img src=<?php echo site_url("application/views/images/chart3.png") ?> alt=""></li>
				  	</ul>
				</div>
			</section>
		</div> -->

		<div class="visible-xs">
			<center>
			<img  style="height: 60%;width: 60%; margin-top: 35%" src="<?php echo site_url("application/views/images/chart1.png") ?>" alt="">
			</center>
		</div>

		<div id="picContainer" class="hidden-xs">

	      	<div class="pic col-sm-4" id="pic1">
	      		<div class="chart" id="sportChart"></div>
	      		<div class="description" id="sportDes">statistics of everyday sport</div>
	      	</div>

	      	<div class="pic col-sm-4" id="pic2">
				<div class="chart" id="compChart"></div>
	      		<div class="description" id="compDes">win the competition, get experience</div>
	      	</div>

	      	<div class="pic col-sm-4" id="pic3">
	      		<div id="piePerson"><img src=<?php echo site_url('application/views/images/cheng.png') ?> ></div>
	      		<div class="chart" id="messageChart"></div>
	      		<div class="description" id="messageDes">leave message, do sports with friend!</div>
	      	</div>

		</div>
	</div>
