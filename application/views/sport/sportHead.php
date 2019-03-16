
	<script src=<?php echo site_url("application/views/js/echarts.min.js")?> ></script>
	<script src=<?php echo site_url("application/views/sport/sport.js") ?> ></script>
	<script src=<?php echo site_url("application/views/js/bootstrap-switch.min.js") ?> ></script>

	<link rel="stylesheet" href=<?php echo site_url("application/views/css/bootstrap-switch.min.css") ?> />
	<link rel="stylesheet" href=<?php echo site_url("application/views/css/codoonData.css") ?> />
	<link rel="stylesheet" href=<?php echo site_url("application/views/sport/sport.css") ?> >

</head>
<body onload="init(
	<?php echo json_encode($weekData); ?>,
	<?php echo json_encode($monthData); ?>,
	<?php 
		echo str_replace("\"", "'", json_encode($week)); 
	?>,
	<?php 
		echo str_replace("\"", "'", json_encode($month)); 
	?>
	)">