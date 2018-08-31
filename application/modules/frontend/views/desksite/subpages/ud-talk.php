					<?php foreach($Company as $company){?>
					 <br>
					        <p class="s1">Discover more ( View products, Catalouge or Watch videos), contact with this member through an amazing way, add him to your mobile contacts, chat with him on you phone, make an Instant call, send SMS, Email, get your own business platform and much more..</p>
					        <p class="s2"><strong>Download UDtalks ( business chat app ) on your mobile for free</strong></p>
					        <p class="s3"><a href="http://www.udtalks.com" target="_blank" class="style16">www.udtalks.com</a></p>
					        <p class="s4">Click the image to enlarge, open UDtalks and scan</p>
					    <div class="col-md-6">
				            <a href="images/BCard2.jpg" data-rel="PhotoGallery1" title="BCard2" class="img0 ui-draggable" rel="PhotoGallery1" class="relative">
				    		<img alt="BCard2" id="PhotoGallery1_img0" src="<?php echo asset_url(); ?>images/tn_BCard2.png" title="BCard2"></a>
				        </div>
				        <div class="col-md-6">
				            <a href="images/sell-n-buy-post-when-sent.png" data-rel="PhotoGallery1" title="Manage menu" class="img1 ui-draggable" rel="PhotoGallery1" class="relative">
				    		<img alt="Manage menu" id="PhotoGallery1_img1" src="<?php echo asset_url(); ?>images/tn_sell-n-buy-post-when-sent.png" title="Manage menu" style="width:100px;"></a>
				        </div>
					<?php } ?>
					<?php if(count($Company) <= 0) { ?>
					<div style="padding-top:200px;font-size:14px;">
						<strong>The seller has not created UDtalks projects  yet.</strong>
					</div>
					<?php } ?>