<style>
.product-select {
    padding-top: 20px !important;
}
</style>
<?php  foreach ($products as $product) { ?>
<div class="row" style="margin:0px;">
	<div class="row">
		<div class="col-sm-6" style="text-align: center">
			<span style="color:#1E90FF;font-family:Arial;font-size:16px;"><?php echo $product['name'];?></span>
		</div>
		<div class="col-sm-6" style="text-align: center">
			<span style="color:#1E90FF;font-family:Arial;font-size:16px;"><?php echo $product['model_no'];?></span>
		</div>
	</div>
	<div class="col-sm-12 product-list-row">
		<div class="col-sm-1 product-select">
			<input type="checkbox" name="chkproduct_id"  id="chkproduct_id<?php echo $product['id'];?>"value="<?php echo $product['id'];?>">
		</div>
		<div class="col-sm-7">
			<img src="<?php echo asset_url();?><?php echo $product['sub_image1'];?>" class="subproduct-item-image" alt="" />
			<img src="<?php echo asset_url();?><?php echo $product['sub_image2'];?>" class="subproduct-item-image" alt="" />
			<img src="<?php echo asset_url();?><?php echo $product['sub_image3'];?>" class="subproduct-item-image" alt="" />
			<img src="<?php echo asset_url();?><?php echo $product['sub_image4'];?>" class="subproduct-item-image" alt="" />
		</div>
		<div class="col-sm-1">
		</div>
	</div>
</div>
<br>
<?php } ?>