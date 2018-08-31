function pasteValues(element) {
    var values = element.split("");
    $(values).each(function(index) {
        var $inputBox = $('.inputs[name="chars[' + (index + 1) + ']"]');
        $inputBox.val(values[index]);
    });
    checkValidOTPInputs();
}

function checkValidOTPInputs() {
	var count = 0;
	$( ".inputs" ).each(function( index ) {
		if($(this).val() != "") {
			count++;
		}
	});
	if(count == 4) {
		$('#ActivationcodeCorrectImg').show();
        $('#ActivationcodeCrossImg').hide();
	} else {
		$('#ActivationcodeCorrectImg').hide();
        $('#ActivationcodeCrossImg').show();
	}
}

function validateEmail(emailField,mainemail) {
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (reg.test(emailField) == false)
    {
        $('#emailCorrectImg').hide();
        $('#emailCrossImg').show();
        return false;
    } else {
    	if(emailField == mainemail) {
    		$('#emailCorrectImg').hide();
            $('#emailCrossImg').show();
            alert('Alternate email id should not same as main email id.')
    		 return false;
    	} else {
	        $('#emailCrossImg').hide();
	        $('#emailCorrectImg').show();
    	}
    }

    return true;
}

function validateName(name) {
    var regex = /^[a-zA-Z\s]+$/;
    if (name.length < 3) {
        $('#fullNameCorrectImg').hide();
        $('#fullNameCrossImg').show();
        $('#fullName').css('border', '1px solid red');
        $('#registrationFullNameErrMsg').html('Please enter name.');
        $('#registrationFullNameErrMsg').show();
        return false;
    } else if (regex.test(name)) {
        $('#fullNameCorrectImg').show();
        $('#fullNameCrossImg').hide();
        $('#fullName').css('border', '');
        $('#registrationFullNameErrMsg').hide();
        return true;
    } else {
        $('#fullNameCrossImg').hide();
        $('#fullNameCorrectImg').show();
        $('#fullName').css('border', '');
        $('#registrationFullNameErrMsg').hide();
    }
    return true;
}
function forgetpassword()
{
	ajaxindicatorstart("Please wait .. Sending reset password email ...");
	var email;
	email = $('#forgotemail').val();
	reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  	if (email == '' || typeof email == 'undefined') {
        $('#forgotemail').focus();
        $('#forgotemail').css('border', '1px solid red');
        $('#forgotEmailErrMsg').html('Please enter email.').css('font-weight', 'bold').css('padding-bottom', '5px');
        $('#forgotEmailErrMsg').show();
        ajaxindicatorstop();
        return false;
    } else if (reg.test(email) == false) {
        $('#forgotemail').focus();
        $('#forgotemail').css('border', '1px solid red');
        $('#forgotEmailErrMsg').html('Please enter right email.').css('font-weight', 'bold').css('padding-bottom', '5px');
        $('#forgotEmailErrMsg').show();
        ajaxindicatorstop();
        return false;
    } else {
        $('#forgotEmailErrMsg').hide();
        $('#registrationEmail').css('border', '1px solid #ccc');
    }
  	checkEmail = checkEmailExist(email);
    if (!jQuery.isEmptyObject(checkEmail) && $.trim(checkEmail) != 'null') {
     	$('#forgotEmailErrMsg').hide();
        $('#registrationEmail').css('border', '1px solid #ccc');
    } else {
    	$('#forgotemail').focus();
        $('#forgotemail').css('border', '1px solid red');
        $('#forgotEmailErrMsg').html('Please enter your registered Email ID').css('font-weight', 'bold').css('padding-bottom', '5px');
        $('#forgotEmailErrMsg').show();
        ajaxindicatorstop();
        return false;
    }
    
    $.ajax({
        url: base_url + "account/forgotemail",
        type: "post",
        data: {"email": email},
        success: function (response) {
             if(response == 'sent') {
            $('#forgotEmailsuccessMsg').html('');
        	$('#forgotEmailsuccessMsg').show();
        	$("#recovery-message").show();
            if (window.confirm('A password retrieve code has been sent to your email please check your inbox or junk folder')) {
                $(".retrievePassword").show();
                $(".PasswordRecovery1_button").attr("onclick","return retrievePassword();");
            }
        	
		} else {
			$('#forgotEmailsuccessMsg').html('Error while sending Email.Please try after sometime.');
        	$('#forgotEmailsuccessMsg').show();
			$('#forgotEmailsuccessMsg').css('color', 'red').css('font-weight', 'bold');
		}
		ajaxindicatorstop();
        }
    })
	   
}

function registerStepOne() {
	myloadingstart('reg_frm');
    var buisnessType;
    var name;
    var email;
    var category;
    var namePrefix;
    var reg;
    var checkEmail;
    name = $('#fullName').val();
    email = $('#registrationEmail').val();
    category = $('input[name=category]:checked').val();
    namePrefix = $('#prefix').val();
    reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (name == '' || name == 'undefined') {
        $('#fullName').focus();
        $('#fullName').css('border', '1px solid red');
        $('#registrationFullNameErrMsg').html('Please enter name.');
        $('#registrationFullNameErrMsg').show();
        myloadingstop('reg_frm');
        return false;
    } else {
        $('#registrationFullNameErrMsg').hide();
        $('#fullName').css('border', '1px solid #ccc');
    }

    if (email == '' || typeof email == 'undefined') {
        $('#registrationEmail').focus();
        $('#registrationEmail').css('border', '1px solid red');
        $('#registrationEmailErrMsg').html('Please enter email.').css('font-weight', 'bold').css('padding-bottom', '5px');
        $('#registrationEmailErrMsg').show();
        myloadingstop('reg_frm');
        return false;
    } else if (reg.test(email) == false) {
        $('#registrationEmail').focus();
        $('#registrationEmail').css('border', '1px solid red');
        $('#registrationEmailErrMsg').html('Please enter right email.').css('font-weight', 'bold').css('padding-bottom', '5px');
        $('#registrationEmailErrMsg').show();
        myloadingstop('reg_frm');
        return false;
    } else {
        $('#registrationEmailErrMsg').hide();
        $('#registrationEmail').css('border', '1px solid #ccc');
    }

    checkEmail = checkEmailExist(email);
    if (!jQuery.isEmptyObject(checkEmail) && $.trim(checkEmail) != 'null') {
        $('#registrationEmail').focus();
        $('#registrationEmail').css('border', '1px solid red');
        $('#registrationEmailErrMsg').html('Email already exist.').css('font-weight', 'bold').css('padding-bottom', '5px');
        $('#registrationEmailErrMsg').show();
        myloadingstop('reg_frm');
        return false;
    } else {
        $('#registrationEmailErrMsg').hide();
        $('#registrationEmail').css('border', '1px solid #ccc');
    }
    if (category == '' || typeof category == 'undefined') {
        $('#registrationTypeErrMsg').html('Please select registration type.');
        $('#registrationTypeErrMsg').show();
        myloadingstop('reg_frm');
        return false;
    } else {
        $('#registrationTypeErrMsg').hide();
    }
    if (category != '' && category == 1) {

        buisnessType = $('#seller').val();
        if (buisnessType == '' || buisnessType == 0) {
            $('#seller').css('border', '1px solid red');
            myloadingstop('reg_frm');
            return false;
        } else {
            $('#seller').css('border', '1px solid #ccc');
        }
    }
    if (category != '' && category == 2) {
        buisnessType = $('#shipper').val();
        if (buisnessType == '' || buisnessType == 0) {
            $('#shipper').css('border', '1px solid red');
            myloadingstop('reg_frm');
            return false;
        } else {
            $('#shipper').css('border', '1px solid #ccc');
        }
    }
    if (category != '' && category == 3) {
        buisnessType = $('#buyer').val();
        if (buisnessType == '' || buisnessType == 0) {
            $('#buyer').css('border', '1px solid red');
            myloadingstop('reg_frm');
            return false;
        } else {
            $('#buyer').css('border', '1px solid #ccc');
        }
    }

    $.ajax({
        url: base_url + "account/stepone",
        type: "post",
        data: {"name": name, "email": email, 'category': category, 'subCategory': buisnessType, 'namePrefix': namePrefix},
        success: function (response) {
            $('#popup').html(response);
            myloadingstop('reg_frm');
            var intRegex = /^\d+$/;
            $(".inputs").on("input.fromManual", function(){
                if(!intRegex.test($(this).val())){
                    $(this).val("");
                } else {
                	if($(this).attr('id') == 'activationCode1') {
                		$("#activationCode2").focus();
                	} else if($(this).attr('id') == 'activationCode2') {
                		$("#activationCode3").focus();
                	} else if($(this).attr('id') == 'activationCode3') {
                		$("#activationCode4").focus();
                	}
                }
                checkValidOTPInputs();
            });

            $(".inputs").on("paste", function() {
                var $this = $(this);
                var originalValue = $this.val();
                $this.val("");
                $this.one("input.fromPaste", function(){
                    $currentInputBox = $(this);
                    var pastedValue = $currentInputBox.val();
                    if (pastedValue.length == 4 && intRegex.test(pastedValue)) {
                        pasteValues(pastedValue);
                    } else {
                        $this.val(originalValue);
                    }
                    $(".inputs").attr("maxlength", 1);
                });
                $(".inputs").attr("maxlength", 4);
            });
        }
    })
}
function refreshcaptcha()
{
    $.get(base_url+'refresh/create_captcha',{form_id: 'signup'},function(data){
    	$('#captcha').attr('src', asset_url+'captcha/'+data.filename);
    	$('#is_secure').val(data.word);
    },'json');

}	
function validateCaptchaInput(captcha) {
	var is_secure = $('#is_secure').val();
	if(is_secure == captcha) {
		$("#captchaCorrectImg").show();
		$("#captchaCrossImg").hide();
	} else {
		$("#captchaCorrectImg").hide();
		$("#captchaCrossImg").show();
	}
}
function  registerStepSecond() {
	//ajaxindicatorstart("Please wait .. while we save your account ..");
	myloadingstart('otp_screen_frm');
	var flag = true;
    var activationCodeUserEntered = $('#activationCode1').val() + $('#activationCode2').val() + $('#activationCode3').val() + $('#activationCode4').val();
    var password = $('#registrationPassword').val();
    var confirmPassword = $('#registrationConfirmPassword').val();
    var userId = $('#userId').val();
    var busi_id = $('#busi_id').val();
    var captcha = $('#entercaptcha').val();
    var is_secure = $('#is_secure').val();
    var activationCode;
    var userEmail;
    var userName;
    var prefix;
    var cat_id;
    var subcat_id;
    var usr_category;
    var sub_category;
   
    if (is_secure != captcha) {
        $('#entercaptcha').css('border', '1px solid red');
        $('#entercaptcha').focus();
        $('#captchaCorrectImg').hide();
        $('#captchaCrossImg').show();
        myloadingstop('otp_screen_frm');
        return false;
    } else {
        $('#entercaptcha').css('border', '1px solid #ccc');
        $('#captchaCorrectImg').show();
        $('#captchaCrossImg').hide();
    }
    $.ajax({
        url: base_url + "account/getverificationcode",
        type: "post",
        data: {"userId": userId, "busi_id": busi_id},
        async: false,
        dataType: "json",
        success: function (response) {
            activationCode = response.activation_code;
            userEmail = response.email;
            userName = response.name;
            prefix = response.name_prefix;
            cat_id = response.cat_id;
            subcat_id = response.subcat_id;
            usr_category = response.user_category;
            sub_category = response.sub_category;
            var flag = true;
            if (activationCode != activationCodeUserEntered) {
                $('#activationCode1').focus();
                $('#ActivationcodeCorrectImg').hide();
                $('#ActivationcodeCrossImg').show();
                myloadingstop('otp_screen_frm');
                flag = false;
                return false;
            } else {
                $('#activationCode1').css('border', '1px solid #ccc');
            }
            if (password == ' ' || password == 'undefined') {
                $('#registrationPassword').focus();
                $('#registrationPassword').css('border', '1px solid red');
                myloadingstop('otp_screen_frm');
                flag = false;
                return false;
            } else {
                $('#registrationPassword').css('border', '1px solid #ccc');
            }

            if (confirmPassword == '' || confirmPassword == 'undefined') {
                $('#registrationConfirmPassword').focus();
                $('#registrationConfirmPassword').css('border', '1px solid red');
                $('#ConfirmpassCorrectImg').hide();
                $('#ConfirmpassCrossImg').show();
                myloadingstop('otp_screen_frm');
                flag = false;
                return false;
            } else if (password != confirmPassword) {
                $('#registrationConfirmPassword').focus();
                $('#registrationConfirmPassword').css('border', '1px solid red');
                $('#ConfirmpassCorrectImg').hide();
                $('#ConfirmpassCrossImg').show();
                myloadingstop('otp_screen_frm');
                flag = false;
                return false;
            } else {
                $('#registrationConfirmPassword').css('border', '1px solid #ccc');
            }
            $.ajax({
                url: base_url + "account/step_three",
                type: "post",
                data: {'name': userName, 'email': userEmail, 'namePrefix': prefix, 'pass': password, 'userId': userId, 'category_id':cat_id, 'subcat_id':subcat_id,'category':usr_category,'subcategory':sub_category, 'busi_id':busi_id},
                success: function (response) {
                	myloadingstop('otp_screen_frm');
                    $('#popup').html(response);
                }
            });
        }
    });
    
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imgInp')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100).css("border-radius", "50%");
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function checkEmailExist(email) {
    var result;
    $.ajax({
        url: base_url + "account/check_email",
        type: "post",
        async: false,
        data: {"email": email},
        success: function (response) {
            result = response;
        }
    });
    return result;
}

function ValidateLogin(theForm) {
	ajaxindicatorstart("Please wait .. While we login ..");
    var email, pass, rememberme;
    email = $('#loginEmail').val();
    pass = $('#password').val();
    rememberme = $('#rememberMe').prop("checked");
    if (rememberme == true) {
        rememberme = 'yes';
    } else {
        rememberme = 'no';
    }

    if (email == '' || typeof email == 'undefined') {
        $('#loginEmailErrMsg').html('Please enter email');
        $('#loginEmailErrMsg').show();
        $('#loginEmail').focus();
        $('#loginEmail').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#loginEmailErrMsg').hide();
        $('#loginEmail').css('border', '1px solid #ccc');
    }
    if (pass == '' || pass == 'undefined') {
        $('#loginPasswordErrMsg').html('Please enter password');
        $('#loginPasswordErrMsg').show();
        $('#password').focus();
        $('#password').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#loginPasswordErrMsg').hide();
        $('#password').css('border', '1px solid #ccc');
    }
    $.ajax({
        url: base_url + "account/login",
        type: "post",
        async: false,
        data: {"email": email, 'password': pass, 'rememberMe': rememberme},
        success: function (response) {
        	ajaxindicatorstop();
            if ($.trim(response) == 'success') {
                result = response;
                window.location = base_url;
            } else {
                event.preventDefault();
                if($.trim(response) == 'failed') {
                	$('#loginPasswordErrMsg').html('Please enter correct login details.');
                } else {
                	$('#loginPasswordErrMsg').html($.trim(response));
                }
                $('#loginPasswordErrMsg').show();
                $('#email').focus();
                return false;
            }
        }
    });
}

function validatePasswordStrength(password) {
	if(password.length >= 1) {
		$("#pass-indicator").show();
	} else {
		$("#pass-indicator").hide();
	}
    if (password.length < 3) {
        $('#strength').html('Weak').css('color', 'red').css('font-weight', 'bold');
    } else if (password.length < 6) {
        $('#strength').html('Good');
    } else if (password.length > 6) {
        $('#strength').html('Strong').css('color', 'green').css('font-weight', 'bold');
    }
}

function validateConfirmPassword(password) {
    if ($("#registrationPassword").val() == password) {
        $('#ConfirmpassCorrectImg').show();
        $('#ConfirmpassCrossImg').hide();
    } else {
    	$('#ConfirmpassCorrectImg').hide();
        $('#ConfirmpassCrossImg').show();
    }
}

function validateBuinsessInfo(category_id) {
	ajaxindicatorstart("Please wait .. while we save general info ..");
    var regex = new RegExp("^[a-zA-Z]+$");
    var company_name = $('#company_name').val();
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    
    var contactflag = $('#contactflag').val();
    var contactval = $('input[name=optionsRadios]:checked', '#buisnessInfor').val();
    if(contactval == 2) {
    	if(contactflag == "") {
    		 $('#newcontact').css('border', '1px solid red');
    	        $('#newcontact').focus();
    	        ajaxindicatorstop();
    	        return false;
    	} else {
    		  $('#newcontact').css('border', 'none');
    	}
    }
    
    var logopath = $('#logopath').val();
    
    if (logopath == "" || logopath == 'undefined') {
      //  $('#businesslogo_picture').show().html('Please enter email.');
        $('#change-logo-pic').css('border', '1px solid red');
        $('#change-logo-pic').focus();
        ajaxindicatorstop();
        return false;
    } else {
        $('#change-logo-pic').css('border', 'none');
    }
    
    if (company_name == '' || company_name == 'undefined') {
        $('#company_name').focus();
        $('#company_name').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#company_name').css('border', '1px solid #DCDCDC');
    }
    var buisness_license_name = $('#buisness_license_name').val();
    if (buisness_license_name == '' || buisness_license_name == 'undefined') {
        $('#buisness_license_name').focus();
        $('#buisness_license_name').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#buisness_license_name').css('border', '1px solid #DCDCDC');
    }
    var buisness_country = $('#buisness_country').val();
    if (buisness_country == '' || buisness_country == 'undefined') {
        $('#buisness_country').focus();
        $('#buisness_country').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#buisness_country').css('border', '1px solid #DCDCDC');
    }
    var buisness_province = $('#buisness_province').val();
    if (buisness_province == '' || buisness_province == 'undefined') {
        $('#buisness_province').focus();
        $('#buisness_province').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#buisness_province').css('border', '1px solid #DCDCDC');
    }

    var buisness_city = $('#buisness_city').val();
    if (buisness_city == '' || buisness_city == 'undefined') {
        $('#buisness_city').focus();
        $('#buisness_city').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#buisness_city').css('border', '1px solid #DCDCDC');
    }
    var buisness_street = $('#buisness_street').val();
    if (buisness_street == '' || buisness_street == 'undefined') {
        $('#buisness_street').focus();
        $('#buisness_street').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#buisness_street').css('border', '1px solid #DCDCDC');
    }
    var buisness_country_other_lng = $('#buisness_country_other_lng').val();
    if (buisness_country_other_lng == '' || buisness_country_other_lng == 'undefined') {
        $('#buisness_country_other_lng').focus();
        $('#buisness_country_other_lng').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#buisness_country_other_lng').css('border', '1px solid #DCDCDC');
    }
    var buisness_province_other_lng = $('#buisness_province_other_lng').val();
    if (buisness_province_other_lng == '' || buisness_province_other_lng == 'undefined') {
        $('#buisness_province_other_lng').focus();
        $('#buisness_province_other_lng').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#buisness_province_other_lng').css('border', '1px solid #DCDCDC');
    }

    var buisness_city_other_lng = $('#buisness_city_other_lng').val();
    if (buisness_city_other_lng == '' || buisness_city_other_lng == 'undefined') {
        $('#buisness_city_other_lng').focus();
        $('#buisness_city_other_lng').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#buisness_city_other_lng').css('border', '1px solid #DCDCDC');
    }
    var buisness_street_other_lng = $('#buisness_street_other_lng').val();
    if (buisness_street_other_lng == '' || buisness_street_other_lng == 'undefined') {
        $('#buisness_street_other_lng').focus();
        $('#buisness_street_other_lng').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#buisness_street_other_lng').css('border', '1px solid #DCDCDC');
    }

    var telCode = $('#telCode').val();
    if (telCode == '' || telCode == 'undefined') {
        $('#telCode').focus();
        $('#telCode').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else if (regex.test(telCode)) {
    	$('#telCode').focus();
        $('#telCode').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    }else {
        $('#telCode').css('border', '1px solid #DCDCDC');
    }
    var cityCode = $('#cityCode').val();
    if (cityCode == '' || cityCode == 'undefined') {
        $('#cityCode').focus();
        $('#cityCode').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else if (regex.test(cityCode)) {
   	 $('#cityCode').focus();
        $('#cityCode').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
   }  else {
        $('#cityCode').css('border', '1px solid #DCDCDC');
    }
    var telephoneNumber1 = $('#telephoneNumber1').val();
    if (telephoneNumber1 == '' || telephoneNumber1 == 'undefined') {
        $('#telephoneNumber1').focus();
        $('#telephoneNumber1').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else if (regex.test(telephoneNumber1)) {
        $('#telephoneNumber1').focus();
        $('#telephoneNumber1').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#telephoneNumber1').css('border', '1px solid #DCDCDC');
    }

    var telephoneNumber2 = $('#telephoneNumber2').val();
    if (telephoneNumber2 != '') {
        if (regex.test(telephoneNumber2)) {
            $('#telephoneNumber2').focus();
            $('#telephoneNumber2').css('border', '1px solid red');
            ajaxindicatorstop();
            return false;
        } else {
            $('#telephoneNumber2').css('border', '1px solid #DCDCDC');
        }
    }
    var fax = $('#fax').val();
    if (fax == '' || fax == 'undefined') {
        $('#fax').focus();
        $('#fax').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else if (regex.test(fax)) {
    	$('#fax').focus();
        $('#fax').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#fax').css('border', '1px solid #DCDCDC');
    }
    var pob = $('#pob').val();
    if (pob == '' || pob == 'undefined') {
        $('#pob').focus();
        $('#pob').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#pob').css('border', '1px solid #DCDCDC');
    }
    var website = $('#website').val();
    var buisness_email = $('#buisness_email').val();
    if (buisness_email == '' || buisness_email == 'undefined') {
        $('#buisness_email').focus();
        $('#buisness_email').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else if (reg.test(buisness_email) == false) {
        $('#buisness_email').focus();
        $('#buisness_email').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#buisness_email').css('border', '1px solid #DCDCDC');
    }
    
  
    
//    if(category_id == 3) {
//	    var paymentCheckCnt = $(".payment:checked").length;
//	    if (paymentCheckCnt == 0) {
//	        $('#paymentErr').show();
//	        return false;
//	    } else {
//	        $('#paymentErr').hide();
//	    }
//	    
//	    var trade_annual_volume = $('#trade_annual_volume').val();
//	    if (trade_annual_volume == '' || trade_annual_volume == 'undefined') {
//	        $('#trade_annual_volume').focus();
//	        $('#trade_annual_volume').css('border', '1px solid red');
//	        ajaxindicatorstop();
//	        return false;
//	    } else {
//	        $('#trade_annual_volume').css('border', '1px solid #DCDCDC');
//	    }
//	    
//    }
    if(category_id == 2) {
    	var company_from_location = $('#company_from_location').val();
	    if (company_from_location == '' || company_from_location == 'undefined') {
	        $('#company_from_location').focus();
	        $('#company_from_location').css('border', '1px solid red');
	        ajaxindicatorstop();
	        return false;
	    } else {
	        $('#company_from_location').css('border', '1px solid #DCDCDC');
	    }
	    
    	 var company_to_location = $('#company_to_location').val();
    	    if (company_to_location == '' || company_to_location == 'undefined') {
    	        $('#company_to_location').focus();
    	        $('#company_to_location').css('border', '1px solid red');
    	        ajaxindicatorstop();
    	        return false;
    	    } else {
    	        $('#company_to_location').css('border', '1px solid #DCDCDC');
    	    }
    }
    if(category_id == 1 || category_id == 2) {
			    var year_of_registration = $('#year_of_registration').val();
			    if (year_of_registration == '' || year_of_registration == 'undefined') {
			        $('#year_of_registration').focus();
			        $('#year_of_registration').css('border', '1px solid red');
			        ajaxindicatorstop();
			        return false;
			    } else if (regex.test(year_of_registration)) {
			    	 $('#year_of_registration').focus();
			         $('#year_of_registration').css('border', '1px solid red');
			         ajaxindicatorstop();
			         return false;
			    } else {
			        $('#year_of_registration').css('border', '1px solid #DCDCDC');
			    }
			    var owner_name = $('#owner_name').val();
			    if (owner_name == '' || owner_name == 'undefined') {
			        $('#owner_name').focus();
			        $('#owner_name').css('border', '1px solid red');
			        ajaxindicatorstop();
			        return false;
			    } else {
			        $('#owner_name').css('border', '1px solid #DCDCDC');
			    }
			    var no_of_employee = $('#no_of_employee').val();
			    if (no_of_employee == '' || no_of_employee == 'undefined') {
			        $('#no_of_employee').focus();
			        $('#no_of_employee').css('border', '1px solid red');
			        ajaxindicatorstop();
			        return false;
			    }  else if (regex.test(no_of_employee)) {
			    	 $('#no_of_employee').focus();
			         $('#no_of_employee').css('border', '1px solid red');
			         ajaxindicatorstop();
			         return false;
			    }
			    else {
			        $('#no_of_employee').css('border', '1px solid #DCDCDC');
			    }
			
			    var company_intro = $('#company_intro').val();
			    if (company_intro == '' || company_intro == 'undefined') {
			        $('#company_intro').focus();
			        $('#company_intro').css('border', '1px solid red');
			        ajaxindicatorstop();
			        return false;
			    } else {
			        $('#company_intro').css('border', '1px solid #DCDCDC');
			    }
			    
			    var account_no = $('#account_no').val();
			    if (account_no == '' || account_no == 'undefined') {
			        $('#account_no').focus();
			        $('#account_no').css('border', '1px solid red');
			        ajaxindicatorstop();
			        return false;
			    } else {
			        $('#account_no').css('border', '1px solid #DCDCDC');
			    }
			    
			    var account_name = $('#account_name').val();
			    if (account_name == '' || account_name == 'undefined') {
			        $('#account_name').focus();
			        $('#account_name').css('border', '1px solid red');
			        ajaxindicatorstop();
			        return false;
			    } else {
			        $('#account_name').css('border', '1px solid #DCDCDC');
			    }
			    
			    var bank_name = $('#bank_name').val();
			    if (bank_name == '' || bank_name == 'undefined') {
			        $('#bank_name').focus();
			        $('#bank_name').css('border', '1px solid red');
			        ajaxindicatorstop();
			        return false;
			    } else {
			        $('#bank_name').css('border', '1px solid #DCDCDC');
			    }
			    
			    var bank_code = $('#bank_code').val();
			    if (bank_code == '' || bank_code == 'undefined') {
			        $('#bank_code').focus();
			        $('#bank_code').css('border', '1px solid red');
			        ajaxindicatorstop();
			        return false;
			    } else {
			        $('#bank_code').css('border', '1px solid #DCDCDC');
			    }
			    
			    var bank_address = $('#bank_address').val();
			    if (bank_address == '' || bank_address == 'undefined') {
			        $('#bank_address').focus();
			        $('#bank_address').css('border', '1px solid red');
			        ajaxindicatorstop();
			        return false;
			    } else {
			        $('#bank_address').css('border', '1px solid #DCDCDC');
			    }
			    
			    var swift_code = $('#swift_code').val();
			    if (swift_code == '' || swift_code == 'undefined') {
			        $('#swift_code').focus();
			        $('#swift_code').css('border', '1px solid red');
			        ajaxindicatorstop();
			        return false;
			    } else {
			        $('#swift_code').css('border', '1px solid #DCDCDC');
			    }
			    
    }  
    var company_presentation = $('#company_presentation').val();
    if (company_presentation == '' || company_presentation == 'undefined') {
        $('#company_presentation').focus();
        $('#company_presentation').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#company_presentation').css('border', '1px solid #DCDCDC');
    }
    


}

function validateFactoryInfo() {
    var regex = new RegExp("^[a-zA-Z]+$");
    if(document.getElementById('otherrnd').checked) {
        var other_r_d_capacity = $("#other_r_d_capacity").val();
        if (other_r_d_capacity == '' || other_r_d_capacity == 'undefined') {
            $('#other_r_d_capacity').focus();
            $('#other_r_d_capacity').css('border', '1px solid red');
            return false;
        } else {
            $('#other_r_d_capacity').css('border', '1px solid #DCDCDC');
        }
    } 
    var province = $('#province').val();
    if (province == '' || province == 'undefined') {
        $('#province').focus();
        $('#province').css('border', '1px solid red');
        return false;
    } else {
        $('#province').css('border', '1px solid #DCDCDC');
    }
    var city = $('#city').val();
    if (city == '' || city == 'undefined') {
        $('#city').focus();
        $('#city').css('border', '1px solid red');
        return false;
    } else {
        $('#city').css('border', '1px solid #DCDCDC');
    }
    var street = $('#street').val();
    if (street == '' || street == 'undefined') {
        $('#street').focus();
        $('#street').css('border', '1px solid red');
        return false;
    } else {
        $('#street').css('border', '1px solid #DCDCDC');
    }
    var license_province = $('#license_province').val();
    if (license_province == '' || license_province == 'undefined') {
        $('#license_province').focus();
        $('#license_province').css('border', '1px solid red');
        return false;
    } else {
        $('#license_province').css('border', '1px solid #DCDCDC');
    }
    var license_city = $('#license_city').val();
    if (license_city == '' || license_city == 'undefined') {
        $('#license_city').focus();
        $('#license_city').css('border', '1px solid red');
        return false;
    } else {
        $('#license_city').css('border', '1px solid #DCDCDC');
    }
    var license_street = $('#license_street').val();
    if (license_street == '' || license_street == 'undefined') {
        $('#license_street').focus();
        $('#license_street').css('border', '1px solid red');
        return false;
    } else {
        $('#license_street').css('border', '1px solid #DCDCDC');
    }
    var code = $('#code').val();
    if (code == '' || code == 'undefined') {
        $('#code').focus();
        $('#code').css('border', '1px solid red');
        return false;
    } else if (regex.test(code)) {
    	$('#code').focus();
        $('#code').css('border', '1px solid red');
        return false;
    } else {
        $('#code').css('border', '1px solid #DCDCDC');
    }
    var city_code = $('#city_code').val();
    if (city_code == '' || city_code == 'undefined') {
        $('#city_code').focus();
        $('#city_code').css('border', '1px solid red');
        return false;
    } else if (regex.test(city_code)) {
    	$('#city_code').focus();
        $('#city_code').css('border', '1px solid red');
        return false;
    } else {
        $('#city_code').css('border', '1px solid #DCDCDC');
    }
    var telephone = $('#telephone').val();
    if (telephone == '' || telephone == 'undefined') {
        $('#telephone').focus();
        $('#telephone').css('border', '1px solid red');
        return false;
    } else if (regex.test(telephone)) {
        $('#telephone').focus();
        $('#telephone').css('border', '1px solid red');
        return false;
    } else {
        $('#telephone').css('border', '1px solid #DCDCDC');
    }
    var factory_size = $('#factory_size').val();
    if (factory_size == '' || factory_size == 'undefined' || factory_size == 0) {
        $('#factory_size').focus();
        $('#factory_size').css('border', '1px solid red');
        return false;
    } else {
        $('#factory_size').css('border', '1px solid #DCDCDC');
    }
    var no_of_production_line = $('#no_of_production_line').val();
    if (no_of_production_line == '' || no_of_production_line == 'undefined') {
        $('#no_of_production_line').focus();
        $('#no_of_production_line').css('border', '1px solid red');
        return false;
    } else {
        $('#no_of_production_line').css('border', '1px solid #DCDCDC');
    }
    var production_lead_time = $('#production_lead_time').val();
    if (production_lead_time == '' || production_lead_time == 'undefined') {
        $('#production_lead_time').focus();
        $('#production_lead_time').css('border', '1px solid red');
        return false;
    } else {
        $('#production_lead_time').css('border', '1px solid #DCDCDC');
    }
	 var rndcapacityCnt = $(".rndcap:checked").length;
	    if (rndcapacityCnt == 0) {
	        $('#rndErr').show();
	        return false;
	    } else {
	        $('#rndErr').hide();
	    }
    var annual_turnover = $('#annual_turnover').val();
    if (annual_turnover == '' || annual_turnover == 'undefined') {
        $('#annual_turnover').focus();
        $('#annual_turnover').css('border', '1px solid red');
        return false;
    } else {
        $('#annual_turnover').css('border', '1px solid #DCDCDC');
    }
}
$(document).ready(function () {
    $("#worldwide").change(function () {  //"select all" change 
        var status = this.checked; // "select all" checked status
        $('.markets').each(function () { //iterate all listed checkbox items
            this.checked = status; //change ".checkbox" checked status
        });
    });

    $("#allTrade").change(function () {  //"select all" change 
        var status = this.checked; // "select all" checked status
        $('.trade').each(function () { //iterate all listed checkbox items
            this.checked = status; //change ".checkbox" checked status
        });
    });
    $(".retrievePassword").hide();

});

function validateTradeInfo() {
    var markedCheckedCnt = $(".markets:checked").length;
    var post = $('#port1').val();
    var tradeCheckCnt = $(".trade:checked").length;
    var paymentCheckCnt = $(".payment:checked").length;
    var currencyCheckCnt = $(".currency:checked").length;

    if (markedCheckedCnt == 0) {
        $('#marketErr').show();
        return false;
    } else {
        $('#marketErr').hide();
    }
    if (post == '' || post == 'undefined') {
        $('#port1').css('border', '1px solid red');
        $('#port1').focus();
        return false;
    } else {
        $('#port1').css('border', '1px solid #DCDCDC');
    }
    if (tradeCheckCnt == 0) {
        $('#tradeErr').show();
        return false;
    } else {
        $('#tradeErr').hide();
    }
    if (paymentCheckCnt == 0) {
        $('#paymentErr').show();
        return false;
    } else {
        $('#paymentErr').hide();
    }
    if (currencyCheckCnt == 0) {
        $('#currencyErr').show();
        return false;
    } else {
        $('#currencyErr').hide();
    }

}

function validateCertificateInfo() {
	ajaxindicatorstart("Loading please wait ...");
    var license = $('#license').val();
    var start_datepicker = $('#start_datepicker').val();
    var end_datepicker = $('#end_datepicker').val();
    var scope = $('#scope').val();
    var d1 = new Date(start_datepicker);
    var d2 = new Date(end_datepicker);
    if (document.getElementById('certimgupload1').value == "" || document.getElementById('certimgupload1').value == 'undefined') {
        $('#certimgupload1').show().html('Please select image.');
        $('#certimgupload1').css('border', '1px solid red');
        $('#certimgupload1').focus();
        ajaxindicatorstop();
        return false;
    } else {
        $('#imgInp').css('border', 'none');
    }
    if (license == '' || license == 'undefined') {
        $('#license').focus();
        $('#license').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#license').css('border', '1px solid #DCDCDC');
    }

    if (start_datepicker == '' || start_datepicker == 'undefined') {
        $('#start_datepicker').focus();
        $('#start_datepicker').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#start_datepicker').css('border', '1px solid #DCDCDC');
    }

    if (end_datepicker == '' || end_datepicker == 'undefined') {
        $('#end_datepicker').focus();
        $('#end_datepicker').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#end_datepicker').css('border', '1px solid #DCDCDC');
    }
    if (d1.getTime() > d2.getTime()) {
        $('#start_datepicker').focus();
        $('#start_datepicker').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#start_datepicker').css('border', '1px solid #DCDCDC');
    }

    if (scope == '' || scope == 'undefined') {
        $('#scope').focus();
        $('#scope').css('border', '1px solid red');
        ajaxindicatorstop();
        return false;
    } else {
        $('#scope').css('border', '1px solid #DCDCDC');
    }

}

function retrievePassword() {
    var email,securityCode,securityPassword,securityConfirmPassword;
    email = $('#forgotemail').val();
    securityCode = $('#securityCode').val();
    securityPassword = $('#securityPassword').val();
    securityConfirmPassword = $('#securityConfirmPassword').val();
    if(securityPassword != securityConfirmPassword) {
        $('#forgotEmailErrMsg').html('Password and confirm Password do not match.').css('font-weight', 'bold').css('padding-bottom', '5px');
        $('#forgotEmailErrMsg').show();
        return false;

    } else {
        $('#forgotEmailErrMsg').hide();
    }
    $.ajax({
        url: base_url + "account/saveNewpassword",
        type: "post",
        dataType:'json',
        data: {"email": email,"securityCode": securityCode,"securityPassword": securityPassword},
        success: function (response) {
            if(response.action == 'success') { 
            $('#recovery-message').html('');
            $('#recovery-message').html('New Password saved successfully.Please continue to login.');
            ShowObject('Login_layer', 1);ShowObject('Recover_password', 0);
            $("#recovery-message").show();
            ajaxindicatorstop();
        } else {
            $('#forgotEmailsuccessMsg').html('');
            $('#forgotEmailsuccessMsg').html('Please Enter Correct Acivation Code.');
            $('#forgotEmailsuccessMsg').show();
        }
        }
    })
}

