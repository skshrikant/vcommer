<style>
.messageContainer {
	margin-left: 146px;
}
.btn-user-custom:hover {
	color:white;
}
</style>
				<form name="frmsubuser" method="post" action="" enctype="multipart/form-data" id="frmsubuser">
					<div class="panel-heading custom-panel-heading">
			  			<label style="color:#1E90FF;font-family:Arial;font-size:21px;padding-top: 0px;"><span style="font-size:28px;"><?php echo count($subuser);?></span> Users</label>
			  			<label style="color:#808080;font-family:Arial;font-size:19px;padding-top: 10px;"> | </label>
			  			<label style="color:#808080;font-family:Arial;font-size:19px;padding-top: 10px;">Remains <?php echo $max_subuser-count($subuser); ?></label>
			  			<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer164', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
			  		</div>
			  		<div class="panel-body panel-body-custom" id="">
			  		<div class="edit-div">
					<div class="col-sm-12">
						<div class="col-sm-12">
							<div style="padding-top: 40px;">&nbsp;</div>
							<div class="row info-row">
								<div class="col-sm-8 label-text" style="font-size: 22px;">
									Sub Users Accounts
								</div>
								<div class="col-sm-8 label-text-form" style="font-size:13px;">
									For more sercurity, we not allow members Double Login " Log in The Trade Station Account from 2 devices at the same time".
									In case you require to add more users " Sub Users Account" to login your account at the same time, for uploading and building your site more faster, please click on "Create New Sub User Account" link then type " the user name and password".
									Once you have created " User Account ", you will be able to delete or suspense it any time .
								</div>
								<div class="col-sm-8 label-text-form" style="font-size:13px;">
									Note: Sub Users will not be able to delete, change account name or password or create new users.
								</div>
								<br><br>
								<div class="col-sm-12"><br><br></div>
								<?php  $i = 1;
								foreach ($subuser as $row) { ?>
									<div class="col-sm-12">
										<div class="col-sm-12" style="background-color:#fff;padding:15px;">
											<div class="col-sm-2"><span style="color:#1E90FF;font-family:Arial;font-size:15px;"><strong><?php echo $row['name'];?></strong></span></div>
											<div class="col-sm-2">Station ID</div>
											<div class="col-sm-4"><?php echo $row['email'];?></div>
											<div class="col-sm-4">
												<?php if($row['is_suspend'] == 1) { ?>
													<a href="javascript:allowsubuser(<?php echo $row['id'];?>);" class="btn btn-sm btn-user-custom">Allow</a>
												<?php } else { ?>
													<a href="javascript:suspendsubuser(<?php echo $row['id'];?>);" class="btn btn-sm btn-user-custom">Suspend</a>
												<?php } ?>	
												<a href="javascript:deletesubuser(<?php echo $row['id'];?>);" class="btn btn-sm btn-user-custom">Delete</a>
											</div>
											<div class="col-sm-2"><span><strong><?php //echo $row['name']?></strong></span></div>
											<div class="col-sm-2">Password</div>
											<div class="col-sm-4"><?php echo $row['text_password'];?></div>
										</div>
									</div>
								<?php $i++; } ?>
								<?php if(count($subuser) < $max_subuser) {  ?>
								<div class="col-sm-12">
									<div class="col-sm-12">
										<div class="col-sm-12">
											<br>
											<a href="#" data-toggle="modal" data-target="#subuserModal" style="color: #1E90FF;font-size:16px;">Create New Sub User Account</a>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
						<br>
						<br>
						<br> <br>
						<br>
						<br> <br>
						<br>
						<br>
					</div>
				</div>
				</div>	
				</form>
		
<div id="subuserModal" class="modal fade" role="dialog">
  	<div class="modal-dialog" style="width:431px;padding-top:15%;">
    	<div class="modal-content">
      		<div class="modal-header" style="background-color: #FF6347;padding: 8px;text-align: center;">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title" style="color:#FFFFFF; font-family:Georgia;font-size:21px;font-style:normal;text-align:center;">Add New Sub User</h4>
      		</div>
      		<div class="modal-body" style="background-color: #FAFAFA;">
      		<form name="frmaddsubuser" method="post" action="" enctype="multipart/form-data" id="frmaddsubuser">
        			<div class="row">
	        			<div class="col-sm-12" style="margin-bottom:5px;">
	        				<div class="form-group">
	        					<div class="control-label label-text-form col-sm-4">User Name</div>
								<div class="label-text-input col-sm-8">
	                            	<input type="text" name="data[subusername]" id="subusername"  onkeypress="remove_error();" placeholder="User Name" class="form-control form-custom-input" value=""/>
								</div>
								<div class="messageContainer"></div>
								<div id="subuserEmailErrMsg"></div>
							</div>
	        			</div>
	        			<div class="col-sm-12" style="margin-bottom:5px;">
	        				<div class="form-group">
	        					<div class="control-label label-text-form col-sm-4">User Email </div>
								<div class="label-text-input col-sm-8">
	                            	<input type="text" name="data[name]" id="subuseremail"  onkeypress="remove_error();" placeholder="User Email" class="form-control form-custom-input" value=""/>
								</div>
								<div class="messageContainer"></div>
								<div id="subuserEmailErrMsg"></div>
							</div>
	        			</div>
	        			<div class="col-sm-12" style="margin-bottom:5px;">
	        				<div class="form-group">
	        					<div class="control-label label-text-form col-sm-4">Password </div>
								<div class="label-text-input col-sm-8">
	                            	<input type="password" name="data[password]"  placeholder="Password" id="subuserpassword" class="form-control form-custom-input" value=""/>
								</div>
								<div class="messageContainer"></div>
							</div>
	        			</div>
	        			<div class="col-sm-12" style="margin-bottom:15px;">
	        				<div class="form-group">
	        					<div class="control-label label-text-form col-sm-4">Confirm Password</div>
								<div class="label-text-input col-sm-8">
	                            	<input type="password" name="subusercpassword"  placeholder="Confirm Password"  id="subusercpassword" class="form-control form-custom-input" value=""/>
								</div>
								<div class="messageContainer"></div>
							</div>
	        			</div>
	        			<div class="col-sm-12" style="margin-bottom:15px;">
	        				<div class="form-group">
								<div class="label-text-input col-sm-12 text-right">
	                            	<input type="submit" class="btn btn-sm btn-user-custom" value="Create"/>
	                            	<input type="button" class="btn btn-sm btn-user-custom" data-dismiss="modal" value="Reset"/>
								</div>
							</div>
	        			</div>
        			</div>
        		</form>
      		</div>
    	</div>
  	</div>
</div>
<script>
function remove_error()
{
	document.getElementById('subuserEmailErrMsg').innerHTML = "";
	 $('#subusername').css('border', '1px solid #ccc');
}

</script>