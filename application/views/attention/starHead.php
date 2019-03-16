	<script>
		$(document).ready(function(){

			$(".person").each(function(index, el) {
		  		var peopleID = $(this).find($(".personID")).html();
		  		var followImg = $(this).find($(".followImg"));

		  		$(followImg).css(
	  				"background-position","0 -23px"
	  			);
	  			$(followImg).mouseover(function(){
		        	this.style.backgroundPosition=0+"px "+-47+"px";
			  	});
			  	$(followImg).mouseout(function(){
		        	this.style.backgroundPosition=0+"px "+-23+"px";
			  	});
			  	$(followImg).click(function(event) {
			  		var page = getPage();
			  		notFollow(peopleID, page);
			  	});
		  	})
  			
		  		
			$("#star").addClass('active');
		    $("#dropdown").addClass('active');
		    $("#attention").addClass('active');
		    $("#sideAttention").addClass('active');

		});

	</script>

</head>
<body>