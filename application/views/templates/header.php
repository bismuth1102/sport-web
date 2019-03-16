<!DOCTYPE html>
<html lang='en'>
<head>
	<title>vancleef sport</title>

	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>

	<meta name ="keywords" content="relationships,entertainment,human,sport,health,run,walk,competitions">
	<meta name="description" content="text/html;This page is about the sport management，sport competition and social intercourse.">
	
	<script src=<?php echo site_url("application/views/js/jquery.js") ?> ></script>
	<script src=<?php echo site_url("application/views/js/bootstrap.min.js") ?> ></script>
	<script src=<?php echo site_url("application/views/js/Utility.js") ?> ></script>


	<link rel='stylesheet' href=<?php echo site_url("application/views/css/bootstrap.min.css") ?> >
	<link rel='shortcut icon' href=<?php echo site_url("application/views/images/logo.jpg") ?> />
	<link rel='stylesheet' href="<?php echo site_url("application/views/css/base.css") ?>" />
	<link rel='stylesheet' href=<?php echo site_url("application/views/css/codoon.css") ?> />
	<link rel='stylesheet' href=<?php echo site_url("application/views/css/codoonMessage.css") ?> />
	<link rel='stylesheet' href=<?php echo site_url("application/views/css/tb.css") ?> />
	<link rel='stylesheet' href="<?php echo site_url("application/views/css/all.css") ?>" />

	<script>


		$(window).load(function() {
            var containH = $('#container').css('height');
            var contain2H = $('#container2').css('height');
		    var bodyH = document.documentElement.clientHeight;
		    max(containH, contain2H, bodyH);
  		});

		function max(containH, contain2H, bodyH){
			// alert(bodyH+" "+containH+" "+contain2H);
			var realH = parseInt(containH)+parseInt(contain2H);
			if (bodyH>realH) {
				$('#bodyDiv').css('height', bodyH-parseInt(contain2H));
			}
		}

	</script>


