	
	<link rel="stylesheet" href=<?php echo site_url("application/views/css/match.css") ?> />
	<link rel="stylesheet" href=<?php echo site_url("application/views/competition/competition.css") ?> >
	<link rel="stylesheet" href=<?php echo site_url("application/views/css/codoonData.css") ?> />
	
	<script src=<?php echo site_url("application/views/competition/competition.js") ?> ></script>

<script>
	$(document).ready(function(){

		$(".affi").click(function(event) {
			$(".affi").removeClass("active");
	    	$(this).addClass('active');

	    	var affi = getActiveAffi();
	    	var allow = getActiveAllow();
	    	jQuery.ajax({
		        url: "<?php echo site_url('competition/filter/') ?>"+affi+'/'+allow,
		        type: 'post',
		        dataType: "json", 
		        success: function (data) {
					showFilterInfo(data);
		        }
		    });
		});

		$(".allow").click(function(event) {
			$(".allow").removeClass("active");
	    	$(this).addClass('active');

	    	var affi = getActiveAffi();
	    	var allow = getActiveAllow();
	    	jQuery.ajax({
		        url: "<?php echo site_url('competition/filter/') ?>"+affi+'/'+allow,
		        type: 'post',
		        dataType: "json", 
		        success: function (data) {
					showFilterInfo(data);
		        }
		    });
		});




	    $("#create").click(function(event){
	    	window.location.href="<?php echo site_url('competition/create'); ?>";
	    });

	    $("#search").click(function(event) {
	    	var textID = $("#searchText").val();
	    	if (textID=='') {
	    		alert('Please input the ID.');
	    	}
	    	else{
	    		jQuery.ajax({
			        url: "<?php echo site_url('competition/verifyTextID/') ?>"+textID,
			        type: 'post', 
			        success: function (data) {
						if (data=='true') {
							window.location.href="<?php echo site_url('competition/piece/') ?>"+textID;
						}
						else{
							alert('Sorry, we cannot find such competition.');
						}
			        }
			    });
	    	}
	    });

	    $("#searchText").mouseover(function(event) {
	    	$('#searchText').tooltip('show');
	    });

	    $("li.match_list_hover").click(function(){	
	    	var idDom = $(".textID");
	    	var textID = $(this).find(idDom).html();
	    	window.location.href="<?php echo site_url('competition/piece/') ?>"+textID;
	    });

	    $("#competition").addClass('active');

	});


	$(window).load(function() {
		$(".listTD").each(function(){
			var name = $(this).find($(".listName")).html().trim();
		    if (name=="<?php echo $id ?>") {
		    	$(this).css('background-color',' rgba(49,111,204,0.3)');
		    }
		});
  	});


	function showFilterInfo(data){
		var compObj = eval(data);
		$("#content").html("");
		for (var i = 0; i < compObj.length; i++) {
			var thisConceal = $("#conceal").clone(true);
			$("#content").append(thisConceal);

			thisConceal.find($(".name")).html(compObj[i].name);
			thisConceal.find($(".startYear")).html(compObj[i].startYear);
			thisConceal.find($(".startMonth")).html(compObj[i].startMonth);
			thisConceal.find($(".startDay")).html(compObj[i].startDay);
			thisConceal.find($(".startHour")).html(compObj[i].startHour);
			thisConceal.find($(".startMinute")).html(compObj[i].startMinute);
			thisConceal.find($(".textID")).html(compObj[i].textID);
			thisConceal.find($(".number")).html(compObj[i].attendNo+"/"+compObj[i].allowNo);
			thisConceal.find($(".endYear")).html(compObj[i].endYear);
			thisConceal.find($(".endMonth")).html(compObj[i].endMonth);
			thisConceal.find($(".endDay")).html(compObj[i].endDay);
			thisConceal.find($(".endHour")).html(compObj[i].endHour);
			thisConceal.find($(".endMinute")).html(compObj[i].endMinute);
		}
		
	}

	function getActiveAffi(){
		var affi = "";
		var affiClass = $(".affi.active").attr("class");
		var affiArray = affiClass.split(" ");
		for(var i=0;i<affiArray.length;i++){
			if (affiArray[i]!="affi"&&affiArray[i]!="active") {	
				//处于active状态的affi有三个class，affi，active，还有另一个标识种类的。这里就是把这三个状态存为array，然后遍历找到另一个
				affi = affiArray[i];
			}
		}
		return affi;
	}

	function getActiveAllow(){
		var allow = "";
		var allowClass = $(".allow.active").attr("class");
		var allowArray = allowClass.split(" ");
		for(var i=0;i<allowArray.length;i++){
			if (allowArray[i]!="allow"&&allowArray[i]!="active") {
				allow = allowArray[i];
			}
		}
		return allow;
	}


</script>
	

 </head>
 <body>