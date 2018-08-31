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
<div class="panel-heading custom-panel-heading" style="text-align:left;padding-top: 5px !important;">
	<div class="col-sm-6">
		<div class="row">
			<div class="col-sm-2" style="padding: 5px 0px;">
				<span class="nav-text"><input type="checkbox" name="chk_all_pro" onclick="toggleSelectProducts();"> &nbsp;&nbsp;&nbsp;<b>All</b></span>
			</div>
			<div class="col-sm-3" style="padding: 1px 0px;">
				<a href="javascript:addNewProduct();" class="btn-custom-product" id="product_add_btn">
					<img src="<?php echo asset_url();?>images/img1291.png" id="Image6" alt="" style="width:32px;height:32px;">
					<b style="vertical-align: middle;">Add Product</b>
				</a>
			</div>
			<div class="col-sm-3" style="padding: 6px 0px;">
				<a href="javascript:editOldProduct();" class="btn-custom-product" id="product_edit_btn">
					<img src="<?php echo asset_url();?>images/img1290.png" id="Image6" alt="" style="width:20px;height:20px;">
					<b style="vertical-align: middle;">Edit Product</b>
				</a>
			</div>
			<div class="col-sm-3" style="padding: 6px 0px;">
				<a href="javascript:deleteOldProduct();" class="btn-custom-product" id="product_delete_btn">
					<img src="<?php echo asset_url();?>images/img1289.png" id="Image6" alt="" style="width:20px;height:20px;">
					<b style="vertical-align: middle;">Delete Product</b>
				</a>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="row">
			<div class="col-sm-4" style="padding: 5px 0px;">
				<a href="javascript:moveOldProduct();" class="btn-custom-product" id="product_move_btn">
					<img src="<?php echo asset_url();?>images/img1292.png" id="Image6" alt="" style="width:25px;height:25px;">
					<b>Move Product To</b>
				</a>
			</div>
			<div class="col-sm-5" style="padding: 3px 0px;">
			  	<button class="btn btn-default btn-main-cat dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" id="pm_main_sub_product" style="width:200px;" data-animations="">
			   		Select Main/Sub Product <span class="caret" style="color:#d9574d;"></span>
			  	</button>
			  	<ul class="dropdown-menu">
			  		<?php foreach ($mproducts as $mpro) { ?>
			    	<li class="dropdown">
			    		<?php if(count($mpro['subproducts']) > 0) { ?>
			      		<a href="#" class="mp-option-row"><?php echo $mpro['name'];?> <span class="pull-right dropdn-arrow"></a>
			      		<?php } else { ?>
			      		<a href="javascript:selectSMproduct(0,'<?php echo $mpro['id'];?>',``,`<?php echo $mpro['name'];?>`);" class="mp-option-row"><?php echo $mpro['name'];?></a>
			      		<?php } ?>
			      		<?php if(count($mpro['subproducts']) > 0) { ?>
			      		<ul class="dropdown-menu">
			      			<?php foreach ($mpro['subproducts'] as $spro) { ?>
			        		<li><a href="javascript:selectSMproduct(<?php echo $spro['id'];?>,'<?php echo $mpro['id'];?>',`<?php echo $spro['name'];?>`,`<?php echo $mpro['name'];?>`);"><?php echo $spro['name'];?></a></li>
			        		<?php } ?>
			       		</ul>
			       		<?php } ?>
			    	</li>
			    	<?php } ?>
			  	</ul>
			  	<input type="hidden" name="top_sub_product_id" id="top_sub_product_id" value="" />
		  	</div>
		  	<div class="col-sm-2" style="padding: 7px 0px;">
			  	<a href="javascript:confirmOldProduct();" class="btn-custom-product" id="product_move_btn">
					<b>Confirm</b>
				</a>
			</div>
			<div class="col-sm-1" style="padding: 1px 0px;">
				<span class="pull-right-close" style="padding-top: 5px;"><a href="javascript:ShowObjectWithEffect('Layer169', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
			</div>
		</div>
	</div>
 </div>
<div class="panel-body panel-body-custom" id="company_product_info">
	<div id="product_list">
		<div class="product-list-outer">
			<div class="row">
				<div class="col-sm-9">
					<div class="product-list-title">
						Manage Your Products
					</div>
					<br>
					<div class="product-list-text">
						Click on add icon to add more products, or checkbox next to each product and edit using the tools bar buttons.<br>
						To display your products click on main & Sub paroducts drop down list, make a selection and click on search icon. <br>You can also type a specific product name in search field then click on search icon.. 
					</div>
					<br>
					<div class="product-search-bar">
						<button class="btn btn-default btn-main-cat dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" id="p_main_sub_product" data-animations="">
					   		Select Main/Sub Product <span class="caret" style="color:#d9574d;"></span>
					  	</button>
					  	<ul class="dropdown-menu" style="margin-left:15px;">
					    	<?php foreach ($mproducts as $mpro) { ?>
					    	<li class="dropdown">
					    		<?php if(count($mpro['subproducts']) > 0) { ?>
					      		<a href="#" class="mp-option-row"><?php echo $mpro['name'];?> <span class="pull-right dropdn-arrow"></a>
					      		<?php } else { ?>
					      		<a href="javascript:selectSearchProduct(0,'<?php echo $mpro['id'];?>',``,`<?php echo $mpro['name'];?>`);" class="mp-option-row"><?php echo $mpro['name'];?></a>
					      		<?php } ?>
					      		<?php if(count($mpro['subproducts']) > 0) { ?>
					      		<ul class="dropdown-menu">
					      			<?php foreach ($mpro['subproducts'] as $spro) { ?>
					        		<li><a href="javascript:selectSearchProduct(<?php echo $spro['id'];?>,'<?php echo $mpro['id'];?>',`<?php echo $spro['name'];?>`,`<?php echo $mpro['name'];?>`);"><?php echo $spro['name'];?></a></li>
					        		<?php } ?>
					       		</ul>
					       		<?php } ?>
					    	</li>
					    	<?php } ?>
					  	</ul>
					  	<input type="hidden" name="sub_product_id" id="sub_product_id" value="" />
					  	<input type="text" id="SiteSearch1" style="width: 400px; height: 29px; line-height: 29px;" name="SiteSearch1" value="" placeholder="Type products name or no.">
					  	<button type="button" onclick="searchProduct();" name="searchproduct" class="btn btn-search-black"><i class="fa fa-search"></i></button>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="pink-circle">
						<span class="help-text-sm">You have added</span><br>
						<span class="help-text-red"><?php echo count($products);?></span><br>
						<span class="help-text-sm">Products</span>
					</div>
				</div>
			</div>
			<br><br>
			<div id="desksite-productlist">
			<?php foreach ($products as $product) { ?>
			<div class="row" style="margin:0px;">
				<div class="col-sm-12 product-list-row">
					<div class="col-sm-1 product-select">
						<input type="checkbox" name="product_id" value="<?php echo $product['id'];?>" >
					</div>
					<div class="col-sm-2">
						<img src="<?php echo asset_url();?><?php echo $product['main_image'];?>" class="product-item-image" alt="" />
					</div>
					<div class="col-sm-4">
						<div class="row">
							<div class="col-sm-12 product-item-name"><?php echo $product['name'];?></div>
							<div class="col-sm-12 product-item-desc"><?php echo substr($product['about'],0,170);?> <?php if(strlen($product['about']) > 170) { ?>...<?php } ?></div>
							<div class="col-sm-4 product-item-price">USD <?php echo $product['unit_price'];?></div>
							<div class="col-sm-8 product-item-qty">Min. Qty : <?php echo $product['quantity'];?> <?php echo $product['unit'];?></div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<div class="col-sm-12 product-item-name">&nbsp;</div>
							<div class="col-sm-12 product-item-number">Product No.: <?php echo $product['model_no'];?></div>
							<div class="col-sm-12 product-location-text"><a href="<?php echo base_url();?>products/details/<?php echo $product['id'];?>" class="style5" target="_blank">Location: <?php echo $product['mainproduct'];?> > <?php echo $product['subproduct'];?> > <?php echo $product['name'];?></a></div>
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
function addNewProduct() {
	$.get(base_url+"mystation/desksite/newproductitem",{},function(data){
		$("#productnav").html(data);
	},'html');
}

function editOldProduct() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="product_id"]:checked').each(function() {
		item_id = this.value;
	   	checkcount++;
	});
	if(checkcount <=0 ){
		alert("Select product to update.");
	} else if(checkcount > 1) {
		alert("You can edit only one product at a time.");
	} else {
		$.get(base_url+"mystation/desksite/editproductitem/"+item_id,{},function(data){
			$("#productnav").html(data);
		},'html');
	}
}

function deleteOldProduct() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="product_id"]:checked').each(function() {
		if(item_id == "") {
			item_id = this.value;
		} else {
			item_id = item_id+","+this.value;
		}
	   	checkcount++;
	});
	if(checkcount <=0 ){
		alert("Select product to delete.");
	} else {
		confirmbox("Are you sure you want to delete this product ?",
			function() {
				$.get(base_url+"mystation/desksite/deleteproductitem",{item_id: item_id},function(data){
					if(data.status == 0) {
						alert(resp.msg);
					} else {
						//alert(data.msg);
						getMyDeskside();
					}
				},'json');
			},
			function() {
	           //
	        }
		);
	}
}

function searchProduct() {
	var product = document.getElementById('SiteSearch1').value;
	var subproduct_id = $("#sub_product_id").val();
	if(product != ""){
		$.get(base_url+"mystation/desksite/searchproduct",{'query': product, 'sproduct_id': '', 'mproduct_id': ''},function(data){
			$("#desksite-productlist").html(data);
		});
	} else {
		alert('Please Enter product name');
	}
}

function toggleSelectProducts() {
	if ($('[name="chk_all_pro"]').is(':checked')) {
		$("input:checkbox").prop('checked', 'checked');
	} else {
		$("input:checkbox").prop('checked', false);
	}
}

function confirmOldProduct() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="product_id"]:checked').each(function() {
		item_id = this.value;
	   	checkcount++;
	});
	if(checkcount <=0 ){
		alert("Select product to update.");
	} else if(checkcount > 1) {
		alert("You can edit only one product at a time.");
	} else {
		$.post(base_url+"mystation/desksite/productitem/cat/update",{ item_id: item_id, sproduct_id: $("#top_sub_product_id").val()},function(data){
			getMyDeskside();
		},'html');
	}
}

function selectSearchProduct(scat_id,mcat_id,name,mname) {
	$("#sub_product_id").val(mcat_id+"#"+scat_id);
	if(name > 0) {
		$("#p_main_sub_product").html(name+' <span class="caret" style="color:#d9574d;"></span>');
	} else {
		$("#p_main_sub_product").html(mname+' <span class="caret" style="color:#d9574d;"></span>');
	}
	$.get(base_url+"mystation/desksite/searchproduct",{'query': '', 'sproduct_id': scat_id, 'mproduct_id': mcat_id},function(data){
		$("#desksite-productlist").html(data);
	});
}

function selectSMproduct(scat_id,mcat_id,name,mname) {
	$("#top_sub_product_id").val(mcat_id+"#"+scat_id);
	if(name > 0) {
		$("#pm_main_sub_product").html(name+' <span class="caret" style="color:#d9574d;"></span>');
	} else {
		$("#pm_main_sub_product").html(mname+' <span class="caret" style="color:#d9574d;"></span>');
	}
}


</script>