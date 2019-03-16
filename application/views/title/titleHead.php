
	<script src=<?php echo site_url("application/views/title/title.js") ?> ></script>

	<link rel="stylesheet" href=<?php echo site_url("application/views/title/title.css") ?> >

	<script>
		$(document).ready(function(){
			$("#save").click(function(event) {
				var inputs = document.getElementsByTagName("input");
				var check = 'true';
				var i = 0;
				var titleArray = new Array();
				for (;i<inputs.length;i++) {
					var value = inputs[i].value;
					if (strBit(value)>8) {
						alert("第"+(i+1)+"个头衔设置的字符超过限制了哦");
						check = 'false';
						break;
					}
					else{
						if (value.length==0) {
							value = inputs[i].placeholder;
						}
						titleArray.push(value);
					}
				}
				if (check=='true') {
					var str ='str='+ JSON.stringify(titleArray);
					jQuery.ajax({
				        url: "<?php echo site_url('title/modify') ?>",
				        type: 'post',
				        // dataType: "json",
				        data: str,
				        success: function (data) {
				        	alert("头衔修改成功！");
							window.location.href = "<?php echo site_url('title/index') ?>";
				        }
				    });
				}

			});

		    $("#dropdown").addClass('active');
		    $("#title").addClass('active');
		    $("#sideTitle").addClass('active');
		});

		function strBit(str){
    		return str.replace(/[^\x00-\xff]/g,"aa").length;  
		}
		
	</script>

</head>
<body>