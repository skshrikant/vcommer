<?php foreach ($my3dproducts as $my3dproduct) { ?>
	<div class="row">
  		<div class="col-md-12" style="background-color: #F5FFFA;text-align: left;padding: 22px;">
  				<div class="col-md-1">
  					<input type="radio" id="3dpro_ads_id" name="3dpro_ads_id" value="<?php echo $my3dproduct['id'];?>" style="">
  				</div>
  				<div class="col-md-5">
  					<img src="<?php echo asset_url().$my3dproduct['main_image'];?>" id="Shape66" alt="" style="width:129px;height:103px;">
  				</div>
  				<div class="col-md-6">
  					<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><?php echo $my3dproduct['name'];?></span>
  					<span style="color:#808080;font-family:Arial;font-size:11px;"><?php echo substr($my3dproduct['description'],0,200);?></span><br>
  					<br><span style="color:#3C3C3C;font-family:Arial;font-size:12px;">USD <?php echo $my3dproduct['unit_price'];?> <span style="color:#3C3C3C;font-family:Arial;font-size:12px;">Min. Qty : <?php echo $my3dproduct['quantity'];?> Containers</span></span>
  				</div>
  		</div>
  	</div>
  	<br>
<?php } ?>