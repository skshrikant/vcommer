<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php echo asset_url();?>js/jquery.imgareaselect.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo asset_url();?>css/imgareaselect.css">
<link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/imgareaselect-default.css" />  
<script type="text/javascript" src="<?php echo asset_url();?>js/jquery.imgareaselect.js" > </script>

<div class="row editaccount_outer">
	<div class="col-md-2 account-left-nav"> 
		<div class="col-md-12" style="padding: 9px;">
			<div class="account-image">
				<a href="javascript:false;"> 
					<img class="hover" alt="" class="img-circle" src="<?php echo asset_url();?>images/advertising1.png">
				</a>
			</div>
			<div style="color:#FFFFFF;font-family:Arial;font-size:13px;text-align: center;padding-bottom: 15px;">Ads. Engine</div>
			<div class="account-main-nav">
				<ul class="nav nav-tabs nav-tabs-custom">
				  	<li><a data-toggle="tab" href="#mainscreenads" onclick="openMainScreenAds();">Ads In <br><span>Main Screen</span></a></li>
				  	<?php if($tscategory_id == 1) { ?>
				  	<li><a data-toggle="tab" href="#featuredcarousel" onclick="openFeaturedAds();">Ads In <br><span>Featured Carousels</span></a></li>
				  	<?php } ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-10 account-content-area">
		<div class="tab-content main-tab-content">
			<?php if($myds_stage == 4) { ?>	
			<div class="panel panel-default tab-pane fade in active" id="mainscreenads">
				<div class="panel-heading custom-panel-heading" style="text-align:left;padding-top: 5px !important;">
					<span class="pull-right-close" style="padding-top: 5px;"><a href="javascript:ShowObjectWithEffect('Layer275', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
				</div>
				<div class="panel-inner">
					<div class="row">
						<br><br><br>
					</div>
					<div class="row">
						<div class="col-sm-5">
							<div class="col-sm-7" style="padding-right:0px;">
								<span class="adsbold-title">JUMP </span>
							</div>
							<div class="col-sm-5" style="padding-left:5px;padding-top:15px;">
								<span class="adsred-title">In Front</span><br>
								<span class="ads-small-title">Of The</span>
							</div>
							<div class="col-sm-12" style="margin-top: -30px;">
								<span class="adsbold-title">QUEUE..!</span>
							</div>
							<div class="col-sm-12">
								<span class="product-list-text">
									The trade station advertising engine, in a unique tool allows you to jump in <br>front of the queue, keep your products under the spot lights and attract <br>thousands of global buyers aware of your products.<br>
									Trade station offer you two ways "Packages " as follows:
								</span>
							</div>
							<div class="col-sm-12 product-list-text" style="padding-top:10px;">
								<span class="red-text">1- </span>Add an interactive advertising in the main SCREEN of the home page.<br>
								<span class="red-text">2- </span>Add your products along with the FEATURED CAROUSEL  in all pages.
							</div>
							<div class="row">
								<br><br>
							</div>
							<div class="col-sm-12" style="padding-right:40px;">
								<br><br><br>
								<a href="javascript:openMainScreenAds();" class="btn btn-sm btn-block btn-black-custom">Get Started</a>
							</div>
							<div class="col-sm-12 product-list-text text-center" style="padding-right:40px;padding-top:5px;">
								Press "Get Started" and select the way matchs your target
							</div>
						</div>
						<div class="col-sm-7">
							<div id="wb_Carousel1" style="width:500px;height:500px;z-index:2363;overflow:hidden;">
								<div id="Carousel1" style="position:absolute">
									<div class="frame" style="z-index: 1; position: absolute; top: 0px; left: 0px; display: block;">
										<div id="Layer321" style="position:absolute;text-align:left;left:11px;top:5px;width:482px;height:434px;z-index:2353;">
										</div>
									</div>
									<div class="frame" style="z-index: 0; position: absolute; top: 0px; left: 0px; display: none;">
										<div id="Layer322" style="position:absolute;text-align:left;left:11px;top:5px;width:482px;height:434px;z-index:2354;">
										</div>
									</div>
								</div>
								<div id="Carousel1_back" style="position:absolute;left:200px;top:86%;width:35px;height:13px;z-index:999"><a style="cursor:pointer"><img alt="Back" style="border-width:0" src="<?php echo asset_url();?>images/previoustxt0.png"></a></div>
								<div id="Carousel1_next" style="position:absolute;right:200px;top:86%;width:35px;height:13px;z-index:999"><a style="cursor:pointer"><img alt="Next" style="border-width:0" src="<?php echo asset_url();?>images/nexttxt0.png"></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php if($tscategory_id == 1) { ?>
			<div class="panel panel-default tab-pane fade" id="featuredcarousel">
			</div>
			<?php } ?>
			<?php } else { ?>
			<div class="panel panel-default tab-pane fade in active" id="mainscreenads" style="min-height:690px;">
				<div class="panel-heading custom-panel-heading" style="text-align:left;padding-top: 5px !important;">
					<span class="pull-right-close" style="padding-top: 5px;"><a href="javascript:ShowObjectWithEffect('Layer275', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
				</div>
				<div class="panel-inner">
					<div id="Layer222" style="position:absolute;text-align:center;left:0px;top:50px;width:1027px;height:581px;border:0px;">
						<div id="Layer222_Container" style="width:1027px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
							<div id="wb_Shape291" style="position:absolute;left:566px;top:330px;width:137px;height:32px;">
								<a href="javascript:ShowObjectWithEffect('Layer275', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');"><div id="Shape291"><div id="Shape291_text"><span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Ok</span></div></div></a>
							</div>
							<div id="wb_Text760" style="position:absolute;left:565px;top:206px;width:333px;height:52px;text-align:left;">
								<span style="color:#2D2D2D;font-family:Arial;font-size:15px;">To add <strong>An Advertising with a great result</strong>, you first have to complete adding your products, create Real in 3D products, Cataogues and Videos.</span>
							</div>
							<div id="wb_Text761" style="position:absolute;left:563px;top:174px;width:333px;height:22px;text-align:left;">
								<span style="color:#FF6347;font-family:Arial;font-size:19px;"><strong>Oops..</strong></span>
							</div>
							<div id="wb_Image42" style="position:absolute;left:55px;top:7px;width:489px;height:489px;">
								<img src="<?php echo asset_url();?>images/businessman-toons.png" id="Image42" alt="">
							</div>
							<div id="wb_Text762" style="position:absolute;left:567px;top:271px;width:333px;height:28px;text-align:left;">
								<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Start with " <strong>My Desksite</strong>" icon to </span><span style="color:#808080;font-family:Arial;font-size:11px;">build </span><span style="color:#2D2D2D;font-family:Arial;font-size:11px;">you site and add your products.</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<div id="accessDeniedModal2" class="modal fade" role="dialog">
  	<div class="modal-dialog" style="width:525px;">
    	<div class="modal-content" style="border-radius:0px;margin-top:25%;">
      		<div class="modal-body">
      			<div class="row" style="padding-top:10px;">
      				<div class="col-sm-2"></div>
      				<div class="col-sm-8">
	      				<div style="text-align: center;">
							<span style="color: #F05539; font-family: 'Arial Black'; font-size: 16px;">ACCESS DENIED</span>
						</div>
						<br><br>
						<div style="text-align: center;">
							<img src="<?php echo asset_url();?>images/padlock-154684_640.png" width="100px;"/>
						</div>
						<div style="text-align: center;">
							We are so sorry. We have created this unique <br>feature
							for only <strong>BLACK HORSE</strong> member
						</div>
					</div>
					<div class="col-sm-2"></div>
      			</div>
      			<br>
      			<div class="row text-center">
      				<a href="javascript:upgradeMyBusinessPlan();" class="btn btn-sm btn-danger-custom" style="width:150px;">Upgrade</a>
      				<a href="javascript:cancelAccessDeniedPopup();" class="btn btn-sm btn-danger-custom" style="width:150px;">Cancel</a>
      			</div>
      			<br><br>
      		</div>
    	</div>
  	</div>
</div>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script>
<?php if($tsplanid == 1) { ?>
$('#accessDeniedModal2').modal({show:true,backdrop: 'static',keyboard: false});
function upgradeMyBusinessPlan() {
	ShowObjectWithEffect('Layer275', 0, 'dropup', 500, 'easeInBounce');
	getMyPackages();
}
function cancelAccessDeniedPopup() {
	ShowObjectWithEffect('Layer275', 0, 'dropup', 500, 'easeInBounce');
	ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');
}
<?php }?>
var Carousel1Opts =
{
   delay: 5000,
   duration: 500,
   easing: 'swing',
   mode: 'fade',
   direction: '',
   pagination: false,
   start: 0
};
$("#Carousel1").carouseleffects(Carousel1Opts);
$("#Carousel1_back a").click(function()
{
   $('#Carousel1').carouseleffects('prev');
});
$("#Carousel1_next a").click(function()
{
   $('#Carousel1').carouseleffects('next');
});
function ajaxindicatorstart(text)
{
	if(jQuery('body').find('#resultLoading').attr('id') != 'resultLoading'){
	jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="<?php echo asset_url();?>images/loading.gif" alt=""><div>'+text+'</div></div><div class="bg"></div></div>');
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

function openWebsiteBackgrounds() {
	$.get(base_url+"mystation/desksite/backgroundimages",{},function(data){
		$("#webbackgroundnav").html(data);
	},'html');
}
function openMainProducts() {
	$.get(base_url+"mystation/desksite/viewmainproducts",{},function(data){
		$("#mainproductnav").html(data);
	},'html');
}

function openSubProducts() {
	$.get(base_url+"mystation/desksite/viewsubproducts",{},function(data){
		$("#subproductnav").html(data);
	},'html');
}

function openHoteSaleMenu() {
	$.get(base_url+"mystation/desksite/hotsales",{},function(data){
		$("#productnav").html("");
		$("#newarrivalnav").html("");
		$("#hotesalesnav").html(data);
	},'html');
}

function openNewArrivalMenu() {
	$.get(base_url+"mystation/desksite/newarrivals",{},function(data){
		$("#productnav").html("");
		$("#hotesalesnav").html("");
		$("#newarrivalnav").html(data);
	},'html');
}

</script>
