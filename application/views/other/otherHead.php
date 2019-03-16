	<script src=<?php echo site_url("application/views/other/other.js")?> ></script>

	<link rel="stylesheet" href=<?php echo site_url("application/views/other/other.css")?> >

	<script>
		$(document).ready(function(){
			if (<?php echo $check ?>) {
				$("#attentionButton").click(function(event) {
					 window.location.href="<?php echo site_url('other/notFollow/'.$other['id']); ?>";
			  	});
			}
			else{
				$("#attentionButton").removeClass("btn-warning");
				$("#attentionButton").addClass("btn-success");

				($("#attentionButton").find($(".haveAttention"))).hide();
				($("#attentionButton").find($(".cancelAttention"))).removeClass("hidden");
				($("#attentionButton").find($(".cancelAttention"))).show();

				$("#attentionButton").click(function(event) {
					 window.location.href="<?php echo site_url('other/follow/'.$other['id']); ?>";
			  	});
			}

		    
		});
	</script>
	
</head>
<body>