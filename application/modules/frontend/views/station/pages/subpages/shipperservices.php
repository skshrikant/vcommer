<style>
.oddrow {background-color: #DCDCDC;}
</style>
<div class="panel-heading custom-panel-heading" style="text-align:left;padding-top: 10px !important;">
	<span class="nav-text"><input type="checkbox" id="mytogglecheck"> &nbsp;&nbsp;&nbsp;<b>All</b></span>
	<a href="javascript:addNewProduct();" class="btn-custom-product" id="product_add_btn">
		<img src="<?php echo asset_url();?>images/img2302.png" id="Image6" alt="" style="width:25px;height:25px;">
		<b>Add Service</b>
	</a>
	<a href="javascript:editOldProduct();" class="btn-custom-product" id="product_edit_btn">
		<img src="<?php echo asset_url();?>images/img1290.png" id="Image6" alt="" style="width:20px;height:20px;">
		<b>Edit Service</b>
	</a>
	<a href="javascript:deleteOldProduct();" class="btn-custom-product" id="product_delete_btn">
		<img src="<?php echo asset_url();?>images/img1289.png" id="Image6" alt="" style="width:20px;height:20px;">
		<b>Delete Service</b>
	</a>
	<span class="pull-right-close" style="padding-top: 0px;"><a href="javascript:ShowObjectWithEffect('Layer169', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
 </div>
<div class="panel-body panel-body-custom" id="company_product_info">
	<div id="product_list">
		<div class="product-list-outer">
			<div class="row">
				<div class="col-sm-9">
					<div class="product-list-title">
						Manage Your Services
					</div>
					<br>
					<div class="product-list-text">
						Click on add icon to add more service, or checkbox next to each service and edit using the tools bar buttons.
					</div>
					<br>
				</div>
				<div class="col-sm-3">
					<div class="pink-circle">
						<span class="help-text-sm">You have added</span><br>
						<?php $cntService = 0; 
						 foreach ($services as $key=>$product) { 
							 if($product['is_special'] == 1) { 
									$cntService++;
							 } 
						 } ?>
						<span class="help-text-red"><?php echo $cntService;?></span><br>
						<span class="help-text-sm">Services</span>
					</div>
				</div>
			</div>
			<br><br>
			<div class="myservicelist">
			
			<?php foreach ($services as $key=>$product) { ?>
				<?php if($product['is_special'] == 0) { ?>
					<div class="row <?php if(($key+1)%2 == 1) { ?>oddrow<?php } ?>" style="margin:0px;">
						<div class="col-sm-12 product-list-row">
							<div class="col-sm-1 product-select">
								<input type="checkbox" name="service_id" class="myserviceclass" value="<?php echo $product['id'];?>" >
							</div>
							<div class="col-sm-2">
								<img src="<?php echo asset_url();?><?php echo $product['image1'];?>" class="product-item-image" alt="" />
							</div>
							<div class="col-sm-9">
								<div class="row">
									<div class="col-sm-12 product-item-name"><?php echo $product['name'];?></div>
									<div class="col-sm-12 product-item-desc"><?php echo substr($product['description'],0,250);?> ...</div>
									<!--<div class="col-sm-12 product-item-qty"><a href="javascript:clickToPreview();" style="color:#1E90FF;font-family:Arial;font-size:12px;">Click To Preview</a></div>-->
								</div>
							</div>
						</div>
					</div>
					<br>
				<?php } ?>
			<?php } ?>
			</div>
		</div>
	</div>
</div>

<script>
function addNewProduct() {
	<?php if(count($services) < 10 ) { ?>
	$.get(base_url+"mystation/desksite/newmainservice",{},function(data){
		$("#mainservicenav").html(data);
		$(document).ready(function(){
			$('#newmainservicefrm').bootstrapValidator({
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
		                 	notEmpty: {
		                     	message: 'Service name is required and cannot be empty'
		                 	}
		             	}
		    	   	},
		    	   	'shipping_cate_id[]': {
		    	   		validators: {
		                 	notEmpty: {
		                     	message: 'Service Category is required and cannot be empty'
		                 	}
		             	}
		    	   	},
		    	   	'description[]': {
		    	   		validators: {
		    	   			notEmpty: {
		    	   				message: 'Service description is required and cannot be empty'
		    	   			}
		    	   		}
		    	   	},
				     
				}
			}).on('error.field.bv', function(e, data) {
				if (data.bv.getSubmitButton()) {
					data.bv.disableSubmitButtons(false);
				}
		   	}).on( 'status.field.bv', function( e, data ) {
		    	$( '#newmssubmitbtn').attr( 'disabled', false );
		    }).on('success.form.bv', function(e) {
			   // Prevent form submission
			   e.preventDefault();
			   saveNewMainService();
			});
		});
	},'html');
	<?php } else { ?>
		alert("You can add only 10 main services.");
	<?php } ?>
}

function editOldProduct() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="service_id"]:checked').each(function() {
		item_id = this.value;
	   	checkcount++;
	});
	if(checkcount <=0 ){
		alert("Select service to update.");
	} else if(checkcount > 1) {
		alert("You can edit only one service at a time.");
	} else {
		$.get(base_url+"mystation/desksite/editmainservice/"+item_id,{},function(data){
			$("#mainservicenav").html(data);
			$(document).ready(function(){
				$('#editmainservicefrm').bootstrapValidator({
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
			                 	notEmpty: {
			                     	message: 'Service name is required and cannot be empty'
			                 	}
			             	}
			    	   	},
			    	   	'shipping_cate_id[]': {
			    	   		validators: {
			                 	notEmpty: {
			                     	message: 'Service Category is required and cannot be empty'
			                 	}
			             	}
			    	   	},
			    	   	'description[]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'Service description is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
					     
					}
				}).on('error.field.bv', function(e, data) {
					if (data.bv.getSubmitButton()) {
						data.bv.disableSubmitButtons(false);
					}
			   	}).on( 'status.field.bv', function( e, data ) {
			    	$( '#editmssubmitbtn').attr( 'disabled', false );
			    }).on('success.form.bv', function(e) {
				   // Prevent form submission
				   e.preventDefault();
				   updateMainService();
				});
			});
		},'html');
	}
}

function deleteOldProduct() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="service_id"]:checked').each(function() {
		if(item_id == "") {
			item_id = this.value;
		} else {
			item_id = item_id+","+this.value;
		}
	   	checkcount++;
	});
	if(checkcount <=0 ){
		alert("Select service to delete.");
	} else {
		confirmbox("Are you sure you want to delete this main service?",
			function() {
				ajaxindicatorstart("Please wait .. while we delete main service...");
				$.get(base_url+"mystation/desksite/deletemainservice",{ids: item_id},function(data){
					if(data.status == 0) {
						alert(resp.msg);
					} else {
						//alert(data.msg);
						getMyShipperDeskside();
						ajaxindicatorstop();
					}
				},'json');
			},
			function() {
	           //
	        }
		);
	}
}

$('#mytogglecheck').click (function () {
    var checkedStatus = this.checked;
    $(".myserviceclass").each(function(){
       $(this).prop('checked', checkedStatus);
    });
});

</script>
