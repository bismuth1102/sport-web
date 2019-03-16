
			<div class="col-sm-9 col-md-9 col-lg-9 " style="float:left;border: 1px solid #c5c2c3;padding-bottom:130px">
				<div style="border-bottom:1px solid #cccccc;">
					<ul class="nav nav-tabs">
						<li id="messageBoard" class="active"><a href=""><?php echo $toID ?>'s message board</a></li>
					</ul>
				</div>
				<!--<span><?php /*echo $toID */?>'s message board</span>-->

				<div class="blank10"></div>
				<!--<div style="border-bottom:1px solid black"></div>-->

				<div class="form-horizontal" role="form" id="boardAppend">
					<?php foreach ($messages as $message): ?>
						<?php if($message['des']==0){ ?>
							<div class="col-sm-12 defaultBlock dashedBottom" id="message<?php echo $message['messageID'] ?>">
								<div>
									<table cellpadding="0" cellspacing="0" class="tc match_table">
										<tr>
											<td rowspan="2">
												<a href=<?php echo site_url('other/'.$message['fromID']); ?> ><img src=<?php echo site_url("application/views/images/".$message['avatar']) ?> style="height:40px;width:40px;" ></a>
											</td>
											<td class="col-xs-5">
												<a href=<?php echo site_url('other/'.$message['fromID']); ?> style="float:left;"><?php echo $message['fromID'] ?></a>
											</td>
										</tr>
										<tr>
											<td class="col-xs-5">
												<span style="float:left;"><?php echo $message['time'] ?></span>
											</td>
											<td class="col-xs-7">
												<a onclick="setDes(<?php echo $message['messageID'] ?>)" style="float:right;margin-right:10px;">
													<button class="btn btn-success">
														<span class="glyphicon glyphicon-pencil"> reply</span>
													</button>
												</a>
											</td>
										</tr>
									</table>
								</div>

								<div style="padding:20px;">
									<p style="text-indent:20px;font-size:110%;">
										<?php echo $message['content'] ?>
									</p>
								</div>
							</div>

						<?php }else{ ?>
							<script>
								(function(){$("#message<?php echo $message['des'] ?>").append("<div><?php echo $message['content'] ?></div>")})();
							</script>
						<?php } ?>

					<?php endforeach; ?>


					<div id="mainContent"></div>
					<div id="callBackPager" style="float:right;margin-right:95px;"></div>

					<div class="blank100"></div>





					<form id="messageForm" action=<?php echo site_url("board/write/".$toID) ?> method="post" accept-charset="utf-8"  onSubmit="return submitForm()">
						<span class="font4-blod" style="margin-left:14px">your message:</span>
						<div class="blank20"></div>
						<div class="col-xs-11 form-group" style="margin-left:40px;padding-right:12px">
							<textarea class="form-control" rows="4" name="content"></textarea>
						</div>
						<div class="form-group">
							<div class="col-xs-2 col-xs-offset-8 col-sm-offset-9" style="padding-left:71px;">
								<button class="btn btn-success">
									<span class="glyphicon glyphicon-send"> send</span></button>
							</div>
						</div>
						<div style="visibility:hidden;">
							<input type="text" name="des" value="0">
							<input type="text" name="time">
						</div>
					</form>

				</div>

			</div>
		</div>


