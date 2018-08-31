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
</style>
<div class="panel-heading custom-panel-heading" style="text-align:center;padding-top: 15px !important;">
	<a href="javascript:editOldSubProduct();" class="btn-custom-product" id="product_edit_btn">
		<img src="<?php echo asset_url();?>images/img1290.png" id="Image6" alt="" style="width:16px;height:16px;">
		<b>Edit</b>
	</a>
	<!-- <a href="javascript:addOldSubProduct();" class="btn-custom-product" id="product_add_btn">
		<img src="<?php echo asset_url();?>images/img1495.png" id="Image6" alt="" style="width:20px;height:20px;">
		<b>Add</b>
	</a> -->
	<a href="javascript:deleteOldSubProduct();" class="btn-custom-product" id="product_delete_btn">
		<img src="<?php echo asset_url();?>images/img1289.png" id="Image6" alt="" style="width:16px;height:16px;">
		<b>Delete</b>
	</a>
	<a href="javascript:moveUpSubProduct();" class="btn-custom-product" id="product_up_btn">
		<img src="<?php echo asset_url();?>images/img1497.png" id="Image6" alt="" style="width:20px;height:20px;">
		<b>Move Up</b>
	</a>
	<a href="javascript:moveDownSubProduct();" class="btn-custom-product" id="product_down_btn">
		<img src="<?php echo asset_url();?>images/img1498.png" id="Image6" alt="" style="width:20px;height:20px;">
		<b>Move Down</b>
	</a>
	<span class="pull-right-close" style="padding-top: 0px;margin-top: -5px;"><a href="javascript:ShowObjectWithEffect('Layer169', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
 </div>
<div class="panel-body panel-body-custom" id="product_bg_info">
	<br><br>
	<input type="hidden" id="total_mp_count" value="<?php echo count($mainproducts);?>"/>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 bg-image-title" style="text-align:left;">Sub Products Directory</div>
		<div class="col-sm-3"></div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 mp-description">
			The Sub Products are the products listed under each selected Main Product. <br>
			* Click the checkbox next to each Sub Product, then edit using the tools bar buttons. <br>
			* To add a new Sub Product, simply click on add field under the required Main Product, <br>then type a name.
		</div>
		<div class="col-sm-3"></div>
	</div>
	<br>
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-1"></div>
			<?php foreach ($mainproducts as $key=>$mainproduct) { ?>
			<div class="col-sm-2">
				<div class="row">
					<input type="hidden" id="mpr_id" value="<?php echo $mainproduct['id'];?>"/>
					<div class="col-sm-12">
						<a href="javascript:return false;" class="btn btn-default sproduct-custom-button"><?php echo $mainproduct['name'];?></a>
					</div>
					<div class="col-sm-12">
						<br>
						<?php $i = 0; foreach ($subproducts as $subproduct) { ?>
						<?php if($subproduct['mproduct_id'] == $mainproduct['id']) { ?>
						<input type="checkbox" name="spr_id" id="spr_id" value="<?php echo $mainproduct['id'];?>#<?php echo $subproduct['id'];?>"/>
						<input type="hidden" id="spr_name<?php echo $subproduct['id'];?>" value="<?php echo $subproduct['name'];?>"/>
						<input type="hidden" id="spr_order<?php echo $subproduct['id'];?>" value="<?php echo $subproduct['sortorder'];?>"/>
						<a href="javascript:return false;" class="btn btn-default sproduct-custom-btn"><?php echo $subproduct['name'];?></a>
						<div class="row">
							<br>
						</div>
						<?php $i++; } ?>
						<?php } ?>
						<?php 
							if(($i < 10)) {
							$scount = (10-$i);
						?>
							<?php for ($j = 0; $j < $scount; $j++) {?>
								<input type="checkbox" name="spr_id" id="spr_id" value="<?php echo $mainproduct['id'];?>#0"/>
								<a href="javascript:addOpenSubProduct(<?php echo $mainproduct['id'];?>,'<?php echo ($i+$j+1);?>');" class="btn btn-default sproduct-custom-btn-b" >ADD</a>
								<div class="row">
									<br>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
					<br><br>
				</div>
			</div>
			<?php if($key ==4) { ?>
			<div class="col-sm-1">&nbsp;</div>
			</div>
			<div class="row">
			<div class="col-sm-1">&nbsp;</div>
			<?php } ?>
			<?php } ?>
		</div>
		<div class="row">
			<br><br><br><br><br><br><br>
		</div>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<div id="addSubPModal" class="modal fade" role="dialog">
  	<div class="modal-dialog" style="width:431px;padding-top:15%;">
    	<div class="modal-content">
      		<div class="modal-header" style="background-color: #FF6347;padding: 8px;text-align: center;">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title" style="color:#FFFFFF; font-family:Georgia;font-size:21px;font-style:normal;text-align:center;">Add New Main Product</h4>
      		</div>
      		<div class="modal-body" style="background-color: #FAFAFA;">
      			<form name="frmaddsubproduct" method="post" action="" enctype="multipart/form-data" id="frmaddsubproduct">
      				<input type="hidden" name="sortorder" id="sproduct_sortorder" value="" />
        			<div class="row">
	        			<input type="hidden" name="mproduct_id" id="mproduct_id" value=""/>
	        			<div class="col-sm-12" style="margin-bottom:5px;">
	        				<div class="form-group">
	        					<div class="control-label label-text-form col-sm-4">Sub Product Name </div>
								<div class="label-text-input col-sm-8">
	                            	<input type="text" name="subproduct"  placeholder="Sub Product Name" id="subproduct" class="form-control form-custom-input" value="" spellcheck="true" maxlength="25"/>
								</div>
								<div class="messageContainer"></div>
							</div>
	        			</div>
	        			<div class="col-sm-12" style="margin-bottom:15px;">
	        				<div class="form-group">
								<div class="label-text-input col-sm-12 text-right">
	                            	<input type="button" class="btn btn-sm btn-user-custom" value="Add" onclick="addNewSubProduct();"/>
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
<div id="editSubPModal" class="modal fade" role="dialog">
  	<div class="modal-dialog" style="width:431px;padding-top:15%;">
    	<div class="modal-content">
      		<div class="modal-header" style="background-color: #FF6347;padding: 8px;text-align: center;">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title" style="color:#FFFFFF; font-family:Georgia;font-size:21px;font-style:normal;text-align:center;">Update Sub Product</h4>
      		</div>
      		<div class="modal-body" style="background-color: #FAFAFA;">
      			<form name="frmaddmainproduct" method="post" action="" enctype="multipart/form-data" id="frmaddmainproduct">
      				<input type="hidden" name="old_sproduct_id" id="old_sproduct_id" value=""/>
        			<div class="row">
	        			<div class="col-sm-12" style="margin-bottom:5px;">
	        				<div class="form-group">
	        					<div class="control-label label-text-form col-sm-4">Sub Product Name </div>
								<div class="label-text-input col-sm-8">
	                            	<input type="text" name="subproduct" placeholder="Sub Product Name" id="old_subproduct" class="form-control form-custom-input" value="" spellcheck="true" maxlength="25"/>
								</div>
								<div class="messageContainer"></div>
							</div>
	        			</div>
	        			<div class="col-sm-12" style="margin-bottom:15px;">
	        				<div class="form-group">
								<div class="label-text-input col-sm-12 text-right">
	                            	<input type="button" class="btn btn-sm btn-user-custom" value="Update" onclick="updateNewSubProduct();"/>
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
<script src="<?php echo asset_url();?>js/bootstrap-dropdownhover.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script>
function addOldMainProduct() {
	$("#addMainPModal").modal('show');
}

function selectScat(scat_id,input,name) {
	$("#ds_main_cat").val(scat_id);
	$("#ds_main_cat_label").html(name+' <span class="caret" style="color:#d9574d;"></span>');
}

function selecteditScat(scat_id,input,name) {
	$("#old_ds_main_cat").val(scat_id);
	$("#ds_old_main_cat_label").html(name+' <span class="caret" style="color:#d9574d;"></span>');
}

function addOpenSubProduct(mid,sortorder) {
	$("#sproduct_sortorder").val(sortorder);
	$('[name=mproduct_id]').val(mid);
	$("#mproduct_id").val(mid);
	$("#addSubPModal").modal('show');
}

function addNewSubProduct() {
	ajaxindicatorstart("Please wait .. while we save sub product...");
	var options = {
			target : '#response', // target element(s) to be updated with server response 
			beforeSubmit : showMainProductRequest, // pre-submit callback 
			success :  showMainProductResponse,
			url : base_url+'mystation/desksite/addsubproduct',
			semantic : true,
			dataType : 'json'
		};
	$('#frmaddsubproduct').ajaxSubmit(options);
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
		$("#addSubPModal").modal('hide');
		$.post(base_url+"mystation/desksite/viewsubproducts",{},function(data){
			$("#subproductnav").html(data);
		},'html');
	}
}

function editOldSubProduct() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="spr_id"]:checked').each(function() {
		item_id = this.value;
	   	checkcount++;
	});
	if(checkcount <=0 ){
		alert("Select sub product to update.");
	} else if(checkcount > 1) {
		alert("You can edit only one sub product at a time.");
	} else {
		var mitems = item_id.split("#");
		if(mitems[1] != "0" ) {
			var item_name = $("#spr_name"+mitems[1]).val();
			$("#old_subproduct").val(item_name);
			$("#old_sproduct_id").val(mitems[1]);
			$("#editSubPModal").modal('show');
		} else {
			alert("Add sub product before edit.");
		}
	}
}

function updateNewSubProduct() {
	ajaxindicatorstart("Please wait .. while we save sub product...");
	$.post(base_url+"mystation/desksite/updatesubproduct",{id: $("#old_sproduct_id").val(), name: $("#old_subproduct").val()},function(resp){
		if(resp.status == 0) {
			alert(resp.msg);
		} else {
			//alert(resp.msg);
			$.get(base_url+"mystation/desksite/viewsubproducts",{},function(data){
				$("#subproductnav").html(data);
				ajaxindicatorstop();
			},'html');
		}
	},'json');
}

function deleteOldSubProduct() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="spr_id"]:checked').each(function() {
		if(item_id == "") {
			item_id = this.value;
		} else {
			item_id = item_id+","+this.value;
		}
	   	checkcount++;
	});
	if(checkcount <=0 ){
		alert("Select sub product to delete.");
	} else {
		var mitems = item_id.split("#");
		if(mitems[1] != "0" ) {
			confirmbox("This sub-product is a folder and it may contains products, are you sure you want to delete?",
				function() {
					$.get(base_url+"mystation/desksite/deletesubproduct",{item_id: mitems[1]},function(data){
						if(data.status == 0) {
							alert(resp.msg);
						} else {
							//alert(data.msg);
							$.get(base_url+"mystation/desksite/viewsubproducts",{},function(data){
								$("#subproductnav").html(data);
								ajaxindicatorstop();
							},'html');
						}
					},'json');
				},
				function() {
           		//
       	 		}
			);
		} else {
			alert("Add sub product before delete.");
		}
	}
}

function moveUpSubProduct() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="spr_id"]:checked').each(function() {
		item_id = this.value;
	   	checkcount++;
	});
	if(checkcount <=0 ){
		alert("Select sub product to move.");
	} else if(checkcount > 1) {
		alert("You can move only one sub product at a time.");
	} else {
		var mitems = item_id.split("#");
		if(mitems[1] != "0" ) {
			var sortorder = $("#spr_order"+mitems[1]).val();
			if(parseInt(sortorder) > 1) {
				$.get(base_url+"mystation/desksite/moveupsubproduct",{item_id: mitems[1], mid: mitems[0], sortorder: sortorder},function(data){
					if(data.status == 0) {
						alert(data.msg);
					} else {
						//alert(data.msg);
						$.get(base_url+"mystation/desksite/viewsubproducts",{},function(data){
							$("#subproductnav").html(data);
							ajaxindicatorstop();
						},'html');
					}
				},'json');
			}
		} else {
			alert("Add sub product before move.");
		}
	}
}

function moveDownSubProduct() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="spr_id"]:checked').each(function() {
		item_id = this.value;
	   	checkcount++;
	});
	if(checkcount <=0 ){
		alert("Select sub product to move.");
	} else if(checkcount > 1) {
		alert("You can move only one sub product at a time.");
	} else {
		var mitems = item_id.split("#");
		if(mitems[1] != "0" ) {
			var sortorder = $("#spr_order"+mitems[1]).val();
			if(parseInt(sortorder) < 10 ) {
				$.get(base_url+"mystation/desksite/movedownsubproduct",{item_id: mitems[1], mid: mitems[0], sortorder: sortorder},function(data){
					if(data.status == 0) {
						alert(data.msg);
					} else {
						//alert(data.msg);
						$.get(base_url+"mystation/desksite/viewsubproducts",{},function(data){
							$("#subproductnav").html(data);
							ajaxindicatorstop();
						},'html');
					}
				},'json');
			}
		} else {
			alert("Add sub product before move.");
		}
	}
}



</script>
