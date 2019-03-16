  <link rel="stylesheet" href=<?php echo site_url("application/views/css/bootstrap-switch.min.css") ?> />
  <link rel="stylesheet" media="all" href=<?php echo site_url("application/views/css/daterangepicker-bs3.css") ?> />
	
    <script src=<?php echo site_url("application/views/js/bootstrap-switch.min.js") ?> ></script>
    <script src=<?php echo site_url("application/views/js/moment.js") ?> ></script>
    <script src=<?php echo site_url("application/views/js/daterangepicker.js") ?> ></script>
    <script src=<?php echo site_url("application/views/js/redirect.js") ?> ></script>
  
  <link <?php echo site_url("application/views/compFound/compFound.css") ?> rel="stylesheet">

  <script>

    $(document).ready(function(){

        $('#smTime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 1,
            format: 'MM/DD/YYYY h:mm A'
        });

        $("#competition").addClass('active');

        $("#back").click(function(event) {
            window.location.href="<?php echo site_url('competition'); ?>";
        });
      
        $("#submitForm").click(function(){

            var verify = verifyForm();
            if (verify=="true") {
                analysis();
            }

        });
    });

    function analysis(){
        if(isMobile()){
            var xsStartTime = document.getElementById('xsStartTime').value; 
            var xsEndTime = document.getElementById('xsEndTime').value;
            if(xsStartTime==''){
                $('#xsStartTimeVerify').text('StartTime is required.');
            }
            if(xsEndTime==''){
                $('#xsEndTimeVerify').text('EndTime is required.');
            }
            if(xsStartTime!=''&&xsEndTime!=''){
                var startTime = xsStartTime.split(/\/|\ |\:/); 
                var startYear = startTime[2];
                var startMonth = startTime[0];
                var startDay = startTime[1];
                var startHour = startTime[3];
                var startMinute = startTime[4];
                var startAM = startTime[5];
                if (startAM=='PM') {
                    startHour = startHour*1+12;
                }

                var endTime = xsEndTime.split(/\/|\ |\:/); 
                var endYear = endTime[2];
                var endMonth = endTime[0];
                var endDay = endTime[1];
                var endHour = endTime[3];
                var endMinute = endTime[4];
                var endAM = endTime[5];
                if (endAM=='PM') {
                    endHour = endHour*1+12;
                }

                var startSecond = (new Date(startYear+'/'+startMonth+'/'+startDay+' '+startHour+':'+startDay+':'+'00')).getTime();
                var endSecond = (new Date(endYear+'/'+endMonth+'/'+endDay+' '+endHour+':'+endDay+':'+'00')).getTime();
                if (startSecond>endSecond) {
                    $('#xsEndTimeVerify').text('StartTime should be lower than EndTime.');
                }
                else{
                    setForm(startYear,startMonth,startDay,startHour,startMinute,endYear,endMonth,endDay,endHour,endMinute);
                }
            }
        }

        else{
            var smTime = document.getElementById('smTime').value;
            if(smTime==''){
                $('#smTimeVerify').text('Time is required.');
            }
            else{
                var time = smTime.split(/\/|\ |\:|\-/); 

                var startYear = time[2];
                var startMonth = time[0];
                var startDay = time[1];
                var startHour = time[3];
                var startMinute = time[4];
                var startAM = time[5];
                if (startAM=='PM') {
                    startHour = startHour*1+12;
                }

                var endYear = time[10];
                var endMonth = time[8];
                var endDay = time[9];
                var endHour = time[11];
                var endMinute = time[12];
                var endAM = time[13];
                if (startAM=='PM') {
                    startHour = startHour*1+12;
                }

                setForm(startYear,startMonth,startDay,startHour,startMinute,endYear,endMonth,endDay,endHour,endMinute);
                
            }
        }
    }

    function verifyForm(){
        var verify = "true";
        var name = document.getElementById('compName').value;
        if (name=="") {
            $("#nameTag").css('visibility', 'visible');
            verify = "false";
        }

        if(isMobile()){
            var xsTime = document.getElementById('xsTime').value; 
            if (xsTime=="") {
                $(".timeTag").css('visibility', 'visible');
                verify = "false";
            }
        }
        else{
            var smTime = document.getElementById('smTime').value;
            if (smTime=="") {
                $(".timeTag").css('visibility', 'visible');
                verify = "false";
            }
        }

        return verify;
    }


    function setForm(startYear,startMonth,startDay,startHour,startMinute,endYear,endMonth,endDay,endHour,endMinute){

        document.getElementsByName('startYear')[0].value = startYear;
        document.getElementsByName('startMonth')[0].value = startMonth;
        document.getElementsByName('startDay')[0].value = startDay;
        document.getElementsByName('startHour')[0].value = startHour;
        document.getElementsByName('startMinute')[0].value = startMinute;
        document.getElementsByName('endYear')[0].value = endYear;
        document.getElementsByName('endMonth')[0].value = endMonth;
        document.getElementsByName('endDay')[0].value = endDay;
        document.getElementsByName('endHour')[0].value = endHour;
        document.getElementsByName('endMinute')[0].value = endMinute;

        document.getElementById('partForm').submit();
    }

  </script>

</head>
<body>