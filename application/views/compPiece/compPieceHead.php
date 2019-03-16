
  <script src=<?php echo site_url("application/views/compPiece/compPiece.js")?> ></script>

  <link rel="stylesheet" href=<?php echo site_url("application/views/compPiece/compPiece.css")?> >

<script>
	$(document).ready(function(){
		var check = <?php echo $check; ?>;
		if (check) {
			$("#attend").css("display","none");
		}
		else{
			$("#quit").css("display","none");
			var attendNo = <?php echo $comp['attendNo']; ?>;
			var allowNo = <?php echo $comp['allowNo']; ?>;
			if (attendNo==allowNo) {
				$("#attend").attr("disabled","disabled");
			}
		}

		var width = 
		$(".d_badge_lv").css('height', 'value');

		var public = <?php echo $comp['public']; ?>;
		if (public) {
			$("#public").html("public");
		}
		else{
			$("#public").html("private");
		}

	    $("#attend").click(function(){
	    	window.location.href="<?php echo site_url('competition/attend/'.$comp['textID']); ?>";
	    });
	    $("#quit").click(function(){
	    	window.location.href="<?php echo site_url('competition/quit/'.$comp['textID']); ?>";
	    });
	    $("#back").click(function(event) {
	        window.location.href="<?php echo site_url('competition'); ?>";
	    });

	    $("#competition").addClass('active');
	});
</script>

</head>
<body>