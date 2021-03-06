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
	.btn-user-custom:hover {
		color:#fff;
	}
	.list-group{
		max-height: 292px;
		margin-bottom: 10px;
		overflow:scroll;
		-webkit-overflow-scrolling: touch;
	}
	.list-group-hover .list-group-item:hover {
		background-color: #B0B0B0 !important;
	}
	.list-group-item.active, .list-group-item:hover, .list-group-item:focus {
		background-color: #B0B0B0 !important;
		border-color: #B0B0B0 !important;
	}
	.list-group-item {
		padding:2px 15px !important;
	}
</style>
<?php //echo '<pre>';print_r($mcats);?>
<div class="panel-heading custom-panel-heading" style="text-align:center;padding-top: 15px !important;">
	<a href="javascript:editOldMainProduct();" class="btn-custom-product" id="product_edit_btn">
		<img src="<?php echo asset_url();?>images/img1290.png" id="Image6" alt="" style="width:16px;height:16px;">
		<b>Edit</b>
	</a>
	<a href="javascript:addOldMainProduct();" class="btn-custom-product" id="product_add_btn">
		<img src="<?php echo asset_url();?>images/img1495.png" id="Image6" alt="" style="width:20px;height:20px;">
		<b>Add</b>
	</a>
	<a href="javascript:deleteOldMainProduct();" class="btn-custom-product" id="product_delete_btn">
		<img src="<?php echo asset_url();?>images/img1289.png" id="Image6" alt="" style="width:16px;height:16px;">
		<b>Delete</b>
	</a>
	<a href="javascript:moveUpMainProduct();" class="btn-custom-product" id="product_up_btn">
		<img src="<?php echo asset_url();?>images/img1497.png" id="Image6" alt="" style="width:20px;height:20px;">
		<b>Move Up</b>
	</a>
	<a href="javascript:moveDownProduct();" class="btn-custom-product" id="product_down_btn">
		<img src="<?php echo asset_url();?>images/img1498.png" id="Image6" alt="" style="width:20px;height:20px;">
		<b>Move Down</b>
	</a>
	<span class="pull-right-close" style="padding-top: 0px;margin-top: -5px;"><a href="javascript:ShowObjectWithEffect('Layer169', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
 </div>
<div class="panel-body panel-body-custom" id="product_bg_info">
	<br><br>
	<input type="hidden" id="total_mp_count" value="<?php echo count($mainproducts);?>"/>
	<?php if($tscategory_id == 1) { ?>
	<input type="hidden" id="mpcountmain" value="10" />
	<?php } else { ?>
	<input type="hidden" id="mpcountmain" value="14" />
	<?php } ?>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 bg-image-title" style="text-align:left;">Main Products Directory</div>
		<div class="col-sm-3"></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 mp-description">
			The Main Products are the contents of your Desksite/Website menu, which shows the main <br>products you work for. <br>
			* Click the checkbox next to each Main Product then edit using the tools bar. <br>
			* To add new Main Product, simply click on add icon, then type the name.
		</div>
		<div class="col-sm-3"></div>
	</div>
	<br>
	<?php foreach ($mainproducts as $mainproduct) { ?>
	<div class="row" style="margin-bottom:5px;">
		<div class="col-sm-3 text-right mproduct-checkbox">
			<input type="checkbox" name="mproduct_id" value="<?php echo $mainproduct['id'];?>"/>
			<input type="hidden" id="old_pro_name<?php echo $mainproduct['id'];?>" value="<?php echo $mainproduct['name'];?>"/>
			<input type="hidden" id="old_scat_name<?php echo $mainproduct['id'];?>" value="<?php echo $mainproduct['scat_name'];?>"/>
			<input type="hidden" id="old_scat_id<?php echo $mainproduct['id'];?>" value="<?php echo $mainproduct['subcat_id'];?>"/>
			<input type="hidden" id="sortorder<?php echo $mainproduct['id'];?>" value="<?php echo $mainproduct['sortorder'];?>"/>
		</div>
		<div class="col-sm-6">
			<div class="row">
				<div class="col-sm-2">
					<a href="javascript:return false;" class="btn btn-default mp-custom-button"><?php echo $mainproduct['name'];?></a>
				</div>
			</div>
		</div>
		<div class="col-sm-3"></div>
	</div>
	<?php } ?>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<div id="addMainPModal" class="modal fade" role="dialog">
  	<div class="modal-dialog" style="width:431px;padding-top:15%;">
    	<div class="modal-content">
      		<div class="modal-header" style="background-color: #FF6347;padding: 8px;text-align: center;">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title" style="color:#FFFFFF; font-family:Georgia;font-size:21px;font-style:normal;text-align:center;">Add New Main Product</h4>
      		</div>
      		<div class="modal-body" style="background-color: #FAFAFA;">
      			<?php if(($tscategory_id == 1 && count($mainproducts) < 10) || ($tscategory_id == 3 && count($mainproducts) < 14)) { ?>
      			<form name="frmaddmainproduct" method="post" action="" enctype="multipart/form-data" id="frmaddmainproduct">
        			<div class="row">
	        			<div class="col-sm-12" style="margin-bottom:5px;">
	        				<div class="form-group">
	        					<div class="control-label label-text-form col-sm-4">Main Category </div>
								<div class="label-text-input col-sm-8">
	                            	<div class="">
									  	<button class="btn btn-default btn-main-cat dropdown-toggle" type="button" data-toggle="modal" data-target="#cat_sub_cat" id="ds_main_cat_label">
									   		Select The Main Category <span class="caret" style="color:#d9574d;"></span>
									  	</button>
									</div>
								</div>
								<div class="form-group" >
									<div>
										<input type="hidden" name="main_category" id="ds_main_cat" value=""/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
	        			</div>
	        			<div class="col-sm-12" style="margin-bottom:5px;">
	        				<div class="form-group">
	        					<div class="control-label label-text-form col-sm-4">Main Product Name </div>
								<div class="label-text-input col-sm-8">
	                            	<input type="text" name="mainproduct"  placeholder="Main Product Name" id="mainproduct" class="form-control form-custom-input" value="" autocorrect="on" maxlength="25" spellcheck="true"/>
								</div>
								<div class="messageContainer"></div>
							</div>
	        			</div>
	        			<div class="col-sm-12" style="margin-bottom:15px;">
	        				<div class="form-group">
								<div class="label-text-input col-sm-12 text-right">
	                            	<input type="button" class="btn btn-sm btn-user-custom" value="Add" onclick="addNewMainProduct();"/>
	                            	<input type="button" class="btn btn-sm btn-user-custom" data-dismiss="modal" value="Close"/>
								</div>
							</div>
	        			</div>
        			</div>
        		</form>
        		<?php } else { ?>
        			<div class="row" style="padding-top: 10px;">
						<div class="col-sm-2"></div>
						<div class="col-sm-8">
							<div style="text-align: center;">
								<span
									style="color: #F05539; font-family: 'Arial Black'; font-size: 16px;">Ooops</span>
							</div>
							<br>
							<div style="text-align: center;">
								You can add only 10 main products. You have have reached your limit.
							</div>
							<br>
						</div>
						<div class="col-sm-2"></div>
					</div>
					<br>
					<div class="row text-center">
						<a href="" class="btn btn-sm btn-danger-custom" data-dismiss="modal" style="width: 100px;">OK</a>
					</div>
					<br>
					<br>
        		<?php } ?>
      		</div>
    	</div>
  	</div>
</div>
<div class="modal fade" id="cat_sub_cat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="background:rgba(0,0,0,0.5);">
	<div class="modal-dialog" role="document" style="width:785px !important;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel" style="font-family:Georgia;font-size:21px;font-style:normal;">Select Category</h4>
			</div>
			<div class="modal-body" style="height:330px;">
				<ul class="list-group pull-left" style="width:350px;overflow-x:hidden;">
					<?php foreach ($mcats as $mcat) { ?>
						<li class="list-group-item">
							<a href="javascript:void(0);" onclick="get_subcat('<?php echo $mcat['id'];?>')" style="color:#000 !important;"><?php echo $mcat['name'];?></a>
							
						</li>
					<?php } ?>
				</ul>
				<?php foreach ($mcats as $mcat) { ?>
					<ul class="sub_category list-group pull-right main_cat_<?php echo $mcat['id'];?>" style="width:350px;overflow-x:hidden;display:none;">
						<?php foreach ($mcat['subcats'] as $scat) { ?>
							<li class="list-group-item"><a style="color:#000 !important;" href="javascript:void(0);" onclick="selectScat('<?php echo $scat['id'];?>','1','<?php echo $scat['name'];?>');"><?php echo $scat['name'];?></a></li>
						<?php } ?>
					</ul>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<div id="editMainPModal" class="modal fade" role="dialog">
  	<div class="modal-dialog" style="width:431px;padding-top:15%;">
    	<div class="modal-content">
      		<div class="modal-header" style="background-color: #FF6347;padding: 8px;text-align: center;">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title" style="color:#FFFFFF; font-family:Georgia;font-size:21px;font-style:normal;text-align:center;">Update Main Product</h4>
      		</div>
      		<div class="modal-body" style="background-color: #FAFAFA;">
      			<form name="frmaddmainproduct" method="post" action="" enctype="multipart/form-data" id="frmaddmainproduct">
      				<input type="hidden" name="old_mproduct_id" id="old_mproduct_id" value=""/>
        			<div class="row">
	        			<div class="col-sm-12" style="margin-bottom:5px;">
	        				<div class="form-group">
	        					<div class="control-label label-text-form col-sm-4">Main Category </div>
								<div class="label-text-input col-sm-8">
	                            	<div class="">
									  	<button class="btn btn-default btn-main-cat dropdown-toggle" type="button" data-toggle="modal" data-target="#edit_cat_sub_cat" id="ds_old_main_cat_label">
									   		Select The Main Category <span class="caret" style="color:#d9574d;"></span>
									  	</button>
									</div>
								</div>
								<div class="form-group" >
									<div>
										<input type="hidden" name="main_category_id" id="old_ds_main_cat" value=""/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
	        			</div>
	        			<div class="col-sm-12" style="margin-bottom:5px;">
	        				<div class="form-group">
	        					<div class="control-label label-text-form col-sm-4">Main Product Name </div>
								<div class="label-text-input col-sm-8">
	                            	<input type="text" name="mainproduct"  placeholder="Main Product Name" id="old_mainproduct" class="form-control form-custom-input" value="" autocorrect="on" maxlength="25"/>
								</div>
								<div class="messageContainer"></div>
							</div>
	        			</div>
	        			<div class="col-sm-12" style="margin-bottom:15px;">
	        				<div class="form-group">
								<div class="label-text-input col-sm-12 text-right">
	                            	<input type="button" class="btn btn-sm btn-user-custom" value="Update" onclick="updateNewMainProduct();"/>
	                            	<input type="button" class="btn btn-sm btn-user-custom" data-dismiss="modal" value="Close"/>
								</div>
							</div>
	        			</div>
        			</div>
        		</form>
      		</div>
    	</div>
  	</div>
</div>
<div class="modal fade" id="edit_cat_sub_cat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="background:rgba(0,0,0,0.5);">
	<div class="modal-dialog" role="document" style="width:785px !important;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel" style="font-family:Georgia;font-size:21px;font-style:normal;">Select Category</h4>
			</div>
			<div class="modal-body" style="height:330px;">
				<ul class="list-group pull-left" style="width:350px;overflow-x:hidden;">
					<?php foreach ($mcats as $mcat) { ?>
						<li class="list-group-item">
							<a href="javascript:void(0);" onclick="get_subcat('<?php echo $mcat['id'];?>')" style="color:#000 !important;"><?php echo $mcat['name'];?></a>
							
						</li>
					<?php } ?>
				</ul>
				<?php foreach ($mcats as $mcat) { ?>
					<ul class="sub_category list-group pull-right main_cat_<?php echo $mcat['id'];?>" style="width:350px;overflow-x:hidden;display:none;">
						<?php foreach ($mcat['subcats'] as $scat) { ?>
							<li class="list-group-item"><a style="color:#000 !important;" href="javascript:void(0);" onclick="selecteditScat('<?php echo $scat['id'];?>','1','<?php echo $scat['name'];?>');"><?php echo $scat['name'];?></a></li>
						<?php } ?>
					</ul>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo asset_url();?>js/bootstrap-dropdownhover.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script>
function addOldMainProduct() {
	$("#addMainPModal").modal('show');
}
function selectScat(scat_id,input,name) { 
	$("#ds_main_cat").val(scat_id);
	$("#ds_main_cat_label").html(name+' <span class="caret" style="color:#d9574d;"></span>');
	$('#cat_sub_cat').modal('toggle');
}
function selecteditScat(scat_id,input,name) { 
	$("#old_ds_main_cat").val(scat_id);
	$("#ds_old_main_cat_label").html(name+' <span class="caret" style="color:#d9574d;"></span>');
	$('#edit_cat_sub_cat').modal('toggle');
}
function addNewMainProduct() {
	var actual_count = parseInt($("#mpcountmain").val());
	var total_mp_count = parseInt($("#total_mp_count").val());
	if(total_mp_count < actual_count) {
		var name = $("#mainproduct").val();
		var catid = $("#ds_main_cat").val();
		if(name != "" && catid != "") {
			ajaxindicatorstart("Please wait .. while we save main product...");
			var options = {
					target : '#response', // target element(s) to be updated with server response 
					beforeSubmit : showMainProductRequest, // pre-submit callback 
					success :  showMainProductResponse,
					url : base_url+'mystation/desksite/addmainproduct',
					semantic : true,
					dataType : 'json'
				};
			$('#frmaddmainproduct').ajaxSubmit(options);
		} else {
			if(name == "") {
				alert("Please enter main product name");
			} else {
				alert("Please select main/sub category");
			}
		}
	} else {
		alert("You have already added 10 main products.");
	}
}
function showMainProductRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showMainProductResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 0) {
		alert(resp.msg);
	} else {
		//alert(resp.msg);
		$.get(base_url+"mystation/desksite/viewmainproducts",{},function(data){
			$("#mainproductnav").html(data);
		},'html');
	}
}
function editOldMainProduct() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="mproduct_id"]:checked').each(function() {
		item_id = this.value;
	   	checkcount++;
	});
	if(checkcount <=0 ){
		alert("Select main product to update.");
	} else if(checkcount > 1) {
		alert("You can edit only one main product at a time.");
	} else {
		var item_name = $("#old_pro_name"+item_id).val();
		var scat_name = $("#old_scat_name"+item_id).val();
		var scat_id = $("#old_scat_id"+item_id).val();
		$("#ds_old_main_cat_label").html(scat_name+' <span class="caret" style="color:#d9574d;"></span>');
		$("#old_mainproduct").val(item_name);
		$("#old_mproduct_id").val(item_id);
		$("#old_ds_main_cat").val(scat_id);
		$("#editMainPModal").modal('show');
	}
}
function updateNewMainProduct() {
	ajaxindicatorstart("Please wait .. while we save main product...");
	$.post(base_url+"mystation/desksite/updatemainproduct",{id: $("#old_mproduct_id").val(), name: $("#old_mainproduct").val(), scat_id: $("#old_ds_main_cat").val()},function(resp){
		if(resp.status == 0) {
			alert(resp.msg);
		} else {
			//alert(resp.msg);
			$.get(base_url+"mystation/desksite/viewmainproducts",{},function(data){
				$("#mainproductnav").html(data);
				ajaxindicatorstop();
			},'html');
		}
	},'json');
}
function deleteOldMainProduct() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="mproduct_id"]:checked').each(function() {
		if(item_id == "") {
			item_id = this.value;
		} else {
			item_id = item_id+","+this.value;
		}
	   	checkcount++;
	});
	if(checkcount <=0 ){
		alert("Select main product to delete.");
	} else {
		confirmbox("This main product is a folder and it may contains other sub-products or products, are you sure you want to delete?",
			function() {
				ajaxindicatorstart("Please wait .. while we delete main product...");
				$.get(base_url+"mystation/desksite/deletemainproduct",{item_id: item_id},function(data){
					if(data.status == 0) {
						alert(resp.msg);
					} else {
						//alert(data.msg);
						$.get(base_url+"mystation/desksite/viewmainproducts",{},function(data){
							$("#mainproductnav").html(data);
							ajaxindicatorstop();
						},'html');
					}
				},'json');
			},
			function() {
	           //
	        }
		);
	}
}
function moveUpMainProduct() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="mproduct_id"]:checked').each(function() {
		item_id = this.value;
	   	checkcount++;
	});
	if(checkcount <=0 ){
		alert("Select main product to move.");
	} else if(checkcount > 1) {
		alert("You can move only one main product at a time.");
	} else {
		ajaxindicatorstart("Please wait .. while we move main product...");
		var sortorder = $("#sortorder"+item_id).val();
		$.get(base_url+"mystation/desksite/moveupmainproduct",{item_id: item_id, sortorder: sortorder},function(data){
			if(data.status == 0) {
				alert(resp.msg);
			} else {
				//alert(data.msg);
				$.get(base_url+"mystation/desksite/viewmainproducts",{},function(data){
					$("#mainproductnav").html(data);
					ajaxindicatorstop();
				},'html');
			}
		},'json');
	}
}
function moveDownProduct() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="mproduct_id"]:checked').each(function() {
		item_id = this.value;
	   	checkcount++;
	});
	if(checkcount <=0 ){
		alert("Select main product to move.");
	} else if(checkcount > 1) {
		alert("You can move only one main product at a time.");
	} else {
		ajaxindicatorstart("Please wait .. while we move main product...");
		var sortorder = $("#sortorder"+item_id).val();
		$.get(base_url+"mystation/desksite/movedownmainproduct",{item_id: item_id, sortorder: sortorder},function(data){
			if(data.status == 0) {
				alert(resp.msg);
			} else {
				//alert(data.msg);
				$.get(base_url+"mystation/desksite/viewmainproducts",{},function(data){
					$("#mainproductnav").html(data);
					ajaxindicatorstop();
				},'html');
			}
		},'json');
	}
}
$(function(){
    $('.list-group li').click(function(e) {
        e.preventDefault()
        $that = $(this);
        $that.parent().find('li').removeClass('active');
        $that.addClass('active');
    });
})
function get_subcat(id){
	$(".sub_category").hide();
	$(".main_cat_"+id).show();
}
</script>