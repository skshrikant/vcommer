						<?php foreach($verifiedDetails as $verified){ ?>
						<p class="box1font2"><strong>Verified Member</strong></p>
			            <img src="<?php echo asset_url(); ?>images/img0481.png" id="Shape14" alt="" style="width:120px;height:120px;">
			            <p class="boxfont2">Verified logo is only ( strictly ) submitted to the Seller / Shipper who has been passed a strict verified check and audit procedures ..
			            <br>
			            </p>
			            <p class="boxfont3">To check Sellers / Shipper's verification certificate, click on Certificates Icon or copy the ( Member Verification No. shown below ) and past it into the CHECK&nbsp; link.
			            </p>
			            <p class="b1"><strong>SGS Verification No. :</strong></p>
			            <p class="c14"><?php echo $verified['verification_id']; ?></p>
			            <p class="b2"><strong>Check</strong></p>
			            <?php }?>