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
if(isset($favoritebuyer)) {
if(count($favoritebuyer) > 0 && $favoritebuyer[0]['id'] !='') { 
	$i =1;
	foreach($favoritebuyer as $key=>$seller) { 
?>
<div class="row row-custom margin-bottom-20">
	<div class="col-sm-1 chkbox-div text-center" style="width:35px;">
		<input type="checkbox" id="chkbuyer-<?php echo $i;?>" onclick="toggleDeleteDive('btnbuyerdelete-<?php echo $seller['favorite_id'];?>','chkbuyer-<?php echo $i;?>');" name="chkseller-<?php echo $i;?>"  value="on" />
		<div id="btnbuyerdelete-<?php echo $seller['favorite_id'];?>" style="width: 24px; height: 34px;padding-top:10px; display:none;margin-left: -4px;">
			<a href="#" onclick="delete_favorite(<?php echo $seller['favorite_id'];?>,3);"><img src="<?php echo asset_url();?>images/delete.png" id="Image160" alt=""></a>
		</div>
	</div>
	<div class="col-sm-11 main-row-div" onmouseenter="ShowObjectWithEffect('Layer5253-<?php echo $key;?>', 1, 'slideright', 300, 'swing');return false;" onmouseleave="ShowObject('Layer2133-<?php echo $key;?>', 0);ShowObject('Layer5253-<?php echo $key;?>', 0);return false;">
		<div class="row row-custom">
			<div class="col-sm-3 img-carousel-div">
				<div class="carousel slide product-carousel alertcarousel3" data-ride="carousel" >
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
							<strong><a href="<?php echo base_url();?>buyer/profile/<?php echo $seller['busi_id'];?>" target="_blank" class="style5"><?php echo $seller['company_name'];?></a></strong>
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
				<div id="Layer2133-<?php echo $key;?>" style="position: absolute; text-align: left; visibility: hidden; left:0px; top: 0px; width: 780px; height: 174px; z-index: 1262;" class="tool-overlay">
					<div id="RollOver6" style="position: absolute; left: 132px; top: 27px; overflow: hidden; width: 50px; height: 50px; z-index: 1249">
						<a href="<?php echo base_url();?>buyer/profile/<?php echo $seller['favorite_id'];?>" target="_blank"> 
							<img class="hover" alt="" src="<?php echo asset_url();?>images/randbuyercherry.png" style="width:50px;height:50px;">
							<span><img alt="" src="<?php echo asset_url();?>images/randbuyerblack.png"></span>
						</a>
					</div>
					<div id="wb_Text657" style="position: absolute; left: 85px; top: 86px; width: 140px; height: 64px; text-align: center; z-index: 1250;">
						<span style="color: #4B4B4B; font-family: Arial; font-size: 13px;">VIEW PROFILE</span>
						<span style="color: #4B4B4B; font-family: Arial; font-size: 12px;"><br></span>
						<span style="color: #808080; font-family: Arial; font-size: 9.3px;">To View Buyer Information, Desksite, Contact, Chat and much more.. </span>
					</div>
					<div id="wb_Text658" style="position: absolute; left:300px; top: 86px; width: 140px; height: 40px; text-align: center; z-index: 1251;">
						<span style="color: #4B4B4B; font-family: Arial; font-size: 13px;">ADD TO COMMUNITY</span>
						<span style="color: #4B4B4B; font-family: Arial; font-size: 12px;"><br></span>
						<span style="color: #808080; font-family: Arial; font-size: 9.3px;">To Add Buyer To Your Community Member List, And Follow His Posts..</span>
					</div>
					<div id="RollOver8" style="position: absolute; left: 575px; top: 27px; overflow: hidden; width: 50px; height: 50px; z-index: 1253">
						<a href="javascript:popupwnd('./chat_window.php','no','no','no','no','no','no','750','50','440','750')" target="_self">
							<img class="hover" alt="" src="<?php echo asset_url();?>images/chat_button2.png" style="width:50px;height:50px;"> <span>
							<img alt="" src="<?php echo asset_url();?>images/chaTBLACK.png" style="width:50px;height:50px;"></span>
						</a>
					</div>
					<div id="wb_Text1434" style="position: absolute; left: 540px; top: 86px; width: 121px; height: 28px; text-align: center; z-index: 1254;">
						<span style="color: #4B4B4B; font-family: Arial; font-size: 13px;">CHAT</span>
						<span style="color: #4B4B4B; font-family: Arial; font-size: 12px;"><br></span>
						<span style="color: #808080; font-family: Arial; font-size: 9.3px;">To Chat With Seller .. </span>
					</div>
					<div id="RollOver8" style="position: absolute; left:350px; top: 28px; width: 50px; height: 50px; z-index: 1255;">
						<a href="javascript:addToCommunity(<?php echo $seller['busi_id'];?>);" target="_self">
							<img class="hover" alt="" src="<?php echo asset_url();?>images/addcommunity_button2.png" style="width:50px;height:50px;"> 
							<span><img alt="" src="<?php echo asset_url();?>images/addcommunity_button1.png" style="width:50px;height:50px;"></span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 main-icon-div" style="background-color:#fff;height: 173px;">
				<div>
					<div id="wb_Image115" style="position: absolute; left:40px; top: 28px; width: 25px; height: 25px; z-index: 1237;">
						<?php if(!empty($seller['community_id'])){?>
						<img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image1" >
						<?php } else {?>
						<img src="<?php echo asset_url(); ?>images/ts/community.png" id="Image1" style="opacity :0.15" > 
						<?php }?>
					</div>
					<div id="wb_Image116" style="position: absolute; left:70px; top: 28px; width: 34px; height: 26px; z-index: 1238;">
						<?php if(!empty($seller['have_request'])){?>
						<img src="<?php echo asset_url(); ?>images/buyer-request.png" id="Image1" > 
						<?php } else {?>
						<img src="<?php echo asset_url(); ?>images/buyer-request.png" id="Image1" style="opacity :0.15" >
						<?php }?>
					</div>
					<div id="wb_Image117" style="position: absolute; left:115px; top: 29px; width: 25px; height: 25px; z-index: 1239;">
						<?php if($seller['is_logo_verified'] > 1){?>
						<img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" > 
						<?php } else { ?>
				        <img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" style="opacity :0.15" >
				        <?php }?>
					</div>
					<div style="position: absolute; left:160px; top: 29px; width: 25px; height: 25px; z-index: 1239;">
						<?php if($seller['is_active'] == 4){?>
						<img src="<?php echo asset_url(); ?>images/Active.png" id="Image1" > 
						<?php } else {?>
						<img src="<?php echo asset_url(); ?>images/Active.png" id="Image1" style="opacity :0.15" >
						<?php }?>
					</div>
				</div>
				<div>
					<div id="wb_Text591" style="position: absolute; left: 110px; top: 72px; width: 100px; height: 15px; z-index: 1233; text-align: left;">
						<span class="georgia-12px"><?php echo $seller['sub_category'];?></span>
					</div>
					<div id="wb_Text592" style="position: absolute; left: 10px; top: 72px; width: 96px; height: 15px; z-index: 1234; text-align: right;">
						<span class="georgia-12px-dark"><strong>Buyer | </strong></span>
					</div>
					<div id="wb_Text618" style="position: absolute; left: 10px; top: 95px; width: 95px; height: 15px; z-index: 1235; text-align: right;">
						<span class="georgia-12px-dark"><strong><?php echo $seller['company_country']; ?> | </strong></span>
					</div>
					<div id="wb_Text619" style="position: absolute; left: 110px; top: 95px; width: 86px; height: 15px; z-index: 1236; text-align: left;">
						<span class="georgia-12px"><?php echo $seller['company_province'];?></span>
					</div>
				</div>
				<div class="text-center" style="position: absolute; left:0px; top:95px; width: 100%; height: 15px; z-index: 1236; text-align: center;">
					<br><br>
					<div>
						<strong class="georgia-12px-dark">Annual Trade Volume</strong><br><span class="georgia-12px"><?php echo $seller['annual_trad_volume'];?> / Year</span>
					</div>
				</div>
				<div id="Layer5253-<?php echo $key;?>" style="position: absolute; text-align: left; visibility: hidden; right: -2px; top: 0px; width: 48px; height: 174px; z-index: 5521;" onclick="ShowObjectWithEffect('Layer2133', 1, 'slideright', 500, 'swing');return false;" class="product-left-arrow">
					<div id="wb_Shape2" style="position:absolute;left:18px;top:59px;width:11px;height:48px;z-index:5515;">
						<a href="#" onclick="ShowObjectWithEffect('Layer2133-<?php echo $key;?>', 1, 'slideright', 500, 'swing');return false;"><img src="<?php echo asset_url();?>images/img0092.png" id="Shape2" alt="" style="width:11px;height:48px;"></a>
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
