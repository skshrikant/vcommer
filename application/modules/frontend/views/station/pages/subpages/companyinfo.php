<form name="frmeditcompanyinfo" method="post"   action=""  enctype="multipart/form-data" id="frmeditcompanyinfo"> 
	<div class="panel-heading custom-panel-heading">
			<a href="javascript:openCompanyInfoEditForm(<?php echo $tscategory_id; ?>);" class="btn btn-default btn-custom" id="company_edit_btn">EDIT</a>
			<a href="javascript:openCompanyInfo();" class="btn btn-default btn-custom" id="company_info_btn">RESET</a>
			<input type="submit" class="btn btn-default btn-custom" name="savecompanybtn" id="savecompanybtn"  style="display:none" value="SAVE"/>
			<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer164', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
	 </div>
	<div class="panel-body panel-body-custom" id="account_company_info">
		<div class="personal_info_div" id="company_info_div">
  			<div class="row">
  				<div class="col-sm-2 col-sm-offset-1">
  					<div style="padding-top:50px;">&nbsp;</div>
  					<div class="control-label-text text-center">Company Logo</div>
  					<br>
  					<div class="profile-image text-center">
  						<img <?php if($companyinfo[0]['business_logo'] != "") { ?>src="<?php echo asset_url().$companyinfo[0]['business_logo']; ?>" <?php } else { ?> 
  						src="<?php echo asset_url();?>images/ts/img1179.png" <?php } ?> alt="<?php echo $this->session->userdata('name') ?>" class="img-circle image-circle-custom myaccountimg" style="cursor:pointer" />
  					</div>
  				</div>
  				<div class="col-sm-8">
  					<div style="padding-top:120px;">&nbsp;</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text" style="color:#F05539;font-size: 13px;">Basic Information</div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Company Name In English</div>
  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['company_name'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Company Name In License Language</div>
  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['license_company_name'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Address In English</div>
  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['company_street'].",".$companyinfo[0]['company_city'].",".$companyinfo[0]['company_province'].",".$companyinfo[0]['company_country'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Address In License Language</div>
  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['license_company_street'].",".$companyinfo[0]['license_company_city'].",".$companyinfo[0]['license_company_province'].",".$companyinfo[0]['license_company_country'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Tel</div>
  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['telephone_code']." ".$companyinfo[0]['telephone_city_code']." ".$companyinfo[0]['telephone_number']." ,".$companyinfo[0]['telephone_code']." ".$companyinfo[0]['telephone_city_code']." ".$companyinfo[0]['telephone_number1'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Fax</div>
  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['fax'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">P.O.Box</div>
  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['p_o_box']; ?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Website</div>
  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['website'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Email</div>
  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['company_email'];?></div>
  					</div>
  					<br>
  					<?php if($tscategory_id == 1  || $tscategory_id == 2) {  ?>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text" style="color:#F05539;font-size: 13px;">World wide offices</div>
  					</div>
  					<?php foreach($branches as $branch) { ?>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Address</div>
  						<div class="col-sm-9 label-text-value"><?php echo $branch['city'];?>, <?php echo $branch['province'];?>, <?php echo $branch['country'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Street</div>
  						<div class="col-sm-9 label-text-value"><?php echo $branch['street'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Tel</div>
  						<div class="col-sm-9 label-text-value"><?php echo $branch['country_code'];?> <?php echo $branch['city_code'];?> <?php echo $branch['telephone1'];?> and <?php echo $branch['telephone2'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Email</div>
  						<div class="col-sm-9 label-text-value"><?php echo $branch['email'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Fax</div>
  						<div class="col-sm-9 label-text-value"><?php echo $branch['fax'];?></div>
  					</div>
  					<br/>
  					<?php }
  					?>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text" style="color:#F05539;font-size: 13px;">Company Information</div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Year Of Registration</div>
  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['year_of_registration'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Owner Name</div>
  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['company_owner_name'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Company Size</div>
  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['company_size']."  SQM";?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Total No. Of Employee</div>
  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['total_no_of_emp'];?></div>
  					</div>
  					<?php }  ?>
	  					<div class="row info-row">
	  						<div class="col-sm-3 label-text">Company Introduction</div>
	  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['company_introduction'];?></div>
	  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Hot Presentation</div>
  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['hot_presentation'];?></div>
  					</div>
  					<div class="row info-row">
  						<div class="col-sm-3 label-text">Contact Person Name</div>
  						<div class="col-sm-9 label-text-value"><?php echo $contact_person;//$companyinfo[0]['contact_person'];?></div>
  					</div>
  					<?php if($tscategory_id == 1) {  ?>
	  					<div class="row info-row">
	  						<div class="col-sm-3 label-text">Bank Account No.</div>
	  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['account_no'];?></div>
	  					</div>
	  					<div class="row info-row">
	  						<div class="col-sm-3 label-text">Account Name</div>
	  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['account_name'];?></div>
	  					</div>
	  					<div class="row info-row">
	  						<div class="col-sm-3 label-text">Bank Name</div>
	  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['bank_name'];?></div>
	  					</div>
	  					<div class="row info-row">
	  						<div class="col-sm-3 label-text">Bank Code</div>
	  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['bank_code'];?></div>
	  					</div>
	  					<div class="row info-row">
	  						<div class="col-sm-3 label-text">Bank Address</div>
	  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['bank_address'];?></div>
	  					</div>
	  					<div class="row info-row">
	  						<div class="col-sm-3 label-text">Swift Code</div>
	  						<div class="col-sm-9 label-text-value"><?php echo $companyinfo[0]['swift_code'];?></div>
	  					</div>
  					<?php } ?>
  					<?php if($tscategory_id == 2) {  ?>
  						<div class="row info-row">
	  						<div class="col-sm-3 label-text">Main Routes</div>
	  						<div class="col-sm-9 label-text-value">
	  						<?php foreach ($myrouteinfo as $key=>$routeinfo) { ?>
	  							<div>
	  							From <?php if($routeinfo['from_country'] != "Worldwide") { echo $routeinfo['from_country'];}?><br>
	  							<?php if($routeinfo['from_country'] != "Worldwide") { echo $routeinfo['from_location'];} else { echo "Worldwide";}?><br>
	  							To <?php if($routeinfo['to_country'] != "Worldwide") { echo $routeinfo['to_country'];}?><br>
	  							<?php if($routeinfo['to_country'] != "Worldwide") { echo $routeinfo['to_location'];} else { echo "Worldwide";}?><br>
	  							<br>
	  							</div>
	  						<?php } ?>
	  						</div>
	  					</div>
	  				<?php } ?>	
	  				<?php if($tscategory_id == 3) {  ?>
  						<div class="row info-row">
	  						<div class="col-sm-3 label-text">Payment Terms </div>
	  						<div class="col-sm-9 label-text-value"><?php if(count($tradepayment_terms) > 0) { 
	  							$terms = array();
	  							$i=0;
	  							foreach ($tradepayment_terms as $row)
	  							{
	  								$terms[$i] = $row['payment_terms'];
	  								$i++;
	  							} 
	  							echo implode(',',$terms); } ?></div>
	  					</div>
	  					<div class="row info-row">
	  						<div class="col-sm-3 label-text">Annual Trade Volume</div>
	  						<div class="col-sm-9 label-text-value"><?php  echo $companyinfo[0]['annual_trad_volume']."  / Year"?></div>
	  					</div>
	  					<div class="row info-row">
	  						<div class="col-sm-3 label-text">Display company information in random carousel </div>
	  						<div class="col-sm-9 label-text-value"><?php  if($companyinfo[0]['company_rendom_carousel'] == 0) { echo "Off" ;} else { echo "On"; } ?></div>
	  					</div>
	  				<?php } ?>	
  					<br><br><br><br>
  				</div>
  			</div>
		</div>
  		<div class="edit-div" id="company_edit_div" style="display:none;">
		  		<div class="row">
		  			<div class="col-sm-12" style="padding-top:50px;">
			  			<div class="col-sm-offset-3 col-sm-9">
			  				<div class="row info-row">
				  				<div class="form-group">
					  				<div class="col-sm-3 label-text text-right">
					  					<input type='button'  name="buisnessImage"   id="buisnessImg" style="background: url('<?php echo asset_url(); ?>images/ts/img1179.png') center center no-repeat;display: none;border:none" />
                                    	<img id="business_img"  onclick= "imgtrigger();" class="img-circle myaccountimg" <?php if($companyinfo[0]['business_logo']=="") {  ?>style="display: none" <?php }?> 
                                    	width="100px" height="100px" <?php if($companyinfo[0]['business_logo']=="") {  ?>style="display: none" <?php }?> src="<?php echo asset_url().$companyinfo[0]['business_logo']; ?>"   style="cursor:pointer"/> 
					  					<input type="hidden"  name="data[profilepath]" id="bprofilepath"  value="<?php if(isset($companyinfo[0]['business_logo'])) { echo $companyinfo[0]['business_logo'];}?>" />
					  				</div>
					  				<div class="messageContainer col-sm-4"></div>
									<div class="col-sm-4 label-text">
										<br><br>
										<p style="margin-bottom:5px;"><span style="color:#3C3C3C;font-family:Georgia;font-size:11px;"><span style="color:#F70004">*</span> Add your company Logo / Trade Mark</span></p>
										jpg or png, Dimensions: 200 * 200 pixel, Resolution: 75 dpi, with Max. size 100 KB <br><span style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor: pointer;" onclick="removeBuisnessURL();">Remove</span>
									</div>
									
								</div>
							</div>
			  			</div>
			  		</div>
			  		<div class="col-sm-offset-1 col-sm-11">
		  				<div class="row info-row">
	  						<div class="col-sm-3 label-text" style="color:#F05539;font-size: 13px;">Basic Information</div>
			  			</div>
					  	<div class="row info-row">
					  		<div class="col-sm-2">
								<div class="form-group">
									<div class="control-label label-text-form">Company Name </div>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group">
									<div class="label-text-input">
										<input type="hidden" name="data[busi_id]" id="busi_id" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['busi_id'];?>"/>
                                   		<input type="text" name="data[company_name]" id="company_name" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['company_name'];?>"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group">
									<div class="label-text-input">
                                  		<input type="text" name="data[license_company_name]" id="buisness_license_name" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['license_company_name'];?>"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
					  	</div>
			  			<div class="row info-row">
			  				<div class="col-sm-2">
								<div class="form-group">
									<div class="control-label label-text-form">Address In English </div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<div class="label-text-input">
                                   		<input type="text" name="data[company_country]" id="buisness_country" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['company_country'];?>"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<div class="label-text-input">
                                   		<input type="text" name="data[company_province]" id="buisness_province" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['company_province'];?>"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<div class="label-text-input">
                                   		<input type="text" name="data[company_city]" id="buisness_city" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['company_city'];?>"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<div class="label-text-input">
                                    	<input type="text" name="data[company_street]" id="buisness_street" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['company_street'];?>"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
					  	</div>
			  			<div class="row info-row">
			  				<div class="col-sm-2">
								<div class="form-group">
									<div class="control-label label-text-form">Address In License Language </div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<div class="label-text-input">
                                    	<input type="text" name="data[license_company_country]" id="license_company_country" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['license_company_country'];?>"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<div class="label-text-input">
                                    	<input type="text" name="data[license_company_province]" id="license_company_province" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['license_company_province'];?>"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<div class="label-text-input">
                                  		<input type="text" name="data[license_company_city]" id="buisness_city_other_lng" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['license_company_city'];?>"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<div class="label-text-input">
                                   		<input type="text" name="data[license_company_street]" id="buisness_street_other_lng" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['license_company_street'];?>"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
					  	</div>
			  			<div class="row info-row">
			  				<div class="col-sm-2">
								<div class="form-group">
									<div class="control-label label-text-form">Tel </div>
								</div>
							</div>
							<div class="col-sm-1">
								<div class="form-group">
									<div class="label-text-input">
                                   		<input type="text" name="data[telephone_code]" id="telephone_code" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['telephone_code'];?>"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-1">
								<div class="form-group">
									<div class="label-text-input">
                                    	<input type="text" name="data[telephone_city_code]" id="telephone_city_code" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['telephone_city_code'];?>"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<div class="label-text-input">
                                  		<input type="text" name="data[telephone_number]" id="telephone_1" class="form-control form-custom-input" maxlength="12"  value="<?php echo $companyinfo[0]['telephone_number'];?>"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-1">
								<div class="form-group">
									<div class="control-label label-text-form">And </div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<div class="label-text-input">
                                   		<input type="text" name="data[telephone_number1]" id="telephone_2" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['telephone_number1'];?>"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-1">
								<div class="form-group">
									<div class="control-label label-text-form">Fax </div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<div class="label-text-input">
                                   		<input type="text" name="data[fax]" id="fax" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['fax'];?>"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
					  	</div>
			  			<div class="row info-row">
			  				<div class="col-sm-2">
								<div class="form-group">
									<div class="control-label label-text-form">P.O.Box </div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<div class="label-text-input">
                                    	<input type="text" name="data[p_o_box]" id="buisness_country_other_lng" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['p_o_box']; ?>"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-1">
								<div class="form-group">
									<div class="control-label label-text-form">Website </div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<div class="label-text-input">
                                   		<input type="text" name="data[website]" id="website" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['website'];?>"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-1">
								<div class="form-group">
									<div class="control-label label-text-form">Email </div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<div class="label-text-input">
                                   		<input type="text" name="data[company_email]" id="buisness_email" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['company_email'];?>"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
					  	</div>
			  			<br>
			  			<?php if($tscategory_id == 1 && $tscategory_id == 2) { ?>
			  			<div class="row">
			  				<div class="col-md-12">
			  					<span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Do You Have World-Wide Offices to add..?</span>
			  					<a href="#" onclick="addMoreOffice();"><span style="color:#1E90FF;font-family:Georgia;font-size:11px;"><strong>Add</strong></span></a>
			  				</div>
			  			</div>
			  			<input type="hidden" name="office_count" id="office_count" value="<?php if(!empty($branches)) {  echo count($branches); } else { echo 0; }?>"/>
                        <input type="hidden" name="prerowcount"  id="prerowcount" value="<?php if(!empty($branches)) {  echo count($branches); } ?>">
			  			<?php } ?>
			  			<?php if(/*$tscategory_id == 1 &&*/ count($branches) > 0) { ?>
			  			 <div class="row" style="margin-top:20px;">
                            <div class="col-sm-12">
                                <div class="form-group ">
                                    <label class="col-md-12" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">World-Wide Offices to edit</label>
                                    </div>
                            </div>
                        </div><br>
                           <?php if(isset($branches)) {
								$i=1;
								foreach ($branches as $row) { ?>
								<input type="hidden" name="branch_id[]" value="<?php echo $row['id'];?>" />
								<div class="row info-row" id="office-no-<?php echo $i;?>">
									<div class="col-sm-12">
										<hr>
										<div class="row info-row">
							  				<div class="col-sm-2">
												<div class="form-group">
													<div class="control-label label-text-form">Address</div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<div class="label-text-input">
				                                    	<input type="text" name="bcountry[]" id="blicense_company_country" class="form-control form-custom-input" value="<?php echo $row['country'];?>" placeholder="Country"/>
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<div class="label-text-input">
				                                    	<input type="text" name="bprovince[]" id="blicense_company_province" class="form-control form-custom-input" value="<?php echo $row['province'];?>" placeholder="Province"/>
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<div class="label-text-input">
				                                  		<input type="text" name="bcity[]" id="bbuisness_city_other_lng" class="form-control form-custom-input" value="<?php echo $row['city'];?>" placeholder="City"/>
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
									  	</div>
									  	<div class="row info-row">
									  		<div class="col-sm-2">
												<div class="form-group">
													<div class="control-label label-text-form">Street</div>
												</div>
											</div>
									  		<div class="col-sm-6">
												<div class="form-group">
													<div class="label-text-input">
				                                   		<input type="text" name="bstreet[]" id="bbuisness_street_other_lng" class="form-control form-custom-input" value="<?php echo $row['street'];?>" placeholder="Street"/>
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
									  	</div>
							  			<div class="row info-row">
							  				<div class="col-sm-2">
												<div class="form-group">
													<div class="control-label label-text-form">Tel </div>
												</div>
											</div>
											<div class="col-sm-2">
												<div class="form-group">
													<div class="label-text-input">
				                                   		<input type="text" name="bcountry_code[]" id="btelephone_code" class="form-control form-custom-input" value="<?php echo $row['country_code'];?>" placeholder="Country Code"/>
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
											<div class="col-sm-2">
												<div class="form-group">
													<div class="label-text-input">
				                                    	<input type="text" name="bcity_code[]" id="btelephone_city_code" class="form-control form-custom-input" value="<?php echo $row['city_code'];?>" placeholder="City Code"/>
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
											<div class="col-sm-2">
												<div class="form-group">
													<div class="label-text-input">
				                                  		<input type="text" name="btelephone1[]" id="btelephone_1" maxlength="12" class="form-control form-custom-input" value="<?php echo $row['telephone1'];?>" placeholder="Telephone 1"/>
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
											<div class="col-sm-1">
												<div class="form-group">
													<div class="control-label label-text-form" style="padding-top: 9px;">And </div>
												</div>
											</div>
											<div class="col-sm-2">
												<div class="form-group">
													<div class="label-text-input">
				                                   		<input type="text" name="btelephone2[]" id="btelephone_2"  maxlength="12" class="form-control form-custom-input" value="<?php echo $row['telephone2'];?>" placeholder="Telephone 2"/>
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
									  	</div>
									  	<div class="row info-row">
									  		<div class="col-sm-2">
												<div class="form-group">
													<div class="control-label label-text-form">Email </div>
												</div>
											</div>
									  		<div class="col-sm-4">
												<div class="form-group">
													<div class="label-text-input">
				                                   		<input type="text" name="bemail[]" id="bemail" class="form-control form-custom-input" value="<?php echo $row['email'];?>" placeholder="Email"/>
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
									  	</div>
									  	<div class="row info-row">
									  		<div class="col-sm-2">
												<div class="form-group">
													<div class="control-label label-text-form">Fax </div>
												</div>
											</div>
									  		<div class="col-sm-4">
												<div class="form-group">
													<div class="label-text-input">
				                                   		<input type="text" name="bfax[]" id="bfax" class="form-control form-custom-input" value="<?php echo $row['fax'];?>" placeholder="Fax"/>
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
									  	</div>
									  	<?php //if($i != 1) { ?>
									  	<div class="row">
											<div class="col-md-12">
													<a class="pull-right" href="javascript:removeOffice(<?php echo $i; ?>,1);"><img src="<?php echo asset_url();?>images/Error.png"/></a>
											</div>
										</div>
									  	<?php //} ?>
									</div>
								</div>
						<?php $i++; } ?>
					<?php	} ?>	
						
						<?php } if($tscategory_id == 1 || $tscategory_id == 2 ) { ?>
						<div id="worlofficediv">
					  		
					  	</div>
						<div class="row info-row" id="addmorediv" >
					  		<div class="col-sm-2">
								<div class="form-group">
									<a href="javascript:addMoreOffice();" class="btn pull-left"><img src="<?php echo asset_url(); ?>images/add.png">
                                        <span style="text-decoration:none;color:#F05539;font-family:Georgia;font-size:13px;">Add More </span></a>
								</div>
							</div>
					  	</div>
					  	<?php } ?>
					  	<hr>
                               <br>
			  			<div class="row info-row">
	  						<div class="col-sm-3 label-text" style="color:#F05539;font-size: 13px;">Company Information</div>
	  					</div>
	  					<div <?php if($tscategory_id == 3) {?> style="display:none" <?php } ?>>
				  			<div class="row info-row">
				  				<div class="col-sm-2">
									<div class="form-group">
										<div class="control-label label-text-form">Year Of Register </div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<div class="label-text-input">
	                                   		<input type="text" name="data[year_of_registration]" id="year_of_registration" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['year_of_registration'];?>"/>
										</div>
										<div class="messageContainer"></div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<div class="control-label label-text-form">Owner Name </div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<div class="label-text-input">
	                                    	<input type="text" name="data[company_owner_name]" id="owner_name" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['company_owner_name'];?>"/>
										</div>
										<div class="messageContainer"></div>
									</div>
								</div>
						  	</div>
						  	<div class="row info-row">
				  				<div class="col-sm-2">
									<div class="form-group">
										<div class="control-label label-text-form">Company Size (SQM) </div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<div class="label-text-input">
	                                     	<select id="company_size" name="data[company_size]" class="form-control" size="1" name="company_size" style="height:35px;">
	                                          	<option value="0">---  Please Select ---</option>
	                                          	<option value="100" <?php if($companyinfo[0]['company_size'] == 100) { ?> selected <?php } ?>>Less Than 100 Square Meter</option>
	                                           	<option value="500" <?php if($companyinfo[0]['company_size'] == 500) { ?> selected <?php } ?>>100 to 500 Square Meter</option>
	                                          	<option value="1000" <?php if($companyinfo[0]['company_size'] == 1000) { ?> selected <?php } ?>>501 to 1000 Square Meter</option>
	                                           	<option value="2000" <?php if($companyinfo[0]['company_size'] == 2000) { ?> selected <?php } ?>>1001 to 2000 Square Meter</option>
	                                       		<option value="2100" <?php if($companyinfo[0]['company_size'] == 2100) { ?> selected <?php } ?>>More Than 2000 Square Meter</option>
	                                   		</select>
										</div>
										<div class="messageContainer"></div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<div class="control-label label-text-form">Total No. Of Employee </div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<div class="label-text-input">
	                                      	<input type="text" name="data[total_no_of_emp]" id="no_of_employee" class="form-control form-custom-input" value="<?php echo $companyinfo[0]['total_no_of_emp'];?>"/>
										</div>
										<div class="messageContainer"></div>
									</div>
								</div>
							</div>
						</div>
			  			<div class="row info-row" >
			  				<div class="col-sm-2">
								<div class="form-group">
									<div class="control-label label-text-form">Company Introduction </div>
								</div>
							</div>
							<div class="col-sm-7">
								<div class="form-group">
									<div class="label-text-input">
	                                 	<textarea name="data[company_introduction]"  maxlength="4000"  id="company_intro"  cols="70" rows="8" style="height:118px;" class="form-control" name="Introduction"><?php echo $companyinfo[0]['company_introduction'];?></textarea>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<div class="control-label label-text-form">This introduction will be shown in "About Us" tab.. </div>
									<div class="control-label label-text-form"><span id="intro_count" style="color:#F05539;"></span> Remining..... </div>
								</div>
							</div>
					  	</div>
					  	<div class="row info-row">
					  		<div class="col-sm-2">
								<div class="form-group">
									<div class="control-label label-text-form">Hot Presentation </div>
								</div>
							</div>
							<div class="col-sm-7">
								<div class="form-group">
									<div class="label-text-input">
                                   		<textarea id="company_presentation" name="data[hot_presentation]"  maxlength="400"  cols="70" rows="8" style="height:118px;" class="form-control" name="Introduction"><?php echo $companyinfo[0]['hot_presentation'];?></textarea>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<div class="control-label label-text-form">This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent.. </div>
									<div class="control-label label-text-form"><span id="presentation_count" style="color:#F05539;"></span> Remining..... </div>
								</div>
							</div>
			  			</div>
			  			 <div <?php if($tscategory_id != 3) { ?> style="display:none" <?php  } ?>>
	                        <div class="row" >
	                            <div class="col-md-12">
	                                <div class="form-group">
	                                    <label class="col-md-2" style="padding-top:5px; font-weight:normal; padding-right:0px;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Terms Of Payment</span></label>
	                                    <div class="col-md-10" style="padding-right:1px;">
                                            <?php foreach ($payment_terms as $row) { ?>
												<div class="col-sm-2" style="padding-left:22px;">
													<input class="payment" id="tt" value="<?php echo $row['id'];?>" name="payment[]" type="checkbox"
													<?php $keypayment = in_array($row['id'],array_column($tradepayment_terms,'payment_terms_id'));
														if($keypayment!= false) { ?>
																checked
																<?php  }  ?>> <?php echo $row['payment_terms'];?>
												</div>
											<?php } ?>
	                                </div>
	                            </div>
	                        </div>
	                        </div><br><br>
	                        <div class="row" >
	                        	 <div class="col-md-12">
	                                <div class="form-group">
	                                		<label class="col-md-3 " style="padding-top:5px; font-weight:normal;"> Annual Trade Volume </label>
	                                		<div  class="col-md-3">
	                                			<div class="form-group">
	                                				<input type="text"  class="form-control" value="<?php echo $companyinfo[0]['annual_trad_volume']; ?>" name="data[annual_trad_volume]" id="annual_trad_volume" />
	                                				<span style="color:#A9A9A9">Ex: 30 Containers</span>
	                                			</div>
	                                		</div>
	                                		<div>
	                                		<span style="color:#696969" >Per Year</span>
	                                		</div>
	                        		</div>
	                        	</div>	
	                        </div>
						</div>
<!--			  			  <div class="row" style="margin-top:10px;">
<!--                             <div class="col-md-12"> -->
<!--                                 <div class="form-group"> -->
   <!--                                 <label class="col-md-3" style="padding-top:5px; font-weight:normal;">
  <!--                                  <span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">  Add Company Images</span>
                                        <!--  <div style="margin-top:30px;"><a href="#"><img src="<?php //echo asset_url(); ?>images/img1208.gif"></a></div> -->
<!--                                     </label> -->
<!--                                     <div class="col-md-5"> -->
<!--                                         <div class="row" > -->
<!--                                             <div class="col-sm-12"> -->
 <!--                                           	<input name="companyImage[]" type='file' class="upladImg" id="imgupload" multiple="multiple" style="display: none" onchange="readCompanyImageURL(this);"/>
<!--                                             	<br><br> -->
  <!--                                              <!--<a href="#"><img src="<?php //echo asset_url(); ?>images/ts/img1191.png" class="img-responsive"></a>
<!--                                                 <input class="img-responsive companyImg " name="buisnessImage[]" type='file' id="companyImgFirst" onchange="readCompanyImgURL(this);"/> --> 
  <!--                                              <div class="col-sm-6" style="margin-bottom:5px;"><img id="companyphoto1" <?php //if($companyinfo[0]['company_image1']!="") { ?>
  <!--                                              src="<?php //echo asset_url().$companyinfo[0]['company_image1']; ?>" <?php //} else { ?>
                                                	src="<?php //echo asset_url();?>images/companyicon.png" <?php //} ?> style="width: 100px; height: 100px;" /></div>
  <!--                                              <div class="col-sm-6" style="margin-bottom:5px;"><img id="companyphoto2" <?php //if($companyinfo[0]['company_image2']!="") { ?>
                                                src="<?php //echo asset_url().$companyinfo[0]['company_image2']; ?>" <?php //} else { ?>
                                                	src="<?php //echo asset_url();?>images/companyicon.png" <?php //} ?> style="width: 100px; height: 100px;"  /></div>
                                                <div class="col-sm-6"><img id="companyphoto3" <?php //if($companyinfo[0]['company_image3']!="") { ?>
                                                src="<?php //echo asset_url().$companyinfo[0]['company_image3']; ?>" <?php //} else { ?>
                                                	src="<?php //echo asset_url();?>images/companyicon.png" <?php //} ?> style="width: 100px; height: 100px;" /></div>
                                                <div class="col-sm-6"><img id="companyphoto4" <?php //if($companyinfo[0]['company_image4']!="") { ?>
                                                src="<?php //echo asset_url().$companyinfo[0]['company_image4']; ?>" <?php //} else { ?>
                                                	src="<?php //echo asset_url();?>images/companyicon.png" <?php //} ?> style="width: 100px; height: 100px;" /></div>
<!--                                             </div> -->
<!--                                         </div> -->
<!--                                     </div> -->
    <!--                                 <div class="form-group"> <span style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor: pointer" onclick="removeCompanyImage();">Remove</span> </div>
                                    <div class="col-md-3 col-xs-6" style="position:relative;">
                                        <span style="color:#666666;font-family:Arial;font-size:11px;">Images will be shown in your " About Us " tab and in a slide show..<br><br>jpg or png, Dimensiones: 500*345 Pixel, Resolution 75dpi, Max size allowed: 80 kb</span>
<!--                                     </div> -->
<!--                                 </div> -->
<!--                             </div> -->
<!--                         </div> -->
						<br>
						<?php if($tsuser_role != 2) { ?>
			  			<div class="row info-row">
			  				<div class="col-sm-6">
								<div class="form-group">
									<div class="control-label label-text-form">Who Is The The Contact Person In Your Company..? </div>
									<div class="control-label label-text-form" style="font-size:11px;">
										The Ccontact person is the person who will deal with your website buyers or visitors through:<br>
										- Chat, Emails, Messages and much more
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<div class="label-text-input">
                                    	<input type="radio" onchange ="displaycontact();"  <?php  if($tsuser_role == 3) { ?> disabled <?php } ?>  name="contact_person" id="contact_person" value="1"  <?php  if($tsuser_role == 3) { ?> checked <?php } else  if($companyinfo[0]['is_contactperson'] == 1) { ?> checked <?php } ?> /> I am The Contact Person<br><br>
                                       	<input type="radio" onchange ="displaycontact();"  <?php  if($tsuser_role == 3) { ?> disabled <?php } ?>  name="contact_person" id="contact_person" value="2" <?php if($tsuser_role == 3) { ?>  <?php } else if($companyinfo[0]['is_contactperson'] == 0) { ?>checked <?php } ?> /> I Don't Prefer To Be The Contact Person, Let Me Add One
									</div>
									<div class="messageContainer"></div>
								</div><br>
					  	</div>
					  </div><br>
					<?php } else { ?>
						<input type="hidden" name="contact_person" id="contact_person" value="0"/>
					<?php } ?>
			  		<div id="contact" <?php if($companyinfo[0]['contact_person_flag'] == 1 || $tsuser_role == 2) { ?> style="display:none" <?php } ?>>
						<div class="row info-row">
							  	<div class="col-md-12">
	                                <div class="form-group">
	                                	<div class="col-md-3">
	                                		<input type='button'  name="contact_personeimg"   id="change-contactprofile-pic" style="background: url('<?php echo asset_url(); ?>images/img1186.png') center center no-repeat;border:none;width:100px;height:100px;display:none;cursor:pointer" />
	                                		<img id="imgcontactperson"  onclick="contactimagchange()"   src="<?php if(count($contactpersone) > 0) { echo asset_url().$contactpersone[0]['picture']; } else { echo asset_url().'images/img1186.png'; } ?>"  class="img-circle" style="width:100px;height:100px;cursor:pointer"  />
	                                		<input type="hidden"  onchage="revalidatepath();" name="contact_imgpath"  value="<?php if(count($contactpersone) > 0) { echo $contactpersone[0]['picture']; } ?>" id="contact_imgpath"/>
	                                    </div>
	                                    <div class="messageContainer"></div>
		                                    <div class="col-md-6">
	                                            	<div id="wb_Text85" style="width:215px;height:14px;z-index:362;text-align:left;">
													<span style="color:#3C3C3C;font-family:Georgia;font-size:11px;">Add the contact person profile image</span></div>
													<div id="wb_Text86" style="width:209px;height:24px;z-index:364;text-align:left;">
													<span style="color:#666666;font-family:Arial;font-size:9.3px;">jpg or png, Dimensions: 200 * 200 pixel, Resolution: 75, with Max. size 40 KB </span></div>
	                                                <div id="wb_Text87" style="width:157px;height:14px;text-align:left;"><br>
												<!--  <a href="#"  onclick="remove_contact_profile_pic();" ><span style="color:#1E90FF;font-family:Georgia;font-size:11px;">Remove</span></a></div> -->
		                                    </div>
	                                	</div>
		                            </div>
		                       </div><br><br>
								<div class="row info-row">
								  	<div class="col-md-12">
			                                <div class="form-group">
			                                    <label class="col-md-3" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"><span style="color: red">*</span>  Name<?php if(count($contactpersone)  > 0) { echo $contactpersone[0]['id']; }?></span></label>
			                                    <div class="col-md-6">
			                                        <div class="row">
			                                            <div class="col-sm-3" style="padding-right:0px;">
			                                                <select name="contactpersoneprefix"  id="Combobox2" class="Combobox2" size="1" id="Combobox1" style="width:48px;height:34px;">
			                                                    <option <?php if(count($contactpersone) > 0) { if($contactpersone[0]['name_prefix'] == "Mr") { ?> selected <?php } } ?> value="Mr" >Mr.</option>
			                                                    <option <?php if(count($contactpersone) > 0) { if($contactpersone[0]['name_prefix'] == "Miss") { ?> selected <?php } } ?>value="Miss" >Miss.</option>
			                                                    <option <?php if(count($contactpersone) > 0) { if($contactpersone[0]['name_prefix'] == "Mrs") { ?> selected  <?php } } ?>value="Mrs" >Mrs.</option>
			                                                    <option <?php if(count($contactpersone) > 0) { if($contactpersone[0]['name_prefix'] == "Ms") { ?> selected  <?php } } ?> value="Ms" >Ms.</option>
			                                                </select>
			                                            </div>
			                                            <div class="messageContainer"></div>
			                                            <div class="col-sm-8" style="padding-left:16px;">
			                                                <input type="text" class="form-control form-custom-input" id="contact_name" name="contactpersone_name"   placeholder="Name"  
			                                                value="<?php if(count($contactpersone) > 0) { echo $contactpersone[0]['name']; }?>" style="height:35px">
			                                            </div>
			                                            <div class="messageContainer"></div>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
				                    </div><br>
			                       <div class="row info-row">
									  	<div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="col-md-3" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"><span style="color: red">*</span>  Email</span></label>
				                                    <div class="col-md-6">
				                                       <input type="text" class="form-control form-custom-input" name="contact_person_email"  id="contact_person_email"  placeholder="Email"   value="<?php if(count($contactpersone) > 0) { echo $contactpersone[0]['email']; }?>" style="height:35px">
				                                    </div>
				                                    <div id="contactemail_label" style="color: red"></div>
				                                </div>
				                            </div>
				                     </div><br>
			                       <div class="row info-row">
									  	<div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="col-md-3" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"><span style="color: red">*</span>Password</span></label>
				                                    <div class="col-md-6">
				                                       <input type="password" class="form-control form-custom-input" name="contact_password"  id="contact_password"  placeholder="Password"   value="<?php if(count($contactpersone) > 0) { echo $contactpersone[0]['text_password']; }?>" style="height:35px">
				                                    </div>
				                                    <div class="messageContainer"></div>
				                                </div>
				                            </div>
				                     </div><br>
				                     <div class="row info-row">
									  	<div class="col-md-12">
			                                <div class="form-group">
			                                    <label class="col-md-3" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"><span style="color: red">*</span>  Mobile</span></label>
			                                    <div class="col-md-6">
			                                        <div class="row">
			                                            <div class="col-sm-4 " style="padding-right:0px;">
			                                               	 <input type="text" class="form-control form-custom-input" name="contact_person_code"  id="contact_person_code"  maxlength="6" placeholder="Code" value="<?php if(count($contactpersone) > 0) { echo $contactpersone[0]['mobile_code']; }?>" style="height:35px">
			                                            </div>
			                                            <div class="messageContainer"></div>
			                                            <div class="col-xs-8" style="padding-left:5px;">
			                                                <input type="text" class="form-control form-custom-input" name="contact_person_mobile"  id="contact_person_mobile"  maxlength="12"  placeholder="Mobile" value="<?php if(count($contactpersone) > 0) { echo $contactpersone[0]['mobile']; }?>" style="height:35px">
			                                            </div>
			                                            <div class="messageContainer"></div>
			                                        </div>
			                                    </div>
			                                </div>
				                        </div>
				                     </div><br>
			                      <div class="row info-row">
								  	<div class="col-md-12">
		                                <div class="form-group">
		                                    <label class="col-md-3" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"><span style="color: red">*</span>  Position/Title</span></label>
		                                    <div class="col-md-6">
		                                       <input type="text" class="form-control form-custom-input" name="contact_person_position" id="contact_person_position" placeholder="Position/Title"  value="<?php if(count($contactpersone) > 0) { echo $contactpersone[0]['position']; }?>" style="height:35px">
		                                    </div>
		                                    <div class="messageContainer"></div>
		                                </div>
			                        </div>
			            		</div>
			            		</div>
						</div>
					   <div class="row" <?php  if($tscategory_id != 3) { ?> style="display:none"  <?php } ?>>
	                        	 <div class="col-md-12">
	                                <div class="form-group">
	                                	<?php $rr = 0; if($companyinfo[0]['company_rendom_carousel'] == 1) { $rr = 1; } else { $rr = 0; } ?>
	                                	<input type="hidden" name="data[company_rendom_carousel]"  id="random"   value="<?php echo $rr ;?>"  />
	                                		<input  type="checkbox" id="company_rendom_carousel"  onchange="changerandomcatousel(this);"   name="data[company_rendom_carousel_1]" value="1" 
	                                		<?php  if($companyinfo[0]['company_rendom_carousel'] == 1) { ?>checked <?php } ?>  />
	                                		<span >Display My Company Information in the random carousel in the Home page.</span>
	                        		</div>
	                        	</div>	
	                  </div><br>
					  <div <?php if($tscategory_id != 2) {?> style="display:none" <?php } ?>>
					  		<div class="row">
							  	<div class="col-md-12">
							  		<div class="form-group">
											<div class="control-label label-text-form"><span><font style="color:#F05539;font-size: 13px;"> Add Main Routes</font></span></div>
									</div>
							  	</div>
							</div><br>
			  				<input type="hidden" id="route_count" value="<?php echo count($myrouteinfo);?>" />
				  			<div id="myroutes" style="background-color:#fafafa;padding:15px 25px;">
				  				<?php if(count($myrouteinfo) > 0) { ?>
				  				<?php foreach ($myrouteinfo as $key=>$routeinfo) { ?>
				  				<div class="route-<?php echo ($key+1);?>"><?php if($key > 0) {?><hr/><?php } ?>
						  			<div class="row" style="margin:0px;">
						  				<div class="col-sm-8">
						  					<div class="row">
						  						<div class="form-group">
						  							<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Start Country</div>
						  							<div class="col-sm-9">
						  								<select name="from_country_id[]" class="country-dropdn" id="country-dropdn-1<?php echo $key;?>" onclick="unckeckCountry('from_country<?php echo $key;?>','country-dropdn-1<?php echo $key;?>');" <?php if($routeinfo['from_country_id'] == 0) {?>style="background-color:#ccc;"<?php }?>>
						  									<option value="">Country</option>
						  									<?php foreach ($countries as $country) {?>
						  									<option value="<?php echo $country['id'];?>" <?php if($routeinfo['from_country_id'] == $country['id']) {?>selected<?php } ?>><?php echo $country['name'];?></option>
						  									<?php } ?>
						  								</select>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
						  				<div class="col-sm-4">
						  					<div class="row">
						  						<div class="control-label label-text-form col-sm-10 col-sm-offset-2" style="padding-top:10px;">
							  						<input type="radio" name="from_country<?php echo $key;?>" value="1" id="from_country<?php echo $key;?>" onclick="disableDropDn(this,'country-dropdn-1<?php echo $key;?>');" <?php if($routeinfo['from_country_id'] == 0) {?>checked<?php }?>/>
							  						 Worldwide
						  						</div>
						  					</div>
						  				</div>
						  			</div>
						  			<br>
						  			<div class="row" style="margin:0px;">
						  				<div class="col-sm-8">
						  					<div class="row">
						  						<div class="form-group">
						  							<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Port</div>
						  							<div class="col-sm-9">
						  								<input type="text" name="from_shipping_port[]" class="shiipingport" placeholder="Use commas to separate and type many destinations" value="<?php echo $routeinfo['from_location'];?>"/><br>
						  								<span style="color:#808080;font-family:Arial;font-size:9.3px;margin-left:15px;">Ex. Shenzen, Shangahi, xxxxxxxx, xxxxx</span>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
						  				<div class="col-sm-4">
						  				</div>
						  			</div>
						  			<br><br>
						  			<div class="row" style="margin:0px;">
						  				<div class="col-sm-8">
						  					<div class="row">
						  						<div class="form-group">
						  							<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Destination</div>
						  							<div class="col-sm-9">
						  								<select name="to_country_id[]" class="country-dropdn" id="country-dropdn-2<?php echo $key;?>" onclick="unckeckCountry('to_country<?php echo $key;?>','country-dropdn-2<?php echo $key;?>');" <?php if($routeinfo['to_country_id'] == 0) {?>style="background-color:#ccc;"<?php }?>>
						  									<option value="">Country</option>
						  									<?php foreach ($countries as $country) {?>
						  									<option value="<?php echo $country['id'];?>" <?php if($routeinfo['to_country_id'] == $country['id']) {?>selected<?php } ?>><?php echo $country['name'];?></option>
						  									<?php } ?>
						  								</select>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
						  				<div class="col-sm-4">
						  					<div class="row">
						  						<div class="control-label label-text-form col-sm-10 col-sm-offset-2" style="padding-top:10px;">
							  						<input type="radio" name="to_country<?php echo $key;?>" value="1" id="to_country<?php echo $key;?>" onclick="disableDropDn(this,'country-dropdn-2<?php echo $key;?>');" <?php if($routeinfo['to_country_id'] == 0) {?>checked<?php }?>/>
							  						 Worldwide
						  						</div>
						  					</div>
						  				</div>
						  			</div>
						  			<br>
						  			<div class="row" style="margin:0px;">
						  				<div class="col-sm-8">
						  					<div class="row">
						  						<div class="form-group">
						  							<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Port</div>
						  							<div class="col-sm-9">
						  								<input type="text" name="to_shipping_port[]" class="shiipingport" placeholder="Use commas to separate and type many ports" value="<?php echo $routeinfo['to_location'];?>"/><br>
						  								<span style="color:#808080;font-family:Arial;font-size:9.3px;margin-left:15px;">Ex. Dubai, Gabal Ali, xxxxx, xxxxxx, </span>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
						  				<div class="col-sm-4">
						  				</div>
						  			</div>
						  		</div>
						  		<?php } ?>
						  		<?php } else { ?>
						  		<div class="route-1">
						  			<div class="row" style="margin:0px;">
						  				<div class="col-sm-8">
						  					<div class="row">
						  						<div class="form-group">
						  							<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Start Country</div>
						  							<div class="col-sm-9">
						  								<select name="from_country_id[]" class="country-dropdn" id="country-dropdn-10" onclick="unckeckCountry('from_country0','country-dropdn-10');">
						  									<option value="0">Country</option>
						  									<?php foreach ($countries as $country) {?>
						  									<option value="<?php echo $country['id'];?>"><?php echo $country['name'];?></option>
						  									<?php } ?>
						  								</select>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
						  				<div class="col-sm-4">
						  					<div class="row">
						  						<div class="control-label label-text-form col-sm-10 col-sm-offset-2" style="padding-top:10px;">
							  						<input type="radio" name="from_country0" value="1" id="from_country0" onclick="disableDropDn(this,'country-dropdn-10');"/>
							  						 Worldwide
						  						</div>
						  					</div>
						  				</div>
						  			</div>
						  			<br>
						  			<div class="row" style="margin:0px;">
						  				<div class="col-sm-8">
						  					<div class="row">
						  						<div class="form-group">
						  							<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Port</div>
						  							<div class="col-sm-9">
						  								<input type="text" name="from_shipping_port[]" class="shiipingport" placeholder="Use commas to separate and type many destinations"/><br>
						  								<span style="color:#808080;font-family:Arial;font-size:9.3px;margin-left:15px;">Ex. Shenzen, Shangahi, xxxxxxxx, xxxxx</span>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
						  				<div class="col-sm-4">
						  				</div>
						  			</div>
						  			<br><br>
						  			<div class="row" style="margin:0px;">
						  				<div class="col-sm-8">
						  					<div class="row">
						  						<div class="form-group">
						  							<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Destination</div>
						  							<div class="col-sm-9">
						  								<select name="to_country_id[]" class="country-dropdn" id="country-dropdn-20" onclick="unckeckCountry('to_country0','country-dropdn-20');">
						  									<option value="0">Country</option>
						  									<?php foreach ($countries as $country) {?>
						  									<option value="<?php echo $country['id'];?>"><?php echo $country['name'];?></option>
						  									<?php } ?>
						  								</select>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
						  				<div class="col-sm-4">
						  					<div class="row">
						  						<div class="control-label label-text-form col-sm-10 col-sm-offset-2" style="padding-top:10px;">
							  						<input type="radio" name="to_country0" value="1" id="to_country0" onclick="disableDropDn(this,'country-dropdn-20');"/>
							  						 Worldwide
						  						</div>
						  					</div>
						  				</div>
						  			</div>
						  			<br>
						  			<div class="row" style="margin:0px;">
						  				<div class="col-sm-8">
						  					<div class="row">
						  						<div class="form-group">
						  							<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Port</div>
						  							<div class="col-sm-9">
						  								<input type="text" name="to_shipping_port[]" class="shiipingport" placeholder="Use commas to separate and type many ports"/><br>
						  								<span style="color:#808080;font-family:Arial;font-size:9.3px;margin-left:15px;">Ex. Dubai, Gabal Ali, xxxxx, xxxxxx, </span>
						  							</div>
						  						</div>
						  					</div>
						  				</div>
						  				<div class="col-sm-4">
						  				</div>
						  			</div>
						  		</div>
						  		<?php } ?>
				  			</div>
				  			<div class="row" style="margin:0px;margin-right:15px;padding-top:10px;">
					  			<div class="pull-right" style="color:#1E90FF;font-family:Georgia;font-size:11px;">
						  			<strong><a href="javascript:addMoreRoutes();" class="style5" >Add a route</a></strong>
						  		</div>
					  		</div>
					  		<br><br>
			  			</div>	
			  			<br>
			  			<div class="row info-row" <?php if($tscategory_id != 1) {?> style="display:none" <?php } ?>>
			  				<div class="col-md-9">
			  					<div class="row">
			  						<div class="col-sm-12">
						  				<div class="col-sm-4">
											<div class="form-group">
												<div class="control-label label-text-form">Account No.</div>
											</div>
										</div>
										<div class="col-sm-8">
											<div class="form-group">
												<div class="label-text-input">
												 	<input type="text" class="form-control"  placeholder="Account Number"  name="data[account_no]"  id="account_no"  value="<?php echo $companyinfo[0]['account_no'];?>"/>
												</div>
												<div class="messageContainer"></div>
											</div>
										</div>
									</div>	
								</div>	
			  					<div class="row">
			  						<div class="col-sm-12">
						  				<div class="col-sm-4">
											<div class="form-group">
												<div class="control-label label-text-form">Account Name</div>
											</div>
										</div>
										<div class="col-sm-8">
											<div class="form-group">
												<div class="label-text-input">
													<input type="text" class="form-control" name="data[account_name]"  placeholder="Account Name"  id="account_name"  value="<?php echo $companyinfo[0]['account_name'];?>"/>
												</div>
												<div class="messageContainer"></div>
											</div>
										</div>
									</div>	
								</div>	
			  					<div class="row">
			  						<div class="col-sm-12">
						  				<div class="col-sm-4">
											<div class="form-group">
												<div class="control-label label-text-form">Beneficiary Bank Name</div>
											</div>
										</div>
										<div class="col-sm-8">
											<div class="form-group">
												<div class="label-text-input">
													<input type="text" class="form-control" name="data[bank_name]"  placeholder="Bank Name"  id="bank_name"  value="<?php echo $companyinfo[0]['bank_name'];?>" />
												</div>
												<div class="messageContainer"></div>
											</div>
										</div>
									</div>	
								</div>	
			  					<div class="row">
			  						<div class="col-sm-12">
						  				<div class="col-sm-4">
											<div class="form-group">
												<div class="control-label label-text-form">Bank Code</div>
											</div>
										</div>
										<div class="col-sm-8">
											<div class="form-group">
												<div class="label-text-input">
													 <input type="text" class="form-control" name="data[bank_code]"  placeholder="Bank Code"  id="bank_code"  value="<?php echo $companyinfo[0]['bank_code'];?>"/>
												</div>
												<div class="messageContainer"></div>
											</div>
										</div>
									</div>	
								</div>	
			  					<div class="row">
			  						<div class="col-sm-12">
						  				<div class="col-sm-4">
											<div class="form-group">
												<div class="control-label label-text-form">Beneficiary Bank Address </div>
											</div>
										</div>
										<div class="col-sm-8">
											<div class="form-group">
												<div class="label-text-input">
			                                    	<textarea id="bank_address" name="data[bank_address]" maxlength="400" cols="70" rows="8" style="height:118px;" class="form-control" ><?php echo $companyinfo[0]['bank_address'];?></textarea>
												</div>
												<div class="messageContainer"></div>
											</div>
										</div>
									</div>	
								</div>	
			  					<div class="row">
			  						<div class="col-sm-12">
						  				<div class="col-sm-4">
											<div class="form-group">
												<div class="control-label label-text-form">Swift Code </div>
											</div>
										</div>
										<div class="col-sm-8">
											<div class="form-group">
												<div class="label-text-input">
													 <input type="text" class="form-control" name="data[swift_code]"  placeholder="Swift Code"  id="swift_code"  value="<?php echo $companyinfo[0]['swift_code'];?>"/>
												</div>
												<div class="messageContainer"></div>
											</div>
										</div>
									</div>	
								</div>	
							</div>	
							<div class="col-sm-2">
								<div class="form-group">
									<div class="control-label label-text-form">The official bank account is the account assigned and associated with your company registered name.</div>
									<div class="control-label label-text-form"> Personal accounts will be rejected</div>
								</div>
								<br><br><br>
							</div>
			  			</div>
			  		</div>
			  		<br><br><br>
			  		<br><br><br>
			  		<br><br>
		  		</div>
  		</div>
  	</div>
 </form>
 <div id="compay_pic_modal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="cropmodal_title">Add Company Logo  Picture</h3>
			</div>
			<div class="modal-body">
				<form id="frmcropimage" method="post" enctype="multipart/form-data" action="">
						<span><b>Upload Image:</b></span> <input type="file" name="businesslogo-pic" id="businesslogo-pic"  accept=".png,.jpg,.jpeg.gif" class="form-control" style="width:200px;display:inline-block;"/><br><br>
						
						<input type="hidden" name="hdn-profile-id" id="hdn-profile-id" value="1" />
						<input type="hidden" name="bx1" id="bx1" value="" />
				        <input type="hidden" name="by1" id="by1" value="" />
				        <input type="hidden" name="bx2" id="bx2" value="" /> 
				        <input type="hidden" name="by2" id="by2" value="" />
				        <input type="hidden" name="bwidth" id="bwidth" value="" />
				        <input type="hidden" name="bheight" id="bheight" value="" />
				      	<!--  <input type="hidden" name="fullpath" id="fullpath" value="<?php //echo asset_url();?>" /> -->
						<input type="hidden" name="bimage_name" value="" id="bimage_name" />
						<input type="hidden"  name="flag" id="flag" value="" />
						<div id="parent1" style="position:relative;">
							<span id="thumbnail" style="display: inline-block;position:relative;">
								<img id="busiphoto" src="#" alt="" title="" style="max-width:100%;display:none" />
							</span>
						</div>
						<div id="thumbs" style="padding:5px; width:600px"></div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" id="bsave_crop" class="btn btn-primary">Crop & Save</button>
			</div>
		</div>
	</div>
</div>
<script>
function addMoreOffice()
{
	var office_count = parseInt($("#office_count").val());
	office_count++;
	if(office_count > 0) {
		document.getElementById('addmorediv').style.display = 'block';
	}
	var html =
	'<div class="row" id="office-no-'+office_count+'">'
	+'<div class="col-md-12">'
	+'<hr>'
	+ '<div class="row info-row">'
		+'<div class="col-sm-2">'
		+'<div class="form-group">'
			+'<div class="control-label label-text-form">Address</div>'
		+'</div>'
	+'</div>'
	+'<div class="col-sm-3">'
		+'<div class="form-group">'
			+'<div class="label-text-input">'
            	+'<input type="text" name="bcountry[]" id="blicense_company_country" class="form-control form-custom-input" value="" placeholder="Country"/>'
			+'</div>'
			+'<div class="messageContainer"></div>'
		+'</div>'
	+'</div>'
	+'<div class="col-sm-4">'
		+'<div class="form-group">'
			+'<div class="label-text-input">'
            	+'<input type="text" name="bprovince[]" id="blicense_company_province" class="form-control form-custom-input" value="" placeholder="Province"/>'
			+'</div>'
			+'<div class="messageContainer"></div>'
		+'</div>'
	+'</div>'
	+'<div class="col-sm-3">'
		+'<div class="form-group">'
			+'<div class="label-text-input">'
          		+'<input type="text" name="bcity[]" id="bbuisness_city_other_lng" class="form-control form-custom-input" value="" placeholder="City"/>'
			+'</div>'
			+'<div class="messageContainer"></div>'
		+'</div>'
	+'</div>'
	+'</div>'
	+'<div class="row info-row">'
		+'<div class="col-sm-2">'
			+'<div class="form-group">'
				+'<div class="control-label label-text-form">Street</div>'
			+'</div>'
		+'</div>'
		+'<div class="col-sm-6">'
			+'<div class="form-group">'
				+'<div class="label-text-input">'
           			+'<input type="text" name="bstreet[]" id="bbuisness_street_other_lng" class="form-control form-custom-input" value="" placeholder="Street"/>'
				+'</div>'
				+'<div class="messageContainer"></div>'
			+'</div>'
		+'</div>'
	+'</div>'
	+'<div class="row info-row">'
		+'<div class="col-sm-2">'
		+'<div class="form-group">'
			+'<div class="control-label label-text-form">Tel </div>'
		+'</div>'
	+'</div>'
	+'<div class="col-sm-2">'
		+'<div class="form-group">'
			+'<div class="label-text-input">'
           		+'<input type="text" name="bcountry_code[]" id="btelephone_code" class="form-control form-custom-input" value="" placeholder="Country Code"/>'
			+'</div>'
			+'<div class="messageContainer"></div>'
		+'</div>'
	+'</div>'
	+'<div class="col-sm-2">'
		+'<div class="form-group">'
			+'<div class="label-text-input">'
            	+'<input type="text" name="bcity_code[]" id="btelephone_city_code" class="form-control form-custom-input" value="" placeholder="City Code"/>'
			+'</div>'
			+'<div class="messageContainer"></div>'
		+'</div>'
	+'</div>'
	+'<div class="col-sm-2">'
		+'<div class="form-group">'
			+'<div class="label-text-input">'
          		+'<input type="text" name="btelephone1[]"   id="btelephone_1" maxlength="12" class="form-control form-custom-input" value="" placeholder="Telephone 1"/>'
			+'</div>'
			+'<div class="messageContainer"></div>'
		+'</div>'
	+'</div>'
	+'<div class="col-sm-1">'
		+'<div class="form-group">'
			+'<div class="control-label label-text-form" style="padding-top: 9px;">And </div>'
		+'</div>'
	+'</div>'
	+'<div class="col-sm-2">'
		+'<div class="form-group">'
			+'<div class="label-text-input">'
           		+'<input type="text" name="btelephone2[]" id="btelephone_2"  maxlength="12" class="form-control form-custom-input" value="" placeholder="Telephone 2"/>'
			+'</div>'
			+'<div class="messageContainer"></div>'
		+'</div>'
	+'</div>'
	+'</div>'
	+'<div class="row info-row">'
		+'<div class="col-sm-2">'
			+'<div class="form-group">'
				+'<div class="control-label label-text-form">Email </div>'
			+'</div>'
		+'</div>'
		+'<div class="col-sm-4">'
		+'<div class="form-group">'
			+'<div class="label-text-input">'
           		+'<input type="text" name="bemail[]" id="bfax" class="form-control form-custom-input" value="" placeholder="Email"/>'
			+'</div>'
			+'<div class="messageContainer"></div>'
		+'</div>'
	+'</div>'
	+'</div>'
	+'<div class="row info-row">'
		+'<div class="col-sm-2">'
		+'<div class="form-group">'
			+'<div class="control-label label-text-form">Fax </div>'
		+'</div>'
	+'</div>'
		+'<div class="col-sm-4">'
		+'<div class="form-group">'
			+'<div class="label-text-input">'
           		+'<input type="text" name="bfax[]" id="bfax" class="form-control form-custom-input" value="" placeholder="Fax"/>'
			+'</div>'
			+'<div class="messageContainer"></div>'
		+'</div>'
	+'</div>'
	+'</div>'
	+'<div class="row">'
	+'<div class="col-md-12">'
		+'<a class="pull-right" href="javascript:removeOffice('+office_count+',1);"><img src="<?php echo asset_url();?>images/Error.png"/></a>'
	+'</div>'
	+'</div>';	
	+'</div>'
	+'</div>';
	
	 $("#worlofficediv").append(html);
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'bcountry[]');
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'bprovince[]');
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'bcity[]');
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'bstreet[]');
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'bcountry_code[]');
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'bcity_code[]');
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'btelephone1[]');
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'btelephone2[]');
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'bemail[]');
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'bfax[]');
	 $("#office_count").val(office_count);
}
function removeOffice(id,flag) {
	
	$("#office-no-"+id).remove();
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'bcountry[]');
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'bprovince[]');
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'bcity[]');
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'bstreet[]');
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'bcountry_code[]');
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'bcity_code[]');
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'btelephone1[]');
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'btelephone2[]');
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'bemail[]');
	 $('#frmeditcompanyinfo').bootstrapValidator ('addField', 'bfax[]');
	if(flag == 1)
	{
		var count = $('#office_count').val();
		var decrease = parseInt(count)-parseInt(1);
		$('#office_count').val(decrease);
		if(decrease == 0) {
			document.getElementById('addmorediv').style.display = 'none';
		}
	}
}
$( document ).ready(function() {
	var companycharcount = document.getElementById('company_intro').value.length;
	var companyremainchar = 4000 - parseInt(companycharcount);
	document.getElementById('intro_count').textContent = companyremainchar;
	
	var presentationcharcount = document.getElementById('company_presentation').value.length;
	var presentationremainchar = 400 - parseInt(presentationcharcount);
	document.getElementById('presentation_count').textContent = presentationremainchar;
});
$('#company_intro').keyup(function() {
    var charcount = this.value.length;
    var remainchar = 4000 - parseInt(charcount);
    document.getElementById('intro_count').textContent = remainchar;
});
$('#company_presentation').keyup(function() {
    var charcount = this.value.length;
    var remainchar = 400 - parseInt(charcount);
    document.getElementById('presentation_count').textContent = remainchar;
});
function imgtrigger()
{
	$("#buisnessImg").trigger('click');
}
function remove_contact_profile_pic()
{
	  $('#imgcontactperson').attr('src', '');
      $('#imgcontactperson').hide();
      $('#change-contactprofile-pic').css('display', 'block');
      $('#contact_imgpath').val('');
      $('#frmeditcompanyinfo').bootstrapValidator ('revalidateField', 'contact_imgpath');
}
jQuery('#buisnessImg').on('click', function(e) {
	jQuery('#compay_pic_modal').modal({show:true,backdrop: 'static',keyboard: false});
	$('#busiphoto').css('display', 'none');
	$('#cropmodal_title').text('Add Company Logo  Picture');
	jQuery("#businesslogo-pic").val('');
	jQuery("#flag").val('1');
	jQuery('.imgareaselect-outer').css('display','none');
});

jQuery('#change-contactprofile-pic').on('click', function(e){
	jQuery('#compay_pic_modal').modal({show:true,backdrop: 'static',keyboard: false});
	$('#busiphoto').css('display', 'none');
	$('#cropmodal_title').text('Add Contact Person Picture');
	jQuery("#businesslogo-pic").val('');
	jQuery("#flag").val('2');
	jQuery('.imgareaselect-outer').css('display','none');
	});

jQuery('#businesslogo-pic').on('change', function() {
	var flag = validatecompanylogoimagefile('businesslogo-pic',this,100);
	if(flag == true) 
	{
          $('#busiphoto').css('display', 'block');
         savetemparary();

         var ias1 = jQuery('#busiphoto').imgAreaSelect( {
             aspectRatio: '1:1',
             maxWidth: 300, 
             maxHeight: 300,
             minWidth: 100, 
             minHeight: 100,
             x1: 50,
             y1: 50, 
             x2: 300,
             y2: 300,
             onSelectEnd: function ( image, selected) {
                 jQuery('input[name=bx1]').val(selected.x1);
                 jQuery('input[name=by1]').val(selected.y1);
                 jQuery('input[name=bx2]').val(selected.x2);
                 jQuery('input[name=by2]').val(selected.y2);
                 jQuery('input[name=bwidth]').val(selected.width);
                 jQuery('input[name=bheight]').val(selected.height);
             },
             handles: true,
        	 parent: '#parent1'
         });
         
         ias1.load(function(){
         	var height1 = ( this.width / 4 ) * 4;
         //	alert(height1);
         	if( height1 <= this.height ){     
           	var diff1 = ( this.height - height1 ) / 2;
              	var coords1 = { x1 : 0, y1 : diff1, x2 : this.width, y2 : height1 + diff1 };
              	jQuery('input[name=bx1]').val(0);
               jQuery('input[name=by1]').val(diff1);
               jQuery('input[name=bx2]').val(this.width);
               jQuery('input[name=by2]').val(height1 + diff1);
               jQuery('input[name=bwidth]').val(this.width);
               jQuery('input[name=bheight]').val(height1);
        	} else {
          		var width1 = ( this.height / 4 ) * 4; 
               var diff1 = ( this.width - width1 ) / 2;
               var coords1 = { x1 : diff1, y1 : 0, x2 : width1 + diff1, y2: this.height };
               jQuery('input[name=bx1]').val(diff1);
               jQuery('input[name=by1]').val(0);
               jQuery('input[name=bx2]').val(width1 + diff1);
               jQuery('input[name=by2]').val(this.height);
               jQuery('input[name=bwidth]').val(width1);
               jQuery('input[name=bheight]').val(this.height);
        	}   
        	$( this ).imgAreaSelect( coords1 );
		});
    }
    
});

jQuery('#bsave_crop').on('click', function(e){
	if(jQuery('#bx1').val() != "")
	{
			e.preventDefault();
			params = {
					targetUrl: '<?php echo base_url();?>account/changelogo',
					action: 'save',
					x_axis: jQuery('#bx1').val(),
					y_axis : jQuery('#by1').val(),
					x2_axis: jQuery('#bx2').val(),
					y2_axis : jQuery('#by2').val(),
					thumb_width : jQuery('#bwidth').val(),
					thumb_height:jQuery('#bheight').val()
			};
			$('#busiphoto').imgAreaSelect( {remove: true} );
			saveCropImage(params);
	} else {
		alert('Please select Image for crop');
	}
});
function validatecompanylogoimagefile(id,input,size)
{
	var flag = true;
	if (input.files && input.files[0]) {
       		var ext = input.files[0].name.split('.').pop();
       		var file_size = parseInt(input.files[0].size);
       		var filesizeinkb = (file_size/1024);
       		if(ext == 'png'  || ext =='jpg' || ext =='jpeg' || ext =='gif') {
	                if(filesizeinkb > size) {
	                	alert("File size should be 100 kb max.");
	                    $('#'+id).val('');
	                    flag = false;
	                } 
                } else {
                	alert("File should be png,jpg,jpeg, or gif  formate.");
                    $('#'+id).val('');
                    flag = false;
                }
   		}
		return flag;
		
}
function saveCropImage(params) {
			jQuery.ajax({
			url: params['targetUrl'],
			cache: false,
			dataType: "json",
			data: {
			//action: params['action'],
				id: jQuery('#hdn-profile-id').val(),
				t: 'ajax',
				w1:params['thumb_width'],
				x1:params['x_axis'],
				h1:params['thumb_height'],
				y1:params['y_axis'],
				x2:params['x2_axis'],
				y2:params['y2_axis'],
				image_name :jQuery('#bimage_name').val()
			},
			type: 'Post',
			success: function (response) {
				jQuery('#compay_pic_modal').modal('hide');
				jQuery('.imgareaselect-outer').css('display','none');
				jQuery(".imgareaselect-border1,.imgareaselect-border2,.imgareaselect-border3,.imgareaselect-border4,.imgareaselect-border2,.imgareaselect-outer").css('display', 'none');

				if(	jQuery("#flag").val() == 1) {
					jQuery("#business_img").attr('src', response['fullpath']);
					$('#bprofilepath').val(response['path']);
					$('#frmeditcompanyinfo').bootstrapValidator('revalidateField', 'data[profilepath]');
					//jQuery("#preview-profile-pic").html('');
					$('#business_img').css('display', 'block');
					$('#buisnessImg').css('display', 'none');
				}

				if(	jQuery("#flag").val() == 2) {
					jQuery("#imgcontactperson").attr('src', response['fullpath']);
					$('#contact_imgpath').val(response['path']);
					//jQuery("#preview-profile-pic").html('');
					$('#imgcontactperson').css('display', 'block');
					$('#change-contactprofile-pic').css('display', 'none');
					$('#frmeditcompanyinfo').bootstrapValidator ('revalidateField', 'contact_imgpath');
					//$('#contactModal').modal({show:true});
				
			}
				jQuery("#businesslogo-pic").val('');
			},
		
		},'json');
	}
function savetemparary() {
	ajaxindicatorstart("Please wait .. System is Processing...");
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showChangePasswordRequest, // pre-submit callback 
 			success :  showChangePasswordResponse,
 			url : '<?php echo base_url()?>account/savebusinesslogotempararyImage',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmcropimage').ajaxSubmit(options);
}
function showChangePasswordRequest(formData, jqForm, options){
	var queryString = $.param(formData);
return true;
}
function showChangePasswordResponse(resp, statusText, xhr, $form){
if(resp.status == 0) {
	$("#response").addClass('alert-danger');
	$("#response").html(resp.msg);
	$("#response").show();
	} else {
	$('#photo').attr('src', resp.msg);
	$("#response").addClass('alert-success');
	$("#response").html(resp.msg);
	$("#response").show();
	$('#busiphoto').attr('src', resp.msg);
	$('#bimage_name').val(resp.msg);
}
ajaxindicatorstop();
}
$('#compay_pic_modal').on('hidden.bs.modal' , function() {
	$('#busiphoto').imgAreaSelect( {remove: true} );
});


function contactimagchange()
{
	$('#change-contactprofile-pic').trigger('click');
}
function addMoreRoutes() {
	var count = parseInt($("#route_count").val());
	count++;
	var html = '<div id="mybusiroute-'+(count+1)+'" class="route-'+(count+1)+'"><hr/>'
			  +'<a href="javascript:deleteRoute('+(count+1)+');" class="pull-right"><i class="fa fa-times fa-2x" style="color:#FF6347;"></i></a>'
			  +'<div class="row" style="margin:0px;">'
			  +'<div class="col-sm-8">'
			  +'<div class="row">'
			  +'<div class="form-group">'
			  +'<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Start Country</div>'
			  +'<div class="col-sm-9">'
			  +'<select name="from_country_id[]" class="country-dropdn" id="country-dropdn-1'+count+'" onclick="unckeckCountry(`from_country'+count+'`,`country-dropdn-1'+count+'`);">'
			  +'<option value="0">Country</option>'
			  <?php foreach ($countries as $country) {?>
			  +'<option value="<?php echo $country['id'];?>"><?php echo addslashes($country['name']);?></option>'
			  <?php } ?>
			  +'</select>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'<div class="col-sm-4">'
			  +'<div class="row">'
			  +'<div class="control-label label-text-form col-sm-10 col-sm-offset-2" style="padding-top:10px;">'
			  +'<input type="radio" name="from_country'+count+'" id="from_country'+count+'" value="1" onclick="disableDropDn(this,`country-dropdn-1'+count+'`);"/>'
			  +' Worldwide'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'<br>'
			  +'<div class="row" style="margin:0px;">'
			  +'<div class="col-sm-8">'
			  +'<div class="row">'
			  +'<div class="form-group">'
			  +'<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Port</div>'
			  +'<div class="col-sm-9">'
			  +'<input type="text" name="from_shipping_port[]" class="shiipingport" placeholder="Use commas to separate and type many destinations"/><br>'
			  +'<span style="color:#808080;font-family:Arial;font-size:9.3px;margin-left:15px;">Ex. Shenzen, Shangahi, xxxxxxxx, xxxxx</span>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'<div class="col-sm-4">'
			  +'</div>'
			  +'</div>'
			  +'<br><br>'
			  +'<div class="row" style="margin:0px;">'
			  +'<div class="col-sm-8">'
			  +'<div class="row">'
			  +'<div class="form-group">'
			  +'<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Destination</div>'
			  +'<div class="col-sm-9">'
			  +'<select name="to_country_id[]" class="country-dropdn" id="country-dropdn-2'+count+'" onclick="unckeckCountry(`to_country'+count+'`,`country-dropdn-2'+count+'`);">'
			  +'<option value="0">Country</option>'
			  <?php foreach ($countries as $country) {?>
			  +'<option value="<?php echo $country['id'];?>"><?php echo addslashes($country['name']);?></option>'
			  <?php } ?>
			  +'</select>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'<div class="col-sm-4">'
			  +'<div class="row">'
			  +'<div class="control-label label-text-form col-sm-10 col-sm-offset-2" style="padding-top:10px;">'
			  +'<input type="radio" name="to_country'+count+'" id="to_country'+count+'" value="1" onclick="disableDropDn(this,`country-dropdn-2'+count+'`);"/>'
			  +' Worldwide'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'<br>'
			  +'<div class="row" style="margin:0px;">'
			  +'<div class="col-sm-8">'
			  +'<div class="row">'
			  +'<div class="form-group">'
			  +'<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Port</div>'
			  +'<div class="col-sm-9">'
			  +'<input type="text" name="to_shipping_port[]" class="shiipingport" placeholder="Use commas to separate and type many ports"/><br>'
			  +'<span style="color:#808080;font-family:Arial;font-size:9.3px;margin-left:15px;">Ex. Dubai, Gabal Ali, xxxxx, xxxxxx, </span>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'<div class="col-sm-4">'
			  +'</div>'
			  +'</div>'
			  +'</div>';
	$("#myroutes").append(html);
}


function nn()
{
	alert('ppdfg');
}

function changerandomcatousel(chkelement)
{
	if(chkelement.checked)
	{
		document.getElementById('random').value = 1;
	} else {
		document.getElementById('random').value = 0;
	}
}

function disableDropDn(input,id) {
	if($(input).prop("checked")) {
		$("#"+id).val("");
		$("#"+id).css('background-color','#ccc');
	}
}

function unckeckCountry(id,id2) {
	$("#"+id).removeAttr('checked'); 
	$("#"+id2).css('background-color','#fff');
}

function deleteRoute(id) {
	$("#mybusiroute-"+id).remove();	
}

</script>