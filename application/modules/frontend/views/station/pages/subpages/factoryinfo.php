<form name="frmeditfactoryinfo" method="post" action="" enctype="multipart/form-data" id="frmeditfactoryinfo">
	<div class="panel-heading custom-panel-heading">
	  		<a href="javascript:openFactoryInfoEditForm();" class="btn btn-default btn-custom" id="factory_edit_btn">EDIT</a>
	  		<a href="javascript:openFactoryInfo();" class="btn btn-default btn-custom" id="factory_info_btn">RESET</a>
<!-- 	  		<a href="javascript:saveFactoryInfo();" class="btn btn-default btn-custom">SAVE</a> -->
			<input type="submit" class="btn btn-default btn-custom" name="savefactorybtn" id="savefactorybtn"  style="display:none"  value="SAVE"/>
	  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer164', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
	  	</div>
	  	<div class="panel-body panel-body-custom" id="account_factory_info">
			<div class="personal_info_div" id="factory_info_div">
	  			<div class="row">
	  				<div class="col-sm-offset-3 col-sm-8">
	  					<div style="padding-top:120px;">&nbsp;</div>
	  					<div class="row info-row">
	  						<div class="col-sm-3 label-text" style="color:#F05539;font-size: 13px;">Factory Details</div>
	  					</div>
	  					<div class="row info-row">
	  						<div class="col-sm-3 label-text">Location In English</div>
	  						<div class="col-sm-9 label-text-value"><?php echo $factoryinfo[0]['fact_street'].",".$factoryinfo[0]['fact_city'].",".$factoryinfo[0]['fact_province']; ?></div>
	  					</div>
	  					<div class="row info-row">
	  						<div class="col-sm-3 label-text">Location In License Language</div>
	  						<div class="col-sm-9 label-text-value"><?php echo $factoryinfo[0]['fact_license_street'].",".$factoryinfo[0]['fact_license_city'].",".$factoryinfo[0]['fact_license_province']; ?></div>
	  					</div>
	  					<div class="row info-row">
	  						<div class="col-sm-3 label-text">Tel</div>
	  						<div class="col-sm-9 label-text-value"><?php echo $factoryinfo[0]['telephone_code']." ".$factoryinfo[0]['telephone_city_code']." ".$factoryinfo[0]['telephone'];?></div>
	  					</div>
	  					<div class="row info-row">
	  						<div class="col-sm-3 label-text">Factory Size</div>
	  						<?php if($factoryinfo[0]['fact_size'] == '100') { ?>
	  						<div class="col-sm-9 label-text-value">Less Than 100 Square Meter</div>
	  						<?php }else if($factoryinfo[0]['fact_size'] == '500'){?>
	  							<div class="col-sm-9 label-text-value">100 to 500 Square Meter</div>
	  						<?php }else if($factoryinfo[0]['fact_size'] == '1000'){?>
	  							<div class="col-sm-9 label-text-value">501 to 1000 Square Meter</div>
	  						<?php }else if($factoryinfo[0]['fact_size'] == '2000'){?>
	  							<div class="col-sm-9 label-text-value">1001 to 2000 Square Meter</div>
	  						<?php }else if($factoryinfo[0]['fact_size'] == '2100'){?>
	  							<div class="col-sm-9 label-text-value">More Than 2000 Square Meter</div>
	  						<?php } ?>
	  					</div>
	  					<div class="row info-row">
	  						<div class="col-sm-3 label-text">No. Of Production line</div>
	  						<div class="col-sm-3 label-text-value"><?php echo $factoryinfo[0]['no_of_production_line'];?></div>
	  						<div class="col-sm-3 label-text">Production Lead Time</div>
	  						<div class="col-sm-3 label-text-value"><?php echo $factoryinfo[0]['production_lead_time']."   Days";?></div>
	  					</div>
	  					<div class="row info-row">
	  						<div class="col-sm-3 label-text">No. Of Research & Development Staff</div>
	  						<div class="col-sm-3 label-text-value"><?php echo $factoryinfo[0]['no_of_rnd_staff'];?></div>
	  						<div class="col-sm-3 label-text">No. Of Quality Control Staff</div>
	  						<div class="col-sm-3 label-text-value"><?php echo $factoryinfo[0]['no_of_control_staff'];?></div>
	  					</div>
	  					<div class="row info-row">
	  						<div class="col-sm-3 label-text">R&D Capacity</div>
	  						<div class="col-sm-9">
		  						<?php foreach ($user_rnd as $row) { ?>
		  							<?php if($row['rnd_type_id'] == 4) { ?>
			  						<span class="label-text-value" style="padding-right:10px;"><?php echo $factoryinfo[0]['rnd_capacity'];?></span>
			  						<?php } else { ?>
			  						<span class="label-text-value" style="padding-right:10px;"><?php echo $row['name']?></span>
			  						<?php } ?>
		  						<?php } ?>	
		  					</div>
	  					</div>
	  					<div class="row info-row">
	  						<div class="col-sm-3 label-text">Annual Turnover</div>
	  						<div class="col-sm-9 label-text-value"><?php echo $factoryinfo[0]['annual_turnover'];?> Million USD</div>
	  					</div>
	  					<br><br><br><br>
	  				</div>
	  			</div>
	  		</div>
	  		<div class="edit-div" id="factory_edit_div" style="display:none;">
			  		<div class="row">
				  		<div class="col-sm-offset-1 col-sm-11">
				  			<div style="padding-top:50px;">&nbsp;</div>
			  				<div class="row info-row">
		  						<div class="col-sm-3 label-text" style="color:#F05539;font-size: 13px;">Factory Details</div>
			  					</div>
					  			<div class="row info-row">
					  				<div class="col-sm-2">
										<div class="form-group">
											<div class="control-label label-text-form">Location In English </div>
										</div>
									</div>
									<div class="col-sm-2">
										<div class="form-group">
											<div class="label-text-input" >
												<input type="hidden" name="data[factory_id]" value="<?php echo $factoryinfo[0]['id'];?>">
                                                <input type="text" name="data[fact_province]" id="factory_province" class="form-control form-custom-input" value="<?php echo $factoryinfo[0]['fact_province'];?>"/>
											</div>
											<div class="messageContainer"></div>
										</div>
									</div>
									<div class="col-sm-2">
										<div class="form-group">
											<div class="label-text-input">
                                                <input type="text" name="data[fact_city]" id="factory_city" class="form-control form-custom-input" value="<?php echo $factoryinfo[0]['fact_city'];?>"/>
											</div>
											<div class="messageContainer"></div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<div class="label-text-input">
                                                <input type="text" name="data[fact_street]" id="factory_street" class="form-control form-custom-input" value="<?php echo $factoryinfo[0]['fact_street'];?>"/>
											</div>
											<div class="messageContainer"></div>
										</div>
									</div>
					  			</div>
					  			<div class="row info-row">
					  				<div class="col-sm-2">
										<div class="form-group">
											<div class="control-label label-text-form">Location In License Language </div>
										</div>
									</div>
									<div class="col-sm-2">
										<div class="form-group">
											<div class="label-text-input">
                                                <input type="text" name="data[fact_license_province]" id="factory_province" class="form-control form-custom-input" value="<?php echo $factoryinfo[0]['fact_license_province'];?>"/>
											</div>
											<div class="messageContainer"></div>
										</div>
									</div>
									<div class="col-sm-2">
										<div class="form-group">
											<div class="label-text-input">
                                                <input type="text" name="data[fact_license_city]" id="factory_city" class="form-control form-custom-input" value="<?php echo $factoryinfo[0]['fact_license_city'];?>"/>
											</div>
											<div class="messageContainer"></div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<div class="label-text-input">
                                                <input type="text" name="data[fact_license_street]" id="factory_street" class="form-control form-custom-input" value="<?php echo $factoryinfo[0]['fact_license_street'];?>"/>
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
                                                <input type="text" name="data[telephone_code]" id="factory_telephone_code" class="form-control form-custom-input" value="<?php echo $factoryinfo[0]['telephone_code'];?>"/>
											</div>
											<div class="messageContainer"></div>
										</div>
									</div>
									<div class="col-sm-1">
										<div class="form-group">
											<div class="label-text-input">
                                                <input type="text" name="data[telephone_city_code]" id="factory_telephone_city_code" class="form-control form-custom-input" value="<?php echo $factoryinfo[0]['telephone_city_code'];?>"/>
											</div>
											<div class="messageContainer"></div>
										</div>
									</div>
									<div class="col-sm-2">
										<div class="form-group">
											<div class="label-text-input">
                                                <input type="text" name="data[telephone]" id="factory_telephone"  maxlength="12" class="form-control form-custom-input" value="<?php echo $factoryinfo[0]['telephone'];?>"/>
											</div>
											<div class="messageContainer"></div>
										</div>
									</div>
					  			</div>
					  			<div class="row info-row">
					  				<div class="col-sm-2">
										<div class="form-group">
											<div class="control-label label-text-form">Factory Size </div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<div class="label-text-input">
                                                <select id="factory_size" name="data[fact_size]" class="form-control" size="1"  style="height:35px;">
	                                                    <option value="">---  Please Select ---</option>
	                                                    <option value="100" <?php if($factoryinfo[0]['fact_size'] == 100) {?>selected <?php } ?>>Less Than 100 Square Meter</option>
	                                                    <option value="500" <?php if($factoryinfo[0]['fact_size'] == 500) {?>selected <?php } ?>>100 to 500 Square Meter</option>
	                                                    <option value="1000" <?php if($factoryinfo[0]['fact_size'] == 1000) {?>selected <?php } ?>>501 to 1000 Square Meter</option>
	                                                    <option value="2000" <?php if($factoryinfo[0]['fact_size'] == 2000) {?>selected <?php } ?>>1001 to 2000 Square Meter</option>
	                                                    <option value="2100" <?php if($factoryinfo[0]['fact_size'] == 2100) {?>selected <?php } ?>>More Than 2000 Square Meter</option>
	                                                </select>
												</div>
												<div class="messageContainer"></div>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<div class="control-label label-text-form">No. Of Production line </div>
											</div>
										</div>
										<div class="col-sm-1">
											<div class="form-group">
												<div class="label-text-input">
	                                                <input type="text" name="data[no_of_production_line]" id="no_of_production_line" class="form-control form-custom-input" value="<?php echo $factoryinfo[0]['no_of_production_line'];?>"/>
												</div>
												<div class="messageContainer"></div>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<div class="control-label label-text-form">Production Lead Time </div>
											</div>
										</div>
										<div class="col-sm-1">
											<div class="form-group">
												<div class="label-text-input">
	                                                <input type="text" name="data[production_lead_time]" id="production_lead_time" class="form-control form-custom-input" value="<?php echo $factoryinfo[0]['production_lead_time'];?>"/>
												</div>
												<div class="messageContainer"></div>
											</div>
										</div>
										<div class="col-sm-1">
											<div class="form-group">
												<div class="label-text-input">
	                                                <span>Days</span>
												</div>
												<div class="messageContainer"></div>
											</div>
										</div>
						  			</div>
				  					<div class="row info-row">
						  				<div class="col-sm-2">
											<div class="form-group">
												<div class="control-label label-text-form">No. Of Research & Development Staff </div>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<div class="label-text-input">
	                                                <input type="text" name="data[no_of_rnd_staff]" id="r_d_staff" class="form-control form-custom-input" value="<?php echo $factoryinfo[0]['no_of_rnd_staff'];?>"/>
												</div>
												<div class="messageContainer"></div>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<div class="control-label label-text-form">No. Of Quality Control Staff </div>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<div class="label-text-input">
	                                                <input type="text" name="data[no_of_control_staff]" id="quality_control_stff" class="form-control form-custom-input" value="<?php echo $factoryinfo[0]['no_of_control_staff'];?>"/>
												</div>
												<div class="messageContainer"></div>
											</div>
										</div>
						  			</div>
						  			<div class="row info-row">
						  				<div class="col-sm-2">
											<div class="form-group">
												<div class="control-label label-text-form">R&D Capacity </div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<div class="label-text-input">
													<?php foreach ($rnd_type as $row) { print_R($row);?>
	                                                   	<input name="rndtype[]"  onclick="otherfield(<?php echo $row['id'];?>);"   value="<?php echo $row['id']?>" class="rndcap" type="checkbox"
	                                                   	<?php $keyrnd = in_array($row['id'],array_column($user_rnd,'rnd_type_id'));
	                                                   		if($keyrnd!= false) { ?>
																		checked
															<?php  }  ?>>   <?php echo $row['name']?>
	                                                <?php } ?>
												</div>
												<div class="messageContainer"></div>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="form-group">
												<div class="label-text-input">
	                                                <input type="text" name="data[rnd_capacity]" id="other_r_d_capacity" class="form-control form-custom-input" <?php if($factoryinfo[0]['rnd_capacity']=="") { ?>style="display: none;" <?php } ?>  value="<?php echo $factoryinfo[0]['rnd_capacity'];?>"/>
												</div>
												<div class="messageContainer"></div>
											</div>
										</div>
						  			</div>
						  			<div class="row info-row">
						  				<div class="col-sm-2">
											<div class="form-group">
												<div class="control-label label-text-form">Annual Turnover </div>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<div class="label-text-input">
													<input type="text" name="data[annual_turnover]" id="annual_turnover" class="form-control form-custom-input" value="<?php echo $factoryinfo[0]['annual_turnover'];?>"/>
												</div>
												<div class="messageContainer"></div>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<div class="control-label label-text-form">Million USD </div>
											</div>
										</div>
						  			</div>
						  		</div>
						  		<br><br><br>
						  		<br><br><br>
						  		<br><br><br>
					  		</div>
			  		</div>
			  	</div>
			  </form>		
			  
<script>
  function otherfield(id)
  {
	  var checkboxes = document.getElementsByName('rndtype[]');
	  var vals = "";
	  //for (var i=0, n=checkboxes.length;i<n;i++) 
	  //{
		 //var vals = checkboxes[id].value;
		 
		if(id == 4)
		{
		      if (checkboxes[id-1].checked) 
		      {
		    	  document.getElementById('other_r_d_capacity').style.display = 'block';
			  	  document.getElementById('other_r_d_capacity').value = "";
		      } else {
		    	  document.getElementById('other_r_d_capacity').style.display = 'none';
			  		document.getElementById('other_r_d_capacity').value = "";
		      }
		}
	  //}
  } 
  
</script>