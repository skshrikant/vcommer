<?php
if (count ( $Sellers ) > 0 && $Sellers [0] ['id'] != '') {
	foreach ( $Sellers as $key => $seller ) {
		?>
<div class="row" id="Layer4" style="margin: 0px; margin-bottom: 15px;"
	onmouseenter="ShowObjectWithEffect('Layer8_<?php echo $key;?>', 1, 'slideright', 300, 'swing');return false;"
	onmouseleave="ShowObject('Layer5_<?php echo $key;?>', 0);ShowObject('Layer8_<?php echo $key;?>', 0);return false;">
	<div class="col-md-3 col-sm-12 displaydesktop">
		<div id="SlideShow1" class="img22 mysellercarousel">
			<img class="image"
				src="<?php echo asset_url().$seller['info_img1'];?>" alt="" title="">
			<img class="image"
				src="<?php echo asset_url().$seller['info_img2'];?>"
				style="display: none;" alt="" title="">
		</div>
	</div>
	<div class="col-md-6 col-sm-12 space1">
		<div id="wb_Text8" class="section3">
			<div class="inline">
				<img src="<?php echo asset_url().$seller['profile_image']; ?>"
					class="img1" /> <span class="block"><strong class="font1"><a
						href="<?php echo base_url();?>desksite/<?php echo $seller['busi_id'];?>"
						target="_blank" class="style5"><?php echo $seller['company_name']?></a></strong>
					<br> Presented By: <?php echo $seller['name_prefix'].' '.$seller['name']; ?></span>
			</div>
			<p class="font5"><?php echo substr($seller['company_introduction'], '0', '250'); ?><br>
				<br>
				</span>
			</p>
		</div>
		<span><strong class="strong1">Main Products |</strong> <?php echo substr($seller['main_product'], '0', '100')?> ...</span>
		<div id="Layer5_<?php echo $key;?>"
			class="section10 row seller_Layer5">
			<div class="col-md-3">
				<div id="RollOver5" class="box1">
					<a
						href="<?php echo base_url();?>desksite/<?php echo $seller['busi_id'];?>"
						target="_blank"> <img class="hover" alt=""
						src="<?php echo asset_url() ?>images/Desktopblue.png"> <span><img
							alt="" src="<?php echo asset_url() ?>images/desktopicon.gif"></span>
					</a>
					<div id="wb_Text13" class="beauty1">
						<p class="textfont1">DESKSITE</p>
						<p class="textfont2">To View Seller Desktop Source products,
							Videos, Contact, Chat and much more..</p>
					</div>

				</div>
			</div>
			<div class="col-md-3">
					<?php if(!empty($seller['catalouge_id'])) { ?>
					 	<div id="RollOver21" class="box2">
					<a
						href="javascript:viewCatalogueBook(<?php echo $seller['catalouge_id'];?>);">
						<img class="hover" alt=""
						src="<?php echo asset_url() ?>images/vacticonblue.png"> <span><img
							alt="" src="<?php echo asset_url() ?>images/vacticonblack.png"></span>
					</a>
					<div id="wb_Text13" class="beauty1">
						<p class="textfont1">CATALOGUE</p>
						<p class="textfont2">To View Seller Products In a Quick Way..</p>
					</div>

				</div>
					<?php } else { ?>
						<div class="box2">
					<a href="#"> <span><img
							src="<?php echo asset_url() ?>images/vacticonblack.png"
							id="Image114" alt=""></span>
					</a>
					<div id="wb_Text13" class="beauty1">
						<p class="textfont1" style="color: #DCDCDC;">CATALOGUE</p>
						<p class="textfont2" style="color: #DCDCDC;">To View Seller
							Products In a Quick Way..</p>
					</div>

				</div>
					<?php } ?>
					</div>
			<div class="col-md-3">
				<div id="RollOver22" class="box3">
					<a
						href="javascript:addToMyFavourite(<?php echo $seller['busi_id'];?>,1);"
						target="_self"> <img class="hover" alt=""
						src="<?php echo asset_url() ?>images/videoaddtofav.png"> <span><img
							alt="Favourite"
							src="<?php echo asset_url() ?>images/favoriteclick.png"></span>
					</a>
					<div id="wb_Text13" class="beauty1">
						<p class="textfont1">ADD TO FAVOURITE</p>
						<p class="textfont2">To Save Seller in Your Favorite Box, So As
							You Will Be Able To View It Later On..</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">

				<div id="RollOver6" class="box4" onclick="chat_with(<?php echo $seller['user_id'];?>,<?php echo $seller['accept_chat'];?>)">
					<a> <img class="hover" alt=""
						src="<?php echo asset_url() ?>images/chatblue.png"> <span><img
							alt="" src="<?php echo asset_url() ?>images/chaTBLACK.png"></span>
					</a>
					<div id="wb_Text13" class="beauty1">
						<p class="textfont1">CHAT</p>
						<p class="textfont2">To Chat With Seller ..</p>
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
					src="<?php echo asset_url() ?>images/img1243.png" id="Shape1"
					alt="" style="width: 11px; height: 48px;"></a>
			</div>
		</div>
		<div id="Layer7" class="section8">
			<div id="wb_Text7" class="style-2">
				<div id="wb_Image10" class="img-style">
							        <?php if($seller['gaurantee_period'] !=''){?><img
						src="<?php echo asset_url(); ?>images/ts/community.png"
						id="Image1"> <?php }?>
						        </div>
				<div id="wb_Image2" class="img-style">
							    	<?php if($seller['gaurantee_period'] !=''){?><img
						src="<?php echo asset_url(); ?>images/ts/guarantee.png"
						id="Image1"> <?php }?>
						        </div>
				<div id="wb_Image1" class="img-style">
							        <?php if($seller['is_logo_verified'] !=''){?><img
						src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1"> <?php }?>
						        </div>
				<div id="wb_Image1" class="img-style">
									<?php if($seller['plan_id'] > '1' && $seller['plan_id'] > '1'){?><img
						src="<?php echo asset_url(); ?>images/ts/member-logo.png"
						id="Image1"><?php }?>
						        </div>
			</div>
			<div class="text-center">
				<div class="space33">
					<strong class="font-style-1">Seller Type </strong>
					<p class="font-style-2"> <?php echo $seller['sub_category'];?></p>
				</div>
				<div class="space33">
					<strong class="font-style-1"> <?php echo $seller['company_country'];?> |  </strong>
					<p class="font-style-2"> <?php echo $seller['company_province'];?></p>
				</div>
				<p class="left style-font-1">Rank</p>
				<div class="progress">
					<div class="progress-bar orange1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $seller['rank']?>%">
					</div>
				</div>
				<p class="font121">%<?php echo $seller['rank']?></p>
			</div>
		</div>
	</div>
</div>
<?php }}  else {?>
<div class="col-lg-10 section11" id="Layer6"
	onmouseenter="ShowObjectWithEffect('Layer8', 1, 'slideright', 300, 'swing');return false;"
	onmouseleave="ShowObject('Layer5', 0);ShowObject('Layer8', 0);return false;">
	<h4 class="center">No Seller Found!</h4>
</div>
<?php } ?>