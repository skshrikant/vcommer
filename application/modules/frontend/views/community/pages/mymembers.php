<?php foreach($communitymember as $member) {?>
<div class="memberclass1  hover3" style="padding-left:5px;">
	<input type="hidden" class="comm_member_id" value="<?php echo $member['mbid'];?>"/>
	<div class="col-sm-3 image-cover">
		<img src="<?php echo asset_url(); ?><?php if(!empty($member['memberimg'])) { echo $member['memberimg'];} else { echo "images/img3470.png";}?>" id="Image28" alt="" class="memberimg">
		<?php if($member['messages'] > 0) { ?>
		<span class="notification"><?php echo $member['messages'];?></span>
		<?php } ?>
	</div>
	<div class="col-sm-9 padding-top-10">
		<?php if($member['user_category_id'] == 1 || $member['user_category_id'] == 2) { ?>
		<img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image10" alt="" class="img25" style="opacity:<?php if($member['plan_id'] > 1) { ?>1<?php } else { ?>0.15<?php } ?>;"/>
		<?php } else if($member['user_category_id'] == 3) { ?>
		<img src="<?php echo asset_url(); ?>images/Active.png" id="Image10" alt="" class="img25" style="opacity:<?php if($member['is_active'] >= 3) { ?>1<?php } else { ?>0.15<?php } ?>;"/>
		<?php } ?>
		<img src="<?php echo asset_url(); ?>images/trusted.png" id="Image10" alt="" class="img25" style="opacity:<?php if($member['is_logo_verified'] > 1) { ?>1<?php } else { ?>0.15<?php } ?>;"/>
		<?php if($member['user_category_id'] == 1) { ?>
		<img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image10" alt="" class="img25" style="width:30px !important;opacity:<?php if($member['plan_id'] > 1 && $member['gaurantee_period'] !=''){ ?>1<?php } else { ?>0.15<?php }?>;"/>
		<?php } else if($member['user_category_id'] == 3) { 
		$buyer_request = $member['stock_buyer_count']+$member['bstation_post_count']; ?>
		<img src="<?php echo asset_url(); ?>images/buyer-request.png" id="Image10" alt="" class="img25" style="width:30px !important;opacity:<?php if($buyer_request > 0){ ?>1<?php } else { ?>0.15<?php }?>;"/>
		<?php } ?>
		<p class="membername"><?php echo $member['membername'];?></p>
		<p class="membername"><?php echo $member['cname'];?></p>
		<p class="memposition"><?php echo $member['subcategory'];?></p>
		<p class="memposition"><?php echo $member['country'].' | '.$member['city'];?></p>
	</div>
</div>
<?php } ?>
<?php if(count($communitymember) <= 0) { ?>
<h4 class="center" style="margin-top:50px;padding: 60px 30px;text-align: left;">
	<span style="color:#000000;font-family:Arial;font-size:13px;">
		<strong>You don’t have members in your community.. </strong>
		<br><br>
		To add members, click on the suitable business type “ Sellers, Shippers, Buyers” shown under “ Add Member” in The Toolbox..<br><br>
		In the related page, search for a certain members meet your requirement, view his Desksite, then click “Contact and select Add To My Community”..
		<br><br>
	</span>
</h4>
<?php } ?>