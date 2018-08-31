<style>
<!--
.messageContainer {
	margin-left:5px;
}
-->
</style>
<form name="frmeditpersonalinfo" method="post" action="" enctype="multipart/form-data" id="frmeditpersonalinfo">
	<div class="panel-heading custom-panel-heading">
  		<a href="javascript:openAccountInfoEditForm();" class="btn btn-default btn-custom" id="personal_edit_btn">EDIT</a>
  		<a href="javascript:openAccountInfo();" class="btn btn-default btn-custom" id="personal_info_btn">RESET</a>
  		<input type="submit" class="btn btn-default btn-custom" name="savepersonalbtn" id="savepersonalbtn"  style="display:none"  value="SAVE"/>
  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer164', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
  	</div>
  	<div class="panel-body panel-body-custom" id="account_personal_info">		
  		<div class="personal_info_div" id="personal_info_div">
  			<div class="row">
  				<div class="col-sm-3 col-sm-offset-1">
  					<div style="padding-top:50px;">&nbsp;</div>
  					<div class="control-label-text text-center">Profile Image</div>
  					<br>
  					<div class="profile-image text-center">
  						<img  <?php if($personalinfo[0]['profile_image'] != "" && file_exists(asset_url().$personalinfo[0]['profile_image'])) { ?>src="<?php echo asset_url().$personalinfo[0]['profile_image']; ?>" <?php } else { ?>
  						src="<?php echo asset_url();?>images/img1186.png" <?php } ?> alt="" class="img-circle image-circle-custom myaccountimg"  style="cursor:pointer"/>
  					</div>
  				</div>
  				<div class="col-sm-8">
  					<div style="padding-top:120px;">&nbsp;</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Account Type</div>
  						<div class="col-sm-9 label-text-value"><img src="<?php echo asset_url();?>images/seller.png" id="Image13" alt="" style="height: 22px;width:22px;margin-top: -22px;margin-top: -22px;"> <span><?php echo $personalinfo[0]['user_category'];?></span></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Business Type</div>
  						<div class="col-sm-9 label-text-value"><?php echo $personalinfo[0]['sub_category'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Station ID</div>
  						<div class="col-sm-9 label-text-value"><?php echo $personalinfo[0]['email'];?></div>
  					</div>
  					<br><br>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Name</div>
  						<div class="col-sm-9 label-text-value"><?php echo $personalinfo[0]['name_prefix']." ".$personalinfo[0]['name'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Position / Title</div>
  						<div class="col-sm-9 label-text-value"><?php echo $personalinfo[0]['position'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Alternative Email</div>
  						<div class="col-sm-9 label-text-value"><?php echo $personalinfo[0]['alternative_email'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Contact Address</div>
  						<div class="col-sm-9 label-text-value"><?php echo $personalinfo[0]['street']." ".$personalinfo[0]['city']." ".$personalinfo[0]['province']." ".$personalinfo[0]['country'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Mobile</div>
  						
  						<div class="col-sm-9 label-text-value"><?php echo $personalinfo[0]['mobile_code']." ".$personalinfo[0]['mobile_number'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Time Zone</div>
  						<div class="col-sm-9 label-text-value"><?php echo $personalinfo[0]['timezone'];?></div>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="edit-div" id="personal_edit_div" style="display:none;">
		  		<div class="row">
		  			<div class="col-sm-12" style="padding-top:50px;">
			  			<div class="col-sm-offset-1 col-sm-5">
			  				<div class="row info-row">
				  				<div class="form-group">
					  				<label class="control-label col-sm-4 label-text">Account Type </label>
									<div class="col-sm-8 label-text">
										<input type="hidden" name="data[userinfo_id]" value="<?php echo $personalinfo[0]['userinfo_id'];?>" >
										<img src="<?php echo asset_url();?>images/seller.png" id="Image13" alt="" style="width: 22px;height:22px;margin-top: -22px;"> <span><?php echo $personalinfo[0]['user_category'];?></span>
									</div>
									<div class="messageContainer col-sm-4"></div>
								</div>
							</div>
							<div class="row info-row">
								<div class="form-group">
					  				<label class="control-label col-sm-4 label-text">Business Type </label>
									<div class="col-sm-8">
										<input type="hidden" name="data[user_subcategory_id]" value="<?php echo $personalinfo[0]['user_subcategory_id'];?>"/>
										<select name="test" class="form-custom-select"  disabled="disabled">
											<option value="">Select Business Type </option>
											<?php foreach ($usersubcategory as $row) { 
												if($row['category_id'] == $personalinfo[0]['user_category_id']) { ?>
												<option value="<?php echo $row['id']?>" <?php if($row['id'] == $personalinfo[0]['user_subcategory_id']) { ?>selected<?php } ?>><?php echo $row['sub_category'];?></option>
											<?php } } ?>
										</select>
									</div>
									<div class="messageContainer col-sm-4"></div>
								</div>
							</div>
							<div class="row info-row">
								<div class="form-group">
					  				<label class="control-label col-sm-4 label-text">Station ID </label>
									<div class="col-sm-8 label-text">
										<?php echo $personalinfo[0]['email'];?>
									</div>
									<div class="messageContainer col-sm-4"></div>
								</div>
							</div>
			  			</div>
			  			<div class="col-sm-6">
			  				<div class="row info-row">
								<div class="form-group">
					  				<div class="control-label col-sm-4 label-text">
							  				<?php  if($personalinfo[0]['profile_image'] !="" || $personalinfo[0]['profile_image'] != NUll) {
							  					$pimage = $personalinfo[0]['profile_image'];
							  				} else { 
							  					$pimage = "images/img1186.png";
							  				}?>
							  				
							  				<div id="divfileprofileImg" <?php if($personalinfo[0]['profile_image']!="") { ?> style="display:none;" 	<?php }?>>
						  							<input  name="fileprofileImg" type='button' class="imgInp"    style="border:none" id="fileprofileImg" 
						  							 background: url('<?php echo asset_url(); ?>images/img1186.png') center center no-repeat myaccountimg;"/>
						  					 </div>
					  					 <div  id="divprofileImage" <?php if($personalinfo[0]['profile_image']=="") { ?> style="display:none;" <?php } ?>>
                                          		<img id="profileImage"    onclick="imgtrigger();" class="img-circle myaccountimg" style="width: 100px; height: 100px;cursor:pointer" src="<?php echo asset_url().$pimage ?>"/>
                                          </div>
                                          <input type="hidden"  name="data[profilepath]" id="profilepath"  value="<?php echo $pimage ?>" />
					  				</div>
                                    <div  class="messageContainer"></div>
					  			</div>
								<div class="col-sm-8 label-text" style="padding-top: 25px;">
									<div class="label-text" style="font-size:12px;">
										Add your profile image
									</div>
									<div class="label-text" style="font-size:11px;padding-top:5px;">
										jpeg or png, Dimensions: 200 * 200 pixel, Resolution: 75, with Max. size 100 KB
									</div>
									<div style="padding-top:5px;">
										<span style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor: pointer" onclick="removeProfileImage();">Remove</span> 
									</div>
								</div>
									<div class="messageContainer col-sm-4"></div>
								</div>
							</div>
			  			</div>
			  		</div>
			  		<div class="col-sm-12">
			  				<div class="row">
			  					<div class="col-sm-offset-1 col-sm-5">
			  						<div class="row info-row">
										<div class="form-group">
					  						<span class="control-label col-sm-4 label-text-form">Name </span>
											<div class="col-sm-8 label-text-input">
												<div class="col-sm-3" style="padding: 0px;">
													<div>
														<select name="data[name_prefix]" size="1" id="Combobox2" class="form-control" style="height:35px">
		                                                    <option value="Mr" <?php if('Mr' == $tsprefix) { ?>selected<?php }?>>Mr.</option>
		                                                    <option value="Miss" <?php if('Miss' == $tsprefix) { ?>selected<?php }?>>Miss.</option>
		                                                    <option value="Mrs" <?php if('Mrs' == $tsprefix) { ?>selected<?php }?>>Mrs.</option>
		                                                    <option value="Ms" <?php if('Ms' == $tsprefix) { ?>selected<?php }?>>Ms.</option>
		                                                </select>
	                                                </div>
	                                                <div class="messageContainer"></div>
                                                </div>
                                                <div class="col-sm-9">
                                                	<div>
                                                		<input type="text" name="data[name]" id="name" value="<?php echo $personalinfo[0]['name'];?>" class="form-control form-custom-input" style="width:180px;" value=""/>
                                                	</div>
                                                	<div class="messageContainer"></div>
                                                </div>
											</div>
										</div>
									</div>
					  			</div>
					  			<div class="col-sm-6">
					  				<div class="row info-row">
										<div class="form-group">
							  				<span class="control-label col-sm-4 label-text-form">Alternative Email </span>
											<div class="col-sm-8 label-text-input">
												<div>
													<input type="text" name="data[alternative_email]" id="alternative_email" class="form-control form-custom-input" value="<?php echo $personalinfo[0]['alternative_email'];?>"/>
												</div>
												<div class="messageContainer"></div>
											</div>
										</div>
									</div>
					  			</div>
					  		</div>
					  		<div class="row">
					  			<div class="col-sm-offset-1 col-sm-5">
					  				<div class="row info-row">
										<div class="form-group">
							  				<span class="control-label col-sm-4 label-text-form">Contact Address </span>
											<div class="col-sm-8 label-text-input">
												<div class="col-sm-6" style="padding: 0px;">
													<div>
														<input type="text" name="data[country]" id="country" value="<?php echo $personalinfo[0]['country'];?>" class="form-control form-custom-input" value="" placeholder="Country"/>
													</div>
													<div class="messageContainer"></div>
												</div>
												<div class="col-sm-6">
													<div>
														<input type="text" name="data[province]" value="<?php echo $personalinfo[0]['province'];?>" id="province" class="form-control form-custom-input" value="" placeholder="Province"/>
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
										</div>
									</div>
			  					</div>
					  			<div class="col-sm-6">
					  				<div class="row info-row">
										<div class="form-group">
					  						<div class="col-sm-4">
					  							<div>
													<input type="text" name="data[city]" id="city" value="<?php echo $personalinfo[0]['city'];?>" class="form-control form-custom-input" value="" placeholder="City"/>
												</div>
												<div class="messageContainer"></div>
											</div>
											<div class="col-sm-8">
												<div>
													<input type="text" name="data[street]" id="street" value="<?php echo $personalinfo[0]['street'];?>" class="form-control form-custom-input" value="" placeholder="Street, Building No."/>
												</div>
												<div class="messageContainer"></div>
											</div>
										</div>
									</div>
					  			</div>
			  				</div>
			  			</div>
			  		<div class="col-sm-12">
			  		<div class="row">
			  			<div class="col-sm-offset-1 col-sm-5">
			  				<div class="row info-row">
								<div class="form-group">
					  				<span class="control-label col-sm-4 label-text-form">Mobile </span>
									<div class="col-sm-8 label-text-input">
										<div class="col-sm-3" style="padding: 0px;">
											<div>
												<input type="text" name="data[mobile_code]" id="mobile_code" class="form-control form-custom-input" value="<?php echo $personalinfo[0]['mobile_code'];?>" placeholder="Code"/>
											</div>
											<div class="messageContainer"></div>
										</div>
										<div class="col-sm-9">
											<div>
												<input type="text" name="data[mobile_number]" id="mobile_number" class="form-control form-custom-input" maxlength="12" value="<?php echo $personalinfo[0]['mobile_number'];?>" placeholder="Mobile Number"/>
											</div>
											<div class="messageContainer"></div>
										</div>
									</div>
								</div>
							</div>
			  			</div>
			  			<div class="col-sm-6">
			  				<div class="row info-row">
								<div class="form-group">
			  						<span class="control-label col-sm-4 label-text-form">Time Zone </span>
									<div class="col-sm-8 label-text-input">
										<div>
											<input type="text" name="data[timezone]" id="timezone" class="form-control form-custom-input" value="<?php echo $personalinfo[0]['timezone']?>" placeholder="Country Time Zone"/>
										</div>
										<div class="messageContainer"></div>
									</div>
								</div>
							</div>
			  			</div>
			  		</div>
			  	</div>
			  	<div class="row">
			  		<div class="col-sm-12">
			  			<div class="col-sm-offset-1 col-sm-5">
			  				<div class="row info-row">
								<div class="form-group">
					  				<span class="control-label col-sm-4 label-text-form">Position / Title </span>
									<div class="col-sm-8 label-text-input">
										<input type="text" name="data[position]" id="position" class="form-control form-custom-input" maxlength="20" value="<?php echo $personalinfo[0]['position']?>" placeholder="Position / Title"/>
									</div>
									<div class="messageContainer col-sm-offset-4 col-sm-8"></div>
								</div>
							</div>
			  			</div>
			  		</div>
		  		</div>
		  	</div>
  		</div>
 </form>
  <div id="profile_pic_modal" class="modal fade">
	<div class="modal-dialog" style="">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Add Profile Picture</h3>
			</div>
			<div class="modal-body" >
				<form id="cropimage" method="post" enctype="multipart/form-data" action="">
						<span><b>Upload Image:</b> <input type="file" name="profile-pic" id="profile-pic"  accept=".png,.jpg,.jpeg.gif" class="form-control" style="width:200px;display:inline-block;"/></span> <br><br>
						
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
 <script>
 function imgtrigger()
 {
 	$("#fileprofileImg").trigger('click');
 }
jQuery('#fileprofileImg').on('click', function(e){

		jQuery('#profile_pic_modal').modal({show:true,backdrop: 'static',keyboard: false});
		$('#photo').css('display', 'none');
		jQuery("#profile-pic").val('');
		jQuery('.imgareaselect-outer').css('display','none');
});

jQuery('#profile-pic').on('change', function() {
	var flag = validateprofileimagefile('profile-pic',this,40,100);
	if(flag == true) 
	{
         $('#photo').css('display', 'block');
         
         savetemparary();

         var ias = jQuery('#photo').imgAreaSelect( {
             aspectRatio: '1:1',
             maxWidth: 300, 
             maxHeight: 300,
             minWidth: 100, 
             minHeight: 100,
             x1: 50,
             y1: 50, 
             x2: 300,
             y2: 300,
             onSelectEnd: function ( image, selected) {
                 jQuery('input[name=x1]').val(selected.x1);
                 jQuery('input[name=y1]').val(selected.y1);
                 jQuery('input[name=x2]').val(selected.x2);
                 jQuery('input[name=y2]').val(selected.y2);
                 jQuery('input[name=width]').val(selected.width);
                 jQuery('input[name=height]').val(selected.height);
             },
         	handles: true,
       		parent: '#parent'
         });
         ias.load(function(){
            	var height = ( this.width / 4 ) * 4;
            	if( height <= this.height ){     
              	var diff = ( this.height - height ) / 2;
                 	var coords = { x1 : 0, y1 : diff, x2 : this.width, y2 : height + diff };
                 	jQuery('input[name=x1]').val(0);
                  jQuery('input[name=y1]').val(diff);
                  jQuery('input[name=x2]').val(this.width);
                  jQuery('input[name=y2]').val(height + diff);
                  jQuery('input[name=width]').val(this.width);
                  jQuery('input[name=height]').val(height);
           	} else {
             		var width = ( this.height / 4 ) * 4; 
                  var diff = ( this.width - width ) / 2;
                  var coords = { x1 : diff, y1 : 0, x2 : width + diff, y2: this.height };
                  jQuery('input[name=x1]').val(diff);
                  jQuery('input[name=y1]').val(0);
                  jQuery('input[name=x2]').val(width + diff);
                  jQuery('input[name=y2]').val(this.height);
                  jQuery('input[name=width]').val(width);
                  jQuery('input[name=height]').val(this.height);
           	}   
           	$( this ).imgAreaSelect( coords );
   		});
    }
    
});

jQuery('#save_crop').on('click', function(e){
	if(jQuery('#x1').val() != "")
	{
			e.preventDefault();
			params = {
					targetUrl: '<?php echo base_url();?>account/changeprofilepic',
					action: 'save',
					x_axis: jQuery('#x1').val(),
					y_axis : jQuery('#y1').val(),
					x2_axis: jQuery('#x2').val(),
					y2_axis : jQuery('#y2').val(),
					thumb_width : jQuery('#width').val(),
					thumb_height:jQuery('#height').val()
			};
			$('#photo').imgAreaSelect( {remove: true} );
			saveCropImage(params);
	} else {
		alert('Please select Image for crop');
	}
});
function validateprofileimagefile(id,input,min_size,max_size='100')
{
	var flag = true;
	if (input.files && input.files[0]) {
       		var ext = input.files[0].name.split('.').pop();
       		var file_size = parseInt(input.files[0].size);
       		var filesizeinkb = (file_size/1024);
       		//var sizeinkb = (size/1024);
       		//var filesizeinmb = (file_size/1048576).toFixed(2);
       		//var sizeinmb = (size/1048576).toFixed(2);
       		if(ext == 'png'  || ext =='jpg' || ext =='jpeg' || ext =='gif') { 
	                if(parseInt(filesizeinkb) > parseInt(max_size)) {
	                	alert("File size should be max 100KB.");
	                    $('#'+id).val('');
	                    flag = false;
	                } 
                } else {
                	alert("File should be png,jpg,jpeg, or gif  formate.");
                    $('#'+id).val('');
                    flag = false;
                }
   		}
		return flag;
		
}
function saveCropImage(params) {
	jQuery.ajax({
			url: params['targetUrl'],
			cache: false,
			dataType: "json",
			data: {
			//action: params['action'],
				id: jQuery('#hdn-profile-id').val(),
				t: 'ajax',
				w1:params['thumb_width'],
				x1:params['x_axis'],
				h1:params['thumb_height'],
				y1:params['y_axis'],
				x2:params['x2_axis'],
				y2:params['y2_axis'],
				image_name :jQuery('#image_name').val()
			},
			type: 'Post',
			success: function (response) {
				jQuery('#profile_pic_modal').modal('hide');
				jQuery('.imgareaselect-outer').css('display','none');
				jQuery(".imgareaselect-border1,.imgareaselect-border2,.imgareaselect-border3,.imgareaselect-border4,.imgareaselect-border2,.imgareaselect-outer,.imgareaselect-selection").css('display', 'none');
				jQuery("#profileImage").attr('src', response['fullpath']);
				$('#profilepath').val(response['path']);
				//$('#messageContainer1').empty();
				$('#frmeditpersonalinfo').bootstrapValidator('revalidateField', 'data[profilepath]');
				//jQuery("#preview-profile-pic").html('');
				$('#divprofileImage').css('display', 'block');
				$('#divfileprofileImg').css('display', 'none');
				jQuery("#profile-pic").val('');
			},
		
	},'json');
}

function savetemparary() {
	ajaxindicatorstart("Please wait .. System is Processing...");
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showChangePasswordRequest, // pre-submit callback 
 			success :  showChangePasswordResponse,
 			url : '<?php echo base_url()?>account/saveprofilepictempararyimage',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#cropimage').ajaxSubmit(options);
}
function showChangePasswordRequest(formData, jqForm, options){
	var queryString = $.param(formData);
return true;
}
function showChangePasswordResponse(resp, statusText, xhr, $form){
if(resp.status == 0) {
	$("#response").addClass('alert-danger');
	$("#response").html(resp.msg);
	$("#response").show();
	//alert(resp.msg);
	//getChangepassword();
	} else {
	$('#photo').attr('src', resp.msg);
	$("#response").addClass('alert-success');
	$("#response").html(resp.msg);
	$("#response").show();
	//alert(resp.msg);
	$('#photo').attr('src', resp.msg);
	$('#image_name').val(resp.msg);
	
	//getMyAccount();
	//window.location.reload();
	}
ajaxindicatorstop();
}
$('#profile_pic_modal').on('hidden.bs.modal' , function() {
	$('#photo').imgAreaSelect( {remove: true} );
});
function openAccountInfoEditForm() {
	ajaxindicatorstart('Loading...');
	$("#personal_info_div").hide();
	$("#personal_edit_div").show();
	$("#personal_info_btn").removeClass("btn-custom_active");
	$("#personal_edit_btn").addClass("btn-custom_active");
	$("#savepersonalbtn").show();
	ajaxindicatorstop();
 	$(document).ready(function(){
		$('#frmeditpersonalinfo').bootstrapValidator({
		 container: function($field, validator) {
	     	return $field.parent().next('.messageContainer');
	     },
	    feedbackIcons: {
	        validating: 'glyphicon glyphicon-refresh'
	    },
	    excluded: ':disabled',
	    fields: {
	    	   	'data[name]': {
	    	   		validators: {
	                 	notEmpty: {
	                     	message: 'The Username  is required and cannot be empty'
	                 	}
	             	}
	    	   	},
	    	   	'data[profilepath]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Profile Picture  is required and cannot be empty'
	    	   			}
	    	   		}
	    	   	},
//	    	   	profileImg: {
//	                validators: {
//	                	notEmpty: {
//	                     	message: 'Profile image required.'
//	                 	},
//	                    file: {
//	                        extension: 'jpeg,jpg,png,gif',
//	                        type: 'image/jpeg,image/png,image/gif,image/jpg',
//	                        maxSize: 2097152,   // 2048 * 1024
//	                        message: 'The selected file is not valid'
//	                    }
//	                }
//	            },
	    	   	'data[user_subcategory_id]': {
		             validators: {
		                 notEmpty: {
		                     message: 'The Business Type is required and cannot be empty'
		                 }
		             }
		         },
			   	 'data[alternative_email]': {
			            validators: {
			                notEmpty: {
			                    message: 'The Alternative email  is required and cannot be empty'
			                },
			                regexp: {
		                         regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
		                         message: 'The value is not a valid email address'
		                     }
			            }
			        },
			        'data[country]': {
			            validators: {
			                notEmpty: {
			                    message: 'The Country  is required and cannot be empty'
			                }
			            }
			        },
			        'data[province]': {
			            validators: {
			                notEmpty: {
			                    message: 'The Province is required and cannot be empty'
			                }
			            }
			        },
			        'data[city]': {
			            validators: {
			                notEmpty: {
			                    message: 'The City is required and cannot be empty'
			                }
			            }
			        },
			        'data[street]': {
			            validators: {
			                notEmpty: {
			                    message: 'The Street is required and cannot be empty'
			                }
			            }
			        },
			        'data[mobile_code]': {
			            validators: {
			                notEmpty: {
			                    message: 'The Mobilecode is required and cannot be empty'
			                }
			            }
			        },
			        'data[mobile_number]': {
			            validators: {
			                notEmpty: {
			                    message: 'The Mobile number is required and cannot be empty'
			                },
			                regexp: {
	                            regexp: '[0-9]{4}$',
	                            message: 'Invalid Mobile Number'
	                        }
			            }
			        },
			        'data[timezone]': {
			            validators: {
			                notEmpty: {
			                    message: 'The Timezone is required and cannot be empty'
			                }
			            }
			        },
			        'data[position]': {
			            validators: {
			                notEmpty: {
			                    message: 'The Position is required and cannot be empty'
			                }
			            }
			        }
			     
			    }
			}).on('error.field.bv', function(e, data) {
				if (data.bv.getSubmitButton()) {
					data.bv.disableSubmitButtons(false);
				}
	    	}).on( 'status.field.bv', function( e, data ) {
	    	    $( '#savepersonalbtn').attr( 'disabled', false );
	    	}).on('success.form.bv', function(e) {
			   // Prevent form submission
			   e.preventDefault();
			   saveAccountInfo();
			});
		});
}
</script>
 
