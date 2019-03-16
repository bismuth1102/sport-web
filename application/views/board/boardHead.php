	
	<script src=<?php echo site_url("application/views/board/board.js") ?> ></script>

	<link rel="stylesheet" href=<?php echo site_url("application/views/board/board.js") ?> >
	
	<script>
		$(document).ready(function(){
		    $("#dropdown").addClass('active');
		    $("#board").addClass('active');
		    $("#sideBoard").addClass('active');
		});

		function submitForm(){
			var myDate = new Date();
			var time = myDate.toLocaleDateString();
			document.getElementsByName('time')[0].value = time;
			document.getElementById('messageForm').submit();
		}

		function setDes(des){
			document.getElementsByName('content')[0].value = "<?php echo $id ?> 说 : ";
			document.getElementsByName('des')[0].value = des;
		}
	</script>

</head>
<body>

