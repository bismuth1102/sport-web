
	    <div class="row col-md-3 col-sm-4" id="data">

	    	<div class="defaultBlock transparent" id="today">
	    		<h3 class="font3">amount of sport today</h3>
				<table class="table" style="margin-top:10px;margin-bottom:0px">
					<tr>
						<td><b><?php echo $sport['dkm']; ?></b></td>
						<td>km</td>
					</tr>
					<tr>
						<td><b><?php echo $sport['dcal']; ?></b></td>
						<td>calorie</td>
					</tr>
					<tr>
						<td><b><?php echo $sport['dstep']; ?></b></td>
						<td>steps</td>
					</tr>
				</table>
			</div>

	    	<div class="blank10"></div>


	    	<div class="defaultBlock transparent" id="total">
	    		<h3 class="font3">amount of sport total</h3>
				<table class="table" style="margin-top:10px;margin-bottom:0">
					<tr>
						<td><b><?php echo $sport['tkm']; ?></b></td>
						<td>km</td>
					</tr>
					<tr>
						<td><b><?php echo $sport['tcal']; ?></b></td>
						<td>calorie</td>
					</tr>
					<tr>
						<td><b><?php echo $sport['tstep']; ?></b></td>
						<td>steps</td>
					</tr>
				</table>
				
	    	</div>
			<div class="blank10"></div>

			<div class="defaultBlock transparent" id="tips">
	    		<h3 class="font3">health tips</h3>
	    		<div class="blank10"></div>
				<ol>
					<li>1.Eating more fruits is good for your health.</li>
					<li>2.If the joint is sore, reduce the amount of exercise.</li>
					<li>3.Get up early and get up early every morning to develop good habits.</li>
					<li>4.Remember to have breakfast every day.</li>
					<li>5.Chicken is less fat and healthier than pork.</li>
				</ol>
	    	</div>
			

	    </div>
	    

		<div id="rightPart" class="col-md-9 col-sm-8 transparent" style="bottom: 5px;">

			<ul class="nav nav-pills">
			  	<li id="weekChart" class="charts active"><a href="#">this week</a></li>
			  	<li id="monthChart" class="charts"><a href="#">this month</a></li>
			  	<li id="sleepChart" class="charts"><a href="#">sleep</a></li>
			</ul>
			
            <div id="chart" class="mychart col-md-6" style="width:75%;height: 100%">
				
			</div>
			
			<div id="stats" class="mychart col-md-2" style="width:25%;float:right;">
				
			</div>
		</div>



		