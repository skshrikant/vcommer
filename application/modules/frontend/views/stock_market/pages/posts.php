<style>
p {
	 word-wrap: break-word;
	 text-align:left;
  }
</style>
<?php 
if(count($posts) > 0) {
	foreach ($posts as $key=>$product) {
?>
<div id="Layer281" class="section11 spacier" style="width: 982px;">
	<div class="row" id="Layer4">
		<div class="col-md-2 col-sm-12 grid">
			<?php if($product['is_locked'] && $product['catid'] == $tscategory_id) { ?>
			<img src="<?php echo asset_url(); ?>images/lock-profile.png" alt="" class="bstation-profile-pic" style="border:0px;"/> 
			<?php } else { ?>
			<img src="<?php echo asset_url(); ?><?php echo $product['profile_image'];?>" alt="" class="bstation-profile-pic" /> 
			<img src="<?php echo asset_url(); ?>images/flags/<?php echo $product['flag'];?>" id="Image297" alt="" class="flag"> <br>
			<?php } ?>
			<div>
				<?php if($product['is_locked'] && $product['catid'] == $tscategory_id) { ?>
				<strong class="country"><br> </strong>
				<?php } else { ?>
				<strong class="country"><?php echo $product['company_country'];?></strong>
				<?php } ?>
			</div>
			<div>
				<?php if($product['is_locked'] && $product['catid'] == $tscategory_id) { ?>
				<span class=""><br></span>
				<?php } else { ?>
				<span class=""><?php echo $product['company_province'];?></span>
				<?php } ?>
			</div>
			<!-- p class="date"><?php echo date("d M, Y", strtotime($product['create'])); ?></p-->
		</div>
		<div class="col-md-10" style="padding-right:0px;">
			<div class="col-md-8 col-sm-12 space1" style="padding-right: 0px !important;width:548px;">
				<div id="wb_Text8" class="section3">
					<span>
						<strong class="font1">
							<span class="style5"><?php echo $product['title'];?></span>
						</strong>
					</span>
					<p class="font5" style="height: 55px;"><?php echo substr($product['stockdesc'],0,270);?> <?php if(strlen($product['stockdesc']) > 270) { ?>...<?php } ?></p>
					<div class="inline">
					<?php if($product['catid'] == 1) { ?>
						<span class="usd">&nbsp; USD <?php echo $product['stockprice'];?>&nbsp;&nbsp;&nbsp; </span>
						<span class="minorder">&nbsp; Min. Order: <?php echo $product['stockqty'];?>&nbsp;&nbsp;&nbsp; </span>
					<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8">
						<br> <span>Boosted By: 
						<?php if($product['is_locked'] && $product['catid'] == $tscategory_id) { ?>
							User Blocked Access
						<?php } else { ?>
							<?php echo $product['contact_prefix'].' '.$product['contact_name'];?>
						<?php } ?>
						</span>
						<p style="color: #303030; font-family: Georgia; font-size: 12px; padding-top: 5px;">
							<?php if($product['is_locked'] && $product['catid'] == $tscategory_id) { ?>
								<span style="color:#1E90FF;font-family:Georgia;font-size:12px;"><strong>Company name is not available for <?php if($tscategory_id == 1) { ?>sellers<?php } elseif($tscategory_id == 2) { ?>shippers<?php } else { ?>buyers<?php } ?></strong></span>
							<?php } else { ?>
							<?php if($tscategory_id == 1) { ?>
							<a href="<?php echo base_url();?>desksite/<?php echo $product['busi_id'];?>" class="style5" target="_blank">
							<?php } else { ?> 
							<a href="<?php echo base_url();?>shipper/profile/<?php echo $product['busi_id'];?>" class="style5" target="_blank">
							<?php } ?>
								<b><?php echo $product['company_name'];?></b>
							</a>
							<?php } ?>
						</p>
					</div>
					<div class="col-sm-4 center">
					<?php if(!empty($product['community_id'])) { ?>
						<img src="<?php echo asset_url(); ?>images/CommMember.png" id="Image49" alt="" class="img25" /> 
					<?php } else { ?>
						<img src="<?php echo asset_url(); ?>images/CommMember.png" id="Image49" alt="" class="img25" style="opacity: 0.15;" /> 
					<?php } ?>
					<?php if($product['catid'] == 1) { ?>
					<?php if($product['plan_id'] > 1 && !empty($product['gaurantee_period'])) { ?>
						<img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image49" alt="" class="img25" style="width:34px !important;"/>
					<?php } else { ?>
						<img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image49" alt="" class="img25" style="opacity: 0.15;width:34px !important;" />
					<?php } ?>
					<?php } ?>
					<?php if($product['is_logo_verified'] > 1) { ?>
						<img src="<?php echo asset_url(); ?>images/trusted.png" id="Image49" alt="" class="img25" />
					<?php } else { ?>
						<img src="<?php echo asset_url(); ?>images/trusted.png" id="Image49" alt="" class="img25" style="opacity: 0.15;" />
					<?php } ?>
					<?php if($product['plan_id'] > 1) { ?>
						<img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image49" alt="" class="img25" />
					<?php } else { ?>
						<img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image49" alt="" class="img25" style="opacity: 0.15;" />
					<?php } ?>
					<br><br>
					<div>
						<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">AVAILABLE TILL </span>
						<span style="color:#B22222;font-family:Arial;font-size:12px;"><?php echo date("d M", strtotime('+14 days',strtotime($product['create']))); ?>.</span>
					</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12" style="padding-right:0px;width:227px;">
				<div class="tumb-slide" style="padding-left:4px;">
					<img src="<?php echo asset_url(); ?><?php echo $product['image1'];?>" class="imgresponsive img211">
					<div class="hover-thumb text-center">
						<?php if($product['is_locked'] && $product['catid'] == $tscategory_id) { ?>
						<img src="<?php echo asset_url(); ?>images/img1706.png" id="Shape3" alt="" style="width:92px; height:68px;margin-left:30px;">
						<?php } else { ?>
						<a href="#" onclick="ShowObjectWithEffect('Layer_sell_post_<?php echo $key;?>', 1, 'slideup', 500, 'swing');return false;">
							<img src="<?php echo asset_url(); ?>images/img0156.png" id="Shape3" alt="" style="width: 48px; height: 48px;">
						</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-10 col-md-offset-2" id="Layer_sell_post_<?php echo $key;?>" style="position: absolute; width: 835px; height: 385px; display: none; top: <?php echo (29+$key*206);?>px; padding: 0px;background-color: #FFFFFF;border: 1px #D3D3D3 solid;z-index:1;">
			<a href="#" onclick="ShowObjectWithEffect('Layer_sell_post_<?php echo $key;?>',0,'slideup',500);return false;" class="pull-right"> 
				<img src="<?php echo asset_url();?>images/close.png" id="Image16" alt="" style="width: 33px; height: 33px; float: right;">
			</a>
			<div class="row" style="margin: 0px; padding: 25px 0px;">
				<div class="col-md-3">
					<div class="row" style="margin: 0px; padding: 6px;">
						<div class="col-md-6 col-xs-6 col-sm-6" style="padding: 3px;">
							<?php if(!empty($product['image1'])) { ?>
							<a href="<?php echo asset_url(); ?><?php echo $product['image1'];?>" data-rel="myprettyPhoto_SlideShow<?php echo $key;?>[SlideShow<?php echo $key;?>]" title="<?php echo $product['title'];?>" rel="myprettyPhoto_SlideShow<?php echo $key;?>"> 
								<img alt="<?php echo $product['title'];?>" id="PhotoGallery1_img0" src="<?php echo asset_url(); ?><?php echo $product['image1'];?>" title="<?php echo $product['title'];?>" style="border: 1px solid #ccc; width: 77px; height: 63px;" />
							</a>
							<?php } ?>
						</div>
						<div class="col-md-6 col-xs-6 col-sm-6" style="padding: 3px;">
							<?php if(!empty($product['image2'])) { ?>
							<a href="<?php echo asset_url(); ?><?php echo $product['image2'];?>" data-rel="myprettyPhoto_SlideShow<?php echo $key;?>[SlideShow<?php echo $key;?>]" title="<?php echo $product['title'];?>" rel="myprettyPhoto_SlideShow<?php echo $key;?>">
								<img alt="<?php echo $product['title'];?>" id="PhotoGallery1_img0" src="<?php echo asset_url(); ?><?php echo $product['image2'];?>" title="<?php echo $product['title'];?>" style="border: 1px solid #ccc; width: 77px; height: 63px;" />
							</a>
							<?php } ?>
						</div>
						<div class="col-md-6 col-xs-6 col-sm-6" style="padding: 3px;">
							<?php if(!empty($product['image3'])) { ?>
							<a href="<?php echo asset_url(); ?><?php echo $product['image3'];?>" data-rel="myprettyPhoto_SlideShow<?php echo $key;?>[SlideShow<?php echo $key;?>]" title="<?php echo $product['title'];?>" rel="myprettyPhoto_SlideShow<?php echo $key;?>">
								<img alt="<?php echo $product['title'];?>" id="PhotoGallery1_img0" src="<?php echo asset_url(); ?><?php echo $product['image3'];?>" title="<?php echo $product['title'];?>" style="border: 1px solid #ccc; width: 77px; height: 63px;" />
							</a>
							<?php } ?>
						</div>
						<div class="col-md-6 col-xs-6 col-sm-6" style="padding: 3px;">
							<?php if(!empty($product['image4'])) { ?>
							<a href="<?php echo asset_url(); ?><?php echo $product['image4'];?>" data-rel="myprettyPhoto_SlideShow<?php echo $key;?>[SlideShow<?php echo $key;?>]" title="<?php echo $product['title'];?>" rel="myprettyPhoto_SlideShow<?php echo $key;?>">
								<img alt="<?php echo $product['title'];?>" id="PhotoGallery1_img0" src="<?php echo asset_url(); ?><?php echo $product['image4'];?>" title="<?php echo $product['title'];?>" style="border: 1px solid #ccc; width: 77px; height: 63px;" />
							</a>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="col-md-7" style="padding: 8px 0px;">
					<div id="Layer18" class="inline" style="width: 100%;">
						<div class="col-sm-8" style="padding-top: 7px;">
							<span class="fontstyle1"><strong><?php echo $product['title'];?></strong></span>
						</div>
						<div id="wb_CssMenu2" class="col-sm-4">
							<ul>
								<li class="firstmain">
									<a class="withsubmenu" href="#" target="_self">Translate</a>
									<ul>
										<li class="firstitem">
											<a href="#" target="_self">To&nbsp;my&nbsp;language</a>
										</li>
										<li class="lastitem">
											<a href="#" target="_self">To&nbsp;English</a>
										</li>
									</ul>
								</li>
							</ul>
							<br>
						</div>
					</div>
					<br> <span class="color1"><br><?php echo $product['stockdesc'];?></span>
				</div>
				<div class="col-md-2 p1" style="padding-left: 40px;">
				
					<?php if($product['busi_id'] != $busi_id) { ?>
					<div id="RollOver2" class="img45">
						<a href="javascript:openBuyerRequestForm(<?php echo $product['post_id'];?>,<?php echo $product['user_id'];?>);" target="_self"> 
							<img class="hover" alt="Send Inquiry" src="<?php echo asset_url(); ?>images/Active/inquirytomato.png" /> <span>
							<img alt="Send Inquiry" src="<?php echo asset_url(); ?>images/Link/inquirytomato.png"></span>
						</a>
					</div>
					<div id="RollOver2" class="img45">
						<a href="javascript:chat_with(<?php echo $product['user_id'];?>,<?php echo $contact_details[0]['accept_chat'];?>);" target="_self"> 
							<img class="hover" alt="Chat" src="<?php echo asset_url(); ?>images/Active/chat_button2.png" /> <span>
							<img alt="Chat" src="<?php echo asset_url(); ?>images/Link/chat_button2.png" /></span>
						</a>
					</div>
					<div id="RollOver5" class="img45">
						<a href="<?php if($contact_details[0]['accept_community'] == 1) { ?>javascript:addToCommunity(<?php echo $product['busi_id'];?>);<?php } else { ?>javascript:addToMyCommunityAlert();<?php } ?>" target="_blank"> 
							<img class="hover" alt="Add To My Community" src="<?php echo asset_url(); ?>images/Active/addcommunity_button2.png" />
							<span><img alt="Add To My Community" src="<?php echo asset_url(); ?>images/Link/addcommunity_button2.png" /></span>
						</a>
					</div>
					<div id="RollOver1" class="img45">
						<?php if($product['catid'] == 1) { ?>
						<a href="<?php echo base_url();?>desksite/<?php echo $product['busi_id'];?>" target="_blank"> 
						<?php } else if($product['catid'] == 2) { ?>
							<a href="<?php echo base_url();?>shipper/profile/<?php echo $product['busi_id'];?>" target="_blank">
						<?php } else { ?>
							<a href="<?php echo base_url();?>buyer/profile/<?php echo $product['busi_id'];?>" target="_blank">
						<?php } ?>
							<img class="hover" alt="Visit Home Page" src="<?php echo asset_url(); ?>images/Active/desksite-dorange.png" /> 
							<span><img alt="Visit Home Page" src="<?php echo asset_url(); ?>images/Link/desksite-dorange.png" /></span>
						</a>
					</div>
				<?php } else { ?>
					<div id="RollOver2" class="img45">
						<a href="javascript:noAccessAlert();" target="_self"> 
							<img alt="Send Inquiry" src="<?php echo asset_url(); ?>images/Link/inquirytomato.png" style="opacity:0.15;"/>
						</a>
					</div>
					<div id="RollOver2" class="img45">
						<a href="javascript:noAccessAlert();" target="_self"> 
							<img alt="Chat" src="<?php echo asset_url(); ?>images/Link/chat_button2.png" style="opacity:0.15;"/>
						</a>
					</div>
					<div id="RollOver5" class="img45">
						<a href="javascript:noAccessAlert();" target="_blank">
							<img alt="Add To My Community" src="<?php echo asset_url(); ?>images/Link/addcommunity_button2.png" style="opacity:0.15;"/>
						</a>
					</div>
					<div id="RollOver1" class="img45">
						<a href="javascript:noAccessAlert();" target="_blank">
							<img alt="Visit Home Page" src="<?php echo asset_url(); ?>images/Link/desksite-dorange.png" style="opacity:0.15;"/>
						</a>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$("a[data-rel='myprettyPhoto_SlideShow<?php echo $key;?>[SlideShow<?php echo $key;?>]']").attr('rel', 'myprettyPhoto_SlideShow<?php echo $key;?>[SlideShow<?php echo $key;?>]');
$("a[rel^='myprettyPhoto_SlideShow<?php echo $key;?>']").prettyPhoto({theme:'facebook',social_tools:false});
function openBuyerRequestForm(postid,userid) {
	<?php if($tscategory_id != 3) { ?>
	customAlert("Sorry.. Only buyers have access to send inquiry to seller/shipper posts.");
	<?php } else { ?>
	<?php if($contact_details[0]['accept_offer'] == 1 && $contact_details[0]['accept_email'] == 1 && $contact_details[0]['step'] == 2) { ?>
		popupwnd('<?php echo base_url();?>stockmarket/buyer_request/'+postid+'/'+userid,'no','no','no','yes','yes','no','600','50','555','750')
	<?php } else if($contact_details[0]['step'] < 2) { ?>
		customAlert('Sorry.. You have to create you Desksite to send posts or communicate with our members.. It\'s so easy .. just follow the steps shown here-under:<br> 1. Login and click on your profile image, then select Continue.<br> 2. Complete your registration till we create your Station.<br> 3. In " My Station" click on " My Desksite" and follow the steps to build it.');
	<?php } else if($contact_details[0]['accept_offer'] == 0 || $contact_details[0]['accept_email'] == 0) { ?>
		customAlert('Oops.. You are not able to sent a post.. It seems that you have turned the features (Receive Elite Manufactures Offers & Members contact request) OFF.. Please go to " My Station", then click on "Tools" icon, and select " Control Pannel", then Turn these features ON.');
	<?php } ?>
	<?php } ?>
}

function openChat(seller_id,accept_chat=true) {
	if(accept_chat == 1) {
		jqcc.cometchat.chatWith(seller_id);
        document.getElementById('cometchat_chatboxes').style.right='0px';
	} else {
		customAlert('Oops.. It seems that you have turned this feature OFF.. Please go to “ My Station”, then click on “Tools” icon, and select “ Control Panel”, then Turn it ON….');
	}
}
function addToMyCommunityAlert() {
	customAlert('Oops.. It seems that you have turned this feature OFF.. Please go to " My Station", then click on "Tools" icon, and select " Control Panel", then Turn it ON.');
}
function noAccessAlert() {
	customAlert("Oops… You are not supposed to reply your own post..!!");
}
function addToCommunity(id) {
	$.get(base_url+"addtomycommunity/"+id,{},function(data) {
		if(data.status == 1) {
			customAlert(data.msg);
		} else {
			customAlert(data.msg);
		}
	},'json');
}

</script>
<?php 
	} 
}  else { 

?>
<div class="row" style="width: 300px; margin: 0px;">
	<h4 class="text-left">No Posts Added!</h4>
</div>
<?php 
}
?>