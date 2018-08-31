<div class="panel-heading custom-panel-heading" style="text-align:left;padding-top: 5px !important;">
	<span class="pull-right-close" style="padding-top: 5px;"><a href="javascript:ShowObjectWithEffect('Layer169', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
 </div>
<div class="panel-body panel-body-custom" id="product_bg_info">
	<br><br>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 bg-image-title">Main Desksite Background/Slide Show</div>
		<div class="col-sm-3"></div>
	</div>
	<br>
	<div class="row">
		<form name="desksite_bg_img" id="desksite_bg_img" action="" enctype="multipart/form-data" method="post">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-6">
						<input type="file" name="ds_background1" id="ds_background_1" class="ds-background" onchange="setBackground('ds_background_1',this,1280,625,400);" style="<?php if(!empty($busi_image['desksite_bg1'])) { ?>background-image:url(<?php echo asset_url();?><?php echo $busi_image['desksite_bg1'];?>);background-size:cover;<?php }?>"/>
					</div>
					<div class="col-sm-6">
						<input type="file" name="ds_background2" id="ds_background_2" class="ds-background" onchange="setBackground('ds_background_2',this,1280,625,400);" style="<?php if(!empty($busi_image['desksite_bg2'])) { ?>background-image:url(<?php echo asset_url();?><?php echo $busi_image['desksite_bg2'];?>);background-size:cover;<?php }?>"/>
					</div>
				</div>
			</div>
			<div class="col-sm-3" style="padding-top:35px;display:none;" id="ds_background_desksite"><input type="button" name="ds_bg_submit" id="ds_bg_submit_btn" class="ds-bg-btn" value="Save" onclick="saveDsBackground();"></div>
		</form>
	</div>
	<br><br><br>
	<?php if($tscategory_id != 3) { ?>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 bg-image-title">Desksite Background “ Smart phones and Devices”</div>
		<div class="col-sm-3"></div>
	</div>
	<br>
	<div class="row">
		<form name="website_bg_frm" id="website_bg_frm" action="" enctype="multipart/form-data" method="post">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-6">
						<input type="file" name="website_img1" id="ds_web_img_1" class="ds-background" onchange="setBackground('ds_web_img_1',this,480,800,400);" style="width:130px;height:190px;margin-left:160px;padding:190px 0 0 0;<?php if(!empty($busi_image['website_bg1'])) { ?>background-image:url(<?php echo asset_url();?><?php echo $busi_image['website_bg1'];?>);background-size:cover;<?php }?>"/>
					</div>
					<!--<div class="col-sm-6">
						<input type="file" name="website_img2" id="ds_web_img_2" class="ds-background" onchange="setBackground('ds_web_img_2',this,1280,625,400);" style="<?php if(!empty($busi_image['website_bg2'])) { ?>background-image:url(<?php echo asset_url();?><?php echo $busi_image['website_bg2'];?>);background-size:cover;<?php }?>"/>
					</div>-->
				</div>
			</div>
			<div class="col-sm-3" style="padding-top:35px;display:none;" id="ds_web_img_desksite"><input type="button" name="ds_website_submit" id="ds_website_img_btn" class="ds-bg-btn" value="Save" onclick="saveWebsiteBackground();"></div>
		</form>
	</div>
	<br><br><br>
	<?php } ?>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 bg-image-title">Information Images/Slide Show</div>
		<div class="col-sm-3"></div>
	</div>
	<br>
	<div class="row">
		<form name="profileinfo_frm" id="profileinfo_frm" action="" enctype="multipart/form-data" method="post">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-4">
						<input type="file" name="ds_info_img1" id="ds_info_img_1" class="ds-background-md" onchange="setBackground('ds_info_img_1',this,218,177,60);" style="<?php if(!empty($busi_image['info_img1'])) { ?>background-image:url(<?php echo asset_url();?><?php echo $busi_image['info_img1'];?>);background-size:cover;<?php }?>"/>
					</div>
					<div class="col-sm-4">
						<input type="file" name="ds_info_img2" id="ds_info_img_2" class="ds-background-md" onchange="setBackground('ds_info_img_2',this,218,177,60);" style="<?php if(!empty($busi_image['info_img2'])) { ?>background-image:url(<?php echo asset_url();?><?php echo $busi_image['info_img2'];?>);background-size:cover;<?php }?>"/>
					</div>
					<div class="col-sm-2"></div>
				</div>
			</div>
			<div class="col-sm-3" style="padding-top:30px;display:none;" id="ds_info_img_desksite"><input type="button" name="ds_info_submit" id="ds_info_submit_btn" class="ds-bg-btn" value="Save" onclick="saveProfileInfoImage();"></div>
		</form>
	</div>
	<br><br><br>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 bg-image-title">Company "About Us" Images</div>
		<div class="col-sm-3"></div>
	</div>
	<br>
	<div class="row">
		<form name="company_img_frm" id="company_img_frm" action="" enctype="multipart/form-data" method="post">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-3">
						<input type="file" name="compn_img1" id="ds_compn_img_1" class="ds-background-sm" onchange="setBackground('ds_compn_img_1',this,500,345,80);" style="<?php if(!empty($busi_image['company_info_img1'])) { ?>background-image:url(<?php echo asset_url();?><?php echo $busi_image['company_info_img1'];?>);background-size:cover;<?php }?>"/>
					</div>
					<div class="col-sm-3">
						<input type="file" name="compn_img2" id="ds_compn_img_2" class="ds-background-sm" onchange="setBackground('ds_compn_img_2',this,500,345,80);" style="<?php if(!empty($busi_image['company_info_img2'])) { ?>background-image:url(<?php echo asset_url();?><?php echo $busi_image['company_info_img2'];?>);background-size:cover;<?php }?>"/>
					</div>
					<div class="col-sm-3">
						<input type="file" name="compn_img3" id="ds_compn_img_3" class="ds-background-sm" onchange="setBackground('ds_compn_img_3',this,500,345,80);" style="<?php if(!empty($busi_image['company_info_img3'])) { ?>background-image:url(<?php echo asset_url();?><?php echo $busi_image['company_info_img3'];?>);background-size:cover;<?php }?>"/>
					</div>
					<div class="col-sm-3">
						<input type="file" name="compn_img4" id="ds_compn_img_4" class="ds-background-sm" onchange="setBackground('ds_compn_img_4',this,500,345,80);" style="<?php if(!empty($busi_image['company_info_img4'])) { ?>background-image:url(<?php echo asset_url();?><?php echo $busi_image['company_info_img4'];?>);background-size:cover;<?php }?>"/>
					</div>
				</div>
			</div>
			<div class="col-sm-3" style="padding-top:30px;display:none;" id="ds_compn_img_desksite"><input type="button" name="ds_compn_submit" id="ds_compn_submit_btn" class="ds-bg-btn" value="Save" onclick="saveCompanyInfoImage();"></div>
		</form>
	</div>
	<br><br><br><br><br><br><br>
</div>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script>

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
		                	var str = id.substring(0, id.length - 1);
		                	$("#"+str+"desksite").show();
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

</script>
