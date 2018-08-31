<?php 
		$image = $displayimg;
		$pieces = explode(".", $image);
		$image_type = end($pieces);
?>
<div class="row">
	<div class="col-md-12" >
		<?php if($image!=''){ 
			if($image_type== "pdf" or $image_type== "PDF"){?>
					<object  data="<?php echo asset_url()?><?php echo $image;?>"  width="100%" height="1500px"  id="podimage" style="border:1px solid grey;"></object>
				<?php }else {?>
					<img src="<?php echo asset_url()?><?php echo $image;?>" id="podimage" style="border:2px solid grey;width:100%;height:100%" id="e_pod">
			<?php }?>
		<?php }  ?>
	</div>
</div>