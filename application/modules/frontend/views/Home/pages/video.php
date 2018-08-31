<?php 
foreach($videodetail as $videoBox) { ?>
<div id="Layer18" class="class3">
	<div id="wb_Text63" class="class4">
		<span class="class-font1"><strong><?php echo $videoBox['company_country'];?> | <?php echo $videoBox['company_province'];?></strong></span>
	</div>
	<div id="wb_Text64" class="class5">&nbsp;</div>
	<div id="wb_Image41" class="class6" style="width:50px;height:50px;">
		<img src="<?php echo asset_url();?>images/flags/<?php echo $videoBox['flag'];?>" id="Image17" alt="">
	</div>

	<div id="wb_Text167" style="position:absolute;left:131px;top:235px;width:29px;height:16px;z-index:1292;text-align:left;">
		<span style="color:#3C3C3C;font-family:Arial;font-size:11px;">Likes</span>
	</div>
	<div id="wb_Image59" style="position:absolute;left:155px;top:230px;width:25px;height:25px;z-index:1293;">
		<img src="<?php echo asset_url();?>images/items_like0.png" id="Image59" alt="">
	</div>
	<div id="wb_Text168" style="position:absolute;left:179px;top:235px;width:63px;height:16px;z-index:1294;text-align:left;">
		<span style="color:#3C3C3C;font-family:Arial;font-size:11px;" id="like_counter"><?php echo $videoBox['video_likes']; ?></span>
	</div>

	<div id="wb_MediaPlayer8" class="class7">
		<video src="<?php echo asset_url().''.$videoBox['vedio_file']; ?>" id="MediaPlayerid<?php echo $videoBox['vedio_id'];?>" controls="controls">
		</video>
	</div>
</div>
<div id="wb_Text65" class="class8">
	<span class="class9"><strong><?php echo $videoBox['product_name']; ?><br></strong></span>
</div>
<!--<div id="Layer30" class="class10">
	<div id="wb_Text66" class="class11">
		<span class="class12"><strong>By</strong></span>
	</div>
	<div id="wb_Text67" class="class13">
		<span class="class14"><?php ?>&nbsp;&nbsp; </span>
	</div>
	<div id="wb_Text91" class="class17">
		<span class="class18"><?php echo $videoBox['company_name']; ?> </span>
	</div>
	<div id="wb_Text92" class="class19">
		<span class="class20"><?php echo substr($videoBox['description'], '0', '200');?><br>
		</span>-->
<div id="Layer111" style="position:absolute;text-align:left;left:0px;top:372px;width:308px;height:141px;z-index:1295;">
	<div id="wb_Text162" style="position:absolute;left:27px;top:63px;width:38px;height:16px;z-index:1281;text-align:left;">
		<span style="color:#303030;font-family:Georgia;font-size:13px;"><strong>By</strong></span>
	</div>
	<div id="wb_Text163" style="position:absolute;left:122px;top:83px;width:63px;height:16px;z-index:1282;text-align:left;">
		<span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"><?php echo $videoBox['user_category']; ?>&nbsp;&nbsp; </span>
	</div>
	<div id="wb_Text165" style="position:absolute;left:70px;top:64px;width:187px;height:16px;z-index:1283;text-align:left;">
		<span style="color:#4169E1;font-family:Arial;font-size:12px;"><?php echo $videoBox['company_name']; ?> </span>
	</div>
	<div id="wb_Text166" style="position:absolute;left:27px;top:11px;width:271px;height:16px;z-index:1284;text-align:left;">
		<span style="color:#303030;font-family:Arial;font-size:12px;"><?php echo substr($videoBox['description'], '0', '125');?> <?php if(strlen($videoBox['description']) > 125) { ?>....<?php }?><br></span>
	</div>
	<div id="wb_Image20" class="class21" style="left: 90px;top:100px;width:25px;height:25px;">
		<?php if(!empty($videoBox['community_id']) && $videoBox['community_id'] != ""){?>
					<img src="<?php echo asset_url(); ?>images/CommMember.png" id="Image147">
				<?php }else { ?>
					<img src="<?php echo asset_url(); ?>images/CommMember.png" id="Image147" style="opacity: 0.15;">
				<?php } ?>
		
	</div>
	<div id="wb_Image20" class="class21" style="left:150px;top:100px;width:25px;height:25px;">
		<?php if($videoBox['is_logo_verified'] !=''){?>
					<img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" >
				<?php }else { ?>
					<img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" style="opacity: 0.15;">
				<?php } ?>
		
	</div>
	<div id="wb_Image21" class="class22" style="left:120px;top:100px;width:34px;height:26px;">
		 <?php if($videoBox['gaurantee_period'] !=''){?>
					<img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image1">
		<?php }else { ?>
					<img src="<?php echo asset_url(); ?>images/ts/guarantee.png"  id="Image1" style="opacity: 0.15;">
		<?php } ?>
	</div>
	<div id="wb_Image84"  class="class22" style="position:absolute;left:180px;top:100px;width:25px;height:25px;z-index:1148;"">
		<?php if($videoBox['plan_id'] > 1){?>
			<img src="<?php echo asset_url(); ?>images/member-logo.png" id="Image1" ></div>
		<?php }else { ?>
			<img src="<?php echo asset_url(); ?>images/member-logo.png" id="Image1" style="opacity: 0.15;"></div>
		<?php } ?>
	</div>
<div id="wb_Image43" class="class23" style="left:272px;top:0px;height: 35px;width: 35px;">
	<a href="#" onclick="StopAudio('MediaPlayerid<?php echo $videoBox['vedio_id'];?>');ShowObject('Layer_details3', 0);ShowObject('Layer_details', 0);return false;">
		<img src="<?php echo asset_url(); ?>images/close.png" id="Image43" alt="" style="height: 35px;width: 35px;">
	</a>
</div>
<div id="RollOver68" class="class24" style="position: absolute;top:520px;left:55px;">
	<a href="<?php echo base_url();?>video/details/<?php echo $videoBox['vedio_id'];?>" target="_blank">
		<img class="hover" alt="" title="View details" src="<?php echo asset_url(); ?>images/videoviewroll.png" style="width:35px;height:35px">
		<span><img alt="" title="View details" src="<?php echo asset_url(); ?>images/view2.png" style="width:35px;height:35px"></span>
	</a>
</div>
<div id="RollOver69" class="class25" style="position: absolute;top:520px;left:113px;">
	<a href="<?php echo base_url();?>pro-video" target="_blank">
		<img class="hover" alt="" title="Find the same product" src="<?php echo asset_url(); ?>images/videosame.png" style="width:35px;height:35px">
		<span><img alt="" title="Find the same product" src="<?php echo asset_url(); ?>images/from-same-user.png" style="width:35px;height:35px"></span>
	</a>
</div>
<div id="RollOver70" class="class26" style="position: absolute;top:520px;left:171px;">
	<a href="javascript:addToMyFavourite(<?php echo $videoBox['vedio_id'];?>,5);" target="_blank"> <img class="hover" alt=""
		title="Add to favourite"
		src="<?php echo asset_url(); ?>images/videoaddtofav.png" style="width:35px;height:35px"> <span><img
			alt="" title="Add to watch later"
			src="<?php echo asset_url(); ?>images/addtofav.png" style="width:35px;height:35px"></span>
	</a>
</div>
<div id="RollOver71" class="class27" style="position: absolute;top:520px;left: 229px;">
	<a
		href="javascript:likeVideo(<?php echo $videoBox['vedio_id'];?>,<?php echo $videoBox['video_likes'];?>)"
		target="_self"> <img class="hover" alt="" title="Like Video"
		src="<?php echo asset_url(); ?>images/likeblue.png" style="width:35px;height:35px"> <span><img alt=""
			title="Add to my cart"
			src="<?php echo asset_url(); ?>images/likewhite.png" style="width:35px;height:35px"></span>
	</a>
</div>
<!--<div id="wb_Text93" class="class28">
	<span class="class29">Likes</span>
</div>
<div id="wb_Image44" class="class30">
	<img src="<?php echo asset_url(); ?>images/items_like0.png"
		id="Image44" alt="" class="img25">
</div>
<div id="wb_Text94" class="class31">
	<span class="class32"><?php echo $videoBox['likes']; ?></span>
</div>-->
<?php }?>