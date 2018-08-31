<?php foreach ($products as $product) { ?>
<div class="row" style="margin:0px;">
	<div class="col-sm-12 product-list-row">
		<div class="col-sm-1 product-select">
			<input type="checkbox" name="vproduct_id" value="<?php echo $product['id'];?>">
		</div>
		<div class="col-sm-3">
			<img src="<?php echo asset_url();?><?php echo $product['main_image'];?>" class="product-item-image" alt="" />
		</div>
		<div class="col-sm-6">
			<div class="row">
				<div class="col-sm-12 product-item-name"><?php echo $product['name'];?></div>
				<div class="col-sm-12 product-item-desc"><?php echo substr($product['description'],0,152);?> ...</div>
				<div class="col-sm-4 product-item-price">USD <?php echo $product['unit_price'];?></div>
				<div class="col-sm-8 product-item-qty">Min. Qty : <?php echo $product['quantity'];?> <?php echo $product['unit'];?></div>
			</div>
		</div>
		<div class="col-sm-2">
		</div>
	</div>
</div>
<br>
<?php } ?>