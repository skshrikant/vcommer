<style>
	.form-group {
		margin-bottom:0px;
	}
	ul.dropdown-menu {
		background-color:#EEEEEE;
	}
	ul.dropdown-menu li a {
		text-decoration:none;
	}
	ul.dropdown-menu li a:hover {
		background-color:#ccc;
	}
	.custom-textarea {
    	border: 1px #DCDCDC solid;
	    background-color: #FFFFFF;
	    color: #A9A9A9;
	    font-family: Arial;
	    font-weight: normal;
	    font-size: 13px;
	    padding: 8px 10px 3px 8px;
	    text-align: left;
	    resize: none;
    }
    .input-required {
    	color: #F05539;
	    position: absolute;
	    left: 3px;
	    top: 5px;
    }
    .textarea-required {
    	color:#F05539;vertical-align: top;
    }
</style>
<div class="personal_info_div" id="desk_site_step_1" style="padding:0px 60px;">
	<div class="row">
		<div class="col-sm-12">
			<div class="row" style="margin-top:15px;">
		  		<div class="col-sm-12" style="text-align:left;">
					<div style="margin-bottom:10px;"><span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Main Services</span></div>
					<div style="margin-bottom:10px;">
						<span class="desk-site-text-sm">
						The Main Services are the scope of your business, such as ( Air Freight, Ocean Freight, land Freight, Port Agencies ...etc).<br>
						Fist, type your service then type a full description about it, and upload 4 related jpg images of size 500x345 and max file size 80 KB..
						</span>
					</div>
				</div>
			</div>
			<form name="mainservicefrm" id="mainservicefrm" action="" method="post">
				<input type="hidden" id="ms_count" value="3" />
				<div class="row" style="margin-top:30px;">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12" style="padding:0px;margin-bottom:0px;">
								<span class="input-required">*</span>
								<div class="form-group col-sm-2" >
									<div class="">
										<input type="text" name="main_service[]" id="ds_main_service_1" class="ds-product-input" placeholder="First Service" maxlength="23" onkeydown="revalInputField();"/>
									</div>
									<div class="messageContainer"></div>
									<div style="margin-top:5px;"><span style="color:#A9A9A9;font-family:Arial;font-size:9.3px;">Ex. Air Freight</span></div>
								</div>
								<div class="form-group col-sm-7" style="margin-left:12px;padding-left:11px;">
									<span class="input-required">*</span>
									<div class="">
										<select name="shipping_cate_id[]" id="shipping_cate_id_1" class="select-dropdown">
											<option value="">Select shipping main category</option>
											<?php foreach ($categories as $category) { ?>
											<option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
											<?php } ?>
										</select>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div>
								<div class="form-group col-sm-2" >
									&nbsp;
								</div>
								<div class="form-group col-sm-7" >
									<div class="">
										<span class="textarea-required">*</span>
										<textarea name="description[]" id="msdesk_1" rows="5" cols="68" class="custom-textarea" placeholder="Description" onkeydown="getMyText(this,1);" maxlength="4000"></textarea>
									</div>
									<div class="messageContainer"></div>
								</div>
								<div class="col-sm-3">
									<div>
										<span style="color:#666666;font-family:Arial;font-size:11px;">This description will be showing along with the 4 related images, as a web page, when a visitor click on the service link</span><br>
										<span style="color:#F05539;font-family:Arial;font-size:12px;" id="ms-desc-count-1">4000</span> <span style="color:#666666;font-family:Arial;font-size:9.3px;">Remining.....</span>
									</div>
							</div>
							</div>
						</div>
						<br>
						<div class="row">
							<span class="input-required">*</span>
							<div class="col-sm-2">
								<span style="color:#3C3C3C;font-family:Georgia;font-size:13px;"><span style="color:#F05539;">*</span>Add Related Images</span><br>
								<div style="margin-top:5px;"><span style="color:#A9A9A9;font-family:Arial;font-size:9.3px;">jpg format, Dimensions: 960 * 736 pixel, Resolution: 75 Dpi, with Max. size 160 KB </span></div>
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-3">
										<input type="file" name="msimg1[]" id="msimg_compn_img_1_1" class="ds-background-sm" onchange="setBackground('msimg_compn_img_1_1',this,960,736,160);"/>
									</div>
									<div class="col-sm-3">
										<input type="file" name="msimg1[]" id="msimg_compn_img_1_2" class="ds-background-sm" onchange="setBackground('msimg_compn_img_1_2',this,960,736,160);"/>
									</div>
									<div class="col-sm-3">
										<input type="file" name="msimg1[]" id="msimg_compn_img_1_3" class="ds-background-sm" onchange="setBackground('msimg_compn_img_1_3',this,960,736,160);"/>
									</div>
									<div class="col-sm-3">
										<input type="file" name="msimg1[]" id="msimg_compn_img_1_4" class="ds-background-sm" onchange="setBackground('msimg_compn_img_1_4',this,960,736,160);"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:30px;">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12" style="padding:0px;margin-bottom:0px;">
								<span class="input-required">*</span>
								<div class="form-group col-sm-2" >
									<div class="">
										<input type="text" name="main_service[]" id="ds_main_service_2" class="ds-product-input" placeholder="Second Service" maxlength="23"/>
									</div>
									<div class="messageContainer"></div>
									<div style="margin-top:5px;"><span style="color:#A9A9A9;font-family:Arial;font-size:9.3px;">Ex. Ocean Freight</span></div>
								</div>
								<div class="form-group col-sm-7" style="margin-left:12px;padding-left:11px;">
									<span class="input-required">*</span>
									<div class="">
										<select name="shipping_cate_id[]" id="shipping_cate_id_2" class="select-dropdown">
											<option value="">Select shipping main category</option>
											<?php foreach ($categories as $category) { ?>
											<option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
											<?php } ?>
										</select>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div>
								<div class="form-group col-sm-2" >
									&nbsp;
								</div>
								<div class="form-group col-sm-7" >
									<div class="">
										<span class="textarea-required">*</span>
										<textarea name="description[]" id="msdesk_2" rows="5" cols="68" class="custom-textarea" placeholder="Description" onkeydown="getMyText(this,2);" maxlength="4000"></textarea>
									</div>
									<div class="messageContainer"></div>
								</div>
								<div class="col-sm-3">
									<div>
										<span style="color:#666666;font-family:Arial;font-size:11px;">This description will be showing along with the 4 related images, as a web page, when a visitor click on the service link</span><br>
										<span style="color:#F05539;font-family:Arial;font-size:12px;" id="ms-desc-count-2">4000</span> <span style="color:#666666;font-family:Arial;font-size:9.3px;">Remining.....</span>
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<span class="input-required">*</span>
							<div class="col-sm-2">
								<span style="color:#3C3C3C;font-family:Georgia;font-size:13px;"><span style="color:#F05539;">*</span>Add Related Images</span>
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-3">
										<input type="file" name="msimg2[]" id="msimg_compn_img_2_1" class="ds-background-sm" onchange="setBackground('msimg_compn_img_2_1',this,960,736,160);"/>
									</div>
									<div class="col-sm-3">
										<input type="file" name="msimg2[]" id="msimg_compn_img_2_2" class="ds-background-sm" onchange="setBackground('msimg_compn_img_2_2',this,960,736,160);"/>
									</div>
									<div class="col-sm-3">
										<input type="file" name="msimg2[]" id="msimg_compn_img_2_3" class="ds-background-sm" onchange="setBackground('msimg_compn_img_2_3',this,960,736,160);"/>
									</div>
									<div class="col-sm-3">
										<input type="file" name="msimg2[]" id="msimg_compn_img_2_4" class="ds-background-sm" onchange="setBackground('msimg_compn_img_2_4',this,960,736,160);"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:30px;">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12" style="padding:0px;margin-bottom:0px;">
								<span class="input-required">*</span>
								<div class="form-group col-sm-2" >
									<div class="">
										<input type="text" name="main_service[]" id="ds_main_service_3" class="ds-product-input" placeholder="Third Service" maxlength="23"/>
									</div>
									<div class="messageContainer"></div>
									<div style="margin-top:5px;"><span style="color:#A9A9A9;font-family:Arial;font-size:9.3px;">Ex. Land Freight</span></div>
								</div>
								<div class="form-group col-sm-7" style="margin-left:12px;padding-left:11px;">
									<span class="input-required">*</span>
									<div class="">
										<select name="shipping_cate_id[]" id="shipping_cate_id_3" class="select-dropdown">
											<option value="">Select shipping main category</option>
											<?php foreach ($categories as $category) { ?>
											<option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
											<?php } ?>
										</select>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div>
								<div class="form-group col-sm-2" >
									&nbsp;
								</div>
								<div class="form-group col-sm-7" >
									<div class="">
										<span class="textarea-required">*</span>
										<textarea name="description[]" id="msdesk_3" rows="5" cols="68" class="custom-textarea" placeholder="Description" onkeydown="getMyText(this,3);" maxlength="4000"></textarea>
									</div>
									<div class="messageContainer"></div>
								</div>
								<div class="col-sm-3">
									<div>
										<span style="color:#666666;font-family:Arial;font-size:11px;">This description will be showing along with the 4 related images, as a web page, when a visitor click on the service link</span><br>
										<span style="color:#F05539;font-family:Arial;font-size:12px;" id="ms-desc-count-3">4000</span> <span style="color:#666666;font-family:Arial;font-size:9.3px;">Remining.....</span>
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<span class="input-required">*</span>
							<div class="col-sm-2">
								<span style="color:#3C3C3C;font-family:Georgia;font-size:13px;"><span style="color:#F05539;">*</span>Add Related Images</span>
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-3">
										<input type="file" name="msimg3[]" id="msimg_compn_img_3_1" class="ds-background-sm" onchange="setBackground('msimg_compn_img_3_1',this,960,736,160);"/>
									</div>
									<div class="col-sm-3">
										<input type="file" name="msimg3[]" id="msimg_compn_img_3_2" class="ds-background-sm" onchange="setBackground('msimg_compn_img_3_2',this,960,736,160);"/>
									</div>
									<div class="col-sm-3">
										<input type="file" name="msimg3[]" id="msimg_compn_img_3_3" class="ds-background-sm" onchange="setBackground('msimg_compn_img_3_3',this,960,736,160);"/>
									</div>
									<div class="col-sm-3">
										<input type="file" name="msimg3[]" id="msimg_compn_img_3_4" class="ds-background-sm" onchange="setBackground('msimg_compn_img_3_4',this,960,736,160);"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="more-services">
				
				</div>
				<br><br>
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-1" style="width:35px;padding:0px;">
							<a href="javascript:addMoreServices();">
								<img src="<?php echo asset_url();?>images/add.png" id="Image7" alt="" style="width:32px;"/>
							</a>
						</div>
						<div class="col-sm-4">
							<span style="color:#666666;font-family:Arial;font-size:11px;">Click the plus icon to add more services.</span><br>
							<span style="color:#666666;font-family:Arial;font-size:11px;">You are able to add up to 10 services..</span>
						</div>
					</div>
				</div>
				<br>
				<div class="pull-right">
					<input type="submit" name="mssubmitbtn" id="mssubmitbtn" class="btn btn-sm btn-danger-custom" value="Save & Continue" />
				</div>
			</form>
		
		</div>
	</div>
	<br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<script>
$("select.select-dropdown").change(function(){
	$('#mainservicefrm').bootstrapValidator ('revalidateField', 'main_service[]');
	$('#mainservicefrm').bootstrapValidator ('revalidateField', 'shipping_cate_id[]');
});

function revalInputField() {
	$('#mainservicefrm').bootstrapValidator ('revalidateField', 'main_service[]');
}
//$(document).ready(function(){
	$('#mainservicefrm').data('bootstrapValidator', null);
	$('#mainservicefrm').bootstrapValidator({
	 container: function($field, validator) {
     	return $field.parent().next('.messageContainer');
     },
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
    	   	'main_service[]': {
    	   		validators: {
                 	callback: {
                        message: 'Duplicate service name',
                        callback: function(value, validator, $field) {
                        	var set = [];
                            $(".ds-product-input").each(function(){
	                            if($( this ).val() != "") {
                            		set.push($( this ).val());
	                            }
                            });
                            return set.length === new Set(set).size ? true : false;
                        }
                    },
                 	/*callback: {
                        message: 'Atleast one service required',
                        callback: function(value, validator, $field) {
                        	var set = [];
                            $(".ds-product-input").each(function(){
	                            if($( this ).val() != "")
                            	set.push($( this ).val());
                            });
                            return set.length > 0 ? true : false;
                        }
                    }*/
             	}
    	   	},
    	   	'shipping_cate_id[]': {
    	   		validators: {
    	   			callback: {
                        message: 'Main Category is required',
                        callback: function (value, validator, $field) {
                        	var myid = $($field).attr('id');
                        	var id_arr = myid.split("_");
                        	var input_id = 'ds_main_service_'+id_arr[3];
                        	if($("#"+input_id).val() != "") {
                        		return value > 0?true:false;
                        	} else {
								return true;
                        	}
                        }
                    }
             	}
    	   	},
    	   	'description[]': {
    	   		validators: {
    	   			callback: {
                        message: 'Description is required',
                        callback: function (value, validator, $field) {
                        	var myid = $($field).attr('id');
                        	var id_arr = myid.split("_");
                        	var input_id = 'ds_main_service_'+id_arr[1];
                        	if($("#"+input_id).val() != "") {
                        		return value != ""?true:false;
                        	} else {
								return true;
                        	}
                        }
                    }
    	   		}
    	   	},
		     
		}
	}).on('error.field.bv', function(e, data) {
		if (data.bv.getSubmitButton()) {
			data.bv.disableSubmitButtons(false);
		}
   	}).on( 'status.field.bv', function( e, data ) {
    	$( '#mssubmitbtn').attr( 'disabled', false );
    }).on('success.form.bv', function(e) {
	   // Prevent form submission
	   e.preventDefault();
	   saveMainServices();
	});
//});

function addMoreServices() {

	var ms_count = parseInt($("#ms_count").val());
	ms_count++;
	if(ms_count <= 10){
	var html = '<div class="row" style="margin-top:30px;">'
			  +'<div class="col-sm-12">'
			  +'<div class="row">'
			  +'<div class="col-sm-12" style="padding:0px;margin-bottom:0px;">'
			  +'<span class="input-required">*</span>'
			  +'<div class="form-group col-sm-2" >'
			  +'<div class="">'
			  +'<input type="text" name="main_service[]" id="ds_main_service_'+ms_count+'" class="ds-product-input" placeholder="Enter Service name" maxlength="23"/>'
			  +'</div>'
			  +'<div class="messageContainer"></div>'
			  +'<div style="margin-top:5px;"><span style="color:#A9A9A9;font-family:Arial;font-size:9.3px;"></span></div>'
			  +'</div>'
			  +'<div class="form-group col-sm-7" style="margin-left:12px;padding-left:11px;">'
			  +'<span class="input-required">*</span>'
			  +'<div class="">'
			  +'<select name="shipping_cate_id[]" id="shipping_cate_id_'+ms_count+'" class="select-dropdown">'
			  +'<option value="">Select shipping main category</option>'
						<?php foreach ($categories as $category) { ?>
						+'<option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>'
						<?php } ?>
			  +'</select>'
			  +'</div>'
			  +'<div class="messageContainer"></div>'
			  +'</div>'
			  +'</div>'
			  +'<div>'
			  +'<div class="form-group col-sm-2" >'
			  +'&nbsp;'
			  +'</div>'
			  +'<div class="form-group col-sm-7" >'
			  +'<div class="">'
			  +'<span class="textarea-required">*</span>'
			  +'<textarea name="description[]" id="msdesk_'+ms_count+'" rows="5" cols="68" class="custom-textarea" placeholder="Description" onkeydown="getMyText(this,'+ms_count+');" maxlength="4000"></textarea>'
			  +'</div>'
			  +'<div class="messageContainer"></div>'
			  +'</div>'
			  +'<div class="col-sm-3">'
			  +'<div>'
			  +'<span style="color:#666666;font-family:Arial;font-size:11px;">This description will be showing along with the 4 related images, as a web page, when a visitor click on the service link</span><br>'
			  +'<span style="color:#F05539;font-family:Arial;font-size:12px;" id="ms-desc-count-'+ms_count+'">4000</span> <span style="color:#666666;font-family:Arial;font-size:9.3px;">Remining.....</span>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'<br>'
			  +'<div class="row">'
			  +'<span class="input-required">*</span>'
			  +'<div class="col-sm-2">'
			  +'<span style="color:#3C3C3C;font-family:Georgia;font-size:13px;"><span style="color:#F05539;">*</span>Add Related Images</span>'
			  +'<div style="margin-top:5px;"><span style="color:#A9A9A9;font-family:Arial;font-size:9.3px;">jpg format, Dimensions: 960 * 736 pixel, Resolution: 75 Dpi, with Max. size 160 KB </span></div>'
			  +'</div>'
			  +'<div class="col-sm-6">'
			  +'<div class="row">'
			  +'<div class="col-sm-3">'
			  +'<input type="file" name="msimg'+ms_count+'[]" id="msimg_compn_img_'+ms_count+'_1" class="ds-background-sm" onchange="setBackground(`msimg_compn_img_'+ms_count+'_1`,this,960,736,160);"/>'
			  +'</div>'
			  +'<div class="col-sm-3">'
			  +'<input type="file" name="msimg'+ms_count+'[]" id="msimg_compn_img_'+ms_count+'_2" class="ds-background-sm" onchange="setBackground(`msimg_compn_img_'+ms_count+'_2`,this,960,736,160);"/>'
			  +'</div>'
			  +'<div class="col-sm-3">'
			  +'<input type="file" name="msimg'+ms_count+'[]" id="msimg_compn_img_'+ms_count+'_3" class="ds-background-sm" onchange="setBackground(`msimg_compn_img_'+ms_count+'_3`,this,960,736,160);"/>'
			  +'</div>'
			  +'<div class="col-sm-3">'
			  +'<input type="file" name="msimg'+ms_count+'[]" id="msimg_compn_img_'+ms_count+'_4" class="ds-background-sm" onchange="setBackground(`msimg_compn_img_'+ms_count+'_4`,this,960,736,160);"/>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'</div>';
	  $("#more-services").append(html);
	  $("#ms_count").val(ms_count);
	}else{
		alert("Sorry, you have been reached to the max. service limitation.");
	}
}
function getMyText(input,id) {
	var vcount = parseInt($(input).val().length);
    var rem = 4000 - vcount;
    $("#ms-desc-count-"+id).html(rem);
}
</script>
