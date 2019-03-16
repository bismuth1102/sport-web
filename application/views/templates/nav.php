<div id="bodyDiv" style="background-image: url(<?php echo site_url('application/views/images/bg6.jpg') ?>);background-size:cover ">

	<div class="container" id="container" style="height: 100%">

		<nav class='navbar navbar-default' role='navigation' style="background-color:#ffffff">
			<div class='row'>
		    	<div class='container-fluid col-sm-7 col-xs-9' style='margin-left:10px;'> 
			        <div class='navbar-header'>
			          	<button type='button' class='navbar-toggle' data-toggle='collapse'
			              data-target='#mainNav'>

				            <span class='icon-bar'></span>
				            <span class='icon-bar'></span>
				            <span class='icon-bar'></span>
				        </button>
			          	<a class='navbar-brand fontHead' href=<?php echo site_url('sport'); ?> >vancleef</a>
			          	<!-- <div class="form-group" style="float: right">
					  		<a href=<?php echo site_url('mine'); ?> >
					  			<img src=<?php echo site_url("application/views/images/".$avatar) ?> width='30' height='30' alt='avatar' />
					  		</a>
					  	</div> -->
			        </div>
			        <div class='collapse navbar-collapse' id='mainNav'>
			          <ul class='nav navbar-nav'>
			            <li id='sport'><a class="font5" href=<?php echo site_url('sport'); ?> >sport</a></li>
			            <li id='competition'><a class="font5" href=<?php echo site_url('competition'); ?> >competition</a></li>
				        <li id='dropdown'>
				            <a href='#' class='dropdown-toggle font5' data-toggle='dropdown'>
				               	user
				                <b class='caret'></b>
				            </a>
				            <ul class='dropdown-menu' aria-labelledby="dLabel">
				                <li id='mine'><a class="font5" href=<?php echo site_url('mine'); ?> >account</a></li>
							    <li id='attention'><a class="font5" href=<?php echo site_url('attention/star'); ?> >friends</a></li>
							    <!--<li id='title'><a class="font5" href=<?php /*echo site_url('title'); */?> >头衔设置</a></li>-->
								<?php /*echo site_url('board/' . $id); */?>
								<li id='attention'><a class="font5" href=<?php echo site_url('board/'.$id); ?> >message</a></li>
							    <li id='message'><a class="font5" href=<?php echo site_url('mail/unread'); ?> >email</a></li>
				            </ul>
			            </li>
			          </ul>
			        </div>
			        
			    </div>
		    	      

			  	<div class='col-sm-4 hidden-xs' style="margin-top:10px;">

				  	<div class="form-inline" style="float: right">

					  	<div class="form-group" style="">
					  		<a href=<?php echo site_url('mine'); ?> >
					  			<img src=<?php echo site_url("application/views/images/".$avatar) ?> width='30' height='30' alt='avatar' />
					  		</a>
							<a class="font5" href=<?php echo site_url('mine'); ?> ><?php echo $id; ?></a>
							<!-- <a href=<?php echo site_url('board/'.$id); ?> onclick="$(this).css('display','none')"><span class="badge">1</span></a> -->
					  	</div>

					  	<div class="form-group" style="margin-left:30px;">
					  		<a class="font5" href=<?php echo site_url('sign/logout'); ?> >logout</a>
					  	</div>

					</div>

			    </div>

		    </div>
		    
		</nav>
		
		<div id="centerDiv" style="width:98%;margin:0 auto">

	