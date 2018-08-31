<script src="<?php echo asset_url(); ?>js/jquery.ui.effect.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-blind.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-bounce.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-clip.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-drop.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-explode.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fade.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fold.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-highlight.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-pulsate.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-scale.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-shake.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-slide.min.js"></script>
<script src="<?php echo asset_url(); ?>js/searchindex.js"></script>
<script src="<?php echo asset_url(); ?>js/wwb10.min.js"></script>

<div class="container" style="width: 1280px;">
	<div class="row m1" style="margin:30px 30px;">
		<div class="col-lg-2 col-md-2 col-sm-2" style="padding: 0px;">
			<div id="Layer68" style="height:720px;">
				<div class="maxheight1">
					<br>
					<br>
					<div id="wb_Text244" class="font2s2">
						<div id="wb_Text13" style="position:absolute;left:61px;top:15px;width:84px;height:15px;text-align:center;z-index:351;">
							<span style="color:#FFFFFF;font-family:Arial;font-size:12px;">
								<strong>MY</strong>
							</span>
						</div>
						<h3 class="font1s2">
							<span>COMMUNITY</span>
						</h3>
						<div class="text-center displaydesktop ">
						<?php if(empty($userinfo[0]['profile_image'])) {?>
						    <img src="<?php echo asset_url(); ?>images/buyerorange0.png" class="img-responsive" style="display: inline-block;width:160px;padding: 15px 0px;border-radius:50%;">
						<?php } else {?>
							<img src="<?php echo asset_url(); ?><?php echo $userinfo[0]['profile_image'];?>" class="img-responsive" style="display: inline-block;width:160px;padding: 15px 0px;border-radius:50%;">
						<?php } ?>
						</div>
					</div>
				</div>
				<div class="box ">
					<div class="row l-height ">
						<h3 class="background1" style="margin: 0px 15px !important;">
							<strong>Toolbox</strong>
						</h3>
						<div class="col-xs-4 ptop"
							style="text-align: right; padding: 0px;">
							<br> <img src="<?php echo asset_url(); ?>images/editprofile0.png"
								class="img36">
						</div>
						<div class="col-xs-8 ptop">
							<br> <strong class="font1 ">Edit Profile</strong><br> <a
								href="javascript:popupwnd( './community/editprofile', 'no', 'no', 'no', 'no', 'no', 'no', '415', '50', '416', '703') "
								target="_self " class="font2 ">Hidden Mode</a><br> <a
								href="./shippers.php " target="_blank " class="font2 "
								onclick="ShowObjectWithEffect('Layer55', 1, 'slideleft', 500);return false;">Status</a>
						</div>
						<div class="col-xs-4 ptop"
							style="text-align: right; padding: 0px;">
							<img src="<?php echo asset_url(); ?>images/addmember.png"
								class="img36">
						</div>
						<div class="col-xs-8 ptop">
							<strong class="font1">Add Member</strong><br> 
							<a href="<?php echo base_url()?>seller" target="_blank" class="font2">Seller</a><br> 
							<a href="<?php echo base_url()?>buyer" target="_blank" class="font2">Buyer</a><br> 
							<a href="<?php echo base_url()?>shipper" target="_blank" class="font2">Shipper</a>
						</div>
						<div class="col-xs-4 ptop" style="text-align: right; padding: 0px;">
							<img src="<?php echo asset_url(); ?>images/manage.png" class="img36"> <br>
						</div>
						<div class="col-xs-8 ptop">
							<strong class="font1 ">View / Manage</strong><br> 
							<a href="#" onclick="myPost();" class="font2">My Posts</a><br> 
							<a href="#" class="font2" onclick="showMymembers();">My Members <span style="background-color:#FF0000;color:#FFFFFF;font-family:Arial;font-size:11px;letter-spacing:0.07px;padding:0px 5px;display:none;">0</span></a><br> 
							<a href="javascript:displayCommunityRequests();" class="font2" >Add Requests <?php if(!empty($add_requests[0]['members'])) { ?><span style="background-color:#FF0000;color:#FFFFFF;font-family:Arial;font-size:11px;letter-spacing:0.07px;padding:0px 5px;"><?php if(!empty($add_requests[0]['members']) && $add_requests[0]['members'] > 0) { echo $add_requests[0]['members']; } ?></span><?php } ?></a>
						</div>
					</div>
					<br>
				</div>
				<div id="Layer55" style="position: absolute; text-align: left; visibility: visible; left:192px; top:370px; width: 183px; height: 247px; z-index:632; display: none;" onmouseleave="ShowObjectWithEffect('Layer55', 0, 'slideleft', 500);return false;">
					<div id="Layer58"
						style="position: absolute; text-align: left; left: 0px; top: 0px; width: 183px; height: 30px; z-index: 382;"
						onclick="ShowObjectWithEffect('Layer67', 1, 'fade', 100);ShowObjectWithEffect('Layer1', 0, 'fade', 100);ShowObject('Layer7', 0);ShowObject('Layer57', 1);return false;">
						<div id="wb_Text65"
							style="position: absolute; left: 22px; top: 8px; width: 136px; height: 16px; z-index: 370; text-align: left;">
							<span style="color: #303030; font-family: Georgia; font-size: 13px;"><strong>Select
									Your Status</strong></span>
						</div>
					</div>
					<div id="wb_Form4" style="position: absolute; left: 10px; top: 42px; width: 161px; height: 205px; z-index: 383;">
						<form name="survey" method="post" action="" id="Form4">
							<div id="wb_Text141" style="position: absolute; left: 64px; top: 15px; width: 67px; height: 16px; z-index: 371; text-align: left;">
								<span style="color: #000000; font-family: Arial; font-size: 13px;">Online</span>
							</div>
							<input type="radio" id="RadioButton1" name="status" value="online" style="position: absolute; left: 21px; top: 15px; z-index: 372;" <?php if($userinfo[0]['is_online'] == 'online') { ?>checked<?php }?>>
							<div id="wb_Text151" style="position: absolute; left: 64px; top: 40px; width: 67px; height: 16px; z-index: 373; text-align: left;">
								<span style="color: #000000; font-family: Arial; font-size: 13px;">Offline</span>
							</div>
							<input type="radio" id="RadioButton2" name="status" value="offline" style="position: absolute; left: 21px; top: 40px; z-index: 374;" <?php if($userinfo[0]['is_online'] == 'offline') { ?>checked<?php }?>>
							<div id="wb_Text163" style="position: absolute; left: 64px; top: 65px; width: 67px; height: 16px; z-index: 375; text-align: left;">
								<span style="color: #000000; font-family: Arial; font-size: 13px;">Available</span>
							</div>
							<input type="radio" id="RadioButton3" name="status" value="available" style="position: absolute; left: 21px; top: 65px; z-index: 376;" <?php if($userinfo[0]['is_online'] == 'available') { ?>checked<?php }?>>
							<div id="wb_Text170" style="position: absolute; left: 64px; top: 90px; width: 67px; height: 16px; z-index: 377; text-align: left;">
								<span style="color: #000000; font-family: Arial; font-size: 13px;">Away</span>
							</div>
							<input type="radio" id="RadioButton4" name="status" value="away" style="position: absolute; left: 21px; top: 90px; z-index: 378;" <?php if($userinfo[0]['is_online'] == 'away') { ?>checked<?php }?>> 
							<input type="button" id="Button4" name="" value="Set" style="position: absolute; left: 36px; top: 158px; width: 96px; height: 25px; z-index: 379;" onclick="updateOnlineStatus();">
							<div id="wb_Text177" style="position: absolute; left: 64px; top: 117px; width: 67px; height: 16px; z-index: 380; text-align: left;">
								<span style="color: #000000; font-family: Arial; font-size: 13px;">Busy</span>
							</div>
							<input type="radio" id="RadioButton5" name="rating" value="busy" style="position: absolute; left: 21px; top: 117px; z-index: 381;" <?php if($userinfo[0]['is_online'] == 'busy') { ?>checked<?php }?>>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-10 col-md-10 col-sm-10 " id="Layer2_Container" style="position:relative; text-align:left;padding-right:0px;">
			<div id="Layer5" style="min-width:971px;overflow:hidden;">
			<div class="background2">
				<div class="col-md-10 col-sm-10 col-xs-10" style="padding-top:4px;">
					<span class="font3">COMMUNITY REAL-TIME POSTS</span>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2" style="padding-right:0px;">
					<div id="Layer10" onclick="showAddPost();" data-id="<?php echo $mypost_count?>">
						<a>
							<img src="<?php echo asset_url(); ?>images/barsendpost0.png" id="Image11" alt="" class="img29"> 
							<label class="font4">ADD POST</label>
						</a>
					</div>
				</div>
			</div>
			<div id="Layer1" style="overflow-y: scroll;overflow-x:hidden;margin-top:2px;height:683px;">
          	<?php 
			if (count ( $allposts ) > 0 && $allposts [0] ['id'] != '') {
			foreach ( $allposts as $key=>$allpost ) {
			?>
					<div id="wb_Text227" style="text-align:center;height:10px;z-index:200;padding:5px;">
						<span style="color:#303030;font-family:Arial;font-size:11px;text-align:center;"><?php if(date('Y-m-d',strtotime($allpost['create'])) == date('Y-m-d')){ ?>Today<?php } else { echo date('d M Y',strtotime($allpost['create'])); }?>&nbsp; | <?php echo date('H:i',strtotime($allpost['create']));?></span>
					</div>
					<div class="boxsize row" style="margin-top:21px;margin-right:19px;cursor:pointer;" onclick="openPostDetails(<?php echo $allpost['postid'];?>);">
						<div class="col-md-2 col-sm-2 inline text-center">
							<a href="#" id="showmenulist<?php echo $allpost['postid'];?>" class="showmenulist" data-id="<?php echo $allpost['postid'];?>"> 
								<hr id="Line19" style="position:absolute;left:30px;top:35px;width:5px;height:4px;z-index:227;">
								<hr id="Line18" style="position:absolute;left:30px;top:25px;width:5px;height:4px;z-index:228;">
								<hr id="Line20" style="position:absolute;left:30px;top:45px;width:5px;height:4px;z-index:229;">
								<img src="<?php echo asset_url(); ?>images/activecover.png" alt="img35" style="width:32px;height:38px;">
							</a> 
							<img src="<?php echo asset_url(); ?><?php echo $allpost['contact_profile_image'];?>" id="Shape25" alt="" style="width:74px;height:76px;border-radius:50%;border: 2px solid #FF6347;">
							<!-- chat and other all -->
							<div id="Layer47-<?php echo $allpost['postid'];?>" class="chat1" onmouseleave="ShowObjectWithEffect('Layer47-<?php echo $allpost['postid'];?>', 0, 'slideup', 500);return false;" style="display: none;text-align:center;width:140px;top:80px;">
								<a href="#" class="afont chatcomet" data-id="<?php echo $allpost['busi_id'];?>">Chat</a>
								<a href="#" class="afont viewpst" data-id="<?php echo $allpost['busi_id'];?>" data-busid="<?php echo $busi_id;?>">View Posts</a> 
								<a href="#" class="afont viewdsksite" data-id="<?php echo $allpost['busi_id'];?>" data-catid="<?php echo $allpost['user_category_id'];?>">DeskSite</a> 
							</div>
							<!-- chat end -->
						</div>
						<div class="col-md-6 col-sm-6" style="padding-left:0px;">
							<div class="row" style="margin:0px;">
								<div class="col-sm-7" style="padding-left:0px;">
									<p class="font6" style="font-size:14px;"><?php echo $allpost['company_name'];?> </p>
									<p class="font7">Presented by &nbsp;&nbsp;<span class="style5 font8"><?php echo $allpost['prefix'].' '.$allpost['username'];?> </span></p>
									<span class="s1" style="font-size:15px;"><strong><?php echo $allpost['title'];?></strong></span><br>
								</div>
								<?php if(!empty($allpost['share_cname'])) { ?>
								<div class="col-sm-5" style="padding:0px;">
									<div class="col-sm-3" style="padding:0px;">
										<img src="<?php echo asset_url(); ?><?php echo $allpost['share_profile_image'];?>" id="Shape25" alt="" style="width:41px;border-radius:50%;border: 1px solid #FF6347;">
									</div>
									<div style="color:#000000;font-family:Arial;font-size:13px;padding-left:10px;" class="col-sm-9">
										Shared By<br><?php echo $allpost['share_cname'];?>
									</div>
								</div>
								<?php } ?>
							</div>
							<div class="row" style="margin:0px;">
								<span class="s2"><?php echo substr($allpost['postdesc'],0,290);?> <?php if(strlen($allpost['postdesc']) > 290){?>...<?php }?></span> 
								<br><br>
								<?php 
									setlocale(LC_ALL, ''); // Locale will be different on each system.
									$locale = localeconv();
									if($allpost['postprice'] != "")
										$allpost['postprice'] = number_format($allpost['postprice'], 2, $locale['decimal_point'], $locale['thousands_sep']);
								?>
								<?php if($allpost['user_category_id'] == 3){ ?>Target Price <?php } ?>
								<span class="s3">USD</span> <span class="s4"><?php echo $allpost['postprice'];?>&nbsp;&nbsp;&nbsp; </span>
								<span class="s5 pull-right" style="padding-top:12px;"><?php if($allpost['user_category_id'] == 3) { ?>Max.<?php }else{?>Min.<?php } ?> Order: <?php echo $allpost['postqty'];?>&nbsp;&nbsp;&nbsp; </span>
								<?php 
									$tb = $allpost['postviews'] + $allpost['likes']+ $allpost['comment'];
									$percentage_likes = 0;
									$total_count_for_percentage = 0;
									if($tb == 0) {
										$vb = 0;
										$lb = 0;
										$cb = 0;
									} else {
										$vb = round($allpost['postviews']/$tb*3,1);
										$lb = round($allpost['likes']/$tb*3,1);
										$cb = round($allpost['comment']/$tb*3,1);
                    					$total_count_for_percentage = $allpost['postviews'];
										if($total_count_for_percentage == 0)
										{
											$percentage_likes = 0;
										}else{
											$percentage_likes = ($allpost['likes'] * 100)/$total_count_for_percentage;
											//below code is for showing likes line when there is no like so that we dont affect the view
											if($percentage_likes == 100)
											{
												$percentage_likes = 95;
												//$percentage_likes = 5;
											}
										}
									}
								?>
								<div>
									<hr style="background-color:#fff;height:1px;margin-bottom:10px;border-top: 1px solid #fff;">
									<?php if($total_count_for_percentage != 0) {?>
										<hr id="Line16" style="position: absolute;z-index: 336; height: 1px; width: 100%">
										<hr id="Line17" style="width: <?php echo $percentage_likes;?>%; height: 4px; z-index: 340;position: absolute;bottom:33px;">
										<br/>
									<?php } ?>
									<span class="font11">Views </span> <span class="font11"><?php echo $allpost['postviews'];?></span>
									<a href="#" class="style5 font11 plbtn" data-id="<?php echo $allpost['postid'];?>">Likes</a> 
									<span class="font11"><?php echo $allpost['likes'];?></span>
									<a href="#" class="style5 font11 commbtn" data-id="<?php echo $allpost['postid'];?>">Comments</a> 
									<span class="font11"><?php echo $allpost['comment'];?></span>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="col-sm-6" style="padding:0px;">
								<div class="post-img-section" <?php if(!empty($allpost['image1'])) { ?>style="background-image:url('<?php echo asset_url(); ?><?php echo $allpost['image1'];?>');background-size:cover;"<?php } ?>>
									<?php if(!empty($allpost['image1'])) { ?>
									<!-- img src="<?php echo asset_url(); ?><?php echo $allpost['image1'];?>" id="" alt="" class="postimg"-->
									<?php } ?>
								</div>
							</div>
							<div class="col-sm-6" style="padding:0px;">
								<div class="post-img-section" <?php if(!empty($allpost['image2'])) { ?>style="background-image:url('<?php echo asset_url(); ?><?php echo $allpost['image2'];?>');background-size:cover;"<?php } ?>>
									<?php if(!empty($allpost['image2'])) { ?>
									<!-- img src="<?php echo asset_url(); ?><?php echo $allpost['image2'];?>" id="" alt="" class="postimg"-->
									<?php } ?>
								</div>
							</div>
							<div class="col-sm-6" style="padding:0px;">
								<div class="post-img-section" <?php if(!empty($allpost['image3'])) { ?>style="background-image:url('<?php echo asset_url(); ?><?php echo $allpost['image3'];?>');background-size:cover;"<?php } ?>>
									<?php if(!empty($allpost['image3'])) { ?>
									<!-- img src="<?php echo asset_url(); ?><?php echo $allpost['image3'];?>" id="" alt="" class="postimg" -->
									<?php } ?>
								</div>
							</div>
							<div class="col-sm-6" style="padding:0px;">
								<div class="post-img-section" <?php if(!empty($allpost['image4'])) { ?>style="background-image:url('<?php echo asset_url(); ?><?php echo $allpost['image4'];?>');background-size:cover;"<?php } ?>>
									<?php if(!empty($allpost['image4'])) { ?>
									<!-- img src="<?php echo asset_url(); ?><?php echo $allpost['image4'];?>" id="" alt="" class="postimg"-->
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
                 <?php } }  else { ?>
					<div style="background-color: #FFFFFF;padding:15px;height:920px;position: relative;">
						<?php if(count($firstpost) <= 0) { ?>
						
						<div id="wb_Text47" style="position:absolute;left:208px;top:476px;width:501px;height:384px;z-index:570;text-align:left;">
							<span style="color:#000000;font-family:Arial;font-size:13px;"><strong>Limitations.</strong><br>My Community is a social B2B platform, created specially to provide Black Horse/ (ELITE) member &amp; Buyers, with a private business platform in social media concept. So other members will experience a kind of limitation as follows:<br><br><strong><u>Sellers or Shippers / Black Horse ( VIP or BASIC) : <br></u></strong><br>Access and establish their own platform<br>Add or added by others members<br>View posts<br>Reply posts<br>Send posts<br><br>Chat, like, comment<strong><u><br><br><br>Free Sellers or Shippers: <br></u></strong><br>Access and establish their own platform<br>Add or added by others members<br>View posts<br>Reply posts<br>Send posts<br>Chat, like, comment
							</span>

						</div>
						<div id="wb_Text130" style="position:absolute;left:297px;top:82px;width:336px;height:29px;text-align:center;z-index:571;">
							<span style="color:#303030;font-family:Impact;font-size:24px;">WELCOME TO COMMUNITY</span>
						</div>
						<div id="wb_Text135" style="position:absolute;left:208px;top:167px;width:501px;height:142px;z-index:572;text-align:left;">
							<span style="color:#000000;font-family:Arial;font-size:13px;"><strong>Get Started </strong>and add your community members.<br>Move your mouse to Toolbox, click on the business type “ </span><span style="color:#1E90FF;font-family:Arial;font-size:13px;">Sellers, Shippers, Buyers</span><span style="color:#000000;font-family:Arial;font-size:13px;">” shown under “ Add Member”.<br><br>In the related page, search for certain members ( by Name, Company, Products, or Country), open the member's Desksite, then click on “Contact, Add and Share&quot; icon, and select &quot;Add To My Community”..<br><br></span><span style="color:#1E90FF;font-family:Arial;font-size:11px;">Please, waiting for the member to accept your Add Request</span>
						</div>
						<div id="wb_Text8" style="position:absolute;left:386px;top:111px;width:161px;height:16px;text-align:center;z-index:573;">
							<span style="color:#000000;font-family:Arial;font-size:13px;">Social B2B Platform </span>
						</div>
						<hr id="Line9" style="position:absolute;left:209px;top:331px;width:527px;height:1px;z-index:574;">
						<div id="wb_Text34" style="position:absolute;left:208px;top:357px;width:501px;height:96px;z-index:575;text-align:left;">
							<span style="color:#000000;font-family:Arial;font-size:13px;"><strong>Add Requests. </strong><br>Each &quot;Add Request&quot; you send to a member or received by a member stored in your Add Requests window, under View/Manage section in the Toolbox, where you can manage the add request invitations ( Accept or decline).<br><br></span>
						</div>
						<hr id="Line10" style="position:absolute;left:209px;top:451px;width:527px;height:1px;z-index:576;">
						<div id="wb_Text1" style="position:absolute;left:483px;top:610px;width:271px;height:272px;z-index:577;text-align:left;">
							<span style="color:#32CD32;font-family:Arial;font-size:13px;"><strong>Yes<br>Yes<br>Yes<br>Yes<br></strong></span><span style="color:#FF0000;font-family:Arial;font-size:13px;"><strong>Only one post, to send the second, delete the first one, and so on.</strong></span><span style="color:#000000;font-family:Arial;font-size:13px;"><strong><br></strong></span><span style="color:#32CD32;font-family:Arial;font-size:13px;"><strong>Yes<u><br></u></strong></span><span style="color:#000000;font-family:Arial;font-size:13px;"><strong><u><br><br><br></u><br></strong></span><span style="color:#32CD32;font-family:Arial;font-size:13px;"><strong>Yes<br>Yes<br>Yes</strong></span><span style="color:#1E90FF;font-family:Arial;font-size:13px;"><strong><br></strong></span><span style="color:#FF0000;font-family:Arial;font-size:13px;"><strong>No<br>No<br></strong></span><span style="color:#32CD32;font-family:Arial;font-size:13px;"><strong>Yes</strong></span>
						</div>
						<br/><br/>
						<?php } else { ?>
						<div id="wb_Text25" style="position:absolute;left:311px;top:233px;width:351px;height:32px;text-align:center;z-index:570;">
							<span style="color:#000000;font-family:Arial;font-size:13px;">We do not fount any post added by your community members..</span>
						</div>
						<div id="wb_Text53" style="position:absolute;left:314px;top:204px;width:336px;height:29px;text-align:center;z-index:571;">
							<span style="color:#303030;font-family:Impact;font-size:24px;">Oops!!</span>
						</div>	
						<?php } ?>
					</div>
					<?php }  ?>
				</div>
            </div>
			<!-- Add requests -->
			<div id="Layer120" style="position:absolute;text-align:left;visibility:hidden;left:0;top:0;width:982px;height:740px;z-index:626;">
				<div id="Layer121" style="position:absolute;text-align:left;left:20px;top:0;width:954px;height:37px;z-index:606;">
				</div>
				<div id="wb_Text318" style="position:absolute;left:28px;top:4px;width:431px;height:24px;z-index:607;text-align:left;">
					<span style="color:#FFFFFF;font-family:Georgia;font-size:20px;"><strong>Add Requests</strong></span>
				</div>
				<div id="wb_Shape342" style="position:absolute;left:495px;top:0px;width:189px;height:34px;z-index:608;">
					<div id="myinvt" style="width:189px;height:34px;text-align: center;padding-top: 7px;font-family: Arial;font-size: 13px;" class="crreqbtn" onclick="openMyInvites();">Members you like to add them</div>
				</div>
				<div id="wb_Shape341" style="position:absolute;left:312px;top:0px;width:183px;height:39px;z-index:609;">
					<div id="myreq" style="width:183px;height:34px;text-align: center;padding-top: 7px;font-family: Arial;font-size: 13px;" class="crreqbtn ractive" onclick="openCommunityInvites();">Members like to add you</div>
				</div>
				<div id="wb_Shape72" style="position:absolute;left:934px;top:0px;width:38px;height:36px;z-index:610;">
					<a href="#" onclick="ShowObjectWithEffect('Layer120', 0, 'slideright', 500);ShowObjectWithEffect('Layer9', 0, 'slideright', 500);ShowObjectWithEffect('Layer5', 1, 'slideleft', 500);return false;"><img src="<?php echo asset_url(); ?>images/img3485.gif" id="Shape72" alt="" style="width:38px;height:36px;"></a>
				</div>
				<div id="Layer123" style="position:absolute;overflow:scroll;text-align:left;left:20px;top:46px;width:957px;height:675px;z-index:611;">
				</div>
			</div>
			<!-- Add request end -->
			<!-- my post section -->
			<div id="Layer51" style="position:absolute;visibility:hidden;top:0;min-width:971px;z-index:526;"> <!-- style="visibility:hidden; position:absolute;min-width:971px;"-->
			<div class="background2">
				<div class="col-md-11 col-sm-11 col-xs-11" style="padding-top: 4px;">
					<div class="col-sm-2"><span class="font3">My Posts</span></div>
					<div class="col-sm-2">
						<span style="color:#FFFFFF;font-family:Arial;font-size:24px;" id="post_count"><?php echo count($myposts);?> </span><!--  -->
						<span style="color:#FFFFFF;font-family:Arial;font-size:13px;" id="posttext"><?php if(count($myposts) < 2) {?>Post<?php }else{?>Posts<?php } ?></span>
					</div>
					<?php if($tscategory_id != 3 && ($tsplanid == 2 || $tsplanid == 3)) { 
						$total = 1;
					?>
						<div class="col-sm-6 text-right">
							<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">&nbsp;</span>
							<span style="color:#FFFFFF;font-family:Arial;font-size:24px;">&nbsp;</span>
						</div>
						<div class="col-sm-2" style="padding-top: 10px;"><span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Out of <?php echo $total; ?> Post</span></div>
					<?php }else{ ?>
						<div class="col-sm-6 text-right">
							<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Usage </span>
							<span style="color:#FFFFFF;font-family:Arial;font-size:24px;"><?php echo round($storage[0]['community']/1024,2);?> MB</span>
						</div>
						<div class="col-sm-2" style="padding-top: 10px;"><span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Out of <?php if(!empty($mystorage[0]['intvalue'])) { echo $mystorage[0]['intvalue'];} else { echo 0;}?> MB</span></div>
					<?php } ?>
				</div>
				<div class="col-md-1 col-sm-1 col-xs-1 text-right" style="padding-left:0px;padding-right: 0px;">
					<div id="wb_Shape67">
						<a href="#" onclick="ShowObjectWithEffect('Layer51', 0, 'slideright', 500);ShowObjectWithEffect('Layer52', 0, 'slideright', 500);ShowObjectWithEffect('Layer9', 0, 'slideright', 500);ShowObjectWithEffect('Layer5', 1, 'slideleft', 500);return false;"><img src="<?php echo asset_url();?>images/img0334.gif" id="Shape67" alt="" style="width:38px;height:37px;"></a>
					</div>
				</div>
			</div>
			<div id="Layer32" style="overflow-y: scroll;overflow-x:hidden;margin-top:2px;height:675px;">
             <?php 
				if (count ( $myposts ) > 0 && $myposts [0] ['id'] != '') {
					foreach ( $myposts as $key=>$mypost ) {
						?>
					<div id="wb_Text227" style="text-align:center;height:10px;z-index:200;padding:5px;">
						<span style="color:#303030;font-family:Arial;font-size:11px;text-align:center;"><?php if(date('Y-m-d',strtotime($mypost['create'])) == date('Y-m-d')){ ?>Today<?php } else { echo date('d M Y',strtotime($mypost['create'])); }?>&nbsp; | <?php echo date('H:i',strtotime($mypost['create']));?></span>
					</div>
					<div class="boxsize row" style="margin-top:21px;margin-right:19px;cursor:pointer;" onclick="openPostDetails(<?php echo $mypost['postid'];?>);">
						<div class="col-md-2 col-sm-2 text-center">
							<br><br><br><br><br>
							<input type="checkbox" style="display:none;"><br><br>
							<button type="button" id="Button4" class="m2 deletePost" data-id="<?php echo $mypost['postid'];?>">Delete</button>
						</div>
						<div class="col-md-6 col-sm-6" style="padding-left:0px;">
							<p class="font6" style="font-size:14px;"><?php echo $mypost['company_name'];?> </p>
							<p class="font7">Presented by &nbsp;&nbsp;<span class="style5 font8"><?php echo $mypost['prefix'].' '.$mypost['username'];?> </span></p>
							<span class="s1" style="font-size:15px;"><strong><?php echo $mypost['title'];?></strong></span><br>
							<span class="s2"><?php echo substr($mypost['postdesc'],0,290);?> <?php if(strlen($mypost['postdesc']) > 290){?>...<?php }?></span> 
							<br><br>
							<?php 
									setlocale(LC_ALL, ''); // Locale will be different on each system.
									$locale = localeconv();
									if($mypost['postprice'] != "")
										$mypost['postprice'] = number_format($mypost['postprice'], 2, $locale['decimal_point'], $locale['thousands_sep']);
							?>
							<?php if($mypost['user_category_id'] == 3){ ?>Target Price <?php } ?>
							<span class="s3">USD</span> <span class="s4"><?php echo $mypost['postprice'];?>&nbsp;&nbsp;&nbsp; </span>
							<span class="s5 pull-right" style="padding-top:12px;"><?php if($mypost['user_category_id'] == 3) { ?>Max.<?php }else{?>Min.<?php } ?> Order: <?php echo $mypost['postqty'];?>&nbsp;&nbsp;&nbsp; </span>
							<?php 
								$tb = $mypost['postviews'] + $mypost['likes']+ $mypost['comment'];
								$total_count_for_percentage = 0;
								$percentage_likes = 0;
								if($tb == 0) {
									$vb = 0;
									$lb = 0;
									$cb = 0;
								} else { 
									$vb = round($mypost['postviews']/$tb*3);
									$lb = round($mypost['likes']/$tb*3);
									$cb = round($mypost['comment']/$tb*3);

									$total_count_for_percentage = $mypost['postviews'];
									if($total_count_for_percentage == 0)
									{
											$percentage_likes = 0;
									}else{
										$percentage_likes = ($mypost['likes'] * 100)/$total_count_for_percentage;
										//below code is for showing likes line when there is no like so that we dont affect the view
										if($percentage_likes == 100)
										{
											$percentage_likes = 95;
										}
									}
								}
							?>
							<hr style="background-color:#fff;height:1px;margin-bottom:10px;border-top: 1px solid #fff;">
							<?php if($total_count_for_percentage != 0) { ?>
								<hr id="Line16" style="position: absolute;z-index: 336; height: 1px; width: 100%">
								<hr id="Line17" style="width: <?php echo $percentage_likes;?>%; height: 4px; z-index: 340;position: absolute;bottom:33px;">
								
								<br/>
							<?php } ?>
							<span class="font11">Views </span> <span class="font11"><?php echo $mypost['postviews'];?></span>
							<a href="#" class="style5 font11 plbtn" data-id="<?php echo $mypost['postid'];?>">Likes</a> 
							<span class="font11"><?php echo $mypost['likes'];?></span>
							<a href="#" class="style5 font11 commbtn" data-id="<?php echo $mypost['postid'];?>">Comments</a> 
							<span class="font11"><?php echo $mypost['comment'];?></span>

						</div>
						<div class="col-md-4 col-sm-4">
							<div class="col-sm-6" style="padding:0px;">
								<div class="post-img-section" <?php if(!empty($mypost['image1'])) { ?>style="background-image:url('<?php echo asset_url(); ?><?php echo $mypost['image1'];?>');background-size:cover;"<?php } ?>>
									<?php if(!empty($mypost['image1'])) { ?>
									<!-- img src="<?php echo asset_url(); ?><?php echo $mypost['image1'];?>" id="" alt="" class="postimg"-->
									<?php } ?>
								</div>
							</div>
							<div class="col-sm-6" style="padding:0px;">
								<div class="post-img-section" <?php if(!empty($mypost['image2'])) { ?>style="background-image:url('<?php echo asset_url(); ?><?php echo $mypost['image2'];?>');background-size:cover;"<?php } ?>>
									<?php if(!empty($mypost['image2'])) { ?>
									<!-- img src="<?php echo asset_url(); ?><?php echo $mypost['image2'];?>" id="" alt="" class="postimg"-->
									<?php } ?>
								</div>
							</div>
							<div class="col-sm-6" style="padding:0px;">
								<div class="post-img-section" <?php if(!empty($mypost['image3'])) { ?>style="background-image:url('<?php echo asset_url(); ?><?php echo $mypost['image3'];?>');background-size:cover;"<?php } ?>>
									<?php if(!empty($mypost['image3'])) { ?>
									<!-- img src="<?php echo asset_url(); ?><?php echo $mypost['image3'];?>" id="" alt="" class="postimg" -->
									<?php } ?>
								</div>
							</div>
							<div class="col-sm-6" style="padding:0px;">
								<div class="post-img-section" <?php if(!empty($mypost['image4'])) { ?>style="background-image:url('<?php echo asset_url(); ?><?php echo $mypost['image4'];?>');background-size:cover;"<?php } ?>>
									<?php if(!empty($mypost['image4'])) { ?>
									<!-- img src="<?php echo asset_url(); ?><?php echo $mypost['image4'];?>" id="" alt="" class="postimg"-->
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
                 <?php } }  else { ?>
						<div style="height:637px;">
							<div id="wb_Text25" style="position:absolute;left:311px;top:233px;width:351px;height:32px;text-align:center;z-index:570;">
								<span style="color:#000000;font-family:Arial;font-size:13px;">To add your first post, close this tab and click on "Add a post" button..</span>
							</div>
							<div id="wb_Text53" style="position:absolute;left:314px;top:204px;width:336px;height:29px;text-align:center;z-index:571;">
								<span style="color:#303030;font-family:Impact;font-size:24px;">No Posts Yet</span>
							</div>
						</div>
				<?php }  ?>
				</div>
            </div>



			<!-- my post section end-->
			<!-- add post section -->
			<div id="Layer5_2" style="visibility:hidden; position:absolute;min-width:971px;z-index:526;top:0;">
			</div>
			<div id="Layer6" style="top:0px;width:472px;z-index:513;position:absolute;left:382px;visibility:hidden;">
				<div id="Layer15" style="background: #3C3C3C; padding: 11px;">
					<div style="padding-bottom:5px;">
						<span style="color: #FFFFFF; font-family: Georgia; font-size: 15px;"><strong>Send A Post</strong></span> <br>
					</div>
					<form id="addPostContent" name="addPostContent" action="" method="post" enctype="multipart/form-data">
						<div id="postdatacontent">
							<div class="box2">
								<div class="form-group">
									<div>
										<input type="text" id="Editbox1" name="title" value="" maxlength="30" placeholder="Post Title" style="width:385px;">
									</div>
									<div class="messageContainer"></div>
								</div>
								<div class="form-group">
									<div>
										<textarea name="description" id="TextArea2" rows="5" cols="54" maxlength="800" placeholder="Post Details"></textarea>
									</div>
									<div class="messageContainer"></div>
								</div>
								<div class="row">
									<?php if($tscategory_id == 1) { ?>
									<div class="inline">
										<input type="radio" name="gender" value="productimage" style="width: 25px;">
										<div class="leftbox3" style="width:125px;">From my products</div>
										<input type="hidden" name="product_id" value="0" />
										<input type="text" style="width:190px;padding-top:4px;display:inline;" id="product_select" class="form-control post-input-control" placeholder="Type the product no."/>
										<button type="button" id="buttonselect" style="width:60px;height:25px;margin-left:5px;" onclick="getProductImages();">Link</button>
									</div>
									<br>
									<div class="col-sm-12">
										<label class="hh" style="font-weight:normal;">4 jpg images, Each image with Max. size 75KB</label>
									</div>
									<div class="col-sm-12 form-group">
										<div>
											<input type="file" name="postphoto1" id="postphoto1" class="post-background" onchange="setBackgroundSize('postphoto1',this,75);" style="display:inline;"/>
											<input type="file" name="postphoto2" id="postphoto2" class="post-background" onchange="setBackgroundSize('postphoto2',this,75);" style="display:inline;"/>
											<input type="file" name="postphoto3" id="postphoto3" class="post-background" onchange="setBackgroundSize('postphoto3',this,75);" style="display:inline;"/>
											<input type="file" name="postphoto4" id="postphoto4" class="post-background" onchange="setBackgroundSize('postphoto4',this,75);" style="display:inline;"/>
											<input type="hidden" name="imgcnt" id="imgcnt" value=""/>
										</div>
										<div class="messageContainer"></div>
									</div>
									<?php } else { ?>
									<div class="label-text col-sm-4">Upload Images</div>
									<div class="hh label-text col-sm-8">Choose files below.</div>
									<div class="col-sm-12">
										<input type="hidden" name="product_id" value="0" />
										<label class="hh" style="font-weight:normal;">4 jpg images, Each image with Max. size 75KB</label>
									</div>
									<div class="col-sm-12 form-group">
										<div>
											<input type="file" name="postphoto1" id="postphoto1" class="post-background" onchange="setBackgroundSize('postphoto1',this,75);" style="display:inline;"/>
											<input type="file" name="postphoto2" id="postphoto2" class="post-background" onchange="setBackgroundSize('postphoto2',this,75);" style="display:inline;"/>
											<input type="file" name="postphoto3" id="postphoto3" class="post-background" onchange="setBackgroundSize('postphoto3',this,75);" style="display:inline;"/>
											<input type="file" name="postphoto4" id="postphoto4" class="post-background" onchange="setBackgroundSize('postphoto4',this,75);" style="display:inline;"/>
											<input type="hidden" name="imgcnt" id="imgcnt" value=""/>
										</div>
										<div class="messageContainer"></div>
									</div>
									<?php } ?>
									<input type="hidden" name="cimg[]" id="cimg1"/>
									<input type="hidden" name="cimg[]" id="cimg2"/>
									<input type="hidden" name="cimg[]" id="cimg3"/>
									<input type="hidden" name="cimg[]" id="cimg4"/>
									<br>
									<?php if($tscategory_id == 1 || $tscategory_id == 3) { ?>
									<div class="inline">
										<div class="row">
											<div class="col-sm-6 form-group">
												<div>
													<input type="text" id="Editbox3" name="usd_price" value="" maxlength="10" placeholder="USD Price"> 
												</div>
												<div class="messageContainer"></div>
											</div>
											<div class="col-sm-6 form-group">
												<div>
													<input type="text" placeholder="Qty" name="quantity" class="">
												</div>
												<div class="messageContainer"></div>
											</div>
										</div>
									</div>
									<?php } else { ?>
										<input type="hidden" id="Editbox3" name="usd_price" value="0"> 
										<input type="hidden" placeholder="Qty" name="quantity" value="0">
									<?php } ?>
									<br>
									<div class="inline">
										<span style="color: #000000; font-family: Arial; font-size: 9.3px;">Buyers:to enter <u>target price</u> and <u>expected Qty</u>. ( Type 00 if not sure). </span>
									</div>
									<div class="col-sm-12">
										<div class="pull-right">
											<button id="Button4" class="margin1" type="button" onclick="resetMyForm();">RESET</button>
											<button id="Button4" class="margin1" type="submit">SEND</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="view_Product_image" style="background-color: white;"></div>
					</form>
					<div id="wb_Text277">
						<span class="ss1">* </span> <span class="ss3"> <u>All posts</u> will be expired within </span> 
						<span class="ss2"> </span><span class="ss1"> <strong><u>1 month</u> </strong> </span> 
						<span class="ss2">, </span><span class="ss3">as long as you can resend it whenever you like. </span>
						<span class="ss2"><br> </span><span class="ss1">* </span> 
						<span class="ss3"> <u>Once</u> your post achieve your target, you can mark it and click delete (
							Click My Posts / Mark the <br>&nbsp; required post / Click
							Delete)..
						</span> 
						<span class="ss2"><br></span> <span class="ss1">* </span>
						<span class="ss3">Don't repeat, duplicate or send the same post
							twice, so as you not affect the storage of your <br>&nbsp;
							(Community) Box.
						</span> 
						<div style="text-align:center;">
							<a href="#" onclick="resetMyForm();ShowObjectWithEffect('Layer6', 0, 'slideup', 500);ShowObjectWithEffect('Layer118', 0, 'slideup', 500);return false;">
								<img src="<?php echo asset_url(); ?>images/img0760.gif" id="Shape35" alt="" style="width: 248px; height: 26px;">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- like section end -->

	<div id="Layer20">
		<div id="view_post_like"></div>
	</div>

	<!-- like section end -->
	<!-- comment section  -->

	<div id="Layer101">
		<div id="view_post_comment"></div>
	</div>

	<!-- comment section end -->
	<!-- my members  -->

	<div id="Layer71" style="position:absolute; text-align:right; visibility:hidden; right:0px; bottom:0px; width:434px; height:100%; z-index:2250; top: 0px;">
		<div id="Layer71_Container">
			<div class="likehead" style="text-align:left;">
				<span class="like">Members <span class="likecount" id="likecountid" style="padding:0px 20px;vertical-align: middle;">&nbsp;&nbsp;<strong><?php echo count($communitymember);?></strong></span></span>
				<a href="#" onclick="ShowObjectWithEffect('Layer71', 0, 'slideright', 600);return false;">
					<img src="<?php echo asset_url(); ?>images/img0313.gif" id="Shape14" alt="" class="img42" style="margin-bottom: 22px;">
				</a>
			</div>
			<div class="memberheader">
				<input type="checkbox" onclick="showDeleteMenu();" id="deleteMem"> select <input type="text" id="SiteSearch01" class="searchbox" name="SiteSearch1" value="" placeholder="Search My Members" /> 
				<input type="button" id="Button01" onclick="searchPage();return false;" name="Search" value="" style="width: 25px; height: 20px; z-index: 1808; margin-left: -33px; vertical-align: middle;" />
				<input type="button" id="clear-search" onclick="clearSearch();return false;" name="clear" value="" style="width: 25px; height: 20px; z-index: 1808; margin-left: -33px; vertical-align: middle;display: none;" />
				<a href="javascript:deleteMembers();" style="margin-left:15px;display:none;" id="memdeleteimg">
					<img alt="Delete selected members" src="<?php echo asset_url();?>images/mem-delete.png" style="width:32px;">
				</a>
			</div>
			<div id="comm_members" style="text-align:center;">
            <?php foreach($communitymember as $member) {?>
	            <div class="memberclass1  hover3" style="padding-left:5px;">
	            	<input type="hidden" class="comm_member_id" value="<?php echo $member['mbid'];?>"/>
					<div class="col-sm-3 image-cover">
						<img src="<?php echo asset_url(); ?><?php echo $member['memberimg'];?>" id="Image28" alt="" class="memberimg">
						<?php if($member['messages'] > 0) { ?>
						<span class="notification"><?php echo $member['messages'];?></span>
						<?php } ?>
					</div>
					<div class="col-sm-9 padding-top-10">
						<?php if($member['user_category_id'] == 1 || $member['user_category_id'] == 2) { ?>
						<img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image10" alt="" class="img25" style="opacity:<?php if($member['plan_id'] > 1) { ?>1<?php } else { ?>0.15<?php } ?>;"/>
						<?php } else if($member['user_category_id'] == 3) { ?>
						<img src="<?php echo asset_url(); ?>images/Active.png" id="Image10" alt="" class="img25" style="opacity:<?php if($member['is_active'] == 1) { ?>1<?php } else { ?>0.15<?php } ?>;"/>
						<?php } ?>
						<img src="<?php echo asset_url(); ?>images/trusted.png" id="Image10" alt="" class="img25" style="opacity:<?php if($member['is_logo_verified'] > 1) { ?>1<?php } else { ?>0.15<?php } ?>;"/>
						<?php if($member['user_category_id'] == 1) { ?>
						<img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image10" alt="" class="img25" style="width:30px !important;opacity:<?php if($member['plan_id'] > 1 && $member['gaurantee_period'] !=''){ ?>1<?php } else { ?>0.15<?php }?>;"/>
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
            </div>
		</div>
	</div>
	<!-- my members end -->
</div>
<div style="position:absolute;top:0px;left: 0;right: 0;width:1280px;margin: 0 auto;">
	<!-- post details -->
	<div class="Layer18" id="mainLayer18" style="position: absolute; text-align: left; visibility: hidden; right:0; top: 1px; width: 545px; height: 804px; z-index: 587;background: rgba(0,0,0,0.6);">
	</div>
</div>
</div>
<script src="<?php echo asset_url();?>js/bootstrapValidator.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>

<?php foreach($allposts as $allpost ) { ?>
<script>
function ajaxindicatorstart(text)
{
	if(jQuery('body').find('#resultLoading').attr('id') != 'resultLoading'){
	jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="<?php echo asset_url();?>images/loading.gif" alt=""><div></div></div><div class="bg"></div></div>');
	}

	jQuery('#resultLoading').css({
		'width':'100%',
		'height':'100%',
		'position':'fixed',
		'z-index':'10000000',
		'top':'0',
		'left':'0',
		'right':'0',
		'bottom':'0',
		'margin':'auto'
	});

	jQuery('#resultLoading .bg').css({
		'background':'#000000',
		'opacity':'0.7',
		'width':'100%',
		'height':'100%',
		'position':'absolute',
		'top':'0'
	});

	jQuery('#resultLoading>div:first').css({
		'width': '250px',
		'height':'75px',
		'text-align': 'center',
		'position': 'fixed',
		'top':'0',
		'left':'0',
		'right':'0',
		'bottom':'0',
		'margin':'auto',
		'font-size':'16px',
		'z-index':'10',
		'color':'#ffffff'

	});

    jQuery('#resultLoading .bg').height('100%');
       jQuery('#resultLoading').fadeIn(300);
    jQuery('body').css('cursor', 'wait');
}
function ajaxindicatorstop()
{
    jQuery('#resultLoading .bg').height('100%');
       jQuery('#resultLoading').fadeOut(300);
    jQuery('body').css('cursor', 'default');
}
function myajaxindicatorstart(id)
{
	if(jQuery('#'+id).find('#resultLoading').attr('id') != 'resultLoading'){
	jQuery('#'+id).append('<div id="resultLoading" style="display:none"><div><img src="<?php echo asset_url();?>images/loading.gif" alt=""><div></div></div><div class="bg"></div></div>');
	}

	jQuery('#resultLoading').css({
		'width':'100%',
		'height':'100%',
		'position':'absolute',
		'z-index':'10000000',
		'top':'0',
		'left':'0',
		'right':'0',
		'bottom':'0',
		'margin':'auto'
	});

	jQuery('#resultLoading .bg').css({
		'background':'#fff',
		'opacity':'0.7',
		'width':'100%',
		'height':'100%',
		'position':'absolute',
		'top':'0'
	});

	jQuery('#resultLoading>div:first').css({
		'width': '250px',
		'height':'75px',
		'text-align': 'center',
		'position': 'absolute',
		'top':'0',
		'left':'0',
		'right':'0',
		'bottom':'0',
		'margin':'auto',
		'font-size':'16px',
		'z-index':'10',
		'color':'#ffffff'

	});

    jQuery('#resultLoading .bg').height('100%');
       jQuery('#resultLoading').fadeIn(300);
    jQuery('#'+id).css('cursor', 'wait');
}
function myajaxindicatorstop(id)
{
    jQuery('#resultLoading .bg').height('100%');
       jQuery('#resultLoading').fadeOut(300);
    jQuery('#'+id).css('cursor', 'default');
}

//$(".showmenulist").click(function (event) {
$('div').on('click', '.showmenulist', function(event) {
	event.stopImmediatePropagation();

    if ($("#Layer47-"+$(this).attr("data-id")).is(":hidden")) {
        $("#Layer47-"+$(this).attr("data-id")).slideDown("slow");
    } else {
        $("#Layer47-"+$(this).attr("data-id")).hide();
    }

    if ($("#Layer47-1-"+$(this).attr("data-id")).is(":hidden")) {
        $("#Layer47-1-"+$(this).attr("data-id")).slideDown("slow");
    } else {
        $("#Layer47-1-"+$(this).attr("data-id")).hide();
    }
    event.preventDefault();
    ShowObject('mainLayer18', 0);
});

$("#Layer47<?php echo $allpost['postid'];?>").mouseleave(function(){
	$(this).hide();
});

</script>
<?php } ?>

<script>
function loadRealtimePosts(){
	/*myajaxindicatorstart('Layer1');
	myajaxindicatorstart('Layer32');*/
    $.post(base_url+"mycommunity/posts/realtime", {}, function(data){
    	myajaxindicatorstop('Layer1');
    	myajaxindicatorstop('Layer32');
		$('#Layer1').html(data.html1);
		$('#Layer32').html(data.html2);
	},'json');
}
function openPostDetails(id){
	ShowObject('Layer20', 0);
	ShowObject('Layer101', 0);
	ShowObjectWithEffect('mainLayer18', 1, 'slideright', 500, 'swing');
	ShowObject('Layer71', 0);
	addPageVisit(id);
	myajaxindicatorstart('mainLayer18');
    $.post(base_url+"mycommunity/posts/detail/"+id, {}, function(data){
       $('#mainLayer18').html(data);
    },'html');
}
/*function deletePost(id,event){
	ShowObject('mainLayer18', 0);
	event.stopImmediatePropagation();
    confirmbox("Are you sure to delete Post ?",
		function() {
			ajaxindicatorstart("");
			$.post(base_url+"community/deletepost", {id : id}, function(data){
				ajaxindicatorstop();
				loadRealtimePosts();
		        $("#msg_cont").html(data.msg);
		    	ShowObject('Layer99', 1);
		    }, 'html');
		},
		function() {
           //
        }
	);
}*/
$('div').on('click', '.deletePost', function(event) {
//$(".viewpst").click(function(event){
	ShowObject('mainLayer18', 0);
    event.stopImmediatePropagation();
    var id = $(this).attr("data-id");
    confirmbox("Are you sure to delete Post ?",
		function() {
			ajaxindicatorstart("");
			$.post(base_url+"community/deletepost", {id : id}, function(data){
				data = JSON.stringify(data);
				ajaxindicatorstop();
				loadRealtimePosts();
		        $("#msg_cont").html("Post Deleted successfully");
		    	var mypost_count = $("#Layer10").attr('data-id');
		    	if(mypost_count > 0)
		    		mypost_count = parseInt(mypost_count) - 1;
		    	$("#Layer10").attr('data-id',mypost_count);
		    	$("#post_count").html(mypost_count);
		    	ShowObject('Layer99', 1);
		    }, 'html');
		},
		function() {
           //
        }
	);
    //ShowObject('mainLayer18', 0);
});
    
function selectProductImage() {
    $('#postviewimage').hide();
    $('#postdatacontent').show();
    $("input[name='cimgchk[]']:checked").each(function(index) {
        $('#postphoto'+(index+1)).attr('src', base_url+'assets/'+$(this).val()).css('width', '60px').css('height', '60px');
        $("#cimg"+(index+1)).val($(this).val());
   	});
    $('#view_Product_image').hide();
}


$('#addPostContent').bootstrapValidator({
	container: function($field, validator) {
		return $field.parent().next('.messageContainer');
   	},
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
    	title: {
            validators: {
                notEmpty: {
                    message: 'Post Title is required'
                },
                stringLength: {
		            max: 45,
		            min: 6,
		            message: 'Minimum 6 and maximum 45 characters required'
		        }
            }
        },
        description: {
            validators: {
                notEmpty: {
                    message: 'Post Description is required'
                },
                stringLength: {
		            max: 1500,
		            min: 150,
		            message: 'Minimum 150 and maximum 1500 characters required'
		        }
            }
        },
        usd_price: {
            validators: {
                notEmpty: {
                    message: 'USD Price is required'
                }
            }
        },
        quantity: {
            validators: {
                notEmpty: {
                    message: 'Quantity is required'
                }
            }
        },
        imgcnt: {
            validators: {
                notEmpty: {
                    message: 'Atleast one image required'
                }
            }
        },
        
    }
}).on('success.form.bv', function(event,data) {
	// Prevent form submission
	event.preventDefault();
	event.stopImmediatePropagation();
	<?php if($tscategory_id != 3 && $tsplanid < 4) { ?>
		confirmbox("You subscription plan allows you to store only one post, so to send a post you have to delete the previous one",function(){
				addPostContent();
		    	mypost_count = 1;
		    	$("#Layer10").attr('data-id',mypost_count);
		    	$("#post_count").html(mypost_count);
			}
			,function(){
				resetMyForm();
				ShowObjectWithEffect('Layer6', 0, 'slideup', 500);
				ShowObjectWithEffect('Layer118', 0, 'slideup', 500);
				return false;
		});
	<?php }else{ ?>
		addPostContent();

	<?php } ?>
});

function addPostContent() {
	var options = {
	 		target : '#response', 
	 		beforeSubmit : showAddRequest,
	 		//success :  showAddResponse,
	 		url : base_url+'community/communitypost',
	 		semantic : true,
	 		dataType : 'json',
	 		success: function(responseText, statusText, xhr, $form) {
                    /**/
					myajaxindicatorstop('addPostContent');
					if(responseText.status == '0') {
						$("#response").removeClass('alert-success');
				       	$("#response").addClass('alert-danger');
						$("#response").html(responseText.msg.name);
						$("#response").show();
				  	} else {
				  		$("#msg_cont").html('Post Added successfully.');
				  		resetMyForm();
						ShowObject('Layer99', 1);
						ShowObjectWithEffect('Layer6', 0, 'slideup', 550, 'easeOutBounce');
				        loadRealtimePosts();
				        jQuery('#resultLoading').remove();
				  	}
                }
	 	};
   	$('#addPostContent').ajaxSubmit(options);
}

function showAddRequest(formData, jqForm, options){
	$("#response").hide();
	myajaxindicatorstart('addPostContent');
   	var queryString = $.param(formData);
	return true;
}
   	
function showAddResponse(resp, statusText, xhr, $form){
	myajaxindicatorstop('addPostContent');
	if(resp.status == '0') {
		$("#response").removeClass('alert-success');
       	$("#response").addClass('alert-danger');
		$("#response").html(resp.msg.name);
		$("#response").show();
  	} else {
  		$("#response").removeClass('alert-danger');
        $("#response").addClass('alert-success');
        $("#response").html(resp.msg);
        $("#response").show();
        loadRealtimePosts();
  	}
}


function readPostImageURL(input) {
	var filecount = $(input)[0].files.length;
	if(filecount <5) {
            for(var i=0; i< filecount; i++) {
            	setup_readerpost($(input)[0].files, i);
            }
	} else {
		alert('You can not select more than 4 files');
	}
}

function setup_readerpost(files, i) {
    var file = files[i];
    var name = file.name;
    var extension = name.replace(/^.*\./, '');
    var reader = new FileReader();
    reader.onload = function(e){
    	var j = parseInt(i) + 1;
        $('#postphoto'+j).show();
        $('#postphoto'+j).attr('src', e.target.result).css('width', '60px').css('height', '60px');
    };
    reader.readAsDataURL(files[i]);
}

function postLike(id){
		Toggle('', 'blindhorizontal', 500);
		$.post(base_url+"community/post/like", {post_id : id }, function(data){
			if(data.status == 1){
				viewPostLike(id);
				loadRealtimePosts();
			} else {
				$("#msg_cont").html(data.msg);
	    		ShowObject('Layer99', 1);
			}
		},'json');
}

function commentPost(post_id, user_id){
    var comment =$("#comment"+post_id).val();
    if(comment !=''){
        $.post(base_url+"community/post/comment", {post_id : post_id , user_id : user_id, comment : comment }, function(data){
            if(data.status==1){
	            //$("#msg_cont").html(data.msg);
	    		//ShowObject('Layer99', 1);
	            viewPostComment(post_id);
	            loadRealtimePosts();
            }
        }, 'json');
    }
    else{
        $("#msg_cont").html('Please enter some comment');
		ShowObject('Layer99', 1);
        return false;
    }  
}

function viewPostLike(id){
    $.post(base_url+"community/post/viewlike", {id : id}, function(data){
	       $('#view_post_like').html(data);
	       ShowObject('Layer101', 0);
	       ShowObjectWithEffect('Layer20', 1, 'slideright', 500);
	       ShowObject('Layer71', 0);
	    },'html');
}

function viewPostComment(id){
    $.post(base_url+"community/post/viewcomment", {id : id}, function(data){
	       $('#view_post_comment').html(data);
	       ShowObject('Layer20', 0);
	       ShowObjectWithEffect('Layer101', 1, 'slideright', 500);
	       ShowObject('Layer71', 0);
	    },'html');
}

$(".commbtn").click(function(event){
    event.stopImmediatePropagation();
    var id = $(this).attr("data-id");
    $.post(base_url+"community/post/viewcomment", {id : id}, function(data){
       $('#view_post_comment').html(data);
       ShowObject('Layer20', 0);
       ShowObjectWithEffect('Layer101', 1, 'slideright', 500);
       ShowObject('Layer71', 0);
    },'html');
});
$(".plbtn").click(function(event){
    event.stopImmediatePropagation();
    var id = $(this).attr("data-id");
    $.post(base_url+"community/post/viewlike", {id : id}, function(data){
       $('#view_post_like').html(data);
       ShowObject('Layer101', 0);
       ShowObjectWithEffect('Layer20', 1, 'slideright', 500);
       ShowObject('Layer71', 0);
    },'html');
});
$('div').on('click', '.chatcomet', function(event) {
//$(".chatcomet").click(function(event){
    event.stopImmediatePropagation();
    var id = $(this).attr("data-id");
    ShowObjectWithEffect('Layer72', 0, 'slideleft', 500);
    ShowObjectWithEffect('Layer74', 0, 'slideup', 500);
    ShowObjectWithEffect('Layer76', 0, 'slideright', 500);
});
$('div').on('click', '.viewpst', function(event) {
//$(".viewpst").click(function(event){
    event.stopImmediatePropagation();
    var busi_id = $(this).attr("data-id");
    var logged_in_busi_id = $(this).attr("data-busid");
    if(busi_id == logged_in_busi_id)
    {
    	ShowObjectWithEffect('Layer5', 0, 'slideleft', 500);
    	ShowObjectWithEffect('Layer51', 1, 'slideright', 500);
    }else{
    	ajaxindicatorstart("");
		$.post(base_url+"community/viewpost", {busi_id : busi_id}, function(data){
				ajaxindicatorstop();
				//loadRealtimePosts();
		        $('#Layer5_2').html(data);
		        ShowObjectWithEffect('Layer5_2', 1, 'slideright', 500);
		    	ShowObjectWithEffect('Layer5', 0, 'slideleft', 500);
    			
    			
		}, 'html');
    }
    ShowObject('mainLayer18', 0);
});
$('div').on('click', '.viewdsksite', function(event) {
//$(".viewdsksite").click(function(event){
    event.stopImmediatePropagation();
    var busi_id = $(this).attr("data-id");
    var cat_id = $(this).attr("data-catid");
    if(cat_id == 1) { 
    	var url = '<?php echo base_url();?>desksite/'+busi_id;
    } else if(cat_id == 2) {
    	var url = '<?php echo base_url();?>shipper/profile/'+busi_id;
    } else {
    	var url = '<?php echo base_url();?>buyer/profile/'+busi_id;
    }
    var win = window.open(url, '_blank');
    win.focus();
});

function updateOnlineStatus() {
	$.post(base_url+"mybusiness/profile/isonline", {status: $("input[name='status']:checked"). val()}, function(data){
		$("#msg_cont").html('Status updated successfully.');
		ShowObject('Layer99', 1);
		ShowObjectWithEffect('Layer55', 0, 'slideleft', 500);
	},'json');
}

function hideObjects(cls) {
	$("."+cls).css('visibility','hidden');
}

function showDeleteMenu() {
	if($("#deleteMem").prop("checked")) {
		$("#memdeleteimg").show();
	} else {
		$("#memdeleteimg").hide();
	}
}
$("#SiteSearch01").keyup(function() {
	if($("#SiteSearch01").val().length > 0)
	{
		$("#clear-search").show();
		$("#Button01").hide();
	}else{
		$("#clear-search").hide();
		$("#Button01").show();
	}
	searchPage()
});
function clearSearch(){
	$("#SiteSearch01").val("");
	$("#clear-search").hide();
	$("#Button01").show();
	searchPage();
}
function searchPage() {
	$.get(base_url+"community/members/search",{ name: $("#SiteSearch01").val()},function(data) {
		$("#comm_members").html(data.html);
	},'json');
}

function deleteMembers() {
	var members = "";
	var nillmembers = '<h4 class="center" style="margin-top:50px;padding: 60px 30px;text-align: left;">'
					  +'<span style="color:#000000;font-family:Arial;font-size:13px;">'
					  +'<strong>You don’t have members in your community.. </strong>'
					  +'<br><br>'
					  +'To add members, click on the suitable business type “ Sellers, Shippers, Buyers” shown under “ Add Member” in The Toolbox..<br><br>'
					  +'In the related page, search for a certain members meet your requirement, view his Desksite, then click “Contact and select Add To My Community”..'
					  +'<br><br>'
					  +'</span>'
					  +'</h4>';
	$(".comm_member_id").each(function(){
		if(members == "") {
			members = $(this).val();
		} else {
			members = members+","+$(this).val();
		}
	});
	if(members != "") {
		confirmbox("Are you sure ? You want to delete all members?",
			function() {
				$.get(base_url+"community/members/delete",{ members: members},function(data) {
					$("#comm_members").html(nillmembers);
					$("#likecountid").html("&nbsp;&nbsp;<strong>0</strong>");
					$("#memdeleteimg").hide();
					$("#deleteMem").removeAttr('checked');
				},'html');
			},
			function() {
	           //
	        }
		);
	}
}

function displayCommunityRequests() {
	ajaxindicatorstart('');
	$.get(base_url+"mycommunity/member/request",{},function(data){
		$("#Layer123").html(data);
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer5', 0, 'slideleft', 500);
		ShowObjectWithEffect('Layer51', 0, 'slideleft', 500);
		ShowObjectWithEffect('Layer5_2', 0, 'slideleft', 500);
		ShowObjectWithEffect('Layer120', 1, 'slideright', 500);
		ShowObjectWithEffect( 'Layer71', 0, 'fade', 600);
	});
}

function myPost() {
	ShowObjectWithEffect('Layer5', 0, 'slideleft', 500);
	ShowObjectWithEffect('Layer120', 0, 'slideleft', 500);
	ShowObjectWithEffect('Layer5_2', 0, 'slideleft', 500);
	ShowObjectWithEffect('Layer51', 1, 'slideright', 500);
	ShowObjectWithEffect( 'Layer71', 0, 'fade', 600);

	/*ShowObjectWithEffect('Layer51', 1, 'slideright', 500);
	ShowObjectWithEffect('Layer5', 0, 'slideleft', 500);
	ShowObjectWithEffect('Layer52', 0, 'slideleft', 500);
	ShowObjectWithEffect('Layer120', 0, 'slideleft', 500);*/
}
function openEnquiryAndOfferForm(postid) {
	<?php if($tscategory_id != 3) { ?>
		<?php if($contact_details[0]['plan_id'] > 1) { ?>
			<?php if(($tscategory_id == 1 && $contact_details[0]['step'] == 4) || ($tscategory_id == 2 && $contact_details[0]['step'] == 2)) { ?>
				<?php if($oisstorage[0]['intvalue'] <= (($storage[0]['offers'] + $storage[0]['inquiries'])/1024)) { ?>
					$("#msg_cont").html('Your offer/inquiry box is full. Please delete offer/enquiries to send more enquiries');
					ShowObject('Layer99', 1);
				<?php } else { ?>
					popupwnd('<?php echo base_url();?>mycommunity/new/offer/'+postid,'no','no','no','yes','yes','no','600','50','555','750');
				<?php } ?>
			<?php } else { ?>
				$("#msg_cont").html('Sorry.. You have to create you Desksite to send posts or communicate with our members.. It\'s so easy .. just follow the steps shown here-under:<br> 1. Login and click on your profile image, then select Continue.<br> 2. Complete your registration till we create your Station.<br> 3. In " My Station" click on " My Desksite" and follow the steps to build it.');
				ShowObject('Layer99', 1);
			<?php } ?>
		<?php } else { ?>
			$("#msg_cont").html("You subscription plan doesn’t allow you to reply any post, please upgrade your account or chat with the post publisher.");
			ShowObject('Layer99', 1);
		<?php } ?>
	<?php } else { ?>
		<?php if($contact_details[0]['accept_offer'] == 1 && $contact_details[0]['accept_email'] == 1 && $contact_details[0]['step'] == 2) { ?>
			<?php if($oisstorage[0]['intvalue'] <= (($storage[0]['offers'] + $storage[0]['inquiries'])/1024)) { ?>
				$("#msg_cont").html('Your offer/inquiry box is full. Please delete offer/enquiries to send more enquiries');
				ShowObject('Layer99', 1);
			<?php } else { ?>
				popupwnd('<?php echo base_url();?>mycommunity/new/request/'+postid,'no','no','no','yes','yes','no','600','50','555','750');
			<?php } ?>
		<?php } else if($contact_details[0]['step'] < 2) { ?>
			$("#msg_cont").html('Sorry.. You have to create you Desksite to send posts or communicate with our members.. It\'s so easy .. just follow the steps shown here-under:<br> 1. Login and click on your profile image, then select Continue.<br> 2. Complete your registration till we create your Station.<br> 3. In " My Station" click on " My Desksite" and follow the steps to build it.');
			ShowObject('Layer99', 1);
		<?php } else if($contact_details[0]['accept_offer'] == 0 || $contact_details[0]['accept_email'] == 0) { ?>
			$("#msg_cont").html('Oops.. You are not able to sent a post.. It seems that you have turned the features (Receive Elite Manufactures Offers & Members contact request) OFF.. Please go to " My Station", then click on "Tools" icon, and select " Control Pannel", then Turn these features ON.');
			ShowObject('Layer99', 1);
		<?php } ?>
	<?php } ?>
}

function shareThePost(postid) {
	confirmbox("Do you like to share this post to your community?",
		function() {
		$.get(base_url+"mycommunity/post/share/"+postid,{},function(data) {
			loadRealtimePosts();
			$("#msg_cont").html(data.msg);
			ShowObject('Layer99', 1);
		},'json');
		},
		function() {
           //
        }
	);
}

function addPageVisit(postid) {
	$.get(base_url+"mycommunity/post/visit/"+postid,{},function(data) {
		//
	},'json');
}
function getProductImages() {
    var id = $('#select_product_id').val(); 
    var product_no = $("#product_select").val();
    if(product_no != "") {
	    $.post(base_url+"product/images", {id : id, product_no: product_no}, function(data){
		    if(data == 11) { 
		    	alert("No product found");
		    } else {
		    	$('#postdatacontent').hide();
		    	$('#view_Product_image').html(data);
		    }
		},'html');
    } else {
    	alert("Please enter product number.");
    }
}
function selectProductImage() {
	if($('input[name="cimgchk[]"]:checked').length > 0) {
	    $('#postdatacontent').show();
	    $("input[name='cimgchk[]']:checked").each(function(index) {
	        $('#postphoto'+(index+1)).css('background-image','url('+base_url+'assets/'+$(this).val()+')').css('background-size','cover');
	        $("#cimg"+(index+1)).val($(this).val());
	        $("#imgcnt").val(1);
	        $('#addPostContent').bootstrapValidator ('revalidateField', 'imgcnt');	
	   	});
	    $('#view_Product_image').html("");
	} else {
		alert("Please select images.");
	}
}
function setBackgroundSize(id,input,size) {
  	if (input.files && input.files[0]) {
    	var reader = new FileReader();
       	reader.onload = function (e) {
       		var ext = input.files[0].name.split('.').pop();
       		var file_size = parseInt(input.files[0].size);
       		var filesizeinkb = (file_size/1024);
       		var image = new Image();
            image.src = e.target.result;
            image.onload = function () {
                var imgwidth = this.width;
                if(ext == 'jpg' || ext == 'jpeg') {
	                if(filesizeinkb > size) {
	                	alert("Image size should be "+size+"kb max.");
	                    $('#'+id).val('');
	                } else {
		                $('#'+id).css('background-image', 'url('+e.target.result+')').css('background-size','cover');
		                $("#imgcnt").val(1);
		                $('#addPostContent').bootstrapValidator ('revalidateField', 'imgcnt');	
	                }
                } else {
                	alert("Image should be JPG or JPEG.");
                    $('#'+id).val('');
                }
            };
      	}
        reader.readAsDataURL(input.files[0]);
   	}
}
function resetMyForm() {
	document.getElementById("addPostContent").reset();
	$("#imgcnt").val(0);
	$("#postphoto1").css('background-image', 'url("<?php echo asset_url();?>images/img1264.png")').css('background-size','cover').val('');
	$("#postphoto2").css('background-image', 'url("<?php echo asset_url();?>images/img1264.png")').css('background-size','cover').val('');
	$("#postphoto3").css('background-image', 'url("<?php echo asset_url();?>images/img1264.png")').css('background-size','cover').val('');
	$("#postphoto4").css('background-image', 'url("<?php echo asset_url();?>images/img1264.png")').css('background-size','cover').val('');
} 

function showAddPost() { 
	var mypost_count = $("#Layer10").attr('data-id');
	<?php if($tscategory_id != 3 && $tsplanid < 2) { ?>
		$("#msg_cont").html('You subscription plan doesn\'t allow you to send posts, please upgrade your subscription plan to "Elite"');
		ShowObject('Layer99', 1);
	<?php } elseif($tscategory_id != 3 && ($tsplanid == 2 || $tsplanid == 3)) { ?>
				if(parseInt(mypost_count) >= 1){
					$("#msg_cont").html('Please delete the previous post to add a new one. To do this open "My Posts" tab, and delete the stored one,or upgrade your subscription plan to "Elite"');
					ShowObject('Layer99', 1);
				}else{
					ShowObjectWithEffect('Layer6', 1, 'slideup', 550, 'easeOutBounce');
				}
 	<?php } elseif($tscategory_id == 3 && $myds_stage != 4) { ?>
			$("#msg_cont").html('Sorry.. You have to create you Desksite to send posts or communicate with our members.. It\'s so easy .. just follow the steps shown here-under:<br> 1. Login and click on your profile image, then select Continue.<br> 2. Complete your registration till we create your Station.<br> 3. In " My Station" click on " My Desksite" and follow the steps to build it.');
			ShowObject('Layer99', 1);
	<?php } else { 
		if($mystorage[0]['intvalue'] <= round($storage[0]['community']/1024,2)) { ?>
			$("#msg_cont").html('Your posts storage box is full please delete some of your old posts');
			ShowObject('Layer99', 1);
		<?php } else { ?>
			ShowObjectWithEffect('Layer6', 1, 'slideup', 550, 'easeOutBounce');
		<?php } ?>
	<?php } ?>
}

function showMymembers() {
	ShowObjectWithEffect( 'Layer71', 1, 'slideright', 600);
	ShowObjectWithEffect( 'Layer72', 1, 'fade', 500);
	ShowObjectWithEffect( 'Layer90', 0, 'fade', 5);
	ShowObjectWithEffect( 'Layer76', 1, 'blindvertical', 500);
	ShowObjectWithEffect( 'Layer74', 1, 'fold', 500);
	ShowObject( 'Layer20', 0);
	ShowObject( 'Layer101', 0);
	hideObjects( 'Layer18', 0);
	myajaxindicatorstart('mainLayer18');
	$.get(base_url+"community/members/search",{ name: ''},function(data) {
       $('#comm_members').html(data.html);
       $("#likecountid").html("&nbsp;&nbsp;<strong>"+data.members+"</strong>");
    },'json');
}

$(document).ready(function(){
	setInterval(loadRealtimePosts,15000);
});
$(document).ready(function() {
    $("body").on("contextmenu",function(){
       return false;
    }); 
}); 
</script>