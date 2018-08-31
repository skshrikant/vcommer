<form name="frmeditvedio" method="post" action="" enctype="multipart/form-data" id="frmeditvedio">
	<div class="panel-heading custom-panel-heading">
		<a href="javascript:deletevedio();" class="btn btn-default btn-custom" id="personal_info_btn"  >
  		<img src="<?php echo asset_url();?>images/img1594.png" style="padding-right: 4px;height: 78%;" alt="">Delete</a>
  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer149', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
  	</div>
  	<div class="panel-body panel-body-custom" id="" style="padding-top: 15px;padding-left: 45px;">		
  		<div id="addproduct_div">
	  		<div class="row ">
		  		<div class="col-md-12">
		  			<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Manage Products Videos</span>
		  		</div>
		  	</div><br>
	  		<div class="row">
		  		<div class="col-md-12">
		  			<span style="color:#2D2D2D;font-family:Arial;font-size:16px;">You have total:</span>
		  			<span style="color:#F05539;font-family:Arial;font-size:21px;"><?php echo $totalvedio;?></span>
		  			<span style="color:#F05539;font-family:Arial;font-size:12px;">out of </span>
		  			<span style="color:#F05539;font-family:Arial;font-size:21px;"><?php echo $max_videos;?></span>
		  			<span style="color:#2D2D2D;font-family:Arial;font-size:16px;">Videos</span>
		  		</div>
		  	</div><br>
	  		<div class="row">
		  		<div class="col-md-12">
		  			<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Click on checkbox next to the required video to delete.</span>
		  		</div>
		  	</div><br><br>
		  	<?php foreach ($oneproductvedio as $row) { ?>
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="col-md-3">
		  				<div class="row">
				  			<div class="col-md-2" style="padding-top: 35px;">
				  				<input type="checkbox" id="Checkbox125" name="chkoneproduct[]" value="<?php echo $row['vedio_id'];?>" >
				  			</div>
				  			<div class="col-md-10 text-center" id="wb_MediaPlayer1" style="padding:0px;">
								<video src="<?php echo asset_url().$row['vedio_file'];?>" id="MediaPlayer1" controls="controls" style="width:190px;"></video>
				  			</div>
			  			</div>
		  			</div>
		  			<div class="col-md-2" style="padding-left:25px;">
		  				<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong>One Product </strong>Video</span><br>
		  				<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Size : <?php echo $row['vedio_size'];?></span>
		  			</div>
		  			<div class="col-md-1">
		  				<img src="<?php echo asset_url();?>images/link.png" id="" alt="" >
		  			</div>
		  			<div class="col-md-2">
		  				<a href="<?php echo base_url();?>products/details/<?php echo $row['id'];?>" target="_blank" class="style5">
		  					<img src="<?php echo asset_url().$row['main_image'];?>" id="Shape303" alt="" style="width:129px;height:106px;border:1px solid #f1f1f1;border-radius:3px;">
		  				</a>
		  			</div>
		  			<div class="col-md-4" style="padding-left: 12px">
		  				<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">Product Name: <?php echo $row['name'];?></span><br>
		  				<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">Product No.: <?php echo $row['model_no'];?></span><br>
		  				<span style="color:#808080;font-family:Arial;font-size:11px;"><?php echo substr($row['about'],0,180); if(strlen($row['about']) > 180){ echo "..."; }?></span><br><br>
		  				<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">USD <?php echo $row['unit_price']; ?></span>
		  				<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">Min. Qty : <?php echo $row['quantity']; ?>Containers</span><br>
		  				<span style="color:#1E90FF;font-family:Arial;font-size:12px;">Location: <a href="<?php echo base_url();?>products/details/<?php echo $row['id'];?>" target="_blank" class="style5"><?php echo $row['subproname'].">".$row['mainproname'];?></a></span>
		  			</div>
		  		</div>
		  	</div><br><br>
		  	<?php } ?>
		  <?php foreach ($multiproductvedio as $row) { ?>
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="col-md-1">
		  				<input type="checkbox" id="Checkbox125" name="chkmultiproduct[]" value="<?php echo $row['id'];?>" >
		  			</div>
		  			<div class="col-md-2" id="wb_MediaPlayer1" >
							<video src="<?php echo asset_url().$row['vedio_file']?>" id="MediaPlayer1" controls="controls"></video>
		  			</div>
		  			<div class="col-md-2">
		  				<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong>Multi Products </strong>Video</span><br>
		  				<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Size : <?php echo $row['vedio_size']?></span>
		  			</div>
		  			<div class="col-md-1">
		  				<img src="<?php echo asset_url();?>images/link.png" id="" alt="" >
		  			</div>
		  			<div class="col-md-2">
		  				<?php $img =  explode(',',$row['mainimage']);
		  					for($i=0;$i<count($img);$i++)
		  					{ ?>
		  						<img src="<?php echo asset_url().$img[$i];?>" id="Shape305" alt="" style="width:60px;height:54px;">
		  				<?php 	} ?>
		  			</div>
		  			<div class="col-md-4" style="padding-left: 12px">
		  				<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong>Video Title: </strong><?php echo $row['vedio_title'];?></span><br>
		  				<span style="color:#808080;font-family:Arial;font-size:11px;"><?php echo $row['vedio_description'];?></span><br><br>
		  				<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong>Price Rage: USD <?php echo $row['start_price'];?> - <?php echo $row['end_price'];?></strong></span><br><br>
		  				<span style="color:#1E90FF;font-family:Arial;font-size:12px;">Location: <?php echo $row['subproname'].">".$row['mainproname'];?></span>
		  			</div>
		  		</div>
		  	</div><br><br>
		  <?php }?>
	  	</div>	
   </div>
 </form>
  <div id="3dproduct_modal" class="modal fade">
	<div class="modal-dialog" style="">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Add Product 3D Picture</h3>
			</div>
			<div class="modal-body" >
				<form id="frmcropimageproduct" method="post" enctype="multipart/form-data" action="">
						<span><b>Upload Image:</b> <input type="file" name="dproductfile"  onchange="uploadimagepopup();" id="dproductfile"  accept=".png,.jpg,.jpeg.gif" class="form-control" style="width:200px;display:inline-block;"/></span> <br><br>
						
						<input type="hidden" name="hdn-profile-id" id="hdn-profile-id" value="1" />
						<input type="hidden" name="x1" id="x1" value="" />
				        <input type="hidden" name="y1" id="y1" value="" />
				        <input type="hidden" name="x2" id="x2" value="" /> 
				        <input type="hidden" name="y2" id="y2" value="" />
				        <input type="hidden" name="width" id="width" value="200" />
				        <input type="hidden" name="height" id="height" value="200" />
				      	<!--  <input type="hidden" name="fullpath" id="fullpath" value="<?php //echo asset_url();?>" /> -->
						<input type="hidden" name="productimage_name" value="" id="productimage_name" />
						<div id="parent" style="position:relative;">
							<span id="thumbnail" style="display: inline-block;position:relative;">
								<img id="dproductphoto" src="#" alt="" title="" style="max-width:100%;display:none" />
							</span>
						</div>
						<div id="thumbs" style="padding:5px; width:600px"></div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" id="save_dcrop" class="btn btn-primary">Crop & Save</button>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo asset_url();?>js/bootstrap-typeahead.min.js"></script>
<script>
</script>
 
 
