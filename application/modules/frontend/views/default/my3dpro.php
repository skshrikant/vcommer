<style>
@charset "utf-8";
body, ul, li {
	margin: 0;
	padding: 0;
}
ul, li {
	list-style: none;
}
.menu {
	width: 354px;
	border: 0px solid #ccc;
	margin: 10px auto 15px;
	max-height:404px;
	overflow:hidden;
}
.menu ul {
	width: 354px;
	height:404px;
}
.menu ul li img {
	display: block;
	width:350px;
	cursor:pointer;
	cursor:hand;
}
</style>
<div id="my3DModal" class="modal fade" role="dialog" style="background:rgba(0,0,0,0.5);z-index:10000;">
  	<div class="modal-dialog" style="width:400px;">
    	<div class="modal-content" style="margin-top:40%;">
    		<div style="position:absolute;right: -15px;top: -15px;width: 25px;height: 25px;z-index:5000;"><button type="button" class="pull-right" data-dismiss="modal" aria-hidden="true" style="background:transparent;border:0px;padding:0px;"><img src="<?php echo asset_url();?>images/newicons/closeround.png" id="Image47" alt="" style="width:35px;height:35px;"></button></div>
      		<div class="modal-body" style="padding-top:15px;padding-bottom:5px;">
      			<form name="frmedit_product" method="post" action="" enctype="multipart/form-data" id="frmedit_product">
      				<div class="row" style="margin:0px;">
      					<div class="col-md-12" style="text-align: center;">
      						<a href="<?php echo base_url();?>products/details/<?php echo $productdata[0]['id'];?>" target="_blank" class="style16" style="font-family: Arial;font-size: 16px;text-align: center;left:0px;width: 100%;"><?php echo $productdata[0]['name'];?></a>
      					</div>
      				</div>
              <br/>
      				<!-- div class="row" style="margin:0px;">
      					<div class="col-md-12" style="text-align: center;">
      						<span style="color:#3C3C3C;font-family:Arial;font-size:11px;"><?php echo substr($productdata[0]['description'],0,110);?> <?php if(strlen($productdata[0]['description']) > 110) {?>...<?php } ?></span>
      					</div>
      				</div-->
        			<div id="divtestproduct" class="menu" style="padding-bottom:0px;" onmouseenter="init3D('my3dimg');">
        			<?php 
        				$images = explode(",",$productdata[0]['pro_images']);
        			?>		
        				<ul id="my3dimg">
        					<?php foreach ($images as $image) { ?>
							<li><img src="<?php echo asset_url();?><?php echo $image;?>" class="withloader"/></li>
							<?php } ?>
						</ul>
        			</div>
        			<!-- div class="row">
      					<div class="col-md-12" style="text-align: center;">
      						<span style="color:#A9A9A9;font-family:Arial;font-size:13px;">USD <span style="color:#3C3C3C;font-family:Arial;font-size:24px;"><?php echo $productdata[0]['unit_price'];?></span></span>
      					</div>
      				</div>
      				<div class="row">
      					<div class="col-md-12" style="text-align: center;">
      						<span style="background-color:#FFFFFF;color:#3C3C3C;font-family:Arial;font-size:13px;">Min. Order: <?php echo $productdata[0]['quantity'];?> Set&nbsp;&nbsp;&nbsp; </span>
      					</div>
      				</div>
      				<div class="row">
      					<div class="col-md-12" style="text-align: center;">
      						<span style="color:#3C3C3C;font-family:Arial;font-size:11px;">Likes</span> <img src="<?php echo asset_url();?>images/items_like0.png" id="Image1" alt="" style="width:25px;" /><span style="color:#3C3C3C;font-family:Arial;font-size:11px;"><?php echo $productdata[0]['likes'];?></span>
      					</div>
      				</div-->
        		</form>
      		</div>
    	</div>
	    <!-- div>
	    	<div class="modal-footer" style="text-align: center;background: transparent;border:0px;">
	        		<button type="button" class="btn btn-danger btn-lg"  style="background-color: #FF6347;border: 1px #FF6347 solid;" data-dismiss="modal">Close</button>
	      	</div>
	    </div-->	
  	</div>
</div>
<script src="<?php echo asset_url();?>js/custom/3dlib.js"></script>