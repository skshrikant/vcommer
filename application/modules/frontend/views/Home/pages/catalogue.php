<style>
.b-wrap {
	background:#fff !important;
}
</style>
<div class="book_wrapper">
	<div id="loading" class="loading">Loading pages...</div>
	<a id="next_page_button"></a>
	<a id="prev_page_button"></a>
	<div id="mybook" style="display:none;">
		<div class="b-load row">
<?php foreach ($products as $key=>$product) { ?>
	<div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-12 catalogue_page_item_name">
					<strong>
						<a href="<?php echo base_url();?>deskdetails/<?php echo $product['id'];?>" target="_blank"><?php echo $product['name'];?></a>
					</strong>
				</div>
				<div class="col-sm-12 catalogue_page_item_details">
					<?php echo substr($product['description'],0,160);?>
				</div>
				<div class="col-sm-12 catalogue_page_item_quantity">
					Min. Order: <?php echo $product['quantity'];?> <?php echo $product['unit'];?>
				</div>
				<div class="col-sm-12 catalogue_page_item_price_div">
					<span class="catalogue_page_item_price">USD <?php echo $product['unit_price'];?> / Set</span>
				</div>
				<div class="col-sm-12 catalogue_page_item_mimg">
					<a href="<?php echo base_url();?>deskdetails/<?php echo $product['id'];?>" target="_blank">
						<img alt="<?php echo $product['name'];?>" src="<?php echo asset_url();?><?php echo $product['main_image'];?>" class="catalogue_main_img"/>
					</a>
				</div>
				<div class="col-sm-12 catalogue_page_left_num">
					<div class="pull-right">
						<span class="catalogue_page_no_text">Page</span>
						<span class="catalogue_page_no_num"><?php echo ($key*2+1);?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="col-sm-12" style="padding-top:15px;">
			<div class="row">
				<div class="col-sm-12 catalogue_page_item_mimg">
					<a href="<?php echo base_url();?>deskdetails/<?php echo $product['id'];?>" target="_blank">
						<img alt="<?php echo $product['name'];?>" src="<?php echo asset_url();?><?php echo $product['sub_image1'];?>" class="catalogue_main_img">
					</a>
				</div>
				<div class="col-sm-6 catalogue_page_item_mimg-sm" style="margin-right: 5px;">
					<a href="<?php echo base_url();?>deskdetails/<?php echo $product['id'];?>" target="_blank">
						<img alt="<?php echo $product['name'];?>" src="<?php echo asset_url();?><?php echo $product['sub_image2'];?>" class="catalogue_sub_img">
					</a>
				</div>
				<div class="col-sm-6 catalogue_page_item_mimg-sm">
					<a href="<?php echo base_url();?>deskdetails/<?php echo $product['id'];?>" target="_blank">
						<img alt="<?php echo $product['name'];?>" src="<?php echo asset_url();?><?php echo $product['sub_image3'];?>" class="catalogue_sub_img">
					</a>
				</div>
				<div class="col-sm-12 catalogue_page_right_num">
					<div class="pull-left">
						<span class="catalogue_page_no_text">Page</span>
						<span class="catalogue_page_no_num"><?php echo ($key*2+2);?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
</div>
</div>

</div>
