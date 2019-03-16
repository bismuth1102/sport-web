    <link rel="stylesheet" href=<?php echo site_url("application/views/css/bootstrap-switch.min.css") ?> />
    <link rel="stylesheet" href=<?php echo site_url("application/views/sign/sign.css") ?> > 


    <script src=<?php echo site_url("application/views/js/echarts.min.js")?> ></script>
    <script src="http://ricostacruz.com/jquery.transit/jquery.transit.min.js"></script>
    <script src=<?php echo site_url("application/views/js/bootstrap-switch.min.js") ?> ></script>
    <script src=<?php echo site_url("application/views/js/bootstrap-switch.min.js") ?> ></script>
    <script src=<?php echo site_url("application/views/sign/sign.js") ?> ></script>
    

    <script>
    	$(document).ready(function(){

            $('#fullpage').fullpage({
                verticalCentered: false,
                'navigation': true,
                'css3': true,
                'sectionsColor': ['#F0F2F4', '#fff', '#fff'],
                'navigationPosition': 'right',
                // afterRender: function(){
                //     $('video').get(0).play();
                // }
            });

    		$("#signin").click(function(event) {
                var id = $("#id").val();
                var password = $("#password").val();

                var response=$.ajax({url:"<?php echo site_url('sign/verify/') ?>"+id+"/"+password,async:false});
                
                if (response.responseText=="true") {
                    window.location.href="<?php echo site_url('sport') ?>";
                }
                else{
                    $("#tag").css('visibility', 'visible');
                }

    		});

    		$("#register").click(function(event) {
    			window.location.href="<?php echo site_url('register') ?>";
    		});


            $('.pic').mouseenter(function(){
                $(this).transition({ scale: 1.2});
            });
            $('.pic').mouseleave(function(){
                $(this).transition({ scale: 1 });
            });
            $('#pic1').mouseenter(function(){
                setSportChart();
            });
            $('#pic2').mouseenter(function(){
                setCompChart();
            });
            $('#pic3').mouseenter(function(){
                setMessageChart();
            });


            init();

        });

    </script>

</head>

<body>
