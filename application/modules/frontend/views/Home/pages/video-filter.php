<?php  if(count($videos) > 0 && $videos[0]['id'] !='') { 
		$t=0;
			foreach($videos as $video){ 
				$t++;
		  ?>	
			<div class="col-lg-4 colpadbottom">
		
				<div id="Layer6" onmouseenter="ShowObjectWithEffect('Layer4', 1, 'fade', 500);return false;" onmouseleave="ShowObjectWithEffect('Layer4', 0, 'fade', 500);return false;">
					<div id="wb_Text31">
						<span class="text-primary">
						<strong><a href="./video_details.php" target="_blank" class="style16"><?php echo $video['name'];?></a></strong></span>
					</div>
					<div id="wbText32">
						<span class="text-muted"><?php echo word_limiter($video['description'], 7);?></span>
					</div>
					<div id="wbImage21">
						<img src="<?php echo asset_url(); ?>images/items_like0.png" id="Image21" alt="">
					</div>
					<div id="wbText10">
						<span class="text-muted"><?php echo $video['likes'];?></span>
					</div>
					<div id="wbText440">
						<span class="spanusd">USD</span>
						<span class="spanusd"> </span>
						<span class="spanprice"><?php echo $video['unit_price']; ?></span>
					</div>
					<div id="wbText45">
						<span class="text-muted">Min. Order : <?php echo $video['quantity'].' '. $video['unit']; ?> </span>
					</div>
					<div id="display-menuvideo<?php echo $t;?>">
					<div id="wbMediaPlayer8" style="">
						<video src="<?php echo asset_url(); ?><?php echo $video['vedio_file'];?>" controls="controls"></video>
					</div>
					<div id="wbText33">
						<span class="text-danger"><strong><?php echo $video['company_name'];?></strong></span>
					</div>
					<div id="wbText15">
						<span class="text-muted"><?php echo $video['subcategory']; ?></span>
					</div>
					<div id="wbText14"
						style="">
						<span class="text-muted"><?php echo $video['country']; ?></span>
					</div>
					<div id="wbText13">
						<span class="text-danger"><?php echo $video['province']; ?></span>
					</div>
					<div id="wbImage37">
						<img src="<?php echo asset_url(); ?>images/CommMember.png" id="Image37"
							alt="Member In My Community" title="Member In My Community">
					</div>
					<div id="wbImage39">
						<img src="<?php echo asset_url(); ?>images/trusted.png" id="Image39" alt=""
							title="Verified Member">
					</div>
					<div id="wbImage40">
						<img src="<?php echo asset_url(); ?>images/member-logo.png" id="Image40"
							alt="Black Horse Member" title="Black Horse Member">
					</div>
					
					</div>
					
					<div id="hover-menuvideo<?php echo $t;?>" style="display:none; width: 91%; bottom: 22px; position:absolute; height: 100px; background: #ffffff; z-index: 1000;">
						<div id="RollOver22" class="rolloverdetail">
							<a href="./video_details.php" target="_blank"> 
							    <img class="hover" alt="" src="<?php echo asset_url(); ?>images/view-detailsc.png"> <span>
								<img alt=""	src="<?php echo asset_url(); ?>images/view-detailsb.png"></span>
							</a>
						</div>
						<div id="RollOver5"	class="rollovervideo">
							<a href="javascript:popupwnd('./likes_blogs.php','no','no','no','no','no','no','750','50','380','750')"	target="_self">
							   <img class="hover" alt="" src="<?php echo asset_url(); ?>images/like-videoa.png"> <span>
							   <img alt=""	src="<?php echo asset_url(); ?>images/like-videob.png"></span>
							</a>
						</div>
						<div id="RollOver12" class="rolloverfavourite">
							<a href="./item_details.php"> 
							<img class="hover" alt="" src="<?php echo asset_url(); ?>images/add-favoriteb.png"> <span>
							<img alt="" src="<?php echo asset_url(); ?>images/add-favoritea.png"></span>
							</a>
						</div>
						<div id="wb_Image4"	class="rollovershare">
							<a href="#"	onclick="ShowObjectWithEffect('Layer223', 1, 'fade', 500);return false;">
							<img src="<?php echo asset_url(); ?>images/share-videoa.png" id="Image4" alt=""></a>
						</div>
															
					</div>
				</div>
			</div>
<?php }}  else { ?>
	      <div class="row" >
	     	<h4 class="center"> No Videos Found!</h4>
	     </div>
	    <?php } ?>