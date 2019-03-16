
	<script src=<?php echo site_url("application/views/mine/mine.js")?> ></script>
	<script src=<?php echo site_url("application/views/js/echarts.min.js")?> ></script>
	<link rel="stylesheet" href=<?php echo site_url("application/views/mine/mine.css")?> >
	
	<script>
		$(document).ready(function(){
		    $("#dropdown").addClass('active');
		    $("#mine").addClass('active');
		    $("#sideMine").addClass('active');

		    var ifModified = <?php echo $new ?>;
		    if (ifModified) {
		    	$("#modify").css('visibility', 'visible');
		    }

		   	$("#saveModify").click(function() {

		    	var avatar = document.getElementsByName("userfile")[0].value;
		    	var mineForm = document.getElementById('mineForm');
		    	if (avatar!='') {
					var pathArray = avatar.split(/\\|\//);
					var lastPath = pathArray.pop();
					mineForm.action = "<?php echo site_url('mine/modify/')?>"+lastPath;
						//看头像被改了没，改了lastpath就有值
		    	}else{
		    		mineForm.action = "<?php echo site_url('mine/modify/')?>";
		    	}
		    	mineForm.submit();
		    });
		});
	</script>

</head>
<body>