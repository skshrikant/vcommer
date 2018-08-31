<style>
.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
    background-color: #222;
    padding: 9px;
    opacity: 1;
    color: #fff;
    font-size: 13px;
    text-align: center;
    width: 145px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
</style>
<div class="row editaccount_outer">
	<!-- div class="trd-trade-mark" style="text-align:center;width:190px;position:absolute;bottom:80px;padding:15px;">
		<div><span style="color:#FFFFFF;font-family:Arial;font-size:11px;">TRADE</span></div>
		<div><span style="color:#FA5C43;font-family:Impact;font-size:20px;letter-spacing:0.07px;">STATION</span></div>
		<div><span style="color:#FFFFFF;font-family:Arial;font-size:8px;">Copyrights | TRDSTATION 2013-2016<br>@All Rights Reserved</span></div>
	</div-->
	<div class="col-md-2 account-left-nav"> 
		<div class="col-md-12" style="padding: 9px;">
			<div class="account-image">
				<a href="javascript:false;"> 
					<img class="hover" alt="" class="img-circle" src="<?php echo asset_url();?>images/Ranking1.png">
				</a>
			</div>
			<div style="color:#FFFFFF;font-family:Arial;font-size:13px;text-align: center;padding-bottom: 15px;">Ranking</div>
		</div>
	</div>
	<div class="col-md-10 account-content-area">
		<div class="tab-content main-tab-content">
			<div class="panel panel-default tab-pane fade in active" id="ranking" style="overflow:hidden;">
			  	<div class="panel-heading custom-panel-heading">
			  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer130', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
			  	</div>
			  	<div class="panel-body panel-body-custom" id="account_personal_info" style="overflow:hidden;">		
			  		<div class="personal_info_div" id="personal_info_div1" style="height:600px;overflow-y:scroll;padding:0px 15px;">
			  			<div class="row" style="margin-top:30px;">
			  				<div class="col-sm-4">&nbsp;</div>
				  			<div class="col-sm-4" id="wb_Text358" style="text-align:left;">
								<span style="color:#3C3C3C;font-family:Arial;font-size:13px;">Your Current Rank</span>
							</div>
							<div class="col-sm-4">&nbsp;</div>
						</div>
						<div class="row" style="padding-top:15px;">
							<div class="col-sm-4">&nbsp;</div>
				  			<div class="col-sm-4" id="Layer134" style="padding:0px;height:14px;">
								<div id="Layer151" style="width:<?php echo $binfo[0]['rank'];?>%;height:14px;">
								</div>
							</div>
							<div class="col-sm-4">&nbsp;</div>
						</div>
						<div class="row">
							<div class="col-sm-4">&nbsp;</div>
							<div class="col-sm-4" id="wb_Shape259" style="padding-left:<?php if($binfo[0]['rank'] >0) { echo ($binfo[0]['rank']/3 -1);} else { echo "0";}?>%;width:17px;height:13px;">
								<img src="<?php echo asset_url();?>images/img1981.png" id="Shape259" alt="" style="width:17px;height:13px;">
							</div>
							<div class="col-sm-4">&nbsp;</div>
						</div>
						<div class="row" style="padding-top:5px;">
							<div class="col-sm-4">&nbsp;</div>
							<div class="col-sm-4" id="wb_Shape259" style="padding-left:<?php if($binfo[0]['rank'] >0) { echo ($binfo[0]['rank']/3 -1.5);} else { echo "0";}?>%;height:19px;color:#FF6347;font-family:Arial;font-size:17px;">
								% <?php echo $binfo[0]['rank'];?>
							</div>
							<div class="col-sm-4">&nbsp;</div>
						</div>
						<br><br>
						<div class="row">
							<div class="col-sm-1"></div>
							<div class="col-sm-10" style="padding:0px;">
								<div id="wb_Text346" style="height:25px;z-index:2511;text-align:left;">
									<span class="rank-heading">Ranking System &amp; Counters</span>
								</div>
								<div style="color:#2D2D2D;font-family:Arial;font-size:11px;padding-top:10px;">
									Your <strong>Rank</strong> is one of the most important indicators about your business and performance in the TRADE STATION platform, which presents a quick impression about your company, guides the buyers to knock your doors without hesitation ..<br>
									To provide buyers will a real Ranks about you and other sellers, we have designed the "Ranking System"  to regard and reflect certain factors related to the business evaluation as follows:
									<br>
									<br>
									<ol>
										<li>The <strong>financial situation</strong> of the company, which reflected through ( The level of subscription ).</li>
										<li>The <strong>correctness and accuracy of the information</strong> provided by the company, which reflected through ( verification and Audited system)..</li>
										<li>The <strong>security level</strong> provided by the company, on their goods, which reflected through ( The advantages provided by the company specially "The Terms of Product Guarantee" Plus "The ability of issuing Products Certificates" Plus "The ability of export and shipping".</li>
									</ol>
									<br>
									<strong>To high your rank and reach to the max percentage ( %98), we advise you allow or upgrade the following factors:</strong>
								</div>
							</div>
							<div class="col-sm-1"></div>
						</div>
						<br><br><br>
						<div class="row">
							<div class="col-sm-1"></div>
							<div class="col-sm-10" style="padding:0px;">
								<div class="row ranking-rows">
									<div class="col-sm-3 text-center">
										<img src="<?php echo asset_url();?>images/img1984.png" id="Image68" alt="" style="width:74px;">
										<div style="padding-top:5px;"><span style="color:#2D2D2D;font-family:Arial;font-size:15px;"><strong>Membership</strong></span></div>
									</div>
									<div class="col-sm-3">
										<div class="<?php if($binfo[0]['plan_id'] == 1){?>plan-active<?php } else {?>plan-regular<?php } ?>">
											<div style="<?php if($binfo[0]['plan_id'] == 1){?>color:#1E90FF;<?php }?>"><strong>Free Plan</strong></div>
											<div>Provides you with % 0</div>
										</div>
										<div class="<?php if($binfo[0]['plan_id'] == 2){?>plan-active<?php } else {?>plan-regular<?php } ?>">
											<div style="<?php if($binfo[0]['plan_id'] == 2){?>color:#1E90FF;<?php }?>"><strong>Basic Plan</strong></div>
											<div>Provides you with % 59</div>
										</div>
										<div class="<?php if($binfo[0]['plan_id'] == 3){?>plan-active<?php } else {?>plan-regular<?php } ?>">
											<div style="<?php if($binfo[0]['plan_id'] == 3){?>color:#1E90FF;<?php }?>"><strong>VIP Plan</strong></div>
											<div>Provides you with % 61</div>
										</div>
										<div class="<?php if($binfo[0]['plan_id'] == 4){?>plan-active<?php } else {?>plan-regular<?php } ?>">
											<div style="<?php if($binfo[0]['plan_id'] == 4){?>color:#1E90FF;<?php }?>"><strong>Elite Plan</strong></div>
											<div>Provides you with % 63</div>
										</div>
									</div>
									<div class="col-sm-3" style="color:#1E90FF;font-family:Arial;font-size:11px;">
										<!-- img src="<?php echo asset_url();?>images/img1982.png" id="Shape280" alt="" style="width:11px;height:13px;">
										<strong> Your Current Plan is<br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $binfo[0]['plan_name'];?> Plan</strong><br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($binfo[0]['rank'] > 0) {?>You Got <?php echo $binfo[0]['rank'];?> % <?php } ?>
										-->
									</div>
									<div class="col-sm-3" style="color:#2D2D2D;font-family:Arial;font-size:11px;padding-top:20px;">
										<br>
										<?php if($binfo[0]['plan_id'] > 1 && $binfo[0]['plan_id'] < 4) { ?>
										You still have chance to increase <br>% 2 or % 4, if you upgrage your <br>membership.<br><br>
										<?php } ?>
										<?php if($binfo[0]['plan_id'] == 1) { ?>
										You can increase your ranking up to 63% by upgrading your membership.<br><br>
										<?php } ?>
										<?php if($binfo[0]['plan_id'] != 4) { ?>
										<a href="javascript:getMyPackages();ShowObjectWithEffect('Layer130', 0, 'dropup', 500, 'easeInBounce');" class="btn btn-sm btn-danger-custom">Upgrade Now</a>
										<?php } ?>
									</div>
								</div>
							</div>
							<div class="col-sm-1"></div>
						</div>
						<br><br>
						<div class="row">
							<div class="col-sm-1"></div>
							<div class="col-sm-10" style="padding:0px;">
								<div class="row ranking-rows" style="padding:40px 0px;">
									<form action="" name="attachmentupload" id="attachmentupload" enctype="multipart/form-data" method="post">
									<div class="col-sm-3 vlogo-img">
										<img src="<?php echo asset_url();?>images/trusted.png" id="Image68" alt="" style="width:79px;height: 80px;">
										<div>
											<span style="color:#2D2D2D;font-family:Arial;font-size:15px;"><strong>Verified Logo</strong></span><br>
											<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Provides you with % 20</span>
										</div>
									</div>
									<div class="col-sm-9 <?php if($binfo[0]['is_logo_verified'] != 0) { ?>vlogo-wbg<?php } ?>" id="vlogo-area" style="padding:0px;border:1px solid #F5F5F5;min-height:200px;margin:-40px 0px;padding:40px 0px;">
										<?php if($binfo[0]['is_logo_verified'] == 0) { ?>
										<div class="col-sm-8" style="padding-left:0px;">
										<?php } else { ?>
										<div class="text-center">
										<?php } ?>
											<?php if($binfo[0]['is_logo_verified'] == 0) { ?>
											<div class="vlogo-desc">
												To add the Verified Member Logo, please upload a color copy of following documents, and click on send.
											</div>
											<div class="vlogo-list">
												<ol>
													<li>The official certificates and business license includes ( The scope of<br> business, Name of the Director, Address, P.O.Box).</li>
													<li>Recent Bank Statement proves that your Company Bank Account is Exist <br>and Active and owned by the same director.</li>
													<li>A declaration letter, issued for (The Trade Station Auditing Section), to be<br>
														 printed on company official letter, and signed by the director of the company<br> 
														 (authorized signature and seal). Confess and certify that all the provided<br> 
														 documents ( License, Certificates ..etc) are legal as an image copy of the<br> 
														 original document and director bearing all the responsibility.</li>
													<li>Latest Utility Bill of the Company.</li>
													<li>Recent ID/Passport of the director.</li>
												</ol>
											</div>
											<div class="vlogo-note">
												N.B. In case you have been passed an audit check with any other<br>
												platform, please provide us with your (  Audited No. and The check link).<br><br>
												<input type="text" name="audit_no" id="audit_no" placeholder="Type Audit No." style="height:27px;width:130px;padding-left:5px;"/>
												<input type="text" name="verified_url" id="verified_url" placeholder="Type the check Link or verified URL" style="height:27px;width:230px;margin-left:15px;padding-left:5px;"/>
											
											</div>
											<?php } else if($binfo[0]['is_logo_verified'] == 1) { ?>
											<div class="vlogo-request text-center">
												<br><strong>Your request has been received <br>successfully..</strong><br><br>
											</div>
											<div class="vlogo-request-msg text-center">
												It takes up to 7 working days to end our verifications<br> process and activate your verification logo..<br>
												Once we end the required process, this message will be<br> disappeared and a successful message will be<br> displayed instead..<br><br>
												<strong>GOOD LUCK</strong><br><br>
											</div>
											<?php } else { ?>
											<div class="vlogo-verified text-center">
												<br><br><br>
												Congrats your are a verified member, <br>Your verifcation ID is: <strong><?php echo $binfo[0]['verification_id']?></strong>
												<br><br><br><br>
											</div>
											<?php } ?>
										</div>
										<?php if($binfo[0]['is_logo_verified'] == 0) { ?>
										<div class="col-sm-4 <?php if($binfo[0]['is_logo_verified'] != 0) { ?>vlogo-wbg<?php } ?>" style="color:#2D2D2D;font-family:Arial;font-size:11px;padding-right:30px;padding-top:80px;" id="vlogo-btn">
											<br>
											<?php if($binfo[0]['is_logo_verified'] == 0) { ?>
											<div class="fileUpload">
											    <span>Attachments</span>
											    <input type="file" name="fileattachs[]" id="fileattachs" class="upload" multiple accept=".png,.gif,.jpeg,.jpg,.bmp" onchange="showFileCount(this);"/>
											</div>
											<div style="padding-left: 15px;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:13px;font-weight:bold;" id="attachments">0 files selected</span><br><br>
											</div>
											<div style="padding-left: 10px;">
												<input type="button" class="btn btn-sm btn-danger-custom" value="Upload Now" onclick="verifiedBuyerLogoRequeted();"/>
											</div>
											<?php } ?>
										</div>
										<?php } ?>
									</div>
									</form>
								</div>
							</div>
							<div class="col-sm-1"></div>
						</div>
						<br><br>
						<div class="row">
							<div class="col-sm-1"></div>
							<div class="col-sm-10" style="padding:0px;">
								<div class="row ranking-rows">
									<div class="col-sm-3 text-center">
										<br><br><br>
										<img src="<?php echo asset_url();?>images/guarantee-lock.png" id="Image68" alt="" style="width:82px;">
										<div style="padding-top:5px;">
											<span style="color:#2D2D2D;font-family:Arial;font-size:15px;"><strong>Goods Guarantee</strong></span><br>
											<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Provides you with % 5</span>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="vlogo-desc" id="terms_desc">
											<?php if(!empty($binfo[0]['gaurantee_term'])) { ?>
											<strong>You have been confess to provide a guarantee on your <br>products based on the following terms</strong>
											<?php } else { ?>
											If you confess to provide buyers with a guarantee on your products <br>according to the terms you determine ( hereunder) by yourself, please <br>select it and press " Confess & Confirm" button.
											<?php } ?>
										</div>
										<br>
										<div class="row" id="terms-inputs" style="display:<?php if(!empty($binfo[0]['gaurantee_term'])) { ?>none;<?php } else{ ?>block;<?php } ?>">
											<div class="col-sm-2" style="padding-top:4px;padding-right:0px;padding-bottom: 20px;">
												<strong>Period</strong>
											</div>
											<div class="col-sm-2" style="padding-left:0px;padding-bottom: 15px;">
												<input type="number" id="Editbox71" style="width:59px;height:23px;line-height:23px;z-index:2452;" name="Editbox71" value="<?php echo $binfo[0]['gaurantee_period'];?>" maxlength="2">
											</div>
											<div class="col-sm-8" style="padding-top:4px;padding-left:0px;padding-bottom: 20px;">
												<strong>Months</strong>
											</div>
											<div class="col-sm-2" style="padding-top:4px;padding-right:0px;">
												<strong>Terms</strong>
											</div>
											<div class="col-sm-4" style="padding-left:0px;">
												<a href="javascript:openGauranteeTerms();" class="btn btn-sm btn-success-custom">Select or add items</a>
											</div>
											<div class="col-sm-6" style="padding-top:4px;padding-left:0px;">
												&nbsp;
											</div>
										</div>
										<div class="row" id="terms-input-msg" style="display:<?php if(!empty($binfo[0]['gaurantee_term'])) { ?>block;<?php } else{ ?>none;<?php } ?>">
											<div class="col-sm-2" style="padding-right:0px;padding-bottom: 10px;">
												<strong>Period</strong>
											</div>
											<div class="col-sm-10 selected-period-text" id="selected_period" style="padding-bottom:10px;padding-left:0px;">
												<strong><?php echo $binfo[0]['gaurantee_period'];?> Months</strong>
											</div>
											<div class="col-sm-2" style="padding-right:0px;">
												<strong>Terms</strong>
											</div>
											<div class="col-sm-10 term-selected-text" id="selected_term" style="padding-left:0px;">
												<?php echo $binfo[0]['gaurantee_term'];?>
											</div>
										</div>
										<br><br>
										<div class="vlogo-note">
											Note: You are free to click on <b>Edit Terms</b> or <b>Cancel Guarantee</b> button to <br>change or remove this feature <u><b>BUT</b></u> in case you first placed an order your <br>obligation will be continues till the buyer received the goods according to the <br>agreed specifications.
										</div>
									</div>
									<div class="col-sm-3" style="color:#2D2D2D;font-family:Arial;font-size:11px;">
										<br><br><br>
										<div id="terms_area">
											<br>
											<div id="terms-text" class="text-left" style="display:<?php if(!empty($binfo[0]['gaurantee_term'])) { ?>none;<?php } else{ ?>block;<?php } ?>">
												<br><br>
												You still have chance to increase <br>% 5, if you provide guarantee on <br>your products
											</div>
											<div id="terms-btns" style="display:<?php if(!empty($binfo[0]['gaurantee_term'])) { ?>block;<?php } else{ ?>none;<?php } ?>">
												<a href="javascript:confirmTerms();" class="btn btn-sm btn-danger-custom" style="margin-bottom:10px;width: 180px;display:<?php if(!empty($binfo[0]['gaurantee_term'])) { ?>none;<?php } else{ ?>block;<?php } ?>" id="confess_btn">Confess & Confirm</a><br>
												<a href="javascript:editTerms();" class="btn btn-sm btn-danger-custom" style="margin-bottom:10px;padding:5px 61px;width: 180px;">Edit Terms</a><br>
												<a href="javascript:cancelTerms();" class="btn btn-sm btn-danger-custom" style="margin-bottom:10px;width: 180px;">Cancel Gaurantee</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-1"></div>
						</div>
						<br><br>
						<div class="row">
							<div class="col-sm-1"></div>
							<div class="col-sm-10" style="padding:0px;">
								<div class="row ranking-rows">
									<div class="col-sm-3 text-center">
										<br><br>
										<img src="<?php echo asset_url();?>images/pro-certificate.png" id="Image68" alt="" style="width:48px;">
										<div style="padding-top:5px;">
											<span style="color:#2D2D2D;font-family:Arial;font-size:15px;"><strong>Product Certificates</strong></span><br>
											<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Provides you with % 5</span>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="vlogo-desc" id="certs_desc">
											<?php if(!empty($binfo[0]['product_certs'])) { ?>
											<strong>I can issue the following Product Certificates</strong>
											<?php } else { ?>
											<input type="radio" name="procduct_certs_check" id="certs_radio" value="1" checked/> I can issue the following Product Certificates
											<?php } ?>
										</div>
										<div class="row" id="certs-inputs" style="display:<?php if(!empty($binfo[0]['product_certs'])) { ?>none;<?php } else{ ?>block;<?php } ?>">
											<div class="col-sm-12" style="padding-top:4px;padding-right:0px;padding-bottom: 20px;">
												<textarea name="TextArea12" id="TextArea12" style="width:310px;height:52px;z-index:2483;" rows="3" cols="48" placeholder="Enter the name of certificates"><?php echo $binfo[0]['product_certs'];?></textarea>
											</div>
										</div>
										<div class="row" id="certs-input-msg" style="display:<?php if(!empty($binfo[0]['product_certs'])) { ?>block;<?php } else{ ?>none;<?php } ?>">
											<div class="col-sm-12 term-selected-text" style="padding-left:15px;padding-bottom: 10px;font-size:12px;" id="certs_text_msg">
												<?php echo $binfo[0]['product_certs'];?>
											</div>
										</div>
										<br>
										<div class="vlogo-note">
											Note: you are free to click on Edit button to change, add or remove certificates <br><u><b>BUT</b></u> in case you first placed an order your obligation of issuing the pre-<br>mentioned certificates will be continues till the buyer received the required<br> documents.
										</div>
									</div>
									<div class="col-sm-3" style="color:#2D2D2D;font-family:Arial;font-size:11px;">
										<br><br><br>
										<div id="certs_area">
											<br>
											<div id="certs-text" class="text-left" style="display:<?php if(!empty($binfo[0]['product_certs'])) { ?>none;<?php } else{ ?>block;<?php } ?>">
												You still have chance to increase <br>% 5, if you could provide the <br>buyer with products certificates<br> such as ( CE, SASO, CIQ ...etc).<br><br>
												<a href="javascript:confirmCerts();" class="btn btn-sm btn-danger-custom" style="margin-bottom:10px;" id="cert_confess_btn">Confess & Confirm</a><br>
											</div>
											<div id="certs-btns" style="display:<?php if(!empty($binfo[0]['product_certs'])) { ?>block;<?php } else{ ?>none;<?php } ?>">
												<br>
												<a href="javascript:editCerts();" class="btn btn-sm btn-danger-custom" style="margin-bottom:10px;padding:5px 45px;">Edit Certificates</a><br>
												<a href="javascript:cancelCerti();" class="btn btn-sm btn-danger-custom" style="margin-bottom:10px;width: 176px;">Cancel Certificates</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-1"></div>
						</div>
						<br><br>
						<div class="row">
							<div class="col-sm-1"></div>
							<div class="col-sm-10" style="padding:0px;">
								<div class="row ranking-rows">
									<div class="col-sm-3 text-center">
										<br>
										<img src="<?php echo asset_url();?>images/img1993.jpg" id="Image68" alt="" style="width:51px;">
										<div style="padding-top:5px;">
											<span style="color:#2D2D2D;font-family:Arial;font-size:15px;"><strong>Export License</strong></span><br>
											<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Provides you with % 5</span>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="vlogo-desc" id="lic_desc" style="display:<?php if(!empty($binfo[0]['export_lic_number'])) { ?>none;<?php } else{ ?>block;<?php } ?>">
											<input type="radio" name="procduct_lic_check" id="lic_radio" value="1" checked/> <strong>I have "Export License" and i am able to ship any <br>&nbsp;&nbsp;&nbsp;&nbsp;order to buyers ports</strong>
										</div>
										<div class="row" id="lic-inputs" style="display:<?php if(!empty($binfo[0]['export_lic_number'])) { ?>none;<?php } else{ ?>block;<?php } ?>">
											<div class="col-sm-12" style="padding-top:4px;padding-right:0px;padding-bottom: 20px;">
												<strong>No.</strong> <input type="text" id="Editbox72" style="width:160px;height:23px;line-height:23px;z-index:2499;" name="Editbox71" value="<?php echo $binfo[0]['export_lic_number'];?>" maxlength="15" placeholder="Enter The License No.">
											</div>


											<div class="col-sm-6" style="padding-top:4px;padding-right:0px;padding-bottom: 20px;">
												<strong>Image</strong> <input type="file" id="Editbox73" style="width:160px;height:23px;line-height:23px;z-index:2499;" name="Editbox72">
											</div>

											<div class="col-sm-6" style="padding-top:4px;padding-right:0px;padding-bottom: 20px;">
												<?php if ($binfo[0]['export_license']) { ?>
													<img src="<?php echo $binfo[0]['export_license'];?>" style="width:93px;">
												<?php }else{ ?>
													<img src="<?php echo asset_url();?>images/ISO-9001-CERTIFICATEok.jpg" id="Image84" alt="" style="width:93px;">
												<?php } ?>
											</div>


										</div>
										<div class="row" id="lic-input-msg" style="display:<?php if(!empty($binfo[0]['export_lic_number'])) { ?>block;<?php } else{ ?>none;<?php } ?>">
											<div class="col-sm-12 term-selected-text" style="padding-left:15px;padding-bottom: 10px;font-size:12px;">
												<img src="<?php echo asset_url();?>images/ISO-9001-CERTIFICATEok.jpg" id="Image84" alt="" style="width:93px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#2D2D2D;"><strong>Export License No</strong></span>&nbsp; <span id="lic_text_msg"><?php echo $binfo[0]['export_lic_number'];?></span>
											</div>
										</div>
										<br><br>
									</div>
									<div class="col-sm-3" style="color:#2D2D2D;font-family:Arial;font-size:11px;">
										<br><br>
										<div id="lic_area">
											<br>
											<div id="lic-text" class="text-left" style="display:<?php if(!empty($binfo[0]['export_lic_number'])) { ?>none;<?php } else{ ?>block;<?php } ?>">
												You still have chance to increase <br>% 5, if you upload your "Export <br>License"..<br><br>
												<a href="javascript:confirmLics();" class="btn btn-sm btn-danger-custom" style="margin-bottom:10px;" id="lic_confess_btn">Upload License</a><br>
											</div>
											<div id="lic-btns" style="display:<?php if(!empty($binfo[0]['export_lic_number'])) { ?>block;<?php } else{ ?>none;<?php } ?>">
												<br>
												<a href="javascript:editLics();" class="btn btn-sm btn-danger-custom" style="margin-bottom:10px;padding:5px 45px;">Edit License</a><br>
												<a href="javascript:cancelLice();" class="btn btn-sm btn-danger-custom" style="margin-bottom:10px;width: 157px;">Cancel License</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-1"></div>
						</div>
						<br><br>
						<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			  		</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="termsModal" class="modal fade" role="dialog">
  	<div class="modal-dialog" style="width:546px;">
    	<div class="modal-content">
      		<div class="modal-body">
      			<div class="row" style="padding-top:10px;">
      				<div class="col-sm-3 text-right">
      					<img src="<?php echo asset_url();?>images/guarantee-lock.png" id="Image83" alt="" style="width:44px;">
      				</div>
      				<div class="col-sm-9 text-left">
	      				<span style="color:#3A973F;font-family:Arial;font-size:19px;"><strong>Guarantee Terms</strong></span><br>
	      				<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Select one of the following terms and press continue</span>
      				</div>
      			</div>
      			<br><br>
      			<?php foreach ($terms as $term) { ?>
      			<div class="row">
      				<div class="col-sm-2 text-right">
      					<input type="radio" name="gterms" class="gterms-radio" value="<?php echo $term['id'];?>" /> 
      				</div>
      				<div class="col-sm-10 term-items" style="padding-left:0px;" id="term_text_<?php echo $term['id'];?>">
      					<?php echo $term['name'];?>
      				</div>
      			</div>
      			<br><br>
      			<?php } ?>
      			<div class="row">
      				<div class="col-sm-2 text-right">
      					<input type="radio" name="gterms" id="other-terms" class="gterms-radio" value="6" /> 
      				</div>
      				<div class="col-sm-10 term-items" style="padding-left:0px;">
      					Type your own terms:<br><br>
      					<div class="col-sm-9" style="padding-left:0px;">
      						<textarea name="TextArea1" id="TextArea11" style="width:336px;height:83px;z-index:12444;" rows="5" cols="45"></textarea>
      					</div>
      					<div class="col-sm-3 text-center" style="padding-top:15px;">
	      					<span style="color:#FF6347;font-family:Arial;font-size:11px;" id="termsoption-area">400</span><br>
	      					<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Remains</span>
      					</div>
      				</div>
      			</div>
      			<br>
      			<div class="row text-center">
      				<a href="javascript:selectTerm();" class="btn btn-sm btn-danger-custom" >Continue</a>
      				<a href="" class="btn btn-sm btn-danger-custom" data-dismiss="modal">Cancel</a>
      			</div>
      			<br><br>
      		</div>
    	</div>
  	</div>
</div>
<div id="accessDeniedModal1" class="modal fade" role="dialog">
  	<div class="modal-dialog" style="width:525px;">
    	<div class="modal-content" style="border-radius:0px;margin-top:25%;">
      		<div class="modal-body">
      			<div class="row" style="padding-top:10px;">
      				<div class="col-sm-2"></div>
      				<div class="col-sm-8">
	      				<div style="text-align: center;">
							<span style="color: #F05539; font-family: 'Arial Black'; font-size: 16px;">ACCESS DENIED</span>
						</div>
						<br><br>
						<div style="text-align: center;">
							<img src="<?php echo asset_url();?>images/padlock-154684_640.png" width="100px;"/>
						</div>
						<div style="text-align: center;">
							We are so sorry. We have created this unique <br>feature
							for only <strong>BLACK HORSE</strong> member
						</div>
					</div>
					<div class="col-sm-2"></div>
      			</div>
      			<br>
      			<div class="row text-center">
      				<a href="javascript:upgradeMyBusinessPlan();" class="btn btn-sm btn-danger-custom" style="width:150px;">Upgrade</a>
      				<a href="javascript:cancelAccessDeniedPopup();" class="btn btn-sm btn-danger-custom" style="width:150px;">Cancel</a>
      			</div>
      			<br><br>
      		</div>
    	</div>
  	</div>
</div>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script>
<?php if($tsplanid == 1) { ?>
$('#accessDeniedModal1').modal({show:true,backdrop: 'static',keyboard: false});
function upgradeMyBusinessPlan() {
	ShowObjectWithEffect('Layer130', 0, 'dropup', 500, 'easeInBounce');
	getMyPackages();
}
function cancelAccessDeniedPopup() {
	ShowObjectWithEffect('Layer130', 0, 'dropup', 500, 'easeInBounce');
	ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');
	$('#accessDeniedModal1').modal('toggle');
}
<?php }?>
function ajaxindicatorstart(text)
{
	if(jQuery('body').find('#resultLoading').attr('id') != 'resultLoading'){
	jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="<?php echo asset_url();?>images/loading.gif" alt=""><div>'+text+'</div></div><div class="bg"></div></div>');
	}

	jQuery('#resultLoading').css({
		'width':'100%',
		'height':'100%',
		'position':'fixed',
		'z-index':'10000000',
		'top':'0',
		'left':'0',
		'right':'0',
		'bottom':'0',
		'margin':'auto'
	});

	jQuery('#resultLoading .bg').css({
		'background':'#000000',
		'opacity':'0.7',
		'width':'100%',
		'height':'100%',
		'position':'absolute',
		'top':'0'
	});

	jQuery('#resultLoading>div:first').css({
		'width': '250px',
		'height':'75px',
		'text-align': 'center',
		'position': 'fixed',
		'top':'0',
		'left':'0',
		'right':'0',
		'bottom':'0',
		'margin':'auto',
		'font-size':'16px',
		'z-index':'10',
		'color':'#ffffff'

	});

    jQuery('#resultLoading .bg').height('100%');
       jQuery('#resultLoading').fadeIn(300);
    jQuery('body').css('cursor', 'wait');
}
function ajaxindicatorstop()
{
    jQuery('#resultLoading .bg').height('100%');
       jQuery('#resultLoading').fadeOut(300);
    jQuery('body').css('cursor', 'default');
}

$('#TextArea11').on('keyup',function(){
	$("#other-terms").prop('checked', true);
    var vcount = parseInt($(this).val().length);
    var rem = 400 - vcount;
    $("#termsoption-area").html(rem);
});

function openGauranteeTerms() {
	if($("#Editbox71").val() > 0) {
		$('#termsModal').modal({
		    backdrop: 'static',
		    keyboard: false
		});
	} else {
		alert("Please enter gaurantee period in months.")
	}
}

function selectTerm() {
	var term_id = $("input[name='gterms']:checked"). val();
	var term_text = "";
	if(term_id == 6) {
		term_text = $("#TextArea11").val();
	} else {
		term_text = $("#term_text_"+term_id).html();
	}
	if(term_id > 0 && term_text != "") {
		var months = $("#Editbox71").val();
		$("#selected_period").html('<strong>'+months+' Months</strong>');
		$("#selected_term").html(term_text);
		$("#terms-inputs").hide();
		$("#terms-text").hide();
		$("#terms-input-msg").show();
		$("#terms-btns").show();
		$("#termsModal").modal('hide');
	} else {
		alert("Please select or enter Guarantee Terms.");
	}
}

function editTerms() {
	$("#terms_desc").html("If you confess to provide buyers with a guarantee on your products <br>according to the terms you determine ( hereunder) by yourself, please <br>select it and press \" Confess & Confirm\" button.");
	$("input[name='gterms']:checked").prop('checked', false);
	$("#terms-inputs").show();
	$("#terms-text").show();
	$("#terms-input-msg").hide();
	$("#terms-btns").hide();
	$("#confess_btn").show();
}

function cancelTerms() {
	$("#terms_desc").html("If you confess to provide buyers with a guarantee on your products <br>according to the terms you determine ( hereunder) by yourself, please <br>select it and press \" Confess & Confirm\" button.");
	$("input[name='gterms']:checked").prop('checked', false);
	$("#terms-inputs").show();
	$("#terms-text").show();
	$("#terms-input-msg").hide();
	$("#terms-btns").hide();
	$.get(base_url+"mystation/gaurantee/cancel",{},function(data){
		$("#confess_btn").show();

		getBusinessRanking();
	},'json');
}

function confirmTerms() {
	var term_id = $("input[name='gterms']:checked"). val();
	var term_text = "";
	if(term_id == 6) {
		term_text = $("#TextArea11").val();
	} else {
		term_text = $("#term_text_"+term_id).html();
	}
	var months = $("#Editbox71").val();
	$.post(base_url+"mystation/gaurantee/confirm",{ gaurantee_term: term_text, gaurantee_period: months},function(data){
		$("#terms_desc").html("<strong>You have been confess to provide a guarantee on your <br>products based on the following terms</strong>");
		$("#confess_btn").hide();
		getBusinessRanking();
	},'json');
}

function confirmCerts() {
	var certs = $("#TextArea12").val();
	// if(certs == "") {
		$.post(base_url+"mystation/product/certs/confirm",{ certs: certs },function(data){
			$("#certs_desc").html("<strong>I can issue the following Product Certificates</strong>");
			$("#certs-inputs").hide();
			$("#certs-text").hide();
			$("#certs-input-msg").show();
			$("#certs-btns").show();
			$("#certs_text_msg").html(certs);
			getBusinessRanking();
		},'json');
	// } else {
	// 	alert("Please enter certificates.");
	// }
}
function editCerts() {
	$("#certs_desc").html('<input type="radio" name="procduct_certs_check" value="1" checked/> I can issue the following Product Certificates');
	$("#certs_radio").prop('checked', false);
	$("#certs-inputs").show();
	$("#certs-text").show();
	$("#certs-input-msg").hide();
	$("#certs-btns").hide();
}

			function cancelCerti() {
				$.post(base_url+"mystation/certificate/cancel",{ },function(data){
					$("#certs_desc").html('<input type="radio" name="procduct_certs_check" value="1" checked/> I can issue the following Product Certificates');
					$("#certs_radio").prop('checked', false);
					$("#certs-inputs").show();
					$("#certs-text").show();
					$("#certs-input-msg").hide();
					$("#certs-btns").hide();
					getBusinessRanking();
				},'json');
			}

			function confirmLics() {
				var lics = $("#Editbox72").val();
				var lics_pic = $("#Editbox73").val();
				$.post(base_url+"mystation/license/confirm",{ lics: lics, lics_pic: lics_pic },function(data){
					$("#lic_desc").hide();
					$("#lic-inputs").hide();
					$("#lic-text").hide();
					$("#lic-input-msg").show();
					$("#lic-btns").show();
					$("#lic_text_msg").html(lics);
					getBusinessRanking();
				},'json');
			}

function editLics() {
	$("#lic_desc").show();
	$("#lic-inputs").show();
	$("#lic-text").show();
	$("#lic-input-msg").hide();
	$("#lic-btns").hide();
}



function cancelLice() {
	$.post(base_url+"mystation/license/cancel",{ },function(data){
		$("#lic_desc").show();
		$("#lic-inputs").show();
		$("#lic-text").show();
		$("#lic-input-msg").hide();
		$("#lic-btns").hide();
		getBusinessRanking();
	},'json');

}

function showFileCount(id) {
	var filecount = $(id)[0].files.length;
	$("#attachments").html(filecount+" files selected");
}
</script>
