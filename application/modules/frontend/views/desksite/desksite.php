<!-- css js -->
<link rel="stylesheet" href="<?php echo asset_url();?>css/jquery.ui.all.css">
<link rel="stylesheet" href="<?php echo asset_url();?>css/jquery.ui.all.css">
<?php if(isset($tsuserid)) { ?>
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url();?>chat/css.php" />
    <script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>chat/js.php"></script>
<?php } ?>
<script src="<?php echo asset_url(); ?>js/wb.stickylayer.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fade.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-slide.min.js"></script>
<script src="<?php echo asset_url(); ?>js/wb.slideshow.min.js"></script>
<script src="<?php echo asset_url(); ?>js/wb.carousel.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.core.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.widget.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.position.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.mouse.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.draggable.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-blind.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-bounce.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-clip.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-drop.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-explode.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fold.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-highlight.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-pulsate.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-scale.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-shake.min.js"></script>
<script src="<?php echo asset_url(); ?>js/fancybox/jquery.easing-1.3.pack.js"></script>
<link rel="stylesheet" href="<?php echo asset_url(); ?>css/fancybox/jquery.fancybox-1.3.0.css">
<script src="<?php echo asset_url(); ?>js/fancybox/jquery.fancybox-1.3.0.pack.js"></script>
<script src="<?php echo asset_url(); ?>js/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
<link rel="stylesheet" href="<?php echo asset_url(); ?>js/slimbox/css/slimbox2.css">
<script src="<?php echo asset_url(); ?>js/slimbox/js/slimbox2.js"></script>
<script src="<?php echo asset_url(); ?>js/wwb10.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.wiggle.js"></script>
<link href="<?php echo asset_url();?>css/jquery.booklet.1.1.0.css?1.1" rel="stylesheet">
<script src="<?php echo asset_url();?>js/jquery.booklet.1.1.0.min.js?1.1"></script>
<link rel="stylesheet" href="<?php echo asset_url();?>js/prettyPhoto/css/prettyPhoto.css">
<script src="<?php echo asset_url();?>js/prettyPhoto/js/jquery.prettyPhoto.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
    $("#Layer89").on("contextmenu",function(){
       return false;
    }); 
}); 
</script>

<style>
#Layer54 {
    background-color: #FA5C43;
}
.catalog_c_img {
	border: none;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    background-image: url('<?php echo asset_url();?>images/img2096.png');
    background-repeat: no-repeat;
    background-position: 50%;
}
.catalogue_modal_body {
	background-color:transparent;background-image:url('<?php echo asset_url();?>images/vcat_insider.png');background-size:cover;padding-top: 110px;
}
.catalogue_modal_body_bg {
	background-color:transparent;background-image:url('<?php echo asset_url();?>images/vcat_insider.png');background-repeat:no-repeat;background-size:cover;padding-top: 80px;background-size:initial;background-position:center;
}
.catalogue_page_item_name {
	color:#303030;font-family:Georgia;font-size:13px;padding-bottom:5px;padding-top:0px;
}
.catalogue_page_item_details {
	color:#787878;font-family:Arial;font-size:11px;padding-bottom:10px;min-height:55px;
}
.catalogue_page_item_quantity {
	color:#1E90FF;font-family:Arial;font-size:11px;padding-bottom:25px;
}
.catalogue_page_item_price_div {
	text-align: center;
	margin-bottom: -10px;
    z-index: 1;
}
.catalogue_page_item_price {
	background-color:#FF0000;color:#FFFFFF;font-family:Arial;font-size:17px;padding: 2px 10px;
}
.catalogue_page_item_mimg {
	width:303px;height:268px;padding-bottom:5px;
}
.catalogue_page_left_num {
	padding-top: 10px;
	background-color:#fff;
}
.catalogue_page_no_text {
	color:#D3D3D3;font-family:Arial;font-size:11px;
}
.catalogue_page_no_num {
	color:#FF6347;font-family:'Arial Black';font-size:16px;
}
.catalogue_page_item_mimg-sm {
	width:150px;height:115px;margin-top: 10px;
}
.catalogue_page_right_num {
	padding-top: 10px;
	background-color:#fff;
}
.catalogue_main_img {
	border: 1px solid #eee;
	width: 303px;
    height: 268px;
}
.catalogue_sub_img {
	border: 1px solid #eee;
	width: 150px;
    height: 115px;
}
.catalogue_modal_close {
	width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: #fff !important;
    font-size: 19px;
    opacity: 1;
}
li.share-button a{
	font-size:20px;
	color:#fa5c43;
	border :2px solid;
	margin-top: 20px;
	border-radius :50%;
	padding: 4px;
	width:25px;
	height :25px;
}
li.share-button a:hover{
	font-size:20px;
	color:#ffffff;
	border :2px solid;
	margin-top: 20px;
	border-radius :50%;
	padding: 4px;
	width:30px;
	height :30px;
}
ul.share{
	list-style-type: none;
	margin-top:  100%;
	line-height: 50px;
}
.navigation2 {
    display: table-cell;
    text-align: center;
    color: #FFFFFF;
    padding: 0px 0px;
}
a.style16
{
   color: #4169E1;
   text-decoration: underline;
}
a.style16:visited
{
   color: #4169E1;
   text-decoration: underline;
}
a.style16:active
{
   color: #4169E1;
   text-decoration: underline;
}
a.style16:hover
{
   color: #FF7F50;
   text-decoration: underline;
}
#RollOver5 a
{
   display: block;
   position: relative;
   height: 100%;
   width: 100%;
}
#RollOver5 a img
{
   position: absolute;
   z-index: 1;
   border-width: 0;
}
#RollOver5 span
{
   display: block;
   height: 100%;
   width: 100%;
   position: absolute;
   z-index: 2;
}
#RollOver5 a .hover
{
   visibility: hidden;
}
#RollOver5 a:hover .hover
{
   visibility: visible;
}
#RollOver5 a:hover span
{
   visibility: hidden;
}
#RollOver5 img
{
   border-width: 0;
   position: absolute;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
}
.form-group {
	margin-bottom:0px;
}
.help-block {
	margin-top:1px;
	margin-bottom:3px;
}
div.pp_overlay {
	z-index:12800 !important;
}
div.pp_pic_holder {
	z-index:12801 !important;
	/*overflow:scroll;*/
}
</style>

<style>
.inline{
line-height:4px;
}
</style>
<script src="<?php echo asset_url(); ?>js/jquery.ui.tooltip.min.js"></script>
<script>
$(document).ready(function() {
    $('.loader').removeClass('loader');
    document.getElementById('cometchat_chatboxes').style.right='0px';
    document.getElementById('cometchat_userstab_popup').style.display='none';
    document.getElementById('cometchat_userstab').style.display='none';

    var product_id = '<?php echo $product_id;?>';
    if(product_id != null && product_id != ""){
        productDetail(product_id);
    }
    $("#Layer27").stickylayer({
        orientation: 1,
        position: [0, 0],
        delay: 0
    });
    $("#Layer273").stickylayer({
        orientation: 1,
        position: [0, 30],
        delay: 0
    });
    $("#Layer35").stickylayer({
        orientation: 1,
        position: [0, 30],
        delay: 0
    });
    $("#SlideShow2").slideshow({
        interval: 4000,
        type: 'sequence',
        effect: 'slide',
        direction: 'right',
        pagination: false,
        easing: 'easeInOutSine',
        effectlength: 2000
    });
    $("a[data-rel='SlideShow3']").attr('rel', 'SlideShow3');
    $("a[rel^='SlideShow3']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    $("a[data-rel='PhotoGallery5']").attr('rel', 'PhotoGallery5');
    $("a[rel^='PhotoGallery5']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    $("a[data-rel='PhotoGallery6']").attr('rel', 'PhotoGallery6');
    $("a[rel^='PhotoGallery6']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    $("a[data-rel='PhotoGallery2']").attr('rel', 'PhotoGallery2');
    $("a[rel^='PhotoGallery2']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    $("a[data-rel='PhotoGallery3']").attr('rel', 'PhotoGallery3');
    $("a[rel^='PhotoGallery3']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    var Carousel5Opts = {
        delay: 6500,
        duration: 300,
        easing: 'linear',
        mode: 'forward',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#Carousel5").carousel(Carousel5Opts);
    $("#Carousel5_back a").click(function() {
        $('#Carousel5').carousel('prev');
    });
    $("#Carousel5_next a").click(function() {
        $('#Carousel5').carousel('next');
    });
    var Carousel7Opts = {
        delay: 50000,
        duration: 300,
        easing: 'linear',
        mode: 'forward',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#Carousel7").carousel(Carousel7Opts);
    $("#Carousel7_back a").click(function() {
        $('#Carousel7').carousel('prev');
    });
    $("#Carousel7_next a").click(function() {
        $('#Carousel7').carousel('next');
    });
    var Carousel6Opts = {
        delay: 15000,
        duration: 300,
        easing: 'linear',
        mode: 'forward',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#Carousel6").carousel(Carousel6Opts);
    $("#Carousel6_back a").click(function() {
        $('#Carousel6').carousel('prev');
    });
    $("#Carousel6_next a").click(function() {
        $('#Carousel6').carousel('next');
    });
    var Carousel4Opts = {
        delay: 10000,
        duration: 500,
        easing: 'linear',
        mode: 'forward',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#Carousel4").carousel(Carousel4Opts);
    $("#Carousel4_back a").click(function() {
        $('#Carousel4').carousel('prev');
    });
    $("#Carousel4_next a").click(function() {
        $('#Carousel4').carousel('next');
    });
    $("#Layer251").stickylayer({
        orientation: 2,
        position: [220, 90],
        delay: 500
    });
    /*var jQueryToolTip1Opts = {
        hide: true,
        show: true,
        content: '<p style="color:#696969;font-family:Arial;font-size:12px;">Verified logo is only ( strictly ) submitted to the Seller / Shipper who has been passed a strict verified check and audit procedures performed by leading inspection, verification, testing and certification third party companies, includes company licenses, product certificates and onsite check.<br>To check Sellers / Shipper\'s verification certificate, click on Seller\'s (About Tab) &gt; View Verification.<br></p>',
        items: '#wb_Image104',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#wb_Image104").tooltip(jQueryToolTip1Opts);
    var jQueryToolTip2Opts = {
        hide: true,
        show: true,
        content: '<p style="color:#696969;font-family:Arial;font-size:12px;">Guarantee logo..<br>This seller provides a guarantee on his goods, subjected to certain terms, you can check it on each product in ( Product Details Page)..</p>',
        items: '#wb_Image89',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#wb_Image89").tooltip(jQueryToolTip2Opts);*/
    $("#SlideShow1").slideshow({
        interval: 8000,
        type: 'sequence',
        effect: 'fade',
        direction: '',
        pagination: false,
        fullscreen: 3,
        effectlength: 1000
    });
    var Carousel3Opts = {
        delay: 3000,
        duration: 500,
        easing: 'linear',
        mode: 'forward',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#Carousel3").carousel(Carousel3Opts);
    $("#Carousel3_back a").click(function() {
        $('#Carousel3').carousel('prev');
    });
    $("#Carousel3_next a").click(function() {
        $('#Carousel3').carousel('next');
    });
    $("a[data-rel='PhotoGallery1']").attr('rel', 'PhotoGallery1');
    $("a[rel^='PhotoGallery1']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    var zindex = 250;
    $("#PhotoGallery1 a").draggable({
        start: function() {
            zindex = zindex + 1;
            $(this).css({
                zIndex: zindex
            });
        },
        stop: function() {
            rotation = Math.floor(Math.random() * 15);
            if (Math.floor(Math.random() * 11) > 5) {
                rotation = rotation * -1;
            }
            $(this).data('rotation', rotation);
            $(this).css({
                webkitTransform: "rotate(" + rotation + "deg)",
                MozTransform: "rotate(" + rotation + "deg)",
                msTransform: "rotate(" + rotation + "deg)",
                transform: "rotate(" + rotation + "deg)"
            });
        }
    });
    $("#Layer216").stickylayer({
        orientation: 1,
        position: [70, 60],
        delay: 0
    });
    $("a[data-rel='PhotoGallery4']").attr('rel', 'PhotoGallery4');
    $("a[rel^='PhotoGallery4']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    var zindex = 250;
    $("#PhotoGallery4 a").draggable({
        start: function() {
            zindex = zindex + 1;
            $(this).css({
                zIndex: zindex
            });
        },
        stop: function() {
            rotation = Math.floor(Math.random() * 15);
            if (Math.floor(Math.random() * 11) > 5) {
                rotation = rotation * -1;
            }
            $(this).data('rotation', rotation);
            $(this).css({
                webkitTransform: "rotate(" + rotation + "deg)",
                MozTransform: "rotate(" + rotation + "deg)",
                msTransform: "rotate(" + rotation + "deg)",
                transform: "rotate(" + rotation + "deg)"
            });
        }
    });
    var jQueryToolTip3Opts =
    {
       hide: true,
       show: true,
       content: 'Black Horse Member',
       items: '#wb_Image61',
       position: { my: "right bottom", at: "left top", collision: "flipfit" }
    };
    $("#wb_Image61").tooltip(jQueryToolTip3Opts);
    var jQueryToolTip4Opts =
    {
       hide: true,
       show: true,
       content: 'Guarantee logo.. This seller provides a guarantee on his goods, subjected to certain terms, you can check it, on each product ( Along with Product Details Page)..Furthermore, Click on &quot; Advantages&quot; icon to view more..',
       items: '#wb_Image94',
       position: { my: "right bottom", at: "left top", collision: "flipfit" }
    };
    $("#wb_Image94").tooltip(jQueryToolTip4Opts);
    
    /*$("#Layer5").stickylayer({
        orientation: 4,
        position: [0, 25],
        delay: 0
    });*/
    //searchParseURL();
    $("#Layer58").stickylayer({
        orientation: 1,
        position: [70, 50],
        delay: 0
    });
    $("a[data-rel='PhotoGallery7']").attr('rel', 'PhotoGallery7');
    $("a[rel^='PhotoGallery7']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    $("a[data-rel='PhotoGallery8']").attr('rel', 'PhotoGallery8');
    $("a[rel^='PhotoGallery8']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    var Carousel2Opts = {
        delay: 3000,
        duration: 500,
        easing: 'linear',
        mode: 'forward',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#Carousel2").carousel(Carousel2Opts);
    $("#Carousel2_back a").click(function() {
        $('#Carousel2').carousel('prev');
    });
    $("#Carousel2_next a").click(function() {
        $('#Carousel2').carousel('next');
    });
    var Carousel1Opts = {
        delay: 300000,
        duration: 500,
        easing: 'linear',
        mode: 'forward',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#Carousel1").carousel(Carousel1Opts);
    $("#Carousel1_back a").click(function() {
        $('#Carousel1').carousel('prev');
    });
    $("#Carousel1_next a").click(function() {
        $('#Carousel1').carousel('next');
    });
    var Carousel8Opts = {
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
    $("#Layer44").stickylayer({
        orientation: 4,
        position: ['', 0],
        delay: 0
    });
    $("#Layer116").stickylayer({
        orientation: 8,
        position: [0, 0],
        delay: 100
    });
    $("#Layer106").stickylayer({
        orientation: 5,
        position: [0, 0],
        delay: 0
    });
    <?php if(count($community) > 0){ ?>
    var jQueryToolTip5Opts = {
        hide: true,
        show: true,
        content: 'This seller is a member in your community..',
        items: '#wb_Image76',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#wb_Image76").tooltip(jQueryToolTip5Opts);
    <?php } ?>
    $("#Layer49").stickylayer({
        orientation: 4,
        position: [0, 60],
        delay: 0
    });
    $("#Layer28").stickylayer({
        orientation: 1,
        position: [0, 4],
        delay: 0
    });
    /*var jQueryToolTip6Opts = {
        hide: true,
        show: true,
        content: '<p style="color:#696969;font-family:Arial;font-size:12px;">The Seller Is A Member In Your Community</p>',
        items: '#wb_Image39',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#wb_Image39").tooltip(jQueryToolTip6Opts);
    var jQueryToolTip7Opts = {
        hide: true,
        show: true,
        content: '<p style="color:#696969;font-family:Arial;font-size:12px;">Black Horse Member</p>',
        items: '#wb_Image30',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#wb_Image30").tooltip(jQueryToolTip7Opts);
    var jQueryToolTip8Opts = {
        hide: true,
        show: true,
        content: '<p style="color:#696969;font-family:Arial;font-size:12px;">This Seller Is Verified<br>View Seller Desksite And Click On The Same Logo For More Details.</p>',
        items: '#wb_Image32',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#wb_Image32").tooltip(jQueryToolTip8Opts);
    var jQueryToolTip9Opts = {
        hide: true,
        show: true,
        content: '<p style="color:#696969;font-family:Arial;font-size:12px;">Guarantee logo..<br>This seller provides a guarantee on his goods, subjected to certain terms, you can check it on each product in ( Product Details Page)..</p>',
        items: '#wb_Image40',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#wb_Image40").tooltip(jQueryToolTip9Opts);*/
});
        function chat_with(user_id,accept_chat=true)
        {
            // alert(user_id);
            // alert(accept_chat);
            <?php if(isset($tsuserid)) { ?>
                if(accept_chat)
                {
                    jqcc.cometchat.chatWith(user_id);
                    document.getElementById('cometchat_chatboxes').style.right='0px';
                }else{
                    $("#msg_cont").html("Sorry.. User status is  Don't Disturb. Please try again later, status may be changed soon.");
                    // $("#msg_cont").html("This buyer in not allow chat feature..");
                    ShowObject('Layer99', 1);
                }
                
            <?php }else{ ?>
                $("#msg_cont").html("PLEASE LOGIN TO CHAT");
                ShowObject('Layer99', 1);
            <?php } ?>
        }
var interval = null;
function startWiggle(input) {
	$(input).wiggle();
}
function stopWiggle(input) {
	$(input).wiggle('stop');
	clearInterval(interval);
}
function myloaderon(text)
{
	if(jQuery('body').find('#resultLoading').attr('id') != 'resultLoading'){
	jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="<?php echo asset_url();?>images/loading.gif" alt="Loading..."><div>'+text+'</div></div><div class="bg"></div></div>');
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
		'color':'#000000'

	});

    jQuery('#resultLoading .bg').height('100%');
       jQuery('#resultLoading').fadeIn(300);
    jQuery('body').css('cursor', 'wait');
}
function myloaderoff()
{
    jQuery('#resultLoading .bg').height('100%');
       jQuery('#resultLoading').fadeOut(300);
    jQuery('body').css('cursor', 'default');
}
</script>


              <!-- xzoom plugin here -->
              <script type="text/javascript" src="<?php echo base_url(); ?>assets/fancy_box/xzoom.min.js"></script>
              <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fancy_box/xzoom.css" media="all" /> 
              <!-- hammer plugin here -->
              <script type="text/javascript" src="<?php echo base_url(); ?>assets/fancy_box/hammer.js/1.0.5/jquery.hammer.min.js"></script>  
              <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
              <link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url(); ?>assets/fancy_box/fancybox/source/jquery.fancybox.css" />
              <link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url(); ?>assets/fancy_box/magnific-popup/css/magnific-popup.css" />
              <script type="text/javascript" src="<?php echo base_url(); ?>assets/fancy_box/fancybox/source/jquery.fancybox.js"></script>
              <script type="text/javascript" src="<?php echo base_url(); ?>assets/fancy_box/magnific-popup/js/magnific-popup.js"></script>    
                <script src="<?php echo base_url(); ?>assets/fancy_box/foundation.min.js"></script>
                <script src="<?php echo base_url(); ?>assets/fancy_box/setup.js"></script>



        <!-- 
        <link type="text/css" rel="stylesheet" media="all" href="<?php //echo asset_url(); ?>magnific/magnifier.css" />
        <script src="<?php //echo asset_url(); ?>magnific/Magnifier.js"></script> -->

<?php //print_r($Desksites);die;?>
<div id="Layer89" style="overflow-x:hidden;text-align:center;visibility:visible;left:0;top:0;right:0;bottom:0;z-index:4930;">
		
		<div class="container-fluid top-div center" style="width:100%;position: absolute;z-index:3000;padding:0px;text-align:center;">
		    <a href="#" onclick="ShowObjectWithEffect('Layer106', 1, 'fold', 500, 'easeOutBounce');return false;" class="inline22">
		      <img src="<?php echo asset_url(); ?>images/img0235.png" id="Image25" alt="" class="desksite-maindropdown"><span class="font1">toolbox</span>
		    </a>
		</div>
		<?php include APPPATH.'modules/frontend/views/default/hover-nav.php';?>
		<?php foreach($Desksites as $Desksite) {?>
		<!-- navbar  end -->
			<!-- head text section -->
			<div class="c9" style="z-index:200;text-align:left;">
			    <span class="c10"><strong><?php echo $Desksite['company_name'];?></strong></span><br>
			    <p class="c11"><span class="white-bg-text"><?php echo substr($Desksite['hot_presentation'], 0, 400);?> <?php if(strlen($Desksite['company_introduction']) > 400){?>..<?php }?></span></p>
			</div>
			<!-- head text section -->
			<!-- user profile details -->
			<div class="c12">
			    <div id="wb_Image53" class="c13">
			        <?php if(!empty($Desksite['flag'])) { ?>
			        <img src="<?php echo asset_url(); ?>images/flags/<?php echo $Desksite['flag'];?>" id="Image53" alt="<?php echo $Desksite['company_country'];?>" style="width:28px;">
			        <?php } ?>
			   	</div>
			    <div id="wb_Text50" class="c3">
			        <p class="c1"><?php echo $Desksite['company_country']." | ".$Desksite['company_province']; ?></p>
			    </div>
			    <div id="wb_Text8" class="c2">
			        <p class="c1"><strong>
			        <?php 
			        	try {
                       		// $mars = new DateTimeZone($Desksite['timezone']);
                         //    $date = new DateTime('now', $mars);
                         //    echo $date->format('h:i A');

                           $now = new DateTime();
                           $now->setTimezone(new DateTimezone($Desksite['timezone']));
                           echo $now->format('h:i A');

                     	} catch(Exception $e) {
                         	echo date('h:i A');
                            // echo $Desksite['timezone'];
                       	}
			        ?></strong></p>
			    </div>
			</div>
			<!-- profile end -->
			<!-- Main Slider -->
			
            <div id="Layer46" style="text-align:left;left:0;top:0;right:0;bottom:0;z-index:33;">
                <?php if(!empty($Desksite['desksite_bg1'])) { ?>
                <div id="SlideShow1" >
                    <div class="image d1" style="width:100%;background-image:url(<?php echo asset_url().$Desksite['desksite_bg1']; ?>);background-size:cover;">&nbsp;</div>
                    <?php if(!empty($Desksite['desksite_bg2'])) { ?>
                    <div class="image d2" style="width:100%;height:100%;background-image:url(<?php echo asset_url().$Desksite['desksite_bg2']; ?>);background-size:cover;">&nbsp;</div>
                    <?php } ?>
                </div>
                <?php } else { ?>
                <div id="SlideShow1" >
                    <div class="image d1" style="width:100%;background-image:url('<?php echo asset_url(); ?>images/member-desksite.jpg');background-size:cover;">&nbsp;</div>
                    <div class="image d1" style="width:100%;height:100%;background-image:url('<?php echo asset_url(); ?>images/member-desksite.jpg');background-size:cover;">&nbsp;</div>
                </div>
                <?php } ?>
            </div>
		    <!-- slider ends -->
		    <!-- left navigation -->
		    <div id="Layer88" class="leftnav">
		        <div id="Layer116" class="left-fixed">
		            <div id="wb_Image61" class="text-center">
		            	<?php if($Desksite['plan_id'] > 1){?>
		            	<img src="<?php echo asset_url(); ?>images/black-horse.png" id="Image61" alt="Black Horse Member" class="black-horse-icon">
		              	<?php } else { ?>
		              	<img src="<?php echo asset_url(); ?>images/black-horse.png" id="Image61" alt="Black Horse Member" class="black-horse-icon img-disabled">
		              	<?php } ?>
	               	 </div>
		            <div id="wb_Image67"  class="text-center">
		                <a href="#" onclick="<?php if($Desksite['is_logo_verified'] > 1){?>ShowObjectWithEffect('Layer61', 1, 'slideleft', 500, 'swing');<?php } ?>return false;">
			                <?php if($Desksite['is_logo_verified'] > 1){?>
							<img src="<?php echo asset_url(); ?>images/trusted.png" id="Image67" alt=""  class="verified-icon">
							<?php } else { ?>
							<img src="<?php echo asset_url(); ?>images/trusted.png" id="Image67" alt=""  class="verified-icon img-disabled">
							<?php } ?>
						</a>
					</div>
					<div id="wb_Image94"  class="text-center">
		               <?php if($Desksite['gaurantee_period'] > 0){?>
		                <img src="<?php echo asset_url(); ?>images/guarantee.png" id="Image94" alt="" class="gaurantee-icon">
		                <?php } else { ?>
		                <img src="<?php echo asset_url(); ?>images/guarantee.png" id="Image94" alt="" class="gaurantee-icon img-disabled">
		                <?php } ?>
	                </div>
		            <div id="wb_Image76"  class="text-center">
		            	<?php if(count($community) > 0){ ?>
		                <img src="<?php echo asset_url(); ?>images/CommMember.png" id="Image76" alt="" class="community-member-icon">
		                <?php } else { ?>
		                <img src="<?php echo asset_url(); ?>images/CommMember.png" id="Image76" alt="" class="community-member-icon img-disabled">
		                <?php } ?>
		          	</div>
		        </div>
		    </div>
		    <!-- left navigation ends -->
		   
			<!-- bottom navigation -->
			<div class="container" style="margin:auto auto;">
				<div id="Layer5" class="bottomnav" style="height:105px;width:100%;margin:auto auto;">
					<div id=" Layer5_Container " style="width:1280px;margin:auto;padding-top:40px;">
					    <div class="row" style="margin-left:0px;">
					    	<?php if($Desksite['plan_id'] > 1) { ?>
					        <div class="col-md-2 col-sm-2 " style="width: 97px;">
					        	<br>
					            <a href="javascript:getProductCategory(<?php echo $Desksite['busi_id'];?>) " class="product " >Products
								</a>
					        </div>
					        <div class="col-md-8 col-sm-8 bg " style="margin-left: 15px;margin-right:15px;width:78%;">
					            <div class="col-sm-5" style="width:38%;">
						             <a href="javascript:getComapnyProfile(<?php echo $Desksite['busi_id']?>)" class="navigation2 ">
								     	<img src="<?php echo asset_url(); ?>images/desksite/D-About.png" id="Image60" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
						            	<p class="font2">Profile</p>
						            </a>
						            <a href="javascript:getComapnyAbout(<?php echo $Desksite['busi_id']?>)" class="navigation2" >
								    	<img src="<?php echo asset_url(); ?>images/desksite/D-company.png" id="Image5" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								    	<p class="font2">About Seller</p>
								    </a>
						            <a href="javascript:getComapnyCertificate(<?php echo $Desksite['busi_id']?>)" class="navigation2" >
								    	<img src="<?php echo asset_url(); ?>images/desksite/D-certificates.png" id="Image7" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								     	<p class="font2">Certificates</p>
								    </a>
						            <a href="javascript:getAdvantage(<?php echo $Desksite['busi_id']?>)" class="navigation2" >
								    	<img src="<?php echo asset_url(); ?>images/desksite/D-advantages.png" id="Image43" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								     	<p class="font2">Advantages</p>
								    </a>
						            <a href="javascript:getMyFiles(<?php echo $Desksite['busi_id'];?>)" class="navigation2" >
								    	<img src="<?php echo asset_url(); ?>images/desksite/D-files.png" id="Image8" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								    	<p class="font2">Files</p>
								    </a>
								</div>
								<div class="col-sm-5" style="width:38%;">
						            <a href="javascript:viewCatalogueBook(<?php echo $Desksite['busi_id']?>)" class="navigation2">
								   		<img src="<?php echo asset_url(); ?>images/desksite/D-vcat.png" id="Image10" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								   		<p class="font2">Virtual Catalogues</p>
								   	</a>
						            <a href="javascript:getProductVideo(<?php echo $Desksite['busi_id']?>);" class="navigation2" >
						                <img src="<?php echo asset_url(); ?>images/desksite/D-video.png" id="Image77" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
						                <p class="font2">Products in Videos</p>
						            </a>
						            <a href="javascript:get3DProduct(<?php echo $Desksite['busi_id']?>)" class="navigation2" >
								   		<img src="<?php echo asset_url(); ?>images/desksite/3D.png" id="Image80" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								    	<p class="font2">Products in 3D</p>
								   	</a>
						            <a href="#" class="navigation2" onclick="ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer72', 1, 'slidedown', 500, 'swing');return false;">
								   		<img src="<?php echo asset_url(); ?>images/desksite/UD.png" id="Image79" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								   		<p class="font2">UDtalks Images</p>
								   	</a>
						            <a href="javascript:getCurrentPost(<?php echo $Desksite['busi_id']?>)" class="navigation2" >
								   		<img src="<?php echo asset_url(); ?>images/desksite/D-posts.png" id="Image71" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								   		<p class="font2">Current Post</p>
								   	</a>
								</div>
								<div class="col-sm-2" style="width:24%;">
						            <!-- <a href="#" class="navigation2" onclick="ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer16', 1, 'slidedown', 500, 'swing');return false;">
								   		<img src="<?php echo asset_url(); ?>images/desksite/offices.png" id="Image75" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								   	   <p class="font5">World-wide  Offices</p>
								   	</a> -->
                                    <a href="#" class="navigation2" onclick="ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer16', 1, 'slidedown', 500, 'swing');return false;">
                                        <img src="<?php echo asset_url(); ?>images/desksite/offices.png" id="Image75" alt="" class="imgnav" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
                                        <p class="font5">World-wide  Offices</p>
                                    </a>

						           	<a href="javascript:getContactPerson(<?php echo $Desksite['busi_id'];?>);" class="navigation2" >
								   		<img src="<?php echo asset_url(); ?>images/desksite/contact-person.png" id="Image9" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								   		<p class="font2">Contact Person</p>
								   	</a>
						            <a href="#" class="navigation2" onclick="ShowObjectWithEffect('Layer49', 1, 'slideleft', 500, 'swing');ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer88', 0, 'slideleft', 500, 'swing');return false;">
								   		<img src="<?php echo asset_url(); ?>images/desksite/D-contact.png" id="Image9" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								   		<p class="font5">Contact, Add Share...</p>
								   	</a>
						        </div>
						    </div>
						    <div class="col-md-2 col-sm-2  bg121" style="width:11%;">
						        <a href="#" class="navigation2" onclick="ShowObjectWithEffect('Layer53S', 1, 'slideright', 500, 'swing');return false;">
								   	<img src="<?php echo asset_url(); ?>images/desksite/D-search.png" id="Image44" alt="" class="imgnav" style="width:45px;height:45px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								   	<p class="font2">Search</p>
								</a>
						        <a href="#" class="navigation2" style="display:none;">
								   	<img src="<?php echo asset_url(); ?>images/exit.png" id="Image47" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								  	<p class="font2" style="font-size:10px;width:81px;">Switch to <br> Classic Mode</p>
								</a>
						    </div>
						    <?php } else { ?>
						    <div class="col-md-2 col-sm-2">
						    
						    </div>
						    <div class="col-md-2 col-sm-2 " style="width: 97px;margin-left:40px;">
					        	<br>
					            <a href="javascript:getProductCategory(<?php echo $Desksite['busi_id'];?>) " class="product " >Products
								</a>
					        </div>
					        <div class="col-md-5 col-sm-5 bg " style="margin-left: 15px;margin-right:15px;width:550px;padding-left:25px !important;padding-right:25px !important;">
					           	<a href="javascript:getComapnyProfile(<?php echo $Desksite['busi_id']?>)" class="navigation2 ">
							     	<img src="<?php echo asset_url(); ?>images/desksite/D-About.png" id="Image60" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
					            	<p class="font2">Profile</p>
					            </a>
					            <a href="javascript:getComapnyAbout(<?php echo $Desksite['busi_id']?>)" class="navigation2" >
							    	<img src="<?php echo asset_url(); ?>images/desksite/D-company.png" id="Image5" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
							    	<p class="font2">About Seller</p>
							    </a>
					            <a href="javascript:getComapnyCertificate(<?php echo $Desksite['busi_id']?>)" class="navigation2" >
							    	<img src="<?php echo asset_url(); ?>images/desksite/D-certificates.png" id="Image7" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
							     	<p class="font2">Certificates</p>
							    </a>
					            <a href="#" class="navigation2" onclick="ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer72', 1, 'slidedown', 500, 'swing');return false;">
							   		<img src="<?php echo asset_url(); ?>images/desksite/UD.png" id="Image79" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
							   		<p class="font2">UDtalks Images</p>
							   	</a>
					            <a href="#" class="navigation2" onclick="ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer16', 1, 'slidedown', 500, 'swing');return false;">
							   		<img src="<?php echo asset_url(); ?>images/desksite/offices.png" id="Image75" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
							   	   <p class="font5">World-wide  Offices</p>
							   	</a>
					           	<a href="javascript:getContactPerson(<?php echo $Desksite['busi_id'];?>);" class="navigation2" >
							   		<img src="<?php echo asset_url(); ?>images/desksite/contact-person.png" id="Image9" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
							   		<p class="font2">Contact Person</p>
							   	</a>
					            <a href="#" class="navigation2" onclick="ShowObjectWithEffect('Layer49', 1, 'slideleft', 500, 'swing');ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer88', 0, 'slideleft', 500, 'swing');return false;">
							   		<img src="<?php echo asset_url(); ?>images/desksite/D-contact.png" id="Image9" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
							   		<p class="font5">Contact, Add Share...</p>
							   	</a>
						    </div>
						    <div class="col-md-1 col-sm-1  bg121">
						        <a href="#" class="navigation2" onclick="ShowObjectWithEffect('Layer53S', 1, 'slideright', 500, 'swing');return false;">
								   	<img src="<?php echo asset_url(); ?>images/desksite/D-search.png" id="Image44" alt="" class="imgnav" style="width:45px;height:45px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								   	<p class="font2">Search</p>
								</a>
						        <a href="javascript:showWebsite();" class="navigation2" style="display:none;">
								   	<img src="<?php echo asset_url(); ?>images/exit.png" id="Image47" alt="" class="imgnav" style="width:50px;height:54px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
								  	<p class="font2" style="font-size:10px;width:81px;">Switch to <br> Classic Mode</p>
								</a>
						    </div>
						    <div class="col-md-2 col-sm-2">
						    
						    </div>
						    <?php } ?>
						</div>
					</div>
				</div>
			</div>
			 <?php }?>
			<div class="container" style="width:1280px;padding:0px;">
			<!-- bottom navigation ends -->
			    <!-- verified member -->
				<div id="Layer61" class="box1 g1" onmouseleave="ShowObjectWithEffect('Layer43', 0, 'slidedown', 500);return false;">
			        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer61', 0, 'slidedown', 300, 'swing');return false;">
						<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre"></a>
			        <div>
			            <br>
			            <p class="box1font1">VERIFIED MEMBER</p>
			        </div>
			        <div class="box2">
			            <p class="box1font2"><strong>Verified Member</strong></p>
			            <img src="<?php echo asset_url(); ?>images/img0481.png" id="Shape14" alt="" style="width:120px;height:120px;">
			            <p class="boxfont2">Verified logo is only ( strictly ) submitted to the Seller / Shipper who has been passed a strict verified check and audit procedures ..
			            <br>
			            </p>
			            <p class="boxfont3">To check Sellers / Shipper's verification certificate, click on Certificates Icon or copy the ( Member Verification No. shown below ) and past it into the CHECK&nbsp; link.
			            </p>
			            <p class="b1"><strong>SGS Verification No. :</strong></p>
			            <p class="c14"><?php echo $Desksites[0]['verification_id'];?></p>
			            <p class="b2"><strong><a href="http://www.sgs.com/en/Our-Company/Certified-Clients-and-Products/Audited-supplier-verification.aspx" target="_blank" class="style5">Check</a></strong></span></strong></p>
			        </div>
				</div>
			    <!-- verified member end -->
			    <!-- product popup -->
				<div id="Layer44" style="position:absolute;text-align:left;visibility:hidden;top:174px;width:48%;height:609px;z-index:3865;" onmouseleave="ShowObjectWithEffect('Layer18', 0, 'slidedown', 500);return false;">
					<div id="Layer45">
				        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer44', 0, 'slidedown', 300, 'swing');ShowObjectWithEffect('Layer88', 1, 'slideleft', 500, 'swing');return false;">
						<img src="<?php echo asset_url(); ?>images/newicons/closeround.png" id="Image135" alt="" class="imgre"></a>
				        <div style=" width: 240px;">
				            <br>
				            <p class="box1font1" style="padding-left:5px;"><img src="<?php echo asset_url(); ?>images/newicons/MENUICON.png" alt="" class="img32" style="width:24px !important;height:24px !important;"> PRODUCT CATEGORY</p>
				            <div id="wb_desktop_menu">
				                <br>
				            </div>
				        </div>
				    </div>
				</div>
			<!-- product popup ends -->
				
			<!--about us-->
			<div id="Layer23" style="position:absolute;text-align:center;visibility:hidden;left:0;right:0;margin:0 auto;top:34px;width:45%;height:670px;z-index:3864;">
				<div id="Layer23_Container" style="width:584px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
					<div id="Layer42" class="a4" >
				        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer23', 0, 'slidedown', 300, 'swing');return false;">
							<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
						</a>
				        <p class="box1font3" style="padding-left:0px;"><img src="<?php echo asset_url(); ?>images/desksite/D-company.png" alt="" class="img32"> &nbsp;&nbsp;&nbsp;ABOUT SELLER</p>
				        <div class="box2" id="about-us" style="height: 540px;overflow-y:scroll;padding-top:0px;">
				            
				        </div>
				    </div>
				</div>
			</div>
			
			<!-- about us end -->
			<!-- certification -->
			<div id="Layer144" style="position:absolute;text-align:center;visibility:hidden;left:0;right:0;margin:0 auto;top:126px;width:61%;height:554px;z-index:3853;">
				<div id="Layer144_Container" style="width:788px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
					<div id="Layer145" class="a4">
				        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer144', 0, 'slidedown', 300, 'swing');return false;">
							<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
						</a>
				        <p class="box1font3" style="padding: 5px 0px;"><img src="<?php echo asset_url(); ?>images/desksite/D-certificates.png" alt="" class="img32"> &nbsp;&nbsp;&nbsp;COMPANY LICENSE AND CERTIFICATES</p>
			       		<div id="Layer147">  </div>
				    </div>
			    </div>
			</div>
			<!-- certification ends -->
			
			<!-- company profile -->

			<!-- <div id="Layer48" class="box1" style="left: 0;right: 0;margin: 0 auto;top:3%;width:316px;padding:15px;">
			    <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer48', 0, 'slidedown', 300, 'swing');return false;">
				 	<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre">
				 </a>
			    <p class="box1font3" style="padding-left:0px;"><img src="<?php echo asset_url(); ?>images/desksite/D-About.png" alt="" class="img32"> &nbsp;&nbsp;&nbsp;COMPANY PROFILE</p>
			    <div>
			        <div class="box2" id="company-profile" style="height: 642px;padding:15px;">
					</div>
				</div>
			</div> -->


            <div id="Layer48" style="position:absolute;text-align:center;visibility:hidden;left:0;right:0;margin:0 auto;top:34px;width:45%;height:670px;z-index:3864;">
                <div id="Layer23_Container" style="width:584px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
                    <div id="Layer42" class="a4" >
                        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer48', 0, 'slidedown', 300, 'swing');return false;">
                            <img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
                        </a>
                        <p class="box1font3" style="padding-left:0px;"><img src="<?php echo asset_url(); ?>images/desksite/D-About.png" alt="" class="img32"> &nbsp;&nbsp;&nbsp;COMPANY PROFILE</p>
                        <div class="box2" id="company-profile" style="height: 540px;overflow-y:scroll;padding-top:0px;">
                            
                        </div>
                    </div>
                </div>
            </div> 

			<!-- company profile -->
			
			
			<!-- advantages -->
			<div id="Layer79" style="position:absolute;text-align:center;visibility:hidden;left:0;right:0;margin:0 auto;top:65px;width:37%;height:601px;z-index:3855;" onmouseleave="ShowObjectWithEffect('Layer43', 0, 'slidedown', 500);return false;">
				<div id="Layer79_Container" style="width:483px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
					<div id="Layer80" class="a3">
				        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer79', 0, 'slidedown', 300, 'swing');return false;">
							<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre">
						</a>
				        <p class="box1font3" style="padding:5px 0px;"><img src="<?php echo asset_url(); ?>images/desksite/D-advantages.png" alt="" class="img32"> &nbsp;&nbsp;ADVANTAGES</p>
				        <div class="box802 blackbox" id="advantage"></div>
				    </div>
			    </div>
			</div>
			<!-- advantages ends-->
			<!-- my files -->
			<div id="Layer148" style="position:absolute;text-align:center;visibility:hidden;left:0;right:0;margin:0 auto;top:100px;width:53%;height:462px;z-index:3850;">
				<div id="Layer148_Container" style="width:432px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
					<div id="Layer150" style="width:517px;height:402px;">
				        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer148', 0, 'slidedown', 300, 'swing');return false;">
							<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
						</a>
				        <p class="box1font3" style="padding:5px 0px;"><img src="<?php echo asset_url(); ?>images/desksite/D-files.png" alt="" class="img32"> &nbsp;&nbsp;&nbsp;MY FILES</p>
				        <div class="box22 blackbox" id="my-files" style="height:325px;">
				           
				        </div>
				    </div>
			    </div>
			</div>
			<!-- my files end -->
			<!-- Add to catalogue -->
			<div id="Layer_catalogue" class="catalogue1">
			    <div id="Layer_catalogue_Container" class="catalogue2">
			    </div>
			</div>
			<!-- add to catalogue end -->																																											
			<!-- search section -->
			<div id="Layer53S" style="position:absolute;text-align:left;visibility:hidden;left:450px;top:260px;width:498px;height:128px;z-index:3860;background-color: transparent;">
				<div id="Layer55">
				</div>
					<a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer53S', 0, 'slidedown', 300, 'swing');return false;">
						<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left: 445px;z-index: 4000;">
					</a>
					<div style="padding:35px;position: absolute;width: 100%;z-index: 4000;opacity:1;">
						<form method="post" action="">
						    <div class="col-sm-10 col-xs-11" style="padding: 0px;">
						        <input type="text" id="SiteSearch1" name="keyword" value="" placeholder="Type the item or product name">
						        <input type="hidden" id="busi_id" name="busi_id" value="<?php echo $Desksites[0]['busi_id']?>" >
						    </div>
						    <div class="col-sm-1 col-xs-1" style="padding: 0px;">
						        <button class="btn btn-block search-btn" type="button" onclick="searchProducts();">
						            <p aria-hidden="true" class="glyphicon glyphicon-search"></p>
						        </button>
						    </div>
					    </form>
				    </div>
			</div>
			<!-- search section ends -->
			<!-- contact and add -->
			<div id="Layer49" style="position:absolute;text-align:left;visibility:hidden;left:0px;top:112px;width:25%;height:547px;z-index:3869;">
				<div id="Layer52">
				    <a href="#" onclick="ShowObjectWithEffect('Layer49', 0, 'slideleft', 300, 'swing');ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer88', 1, 'slideleft', 1000, 'swing');return false;">
				   		<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image59" alt=""  class="img59">
					</a>
				    <div class="inline">
				        <br>
				        <p class="box1font1 w1" style="margin-bottom:2px;"><img src="<?php echo asset_url(); ?>images/desksite/D-contact.png" alt="Add & Share" class="add-share-img"> ADD & SHARE</p>
				    </div>
				    <div class="inline box5">
				        <img src="<?php echo asset_url(); ?>images/MENUFAVORITE.png" alt="Add To Favourite" class="add-share-img">
				        <a href="javascript:addToMyFavourite(<?php echo $Desksites[0]['busi_id'];?>,1);" target="_self" class="antag">
							Add To Favorite
						</a>
				    </div>
				    <div class="inline box5">
				        <img src="<?php echo asset_url(); ?>images/menuaddcomm.png" alt="Add to community" class="add-share-img">
				        <a href="javascript:addToCommunity(<?php echo $Desksites[0]['busi_id']?>);" target="_self" class="antag">
				        	Add To Community
						</a>
				    </div>
                    
				    <div class="inline box5">
				        <img src="<?php echo asset_url(); ?>images/cha0t.png" alt="Chat" class="add-share-img">
				        <a onclick="chat_with(<?php echo $Desksites[0]['user_id']?>,<?php echo $Desksites[0]['accept_chat']?>)" class="antag">
				        	Chat
						</a>
				    </div>
				    <div class="inline box5">
				        <img src="<?php echo asset_url(); ?>images/like.png" alt="Like & Comments" class="add-share-img">
				        <a href="javascript:likeMyDesksite(<?php echo $Desksites[0]['busi_id']?>);" target="_self" class="antag">
				        	Like
						</a>
				    </div>
				    <div class="inline box5">
				        <img src="<?php echo asset_url(); ?>images/img0908.png" alt="Share" class="add-share-img">
				        <a href="javascript:shareToWorld('<?php echo base_url();?>desksite/<?php echo $Desksites[0]['busi_id']?>','<?php echo $Desksites[0]['company_name']?> @ TRDSTATION',1,<?php echo $Desksites[0]['busi_id']?>);" target="_self" class="antag">
				        	Share
						</a>
				    </div>
				    <div class="inline box5">
				        <img src="<?php echo asset_url(); ?>images/buyer-request.png" alt="General Inquiry" class="add-share-img">
				        <a href="javascript:openGeneralEnquiry(<?php echo $Desksites[0]['busi_id']?>);" target="_self" class="antag">
				        	General Inquiry
						</a>
				    </div>
				    <div class="inline box5">
				        <img src="<?php echo asset_url(); ?>images/Mail.ico" alt="Contact Us" class="add-share-img">
				        <a href="#" onclick="ShowObjectWithEffect('Layer216', 1, 'slideleft', 500, 'swing');return false;" target="_self" class="antag">
				        	Contact Seller
						</a>
				    </div>
				</div>
			</div>
			<!-- contact add ends -->
			<!-- contact us form -->
			<div id="Layer216" style="position:absolute;text-align:right;visibility:hidden;left:224px;top:18px;width:55%;height:627px;z-index:3851;">
				<div id="Layer216_Container" style="width:607px;position:relative;margin-left:auto;margin-right:0;text-align:left;">
					<div id="Layer217" class="a1" style="height:534px;">
				        <a href="#" onclick="ShowObjectWithEffect('Layer216', 0, 'slideleft', 300, 'swing');return false;">
							<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
						</a>
				        <p class="box1font3" style="padding:0px;">
				        	<img src="<?php echo asset_url(); ?>images/Mail.ico" alt="" class="img32">
				        	<span style="color:#FFFFFF;font-family:Georgia;font-size:13px;"><strong>CONTACT US</strong></span>
				        </p>
				        <div class="box2" style="height:472px;">
				            <form action="" name="contactusfrm" id="contactusfrm" method="post">
				        		<input type="hidden" name="busi_id" value="<?php echo $Desksites[0]['busi_id']?>"/>
				        		<div class="form-group">
				        			<div>
				        				<input type="text" class="input" name="name" value="" placeholder="Name" required="">
				        			</div>
				        			<div class="messageContainer"></div>
				        		</div>
					            <div class="form-group">
				        			<div>
					            		<input type="text" class="input" name="mobile" value="" placeholder="Phone" required="">
					            	</div>
					            	<div class="messageContainer"></div>
					            </div>
					            <div class="form-group">
				        			<div>
					            		<input type="email" class="input" name="email" value="" placeholder="Email" required="">
					            	</div>
					            	<div class="messageContainer"></div>
					            </div>
					            <div class="form-group">
				        			<div>
							            <select name="country" size="1" id="Combobox1" class="input">
							            	<?php foreach ($countries as $country) { ?>
							                <option value="<?php echo $country['name'];?>"><?php echo $country['name'];?></option>
							                <?php } ?>
							            </select>
							       	</div>
							       	<div class="messageContainer"></div>
							   	</div>
							   	<div class="form-group">
				        			<div>
					            		<input type="text" class="input" name="city" value="" placeholder="City" required="">
					            	</div>
					            	<div class="messageContainer"></div>
					            </div>
					            <div class="form-group">
				        			<div>
					            		<textarea name="message" id="TextArea2" rows="7" cols="38" maxlength="2000" style="width:99%;" placeholder="Message" required=""></textarea>
					            	</div>
					            	<div class="messageContainer"></div>
					            </div>
					            <div style="width:99%;">
					                <input type="submit" id="Button5" name="Send" value="Send" style="margin-left:5px;">
					                <input type="button" id="Button5" name="Reset" value="Reset" onclick="resetForm();">
					            </div>
				            </form>
				        </div>
				    </div>
				</div>
			</div>
			<!-- contact us form end -->
				<!-- contact person -->
				<div id="Layer62" style="position:absolute;text-align:right;visibility:hidden;left:0;right:0;margin:0 auto;top:166px;width:51%;height:447px;z-index:3854;">
					<div id="Layer62_Container" style="width:656px;position:relative;margin-left:auto;margin-right:0;text-align:left;">
						<div id="Layer63" class="a1">
					        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer62', 0, 'slidedown', 300, 'swing');return false;">
								<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
							</a>
					        <div class="box222 row" id="contact-person" style="margin:0px;">
					            
					        </div>
					    </div>
					</div>
				</div>
				<!-- contact person end -->
			<!-- world wide offices -->
			<div id="Layer16" style="position:absolute;text-align:right;visibility:hidden;left:0;right:0;margin:0 auto;top:140px;width:51%;height:411px;z-index:3863;">
                <div id="Layer16_Container" style="width:656px;text-align:left;">
                    <div id="Layer15" class="s9" style="height:285px;">
                        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slidedown', 500);ShowObjectWithEffect('Layer16', 0, 'slidedown', 300, 'swing');return false;">
                            <img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
                        </a>
                        <div class="box2 row" id="address" style="height: 235px;margin:0px;">
                            <div id="wb_Carousel1" style="position:absolute;left:15px;top:15px;width:422px;height:235px;z-index:3781;overflow:hidden;">
                                <div id="Carousel1" style="position:absolute">
                                    <div class="frame active">
                                        <div class="col-md-2">
                                            <br><br>
                                            <?php if(!empty($Desksites[0]['flag'])) { ?>
                                            <img src="<?php echo asset_url(); ?>images/flags/<?php echo $Desksites[0]['flag'];?>" id="Shape12" alt="" style="width:58px;">
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-10 left" style="padding-left:35px;">
                                            <br><br>
                                            <p   class="s13"><strong><?php echo $Desksites[0]['company_name'];?></strong></p>
                                            <p   class="s15"><?php echo $Desksites[0]['company_street'];?>, <?php echo $Desksites[0]['company_city'];?>, <?php echo $Desksites[0]['company_province'];?>, <?php echo $Desksites[0]['company_country'];?>.</p>
                                            <p   class="s13">+<?php echo $Desksites[0]['telephone_code'];?> <?php echo $Desksites[0]['telephone_city_code'];?> <?php echo $Desksites[0]['telephone_number'];?></p>
                                            <br>
                                            <p class="s12"><strong><?php echo $Desksites[0]['company_email'];?></strong></p>
                                        </div>
                                    </div>
                                    <?php foreach ($branches as $branch) { ?>
                                    <div class="frame">
                                        <div class="col-md-2"><br><br>
                                            <?php if(!empty($branch['flag'])) { ?>
                                            <img src="<?php echo asset_url(); ?>images/flags/<?php echo $branch['flag'];?>" id="Shape12" alt="" style="width:58px;">
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-10 left" style="padding-left:35px;">
                                            <br><br>
                                            <p   class="s13"><strong><?php echo $branch['country'];?> Branch</strong></p>
                                            <p   class="s15"><?php echo $branch['street'];?>, <?php echo $branch['city'];?>, <?php echo $branch['province'];?>, <?php echo $branch['country'];?>.</p>
                                            <p   class="s13">+<?php echo $branch['country_code'];?> <?php echo $branch['city_code'];?> <?php echo $branch['telephone1'];?></p>
                                            <br>
                                            <p class="s12"><strong><?php echo $branch['fax'];?></strong></p>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="Carousel1_back" class="s10">
                                <a href="#"><img alt="Back" src="<?php echo asset_url(); ?>images/previoustxt0.png"></a>
                             </div>
                            <div id="Carousel1_next" class="s11">
                                <a href="#"><img alt="Next" src="<?php echo asset_url(); ?>images/nexttxt0.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<!-- world wide end -->
			<!--  current post -->
			<div id="Layer58" style="position:absolute;text-align:right;visibility:hidden;left:0;right:0;margin:0 auto;top:2px;width:69%;height:702px;z-index:3861;">
				<div id="Layer58_Container" style="width:890px;position:relative;margin-left:auto;margin-right:0;text-align:left;">
					<div id="Layer8" class="s5">
					   	<a href="# " onclick="ShowObjectWithEffect( 'Layer5', 1, 'slidedown', 500);ShowObjectWithEffect( 'Layer58', 0, 'slidedown', 300, 'swing');return false; ">
							<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
					    </a>
					    <p class="box1font3" style="padding:0px;">
				        	<img src="<?php echo asset_url(); ?>images/desksite/D-posts.png" alt="" class="img32">
				        	<span style="color:#FFFFFF;font-family:Georgia;font-size:13px;"><strong> &nbsp;&nbsp;&nbsp;POSTS & CURRENT REQUESTS</strong></span>
				        </p>
					    <div class="greybox center" id="post" style="height:570px;">
					        
					    </div>
					    <div id="wb_CssMenu2">
							<ul>
								<li class="firstmain"><a class="withsubmenu" href="#" target="_self">Translate</a>
									<ul>
										<li class="firstitem"><a href="#" target="_self">To&nbsp;my&nbsp;langauge</a>
										</li>
										<li class="lastitem"><a href="#" target="_self">To&nbsp;english</a>
										</li>
									</ul>
								</li>
							</ul>
							<br>
						</div>
					</div>
				</div>
			</div>
			<!--  current post end-->
				<!-- UDtalk images -->
				<div id="Layer72" style="position:absolute;text-align:center;visibility:hidden;left:0;right:0;margin:0 auto;top:64px;width:66%;height:616px;z-index:3848;">
					<div id="Layer72_Container" style="width:850px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
						<div id="Layer73" class="c19">
						   	<a href="# " onclick="ShowObjectWithEffect( 'Layer5', 1, 'slidedown', 500);ShowObjectWithEffect( 'Layer72', 0, 'slidedown', 300, 'swing');return false; ">
								<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left: 96%;">
						   	</a>
						    <p class="box1font3" style="padding-left:0px;"><img src="<?php echo asset_url(); ?>images/desksite/UD.png" alt="" class="img32"> &nbsp;&nbsp;&nbsp;AMAZING BUSINESS COMMUNICATION APP</p>
						    <div class="box732" id="ud-talk" style="height:495px;background-color: #DCDCDC;border: 1px #FFFFFF solid;padding:10px;overflow-x:hidden;overflow-y: scroll;">
						    	<br>
							   	<div id="wb_Text93" style="text-align:center;">
									<span style="color:#3C3C3C;font-family:Arial;font-size:11px;">Discover more ( View products, Catalouge or Watch videos), contact with this member through an amazing way, add him to your mobile contacts, chat with him on you phone, make an Instant call, send SMS, Email, get your own business platform and much more..</span>
								</div>
								<div id="wb_Text110" style="text-align:center;padding-top:5px;">
									<span style="color:#1E90FF;font-family:Arial;font-size:12px;"><strong>Download UDtalks ( business chat app ) on your mobile for free</strong></span>
								</div>
								<div id="wb_Text108" style="text-align:center;padding-top:5px;">
									<span style="color:#3C3C3C;font-family:Arial;font-size:13px;"><a href="http://www.udtalks.com" target="_blank" class="style16">www.udtalks.com</a></span>
								</div>
								<div id="wb_Text98" style="text-align:center;padding-top:10px;">
									<span style="color:#3C3C3C;font-family:Arial;font-size:11px;">Click the image to enlarge, open UDtalks and scan</span>
								</div>
								<div id="wb_PhotoGallery1" style="overflow-x:hidden;">
									<table id="PhotoGallery1">
									   	<tbody>
									   		<?php for ($i=0; $i < count($images); ) { ?>
									   		<tr>
									      		<td class="image"><a href="<?php echo asset_url();?><?php echo $images[$i]['image'];?>" data-rel="prettyPhoto_SlideShow31[SlideShow31]" rel="prettyPhoto_SlideShow31[SlideShow31]" title="UDTalk" class="img<?php echo $i;?> ui-draggable" style="position: relative;"><img alt="UD Talk" id="PhotoGallery1_img<?php echo $i;?>" src="<?php echo asset_url();?><?php echo $images[$i]['image'];?>" title="UD Talk" style="width:220px;"></a></td>
									      		<td class="image"><?php if(!empty($images[$i+1]['image'])) { ?><a href="<?php echo asset_url();?><?php echo $images[$i+1]['image'];?>" data-rel="prettyPhoto_SlideShow31[SlideShow31]" rel="prettyPhoto_SlideShow31[SlideShow31]" title="UDTalk" class="img<?php echo ($i+1);?> ui-draggable" style="position: relative;"><img alt="UD Talk" id="PhotoGallery1_img<?php echo ($i+1);?>" src="<?php echo asset_url();?><?php echo $images[$i+1]['image'];?>" title="UD Talk" style="width:220px;"></a><?php } ?></td>
									   		</tr>
									   		<?php $i = $i + 2;} ?>
										</tbody>
									</table>
								</div>
						    </div>
						 </div>
					</div>
				</div>
				<!-- UDtalk images end -->
				<!-- Videos section -->
				<div id="Layer65" style="position:absolute;text-align:center;visibility:hidden;left:0;right:0;margin:0 auto;top:73px;width:50%;height:628px;z-index:3847;">
					<div id="Layer65_Container" style="width:644px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
						<div id="Layer66" class="c19">
							<a href="#" onclick="ShowObjectWithEffect( 'Layer5', 1, 'slidedown', 500);ShowObjectWithEffect( 'Layer65', 0, 'slidedown', 300, 'swing');return false;">
								<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
							 </a>
							<p class="box1font3" style="padding-left: 0px;">
								<img src="<?php echo asset_url(); ?>images/desksite/D-video.png" alt="" class="img32"> &nbsp;&nbsp;&nbsp;PRODUCTS IN VIDEOS
							</p>
							<div class="box662" id="productcarousel">
							</div>
							<br><br>
						</div>
					</div>
				</div>
				
				<div id="Layer65" class="box1 c19">
					   <div id=" Layer65_Container ">
					    <a href="# " onclick="ShowObjectWithEffect( 'Layer5', 1, 'slidedown', 500);ShowObjectWithEffect( 'Layer65', 0, 'slidedown', 300, 'swing');return false; "><br><br>
							<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre">
					    </a>
					    <br>
					    
					    <div id="wb_Text1" class="c17">
					        <p class="c21">SHOW ALL</p>
					    </div>
					    <div id="Carousel3_next" class="c22"><a style="cursor:pointer">
							<img alt="Next" style="border-width:0"src="<?php echo asset_url(); ?>images/nexttxt0.png"></a>
						</div>
					</div>
				</div>
				<!-- videos section end -->
				<!-- products in d3-->
				<!-- products in d3-->
				<div id="Layer14" class="slideboxlayer" style="height:585px;">
				   <div id=" Layer14_Container ">
					   <a href="# " onclick="ShowObjectWithEffect( 'Layer5', 1, 'slidedown', 500);ShowObjectWithEffect( 'Layer14', 0, 'slidedown', 300, 'swing');return false; ">
						 <img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre" style="left:96%;">
					    </a>
					    <p class="box1font3" style="padding-left:0px;"><img src="<?php echo asset_url(); ?>images/desksite/3D.png" alt="" class="img32"> &nbsp;&nbsp;&nbsp;PRODUCTS IN 3D VIEW</p>
					    <div class="box2" id="my3dcarouselbox" style=" height:475px;">
						    <!-- div class="carousel slide" id="3dcarousel">
								<div class="carousel-inner"  id="3dproduct" role="listbox"></div>
									
	                    		<a class="left carousel-control" data-slide="prev" href="#3dcarousel" style="background: none;padding-top:137%;"> 
						    		<img alt="Back" style="border-width:0"src="<?php echo asset_url(); ?>images/previoustxt0.png">
								</a> 
						   
							   	<a class="right carousel-control" data-slide="next" href="#3dcarousel" style="background: none;padding-top:137%;">
								    <img alt="Next" style="border-width:0"src="<?php echo asset_url(); ?>images/nexttxt0.png">
								</a>
							</div-->
						</div>
					</div>
				</div>
				<!-- products in 3d end -->

</div>
<div id="Layer24" style="position:fixed;text-align:left;visibility:hidden;left:0;top:0;right:0;bottom:0;z-index:4931;background-image:url(<?php if(!empty($Desksite['desksite_bg1'])) { echo asset_url().$Desksite['desksite_bg1'];} else { echo asset_url()."images/member-desksite.jpg";} ?>);background-size:cover;">
	<div id="Layer22" style="position:absolute;overflow:auto;text-align:left;left:0;top:80px;right:0;bottom:0;z-index:1091;background-color: #EBECEE;min-height:600px;">
		<div id="Layer_products" style="z-index:988;background-color: #EBECEE;">
		</div>
	</div>
	<div id="Layer_details" style="position:absolute;overflow:auto;text-align:left;visibility:hidden;left:0%;top:80px;width:100%;height:756px;z-index:1092;background-color: #EBECEE;">
		<div id="details" style="position:absolute;text-align:center;left:8%;top:36px;width:84%;height:4171px;z-index:1073;background-color: #EBECEE;">
		
		</div>
	</div>
	<div id="Layer27" style="position: fixed; text-align: left; left: 0px; top: 0px; width: 100%; height: 78px; z-index: 1093;">
		<div id="Layer28" style="position: fixed; text-align: center; left: 0px; top: 4px; width: 98%; height: 50px; z-index: 1090;">
			<div id="Layer28_Container" style="width:1260px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
				<div id="Layer30" style="position:absolute;text-align:right;left:13%;top:1px;width:85%;height:47px;z-index:1081;">
					<div id="Layer30_Container" style="width:1094px;position:relative;margin-left:auto;margin-right:0;text-align:left;">
					</div>
				</div>
				<div id="Layer34" style="position:absolute;text-align:left;left:51px;top:0px;width:103px;height:47px;z-index:1082;" onclick="ShowObjectWithEffect('Layer8', 1, 'slidedown', 500);return false;">
				</div>
				<div id="Layer29" style="position:absolute;text-align:left;left:570px;top:1px;width:168px;height:47px;z-index:1083;" onclick="ShowObjectWithEffect('Layer_details', 0, 'slideleft', 500, 'swing');ShowObjectWithEffect('Layer_products', 1, 'slideright', 500, 'swing');ShowObjectWithEffect('Layer24', 0, 'dropdown', 500, 'swing');ShowObjectWithEffect('Layer46', 1, 'dropup', 500, 'swing');return false;">
					<div id="wb_Shape3" style="position:absolute;left:62px;top:10px;width:46px;height:13px;z-index:1076;">
						<a href="#" onclick="ShowObjectWithEffect('Layer_details', 0, 'slideleft', 500, 'swing');ShowObjectWithEffect('Layer_products', 1, 'slideright', 500, 'swing');ShowObjectWithEffect('Layer24', 0, 'dropdown', 500, 'swing');ShowObjectWithEffect('Layer46', 1, 'dropup', 500, 'swing');return false;"><img src="<?php echo asset_url();?>images/img0891.png" id="Shape3" alt="" style="width:46px;height:13px;"></a>
					</div>
					<div id="wb_Text143" style="position:absolute;left:46px;top:25px;width:102px;height:14px;z-index:1077;text-align:left;">
						<span style="color:#FFFFFF;font-family:Georgia;font-size:11px;">Seller Desksite</span>
					</div>
				</div>
				<div id="Layer31" style="position:absolute;text-align:left;left:920px;top:0px;width:115px;height:49px;z-index:1084;">
					<div id="wb_Image38" style="position:absolute;left:78px;top:11px;width:28px;height:28px;z-index:1078;">
						<?php if(!empty($Desksites[0]['flag'])) { ?>
				        <img src="<?php echo asset_url(); ?>images/flags/<?php echo $Desksites[0]['flag'];?>" id="Image53" alt="<?php echo $Desksites[0]['company_country'];?>" style="width:28px;">
				        <?php } ?>
					</div>
					<div id="wb_Text114" style="position:absolute;left:0px;top:17px;width:70px;height:14px;text-align:right;z-index:1079;">
					<span style="color:#FFFFFF;font-family:Georgia;font-size:11px;"><?php echo $Desksites[0]['company_country'];?></span>
					</div>
				</div>
				<div id="wb_Image39" style="position:absolute;left:1177px;top:6px;width:37px;height:35px;z-index:1085;">
					<?php if($Desksites[0]['plan_id'] > 1){?>
	            	<img src="<?php echo asset_url(); ?>images/black-horse.png" id="Image61" alt="" class="black-horse-icon">
	              	<?php } else { ?>
	              	<img src="<?php echo asset_url(); ?>images/black-horse.png" id="Image61" alt="" class="black-horse-icon img-disabled1">
	              	<?php } ?>
				</div>
				<div id="wb_Image40" style="position:absolute;left:1144px;top:9px;width:32px;height:32px;z-index:1086;">
					<a href="#" onclick="ShowObjectWithEffect('Layer61', 1, 'slidedown', 300, 'swing');ShowObjectWithEffect('Layer43', 0, 'slideup', 500, 'swing');ShowObjectWithEffect('Layer53', 0, 'slideup', 500);ShowObjectWithEffect('Layer58', 0, 'slideup', 500);return false;">
						<?php if($Desksites[0]['is_logo_verified'] > 1){?>
						<img src="<?php echo asset_url(); ?>images/trusted.png" id="Image67" alt=""  class="verified-icon">
						<?php } else { ?>
						<img src="<?php echo asset_url(); ?>images/trusted.png" id="Image67" alt=""  class="verified-icon img-disabled1">
						<?php } ?>
					</a>
				</div>
				<div id="wb_Image41" style="position:absolute;left:1063px;top:10px;width:33px;height:33px;z-index:1087;">
					<?php if(count($community) > 0){ ?>
	                <img src="<?php echo asset_url(); ?>images/CommMember.png" id="Image76" alt="" title="A member in your community" class="community-member-icon">
	                <?php } else { ?>
	                <img src="<?php echo asset_url(); ?>images/CommMember.png" id="Image76" alt="" title="A member in your community" class="community-member-icon img-disabled1">
	                <?php } ?>
				</div>
				<div id="wb_Image96" style="position:absolute;left:1106px;top:10px;width:40px;height:32px;z-index:1088;">
					<?php if($Desksites[0]['gaurantee_period'] > 0){?>
	                <img src="<?php echo asset_url(); ?>images/guarantee.png" id="Image94" alt="" class="gaurantee-icon">
	                <?php } else { ?>
	                <img src="<?php echo asset_url(); ?>images/guarantee.png" id="Image94" alt="" class="gaurantee-icon img-disabled1">
	                <?php } ?>
				</div>
				<div id="Layer36" style="position:absolute;text-align:left;left:51px;top:0px;width:103px;height:48px;z-index:1089;" onclick="getProductCategoryP(<?php echo $Desksites[0]['busi_id'];?>);">
					<div id="wb_Text30" style="position:absolute;left:17px;top:16px;width:73px;height:18px;z-index:1080;text-align:left;">
						<span style="color:#000000;font-family:Georgia;font-size:15px;"><a href="#" class="style24" >Products</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="Layer35" style="position:absolute;text-align:left;visibility:hidden;left:37px;top:0px;width:56%;height:580px;z-index:4932;background-color: transparent;" onmouseleave="ShowObjectWithEffect('Layer35', 0, 'slideup', 500);return false;">
		<div id="Layer37">
			<div>
	            <p class="box1font1"><img src="<?php echo asset_url(); ?>images/MENUICON.png" alt="" class="img32"> &nbsp;&nbsp;&nbsp;PRODUCT CATEGORY</p>
	            <div id="wb_desktop_menu">
	                <div id="wb_desktop_menu2">
		            </div>
	            </div>
	        </div>
			<a href="#" onclick="ShowObjectWithEffect('Layer35', 0, 'slideup', 150, 'swing');return false;">
				
			</a>
		</div>
	</div>
</div>
<div id="vcatalogue_overlay" class="modal fade" style="background-color:#404040;z-index: 4000;">
	<div class="modal-dialog" style="background-color:#404040;width:1050px;">
		<div class="modal-content" style="background: transparent;box-shadow:none;-webkit-box-shadow:none;border: 0px;">
			<div style="position:absolute;right:0;width:50px;height:50px;z-index:5000;"><button type="button" class="pull-right" data-dismiss="modal" aria-hidden="true" style="background:transparent;border:0px;"><img src="<?php echo asset_url();?>images/newicons/closeround.png" id="Image47" alt="" style="width:35px;"></button></div>
			<div class="modal-body catalogue_modal_body_bg" style="width:1050px;height:640px;">
				<input type="hidden" id="pcatalogue_id" value="" />
				<div class="row">
					<div class="col-md-1" style="float:left;padding:0px;width:140px;">
						<?php foreach ($catalogues as $catalogue) { ?>
						<div style="text-align: center; margin-bottom: 5px; width:140px;height:155px;">
							<div style="position:relative;width: 140px;top:-10px;">
								<a href="javascript:viewNextCatalogueBook(<?php echo $catalogue['id'];?>);">
									<span style="background-color:#F05539;color:#FFFFFF;font-family:Georgia;font-size:13px;"><strong><?php echo $catalogue['catalogue_title'];?></strong></span>
								</a>
							</div>
							<a href="javascript:viewNextCatalogueBook(<?php echo $catalogue['id'];?>);">
							<img src="<?php echo asset_url(); ?>images/vCAT2.png" class="img-responsive carousel_img" style="display: inline-block;width:77px;" >
							<div style="position:relative;width:65px;top:-70px;left:38px;">
								<img src="<?php echo asset_url().$catalogue['catalogue_cover']; ?>" class="img-responsive" style="display: inline-block;border-radius:50%;border:2px solid #e55a43;padding: 0px !important;">
							</div>
							</a>
						</div>
						<?php } ?>
					</div>
					<div class="col-md-9" style="width:770px;padding-top:42px;">
						<div id="catalogue_page_content" class="catalogue_outer_body">
						</div>
					</div>
					<div class="col-md-1" style="padding:0px;width:80px;" id="share_it">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="promodal">
</div>
<script src="<?php echo asset_url();?>js/bootstrapValidator.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script>
function getComapnyProfile(id) {
	myloaderon('');
	$.get(base_url+"desksite/company/"+id,{},function(data) {
		myloaderoff();
		$("#company-profile").html(data);
		ShowObjectWithEffect( 'Layer5', 0, 'slidedown', 500, 'swing');
		ShowObjectWithEffect( 'Layer48', 1, 'slidedown', 500, 'swing');
	},'html');
}

function getComapnyAbout(id) {
	myloaderon('');
	$.get(base_url+"desksite/company/about/"+id,{},function(data) {
		myloaderoff();
		$("#about-us").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');
		ShowObjectWithEffect('Layer23', 1, 'slidedown', 500, 'swing');
	},'html');
}

function getComapnyCertificate(id) {
	myloaderon('');
	$.get(base_url+"desksite/company/certificate/"+id,{},function(data) {
		myloaderoff();
		$("#Layer147").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');
		ShowObjectWithEffect('Layer144', 1, 'slidedown', 500, 'swing');
	},'html');
}
function getAdvantage(id) {
	myloaderon('');
	$.get(base_url+"desksite/advantage/"+id,{},function(data) {
		myloaderoff();
		$("#advantage").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');
		ShowObjectWithEffect('Layer79', 1, 'slidedown', 500, 'swing');
	},'html');
}
function getContactPerson(id) {
	myloaderon('');
	$.get(base_url+"desksite/contact/"+id,{},function(data) {
		myloaderoff();
		$("#contact-person").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500);
		ShowObjectWithEffect('Layer62', 1, 'slidedown', 500, 'swing');
	},'html');
}

function getMyFiles(id) {
	myloaderon('');
	$.get(base_url+"desksite/myfiles/"+id,{},function(data) {
		myloaderoff();
		$("#my-files").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');
		ShowObjectWithEffect('Layer148', 1, 'slidedown', 500, 'swing');
			
	},'html');
}
function get3DProduct(id) {
	myloaderon('');
	$.get(base_url+"desksite/3dproduct/"+id,{},function(data) {
		myloaderoff();
		$("#my3dcarouselbox").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');
		ShowObjectWithEffect('Layer14', 1, 'slidedown', 500, 'swing');
			
	},'html');
}
function getProductVideo(id) {
	myloaderon('');
	$.get(base_url+"desksite/video/"+id,{},function(data) {
		myloaderoff();
		$("#productcarousel").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500, 'swing');
		ShowObjectWithEffect('Layer65', 1, 'slidedown', 500, 'swing');
	},'html');
}
function getCurrentPost(id) {
	myloaderon('');
	$.get(base_url+"desksite/post/"+id,{},function(data) {
		myloaderoff();
		$("#post").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500);
		ShowObjectWithEffect('Layer58', 1, 'slidedown', 500, 'swing');
			
	},'html');
}

function addToFavourite(id) {
	var type =1;
	$.get(base_url+"desksite/favourite/"+id+"/"+type,{},function(data) {
		$("#post").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500);
		ShowObjectWithEffect('Layer58', 1, 'slidedown', 500, 'swing');
			
	},'json');
}

function addCatalogueToFavourite(id) {
	var type = 7;
	$.get(base_url+"desksite/favourite/"+id+"/"+type,{},function(data) {
		$("#msg_cont").html(data.msg);
		ShowObject('Layer99', 1);
	},'json');
}

function likeCatalogue(id) {
	$.get(base_url+"desksite/catalogue/like/"+id,{},function(data) {
		$("#msg_cont").html(data.msg);
		ShowObject('Layer99', 1);
		var likes = parseInt($("#sdiv"+id).html());
		likes++;
		$("#sdiv"+id).html(likes);
	},'json');
}

function getProductCategory(id) {
	myloaderon('');
	$.get(base_url+"desksite/product/menu/"+id, {},function(data) {
		myloaderoff();
		$("#wb_desktop_menu").html(data);
		ShowObjectWithEffect('Layer5', 0, 'slidedown', 500);
		ShowObjectWithEffect('Layer88', 0, 'slideleft', 500, 'swing');
		ShowObjectWithEffect( 'Layer44', 1, 'slidedown', 500, 'swing');
	},'html');
}
function getProductCategoryP(id) {
	myloaderon('');
	$.get(base_url+"desksite/product/menu/"+id, {},function(data) {
		myloaderoff();
		$("#wb_desktop_menu2").html(data);
		ShowObjectWithEffect('Layer35', 1, 'slideup', 500, 'swing');
	},'html');
}


function viewCatalogueBook(id) {
	ajaxindicatorstart("Please wait while we load catalogue.");
	$.get(base_url+"catalogue/business/"+id,{},function(data){
		ajaxindicatorstop();
		if(data.html == '0') {
			alert("Sorry no catalogues created.");
		} else {
			$("#catalogue_page_content").html(data.html);
			$("#pcatalogue_id").val(data.id);
			$("#vcatalogue_overlay").modal('show');
			var shareIt = '<ul class="share pull-right text-center">'
				 +'<li class="share-button"><label style="width:70px;height:70px;border-radius:50%;border:1px solid #fff;background-color:#24A7DB;color:#fff;text-align:center;line-height:15px;padding-top:20px;">Views<br> <span id="vdiv'+data.id+'">'+data.views+'</span></label></li>'
				 +'<li class="share-button"><label style="width:70px;height:70px;border-radius:50%;border:1px solid #fff;background-color:#32AA2B;color:#fff;text-align:center;line-height:15px;padding-top:20px;">Likes<br> <span id="sdiv'+data.id+'">'+data.likes+'<span></label></li>'
				 +'</ul>'
				 +'<div id="RollOver5" class="" style="position:absolute;left: 30px;top: 245px;width:35px;height:35px;z-index:380;" onclick="chat_with('+data.user_id+','+data.accept_chat+');">'
				 +'<a>'
				 +'<img class="hover" src="<?php echo asset_url()?>images/chatwhite.png" alt="view">'
				 +'<span><img alt="View" src="<?php echo asset_url()?>images/chat_button2.png"></span>'
				 +'</a>'
				 +'</div>'
				 +'<div id="RollOver5" class="" style="position:absolute;left: 30px;top: 290px;width:35px;height:35px;z-index:380;">'
				 +'<a href="javascript:likeCatalogue('+data.id+');">'
				 +'<img class="hover" src="<?php echo asset_url()?>images/items_likewhite.png" alt="view">'
				 +'<span><img alt="View" src="<?php echo asset_url()?>images/items_like2.png"></span>'
				 +'</a>'
				 +'</div>'
				 +'<div id="RollOver5" class="" style="position:absolute;left: 30px;top: 335px;width:35px;height:35px;z-index:380;">'
				 +'<a href="javascript:addToMyFavourite('+data.busi_id+',7);">'
				 +'<img class="hover" src="<?php echo asset_url()?>images/addtofav.png" alt="view">'
				 +'<span><img alt="View" src="<?php echo asset_url()?>images/favorite_chery.gif"></span>'
				 +'</a>'
				 +'</div>';
			$("#share_it").html(shareIt);
			var $mybook 		= $('#mybook');
			var $bttn_next		= $('#next_page_button');
			var $bttn_prev		= $('#prev_page_button');
			var $loading		= $('#loading');
			var $mybook_images	= $mybook.find('img');
			var cnt_images		= $mybook_images.length;
			var loaded			= 0;
			//preload all the images in the book,
			//and then call the booklet plugin
			$mybook_images.each(function(){
				var $img 	= $(this);
				var source	= $img.attr('src');
				$('<img/>').load(function(){
					++loaded;
					if(loaded == cnt_images){
						$loading.hide();
						$bttn_next.show();
						$bttn_prev.show();
						$mybook.show().booklet({
							name:               null,                            // name of the booklet to display in the document title bar
							width:              690,                             // container width
							height:             450,                             // container height
							speed:              600,                             // speed of the transition between pages
							direction:          'LTR',                           // direction of the overall content organization, default LTR, left to right, can be RTL for languages which read right to left
							startingPage:       0,                               // index of the first page to be displayed
							easing:             'easeInOutQuad',                 // easing method for complete transition
							easeIn:             'easeInQuad',                    // easing method for first half of transition
							easeOut:            'easeOutQuad',                   // easing method for second half of transition
	
							closed:             false,                           // start with the book "closed", will add empty pages to beginning and end of book
							closedFrontTitle:   null,                            // used with "closed", "menu" and "pageSelector", determines title of blank starting page
							closedFrontChapter: null,                            // used with "closed", "menu" and "chapterSelector", determines chapter name of blank starting page
							closedBackTitle:    null,                            // used with "closed", "menu" and "pageSelector", determines chapter name of blank ending page
							closedBackChapter:  null,                            // used with "closed", "menu" and "chapterSelector", determines chapter name of blank ending page
							covers:             false,                           // used with  "closed", makes first and last pages into covers, without page numbers (if enabled)
	
							pagePadding:        10,                              // padding for each page wrapper
							pageNumbers:        false,                            // display page numbers on each page
	
							hovers:             false,                            // enables preview pageturn hover animation, shows a small preview of previous or next page on hover
							overlays:           false,                            // enables navigation using a page sized overlay, when enabled links inside the content will not be clickable
							tabs:               false,                           // adds tabs along the top of the pages
							tabWidth:           60,                              // set the width of the tabs
							tabHeight:          20,                              // set the height of the tabs
							arrows:             true,                           // adds arrows overlayed over the book edges
							cursor:             'pointer',                       // cursor css setting for side bar areas
	
							hash:               false,                           // enables navigation using a hash string, ex: #/page/1 for page 1, will affect all booklets with 'hash' enabled
							keyboard:           true,                            // enables navigation with arrow keys (left: previous, right: next)
							next:               $bttn_next,          			// selector for element to use as click trigger for next page
							prev:               $bttn_prev,          			// selector for element to use as click trigger for previous page
	
							menu:               null,                            // selector for element to use as the menu area, required for 'pageSelector'
							pageSelector:       false,                           // enables navigation with a dropdown menu of pages, requires 'menu'
							chapterSelector:    false,                           // enables navigation with a dropdown menu of chapters, determined by the "rel" attribute, requires 'menu'
	
							shadows:            true,                            // display shadows on page animations
							shadowTopFwdWidth:  166,                             // shadow width for top forward anim
							shadowTopBackWidth: 166,                             // shadow width for top back anim
							shadowBtmWidth:     50,                              // shadow width for bottom shadow
	
							before:             function(){},                    // callback invoked before each page turn animation
							after:              function(){}                     // callback invoked after each page turn animation
						});
						//Cufon.refresh();
					}
				}).attr('src',source);
			});
		}
	},'json');
}

function viewNextCatalogueBook(id) {
	myloaderon('');
	$.get(base_url+"catalogue/business/next/"+id,{},function(data){
		if(data.html == '0') {
			alert("Sorry no catalogues created.");
		} else {
			myloaderoff();
			$("#catalogue_page_content").html(data.html);
			$("#pcatalogue_id").val(data.id);
			$("#vcatalogue_overlay").modal('show');
			var shareIt = '<ul class="share pull-right text-center">'
				 +'<li class="share-button"><label style="width:70px;height:70px;border-radius:50%;border:1px solid #fff;background-color:#24A7DB;color:#fff;text-align:center;line-height:15px;padding-top:20px;">Views<br> <span id="vdiv'+data.id+'">'+data.views+'</span></label></li>'
				 +'<li class="share-button"><label style="width:70px;height:70px;border-radius:50%;border:1px solid #fff;background-color:#32AA2B;color:#fff;text-align:center;line-height:15px;padding-top:20px;">Likes<br> <span id="sdiv'+data.id+'">'+data.likes+'<span></label></li>'
				 +'</ul>'
				 +'<div id="RollOver5" class="" style="position:absolute;left: 30px;top: 245px;width:35px;height:35px;z-index:380;" onclick="chat_with('+data.user_id+','+data.accept_chat+')">'
				 +'<a>'
				 +'<img class="hover" src="<?php echo asset_url()?>images/chatwhite.png" alt="view">'
				 +'<span><img alt="View" src="<?php echo asset_url()?>images/chat_button2.png"></span>'
				 +'</a>'
				 +'</div>'
				 +'<div id="RollOver5" class="" style="position:absolute;left: 30px;top: 290px;width:35px;height:35px;z-index:380;">'
				 +'<a href="javascript:likeCatalogue('+data.id+');">'
				 +'<img class="hover" src="<?php echo asset_url()?>images/items_likewhite.png" alt="view">'
				 +'<span><img alt="View" src="<?php echo asset_url()?>images/items_like2.png"></span>'
				 +'</a>'
				 +'</div>'
				 +'<div id="RollOver5" class="" style="position:absolute;left: 30px;top: 335px;width:35px;height:35px;z-index:380;">'
				 +'<a href="javascript:addToMyFavourite('+data.busi_id+',7);">'
				 +'<img class="hover" src="<?php echo asset_url()?>images/addtofav.png" alt="view">'
				 +'<span><img alt="View" src="<?php echo asset_url()?>images/favorite_chery.gif"></span>'
				 +'</a>'
				 +'</div>';
			$("#share_it").html(shareIt);
			var $mybook 		= $('#mybook');
			var $bttn_next		= $('#next_page_button');
			var $bttn_prev		= $('#prev_page_button');
			var $loading		= $('#loading');
			var $mybook_images	= $mybook.find('img');
			var cnt_images		= $mybook_images.length;
			var loaded			= 0;
			//preload all the images in the book,
			//and then call the booklet plugin
			$mybook_images.each(function(){
				var $img 	= $(this);
				var source	= $img.attr('src');
				$('<img/>').load(function(){
					++loaded;
					if(loaded == cnt_images){
						$loading.hide();
						$bttn_next.show();
						$bttn_prev.show();
						$mybook.show().booklet({
							name:               null,                            // name of the booklet to display in the document title bar
							width:              690,                             // container width
							height:             450,                             // container height
							speed:              600,                             // speed of the transition between pages
							direction:          'LTR',                           // direction of the overall content organization, default LTR, left to right, can be RTL for languages which read right to left
							startingPage:       0,                               // index of the first page to be displayed
							easing:             'easeInOutQuad',                 // easing method for complete transition
							easeIn:             'easeInQuad',                    // easing method for first half of transition
							easeOut:            'easeOutQuad',                   // easing method for second half of transition
	
							closed:             false,                           // start with the book "closed", will add empty pages to beginning and end of book
							closedFrontTitle:   null,                            // used with "closed", "menu" and "pageSelector", determines title of blank starting page
							closedFrontChapter: null,                            // used with "closed", "menu" and "chapterSelector", determines chapter name of blank starting page
							closedBackTitle:    null,                            // used with "closed", "menu" and "pageSelector", determines chapter name of blank ending page
							closedBackChapter:  null,                            // used with "closed", "menu" and "chapterSelector", determines chapter name of blank ending page
							covers:             false,                           // used with  "closed", makes first and last pages into covers, without page numbers (if enabled)
	
							pagePadding:        10,                              // padding for each page wrapper
							pageNumbers:        false,                            // display page numbers on each page
	
							hovers:             false,                            // enables preview pageturn hover animation, shows a small preview of previous or next page on hover
							overlays:           false,                            // enables navigation using a page sized overlay, when enabled links inside the content will not be clickable
							tabs:               false,                           // adds tabs along the top of the pages
							tabWidth:           60,                              // set the width of the tabs
							tabHeight:          20,                              // set the height of the tabs
							arrows:             true,                           // adds arrows overlayed over the book edges
							cursor:             'pointer',                       // cursor css setting for side bar areas
	
							hash:               false,                           // enables navigation using a hash string, ex: #/page/1 for page 1, will affect all booklets with 'hash' enabled
							keyboard:           true,                            // enables navigation with arrow keys (left: previous, right: next)
							next:               $bttn_next,          			// selector for element to use as click trigger for next page
							prev:               $bttn_prev,          			// selector for element to use as click trigger for previous page
	
							menu:               null,                            // selector for element to use as the menu area, required for 'pageSelector'
							pageSelector:       false,                           // enables navigation with a dropdown menu of pages, requires 'menu'
							chapterSelector:    false,                           // enables navigation with a dropdown menu of chapters, determined by the "rel" attribute, requires 'menu'
	
							shadows:            true,                            // display shadows on page animations
							shadowTopFwdWidth:  166,                             // shadow width for top forward anim
							shadowTopBackWidth: 166,                             // shadow width for top back anim
							shadowBtmWidth:     50,                              // shadow width for bottom shadow
	
							before:             function(){},                    // callback invoked before each page turn animation
							after:              function(){}                     // callback invoked after each page turn animation
						});
						//Cufon.refresh();
					}
				}).attr('src',source);
			});
		}
	},'json');
}

$("a[data-rel='prettyPhoto_SlideShow31[SlideShow31]']").attr('rel', 'prettyPhoto_SlideShow31[SlideShow31]').scroll();
$("a[rel^='prettyPhoto_SlideShow31']").prettyPhoto({theme:'facebook',social_tools:false}).scroll();
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

function addToMyFavourite(fav_id,type) {
	$.get(base_url+"addtofavourite/"+fav_id+"/"+type,{},function(data) {
		alert(data.msg);
	},'json');
}

function openChatWithBuyer(seller_id,accept_chat=true) {
	<?php if(!empty($tsuserid)) { ?>
		<?php if($tscategory_id == 3) { ?>
			<?php if($contact_details[0]['accept_chat'] == 1) { ?>
				jqcc.cometchat.chatWith(seller_id);
                document.getElementById('cometchat_chatboxes').style.right='0px';
			<?php } else { ?>
				$("#msg_cont").html('Oops.. It seems that you have turned this feature OFF.. Please go to “ My Station”, then click on “Tools” icon, and select “ Control Panel”, then Turn it ON….');
				ShowObject('Layer99', 1);
			<?php } ?>
		<?php } else { ?>
			jqcc.cometchat.chatWith(seller_id);
            document.getElementById('cometchat_chatboxes').style.right='0px';
		<?php } ?>
	<?php } else { ?>
		$("#msg_cont").html('LOGIN TO CAHT');
		ShowObject('Layer99', 1);
	<?php } ?>
}
function likeMyVideo(id,type,likeid) {
	$.get(base_url+"likevideo/"+id,{ type: type},function(data) {
		if(data.status == 1) {
			var likes = parseInt($("#"+likeid).html());
			likes = likes + 1;
			$("#"+likeid).html(likes);
		}
		$("#msg_cont").html(data.msg);
		ShowObject('Layer99', 1);
	},'json');
}
function printInvoice() {    
	var printContents = document.getElementById('contact-person').innerHTML;
    w = window.open();
    w.document.write(printContents);
    w.document.write('<scr' + 'ipt type="text/javascript">' + 'window.onload = function() { window.print(); window.close(); };' + '</sc' + 'ript>');
    w.document.close(); // necessary for IE >= 10
    w.focus(); // necessary for IE >= 10
    return true;
}
function likeMyDesksite(busi_id) {
	$.get(base_url+"desksite/like/"+busi_id,{},function(data) {
		$("#msg_cont").html(data.msg);
		ShowObject('Layer99', 1);
	},'json');
}
function submitContactForm() {
	<?php if(!empty($tsuserid)) { ?>
		<?php if($tscategory_id != 3) { ?>
			$("#msg_cont").html("Your message has been successfully sent to the seller.");
			ShowObject('Layer99', 1);
			ShowObjectWithEffect('Layer216', 0, 'slideleft', 500, 'swing');
		<?php } else { ?>
			<?php if($contact_details[0]['accept_offer'] == 1 && $contact_details[0]['accept_email'] == 1 && $contact_details[0]['step'] == 2) { ?>
				$("#msg_cont").html("Your message has been successfully sent to the seller.");
				ShowObject('Layer99', 1);
				ShowObjectWithEffect('Layer216', 0, 'slideleft', 500, 'swing');
			<?php } else if($contact_details[0]['step'] < 2) { ?>
				$("#msg_cont").html("Sorry.. You have to create you Desksite to send posts or communicate with our members.. It\'s so easy .. just follow the steps shown here-under:<br> 1. Login and click on your profile image, then select Continue.<br> 2. Complete your registration till we create your Station.<br> 3. In " My Station" click on " My Desksite" and follow the steps to build it.");
				ShowObject('Layer99', 1);
			<?php } else if($contact_details[0]['accept_offer'] == 0 || $contact_details[0]['accept_email'] == 0) { ?>
				$("#msg_cont").html('Oops.. You are not able to sent a post.. It seems that you have turned the features (Receive Elite Manufactures Offers & Members contact request) OFF.. Please go to " My Station", then click on "Tools" icon, and select " Control Pannel", then Turn these features ON.');
				ShowObject('Layer99', 1);
			<?php } ?>
		<?php } ?>
	<?php } else { ?>
		$("#msg_cont").html("Please login to contact this seller.");
		ShowObject('Layer99', 1);
	<?php } ?>
}
function openGeneralEnquiry(id) {
	<?php if(!empty($tsuserid)) { ?>
		<?php if($tscategory_id != 3) { ?>
			popupwnd('<?php echo base_url();?>desksite/general_enquiry/'+id,'no','no','no','no','no','no','200','50','1055','680');
		<?php } else { ?>
			<?php if($contact_details[0]['accept_offer'] == 1 && $contact_details[0]['accept_email'] == 1 && $contact_details[0]['step'] == 2) { ?>
				popupwnd('<?php echo base_url();?>desksite/general_enquiry/'+id,'no','no','no','no','no','no','200','50','1055','680');
			<?php } else if($contact_details[0]['step'] < 2) { ?>
				$("#msg_cont").html("Sorry.. You have to create you Desksite to send posts or communicate with our members.. It\'s so easy .. just follow the steps shown here-under:<br> 1. Login and click on your profile image, then select Continue.<br> 2. Complete your registration till we create your Station.<br> 3. In " My Station" click on " My Desksite" and follow the steps to build it.");
				ShowObject('Layer99', 1);
			<?php } else if($contact_details[0]['accept_offer'] == 0 || $contact_details[0]['accept_email'] == 0) { ?>
				$("#msg_cont").html('Oops.. You are not able to sent a post.. It seems that you have turned the features (Receive Elite Manufactures Offers & Members contact request) OFF.. Please go to " My Station", then click on "Tools" icon, and select " Control Pannel", then Turn these features ON.');
				ShowObject('Layer99', 1);
			<?php } ?>
		<?php } ?>
	<?php } else { ?>
		$("#msg_cont").html("Please login to send inquiry.");
		ShowObject('Layer99', 1);
	<?php } ?>
}
function searchProducts() {
	var url = "<?php echo base_url();?>products?keyword="+$("#SiteSearch1").val();
	var win = window.open(url, '_blank');
	win.focus();
}
function viewProductDetails(id) {
	myloaderon('');
	$.get(base_url+"product/details/page/"+id,{ },function(data) {
		myloaderoff();
		ShowObjectWithEffect('Layer46', 0, 'slideup', 500);
		ShowObjectWithEffect('Layer24', 1, 'slidedown', 500, 'swing');
		ShowObject('Layer_products', 0);
		ShowObjectWithEffect('Layer_details', 1, 'fade', 10, 'swing');
		$("#details").html(data);
	},'html');
}

function viewCatProducts(catid,scatid,mcatid,busi_id) {
	myloaderon('');
	$.get(base_url+"product/csmproduct/"+catid+"/"+scatid+"/"+mcatid+"/"+busi_id,{ },function(data) {
		myloaderoff();
		ShowObjectWithEffect('Layer46', 0, 'slideup', 500);
		ShowObjectWithEffect('Layer24', 1, 'slidedown', 500, 'swing');
		ShowObjectWithEffect('Layer_details', 0, 'slideleft', 500, 'swing');
		ShowObjectWithEffect('Layer_products', 1, 'slideright', 500, 'swing');
		$("#Layer_products").html(data);
	},'html');
}
function viewSCatProducts(busi_id,type) {
	myloaderon('');
	$.get(base_url+"product/spproduct/"+busi_id+"/"+type,{ },function(data) {
		myloaderoff();
		ShowObjectWithEffect('Layer46', 0, 'slideup', 500);
		ShowObjectWithEffect('Layer24', 1, 'slidedown', 500, 'swing');
		ShowObjectWithEffect('Layer_details', 0, 'slideleft', 500, 'swing');
		ShowObjectWithEffect('Layer_products', 1, 'slideright', 500, 'swing');
		$("#Layer_products").html(data);
	},'html');
}
function productDetail(id) {
    myloaderon('');
    $.get(base_url+"product/details/page/"+id,{ },function(data) {
        myloaderoff();
        ShowObjectWithEffect('Layer46', 0, 'slideup', 500);
        ShowObjectWithEffect('Layer24', 1, 'slidedown', 500, 'swing');
        ShowObject('Layer_products', 0);
        ShowObjectWithEffect('Layer_details', 1, 'fade', 10, 'swing');
        $("#details").html(data);
    },'html');
}
function productDetail2(id,user_id) {
    myloaderon('');
    $.get(base_url+"product/details/page2/"+id+"/"+user_id,{ },function(data) {
        myloaderoff();
        ShowObjectWithEffect('Layer46', 0, 'slideup', 500);
        ShowObjectWithEffect('Layer24', 1, 'slidedown', 500, 'swing');
        ShowObject('Layer_products', 0);
        ShowObjectWithEffect('Layer_details', 1, 'fade', 10, 'swing');
        $("#details").html(data);
    },'html');
}
// $(document).ready(function() {
//     $("body").on("contextmenu",function(){
//        return false;
//     }); 
// }); 
$(document).ready(function(){
    
    $("body").on("contextmenu",function(){
       return false;
    }); 

	$('#contactusfrm').bootstrapValidator({
	 container: function($field, validator) {
     	return $field.parent().next('.messageContainer');
     },
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
    		name: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Please enter name'
                 	}
             	}
    	   	},
    	   	email: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Please enter email'
                 	},
                 	regexp: {
                        regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                        message: 'Invalid Email'
                    }
             	}
    	   	},
    	   	mobile: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Please enter Phone Number'
                 	}
             	}
    	   	},
    	   	country: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Please select country'
                 	}
             	}
    	   	},
    	   	city: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Please enter city name'
                 	}
             	}
    	   	},
    	   	message: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Please enter message'
                 	}
             	}
    	   	}
		     
		}
    }).on('success.form.bv', function(e) {
	   // Prevent form submission
	   e.preventDefault();
	   saveContactUsForm();
	});
});
function saveContactUsForm() {
	ajaxindicatorstart("Please wait .. while we save query...");
	var options = {
			target : '#response', // target element(s) to be updated with server response 
			beforeSubmit : showContactUsRequest, // pre-submit callback 
			success :  showContactUsResponse,
			url : base_url+'desksite/savecontactus',
			semantic : true,
			dataType : 'json'
		};
	$('#contactusfrm').ajaxSubmit(options);
}
function showContactUsRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	<?php if($tscategory_id != 3) { ?>
		return true;
	<?php } else { ?>
		<?php if($contact_details[0]['accept_offer'] == 1 && $contact_details[0]['accept_email'] == 1 && $contact_details[0]['step'] == 2) { ?>
			return true;
		<?php } else if($contact_details[0]['step'] < 2) { ?>
			$("#msg_cont").html("Sorry.. You have to create you Desksite to send posts or communicate with our members.. It\'s so easy .. just follow the steps shown here-under:<br> 1. Login and click on your profile image, then select Continue.<br> 2. Complete your registration till we create your Station.<br> 3. In " My Station" click on " My Desksite" and follow the steps to build it.");
			ShowObject('Layer99', 1);
			return false;
		<?php } else if($contact_details[0]['accept_offer'] == 0 || $contact_details[0]['accept_email'] == 0) { ?>
			$("#msg_cont").html('Oops.. You are not able to sent a post.. It seems that you have turned the features (Receive Elite Manufactures Offers & Members contact request) OFF.. Please go to " My Station", then click on "Tools" icon, and select " Control Pannel", then Turn these features ON.');
			ShowObject('Layer99', 1);
			return false;
		<?php } ?>
	<?php } ?>
	return true;
}
function showContactUsResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 1) {
		$("#msg_cont").html("We have recorded your inquiry.");
		ShowObject('Layer99', 1);
		ShowObjectWithEffect('Layer216', 0, 'slideleft', 500, 'swing');
	}
}
function resetForm() {
	document.contactusfrm.reset();
}
function open3DProduct(id) {
	$.get(base_url+"mystation/3dpro/show/"+id, {}, function(data){
		$("#promodal").html(data);
		$("#my3DModal").modal('show');
		init3D('my3dimg');
	},'html');
 }
</script>
