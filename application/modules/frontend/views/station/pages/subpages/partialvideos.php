<?php foreach($videos as $video) { ?>
	<div class="row">
  		<div class="col-md-12">
  			<div class="row">
	  			<div class="col-md-1">
	  				<input type="radio" id="Checkbox125" name="myvideo_id" value="<?php echo $video['vedio_id'];?>">
	  			</div>
	  			<div class="col-md-6">
	  				<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><b>Product Name:</b> <?php echo $video['name'];?></span><br>
	  			</div>
	  			<div class="col-md-5">
	  				<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><b>Product No.:</b> <?php echo $video['model_no'];?></span><br>
	  			</div>
  			</div>
  			<div class="row">
  				<div class="col-md-1">&nbsp;</div>
	  			<div class="col-md-4" id="wb_MediaPlayer1">
					<video src="<?php echo asset_url();?><?php echo $video['vedio_file'];?>" id="MediaPlayer1" controls="controls"></video>
	  			</div>
	  			<div class="col-md-3">
	  				<br><br>
	  				<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong>One Product </strong>Video</span><br>
	  				<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Size : <?php echo $video['vedio_size'];?> MB</span>
	  			</div>
	  			<div class="col-md-4">
	  				<img src="<?php echo asset_url();?><?php echo $video['main_image'];?>" id="Shape303" alt="" style="width:129px;height:103px;">
	  			</div>
	  		</div>
  		</div>
  	</div>
  	<br>
<?php } ?>