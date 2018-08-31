<style>
.menu3d ul, li {
	list-style: none;
}
.menu3d {
	width: 325px;
	/*border: 2px solid #ccc;*/
	margin: 10px auto 10px;
	max-height:371px;
	overflow:hidden;
}
.menu3d ul {
	padding:0px;
	width: 325px;
	height:371px;
}
.menu3d ul li img {
	display: block;
	width:321px;
	cursor:pointer;
}
</style>
<?php if(count($Products) > 0) { ?>
<div class="carousel slide" id="3dcarousel" data-ride="carousel slide">
	<div class="carousel-inner"  id="3dproduct" role="listbox">
	<?php 
	$i =0;
	foreach($Products as $product){
	$i++;
		?>
		<div class="item <?php if($i==1){ echo 'active'; }?>">
		   	<p class="c20 text-center" style="margin:0px;">
	        	<a href="javascript:productDetail(<?php echo $product['id'];?>);" class="style16"><?php echo $product['name']; ?></a>
	        </p>
	        <div class="menu3d text-center" onmouseenter="init3D('my3dimg-<?php echo $product['did'];?>');"><!--onclick="open3DProduct(<?php echo $product['did'];?>);"-->
	        	<?php 
	        		$images = explode(",",$product['pro_images']);
	        	?>		
	        	<ul id="my3dimg-<?php echo $product['did'];?>">
	        		<?php foreach ($images as $image) { ?>
					<li><img src="<?php echo asset_url();?><?php echo $image;?>" class="withloader"/></li>
					<?php } ?>
				</ul>
	        </div>
	        <div style="padding-top:0px;" class="text-center">
		        <p class="c16" style="margin:0px;">USD : <?php echo $product['unit_price'];?></p>
		        <p class="c14">&nbsp; Min. Order: <?php echo $product['quantity'].' '.$product['unit'];?> </p>
	        </div>
		 </div>
	<?php } ?>
	</div>
	<a class="left carousel-control" data-slide="prev" href="#3dcarousel" style="background: none;padding-top:137%;"> 
    	<img alt="Back" style="border-width:0"src="<?php echo asset_url(); ?>images/previoustxt0.png">
	</a> 
   
	<a class="right carousel-control" data-slide="next" href="#3dcarousel" style="background: none;padding-top:137%;">
	    <img alt="Next" style="border-width:0"src="<?php echo asset_url(); ?>images/nexttxt0.png">
	</a>
</div>
<?php } else { ?>
<div style="padding-top:200px;font-size:14px;">
	<strong>The seller has not created products in 3D yet.</strong>
</div>
<?php } ?>
<script src="<?php echo asset_url();?>js/custom/3dlib.js"></script>