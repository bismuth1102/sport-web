<div class="col-sm-9 col-md-9 col-lg-9 " style="float:left;border: 1px solid #c5c2c3;padding-bottom:130px">
	<input id="limit" class="hidden" value="5">
	<input id="totalCount1" class="hidden" value="<?php echo count($people, 0); ?>"/>
	<div style="border-bottom:1px solid #cccccc;">
		<ul class="nav nav-tabs">
			<li id="star"><a href=<?php echo site_url('attention/star'); ?>>follow</a></li>
			<li id="fan"><a href=<?php echo site_url('attention/fan'); ?>>fans</a></li>
		</ul>
	</div>
	<div id="mainContent"></div>
	<div id="callBackPager" style="float:right;margin-right:95px;"></div>

</div>
</div>

<script type="text/javascript">

	function callBackPagination() {
		var totalCount =  <?php echo count($people,0);?>, showCount =5,
			limit =  5;
		createTable(1, limit, totalCount);
		$('#callBackPager').extendPagination({
			totalCount: <?php echo count($people,0);?>,
			showCount: 5,
			limit: 5,
			callback: function (curr, limit, totalCount) {
				createTable(curr, limit, totalCount);
			}
		});
	}
	function createTable(currPage, limit, total) {
		var html = [], showNum = limit;
		if (total - (currPage * limit) < 0) {
			showNum = total - ((currPage - 1) * limit);
		}
		html.push(' <table class="table table-hover table-responsive piece table" style="margin-left: 0;">');
		html.push("<tbody>");

		<?php
		$showNum = count($people, 0) > 5 ? 5 : count($people, 0);
		for ( $i = 0; $i < $showNum; $i++) { ?>
		html.push('<tr><div class="person" style="border-bottom:0px dashed #b5b5b5;"><td><div class="blank20"></div><div class="col-xs-2"><div style="float:right;"><a href=<?php echo site_url('other/' . $people[$i]['id']) ?>> <img src=<?php echo site_url("application/views/images/" . $people[$i]['avatar']) ?> style="width:50px;height:50px;"/></a></div></div><div class="col-xs-6"><div style="float:left;"><div style="clear:both;"><a class="user_badge d_badge_bright d_badge_icon<?php echo $people[$i]['icon'] ?>"><div class="d_badge_title"><?php echo $people[$i]['title'] ?></div><div class="d_badge_lv"><?php echo $people[$i]['level'] ?></div></a></div><div style="clear:both;"><center><a class="personID"	href=<?php echo site_url('other/' . $people[$i]['id']) ?>><?php echo $people[$i]['id'] ?></a></center></div></div> </div></td>');
		html.push('<td><div class="blank20"></div><div class="col-xs-8 col-xs-offset-4 m_inline"><div class="col-xs-6"><a href="<?php echo site_url('board/' . $people[$i]['id']); ?>" class="m_inline"><button type="submit" class="btn btn-success" id="submitBt">	<span class="glyphicon glyphicon-pencil"> message</span></button></a></div><div class="col-xs-4 m_inline">	<button  class="btn btn-warning attentionBtn"><div class="haveAttention"><span class="glyphicon glyphicon-remove"> unfollow</span></div>	<div class="cancelAttention hidden" ><span class="glyphicon glyphicon-ok"> follow</span></div>	</button></div></div><div class="blank20"></div></td></div></tr>');
		<?php }?>
		html.push('</tbody></table>');
		var mainObj = $('#mainContent');
		mainObj.empty();
		mainObj.html(html.join(''));
	}
	callBackPagination();
	window.onload(callBackPagination());
</script>


