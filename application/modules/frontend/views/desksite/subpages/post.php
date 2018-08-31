					<?php foreach($Posts as $key=>$post){
						$converted = date('d M Y h.i.s A', strtotime($post['request_created']));
						
						$posted =  date("j M", strtotime($converted));
						?>
					
						<p class="s8"><strong> Posted On <?php echo $posted;?></strong></p>
						<div class="box2" id="post" style="height: 497px;">
				           
						<div class="row left">
				                <p class="s7"><strong><?php echo $post['title'];?></strong></p>
				                <br>
				                <?php if(!empty($post['image1'])) { ?>
				                <div class="col-md-6 col-md-6 ">
				                    <a href="<?php echo asset_url().$post['image1']; ?>" data-rel="prettyPhoto_SlideShow31<?php echo $key;?>[SlideShow31<?php echo $key;?>]" rel="prettyPhoto_SlideShow31<?php echo $key;?>[SlideShow31<?php echo $key;?>]">
									<img alt="<?php echo $post['title'];?>" id="PhotoGallery8_img0" src="<?php echo asset_url().$post['image1']; ?>" title="<?php echo $post['title'];?>" class="imgscree" style="width:100%;">
									</a>
				                </div>
				                <?php } ?>
				                <?php if(!empty($post['image2'])) { ?>
				                <div class="col-md-6 col-md-6">
				                    <a href="<?php echo asset_url().$post['image2']; ?>" data-rel="prettyPhoto_SlideShow31<?php echo $key;?>[SlideShow31<?php echo $key;?>]" rel="prettyPhoto_SlideShow31<?php echo $key;?>[SlideShow31<?php echo $key;?>]">
									<img alt="<?php echo $post['title'];?>" id="PhotoGallery8_img0" src="<?php echo asset_url().$post['image2']; ?>" title="<?php echo $post['title'];?>" class="imgscree" style="width:100%;">
									</a>
				                </div>
				                <?php } ?>
				                <?php if(!empty($post['image3'])) { ?>
				                <div class="col-md-6 col-md-6">
				                    <a href="<?php echo asset_url().$post['image3']; ?>" data-rel="prettyPhoto_SlideShow31<?php echo $key;?>[SlideShow31<?php echo $key;?>]" rel="prettyPhoto_SlideShow31<?php echo $key;?>[SlideShow31<?php echo $key;?>]">
									<img alt="<?php echo $post['title'];?>" id="PhotoGallery8_img0" src="<?php echo asset_url().$post['image3']; ?>" title="<?php echo $post['title'];?>" class="imgscree" style="width:100%;">
									</a>
				                </div>
				                <?php } ?>
				                <?php if(!empty($post['image4'])) { ?>
				                <div class="col-md-6 col-md-6">
				                    <a href="<?php echo asset_url().$post['image4']; ?>" data-rel="prettyPhoto_SlideShow31<?php echo $key;?>[SlideShow31<?php echo $key;?>]" rel="prettyPhoto_SlideShow31<?php echo $key;?>[SlideShow31<?php echo $key;?>]">
									<img alt="<?php echo $post['title'];?>" id="PhotoGallery8_img0" src="<?php echo asset_url().$post['image4']; ?>" title="<?php echo $post['title'];?>" class="imgscree" style="width:100%;">
									</a>
				                </div>
				                <?php } ?>
				            </div>
				            <p style="color:#2D2D2D;" class="left">"We are thrilled that both the Jaguar and Land Rover brands continue to rank high in the esteemed J.D. Power APEAL study," says Joe Eberhardt, President &amp; CEO, Jaguar Land Rover North America, LLC. "To have our Range Rover flagship vehicle win Large Premium SUV for the fifth* time is especially pleasing and exemplifies our continued commitment to manufacturing desirable cars that meet customers’ needs.”</p>
				         </div>
				        <script>
				        $("a[data-rel='prettyPhoto_SlideShow31<?php echo $key;?>[SlideShow31<?php echo $key;?>]']").attr('rel', 'prettyPhoto_SlideShow31<?php echo $key;?>[SlideShow31<?php echo $key;?>]');
				        $("a[rel^='prettyPhoto_SlideShow31<?php echo $key;?>']").prettyPhoto({theme:'facebook',social_tools:false});
				        </script>
					<?php } ?>
					<?php if(count($Posts) <= 0) {?>
					<div style="padding-top:200px;font-size:14px;">
						<strong>The <?php if($bcatinfo[0]['user_category_id'] == 1) { ?>seller<?php } elseif ($bcatinfo[0]['user_category_id'] == 2) { ?>shipper<?php } else { ?>buyer<?php } ?> has no recent posts.</strong>
					</div>
					<?php } ?>