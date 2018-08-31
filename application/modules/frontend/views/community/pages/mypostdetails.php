<?php 
	if (count ( $myposts ) > 0 && $myposts [0] ['id'] != '') {
		foreach ( $myposts as $key=>$mypost ) {
	?>
	<!-- post details -->
	<div class="Layer18" id="delLayer18_<?php echo $key;?>" style="position: absolute; text-align: left; visibility: hidden; right:15px; top: 1px; width: 545px; height: 804px; z-index: 587;background: rgba(0,0,0,0.6);">
		<h3 class="background11" style="height:47px;padding:18px;">
			<strong>Post Details</strong>
		</h3>
		<div class="row" style="margin:0px;margin-top:2px;">
			<div class="col-sm-11" id="Layer11" style="width: 505px;">
				<span class="cstyle5" style="background-color: #DCDCDC;margin: 5px -10px;padding: 0px 15px;"><strong><?php echo $mypost['title'];?></strong></span>
				<br> 
				<?php if(empty($userinfo[0]['profile_image'])) {?>
				    <img src="<?php echo asset_url(); ?>images/buyerorange0.png" id="Shape54" alt="" class="img65" style="border-radius:50%;border:1px solid #ccc;">
				<?php } else {?>
					<img src="<?php echo asset_url(); ?><?php echo $userinfo[0]['profile_image'];?>" id="Shape54" alt="" class="img65" style="border-radius:50%;border:1px solid #ccc;">
				<?php } ?>
				<strong class="cstyle1"><?php echo $mypost['prefix'].' '.$mypost['username'];?> &nbsp;|&nbsp; <?php echo $mypost['company_name'];?> </strong> <br>
				<div class="space1">
					<span class="cstyle4"><?php echo substr($mypost['postdesc'],0,400);?> <?php if(strlen($mypost['postdesc']) > 400){?>...<?php }?>
					</span> <br>
				</div>
				<?php 
					setlocale(LC_ALL, ''); // Locale will be different on each system.
					$locale = localeconv();
					if($mypost['postprice'] != "")
						$mypost['postprice'] = number_format($mypost['postprice'], 2, $locale['decimal_point'], $locale['thousands_sep']);
				?>
				<div class="center1 padding1"><?php if($mypost['user_category_id'] == 3){ ?>Target Price <?php } ?>
					<span class="cstyle2">&nbsp; USD <?php echo $mypost['postprice'];?>&nbsp;&nbsp;&nbsp; </span> <span
						class="cstyle3">&nbsp; <?php if($mypost['user_category_id'] == 3) { ?>Max.<?php }else{?>Min.<?php } ?> Order: <?php echo $mypost['postqty'];?>&nbsp;&nbsp;&nbsp; </span>
				</div>
				<?php if(!empty($mypost['image1'])) { ?>
				<img src="<?php echo asset_url(); ?><?php echo $mypost['image1'];?>" class="img500" alt="" style="width:100% !important;"><br><br>
				<?php } ?>
				<?php if(!empty($mypost['image2'])) { ?>
				<img src="<?php echo asset_url(); ?><?php echo $mypost['image2'];?>" class="img500" alt="" style="width:100% !important;"><br><br>
				<?php } ?>
				<?php if(!empty($mypost['image3'])) { ?>
				<img src="<?php echo asset_url(); ?><?php echo $mypost['image3'];?>" class="img500" alt="" style="width:100% !important;"><br><br>
				<?php } ?>
				<?php if(!empty($mypost['image4'])) { ?>
				<img src="<?php echo asset_url(); ?><?php echo $mypost['image4'];?>" class="img500" alt="" style="width:100% !important;"><br>
				<?php } ?>
			</div>
			<div class="col-sm-1" style="width:30px;padding:3px;margin-top: -45px;">
				<a href="#" onclick="ShowObject('delLayer18_<?php echo $key;?>', 0);return false;"> 
					<img src="<?php echo asset_url(); ?>images/close.png" id="Image14" alt="" class="img35 margin3">
				</a>
				<br> 
				<a href="javascript:addToMyFavourite(<?php echo $mypost['postid'];?>,9);"> 
					<img class="hover img35" alt="" src="<?php echo asset_url(); ?>images/community-icons/favorite-active.png" /> 
					<span><img alt="" src="<?php echo asset_url(); ?>images/community-icons/favorite.png" class="img35 margin3" /></span>
				</a>
				<br> 
				<?php if($mypost['busi_id'] != $busi_id) { ?>
				<a href="javascript:openEnquiryAndOfferForm(<?php echo $mypost['postid'];?>);" target="_self"> 
					<img class="hover img35" alt="" src="<?php echo asset_url(); ?>images/community-icons/reply-active.png" /> 
					<span><img alt="" src="<?php echo asset_url(); ?>images/community-icons/reply.png" class="img35 margin3" /></span>
				</a>
				<?php } else { ?>
				<a href="javascript:return false;" target="_self"> 
					<span><img alt="" src="<?php echo asset_url(); ?>images/community-icons/reply.png" class="img35 margin3" style="opacity:0.5;"/></span>
				</a>
				<?php } ?>
				<br> 
				<a href="javascript:shareThePost(<?php echo $mypost['postid'];?>);">
					<img src="<?php echo asset_url(); ?>images/community-icons/share-active.png" alt="" class="hover img35" />
					<span><img alt="" src="<?php echo asset_url(); ?>images/community-icons/share.png" class="img35 margin3" /></span>
				</a>
				<br> 
				<a href="javascript:translateToLang();"> 
					<img class="hover img35" alt="" src="<?php echo asset_url(); ?>images/community-icons/translate-active.png" /> 
					<span><img alt="" src="<?php echo asset_url(); ?>images/community-icons/translate.png" class="img35 margin3" /></span>
				</a> 
				<br>
			</div>
		</div>
	</div>
	<?php 
		}
	}
	?>