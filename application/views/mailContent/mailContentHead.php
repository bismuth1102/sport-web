	<script src=<?php echo site_url("application/views/mailContent/mailContent.js")?> ></script>

	<link rel="stylesheet" href=<?php echo site_url("application/views/mailContent/mailContent.css")?> >

	<script>

	$(document).ready(function(){
	    // $("#back").click(function(){
	    // 	var page = "<?php 
	    // 	echo $page ?>";
	    //     window.location.href="<?php 
	    //     echo site_url('mail/') ?>"+page;
	    // });
	    $("#dropdown").addClass('active');
	    $("#message").addClass('active');
	    $("#sideMessage").addClass('active');
	});

	</script>

</head>
<body>