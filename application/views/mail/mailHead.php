	
	<script src=<?php echo site_url("application/views/mail/mail.js")?> ></script>

	<link rel="stylesheet" href=<?php echo site_url("application/views/mail/mail.css")?> >

	<script>
		$(document).ready(function(){
		    $(".mailBlock").click(function(event){
		    	var idDom = $(".mailID");
	    		var mailID = $(this).find(idDom).html();
		    	var page = getPage();
		    	window.location.href="<?php echo site_url('mail/piece/') ?>"+mailID+"/"+page;
		    });

		    activePage();

		    $("#dropdown").addClass('active');
		    $("#message").addClass('active');
		    $("#sideMessage").addClass('active');
		});

		function activePage(){
			if ("<?php echo $active ?>"=="unread") {
		  		$("#unread").addClass('active');
		  	}
		  	else{
		  		$("#history").addClass('active');
		  	}
		}

	</script>

</head>
<body>