<?php if($tsuserid < 0) { 
		redirect(base_url());
 } ?>
<style>
.myaccountimg {
	border: solid !important;
    border-color: rgba(128, 128, 128, 0.56)!important;
    border-radius: 73px !important;
    outline:none !important;
}
#categoryImg {
    border: 0px #000000 solid;
    left: 0;
    top: 0;
    width: 13%;
}
.myaccount_formgroup {
  margin-bottom: 0;
}
.myaccount_row {
padding-bottom: 6px !important;
}
.myaccount {
	 min-height: 100px;
	 overflow: hidden;
}
.myaccount_main {
	position: absolute;  top: 172px;
	 text-align: left;margin-left: auto;
	 margin-right: auto; left: 0; right: 0;
}
.myaccount_submain {
	padding-left: 30px;padding-right:30px;
}
.myaccount_maintitle
{
	color: #2D2D2D; font-family: Arial; font-size: 20px;
}
.myaccount_title {
	color: #808080; font-family: Arial; font-size: 12px;
}
.myaccount_titlevalue {
	color: #2D2D2D; font-family: Arial; font-size: 12px;
}

input.imgInp {
                display: inline-block;
                width: 100%;
                padding: 120px 0 0 0;
                height: 100px;
                overflow: hidden;
                /*-webkit-box-sizing: border-box;*/
                /*-moz-box-sizing: border-box;*/    
                box-sizing: border-box;
                background: url('<?php echo asset_url(); ?>images/ts/img1186.png') center center no-repeat ;
                /*border-radius: 20px;*/
                /*background-size: 150px 100px;*/
            }
</style>


<div id="wb_Form5" class="myaccount">
	<form name="myaccount_frm" method="post" action="" enctype="multipart/form-data" id="Form5">

	<div class="myaccount_main">
		<div class="myaccount_submain">
			<div>
				<div class="row myaccount_row" >
					<div class="col-md-12">
							<div class="col-md-2">
                        		<div class="form-group myaccount_formgroup" id="error-address">
                        			<label for="inputCity" class="control-label"></label>
                        			
								</div>
                        	</div>
                   			<div class="col-md-4">
                        		<div class="form-group myaccount_formgroup" id="error-locality" >
                        			<span class="myaccount_title" >Account Type</span>
								</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<img src="<?php echo asset_url();?>images/seller.png" id="categoryImg" alt=""><span class="myaccount_titlevalue"><?php echo $tscategory;?></span>
								</div>
                        	</div>
                        </div>
					</div>
					<div class="row myaccount_row" >
					<div class="col-md-12">
							<div class="col-md-2">
                        		<div class="form-group myaccount_formgroup" id="error-address">
                        			<label for="inputCity" class="control-label"></label>
                        			
								</div>
                        	</div>
                   			<div class="col-md-4">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span class="myaccount_title" >Business Type</span>
								</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span class="myaccount_titlevalue"><?php echo $tssubcategory;?></span>
								</div>
                        	</div>
                        </div>
					</div>
					<div class="row myaccount_row" >
						<div class="col-md-12">
							<div class="col-md-2">
                        		<div class="form-group myaccount_formgroup" id="error-address">
                        			<label for="inputCity" class="control-label"></label>
								</div>
                        	</div>
                   			<div class="col-md-4">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span class="myaccount_title" >Station ID</span>
								</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span class="myaccount_titlevalue"><?php echo $tsemail;?></span>
								</div>
                        	</div>
                        </div>
					</div>
					<div class="row myaccount_row" >
						<div class="col-md-12">
							<div class="col-md-2">
                        		<div class="form-group myaccount_formgroup" id="error-address">
                        			<lable class="lable-control myaccount_maintitle" >Info.</lable>
								</div>
                        	</div>
                   			<div class="col-md-4">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span class="myaccount_title" >Password</span>
								</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<?php 
                        			$subpass="";
                        			$len=0;
                        			if(count($subuserdata) > 0)
                        			{
                        				$subpass =  substr($subuserdata[0]['text_password'],-3);
                        				$len = strlen($subuserdata[0]['text_password']); 
                        			} else {
                        				$subpass =  substr($userdata[0]['text_password'],-3);
                        				$len = strlen($userdata[0]['text_password']); 
                        			}
                        			$remainlen = $len-3;
                        			$starsting = "";
                        			for($i=0;$i<$remainlen;$i++)
                        			{
                        				$starsting = $starsting.'*';
                        			}
                        			?>
                        			<span class="myaccount_titlevalue"><?php echo $starsting.$subpass; ?></span>&nbsp;&nbsp;&nbsp;
                        			<a href="#"  onclick="getChangepassword();"  style="color: #1E90FF; font-family: Arial; font-size: 12px;"><u>Change</u></a>
								</div>
                        	</div>
                        </div>
					</div>
					<div class="row myaccount_row" >
						<div class="col-md-12">
							<div class="col-md-2">
                        		<div class="form-group myaccount_formgroup" id="error-address">
                        			<label for="inputCity" class="control-label"></label>
								</div>
                        	</div>
                   			<div class="col-md-4">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span class="myaccount_title" >Sub User</span>
								</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span class="myaccount_titlevalue">
                        			<?php if($max_subuser == 0) { 
                        				echo "N/A";
                        			 } else { ?>
                        				<?php echo count($subuser);?> Out Of <?php echo $max_subuser;?>
                        			<?php } ?></span>
								</div>
                        	</div>
                        </div>
					</div>
					<div class="row myaccount_row" >
						<div class="col-md-12">
							<div class="col-md-2">
                        		<div class="form-group myaccount_formgroup" id="error-address">
                        			<label for="inputCity" class="control-label"></label>
								</div>
                        	</div>
                   			<div class="col-md-4">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span class="myaccount_title" >Comapny Name</span>
								</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span class="myaccount_titlevalue"><?php echo $userdata[0]['company_name']?></span>
								</div>
                        	</div>
                        </div>
					</div>
					<div class="row myaccount_row" >
						<div class="col-md-12">
							<div class="col-md-2">
                        		<div class="form-group myaccount_formgroup" id="error-address">
                        			<label for="inputCity" class="control-label"></label>
								</div>
                        	</div>
                   			<div class="col-md-4">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span class="myaccount_title" >Registered Name</span>
								</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span class="myaccount_titlevalue"><?php echo $userdata[0]['name_prefix']." ".$userdata[0]['name']; ?></span>
								</div>
                        	</div>
                        </div>
					</div>
					<div class="row myaccount_row" >
						<div class="col-md-12">
							<div class="col-md-2">
                        		<div class="form-group myaccount_formgroup" id="error-address">
                        			<label for="inputCity" class="control-label"></label>
								</div>
                        	</div>
                   			<div class="col-md-4">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span class="myaccount_title" >Contact Person</span>
								</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span class="myaccount_titlevalue"><?php echo $contact_person;?></span>
								</div>
                        	</div>
                        </div>
					</div>
				</div>
				<br>
				<?php if($tscategory_id  == 3) { ?>
				<div class="row myaccount_row" >
						<div class="col-md-12">
							<div class="col-md-2">
                        		<div class="form-group myaccount_formgroup" id="error-address">
                        			<label for="inputCity" class="control-label"></label>
								</div>
                        	</div>
                   			<div class="col-md-4">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span class="myaccount_title" >Status</span>
								</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span class="myaccount_titlevalue">
                        				<?php $total =  $userdata[0]['accept_chat'] + $userdata[0]['accept_offer'] + $userdata[0]['accept_community'] + $userdata[0]['accept_email'] ;
                        				if($total == 4) { echo "Active"; } else { echo "Inactive" ; } ?>
                        			</span>
								</div>
                        	</div>
                        </div>
				</div>
				<?php } ?>
				<?php if($tscategory_id  != 3) { ?>
				<div>
					<div class="row myaccount_row" >
						<div class="col-md-12">
							<div class="col-md-2">
                        		<div class="form-group myaccount_formgroup" id="error-address">
                        			<label for="inputCity" class="control-label"></label>
								</div>
                        	</div>
                   			<div class="col-md-4">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span class="myaccount_title" >Member Plan</span>
								</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<?php if($tsplanid == 1) {  ?>
                        				<span class="myaccount_titlevalue"><strong>Free Member</strong></span>
                        			<?php } else { ?>	
	                        			<span class="myaccount_titlevalue"><strong>Black Horse</strong></span><br>
	                        			<span style="color: #FF8C00; font-family: Arial; font-size: 12px;"><strong>
	                        				<?php if($tsplanid == 2) {  echo "Basic"; } else if($tsplanid == 3) { echo "VIP"; } else { echo "Elite"; }?>
	                        			</strong></span>
	                        		<?php } ?>	
								</div>
                        	</div>
                        </div>
					</div>
				</div><br>	
				<div>
					<div class="row myaccount_row" >
						<div class="col-md-12">
							<div class="col-md-2">
                        		<div class="form-group myaccount_formgroup" id="error-address">
                        			<lable class="lable-control myaccount_maintitle"> Status</lable>
								</div>
                        	</div>
                   			<div class="col-md-4">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span class="myaccount_title" >Expire Date</span>
								</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span class="myaccount_titlevalue"><?php if($tsplanid == 1) { ?> N/A <?php } else {
                        				echo date('j M Y',strtotime($userdata[0]['expiry_date'])); } ?></span>
								</div>
                        	</div>
                        </div>
					</div>
					<div class="row myaccount_row" >
						<div class="col-md-12">
							<div class="col-md-2">
                        		<div class="form-group myaccount_formgroup" id="error-address">
                        			<label for="inputCity" class="control-label"></label>
								</div>
                        	</div>
                   			<div class="col-md-4">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span class="myaccount_title" >Days In Remaining</span>
								</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group myaccount_formgroup" id="error-locality">
                        			<span style="color: red; font-family: Arial; font-size: 12px;">
	                        			<?php 
	                        			if($tsplanid != 1) {
		                        			$date1= date('Y-m-d');
		                        			$date2  = date('Y-m-d',strtotime($userdata[0]['expiry_date']));
		                        			if($date2 > $date1) { 
			                        			$date1=date_create($date1);
			                        			$date2=date_create($date2);
			                        			$diff=date_diff($date1,$date2);
			                        			echo $diff->format("%a days");
		                        			} else {
		                        				echo "0 days";
		                        			}
	                        			} else {
	                        				echo "N/A";
	                        			}
	                        			
	                        			?>
                        			</span>
								</div>
                        	</div>
                        </div>
					</div>
				</div>
			<?php } ?>	
				<br>	 
				<div class="row myaccount_row"  >
					<div class="col-md-12">
						<?php if($tscategory_id == 3) { ?>
						<div class="col-sm-1">&nbsp;</div>
						<?php } ?>
						<div class="col-md-3">
                        	<div class="form-group myaccount_formgroup" id="error-locality">
                        		<a href="javascript:viewMyAccountInfo();" style="text-decoration:none;">
									<div id="Shape293" style="padding-top:7px;">
										<div style="text-align: center;">
											<span style="color: #FFFFFF; font-family: Arial; font-size: 12px;" >VIEW | EDIT</span>
										</div>
									</div>
								</a>
							</div>
                        </div>
                        <?php if($tscategory_id == 1 || $tscategory_id == 2) { ?>
						<div class="col-md-3">
                        	<div class="form-group myaccount_formgroup"  id="error-address">
                        		<a href="#" <?php if($tsuser_role == 1) { ?> onclick="getMyPackages();ShowObject('Layer162', 0);"  <?php } ?> style="text-decoration:none;">
									<div id="Shape293" style="padding-top:7px;">
										<div style="text-align: center;">
											<span style="color: #FFFFFF; font-family: Arial; font-size: 12px;">UPGRADE</span>
										</div>
									</div>
								</a>
							</div>
                        </div>
                        <?php } ?>
                        <?php if($tsuser_role == 1) { ?>
                        <div class="col-md-3">
                        	<div class="form-group myaccount_formgroup" id="error-locality">
                        		<a href="javascript:deleteBusinessAccount();"  style="text-decoration:none;">
									<div id="Shape293" style="padding-top:7px;">
										<div style="text-align: center;">
											<span style="color: #FFFFFF; font-family: Arial; font-size: 12px;">DELETE</span>
										</div>
									</div>
								</a>
							</div>
                        </div>
                        <?php } ?>  
                        <div class="col-md-3">
                        	<div class="form-group myaccount_formgroup" id="error-locality">
                        		<?php $is_disable = $this->session->userdata('is_disable');?>
                        		<a <?php if($tsuser_role == 1) { ?> href="javascript:disableBusinessAccount(<?php echo $is_disable; ?>);"  <?php } ?> style="text-decoration:none;">
									<div id="Shape293" style="padding-top:7px;">
										<?php if($this->session->userdata('is_disable') == 0) { ?>
											<div style="text-align: center;">
												<span style="color: #FFFFFF; font-family: Arial; font-size: 12px;">DISABLE</span>
											</div>
										<?php } else { ?>
											<div style="text-align: center;">
												<span style="color: #FFFFFF; font-family: Arial; font-size: 12px;">ENABLE</span>
											</div>
										<?php } ?>	
									</div>
								</a>
							</div>
                        </div>
                  	</div>
				</div>
				<div class="row myaccount_row" style="padding-bottom:22px;" >
					<div class="col-xs-12" style="line-height: 0.7;text-align: center;padding-top: 10px;">
						<h2>
							<!--<span style="color: #3C3C3C; font-family: Arial; font-size: 11px;">TRADE</span><br>-->
							<span style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">VCOMMERS</span>
						</h2>
						<p>
							<span style="color: #696969; font-family: Arial; font-size: 11px;">Generating
								customer every second<br>
							</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<div id="Layer163" class="mystation_layer163" style="background-color:#333333;">
	<div id="wb_Text457" class="wb_text_457" > &nbsp;</div>
	<div id="wb_Text390" class="wb_text_390" >
		<span style="color: #FFFFFF; font-family: Arial; font-size: 24px;"><strong>MY ACCOUNT</strong></span>
	</div>
	<div id="wb_Shape298" class="wb_shape_298" >
		<img src="<?php echo asset_url().$profile_img;?>" id="Shape298" alt="" class="img-circle myaccountimg"  style="width: 100px; height: 100px;">
	</div>
</div>
<div id="wb_Image86" class="wb_img_86" >
	<a href="#" onclick="ShowObjectWithEffect('Layer162', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');return false;">
		<img src="<?php echo asset_url();?>images/closeround.png" id="Image86" alt="">
	</a>
</div>


