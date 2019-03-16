<div class="col-sm-9" style="float:left;border: 0px solid #c5c2c3;">

	<form id="mineForm" class="form-horizontal" enctype="multipart/form-data" action="" method="post"
		  accept-charset="utf-8" onSubmit="return false">

		<div class="block" style="border: 1px solid #c5c2c3;margin-bottom:20px;">
			<div class="blank10"></div>
			<h3 class="text-center font2">personal info</h3>
			<div class="blank10"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">upload avatar</label>
				<div class="col-sm-7 col-md-7 col-lg-7 top7">
					<input type="file" name="userfile">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">description</label>
				<div class="col-sm-7 col-md-7 col-lg-7" style="padding-right:50px">
					<input class="form-control " name="signature" type="text" value="<?php echo $signature ?>">
				</div>
				<div class="col-sm-1 col-md-1 col-lg-1">
					<button id="saveModify" class=" btn btn-success " style="float:right;" >save</button>
				</div>
			</div>
			<div class="form-group" name="exp">
				<label class="col-sm-2 control-label">exp</label>
				<div class="col-sm-7 col-md-7 col-lg-7" style="padding-right:50px">
					<div class="progress progress-striped active" style="margin-top:7px;">
						<div class="progress-bar progress-bar-info" role="progressbar"
							 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
							 style="width: <?php echo($exp / $maxExp * 100) ?>%;"><?php echo $exp ?>
							/<?php echo $maxExp ?>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="block" style="border: 1px solid #c5c2c3;margin-bottom:20px;">
			<div class="blank10"></div>
			<h3 class="text-center font2">best score</h3>
			<!--			<h class="text=center"></h>-->
			<div class="blank10"></div>
			<!-- 为ECharts准备一个具备大小（宽高）的Dom -->
			<?php $bdkmRatio=rand(0,30)+60;
					$bdcalRatio=rand(0,30)+60;
					$bdstepRatio=rand(0,30)+60;
			?>
			<div class="row">
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div id="chart1" style="width:250px;height:230px;">
					</div>
					<div style="position: relative; bottom: 30px">
						<h4 class="text-center">
						walk<span class="font5"><?php echo $bdkm; ?></span>km
						</h4>
						<h4 class="text-center">defeat<span class="font5"><?php echo $bdkmRatio."%"; ?></span>users</h4>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div id="chart2" style="width:250px;height:230px;"></div>
					<div style="position: relative; bottom: 30px">
						<h4 class="text-center">
							burn<span class="font5"><?php echo $bdcal; ?></span>calorie
						</h4>
						<h4 class="text-center">defeat<span class="font5"><?php echo $bdcalRatio."%"; ?></span>users</h4>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<div id="chart3" style="width:250px;height:230px;"></div>
					<div style="position: relative; bottom: 30px">
						<h4 class="text-center">
							walk<span class="font5"><?php echo $bdstep; ?></span>steps
						</h4>
						<h4 class="text-center">defeat<span class="font5"><?php echo $bdstepRatio."%"; ?></span>users</h4>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				// 基于准备好的dom，初始化echarts实例
				var myChart1 = echarts.init(document.getElementById('chart1'));
				// 指定图表的配置项和数据
				option = {
					tooltip: {
						/*formatter: "{a} <br/>{b} : {c}%"*/
					},
					/* toolbox: {
					 feature: {
					 restore: {},
					 saveAsImage: {}
					 }
					 },*/
					series: [
						{
							name: 'km',
							type: 'gauge',
							detail: {formatter: '{value}%'},
							data: [{value: <?php echo $bdkmRatio; ?>, name: ''}]
						}
					]
				};
				/* app.timeTicket = setInterval(function () {
				 option.series[0].data[0].value = (Math.random() * 100).toFixed(2) - 0;
				 myChart1.setOption(option, true);},2000);*/
				// 填充数据
				myChart1.setOption(option);

				var myChart2 = echarts.init(document.getElementById('chart2'));
				// 指定图表的配置项和数据
				option = {
					tooltip: {
						formatter: "{a} <br/>{b} : {c}%"
					},
					/* toolbox: {
					 feature: {
					 restore: {},
					 saveAsImage: {}
					 }
					 },*/
					series: [
						{
							name: 'calorie',
							type: 'gauge',
							detail: {formatter: '{value}%'},
							data: [{value: <?php echo $bdcalRatio; ?>, name: ''}]
						}
					]
				};
				/* app.timeTicket = setInterval(function () {
				 option.series[0].data[0].value = (Math.random() * 100).toFixed(2) - 0;
				 myChart1.setOption(option, true);},2000);*/
				// 填充数据
				myChart2.setOption(option);

				var myChart3 = echarts.init(document.getElementById('chart3'));
				// 指定图表的配置项和数据
				option = {
					tooltip: {
						formatter: "{a} <br/>{b} : {c}%"
					},
					/* toolbox: {
					 feature: {
					 restore: {},
					 saveAsImage: {}
					 }
					 },*/
					series: [
						{
							name: 'steps',
							type: 'gauge',
							detail: {formatter: '{value}%'},
							data: [{value: <?php echo $bdstepRatio; ?>, name: ''}]
						}
					]
				};
				/* app.timeTicket = setInterval(function () {
				 option.series[0].data[0].value = (Math.random() * 100).toFixed(2) - 0;
				 myChart1.setOption(option, true);},2000);*/
				// 填充数据
				myChart3.setOption(option);
			</script>
		</div>

		<div class="block" style="border: 1px solid #c5c2c3;margin-bottom:20px;">
			<div class="blank10"></div>
			<h3 class="text-center font2">competition info</h3>
			<div class="blank10"></div>
			<div class="row">
				<div class="col-sm-7">
					<div id="competitionChart" style="width:500px;height:450px;bottom: 70px;left: 10px"></div>
				</div>


				<div class="col-sm-4">

					<div class="row">
         				<div class = "col-sm-4" >
             				<img style = "height：10px;width：10px;" src=<?php echo site_url("application/views/images/runner.png") ?> alt=" ">
        				</div>
        				<p style="line-height:64px;color: rgba(49,111,204,0.8);font-size: 1.8em">power rank</p>
     				</div>


    <table class="table" id="listTable">
        <tr>
            <td>
                <div class="row">
                    <div class = "col-sm-4" style="font-weight: bold;font-size: 15px">
                        rank
                    </div>
                    <div class = "col-sm-4" style="font-weight: bold;font-size: 15px">
                        nickname
                    </div>
                    <div class = "col-sm-4" style="font-weight: bold;font-size: 15px">
                        power
                    </div>
                </div>
            </td>
        </tr>

        <?php if ($userNum>10) {
            for ($i=0; $i<10; $i++) { 
            ?>

            <tr>
                <td class="listTD" style="padding: 4px;">
                    <div class="row">
                        <div class = "col-sm-4" >
                            <img style = "height：5px;width：5px" src=<?php echo site_url("application/views/images/".$listIcons[$i]['ranking'].".png") ?> alt=" ">
                        </div>
                        <div class = "listName col-sm-4" style=";font-size: 14px;line-height: 32px">
                             <?php echo $DstepList[$i]['id'] ?>
                        </div>
                        <div class = "col-sm-4" style=";font-size: 14px;line-height: 32px">
                            <?php echo $DstepList[$i]['dstep'] ?>
                        </div>
                    </div>
                </td>   
            </tr>


            
    <?php } }
        else{
            for ($i=0; $i<$userNum; $i++){
            ?>
            

            <tr>
                <td class="listTD" style="padding: 4px;">
                    <div class="row">
                        <div class = "col-sm-4" >
                            <img style = "height：5px;width：5px" src=<?php echo site_url("application/views/images/".$listIcons[$i]['ranking'].".png") ?> alt=" ">
                        </div>
                        <div class = "listName col-sm-4" style=";font-size: 14px;line-height: 32px">
                             <?php echo $DstepList[$i]['id'] ?>
                        </div>
                        <div class = "col-sm-4" style=";font-size: 14px;line-height: 32px">
                            <?php echo $DstepList[$i]['dstep'] ?>
                        </div>
                    </div>
                </td>   
            </tr>


            <?php
         }   }?>

    </table>    


				</div>
			</div>
		</div>

	</form>
	<script>
		var competitionChart = echarts.init(document.getElementById('competitionChart'));
		option = {
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    series : [
        {
            name: 'source',
            type: 'pie',
            radius : '55%',
            center: ['50%', '60%'],
            data:[
                {value:335, name:'top 5%'},
                {value:310, name:'top 10%'},
                {value:234, name:'top 20%'},
                {value:135, name:'top 50%'},
                {value:1548, name:'keep exercising!'}
            ],
            itemStyle: {
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: '#000'
                }
            }
        }
    ]
};

		competitionChart.setOption(option);
	</script>

</div>
</div>
