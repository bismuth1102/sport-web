<div class="col-sm-1" style="margin-left: 70px;margin-top: 70px">
    <div >
        <img  src=<?php echo site_url("application/views/images/adv2.png") ?> alt=" ">
    </div>
</div>
<div class="col-sm-10 " style="margin-top:2% ;margin-left: 20px">

	<div class="form-horizontal">
      <form id="partForm" action=<?php echo site_url("competition/create")?> method="post" accept-charset="utf-8"  onSubmit="return false">

		<div class="form-group">
            <label class="col-sm-3 col-sm-offset-1 control-label rightAlign">input competition name:</label>
            <div class="col-sm-6">
			     <input id="compName" type="input" class="form-control" name="name"/>
            </div>
            <div id="nameTag" style="visibility: hidden;">
                <p style="color:#ff632b">need to input competition name</p>
            </div>
		</div>
        <?php echo form_error('name'); ?>

        <div class="form-group">		        
            <label class="col-sm-3 col-sm-offset-1 control-label rightAlign">max number of people</label>
            <div class="col-sm-6 top7">
                <select id="allowNo" name="allowNo">
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 col-sm-offset-2 control-label rightAlign">visibility</label>
            <div class="col-sm-6 top7" >
                <!-- <div id="mySwitch" class="switch switch-small" data-on="success" data-off="info" data-on-label="公开" data-off-label="私密">
                    <input type="checkbox" name="public" checked /> -->
                <!-- </div> -->
                    <label><input name = "public" type="radio" value="" checked="checked" style="margin-bottom: 5px"/>&nbsp all</label>
                    <label style="margin-left: 10px"><input name = "public" type="radio" value=""style="margin-bottom: 5px"/>&nbsp only for searching</label>
                
            </div>
            
        </div>
