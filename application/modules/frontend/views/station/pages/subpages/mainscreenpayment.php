<div class="panel-heading custom-panel-heading" style="text-align:left;padding-top: 5px !important;">
	<span class="pull-right-close" style="padding-top: 5px;"><a href="javascript:ShowObjectWithEffect('Layer275', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
 </div>
<div class="panel-body panel-body-custom" id="main_screen_ads_info" style="background-color:#F5F5F5;">
	<div id="product_list">
		<div class="product-list-outer">
			<div class="row">
				<div class="col-sm-3">
					&nbsp;
				</div>
				<div class="col-sm-12 text-center">
					<div style="padding-bottom: 10px;">
						<span class="ms-ads-title" style="font-size:27px;">Invoice Details Has Been Created Successfully</span>
					</div>
					<div style="padding-bottom: 10px;">
						<div id="wb_Image184">
							<img src="<?php echo asset_url();?>images/tick-big.png" id="Image184" alt="" style="width:50px;">
							<span style="color:#FF6347;font-family:Impact;font-size:21px;">USD 250.00</span>
						</div>
					</div>
					<div style="padding-bottom: 10px;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:11px;">Your advertising will be live on <?php echo $weekname;?> of <?php echo date('F Y',strtotime($dates['from_date']));?></span>
					</div>
					<div>
						<div class="top_layer_text" style="width:400px;display:inline-block;">
							<?php for($i = $dates['from_date']; $i <= $dates['to_date']; ) { ?>
							<div id="wb_Shape443" class="date_number_outer">
								<a href=""><div id="Shape443"><div class="date_numbers"><span class="ms-ads-title"><?php echo date('d',strtotime($i));?></span></div></div></a>
							</div>
							<?php $i = date('Y-m-d',strtotime('+1 day',strtotime($i)));?>
							<?php } ?>
							<div style="clear:both;"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					&nbsp;
				</div>
			</div>
		</div>
		<div class="product-list-outer" style="background-color:#fff;margin:0px;">
			<form id="msadconfirm" name="" action="" method="post" enctype="multipart/form-data">
			<input type="hidden" id="adid" name="adid" value="<?php echo $ms_id;?>"/>
			<input type="hidden" id="ms_video_id" name="ms_video_id" value="0"/>
			<input type="hidden" id="ms_catalogue_id" name="ms_catalogue_id" value="0"/>
			<div class="row" style="padding:40px;">
				<div class="col-sm-12" style="padding-bottom:5px;"><span style="color:#2D2D2D;font-family:Georgia;font-size:27px;">Upload your Ad.</span></div>
				<div class="col-sm-4">
					<div>
						<div id="Shape485" style="width:315px;background-image:url(<?php echo asset_url();?>images/ms-image-bg.jpg);">
							<div id="Shape485_text">
								<br><br><br><br><br><br>
								<div style="text-align:center;">
									<input type="file" name="mainscreen_ad_image" id="mainscreen_ad_image" style="display:inline-block;" onchange="setMainScreenBackground('Shape485',this,1280,625,500);"/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div style="padding-bottom: 10px;">
						<span style="color:#1E1E1E;font-family:Arial;font-size:13px;">About This Ad.</span>
					</div>
					<div>
						<textarea name="about_ms_ad" id="TextArea9" style="width:315px;height:162px;" rows="11" cols="45" maxlength="2000" placeholder="Type an introduction about this advertising"></textarea>
					</div>
				</div>
				<div class="col-sm-4">
					<div>
						<span style="color:#1E1E1E;font-family:Arial;font-size:13px;">Links</span> &nbsp;&nbsp;<span style="color:#FF6347;font-family:Arial;font-size:11px;">( Optional )</span>
					</div>
					<div>
						<div class="row">
							<div class="col-sm-3">
								<a href="javascript:showVideos();" ><img src="<?php echo asset_url();?>images/video%20%281%29.png" id="Image232" alt="" style="width:46px;"></a>
							</div>
							<div class="col-sm-9">
								<div><span style="color:#1E1E1E;font-family:Arial;font-size:11px;"><strong>Video</strong></span></div>
								<div>
									<span style="color:#3C3C3C;font-family:Arial;font-size:11px;">Click on video icon, to add a button linked to one of your videos.</span>
								</div>
							</div>
						</div>
						<br><br>
						<?php if($tscategory_id == 1) { ?>
						<div class="row">
							<div class="col-sm-3">
								<a href="javascript:showCatalogues();"><img src="<?php echo asset_url();?>images/Catalogue1.png" id="Image232" alt="" style="width:50px;"></a>
							</div>
							<div class="col-sm-9">
								<div><span style="color:#1E1E1E;font-family:Arial;font-size:11px;"><strong>V-Catalouge</strong></span></div>
								<div>
									<span style="color:#3C3C3C;font-family:Arial;font-size:11px;">Click on vatalouge icon, to add a button linked to one of your V-Catalouges.</span>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
				<div class="col-sm-10">
					<br><br>
					<span style="color:#696969;font-family:Arial;font-size:11px;"><strong>Your advertising should not include the following:<br></strong>- Any address or phone numbers, as long as we provide you with a special buttons for contacts.<br>- Any text except " Advertising slogan or headline and company name or logo" as long as you can type more&nbsp; <br>&nbsp;&nbsp; information about your Ad. in the "About This Ad." text area. </span>
				</div>
				<div class="col-sm-2">
					<div id="wb_Shape487" style="width:149px;height:36px;z-index:2274;">
						<a href="javascript:confirmMSAD();" ><div id="Shape487"><div id="Shape487_text"><span style="color:#FFFFFF;font-family:Arial;font-size:16px;">Checkout</span></div></div></a>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
<div id="ms_video_modal" class="modal fade">
	<div class="modal-dialog" style="">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Select Videos</h3>
			</div>
			<div class="modal-body" >
				<div id="ms_video_area">
				
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" id="select_ms_video" class="btn btn-primary">Select Video</button>
			</div>
		</div>
	</div>
</div>
<div id="ms_catalogue_modal" class="modal fade">
	<div class="modal-dialog" style="">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Select Catalogues</h3>
			</div>
			<div class="modal-body" >
				<div id="ms_catalogue_area">
				
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" id="select_ms_catalogue" class="btn btn-primary">Select Catalogue</button>
			</div>
		</div>
	</div>
</div>

<script>
function setMainScreenBackground(id,input,width,height,size) {
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

function showVideos() {
	$.get(base_url+"mystation/video/list",{},function(data){
		$("#ms_video_area").html(data);
		$("#ms_video_modal").modal('show').data('bs.modal').options.backdrop = 'static';
	},'html');
}

$("#select_ms_video").click(function(){
	var vd_id = $("input[type='radio'][name='myvideo_id']:checked").val();
	$("#ms_video_id").val(vd_id);
	$("#ms_video_modal").modal('hide');
});

function showCatalogues() {
	$.get(base_url+"mystation/vcatalogue/list",{},function(data){
		$("#ms_catalogue_area").html(data);
		$("#ms_catalogue_modal").modal('show').data('bs.modal').options.backdrop = 'static';
	},'html');
}

$("#select_ms_catalogue").click(function(){
	var ctd_id = $("input[type='radio'][name='catalogue_ads_id']:checked").val();
	$("#ms_catalogue_id").val(ctd_id);
	$("#ms_catalogue_modal").modal('hide');
});

function confirmMSAD() {
	if($("#mainscreen_ad_image").val() == "") {
		alert("Please select main screen image.");
	} else if($("#TextArea9").val() == "") {
		alert("Please enter about this ad.");
	} else {
		ajaxindicatorstart("Please wait .. while we confirm ad...");
		var options = {
				target : '#response', // target element(s) to be updated with server response 
				beforeSubmit : showConfirmRequest, // pre-submit callback 
				success :  showConfirmResponse,
				url : base_url+'mystation/ads/mainscreen/confirm',
				semantic : true,
				dataType : 'json'
			};
		$('#msadconfirm').ajaxSubmit(options);
	}
}
function showConfirmRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showConfirmResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 0) {
		//alert(resp.msg);
	} else {
		//alert(resp.msg);
		window.location.href = base_url+resp.ads_id+"/ads-checkout";
	}
}

</script>