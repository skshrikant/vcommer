<div class="row editaccount_outer">
	<!-- div class="trd-trade-mark" style="text-align:center;width:150px;position:absolute;bottom:80px;">
		<div><span style="color:#FFFFFF;font-family:Arial;font-size:11px;">TRADE</span></div>
		<div><span style="color:#FA5C43;font-family:Impact;font-size:20px;letter-spacing:0.07px;">STATION</span></div>
		<div><span style="color:#FFFFFF;font-family:Arial;font-size:8px;">Copyrights | TRDSTATION 2013-2016@All Rights Reserved</span></div>
	</div-->
	<div class="col-md-2 account-left-nav"> 
		<div class="col-md-12" style="padding: 9px;">
			<div class="account-image">
				<a href="javascript:false;"> 
					<img class="hover" alt="" class="img-circle" src="<?php echo asset_url();?>images/Desksite-small.png">
				</a>
			</div>
			<div style="color:#FFFFFF;font-family:Arial;font-size:13px;text-align: center;padding-bottom: 15px;">My Desksite</div>
		</div>
		<div class="col-md-12" style="padding: 9px;">
			<div class="step-count-ds" id="step_count_ds">
				<div><span style="font-size:13px;">STEP</span></div>
				<?php if($pro_step == 0) { ?>
				<div>
					<span style="font-size:64px;">
						<strong>1</strong><span style="color: #FFFFFF; font-family: Arial; font-size: 12px;vertical-align: middle;">of 2 </span>
					</span>
				</div>
				<div>
					<span style="font-size:13px;">ADD<br>IMAGES AND<br> BACKGROUNDS</span>
				</div>
				<?php } else if($pro_step == 1) { ?>
				<div><span style="font-size:64px;"><strong>2</strong>
		     	<span style="color: #FFFFFF; font-family: Arial; font-size: 12px;vertical-align: middle;">of 2 </span>
			  	</span></div><div><span style="font-size:13px;">ADD<br>MAIN PRODUCTS</span></div>
				<?php } else if($pro_step == 2) { ?>
				
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="col-md-10 account-content-area">
		<div class="tab-content main-tab-content">
			<div class="panel panel-default tab-pane fade in active" id="ranking" style="height:758px;">
			  	<div class="panel-heading custom-panel-heading">
			  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer169', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
			  	</div>
			  	<div class="panel-body panel-body-custom" id="ds_bg_image_page" style="display:<?php if($pro_step == 0){ ?>block;<?php } else { ?>none;<?php } ?>">		
			  	<?php if($pro_step == 0) { ?>
			  	<form name="desksite_bg_img_main" id="desksite_bg_img_main" action="" enctype="multipart/form-data" method="post">
			  		<div class="personal_info_div" id="desk_site_step_1" style="padding:0px 60px;">
			  			<div class="row" style="margin-top:30px;">
				  			<div class="col-sm-6" id="wb_Text358" style="z-index:2515;text-align:left;">
								<div style="margin-bottom:10px;"><span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Main Desksite Background/Slide Show</span></div>
								<div style="margin-bottom:10px;">
									<span class="desk-site-text-sm">The Desksite is a new vision of websites. For best result, perfect impression of you business and high ranking by the visitors, please follow the bellow instructions:<br></span>
								</div>
								<div>
									<span class="desk-site-text-sm">The uploaded image ( background):<br></span>
									<ul class="fa-ul">
										<li><i class="fa-li fa fa-asterisk"></i> <span class="desk-site-text-sm">Should not include any text.</span></li>
										<li><i class="fa-li fa fa-asterisk"></i> <span class="desk-site-text-sm">To be in jpg format, Dimensions: 1280*625 Pixel, 100 Dpi, Max. Size: 400 Kb.</span></li>
										<li><i class="fa-li fa fa-asterisk"></i> <span class="desk-site-text-sm">To be simple, and reflect the major scope of your business.</span></li>
										<li><i class="fa-li fa fa-asterisk"></i> <span class="desk-site-text-sm">For best appearance align your design target in the center area</span></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-6">
								<form name="desksite_bg_img" id="desksite_bg_img" action="" enctype="multipart/form-data" method="post">
									<div class="col-sm-6 form-group">
										<div>
											<input type="file" name="ds_background1" id="ds_background_1" class="ds-background" onchange="setBackground('ds_background_1',this,1280,625,400);"/>
										</div>
										<div class="messageContainer"></div>
									</div>
									<div class="col-sm-6 form-group">
										<div>
											<input type="file" name="ds_background2" id="ds_background_2" class="ds-background" onchange="setBackground('ds_background_2',this,1280,625,400);"/>
										</div>
										<div class="messageContainer"></div>
									</div>
									<div class="col-sm-4 text-center ds-bg-btn-container" style="padding-top: 40px;">
<!-- 										<input type="submit" name="ds_bg_submit" id="ds_bg_submit_btn" class="ds-bg-btn" value="Upload"> -->
									</div>
								</form>
							</div>
						</div>
						<div class="row" style="margin-top:40px;">
				  			<div class="col-sm-6" id="wb_Text358" style="z-index:2515;text-align:left;">
								<div style="margin-bottom:10px;"><span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Information Images/Slide Show</span></div>
								<div style="margin-bottom:10px;">
									<span class="desk-site-text-sm">Information images are the images appear in a slide show along with your information in search result, it could be your logo and one of your unique product..etc<br></span>
								</div>
								<div>
									<div>
										<span class="desk-site-text-sm">The uploaded image:</span>
										<span class="desk-site-text-sm pull-right"><!-- a href="#" class="style19" onclick="ShowObjectWithEffect('Layer518', 1, 'scale', 500);return false;">Show me example</a--></span>
									</div>
									
									<ul class="fa-ul">
										<li><i class="fa-li fa fa-asterisk"></i> <span class="desk-site-text-sm">To be in jpg format, Dimensions: 218*177 Pixel, 75 Dpi, Max. Size: 60 Kb.</span></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-6">
								<form name="profileinfo_frm" id="profileinfo_frm" action="" enctype="multipart/form-data" method="post">
									<div class="col-sm-4 form-group">
										<div>
											<input type="file" name="ds_info_img1" id="ds_info_img_1" class="ds-background-md" onchange="setBackground('ds_info_img_1',this,218,177,60);"/>
										</div>
										<div class="messageContainer"></div>
									</div>
									<div class="col-sm-4 form-group">
										<div>
											<input type="file" name="ds_info_img2" id="ds_info_img_2" class="ds-background-md" onchange="setBackground('ds_info_img_2',this,218,177,60);"/>
										</div>
										<div class="messageContainer"></div>
									</div>
									<div class="col-sm-4 text-center ds-bg-btn-container" style="margin-top:25px;">
<!-- 										<input type="submit" name="ds_info_submit" id="ds_info_submit_btn" class="ds-bg-btn" value="Upload"> -->
									</div>
								</form>
							</div>
						</div>
						<div class="row" style="margin-top:40px;">
				  			<div class="col-sm-6" id="wb_Text358" style="z-index:2515;text-align:left;">
								<div style="margin-top:30px;margin-bottom:10px;"><span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Company " About Us" Images</span></div>
								<div style="margin-bottom:10px;">
									<span class="desk-site-text-sm">Images will be shown in your " About Us " tab and in a slide show..<br></span>
								</div>
								<div>
									<div>
										<span class="desk-site-text-sm">The uploaded image:</span>
									</div>
									
									<ul class="fa-ul">
										<li><i class="fa-li fa fa-asterisk"></i> <span class="desk-site-text-sm">To be in jpg, Dimensiones: 500*345 Pixel, Resolution 75dpi, Max size allowed: 80 kb</span></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-6">
								<form name="company_img_frm" id="company_img_frm" action="" enctype="multipart/form-data" method="post">
									<div class="col-sm-8">
										<div class="col-sm-6 form-group" style="margin-bottom:10px;">
											<div>
												<input type="file" name="compn_img1" id="ds_compn_img_1" class="ds-background-sm" onchange="setBackground('ds_compn_img_1',this,500,345,80);"/>
											</div>
											<div class="messageContainer"></div>
										</div>
										<div class="col-sm-6 form-group" style="margin-bottom:10px;">
											<div>
												<input type="file" name="compn_img2" id="ds_compn_img_2" class="ds-background-sm" onchange="setBackground('ds_compn_img_2',this,500,345,80);"/>
											</div>
											<div class="messageContainer"></div>
										</div>
										<div class="col-sm-6 form-group">
											<div>
												<input type="file" name="compn_img3" id="ds_compn_img_3" class="ds-background-sm" onchange="setBackground('ds_compn_img_3',this,500,345,80);"/>
											</div>
											<div class="messageContainer"></div>
										</div>
										<div class="col-sm-6 form-group">
											<div>
												<input type="file" name="compn_img4" id="ds_compn_img_4" class="ds-background-sm" onchange="setBackground('ds_compn_img_4',this,500,345,80);"/>
											</div>
											<div class="messageContainer"></div>
										</div>
									</div>
									<div class="col-sm-4 text-center ds-bg-btn-container" style="padding-top:95px;">
<!-- 										<input type="submit" name="ds_compn_submit" id="ds_compn_submit_btn" class="ds-bg-btn" value="Upload"> -->
									</div>
								</form>
							</div>
						</div>
						<br><br>
						<div class="pull-right">
							<input type="submit" name="ds_compn_submit_main" class="btn btn-sm btn-danger-custom" value="Save & Continue"/>
						</div>
						<br><br>
						<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			  		</div>
			  		</form>
			  		<?php } ?>
				</div>
				<div class="panel-body panel-body-custom" id="ds_product_page" style="display:<?php if($pro_step == 1){ ?>block;<?php } else { ?>none;<?php } ?>">
				<?php if($pro_step <= 1) { ?>
					<?php include 'subpages/buyermainproduct.php';?>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script>
<?php if($tsplanid == 1) { ?>
$('#accessDeniedModal1').modal({show:true,backdrop: 'static',keyboard: false});
function upgradeMyBusinessPlan() {
	ShowObjectWithEffect('Layer130', 0, 'dropup', 500, 'easeInBounce');
	getMyPackages();
}
function cancelAccessDeniedPopup() {
	ShowObjectWithEffect('Layer130', 0, 'dropup', 500, 'easeInBounce');
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

$('#TextArea11').on('keyup',function(){
	$("#other-terms").prop('checked', true);
    var vcount = parseInt($(this).val().length);
    var rem = 400 - vcount;
    $("#termsoption-area").html(rem);
});

function setBackground(id,input,width,height,size) {
  	if (input.files && input.files[0]) {
    	var reader = new FileReader();
       	reader.onload = function (e) {
       		var ext = input.files[0].name.split('.').pop();
       		var file_size = parseInt(input.files[0].size);
       		var filesizeinkb = (file_size/1024);
       		var image = new Image();
            image.src = e.target.result;
            image.onload = function () {
                var imgheight = this.height;
                var imgwidth = this.width;
                if(ext == 'jpg' || ext == 'jpeg') {
	                if(filesizeinkb > size) {
	                	alert("Image size should be "+size+"kb max.");
	                    $('#'+id).val('');
	                } else {
		                if (imgwidth != width || imgheight != height) {
		                    alert("Image dimensions should be "+width+"*"+height+" Pixel.");
		                    $('#'+id).val('');
		                } else {
		                	$('#'+id).css('background-image', 'url('+e.target.result+')').css('background-size','cover');
		                }
	                }
                } else {
                	alert("Image should be JPG or JPEG.");
                    $('#'+id).val('');
                }
            };
      	}
        reader.readAsDataURL(input.files[0]);
   	}
}

function setMaxBackground(id,input,width,size) {
  	if (input.files && input.files[0]) {
    	var reader = new FileReader();
       	reader.onload = function (e) {
       		var ext = input.files[0].name.split('.').pop();
       		var file_size = parseInt(input.files[0].size);
       		var filesizeinkb = (file_size/1024);
       		var image = new Image();
            image.src = e.target.result;
            image.onload = function () {
                var imgwidth = this.width;
                if(ext == 'jpg' || ext == 'jpeg') {
	                if(filesizeinkb > size) {
	                	alert("Image size should be "+size+"kb max.");
	                    $('#'+id).val('');
	                } else {
		                if (imgwidth > width) {
		                    alert("Image max width should be "+width+" Pixel.");
		                    $('#'+id).val('');
		                } else {
		                	$('#'+id).css('background-image', 'url('+e.target.result+')').css('background-size','cover');
		                }
	                }
                } else {
                	alert("Image should be JPG or JPEG.");
                    $('#'+id).val('');
                }
            };
      	}
        reader.readAsDataURL(input.files[0]);
   	}
}

$(document).ready(function(){
	$('#desksite_bg_img').bootstrapValidator({
	 container: function($field, validator) {
     	return $field.parent().next('.messageContainer');
     },
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
    	   	ds_background1: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Desksite Background Image is required'
                 	},
                 	file: {
                        extension: 'jpeg,jpg',
                        type: 'image/jpeg,image/jpg',
                        maxSize: 400*1024,   // 400KB
                        message: 'The selected file is not valid'
                    }
             	}
    	   	},
    	   	ds_background2: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Desksite Background Image is required'
                 	},
                 	file: {
                        extension: 'jpeg,jpg',
                        type: 'image/jpeg,image/jpg',
                        maxSize: 400*1024,   // 400KB
                        message: 'The selected file is not valid'
                    }
             	}
    	   	},
		     
		}
	}).on('error.field.bv', function(e, data) {
		if (data.bv.getSubmitButton()) {
			data.bv.disableSubmitButtons(false);
		}
   	}).on( 'status.field.bv', function( e, data ) {
    	$( '#ds_bg_submit_btn').attr( 'disabled', false );
    }).on('success.form.bv', function(e) {
	   // Prevent form submission
	   e.preventDefault();
	   saveDsBackground();
	});
});
function saveDsBackground() {
	ajaxindicatorstart("Please wait .. while we save images...");
	var options = {
			target : '#response', // target element(s) to be updated with server response 
			beforeSubmit : showDsBackgroundRequest, // pre-submit callback 
			success :  showDsBackgroundResponse,
			url : base_url+'mystation/desksite/uploaddsbackground',
			semantic : true,
			dataType : 'json'
		};
	$('#desksite_bg_img').ajaxSubmit(options);
}
function showDsBackgroundRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showDsBackgroundResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 0) {
		alert(resp.msg);
	} else {
		//alert(resp.msg);
	}
}

$(document).ready(function(){
	$('#website_bg_frm').bootstrapValidator({
	 container: function($field, validator) {
     	return $field.parent().next('.messageContainer');
     },
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
    		website_img1: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Website Image is required'
                 	},
                 	file: {
                        extension: 'jpeg,jpg',
                        type: 'image/jpeg,image/jpg',
                        maxSize: 400*1024,   // 400KB
                        message: 'The selected file is not valid'
                    }
             	}
    	   	},
    	   	website_img2: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Website Image is required'
                 	},
                 	file: {
                        extension: 'jpeg,jpg',
                        type: 'image/jpeg,image/jpg',
                        maxSize: 400*1024,   // 400KB
                        message: 'The selected file is not valid'
                    }
             	}
    	   	},
		     
		}
	}).on('error.field.bv', function(e, data) {
		if (data.bv.getSubmitButton()) {
			data.bv.disableSubmitButtons(false);
		}
   	}).on( 'status.field.bv', function( e, data ) {
    	$( '#ds_website_img_btn').attr( 'disabled', false );
    }).on('success.form.bv', function(e) {
	   // Prevent form submission
	   e.preventDefault();
	   saveWebsiteBackground();
	});
});
function saveWebsiteBackground() {
	ajaxindicatorstart("Please wait .. while we save images...");
	var options = {
			target : '#response', // target element(s) to be updated with server response 
			beforeSubmit : showWebsiteBackgroundRequest, // pre-submit callback 
			success :  showWebsiteBackgroundResponse,
			url : base_url+'mystation/desksite/uploadwebsitebackground',
			semantic : true,
			dataType : 'json'
		};
	$('#website_bg_frm').ajaxSubmit(options);
}
function showWebsiteBackgroundRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showWebsiteBackgroundResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 0) {
		alert(resp.msg);
	} else {
		//alert(resp.msg);
	}
}

$(document).ready(function(){
	$('#profileinfo_frm').bootstrapValidator({
	 container: function($field, validator) {
     	return $field.parent().next('.messageContainer');
     },
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
    		ds_info_img1: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Information Image is required'
                 	},
                 	file: {
                        extension: 'jpeg,jpg',
                        type: 'image/jpeg,image/jpg',
                        maxSize: 60*1024,   // 400KB
                        message: 'The selected file is not valid'
                    }
             	}
    	   	},
    	   	ds_info_img2: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Information Image is required'
                 	},
                 	file: {
                        extension: 'jpeg,jpg',
                        type: 'image/jpeg,image/jpg',
                        maxSize: 60*1024,   // 400KB
                        message: 'The selected file is not valid'
                    }
             	}
    	   	},
		     
		}
	}).on('error.field.bv', function(e, data) {
		if (data.bv.getSubmitButton()) {
			data.bv.disableSubmitButtons(false);
		}
   	}).on( 'status.field.bv', function( e, data ) {
    	$( '#ds_info_submit_btn').attr( 'disabled', false );
    }).on('success.form.bv', function(e) {
	   // Prevent form submission
	   e.preventDefault();
	   saveProfileInfoImage();
	});
});
function saveProfileInfoImage() {
	ajaxindicatorstart("Please wait .. while we save images...");
	var options = {
			target : '#response', // target element(s) to be updated with server response 
			beforeSubmit : showInfoImageRequest, // pre-submit callback 
			success :  showInfoImageResponse,
			url : base_url+'mystation/desksite/uploadinfoimage',
			semantic : true,
			dataType : 'json'
		};
	$('#profileinfo_frm').ajaxSubmit(options);
}
function showInfoImageRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showInfoImageResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 0) {
		alert(resp.msg);
	} else {
		//alert(resp.msg);
	}
}

$(document).ready(function(){
	$('#company_img_frm').bootstrapValidator({
	 container: function($field, validator) {
     	return $field.parent().next('.messageContainer');
     },
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
    		compn_img1: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Company Image is required'
                 	},
                 	file: {
                        extension: 'jpeg,jpg',
                        type: 'image/jpeg,image/jpg',
                        maxSize: 60*1024,   // 400KB
                        message: 'The selected file is not valid'
                    }
             	}
    	   	},
    	   	compn_img2: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Company Image is required'
                 	},
                 	file: {
                        extension: 'jpeg,jpg',
                        type: 'image/jpeg,image/jpg',
                        maxSize: 60*1024,   // 400KB
                        message: 'The selected file is not valid'
                    }
             	}
    	   	},
    	   	compn_img3: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Company Image is required'
                 	},
                 	file: {
                        extension: 'jpeg,jpg',
                        type: 'image/jpeg,image/jpg',
                        maxSize: 60*1024,   // 400KB
                        message: 'The selected file is not valid'
                    }
             	}
    	   	},
    	   	compn_img4: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Company Image is required'
                 	},
                 	file: {
                        extension: 'jpeg,jpg',
                        type: 'image/jpeg,image/jpg',
                        maxSize: 60*1024,   // 400KB
                        message: 'The selected file is not valid'
                    }
             	}
    	   	},
		     
		}
	}).on('error.field.bv', function(e, data) {
		if (data.bv.getSubmitButton()) {
			data.bv.disableSubmitButtons(false);
		}
   	}).on( 'status.field.bv', function( e, data ) {
    	$( '#ds_compn_submit_btn').attr( 'disabled', false );
    }).on('success.form.bv', function(e) {
	   // Prevent form submission
	   e.preventDefault();
	   saveCompanyInfoImage();
	});
});
function saveCompanyInfoImage() {
	ajaxindicatorstart("Please wait .. while we save images...");
	var options = {
			target : '#response', // target element(s) to be updated with server response 
			beforeSubmit : showCompanyInfoImageRequest, // pre-submit callback 
			success :  showCompanyInfoImageResponse,
			url : base_url+'mystation/desksite/uploadcompanyimage',
			semantic : true,
			dataType : 'json'
		};
	$('#company_img_frm').ajaxSubmit(options);
}
function showCompanyInfoImageRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showCompanyInfoImageResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 0) {
		alert(resp.msg);
	} else {
		//alert(resp.msg);
	}
}

$(document).ready(function(){
	$('#desksite_bg_img_main').bootstrapValidator({
	 container: function($field, validator) {
     	return $field.parent().next('.messageContainer');
     },
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
    	   	ds_background1: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Desksite Background Image is required'
                 	},
                 	file: {
                        extension: 'jpeg,jpg',
                        type: 'image/jpeg,image/jpg',
                        maxSize: 400*1024,   // 400KB
                        message: 'The selected file is not valid'
                    }
             	}
    	   	},
    	   	ds_background2: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Desksite Background Image is required'
                 	},
                 	file: {
                        extension: 'jpeg,jpg',
                        type: 'image/jpeg,image/jpg',
                        maxSize: 400*1024,   // 400KB
                        message: 'The selected file is not valid'
                    }
             	}
    	   	},
    	   	ds_info_img1: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Information Image is required'
                 	},
                 	file: {
                        extension: 'jpeg,jpg',
                        type: 'image/jpeg,image/jpg',
                        maxSize: 60*1024,   // 400KB
                        message: 'The selected file is not valid'
                    }
             	}
    	   	},
    	   	ds_info_img2: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Information Image is required'
                 	},
                 	file: {
                        extension: 'jpeg,jpg',
                        type: 'image/jpeg,image/jpg',
                        maxSize: 60*1024,   // 400KB
                        message: 'The selected file is not valid'
                    }
             	}
    	   	},
    	   	compn_img1: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Company Image is required'
                 	},
                 	file: {
                        extension: 'jpeg,jpg',
                        type: 'image/jpeg,image/jpg',
                        maxSize: 80*1024,   // 400KB
                        message: 'The selected file is not valid'
                    }
             	}
    	   	},
    	   	compn_img2: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Company Image is required'
                 	},
                 	file: {
                        extension: 'jpeg,jpg',
                        type: 'image/jpeg,image/jpg',
                        maxSize: 80*1024,   // 400KB
                        message: 'The selected file is not valid'
                    }
             	}
    	   	},
    	   	compn_img3: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Company Image is required'
                 	},
                 	file: {
                        extension: 'jpeg,jpg',
                        type: 'image/jpeg,image/jpg',
                        maxSize: 80*1024,   // 400KB
                        message: 'The selected file is not valid'
                    }
             	}
    	   	},
    	   	compn_img4: {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Company Image is required'
                 	},
                 	file: {
                        extension: 'jpeg,jpg',
                        type: 'image/jpeg,image/jpg',
                        maxSize: 80*1024,   // 400KB
                        message: 'The selected file is not valid'
                    }
             	}
    	   	},
		     
		}
	}).on('error.field.bv', function(e, data) {
		if (data.bv.getSubmitButton()) {
			data.bv.disableSubmitButtons(false);
		}
   	}).on( 'status.field.bv', function( e, data ) {
    	$( '#ds_bg_submit_btn').attr( 'disabled', false );
    }).on('success.form.bv', function(e) {
	   // Prevent form submission
	   e.preventDefault();
	   saveDsMainBackground();
	});
});
function saveDsMainBackground() {
	ajaxindicatorstart("Please wait .. while we save images...");
	var options = {
			target : '#response', // target element(s) to be updated with server response 
			beforeSubmit : showDsMainBackgroundRequest, // pre-submit callback 
			success :  showDsMainBackgroundResponse,
			url : base_url+'mystation/desksite/uploaddsbackgroundmain',
			semantic : true,
			dataType : 'json'
		};
	$('#desksite_bg_img_main').ajaxSubmit(options);
}
function showDsMainBackgroundRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showDsMainBackgroundResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 0) {
		alert(resp.msg);
	} else {
		//alert(resp.msg);
		saveImagesAndContinue();
	}
}

function selectScat(scat_id,input,name) {
	$("#ds_main_cat_"+input).val(scat_id);
	$("#ds_main_cat_label_"+input).html(name+' <span class="caret" style="color:#d9574d;"></span>');
	$('#mainproductfrm').bootstrapValidator ('revalidateField', 'main_product1');
	$('#mainproductfrm').bootstrapValidator ('revalidateField', 'main_category1');
	$('#mainproductfrm').bootstrapValidator ('revalidateField', 'main_product[]');
	$('#mainproductfrm').bootstrapValidator ('revalidateField', 'main_category[]');
}

function saveImagesAndContinue() {
	var html = '<div><span style="font-size:13px;">STEP</span></div><div><span style="font-size:64px;"><strong>2</strong>'
		      +'<span style="color: #FFFFFF; font-family: Arial; font-size: 12px;vertical-align: middle;">of 2 </span>'
			  +'</span></div><div><span style="font-size:13px;">ADD<br>MAIN PRODUCTS</span></div>';
	$("#step_count_ds").html(html);
	$.get(base_url+"mystation/desksite/newproducts",{},function(data){
		$("#ds_bg_image_page").hide();
		$("#ds_product_page").html(data);
		$("#ds_product_page").show();
	},'html');
}

                                  
function saveMainProducts() {
	ajaxindicatorstart("Please wait .. while we save products...");
	var options = {
			target : '#response', // target element(s) to be updated with server response 
			beforeSubmit : showMainProductRequest, // pre-submit callback 
			success :  showMainProductResponse,
			url : base_url+'mystation/desksite/buyer/saveproducts',
			semantic : true,
			dataType : 'json'
		};
	$('#mainproductfrm').ajaxSubmit(options);
}
function showMainProductRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showMainProductResponse(resp, statusText, xhr, $form){
	if(resp.status == 0) {
		alert(resp.msg);
	} else {
		//alert(resp.msg);
		getBuyerDeskside();
	}
	ajaxindicatorstop();
}
function displayHelpMenu(id) {
	$("#"+id).show();
}


</script>
