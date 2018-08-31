<style>
.myaccountimg {
	border: solid !important;
    border-color: rgba(128, 128, 128, 0.56)!important;
    border-radius: 73px !important;
    outline:none !important;
}
.country-dropdn {
	width:145px;
	background-color:#fff;
	border-color:1px solid #ccc;
	border-radius:0px;
	height:27px;
	background-image: url(../assets/images/menu_arrow.png);
	background-repeat: no-repeat;
	background-position: right center;
	padding-left:15px;
}
.shiipingport {
	width: 379px;
    height: 28px;
    line-height: 28px;
    border: 1px #DCDCDC solid;
    background-color: #FFFFFF;
    color: #000000;
    font-family: Arial;
    font-weight: normal;
    font-size: 13px;
    padding: 4px 0px 0px 15px;
    text-align: left;
    vertical-align: middle;
}
</style>
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
					<img class="hover" alt="" id="myaccountimg"  class="img-circle" src="<?php echo asset_url().$profile_img;?>" style="width:70px;height:70px;border:solid; border-radius: 50px;border-color: rgba(128, 128, 128, 0.56);">
			</div>
			<div style="color:#FFFFFF;font-family:Arial;font-size:13px;text-align: center;padding-bottom: 15px;">My Account</div>
			<div class="account-main-nav">
				<ul class="nav nav-tabs nav-tabs-custom">
				  	<li class="active"><a data-toggle="tab" href="#personal" onclick="openAccountInfo();">Personal <br><span>Information</span></a></li>
				  	<li><a data-toggle="tab" href="#company" onclick="openCompanyInfo();">Company <br><span>Information</span></a></li>
				  	<?php if($tscategory_id == 1) { 
				  		if($ts_subcat_id == 1) {  ?>
					  		<li><a data-toggle="tab" href="#factory" onclick="openFactoryInfo();">Factory <br><span>Information</span></a></li>
					  	<?php } ?>
					  	<li><a data-toggle="tab" href="#trade" onclick="openTradeInfo();">Trade / Export <br><span>Information</span></a></li>
					<?php } ?>  
					<?php if($tscategory_id != 3 ) { ?>	
					  	<li><a data-toggle="tab" href="#certificate" onclick="openCertificateInfo();">Edit <br><span>Certificates</span></a></li>
				  	<?php } ?>
				  	<?php if($tsuser_role == 1) {
				  		if($max_subuser != 0) { ?>
				  		<li><a data-toggle="tab" href="#subusers" onclick="openSubuserInfo();">View | Edit <br><span>Sub Users</span></a></li>
				  	<?php } }?>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-10 account-content-area">
		<div class="tab-content main-tab-content">
			<div class="panel panel-default tab-pane fade in active" id="personal">
			  	<?php include 'subpages/personalinfo.php';?>
			</div>
			<div class="panel panel-default tab-pane fade" id="company">
			</div>
			<div class="panel panel-default tab-pane fade" id="factory">
			</div>
			<div class="panel panel-default tab-pane fade" id="trade">
			</div>
			<div class="panel panel-default tab-pane fade" id="certificate">
			</div>
			<div class="panel panel-default tab-pane fade" id="subusers" style="background-color: #DCDCDC;">
			  	
			</div>
		</div>
	</div>
</div>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script>
var asset_url = "<?php echo asset_url();?>";
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
</script>
