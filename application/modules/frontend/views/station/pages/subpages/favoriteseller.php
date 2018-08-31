<style>
.comp-image-slide {
	width: 210px !important;
    height: 173px !important;
    border: solid;
    border: 0px;
}
.product-carousel {
	height:173px;
	border:0px;
}
.row-custom {
	margin:0px -15px;
}
.img-carousel-div {
	padding:0px;
	width:208px;
}
.chkbox-div {
	width:50px;
	padding-top: 73px;
}
.main-row-div {
	width: 1025px;
	background-color: #FAFAFA;
    border: 1px #D3D3D3 solid;
}
.main-info-div {
	width: 595px;
	padding:10px 20px;
	background-color: #FAFAFA;
}

.main-icon-div {
	float:left;
	width: 220px;
	padding:0px;
}
.margin-bottom-20 {
	margin-bottom:20px;
}
.busi-profule-div {
	float:left;
	width:45px;
	height:45px;
}
.busi-profile-img {
	width:45px;
	height:45px;
	border-radius:50%;
}
.busi-title-div {
	float:left;
	padding:3px 10px;
}
a.style5
{
   color: #1E90FF;
   text-decoration: none;
}
a.style5:visited
{
   color: #1E90FF;
   text-decoration: none;
}
a.style5:active
{
   color: #1E90FF;
   text-decoration: none;
}
a.style5:hover
{
   color: #FF6347;
   text-decoration: underline;
}
.busi-name-link {
	font-family:Georgia;
	font-size:15px;
}
.busi-small-text {
	color:#4B4B4B;
	font-family:Arial;
	font-size:12px;
}
.busi-long-text {
	color:#696969;
	font-family:Arial;
	font-size:12px;
}
.padding-top-2 {
	padding-top:2px;
}
.georgia-13px {
	color:#303030;font-family:Georgia;font-size:13px;
}
.mp-title-div {
	width:120px;
	float:left;
}
.mp-item-div {
	width:425px;
	float:left;
}
.product-icon-image {
	width:25px;
	height:25px;
}
.georgia-12px {
	color: #808080; font-family: Georgia; font-size: 12px;
}
.georgia-12px-dark {
	color: #303030; font-family: Georgia; font-size: 12px;
}
.ranking-percent-line {
	background-color: #FF6347;
}
.product-left-arrow {
	background-color: #FFFFFF;
    border: 1px #C0C0C0 solid;
}
.tool-overlay {
	background-color: #FFFFFF;
    border: 1px #D3D3D3 solid;
}

</style>
<?php 
if(isset($favoriteseller)) {
if(count($favoriteseller) > 0 && $favoriteseller[0]['id'] !='') { 
	$i =1;
	foreach($favoriteseller as $key=>$seller) { 
?>
<div class="row row-custom margin-bottom-20">
	<div class="col-sm-1 chkbox-div text-center" style="width:35px;">
		<input type="checkbox" id="chkseller-<?php echo $i;?>" onclick="toggleDeleteDive('btndelete-<?php echo $seller['favorite_id'];?>','chkseller-<?php echo $i;?>');" name="chkseller-<?php echo $i;?>"  value="on" />
		<div id="btndelete-<?php echo $seller['favorite_id'];?>" style="width: 24px; height: 34px; padding-top:10px;display:none;margin-left: -4px;">
			<a href="#" onclick="delete_favorite(<?php echo $seller['favorite_id'];?>,1);"><img src="<?php echo asset_url();?>images/delete.png" id="Image160" alt=""></a>
		</div>
	</div>
	<div class="col-sm-11 main-row-div" onmouseenter="ShowObjectWithEffect('Layer525-<?php echo $key;?>', 1, 'slideright', 300, 'swing');return false;" onmouseleave="ShowObject('Layer213-<?php echo $key;?>', 0);ShowObject('Layer525-<?php echo $key;?>', 0);return false;">
		<div class="row row-custom">
			<div class="col-sm-3 img-carousel-div">
				<div class="carousel slide product-carousel" data-ride="carousel" >
					<div class="carousel-inner">
						<div class="item active">
							<img class="comp-image-slide" src="<?php echo asset_url();?><?php echo $seller['info_img1'];?>" alt="" title="" style="padding: 0px !important;">
						</div>
						<div class="item">
							<img class="comp-image-slide"  src="<?php echo asset_url();?><?php echo $seller['info_img2'];?>" alt="" title="" style="padding: 0px !important;">
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 main-info-div">
				<div class="busi-profule-div">
					<img src="<?php echo asset_url();?><?php echo $seller['profile_image']?>" class="busi-profile-img"/>
				</div>
				<div class="busi-title-div">
					<div>
						<span class="busi-name-link">
							<strong><a href="<?php echo base_url();?>desksite/<?php echo $seller['id'];?>" target="_blank" class="style5"><?php echo $seller['company_name'];?></a></strong>
						</span>
					</div>
					<div class="padding-top-2">
						<span class="busi-small-text" style="float:left;">Presented By: <?php echo $seller['name_prefix']." ".$seller['name'];?></span>
					</div>
				</div>
				<div style="clear:both;padding-top:10px;text-align:left;">
					<span class="busi-long-text"><?php echo substr($seller['hot_presentation'],0,260);?><?php if(strlen($seller['hot_presentation']) > 260) { ?> ...<?php } ?></span>
				</div>
				<div style="padding-top:10px;">
					<div class="mp-title-div">
						<span class="georgia-13px"><strong>Main Products | </strong></span>
					</div>
					<div class="mp-item-div">
						<span class="busi-small-text"><?php echo substr($seller['productname'],0,120);?><?php if(strlen($seller['productname']) > 120) { ?> ..<?php } ?></span>
					</div>
				</div>
				<div id="Layer213-<?php echo $key;?>" style="position: absolute; text-align: left; visibility: hidden; left:0px; top: 0px; width: 780px; height: 174px; z-index: 1262;" class="tool-overlay">
					<div id="RollOver6" style="position: absolute; left: 132px; top: 27px; overflow: hidden; width: 50px; height: 50px; z-index: 1249">
						<a href="<?php echo base_url();?>desksite/<?php echo $seller['favorite_id'];?>" target="_blank"> 
							<img class="hover" alt="" src="<?php echo asset_url();?>images/Desktopblue.png" style="width:50px;height:50px;">
							<span><img alt="" src="<?php echo asset_url();?>images/desktopblack.png"></span>
						</a>
					</div>
					<div id="wb_Text657" style="position: absolute; left: 97px; top: 86px; width: 121px; height: 64px; text-align: center; z-index: 1250;">
						<span style="color: #4B4B4B; font-family: Arial; font-size: 13px;">DESKSITE</span>
						<span style="color: #4B4B4B; font-family: Arial; font-size: 12px;"><br></span>
						<span style="color: #808080; font-family: Arial; font-size: 9.3px;">To
							View Seller Desktop Source products, Videos, Contact, Chat
							and much more.. </span>
					</div>
					<div id="wb_Text658" style="position: absolute; left: 238px; top: 86px; width: 121px; height: 40px; text-align: center; z-index: 1251;">
						<span style="color: #4B4B4B; font-family: Arial; font-size: 13px;">CATALOUGE</span>
						<span style="color: #4B4B4B; font-family: Arial; font-size: 12px;"><br></span>
						<span style="color: #808080; font-family: Arial; font-size: 9.3px;">To View Seller Products In a Quick Way..</span>
					</div>
					<div id="wb_Text659" style="position: absolute; left: 386px; top: 87px; width: 121px; height: 64px; text-align: center; z-index: 1252;">
						<span style="color: #DCDCDC; font-family: Arial; font-size: 13px;">ADD TO FAVORITE</span><span style="color: #DCDCDC; font-family: Arial; font-size: 12px;"><br></span><span style="color: #DCDCDC; font-family: Arial; font-size: 9.3px;">To
							Save Seller in Your Favorite Box, So As You Will Be Able To
							View It Later On..
						</span>
					</div>
					<div id="RollOver8" style="position: absolute; left: 575px; top: 27px; overflow: hidden; width: 50px; height: 50px; z-index: 1253">
						<a href="javascript:popupwnd('./chat_window.php','no','no','no','no','no','no','750','50','440','750')" target="_self">
							<img class="hover" alt="" src="<?php echo asset_url();?>images/chatblue.png" style="width:50px;height:50px;"> <span>
							<img alt="" src="<?php echo asset_url();?>images/chaTBLACK.png" style="width:50px;height:50px;"></span>
						</a>
					</div>
					<div id="wb_Text1434" style="position: absolute; left: 540px; top: 86px; width: 121px; height: 28px; text-align: center; z-index: 1254;">
						<span style="color: #4B4B4B; font-family: Arial; font-size: 13px;">CHAT</span>
						<span style="color: #4B4B4B; font-family: Arial; font-size: 12px;"><br></span>
						<span style="color: #808080; font-family: Arial; font-size: 9.3px;">To Chat With Seller .. </span>
					</div>
					<div id="wb_Image120" style="position: absolute; left: 272px; top: 28px; width: 50px; height: 50px; z-index: 1255;">
						<?php if($seller['catalouge_id'] > 0) { ?>
						<a href="#" onclick="viewMyCatalogueBook(<?php echo $seller['catalouge_id'];?>);">
							<img src="<?php echo asset_url();?>images/vacticonblack.png" id="Image120" alt="" style="width:50px;height:50px;">
						</a>
						<?php } else { ?>
						<a href="#">
							<img src="<?php echo asset_url();?>images/vacticonblack.png" id="Image120" alt="" style="width:50px;height:50px;">
						</a>
						<?php } ?>
					</div>
					<div id="wb_Image114" style="position: absolute; left: 417px; top: 32px; width: 50px; height: 50px; z-index: 1256;">
						<img src="<?php echo asset_url();?>images/img1242.png" id="Image114" alt="" style="width:50px;height:50px;">
					</div>
				</div>
			</div>
			<div class="col-sm-6 main-icon-div" style="background-color:#fff;height: 173px;">
				<div>
					<div id="wb_Image115" style="position: absolute; left: 50px; top: 28px; width: 25px; height: 25px; z-index: 1237;">
						<img src="<?php echo asset_url();?>images/CommMember.png" class="product-icon-image" alt="Member In My Community" title="Member In My Community">
					</div>
					<div id="wb_Image116" style="position: absolute; left: 77px; top: 28px; width: 34px; height: 26px; z-index: 1238;">
						<img src="<?php echo asset_url();?>images/guarantee.png" class="product-icon-image" alt="Products Guarantee" title="Products Guarantee" style="width:32px;">
					</div>
					<div id="wb_Image117" style="position: absolute; left: 114px; top: 29px; width: 25px; height: 25px; z-index: 1239;">
						<img src="<?php echo asset_url();?>images/trusted.png" class="product-icon-image" alt="" title="Verified Member">
					</div>
					<div id="wb_Image118" style="position: absolute; left: 146px; top: 29px; width: 25px; height: 25px; z-index: 1240;">
						<img src="<?php echo asset_url();?>images/member-logo.png" class="product-icon-image" alt="Black Horse Member"  title="Black Horse Member">
					</div>
				</div>
				<div>
					<div id="wb_Text591" style="position: absolute; left: 108px; top: 72px; width: 97px; height: 15px; z-index: 1233; text-align: left;">
						<span class="georgia-12px"><?php echo $seller['sub_category'];?></span>
					</div>
					<div id="wb_Text592" style="position: absolute; left: 23px; top: 72px; width: 96px; height: 15px; z-index: 1234; text-align: left;">
						<span class="georgia-12px-dark"><strong>Seller Type | </strong></span>
					</div>
					<div id="wb_Text618" style="position: absolute; left: 53px; top: 95px; width: 76px; height: 15px; z-index: 1235; text-align: left;">
						<span class="georgia-12px-dark"><strong><?php echo $seller['company_country']; ?> | </strong></span>
					</div>
					<div id="wb_Text619" style="position: absolute; left: 104px; top: 95px; width: 86px; height: 15px; z-index: 1236; text-align: left;">
						<span class="georgia-12px"><?php echo $seller['company_province'];?></span>
					</div>
				</div>
				<div>
					<div id="Layer280" style="position:absolute;text-align:left;left:20px;top:145px;width:181px;height:3px;">
						<div class="ranking-percent-line" style="position:absolute;text-align:left;left:0px;top:0px;width:<?php echo $seller['rank'];?>%;height:3px;">
						</div>
					</div>
					<div id="wb_Text620" style="position: absolute; left: 123px; top: 152px; width: 40px; height: 14px; z-index: 1242; text-align: left;">
						<span style="color: #FF6347; font-family: Arial; font-size: 11px;"><strong>% <?php echo $seller['rank'];?></strong></span>
					</div>
					<div id="wb_Text651" style="position: absolute; left: 20px; top: 130px; width: 41px; height: 12px; z-index: 1243; text-align: left;">
						<span style="color: #3C3C3C; font-family: Arial; font-size: 9.3px;">Rank</span>
					</div>
				</div>
				<div id="Layer525-<?php echo $key;?>" style="position: absolute; text-align: left; visibility: hidden; right: -2px; top: 0px; width: 48px; height: 174px; z-index: 5521;" onclick="ShowObjectWithEffect('Layer213', 1, 'slideright', 500, 'swing');return false;" class="product-left-arrow">
					<div id="wb_Shape2" style="position:absolute;left:18px;top:59px;width:11px;height:48px;z-index:5515;">
						<a href="#" onclick="ShowObjectWithEffect('Layer213-<?php echo $key;?>', 1, 'slideright', 500, 'swing');return false;"><img src="<?php echo asset_url();?>images/img1243.png" id="Shape2" alt="" style="width:11px;height:48px;"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $i++;?>
<?php } }  else { ?>
  <div class="row" style="margin:0px;">
 	<h4 class="center"> No Item Found!</h4>
 </div>
<?php } } ?>
