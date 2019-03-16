
    
    <script src=<?php echo site_url("application/views/register/register.js")?> ></script>

    <link href=<?php echo site_url('application/views/fullPage/jquery.fullPage.css') ?> rel="stylesheet"> 
    

    <script>
    $(document).ready(function(){

         $('#fullpage').fullpage({
            verticalCentered: false,
            'css3': true,
            // afterRender: function(){
            //     $('video').get(0).play();
            // }
        });

         $('#register').click(function(event) {
            checkForm();
         });
    })

    function checkForm(){
        var id = $("#id").val();
        var psw = $("#psw").val();
        var psw2 = $("#psw2").val();

        if ((id=="")||(psw=="")||(psw2=="")) {
            $("#tag").text("please complete");
        }
        else if(psw!=psw2){
            $("#tag").text("two passwords don't match");
        }
        else{
            checkID(id, psw);
        } 
    }

    function checkID(id, psw){
        var patt1=new RegExp("sb");
        var check = patt1.test(id);
        if (check) {
            // $("#tag").text("用户名中包含敏感词汇哦");
        }
        else{
            var response=$.ajax({url:"<?php echo site_url('register/verify/') ?>"+id+"/"+psw, async:false});

            if (response.responseText=="true") {
                window.location.href="<?php echo site_url('init/newUser/') ?>"+id;
            }
            else{
                $("#tag").text("this username has already been used");
            }
        }
    }

    </script>

</head>

<body>