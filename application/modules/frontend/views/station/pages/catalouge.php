<div class="row editaccount_outer">
	<div class="col-md-2 account-left-nav"> 
		<div class="col-md-12" style="padding: 6px;">
			<div class="account-image">
				<a href="javascript:false;"> <img class="hover" alt="" src="<?php echo asset_url();?>images/Catalogue1.png"></a>
			</div>
			<div class="account-image" style="padding-top: 3px;">
				<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">V-Catalouge</span>
			</div>
			<div class="account-main-nav" style="padding-top: 55px;">
				<ul class="nav nav-tabs nav-tabs-custom">
				  	<li class="active"><a data-toggle="tab" href="#addcatalouge" onclick="openAddCatalouge();">Add <br><span>My V-Catalouge</span></a></li>
				  	<li><a data-toggle="tab" href="#editcatalouge" onclick="openEditCatalouge();" id="edit_cat_btn">"View | Edit" <br><span>My V-Catalouge</span></a></li>
				</ul>
			</div>
			<div class="account-image" style="padding-top: 40px;">
				<span style="color:#FFFFFF;font-family:Arial;font-size:11px;">Your Subscription Package Allows You To Add Up To </span>
			</div>
			<div class="account-image" style="padding-top: 3px;">
				<span style="color:#FFFFFF;font-family:Impact;font-size:48px;"><?php echo $max_vc;?> </span>
			</div>
			<div class="account-image" style="padding-top: 3px;">
				<span style="color:#FFFFFF;font-family:Georgia;font-size:13px;">Virtual Catalouge</span>
		    </div>
		</div>
	</div>
	<div class="col-md-10 account-content-area">
		<div class="tab-content main-tab-content">
			<div class="panel panel-default tab-pane fade in active" id="addcatalouge">
				<?php include 'subpages/addcatalouge.php';?>
			</div>
			<div class="panel panel-default tab-pane fade" id="editcatalouge">
			</div>
		</div>
	</div>
</div>
<div id="vcatalogue_overlay_home" class="modal fade" style="background-color:#404040;z-index: 10000;">
    <div class="modal-dialog" style="background-color:#404040;width:1050px;">
        <div class="modal-content" style="background: transparent;box-shadow:none;-webkit-box-shadow:none;border: 0px;">
            <div style="position:absolute;right:0;width:50px;height:50px;z-index:5000;"><button type="button" class="pull-right" data-dismiss="modal" aria-hidden="true" style="background:transparent;border:0px;"><img src="<?php echo asset_url(); ?>images/newicons/closeround.png" id="Image47" alt="" style="width:35px;"></button></div>
            <div class="modal-body" style="width:1050px;height:640px;">
                <input type="hidden" id="pcatalogue_id" value="" />
                <div class="row">
                    <div class="col-md-1" style="float:left;padding:0px;width:155px;" id="catalogue_links">

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
<div id="vcatalogue_pic_modal" class="modal fade">
	<div class="modal-dialog" style="">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Add Vcatalogue Cover</h3>
			</div>
			<div class="modal-body" >
				<form id="cropimage" method="post" enctype="multipart/form-data" action="">
						<span><b>Upload Image:</b> <input type="file" name="catalogue-pic" id="catalogue-pic"  accept=".png,.jpg,.jpeg.gif" class="form-control" style="width:200px;display:inline-block;"/></span> <br><br>
						
						<input type="hidden" name="hdn-profile-id" id="hdn-profile-id" value="1" />
						<input type="hidden" name="x1" id="x1" value="" />
				        <input type="hidden" name="y1" id="y1" value="" />
				        <input type="hidden" name="x2" id="x2" value="" /> 
				        <input type="hidden" name="y2" id="y2" value="" />
				        <input type="hidden" name="width" id="width" value="200" />
				        <input type="hidden" name="height" id="height" value="200" />
				      	<!--  <input type="hidden" name="fullpath" id="fullpath" value="<?php //echo asset_url();?>" /> -->
						<input type="hidden" name="image_name" value="" id="image_name" />
						<div id="parent" style="position:relative;">
							<span id="thumbnail" style="display: inline-block;position:relative;">
								<img id="photo" src="#" alt="" title="" style="max-width:100%;display:none" />
							</span>
						</div>
						<div id="thumbs" style="padding:5px; width:600px"></div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" id="save_crop" class="btn btn-primary">Crop & Save</button>
			</div>
		</div>
	</div>
</div>
<div id="accessDeniedModal4" class="modal fade" role="dialog">
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
<link rel="stylesheet" href="<?php echo asset_url();?>css/imgareaselect.css">
<link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/imgareaselect-default.css" />  
<script type="text/javascript" src="<?php echo asset_url();?>js/jquery.imgareaselect.js" > </script>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script>
<?php if($tsplanid == 1) { ?>
$('#accessDeniedModal4').modal({show:true,backdrop: 'static',keyboard: false});
function upgradeMyBusinessPlan() {
	ShowObjectWithEffect('Layer124', 0, 'dropup', 500, 'easeInBounce');
	getMyPackages();
}
function cancelAccessDeniedPopup() {
	ShowObjectWithEffect('Layer124', 0, 'dropup', 500, 'easeInBounce');
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
