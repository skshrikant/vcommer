<?php foreach ($Productdetails as $product) {?>
		<div class="row">
			<ol class="breadcrumb">
			  <li><a href="javascript:productBySeller(<?php echo $product['busi_id'];?>);"> <img src="<?php echo asset_url()?>images/img1070.png" id="Shape17" alt="" width="10px"> Same by this seller</a></li>
			  <li class="pull-right">
				<a href="javascript:window.location.reload()" >
					<img src="<?php echo asset_url();?>images/i_145.gif" class="pull-right" width="20px" alt="" title="Save as PDF">
				</a>
			 </li>
			 <li class="pull-right">
			 	<a href="javascript:window.print()">
					<img src="<?php echo asset_url()?>images/folder-print.png" class="pull-right" width="20px" alt="" title="Print this page">
				</a>
			 </li>
			</ol>
		</div>
		<div class="panel panel-default">
		  <div class="panel-body">
		    <div class="col-md-6">
			   <div class="row"> 
			   		<div class="row">
			    		<p class="product-braedcrumbs">
				    		<a href="<?php echo base_url();?>desksite">Desktop</a> 
					    	&gt; <a href="javascript:productListBySubCategory(<?php echo $product['subcategory_id'];?>,<?php echo $product['busi_id'];?>)" > <?php echo $product['subcategory']?></a> 
							&gt;<a href="javascript:productListByMainProduct(<?php echo $product['mainproduct_id'];?>,<?php echo $product['busi_id'];?>)"  > <?php echo $product['mainproduct']?></a>
							&gt; <a href="javascript:productListBySubProduct(<?php echo $product['subproduct_id'];?>,<?php echo $product['busi_id'];?>)" > <?php echo $product['subproduct']?> </a>&gt;
						</p>
			    	</div>
			    	<div class="row">&nbsp;</div>
			   		<div class="col-md-3 sm-image-border">
				    	<div class="row">
				    		<a href="#" onmouseenter="SetImage('Shapeview','<?php echo asset_url()."".$product["main_image"];?>');return false;">
				    			<img src="<?php echo asset_url().''.$product['main_image'];?>" class="sm-image-border" width="66px" alt="" />
				    		</a>
			    		</div>
			    		<div class="row">
			    			<a href="#" onmouseenter="SetImage('Shapeview','<?php echo asset_url()."".$product["sub_image1"];?>');return false;">
				    			<img src="<?php echo asset_url().''.$product['sub_image1'];?>" class="sm-image-border" width="66px" alt="" />
			    			</a>
			    		</div>
			    		<div class="row">
				    		<a href="#" onmouseenter="SetImage('Shapeview','<?php echo asset_url()."".$product["sub_image2"];?>');return false;">
					    		<img src="<?php echo asset_url().''.$product['sub_image2'];?>" class="sm-image-border" width="66px" alt="" />
				    		</a>
			    		</div>
			    		<div class="row">
			    			<a href="#" onmouseenter="SetImage('Shapeview','<?php echo asset_url()."".$product["sub_image3"];?>');return false;">
				    			<img src="<?php echo asset_url().''.$product['sub_image3'];?>" class="sm-image-border" width="66px" alt="" />
				    		</a>
			    		</div>
			    		<div class="row">
			    			<a href="#" onmouseenter="SetImage('Shapeview','<?php echo asset_url()."".$product["sub_image4"];?>');return false;">
				    			<img src="<?php echo asset_url().''.$product['sub_image4'];?>" class="sm-image-border" width="66px" alt="" />
				    		</a>
			    		</div>
		    		</div>
				    <div class="col-md-9">
				    	<div class="row main-image">
			    			<img src="<?php echo asset_url().''.$product['main_image'];?>" id="Shapeview" class="img-responsive"  width="350" alt="" />	
				    	</div>
				    	<div class="row">
			    			<div class="col-md-6"><p>Viewed  <?php echo $product['visit']; ?></p></div>	
			    			<div class="col-md-6"><p>Likes  <i class="fa fa-thumbs-up like" aria-hidden="true"></i> <?php echo $product['likes']; ?></p></div>
				    	</div>
					</div>
					
				</div>
		    </div>
		    <div class="col-md-6">
		    	<h3 class="blue"><img src="<?php echo asset_url();?>images/page_location.png" class="sm-img" alt=""><span><?php echo $product['name']; ?></span></h3>
		    	<p><?php echo substr($product['description'], 0, 150); ?> ...</p>
		    	<div class="row">&nbsp;</div>
		    	<p> <h6>Quick Specifications</h6><hr /> </p>
		    	<div class="row">
		    		<div class="col-sm-4" ><p>Model Number</p></div>
		    		<div class="col-sm-8" ><p><?php echo $product['model_no']; ?></p></div>
	    		</div>
	    		<div class="row">
		    		<div class="col-md-4" ><p>Made In</p></div>
		    		<div class="col-md-8" ><p><?php echo $product['country']; ?></p></div>
	    		</div>
	    		<div class="row">
		    		<div class="col-md-4" ><p>Brand</p></div>
		    		<div class="col-md-8" ><p><?php echo $product['brand']; ?></p></div>
	    		</div>
	    		<div class="row">
		    		<div class="col-md-4" ><p>US$ Price</p></div>
		    		<div class="col-md-8" ><p><?php echo $product['unit_price']; ?></p></div>
	    		</div>
	    		<div class="row">
		    		<div class="col-md-4" ><p>Min. Order</p></div>
		    		<div class="col-md-8" ><p><?php echo $product['quantity']; ?></p></div>
	    		</div>
	    		<div class="row">
		    		<div class="col-md-4" ><p>Lead Time</p></div>
		    		<div class="col-md-8" ><p><?php echo $product['lead_time']?></p></div>
	    		</div>
	    		<div class="row">
		    		<div class="col-md-4" >Available Colors</div>
		    		<div class="col-md-8 " >
	    				<?php foreach($colors as $color) { ?>
		    				<span> <div class="available-colors" style="background: #<?php echo $color['color_code'];?>"></div></span>
	    				<?php } ?>
    				</div>
    			</div>
    			<hr />
    			<div class="row">
		    		<div class="col-md-4" ><p>Port</p></div>
		    		<div class="col-md-8" ><p>Ningbo</p></div>
    			</div>
	    		<div class="row">
		    		<div class="col-md-4" ><p>Accepted Payment</p></div>
		    		<div class="col-md-8" ><p>T/T, LC ...</p></div>
	    		</div>
	    		<hr />
	    		<div class="row pull-center">
	    			<div class="share-icons"><a href=""><i class="fa fa-comments" aria-hidden="true"></i></a></div>
	    			<div class="share-icons"><a href=""><i class="fa fa-file-text-o" aria-hidden="true"></i></a></div>
	    			<div class="share-icons"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></div>
	    			<div class="share-icons"><a href=""><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></div>
	    			<div class="share-icons"><a href=""><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></div>
	    			<div class="share-icons"><a href=""><i class="fa fa-share-alt" aria-hidden="true"></i></a></div>
	    		</div>
	    		<hr />
		    </div>
		  </div>
		</div>
		<div class="row"><h5 class="heading">About This Product</h5></div>
		<div class="row clearfix">&nbsp;</div>
		<div class="panel panel-default">
		  <div class="panel-body">
			  <div class="row">
			  	<div class="col-md-10"><p><?php echo $product['about']; ?></p></div>
			  </div>
			  <div class="row">
			  	<div class="col-md-8">
				  	<?php foreach ($specifications as $specification) {?>
						<div class="col-md-6">
							<p><b><?php echo $specification['spec_name']; ?></b> : <?php echo $specification['spec_value']; ?></p>
						</div>
					<?php }?>
				</div>
			  </div>
		  </div>
	  </div>
	  <div class="row"><h5 class="heading">Product Description</h5></div>
		<div class="row clearfix">&nbsp;</div>
		<div class="panel panel-default">
		  <div class="panel-body">
			  <div class="row">
			  	<div class="col-md-10"><p><?php echo $product['description']; ?></p></div>
			  </div>
			  <div class="row">
			  	<div class="col-md-12">
			  		<img src="<?php echo asset_url().''.$product['flyr_image1'];?>" class="flyr-img img-responsive" alt="">
				</div>
			  </div>
		  </div>
	  </div>
	  <div class="row"><h5 class="heading">Product Specification</h5></div>
		<div class="row clearfix">&nbsp;</div>
		<div class="panel panel-default">
		  <div class="panel-body">
			  <div class="row">
			  	<div class="col-md-8">
				  	<?php foreach ($specifications as $specification) {?>
						<div class="col-md-6">
							<p><b><?php echo $specification['spec_name']; ?></b> : <?php echo $specification['spec_value']; ?></p>
						</div>
					<?php }?>
				</div>
			  </div>
			  <div class="row">
			  	<div class="col-md-12">
			  		<img src="<?php echo asset_url().''.$product['flyr_image2'];?>" class="flyr-img img-responsive" alt="">
				</div>
			  </div>
		  </div>
	  </div>
	<?php } ?>
