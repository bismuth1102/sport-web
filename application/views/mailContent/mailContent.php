<div class="col-sm-10">	
				<div style="border-bottom:1px solid #cccccc;">
					<!-- <div class="form-group">
						<div class="col-xs-3">
							<button class="btn btn-default" id="back">返回</button>
						</div>
					</div>
					<div class="blank20"></div> -->
				</div>

				<div class="blank10"></div>

				<div class="form-horizontal" role="form">
					<div class="col-sm-12">
						<div class="form-group">
							<label class="col-xs-2 control-label">title:</label>
							<div class="col-xs-8">
								<label class="control-label"><?php echo $mail['title'] ?></label>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-2 control-label">from:</label>
							<div class="col-xs-8">
								<label class="control-label"><?php echo $mail['comeFrom'] ?></label>
							</div>
						</div>

						<div class="form-group">
							<div>
								<p class="control-label" style="text-indent:20px;text-align:left;">
								<?php echo $mail['content'] ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>