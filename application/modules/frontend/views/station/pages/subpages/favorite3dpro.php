	<style>
span.desc {
    color: #3C3C3C;
    font-family: Arial;
    font-size: 12px;
}
img.withloader {
    background: url(https://vcommers.com/dev/assets/images/loading.gif) no-repeat center;
}
#Shape75 {
   
    height: 260px;
}
</style>
	<?php 
	if(isset($favoritedproduct)){
if(count($favoritedproduct) > 0 && $favoritedproduct[0]['favorite_id'] !='') { 

	$i =1; foreach($favoritedproduct as $seller) { ?>

		<?php if (($i % 3)==0){?>

			<div class="row">
			<?php }?>

			 <div class="col-sm-1 chkbox-div text-center" style="padding-left:1px !important;width: 42px;">
				<input type="checkbox" id="chkpost-<?php echo $i;?>" onclick="toggleDeleteDive('btnpostdelete-<?php echo $seller['id'];?>','chkpost-<?php echo $i;?>');" name="chkpost-<?php echo $i;?>"  value="on" />
				<div id="btnpostdelete-<?php echo $seller['id'];?>" style="width: 24px; height: 34px; padding-top:10px;display:none;">
					<a href="#" onclick="delete_favorite3dproduct(<?php echo $seller['id'];?>,6);"><img src="<?php echo asset_url();?>images/delete.png" id="Image160" alt=""></a>
				</div>
			</div> 



				<div class="col-md-3">
					<div id="Layer228" class="Layer228" onmouseenter="ShowObjectWithEffect('Layer105', 1, 'fade', 500);return false;" onmouseleave="ShowObjectWithEffect('Layer105', 0, 'fade', 500);return false;" style="height:450px; border: 1px solid #a0a0a0; text-align: center;">
						<div style="padding: 12px 5px 5px;     font-size: 14px;">
							<span class="product_name"><a href="<?php echo base_url();?>products/details/<?php echo $seller['id']; ?>" target="_blank" class="style16" style="border-bottom: 1px solid #4169e1;"><?php echo $seller['product_name']; ?></a></span>
						</div>
						<div style="    padding: 5px 15px 15px;">
							<span class="desc" style=""><?php echo substr($seller['description'],0,80);?> <?php if(strlen($seller['description']) > 80) { ?>...<?php } ?></span>
						</div>
						<div style="cursor:pointer;" onclick="open3DProduct(<?php echo $seller['id']; ?>);">
							<img src="<?php echo asset_url().$seller['image']?>" id="Shape75" alt="" style="width:100%;" class="withloader">
							<div style="padding-top:10px;">
								<span class="usd" style="">USD</span><span style="color:#C0C0C0;font-family:Arial;font-size:13px;"> </span><span style="color:#3C3C3C;font-family:Arial;font-size:24px;"><?php echo $seller['unit_price'];?>.00</span>
							</div>
							<div>
								<span class="min-order" style="">Min. Order: <?php echo $seller['quantity'].' '.$seller['unit'];?>&nbsp;&nbsp;&nbsp; </span>
							</div>
							<div>
								<span style=""  class="like-count"><?php echo $seller['likes'];?></span>
								<img src="<?php echo asset_url();?>images/items_like0.png" alt="" width="25px" height="25px">
								<span class="like-text" style="">Likes</span>
							</div>
						</div>
					</div>
				</div>
			<?php if (($i % 3)==2 || ($i+1) == count($favoritedproduct)){?>
			</div>
			<?php }	$i++; ?>
			<?php } } }?>



<div id="promodal">

</div>
<script type="text/javascript">
	function open3DProduct(id) {
	$.get(base_url+"mystation/3dpro/showbuyer/"+id, {}, function(data){
		$("#promodal").html(data);
		$("#my3DModal").modal('show');
		init3D('my3dimg');
	},'html');
 }
</script>