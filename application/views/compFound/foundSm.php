

            <div class='form-group'>
                <label class="col-sm-3 col-sm-offset-1 control-label rightAlign">begin&end time</label>
                <div class="col-sm-6">
                    <fieldset>
                        <div class='controls'>
                            <div class='input-prepend input-group'>
                                <span class='add-on input-group-addon'><i class='glyphicon glyphicon-calendar fa fa-calendar'></i></span>
                                <input type='text' id='smTime' name="smTime" class='form-control' placeholder='begin time--end time' value="" />
                            </div>
                            <?php echo form_error('smTime'); ?>
                            <p id="smTimeVerify"></p>
                        </div>
                    </fieldset>
                </div>
                <div class="timeTag" style="visibility: hidden;">
                    <p style="color:#ff632b">need to choose begin&end time</p>
                </div>
                
            </div>

