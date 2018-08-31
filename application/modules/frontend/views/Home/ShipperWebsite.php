<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Shipper Home</title>
<meta name="description" content="The World's First Social B2B Platform">
<meta name="keywords"
	content="sourcing product, e-commerce, business, trade, commerce, community, video tube, business chat, buyers, sellers, shippers, products, china. exporters, suppliers">
<meta name="author" content="Hazem Zaki">
<meta name="categories" content="E-Commerce">
<meta name="generator" content="Hotline Internet & Technology Co. Ltd.">
<link href="http://localhost/Bigfish/assets/images/shipper.ico" rel="shortcut icon" type="image/x-icon">
<link href="<?php echo asset_url();?>css/jquery.ui.all.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/station.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/pages/shipper_home.css" rel="stylesheet">
<link href="<?php echo asset_url(); ?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo asset_url(); ?>css/style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/font-awesome.min.css">
<script src="<?php echo asset_url();?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo asset_url(); ?>js/bootstrap.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-fade.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-slide.min.js"></script>
<script src="<?php echo asset_url();?>js/wb.slideshow.min.js"></script>
<script src="<?php echo asset_url();?>js/wb.stickylayer.min.js"></script>
<script src="<?php echo asset_url();?>js/wb.carousel.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.core.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.widget.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.mouse.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.draggable.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.position.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.tooltip.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-blind.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-bounce.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-clip.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-drop.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-explode.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-fold.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-highlight.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-pulsate.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-scale.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-shake.min.js"></script>
<link rel="stylesheet" href="<?php echo asset_url();?>js/slimbox/css/slimbox2.css">
<script src="<?php echo asset_url();?>js/slimbox/js/slimbox2.js"></script>
<script>
function Validatecontact(theForm)
{
   var regexp;
   if (theForm.TextArea2.value.length < 10)
   {
      alert("Please enter at least 10 characters in the \"TextArea2\" field.");
      theForm.TextArea2.focus();
      return false;
   }
   if (theForm.TextArea2.value.length > 2000)
   {
      alert("Please enter at most 2000 characters in the \"TextArea2\" field.");
      theForm.TextArea2.focus();
      return false;
   }
   return true;
}
</script>
<link rel="stylesheet" href="<?php echo asset_url();?>js/prettyPhoto/css/prettyPhoto.css">
<script src="<?php echo asset_url();?>js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo asset_url();?>js/wwb10.min.js"></script>
<script>
$(document).ready(function()
{
   $("#SlideShow2").slideshow(
   {
      interval: 8000,
      type: 'sequence',
      effect: 'slide',
      direction: 'right',
      pagination: false,
      easing: 'easeInOutSine',
      effectlength: 0
   });
   $("a[data-rel='SlideShow3']").attr('rel', 'SlideShow3');
   $("a[rel^='SlideShow3']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery5']").attr('rel', 'PhotoGallery5');
   $("a[rel^='PhotoGallery5']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery6']").attr('rel', 'PhotoGallery6');
   $("a[rel^='PhotoGallery6']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery3']").attr('rel', 'PhotoGallery3');
   $("a[rel^='PhotoGallery3']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery2']").attr('rel', 'PhotoGallery2');
   $("a[rel^='PhotoGallery2']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery7']").attr('rel', 'PhotoGallery7');
   $("a[rel^='PhotoGallery7']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   //$("#Layer220").stickylayer({orientation: 2, position: [320, 90], delay: 500});
   var Carousel4Opts =
   {
      delay: 10000,
      duration: 500,
      easing: 'linear',
      mode: 'forward',
      direction: '',
      pagination: false,
      start: 0
   };
   $("#Carousel4").carousel(Carousel4Opts);
   $("#Carousel4_back a").click(function()
   {
      $('#Carousel4').carousel('prev');
   });
   $("#Carousel4_next a").click(function()
   {
      $('#Carousel4').carousel('next');
   });
   $("a[data-rel='PhotoGallery1']").attr('rel', 'PhotoGallery1');
   $("a[rel^='PhotoGallery1']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   var zindex = 250;
   $("#PhotoGallery1 a").draggable(
   {
      start: function()
      {
         zindex = zindex + 1;
         $(this).css({zIndex:zindex});
      },
      stop: function()
      {
         rotation = Math.floor(Math.random()*15);
         if (Math.floor(Math.random()*11)>5)
         {
            rotation = rotation * -1;
         }
         $(this).data('rotation', rotation);
         $(this).css({webkitTransform:"rotate("+rotation+"deg)",MozTransform:"rotate("+rotation+"deg)",msTransform:"rotate("+rotation+"deg)",transform:"rotate("+rotation+"deg)"});
      }
   });
   $("#Layer216").stickylayer({orientation: 1, position: [70, 60], delay: 0});
   $("a[data-rel='PhotoGallery4']").attr('rel', 'PhotoGallery4');
   $("a[rel^='PhotoGallery4']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   var zindex = 250;
   $("#PhotoGallery4 a").draggable(
   {
      start: function()
      {
         zindex = zindex + 1;
         $(this).css({zIndex:zindex});
      },
      stop: function()
      {
         rotation = Math.floor(Math.random()*15);
         if (Math.floor(Math.random()*11)>5)
         {
            rotation = rotation * -1;
         }
         $(this).data('rotation', rotation);
         $(this).css({webkitTransform:"rotate("+rotation+"deg)",MozTransform:"rotate("+rotation+"deg)",msTransform:"rotate("+rotation+"deg)",transform:"rotate("+rotation+"deg)"});
      }
   });
   var jQueryToolTip3Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Black Horse Member</span>',
      items: '#wb_Image61',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image61").tooltip(jQueryToolTip3Opts);
   var jQueryToolTip4Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Guarantee logo..<br>This seller provides a guarantee on his goods, subjected to certain terms, you can check it, on each product ( Along with Product Details Page)..<br>Furthermore, Click on &quot; Advantages&quot; icon to view more..</span>',
      items: '#Image94',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#Image94").tooltip(jQueryToolTip4Opts);
   $("#Layer58").stickylayer({orientation: 1, position: [70, 50], delay: 0});
   $("a[data-rel='PhotoGallery8']").attr('rel', 'PhotoGallery8');
   $("a[rel^='PhotoGallery8']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery9']").attr('rel', 'PhotoGallery9');
   $("a[rel^='PhotoGallery9']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   var Carousel1Opts =
   {
      delay: 3000,
      duration: 500,
      easing: 'linear',
      mode: 'forward',
      direction: '',
      pagination: false,
      start: 0
   };
   $("#Carousel1").carousel(Carousel1Opts);
   $("#Carousel1_back a").click(function()
   {
      $('#Carousel1').carousel('prev');
   });
   $("#Carousel1_next a").click(function()
   {
      $('#Carousel1').carousel('next');
   });
   var Carousel8Opts =
   {
      delay: 3000,
      duration: 500,
      easing: 'swing',
      mode: 'forward',
      direction: '',
      pagination: true,
      pagination_img_default: 'images/page_default.png',
      pagination_img_active: 'images/page_active.png',
      start: 0
   };
   $("#Carousel8").carousel(Carousel8Opts);
   $("a[data-rel='prettyPhoto_PhotoGallery10[PhotoGallery10]']").attr('rel', 'prettyPhoto_PhotoGallery10[PhotoGallery10]');
   $("a[rel^='prettyPhoto_PhotoGallery10']").prettyPhoto({theme:'facebook',social_tools:false});
   $("#PhotoGallery10 a").each(function()
   {
      $(this).css('position', 'absolute');
      $(this).css('left', '106px');
      $(this).css('top', '80px');
      xpos = Math.floor(Math.random()*213);
      ypos = Math.floor(Math.random()*160);
      rotation = Math.floor(Math.random()*15);
      if (Math.floor(Math.random()*11)>5) 
      {
         rotation = rotation * -1;
      }
      $(this).data('rotation', rotation);
      $(this).delay(1000).animate({top:ypos,left:xpos}).css({webkitTransform:"rotate("+rotation+"deg)",MozTransform:"rotate("+rotation+"deg)",msTransform:"rotate("+rotation+"deg)",transform:"rotate("+rotation+"deg)"});
   });
   var zindex = 250;
   $("#PhotoGallery10 a").draggable(
   {
      start: function()
      {
         zindex = zindex + 1;
         $(this).css({zIndex:zindex});
      },
      stop: function()
      {
         rotation = Math.floor(Math.random()*15);
         if (Math.floor(Math.random()*11)>5)
         {
            rotation = rotation * -1;
         }
         $(this).data('rotation', rotation);
         $(this).css({webkitTransform:"rotate("+rotation+"deg)",MozTransform:"rotate("+rotation+"deg)",msTransform:"rotate("+rotation+"deg)",transform:"rotate("+rotation+"deg)"});
      }
   });
   $("a[data-rel='prettyPhoto_PhotoGallery11[PhotoGallery11]']").attr('rel', 'prettyPhoto_PhotoGallery11[PhotoGallery11]');
   $("a[rel^='prettyPhoto_PhotoGallery11']").prettyPhoto({theme:'facebook',social_tools:false});
   $("#PhotoGallery11 a").each(function()
   {
      $(this).css('position', 'absolute');
      $(this).css('left', '106px');
      $(this).css('top', '80px');
      xpos = Math.floor(Math.random()*213);
      ypos = Math.floor(Math.random()*160);
      rotation = Math.floor(Math.random()*15);
      if (Math.floor(Math.random()*11)>5) 
      {
         rotation = rotation * -1;
      }
      $(this).data('rotation', rotation);
      $(this).delay(1000).animate({top:ypos,left:xpos}).css({webkitTransform:"rotate("+rotation+"deg)",MozTransform:"rotate("+rotation+"deg)",msTransform:"rotate("+rotation+"deg)",transform:"rotate("+rotation+"deg)"});
   });
   var zindex = 250;
   $("#PhotoGallery11 a").draggable(
   {
      start: function()
      {
         zindex = zindex + 1;
         $(this).css({zIndex:zindex});
      },
      stop: function()
      {
         rotation = Math.floor(Math.random()*15);
         if (Math.floor(Math.random()*11)>5)
         {
            rotation = rotation * -1;
         }
         $(this).data('rotation', rotation);
         $(this).css({webkitTransform:"rotate("+rotation+"deg)",MozTransform:"rotate("+rotation+"deg)",msTransform:"rotate("+rotation+"deg)",transform:"rotate("+rotation+"deg)"});
      }
   });
   $("#Layer116").stickylayer({orientation: 8, position: [0, 0], delay: 100});
   var jQueryToolTip5Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">This shipper is a member in your community..</span>',
      items: '#wb_Image76',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image76").tooltip(jQueryToolTip5Opts);
   $("#Layer49").stickylayer({orientation: 4, position: [0, 60], delay: 0});
   $("#Layer106").stickylayer({orientation: 5, position: [0, 0], delay: 0});
   var jQueryToolTip2Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">The shipper is a member in your community..</span>',
      items: '#wb_Image89',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image89").tooltip(jQueryToolTip2Opts);
   var jQueryToolTip1Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Verified logo is only ( strictly ) submitted to the Seller / Shipper who has been passed a strict verified check and audit procedures, verification, testing and certification, includes company licenses, services certificates.<br>To check Shipper\'s verification certificate, click on Shipper\'s (About Tab) &gt; View Verification.<br></span>',
      items: '#wb_Image22',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image22").tooltip(jQueryToolTip1Opts);
   $("#Layer5").stickylayer({orientation: 4, position: [0, 25], delay: 0});
   var Carousel3Opts =
   {
      delay: 3000,
      duration: 500,
      easing: 'linear',
      mode: 'forward',
      direction: '',
      pagination: false,
      start: 0
   };
   $("#Carousel3").carousel(Carousel3Opts);
   $("#Carousel3_back a").click(function()
   {
      $('#Carousel3').carousel('prev');
   });
   $("#Carousel3_next a").click(function()
   {
      $('#Carousel3').carousel('next');
   });
});
</script>
<style>
.headimg{
	background:url(<?php echo asset_url();?>images/shipperrheader.jpg) no-repeat center center; background-size:100% 100%; height:235px;
}
.relative{
	 position: relative;
}
.c20{
	 color:#1E90FF;font-family:Arial;font-size:16px;
}
.c21{
	  color:#00BFFF;font-family:'Arial Black';font-size:11px;
}
.s1{
	color:#3C3C3C;font-family:Arial;font-size:11px;
}
.s2{
	color:#1E90FF;font-family:Arial;font-size:12px;
}
.s3{
	color:#3C3C3C;font-family:Arial;font-size:13px;
}
.s4{
	color:#3C3C3C;font-family:Arial;font-size:11px;
}
.s5{
	     top: 10%; text-align:left;  left: 34%;
	
			    width: 36%;   
}
.c2{
	position:absolute;left:67px;top:28px;width:59px;height:15px;z-index:36;text-align:left;
}
.c1{
	color:#FFFFFF;font-family:Arial;font-size:12px;
}
.b1{
	color:#1E90FF;font-family:Georgia;font-size:12px;
}
.d1{
	z-index: 0; height:900px; top: 0px; left: 0px; width: 1440px;
}
.d2{
	display: block; z-index: 1;  height:900px;top: 0px; left: 0px; width: 1440px;
}
.leftnav{
	position:fixed;text-align:left;left:0;top:25%;bottom:0;width:101px;z-index:3867; height: 320px
}
.bottomnav{
	position: fixed; text-align: center; left: 0px; top: auto; width: 99%; height: 109px; z-index: 3858; bottom: 0px;
}
.b2{
	color:#1E90FF;font-family:Georgia;font-size:12px;
}
.s15{
	 color:#2D2D2D;font-family:Arial;font-size:12px;
}
.s6{
	color:#696969;font-family:Arial;font-size:12px;
}
.s7{
	color:#1E1E1E;font-family:Georgia;font-size:13px;
}
.s8{
	background-color:#3C3C3C;color:#FFFFFF;font-family:Arial;font-size:13px;text-align:center
}
.s9{
	 top: 10%;    left: 40%;   width: 27%;
}
.s10{
	position:absolute;left:75px;top:94%;width:35px;height:13px;z-index:999
}
.s11{
	position:absolute;right:75px;top:94%;width:35px;height:13px;z-index:999
}
a{
	cursor:pointer;
}
.s12{
	color:#787878;font-family:Arial;font-size:13px;
}
.s13{
	 color:#4B4B4B;font-family:Arial;font-size:16px;
}
.s14{
	 color:#787878;font-family:Arial;font-size:11px;
}


.c22{
	 position:absolute;right:18px;top:96%;width:35px;height:13px;z-index:999;
}
.c19{
	top: 10%;text-align:left;  left: 34%;
    width: 36%;   top: 10%;  
}
.c17{
position:absolute; left: 250px;
    top: 519px;
width:74px;height:15px;z-index:3560;text-align:left;
}
.c18{
	position:absolute;left:22px;top:96%;width:35px;height:13px;z-index:999;
}
.c12{
	position: absolute;right:0%;top:10% ;width:450px;
}
.c13{
	position:absolute;left:9px;top:12px;width:28px;height:28px;z-index:70;
}
.c16{
	color:#A9A9A9;font-family:Arial;font-size:13px;
}
.c15{
	color:#3C3C3C;font-family:Arial;font-size:24px;
}
.c14{
	color:#3C3C3C;font-family:Arial;font-size:12px;
}
.c11{
	background-color:#FFFFFF;color:#3C3C3C;font-family:Arial;font-size:12px;
}
.c10{
background-color:#FFFFFF;color:#3C3C3C;font-family:Georgia;font-size:20px;
}
.c9{
	position: absolute;left:10%;top:10% ;width:450px;
}
.c8{
	position: relative; min-height: 235px;
}
.c6{
	color:#FFFFFF;font-family:Impact;font-size:48px;letter-spacing:0.07px;margin-top:-15px;
}
.c7{
	color:#E8AD8F;font-family:Arial;font-size:12px;margin-top:-7px
}
.c5{
	color:#FFFFFF;font-family:Arial;font-size:27px;margin-top:35px;
}
.c4{
	color:#E8AD8F;font-family:Georgia;font-size:12px;
}
.c3{
	padding-top:1px;padding-right:1px;
}
.dropdown-custom a {
	text-decoration:none;
}
.trd-nav a:hover {
	padding:0px;
	margin:0px;
}
</style>
<!-- Insert Google Analystics code here -->
</head>
<body>
	<div class="container" style="width: 1280px;padding-left:0px;">
    <?php include APPPATH.'modules/frontend/views/default/hover-nav.php';?>
    </div>
	<div id="Layer67" style="position: absolute; overflow: auto; text-align: center; visibility: visible; left: 0%; top: 0px; width: 100%; height: 775px; z-index: 2409;">
		<div id="Layer67_Container"
			style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
			<div id="Layer105"
				style="position: absolute; text-align: left; left: 0px; top: 45px; width: 1280px; height: 211px; z-index: 298;">
			</div>
			<div id="wb_Text157"
				style="position: absolute; left: 361px; top: 92px; width: 577px; height: 33px; text-align: center; z-index: 299;">
				<span
					style="color: #3C3C3C; font-family: 'Times New Roman'; font-size: 29px;"><?php echo $business[0]['company_name'];?></span>
			</div>
			<div id="wb_Text142"
				style="position: absolute; left: 311px; top: 139px; width: 670px; height: 75px; text-align: center; z-index: 300;">
				<span style="color: #5A5A5A; font-family: Arial; font-size: 12px;"><?php echo $business[0]['company_introduction'];?></span>
			</div>
			<div id="Layer96" style="position: absolute; text-align: left; left: 0%; top: 299px; width: 100%; height: 656px; z-index: 301;">
				<div id="SlideShow2" style="position: absolute; left: 0%; top: 0%; width: 100%; height: 95%; z-index: 0;">
				<?php if(!empty($business[0]['website_bg1'])) { ?>
					<img class="image" src="<?php echo asset_url();?><?php echo $business[0]['website_bg1'];?>" alt="" title=""> 
					<img class="image" src="<?php echo asset_url();?><?php echo $business[0]['website_bg2'];?>" style="display: none;" alt="" title="">
					<?php } else { ?>
					<img class="image" src="<?php echo asset_url(); ?>images/member-desksite.jpg" alt="" title="">
					<?php } ?>
				</div>
			</div>
			<div id="Layer98"
				style="position: absolute; text-align: left; visibility: hidden; left: 0px; top: 285px; width: 1280px; height: 651px; z-index: 302;">
				<div id="wb_Shape12"
					style="position: absolute; left: 582px; top: 3px; width: 24px; height: 12px; z-index: 47;">
					<img src="<?php echo asset_url();?>images/img0745.png" id="Shape12" alt=""
						style="width: 24px; height: 12px;">
				</div>
				<div id="Layer100"
					style="position: absolute; text-align: left; left: 0px; top: 13px; width: 1280px; height: 631px; z-index: 48;">
					<div id="Layer101"
						style="position: absolute; text-align: center; left: 0px; top: 6px; width: 1280px; height: 624px; z-index: 14;">
						<div id="Layer101_Container"
							style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<div id="wb_Shape14"
								style="position: absolute; left: 1234px; top: 10px; width: 38px; height: 33px; z-index: 4;">
								<a href="#"
									onclick="ShowObjectWithEffect('Layer98', 0, 'slideup', 500);return false;"><img
									src="<?php echo asset_url();?>images/img0746.gif" id="Shape14" alt=""
									style="width: 38px; height: 33px;"></a>
							</div>
							<div id="wb_Text143"
								style="position: absolute; left: 69px; top: 190px; width: 141px; height: 16px; z-index: 5; text-align: left;">
								<span
									style="color: #1E90FF; font-family: Arial; font-size: 13px;"><strong>Business
										Information</strong></span>
							</div>
							<div id="Layer93"
								style="position: absolute; text-align: center; left: 621px; top: 55px; width: 592px; height: 426px; z-index: 6;">
								<div id="Layer93_Container"
									style="width: 592px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
									<div id="SlideShow3"
										style="position: absolute; left: 0px; top: 0px; width: 592px; height: 411px; z-index: 1;">
										<a href="<?php echo asset_url();?>images/1.jpg" data-rel="SlideShow3"><img
											class="image" src="<?php echo asset_url();?>images/1.jpg" alt="" title=""></a> <a
											href="<?php echo asset_url();?>images/2.jpg" data-rel="SlideShow3"><img class="image"
											src="<?php echo asset_url();?>images/2.jpg" style="display: none;" alt="" title=""></a>
										<a href="<?php echo asset_url();?>images/fc_environment-3.jpg" data-rel="SlideShow3"><img
											class="image" src="<?php echo asset_url();?>images/fc_environment-3.jpg"
											style="display: none;" alt="" title=""></a> <a
											href="<?php echo asset_url();?>images/fc_environment-1.jpg" data-rel="SlideShow3"><img
											class="image" src="<?php echo asset_url();?>images/fc_environment-1.jpg"
											style="display: none;" alt="" title=""></a>
									</div>
									<div id="wb_PhotoGallery5"
										style="position: absolute; left: 118px; top: 4px; width: 363px; height: 420px; visibility: hidden; z-index: 2;">
										<table id="PhotoGallery5">
											<tr>
												<td class="image"><a
													href="<?php echo asset_url();?>images/India-CPGI-ISO-9001-certificateok.jpg"
													data-rel="PhotoGallery5"><img alt=""
														id="PhotoGallery5_img0"
														src="<?php echo asset_url();?>images/tn_India-CPGI-ISO-9001-certificateok.png"></a></td>
												<td class="image"><a href="<?php echo asset_url();?>images/ISO%202000.jpg"
													data-rel="PhotoGallery5"><img alt=""
														id="PhotoGallery5_img1" src="<?php echo asset_url();?>images/tn_ISO%202000.png"></a></td>
											</tr>
											<tr>
												<td class="image"><a
													href="<?php echo asset_url();?>images/ISO-9001-CERTIFICATEok.jpg"
													data-rel="PhotoGallery5"><img alt=""
														id="PhotoGallery5_img2"
														src="<?php echo asset_url();?>images/tn_ISO-9001-CERTIFICATEok.png"></a></td>
												<td class="image"><a
													href="<?php echo asset_url();?>images/ISO-9001-Certificationok.jpg"
													data-rel="PhotoGallery5"><img alt=""
														id="PhotoGallery5_img3"
														src="<?php echo asset_url();?>images/tn_ISO-9001-Certificationok.png"></a></td>
											</tr>
										</table>
									</div>
									<div id="wb_PhotoGallery6"
										style="position: absolute; left: 142px; top: 11px; width: 317px; height: 407px; visibility: hidden; z-index: 3;">
										<table id="PhotoGallery6">
											<tr>
												<td class="image"><a
													href="<?php echo asset_url();?>images/Certificate%20of%20Honor2004.jpg"
													data-rel="PhotoGallery6"><img alt=""
														id="PhotoGallery6_img0"
														src="<?php echo asset_url();?>images/tn_Certificate%20of%20Honor2004.png"></a></td>
											</tr>
											<tr>
												<td class="image"><a
													href="<?php echo asset_url();?>images/iso_9001_certification.gif"
													data-rel="PhotoGallery6"><img alt=""
														id="PhotoGallery6_img1"
														src="<?php echo asset_url();?>images/tn_iso_9001_certification.png"></a></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<div id="wb_Text148"
								style="position: absolute; left: 69px; top: 216px; width: 95px; height: 15px; text-align: justify; z-index: 7;">
								<span
									style="color: #696969; font-family: Arial; font-size: 12px;">Shipper
									Type</span>
							</div>
							<div id="wb_Text150"
								style="position: absolute; left: 230px; top: 216px; width: 89px; height: 15px; text-align: justify; z-index: 8;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;"><?php echo $business[0]['user_subcategory'];?></span>
							</div>
							<div id="wb_Text156"
								style="position: absolute; left: 69px; top: 236px; width: 89px; height: 15px; text-align: justify; z-index: 9;">
								<span
									style="color: #696969; font-family: Arial; font-size: 12px;">Main
									Services</span>
							</div>
							<div id="wb_Text153"
								style="position: absolute; left: 71px; top: 53px; width: 81px; height: 16px; z-index: 10; text-align: left;">
								<span
									style="color: #1E90FF; font-family: Arial; font-size: 13px;"><strong>About
										Us</strong></span>
							</div>
						</div>
					</div>
					<div id="wb_Text147"
						style="position: absolute; left: 710px; top: 512px; width: 81px; height: 16px; z-index: 15; text-align: left;">
						<span style="color: #1E90FF; font-family: Arial; font-size: 13px;"><strong>Certificates</strong></span>
					</div>
					<div id="wb_Text149"
						style="position: absolute; left: 837px; top: 512px; width: 168px; height: 15px; z-index: 16; text-align: left;">
						<span style="color: #000000; font-family: Arial; font-size: 12px;">ISO,
							SGS, CQC, ICQ, Ce</span>
					</div>
					<div id="wb_Text228"
						style="position: absolute; left: 1111px; top: 513px; width: 65px; height: 15px; z-index: 17; text-align: left;">
						<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
							href="#" class="style13"
							onclick="ShowObject('Layer119', 0);ShowObject('SlideShow3', 0);ShowObject('wb_PhotoGallery6', 0);ShowObject('wb_PhotoGallery5', 1);return false;">View</a></span>
					</div>
					<div id="wb_Text164"
						style="position: absolute; left: 712px; top: 532px; width: 81px; height: 16px; z-index: 18; text-align: left;">
						<span style="color: #1E90FF; font-family: Arial; font-size: 13px;"><strong>License</strong></span>
					</div>
					<div id="wb_Text165"
						style="position: absolute; left: 837px; top: 532px; width: 168px; height: 15px; z-index: 19; text-align: left;">
						<span style="color: #000000; font-family: Arial; font-size: 12px;">Expor
							License</span>
					</div>
					<div id="wb_Text166"
						style="position: absolute; left: 1111px; top: 533px; width: 65px; height: 15px; z-index: 20; text-align: left;">
						<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
							href="#" class="style13"
							onclick="ShowObject('Layer119', 0);ShowObject('SlideShow3', 0);ShowObject('wb_PhotoGallery6', 1);ShowObject('wb_PhotoGallery5', 0);return false;">View</a></span>
					</div>
					<div id="wb_Text250"
						style="position: absolute; left: 837px; top: 572px; width: 143px; height: 15px; text-align: justify; z-index: 21;">
						<span style="color: #696969; font-family: Arial; font-size: 12px;">Back
							to Company Gallery</span>
					</div>
					<div id="wb_Text177"
						style="position: absolute; left: 1111px; top: 571px; width: 36px; height: 15px; z-index: 22; text-align: left;">
						<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
							href="#" class="style13"
							onclick="ShowObject('Layer119', 0);ShowObject('SlideShow3', 1);ShowObject('wb_PhotoGallery6', 0);ShowObject('wb_PhotoGallery5', 0);return false;">View</a>
						</span>
					</div>
					<div id="wb_Text168"
						style="position: absolute; left: 712px; top: 551px; width: 100px; height: 16px; z-index: 23; text-align: left;">
						<span style="color: #1E90FF; font-family: Arial; font-size: 13px;"><strong>Verification</strong></span>
					</div>
					<div id="wb_Text547"
						style="position: absolute; left: 837px; top: 551px; width: 168px; height: 15px; z-index: 24; text-align: left;">
						<span style="color: #000000; font-family: Arial; font-size: 12px;">Done
							by ( Povided later ) ..</span>
					</div>
					<div id="wb_Text548"
						style="position: absolute; left: 1111px; top: 552px; width: 65px; height: 15px; z-index: 25; text-align: left;">
						<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
							href="#" class="style13"
							onclick="ShowObject('SlideShow3', 0);ShowObject('wb_PhotoGallery6', 0);ShowObject('wb_PhotoGallery5', 0);ShowObject('Layer119', 1);return false;">View</a></span>
					</div>
					<div id="Layer119"
						style="position: absolute; overflow: scroll; text-align: center; visibility: hidden; left: 621px; top: 51px; width: 592px; height: 429px; z-index: 26;">
						<div id="Layer119_Container"
							style="width: 592px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<div id="wb_PhotoGallery2"
								style="position: absolute; left: 118px; top: 7px; width: 363px; height: 420px; visibility: hidden; z-index: 11;">
								<table id="PhotoGallery2">
									<tr>
										<td class="image"><a
											href="<?php echo asset_url();?>images/India-CPGI-ISO-9001-certificateok.jpg"
											data-rel="PhotoGallery2"><img alt="" id="PhotoGallery2_img0"
												src="<?php echo asset_url();?>images/tn_India-CPGI-ISO-9001-certificateok.png"></a></td>
										<td class="image"><a href="<?php echo asset_url();?>images/ISO%202000.jpg"
											data-rel="PhotoGallery2"><img alt="" id="PhotoGallery2_img1"
												src="<?php echo asset_url();?>images/tn_ISO%202000.png"></a></td>
									</tr>
									<tr>
										<td class="image"><a href="<?php echo asset_url();?>images/ISO-9001-CERTIFICATEok.jpg"
											data-rel="PhotoGallery2"><img alt="" id="PhotoGallery2_img2"
												src="<?php echo asset_url();?>images/tn_ISO-9001-CERTIFICATEok.png"></a></td>
										<td class="image"><a
											href="<?php echo asset_url();?>images/ISO-9001-Certificationok.jpg"
											data-rel="PhotoGallery2"><img alt="" id="PhotoGallery2_img3"
												src="<?php echo asset_url();?>images/tn_ISO-9001-Certificationok.png"></a></td>
									</tr>
								</table>
							</div>
							<div id="wb_PhotoGallery7"
								style="position: absolute; left: 142px; top: 14px; width: 317px; height: 407px; visibility: hidden; z-index: 12;">
								<table id="PhotoGallery7">
									<tr>
										<td class="image"><a
											href="<?php echo asset_url();?>images/Certificate%20of%20Honor2004.jpg"
											data-rel="PhotoGallery7"><img alt="" id="PhotoGallery7_img0"
												src="<?php echo asset_url();?>images/tn_Certificate%20of%20Honor2004.png"></a></td>
									</tr>
									<tr>
										<td class="image"><a href="<?php echo asset_url();?>images/iso_9001_certification.gif"
											data-rel="PhotoGallery7"><img alt="" id="PhotoGallery7_img1"
												src="<?php echo asset_url();?>images/tn_iso_9001_certification.png"></a></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div id="Layer104"
						style="position: absolute; overflow: auto; text-align: left; left: 51px; top: 91px; width: 545px; height: 95px; z-index: 27;">
						<div id="wb_Text218"
							style="position: absolute; left: 18px; top: 6px; width: 504px; height: 62px; text-align: justify; z-index: 13;">
							<span
								style="color: #5A5A5A; font-family: Arial; font-size: 12px;"><?php echo substr($business[0]['company_introduction'],0,1000);?> <?php if(strlen($business[0]['company_introduction']) > 1000) { ?>...<?php } ?> <br>
							</span>
						</div>
					</div>
					<div id="wb_Text158"
						style="position: absolute; left: 230px; top: 242px; width: 351px; height: 45px; text-align: justify; z-index: 28;">
						<span style="color: #000000; font-family: Arial; font-size: 12px;"><?php echo $business[0]['mainservices'];?></span>
					</div>
					<div id="wb_Text159"
						style="position: absolute; left: 69px; top: 336px; width: 89px; height: 15px; text-align: justify; z-index: 29;">
						<span style="color: #696969; font-family: Arial; font-size: 12px;">Main
							Routs</span>
					</div>
					<div id="wb_Text160"
						style="position: absolute; left: 231px; top: 354px; width: 254px; height: 15px; text-align: justify; z-index: 30;">
						<span style="color: #000000; font-family: Arial; font-size: 12px;">China,
						</span>
					</div>
					<div id="wb_Text181"
						style="position: absolute; left: 230px; top: 452px; width: 89px; height: 15px; text-align: justify; z-index: 31;">
						<span style="color: #000000; font-family: Arial; font-size: 12px;">1991</span>
					</div>
					<div id="wb_Text182"
						style="position: absolute; left: 69px; top: 452px; width: 146px; height: 15px; text-align: justify; z-index: 32;">
						<span style="color: #696969; font-family: Arial; font-size: 12px;">Year
							of Establish</span>
					</div>
					<div id="wb_Text180"
						style="position: absolute; left: 69px; top: 472px; width: 106px; height: 15px; text-align: justify; z-index: 33;">
						<span style="color: #696969; font-family: Arial; font-size: 12px;">No.
							of Employees</span>
					</div>
					<div id="wb_Text183"
						style="position: absolute; left: 230px; top: 472px; width: 170px; height: 15px; text-align: justify; z-index: 34;">
						<span style="color: #000000; font-family: Arial; font-size: 12px;">11-50
							Person</span>
					</div>
					<div id="wb_Text152"
						style="position: absolute; left: 230px; top: 492px; width: 89px; height: 15px; text-align: justify; z-index: 35;">
						<span style="color: #000000; font-family: Arial; font-size: 12px;">China</span>
					</div>
					<div id="wb_Text151"
						style="position: absolute; left: 69px; top: 492px; width: 89px; height: 15px; text-align: justify; z-index: 36;">
						<span style="color: #696969; font-family: Arial; font-size: 12px;">Country</span>
					</div>
					<div id="wb_Text154"
						style="position: absolute; left: 69px; top: 512px; width: 89px; height: 15px; text-align: justify; z-index: 37;">
						<span style="color: #696969; font-family: Arial; font-size: 12px;">Province
							/ City</span>
					</div>
					<div id="wb_Text155"
						style="position: absolute; left: 230px; top: 512px; width: 89px; height: 15px; text-align: justify; z-index: 38;">
						<span style="color: #000000; font-family: Arial; font-size: 12px;">Fujian</span>
					</div>
					<div id="wb_Text161"
						style="position: absolute; left: 69px; top: 547px; width: 129px; height: 16px; z-index: 39; text-align: left;">
						<span style="color: #1E90FF; font-family: Arial; font-size: 13px;"><strong>Performance</strong></span>
					</div>
					<div id="wb_Text162"
						style="position: absolute; left: 69px; top: 572px; width: 89px; height: 15px; text-align: justify; z-index: 40;">
						<span style="color: #696969; font-family: Arial; font-size: 12px;">Membership</span>
					</div>
					<div id="wb_Text163"
						style="position: absolute; left: 230px; top: 572px; width: 134px; height: 15px; text-align: justify; z-index: 41;">
						<span style="color: #000000; font-family: Arial; font-size: 12px;">Diamond
							Member</span>
					</div>
					<div id="wb_Text170"
						style="position: absolute; left: 231px; top: 336px; width: 89px; height: 15px; z-index: 42; text-align: left;">
						<span style="color: #696969; font-family: Arial; font-size: 12px;">From</span>
					</div>
					<div id="wb_Text171"
						style="position: absolute; left: 231px; top: 394px; width: 352px; height: 45px; text-align: justify; z-index: 43;">
						<span style="color: #000000; font-family: Arial; font-size: 12px;">Dubai,
							Sharja, Istanbul, Ryiadh, Dubai, Sharja, Istanbul, Ryiadh, Dubai,
							Sharja, Istanbul, Ryiadh, Dubai, Sharja, Istanbul, Ryiadh, <br>Dubai,
							Sharja, Istanbul, Ryiadh,
						</span>
					</div>
					<div id="wb_Text172"
						style="position: absolute; left: 231px; top: 376px; width: 89px; height: 15px; z-index: 44; text-align: left;">
						<span style="color: #696969; font-family: Arial; font-size: 12px;">To</span>
					</div>
					<div id="wb_Text173"
						style="position: absolute; left: 69px; top: 296px; width: 103px; height: 15px; text-align: justify; z-index: 45;">
						<span style="color: #696969; font-family: Arial; font-size: 12px;">Special
							Services</span>
					</div>
					<div id="wb_Text174"
						style="position: absolute; left: 230px; top: 296px; width: 254px; height: 15px; text-align: justify; z-index: 46;">
						<span style="color: #000000; font-family: Arial; font-size: 12px;">Parial
							shippment, LCL, ....</span>
					</div>
				</div>
			</div>
			<div id="Layer95"
				style="position: absolute; text-align: left; visibility: hidden; left: 0px; top: 285px; width: 1280px; height: 651px; z-index: 303;">
				<div id="wb_Shape13"
					style="position: absolute; left: 778px; top: 3px; width: 24px; height: 12px; z-index: 161;">
					<img src="<?php echo asset_url();?>images/img0747.png" id="Shape13" alt=""
						style="width: 24px; height: 12px;">
				</div>
				<div id="Layer102"
					style="position: absolute; text-align: left; left: 0px; top: 12px; width: 1280px; height: 631px; z-index: 162;">
					<div id="Layer113"
						style="position: absolute; text-align: left; left: 0px; top: 7px; width: 1280px; height: 622px; z-index: 157;">
					</div>
					<div id="Layer115"
						style="position: absolute; text-align: left; left: 0px; top: 8px; width: 1280px; height: 622px; z-index: 158;">
						<div id="wb_Text184"
							style="position: absolute; left: 272px; top: 138px; width: 141px; height: 16px; text-align: center; z-index: 137;">
							<span
								style="color: #1E90FF; font-family: Arial; font-size: 13px;"><strong>Contact
									Person</strong></span>
						</div>
						<div id="wb_Text193"
							style="position: absolute; left: 272px; top: 427px; width: 133px; height: 15px; text-align: center; z-index: 138;">
							<span
								style="color: #000000; font-family: Arial; font-size: 12px;"><strong>Jack
									Lee</strong></span>
						</div>
						<div id="wb_PhotoGallery3"
							style="position: absolute; left: 248px; top: 170px; width: 196px; height: 246px; z-index: 139;">
							<table id="PhotoGallery3">
								<tr>
									<td class="image"><a href="<?php echo asset_url();?>images/sell1.jpg"
										data-rel="PhotoGallery3"><img alt="" id="PhotoGallery3_img0"
											src="<?php echo asset_url();?>images/tn_sell1.png"></a></td>
								</tr>
							</table>
						</div>
						<div id="wb_Shape16"
							style="position: absolute; left: 1235px; top: 7px; width: 38px; height: 33px; z-index: 140;">
							<a href="#"
								onclick="ShowObjectWithEffect('Layer95', 0, 'slideup', 500);return false;"><img
								src="<?php echo asset_url();?>images/img0749.gif" id="Shape16" alt=""
								style="width: 38px; height: 33px;"></a>
						</div>
						<div id="wb_Text144"
							style="position: absolute; left: 265px; top: 445px; width: 162px; height: 15px; text-align: center; z-index: 141;">
							<span
								style="color: #696969; font-family: Arial; font-size: 12px;"><strong>jacklee@hotmail.com</strong></span>
						</div>
						<div id="Layer114"
							style="position: absolute; text-align: left; left: 598px; top: 108px; width: 484px; height: 134px; z-index: 142;">
							<div id="wb_Text185"
								style="position: absolute; left: 339px; top: 102px; width: 40px; height: 15px; z-index: 49; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
							</div>
							<div id="wb_Text186"
								style="position: absolute; left: 339px; top: 81px; width: 39px; height: 16px; z-index: 50; text-align: left;">
								<span
									style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Fax</strong></span>
							</div>
							<div id="wb_Text187"
								style="position: absolute; left: 337px; top: 42px; width: 40px; height: 15px; z-index: 51; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
							</div>
							<div id="wb_Text188"
								style="position: absolute; left: 337px; top: 20px; width: 33px; height: 16px; z-index: 52; text-align: left;">
								<span
									style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Tel</strong></span>
							</div>
							<div id="wb_Text190"
								style="position: absolute; left: 42px; top: 20px; width: 246px; height: 30px; z-index: 53; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">Office
									No. 250, Hengsheng Building No. 203, C Zuo, HuanshiZhong Road</span>
							</div>
							<div id="wb_Text192"
								style="position: absolute; left: 42px; top: 51px; width: 116px; height: 15px; z-index: 54; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">Guangdong</span>
							</div>
							<div id="wb_Text194"
								style="position: absolute; left: 191px; top: 53px; width: 116px; height: 15px; z-index: 55; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">China</span>
							</div>
							<div id="wb_Text196"
								style="position: absolute; left: 119px; top: 52px; width: 94px; height: 15px; z-index: 56; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">Guangzhou</span>
							</div>
							<div id="wb_Text243"
								style="position: absolute; left: 370px; top: 42px; width: 79px; height: 15px; z-index: 57; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
							</div>
							<div id="wb_Text244"
								style="position: absolute; left: 372px; top: 102px; width: 79px; height: 15px; z-index: 58; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
							</div>
							<div id="wb_Text246"
								style="position: absolute; left: 43px; top: 79px; width: 47px; height: 16px; z-index: 59; text-align: left;">
								<span
									style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Email</strong></span>
							</div>
							<div id="wb_Text251"
								style="position: absolute; left: 86px; top: 79px; width: 198px; height: 15px; z-index: 60; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">zaki-hazem250@hotmail.com</span>
							</div>
							<div id="wb_Text253"
								style="position: absolute; left: 86px; top: 99px; width: 198px; height: 15px; z-index: 61; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">www.udtalks.com</span>
							</div>
							<div id="wb_Text252"
								style="position: absolute; left: 43px; top: 99px; width: 45px; height: 16px; z-index: 62; text-align: left;">
								<span
									style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Web</strong></span>
							</div>
							<div id="wb_Text254"
								style="position: absolute; left: 337px; top: 58px; width: 40px; height: 15px; z-index: 63; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
							</div>
							<div id="wb_Text255"
								style="position: absolute; left: 370px; top: 58px; width: 79px; height: 15px; z-index: 64; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
							</div>
						</div>
						<div id="wb_Text277"
							style="position: absolute; left: 603px; top: 288px; width: 191px; height: 16px; z-index: 143; text-align: left;">
							<span
								style="color: #3C3C3C; font-family: Arial; font-size: 13px;"><strong>WORLDWIDE
									BRANCHES</strong></span>
						</div>
						<div id="wb_Text191"
							style="position: absolute; left: 602px; top: 75px; width: 133px; height: 16px; z-index: 144; text-align: left;">
							<span
								style="color: #3C3C3C; font-family: Arial; font-size: 13px;"><strong>MAIN
									OFFICE</strong></span>
						</div>
						<div id="Layer86"
							style="position: absolute; overflow: scroll; text-align: left; left: 589px; top: 313px; width: 522px; height: 189px; z-index: 145;">
							<div id="Layer87"
								style="position: absolute; text-align: left; left: 11px; top: 11px; width: 484px; height: 155px; z-index: 133;">
								<div id="wb_Text137"
									style="position: absolute; left: 339px; top: 113px; width: 40px; height: 15px; z-index: 65; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text178"
									style="position: absolute; left: 339px; top: 92px; width: 39px; height: 16px; z-index: 66; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Fax</strong></span>
								</div>
								<div id="wb_Text189"
									style="position: absolute; left: 337px; top: 43px; width: 40px; height: 15px; z-index: 67; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text195"
									style="position: absolute; left: 337px; top: 21px; width: 33px; height: 16px; z-index: 68; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Tel</strong></span>
								</div>
								<div id="wb_Text198"
									style="position: absolute; left: 42px; top: 41px; width: 246px; height: 30px; z-index: 69; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Office
										No. 250, Hengsheng Building No. 203, C Zuo, HuanshiZhong Road</span>
								</div>
								<div id="wb_Text199"
									style="position: absolute; left: 42px; top: 21px; width: 133px; height: 16px; z-index: 70; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>UAE
											Office</strong></span>
								</div>
								<div id="wb_Text200"
									style="position: absolute; left: 42px; top: 72px; width: 116px; height: 15px; z-index: 71; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Guangdong</span>
								</div>
								<div id="wb_Text201"
									style="position: absolute; left: 191px; top: 74px; width: 116px; height: 15px; z-index: 72; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">China</span>
								</div>
								<div id="wb_Text202"
									style="position: absolute; left: 119px; top: 73px; width: 94px; height: 15px; z-index: 73; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Guangzhou</span>
								</div>
								<div id="wb_Text203"
									style="position: absolute; left: 370px; top: 43px; width: 79px; height: 15px; z-index: 74; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
								<div id="wb_Text204"
									style="position: absolute; left: 372px; top: 113px; width: 79px; height: 15px; z-index: 75; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
								<div id="wb_Text205"
									style="position: absolute; left: 43px; top: 100px; width: 47px; height: 16px; z-index: 76; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Email</strong></span>
								</div>
								<div id="wb_Text206"
									style="position: absolute; left: 86px; top: 100px; width: 198px; height: 15px; z-index: 77; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">zaki-hazem250@hotmail.com</span>
								</div>
								<div id="wb_Text207"
									style="position: absolute; left: 86px; top: 120px; width: 198px; height: 15px; z-index: 78; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">www.udtalks.com</span>
								</div>
								<div id="wb_Text208"
									style="position: absolute; left: 43px; top: 120px; width: 45px; height: 16px; z-index: 79; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Web</strong></span>
								</div>
								<div id="wb_Text209"
									style="position: absolute; left: 337px; top: 59px; width: 40px; height: 15px; z-index: 80; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text210"
									style="position: absolute; left: 370px; top: 59px; width: 79px; height: 15px; z-index: 81; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
							</div>
							<div id="Layer88"
								style="position: absolute; text-align: left; left: 11px; top: 181px; width: 484px; height: 155px; z-index: 134;">
								<div id="wb_Text211"
									style="position: absolute; left: 339px; top: 113px; width: 40px; height: 15px; z-index: 82; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text212"
									style="position: absolute; left: 339px; top: 92px; width: 39px; height: 16px; z-index: 83; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Fax</strong></span>
								</div>
								<div id="wb_Text213"
									style="position: absolute; left: 337px; top: 43px; width: 40px; height: 15px; z-index: 84; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text214"
									style="position: absolute; left: 337px; top: 21px; width: 33px; height: 16px; z-index: 85; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Tel</strong></span>
								</div>
								<div id="wb_Text215"
									style="position: absolute; left: 42px; top: 41px; width: 246px; height: 30px; z-index: 86; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Office
										No. 250, Hengsheng Building No. 203, C Zuo, HuanshiZhong Road</span>
								</div>
								<div id="wb_Text216"
									style="position: absolute; left: 42px; top: 21px; width: 133px; height: 16px; z-index: 87; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>UAE
											Office</strong></span>
								</div>
								<div id="wb_Text217"
									style="position: absolute; left: 42px; top: 72px; width: 116px; height: 15px; z-index: 88; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Guangdong</span>
								</div>
								<div id="wb_Text219"
									style="position: absolute; left: 191px; top: 74px; width: 116px; height: 15px; z-index: 89; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">China</span>
								</div>
								<div id="wb_Text220"
									style="position: absolute; left: 119px; top: 73px; width: 94px; height: 15px; z-index: 90; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Guangzhou</span>
								</div>
								<div id="wb_Text221"
									style="position: absolute; left: 370px; top: 43px; width: 79px; height: 15px; z-index: 91; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
								<div id="wb_Text222"
									style="position: absolute; left: 372px; top: 113px; width: 79px; height: 15px; z-index: 92; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
								<div id="wb_Text223"
									style="position: absolute; left: 43px; top: 100px; width: 47px; height: 16px; z-index: 93; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Email</strong></span>
								</div>
								<div id="wb_Text224"
									style="position: absolute; left: 86px; top: 100px; width: 198px; height: 15px; z-index: 94; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">zaki-hazem250@hotmail.com</span>
								</div>
								<div id="wb_Text225"
									style="position: absolute; left: 86px; top: 120px; width: 198px; height: 15px; z-index: 95; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">www.udtalks.com</span>
								</div>
								<div id="wb_Text226"
									style="position: absolute; left: 43px; top: 120px; width: 45px; height: 16px; z-index: 96; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Web</strong></span>
								</div>
								<div id="wb_Text227"
									style="position: absolute; left: 337px; top: 59px; width: 40px; height: 15px; z-index: 97; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text229"
									style="position: absolute; left: 370px; top: 59px; width: 79px; height: 15px; z-index: 98; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
							</div>
							<div id="Layer117"
								style="position: absolute; text-align: left; left: 11px; top: 351px; width: 484px; height: 155px; z-index: 135;">
								<div id="wb_Text230"
									style="position: absolute; left: 339px; top: 113px; width: 40px; height: 15px; z-index: 99; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text231"
									style="position: absolute; left: 339px; top: 92px; width: 39px; height: 16px; z-index: 100; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Fax</strong></span>
								</div>
								<div id="wb_Text232"
									style="position: absolute; left: 337px; top: 43px; width: 40px; height: 15px; z-index: 101; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text233"
									style="position: absolute; left: 337px; top: 21px; width: 33px; height: 16px; z-index: 102; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Tel</strong></span>
								</div>
								<div id="wb_Text234"
									style="position: absolute; left: 42px; top: 41px; width: 246px; height: 30px; z-index: 103; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Office
										No. 250, Hengsheng Building No. 203, C Zuo, HuanshiZhong Road</span>
								</div>
								<div id="wb_Text235"
									style="position: absolute; left: 42px; top: 21px; width: 133px; height: 16px; z-index: 104; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>UAE
											Office</strong></span>
								</div>
								<div id="wb_Text236"
									style="position: absolute; left: 42px; top: 72px; width: 116px; height: 15px; z-index: 105; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Guangdong</span>
								</div>
								<div id="wb_Text237"
									style="position: absolute; left: 191px; top: 74px; width: 116px; height: 15px; z-index: 106; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">China</span>
								</div>
								<div id="wb_Text238"
									style="position: absolute; left: 119px; top: 73px; width: 94px; height: 15px; z-index: 107; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Guangzhou</span>
								</div>
								<div id="wb_Text239"
									style="position: absolute; left: 370px; top: 43px; width: 79px; height: 15px; z-index: 108; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
								<div id="wb_Text240"
									style="position: absolute; left: 372px; top: 113px; width: 79px; height: 15px; z-index: 109; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
								<div id="wb_Text241"
									style="position: absolute; left: 43px; top: 100px; width: 47px; height: 16px; z-index: 110; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Email</strong></span>
								</div>
								<div id="wb_Text242"
									style="position: absolute; left: 86px; top: 100px; width: 198px; height: 15px; z-index: 111; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">zaki-hazem250@hotmail.com</span>
								</div>
								<div id="wb_Text256"
									style="position: absolute; left: 86px; top: 120px; width: 198px; height: 15px; z-index: 112; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">www.udtalks.com</span>
								</div>
								<div id="wb_Text257"
									style="position: absolute; left: 43px; top: 120px; width: 45px; height: 16px; z-index: 113; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Web</strong></span>
								</div>
								<div id="wb_Text258"
									style="position: absolute; left: 337px; top: 59px; width: 40px; height: 15px; z-index: 114; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text259"
									style="position: absolute; left: 370px; top: 59px; width: 79px; height: 15px; z-index: 115; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
							</div>
							<div id="Layer118"
								style="position: absolute; text-align: left; left: 11px; top: 521px; width: 484px; height: 155px; z-index: 136;">
								<div id="wb_Text260"
									style="position: absolute; left: 339px; top: 113px; width: 40px; height: 15px; z-index: 116; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text261"
									style="position: absolute; left: 339px; top: 92px; width: 39px; height: 16px; z-index: 117; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Fax</strong></span>
								</div>
								<div id="wb_Text262"
									style="position: absolute; left: 337px; top: 43px; width: 40px; height: 15px; z-index: 118; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text263"
									style="position: absolute; left: 337px; top: 21px; width: 33px; height: 16px; z-index: 119; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Tel</strong></span>
								</div>
								<div id="wb_Text264"
									style="position: absolute; left: 42px; top: 41px; width: 246px; height: 30px; z-index: 120; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Office
										No. 250, Hengsheng Building No. 203, C Zuo, HuanshiZhong Road</span>
								</div>
								<div id="wb_Text265"
									style="position: absolute; left: 42px; top: 21px; width: 133px; height: 16px; z-index: 121; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>UAE
											Office</strong></span>
								</div>
								<div id="wb_Text266"
									style="position: absolute; left: 42px; top: 72px; width: 116px; height: 15px; z-index: 122; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Guangdong</span>
								</div>
								<div id="wb_Text267"
									style="position: absolute; left: 191px; top: 74px; width: 116px; height: 15px; z-index: 123; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">China</span>
								</div>
								<div id="wb_Text268"
									style="position: absolute; left: 119px; top: 73px; width: 94px; height: 15px; z-index: 124; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">Guangzhou</span>
								</div>
								<div id="wb_Text269"
									style="position: absolute; left: 370px; top: 43px; width: 79px; height: 15px; z-index: 125; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
								<div id="wb_Text270"
									style="position: absolute; left: 372px; top: 113px; width: 79px; height: 15px; z-index: 126; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
								<div id="wb_Text271"
									style="position: absolute; left: 43px; top: 100px; width: 47px; height: 16px; z-index: 127; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Email</strong></span>
								</div>
								<div id="wb_Text272"
									style="position: absolute; left: 86px; top: 100px; width: 198px; height: 15px; z-index: 128; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">zaki-hazem250@hotmail.com</span>
								</div>
								<div id="wb_Text273"
									style="position: absolute; left: 86px; top: 120px; width: 198px; height: 15px; z-index: 129; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">www.udtalks.com</span>
								</div>
								<div id="wb_Text274"
									style="position: absolute; left: 43px; top: 120px; width: 45px; height: 16px; z-index: 130; text-align: left;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;"><strong>Web</strong></span>
								</div>
								<div id="wb_Text275"
									style="position: absolute; left: 337px; top: 59px; width: 40px; height: 15px; z-index: 131; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">0086</span>
								</div>
								<div id="wb_Text276"
									style="position: absolute; left: 370px; top: 59px; width: 79px; height: 15px; z-index: 132; text-align: left;">
									<span
										style="color: #000000; font-family: Arial; font-size: 12px;">028665384</span>
								</div>
							</div>
						</div>
					</div>
					<div id="Layer94"
						style="position: absolute; text-align: left; visibility: hidden; left: 0px; top: 8px; width: 1280px; height: 622px; z-index: 159;">
						<div id="wb_Shape22"
							style="position: absolute; left: 1235px; top: 7px; width: 38px; height: 33px; z-index: 152;">
							<a href="#"
								onclick="ShowObjectWithEffect('Layer94', 0, 'slideup', 500);ShowObjectWithEffect('Layer115', 1, 'fade', 500, 'swing');return false;"><img
								src="<?php echo asset_url();?>images/img0750.gif" id="Shape22" alt=""
								style="width: 38px; height: 33px;"></a>
						</div>
						<div id="wb_Text197"
							style="position: absolute; left: 199px; top: 64px; width: 288px; height: 22px; z-index: 153; text-align: left;">
							<span
								style="color: #1E90FF; font-family: Arial; font-size: 19px;"><strong>CONTACT
									US</strong></span>
						</div>
						<div id="wb_Form1"
							style="position: absolute; left: 199px; top: 112px; width: 954px; height: 457px; z-index: 154;">
							<form name="contact" method="post" action=""
								enctype="application/x-www-form-urlencoded" id="Form1">
								<input type="text" id="Editbox1"
									style="position: absolute; left: 0px; top: 4px; width: 327px; height: 46px; line-height: 46px; z-index: 146;"
									name="name" value="" maxlength="50" placeholder="Name">
								<textarea name="message" id="TextArea1"
									style="position: absolute; left: 0px; top: 130px; width: 682px; height: 222px; z-index: 147;"
									rows="16" cols="95" maxlength="500" placeholder="Message"></textarea>
								<input type="submit" id="Button1" name="" value="Send"
									style="position: absolute; left: 600px; top: 380px; width: 96px; height: 25px; z-index: 148;">
								<input type="number" id="Editbox2"
									style="position: absolute; left: 353px; top: 65px; width: 327px; height: 46px; line-height: 46px; z-index: 149;"
									name="phone" value="" maxlength="15" placeholder="Phone"> <input
									type="text" id="Editbox3"
									style="position: absolute; left: 354px; top: 4px; width: 327px; height: 46px; line-height: 46px; z-index: 150;"
									name="company" value="" maxlength="50" placeholder="Company"> <input
									type="email" id="Editbox4"
									style="position: absolute; left: 0px; top: 65px; width: 327px; height: 46px; line-height: 46px; z-index: 151;"
									name="email" value="" maxlength="30" placeholder="Email">
							</form>
						</div>
					</div>
					<div id="Layer112"
						style="position: absolute; text-align: left; left: 45px; top: 6px; width: 122px; height: 487px; z-index: 160;">
						<div id="wb_Shape17"
							style="position: absolute; left: 11px; top: 212px; width: 97px; height: 33px; z-index: 155;">
							<a href="#bookmark1"
								onclick="ShowObjectWithEffect('Layer115', 1, 'fade', 500, 'swing');ShowObjectWithEffect('Layer116', 0, 'fade', 500, 'swing');ShowObjectWithEffect('Layer94', 0, 'fade', 500, 'swing');ShowObjectWithEffect('Layer105', 0, 'fade', 500, 'swing');return false;"><div
									id="Shape17">
									<div id="Shape17_text">
										<span
											style="color: #1E90FF; font-family: Arial; font-size: 15px;"><u>Information</u></span>
									</div>
								</div></a>
						</div>
						<div id="wb_Shape18"
							style="position: absolute; left: 11px; top: 240px; width: 97px; height: 33px; z-index: 156;">
							<a href="#bookmark1"
								onclick="ShowObjectWithEffect('Layer115', 0, 'fade', 500, 'swing');ShowObjectWithEffect('Layer116', 0, 'fade', 500, 'swing');ShowObjectWithEffect('Layer94', 1, 'fade', 500, 'swing');ShowObjectWithEffect('Layer105', 0, 'fade', 500, 'swing');return false;"><div
									id="Shape18">
									<div id="Shape18_text">
										<span
											style="color: #1E90FF; font-family: Arial; font-size: 15px;"><u>Contact
												us</u></span>
									</div>
								</div></a>
						</div>
					</div>
				</div>
			</div>
			<div id="Layer120"
				style="position: absolute; text-align: left; visibility: hidden; left: 419px; top: 287px; width: 652px; height: 529px; z-index: 304;"
				onmouseleave="ShowObjectWithEffect('Layer120', 0, 'slideup', 500, 'swing');return false;">
				<div id="Layer121"
					style="position: absolute; text-align: left; left: 174px; top: 9px; width: 198px; height: 490px; z-index: 168;">
					<div id="wb_Shape27"
						style="position: absolute; left: 1px; top: 453px; width: 196px; height: 35px; z-index: 163;">
						<a href="#"
							onclick="ShowObjectWithEffect('Layer120', 0, 'slideup', 500);return false;"><img
							src="<?php echo asset_url();?>images/img0754.gif" id="Shape27" alt=""
							style="width: 196px; height: 35px;"></a>
					</div>
					<div id="Layer122"
						style="position: absolute; text-align: left; left: 2px; top: 7px; width: 195px; height: 445px; z-index: 164;">
					</div>
					<div id="Layer126"
						style="position: absolute; text-align: left; left: 1px; top: 7px; width: 196px; height: 445px; z-index: 165;">
					</div>
					<div id="Layer134"
						style="position: absolute; text-align: left; left: 2px; top: 13px; width: 195px; height: 319px; z-index: 166;">
					</div>
					<div id="wb_CssMenu1"
						style="position: absolute; left: 4px; top: 21px; width: 190px; height: 238px; z-index: 167;">
						<ul>
							<li class="firstmain"><a href="./service_details.php"
								target="_self">Sea&nbsp;Freight</a></li>
							<li><a href="./service_details.php" target="_self">Air&nbsp;Freight</a>
							</li>
							<li><a href="./service_details.php" target="_self">Land&nbsp;Freight</a>
							</li>
							<li><a href="./products_category.php" target="_self">Door&nbsp;2&nbsp;Door</a>
							</li>
							<li><a href="./service_details.php" target="_self">Port&nbsp;Agencies</a>
							</li>
							<li><a href="./service_details.php" target="_self">Special&nbsp;Service</a>
							</li>
						</ul>
						<br>
					</div>
				</div>
				<div id="wb_Shape20"
					style="position: absolute; left: 259px; top: 0px; width: 24px; height: 12px; z-index: 169;">
					<img src="<?php echo asset_url();?>images/img0755.png" id="Shape20" alt=""
						style="width: 24px; height: 12px;">
				</div>
			</div>
			<div id="wb_Text452"
				style="position: absolute; left: 3px; top: 1821px; width: 166px; height: 19px; z-index: 305; text-align: left;">
				<span style="color: #4B4B4B; font-family: Arial; font-size: 17px;"><strong>New
						Arrivals</strong></span>
			</div>
			<div id="wb_Image104"
				style="position: absolute; left: 1121px; top: 103px; width: 43px; height: 43px; z-index: 306;">
				<img src="<?php echo asset_url();?>images/black-horse.png" id="Image104" alt="">
			</div>
			<div id="Layer97"
				style="position: absolute; text-align: left; left: 0px; top: 260px; width: 1280px; height: 28px; z-index: 307;">
				<div id="wb_Shape4"
					style="position: absolute; left: 449px; top: 0px; width: 97px; height: 28px; z-index: 170;">
					<div id="Shape4">
						<div id="Shape4_text">
							<span
								style="color: #696969; font-family: 'MS Shell Dlg'; font-size: 13px;">Home</span>
						</div>
					</div>
				</div>
				<div id="wb_Shape5"
					style="position: absolute; left: 546px; top: 0px; width: 97px; height: 28px; z-index: 171;">
					<a href=""
						onclick="ShowObjectWithEffect('Layer98', 1, 'slideup', 500, 'swing');ShowObjectWithEffect('Layer95', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer120', 0, 'slidedown', 500, 'swing');return false;"><div
							id="Shape5">
							<div id="Shape5_text">
								<span
									style="color: #696969; font-family: 'MS Shell Dlg'; font-size: 13px;">About</span>
							</div>
						</div></a>
				</div>
				<div id="wb_Shape6"
					style="position: absolute; left: 643px; top: 0px; width: 97px; height: 28px; z-index: 172;">
					<a href=""
						onclick="ShowObjectWithEffect('Layer98', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer95', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer120', 1, 'slideup', 500, 'swing');return false;"><div
							id="Shape6">
							<div id="Shape6_text">
								<span
									style="color: #696969; font-family: 'MS Shell Dlg'; font-size: 13px;">Services</span>
							</div>
						</div></a>
				</div>
				<div id="wb_Shape7"
					style="position: absolute; left: 740px; top: 0px; width: 97px; height: 28px; z-index: 173;">
					<a href=""
						onclick="ShowObjectWithEffect('Layer95', 1, 'slideup', 500, 'swing');ShowObjectWithEffect('Layer98', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer120', 0, 'slidedown', 500, 'swing');return false;"><div
							id="Shape7">
							<div id="Shape7_text">
								<span
									style="color: #696969; font-family: 'MS Shell Dlg'; font-size: 13px;">Contact</span>
							</div>
						</div></a>
				</div>
				<div id="wb_Shape52"
					style="position: absolute; left: 451px; top: 6px; width: 7px; height: 15px; z-index: 174;">
					<a href="<?php echo base_url();?>shipper/profile/<?php $business[0]['busi_id'];?>"><img class="hover" src="<?php echo asset_url();?>images/img0786_hover.png" alt=""
						style="border-width: 0; width: 7px; height: 15px;"><span><img
							src="<?php echo asset_url();?>images/img0786.png" id="Shape52" alt=""
							style="width: 7px; height: 15px;"></span></a>
				</div>
			</div>
			<div id="Layer293"
				style="position: absolute; text-align: left; left: 0px; top: 2282px; width: 1280px; height: 284px; z-index: 308;">
				<div id="wb_Text288"
					style="position: absolute; left: 240px; top: 48px; width: 75px; height: 16px; z-index: 176; text-align: left;">
					<span
						style="color: #4B4B4B; font-family: Georgia; font-size: 13px;"><strong>About
					</strong></span>
				</div>
				<div id="wb_Text289"
					style="position: absolute; left: 240px; top: 70px; width: 71px; height: 15px; z-index: 177; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./copyrights.php" target="_blank" class="Footer">Copyrights</a></span>
				</div>
				<div id="wb_Text290"
					style="position: absolute; left: 240px; top: 93px; width: 122px; height: 15px; z-index: 178; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./terms.php" target="_blank" class="Footer">Terms &amp;
							Conditions</a></span>
				</div>
				<div id="wb_Text291"
					style="position: absolute; left: 240px; top: 116px; width: 122px; height: 15px; z-index: 179; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./privacy.html" target="_blank" class="Footer">Privacy
							policy</a></span>
				</div>
				<div id="wb_Text292"
					style="position: absolute; left: 239px; top: 148px; width: 109px; height: 16px; z-index: 180; text-align: left;">
					<span
						style="color: #4B4B4B; font-family: Georgia; font-size: 13px;"><strong>Help
							center </strong></span>
				</div>
				<div id="wb_Text293"
					style="position: absolute; left: 240px; top: 175px; width: 71px; height: 15px; z-index: 181; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./how_to.php" target="_blank" class="Footer">How to start</a></span>
				</div>
				<div id="wb_Text294"
					style="position: absolute; left: 397px; top: 46px; width: 122px; height: 15px; z-index: 182; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./contact_us.php" target="_blank" class="Footer">Contact us</a></span>
				</div>
				<div id="wb_Text295"
					style="position: absolute; left: 397px; top: 69px; width: 122px; height: 15px; z-index: 183; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./contact_us.php" target="_blank" class="Footer">Complaint</a></span>
				</div>
				<div id="wb_Text297"
					style="position: absolute; left: 397px; top: 97px; width: 75px; height: 16px; z-index: 184; text-align: left;">
					<span
						style="color: #4B4B4B; font-family: Georgia; font-size: 13px;"><strong>Account</strong></span>
				</div>
				<div id="wb_Text298"
					style="position: absolute; left: 397px; top: 127px; width: 71px; height: 15px; z-index: 185; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./login.php" target="_blank" class="Footer">Log in</a></span>
				</div>
				<div id="wb_Text319"
					style="position: absolute; left: 397px; top: 153px; width: 122px; height: 15px; z-index: 186; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./profile_personal_info.php" target="_blank" class="Footer">Register</a></span>
				</div>
				<div id="wb_Text320"
					style="position: absolute; left: 397px; top: 178px; width: 122px; height: 30px; z-index: 187; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./membership.php" target="_blank" class="Footer">Upgrade
							Membership</a></span>
				</div>
				<div id="wb_Text322"
					style="position: absolute; left: 577px; top: 128px; width: 154px; height: 16px; z-index: 188; text-align: left;">
					<span
						style="color: #4B4B4B; font-family: Georgia; font-size: 13px;"><strong>Trade
							Station</strong></span>
				</div>
				<div id="wb_Text323"
					style="position: absolute; left: 756px; top: 45px; width: 131px; height: 15px; z-index: 189; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./seller_offer.php" target="_blank" class="Footer">Send&nbsp;
							a selling post</a></span>
				</div>
				<div id="wb_Text324"
					style="position: absolute; left: 577px; top: 153px; width: 164px; height: 15px; z-index: 190; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./seller_offer.php" target="_blank" class="Footer">Global
							Buying Requests</a></span>
				</div>
				<div id="wb_Text326"
					style="position: absolute; left: 758px; top: 97px; width: 131px; height: 15px; z-index: 191; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./seller_offer.php" target="_blank" class="Footer">View your
							posts</a></span>
				</div>
				<div id="wb_Text339"
					style="position: absolute; left: 577px; top: 45px; width: 122px; height: 15px; z-index: 192; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./index.php" target="_blank" class="Footer">Language
							Settings</a></span>
				</div>
				<div id="wb_Text517"
					style="position: absolute; left: 756px; top: 69px; width: 131px; height: 15px; z-index: 193; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./seller_offer.php" target="_blank" class="Footer">Send a
							buying post</a></span>
				</div>
				<div id="wb_Text534"
					style="position: absolute; left: 577px; top: 178px; width: 202px; height: 15px; z-index: 194; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./seller_offer.php" target="_blank" class="Footer">Global
							Selling Offers</a></span>
				</div>
				<div id="wb_Text535"
					style="position: absolute; left: 756px; top: 153px; width: 120px; height: 15px; z-index: 195; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./community.php" target="_blank" class="Footer">Global Stock
							Offers</a></span>
				</div>
				<div id="wb_Text536"
					style="position: absolute; left: 756px; top: 178px; width: 146px; height: 15px; z-index: 196; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./community.php" target="_blank" class="Footer">Global Stock
							Requests</a></span>
				</div>
				<div id="wb_Text537"
					style="position: absolute; left: 942px; top: 77px; width: 109px; height: 16px; z-index: 197; text-align: left;">
					<span
						style="color: #4B4B4B; font-family: Georgia; font-size: 13px;"><strong>New
							Trends</strong></span>
				</div>
				<div id="wb_Text538"
					style="position: absolute; left: 942px; top: 105px; width: 129px; height: 15px; z-index: 198; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./v_catalogue.php" target="_blank" class="Footer">Find
							V-Catalogues</a></span>
				</div>
				<div id="wb_Text539"
					style="position: absolute; left: 942px; top: 131px; width: 122px; height: 15px; z-index: 199; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./real_in3d.php" target="_blank" class="Footer">Find Real in
							3D pro.</a></span>
				</div>
				<div id="wb_Text540"
					style="position: absolute; left: 942px; top: 156px; width: 135px; height: 15px; z-index: 200; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./pro_videos.php" target="_blank" class="Footer">Find
							Pro-Videos</a></span>
				</div>
				<div id="wb_Text542"
					style="position: absolute; left: 942px; top: 179px; width: 135px; height: 15px; z-index: 201; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./video_details.php" target="_blank" class="Footer">Community</a></span>
				</div>
				<div id="wb_Text543"
					style="position: absolute; left: 577px; top: 97px; width: 202px; height: 15px; z-index: 202; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./seller_offer.php" target="_blank" class="Footer">Global
							Selling Offers</a></span>
				</div>
				<div id="wb_Text544"
					style="position: absolute; left: 577px; top: 69px; width: 112px; height: 15px; z-index: 203; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./control_panel.php" target="_blank" class="Footer">My
							Control Panel </a></span>
				</div>
				<div id="wb_Text545"
					style="position: absolute; left: 756px; top: 129px; width: 154px; height: 16px; z-index: 204; text-align: left;">
					<span
						style="color: #4B4B4B; font-family: Georgia; font-size: 13px;"><strong>Stock
							Goods</strong></span>
				</div>
				<div id="wb_Text546"
					style="position: absolute; left: 942px; top: 44px; width: 129px; height: 15px; z-index: 205; text-align: left;">
					<span style="color: #696969; font-family: Arial; font-size: 12px;"><a
						href="./community.php" target="_blank" class="Footer">Follow Stock
							Posts</a></span>
				</div>
				<div id="Layer295"
					style="position: absolute; text-align: left; left: 0px; top: 242px; width: 1280px; height: 42px; z-index: 206;">
					<div id="wb_Text541"
						style="position: absolute; left: 475px; top: 14px; width: 358px; height: 14px; z-index: 175; text-align: left;">
						<span style="color: #DCDCDC; font-family: Arial; font-size: 11px;">COPYRIGHTS
							| TRDSTATION 2013-2016 @ ALL RIGHTS RESERVED</span>
					</div>
				</div>
			</div>
			<div id="Layer123"
				style="position: absolute; text-align: left; left: 321px; top: 2067px; width: 313px; height: 156px; z-index: 309;">
				<div id="wb_Text248"
					style="position: absolute; left: 134px; top: 35px; width: 169px; height: 34px; z-index: 207; text-align: left;">
					<span style="color: #1E90FF; font-family: Arial; font-size: 13px;"><a
						href="./service_details.php" class="style16">Inspection<br></a></span>
				</div>
				<div id="wb_Text179"
					style="position: absolute; left: 133px; top: 66px; width: 162px; height: 60px; z-index: 208; text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Our
						men’s shoes department covers virtually every, men’s shoes
						department ...</span>
				</div>
				<div id="wb_Shape19"
					style="position: absolute; left: 16px; top: 36px; width: 100px; height: 100px; z-index: 209;">
					<img src="<?php echo asset_url();?>images/img0817.png" id="Shape19" alt=""
						style="width: 100px; height: 100px;">
				</div>
			</div>
			<div id="Layer124"
				style="position: absolute; text-align: left; left: 642px; top: 2067px; width: 313px; height: 156px; z-index: 310;">
				<div id="wb_Text249"
					style="position: absolute; left: 134px; top: 35px; width: 169px; height: 16px; z-index: 210; text-align: left;">
					<span style="color: #1E90FF; font-family: Arial; font-size: 13px;"><a
						href="./service_details.php" class="style16">Port Agencies</a></span>
				</div>
				<div id="wb_Text283"
					style="position: absolute; left: 132px; top: 66px; width: 162px; height: 60px; z-index: 211; text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Our
						men’s shoes department covers virtually every, men’s shoes
						department ...</span>
				</div>
				<div id="wb_Shape23"
					style="position: absolute; left: 16px; top: 36px; width: 100px; height: 100px; z-index: 212;">
					<img src="<?php echo asset_url();?>images/img0818.png" id="Shape23" alt=""
						style="width: 100px; height: 100px;">
				</div>
			</div>
			<div id="Layer125"
				style="position: absolute; text-align: left; left: 964px; top: 2067px; width: 313px; height: 156px; z-index: 311;">
				<div id="wb_Text549"
					style="position: absolute; left: 134px; top: 35px; width: 169px; height: 34px; z-index: 213; text-align: left;">
					<span style="color: #1E90FF; font-family: Arial; font-size: 13px;"><a
						href="./service_details.php" class="style16">Any other services<br></a></span>
				</div>
				<div id="wb_Text550"
					style="position: absolute; left: 131px; top: 66px; width: 162px; height: 60px; z-index: 214; text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Our
						men’s shoes department covers virtually every, men’s shoes
						department ...</span>
				</div>
				<div id="wb_Shape26"
					style="position: absolute; left: 16px; top: 36px; width: 100px; height: 100px; z-index: 215;">
					<img src="<?php echo asset_url();?>images/img0819.png" id="Shape26" alt=""
						style="width: 100px; height: 100px;">
				</div>
			</div>
			<div id="Layer127"
				style="position: absolute; text-align: left; left: 0px; top: 2067px; width: 313px; height: 156px; z-index: 312;">
				<div id="wb_Text551"
					style="position: absolute; left: 134px; top: 35px; width: 169px; height: 16px; z-index: 216; text-align: left;">
					<span style="color: #1E90FF; font-family: Arial; font-size: 13px;"><a
						href="./service_details.php" class="style16">Door 2 Door Services</a></span>
				</div>
				<div id="wb_Text552"
					style="position: absolute; left: 134px; top: 66px; width: 162px; height: 60px; z-index: 217; text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Our
						men’s shoes department covers virtually every, men’s shoes
						department ...</span>
				</div>
				<div id="wb_Shape28"
					style="position: absolute; left: 16px; top: 36px; width: 100px; height: 100px; z-index: 218;">
					<img src="<?php echo asset_url();?>images/img0820.png" id="Shape28" alt=""
						style="width: 100px; height: 100px;">
				</div>
			</div>
			<div id="wb_Image102"
				style="position: absolute; left: 22px; top: 213px; width: 33px; height: 33px; z-index: 313;">
				<a href="javascript:showDesksite();" >
					<img src="<?php echo asset_url();?>images/desktoplogo.png" id="Image102" alt="">
				</a>
			</div>
			<div id="wb_Text554"
				style="position: absolute; left: 64px; top: 223px; width: 88px; height: 15px; z-index: 314; text-align: left;">
				<span style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">My
					Desktop</span>
			</div>
			<div id="wb_Shape30"
				style="position: absolute; left: 167px; top: 89px; width: 124px; height: 124px; z-index: 315;">
				<img src="<?php echo asset_url();?><?php echo $business[0]['business_logo'];?>" id="Shape30" alt=""
					style="width: 124px; height: 124px;">
			</div>
			<div id="wb_Text169"
				style="position: absolute; left: 1084px; top: 150px; width: 147px; height: 14px; z-index: 316; text-align: left;">
				<span style="color: #3C3C3C; font-family: Arial; font-size: 11px;"><strong>Black
						Horse Member</strong></span>
			</div>
			<div id="Layer92"
				style="position: absolute; text-align: left; visibility: hidden; left: 1098px; top: 1px; width: 120px; height: 178px; z-index: 317;"
				onmouseleave="ShowObjectWithEffect('Layer92', 0, 'fold', 300);return false;">
				<div id="wb_CssMenu7"
					style="position: absolute; left: 0px; top: 46px; width: 120px; height: 132px; z-index: 219;">
					<ul>
						<li class="firstmain"><a href="#" target="_self">Account</a></li>
						<li><a href="#" target="_self">Membership</a></li>
						<li><a href="#" target="_self">Control&nbsp;Panel</a></li>
						<li><a href="#" target="_self">Logout</a></li>
					</ul>
					<br>
				</div>
			</div>
			<div id="Layer89"
				style="position: absolute; text-align: center; left: 0%; top: 0px; width: 1280px; height: 47px; z-index: 318;">
				<div id="Layer89_Container"
					style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div class="container-fluid top-div" style="width: 1280px;height: 47px;">
				        <div class="navbar-header" style="margin-left:125px;"> 
				        	<a href="#" onclick="document.getElementById('Layer106').style.display='block';" class="navbar-brand" style="padding-top:12px;">
				        		<img src="<?php echo asset_url();?>images/img0235.png" style="width:29px;height:17px;margin-top: -2px;display: inline-block;" alt="" class="imgus">
				        		<span style="color:#A9A9A9;font-family:Arial;font-size:16px;vertical-align:middle;">TRD</span><span style="color:#D3D3D3;font-family:Impact;font-size:16px;vertical-align:middle;">STATION</span>
				        	</a> 
				        </div>
				        <ul class="nav navbar-nav pull-right top-nav login-user-nav" style="margin-right:70px;">
				            <li style="padding-top:15px;">
				                <span style="color:#FFFFFF;font-family:Georgia;font-size:13px;">
				                    <span style="color:#C0C0C0;font-family:Georgia;font-size:15px;">Good Luck |</span> <?php echo $tsprefix."  ".$tsusername; ?> 
				              	</span>
				           	</li>
				            <li class="dropdown dropdown-custom">
				            	<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-top:10px;padding-bottom:7px;">
				                    <?php if (empty($profile_img)) { ?>
				                        <img src="<?php echo asset_url(); ?>images/img0982.png" class="img-circle" style="width:30px; height:30px; margin-right:5px;">
				                    <?php } else { ?>
				                        <img src="<?php echo asset_url().$profile_img; ?>" class="img-circle" style="width:30px; height:30px; margin-right:5px;">
				                    <?php } ?>
				                    <img src="<?php echo asset_url(); ?>images/img0034.png" id="Shape8" alt="" style="width:14px;height:7px;">
				               	</a>
				                <ul class="dropdown-menu" role="menu" style="font-weight: bold; left: -25px;font-size: 12px;text-align: center;min-width: 100px;">
				                	<?php if($activstatus == 0) { ?>
				                   	<li class="firstmain"><a href="<?php echo base_url()?>continueregistration" target="_self">Continue</a> </li>
				                   	<?php } else { ?>
				                   	<li class="firstmain"><a href="<?php echo base_url()?>mystation" target="_self">My Station</a> </li>
				                    <?php } ?>
				                    <li><a href="<?php echo base_url(); ?>logout" target="_self" >Logout</a> </li>
				                </ul>
				            </li>
				        </ul>
				    </div>
				</div>
			</div>
			<div id="wb_Text175"
				style="position: absolute; left: 557px; top: 1424px; width: 166px; height: 19px; text-align: center; z-index: 319;">
				<span style="color: #4B4B4B; font-family: Arial; font-size: 17px;"><strong>Our
						Main Services</strong></span>
			</div>
			<div id="Layer130"
				style="position: absolute; text-align: left; left: 0px; top: 1475px; width: 1278px; height: 496px; z-index: 320;">
				<div id="wb_Text280"
					style="position: absolute; left: 449px; top: 348px; width: 380px; height: 75px; z-index: 229; text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">As
						a result of its solid partnership with leading carriers, MIDTRANS
						offers flexibility in sea freight shipments, providing a more
						efficient, reliable service and complete visibility throughout the
						supply chain for direct and indirect shipments. Regardless of the
						size of your business, our expert team will design the right
						solution...</span>
				</div>
				<div id="wb_Text176"
					style="position: absolute; left: 868px; top: 348px; width: 380px; height: 75px; z-index: 230; text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Road
						shipment is an essential transportation method within MIDTRANS’
						comprehensive supply chain.<br>We ensure reliable and efficient
						international and domestic transportation through our extended
						network, and Middle East Road network, utilizing top carriers, all
						directly managed and monitored ...
					</span>
				</div>
				<div id="wb_Text281"
					style="position: absolute; left: 42px; top: 348px; width: 380px; height: 75px; z-index: 231; text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Air
						Cargo has become increasingly important over the last years. As
						our customer you have the highest expectations regarding our
						service. Thus when selecting our airlines we employ exclusively
						reliable and qualified partners who can fulfill our and more
						importantly, your expectations to the fullest...</span>
				</div>
				<div id="wb_Shape31"
					style="position: absolute; left: 444px; top: 71px; width: 391px; height: 249px; z-index: 232;">
					<img src="<?php echo asset_url();?>images/img0727.png" id="Shape31" alt=""
						style="width: 391px; height: 249px;">
				</div>
				<div id="wb_Shape32"
					style="position: absolute; left: 35px; top: 71px; width: 392px; height: 250px; z-index: 233;">
					<img src="<?php echo asset_url();?>images/img0756.png" id="Shape32" alt=""
						style="width: 392px; height: 250px;">
				</div>
				<div id="wb_Text282"
					style="position: absolute; left: 42px; top: 437px; width: 67px; height: 15px; z-index: 234; text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><a
						href="./service_details.php" class="style16">Read More</a></span>
				</div>
				<div id="wb_Text286"
					style="position: absolute; left: 450px; top: 437px; width: 67px; height: 15px; z-index: 235; text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><a
						href="./service_details.php" class="style16">Read More</a></span>
				</div>
				<div id="wb_Text287"
					style="position: absolute; left: 869px; top: 437px; width: 67px; height: 15px; z-index: 236; text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><a
						href="./service_details.php" class="style16">Read More</a></span>
				</div>
				<div id="wb_Shape37"
					style="position: absolute; left: 854px; top: 70px; width: 392px; height: 250px; z-index: 237;">
					<img src="<?php echo asset_url();?>images/img0757.png" id="Shape37" alt=""
						style="width: 392px; height: 250px;">
				</div>
				<div id="wb_Text302"
					style="position: absolute; left: 143px; top: 34px; width: 166px; height: 19px; text-align: center; z-index: 238;">
					<span style="color: #1E90FF; font-family: Arial; font-size: 17px;"><strong>Air
							Freight</strong></span>
				</div>
				<div id="wb_Text308"
					style="position: absolute; left: 553px; top: 34px; width: 166px; height: 19px; text-align: center; z-index: 239;">
					<span style="color: #1E90FF; font-family: Arial; font-size: 17px;"><strong>Sea
							Freight</strong></span>
				</div>
				<div id="wb_Text318"
					style="position: absolute; left: 973px; top: 34px; width: 166px; height: 19px; text-align: center; z-index: 240;">
					<span style="color: #1E90FF; font-family: Arial; font-size: 17px;"><strong>Land
							Freight</strong></span>
				</div>
			</div>
			<div id="wb_Text343"
				style="position: absolute; left: 554px; top: 2014px; width: 166px; height: 19px; text-align: center; z-index: 321;">
				<span style="color: #4B4B4B; font-family: Arial; font-size: 17px;"><strong>Other
						Services</strong></span>
			</div>
			<div id="Layer220"
				style="position: absolute; text-align: right; left: 1000px; top:90px; width: 62px; height: 627px; z-index: 322;">
				<div id="Layer220_Container"
					style="width: 62px; position: relative; margin-left: auto; margin-right: 0; text-align: left;">
					<div id="wb_Image97"
						style="position: absolute; left: 7px; top: 25px; width: 50px; height: 50px; z-index: 247;">
						<a href="#"
							onclick="ShowObjectWithEffect('Layer222', 1, 'slideup', 500);return false;"><img
							src="<?php echo asset_url();?>images/deal_icon.png" id="Image97" alt=""></a>
					</div>
					<div id="wb_Image129"
						style="position: absolute; left: 38px; top: 12px; width: 20px; height: 20px; z-index: 248;">
						<a href="#"
							onclick="ShowObjectWithEffect('Layer220', 0, 'pulsate', 500);return false;"><img
							src="<?php echo asset_url();?>images/img0821.png" id="Image129" alt=""></a>
					</div>
					<div id="Layer222"
						style="position: absolute; text-align: right; visibility: hidden; left: 4px; top: 75px; width: 56px; height: 541px; z-index: 249;">
						<div id="Layer222_Container"
							style="width: 56px; position: relative; margin-left: auto; margin-right: 0; text-align: left;">
							<div id="wb_Image131"
								style="position: absolute; left: 18px; top: 178px; width: 20px; height: 20px; z-index: 241;">
								<a href="#"
									onclick="ShowObjectWithEffect('Layer222', 0, 'slideup', 500);return false;"><img
									src="<?php echo asset_url();?>images/img0822.png" id="Image131" alt=""></a>
							</div>
							<div id="RollOver34"
								style="position: absolute; left: 10px; top: 8px; overflow: hidden; width: 35px; height: 35px; z-index: 242">
								<a
									href="javascript:popupwnd('./chat_window.php','no','no','no','no','no','no','750','50','440','750')"
									target="_self"> <img class="hover" alt=""
									src="<?php echo asset_url();?>images/chat_button2.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/chat_button1.png"></span>
								</a>
							</div>
							<div id="RollOver35"
								style="position: absolute; left: 10px; top: 48px; overflow: hidden; width: 35px; height: 35px; z-index: 243">
								<a href=""> <img class="hover" alt=""
									src="<?php echo asset_url();?>images/addcommunity_button2.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/addcommunity_button1.png"></span>
								</a>
							</div>
							<div id="RollOver37"
								style="position: absolute; left: 10px; top: 132px; overflow: hidden; width: 35px; height: 35px; z-index: 244">
								<a href=""> <img class="hover" alt=""
									src="<?php echo asset_url();?>images/share_button.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/share_button1.png"></span>
								</a>
							</div>
							<div id="wb_Shape78"
								style="position: absolute; left: 8px; top: 132px; width: 39px; height: 39px; z-index: 245;">
								<a href="#"
									onclick="ShowObjectWithEffect('Layer223', 1, 'fade', 500);return false;"><img
									src="<?php echo asset_url();?>images/img0823.png" id="Shape78" alt=""
									style="width: 39px; height: 39px;"></a>
							</div>
							<div id="RollOver36"
								style="position: absolute; left: 10px; top: 90px; overflow: hidden; width: 35px; height: 35px; z-index: 246">
								<a
									href="javascript:popupwnd('./general_inquiry.php','no','no','no','no','no','no','200','50','1055','680')"
									target="_self"> <img class="hover" alt=""
									src="<?php echo asset_url();?>images/inquirytomato.png"> <span><img alt=""
										src="<?php echo asset_url();?>images/inquiryblack.png"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="Layer103"
				style="position: absolute; text-align: left; left: 0px; top: 964px; width: 1279px; height: 416px; z-index: 323;">
				<div id="wb_Text278"
					style="position: absolute; left: 31px; top: 34px; width: 166px; height: 19px; z-index: 295; text-align: left;">
					<span style="color: #4B4B4B; font-family: Arial; font-size: 17px;"><strong>Our
							History</strong></span>
				</div>
				<div id="wb_Text521"
					style="position: absolute; left: 31px; top: 64px; width: 539px; height: 345px; z-index: 296; text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">MIDTRANS
						Shipping &amp; Services began its activities in 1998. Over the
						years, the transportation and logistics industry has evolved into
						an environment lead by single-source providers. To meet market
						demands, MIDTRANS has successfully combined a comprehensive range
						of services including Air, Ocean, Land, Brokerage and Logistics in
						an integrated package to create dynamic and efficient supply
						chains.<br>
					<br>MIDTRANS is a Shipping and Freight Forwarding established by
						Khaldoun Khouli&nbsp; (1998) in Central heart of Syria (DAMASCUS)
						Shifted to the top business gateway for the Middle East and Africa
						in DUBAI 2008 till present.<br>
					<br>Mr. Khaldoun Khouli has always believed in the need to
						financially reward the employees of portfolio companies upon exit
						where they have helped to deliver value. This view struck a chord
						in the darkest days of the Syrian WAR - yet was also consistent
						with MIDTRANS’s spirit of responsible investment and
						accountability.<br>As single-source providers, we have implemented
						a flexible business model and have maintained a competitive
						advantage by providing our clients with consistent, worldwide,
						door-to-door delivery. Having acknowledged the need to drive
						profit through flexibility and performance, the company has
						realized outstanding success, prompting it to further expand its
						activities to new regional markets.<br>
					<br>At MIDTRANS Shipping &amp; Services, we are committed to
						achieving service excellence for our customers and our partners,
						helping them benefit from new technologies and best practices in
						the transportation industry.
					</span>
				</div>
				<div id="wb_Carousel4"
					style="position: absolute; left: 620px; top: 34px; width: 629px; height: 366px; z-index: 297; overflow: hidden;">
					<div id="Carousel4" style="position: absolute">
						<div class="frame">
							<div id="wb_Text314"
								style="position: absolute; left: 1046px; top: 33px; width: 166px; height: 18px; z-index: 274; text-align: left;">
								<span
									style="color: #1E90FF; font-family: Arial; font-size: 16px;">Sponge
									Yellow Sofa</span>
							</div>
							<div id="Layer152"
								style="position: absolute; text-align: left; left: 655px; top: 9px; width: 623px; height: 208px; z-index: 275;"
								onmouseenter="ShowObjectWithEffect('Layer153', 1, 'fade', 500);return false;"
								onmouseleave="ShowObjectWithEffect('Layer153', 0, 'fade', 500);return false;">
								<div id="wb_Text314"
									style="position: absolute; left: 390px; top: 23px; width: 166px; height: 18px; z-index: 253; text-align: left;">
									<span
										style="color: #1E90FF; font-family: Arial; font-size: 16px;">Sponge
										Yellow Sofa</span>
								</div>
								<div id="wb_Text315"
									style="position: absolute; left: 313px; top: 47px; width: 297px; height: 30px; text-align: center; z-index: 254;">
									<span
										style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Our
										men’s shoes department covers virtually every, men’s shoes
										department covers virtually every ...</span>
								</div>
								<div id="wb_Text316"
									style="position: absolute; left: 422px; top: 92px; width: 80px; height: 16px; text-align: center; z-index: 255;">
									<span
										style="background-color: #FFFFFF; color: #3C3C3C; font-family: Arial; font-size: 13px;">Price
									</span>
								</div>
								<div id="wb_Text317"
									style="position: absolute; left: 398px; top: 140px; width: 161px; height: 16px; z-index: 256; text-align: left;">
									<span
										style="background-color: #FFFFFF; color: #3C3C3C; font-family: Arial; font-size: 13px;">Min.
										Order: 1 Container&nbsp;&nbsp;&nbsp; </span>
								</div>
								<div id="wb_Text321"
									style="position: absolute; left: 373px; top: 110px; width: 176px; height: 27px; text-align: center; z-index: 257;">
									<span
										style="color: #A9A9A9; font-family: Arial; font-size: 13px;">USD</span><span
										style="color: #C0C0C0; font-family: Arial; font-size: 13px;">
									</span><span
										style="color: #3C3C3C; font-family: Arial; font-size: 24px;">150.00</span>
								</div>
								<div id="wb_Text340"
									style="position: absolute; left: 502px; top: 175px; width: 63px; height: 14px; z-index: 258; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Arial; font-size: 11px;">4.5
										of 5&nbsp;&nbsp; </span>
								</div>
								<div id="wb_Image82"
									style="position: absolute; left: 432px; top: 175px; width: 60px; height: 14px; z-index: 259;">
									<img src="<?php echo asset_url();?>images/rate.png" id="Image82" alt="">
								</div>
								<div id="wb_Text341"
									style="position: absolute; left: 397px; top: 175px; width: 63px; height: 15px; z-index: 260; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Rate&nbsp;&nbsp;
									</span>
								</div>
								<div id="Layer153"
									style="position: absolute; text-align: left; left: 182px; top: 2px; width: 440px; height: 200px; z-index: 261;">
									<div id="Layer154"
										style="position: absolute; text-align: left; left: 102px; top: 0px; width: 336px; height: 200px; z-index: 250;">
									</div>
									<div id="RollOver17"
										style="position: absolute; left: 244px; top: 68px; overflow: hidden; width: 60px; height: 60px; z-index: 251">
										<a href="./likes_blogs.php"> <img class="hover" alt=""
											src="<?php echo asset_url();?>images/view-detailsc.png"> <span><img alt=""
												src="<?php echo asset_url();?>images/view-detailsb.png"></span>
										</a>
									</div>
									<div id="wb_Text342"
										style="position: absolute; left: 247px; top: 132px; width: 80px; height: 16px; z-index: 252; text-align: left;">
										<span
											style="background-color: #FFFFFF; color: #3C3C3C; font-family: Arial; font-size: 13px;">DETAILS</span>
									</div>
								</div>
							</div>
							<div id="Layer133"
								style="position: absolute; text-align: left; left: 2px; top: 2px; width: 624px; height: 333px; z-index: 276;"
								onmouseenter="ShowObjectWithEffect('Layer149', 1, 'fade', 500);return false;"
								onmouseleave="ShowObjectWithEffect('Layer149', 0, 'fade', 500);return false;">
								<div id="Layer138"
									style="position: absolute; text-align: left; left: 0px; top: 0px; width: 371px; height: 333px; z-index: 267;">
									<div id="wb_MediaPlayer5"
										style="position: absolute; left: 13px; top: 11px; width: 343px; height: 199px; z-index: 262;">
										<video src="http://www.trdstation.com\orbitok.mp4"
											id="MediaPlayer5" controls="controls">
										</video>
									</div>
								</div>
								<div id="wb_Text284"
									style="position: absolute; left: 423px; top: 86px; width: 166px; height: 18px; z-index: 268; text-align: left;">
									<span
										style="color: #1E90FF; font-family: Arial; font-size: 16px;">We
										Carry And Care</span>
								</div>
								<div id="wb_Text285"
									style="position: absolute; left: 389px; top: 117px; width: 218px; height: 90px; text-align: center; z-index: 269;">
									<span
										style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Our
										men’s shoes department covers virtually every, men’s shoes
										department covers virtually every, Our men’s shoes department
										covers virtually every, men’s shoes department covers
										virtually every.</span>
								</div>
								<div id="wb_Text311"
									style="position: absolute; left: 515px; top: 218px; width: 63px; height: 14px; z-index: 270; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Arial; font-size: 11px;">500</span>
								</div>
								<div id="wb_Text312"
									style="position: absolute; left: 467px; top: 218px; width: 29px; height: 14px; z-index: 271; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Likes</span>
								</div>
								<div id="wb_Image69"
									style="position: absolute; left: 491px; top: 212px; width: 25px; height: 25px; z-index: 272;">
									<img src="<?php echo asset_url();?>images/items_like0.png" id="Image69" alt="">
								</div>
								<div id="Layer149"
									style="position: absolute; text-align: left; visibility: hidden; left: 119px; top: 264px; width: 285px; height: 66px; z-index: 273;">
									<div id="wb_Text313"
										style="position: absolute; left: 19px; top: 47px; width: 53px; height: 15px; z-index: 263; text-align: left;">
										<span
											style="color: #C0C0C0; font-family: Arial; font-size: 12px;">SHARE</span>
									</div>
									<div id="wb_Text336"
										style="position: absolute; left: 89px; top: 47px; width: 40px; height: 15px; z-index: 264; text-align: left;">
										<span
											style="color: #C0C0C0; font-family: Arial; font-size: 12px;">LIKE</span>
									</div>
									<div id="RollOver62"
										style="position: absolute; left: 83px; top: 2px; overflow: hidden; width: 40px; height: 40px; z-index: 265">
										<a
											href="javascript:popupwnd('./likes_blogs.php','no','no','no','no','no','no','750','50','380','750')"
											target="_self"> <img class="hover" alt=""
											src="<?php echo asset_url();?>images/video_likeb.png"> <span><img alt=""
												src="<?php echo asset_url();?>images/video_like.png"></span>
										</a>
									</div>
									<div id="wb_Image100"
										style="position: absolute; left: 19px; top: 2px; width: 40px; height: 40px; z-index: 266;">
										<a href="#"
											onclick="ShowObjectWithEffect('Layer223', 1, 'scale', 500);return false;"><img
											src="<?php echo asset_url();?>images/video_share.png" id="Image100" alt=""></a>
									</div>
								</div>
							</div>
						</div>
						<div class="frame">
							<div id="Layer131"
								style="position: absolute; text-align: left; left: 631px; top: 2px; width: 624px; height: 333px; z-index: 294;"
								onmouseenter="ShowObjectWithEffect('Layer140', 1, 'fade', 500);return false;"
								onmouseleave="ShowObjectWithEffect('Layer140', 0, 'fade', 500);return false;">
								<div id="Layer132"
									style="position: absolute; text-align: left; left: 0px; top: 0px; width: 371px; height: 333px; z-index: 286;">
									<div id="wb_MediaPlayer6"
										style="position: absolute; left: 13px; top: 11px; width: 343px; height: 199px; z-index: 277;">
										<video src="<?php echo asset_url();?>images/Cheese.mp4"
											id="MediaPlayer6" controls="controls">
										</video>
									</div>
								</div>
								<div id="wb_Text167"
									style="position: absolute; left: 423px; top: 86px; width: 166px; height: 18px; z-index: 287; text-align: left;">
									<span
										style="color: #1E90FF; font-family: Arial; font-size: 16px;">We
										Carry And Care</span>
								</div>
								<div id="wb_Text279"
									style="position: absolute; left: 389px; top: 117px; width: 218px; height: 90px; text-align: center; z-index: 288;">
									<span
										style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Our
										men’s shoes department covers virtually every, men’s shoes
										department covers virtually every, Our men’s shoes department
										covers virtually every, men’s shoes department covers
										virtually every.</span>
								</div>
								<div id="Layer135"
									style="position: absolute; text-align: left; visibility: hidden; left: 114px; top: 264px; width: 285px; height: 66px; z-index: 289;">
									<div id="RollOver14"
										style="position: absolute; left: 23px; top: 2px; overflow: hidden; width: 40px; height: 40px; z-index: 278">
										<a href="./item_details.php"> <img class="hover" alt=""
											src="<?php echo asset_url();?>images/share_button.png"> <span><img alt=""
												src="<?php echo asset_url();?>images/video_share.png"></span>
										</a>
									</div>
									<div id="wb_Text328"
										style="position: absolute; left: 19px; top: 47px; width: 53px; height: 15px; z-index: 279; text-align: left;">
										<span
											style="color: #C0C0C0; font-family: Arial; font-size: 12px;">SHARE</span>
									</div>
									<div id="wb_Text334"
										style="position: absolute; left: 89px; top: 47px; width: 40px; height: 15px; z-index: 280; text-align: left;">
										<span
											style="color: #C0C0C0; font-family: Arial; font-size: 12px;">LIKE</span>
									</div>
									<div id="RollOver18"
										style="position: absolute; left: 83px; top: 2px; overflow: hidden; width: 40px; height: 40px; z-index: 281">
										<a
											href="javascript:popupwnd('./likes_blogs.php','no','no','no','no','no','no','750','50','380','750')"
											target="_self"> <img class="hover" alt=""
											src="<?php echo asset_url();?>images/video_likeb.png"> <span><img alt=""
												src="<?php echo asset_url();?>images/video_like.png"></span>
										</a>
									</div>
								</div>
								<div id="wb_Text335"
									style="position: absolute; left: 515px; top: 218px; width: 63px; height: 14px; z-index: 290; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Arial; font-size: 11px;">500</span>
								</div>
								<div id="wb_Text344"
									style="position: absolute; left: 467px; top: 218px; width: 29px; height: 14px; z-index: 291; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Likes</span>
								</div>
								<div id="wb_Image99"
									style="position: absolute; left: 491px; top: 212px; width: 25px; height: 25px; z-index: 292;">
									<img src="<?php echo asset_url();?>images/items_like0.png" id="Image99" alt="">
								</div>
								<div id="Layer140"
									style="position: absolute; text-align: left; visibility: hidden; left: 115px; top: 263px; width: 285px; height: 66px; z-index: 293;">
									<div id="wb_Text347"
										style="position: absolute; left: 19px; top: 47px; width: 53px; height: 15px; z-index: 282; text-align: left;">
										<span
											style="color: #C0C0C0; font-family: Arial; font-size: 12px;">SHARE</span>
									</div>
									<div id="wb_Text348"
										style="position: absolute; left: 89px; top: 47px; width: 40px; height: 15px; z-index: 283; text-align: left;">
										<span
											style="color: #C0C0C0; font-family: Arial; font-size: 12px;">LIKE</span>
									</div>
									<div id="RollOver19"
										style="position: absolute; left: 83px; top: 2px; overflow: hidden; width: 40px; height: 40px; z-index: 284">
										<a
											href="javascript:popupwnd('./likes_blogs.php','no','no','no','no','no','no','750','50','380','750')"
											target="_self"> <img class="hover" alt=""
											src="<?php echo asset_url();?>images/video_likeb.png"> <span><img alt=""
												src="<?php echo asset_url();?>images/video_like.png"></span>
										</a>
									</div>
									<div id="wb_Image106"
										style="position: absolute; left: 19px; top: 2px; width: 40px; height: 40px; z-index: 285;">
										<a href="#"
											onclick="ShowObjectWithEffect('Layer223', 1, 'scale', 500);return false;"><img
											src="<?php echo asset_url();?>images/video_share.png" id="Image106" alt=""></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="Carousel4_back"
						style="position: absolute; left: 50px; top: 97%; width: 35px; height: 13px; z-index: 999">
						<a style="cursor: pointer"><img alt="Back" style="border-width: 0"
							src="<?php echo asset_url();?>images/previoustxt0blk.png"></a>
					</div>
					<div id="Carousel4_next"
						style="position: absolute; right: 42px; top: 97%; width: 35px; height: 13px; z-index: 999">
						<a style="cursor: pointer"><img alt="Next" style="border-width: 0"
							src="<?php echo asset_url();?>images/nexttxt0blk.png"></a>
					</div>
				</div>
			</div>
			<div id="wb_Image89"
				style="position: absolute; left: 1111px; top: 174px; width: 28px; height: 28px; z-index: 324;">
				<img src="<?php echo asset_url();?>images/community.png" id="Image89" alt="">
			</div>
			<div id="wb_Image22"
				style="position: absolute; left: 1145px; top: 175px; width: 26px; height: 26px; z-index: 325;">
				<img src="<?php echo asset_url();?>images/trusted.png" id="Image22" alt="">
			</div>


		</div>
	</div>
</body>
</html>
<script>
function openVideo(id) {
	$.get(base_url+"seller/video/view/"+id,{},function(data) {
		$("#Layer_details_Container").html(data);
		ShowObjectWithEffect('Layer_details', 1, 'scale', 500, 'swing');
	},'html');
}
function openProduct(id) {
	//alert('hello');
	$.get(base_url+"seller/product/view/"+id,{},function(data) {
		$("#Layer_details_Container2").html(data);
		ShowObjectWithEffect('Layer_details2', 1, 'scale', 500, 'swing');
	},'html');
}
function showBlackHorseMember() {
	$.get(base_url+"seller/blackhorse/memberlist",{},function(data) {
		$(".seller-list").html(data);
	},'html');
}

function showCommunityMember(id) {
	$.get(base_url+"seller/community/memberlist/"+id,{},function(data) {
		$(".seller-list").html(data);
	},'html');
}

function hideCommunityMember(id) {
	$.get(base_url+"seller/hidecommunity/memberlist/"+id,{},function(data) {
		$(".seller-list").html(data);
	},'html');
}

function productBySeller(id) {
	$.get(base_url+"seller/product/"+id,{},function(data) {
		$("#Layer_products_Container").html(data);
		  // Set the effect type
	    var effect = 'slide';

	    // Set the options for the effect type chosen
	    var options1 = { direction: 'right' };
	    var options2 = { direction: 'left' };

	    // Set the duration (default: 400 milliseconds)
	    var duration1 = 500;
	    var duration2 = 500;
	    $('#Layer_products').hide("slide", {direction: "left" }, 1000);
	    $('#products').show("slide", { direction: "right" }, 1000);
	    //$('#products').toggle(effect, options1, duration1);
	   // $('#Layer_products').toggle(effect, options2, duration2);
		
		/*ShowObjectWithEffect('Layer_details', 0, 'slideleft', 500, 'swing');
		ShowObjectWithEffect('Layer_products', 1, 'slideright', 500, 'swing');*/
	},'html');
}
function productDetail(id) {
	$.get(base_url+"product/detail/"+id,{},function(data) {
		$("#details_Container").html(data);
		ShowObjectWithEffect('Layer_products', 0, 'slideright', 500, 'swing');
		ShowObjectWithEffect('Layer_details', 1, 'slideleft', 500, 'swing');
	},'html');
}
function productListBySubCategory(id, busi_id) {
	$.get(base_url+"product/subcategory/"+id+"/"+busi_id,{},function(data) {
		$("#Layer_products_Container").html(data);
		ShowObjectWithEffect('Layer_details', 0, 'slideleft', 500, 'swing');
		ShowObjectWithEffect('Layer_products', 1, 'slideright', 500, 'swing');
	},'html');
}
function productListByMainProduct(id, busi_id) {
	$.get(base_url+"product/mainproduct/"+id+"/"+busi_id,{},function(data) {
		$("#Layer_products_Container").html(data);
		ShowObjectWithEffect('Layer_details', 0, 'slideleft', 500, 'swing');
		ShowObjectWithEffect('Layer_products', 1, 'slideright', 500, 'swing');
	},'html');
}
function productListBySubProduct(id, busi_id) {
	$.get(base_url+"product/subproduct/"+id+"/"+busi_id,{},function(data) {
		$("#Layer_products_Container").html(data);
		ShowObjectWithEffect('Layer_details', 0, 'slideleft', 500, 'swing');
		ShowObjectWithEffect('Layer_products', 1, 'slideright', 500, 'swing');
	},'html');
}

function showDesksite() {
	ShowObjectWithEffect('Layer5', 1, 'explode', 500, 'swing');
	ShowObjectWithEffect('Layer67', 0, 'pulsate', 500, 'swing');
	openWebsite();
}

function openWebsite() {
	window.location.href = "<?php echo base_url();?>shipper/profile/<?php echo $business[0]['busi_id'];?>";
}

</script>