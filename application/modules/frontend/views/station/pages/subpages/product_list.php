<?php foreach ($products as $product) { ?>
<div class="row" style="margin:0px;">
	<div class="col-sm-12 product-list-row">
		<div class="col-sm-1 product-select">
			<input type="checkbox" name="product_id" value="<?php echo $product['id'];?>">
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