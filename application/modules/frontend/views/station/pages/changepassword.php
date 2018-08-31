<link href="<?php echo asset_url(); ?>css/bootstrap.css" rel="stylesheet">
<style>
#categoryImg {
    border: 0px #000000 solid;
    left: 0;
    top: 0;
    width: 13%;
}
.form-group {
  margin-bottom: 0;
}
.myaccount {
	 min-height: 100px;
	overflow: scroll;
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
.top-buffer { margin-top:24px;margin-bottom:30px; }
</style>


<div id="wb_Form5" class="myaccount">
	<form name="frmchangepassword" method="post" action="" enctype="multipart/form-data" id="frmchangepassword">
	<div class="myaccount_main">
		<div class="myaccount_submain">
				<div class="row top-buffer " >
					<div class="col-md-12">
                   			<div class="col-md-6">
                        		<div class="form-group" id="error-locality" >
                        			<span class="myaccount_title" >Enter Your Current Password</span>
								</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group" id="error-locality">
                        			<input id="oldpassword" type="password"  name="data[oldpassword]" class="form-control" autocomplete="new-password" />
								</div>
								<div class="messageContainer"></div>
                        	</div>
                        </div>
				</div>
				<div class="row top-buffer " >
					<div class="col-md-12">
                   			<div class="col-md-6">
                        		<div class="form-group" id="error-locality" >
                        			<span class="myaccount_title" >Enter New Password</span>
								</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group" id="error-locality">
                        			<input id="password" type="password"  name="data[text_password]" class="form-control"  autocomplete="new-password"/>
								</div>
								<div class="messageContainer"></div>
                        	</div>
                        </div>
				</div>
				<div class="row top-buffer " >
					<div class="col-md-12">
                   			<div class="col-md-6">
                        		<div class="form-group" id="error-locality" >
                        			<span class="myaccount_title" >Enter New Password for confirmation</span>
								</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group" id="error-locality">
                        			<input type="password" name="confirm_password" equalTo="#password1" class="form-control" autocomplete="new-password"/>
								</div>
								<div class="messageContainer"></div>
                        	</div>
                        </div>
				</div>
				<div class="row top-buffer " >
					<div class="col-md-12">
                   			<div class="col-md-6">
                        		<div class="form-group" id="error-locality" style="float: right;" >
                        			<button type="button" class="btn btn-primary" name="btn_next" id="btn_next">Save</button>
								</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="form-group" id="error-locality">
                        			<button type="button" class="btn btn-primary" onclick="getMyAccount();">Cancel</button>
								</div>
                        	</div>
                        </div>
				</div>
				<div class="row" style="padding-bottom:22px;" >
					<div class="col-xs-12" style="line-height: 0.7;text-align: center;">
						<h2 >
							<!--<span
								style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Vcommers</span><br>-->
							<span
								style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">VCOMMERS</span>
						</h2>
						<p >
							<span
								style="color: #696969; font-family: Arial; font-size: 11px;">Generating customer every second<br>
							</span>
						</p>
					</div>
				</div>
		</div>
		</div>
<!-- 						<div id="wb_Text392" class="wb_text_392"> -->
<!-- 			<span class="layer162_wb_span">Company Name </span> -->
		
	</form>
</div>
<div id="Layer163" class="mystation_layer163" >
	<div id="wb_Text457" class="wb_text_457" > &nbsp;</div>
	<div id="wb_Text390" class="wb_text_390" >
		<span style="color: #FFFFFF; font-family: Arial; font-size: 24px;"><strong>CHANGE PASSWORD</strong></span>
	</div>
	<div id="wb_Shape298" class="wb_shape_298" >
		<img src="<?php echo asset_url();?><?php echo $profile_img;?>" class="img-circle"  id="Shape298" alt="" style="width: 100px; height: 100px;">
	</div>
</div>
<div id="wb_Image86" class="wb_img_86" >
	<a href="#" onclick="ShowObjectWithEffect('Layer162', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');return false;">
		<img src="<?php echo asset_url();?>images/closeround.png" id="Image86" alt="">
	</a>
</div>

<script src="<?php echo asset_url(); ?>js/bootstrap.js"></script>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script>
$(document).ready(function () {
    $("#btn_next").click(function () {
        $('#frmchangepassword').bootstrapValidator('validate');
    });
    //ValidateIt();
});


		$('#frmchangepassword').bootstrapValidator({
			 container: function($field, validator) {
		      	return $field.parent().next('.messageContainer');
		      },
		     feedbackIcons: {
		         validating: 'glyphicon glyphicon-refresh'
		     },
		     excluded: ':disabled',
		     fields: {
		    	 'data[oldpassword]': {
		             validators: {
		                 notEmpty: {
		                     message: 'The OldPassword is required and cannot be empty'
		                 }
		             }
		         },
		         'data[text_password]': {
		             validators: {
		                 notEmpty: {
		                     message: 'The NewPassword is required and cannot be empty'
		                 }
		             }
		         },
		         confirm_password: {
		             validators: {
		                 notEmpty: {
		                     message: 'The ConfirmPassword is required and cannot be empty'
		                 },
		                 identical: {
		                     field: 'data[text_password]',
		                     message: 'The password and its confirm must be the same'
		                 }
		             }
		         }
		     }
		}).on('success.form.bv', function(e) {
		    // Prevent form submission
		    e.preventDefault();
		    updateUserPassword();
		});
	
		function updateUserPassword() {
			var options = {
		 			target : '#response', // target element(s) to be updated with server response 
		 			beforeSubmit : showChangePasswordRequest, // pre-submit callback 
		 			success :  showChangePasswordResponse,
		 			url : base_url+'mystation/editpassword',
		 			semantic : true,
		 			dataType : 'json'
		 		};
				$('#frmchangepassword').ajaxSubmit(options);
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
				alert(resp.msg);
				getChangepassword();
		   	} else {
		    	$("#response").addClass('alert-success');
		    	$("#response").html(resp.msg);
		    	$("#response").show();
		    	alert(resp.msg);
		    	getMyAccount();
		    	//window.location.reload();
		  	}
		}
</script>