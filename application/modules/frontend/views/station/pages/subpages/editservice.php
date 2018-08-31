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
    .ds-background-sm {
    	border: 1px solid #ccc;
    	background-size: cover;
    }
</style>
<form name="editmainservicefrm" id="editmainservicefrm" action="" method="post">
<div class="panel-heading custom-panel-heading" style="text-align:left;padding-top: 5px !important;text-align:center;">
	<b><input type="button" value="Cancel" style="height:28px;" class="btn-custom-product" onclick="openMainServices();"/></b>
	<b><input type="submit" name="editmssubmitbtn" id="editmssubmitbtn" class="btn-custom-product btn" value="Update" style="height:28px;"/></b>
	<span class="pull-right-close" style="padding-top: 5px;"><a href="javascript:ShowObjectWithEffect('Layer169', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
 </div>
<div class="personal_info_div" id="desk_site_step_1" style="padding:0px 60px;">
	<div class="row">
		<div class="col-sm-12">
			<div class="row" style="margin-top:15px;">
		  		<div class="col-sm-12" style="text-align:left;">
					<div style="margin-bottom:10px;"><span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Update Main Service</span></div>
					<div style="margin-bottom:10px;">
						<span class="desk-site-text-sm">
						The Main Services are the scope of your business, such as ( Air Freight, Ocean Freight, land Freight, Port Agencies ...etc).<br>
						Fist, type your service then type a full description about it, and upload 4 related jpg images of size 500x345 and max file size 80 KB..
						</span>
					</div>
				</div>
			</div>
				<input type="hidden" id="id" name="id" value="<?php echo $services[0]['id'];?>" />
				<div class="row" style="margin-top:30px;">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12" style="padding:0px;margin-bottom:0px;">
								<span class="input-required">*</span>
								<div class="form-group col-sm-2" >
									<div class="">
										<input type="text" name="main_service[]" id="ds_main_service_1" class="ds-product-input" placeholder="First Service" value="<?php echo $services[0]['name'];?>" maxlength="23"/>
									</div>
									<div class="messageContainer"></div>
									<div style="margin-top:5px;"><span style="color:#A9A9A9;font-family:Arial;font-size:9.3px;">Ex. Air Freight</span></div>
								</div>
								<div class="form-group col-sm-7" style="margin-left:12px;padding-left:11px;">
									<span class="input-required">*</span>
									<div class="">
										<select name="shipping_cate_id[]" id="shipping_cate_id" class="select-dropdown">
											<option value="">Select shipping main category</option>
											<?php foreach ($categories as $category) { ?>
											<option value="<?php echo $category['id'];?>" <?php if($services[0]['shipping_cat_id'] == $category['id']) {?>selected<?php }?>><?php echo $category['name'];?></option>
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
										<textarea name="description[]" rows="5" cols="68" class="custom-textarea" placeholder="Description" onkeydown="getMyText(this,1);" maxlength="4000"><?php echo $services[0]['description'];?></textarea>
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
								<span style="color:#3C3C3C;font-family:Georgia;font-size:13px;"><span style="color:#F05539;">*</span>Add Related Images</span>
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-3 form-group">
										<div>
											<input type="file" name="msimg1" id="msimg_compn_img_1_1" class="ds-background-sm" onchange="setBackground('msimg_compn_img_1_1',this,960,736,160);" style="<?php if(!empty($services[0]['image1'])) { ?>background-image:url(<?php echo asset_url().$services[0]['image1'];?>)<?php } ?>"/>
										</div>
										<div class="messageContainer"></div>
									</div>
									<div class="col-sm-3">
										<input type="file" name="msimg2" id="msimg_compn_img_1_2" class="ds-background-sm" onchange="setBackground('msimg_compn_img_1_2',this,960,736,160);" style="<?php if(!empty($services[0]['image2'])) { ?>background-image:url(<?php echo asset_url().$services[0]['image2'];?>)<?php } ?>"/>
									</div>
									<div class="col-sm-3">
										<input type="file" name="msimg3" id="msimg_compn_img_1_3" class="ds-background-sm" onchange="setBackground('msimg_compn_img_1_3',this,960,736,160);" style="<?php if(!empty($services[0]['image3'])) { ?>background-image:url(<?php echo asset_url().$services[0]['image3'];?>)<?php } ?>"/>
									</div>
									<div class="col-sm-3">
										<input type="file" name="msimg4" id="msimg_compn_img_1_4" class="ds-background-sm" onchange="setBackground('msimg_compn_img_1_4',this,960,736,160);" style="<?php if(!empty($services[0]['image4'])) { ?>background-image:url(<?php echo asset_url().$services[0]['image4'];?>)<?php } ?>"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="pull-right">
				</div>
		
		</div>
	</div>
	<br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</form>
<script>
function getMyText(input,id) {
	var vcount = parseInt($(input).val().length);
    var rem = 4000 - vcount;
    $("#ms-desc-count-"+id).html(rem);
}
</script>
