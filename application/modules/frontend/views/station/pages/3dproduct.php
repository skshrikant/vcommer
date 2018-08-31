<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="<?php echo asset_url();?>js/jquery.imgareaselect.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo asset_url();?>css/imgareaselect.css">
<link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/imgareaselect-default.css" />  
<script type="text/javascript" src="<?php echo asset_url();?>js/jquery.imgareaselect.js" > </script>

<div class="row editaccount_outer">
	<div class="col-md-2 account-left-nav"> 
		<div class="col-md-12" style="padding: 6px;">
			<div class="account-image">
				<a href="javascript:false;"> <img class="hover" alt="" src="<?php echo asset_url();?>images/3Dpro.png"></a>
			</div>
			<div class="account-image" style="padding-top: 3px;">
				<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Real In 3D Pro.</span>
			</div>
			<div class="account-main-nav" style="padding-top: 55px;">
				<ul class="nav nav-tabs nav-tabs-custom">
				  	<li class="active"><a data-toggle="tab" href="#addproduct" onclick="openAdd3Dproduct();" id="add3dpro">Add <br><span>Real In 3D Products</span></a></li>
				  	<li><a data-toggle="tab" href="#editproduct" onclick="openEdit3Dproduct();" id="edit3dpro">"View | Edit" <br><span>Real In 3D Products</span></a></li>
				</ul>
			</div>
			<div class="account-image" style="padding-top: 40px;">
				<span style="color:#FFFFFF;font-family:Arial;font-size:11px;">Your Subscription Package Allows You To Add Up To </span>
			</div>
			<div class="account-image" style="padding-top: 3px;">
				<span style="color:#FFFFFF;font-family:Impact;font-size:48px;"><?php echo $max_3dpro;?></span>
			</div>
			<div class="account-image" style="padding-top: 3px;">
				<span style="color:#FFFFFF;font-family:Georgia;font-size:13px;">R3D Products</span>
		    </div>
		    <!-- div class="" style="text-align: center;padding-top: 100px;">
			<span style="color: #FFFFFF; font-family: Arial; font-size: 11px;">TRADE</span><br>
				<span style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">STATION</span><br>
				<span style="color: #FFFFFF; font-family: Arial; font-size: 8px;">Copyrights
							| TRDSTATION 2013-<br>2016@All Rights Reserved</span>
			</div-->
		</div>
	</div>
	<div class="col-md-10 account-content-area">
			
		<div class="tab-content main-tab-content">
			<div class="panel panel-default tab-pane fade in active" id="addproduct">
				<?php //$rr = count($product);  $rr=0; if($rr > 0) { ?>
					<?php include 'subpages/add3dproduct.php';?>	
				<?php //} else { ?>	
					<?php //include 'subpages/message3dproduct.php';?>
				<?php //} ?>	
				
			</div>
			<div class="panel panel-default tab-pane fade" id="editproduct">
			</div>
			<div class="panel panel-default tab-pane fade" id="subusers" style="background-color: #DCDCDC;">
			</div>
		</div>
	</div>
</div>
<div id="accessDeniedModal5" class="modal fade" role="dialog">
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
<div id="promodal">

</div>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script>
<?php if($tsplanid == 1) { ?>
$('#accessDeniedModal5').modal({show:true,backdrop: 'static',keyboard: false});
function upgradeMyBusinessPlan() {
	ShowObjectWithEffect('Layer108', 0, 'dropup', 500, 'easeInBounce');
	getMyPackages();
}
function cancelAccessDeniedPopup() {
	ShowObjectWithEffect('Layer108', 0, 'dropup', 500, 'easeInBounce');
	ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');
}
<?php }?>
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
