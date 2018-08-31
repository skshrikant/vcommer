<div id="wb_Carousel3_<?php echo $key;?>" class="carousel slide" data-ride="carousel" style="position:absolute;left:25px;top:7px;width:950px;height:164px;z-index:112;overflow:hidden;">
	<div class="carousel-inner" style="margin-left: 115px;">
		<div class="item active">
			<?php if(!empty($images[0]['main_image'])) { ?>
			<div id="wb_Image15" class="col-sm-3" style="width:190px;height:155px;z-index:104;padding: 0px 5px;">
				<img src="<?php echo asset_url(); ?><?php echo $images[0]['main_image'];?>" id="Image15" alt="" style="background-color: #fff;">
			</div>
			<?php } ?>
			<?php if(!empty($images[1]['main_image'])) { ?>
			<div id="wb_Image16" class="col-sm-3" style="width:190px;height:155px;z-index:105;padding: 0px 5px;">
				<img src="<?php echo asset_url(); ?><?php echo $images[1]['main_image'];?>" id="Image16" alt="" style="background-color: #fff;">
			</div>
			<?php } ?>
			<?php if(!empty($images[2]['main_image'])) { ?>
			<div id="wb_Image17" class="col-sm-3" style="width:190px;height:155px;z-index:106;padding: 0px 5px;">
				<img src="<?php echo asset_url(); ?><?php echo $images[2]['main_image'];?>" id="Image17" alt="" style="background-color: #fff;">
			</div>
			<?php } ?>
			<?php if(!empty($images[3]['main_image'])) { ?>
			<div id="wb_Image18" class="col-sm-3" style="width:190px;height:155px;z-index:107;padding: 0px 5px;">
				<img src="<?php echo asset_url(); ?><?php echo $images[3]['main_image'];?>" id="Image18" alt="" style="background-color: #fff;">
			</div>
			<?php } ?>
		</div>
		<?php if(count($images) > 4) { ?>
		<div class="item">
			<?php if(!empty($images[4]['main_image'])) { ?>
			<div id="wb_Image19" class="col-sm-3" style="width:190px;height:155px;z-index:108;padding: 0px 5px;">
				<img src="<?php echo asset_url(); ?><?php echo $images[4]['main_image'];?>" id="Image19" alt="" style="background-color: #fff;">
			</div>
			<?php } ?>
			<?php if(!empty($images[5]['main_image'])) { ?>
			<div id="wb_Image22" class="col-sm-3" style="width:190px;height:155px;z-index:109;padding: 0px 5px;">
				<img src="<?php echo asset_url(); ?><?php echo $images[5]['main_image'];?>" id="Image22" alt="" style="background-color: #fff;">
			</div>
			<?php } ?>
			<?php if(!empty($images[6]['main_image'])) { ?>
			<div id="wb_Image23" class="col-sm-3" style="width:190px;height:155px;z-index:110;padding: 0px 5px;">
				<img src="<?php echo asset_url(); ?><?php echo $images[6]['main_image'];?>" id="Image23" alt="" style="background-color: #fff;">
			</div>
			<?php } ?>
			<?php if(!empty($images[7]['main_image'])) { ?>
			<div id="wb_Image24" class="col-sm-3" style="width:190px;height:155px;z-index:111;padding: 0px 5px;">
				<img src="<?php echo asset_url(); ?><?php echo $images[7]['main_image'];?>" id="Image24" alt="" style="background-color: #fff;">
			</div>
			<?php } ?>
		</div>
		<?php } ?>
	</div>
	<?php if(count($images) > 4) { ?>
	<div style="position:absolute;left:30px;top:45%;width:35px;height:13px;z-index:999"><a href="#wb_Carousel3_<?php echo $key;?>" style="cursor:pointer;background-image:none;" class="left carousel-control" data-slide="prev" ><img alt="Back" style="border-width:0" src="<?php echo asset_url(); ?>images/previoustxt0blk.png"></a></div>
	<div style="position:absolute;right:-4px;top:45%;width:35px;height:13px;z-index:999"><a href="#wb_Carousel3_<?php echo $key;?>" style="cursor:pointer;background-image:none;width:50px;" class="right carousel-control" data-slide="next" ><img alt="Next" style="border-width:0" src="<?php echo asset_url(); ?>images/nexttxt0blk.png"></a></div>
	<?php } ?>
</div>