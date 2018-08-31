<!-- <link href="cupertino/jquery.ui.all.css" rel="stylesheet">  -->
<link href="<?php echo asset_url();?>css/station.css" rel="stylesheet">
<!-- <link href="<?php echo asset_url();?>css/desk_details.css" rel="stylesheet">  -->
<script src="<?php echo asset_url(); ?>js/wb.carousel.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.mouse.min.js"></script> 
<!-- <script src="<?php echo asset_url(); ?>js/jquery.ui.draggable.min.js"></script> -->
<script
	src="<?php echo asset_url(); ?>js/fancybox/jquery.easing-1.3.pack.js"></script>
<link rel="stylesheet"
	href="<?php echo asset_url(); ?>css/fancybox/jquery.fancybox-1.3.0.css">
<script
	src="<?php echo asset_url(); ?>js/fancybox/jquery.fancybox-1.3.0.pack.js"></script>
<script
	src="<?php echo asset_url(); ?>js/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
<link rel="stylesheet" href="<?php echo asset_url(); ?>js/slimbox/css/slimbox2.css">
<script src="<?php echo asset_url(); ?>js/slimbox/js/slimbox2.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery-1.11.1.min.js"></script> 
 <script src="<?php echo asset_url(); ?>js/jquery.ui.effect.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fade.min.js"></script>
<script src="<?php echo asset_url(); ?>js/wb.slideshow.min.js"></script>
<script src="<?php echo asset_url(); ?>js/wb.stickylayer.min.js"></script>
<script src="<?php echo asset_url(); ?>js/wb.carousel.effects.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.core.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.widget.min.js"></script> 
<!-- <script src="<?php echo asset_url(); ?>js/jquery.ui.position.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.tooltip.min.js"></script> -->
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-blind.min.js"></script>
<script
	src="<?php echo asset_url(); ?>js/jquery.ui.effect-bounce.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-clip.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-drop.min.js"></script>
<script
	src="<?php echo asset_url(); ?>js/jquery.ui.effect-explode.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fold.min.js"></script>
<script
	src="<?php echo asset_url(); ?>js/jquery.ui.effect-highlight.min.js"></script>
<script
	src="<?php echo asset_url(); ?>js/jquery.ui.effect-pulsate.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-scale.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-shake.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-slide.min.js"></script> 
<!-- <script src="<?php echo asset_url(); ?>js/wwb10.min.js"></script>  -->

<!-- <script src="./searchindex.js"></script>  -->
 <script>
$(document).ready(function()
{
   $("#Layer273").stickylayer({orientation: 1, position: [0, 30], delay: 0});
   $("#Layer27").stickylayer({orientation: 1, position: [0, 0], delay: 0});
   $("#Layer28").stickylayer({orientation: 1, position: [0, 2], delay: 0});
   var jQueryToolTip7Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">This Seller Is Verified<br>View Seller Desksite And Click On The Same Logo For More Details.</span>',
      items: '#wb_Image32',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image32").tooltip(jQueryToolTip7Opts);
   var jQueryToolTip3Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Black Horse Member</span>',
      items: '#wb_Image30',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image30").tooltip(jQueryToolTip3Opts);
   var jQueryToolTip6Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">The Seller Is A Member In Your Community</span>',
      items: '#wb_Image39',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image39").tooltip(jQueryToolTip6Opts);
   var jQueryToolTip4Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Guarantee logo..<br>This seller provides a guarantee on his goods, subjected to certain terms, you can check it on each product in ( Product Details Page)..</span>',
      items: '#wb_Image40',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image40").tooltip(jQueryToolTip4Opts);
   $("#Layer106").stickylayer({orientation: 5, position: [0, 0], delay: 0});
   $("#Layer35").stickylayer({orientation: 1, position: [0, 30], delay: 0});
   $("#SlideShow1").slideshow(
   {
      interval: 8000,
      type: 'sequence',
      effect: 'fade',
      direction: '',
      pagination: false,
      fullscreen: 3,
      effectlength: 1000
   });
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
   var jQueryToolTip1Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Black Horse Member</span>',
      items: '#wb_Image61',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image61").tooltip(jQueryToolTip1Opts);
   var jQueryToolTip2Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Guarantee logo..<br>This seller provides a guarantee on his goods, subjected to certain terms, you can check it, on each product ( Along with Product Details Page)..<br>Furthermore, Click on &quot; Advantages&quot; icon to view more..</span>',
      items: '#wb_Image94',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image94").tooltip(jQueryToolTip2Opts);
   $("#Layer5").stickylayer({orientation: 4, position: [0, 25], delay: 0});
   searchParseURL();
   $("#Layer58").stickylayer({orientation: 1, position: [70, 50], delay: 0});
   $("a[data-rel='PhotoGallery7']").attr('rel', 'PhotoGallery7');
   $("a[rel^='PhotoGallery7']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery8']").attr('rel', 'PhotoGallery8');
   $("a[rel^='PhotoGallery8']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   var Carousel2Opts =
   {
      delay: 3000,
      duration: 500,
      easing: 'linear',
      mode: 'forward',
      direction: '',
      pagination: false,
      start: 0
   };
   $("#Carousel2").carousel(Carousel2Opts);
   $("#Carousel2_back a").click(function()
   {
      $('#Carousel2').carousel('prev');
   });
   $("#Carousel2_next a").click(function()
   {
      $('#Carousel2').carousel('next');
   });
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
   $("#Layer44").stickylayer({orientation: 4, position: [0, 0], delay: 0});
   $("#Layer116").stickylayer({orientation: 8, position: [0, 0], delay: 100});
   var jQueryToolTip5Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">This seller is a member in your community..</span>',
      items: '#wb_Image76',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image76").tooltip(jQueryToolTip5Opts);
   $("#Layer49").stickylayer({orientation: 4, position: [0, 60], delay: 0});
}); 
</script>
<!-- Insert Google Analystics code here -->
</head>
