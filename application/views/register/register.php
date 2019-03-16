

<div id="fullpage">

	<div class="section" id="section0">
		
		<div class="blank50 visible-xs"></div>

		<div style="margin-top: 10%;" class="col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

			<form id="registerForm" class="form-horizontal" action=<?php echo site_url("register/checkID")?> method="post" accept-charset="utf-8" onsubmit="return false">

				<div class="col-xs-8 col-xs-offset-2">

					<div class="form-group">
						<input type="text" class="form-control" id="id" name="id" placeholder="username">
					</div>

					<div class="form-group">				
						<input type="password" class="form-control" id="psw" name="password" placeholder="password">
					</div>

					<div class="form-group">				
						<input type="password" class="form-control" id="psw2" name="passwordAgain" placeholder="password again">
					</div>

					<div class="form-group">
						<p id="tag" style="color:#ffd452;">&nbsp;</p>
					</div>

					<div class="form-group">
						<!-- <div class="col-xs-8">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember"> 请记住我
								</label>
							</div>
						</div> -->
						<button style="float: right" class="btn btn-success" id="register">register</button>
						
					</div>
				</div>

				

			</form>
		</div>
	
