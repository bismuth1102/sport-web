	<script>
		$(document).ready(function(){

			var fanIDs = new Array();
			<?php foreach ($fan as $key => $value): ?>
				fanIDs.push("<?php echo $value['starID'] ?>");
			<?php endforeach ?>

		  	$(".person").each(function(index, el) {
		  		var peopleID = $(this).find($(".personID")).html();
		  		var followImg = $(this).find($(".attentionBtn"));

		  		var haveFollowed = checkFollow(fanIDs, peopleID);
		  		if (haveFollowed=='true') {
		  			/*$(followImg).css(
		  				"background-position","0 -23px"
		  			);*/
		  			$(followImg).mouseover(function(){
			        	/*this.style.backgroundPosition=0+"px "+-47+"px";*/
//						($(this).find($(".attentionBtn"))).removeClass("btn-success");
//						($(this).find($(".attentionBtn"))).addClass("btn-warning");
//						($(this).find($(".haveAttention"))).addClass("hidden");
//						($(this).find($(".cancelAttention"))).removeClass("hidden");
//						alert("test mouseover!");

				  	});
				  	$(followImg).mouseout(function(){
			        	/*this.style.backgroundPosition=0+"px "+-23+"px";*/
//						($(this).find($(".attentionBtn"))).addClass("btn-success");
//						($(this).find($(".attentionBtn"))).removeClass("btn-warning");
//						$(this).find($(".haveAttention")).removeClass("hidden");
//						$(this).find($(".cancelAttention")).addClass("hidden");
				  	});
				  	$(followImg).click(function(event) {
				  		var page = getPage();
				  		notFollow(peopleID, page);
				  	});
		  		}
		  		else{
		  			/*$(followImg).css(
		  				"background-position","0 0"
		  			);*/
					($(this).find($(".attentionBtn"))).removeClass("btn-warning");
					($(this).find($(".attentionBtn"))).addClass("btn-success");

					($(this).find($(".haveAttention"))).hide();
					($(this).find($(".cancelAttention"))).removeClass("hidden");
					($(this).find($(".cancelAttention"))).show();


				  	$(followImg).click(function(event) {
				  		// this.style.backgroundPosition=0+"px "+-23+"px";
				  		follow(peopleID);
				  	});
		  		}
		  	});

		  	$("#fan").addClass('active');
		    $("#dropdown").addClass('active');
		    $("#attention").addClass('active');
		    $("#sideAttention").addClass('active');

		});

		function checkFollow(fanIDs, id){
			var check = 'false';

			for (var i=0; i<fanIDs.length; i++) {
				// alert(fanIDs[i]);
				// alert(id);
				if (fanIDs[i]==id) {
					check = 'true';
					break;
				}
			}
			// alert(check);
			return check;
		}

	</script>

</head>
<body>