<?php
if (count ( $Shippers ) > 0 && $Shippers [0] ['id'] != '') {
	foreach ( $Shippers as $key => $shipper ) {
		?>
<div class="row" id="Layer4" style="margin: 0px; margin-bottom: 15px;"
	onmouseenter="ShowObjectWithEffect('Layer8_<?php echo $key;?>', 1, 'slideright', 300, 'swing');return false;"
	onmouseleave="ShowObject('Layer5_<?php echo $key;?>', 0);ShowObject('Layer8_<?php echo $key;?>', 0);return false;">
	<div class="col-md-3 col-sm-12 displaydesktop">
		<div id="SlideShow1" class="img22">
			<img class="image"
				src="<?php echo asset_url().$shipper['info_img1'];?>" alt=""
				title=""> <img class="image"
				src="<?php echo asset_url().$shipper['info_img2'];?>"
				style="display: none;" alt="" title="">
		</div>
	</div>
	<div class="col-md-6 col-sm-12 space1">
		<div id="wb_Text8" class="section3">
			<div class="inline">
				<img src="<?php echo asset_url().$shipper['profile_image']; ?>"
					class="img1" /> <span class="block"><strong class="font1"><a
						href="<?php echo base_url();?>shipper/profile/<?php echo $shipper['busi_id'];?>"
						target="_blank" class="style5"><?php echo $shipper['company_name']?></a></strong>
					<br> Presented By: <?php echo $shipper['name_prefix'].' '.$shipper['name']; ?></span>
			</div>
			<p class="font5"><?php echo substr($shipper['company_introduction'], '0', '250'); ?><br>
				<br>
				</span>
			</p>
		</div>
		<span><strong class="strong1">Main Products |</strong> <?php echo substr($shipper['main_product'], '0', '100')?> ...</span>
		<div id="Layer5_<?php echo $key;?>"
			class="section10 row seller_Layer5">
			<div class="col-md-3">
				<div id="RollOver5" class="box1">
					<a
						href="<?php echo base_url();?>shipper/profile/<?php echo $shipper['busi_id'];?>"
						target="_blank"> <img class="hover" alt=""
						src="<?php echo asset_url() ?>images/Desktopskyb.png"> <span><img
							alt="" src="<?php echo asset_url() ?>images/desktopicon.gif"></span>
					</a>
					<div id="wb_Text13" class="beauty1">
						<p class="textfont1">DESKTOP</p>
						<p class="textfont2">To View Shipper Desksite Source Services,
							Contact, Chat and much more..</p>
					</div>

				</div>
			</div>
			<div class="col-md-3">
				<div id="RollOver22" class="box3">
					<a
						href="javascript:addToMyFavourite(<?php echo $shipper['busi_id'];?>,2);"
						target="_self"> <img class="hover" alt=""
						src="<?php echo asset_url() ?>images/faforiteskyb.png"> <span><img
							alt="Favourite"
							src="<?php echo asset_url() ?>images/favoriteclick.png"></span>
					</a>
					<div id="wb_Text13" class="beauty1">
						<p class="textfont1">ADD TO FAVOURITE</p>
						<p class="textfont2">To Save Shipper in Your Favorite, So As You
							Will Be Able To View It Later On..</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div id="RollOver6" class="box4">
					<a href="#"> <img class="hover" alt=""
						src="<?php echo asset_url() ?>images/chatskyb.png"> <span><img
							alt="" src="<?php echo asset_url() ?>images/videosame_black.png"></span>
					</a>
					<div id="wb_Text13" class="beauty1">
						<p class="textfont1">CHAT</p>
						<p class="textfont2">To Chat With Shipper ..</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3 col-sm-12">
		<div id="Layer8_<?php echo $key;?>" class="section9 seller_Layer8"
			onclick="ShowObjectWithEffect('Layer5_<?php echo $key;?>', 1, 'slideright', 500, 'swing');return false;">
			<div id="wb_Shape1" class="stylebox">
				<a href="#"
					onclick="ShowObjectWithEffect('Layer5_<?php echo $key;?>', 1, 'slideright', 500, 'swing');return false;"><img
					src="<?php echo asset_url() ?>images/img0098.png" id="Shape1"
					alt="" style="width: 11px; height: 48px;"></a>
			</div>
		</div>
		<div id="Layer7" class="section8">
			<div id="wb_Text7" class="style-2">
				<div id="wb_Image10" class="img-style">
							        <?php if($shipper['gaurantee_period'] !=''){?><img
						src="<?php echo asset_url(); ?>images/ts/community.png"
						id="Image1"> <?php }?>
						        </div>
				<div id="wb_Image2" class="img-style">
							    	<?php if($shipper['gaurantee_period'] !=''){?><img
						src="<?php echo asset_url(); ?>images/ts/guarantee.png"
						id="Image1"> <?php }?>
						        </div>
				<div id="wb_Image1" class="img-style">
							        <?php if($shipper['is_logo_verified'] !=''){?><img
						src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1"> <?php }?>
						        </div>
				<div id="wb_Image1" class="img-style">
									<?php if($shipper['plan_id'] > '1' && $shipper['plan_id'] > '1'){?><img
						src="<?php echo asset_url(); ?>images/ts/member-logo.png"
						id="Image1"><?php }?>
						        </div>
			</div>
			<div class="text-center">
				<div class="space33">
					<strong class="font-style-1">Shipper Type </strong>
					<p class="font-style-2"> <?php echo $shipper['sub_category'];?></p>
				</div>
				<div class="space33">
					<strong class="font-style-1"> <?php echo $shipper['company_country'];?> |  </strong>
					<p class="font-style-2"> <?php echo $shipper['company_province'];?></p>
				</div>
			</div>
		</div>

	</div>
</div>
<?php
	
}
} else {
	?>
<div class="col-lg-10 section11" id="Layer6"
	onmouseenter="ShowObjectWithEffect('Layer8', 1, 'slideright', 300, 'swing');return false;"
	onmouseleave="ShowObject('Layer5', 0);ShowObject('Layer8', 0);return false;">
	<h4 class="center">No Shipper Found!</h4>
</div>
<?php } ?>