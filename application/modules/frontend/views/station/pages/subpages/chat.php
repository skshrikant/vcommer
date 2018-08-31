<div id="Layer224_Container" style="width:1088px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
    <div id="Layer225" style="position:absolute;text-align:center;left:0px;top:0px;width:1086px;height:45px;z-index:1792;">
        <div id="Layer225_Container" style="width:1086px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
            <button id="AdvancedButton113" onclick="ShowObjectWithEffect('Layer180', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');return false;" type="button" style="position:absolute;left:1039px;top:0px;width:47px;height:45px;z-index:1789;" name="" value="">
                <div style="text-align:center"><span style="color:#FFFFFF;font-family:Arial;font-size:20px">X</span></div>
            </button>
            <div id="wb_Text764" style="position:absolute;left:26px;top:10px;width:259px;height:16px;z-index:1790;text-align:left;">
                <span style="color:#A9A9A9;font-family:Georgia;font-size:19px;">General Chat Alerts</span></div>
        </div>
    </div>
    <div id="wb_Text765" style="position:absolute;left:25px;top:114px;width:63px;height:16px;z-index:1794;text-align:left;">
        <span style="color:#696969;font-family:Arial;font-size:12px;">You have </span></div>
        <div id="wb_Text782" style="position:absolute;left:81px;top:98px;width:430px;height:16px;z-index:1796;text-align:left;">
                <span style="color:#F05539;font-family:Arial;font-size:32px;"><?php echo $totalChats; ?></span><span style="color:#FFFFFF;font-family:Arial;font-size:32px;"> </span><span style="color:#696969;font-family:Arial;font-size:12px;">Unread chat notifications ( Each alert will be expired after 15 days )</span></div>
    <?php
    foreach ($chatMessages as $key => $message) { ?>
    <div class="<?php echo ($key%2) ? 'even' : 'odd'; ?>">
    <div id="wb_Shape343" style="position:absolute;left:29px;top:170px;width:45px;height:45px;z-index:1797;">
            <img src="<?php echo asset_url() . $message['profile_image']; ?>" id="Shape343" alt="" style="width:45px;height:45px;border-radius: 50px;"></div>
        <div id="wb_Text766" style="position:absolute;left:84px;top:176px;width:351px;height:16px;z-index:1798;text-align:left;">
            <span style="color:#303030;font-family:Georgia;font-size:13px;"><strong><a href="./buyer_profile.php" target="_blank" class="style5"><?php echo $message['company_name']; ?></a></strong></span></div>
        <div id="wb_Text767" style="position:absolute;left:85px;top:197px;width:177px;height:16px;z-index:1799;text-align:left;">
            <span style="color:#4B4B4B;font-family:Arial;font-size:12px;">Presented By: <?php echo $message['name_prefix'] . ' ' . $message['name']; ?></span></div>
        <div id="wb_Shape346" style="position:absolute;left:52px;top:201px;width:25px;height:25px;z-index:1802;">
            <a href="#" onclick="ShowObject('Layer214', 0);ShowObject('Layer191', 1);ShowObject('Layer217', 0);return false;"><img src="images/img1730.png" id="Shape346" alt="" style="width:25px;height:25px;"></a></div>
        <div id="wb_Shape349" style="position:absolute;left:71px;top:242px;width:129px;height:30px;z-index:1805;">
            <a href="#" onclick="ShowObject('Layer214', 0);ShowObject('Layer191', 1);ShowObject('Layer217', 0);return false;"><img src="images/img1733.png" id="Shape349" alt="" style="width:129px;height:30px;"></a></div>
        <div id="wb_Shape350" style="position:absolute;left:214px;top:243px;width:129px;height:31px;z-index:1806;">
            <a href="#" onclick="ShowObject('Layer214', 0);ShowObject('Layer191', 1);ShowObject('Layer217', 0);return false;"><img src="images/img1734.png" id="Shape350" alt="" style="width:129px;height:31px;"></a></div>
        <div id="wb_Text1441" style="position:absolute;left:85px;top:213px;width:177px;height:16px;z-index:1815;text-align:left;">
            <span style="color:#000000;font-family:Arial;font-size:12px;">Date : <?php echo $message['last_chat_date']; ?></span></div>
    </div>
                <?php } ?>
</div>