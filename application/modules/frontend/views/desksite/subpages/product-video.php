<?php if(count($Videos) > 0) { ?>
<div id="vcarousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner" id="product-video" role="listbox">
										
	<?php
	$i =0 ;
	foreach($Videos as $video){
	$i++;
		?>
		<div class="item <?php if($i==1){echo 'active'; } ?>">
			<div class="row text-center" style="margin:0px;">
				<video src="<?php echo asset_url().$video['vedio_file']; ?>" width="100%" id="MediaPlayer3" controls="controls" controlsList="nodownload">
				</video>
			</div>
			<div class="row text-center">
				<div class="col-sm-12">
				<p>
					<span style="color:#4B4B4B;font-family:Georgia;font-size:13px;">
						<strong>
							<a href="javascript:viewProductDetails(<?php echo $video['product_id']?>);" class="style16">
								<?php echo $video['name']?> 
							</a>
						</strong>
					</span>
				</p>
				</div>
			</div>
			<div class="row text-center" style="margin:0px;">
				<div class="col-sm-12">
					<p class="c14">
						<?php echo substr($video['description'],0,70); ?><?php if(strlen($video['description']) > 70) { ?> ...<?php } ?>
					</p>
				</div>
			</div>
			<p class="c16 text-center">USD<span class="c15"> <?php echo $video['unit_price']; ?>.00</span></p>
			<div class="row text-center">
				<div class="col-md-6">
				<p class="c14">&nbsp; <span style="color:#3C3C3C;font-family:Arial;font-size:12px;">&nbsp; Min. Order: <?php echo $video['quantity'].' '.$video['unit'];?></span> </p></div>
				<div class="col-md-6">
					<p class="c14">&nbsp; Likes <img src="<?php echo asset_url();?>images/items_like0.png" id="Image90" alt="" style="width:26px;"> <span id="myvlikes-<?php echo $video['id'];?>"><?php echo $video['video_likes'];?></span> </p>
				</div>
			</div>
			<div class="row inline m1 text-center" style="margin-left:40%;padding-bottom:25px;">
				<div id="RollOver6" style="overflow:hidden;width:35px;height:35px;margin-right:10px;z-index:3543">
					<a href="<?php echo base_url(); ?>video/details/saller/<?php echo $video['vid']?>" target="_blank" >
						<img src="<?php echo asset_url(); ?>images/view-detailsc.png" id="Image136" alt="" width="35px">
						<span><img alt="" src="<?php echo asset_url(); ?>images/view-detailsb.png" width="35px"></span>
					</a>
				</div>
				<div id="RollOver6" style="overflow:hidden;width:35px;height:35px;z-index:3543" class="text-center">
					<a href="javascript:likeMyVideo(<?php echo $video['id'];?>,0,'myvlikes-<?php echo $video['id'];?>');" target="_self">
						<img class="hover" alt="" src="<?php echo asset_url(); ?>images/like-videoa.png" width="35px">
						<span><img alt="" src="<?php echo asset_url(); ?>images/like-videob.png" width="35px"></span>
					</a>
				</div> 
			</div>
			<br><br>
		</div>
	<?php } ?>
	<?php if(count($Videos) > 1) { ?>
	<div>
		<a class="left carousel-control" href="#vcarousel" data-slide="prev" style="background-image: none;top:430px;">
			<img alt="Back" style="border-width:0" src="<?php echo asset_url();?>images/previoustxt0.png">
		</a>
		<a class="right carousel-control" href="#vcarousel" data-slide="next" style="background-image: none;top:410px;">
		    <img alt="Next" style="border-width:0" src="<?php echo asset_url();?>images/nexttxt0.png">
		</a>
	</div>
	<?php } ?>
	</div>
</div>
<?php } else { ?>
		<div style="padding-top:200px;font-size:14px;">
			<strong>The seller has not uploaded videos yet.</strong>
		</div>
<?php } ?>
<script>
jQuery(document).ready(function(){
    jQuery('video').bind('contextmenu',function() { return false; });
});
</script>