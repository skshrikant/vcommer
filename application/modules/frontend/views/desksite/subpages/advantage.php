					<?php foreach($Company as $company){?>
			            <p class="adfont1"><strong>Products Guarantee</strong></p>
			            <?php if(!empty($company['gaurantee_term'])) { ?>
			            <div class="inline1 center">
			                <p class="adfont2"><strong>Period</strong> &nbsp;&nbsp;&nbsp;<?php echo $company['gaurantee_period'];?> Months</p>
			            </div>
			            <p class="adfont2"><strong>Terms</strong></p>
			            <p class="adfont2"><?php echo $company['gaurantee_term'];?></p>
			            <?php } else { ?>
			            <p class="adfont2" style="font-size:14px;"><strong>Seller has no advantage</strong></p>
			            <?php } ?>
			            <p class="be1"><hr style="margin: 5px 0px; height: 1px; border-top: 1px dotted #000;"/></p>
			            <br>
			            <p class="adfont1"><strong>Products Certificates</strong></p>
			            <?php if(!empty($company['product_certs'])) { ?>
			            <p class="adfont2"><strong>The Seller is able to issues the following certificates:</strong></p>
			            <p class="adfont2"><?php echo $company['product_certs'];?></p>
			            <?php } else { ?>
			            <p class="adfont2" style="font-size:14px;"><strong>Seller has no advantage</strong></p>
			            <?php } ?>
			            <p class="be1"><hr style="margin: 5px 0px; height: 1px; border-top: 1px dotted #000;"/></p>
			            <br>
			            <p class="adfont1"><strong>Export & Shipping</strong></p>
			            <?php if(!empty($company['export_lic_number'])){?>
			            <p class="adfont2"><strong>The Seller has an export license and able to export & ship orders under his company license.</strong></p>
			            <?php } else { ?>
			            <p class="adfont2" style="font-size:14px;"><strong>Seller has no advantage</strong></p>
			            <?php } ?>
			            <p class="be1"><hr style="margin: 5px 0px; height: 1px; border-top: 1px dotted #000;"/></p>
					<?php } ?>