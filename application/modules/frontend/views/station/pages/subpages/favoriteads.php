	<?php
	if(isset($favoriteads)) { 
if(count($favoriteads) > 0 && $favoriteads[0]['id'] !='') { 
	$i =1; foreach($favoriteads as $seller) { ?>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-1" style="padding-top: 66px;">
							<input type="checkbox" id="chkads-<?php echo $i;?>" onclick="ShowObjectWithEffect('btnadsdelete-<?php echo $seller['favorite_id'];?>', 1, 'scale', 500, 'swing');return false;"
							name="chkads-<?php echo $i;?>"  value="on" >
							<div id="btnadsdelete-<?php echo $seller['favorite_id'];?>" style="width: 24px; height: 24px; visibility: hidden;">
									<a href="#" onclick="delete_favorite(<?php echo $seller['favorite_id'];?>,8);"><img src="<?php echo asset_url();?>images/delete.png" id="Image160" alt=""></a>
							</div>
					</div>			
						<div class="col-md-11" >			
							<div id="Layer178" style="width: 1000px; height: 185px;" onmouseenter="ShowObjectWithEffect('Layer525', 1, 'slideright', 300, 'swing');return false;"
									onmouseleave="ShowObject('Layer213', 0);ShowObject('Layer525', 0);return false;">
							<div id="Layer179" style="position: absolute; text-align: left; left: 1px; top: 1px; width: 1029px; height: 174px; z-index: 1258;">
								<div id="Layer210" style="position: absolute; text-align: left; left: 808px; top: 0px; width: 220px; height: 172px; z-index: 1244;">
									<div id="wb_Text591" style="position: absolute; left: 108px; top: 72px; width: 97px; height: 15px; z-index: 1233; text-align: left;">
											<span style="color: #808080; font-family: Georgia; font-size: 12px;"><?php //echo $seller['sub_category'];?></span>
									</div>
									<div id="wb_Text592" style="position: absolute; left: 23px; top: 72px; width: 96px; height: 15px; z-index: 1234; text-align: left;">
										<span style="color: #303030; font-family: Georgia; font-size: 12px;"><strong>Seller Type | </strong></span>
									</div>
									<div id="wb_Text618" style="position: absolute; left: 53px; top: 95px; width: 76px; height: 15px; z-index: 1235; text-align: left;">
										<span style="color: #303030; font-family: Georgia; font-size: 12px;"><strong><?php echo $seller['company_country']; ?> | </strong></span>
									</div>
									<div id="wb_Text619" style="position: absolute; left: 104px; top: 95px; width: 86px; height: 15px; z-index: 1236; text-align: left;">
										<span style="color: #808080; font-family: Georgia; font-size: 12px;"><?php echo $seller['company_province'];?></span>
									</div>
									<div id="wb_Image115" style="position: absolute; left: 50px; top: 28px; width: 25px; height: 25px; z-index: 1237;">
										<img src="<?php echo asset_url();?>images/CommMember.png" id="Image115" alt="Member In My Community"
										title="Member In My Community">
									</div>
									<div id="wb_Image116" style="position: absolute; left: 77px; top: 28px; width: 34px; height: 26px; z-index: 1238;">
										<img src="<?php echo asset_url();?>images/guarantee.png" id="Image116" alt="Products Guarantee" title="Products Guarantee">
									</div>
									<div id="wb_Image117" style="position: absolute; left: 114px; top: 29px; width: 25px; height: 25px; z-index: 1239;">
										<img src="<?php echo asset_url();?>images/trusted.png" id="Image117" alt="" title="Verified Member">
									</div>
									<div id="wb_Image118" style="position: absolute; left: 146px; top: 29px; width: 25px; height: 25px; z-index: 1240;">
										<img src="<?php echo asset_url();?>images/member-logo.png" id="Image118" alt="Black Horse Member"  title="Black Horse Member">
									</div>
									<div id="Layer211"  style="position: absolute; text-align: left; left: 20px; top: 145px; width: 181px; height: 3px; z-index: 1241;">
										<div id="Layer212" style="position: absolute; text-align: left; left: 0px; top: 0px; width: 127px; height: 3px; z-index: 1232;">
										</div>
									</div>
									<div id="wb_Text620" style="position: absolute; left: 123px; top: 152px; width: 40px; height: 14px; z-index: 1242; text-align: left;">
										<span style="color: #FF6347; font-family: Arial; font-size: 11px;"><strong>% 85</strong></span>
									</div>
									<div id="wb_Text651" style="position: absolute; left: 20px; top: 130px; width: 41px; height: 12px; z-index: 1243; text-align: left;">
										<span style="color: #3C3C3C; font-family: Arial; font-size: 9.3px;">Rank</span>
									</div>
								</div>
								<div id="wb_Text653" style="position: absolute; left: 282px; top: 20px; width: 351px; height: 18px; z-index: 1246; text-align: left;">
									<span style="color: #303030; font-family: Georgia; font-size: 15px;"><strong><a href="./desksite.php" target="_blank" class="style5"><?php echo $seller['company_name'];?> </a></strong></span>
								</div>
								<div id="wb_Text654" style="position: absolute; left: 235px; top: 75px; width: 548px; height: 62px; z-index: 1247; text-align: left;">
									<span
										style="color: #696969; font-family: Arial; font-size: 12px;"><?php $string1 = (strlen($seller['content']) > 13) ? substr($seller['content'],0,300).'...' : $seller['content']; echo $string1;?><br>
									<br>
									</span>
								</div>
						   </div>
							<div id="wb_Text656" style="position: absolute; left: 285px; top: 44px; width: 177px; height: 15px; z-index: 1259; text-align: left;">
								<span style="color: #4B4B4B; font-family: Arial; font-size: 12px;"> From Date :
									<?php echo date("j M Y", strtotime($seller['from_date']));?></span><br>
								<span style="color: #4B4B4B; font-family: Arial; font-size: 12px;"> To Date :
									<?php echo date("j M Y", strtotime($seller['to_date']));?></span><br>
							</div>
							<div id="wb_Image119" style="position: absolute; left: 233px; top: 18px; width: 45px; height: 45px; z-index: 1260;">
								<img src="<?php echo asset_url();?><?php echo $seller['profile_image']?>" id="Image119" alt="" style="border-radius: 50px 50px 50px 50px;">
							</div>
							<div id="SlideShow2" style="position: absolute; left: 2px; top: 2px; width: 210px; height: 173px; z-index: 1261;">
								<img class="image" style="border: solid;border-color: honeydew;" src="<?php echo asset_url();?><?php echo $seller['main_banner'];?>" alt="" title="">
							</div>
							<div id="Layer213" style="position: absolute; text-align: left; visibility: hidden; left: 212px; top: 1px; width: 780px; height: 174px; z-index: 1262;">
									<div id="RollOver6"  style="position: absolute; left: 132px; top: 27px; overflow: hidden; width: 50px; height: 50px; z-index: 1249">
											<a href="./desksite.php" target="_blank"> <img class="hover"
												alt="" src="<?php echo asset_url();?>images/Desktopblue.png">
												<span><img alt="" src="<?php echo asset_url();?>images/desktopblack.png"></span>
											</a>
									</div>
									<div id="wb_Text657" style="position: absolute; left: 97px; top: 86px; width: 121px; height: 64px; text-align: center; z-index: 1250;">
										<span style="color: #4B4B4B; font-family: Arial; font-size: 13px;">DESKSITE</span>
										<span style="color: #4B4B4B; font-family: Arial; font-size: 12px;"><br></span>
										<span  style="color: #808080; font-family: Arial; font-size: 9.3px;">To
											View Seller Desktop Source products, Videos, Contact, Chat
											and much more.. </span>
									</div>
									<div id="wb_Text658" style="position: absolute; left: 238px; top: 86px; width: 121px; height: 40px; text-align: center; z-index: 1251;">
										<span  style="color: #4B4B4B; font-family: Arial; font-size: 13px;">CATALOUGE</span>
										<span style="color: #4B4B4B; font-family: Arial; font-size: 12px;"><br></span>
										<span style="color: #808080; font-family: Arial; font-size: 9.3px;">To View Seller Products In a Quick Way..</span>
									</div>
									<div id="wb_Text659"  style="position: absolute; left: 386px; top: 87px; width: 121px; height: 64px; text-align: center; z-index: 1252;">
										<span  style="color: #DCDCDC; font-family: Arial; font-size: 13px;">ADD TO FAVORITE</span><span
											style="color: #DCDCDC; font-family: Arial; font-size: 12px;"><br></span><span
											style="color: #DCDCDC; font-family: Arial; font-size: 9.3px;">To
											Save Seller in Your Favorite Box, So As You Will Be Able To
											View It Later On..</span>
									</div>
									<div id="RollOver8" style="position: absolute; left: 575px; top: 27px; overflow: hidden; width: 50px; height: 50px; z-index: 1253">
										<a href="javascript:popupwnd('./chat_window.php','no','no','no','no','no','no','750','50','440','750')" target="_self">
										<img class="hover" alt=""  src="<?php echo asset_url();?>images/chatblue.png"> <span>
										<img alt="" src="<?php echo asset_url();?>images/chaTBLACK.png"></span>
										</a>
									</div>
									<div id="wb_Text1434" style="position: absolute; left: 540px; top: 86px; width: 121px; height: 28px; text-align: center; z-index: 1254;">
										<span style="color: #4B4B4B; font-family: Arial; font-size: 13px;">CHAT</span>
										<span  style="color: #4B4B4B; font-family: Arial; font-size: 12px;"><br></span>
										<span style="color: #808080; font-family: Arial; font-size: 9.3px;">To Chat With Seller .. </span>
									</div>
									<div id="wb_Image120"  style="position: absolute; left: 272px; top: 28px; width: 50px; height: 50px; z-index: 1255;">
										<a href="#" onclick="ShowObjectWithEffect('Layer527', 1, 'scale', 500, 'swing');return false;">
										<img  src="<?php echo asset_url();?>images/vacticonblack.png"  id="Image120" alt=""></a>
									</div>
									<div id="wb_Image114"  style="position: absolute; left: 417px; top: 32px; width: 50px; height: 50px; z-index: 1256;">
										<img src="<?php echo asset_url();?>images/img1242.png" id="Image114" alt="">
									</div>
								</div>
								<div id="Layer525"  style="position: absolute; text-align: left; visibility: hidden; left: 982px; top: 1px; width: 48px; height: 174px; z-index: 1263;"
									onclick="ShowObjectWithEffect('Layer213', 1, 'slideright', 500, 'swing');return false;">
									<div id="wb_Shape1"  style="position: absolute; left: 18px; top: 59px; width: 11px; height: 48px; z-index: 1257;">
										<a href="#" onclick="ShowObjectWithEffect('Layer213', 1, 'slideright', 500, 'swing');return false;"><img
											src="<?php echo asset_url();?>images/img1243.png" id="Shape1"
											alt="" style="width: 11px; height: 48px;"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>		
				<?php $i++; } }  else { ?>
  <div class="row" style="margin:0px;">
 	<h4 class="center"> No Item Found!</h4>
 </div>
<?php } } ?>