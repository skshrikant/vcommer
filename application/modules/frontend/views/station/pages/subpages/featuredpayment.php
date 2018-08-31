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
							<span style="color:#FF6347;font-family:Impact;font-size:21px;">USD <?php echo $adinfo['fc_price'];?>.00</span>
						</div>
					</div>
					<div style="padding-bottom: 10px;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:11px;">Your products will be displayed in all carousels on of <?php echo date('F Y',strtotime($dates['from_date']));?></span>
					</div>
				</div>
				<div class="col-sm-3">
					&nbsp;
				</div>
			</div>
		</div>
		<div class="product-list-outer" style="background-color:#fff;margin:0px;">
			<form id="fcadconfirm" name="fcadconfirm" action="" method="post" enctype="multipart/form-data">
			<input type="hidden" id="fadid" name="fadid" value="<?php echo $ms_id;?>"/>
			<input type="hidden" id="fc_video_id" name="fc_video_id" value="0"/>
			<input type="hidden" id="fc_catalogue_id" name="fc_catalogue_id" value="0"/>
			<input type="hidden" id="fc_3dpro_id" name="fc_3dpro_id" value="0"/>
			<input type="hidden" id="fc_product_id" name="fc_product_id" value="0"/>
			<input type="hidden" id="fc_from_date" name="fc_from_date" value="<?php echo $dates['from_date'];?>"/>
			<input type="hidden" id="fc_to_date" name="fc_to_date" value="<?php echo $dates['to_date'];?>"/>
			<div class="row" style="padding:40px;">
				<div class="col-sm-12" style="padding-bottom:5px;">
					<span style="color:#2D2D2D;font-family:Georgia;font-size:27px;">Add your products</span><br><br>
					<span style="color:#3C3C3C;font-family:Arial;font-size:11px;">Please add the shown below items.</span><br><br>
				</div>
				<div class="col-sm-3">
					<div>
						<div id="wb_Shape496" style="width:167px;height:210px;z-index:2337;">
							<a href="javascript:selectFC3dPro();" style="text-decoration:none;"><div id="Shape496"><div style="padding-top: 90px;text-align:center;"><span style="color:#A9A9A9;font-family:Arial;font-size:16px;">Click here to link to your 3D Pro.<br></span></div></div></a>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div id="wb_Shape497" style="width:167px;height:210px;z-index:2338;">
						<a href="javascript:showCatalogues1();" style="text-decoration:none;"><div id="Shape497"><div style="padding-top: 90px;text-align:center;"><span style="color:#A9A9A9;font-family:Arial;font-size:16px;">Click here to link to your V-Catalogue</span></div></div></a>
					</div>
				</div>
				<div class="col-sm-3">
					<div id="wb_Shape498" style="width:167px;height:210px;z-index:2339;">
						<a href="javascript:showVideos1();" style="text-decoration:none;"><div id="Shape498"><div style="padding-top: 90px;text-align:center;"><span style="color:#A9A9A9;font-family:Arial;font-size:16px;">Click here to link to your Video</span></div></div></a>
					</div>
				</div>
				<div class="col-sm-3">
					<div id="wb_Shape499" style="width:167px;height:210px;z-index:2340;">
						<a href="javascript:selectFCProduct();" style="text-decoration:none;"><div id="Shape499"><div style="padding-top: 30px;text-align:center;"><span style="color:#A9A9A9;font-family:Arial;font-size:16px;">Click here to link to your Product<br></span><span style="color:#FF6347;font-family:Arial;font-size:11px;"><br><strong><u>Important Note:<br></u></strong><br>We only accept product with white background, please note that our system will automatically remove any product with colored background.</span></div></div></a>
					</div>
				</div>
				<div class="col-sm-10">
					<br><br>
					<span style="color:#696969;font-family:Arial;font-size:11px;">Your desksite will be added automaticlly once you press publish. </span>
				</div>
				<div class="col-sm-2">
					<br><br>
					<div id="wb_Shape487" style="width:149px;height:36px;z-index:2274;">
						<a href="javascript:confirmFCAD();" style="text-decoration:none;"><div id="Shape487"><div style="text-align:center;padding-top:10px;"><span style="color:#FFFFFF;font-family:Arial;font-size:16px;">Checkout</span></div></div></a>
					</div>
				</div>
			</div>
			<br><br><br><br><br>
			</form>
		</div>
	</div>
</div>
<br><br><br><br><br>
<div id="fc_video_modal" class="modal fade">
	<div class="modal-dialog" style="">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Select Videos</h3>
			</div>
			<div class="modal-body" >
				<div id="fc_video_area">
				
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" id="select_fc_video" class="btn btn-primary">Select Video</button>
			</div>
		</div>
	</div>
</div>
<div id="fc_catalogue_modal" class="modal fade">
	<div class="modal-dialog" style="">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Select Catalogues</h3>
			</div>
			<div class="modal-body" >
				<div id="fc_catalogue_area">
				
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" id="select_fc_catalogue" class="btn btn-primary">Select Catalogue</button>
			</div>
		</div>
	</div>
</div>

<div id="fc_3dpro_modal" class="modal fade">
	<div class="modal-dialog" style="">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Select 3D Pro</h3>
			</div>
			<div class="modal-body" >
				<div id="fc_3dpro_area">
				
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" id="select_fc_3dpro" class="btn btn-primary">Select 3D Pro</button>
			</div>
		</div>
	</div>
</div>

<div id="fc_product_modal" class="modal fade">
	<div class="modal-dialog" style="">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Select Product</h3>
			</div>
			<div class="modal-body" >
				<div class="row col-sm-12" >
			  		<div class="product-search-bar">
						<select name="sub_product_id" id="adsub_product_id" class="form-control" style="display:inline-block;width:auto;height:30px;">
					  		<?php foreach ($mproducts as $mpro) { ?>
				      			<?php foreach ($mpro['subproducts'] as $spro) { ?>
				        		<option value="<?php echo $spro['id'];?>"><?php echo $spro['name'];?> (<?php echo $mpro['name'];?>)</option>
				        		<?php } ?>
					    	<?php } ?>
					  	</select>
					  	<input type="text" id="adscitem_name" style="width: 230px; height: 29px; line-height: 29px;" name="item_name" placeholder="Type products name or no.">
					  	<button type="button" onclick="searchAdsProducts();" name="searchproduct" class="btn btn-search-black"><i class="fa fa-search"></i></button>
					</div>
					<br><br>
	  			</div>	
	  			<br><br>
			  	<div id="fc_product_area">
			  	
			  	</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" id="select_fc_product" class="btn btn-primary">Select Product</button>
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

function showVideos1() {
	$.get(base_url+"mystation/video/list",{},function(data){
		$("#fc_video_area").html(data);
		$("#fc_video_modal").modal('show').data('bs.modal').options.backdrop = 'static';
	},'html');
}

$("#select_fc_video").click(function(){
	var vd_id = $("input[type='radio'][name='myvideo_id']:checked").val();
	$("#fc_video_id").val(vd_id);
	$("#fc_video_modal").modal('hide');
});

function showCatalogues1() {
	$.get(base_url+"mystation/vcatalogue/list",{},function(data){
		$("#fc_catalogue_area").html(data);
		$("#fc_catalogue_modal").modal('show').data('bs.modal').options.backdrop = 'static';
	},'html');
}

$("#select_fc_catalogue").click(function(){
	var ctd_id = $("input[type='radio'][name='catalogue_ads_id']:checked").val();
	$("#fc_catalogue_id").val(ctd_id);
	$("#fc_catalogue_modal").modal('hide');
});

function selectFC3dPro() {
	$.get(base_url+"mystation/3dpro/list",{},function(data){
		$("#fc_3dpro_area").html(data);
		$("#fc_3dpro_modal").modal('show').data('bs.modal').options.backdrop = 'static';
	},'html');
}

$("#select_fc_3dpro").click(function(){
	var ctd_id = $("input[type='radio'][name='3dpro_ads_id']:checked").val();
	$("#fc_3dpro_id").val(ctd_id);
	$("#fc_3dpro_modal").modal('hide');
});

function selectFCProduct() {
	$("#fc_product_modal").modal('show').data('bs.modal').options.backdrop = 'static';
}

function searchAdsProducts() {
	$.get(base_url+"mystation/product/list",{query: $("#adscitem_name").val(), sproduct_id: $("#adsub_product_id").val()},function(data){
		$("#fc_product_area").html(data);
	},'html');
}

$("#select_fc_product").click(function(){
	var ctd_id = $("input[type='radio'][name='ads_product_id']:checked").val();
	$("#fc_product_id").val(ctd_id);
	$("#fc_product_modal").modal('hide');
});

function confirmFCAD() {
	if($("#fc_3dpro_id").val() == "") {
		alert("Please select 3D Pro.");
	} else if($("#fc_catalogue_id").val() == "") {
		alert("Please select catalogue.");
	} else if($("#fc_video_id").val() == "") {
		alert("Please select video.");
	} else if($("#fc_product_id").val() == "") {
		alert("Please select product.");
	} else {
		ajaxindicatorstart("Please wait .. while we confirm ad...");
		var options = {
				target : '#response', // target element(s) to be updated with server response 
				beforeSubmit : showFCConfirmRequest, // pre-submit callback 
				success :  showFCConfirmResponse,
				url : base_url+'mystation/ads/featured/confirm',
				semantic : true,
				dataType : 'json'
			};
		$('#fcadconfirm').ajaxSubmit(options);
	}
}
function showFCConfirmRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showFCConfirmResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 0) {
		//alert(resp.msg);
	} else {
		//alert(resp.msg);
		window.location.href = base_url+resp.ads_id+"/featured-ads-checkout";
	}
}

</script>