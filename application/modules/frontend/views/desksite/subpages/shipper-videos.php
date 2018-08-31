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
							
								<?php echo $video['vedio_title']?> 
							
						</strong>
					</span>
				</p>
				</div>
			</div>
			<div class="row text-center" style="margin:0px;">
				<div class="col-sm-12">
					<p class="c14">
						<?php echo substr($video['vedio_description'],0,400); ?><?php if(strlen($video['vedio_description']) > 400) { ?> ...<?php } ?>
					</p>
				</div>
			</div>
			
			<div class="row text-center">
				
				<div class="col-md-12" id="likes<?php echo $video['id'];?>" onmouseover="showIcon(<?php echo $video['id'];?>)" onmouseout="hideIcon(<?php echo $video['id'];?>)" >
					<p class="c14">&nbsp; Likes <img src="<?php echo asset_url();?>images/items_like0.png" id="Image90" alt="" style="width:26px;"> <span id="myvlikes-<?php echo $video['id'];?>"><?php echo $video['video_likes'];?></span> </p>
				</div>
			</div>
			<div class="row inline m1 text-center" style="margin-left:50%;padding-bottom:25px;">
				
				<div id="RollOver6_<?php echo $video['id'];?>" style="overflow:hidden;width:35px;height:35px;z-index:3543" class="text-center RollOver6">
					<a href="javascript:likeMySVideo(<?php echo $video['id'];?>,1,'myvlikes-<?php echo $video['id'];?>');" target="_self">
									<img class="hover" alt="" src="<?php echo asset_url(); ?>images/like-videoa.png" width="35px">
									<span><img alt="" src="<?php echo asset_url(); ?>images/like-videob.png" width="35px"></span>
								</a>
				</div> 
			</div>
			<br><br>
		</div>
		<script>

$('.RollOver6').hide(); 

/*$('#likes').mouseover(function () {
      $('#likes').hide();
      $('#RollOver6').show();      
      
});
$('#RollOver6').mouseout(function () {
      $('#RollOver6').hide();     
      $('#likes').show(); 
});*/
function showIcon(id){
	$('#likes'+id).hide();
    $('#RollOver6_'+id).show();
}
function hideIcon(id){
	$('#likes'+id).show();
    $('#RollOver6_'+id).hide();
}
</script>
	<?php } ?>
	<?php if(count($Videos) > 0) { ?>
	
	<?php } ?>
	</div>
</div>
<?php } else { ?>
		<div style="padding-top:200px;font-size:14px;">
			<strong>The Shipper has not uploaded videos yet.</strong>
		</div>
<?php } ?>

<script>
jQuery(document).ready(function(){
    jQuery('video').bind('contextmenu',function() { return false; });

});

</script>
