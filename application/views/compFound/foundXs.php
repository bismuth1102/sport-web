

            <div class='form-group'>
              <div>
                <div class='settings'  style='display:none'>
                  <div data-role='fieldcontain'>
                    <label for='theme'>Theme</label>
                    <select name='theme' id='theme'>
                      <option value='sense-ui'>Sense UI</option>
                    </select>
                  </div>
                  <div data-role='fieldcontain'>
                    <label for='animation'>Animation</label>
                    <select name='animation' id='animation' class='settings'>
                      <option value='flip'>Flip</option>
                    </select>
                  </div>
                  <div data-role='fieldcontain'>
                    <label for='demo'>Demo</label>
                    <select name='demo' id='demo'>
                      <option value='datetime'>Datetime</option>
                    </select>
                  </div>
                </div>
                <div data-role='fieldcontain' class='demo-datetimet'>
                  <input id='xsStartTime' name="xsStartTime" class='demo-test-datetime form-control' placeholder='begin time' value="" />
                  <?php echo form_error('xsStartTime'); ?>
                  <p id="xsStartTimeVerify"></p>
                  <input id='xsEndTime' name="xsEndTime" class='demo-test-datetime form-control' placeholder='end time' value="" />
                  <?php echo form_error('xsEndTime'); ?>
                  <p id="xsEndTimeVerify"></p>
                </div>
              </div>
            </div>


