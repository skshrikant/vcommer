<div class="modal-header text-center" style="background:url(<?php echo asset_url(); ?>images/ts/hiker-984083_1920.jpg) no-repeat center center; background-size:cover;padding: 8% 15px;">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="top: -11px; position: absolute; right: -15px; opacity: 1;">
		<img src="<?php echo asset_url(); ?>images/ts/close_deal.png" style="width: 30px;">
	</button>
	<p style="color: #fff; padding: 0 70px;">
		<span style="color: #FFFFFF; font-family: Arial; font-size: 13px;">
			Get started, Join free, Add a unique value to your business, discover a new vision of e-commerce and much more..!
		</span>
	</p>
	<h4 class="modal-title" id="myModalLabel" style="color: #fff;">
		<span style="color: #FFFFFF; font-family: 'Arial'; font-size: 17px; font-weight: bolder;">SOCIAL B2B COMMUNITY</span>
	</h4>
</div>
<div class="modal-body" id="otp_screen_frm">
	<div class="panel second-step">
		<div class="panel-body">
			<form>
				<h1 class="text-center">
					<span style="color: #2D2D2D; font-family: Arial; font-size: 24px;">Thank You</span>
				</h1>
				<p class="text-center">
					<span style="color: #696969; font-family: Arial; font-size: 11px;">
						Your&nbsp; Trade Station ID has been sent to your email, please check and paste the verification code below to activate your account<br>
					</span>
				</p>
				<div class="form-group">
					<div class="row" style="margin: 0px">
						<table class="col-sm-10 col-sm-offset-1">
							<tr>
								<td class="col-xs-1" style="vertical-align: top; padding-top: 14px">
									<span style="color: #FF0004; font-size: 16px; text-align: right;">*</span>
								</td>
								<td class="col-xs-9" style="vertical-align: middle;">
									<div class="row">
										<div class="col-xs-3">
											<input class="input-box inputs form-control text-center" type="text" id="activationCode1" placeholder="." maxlength="1" name="chars[1]">
										</div>
										<div class="col-xs-3">
											<input class="input-box inputs form-control text-center" type="text" id="activationCode2" placeholder="." maxlength="1" name="chars[2]">
										</div>
										<div class="col-xs-3">
											<input class="input-box inputs form-control text-center" type="text" id="activationCode3" placeholder="." maxlength="1" name="chars[3]">
										</div>
										<div class="col-xs-3">
											<input class="input-box inputs form-control text-center" type="text" id="activationCode4" placeholder="." maxlength="1" name="chars[4]">
										</div>
										<p class="text-center">
											<span style="color: #A9A9A9; font-family: Arial; font-size: 9.3px;">Past the verification code sent to your email</span>
										</p>
									</div>
								</td>
								<td class="col-xs-1 text-center" style="vertical-align: top; padding-top: 10px;display:none;" id="ActivationcodeCorrectImg">
									<img src="<?php echo asset_url(); ?>images/ts/tick-octagon-frame.png">
								</td>
								<td class="col-xs-1 text-center" style="vertical-align: top; padding-top: 10px; display: none;" id="ActivationcodeCrossImg">
									<img src="<?php echo asset_url(); ?>images/Error.png" style="height: 20px;">
								</td>
							</tr>
							<tr>
								<td class="col-xs-1" style="vertical-align: middle;">
									<span style="color: #FF0004; font-size: 16px; text-align: right;">*</span>
								</td>
								<td class="col-xs-9" style="vertical-align: middle;">
									<div class="row">
										<div class="col-xs-12">
											<input class="input-box form-control text-center" type="password" placeholder="Set your password" id="registrationPassword" name="registrationPassword" onkeyup="validatePasswordStrength(this.value);">
										</div>
									</div>
								</td>
								<td class="col-xs-2 text-center" style="vertical-align: middle; position: relative">
									<span style="color: #3C3C3C; font-family: Arial; font-size: 11px; position: absolute; left: 0px; top: 10px;display:none;" id="pass-indicator">
										Strength : <span style="color: red; font-family: Arial; font-size: 11px; font-weight: bold; position: absolute; right: -40px;top:0px;" id="strength">...</span>
									</span>
								</td>
							</tr>
							<tr>
								<td class="col-xs-1" style="vertical-align: middle;">
									<span style="color: #FF0004; font-size: 16px; text-align: right;">*</span>
								</td>
								<td class="col-xs-9" style="vertical-align: middle;">
									<div class="row">
										<div class="col-xs-12">
											<input class="input-box form-control text-center" type="password" placeholder="Confirm Password" name="registrationConfirmPassword" id="registrationConfirmPassword" onkeyup="validateConfirmPassword(this.value);">
										</div>
									</div>
								</td>
								<td class="col-xs-1 text-center" style="vertical-align: top; padding-top: 10px;display:none;" id="ConfirmpassCorrectImg">
									<img src="<?php echo asset_url(); ?>images/ts/tick-octagon-frame.png">
								</td>
								<td class="col-xs-1 text-center" style="vertical-align: top; padding-top: 10px; display: none;" id="ConfirmpassCrossImg">
									<img src="<?php echo asset_url(); ?>images/Error.png" style="height: 20px;">
								</td>
							</tr>
							<tr>
								<td class="col-xs-1" style="vertical-align: top;padding-top: 5px;">
									<a href='javascript:refreshcaptcha();' class='refresh'> 
										<i class="fa fa-refresh fa-2x"></i>
									</a>
								</td>
								<td class="col-xs-9" style="vertical-align: middle;">
									<div class="row">
										<div class="col-xs-6">
											<span><?php echo $captcha['image'];?></span> &nbsp; 
										</div>
										<div class="col-xs-6">
											<input class="input-box form-control text-center" id="entercaptcha" type="text" value="" name="entercaptcha" placeholder="Captcha" onkeyup="validateCaptchaInput(this.value);">
										</div>
										<p class="text-center col-xs-12">
											<span style="color: #A9A9A9; font-family: Arial; font-size: 9.3px;">Enter what you see in picture</span>
										</p>
									</div>
								</td>
								<td class="col-xs-1 text-center" style="vertical-align: top; padding-top: 10px;display:none;" id="captchaCorrectImg">
									<img src="<?php echo asset_url(); ?>images/ts/tick-octagon-frame.png">
								</td>
								<td class="col-xs-1 text-center" style="vertical-align: top; padding-top: 10px; display: none;" id="captchaCrossImg">
									<img src="<?php echo asset_url(); ?>images/Error.png" style="height: 20px;">
								</td>
							</tr>
							<tr>
								<td colspan="3" class="text-center">
									<input type="button" id="Button3" onclick="registerStepSecond();return false;" name="" value="Activate" style="width: 178px; height: 31px;">
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<!--<h2 class="text-center" style="line-height: 0.7">
							<span style="color: #3C3C3C; font-family: Arial; font-size: 11px;">TRADE</span><br>
							<span style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">STATION</span>
						</h2>-->
						<p class="text-center">
							<span style="color: #696969; font-family: Arial; font-size: 11px;">
								Generating Customers Each Second<br>
							</span>
						</p>
					</div>
				</div>
			</form>
			<input type="hidden" id="userId" value="<?php echo $userid;?>"> 
			<input type="hidden" name="busi_id" id="busi_id" value="<?php echo $busi_id;?>"> 
			<input type="hidden" name="is_secure" id="is_secure" value="<?php echo $this->session->userdata('signupcaptcha');?>" class="form-control" />
		</div>
	</div>
</div>

