<script src=<?php echo site_url("application/views/attention/attention.js") ?>></script>
<script src=<?php echo site_url("application/views/js/extendPagination.js") ?> ></script>
<link rel="stylesheet" href=<?php echo site_url("application/views/attention/attention.css") ?> />

<style>
	.followImg {
		width: 120px;
		height: 25px;
		background: url(<?php echo site_url('application/views/images/followSprite.jpg') ?>) no-repeat;
	}
</style>

<script>
	function notFollow(starID, page) {
		window.location.href = "<?php echo site_url('attention/notFollow/') ?>" + starID + "/" + page;
	}

	function follow(starID) {
		window.location.href = "<?php echo site_url('attention/follow/') ?>" + starID;
	}

</script>

