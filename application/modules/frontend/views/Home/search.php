		<?php if(count($Products) > 0 && $Products[0]['id'] !=''){?>
		 <div>  
		 <h1 class="font2">products</h1>
   			 <p class="font3">Sourcing with more details is available by selecting additional options from the More Options Menu on the right side..</p>
   		 <br>
   		 </div>
   		<div class="section1">
			<section class="center slider slick-initialized slick-slider row">
			<?php 
			foreach ($Products as $product){?>
			<div class="col-md-3 col-sm-4">
			     <div class="imgsection slick-slide slick-cloned style1"  tabindex="-1" role="option" data-slick-index="11" aria-hidden="true">
					<h4 class="text-center product-strong-text"> 
						<strong><?php echo $product['name']?></strong>
					</h4>
					<p class="text-center product-text" maxlength="5"><?php echo substr($product['description'], '0', '100'); ?></p>
					<div class="tumb-slide">
						<img src="<?php echo asset_url().$product['main_image'];?>">
						<div class="hover-thumb text-center">
							<a href="#" tabindex="-1">
								<img src="assets/images/ts/window0.png">
							</a> 
							<a href="#" tabindex="-1">
								<img src="assets/images/ts/view.png">
							</a>
						</div>
					</div>
					<h4 class="text-center product-money-symbol">USD <span class="product-price"><?php echo $product['unit_price'];?></span></h4>
					<p class="text-center product-money-text">Min. Qty. <?php echo $product['quantity'].' '.$product['unit']; ?></p>
				 </div>
			 </div>
			 <?php }?>
			</section>
            </div>
            <?php }?>
            <?php if(count($Sellers) > 0 && $Sellers[0]['id'] !=''){?>
             <div>  
		 <h1 class="font2"> <br>sellers</h1>
		   		 <p class="font3">Sourcing with more details is available by selecting additional options from the More Options Menu on the right side..</p>
   		 <br>
   		 </div>
		<div class="section2">
			<section class="center slider slick-initialized slick-slider row">
			<?php  
			foreach ($Sellers as $seller) {?>
			<div class="col-md-3 col-sm-4">
					<div class="imgsection slick-slide slick-cloned style1"  tabindex="-1" role="option" data-slick-index="11" aria-hidden="true">
								<br />
								<br />
								<div class="tumb-slide">
									<img src="<?php echo asset_url().$seller['profile_image']; ?>">
									<div class="hover-thumb text-center">
										<a href="#" tabindex="-1">
											<img src="<?php echo asset_url(); ?>images/ts/window0.png">
										</a> 
										<a href="#" tabindex="-1">
											<img src="<?php echo asset_url(); ?>images/desktopicon.gif">
										</a>
									</div>
								</div>
								<div id="Layer176" class="style3">
									<div id="wb_Text216" class="style4">
									<span class="style5"><strong><?php echo $seller['name_prefix'].' '.$seller['name']; ?></strong></span></div>
									<div id="wb_Text217" class="style6">
									<span class="style7"><?php echo $seller['position']; ?></span></div>
									<div id="Layer177" class="style8">
									<div id="wb_Text218" class="style9">
									<span class="style10"><?php echo substr($seller['main_product'] , '0', '30'); ?> ...</span></div>
									</div>
									<div id="wb_Shape38" class="style11">
									<img src="<?php echo asset_url().''.$seller['contact_person_flag']; ?>" id="Shape38" alt="" class="style12"></div>
							  </div>
					  </div>
					</div>
					<?php } ?>
				</section>
            </div>
            <?php }?>
            <?php if(count($Buyers) > 0 && $Buyers[0]['id'] !='') {?>
             <div>  
		 <h1 class="font2">buyers</h1>
		   		 <p class="font3">Sourcing with more details is available by selecting additional options from the More Options Menu on the right side..</p>
   		 <br>
   		 </div>
		<div class="section3">
			<section class="center slider slick-initialized slick-slider row">
					<?php  
			foreach ($Buyers as $buyer) {?>
			<div class="col-md-3 col-sm-4">
					<div class="imgsection slick-slide slick-cloned style1"  tabindex="-1" role="option" data-slick-index="11" aria-hidden="true">
								<br />
								<br />
								<div class="tumb-slide">
									<img src="<?php echo asset_url().$buyer['profile_image']; ?>">
									<div class="hover-thumb text-center">
										<a href="#" tabindex="-1">
											<img src="<?php echo asset_url(); ?>images/ts/window0.png">
										</a> 
										<a href="#" tabindex="-1">
											<img src="<?php echo asset_url(); ?>images/desktopicon.gif">
										</a>
									</div>
								</div>
								<div id="Layer176" class="style3">
									<div id="wb_Text216" class="style4">
									<span class="style5"><strong><?php echo $buyer['name_prefix'].' '.$buyer['name']; ?></strong></span></div>
									<div id="wb_Text217" class="style6">
									<span class="style7"><?php echo $buyer['position']; ?></span></div>
									<div id="Layer177" class="style8">
									<div id="wb_Text218" class="style9">
									<span class="style10"><?php echo substr($buyer['main_product'], '0', '30'); ?> ...</span></div>
									</div>
									<div id="wb_Shape38" class="style11">
									<img src="<?php echo asset_url().''.$buyer['contact_person_flag']; ?>" id="Shape38" alt="" class="style12"></div>
							  </div>
					  </div>
					</div>
					<?php } ?>
				</section>
            </div>
            <?php }?>
           <?php if(count($Shippers) > 0 && $Shippers[0]['id'] !='') {?> 
             <div>  
             
		 <h1 class="font2">shippers</h1>
		   		 <p class="font3">Sourcing with more details is available by selecting additional options from the More Options Menu on the right side..</p>
   		 <br>
   		 </div>
			<div class="section1">
			<section class="center slider slick-initialized slick-slider row">
			<?php  
			foreach ($Shippers as $shipper) {?>
			<div class="col-md-3 col-sm-4">
					<div class="imgsection slick-slide slick-cloned style1"  tabindex="-1" role="option" data-slick-index="11" aria-hidden="true">
								<br />
								<br />
								<div class="tumb-slide">
									<img src="<?php echo asset_url().$shipper['profile_image']; ?>">
									<div class="hover-thumb text-center">
										<a href="#" tabindex="-1">
											<img src="<?php echo asset_url(); ?>images/ts/window0.png">
										</a> 
										<a href="#" tabindex="-1">
											<img src="<?php echo asset_url(); ?>images/desktopicon.gif">
										</a>
									</div>
								</div>
								<div id="Layer176" class="style3">
									<div id="wb_Text216" class="style4">
									<span class="style5"><strong><?php echo $shipper['name_prefix'].' '.$shipper['name']; ?></strong></span></div>
									<div id="wb_Text217" class="style6">
									<span class="style7"><?php echo $shipper['position']; ?></span></div>
									<div id="Layer177" class="style8">
									<div id="wb_Text218" class="style9">
									<span class="style10"><?php echo substr($shipper['main_product'] , '0', '30'); ?>...</span></div>
									</div>
									<div id="wb_Shape38" class="style11">
									<img src="<?php echo asset_url().''.$shipper['contact_person_flag']; ?>" id="Shape38" alt="" class="style12"></div>
							  </div>
					  </div>
					</div>
					<?php } ?>
				</section>
            </div><?php }?>