<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Check Out</title>
<meta name="description" content="The World's First Social B2B Platform">
<meta name="keywords"
	content="sourcing product, e-commerce, business, trade, commerce, community, video tube, business chat, buyers, sellers, shippers, products, china. exporters, suppliers">
<meta name="author" content="Hazem Zaki">
<meta name="categories" content="E-Commerce">
<meta name="generator" content="Hotline Internet & Technology Co. Ltd.">
<link href="<?php echo asset_url();?>css/station.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/pages/ads_checkput.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/style.css" rel="stylesheet">
<!-- <link href="<?php echo asset_url();?>css/pages/sellers.css" rel="stylesheet"> -->
<script src="<?php echo asset_url();?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo asset_url();?>js/bootstrap.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-blind.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-bounce.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-clip.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-drop.min.js"></script>
<script
	src="<?php echo asset_url();?>js/jquery.ui.effect-explode.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-fade.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-fold.min.js"></script>
<script
	src="<?php echo asset_url();?>js/jquery.ui.effect-highlight.min.js"></script>
<script
	src="<?php echo asset_url();?>js/jquery.ui.effect-pulsate.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-scale.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-shake.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-slide.min.js"></script>
<script src="<?php echo asset_url();?>js/wwb10.min.js"></script>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<style type="text/css">
#Layer54
{
   background-color: #F05235;
   background-color: rgba(240,82,53,0.98);
}
#Layer107 {
    background-color: #FFFFFF;
}
#Layer53 {
    background-color: #FFFFFF;
}
#Layer84 {
    background-color: #696969;
}
#Layer83 {
    background-color: #696969;
}
#Image45 {
    border: 0px #000000 solid;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
}
#Layer106 {
    background-color: #FFFFFF;
    -moz-box-shadow: 0px 6px 15px #000000;
    -webkit-box-shadow: 0px 6px 15px #000000;
    box-shadow: 0px 6px 15px #000000;
}
#Line1 {
    border-width: 0;
    height: 77px;
    width: 9px;
}
#Line2 {
    border-width: 0;
    height: 77px;
    width: 9px;
}
#Line3 {
    border-width: 0;
    height: 77px;
    width: 9px;
}
#Line4 {
    border-width: 0;
    height: 77px;
    width: 9px;
}
#Line5 {
    border-width: 0;
    height: 77px;
    width: 9px;
}
#Line6 {
    border-width: 0;
    height: 77px;
    width: 9px;
}
#Line7 {
    border-width: 0;
    height: 77px;
    width: 9px;
}
#Shape10 {
    border-width: 0;
}
.trd-nav h5 {
    margin: 10px 0px;
    display: block;
}
</style>
</head>
<body>
<div class="container" style="width:1280px;padding:1px 0px;">
 <?php if(empty($this->session->userdata('tsuserid')) && $this->session->userdata('tsuserid') <= 0) { ?>
		 <div class="container-fluid top-div">
            <ul class="nav navbar-nav navbar-left top-nav">
                <li><a href="#" class="headerMenu" data-toggle="modal" data-target="#myModal" style="padding-right: 0px;">Register</a></li>
                <li><a data-toggle="modal" style="color:#C0C0C0;font-family:Georgia;font-size:13px;">|</a></li>
                 <li><a href="signin" class="headerMenu"  style="padding-left: 0px;">Login</a></li> 
            </ul>
            <ul class="nav navbar-nav navbar-right top-nav">

                <li><a href="#" class="headerMenu" style="padding: 9px 15px;padding-right: 0px;">How to</a></li>
                <li><a data-toggle="modal" style="color:#C0C0C0;font-family:Georgia;font-size:13px;padding: 9px 15px;" >|</a></li>
                <li class="dropdown ">
                	<a href="#" class="dropdown-toggle headerMenu style177" data-toggle="dropdown" role="button" aria-expanded="false"  style="padding: 9px 15px;padding-left: 0px;">Language 
                        <img src="<?php echo asset_url();?>images/img0142.png" id="Shape64" alt="" style="width:14px;height:7px;">
                   	</a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="firstmain"><a href="#" target="_self">English</a> </li>
                        <li><a href="#" target="_self">中文</a> </li>
                        <li><a href="#" target="_self">العربية</a> </li>
                        <li><a href="#" target="_self">Türk</a> </li>
                        <li><a href="#" target="_self">日本語</a> </li>
                        <li><a href="#" target="_self">한국어</a> </li>
                        <li><a href="#" target="_self">भारतीय</a> </li>
                        <li><a href="#" target="_self">русский</a> </li>
                        <li><a href="#" target="_self">Dutch</a> </li>
                    </ul>
                </li>
            </ul>
		</div>
	<?php } else { ?>
	<div class="container-fluid top-div">
        <div class="navbar-header" style="margin-left:125px;"> 
        	<a href="#" onclick="document.getElementById('Layer106').style.display='block';" class="navbar-brand" style="padding-top:12px;">
        		<img src="<?php echo asset_url();?>images/img0235.png" style="width:29px;height:17px;margin-top: -2px;display: inline-block;" alt="" class="imgus">
        		<span style="color:#A9A9A9;font-family:Arial;font-size:16px;vertical-align:middle;">TRD</span><span style="color:#D3D3D3;font-family:Impact;font-size:16px;vertical-align:middle;">STATION</span>
        	</a> 
        </div>
        <ul class="nav navbar-nav pull-right top-nav login-user-nav">
            <li style="padding-top:17px;">
                <span style="color:#FFFFFF;font-family:Georgia;font-size:13px;">
                    <?php echo $tsprefix."  ".$tsusername; ?> 
              	</span>
           	</li>
            <li class="dropdown ">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding: 9px 15px;">
                    <?php if ($profile_img == '') { ?>
                        <img src="<?php echo asset_url(); ?>images/img0982.png" class="img-circle" style="width:30px; height:30px; margin-right:5px;">
                    <?php } else { ?>
                        <img src="<?php echo asset_url(); ?><?php echo $profile_img; ?>" class="img-circle" style="width:30px; height:30px; margin-right:5px;">
                    <?php } ?>
              	</a>
                <ul class="dropdown-menu" role="menu" style="font-weight: bold; left: -25px;font-size: 12px;text-align: center;min-width: 100px;">
                	<?php if($activstatus == 0) { ?>
                   		 <li class="firstmain"><a href="<?php echo base_url()?>continueregistration" target="_self">Continue</a> </li>
                   	<?php } else { ?>
                    	<?php if($tscategory_id == 1) { ?>
                    		<li class="firstmain"><a href="<?php echo base_url()?>mystation" target="_self">My Station</a> </li>
                    	<?php } else if($tscategory_id == 2) { ?>
                    		<li class="firstmain"><a href="<?php echo base_url()?>shipper_mystation" target="_self">My Station</a> </li>
                    	<?php } else if($tscategory_id == 3) { ?>
                    		<li class="firstmain"><a href="<?php echo base_url()?>buyer_mystation" target="_self">My Station</a> </li>
                    	<?php } ?>
                    <?php } ?>
                    <li><a href="<?php echo base_url(); ?>logout" target="_self" >Logout</a> </li>
                </ul>
            </li>
            <li class="dropdown " style="margin-top:5px;">
            	<a href="#" class="dropdown-toggle style177" data-toggle="dropdown" role="button" aria-expanded="false" style="padding: 9px 15px;">Language 
                    <img src="<?php echo asset_url(); ?>images/img1188.png" id="Shape17" alt="" style="width:14px;height:7px;">
              	</a>
                <ul class="dropdown-menu" role="menu" style="min-width:100px;left:0px;">
                    <li class="firstmain"><a href="#" target="_self">English</a> </li>
                    <li><a href="#" target="_self">中文</a> </li>
                    <li><a href="#" target="_self">العربية</a> </li>
                    <li><a href="#" target="_self">Türk</a> </li>
                    <li><a href="#" target="_self">日本語</a> </li>
                    <li><a href="#" target="_self">한국어</a> </li>
                    <li><a href="#" target="_self">भारतीय</a> </li>
                    <li><a href="#" target="_self">русский</a> </li>
                    <li><a href="#" target="_self">Dutch</a> </li>
                </ul>
            </li>
        </ul>
    </div>
	<?php } ?>
<div class="container" style="width: 1280px;padding-left:0px;">
<div id="Layer106" style="position: absolute; text-align: right; visibility: visible; top: 49px; width: 1280px; height: 235px; z-index:4000; background-color: #fff; display: none;" onmouseleave="ShowObjectWithEffect('Layer106', 0, 'fold', 500);return false;">
<nav class="navbar" style="background: none; border: 0px; margin-bottom: 0px; border-radius: 0px;">
	<div class="">
		<div class="" style="padding-top:0px;">
			<div class="col-lg-2 col-sm-4 logo">
				<div style="color:#E8AD8F;font-family:Georgia;font-size:12px;">WELCOME TO THE</div>
				<div style="color:#FFFFFF;font-family:Arial;font-size:27px;margin-top:35px;">TRD</div>
				<div style="color:#FFFFFF;font-family:Impact;font-size:48px;letter-spacing:0.07px;margin-top:-15px;">STATION</div>
				<div style="color:#E8AD8F;font-family:Arial;font-size:12px;margin-top:-7px;">The new ear of ecommerce</div>
			</div>
			<?php 
			if($page == 'sellers') {
				$bg_img = 'images/sellerheader0.jpg';
			} else if($page == 'shippers') {
				$bg_img = 'images/shipperrheader.jpg';
			} else if($page == 'buyers') {
				$bg_img = 'images/buyerrheader.jpg';
			} else if($page == 'product') {
				$bg_img = 'images/pro_header.png';
			} else if($page == 'pro-videos') {
				$bg_img = 'images/provideoheader.png';
			} else {
				$bg_img = 'images/ts/homeheader0.jpg';
			}
			?>
			<div class="col-lg-4 col-sm-8" style="background:url(<?php echo asset_url();?><?php echo $bg_img;?>) no-repeat center center; background-size:100% 100%; height:235px;">
			</div>
			<div class="col-lg-6 col-sm-12">
				<div class="row open-div1 bgwhite"style="position: relative; min-height: 235px;background-color: #FFFFFF;">
					<div class="col-xs-11">
						<ul class="nav navbar-nav trd-nav">
							<li class=" col-sm-2 col-xs-6">
								<a href="<?php echo base_url();?>"><img src="<?php echo asset_url();?>images/ts/Homekit.png" style="width: 50px;"><br>
								<h5>Home</h5></a></li>
							<li class="col-sm-2 col-xs-6">
								<a href="<?php echo base_url();?>seller"><img src="<?php echo asset_url();?>images/ts/seller.png" style="width: 50px;"><br>
								<h5 <?php if($page == 'sellers'){?>class="blue-color"<?php }?>>Sellers</h5></a></li>
							<li class="col-sm-2 col-xs-6">
								<a href="<?php echo base_url();?>products"><img src="<?php echo asset_url();?>images/ts/products.png" style="width: 50px;"><br>
								<h5 <?php if($page == 'product'){?>class="blue-color"<?php }?>>Products</h5></a></li>
							<li class="col-sm-2 col-xs-6">
								<?php if(empty($this->session->userdata('tsuserid')) && $this->session->userdata('tsuserid') <= 0) { ?>
									<a href="javascript:login_message()">
								<?php }else{ ?>
									<a href="<?php echo base_url();?>b-station">
								<?php } ?>
								<img src="<?php echo asset_url();?>images/ts/trade.png" style="width: 50px;"><br>
								<h5>B-Station</h5></a></li>
							<li class="col-sm-2 col-xs-6">
							<a href="<?php echo base_url();?>pro-video"><img src="<?php echo asset_url();?>images/ts/vidtube0.png" style="width: 50px;"><br>
								<h5 <?php if($page == 'pro-videos'){?>class="blue-color"<?php }?>>Pro-Videos</h5></a></li>
							<li class="col-sm-2 col-xs-6">
								<a href="<?php echo base_url();?>buyer"><img src="<?php echo asset_url();?>images/ts/buyer.png" style="width: 50px;"><br>
								<h5 <?php if($page == 'buyers'){?>class="blue-color"<?php }?>>Buyers</h5></a></li>
							<li class="col-sm-2 col-xs-6">
								<a href="<?php echo base_url();?>shipper"><img src="<?php echo asset_url();?>images/ts/shipper.png" style="width: 50px;"><br>
								<h5 <?php if($page == 'shippers'){?>class="blue-color"<?php }?>>Shippers</h5></a></li>
							<li class="col-sm-2 col-xs-6">
								<?php if(empty($this->session->userdata('tsuserid')) && $this->session->userdata('tsuserid') <= 0) { ?>
									<a href="javascript:login_message()">
								<?php }else{ ?>
									<a href="<?php echo base_url();?>stock-goods">
								<?php } ?>
								<img src="<?php echo asset_url();?>images/ts/stock.png" style="width: 50px;"><br>
								<h5>Stock Goods</h5></a></li>
							<li class="col-sm-2 col-xs-6">
							<?php if(empty($this->session->userdata('tsuserid')) && $this->session->userdata('tsuserid') <= 0) { ?>
									<a href="javascript:login_message()">
							<?php }else{ ?>
									<a href="<?php echo base_url();?>community">
							<?php } ?>
								<img src="<?php echo asset_url();?>images/ts/CommMember.png" style="width: 50px;"><br>
								<h5>Community</h5></a></li>
							<li class="col-sm-2 col-xs-6">
								<?php if(empty($this->session->userdata('tsuserid')) && $this->session->userdata('tsuserid') <= 0) { ?>
									<a href="javascript:login_message()">
							<?php }else{ ?>
									<a href="<?php echo base_url();?>my-alert" data-toggle="modal" data-target=".bs-example-modal-lg">
							<?php } ?>
								<img src="<?php echo asset_url();?>images/ts/Alerts1.png" style="width: 50px;"><br>
								<h5>My Alerts</h5></a></li>
						</ul>
					</div>
					<div class="reminder-div" style="right:-1px">
						<div id="wb_Image168" style="position:absolute;left:144px;top:61px;width:53px;height:53px;z-index:1121;">
							<?php if(!empty($busi_id)) { ?>
								<?php if($tscategory_id == 1) { ?>
									<a href="<?php echo base_url();?>desksite/<?php echo $busi_id;?>">
								<?php } else if($tscategory_id == 2) { ?>
									<a href="<?php echo base_url();?>shipper/profile/<?php echo $busi_id;?>">
								<?php } else { ?>
									<a href="<?php echo base_url();?>buyer/profile/<?php echo $busi_id;?>">
								<?php } ?>
							<?php } else { ?>
							<a href="#" data-toggle="modal" data-target="#accessDeniedModalLogin" data-backdrop="static" data-keyboard="false">
							<?php } ?>
							<img src="<?php echo asset_url();?>images/Desksite-big.png" id="Image168" alt="" style="width:53px;height:53px;">
							</a>
						</div>
						<div id="wb_Shape15" style="position:absolute;left:455px;top:60px;width:55px;height:55px;z-index:1122;">
							<?php if(!empty($busi_id)) { ?>
								<?php if($tscategory_id == 1) { ?>
									<a href="<?php echo base_url();?>mystation">
								<?php } else if($tscategory_id == 2) { ?>
									<a href="<?php echo base_url();?>shipper_mystation">
								<?php } else { ?>
									<a href="<?php echo base_url();?>buyer_mystation">
								<?php } ?>
							<?php } else { ?>
							<a href="#" data-toggle="modal" data-target="#accessDeniedModalLogin" data-backdrop="static" data-keyboard="false">
							<?php } ?>
							<img src="<?php echo asset_url();?>images/img3449.png" id="Shape15" alt="" style="width:55px;height:55px;" style="width:55px;height:55px;">
							</a>
						</div>
						<div id="wb_Image217" style="position:absolute;left:302px;top:63px;width:50px;height:50px;z-index:1123;">
							<?php if(!empty($busi_id)) { ?>
								<?php if($tscategory_id == 1) { ?>
									<a href="<?php echo base_url();?>mystation">
								<?php } else if($tscategory_id == 2) { ?>
									<a href="<?php echo base_url();?>shipper_mystation">
								<?php } else { ?>
									<a href="<?php echo base_url();?>buyer_mystation">
								<?php } ?>
							<?php } else { ?>
							<a href="#" data-toggle="modal" data-target="#accessDeniedModalLogin" data-backdrop="static" data-keyboard="false">
							<?php } ?>
							<img src="<?php echo asset_url();?>images/configure-2.png" id="Image217" alt="" style="width:50px;height:50px;">
							</a>
						</div>
						<div id="wb_Text256" style="position:absolute;left:122px;top:132px;width:95px;height:16px;text-align:center;z-index:1124;">
							<span style="color:#FFFFFF;font-family:Georgia;font-size:13px;">My Desksite</span>
						</div>
						<div id="wb_Text270" style="position:absolute;left:280px;top:132px;width:95px;height:16px;text-align:center;z-index:1125;">
							<span style="color:#FFFFFF;font-family:Georgia;font-size:13px;">My Station</span>
						</div>
						<div id="wb_Text389" style="position:absolute;left:438px;top:132px;width:95px;height:16px;text-align:center;z-index:1126;">
							<span style="color:#FFFFFF;font-family:Georgia;font-size:13px;">My Account</span>
						</div>
						<div id="wb_Text392" style="position:absolute;left:98px;top:154px;width:147px;height:42px;text-align:center;z-index:1127;">
							<span style="color:#A9A9A9;font-family:Arial;font-size:11px;">View what you have done, know how the world see your innovation..</span>
						</div>
						<div id="wb_Text393" style="position:absolute;left:258px;top:154px;width:140px;height:42px;text-align:center;z-index:1128;">
							<span style="color:#A9A9A9;font-family:Arial;font-size:11px;">Build and control your Desksite/Website the way you like.. </span>
						</div>
						<div id="wb_Text394" style="position:absolute;left:415px;top:154px;width:140px;height:42px;text-align:center;z-index:1129;">
							<span style="color:#A9A9A9;font-family:Arial;font-size:11px;">View, edit, upgrade or disable you account, profile, and much more..</span>
						</div>
						<a href="#" class="menu-arrow"><img src="<?php echo asset_url(); ?>/images/ts/img0020.png"><img src="<?php echo asset_url(); ?>/images/ts/img0020.png"></a> 
						<a href="#" class="menu-arrow2"><img src="<?php echo asset_url(); ?>/images/ts/img0020.png"><img src="<?php echo asset_url(); ?>/images/ts/img0020.png"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>
</div>
</div>
</div>
	<div id="Layer1" style="position: absolute; text-align: center; left: 0; top: 50px; right: 0; bottom: 0;">
		<div id="Layer1_Container" style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
			<div id="Layer2"
				style="position: absolute; text-align: left; left: 52px; top: 35px; width: 762px; height: 366px;">
				<div id="Layer5"
					style="position: absolute; text-align: left; left: 508px; top: 289px; width: 125px; height: 32px;">
				</div>
				<div id="wb_Text534"
					style="position: absolute; left: 175px; top: 184px; width: 44px; height: 15px;text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Details</span>
				</div>
				<div id="wb_Text1"
					style="position: absolute; left: 245px; top: 183px; width: 44px; height: 15px;text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><?php echo $msad[0]['name'];?></span>
				</div>
				<div id="wb_Text2"
					style="position: absolute; left: 175px; top: 159px; width: 44px; height: 15px;text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Plan</span>
				</div>
				<div id="wb_Text3"
					style="position: absolute; left: 245px; top: 158px; width: 160px; height: 15px;text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Black
						Horse&nbsp; Membership</span>
				</div>
				<div id="wb_Text4"
					style="position: absolute; left: 175px; top: 210px; width: 44px; height: 15px;text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Terms</span>
				</div>
				<div id="wb_Text5"
					style="position: absolute; left: 244px; top: 209px; width: 66px; height: 15px;text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">12
						Months</span>
				</div>
				<div id="wb_Text6"
					style="position: absolute; left: 175px; top: 132px; width: 44px; height: 15px;text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Item</span>
				</div>
				<hr id="Line11"
					style="position: absolute; left: 99px; top: 286px; width: 533px; height: 1px;">
				<div id="wb_Text7"
					style="position: absolute; left: 449px; top: 296px; width: 44px; height: 19px;text-align: left;">
					<span style="color: #2D2D2D; font-family: Arial; font-size: 17px;">Total</span>
				</div>
				<div id="wb_Text8"
					style="position: absolute; left: 522px; top: 296px; width: 102px; height: 19px;text-align: left;">
					<span style="color: #FFFFFF; font-family: Arial; font-size: 16px;"><strong>USD
							<?php echo $sprice;?>.00</strong></span>
				</div>
				<hr id="Line22"
					style="position: absolute; left: 99px; top: 323px; width: 533px; height: 1px;">
				<div id="wb_Text9"
					style="position: absolute; left: 244px; top: 131px; width: 104px; height: 15px;text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">1
						Subscription</span>
				</div>
				<div id="Layer9"
					style="position: absolute; text-align: left; left: 151px; top: 55px; width: 486px; height: 45px;">
					<div id="wb_Text533"
						style="position: absolute; left: 23px; top: 9px; width: 422px; height: 24px; z-index: 0; text-align: left;">
						<span
							style="color: #F5F5F5; font-family: Georgia; font-size: 20px;"><strong>Trade
								Station Membership Subscription </strong></span>
					</div>
				</div>
				<div id="wb_Image3"
					style="position: absolute; left: 97px; top: 54px; width: 47px; height: 46px;">
					<img src="<?php echo asset_url();?>images/img3502.png" id="Image3" alt="" style="width: 45px;">
				</div>
				<div id="wb_Text35"
					style="position: absolute; left: 274px; top: 232px; width: 44px; height: 15px;text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Days</span>
				</div>
				<div id="wb_Text36"
					style="position: absolute; left: 246px; top: 233px; width: 29px; height: 15px;text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">366</span>
				</div>
				<div id="Layer14"
					style="position: absolute; text-align: left; left: 0px; top: 0px; width: 762px; height: 5px;">
				</div>
			</div>
			<div id="Layer7"
				style="position: absolute; text-align: left; left: 922px; top: 35px; width: 299px; height: 477px; z-index: 61;">
				<div id="wb_Text27"
					style="position: absolute; left: 17px; top: 24px; width: 214px; height: 24px; z-index: 28; text-align: left;">
					<span
						style="color: #3C3C3C; font-family: Georgia; font-size: 20px;"><strong>Terms
							&amp; conditions</strong></span>
				</div>
				<div id="wb_Text28"
					style="position: absolute; left: 18px; top: 157px; width: 268px; height: 48px; z-index: 29; text-align: left;">
					<span style="color: #000000; font-family: Arial; font-size: 13px;">You
						agree and online sign on the <a href="#" class="style5"
						onclick="ShowObjectWithEffect('wb_G-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('Main_Terms_Layer', 1, 'fade', 500, 'swing');return false;">Paid
							Services terms &amp; conditions </a>with TrdStation platform.
					</span>
				</div>
				<div id="wb_Text18"
					style="position: absolute; left: 17px; top: 68px; width: 269px; height: 81px; z-index: 33; text-align: left;">
					<span style="color: #000000; font-family: Arial; font-size: 13px;"><u>Clicking
							on &quot;Checkout&quot; means</u></span><span
						style="color: #000000; font-family: SimSun; font-size: 13px;"><u>：<br></u></span><span
						style="color: #000000; font-family: Arial; font-size: 13px;"><br>You
						agree to TrdStation's <a href="#" target="_blank" class="style5"
						onclick="ShowObjectWithEffect('wb_G-terms-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('Main_Terms_Layer', 1, 'fade', 500, 'swing');return false;">Terms
							&amp; Conditions</a> and <a href="./privacy.html" target="_blank"
						class="style5"
						onclick="ShowObjectWithEffect('wb_G-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 1, 'fade', 500, 'swing');ShowObjectWithEffect('Main_Terms_Layer', 1, 'fade', 500, 'swing');return false;">Privacy
							Policy</a>.<br></span>
				</div>
				<div id="wb_Shape1"
					style="position: absolute; left: 32px; top: 302px; width: 234px; height: 53px; z-index: 34;">
					<!-- 					<a href="https://www.sandbox.paypal.com/checkoutnow?locale.x=en_US&version=4&env=sandbox&uid=e66223716e&token=PAY-5W46720031135220SLGKIJ3Q&xcomponent=1#/checkout/login"> -->
					<!-- 					</a> -->
					<div id="paypal-button" class="ads-confirm-btn"></div>
				</div>
				<div id="wb_Shape2"
					style="position: absolute; left: 33px; top: 381px; width: 234px; height: 53px; z-index: 35;">
					<a
						href="https://www.sandbox.paypal.com/webapps/xoonboarding?country.x=US&env=sandbox&exp=guest&locale.x=en_US&token=EC-5EJ09118GJ0687704&uid=2230694ef1&version=4&xcomponent=1#/checkout/guest">
					</a>
				</div>
			</div>
			<div id="Main_Terms_Layer"
				style="position: fixed; text-align: center; visibility: hidden; left: 0; top: 0; right: 0; bottom: 0; z-index: 62;">
				<div id="Main_Terms_Layer_Container"
					style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer344"
						style="position: fixed; text-align: left; left: 0; top: 0; right: 0; bottom: 0; z-index: 45;">
					</div>
					<div id="G_Terms"
						style="position: absolute; text-align: right; left: 192px; top: 46px; width: 900px; height: 644px; z-index: 46;">
						<div id="G_Terms_Container"
							style="width: 900px; position: relative; margin-left: auto; margin-right: 0; text-align: left;">
							<div id="Layer345"
								style="position: absolute; text-align: right; left: 0px; top: 1px; width: 900px; height: 180px; z-index: 43;">
								<div id="Layer345_Container"
									style="width: 900px; position: relative; margin-left: auto; margin-right: 0; text-align: left;">
									<button id="AdvancedButton54"
										onclick="ShowObjectWithEffect('wb_G-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('Main_Terms_Layer', 0, 'fade', 500, 'swing');return false;"
										type="button"
										style="position: absolute; left: 858px; top: 6px; width: 37px; height: 37px; z-index: 36;"
										onclick="window.location=''" name="" value="">
										<div style="text-align: center">
											<span
												style="color: #303030; font-family: Arial; font-size: 20px">X</span>
										</div>
									</button>
									<div id="wb_G-terms-text1"
										style="position: absolute; left: 60px; top: 22px; width: 614px; height: 16px; z-index: 37; text-align: left;">
										<span
											style="color: #303030; font-family: Impact; font-size: 32px;">TrdStation
											Terms of Use.<br>Legal Information &amp; Conditions, was
											updated on Oct. 1st, 2017.
										</span>
									</div>
									<div id="wb_B-terms-text1"
										style="position: absolute; left: 60px; top: 22px; width: 614px; height: 16px; visibility: hidden; z-index: 38; text-align: left;">
										<span
											style="color: #303030; font-family: Impact; font-size: 32px;">TrdStation
											Terms of Use.<br>Legal Information &amp; Conditions For Black
											Horse Members, was updated on Oct. 1st, 2017.
										</span>
									</div>
									<div id="wb_P-text1"
										style="position: absolute; left: 60px; top: 32px; width: 614px; height: 16px; visibility: hidden; z-index: 39; text-align: left;">
										<span
											style="color: #303030; font-family: Impact; font-size: 32px;">Privacy
											Policy<br>The TrdStation Privacy Policy was updated on Oct.
											1st, 2017.
										</span>
									</div>
								</div>
							</div>
							<div id="Layer343"
								style="position: absolute; overflow: auto; text-align: center; left: 23px; top: 179px; width: 867px; height: 462px; z-index: 44;">
								<div id="Layer343_Container"
									style="width: 867px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
									<div id="wb_G-terms-text2"
										style="position: absolute; left: 40px; top: 19px; width: 775px; height: 16px; z-index: 40; text-align: left;">
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="line-height: 19px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong><a
													href="#" class="style5"
													onclick="ShowObjectWithEffect('wb_G-terms-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 0, 'fade', 500, 'swing');return false;">General
														Terms &amp; Conditions</a></strong></span>
										</div>
										<div style="line-height: 19px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong><a
													href="#" class="style5"
													onclick="ShowObjectWithEffect('wb_G-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 0, 'fade', 500, 'swing');return false;">Paid
														Services Terms &amp; Conditions</a></strong></span>
										</div>
										<div style="line-height: 19px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong><a
													href="#" class="style5"
													onclick="ShowObjectWithEffect('wb_G-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 1, 'fade', 500, 'swing');return false;">Privacy
														Policy</strong></a></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong><br></strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong><br></strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>1.&nbsp;&nbsp;
													INTRODUCTION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">Welcome
												to the www.trdstation.com, the free and paid based services
												platform. </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">This
												Terms of Use is a legal agreement between TrdStation&quot;,
												“ www.www.trdstation.com”, &quot; the site&quot;, “Us”, “
												We”, “ HOTLINE </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">Internet
												and Technology Co. Ltd.” or ”HOTLINE” and you “user”,
												“users”, “visitor’, “free member’, “paid member (hereinafter
												referred </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">to
												as “black horse member”).</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">This
												Terms of Use “ the Agreement” applies to
												www.www.trdstation.com and its contents, to manage the
												visit, remain and use of </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">visitors
												“users or members” to www.www.trdstation.com and manage the
												use of trdstation application.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>2.&nbsp;&nbsp;
													OWNERSHIP OF SITE</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">These
												Terms of Use (the “Terms of Use”) apply to the TrdStation
												platform located at www.trdstation.com, and all associated </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">applications,
												services or products linked to www.trdstation.com, which is
												owned and operated by HOTLINE Internet and </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">Technology
												Co. Ltd., including its affiliates, third parties
												organizations. </span>
										</div>
										<div style="margin-left: 12px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><u>BY
													USING WWW.TRDSTATION.COM OR DOWNLOAD TRDSTATION MOBILE
													APPLICATION, YOU AGREE TO THESE </u></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><u>TERMS
													OF USE; IF YOU DO NOT AGREE, PLEASE EXIT WWW.TRDSTATION.COM
													PLATFORM AND DO NOT USE </u></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><u>TRDSTATION
													APPLICATION OR OUR RELATED FREE OR PAID SERVICES.</u></span>
										</div>
										<div style="margin-left: 12px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">HOTLINE
												reserves the right, to change, modify, add or remove
												portions of these Terms of Use, at any time. It is your </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">responsibility
												to check these Terms of Use periodically for changes. Your
												continued use of the site following the posting of </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">changes
												will mean that you accept and agree to the changes. As long
												as you comply with these Terms of Use.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">HOTLINE
												reserves the right to change/add any further upgrade,
												modification, addition or change to the Service, or any new
											</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">function
												that enhances our Service shall be subject to this
												Agreement.</span>
										</div>
										<div style="margin-left: 12px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">
											</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>3.&nbsp;&nbsp;
													PERMISSION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">Once
												you agree to this terms of use:</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												You will be bound by the terms and conditions contained in
												this Agreement, applicable law, regional regulations and
												justices.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												You may have the right to use www.trdstation.com platform
												and all of our services and related applications.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>4.&nbsp;&nbsp;
													REGISREATION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">Once,
												you join www.trdstation.com and register, and become a free
												or black horse member, you herby agree to:</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Provide true, accurate, current and complete information
												about yourself and your company (such as license,
												certificates, </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">identification,
												contact details and etc.), and promptly update the
												registration information to keep it true, accurate, current
												and </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">complete.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												If you represent a business entity registered on
												Www.trdstation.com, you promise that you have the authority
												to bind the </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">entity
												to this Agreement. Furthermore, you and your entity will
												bear all responsibility and obligations for any contract, </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">issued
												under your entity registered name, or the contact person you
												add&nbsp; to the www.trdstation.com, with any users or </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">destination
												under www.trdstation.com order/contract service.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												If you provide any information that is untrue, inaccurate,
												not current or incomplete, HOTLINE has the right to
												terminate your </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">account
												without any previous notice.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												You fully understand and agree to publish the information of
												yourself or the contact person you add, and your company </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">information
												( such as license, certificates, contact details, profile
												images, emails..etc).</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												You may receive email from www.trdstation.com, to keep you
												updated with for further information, new services, new </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">arrivals…etc,
												in case you refuse to continue to receive these kind of
												information, you must send us a written notice.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>5.&nbsp;
													TERMS OF USE</strong></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												You are solely responsible for maintaining the
												confidentiality of your Unique trdstation ID and Password,
												and are fully </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">responsible
												for all activities that occur under your Unique trdstation
												ID and Password.&nbsp; and are fully responsible to </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">immediately
												notify HOTLINE of any unauthorized use of your Unique
												trdstation ID and Password or any other security </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">issues,
												and to ensure the existence of your platform contents from
												time to time. </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												HOTLINE provide no guarantees, and will not be liable for
												any loss or damage arising from or caused by any irregular,
											</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">unauthorized
												behaviors, force majeure, attacks, interrupts, or
												malfunction.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												HOTLINE provides additional services to users who have been
												ended the registration process and prefer to become a Black
											</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">Horse
												Member and select the suitable plan and agreed to pay for
												such additional services listed in details in subscription </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">page,
												Using www.trdstation.com paid services are governed by
												additional <u>terms and conditions “Black Horse Members </u>
											</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><u>Agreement”</u>
												in addition to this Terms &amp; Conditions.</span>
										</div>
										<div style="margin-left: 12px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 48px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong><br></strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>6.&nbsp;&nbsp;
													USE OF WWW.TRDSTATION.COM AND MOBILE APPLICATION </strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">The
												permission is granted to view and use the materials
												(information and software) found on www.trdstation.com and
												trdsation </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">application
												and you may not:</span>
										</div>
										<div style="margin-left: 12px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Copy or modify any materials in www.trdstation.com platform
												or trdsation application.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Make use of our member contents, person or company name,
												information, design or videos for any&nbsp;&nbsp; </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">&nbsp;
												commercial purpose.&nbsp; </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Make use of www.trdstation.com for fraudulent or illegal
												activities, or violate any applicable law,</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">&nbsp;
												regulation or guideline.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Download or transfer or mirror the technical contents or our
												system files.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Imitate or destroy or affect the systems or the software
												presented in the platform.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Attempt to decompile, reverse engineer, disassemble or
												derive the source code.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Upload any sex-related materials to our platform, or to our
												trdsation application.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Post any material to members that are not related to
												international trade or business cooperation.</span><span
												style="color: #303030; font-family: Arial; font-size: 11px;">
											</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">
											</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">Please
												be informed that </span><span
												style="color: #303030; font-family: Arial; font-size: 11px;">HOTLINE<strong>
											</strong></span><span
												style="color: #303030; font-family: Arial; font-size: 13px;">is
												not responsible for any consequence caused by your behavior
												during the use of </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">www.trdstation.com,
												and we may immediately and automatically terminate or block
												the access of any user, free or black horse </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">member,
												at any time, without a pervious warning, in case we found
												that he is involved in violating these restrictions. Upon </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">termination
												user/users, free or black horse member, must not access
												www.trdstation.com again and uninstall trdstation </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">application.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>7.&nbsp;&nbsp;
													QUALIFICATION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">HOTLINE
												provides a social B2B platform, for only requires qualified
												users “individuals or companies”, “free or black horse </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">members”,
												who can legally issuing contracts under applicable law. If
												you do not qualify, please logout www.trdstation.com and do
											</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">not
												use our service.</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">HOTLINE
												may stop the access, delete or suspend account/s of any
												user/s, at any time, without a previous notice. </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>8.&nbsp;&nbsp;
													COPYRIGHTS AND TRADEMARKS</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">HOTLINE
												Internet and technology Co. Ltd. reserve all the rights,
												secure technology, systems codes, materials in </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">www.trdstation.com
												platform and trdstation application and its contents. All
												users are free to use and share any material in </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">www.trdstation.com
												or trdstation application without moving, removing, altering
												any watermark, trademark, copyrights, logos, or </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">any
												proprietary marks in our platform or our trdstation
												application. </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>9.&nbsp;&nbsp;
													UPLOADED MATERIALS</strong></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Users/Members may responsible about the copyrights and
												intellectual property rights for all materials “image”, “
												icons”, “ text”, </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">“videos
												or audios”, “apps”, “platforms or URL”, “ links”&nbsp; that
												may uploaded by them to www.trdstation.com platform,
												trdstation </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">application.
											</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												HOTLINE pays attention to ethics and respect all regions and
												religions, so we not allow users/members to upload any kind
												or </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">adult
												“scandalous”, sex-related material “ images” or “
												videos”..etc,&nbsp; we may immediately terminate the&nbsp;
												access of any </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">user/member,
												without a pervious warning, in case we found that he is
												involved in&nbsp; uploading such material.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Users/Members may responsible about sending or uploading
												harmful, libelous, unlawfully threatening material to other
											</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">user/users
												in www.trdstation.com, or any materials contain Viruses,
												Trojans or Malwares.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>10.
													CONTENTS</strong></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												You may visit www.trdstation.com and view or use any
												information or contents in the platform or application, at
												your own </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">responsibility,
												for which we are not liable. It is your responsibility to
												ensure that any products, services or information meet </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">your
												requirements. </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Though HOTLINE works too hard to verify the information
												provided by all the users/members, HOTLINE does not
												guarantee </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">&amp;
												is not legally responsible for the accuracy, integrity,
												quality &amp; non-infringement of such information.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
											</span><span
												style="color: #303030; font-family: Roboto; font-size: 13px;">Though
												www.trdstation.com contains many external platform links,
												HOTLINE has no control over such platform links, </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;">Please
												be cautious and carefully read the terms and conditions and
												the privacy policy of such platforms before using.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>11.
													DISCLAIMER</strong></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-HOTLINE
												provides no guarantees, expressed or implied concerning the
												accuracy, results or reliability of the use of materials </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">and
												information found on www.trdstation.com platform or
												trdstation application. HOTLINE has no responsibility to
												you, </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">users/members
												or any other third parties and has no control over any
												order, dealing or contracts that created under our </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">contracting
												system among members. </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												HOTLINE works too hard and does a great effort to safe and
												secure Black Horse members platforms contents such as “ </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">information,
												contacts, images, videos, offers, requests, products
												information and details …etc”&nbsp; but provides no
												guarantees </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">and
												has no responsibility for any damage or lose of data as long
												as we provide our Black Horse Members with a great tools to
											</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">backup
												or restore the contents of their platforms from time to
												time.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px; line-height: 17px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												We are not responsible in case www.trdstation.com platform
												has any server interruption, slow loading, or is not
												available </span>
										</div>
										<div style="margin-left: 36px; line-height: 17px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">&quot;blocked&quot;
												in a particular country due to regional regulations,
												hardware malfunction, software problems, telecommunications,
											</span>
										</div>
										<div style="margin-left: 36px; line-height: 17px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">governmental
												actions, internet firewalls or protection systems..etc.</span>
										</div>
										<div style="margin-left: 36px; line-height: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												www.trdstation.com is a global B2B platform and has been
												translated into many languages using a third party auto-</span>
										</div>
										<div style="margin-left: 36px; line-height: 17px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">translate
												technology. HOTLINE isn't responsible for the difference or
												conflict between English version and any other </span>
										</div>
										<div style="margin-left: 36px; line-height: 17px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">languages
												in the general user interface, in member’s
												platform/Desksite, products details and information, or the
												auto-</span>
										</div>
										<div style="margin-left: 36px; line-height: 17px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">translation
												functions that used in many features or services in
												www.trdstation.com such as ( chat windows, posts </span>
										</div>
										<div style="margin-left: 36px; line-height: 17px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">translation).</span><strong></strong>
										</div>
										<div style="margin-left: 36px; line-height: 38px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;"><strong>-
											</strong>You acknowledge that HOTLINE has no responsibility
												for downloading any material from www.trdstation.com, any
												material </span>
										</div>
										<div style="margin-left: 36px; line-height: 19px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;">such
												as “Images, videos, data …etc), and you agree that any
												download of such material is done at your own discretion.
												You </span>
										</div>
										<div style="margin-left: 36px; line-height: 19px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;">will
												be fully responsible for any damages may happen to your
												computer system or loss of data resulting by downloading </span>
										</div>
										<div style="margin-left: 36px; line-height: 19px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;">such
												material.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-</span><span
												style="color: #303030; font-family: Roboto; font-size: 13px;">
												www.trdstation.com, HOTLINE, its directors, owners and
												employees, shall not be liable to any user/member or anyone
												else </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;">for
												any damage, loss or injury resulting from using our help
												information, tips on Www.trdstation.com, or for any action
												taken </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;">by
												you during chat or a call conversation with our teamwork.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong><br></strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>12.
													SUSPENSION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">HOTLINE
												has the right to immediately, suspend your account, access
												or use of www.trdstation.com services or trdstation </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">application,
												if we think it is reasonably necessary because:</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												You violate this terms and conditions.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												You Uploading non-acceptable material to www.trdstation.com
												platform or trdstation application.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												We feel that you threaten our security. </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>13.
													LAW &amp; JURISDICTION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">This
												terms of use and any clime, dispute and obligations arising
												out of it, shall be governed by Hong Kong law. as long as
												the </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">parties
												hereby agree to submit to the exclusive jurisdiction of the
												Hong Kong courts.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>14.
													COPYRIGHT</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">All
												contents in these platforms are Copyright © 2017 by Hotline
												Internet And Technology Co. Ltd.</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>15.
													INFORMATION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">If
												you have any questions or query regarding the
												www.trdstation.com Terms &amp; Conditions, please get in
												touch with us. </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Hotline
												Internet and Technology Co. Ltd.</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">www.trdstation.com</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">info@trdstaion.com</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong><br></strong></span>
										</div>
									</div>
									<div id="wb_B-terms-text2"
										style="position: absolute; left: 38px; top: 19px; width: 773px; height: 16px; visibility: hidden; z-index: 41; text-align: left;">
										<div style="line-height: 18px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><a
													href="#" class="style5"
													onclick="ShowObjectWithEffect('wb_G-terms-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 0, 'fade', 500, 'swing');return false;">General
														Terms &amp; Conditions</a></strong></span>
										</div>
										<div style="line-height: 18px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><a
													href="#" class="style5"
													onclick="ShowObjectWithEffect('wb_G-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 0, 'fade', 500, 'swing');return false;">Paid
														Services Terms &amp; Conditions</a></strong></span>
										</div>
										<div style="line-height: 18px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><a
													href="#" class="style5"
													onclick="ShowObjectWithEffect('wb_G-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 1, 'fade', 500, 'swing');return false;">Privacy
														Policy</strong></a></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><br></strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>1.
													INTRODUCTION</strong></span>
										</div>
										<div style="margin-left: 48px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><br></strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">This
												Terms of Use is a legal agreement between TrdStation&quot;,
												“ www.trdstation.com”, &quot; the site&quot;, “Us”, “ We”, “
												HOTLINE Internet and </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Technology
												Co. Ltd.” or ”HOTLINE” and the fee based service, you
												“member”, “members”, “ paid service members (hereinafter
												referred to </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">as
												“black horse member”).</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">This
												Additional Version of Terms of Use “ the Agreement” applies
												to www.trdstation.com and its contents, to manage the paid </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">membership
												subscription program, plan, fees and manage the use of Black
												Horse Members.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>2.
													TERMS OF THE BLACK HORSE MEMBER</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">You
												fully understand, agree </span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">to
												and accept of all the following terms and conditions of this
												Agreement:</span><strong></strong>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												You shall accept this agreement “ Black Horse Terms of Use”,
												in addition to the general terms of use, if you not agree,
												PLEASE DO </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">NOT
												UPGRADE YOUR PLAN AND STOP USING OUR SERVICE. </span>
										</div>
										<div style="margin-left: 48px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												HOTLINE reserves the right, to change, modify, add or remove
												portions of these Terms of Use, at any time. It is your
												responsibility to </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">check
												these Terms of Use periodically for changes. Your continued
												use of the site following the posting of changes will mean
												that </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">you
												accept and agree to the changes. As long as you comply with
												these Terms of Use.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												HOTLINE reserves the right to change/add any further
												upgrade, modification, addition or change to the Service, or
												any new function </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">that
												enhances our service shall be subject to this Agreement. </span>
										</div>
										<div style="margin-left: 48px; line-height: 30px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><strong>3.&nbsp;&nbsp;
													FEES</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
											</span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">The
												membership program is paid services, are year-based, onetime
												payment “ in advance”. </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
											</span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">The
												membership program is paid services. For details, please
												view (</span><span
												style="color: #303030; font-family: Calibri; font-size: 12px;">My
												Station/Subscription)</span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">.</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
											</span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">HOTLINE
												has the right to amend the membership program price levels
												and payment methods. However, the changes shall not affect </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">any
												previous subscriptions before its expiration date.</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
											</span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">HOTLINE
												not provide refundable service upon account termination.</span>
										</div>
										<div style="margin-left: 48px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><strong>4.&nbsp;&nbsp;
													BLACK HORSE MEMBERS SERVICES</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
											</span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">The
												membership “ Black Horse Members” related features and&nbsp;
												services will only be available for the paid members “ Black
												Horse </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">Members”,
												once the member payment received&nbsp; successfully “ it may
												requires 2 wording days”.</span>
										</div>
										<div style="margin-left: 48px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
											</span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">The
												membership “ Black Horse Members” subscription period will
												start form the date of service activation till and continue
												for one </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">year
												“365 days”.</span>
										</div>
										<div style="margin-left: 48px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
											</span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">When
												the&nbsp; Black Horse Members subscription period
												ended,&nbsp; members can renew the subscription at the same
												plan, upgrade, </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">downgrade.</span>
										</div>
										<div style="margin-left: 48px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
											</span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">In
												case the Black Horse Member not take any action within 30
												dyas, HOTLINE has the right or downgrade his subscription to
												a Free </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">Member,
												and HOTLINE will not be responsible for any lose of contents
												”data/information” or damage resulting from changing the </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">settings
												and features from Black Horse Member Features to a Free
												Member Features.</span>
										</div>
										<div style="margin-left: 79px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><strong>
											</strong></span>
										</div>
										<div style="margin-left: 79px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><strong>5.&nbsp;&nbsp;
													BANDWIDTH</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">Though
												HOTLINE provide Black Horse Member with Video service “
												uploading Video/Videos of their products” with unmetered
												monthly </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">bandwidth
												as a great service helps the Black Horse Members to high the
												traffic of views, but HOTINE has all the right to temporary
												“ </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">monthly”
												disable the view of any video/videos reach to unaccepted
												monthly bandwidth or any video/videos may affects the
												bandwidth </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">of
												www.trdstation.com server, according to the global servers
												standard rules.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>6.&nbsp;&nbsp;&nbsp;
													PERMISSION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Once
												you agree to this terms of use:</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												You will be bound by the general terms and conditions, terms
												and conditions contained in this Agreement, applicable law,
												regional </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">regulations
												and justices.</span>
										</div>
										<div style="margin-left: 48px;">
											<span
												style="color: #303030; font-family: Calibri; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												You may have the right to use trdstation.com website and all
												of our paid services and related applications.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>7.&nbsp;&nbsp;&nbsp;
													OBLIGATIONS</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Once,
												you become a Black Horse Member, you herby agree to:</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												Provide true, accurate, current and complete information
												about yourself and your company (such as license,
												certificates, </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">identification,
												contact details and etc.), and promptly update the
												registration information to keep it true, accurate, current
												and </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">complete.</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												If you represent a business entity registered on
												TrdStation.com, you promise that you have the authority to
												bind the entity to this </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">agreement.
												Furthermore, you and your entity will bear all
												responsibility and obligations for any contract, issued
												under your entity </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">registered
												name, or the contact person you add&nbsp; to the
												trdstation.com, with any user/member or destination under
												trdstation.com </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">order/contract
												service. </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												You fully agree, obligate and promise that you have the
												authority to bind your entity to provide www.trdstation.com
												members with </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">the
												service, features, advantages “ such as Products
												guarantees&quot; Products quantity and quality
												assurance&quot;, Products </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Certificates,
												Export ability and license, based on the terms you have
												written by your own will”, other wise PLEASE DON’T </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">MENTION
												THESE ADVENTAGES IN YOUR WEBSITE AND DISABLE IT BY TURNING
												THE TOGGLE BUTTON “ NEXT TO EACH </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">FEATURE”
												OFF&quot;, IN YOUR ( My Desksite/Ranking).</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												If you provide any information that is untrue, inaccurate,
												not current or incomplete, or not provide user/users,
												member/members with </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">the
												services, advantages mentioned in your website which you
												fully promised to provide it, HOTLINE has the right to
												terminate your </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">account
												including your subscription plan, without any previous
												notice.</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												You fully understand and agree to publish the information of
												yourself or the contact person you add, and your company
												information ( </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">such
												as license, certificates, contact details, profile images,
												emails..etc).</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												You may receive email from trdstation.com, to keep you
												updated with for further information, new services, new
												arrivals…etc, in case </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">you
												refuse to continue to receive these kind of information, you
												must send us a written notice.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>8.&nbsp;&nbsp;&nbsp;
													LAW &amp; JURISDICTION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">This
												terms of use and any clime, dispute and obligations arising
												out of it, shall be governed by Hong Kong law. as long as
												the parties </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">hereby
												agree to submit to the exclusive jurisdiction of the Hong
												Kong courts.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>9.&nbsp;&nbsp;&nbsp;
													COPYRIGHT:</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">All
												contents in these websites are Copyright © 2017, by Hotline
												Internet And Technology Co. Ltd.</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>15.&nbsp;
													INFORMATION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">If
												you have any questions or query regarding the
												www.trdstation.com Terms &amp; Conditions, please get in
												touch with us. </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Hotline
												Internet and Technology Co. Ltd.</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">www.trdstation.com</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">info@trdstaion.com</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
									</div>
									<div id="wb_P-text2"
										style="position: absolute; left: 42px; top: 25px; width: 750px; height: 16px; visibility: hidden; z-index: 42; text-align: left;">
										<div style="line-height: 18px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><a
													href="#" class="style5"
													onclick="ShowObjectWithEffect('wb_G-terms-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 0, 'fade', 500, 'swing');return false;">General
														Terms &amp; Conditions</a></strong></span>
										</div>
										<div style="line-height: 18px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><a
													href="#" class="style5"
													onclick="ShowObjectWithEffect('wb_G-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 0, 'fade', 500, 'swing');return false;">Paid
														Services Terms &amp; Conditions</a></strong></span>
										</div>
										<div style="line-height: 18px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><a
													href="#" class="style5"
													onclick="ShowObjectWithEffect('wb_G-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 1, 'fade', 500, 'swing');return false;">Privacy
														Policy</strong></a></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><br></strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><br></strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Because
												your privacy is important to www.trdstation.com, we have
												developed a Privacy Policy that covers how
												www.trdstation.com collect, </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">use,
												disclose, transfer, and store your personal information. So
												kindly take a moment to read it.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">www.trdstation.com
												platform, trdstation mobile application is owned, managed
												and operated by Hotline Internet and Technology Co. Ltd, </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">and
												the expressions “www.trdstation.com”, “trdstation”,
												“Hotline”,&nbsp; “We”, “us”, “our” and “platform” mean
												Hotline Internet and Technology </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Co.
												Ltd.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">To
												visit, use, contact, sing up, login or deal within
												www.trdstation.com “ platform” or “trdstation mobile
												application” you will be asked to </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">provide
												us, our affiliates, strategic partners or third parties with
												your business and personal information to be shared among us
												and use </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">it
												to promote and advertising for your products consistent with
												this Privacy Policy. We also combine it with other
												information to provide and </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">improve
												our products, services, content, and advertising. </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">According
												to www.trdstation.com technology we are presenting “ as a
												social B2B platform, we depend on sharing the information
												you </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">provide
												us by your own will to worldwide businessmen, and provide
												global users with all the business or personal information
												you </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">provide
												us, as a part of the service we present to you.. You are not
												required to provide the business or personal information
												that we have </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">requested,
												but, if you chose not to do so, we will not be able to
												provide you with our services, products or respond to any
												queries you may </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">have.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">
											</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>What
													information do we collect?</strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">When
												you use www.trdstation.com platform or mobile application,
												We collect a variety of information provided by you in
												registration </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">process,
												including your name, company name, address, industries,
												mailing address, phone number, email address, contact </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">preferences,
												geographic location, device type …etc.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">We
												may collect users information related to page views, hours
												spent on trdstaion.com platform, traffic source, browser
												type, location, and </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">IP
												address, as well as features used on www.trdstation.com
												application. This is in order to analyze user behavior so as
												we can enhance </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">our
												services. All data collected is aggregated and cannot be
												tracked down individually, neither will we seek to do so.
												This information is </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">only
												shared with 3rd party analytics..</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Why
													do we collect this information?</strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>We</strong>
												collect this data to sort your company on www.trdstation.com
												platform and trdstation application, so as other users can
												easily search </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">and
												find your product or your company.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Share</strong>
												and transfer your information ( business and personal) with
												other users, whom may aware of your industries, and also
												share the </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">other
												users information to you..</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Keep</strong>
												you updated with our new offers, services, news and contact
												you regarding the products or services that you have
												requested and </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">respond
												to any comments or queries you may have..</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Deliver</strong>
												our services and products to you.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Share</strong>
												your details information with relevant third parties, public
												bodies, industry organizations and regulators as reasonably
												required for </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">the
												operation of our business..</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Information
													Disclosure</strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">It
												may be necessary − by law, legal process, litigation, and/or
												requests from public and governmental authorities within or
												outside your </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">country
												of residence − for HOTLINE to disclose your personal
												information. We may also disclose information about you if
												we determine </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">that
												for purposes of national security, law enforcement, or other
												issues of public importance, disclosure is necessary or
												appropriate.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">We
												may also disclose information about you if we determine that
												disclosure is reasonably necessary to enforce our terms and
												conditions </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">or
												protect our operations or users. Additionally, in the event
												of a reorganization, merger, or sale we may transfer any and
												all personal </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">information
												we collect to the relevant third party.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>How
													information is transmitted and stored</strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">All
												user information is transmitted, encrypted and stored in
												off-site secured servers. www.trdstation.com third parties
												Web Services which </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">is
												a reputable and secure server host.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">We
												follow best practices to retain and delete data on our
												servers. www.trdstation.com database is only accessed by
												those authorized </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">with
												special access and are required to keep the information
												confidential. No one else has the right to access to this
												data.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: 'Times New Roman'; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Cookies
													information</strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">User
												activity on www.trdstation.com is tracked using cookies -
												small pieces of data stored for extended period of time on
												your computer. </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">These
												cookies help us provide our users with a better user
												experience. They are also used for collecting analytics
												information and save </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">your
												preferences.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Related
													Links</strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">The
												www.trdstation.com platform or application contains links to
												other platforms or metadata. Please be informed that we are
												not </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">responsible
												for the terms of use, privacy or contents of that links.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">
											</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Warning</strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">If
												you do not agree this privacy policy and not agree using our
												services which based on use or share your business and
												personal </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">information
												to others as a part of the service we provide to you and
												other members, please exit www.trdstation.com platform and
												don’t </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">install
												out trdstation application and do not use our service now or
												in the future. Please be informed that once you agree this
												Privacy </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Policy
												it means you accept and approve to share your business or
												personal information that you provide us to others including
												global </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">businessmen,
												users, our third parties, strategic partners.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">&nbsp;
											</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">
											</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Jurisdiction</strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">This
												Privacy Policy will be exclusively governed by and construed
												in accordance with the Hong Kong law.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">
											</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Information</strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">If
												you have any questions or query regarding the
												www.trdstation.com Privacy Policy, please get in touch with
												us. </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Hotline
												Internet and Technology Co. Ltd.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">www.trdstation.com</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">info@trdstaion.com</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="Main_terms_layer"
				style="position: fixed; text-align: center; visibility: hidden; left: 0; top: 0; right: 0; bottom: 0; z-index: 63;">
				<div id="Main_terms_layer_Container"
					style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer10"
						style="position: fixed; text-align: left; left: 0; top: 0; right: 0; bottom: 0; z-index: 56;">
					</div>
					<div id="Layer11"
						style="position: absolute; text-align: right; left: 192px; top: 46px; width: 900px; height: 644px; z-index: 57;">
						<div id="Layer11_Container"
							style="width: 900px; position: relative; margin-left: auto; margin-right: 0; text-align: left;">
							<div id="Layer12"
								style="position: absolute; text-align: right; left: 0px; top: 1px; width: 900px; height: 180px; z-index: 54;">
								<div id="Layer12_Container"
									style="width: 900px; position: relative; margin-left: auto; margin-right: 0; text-align: left;">
									<button id="AdvancedButton1"
										onclick="ShowObjectWithEffect('wb_G-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('Main_Terms_Layer', 0, 'fade', 500, 'swing');return false;"
										type="button"
										style="position: absolute; left: 858px; top: 6px; width: 37px; height: 37px; z-index: 47;"
										onclick="window.location=''" name="" value="">
										<div style="text-align: center">
											<span
												style="color: #303030; font-family: Arial; font-size: 20px">X</span>
										</div>
									</button>
									<div id="wb_Text29"
										style="position: absolute; left: 60px; top: 22px; width: 614px; height: 16px; z-index: 48; text-align: left;">
										<span
											style="color: #303030; font-family: Impact; font-size: 32px;">TrdStation
											Terms of Use.<br>Legal Information &amp; Conditions, was
											updated on Oct. 1st, 2017.
										</span>
									</div>
									<div id="wb_Text30"
										style="position: absolute; left: 60px; top: 22px; width: 614px; height: 16px; visibility: hidden; z-index: 49; text-align: left;">
										<span
											style="color: #303030; font-family: Impact; font-size: 32px;">TrdStation
											Terms of Use.<br>Legal Information &amp; Conditions For Black
											Horse Members, was updated on Oct. 1st, 2017.
										</span>
									</div>
									<div id="wb_Text31"
										style="position: absolute; left: 60px; top: 32px; width: 614px; height: 16px; visibility: hidden; z-index: 50; text-align: left;">
										<span
											style="color: #303030; font-family: Impact; font-size: 32px;">Privacy
											Policy<br>The TrdStation Privacy Policy was updated on Oct.
											1st, 2017.
										</span>
									</div>
								</div>
							</div>
							<div id="Layer13"
								style="position: absolute; overflow: auto; text-align: center; left: 23px; top: 179px; width: 867px; height: 462px; z-index: 55;">
								<div id="Layer13_Container"
									style="width: 867px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
									<div id="wb_Text32"
										style="position: absolute; left: 40px; top: 19px; width: 775px; height: 16px; z-index: 51; text-align: left;">
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="line-height: 19px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong><a
													href="#" class="style5"
													onclick="ShowObjectWithEffect('wb_G-terms-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 0, 'fade', 500, 'swing');return false;">General
														Terms &amp; Conditions</a></strong></span>
										</div>
										<div style="line-height: 19px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong><a
													href="#" class="style5"
													onclick="ShowObjectWithEffect('wb_G-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 0, 'fade', 500, 'swing');return false;">Paid
														Services Terms &amp; Conditions</a></strong></span>
										</div>
										<div style="line-height: 19px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong><a
													href="#" class="style5"
													onclick="ShowObjectWithEffect('wb_G-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 1, 'fade', 500, 'swing');return false;">Privacy
														Policy</strong></a></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong><br></strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong><br></strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>1.&nbsp;&nbsp;
													INTRODUCTION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">Welcome
												to the www.trdstation.com, the free and paid based services
												platform. </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">This
												Terms of Use is a legal agreement between TrdStation&quot;,
												“ www.www.trdstation.com”, &quot; the site&quot;, “Us”, “
												We”, “ HOTLINE </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">Internet
												and Technology Co. Ltd.” or ”HOTLINE” and you “user”,
												“users”, “visitor’, “free member’, “paid member (hereinafter
												referred </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">to
												as “black horse member”).</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">This
												Terms of Use “ the Agreement” applies to
												www.www.trdstation.com and its contents, to manage the
												visit, remain and use of </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">visitors
												“users or members” to www.www.trdstation.com and manage the
												use of trdstation application.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>2.&nbsp;&nbsp;
													OWNERSHIP OF SITE</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">These
												Terms of Use (the “Terms of Use”) apply to the TrdStation
												platform located at www.trdstation.com, and all associated </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">applications,
												services or products linked to www.trdstation.com, which is
												owned and operated by HOTLINE Internet and </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">Technology
												Co. Ltd., including its affiliates, third parties
												organizations. </span>
										</div>
										<div style="margin-left: 12px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><u>BY
													USING WWW.TRDSTATION.COM OR DOWNLOAD TRDSTATION MOBILE
													APPLICATION, YOU AGREE TO THESE </u></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><u>TERMS
													OF USE; IF YOU DO NOT AGREE, PLEASE EXIT WWW.TRDSTATION.COM
													PLATFORM AND DO NOT USE </u></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><u>TRDSTATION
													APPLICATION OR OUR RELATED FREE OR PAID SERVICES.</u></span>
										</div>
										<div style="margin-left: 12px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">HOTLINE
												reserves the right, to change, modify, add or remove
												portions of these Terms of Use, at any time. It is your </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">responsibility
												to check these Terms of Use periodically for changes. Your
												continued use of the site following the posting of </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">changes
												will mean that you accept and agree to the changes. As long
												as you comply with these Terms of Use.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">HOTLINE
												reserves the right to change/add any further upgrade,
												modification, addition or change to the Service, or any new
											</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">function
												that enhances our Service shall be subject to this
												Agreement.</span>
										</div>
										<div style="margin-left: 12px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">
											</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>3.&nbsp;&nbsp;
													PERMISSION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">Once
												you agree to this terms of use:</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												You will be bound by the terms and conditions contained in
												this Agreement, applicable law, regional regulations and
												justices.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												You may have the right to use www.trdstation.com platform
												and all of our services and related applications.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>4.&nbsp;&nbsp;
													REGISREATION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">Once,
												you join www.trdstation.com and register, and become a free
												or black horse member, you herby agree to:</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Provide true, accurate, current and complete information
												about yourself and your company (such as license,
												certificates, </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">identification,
												contact details and etc.), and promptly update the
												registration information to keep it true, accurate, current
												and </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">complete.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												If you represent a business entity registered on
												Www.trdstation.com, you promise that you have the authority
												to bind the </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">entity
												to this Agreement. Furthermore, you and your entity will
												bear all responsibility and obligations for any contract, </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">issued
												under your entity registered name, or the contact person you
												add&nbsp; to the www.trdstation.com, with any users or </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">destination
												under www.trdstation.com order/contract service.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												If you provide any information that is untrue, inaccurate,
												not current or incomplete, HOTLINE has the right to
												terminate your </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">account
												without any previous notice.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												You fully understand and agree to publish the information of
												yourself or the contact person you add, and your company </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">information
												( such as license, certificates, contact details, profile
												images, emails..etc).</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												You may receive email from www.trdstation.com, to keep you
												updated with for further information, new services, new </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">arrivals…etc,
												in case you refuse to continue to receive these kind of
												information, you must send us a written notice.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>5.&nbsp;
													TERMS OF USE</strong></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												You are solely responsible for maintaining the
												confidentiality of your Unique trdstation ID and Password,
												and are fully </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">responsible
												for all activities that occur under your Unique trdstation
												ID and Password.&nbsp; and are fully responsible to </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">immediately
												notify HOTLINE of any unauthorized use of your Unique
												trdstation ID and Password or any other security </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">issues,
												and to ensure the existence of your platform contents from
												time to time. </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												HOTLINE provide no guarantees, and will not be liable for
												any loss or damage arising from or caused by any irregular,
											</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">unauthorized
												behaviors, force majeure, attacks, interrupts, or
												malfunction.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												HOTLINE provides additional services to users who have been
												ended the registration process and prefer to become a Black
											</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">Horse
												Member and select the suitable plan and agreed to pay for
												such additional services listed in details in subscription </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">page,
												Using www.trdstation.com paid services are governed by
												additional <u>terms and conditions “Black Horse Members </u>
											</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><u>Agreement”</u>
												in addition to this Terms &amp; Conditions.</span>
										</div>
										<div style="margin-left: 12px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 48px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong><br></strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>6.&nbsp;&nbsp;
													USE OF WWW.TRDSTATION.COM AND MOBILE APPLICATION </strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">The
												permission is granted to view and use the materials
												(information and software) found on www.trdstation.com and
												trdsation </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">application
												and you may not:</span>
										</div>
										<div style="margin-left: 12px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Copy or modify any materials in www.trdstation.com platform
												or trdsation application.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Make use of our member contents, person or company name,
												information, design or videos for any&nbsp;&nbsp; </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">&nbsp;
												commercial purpose.&nbsp; </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Make use of www.trdstation.com for fraudulent or illegal
												activities, or violate any applicable law,</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">&nbsp;
												regulation or guideline.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Download or transfer or mirror the technical contents or our
												system files.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Imitate or destroy or affect the systems or the software
												presented in the platform.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Attempt to decompile, reverse engineer, disassemble or
												derive the source code.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Upload any sex-related materials to our platform, or to our
												trdsation application.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Post any material to members that are not related to
												international trade or business cooperation.</span><span
												style="color: #303030; font-family: Arial; font-size: 11px;">
											</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">
											</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">Please
												be informed that </span><span
												style="color: #303030; font-family: Arial; font-size: 11px;">HOTLINE<strong>
											</strong></span><span
												style="color: #303030; font-family: Arial; font-size: 13px;">is
												not responsible for any consequence caused by your behavior
												during the use of </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">www.trdstation.com,
												and we may immediately and automatically terminate or block
												the access of any user, free or black horse </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">member,
												at any time, without a pervious warning, in case we found
												that he is involved in violating these restrictions. Upon </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">termination
												user/users, free or black horse member, must not access
												www.trdstation.com again and uninstall trdstation </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">application.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>7.&nbsp;&nbsp;
													QUALIFICATION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">HOTLINE
												provides a social B2B platform, for only requires qualified
												users “individuals or companies”, “free or black horse </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">members”,
												who can legally issuing contracts under applicable law. If
												you do not qualify, please logout www.trdstation.com and do
											</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">not
												use our service.</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">HOTLINE
												may stop the access, delete or suspend account/s of any
												user/s, at any time, without a previous notice. </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>8.&nbsp;&nbsp;
													COPYRIGHTS AND TRADEMARKS</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">HOTLINE
												Internet and technology Co. Ltd. reserve all the rights,
												secure technology, systems codes, materials in </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">www.trdstation.com
												platform and trdstation application and its contents. All
												users are free to use and share any material in </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">www.trdstation.com
												or trdstation application without moving, removing, altering
												any watermark, trademark, copyrights, logos, or </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">any
												proprietary marks in our platform or our trdstation
												application. </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>9.&nbsp;&nbsp;
													UPLOADED MATERIALS</strong></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Users/Members may responsible about the copyrights and
												intellectual property rights for all materials “image”, “
												icons”, “ text”, </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">“videos
												or audios”, “apps”, “platforms or URL”, “ links”&nbsp; that
												may uploaded by them to www.trdstation.com platform,
												trdstation </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">application.
											</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												HOTLINE pays attention to ethics and respect all regions and
												religions, so we not allow users/members to upload any kind
												or </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">adult
												“scandalous”, sex-related material “ images” or “
												videos”..etc,&nbsp; we may immediately terminate the&nbsp;
												access of any </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">user/member,
												without a pervious warning, in case we found that he is
												involved in&nbsp; uploading such material.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Users/Members may responsible about sending or uploading
												harmful, libelous, unlawfully threatening material to other
											</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">user/users
												in www.trdstation.com, or any materials contain Viruses,
												Trojans or Malwares.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>10.
													CONTENTS</strong></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												You may visit www.trdstation.com and view or use any
												information or contents in the platform or application, at
												your own </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">responsibility,
												for which we are not liable. It is your responsibility to
												ensure that any products, services or information meet </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">your
												requirements. </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												Though HOTLINE works too hard to verify the information
												provided by all the users/members, HOTLINE does not
												guarantee </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">&amp;
												is not legally responsible for the accuracy, integrity,
												quality &amp; non-infringement of such information.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
											</span><span
												style="color: #303030; font-family: Roboto; font-size: 13px;">Though
												www.trdstation.com contains many external platform links,
												HOTLINE has no control over such platform links, </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;">Please
												be cautious and carefully read the terms and conditions and
												the privacy policy of such platforms before using.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>11.
													DISCLAIMER</strong></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-HOTLINE
												provides no guarantees, expressed or implied concerning the
												accuracy, results or reliability of the use of materials </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">and
												information found on www.trdstation.com platform or
												trdstation application. HOTLINE has no responsibility to
												you, </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">users/members
												or any other third parties and has no control over any
												order, dealing or contracts that created under our </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">contracting
												system among members. </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												HOTLINE works too hard and does a great effort to safe and
												secure Black Horse members platforms contents such as “ </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">information,
												contacts, images, videos, offers, requests, products
												information and details …etc”&nbsp; but provides no
												guarantees </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">and
												has no responsibility for any damage or lose of data as long
												as we provide our Black Horse Members with a great tools to
											</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">backup
												or restore the contents of their platforms from time to
												time.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px; line-height: 17px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												We are not responsible in case www.trdstation.com platform
												has any server interruption, slow loading, or is not
												available </span>
										</div>
										<div style="margin-left: 36px; line-height: 17px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">&quot;blocked&quot;
												in a particular country due to regional regulations,
												hardware malfunction, software problems, telecommunications,
											</span>
										</div>
										<div style="margin-left: 36px; line-height: 17px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">governmental
												actions, internet firewalls or protection systems..etc.</span>
										</div>
										<div style="margin-left: 36px; line-height: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												www.trdstation.com is a global B2B platform and has been
												translated into many languages using a third party auto-</span>
										</div>
										<div style="margin-left: 36px; line-height: 17px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">translate
												technology. HOTLINE isn't responsible for the difference or
												conflict between English version and any other </span>
										</div>
										<div style="margin-left: 36px; line-height: 17px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">languages
												in the general user interface, in member’s
												platform/Desksite, products details and information, or the
												auto-</span>
										</div>
										<div style="margin-left: 36px; line-height: 17px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">translation
												functions that used in many features or services in
												www.trdstation.com such as ( chat windows, posts </span>
										</div>
										<div style="margin-left: 36px; line-height: 17px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">translation).</span><strong></strong>
										</div>
										<div style="margin-left: 36px; line-height: 38px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;"><strong>-
											</strong>You acknowledge that HOTLINE has no responsibility
												for downloading any material from www.trdstation.com, any
												material </span>
										</div>
										<div style="margin-left: 36px; line-height: 19px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;">such
												as “Images, videos, data …etc), and you agree that any
												download of such material is done at your own discretion.
												You </span>
										</div>
										<div style="margin-left: 36px; line-height: 19px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;">will
												be fully responsible for any damages may happen to your
												computer system or loss of data resulting by downloading </span>
										</div>
										<div style="margin-left: 36px; line-height: 19px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;">such
												material.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-</span><span
												style="color: #303030; font-family: Roboto; font-size: 13px;">
												www.trdstation.com, HOTLINE, its directors, owners and
												employees, shall not be liable to any user/member or anyone
												else </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;">for
												any damage, loss or injury resulting from using our help
												information, tips on Www.trdstation.com, or for any action
												taken </span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 13px;">by
												you during chat or a call conversation with our teamwork.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong><br></strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>12.
													SUSPENSION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">HOTLINE
												has the right to immediately, suspend your account, access
												or use of www.trdstation.com services or trdstation </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">application,
												if we think it is reasonably necessary because:</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												You violate this terms and conditions.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												You Uploading non-acceptable material to www.trdstation.com
												platform or trdstation application.</span>
										</div>
										<div style="margin-left: 36px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">-
												We feel that you threaten our security. </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>13.
													LAW &amp; JURISDICTION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">This
												terms of use and any clime, dispute and obligations arising
												out of it, shall be governed by Hong Kong law. as long as
												the </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">parties
												hereby agree to submit to the exclusive jurisdiction of the
												Hong Kong courts.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>14.
													COPYRIGHT</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;">All
												contents in these platforms are Copyright © 2017 by Hotline
												Internet And Technology Co. Ltd.</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong>15.
													INFORMATION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">If
												you have any questions or query regarding the
												www.trdstation.com Terms &amp; Conditions, please get in
												touch with us. </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Hotline
												Internet and Technology Co. Ltd.</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">www.trdstation.com</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">info@trdstaion.com</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 13px;"><strong><br></strong></span>
										</div>
									</div>
									<div id="wb_Text33"
										style="position: absolute; left: 37px; top: 19px; width: 773px; height: 16px; visibility: hidden; z-index: 52; text-align: left;">
										<div style="line-height: 18px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><a
													href="#" class="style5"
													onclick="ShowObjectWithEffect('wb_G-terms-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 0, 'fade', 500, 'swing');return false;">General
														Terms &amp; Conditions</a></strong></span>
										</div>
										<div style="line-height: 18px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><a
													href="#" class="style5"
													onclick="ShowObjectWithEffect('wb_G-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 0, 'fade', 500, 'swing');return false;">Paid
														Services Terms &amp; Conditions</a></strong></span>
										</div>
										<div style="line-height: 18px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><a
													href="#" class="style5"
													onclick="ShowObjectWithEffect('wb_G-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 1, 'fade', 500, 'swing');return false;">Privacy
														Policy</strong></a></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><br></strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>1.
													INTRODUCTION</strong></span>
										</div>
										<div style="margin-left: 48px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><br></strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">This
												Terms of Use is a legal agreement between TrdStation&quot;,
												“ www.trdstation.com”, &quot; the site&quot;, “Us”, “ We”, “
												HOTLINE Internet and </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Technology
												Co. Ltd.” or ”HOTLINE” and the fee based service, you
												“member”, “members”, “ paid service members (hereinafter
												referred to </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">as
												“black horse member”).</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">This
												Additional Version of Terms of Use “ the Agreement” applies
												to www.trdstation.com and its contents, to manage the paid </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">membership
												subscription program, plan, fees and manage the use of Black
												Horse Members.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>2.
													TERMS OF THE BLACK HORSE MEMBER</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">You
												fully understand, agree </span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">to
												and accept of all the following terms and conditions of this
												Agreement:</span><strong></strong>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												You shall accept this agreement “ Black Horse Terms of Use”,
												in addition to the general terms of use, if you not agree,
												PLEASE DO </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">NOT
												UPGRADE YOUR PLAN AND STOP USING OUR SERVICE. </span>
										</div>
										<div style="margin-left: 48px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												HOTLINE reserves the right, to change, modify, add or remove
												portions of these Terms of Use, at any time. It is your
												responsibility to </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">check
												these Terms of Use periodically for changes. Your continued
												use of the site following the posting of changes will mean
												that </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">you
												accept and agree to the changes. As long as you comply with
												these Terms of Use.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												HOTLINE reserves the right to change/add any further
												upgrade, modification, addition or change to the Service, or
												any new function </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">that
												enhances our service shall be subject to this Agreement. </span>
										</div>
										<div style="margin-left: 48px; line-height: 30px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><strong>3.&nbsp;&nbsp;
													FEES</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
											</span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">The
												membership program is paid services, are year-based, onetime
												payment “ in advance”. </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
											</span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">The
												membership program is paid services. For details, please
												view (</span><span
												style="color: #303030; font-family: Calibri; font-size: 12px;">My
												Station/Subscription)</span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">.</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
											</span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">HOTLINE
												has the right to amend the membership program price levels
												and payment methods. However, the changes shall not affect </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">any
												previous subscriptions before its expiration date.</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
											</span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">HOTLINE
												not provide refundable service upon account termination.</span>
										</div>
										<div style="margin-left: 48px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><strong>4.&nbsp;&nbsp;
													BLACK HORSE MEMBERS SERVICES</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
											</span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">The
												membership “ Black Horse Members” related features and&nbsp;
												services will only be available for the paid members “ Black
												Horse </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">Members”,
												once the member payment received&nbsp; successfully “ it may
												requires 2 wording days”.</span>
										</div>
										<div style="margin-left: 48px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
											</span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">The
												membership “ Black Horse Members” subscription period will
												start form the date of service activation till and continue
												for one </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">year
												“365 days”.</span>
										</div>
										<div style="margin-left: 48px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
											</span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">When
												the&nbsp; Black Horse Members subscription period
												ended,&nbsp; members can renew the subscription at the same
												plan, upgrade, </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">downgrade.</span>
										</div>
										<div style="margin-left: 48px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
											</span><span
												style="color: #303030; font-family: Roboto; font-size: 12px;">In
												case the Black Horse Member not take any action within 30
												dyas, HOTLINE has the right or downgrade his subscription to
												a Free </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">Member,
												and HOTLINE will not be responsible for any lose of contents
												”data/information” or damage resulting from changing the </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">settings
												and features from Black Horse Member Features to a Free
												Member Features.</span>
										</div>
										<div style="margin-left: 79px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><strong>
											</strong></span>
										</div>
										<div style="margin-left: 79px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><strong>5.&nbsp;&nbsp;
													BANDWIDTH</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">Though
												HOTLINE provide Black Horse Member with Video service “
												uploading Video/Videos of their products” with unmetered
												monthly </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">bandwidth
												as a great service helps the Black Horse Members to high the
												traffic of views, but HOTINE has all the right to temporary
												“ </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">monthly”
												disable the view of any video/videos reach to unaccepted
												monthly bandwidth or any video/videos may affects the
												bandwidth </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;">of
												www.trdstation.com server, according to the global servers
												standard rules.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>6.&nbsp;&nbsp;&nbsp;
													PERMISSION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Once
												you agree to this terms of use:</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												You will be bound by the general terms and conditions, terms
												and conditions contained in this Agreement, applicable law,
												regional </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">regulations
												and justices.</span>
										</div>
										<div style="margin-left: 48px;">
											<span
												style="color: #303030; font-family: Calibri; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												You may have the right to use trdstation.com website and all
												of our paid services and related applications.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>7.&nbsp;&nbsp;&nbsp;
													OBLIGATIONS</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Once,
												you become a Black Horse Member, you herby agree to:</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												Provide true, accurate, current and complete information
												about yourself and your company (such as license,
												certificates, </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">identification,
												contact details and etc.), and promptly update the
												registration information to keep it true, accurate, current
												and </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">complete.</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												If you represent a business entity registered on
												www.trdstation.com, you promise that you have the authority
												to bind the entity to </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">this
												agreement. Furthermore, you and your entity will bear all
												responsibility and obligations for any contract, issued
												under your </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">entity
												registered name, or the contact person you add&nbsp; to the
												trdstation.com, with any user/member or destination under </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">trdstation.com
												order/contract service. </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												You fully agree, obligate and promise that you have the
												authority to bind your entity to provide www.trdstation.com
												members with </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">the
												service, features, advantages “ such as Products
												guarantees&quot; Products quantity and quality
												assurance&quot;, Products </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Certificates,
												Export ability and license, based on the terms you have
												written by your own will”, otherwise PLEASE DON’T </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">MENTION
												THESE ADVANTAGES IN YOUR WEBSITE AND DISABLE IT BY TURNING
												THE TOGGLE BUTTON “ NEXT TO EACH </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">FEATURE”
												OFF&quot;, IN YOUR ( My Desksite/Ranking).</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Roboto; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												If you provide any information that is untrue, inaccurate,
												not current or incomplete, or not provide user/users,
												member/members with </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">the
												services, advantages mentioned in your website which you
												fully promised to provide it, HOTLINE has the right to
												terminate your </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">account
												including your subscription plan, without any previous
												notice.</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												You fully understand and agree to publish the information of
												yourself or the contact person you add, and your company
												information ( </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">such
												as license, certificates, contact details, profile images,
												emails..etc).</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">-
												You may receive email from trdstation.com, to keep you
												updated with for further information, new services, new
												arrivals…etc, in case </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">you
												refuse to continue to receive these kind of information, you
												must send us a written notice.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>8.&nbsp;&nbsp;&nbsp;
													LAW &amp; JURISDICTION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">This
												terms of use and any clime, dispute and obligations arising
												out of it, shall be governed by Hong Kong law. as long as
												the parties </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">hereby
												agree to submit to the exclusive jurisdiction of the Hong
												Kong courts.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>9.&nbsp;&nbsp;&nbsp;
													COPYRIGHT:</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">All
												contents in these websites are Copyright © 2017, by Hotline
												Internet And Technology Co. Ltd.</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>15.&nbsp;
													INFORMATION</strong></span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">If
												you have any questions or query regarding the
												www.trdstation.com Terms &amp; Conditions, please get in
												touch with us. </span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Hotline
												Internet and Technology Co. Ltd.</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">www.trdstation.com</span>
										</div>
										<div style="margin-left: 24px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">info@trdstaion.com</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
									</div>
									<div id="wb_Text34"
										style="position: absolute; left: 42px; top: 25px; width: 750px; height: 16px; visibility: hidden; z-index: 53; text-align: left;">
										<div style="line-height: 18px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><a
													href="#" class="style5"
													onclick="ShowObjectWithEffect('wb_G-terms-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 0, 'fade', 500, 'swing');return false;">General
														Terms &amp; Conditions</a></strong></span>
										</div>
										<div style="line-height: 18px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><a
													href="#" class="style5"
													onclick="ShowObjectWithEffect('wb_G-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 0, 'fade', 500, 'swing');return false;">Paid
														Services Terms &amp; Conditions</a></strong></span>
										</div>
										<div style="line-height: 18px;">
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><a
													href="#" class="style5"
													onclick="ShowObjectWithEffect('wb_G-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 1, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 1, 'fade', 500, 'swing');return false;">Privacy
														Policy</strong></a></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><br></strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong><br></strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Because
												your privacy is important to www.trdstation.com, we have
												developed a Privacy Policy that covers how
												www.trdstation.com collect, </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">use,
												disclose, transfer, and store your personal information. So
												kindly take a moment to read it.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">www.trdstation.com
												platform, trdstation mobile application is owned, managed
												and operated by Hotline Internet and Technology Co. Ltd, </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">and
												the expressions “www.trdstation.com”, “trdstation”,
												“Hotline”,&nbsp; “We”, “us”, “our” and “platform” mean
												Hotline Internet and Technology </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Co.
												Ltd.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">To
												visit, use, contact, sing up, login or deal within
												www.trdstation.com “ platform” or “trdstation mobile
												application” you will be asked to </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">provide
												us, our affiliates, strategic partners or third parties with
												your business and personal information to be shared among us
												and use </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">it
												to promote and advertising for your products consistent with
												this Privacy Policy. We also combine it with other
												information to provide and </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">improve
												our products, services, content, and advertising. </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">According
												to www.trdstation.com technology we are presenting “ as a
												social B2B platform, we depend on sharing the information
												you </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">provide
												us by your own will to worldwide businessmen, and provide
												global users with all the business or personal information
												you </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">provide
												us, as a part of the service we present to you.. You are not
												required to provide the business or personal information
												that we have </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">requested,
												but, if you chose not to do so, we will not be able to
												provide you with our services, products or respond to any
												queries you may </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">have.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">
											</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>What
													information do we collect?</strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">When
												you use www.trdstation.com platform or mobile application,
												We collect a variety of information provided by you in
												registration </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">process,
												including your name, company name, address, industries,
												mailing address, phone number, email address, contact </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">preferences,
												geographic location, device type …etc.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">We
												may collect users information related to page views, hours
												spent on trdstaion.com platform, traffic source, browser
												type, location, and </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">IP
												address, as well as features used on www.trdstation.com
												application. This is in order to analyze user behavior so as
												we can enhance </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">our
												services. All data collected is aggregated and cannot be
												tracked down individually, neither will we seek to do so.
												This information is </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">only
												shared with 3rd party analytics..</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Why
													do we collect this information?</strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>We</strong>
												collect this data to sort your company on www.trdstation.com
												platform and trdstation application, so as other users can
												easily search </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">and
												find your product or your company.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Share</strong>
												and transfer your information ( business and personal) with
												other users, whom may aware of your industries, and also
												share the </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">other
												users information to you..</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Keep</strong>
												you updated with our new offers, services, news and contact
												you regarding the products or services that you have
												requested and </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">respond
												to any comments or queries you may have..</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Deliver</strong>
												our services and products to you.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Share</strong>
												your details information with relevant third parties, public
												bodies, industry organizations and regulators as reasonably
												required for </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">the
												operation of our business..</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Information
													Disclosure</strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">It
												may be necessary − by law, legal process, litigation, and/or
												requests from public and governmental authorities within or
												outside your </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">country
												of residence − for HOTLINE to disclose your personal
												information. We may also disclose information about you if
												we determine </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">that
												for purposes of national security, law enforcement, or other
												issues of public importance, disclosure is necessary or
												appropriate.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">We
												may also disclose information about you if we determine that
												disclosure is reasonably necessary to enforce our terms and
												conditions </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">or
												protect our operations or users. Additionally, in the event
												of a reorganization, merger, or sale we may transfer any and
												all personal </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">information
												we collect to the relevant third party.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>How
													information is transmitted and stored</strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">All
												user information is transmitted, encrypted and stored in
												off-site secured servers. www.trdstation.com third parties
												Web Services which </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">is
												a reputable and secure server host.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">We
												follow best practices to retain and delete data on our
												servers. www.trdstation.com database is only accessed by
												those authorized </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">with
												special access and are required to keep the information
												confidential. No one else has the right to access to this
												data.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: 'Times New Roman'; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Cookies
													information</strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">User
												activity on www.trdstation.com is tracked using cookies -
												small pieces of data stored for extended period of time on
												your computer. </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">These
												cookies help us provide our users with a better user
												experience. They are also used for collecting analytics
												information and save </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">your
												preferences.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><br></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Related
													Links</strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">The
												www.trdstation.com platform or application contains links to
												other platforms or metadata. Please be informed that we are
												not </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">responsible
												for the terms of use, privacy or contents of that links.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">
											</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Warning</strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">If
												you do not agree this privacy policy and not agree using our
												services which based on use or share your business and
												personal </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">information
												to others as a part of the service we provide to you and
												other members, please exit www.trdstation.com platform and
												don’t </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">install
												out trdstation application and do not use our service now or
												in the future. Please be informed that once you agree this
												Privacy </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Policy
												it means you accept and approve to share your business or
												personal information that you provide us to others including
												global </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">businessmen,
												users, our third parties, strategic partners.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">&nbsp;
											</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">
											</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Jurisdiction</strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">This
												Privacy Policy will be exclusively governed by and construed
												in accordance with the Hong Kong law.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">
											</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;"><strong>Information</strong></span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">If
												you have any questions or query regarding the
												www.trdstation.com Privacy Policy, please get in touch with
												us. </span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">Hotline
												Internet and Technology Co. Ltd.</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">www.trdstation.com</span>
										</div>
										<div>
											<span
												style="color: #303030; font-family: Arial; font-size: 12px;">info@trdstaion.com</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br><br><br>
			<div id="Layer295"
				style="position: fixed; text-align: left; bottom:0px; width: 1280px; height: 42px; z-index: 64;">
				<div id="wb_Text541"
					style="position: absolute; left: 475px; top: 14px; width: 358px; height: 14px; z-index: 58; text-align: left;">
					<span style="color: #DCDCDC; font-family: Arial; font-size: 11px;">COPYRIGHTS
						| TRDSTATION 2013-2016 @ ALL RIGHTS RESERVED</span>
				</div>
			</div>
		</div>
	</div>
	<div id="Layer6" style="position: fixed; text-align: left; visibility: hidden; left: 0; top: 0; bottom: 0; width: 1280px; z-index: 220;">
		<div id="Layer8"
			style="position: fixed; text-align: left; left: 0; top: 0; right: 0; bottom: 0; z-index: 119;">
		</div>
		<div id="Layer20" style="position: absolute; text-align: left; left: 370px; top:60px; width: 780px; height: 545px; z-index: 120;">
			<style media="print">
			 @page {
			  size: auto;
			  margin: 0;
			       }
			</style>
			<div id="wb_Text10"
				style="position: absolute; left: 117px; top: 304px; width: 44px; height: 15px; z-index: 95; text-align: left;">
				<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Details</span>
			</div>
			<div id="wb_Text11"
				style="position: absolute; left: 186px; top: 263px; width: 300px; height: 16px; z-index: 96; text-align: left;">
				<span style="color: #3C3C3C; font-family: Arial; font-size: 13px;">Vcommers Membership Subscription </span>
			</div>
			<div id="wb_Text12"
				style="position: absolute; left: 186px; top: 304px; width: 200px; height: 15px; z-index: 97; text-align: left;">
				<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Black Horse  Membership</span>
			</div>
			<div id="wb_Text13"
				style="position: absolute; left: 117px; top: 284px; width: 44px; height: 15px; z-index: 98; text-align: left;">
				<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Plan</span>
			</div>
			<div id="wb_Text14"
				style="position: absolute; left: 186px; top: 284px; width: 160px; height: 15px; z-index: 99; text-align: left;">
				<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><?php echo $msad[0]['name'];?></span>
			</div>
			<div id="wb_Text15"
				style="position: absolute; left: 117px; top: 324px; width: 44px; height: 15px; z-index: 100; text-align: left;">
				<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Terms</span>
			</div>
			<div id="wb_Text16"
				style="position: absolute; left: 186px; top: 324px; width: 200px; height: 15px; z-index: 101; text-align: left;">
				<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">12 Months</span>
			</div>
			<div id="wb_Text17"
				style="position: absolute; left: 117px; top: 264px; width: 44px; height: 15px; z-index: 102; text-align: left;">
				<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Item</span>
			</div>
			<hr id="Line33" style="position: absolute; left: 117px; top: 406px; width: 533px; height: 1px; z-index: 103;border-top: 1px solid #eee;">
			<div id="wb_Text19"
				style="position: absolute; left: 540px; top: 416px; width: 102px; height: 19px; z-index: 104; text-align: left;">
				<span style="color: #3C3C3C; font-family: Arial; font-size: 16px;"><strong>USD
						<?php echo $sprice;?>.00</strong></span>
			</div>
			<hr id="Line44" style="position: absolute; left: 117px; top: 443px; width: 533px; height: 1px; z-index: 105;border-top: 1px solid #eee;">
			<div id="wb_Shape5"
				style="position: absolute; left: 250px; top: 472px; width: 107px; height: 33px; z-index: 106;">
				<a href="javascript:openMyStation();">
					<div id="Shape5">
						<div id="Shape5_text">
							<span style="color: #FF6347; font-family: Arial; font-size: 16px;">My Station</span>
						</div>
					</div>
				</a>
			</div>
			<div id="wb_Shape6"
				style="position: absolute; left: 400px; top: 472px; width: 107px; height: 33px; z-index: 107;">
				<a href="javascript:printInvoice();">
					<div id="Shape6">
						<div id="Shape6_text">
							<span style="color: #FF6347; font-family: Arial; font-size: 16px;">Print / Save</span>
						</div>
					</div>
				</a>
			</div>
			<!--<div id="wb_Shape7"
				style="position: absolute; left: 451px; top: 472px; width: 107px; height: 33px; z-index: 108;">
				<a id="cmd" style="cursor: pointer;">
					<div id="Shape7">
						<div id="Shape7_text">
							<span style="color: #FF6347; font-family: Arial; font-size: 16px;">Save</span>
						</div>
					</div>
				</a>
			</div>-->
			<div id="wb_Text20"
				style="position: absolute; left: 262px; top: 91px; width: 500px; height: 24px; z-index: 109; text-align: left;">
				<span style="color: #3C3C3C; font-family: Georgia; font-size: 20px;"><strong>Thanks
						<?php echo $tsprefix;?> <?php echo $tsusername;?></strong></span>
			</div>
			<div id="wb_Text21"
				style="position: absolute; left: 219px; top: 120px; width: 405px; height: 19px; z-index: 110; text-align: left;">
				<span style="color: #3C3C3C; font-family: Arial; font-size: 17px;">Payment
					is done successfully at USD <?php echo $sprice;?>.00</span>
			</div>
			<div id="wb_Text22"
				style="position: absolute; left: 117px; top: 365px; width: 66px; height: 15px; z-index: 111; text-align: left;">
				<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Expired
					on</span>
			</div>
			<div id="wb_Text23"
				style="position: absolute; left: 117px; top: 345px; width: 44px; height: 15px; z-index: 112; text-align: left;">
				<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Start</span>
			</div>
			<div id="wb_Text24"
				style="position: absolute; left: 186px; top: 345px; width: 116px; height: 15px; z-index: 113; text-align: left;">
				<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><?php echo date('jS M Y');?></span>
			</div>
			<div id="wb_Text25"
				style="position: absolute; left: 186px; top: 365px; width: 116px; height: 15px; z-index: 114; text-align: left;">
				<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><?php echo date('jS M Y',strtotime('+12 months'));?></span>
			</div>
			<div id="wb_Text26"
				style="position: absolute; left: 118px; top: 229px; width: 295px; height: 20px; z-index: 115; text-align: left;">
				<span style="color: #3C3C3C; font-family: Georgia; font-size: 17px;"><u>Invoice
						Details</u></span>
			</div>
			<!-- <div id="wb_Text107"
				style="position: absolute; left: 350px; top: 36px; width: 72px; height: 14px; text-align: center; z-index: 116;">
				<span style="color: #FA5C43; font-family: Arial; font-size: 11px;">V</span>
			</div> -->
			<div id="wb_Text106"
				style="position: absolute; left: 353px; top: 47px; width: 72px; height: 25px; z-index: 117; text-align: left;">
				<span
					style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">VCommers</span>
			</div>
			<div id="wb_Image5"
				style="position: absolute; left: 362px; top: 152px; width: 50px; height: 50px; z-index: 118;">
				<img src="<?php echo asset_url();?>images/tick-big.png" id="Image5"
					alt="">
			</div>
			<br><br>
		</div>
	</div>
	<div style="display: none;">
		<div id="contentforpdf">
			<style>
				table, th, td {
				   border: 0px solid #ccc;
				   border-collapse: collapse;
				   padding: 5px;
				   border-spacing:0;
				}
				table {
					margin-left:50px;
				}
				.idetail {
					margin-left:50px;
				}
				.paydiv {
					margin-left:50px;
					margin-top:25px;
				}
			</style>
			<div style="width:100%; height: 20px; z-index: 115; text-align: left;">
				<span style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">VCommers</span>
			</div>
			<br><br>
			<div style="width:100%; height: 5px; z-index: 115; text-align: left;" class="idetail">
				<span style="color: #3C3C3C; font-family: Georgia; font-size: 18px;border-bottom:1px solid #000;">
					<strong>Bill To: <?php echo $tsprefix;?> <?php echo $tsusername;?></strong>
				</span>
			</div>
			<div style="width:100%; height: 5px; z-index: 115; text-align: left;" class="idetail">
				<span style="color: #3C3C3C; font-family: Georgia; font-size: 18px;border-bottom:1px solid #000;">&nbsp;&nbsp;<?php echo $invoice['company_name'];?>
				</span>
			</div>
			<div style="width:100%; height: 5px; z-index: 115; text-align: left;" class="idetail">
				<span style="color: #3C3C3C; font-family: Georgia; font-size: 18px;border-bottom:1px solid #000;"><?php echo $invoice['company_country'];?>
				</span>
			</div>
			<div style="width:100%; height: 5px; z-index: 115; text-align: left;" class="idetail">
				<span style="color: #3C3C3C; font-family: Georgia; font-size: 18px;border-bottom:1px solid #000;"><?php echo $invoice['telephone_number'];?>
				</span>
			</div>
			<br>
			<div style="width:100%; height: 10px; z-index: 115; text-align: left;" class="idetail">
				<span style="color: #3C3C3C; font-family: Georgia; font-size: 18px;border-bottom:1px solid #000;"><strong>Invoice Number : <?php echo $invoice['invoice_id'];?>
				</span>
			</div>
			<br><br>
			<div style="width:100%; height: 20px; z-index: 115; text-align: left;" class="idetail">
				<span style="color: #3C3C3C; font-family: Georgia; font-size: 18px;border-bottom:1px solid #000;">
					<strong>Thanks for your order <?php echo $tsprefix;?> <?php echo $tsusername;?></strong>
				</span>
			</div>
			<br><br>
			<div style="width:100%; height: 5px; z-index: 115; text-align: left;" class="idetail">
				<span style="color: #3C3C3C; font-family: Georgia; font-size: 18px;border-bottom:1px solid #000;">
					<b>Here is the invoice Details for order no <?php echo $invoice['invoice_id'];?></b>
				</span>
			</div>
			<div>
				<table style="border:0px;border-collapse: collapse;background:#fff;color: #3C3C3C; font-family: Georgia; font-size: 12px;" border="0" bgcolor="#fff" cellpadding="0" cellspacing="0">
					<tr style="border:0px;background:#fff;" bgcolor="white">
						<td style="border:0px;background:#fff;" bgcolor="white">Item</td>
						<td style="border:0px;background:#fff;" bgcolor="white">VCommers Membership Subscription</td>
					</tr>
					<tr>
						<td>Subscription Category</td>
						<td>1 Subscription (<?php echo $invoice['ucategory'];?> | <?php echo $invoice['usubcategory'];?>)</td>
					</tr>
					<tr>
						<td>Plan</td>
						<td><?php echo $invoice['plan_name'];?></td>
					</tr>
					<tr>
						<td>Details</td>
						<td>Black Horse  Membership</td>
					</tr>
					<tr>
						<td>Terms</td>
						<td>12 Months | 366 Days</td>
					</tr>
					<tr>
						<td>Starting On</td>
						<td><?php echo $invoice['starting_on'];?></td>
					</tr>
					
				</table>
			</div>
			<div class="paydiv">
				<hr style="border-bottom:1px solid #000000;">
				<span style="color:#000;">
					Total amount : USD <?php echo $sprice;?>.00
				</span>			
			</div>
		</div>

		<div id="content">
			<table style="width:500px; height:auto; margin:50px auto; border:1px solid #aaa;" cellpadding="0" cellspacing="0">
				<tr>
					<td>
					<img src="<?php echo asset_url();?>images/invoice-header.png">
					</td>
				</tr>
				
				<tr>
					<td>
						 <table>
						 <tr>
						 <td style="padding:10px 50px;"><img src="<?php echo asset_url();?>images/vlogo.png" style="position: relative; top: 10px; margin-right:10px;"><span style="color:#FF6347;font-family:Impact;font-size:21px;">V</span><span style="color:#3C3C3C;font-family:Impact;font-size:21px;">Commers</span></td>
						 <td style="padding-left:100px; padding-top:20px;">
						 <span style="color:#3C3C3C;font-family:Arial;font-size:13px;">Bill To:<br><strong><?php echo $tsprefix;?> <?php echo $tsusername;?><br></strong><?php echo $invoice['company_name'];?><br><?php echo $invoice['company_country'];?><br><?php echo $invoice['telephone_number'];?></span><br><br>
						 <span style="color:#3C3C3C;font-family:Arial;font-size:13px;"><strong>Invoice Number : <?php echo $invoice['invoice_id'];?><br></strong></span>
						 </td>
						 </tr>
						 </table>
					</td>
				</tr>
				<tr>
					<td style="padding:50px 50px;">
					  <span style="color:#3C3C3C;font-family:Impact;font-size:35px;"><strong>Thanks for your order<br><?php echo $invoice['uname'];?><br></strong></span>
					</td>
				</tr>
				<tr>
					<td style="padding:0px 50px;">
					  <span style="color:#000000;font-family:Arial;font-size:13px;">Here's invoice details for order number <?php echo $invoice['invoice_id'];?>.</span>
					</td>
				</tr>
				<tr>
					<td style="padding:50px 50px 0px;">
					 <hr style="height:2px; width:100%; background:#FF6347; border:0px;">
					</td>
				</tr>
				<tr>
					 <td style="padding:10px 50px 20px;"><img src="<?php echo asset_url();?>images/black-horse.png" style="position: relative; top: 10px; margin-right:10px; width:50px"><span style="color:#3C3C3C;font-family:Impact;font-size:19px;letter-spacing:0.07px;">VCommers Membership Subscription </span></td>
				</tr>
				<tr>
					<td style="padding-left:120px; padding-bottom:50px;">
						<span style="color:#000000;font-family:Arial;font-size:13px;">1 Subscription ( <?php echo $invoice['ucategory'];?> | <?php echo $invoice['usubcategory'];?> )</span><br>
						<span style="color:#000000;font-family:Arial;font-size:13px;">Black Horse Membership</span><br>
						<span style="color:#000000;font-family:Arial;font-size:13px;"><?php echo $invoice['plan_name'];?> Plan</span><br>
						<span style="color:#000000;font-family:Arial;font-size:13px;">12 Months | 366 Days</span><br>
						<span style="color:#000000;font-family:Arial;font-size:13px;">Starting On <?php echo $invoice['starting_on'];?></span>


					</td>
				</tr>

				<tr>
					<td style="padding:10px 50px;">
					 <div style="border-bottom:1px solid #ddd; border-top:1px solid #ddd; height:40px; line-height:40px; text-align:right;">
					 <span style="color:#2D2D2D;font-family:Arial;font-size:17px;">Total amount</span>
					 <span style="color:#FFFFFF;font-family:Arial;font-size:16px; display:inline-block; height:38px; padding:0 20px; background:#FF6347; margin-top:1px;"><strong>USD <?php echo $sprice; ?>.00</strong></span>
					 </div>
					</td>
				</tr>
				<tr>
					<td style="padding:10px 50px 150px;">
					<span style="color:#000000;font-family:Arial;font-size:13px;">Thanks for using vCommers<br></span>
					</td>
				</tr>
			</table>
		</div>
	<div id="editor"></div>
</body>
</html>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
<script>
var base_url = '<?php echo base_url();?>';									
paypal.Button.render({
	env: 'sandbox',
	style: {
        size: 'responsive',
        color: 'gold',
        shape: 'rect',
        label: 'pay'
    },
	client: {
	  	sandbox:    'AVZifqGdMaus7NSP8_Ps5dIGAo3NCPDBZ-pwa0hF0S--EBz8hOC3iaXr9mSS_0zf2p_7xK-_bkAjrIvO',
	  	production: 'AcIyXBUkURUQDSH_4ILWnFzoC4utWCuD2sr9RCRf2mFDWchhpeFCg8vrY_gq3HOcmwD-uWFVtRML3wuH' 	
	},
	payment: function(data, actions) {
	     return actions.payment.create({
	         transactions: [
	             {
	                 amount: {
	                     total:    '<?php echo $sprice;?>.00',
	                     currency: 'USD'
	                 }
	             }
	         ]
	     });
	},
	commit: true,
	onAuthorize: function(data, actions) {
	   	return actions.payment.execute().then(function(response) {
	       	console.log("PayerID:"+response.id);
	       	console.log("Amount:"+response.transactions[0].amount.total);
	       	pkgPaymentReceived(response,'<?php echo $msad[0]['id'];?>');
	   	});
	},
	onCancel: function(data) {
	   	alert('The payment was cancelled!');
	}

}, '#paypal-button');
function pkgPaymentReceived(paydata,id) {
	$.post(base_url+"mystation/ads/package/payment",{paydata: paydata, id:id},function(data) {
		ShowObjectWithEffect('wb_G-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_G-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_B-terms-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text1', 0, 'fade', 500, 'swing');ShowObjectWithEffect('wb_P-text2', 0, 'fade', 500, 'swing');ShowObjectWithEffect('Main_Terms_Layer', 0, 'fade', 500, 'swing');
		ShowObjectWithEffect('Layer6', 1, 'fade', 500, 'swing');
	},'json');
}
$(document).ready(function(){
    $(".menu-arrow").click(function(){
        $(".reminder-div").animate({
            width: 640
        });
        $(".menu-arrow").hide();
        $(".menu-arrow2").show();
        $(".myalert").show();
    });
     $(".menu-arrow2").click(function(){
        $(".reminder-div").animate({
            width:60
        });
        $(".menu-arrow").show();
        $(".menu-arrow2").hide();
        $(".myalert").hide();
    });
});
function printInvoice() {    
	var printContents = document.getElementById('content').innerHTML;
    w = window.open();
    w.document.write(printContents);
    w.document.write('<scr' + 'ipt type="text/javascript">' + 'window.onload = function() { window.print(); window.close(); };' + '</sc' + 'ript>');
    w.document.close(); // necessary for IE >= 10
    w.focus(); // necessary for IE >= 10
    return true;
}
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {
    doc.fromHTML($('#contentforpdf').html(), 15, 15, {
        'width': 1000,
            'elementHandlers': specialElementHandlers
    },
    function(){
        doc.save('sample-file.pdf');
    });
    //doc.save('sample-file.pdf');
});
function openMyStation() {
	<?php if($tscategory_id == 1) { ?>
		window.location.href="<?php echo base_url();?>mystation";
	<?php } else if($tscategory_id == 2) { ?>
		window.location.href="<?php echo base_url();?>shipper_mystation";
	<?php } else if($tscategory_id == 3) { ?>
		window.location.href="<?php echo base_url();?>buyer/profile/<?php echo $busi_id;?>";
	<?php } ?>
}
function login_message(){
            $("#Layer99 > #Layer99_Container > #wb_Text145 > #msg_cont").html("PLEASE LOGIN TO ACCESS MEMBER AREA.");
            ShowObject('Layer99', 1);
}
</script>