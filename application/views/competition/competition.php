<div class="col-sm-3" style="top:30px">
     <div class="row">
         <div class = "col-sm-4" >
             <img style = "height：10px;width：10px;" src=<?php echo site_url("application/views/images/runner.png") ?> alt=" ">

         </div> <div class = "col-sm-8" >
            <p style="line-height:64px;color: rgba(49,111,204,0.8);font-size: 1.8em">run distance ranking</p>
         </div>
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
                        steps
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

<div class="col-sm-9" style="top: 40px">

    <div style="padding-left: 2%">
            
    
        <div class="row">
            <ul class="nav nav-pills hidden-xs col-sm-7">
                <li class="disabled"><a class="font4" style="cursor:default;">belong to:</a></li>
                <li class="affi active allAffi"><a class="font5" href="#">all</a></li>
                <li class="affi create"><a class="font5" href="#">created</a></li>
                <li class="affi attend"><a  class="font5" href="#">joined</a></li>
            </ul>
            <div class="col-sm-1"></div>
            <div class="col-sm-4">
                <div class="form-inline" style="float: right">
                    <input id="searchText" type="text" class="form-control col-xs-2" data-toggle="tooltip" data-placement="bottom" title="input whole competition id for searching, exp:00001" style="width:120px;margin-right:5px">
                    <button id="search" class="btn btn-default" >go</button>
                    
                </div>
            </div>
           
        </div>

        <div class="blank10"></div>

        <div class="row" >
            <ul class="nav nav-pills hidden-xs col-sm-7">
                <li class="disabled"><a class="font4" style="cursor:default;">number of people:</a></li>
                <li class="allow active allAllow"><a  class="font5" href="#">all</a></li>
                <li class="allow two"><a class="font5" href="#">2</a></li>
                <li class="allow three"><a class="font5" href="#">3-10</a></li>
                <li class="allow ten"><a class="font5" href="#">>10</a></li>
            </ul>
            <div class="col-sm-3"></div>
             <div class="col-sm-2" style="">
                <button style=" float: right" id="create" class="btn btn-default">create</button>
             </div>
        </div>


        <div class="btn-group visible-xs">
            <ul class="nav nav-tabs">
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    belong to <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="affi allAffi active"><a class="font4" href="#">all</a></li>
                    <li class="affi create"><a class="font5" href="#">created</a></li>
                    <li class="affi attend"><a class="font5"href="#">joined</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    type <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="allow allAllow acitve"><a class="font4"href="#">all</a></li>
                    <li class="allow two"><a class="font5" href="#">2</a></li>
                    <li class="allow three"><a class="font5"href="#">3-10</a></li>
                    <li class="allow ten"><a class="font5"href="#">>10</a></li>
                  </ul>
                </li>
              </ul>
        </div>

        <div class="blank20"></div>

        <ul id="content">
        <?php foreach ($comps as $comps_item): ?>
            <li class="match_list_hover">
                <table cellpadding="0" cellspacing="0" class="tc match_table hidden-xs">
                    <tr>
                        <td height="85" rowspan="2" width="108" class="td1 font3">
                            <?php echo $comps_item['name']; ?>
                        </td>
                        <td width="60" height="30" class="bgtd font5">
                            <span>competition ID</span>
                        </td>
                        <td width="60" height="30" class="bgtd font5">
                            <span>num of people</span>
                        </td>
                        <td width="300" height="30" class="bgtd font5" style="padding-top:10px;">
                            <span class="f24 fb font6">&nbsp;&nbsp;begin time:<?php echo $comps_item['startYear']; ?></span>/
                            <span class="f24 fb font6"><?php echo $comps_item['startMonth']; ?></span>/
                            <span class="f24 fb font6"><?php echo $comps_item['startDay']; ?></span>&nbsp
                            <span class="f24 fb font6"><?php echo $comps_item['startHour']; ?></span>:
                            <span class="f24 fb font6"><?php echo $comps_item['startMinute']; ?></span>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td height="55" class="bgtd">
                            <span class="fb font1 textID"><?php echo $comps_item['textID']; ?></span>
                        </td>
                        <td height="55" class="bgtd">
                            <span class="fb font1 number"><?php echo $comps_item['attendNo']; ?>/<?php echo $comps_item['allowNo']; ?></span>
                        </td>
                        <td height="30" class="bgtd font5">
                            <span class="f24 fb font6">end time:<?php echo $comps_item['endYear']; ?></span>/
                            <span class="f24 fb font6"><?php echo $comps_item['endMonth']; ?></span>/
                            <span class="f24 fb font6"><?php echo $comps_item['endDay']; ?></span>&nbsp
                            <span class="f24 fb font6"><?php echo $comps_item['endHour']; ?></span>:
                            <span class="f24 fb font6"><?php echo $comps_item['endMinute']; ?></span>
                        </td>
                    </tr>
                </table>
                <table cellpadding="0" cellspacing="0" class="tc match_table hidden-sm hidden-md hidden-lg">
                    <tr>
                        <td height="85" rowspan="3" class="td1 col-xs-4 font2" style="background-color:#7ca8f0;">
                            <?php echo $comps_item['name']; ?>
                        </td>
                        <td height="30" class="bgtd col-xs-4">
                            <span>ID:</span><span class="textID"><?php echo $comps_item['textID']; ?></span>
                        </td>
                        <td height="30" class="bgtd col-xs-4">
                            <span>number of people:</span><span><?php echo $comps_item['attendNo']; ?>/<?php echo $comps_item['allowNo']; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td height="30" colspan="2" class="bgtd font6">
                               begin time: <?php echo $comps_item['startYear']; ?>/
                                <?php echo $comps_item['startMonth']; ?>/
                                <?php echo $comps_item['startDay']; ?>/
                                <?php echo $comps_item['startHour']; ?>:
                                <?php echo $comps_item['startMinute']; ?>
                                &nbsp;
                            
                        </td>
                    </tr>
                    <tr>
                        <td height="30" colspan="2" class=" bgtd font6">
                                end time:<?php echo $comps_item['endYear']; ?>/
                                <?php echo $comps_item['endMonth']; ?>/
                                <?php echo $comps_item['endDay']; ?>/
                                <?php echo $comps_item['endHour']; ?>:
                                <?php echo $comps_item['endMinute']; ?>
                            
                        </td>
                    </tr>
                </table>
            </li>

            <div class="blank20"></div>

            
        <?php endforeach; ?>
        </ul>

        <div style="display: none">

            <div id="conceal">
                <li class="match_list_hover">
                    <table cellpadding="0" cellspacing="0" class="tc match_table hidden-xs">
                        <tr>
                            <td height="85" rowspan="2" width="108" class="td1 font3 name">
                            </td>
                            <td width="60" height="30" class="bgtd font5">
                                <span>competition ID</span>
                            </td>
                            <td width="60" height="30" class="bgtd font5">
                                <span>num of people</span>
                            </td>
                            <td width="300" height="30" class="bgtd font5" style="padding-top:10px;">
                                <span class="f24 fb font6">start time<span class="startYear"></span></span>year
                                <span class="f24 fb font6 startMonth"></span>month
                                <span class="f24 fb font6 startDay"></span>day
                                <span class="f24 fb font6 startHour"></span>hour
                                <span class="f24 fb font6 startMinute"></span>minute
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td height="55" class="bgtd">
                                <span class="fb font1 textID"></span>
                            </td>
                            <td height="55" class="bgtd">
                                <span class="fb font1 number"></span>
                            </td>
                            <td width="300" height="30" class="bgtd font5">
                                <span class="f24 fb font6">end time:<span class="endYear"></span></span>year
                                <span class="f24 fb font6 endMonth"></span>month
                                <span class="f24 fb font6 endDay"></span>day
                                <span class="f24 fb font6 endHour"></span>hour
                                <span class="f24 fb font6 endMinute"></span>minute
                                &nbsp;
                            </td>
                        </tr>
                    </table>
                    <table cellpadding="0" cellspacing="0" class="tc match_table hidden-sm hidden-md hidden-lg">
                        <tr>
                            <td height="85" rowspan="3" class="td1 col-xs-4 font2" style="background-color:#7ca8f0;">
                                <?php echo $comps_item['name']; ?>
                            </td>
                            <td height="30" class="bgtd col-xs-4">
                                <span>ID:</span><span class="textID"><?php echo $comps_item['textID']; ?></span>
                            </td>
                            <td height="30" class="bgtd col-xs-4">
                                <span>number of people:</span><span><?php echo $comps_item['attendNo']; ?>/<?php echo $comps_item['allowNo']; ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td height="30" colspan="2" class="bgtd font6">
                               begin time: <?php echo $comps_item['startYear']; ?>/
                                <?php echo $comps_item['startMonth']; ?>/
                                <?php echo $comps_item['startDay']; ?>/
                                <?php echo $comps_item['startHour']; ?>:
                                <?php echo $comps_item['startMinute']; ?>
                                &nbsp;
                            
                            </td>
                        </tr>
                        <tr>
                            <td height="30" colspan="2" class=" bgtd font6">
                                    end time:<?php echo $comps_item['endYear']; ?>/
                                    <?php echo $comps_item['endMonth']; ?>/
                                    <?php echo $comps_item['endDay']; ?>/
                                    <?php echo $comps_item['endHour']; ?>:
                                    <?php echo $comps_item['endMinute']; ?>
                                
                            </td>
                        </tr>
                    </table>
                </li>

                <div class='blank20'></div>

            </div>

        </div>

    </div>

</div>