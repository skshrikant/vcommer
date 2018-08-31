<div class="panel-heading custom-panel-heading">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-4" style="text-align: left; padding-top: 13px;">
				<span style="color:#A9A9A9;font-family:Georgia;font-size:19px;">Community Add Requests</span>
			</div>
			<div class="col-md-7" style="text-align: left;" >
				<a href="javascript:openCommunityInvites();" class="btn btn-default btn-custom alerts-btn alerts-btn-selected"   id="addcominityrequest_btn" style="width: 200px !important;">Members Like to add you</a>
  				<a href="javascript:openMyInvites();" class="btn btn-default btn-custom alerts-btn" id="communityinvitation_btn" style="width: 200px !important;">Members you like to add them</a>
			</div>
			<div class="col-md-1" style="text-align: right">
				<span class="pull-right-close" style="text-align: right"><a href="javascript:closeAlert();" class="btn-custom-close">X</a></span>
			</div>
		</div>
	</div>		
	</div>
<div class="panel-body panel-body-custom" style="padding-top: 15px;height:703px;" id="request_to_me"><br>
<div class="row">
	<div class="col-md-12" style="text-align: left">
		<span style="color:#F05539;font-family:Arial;font-size:32px;" id="req"><?php echo count($sendcommunityrequest);?>   </span>
		<span style="color:#696969;font-family:Arial;font-size:12px;">Requests</span>
	</div>
</div><br>
<div class="row">
	<div class="col-md-12" style="text-align: left">
		<span id="request_type" style="color:#696969;font-family:Arial;font-size:12px;">You have been received requests from the following members to add you to their business community&nbsp; </span>
	</div>
</div><br><br>

<?php $i =1;
foreach($sendcommunityrequest as $key=>$seller) { ?>
	<?php 
		$burl = "";
		if($seller['user_category_id'] == 1) { 
			$burl = "desksite/".$seller['id'];
		} elseif ($seller['user_category_id'] == 2) {
			$burl = "shipper/profile/".$seller['id'];
		} elseif ($seller['user_category_id'] == 3) {
			$burl = "buyer/profile/".$seller['id'];
		}
			
	?>
		<div id="wb_Text365" style="width:850px;height:18px;z-index:598;text-align:center;">
			<span style="color:#303030;font-family:Arial;font-size:11px;"><?php if(date('Y-m-d',strtotime($seller['added_date'])) == date('Y-m-d')){ ?>Today<?php } else { echo date('d M Y',strtotime($seller['added_date'])); }?>&nbsp; | <?php echo date('H:i',strtotime($seller['added_date']));?></span>
		</div>
		<div id="Layer-contact-<?php echo $key;?>" style="position:relative;text-align:left;left:51px;top:0px;width:957px;height:162px;z-index:1375;" onmouseenter="ShowObjectWithEffect('Layer-button-<?php echo $key;?>', 1, 'slideright', 300, 'swing');return false;" onmouseleave="ShowObject('Layer222-<?php echo $key;?>', 0);ShowObject('Layer-button-<?php echo $key;?>', 0);return false;">
			<div id="Layer220" style="position:absolute;text-align:left;left:2px;top:1px;width:774px;height:143px;z-index:1368;">
				<div id="wb_Text748" style="position:absolute;left:74px;top:20px;width:351px;height:16px;z-index:1357;text-align:left;">
					<span style="color:#303030;font-family:Georgia;font-size:15px;"><strong><a href="<?php echo base_url().$burl;?>" target="_blank" class="style5"><?php echo $seller['company_name'];?></a></strong></span>
				</div>
				<div id="Layer221" style="position:absolute;text-align:left;left:554px;top:0px;width:218px;height:141px;z-index:1358;padding-top: 10px;">
					<div style="text-align:center;padding-top: 10px;">
						<span style="color:#303030;font-family:Georgia;font-size:12px;"><strong><?php if($seller['user_category_id'] == 1) { ?>Seller<?php } elseif ($seller['user_category_id'] == 2) { ?>Shipper<?php } else{ ?>Buyer<?php } ?>&nbsp; |</strong></span>
						<span style="color:#808080;font-family:Georgia;font-size:12px;"><?php echo $seller['sub_category'];?></span>
					</div>
					<div style="text-align:center;padding-top: 10px;">
						<span style="color:#303030;font-family:Georgia;font-size:12px;"><strong><?php echo $seller['company_country'];?> | </strong></span>
						<span style="color:#808080;font-family:Georgia;font-size:12px;"><?php echo $seller['company_province'];?></span>
					</div>
					<div style="text-align:center;padding-top: 10px;">
						<span style="color:#303030;font-family:Georgia;font-size:11px;"><strong>Annual Trade Volume&nbsp; </strong></span>
					</div>
					<div style="text-align:center;">
						<span style="color:#808080;font-family:Arial;font-size:12px;"><?php echo $seller['annual_trad_volume'];?> Container / Year</span>
					</div>
				</div>
				<?php if($seller['user_category_id'] == 2) { ?>
				<div id="wb_Text756" style="position:absolute;left:22px;top:82px;width:130px;height:16px;z-index:1359;text-align:left;">
					<span style="color:#303030;font-family:Georgia;font-size:13px;"><strong>Main Services | </strong></span>
				</div>
				<div id="wb_Text757" style="position:absolute;left:144px;top:82px;width:400px;height:16px;z-index:1360;text-align:left;">
					<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><?php echo substr($seller['mainservices'],0,130);?><?php if(strlen($seller['mainproducts']) > 130){ ?>...<?php } ?></span>
				</div>
				<?php } else { ?>
				<div id="wb_Text756" style="position:absolute;left:22px;top:82px;width:130px;height:16px;z-index:1359;text-align:left;">
					<span style="color:#303030;font-family:Georgia;font-size:13px;"><strong>Main Products | </strong></span>
				</div>
				<div id="wb_Text757" style="position:absolute;left:144px;top:82px;width:400px;height:16px;z-index:1360;text-align:left;">
					<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><?php echo substr($seller['mainproducts'],0,130);?><?php if(strlen($seller['mainproducts']) > 130){ ?>...<?php } ?></span>
				</div>
				<?php } ?>
				<div id="wb_Text759" style="position:absolute;left:75px;top:41px;width:250px;height:16px;z-index:1361;text-align:left;">
					<span style="color:#4B4B4B;font-family:Arial;font-size:12px;">Presented By: <?php echo $seller['name_prefix'];?> <?php echo $seller['name'];?></span>
				</div>
				<div id="wb_Shape2" style="position:absolute;left:19px;top:14px;width:45px;height:45px;z-index:1362;">
					<img src="<?php echo asset_url();?><?php echo $seller['profile_image']?>" id="Shape2" alt="" style="width:45px;height:45px;border-radius:50%;border:2px solid #ccc;">
				</div>
				<?php if($seller['user_category_id'] == 3) { ?>
					<div id="wb_Image121" style="position:absolute;left:400px;top:16px;width:25px;height:25px;z-index:1363;">
						<img src="<?php echo asset_url();?>images/CommMember.png" id="Image121" alt="">
					</div>
					<?php if($seller['have_request'] > 0){?>
					<div id="wb_Image122" style="position:absolute;left:430px;top:14px;width:30px;height:30px;z-index:1364;">
						<img src="<?php echo asset_url();?>images/buyer-request.png" id="Image122" alt="">
					</div>
					<?php } else { ?>
					<div id="wb_Image122" style="position:absolute;left:430px;top:14px;width:30px;height:30px;z-index:1364;">
						<img src="<?php echo asset_url();?>images/buyer-request.png" id="Image122" alt="" style="opacity:0.15;">
					</div>
					<?php } ?>
					<?php if(($seller['accept_chat'] + $seller['accept_offer'] + $seller['accept_community'] + $seller['accept_email']) > 2) { ?>
					<div id="wb_Image123" style="position:absolute;left:470px;top:16px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/Active.png" id="Image123" alt="">
					</div>
					<?php } else { ?>
					<div id="wb_Image123" style="position:absolute;left:470px;top:16px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/Active.png" id="Image123" alt="" style="opacity:0.15;">
					</div>
					<?php } ?>
					<?php if($seller['is_logo_verified'] > 1){?>
					<div id="wb_Image123" style="position:absolute;left:510px;top:16px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/ts/trusted.png" id="Image123" alt="">
					</div>
					<?php } else { ?>
					<div id="wb_Image123" style="position:absolute;left:510px;top:16px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/ts/trusted.png" id="Image123" alt="" style="opacity:0.15;">
					</div>
					<?php } ?>
				<?php } elseif ($seller['user_category_id'] == 2) { ?>
					<div id="wb_Image121" style="position:absolute;left:427px;top:16px;width:25px;height:25px;z-index:1363;">
						<img src="<?php echo asset_url();?>images/CommMember.png" id="Image121" alt="">
					</div>
					<?php if($seller['is_logo_verified'] > 1){?>
					<div id="wb_Image122" style="position:absolute;left:459px;top:14px;width:30px;height:30px;z-index:1364;">
						<img src="<?php echo asset_url();?>images/ts/trusted.png" id="Image122" alt="">
					</div>
					<?php } else { ?>
					<div id="wb_Image122" style="position:absolute;left:459px;top:14px;width:30px;height:30px;z-index:1364;">
						<img src="<?php echo asset_url();?>images/ts/trusted.png" id="Image122" alt="" style="opacity:0.15;">
					</div>
					<?php } ?>
					<?php if($seller['plan_id'] > 1) { ?>
					<div id="wb_Image123" style="position:absolute;left:500px;top:14px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/ts/member-logo.png" id="Image123" alt="">
					</div>
					<?php } else { ?>
					<div id="wb_Image123" style="position:absolute;left:500px;top:14px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/ts/member-logo.png" id="Image123" alt="" style="opacity:0.15;">
					</div>
					<?php } ?>
				<?php } elseif ($seller['user_category_id'] == 1) { ?>
					<div id="wb_Image121" style="position:absolute;left:400px;top:16px;width:25px;height:25px;z-index:1363;">
						<img src="<?php echo asset_url();?>images/CommMember.png" id="Image121" alt="">
					</div>
					<?php if($seller['plan_id'] > 1 && $seller['gaurantee_period'] !=''){?>
					<div id="wb_Image122" style="position:absolute;left:430px;top:14px;width:30px;height:30px;z-index:1364;">
						<img src="<?php echo asset_url();?>images/ts/guarantee.png" id="Image122" alt="">
					</div>
					<?php } else { ?>
					<div id="wb_Image122" style="position:absolute;left:430px;top:14px;width:38px;height:30px;z-index:1364;">
						<img src="<?php echo asset_url();?>images/ts/guarantee.png" id="Image122" alt="" style="opacity:0.15;">
					</div>
					<?php } ?>
					<?php if($seller['is_logo_verified'] > 1) { ?>
					<div id="wb_Image123" style="position:absolute;left:470px;top:14px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/ts/trusted.png" id="Image123" alt="">
					</div>
					<?php } else { ?>
					<div id="wb_Image123" style="position:absolute;left:470px;top:14px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/ts/trusted.png" id="Image123" alt="" style="opacity:0.15;">
					</div>
					<?php } ?>
					<?php if($seller['plan_id'] > 1){?>
					<div id="wb_Image123" style="position:absolute;left:505px;top:14px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/ts/member-logo.png" id="Image123" alt="">
					</div>
					<?php } else { ?>
					<div id="wb_Image123" style="position:absolute;left:505px;top:14px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/ts/member-logo.png" id="Image123" alt="" style="opacity:0.15;">
					</div>
					<?php } ?>
				<?php } ?>
			</div>
			<div id="Layer-button-<?php echo $key;?>" style="position: absolute; text-align: left; visibility: hidden; left: 778px; top: 1px; width: 177px; height: 145px; z-index: 1369;">
				<div id="wb_Shape3" style="position:absolute;left:23px;top:76px;width:170px;height:31px;z-index:1366;">
					<a href="javascript:deleteCommunityRequest(<?php echo $seller['community_id'];?>,'Layer-contact-<?php echo $key;?>','req');" class="bluebtn">
						Ignore & Delete
					</a>
				</div>
				<div id="wb_Shape292" style="position:absolute;left:23px;top:36px;width:170px;height:31px;z-index:1367;">
					<a href="javascript:acceptCommunityRequest(<?php echo $seller['community_id'];?>,'Layer-contact-<?php echo $key;?>','req');" class="bluebtn">
						Accept
					</a>
				</div>
			</div>
		</div>
		<?php $i++; } ?>
	</div>	
		
	<div class="panel-body panel-body-custom" style="padding-top: 15px;display:none;height:650px;" id="request_by_me"><br>
		<div class="row">
			<div class="col-md-12" style="text-align: left">
				<span style="color:#F05539;font-family:Arial;font-size:32px;" id="vreq"><?php echo count($mycommunityrequest);?>   </span>
				<span style="color:#696969;font-family:Arial;font-size:12px;">Requests</span>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-12" style="text-align: left">
				<span id="request_type" style="color:#696969;font-family:Arial;font-size:12px;">You have been sent requests to the following members to add you to their business community&nbsp; </span>
			</div>
		</div><br><br>
	
		<?php $i =1;
		foreach($mycommunityrequest as $key=>$seller) { ?>
			<?php 
				$burl = "";
				if($seller['user_category_id'] == 1) { 
					$burl = "desksite/".$seller['id'];
				} elseif ($seller['user_category_id'] == 2) {
					$burl = "shipper/profile/".$seller['id'];
				} elseif ($seller['user_category_id'] == 3) {
					$burl = "buyer/profile/".$seller['id'];
				}
					
			?>
		<div id="wb_Text365" style="width:850px;height:18px;z-index:598;text-align:center;">
			<span style="color:#303030;font-family:Arial;font-size:11px;"><?php if(date('Y-m-d',strtotime($seller['added_date'])) == date('Y-m-d')){ ?>Today<?php } else { echo date('d M Y',strtotime($seller['added_date'])); }?>&nbsp; | <?php echo date('H:i',strtotime($seller['added_date']));?></span>
		</div>
		<div id="VLayer-contact-<?php echo $key;?>" style="position:relative;text-align:left;left:51px;top:0px;width:957px;height:162px;z-index:1375;" onmouseenter="ShowObjectWithEffect('VLayer-button-<?php echo $key;?>', 1, 'slideright', 300, 'swing');return false;" onmouseleave="ShowObject('Layer222-<?php echo $key;?>', 0);ShowObject('VLayer-button-<?php echo $key;?>', 0);return false;">
			<div id="Layer220" style="position:absolute;text-align:left;left:2px;top:1px;width:774px;height:143px;z-index:1368;">
				<div id="wb_Text748" style="position:absolute;left:74px;top:20px;width:351px;height:16px;z-index:1357;text-align:left;">
					<span style="color:#303030;font-family:Georgia;font-size:15px;"><strong><a href="<?php echo base_url().$burl;?>" target="_blank" class="style5"><?php echo $seller['company_name'];?></a></strong></span>
				</div>
				<div id="Layer221" style="position:absolute;text-align:left;left:554px;top:0px;width:218px;height:141px;z-index:1358;padding-top: 10px;">
					<div style="text-align:center;padding-top: 10px;">
						<span style="color:#303030;font-family:Georgia;font-size:12px;"><strong><?php if($seller['user_category_id'] == 1) { ?>Seller<?php } elseif ($seller['user_category_id'] == 2) { ?>Shipper<?php } else{ ?>Buyer<?php } ?>&nbsp; |</strong></span>
						<span style="color:#808080;font-family:Georgia;font-size:12px;"><?php echo $seller['sub_category'];?></span>
					</div>
					<div style="text-align:center;padding-top: 10px;">
						<span style="color:#303030;font-family:Georgia;font-size:12px;"><strong><?php echo $seller['company_country'];?> | </strong></span>
						<span style="color:#808080;font-family:Georgia;font-size:12px;"><?php echo $seller['company_province'];?></span>
					</div>
					<div style="text-align:center;padding-top: 10px;">
						<span style="color:#303030;font-family:Georgia;font-size:11px;"><strong>Annual Trade Volume&nbsp; </strong></span>
					</div>
					<div style="text-align:center;">
						<span style="color:#808080;font-family:Arial;font-size:12px;"><?php echo $seller['annual_trad_volume'];?> Container / Year</span>
					</div>
				</div>
				<?php if($seller['user_category_id'] == 2) { ?>
				<div id="wb_Text756" style="position:absolute;left:22px;top:82px;width:130px;height:16px;z-index:1359;text-align:left;">
					<span style="color:#303030;font-family:Georgia;font-size:13px;"><strong>Main Services | </strong></span>
				</div>
				<div id="wb_Text757" style="position:absolute;left:144px;top:82px;width:400px;height:16px;z-index:1360;text-align:left;">
					<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><?php echo substr($seller['mainservices'],0,130);?><?php if(strlen($seller['mainproducts']) > 130){ ?>...<?php } ?></span>
				</div>
				<?php } else { ?>
				<div id="wb_Text756" style="position:absolute;left:22px;top:82px;width:130px;height:16px;z-index:1359;text-align:left;">
					<span style="color:#303030;font-family:Georgia;font-size:13px;"><strong>Main Products | </strong></span>
				</div>
				<div id="wb_Text757" style="position:absolute;left:144px;top:82px;width:400px;height:16px;z-index:1360;text-align:left;">
					<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><?php echo substr($seller['mainproducts'],0,130);?><?php if(strlen($seller['mainproducts']) > 130){ ?>...<?php } ?></span>
				</div>
				<?php } ?>
				<div id="wb_Text759" style="position:absolute;left:75px;top:41px;width:250px;height:16px;z-index:1361;text-align:left;">
					<span style="color:#4B4B4B;font-family:Arial;font-size:12px;">Presented By: <?php echo $seller['name_prefix'];?> <?php echo $seller['name'];?></span>
				</div>
				<div id="wb_Shape2" style="position:absolute;left:19px;top:14px;width:45px;height:45px;z-index:1362;">
					<img src="<?php echo asset_url();?><?php echo $seller['profile_image']?>" id="Shape2" alt="" style="width:45px;height:45px;border-radius:50%;border:2px solid #ccc;">
				</div>
				<?php if($seller['user_category_id'] == 3) { ?>
					<div id="wb_Image121" style="position:absolute;left:400px;top:16px;width:25px;height:25px;z-index:1363;">
						<img src="<?php echo asset_url();?>images/CommMember.png" id="Image121" alt="">
					</div>
					<?php if($seller['have_request'] > 0){?>
					<div id="wb_Image122" style="position:absolute;left:430px;top:14px;width:30px;height:30px;z-index:1364;">
						<img src="<?php echo asset_url();?>images/buyer-request.png" id="Image122" alt="">
					</div>
					<?php } else { ?>
					<div id="wb_Image122" style="position:absolute;left:430px;top:14px;width:30px;height:30px;z-index:1364;">
						<img src="<?php echo asset_url();?>images/buyer-request.png" id="Image122" alt="" style="opacity:0.15;">
					</div>
					<?php } ?>
					<?php if(($seller['accept_chat'] + $seller['accept_offer'] + $seller['accept_community'] + $seller['accept_email']) > 2) { ?>
					<div id="wb_Image123" style="position:absolute;left:470px;top:16px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/Active.png" id="Image123" alt="">
					</div>
					<?php } else { ?>
					<div id="wb_Image123" style="position:absolute;left:470px;top:16px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/Active.png" id="Image123" alt="" style="opacity:0.15;">
					</div>
					<?php } ?>
					<?php if($seller['is_logo_verified'] > 1){?>
					<div id="wb_Image123" style="position:absolute;left:510px;top:16px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/ts/trusted.png" id="Image123" alt="">
					</div>
					<?php } else { ?>
					<div id="wb_Image123" style="position:absolute;left:510px;top:16px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/ts/trusted.png" id="Image123" alt="" style="opacity:0.15;">
					</div>
					<?php } ?>
				<?php } elseif ($seller['user_category_id'] == 2) { ?>
					<div id="wb_Image121" style="position:absolute;left:427px;top:16px;width:25px;height:25px;z-index:1363;">
						<img src="<?php echo asset_url();?>images/CommMember.png" id="Image121" alt="">
					</div>
					<?php if($seller['is_logo_verified'] > 1){?>
					<div id="wb_Image122" style="position:absolute;left:459px;top:14px;width:30px;height:30px;z-index:1364;">
						<img src="<?php echo asset_url();?>images/ts/trusted.png" id="Image122" alt="">
					</div>
					<?php } else { ?>
					<div id="wb_Image122" style="position:absolute;left:459px;top:14px;width:30px;height:30px;z-index:1364;">
						<img src="<?php echo asset_url();?>images/ts/trusted.png" id="Image122" alt="" style="opacity:0.15;">
					</div>
					<?php } ?>
					<?php if($seller['plan_id'] > 1) { ?>
					<div id="wb_Image123" style="position:absolute;left:500px;top:14px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/ts/member-logo.png" id="Image123" alt="">
					</div>
					<?php } else { ?>
					<div id="wb_Image123" style="position:absolute;left:500px;top:14px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/ts/member-logo.png" id="Image123" alt="" style="opacity:0.15;">
					</div>
					<?php } ?>
				<?php } elseif ($seller['user_category_id'] == 1) { ?>
					<div id="wb_Image121" style="position:absolute;left:400px;top:16px;width:25px;height:25px;z-index:1363;">
						<img src="<?php echo asset_url();?>images/CommMember.png" id="Image121" alt="">
					</div>
					<?php if($seller['plan_id'] > 1 && $seller['gaurantee_period'] !=''){?>
					<div id="wb_Image122" style="position:absolute;left:430px;top:14px;width:30px;height:30px;z-index:1364;">
						<img src="<?php echo asset_url();?>images/ts/guarantee.png" id="Image122" alt="">
					</div>
					<?php } else { ?>
					<div id="wb_Image122" style="position:absolute;left:430px;top:14px;width:38px;height:30px;z-index:1364;">
						<img src="<?php echo asset_url();?>images/ts/guarantee.png" id="Image122" alt="" style="opacity:0.15;">
					</div>
					<?php } ?>
					<?php if($seller['is_logo_verified'] > 1) { ?>
					<div id="wb_Image123" style="position:absolute;left:470px;top:14px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/ts/trusted.png" id="Image123" alt="">
					</div>
					<?php } else { ?>
					<div id="wb_Image123" style="position:absolute;left:470px;top:14px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/ts/trusted.png" id="Image123" alt="" style="opacity:0.15;">
					</div>
					<?php } ?>
					<?php if($seller['plan_id'] > 1){?>
					<div id="wb_Image123" style="position:absolute;left:505px;top:14px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/ts/member-logo.png" id="Image123" alt="">
					</div>
					<?php } else { ?>
					<div id="wb_Image123" style="position:absolute;left:505px;top:14px;width:28px;height:28px;z-index:1365;">
						<img src="<?php echo asset_url();?>images/ts/member-logo.png" id="Image123" alt="" style="opacity:0.15;">
					</div>
					<?php } ?>
				<?php } ?>
			</div>
			<div id="VLayer-button-<?php echo $key;?>" style="position: absolute; text-align: left; visibility: hidden; left: 778px; top: 1px; width: 177px; height: 145px; z-index: 1369;">
				<div id="wb_Shape3" style="position:absolute;left:23px;top:76px;width:170px;height:31px;z-index:1366;">
					<a href="javascript:deleteCommunityRequest(<?php echo $seller['community_id'];?>,'VLayer-contact-<?php echo $key;?>','vreq');" class="bluebtn">
						Ignore & Delete
					</a>
				</div>
				<div id="wb_Shape292" style="position:absolute;left:23px;top:36px;width:170px;height:31px;z-index:1367;">
					<a href="javascript:false;" class="bluebtn">
						Waiting
					</a>
				</div>
			</div>
		</div>
		<?php $i++; } ?>
	</div>	
<script>
function openCommunityInvites() {
	$("#request_to_me").show();
	$("#request_by_me").hide();
	$("#addcominityrequest_btn").addClass("alerts-btn-selected ractive");
	$("#communityinvitation_btn").removeClass("alerts-btn-selected ractive");
}
function openMyInvites() {
	$("#request_to_me").hide();
	$("#request_by_me").show();
	$("#addcominityrequest_btn").removeClass("alerts-btn-selected ractive");
	$("#communityinvitation_btn").addClass("alerts-btn-selected ractive");
}
function acceptCommunityRequest(id,lid,req) {
	ajaxindicatorstart('');
	$.get(base_url+"mycommunity/member/accept/"+id,{},function(data){
		customAlert(data.msg);
		$("#"+lid).remove();
		var rcount = parseInt($("#"+req).html());
		rcount--;
		$("#"+req).html(rcount);
		ajaxindicatorstop();
	},'json');
}

function deleteCommunityRequest(id,lid,req) {
	ajaxindicatorstart('');
	$.get(base_url+"mycommunity/member/delete/"+id,{},function(data){
		customAlert(data.msg);
		$("#"+lid).remove();
		var rcount = parseInt($("#"+req).html());
		rcount--;
		$("#"+req).html(rcount);
		ajaxindicatorstop();
	},'json');
}
</script>