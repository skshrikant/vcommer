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
	.btn-main-cat {
	    width: 240px;
	    padding: 4px;
	    border-radius: 0px;
	    color: #666666;
	}
	li.open a.mp-option-row .dropdn-arrow {
		width:5px;
		height:10px;
		margin-top: 5px;
		background-image:url('<?php echo asset_url();?>images/img0094.png');
		background-size:cover;
	}
	a.mp-option-row .dropdn-arrow {
		width:10px;
		height:5px;
		margin-top: 7px;
		background-image:url('<?php echo asset_url();?>images/img1765.png');
		background-size:cover;
	}
	a.mp-option-row:hover .dropdn-arrow {
		width:5px;
		height:10px;
		margin-top: 5px;
		background-image:url('<?php echo asset_url();?>images/img0094.png');
		background-size:cover;
	}
</style>
<div class="panel-heading custom-panel-heading" style="text-align:center;padding-top: 5px !important;">
	<a href="javascript:addHoteSaleProduct();" class="btn-custom-product" id="product_add_btn">
		<img src="<?php echo asset_url();?>images/img1291.png" id="Image6" alt="" style="width:32px;height:32px;">
		<b>Add</b>
	</a>
	<?php if(count($newarrivals) > 0) { ?>
	<a href="javascript:deleteHoteSaleProduct();" class="btn-custom-product" id="product_delete_btn">
		<img src="<?php echo asset_url();?>images/img1289.png" id="Image6" alt="" style="width:25px;height:25px;">
		<b>Remove</b>
	</a>
	<?php } ?>
	<span class="pull-right-close" style="padding-top: 5px;"><a href="javascript:ShowObjectWithEffect('Layer169', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
 </div>
<div class="panel-body panel-body-custom" id="company_product_info">
	<div id="product_list">
		<div class="product-list-outer">
			<div class="row" id="new-menu-item">
				<div class="col-sm-9">
					<div class="product-list-title">
						Manage Your New Arrivals Menu
					</div>
					<br>
					<div class="product-list-text">
						Select the required products, then click on add icon to add to your New Arrivals menu..
						To display your products click on main & Sub paroducts drop down list, make a selection and click on <br>search icon. You can also type a specific product name in search field then click on search icon..
						<br><br>
						<span class="help-text-red text-xs">To add a product to your New Arrivals menu, the product must be added first to your Main or Sub Products.</span>
					</div>
					<br>
					<div class="product-search-bar">
					  	<span class="">
						  	<button class="btn btn-default btn-main-cat dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" id="hds_main_cat_label" style="width:230px;height:30px;" data-animations="">
						   		Select The Main Category <span class="caret" style="color:#d9574d;"></span>
						  	</button>
						  	<ul class="dropdown-menu" style="margin-left:15px;">
						  		<?php foreach ($mproducts as $mpro) { ?>
						    	<li class="dropdown">
						    		<?php if(count($mpro['subproducts']) > 0) { ?>
						      		<a href="#" class="mp-option-row"><?php echo $mpro['name'];?> <span class="pull-right dropdn-arrow"></a>
						      		<?php } else { ?>
						      		<a href="javascript:selectNSearchProduct(0,'<?php echo $mpro['id'];?>',``,`<?php echo $mpro['name'];?>`);" class="mp-option-row"><?php echo $mpro['name'];?></a>
						      		<?php } ?>
						      		<?php if(count($mpro['subproducts']) > 0) { ?>
						      		<ul class="dropdown-menu">
						      			<?php foreach ($mpro['subproducts'] as $spro) { ?>
						        		<li><a href="javascript:selectNSearchProduct(<?php echo $spro['id'];?>,'<?php echo $mpro['id'];?>',`<?php echo $spro['name'];?>`,`<?php echo $mpro['name'];?>`);"><?php echo $spro['name'];?></a></li>
						        		<?php } ?>
						       		</ul>
						       		<?php } ?>
						    	</li>
						    	<?php } ?>
						  	</ul>
						  	<input type="hidden" name="sub_product_id" id="hotsub_product_id" value=""/>
						</span>
					  	<input type="text" id="item_name" style="width: 400px; height: 29px; line-height: 30px;" name="item_name" placeholder="Type products name or no.">
					  	<button type="button" onclick="searchProducts();" name="searchproduct" class="btn btn-search-black"><i class="fa fa-search"></i></button>
					</div>
				</div>
				<div class="col-sm-3">
					&nbsp;
				</div>
			</div>
			<br><br>
			<div id="search_result">
				<?php foreach ($newarrivals as $product) { ?>
				<div class="row" style="margin:0px;">
					<div class="col-sm-12 product-list-row">
						<div class="col-sm-1 product-select">
							<input type="checkbox" name="new-arr-product_id" id="new-arr-product_id" value="<?php echo $product['id'];?>">
						</div>
						<div class="col-sm-2">
							<img src="<?php echo asset_url();?><?php echo $product['main_image'];?>" class="product-item-image" alt="" />
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-12 product-item-name"><?php echo $product['name'];?></div>
								<div class="col-sm-12 product-item-desc"><?php echo substr($product['description'],0,152);?> ...</div>
								<div class="col-sm-4 product-item-price">USD <?php echo $product['unit_price'];?></div>
								<div class="col-sm-8 product-item-qty">Min. Qty : <?php echo $product['quantity'];?> <?php echo $product['unit'];?></div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-12 product-item-name">&nbsp;</div>
								<div class="col-sm-12 product-item-number">Product No.: <?php echo $product['model_no'];?></div>
								<div class="col-sm-12 product-location-text">Location: <?php echo $product['mainproduct'];?> > <?php echo $product['subproduct'];?> > <?php echo $product['name'];?></div>
							</div>
						</div>
						<div class="col-sm-1">
						</div>
					</div>
				</div>
				<br>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo asset_url();?>js/bootstrap-dropdownhover.min.js"></script>
<script>
function selectNSearchProduct(scat_id,mcat_id,name,mname) {
	$("#hotsub_product_id").val(mcat_id+"#"+scat_id);
	if(name > 0) {
		$("#hds_main_cat_label").html(name+' <span class="caret" style="color:#d9574d;"></span>');
	} else {
		$("#hds_main_cat_label").html(mname+' <span class="caret" style="color:#d9574d;"></span>');
	}
	ajaxindicatorstart("Please wait .. while we search product...");
	$.get(base_url+"mystation/desksite/searchproduct",{ query: '', sproduct_id: scat_id, mproduct_id: mcat_id},function(data){
		$("#search_result").html(data);
		ajaxindicatorstop();
		if(data != "Sorry we do not found any item for your search criteria.") {
			$("#new-menu-item").hide();
			if($("#product_delete_btn")) {
				$("#product_delete_btn").hide();
			}
		} else {
			$("#new-menu-item").show();
			if($("#product_delete_btn")) {
				$("#product_delete_btn").show();
			}
		}
	},'html');
}
function addHoteSaleProduct() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="product_id"]:checked').each(function() {
		if(item_id != "") {
			item_id = item_id+","+this.value;
		} else {
			item_id = this.value;
		}
	   	checkcount++;
	});
	if(checkcount <= 0 ){
		alert("Select product first.");
	} else {
		ajaxindicatorstart("Please wait .. while we add product...");
		$.post(base_url+"mystation/desksite/addnewarrival",{item_id: item_id},function(resp){
			if(resp.status == 0) {
				alert(resp.msg);
			} else {
				//alert(resp.msg);
				$.get(base_url+"mystation/desksite/newarrivals",{},function(data){
					$("#newarrivalnav").html(data);
					ajaxindicatorstop();
				},'html');
			}
		},'json');
	}
}

function deleteHoteSaleProduct() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="new-arr-product_id"]:checked').each(function() {
		if(item_id != "") {
			item_id = item_id+","+this.value;
		} else {
			item_id = this.value;
		}
	   	checkcount++;
	});
	if(checkcount <= 0 ){
		alert("Select product first.");
	} else {
		ajaxindicatorstart("Please wait .. while we delete product...");
		$.post(base_url+"mystation/desksite/deletenewarrival",{item_id: item_id},function(resp){
			if(resp.status == 0) {
				alert(resp.msg);
			} else {
				//alert(resp.msg);
				$.get(base_url+"mystation/desksite/newarrivals",{},function(data){
					$("#newarrivalnav").html(data);
					ajaxindicatorstop();
				},'html');
			}
		},'json');
	}
}

function searchProducts() {
	if($("#item_name").val() != "" || $("#hotsub_product_id").val() != "") {
		ajaxindicatorstart("Please wait .. while we search product...");
		$.get(base_url+"mystation/desksite/searchproduct",{ query: $("#item_name").val(), sproduct_id: '', mproduct_id: ''},function(data){
			$("#search_result").html(data);
			ajaxindicatorstop();
			if(data != "Sorry we do not found any item for your search criteria.") {
				$("#new-menu-item").hide();
				if($("#product_del_btn")) {
					$("#product_del_btn").hide();
				}
			} else {
				$("#new-menu-item").show();
				if($("#product_del_btn")) {
					$("#product_del_btn").show();
				}
			}
		},'html');
	} else {
		alert("Please select main/sub product or enter product name");
	}
}

</script>