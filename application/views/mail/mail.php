<div class="col-sm-9 col-md-9 col-lg-9 " style="float:left;border: 1px solid #c5c2c3;padding-bottom:130px">
	<div style="border-bottom:1px solid #cccccc;">
		<ul class="nav nav-tabs">
			<li id="unread"><a href=<?php echo site_url('mail/unread') ?>>unread</a></li>
			<li id="history"><a href=<?php echo site_url('mail/history') ?>>read</a></li>
		</ul>
	</div>
	<div id="list">
		<div id="mainContent"></div>
		<div id="callBackPager" style="float:right;margin-right:6px;"></div>
	</div>

</div>
</div>

<script src=<?php echo site_url("application/views/attention/attention.js") ?>></script>
<script src=<?php echo site_url("application/views/js/extendPagination.js") ?> ></script>
<script type="text/javascript">

	function callBackPagination() {
		var totalCount =  <?php echo count($mails,0);?>, showCount =5,
			limit =  5;
		createTable(1, limit, totalCount);
		$('#callBackPager').extendPagination({
			totalCount: <?php echo count($mails,0);?>,
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
		html.push(' <table class="table" style="margin-left: 0;">');
		html.push("<tbody>");
		<?php
		$showNum = count($mails, 0) > 5 ? 5 : count($mails, 0);
		for ( $i = 0; $i < $showNum; $i++) { ?>
		html.push('<tr><td style="padding:0"><div class="form-horizontal" role="form"><div class="col-sm-12 mailBlock dashedBottom"><div class="form-group"><label class="col-xs-2 control-label">title:</label><p class="control-label" style="text-align:left;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;padding-left:15px;"><?php echo $mails[$i]['title'] ?></p></div><div class="form-group"><label class="col-xs-2 control-label">source:</label><div class="col-xs-10"><p class="control-label"style="text-align:left;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"><?php echo $mails[$i]['comeFrom'] ?>			</p>			</div>			</div>			<div class="form-group">			<label class="col-xs-2 control-label">content:</label>		<div class="col-xs-10">			<p class="control-label"		style="text-align:left;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"><?php echo $mails[$i]['content'] ?></p></div></div></div></div></td></tr>');

//		html.push('');
		<?php }?>
		html.push('</tbody></table>');
		var mainObj = $('#mainContent');
		mainObj.empty();
		mainObj.html(html.join(''));
	}
	callBackPagination();
	window.onload(callBackPagination());
</script>
