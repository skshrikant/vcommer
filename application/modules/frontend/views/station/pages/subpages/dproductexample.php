 <div id="Layer27" style="position: absolute; text-align: left;top: 100px; width: 1002px; height: 257px; z-index: 826;">
  	<div class="row">
  		<div class="col-md-12">
  <?php  $i=1; foreach($productimage as $row) { ?>
			<div class="col-md-1" style="padding-right: 83px;">
				<div id="wb_Image102"
					style="left: 24px; top: 51px; width: 63px; height: 133px; z-index: 815;">
					<img src="<?php echo asset_url().$row['image'];?>"
						id="Image102" alt="">
				</div>
				<div id="wb_Text61"
					style=" left: 22px; top: 191px; width: 80px; height: 15px; z-index: 805; text-align: left;">
					<span
						style="color: #FFFFFF; font-family: Arial; font-size: 12px;">frame_<?php echo $i;?>.png</span>
				</div>
		</div>
		
<?php $i++; } ?>
		</div>
	</div>
</div>
