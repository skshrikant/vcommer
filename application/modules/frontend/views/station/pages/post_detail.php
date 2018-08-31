<h3 class="background11" style="height:47px;padding:18px;width: 100%;display: inline-block;">
	<strong>Post Details</strong>
</h3>
<div class="row" style="margin:0px;margin-top:2px;">
	<div class="col-sm-11" id="Layer11" style="width: 505px;">
		<div class="cstyle5" style="background-color: #DCDCDC;margin: 5px -10px;padding: 0px 15px;"><strong><?php echo $allpost['title'];?></strong></div>
		<br> 
		<?php if(empty($allpost['contact_profile_image'])) {?>
		    <img src="<?php echo asset_url(); ?>images/buyerorange0.png" id="Shape54" alt="" class="img65" style="border-radius:50%;border:1px solid #ccc;">
		<?php } else {?>
			<img src="<?php echo asset_url(); ?><?php echo $allpost['contact_profile_image'];?>" id="Shape54" alt="" class="img65" style="border-radius:50%;border:1px solid #ccc;">
		<?php } ?>
		<strong class="cstyle1"><?php echo $allpost['prefix'].' '.$allpost['username'];?> &nbsp;|&nbsp; <?php echo $allpost['company_name'];?> </strong> <br>
		<div class="space1">
			<span class="cstyle4"><?php echo substr($allpost['postdesc'],0,400);?> <?php if(strlen($allpost['postdesc']) > 400){?>...<?php }?>
			</span> <br>
		</div>
		<?php 
					setlocale(LC_ALL, ''); // Locale will be different on each system.
					$locale = localeconv();
					if($allpost['postprice'] != "")
						$allpost['postprice'] = number_format($allpost['postprice'], 2, $locale['decimal_point'], $locale['thousands_sep']);
		?>
		<div class="center1 padding1">
			<?php if($allpost['user_category_id'] == 3){ ?>Target Price <?php } ?>
			<span class="cstyle2">&nbsp; USD <?php echo $allpost['postprice'];?>&nbsp;&nbsp;&nbsp; </span> <span
				class="cstyle3">&nbsp; <?php if($allpost['user_category_id'] == 3) { ?>Max.<?php }else{?>Min.<?php } ?> Order: <?php echo $allpost['postqty'];?>&nbsp;&nbsp;&nbsp; </span>
		</div>
		<?php if(!empty($allpost['image1'])) { ?>
			<img src="<?php echo asset_url(); ?><?php echo $allpost['image1'];?>" class="img500" alt="" style="width:100% !important;"><br><br>
		<?php } ?>
		<?php if(!empty($allpost['image2'])) { ?>
			<img src="<?php echo asset_url(); ?><?php echo $allpost['image2'];?>" class="img500" alt="" style="width:100% !important;"><br><br>
		<?php } ?>
		<?php if(!empty($allpost['image3'])) { ?>
			<img src="<?php echo asset_url(); ?><?php echo $allpost['image3'];?>" class="img500" alt="" style="width:100% !important;"><br><br>
		<?php } ?>
		<?php if(!empty($allpost['image4'])) { ?>
			<img src="<?php echo asset_url(); ?><?php echo $allpost['image4'];?>" class="img500" alt="" style="width:100% !important;"><br>
		<?php } ?>
	</div>
	<div class="col-sm-1" style="width:30px;padding:3px;margin-top: -45px;">
		<a href="#" onclick="ShowObject('mainLayer18', 0);return false;"> 
			<img src="<?php echo asset_url(); ?>images/close.png" id="Image14" alt="" class="img35 margin3">
		</a>
		<br> 
		<a href="javascript:addToMyFavourite(<?php echo $allpost['postid'];?>,9);" class="postfav"> 
			<img class="hover img35" alt="" src="<?php echo asset_url(); ?>images/community-icons/favorite-active.png" /> 
			<span><img alt="" src="<?php echo asset_url(); ?>images/community-icons/favorite.png" class="img35 margin3" /></span>
		</a>
		<br> 
		<?php if($allpost['busi_id'] != $busi_id) { ?>
		<a href="javascript:openEnquiryAndOfferForm(<?php echo $allpost['postid'];?>);" target="_self" class="postfav"> 
			<img class="hover img35" alt="" src="<?php echo asset_url(); ?>images/community-icons/reply-active.png" /> 
			<span><img alt="" src="<?php echo asset_url(); ?>images/community-icons/reply.png" class="img35 margin3" /></span>
		</a>
		<?php } else { ?>
		<a href="javascript:return false;" target="_self" class="postfav"> 
			<span><img alt="" src="<?php echo asset_url(); ?>images/community-icons/reply.png" class="img35 margin3" /></span>
		</a>
		<?php } ?>
		<br> 
		<a href="javascript:shareThePost(<?php echo $allpost['postid'];?>);" class="postfav">
			<img src="<?php echo asset_url(); ?>images/community-icons/share-active.png" alt="" class="hover img35" />
			<span><img alt="" src="<?php echo asset_url(); ?>images/community-icons/share.png" class="img35 margin3" /></span>
		</a>
		<br> 
		<a href="javascript:translateToLang();" class="postfav"> 
			<img class="hover img35" alt="" src="<?php echo asset_url(); ?>images/community-icons/translate-active.png" /> 
			<span><img alt="" src="<?php echo asset_url(); ?>images/community-icons/translate.png" class="img35 margin3" /></span>
		</a> 
		<br>
	</div>
</div>