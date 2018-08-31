function ajaxindicatorstart(text)
{
	if(jQuery('body').find('#resultLoading').attr('id') != 'resultLoading'){
	jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="'+base_url+'assets/images/loading.gif" alt=""><div></div></div><div class="bg"></div></div>');
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
/**/
function alertajaxindicatorstart(text)
{
	if(jQuery('.editaccount_outer').find('#alertresultLoading').attr('id') != 'alertresultLoading'){
	jQuery('.editaccount_outer').append('<div id="alertresultLoading" style="display:none"><div><img src="'+base_url+'assets/images/loading.gif" alt=""><div></div></div><div class="bg"></div></div>');
	}

	jQuery('#alertresultLoading').css({
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

	jQuery('#alertresultLoading .bg').css({
		'background':'#000000',
		'opacity':'0.7',
		'width':'100%',
		'height':'100%',
		'position':'absolute',
		'top':'0'
	});

	jQuery('#alertresultLoading>div:first').css({
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

    jQuery('#alertresultLoading .bg').height('100%');
       jQuery('#alertresultLoading').fadeIn(300);
    jQuery('body').css('cursor', 'wait');
}
function alertajaxindicatorstop()
{
    jQuery('#alertresultLoading .bg').height('100%');
       jQuery('#alertresultLoading').fadeOut(300);
    jQuery('body').css('cursor', 'default');
}
/**/

function buyermessage()
{
	 var messageflag = document.getElementById("message_id").checked;
	 var flag = 1;
     if(messageflag == true)
	 {
    	 flag = 0;
	 } else {
		 flag = 1;
	 }
     $.post(base_url+"mystation/buyermessage",{flag:flag},function(data){
    	 
     });
	ShowObjectWithEffect('Layer97', 0, 'fade', 500);
	return false;
}
function getMyAccount() {
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/myaccount",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer162', 1, 'scale', 500, 'swing');
		$("#Layer162_Container").html(data);
		return false;
	});
}
 
function getChangepassword() {
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/changepassword",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer162', 1, 'scale', 500, 'swing')
		$("#Layer162_Container").html(data);
		return false;
	});
}

function viewMyAccountInfo() {
	ajaxindicatorstart('Loading...');
	ShowObject('Layer162', 0);
	$.get(base_url+"mystation/viewmyaccount",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer164', 1, 'fade', 2, 'swing');
		$("#Layer164_Container").html(data);
		return false;
	});
}
/*function openAccountInfoEditForm() {
	ajaxindicatorstart('Loading...');
	$("#personal_info_div").hide();
	$("#personal_edit_div").show();
	$("#personal_info_btn").removeClass("btn-custom_active");
	$("#personal_edit_btn").addClass("btn-custom_active");
	ajaxindicatorstop();
 	$(document).ready(function(){
		$('#frmeditpersonalinfo').bootstrapValidator({
		 container: function($field, validator) {
	     	return $field.parent().next('.messageContainer');
	     },
	    feedbackIcons: {
	        validating: 'glyphicon glyphicon-refresh'
	    },
	    excluded: ':disabled',
	    fields: {
	    	   	'data[name]': {
	    	   		validators: {
	                 	notEmpty: {
	                     	message: 'The Username  is required and cannot be empty'
	                 	}
	             	}
	    	   	},
	    	   	'data[profilepath]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Profile Picture  is required and cannot be empty'
	    	   			}
	    	   		}
	    	   	},
//	    	   	profileImg: {
//	                validators: {
//	                	notEmpty: {
//	                     	message: 'Profile image required.'
//	                 	},
//	                    file: {
//	                        extension: 'jpeg,jpg,png,gif',
//	                        type: 'image/jpeg,image/png,image/gif,image/jpg',
//	                        maxSize: 2097152,   // 2048 * 1024
//	                        message: 'The selected file is not valid'
//	                    }
//	                }
//	            },
	    	   	'data[user_subcategory_id]': {
		             validators: {
		                 notEmpty: {
		                     message: 'The Business Type is required and cannot be empty'
		                 }
		             }
		         },
			   	 'data[alternative_email]': {
			            validators: {
			                notEmpty: {
			                    message: 'The Alternative email  is required and cannot be empty'
			                },
			                regexp: {
		                         regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
		                         message: 'The value is not a valid email address'
		                     }
			            }
			        },
			        'data[country]': {
			            validators: {
			                notEmpty: {
			                    message: 'The Country  is required and cannot be empty'
			                }
			            }
			        },
			        'data[province]': {
			            validators: {
			                notEmpty: {
			                    message: 'The Province is required and cannot be empty'
			                }
			            }
			        },
			        'data[city]': {
			            validators: {
			                notEmpty: {
			                    message: 'The City is required and cannot be empty'
			                }
			            }
			        },
			        'data[street]': {
			            validators: {
			                notEmpty: {
			                    message: 'The Street is required and cannot be empty'
			                }
			            }
			        },
			        'data[mobile_code]': {
			            validators: {
			                notEmpty: {
			                    message: 'The Mobilecode is required and cannot be empty'
			                }
			            }
			        },
			        'data[mobile_number]': {
			            validators: {
			                notEmpty: {
			                    message: 'The Mobile number is required and cannot be empty'
			                },
			                regexp: {
	                            regexp: '[0-9]{10}$',
	                            message: 'Invalid Mobile Number'
	                        }
			            }
			        },
			        'data[timezone]': {
			            validators: {
			                notEmpty: {
			                    message: 'The Timezone is required and cannot be empty'
			                }
			            }
			        },
			        'data[position]': {
			            validators: {
			                notEmpty: {
			                    message: 'The Position is required and cannot be empty'
			                }
			            }
			        }
			     
			    }
			}).on('error.field.bv', function(e, data) {
				if (data.bv.getSubmitButton()) {
					data.bv.disableSubmitButtons(false);
				}
	    	}).on( 'status.field.bv', function( e, data ) {
	    	    $( '#savepersonalbtn').attr( 'disabled', false );
	    	}).on('success.form.bv', function(e) {
			   // Prevent form submission
			   e.preventDefault();
			   saveAccountInfo();
			});
		});
}*/
function openAccountInfo() {
	ajaxindicatorstart('Loading...');
	$.get(base_url+"mystation/account/personalinfo",{},function(data){
		$("#personal").html(data);
		$("#personal_info_div").show();
		$("#personal_edit_div").hide();
		$("#personal_edit_btn").removeClass("btn-custom_active");
		$("#personal_info_btn").addClass("btn-custom_active");
		$("#savepersonalbtn").hide();
	});
	ajaxindicatorstop();
}
function saveAccountInfo() {
	ajaxindicatorstart("Please wait .. System is Processing...");
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showPersonalProfileRequest, // pre-submit callback 
 			success :  showPersonalProfileResponse,
 			url : base_url+'mystation/editprofile',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmeditpersonalinfo').ajaxSubmit(options);
}
function showPersonalProfileRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showPersonalProfileResponse(resp, statusText, xhr, $form){
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
	//	alert(resp.msg);
		openAccountInfo();
		} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		//alert(resp.msg);
		openAccountInfo();
	}
	ajaxindicatorstop();
	document.getElementById("myaccountimg").src=asset_url+resp.proimg;
}
function openCompanyInfoEditForm(category_id) {
	ajaxindicatorstart('Loading...');
	$("#company_info_div").hide();
	$("#company_edit_div").show();
	$("#company_info_btn").removeClass("btn-custom_active");
	$("#company_edit_btn").addClass("btn-custom_active");
	$("#savecompanybtn").show();
	$('#frmeditpersonalinfo').bootstrapValidator('destroy');
	$('#frmeditpersonalinfo').data('bootstrapValidator', null);
	ajaxindicatorstop();
	if(category_id == 1) {
			$(document).ready(function(){
				$('#frmeditcompanyinfo').bootstrapValidator({
				 container: function($field, validator) {
			     	return $field.parent().next('.messageContainer');
			     },
			    feedbackIcons: {
			        validating: 'glyphicon glyphicon-refresh'
			    },
			    excluded: ':disabled',
			    fields: {
			    	   	'data[company_name]': {
			    	   		validators: {
			                 	notEmpty: {
			                     	message: 'The Company Name  is required and cannot be empty'
			                 	}
			             	}
			    	   	},

//			    	   	'contactpersone_name': {
//		                    validators: {
//		                        callback: {
//		                            message: ' Name is Required',
//		                            callback: function(value, validator, $field) {
//		                                var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
//		                                return (channel != 2) ? true : (value != '');
//		                            }
//		                        }
//		                    }
//		                },
//		                'contact_person_email': {
//		                	validators: {
//		                		callback: {
//		                			message: 'Email is required',
//		                			callback: function(value, validator, $field) {
//		                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
//		                				return (channel != 2) ? true : (value != '');
//		                			}
//		                		}
//		                	}
//		                },
//		                'contact_person_code': {
//		                	validators: {
//		                		callback: {
//		                			message: 'Mobil Code is required',
//		                			callback: function(value, validator, $field) {
//		                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
//		                				return (channel != 2) ? true : (value != '');
//		                			}
//		                		}
//		                	}
//		                },
//		                'contact_person_mobile': {
//		                	validators: {
//		                		callback: {
//		                			message: 'Mobil is required',
//		                			callback: function(value, validator, $field) {
//		                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
//		                				return (channel != 2) ? true : (value != '');
//		                			}
//		                		}
//		                	}
//		                },
//		                'contact_person_position': {
//		                	validators: {
//		                		callback: {
//		                			message: 'Position is required',
//		                			callback: function(value, validator, $field) {
//		                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
//		                				return (channel != 2) ? true : (value != '');
//		                			}
//		                		}
//		                	}
//		                },
//		                'contact_imgpath': {
//		                	validators: {
//		                		callback: {
//		                			message: 'The Contact Person Picture  is required and cannot be empty',
//		                			callback: function(value, validator, $field) {
//		                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
//		                				return (channel != 2) ? true : (value != '');
//		                			}
//		                		}
//			    	   			
//			    	   		}
//		                },

			    	   	/*'contactpersone_name': {
		                    validators: {
		                        callback: {
		                            message: ' Name is Required',
		                            callback: function(value, validator, $field) {
		                                var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
		                                return (channel != 2) ? true : (value != '');
		                            }
		                        }
		                    }
		                },
		                'contact_person_email': {
		                	validators: {
		                		callback: {
		                			message: 'Email is required',
		                			callback: function(value, validator, $field) {
		                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
		                				return (channel != 2) ? true : (value != '');
		                			}
		                		}
		                	}
		                },
		                'contact_person_code': {
		                	validators: {
		                		callback: {
		                			message: 'Mobil Code is required',
		                			callback: function(value, validator, $field) {
		                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
		                				return (channel != 2) ? true : (value != '');
		                			}
		                		}
		                	}
		                },
		                'contact_person_mobile': {
		                	validators: {
		                		callback: {
		                			message: 'Mobil is required',
		                			callback: function(value, validator, $field) {
		                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
		                				return (channel != 2) ? true : (value != '');
		                			}
		                		}
		                	}
		                },
		                'contact_person_position': {
		                	validators: {
		                		callback: {
		                			message: 'Position is required',
		                			callback: function(value, validator, $field) {
		                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
		                				return (channel != 2) ? true : (value != '');
		                			}
		                		}
		                	}
		                },
		                'contact_imgpath': {
		                	validators: {
		                		callback: {
		                			message: 'The Contact Person Picture  is required and cannot be empty',
		                			callback: function(value, validator, $field) {
		                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
		                				return (channel != 2) ? true : (value != '');
		                			}
		                		}
			    	   			
			    	   		}
		                },*/

		                'bcountry[]': {
		                	validators: {
		                		notEmpty: {
		                			message: 'The Country  is required and cannot be empty'
		                		}
		                	}
		                },
		                'bprovince[]': {
		                	validators: {
		                		notEmpty: {
		                			message: 'The Province  is required and cannot be empty'
		                		}
		                	}
		                },
		                'bcity[]': {
		                	validators: {
		                		notEmpty: {
		                			message: 'The City is required and cannot be empty'
		                		}
		                	}
		                },
		                'bstreet[]': {
		                	validators: {
		                		notEmpty: {
		                			message: 'The Street is required and cannot be empty'
		                		}
		                	}
		                },
		                'bcountry_code[]': {
		                	validators: {
		                		notEmpty: {
		                			message: 'The Country Code is required and cannot be empty'
		                		}
		                	}
		                },
		                'bcity_code[]': {
		                	validators: {
		                		notEmpty: {
		                			message: 'The City Code is required and cannot be empty'
		                		}
		                	}
		                },
		                'btelephone1[]': {
		                	validators: {
		                		notEmpty: {
		                			message: 'The Telephone is required and cannot be empty'
		                		},
		                		regexp: {
			                         regexp: '[0-9]$',
			                         message: 'Invalid Mobile Number'
			                     }
		                	}
		                },
		                'btelephone2[]': {
		                	validators: {
		                		notEmpty: {
		                			message: 'The Telephone is required and cannot be empty'
		                		},
		                		regexp: {
			                         regexp: '[0-9]$',
			                         message: 'Invalid Mobile Number'
			                     }
		                	}
		                },
		                'bemail[]': {
		                	validators: {
		                		notEmpty: {
		                			message: 'The Email is required and cannot be empty'
		                		},
		                		regexp: {
			                         regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
			                         message: 'The value is not a valid email address'
			                     }
		                	}
		                },
		                'bfax[]': {
		                	validators: {
		                		notEmpty: {
		                			message: 'The Fax is required and cannot be empty'
		                		}
		                	}
		                },
			    		'data[profilepath]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Company Logo  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    		'data[license_company_name]': {
			    	   		validators: {
			                 	notEmpty: {
			                     	message: 'The License Company Name  is required and cannot be empty'
			                 	}
			             	}
			    	   	},
			    		'data[company_country]': {
			    	   		validators: {
			                 	notEmpty: {
			                     	message: 'The Company Country  is required and cannot be empty'
			                 	}
			             	}
			    	   	},
			    	   	'data[company_province]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Company Province  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[company_city]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Company City  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[company_street]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Company Street  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[license_company_country]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The License Company Country  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[license_company_province]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The License Company Province  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[license_company_city]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The License Company City  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[license_company_street]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The License Company Street  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[telephone_code]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Telephone Code  is required and cannot be empty'
			    	   			}
			    	   			
			    	   		}
			    	   	},
			    	   	'data[telephone_city_code]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Telephone City Code  is required and cannot be empty'
			    	   			}
				           		
			    	   		}
			    	   	},
			    	   	'data[telephone_number]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Telephone Number  is required and cannot be empty'
			    	   			},
				    	   		 regexp: {
			                         regexp: '[0-9]$',
			                         message: 'Invalid Mobile Number'
			                     }
			    	   		}
			    	   	},
			    	   	'data[fax]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Fax  is required and cannot be empty'
			    	   			},
			    	   			integer: {
				                    message: 'Invalid Fax Number.'
				           		}
			    	   		}
			    	   	},
			    	   	'data[p_o_box]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The P.O.Box  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[company_email]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Company Email  is required and cannot be empty'
			    	   			},
				    	   		 regexp: {
			                         regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
			                         message: 'The value is not a valid email address'
			                     }
			    	   		}
			    	   	},
			    	   	'data[year_of_registration]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Year Of registration  is required and cannot be empty'
			    	   			},
			    	   			integer: {
				                    message: 'Invalid Year Of registration .'
				           		}
			    	   		}
			    	   	},
			    	   	'data[company_owner_name]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Company Owner Name  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[company_size]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Company Size  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[total_no_of_emp]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Total No of Employee  is required and cannot be empty'
			    	   			},
			    	   			integer: {
				                    message: 'Invalid Total No of Employee .'
				           		}
			    	   		}
			    	   	},
			    	   	'data[company_introduction]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Company Introduction  is required and cannot be empty'
			    	   			},
			    	   			stringLength: {
			                        max: 4000,
			                        min:5,
			                        message: 'The content must be less than 4000 characters long'
			                    }
			    	   		}
			    	   	},
			    	   	'data[hot_presentation]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Hot Presentation  is required and cannot be empty'
			    	   			},
				    	   		 stringLength: {
				                        max: 400,
				                        min:5,
				                        message: 'The content must be less than 500 characters long'
				                 }
			    	   		}
			    	   	},
			    	   	'data[account_no]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Bank Account  Number is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[account_name]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Account  Name is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[bank_name]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Bank  Name is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[bank_code]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Bank  Code is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[bank_address]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Bank  Address  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[swift_code]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Swift Code is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	}
			    	  
					   }
					}).on('error.field.bv', function(e, data) {
						if (data.bv.getSubmitButton()) {
							data.bv.disableSubmitButtons(false);
						}
			    	}).on( 'status.field.bv', function( e, data ) {
			    	    $( '#savecompanybtn').attr( 'disabled', false );
			    	}).on('success.form.bv', function(e) {
					   // Prevent form submission
					   e.preventDefault();
					 response =  validatecontactperson();
						 if(response == 1) {
						   saveCompanyInfo();
						 } else {
							 $( '#savecompanybtn').attr( 'disabled', false );
						 }
					});
				});
		} else if(category_id == 2)
		{
			$(document).ready(function(){
				$('#frmeditcompanyinfo').bootstrapValidator({
				 container: function($field, validator) {
			     	return $field.parent().next('.messageContainer');
			     },
			    feedbackIcons: {
			        validating: 'glyphicon glyphicon-refresh'
			    },
			    excluded: ':disabled',
			    fields: {
			    	   	'data[company_name]': {
			    	   		validators: {
			                 	notEmpty: {
			                     	message: 'The Company Name  is required and cannot be empty'
			                 	}
			             	}
			    	   	},

//			    	   	'contactpersone_name': {
//		                    validators: {
//		                        callback: {
//		                            message: 'The Contact Name is required',
//		                            callback: function(value, validator, $field) {
//		                                var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
//		                                return (channel != 2) ? true : (value !== '');
//		                            }
//		                        }
//		                    }
//		                },
//		                'contact_person_email': {
//		                	validators: {
//		                		callback: {
//		                			message: 'The Contact Person Email is required',
//		                			callback: function(value, validator, $field) {
//		                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
//		                				return (channel != 2) ? true : (value !== '');
//		                			}
//		                		}
//		                	}
//		                },
//		                'contact_person_code': {
//		                	validators: {
//		                		callback: {
//		                			message: 'The Mobil Code is required',
//		                			callback: function(value, validator, $field) {
//		                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
//		                				return (channel != 2) ? true : (value !== '');
//		                			}
//		                		}
//		                	}
//		                },
//		                'contact_person_mobile': {
//		                	validators: {
//		                		callback: {
//		                			message: 'The Mobil Code is required',
//		                			callback: function(value, validator, $field) {
//		                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
//		                				return (channel != 2) ? true : (value !== '');
//		                			}
//		                		}
//		                	}
//		                },
//		                'contact_person_position': {
//		                	validators: {
//		                		callback: {
//		                			message: 'The Mobil Code is required',
//		                			callback: function(value, validator, $field) {
//		                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
//		                				return (channel != 2) ? true : (value !== '');
//		                			}
//		                		}
//		                	}
//		                },
//		                'contact_imgpath': {
//		                	validators: {
//			    	   			notEmpty: {
//			    	   				message: 'The Contact Person Picture  is required and cannot be empty'
//			    	   			}
//			    	   		}
//		                },

			    	   	/*'contactpersone_name': {
		                    validators: {
		                        callback: {
		                            message: 'The Contact Name is required',
		                            callback: function(value, validator, $field) {
		                                var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
		                                return (channel != 2) ? true : (value !== '');
		                            }
		                        }
		                    }
		                },
		                'contact_person_email': {
		                	validators: {
		                		callback: {
		                			message: 'The Contact Person Email is required',
		                			callback: function(value, validator, $field) {
		                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
		                				return (channel != 2) ? true : (value !== '');
		                			}
		                		}
		                	}
		                },
		                'contact_person_code': {
		                	validators: {
		                		callback: {
		                			message: 'The Mobil Code is required',
		                			callback: function(value, validator, $field) {
		                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
		                				return (channel != 2) ? true : (value !== '');
		                			}
		                		}
		                	}
		                },
		                'contact_person_mobile': {
		                	validators: {
		                		callback: {
		                			message: 'The Mobil Code is required',
		                			callback: function(value, validator, $field) {
		                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
		                				return (channel != 2) ? true : (value !== '');
		                			}
		                		}
		                	}
		                },
		                'contact_person_position': {
		                	validators: {
		                		callback: {
		                			message: 'The Mobil Code is required',
		                			callback: function(value, validator, $field) {
		                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
		                				return (channel != 2) ? true : (value !== '');
		                			}
		                		}
		                	}
		                },
		                'contact_imgpath': {
		                	validators: {
			    	   			notEmpty: {
			    	   				message: 'The Contact Person Picture  is required and cannot be empty'
			    	   			}
			    	   		}
		                },*/

			    		'data[profilepath]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Company Logo  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    		'data[license_company_name]': {
			    	   		validators: {
			                 	notEmpty: {
			                     	message: 'The License Company Name  is required and cannot be empty'
			                 	}
			             	}
			    	   	},
			    		'data[company_country]': {
			    	   		validators: {
			                 	notEmpty: {
			                     	message: 'The Company Country  is required and cannot be empty'
			                 	}
			             	}
			    	   	},
			    	   	'data[company_province]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Company Province  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[company_city]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Company City  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[company_street]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Company Street  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[license_company_country]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The License Company Country  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[license_company_province]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The License Company Province  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[license_company_city]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The License Company City  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[license_company_street]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The License Company Street  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    	   	'data[telephone_code]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Telephone Code  is required and cannot be empty'
			    	   			}
			    	   			
			    	   		}
			    	   	},
			    	   	'data[telephone_city_code]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Telephone City Code  is required and cannot be empty'
			    	   			}
				           		
			    	   		}
			    	   	},
			    	   	'data[telephone_number]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Telephone Number  is required and cannot be empty'
			    	   			},
				    	   		 regexp: {
			                         regexp: '[0-9]$',
			                         message: 'Invalid Mobile Number'
			                     }
			    	   		}
			    	   	},
			    	   	'data[fax]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Fax  is required and cannot be empty'
			    	   			},
			    	   			integer: {
				                    message: 'Invalid Fax Number.'
				           		}
			    	   		}
			    	   	},
			    	   	'data[company_email]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Company Email  is required and cannot be empty'
			    	   			},
				    	   		 regexp: {
			                         regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
			                         message: 'The value is not a valid email address'
			                     }
			    	   		}
			    	   	},
			    	   	'data[hot_presentation]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Hot Presentation  is required and cannot be empty'
			    	   			},
				    	   		 stringLength: {
				                        max: 400,
				                        min:5,
				                        message: 'The content must be less than 500 characters long'
				                 }
			    	   		}
			    	   	},
			    		'data[company_from_location]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Company From Location  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	},
			    		'data[company_to_location]': {
			    	   		validators: {
			    	   			notEmpty: {
			    	   				message: 'The Company To Location  is required and cannot be empty'
			    	   			}
			    	   		}
			    	   	}
					   }
					}).on('error.field.bv', function(e, data) {
						if (data.bv.getSubmitButton()) {
							data.bv.disableSubmitButtons(false);
						}
			    	}).on( 'status.field.bv', function( e, data ) {
			    	    $( '#savecompanybtn').attr( 'disabled', false );
			    	}).on('success.form.bv', function(e) {
					   // Prevent form submission
					   e.preventDefault();
					   response =  validatecontactperson();
						 if(response) {
						   saveCompanyInfo();
						 } else {
							 $( '#savecompanybtn').attr( 'disabled', false );
						 }
					});
				});
		} else {
				$(document).ready(function(){
					$('#frmeditcompanyinfo').bootstrapValidator({
					 container: function($field, validator) {
				     	return $field.parent().next('.messageContainer');
				     },
				    feedbackIcons: {
				        validating: 'glyphicon glyphicon-refresh'
				    },
				    excluded: ':disabled',
				    fields: {
				    	   	'data[company_name]': {
				    	   		validators: {
				                 	notEmpty: {
				                     	message: 'The Company Name  is required and cannot be empty'
				                 	}
				             	}
				    	   	},

//				    	   	'contactpersone_name': {
//			                    validators: {
//			                        callback: {
//			                            message: 'The Contact Name is required',
//			                            callback: function(value, validator, $field) {
//			                                var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
//			                                return (channel != 2) ? true : (value !== '');
//			                            }
//			                        }
//			                    }
//			                },
//			                'contact_person_email': {
//			                	validators: {
//			                		callback: {
//			                			message: 'The Contact Person Email is required',
//			                			callback: function(value, validator, $field) {
//			                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
//			                				return (channel != 2) ? true : (value !== '');
//			                			}
//			                		}
//			                	}
//			                },
//			                'contact_person_code': {
//			                	validators: {
//			                		callback: {
//			                			message: 'The Mobil Code is required',
//			                			callback: function(value, validator, $field) {
//			                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
//			                				return (channel != 2) ? true : (value !== '');
//			                			}
//			                		}
//			                	}
//			                },
//			                'contact_person_mobile': {
//			                	validators: {
//			                		callback: {
//			                			message: 'The Mobil Code is required',
//			                			callback: function(value, validator, $field) {
//			                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
//			                				return (channel != 2) ? true : (value !== '');
//			                			}
//			                		}
//			                	}
//			                },
//			                'contact_person_position': {
//			                	validators: {
//			                		callback: {
//			                			message: 'The Mobil Code is required',
//			                			callback: function(value, validator, $field) {
//			                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
//			                				return (channel != 2) ? true : (value !== '');
//			                			}
//			                		}
//			                	}
//			                },
//			                'contact_imgpath': {
//			                	validators: {
//				    	   			notEmpty: {
//				    	   				message: 'The Contact Person Picture  is required and cannot be empty'
//				    	   			}
//				    	   		}
//			                },

				    	   	/*'contactpersone_name': {
			                    validators: {
			                        callback: {
			                            message: 'The Contact Name is required',
			                            callback: function(value, validator, $field) {
			                                var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
			                                return (channel != 2) ? true : (value !== '');
			                            }
			                        }
			                    }
			                },
			                'contact_person_email': {
			                	validators: {
			                		callback: {
			                			message: 'The Contact Person Email is required',
			                			callback: function(value, validator, $field) {
			                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
			                				return (channel != 2) ? true : (value !== '');
			                			}
			                		}
			                	}
			                },
			                'contact_person_code': {
			                	validators: {
			                		callback: {
			                			message: 'The Mobil Code is required',
			                			callback: function(value, validator, $field) {
			                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
			                				return (channel != 2) ? true : (value !== '');
			                			}
			                		}
			                	}
			                },
			                'contact_person_mobile': {
			                	validators: {
			                		callback: {
			                			message: 'The Mobil Code is required',
			                			callback: function(value, validator, $field) {
			                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
			                				return (channel != 2) ? true : (value !== '');
			                			}
			                		}
			                	}
			                },
			                'contact_person_position': {
			                	validators: {
			                		callback: {
			                			message: 'The Mobil Code is required',
			                			callback: function(value, validator, $field) {
			                				var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
			                				return (channel != 2) ? true : (value !== '');
			                			}
			                		}
			                	}
			                },
			                'contact_imgpath': {
			                	validators: {
				    	   			notEmpty: {
				    	   				message: 'The Contact Person Picture  is required and cannot be empty'
				    	   			}
				    	   		}
			                },*/

				    		'data[profilepath]': {
				    	   		validators: {
				    	   			notEmpty: {
				    	   				message: 'The Company Logo  is required and cannot be empty'
				    	   			}
				    	   		}
				    	   	},
				    		'data[license_company_name]': {
				    	   		validators: {
				                 	notEmpty: {
				                     	message: 'The License Company Name  is required and cannot be empty'
				                 	}
				             	}
				    	   	},
				    		'data[company_country]': {
				    	   		validators: {
				                 	notEmpty: {
				                     	message: 'The Company Country  is required and cannot be empty'
				                 	}
				             	}
				    	   	},
				    	   	'data[company_province]': {
				    	   		validators: {
				    	   			notEmpty: {
				    	   				message: 'The Company Province  is required and cannot be empty'
				    	   			}
				    	   		}
				    	   	},
				    	   	'data[company_city]': {
				    	   		validators: {
				    	   			notEmpty: {
				    	   				message: 'The Company City  is required and cannot be empty'
				    	   			}
				    	   		}
				    	   	},
				    	   	'data[company_street]': {
				    	   		validators: {
				    	   			notEmpty: {
				    	   				message: 'The Company Street  is required and cannot be empty'
				    	   			}
				    	   		}
				    	   	},
				    	   	'data[license_company_country]': {
				    	   		validators: {
				    	   			notEmpty: {
				    	   				message: 'The License Company Country  is required and cannot be empty'
				    	   			}
				    	   		}
				    	   	},
				    	   	'data[license_company_province]': {
				    	   		validators: {
				    	   			notEmpty: {
				    	   				message: 'The License Company Province  is required and cannot be empty'
				    	   			}
				    	   		}
				    	   	},
				    	   	'data[license_company_city]': {
				    	   		validators: {
				    	   			notEmpty: {
				    	   				message: 'The License Company City  is required and cannot be empty'
				    	   			}
				    	   		}
				    	   	},
				    	   	'data[license_company_street]': {
				    	   		validators: {
				    	   			notEmpty: {
				    	   				message: 'The License Company Street  is required and cannot be empty'
				    	   			}
				    	   		}
				    	   	},
				    	   	'data[telephone_code]': {
				    	   		validators: {
				    	   			notEmpty: {
				    	   				message: 'The Telephone Code  is required and cannot be empty'
				    	   			}
				    	   			
				    	   		}
				    	   	},
				    	   	'data[telephone_city_code]': {
				    	   		validators: {
				    	   			notEmpty: {
				    	   				message: 'The Telephone City Code  is required and cannot be empty'
				    	   			}
					           		
				    	   		}
				    	   	},
				    	   	'data[telephone_number]': {
				    	   		validators: {
				    	   			notEmpty: {
				    	   				message: 'The Telephone Number  is required and cannot be empty'
				    	   			},
					    	   		 regexp: {
				                         regexp: '[0-9]$',
				                         message: 'Invalid Mobile Number'
				                     }
				    	   		}
				    	   	},
				    	   	'data[fax]': {
				    	   		validators: {
				    	   			notEmpty: {
				    	   				message: 'The Fax  is required and cannot be empty'
				    	   			},
				    	   			integer: {
					                    message: 'Invalid Fax Number.'
					           		}
				    	   		}
				    	   	},
				    	   	'data[company_email]': {
				    	   		validators: {
				    	   			notEmpty: {
				    	   				message: 'The Company Email  is required and cannot be empty'
				    	   			},
					    	   		 regexp: {
				                         regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
				                         message: 'The value is not a valid email address'
				                     }
				    	   		}
				    	   	},
				    	   	'data[company_introduction]': {
				    	   		validators: {
				    	   			notEmpty: {
				    	   				message: 'The Company Introduction  is required and cannot be empty'
				    	   			},
				    	   			stringLength: {
				                        max: 4000,
				                        min:5,
				                        message: 'The content must be less than 4000 characters long'
				                    }
				    	   		}
				    	   	},
				    	   	'data[hot_presentation]': {
				    	   		validators: {
				    	   			notEmpty: {
				    	   				message: 'The Hot Presentation  is required and cannot be empty'
				    	   			},
					    	   		 stringLength: {
					                        max: 400,
					                        min:5,
					                        message: 'The content must be less than 500 characters long'
					                 }
				    	   		}
				    	   	}
				    	
						   }
						}).on('error.field.bv', function(e, data) {
							if (data.bv.getSubmitButton()) {
								data.bv.disableSubmitButtons(false);
							}
				    	}).on( 'status.field.bv', function( e, data ) {
				    	    $( '#savecompanybtn').attr( 'disabled', false );
				    	}).on('success.form.bv', function(e) {
						   // Prevent form submission
						   e.preventDefault();
						   response =  validatecontactperson();
							 if(response) {
							   saveCompanyInfo();
							 } else {
								 $( '#savecompanybtn').attr( 'disabled', false );
							 }
						});
					});
			
		}
}
function validatecontactperson()
{
	//var response = false;
	var count = 0;
	var channel = $('#frmeditcompanyinfo').find('[name="contact_person"]:checked').val();
	if(channel == 2) 
	{
				 var contactperson_name = $('#contact_name').val();
				 var contactperson_email = $('#contact_person_email').val();
				 var contactperson_code = $('#contact_person_code').val();
				 var contactperson_mobile = $('#contact_person_mobile').val();
				 var contactperson_position = $('#contact_person_position').val();
				 var contactperson_imgpath = $('#contact_imgpath').val();
				 var contact_password = $('#contact_password').val();
				  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
				  var regex = new RegExp("^[a-zA-Z]+$");
				  var regexno = new RegExp("^[0-9]+$");
				// ajaxindicatorstart("Please wait .. while we save general info ..");
				 if (contactperson_name == '' || contactperson_name == 'undefined') {
				        $('#contact_name').focus();
				        $('#contact_name').css('border', '1px solid red');
				        //ajaxindicatorstop();
				        
				    } else {
				        $('#contact_name').css('border', '1px solid #DCDCDC');
				        count =count +parseInt(1);
				        
				    }
				 if (contactperson_email == '' || contactperson_email == 'undefined') {
				        $('#contact_person_email').focus();
				        $('#contact_person_email').css('border', '1px solid red');
				      
				    } else if (reg.test(contactperson_email) == false) {
				        $('#contact_person_email').focus();
				        $('#contact_person_email').css('border', '1px solid red');
				       
				    } else {
				    	var busi_id = document.getElementById('busi_id').value;
				    	checkEmail = checkEmailExistContactperson(contactperson_email,busi_id);
						 if (!jQuery.isEmptyObject(checkEmail) && $.trim(checkEmail) != 'null') {
							 	$('#contact_person_email').focus();
						        $('#contact_person_email').css('border', '1px solid red');
								 document.getElementById('contactemail_label').innerHTML = "Email Is already exist.";
								 return 0;
						 } else {
						        $('#contact_person_email').css('border', '1px solid #DCDCDC');
						        document.getElementById('contactemail_label').innerHTML = "";
						        count =count +parseInt(1);
						 }
				    }
				 if (contactperson_code == '' || contactperson_code == 'undefined') {
				        $('#contact_person_code').focus();
				        $('#contact_person_code').css('border', '1px solid red');
				      
				    }  else if (regexno.test(contactperson_code) == false) {
				        $('#contact_person_code').focus();
				        $('#contact_person_code').css('border', '1px solid red');
				       
				    } else {
				        $('#contact_person_code').css('border', '1px solid #DCDCDC');
				        count =count +parseInt(1);
				        
				    }
				 if (contactperson_mobile == '' || contactperson_mobile == 'undefined') {
				        $('#contact_person_mobile').focus();
				        $('#contact_person_mobile').css('border', '1px solid red');
				      
				    } else if (regexno.test(contactperson_mobile) == false) {
				        $('#contact_person_mobile').focus();
				        $('#contact_person_mobile').css('border', '1px solid red');
				       
				    }  else {
					        $('#contact_person_mobile').css('border', '1px solid #DCDCDC');
					        $('#contactemail_label').value = "";
					        count =count +parseInt(1);
					}
				 if (contactperson_position == '' || contactperson_position == 'undefined') {
					 $('#contact_person_position').focus();
					 $('#contact_person_position').css('border', '1px solid red');
					 
				 } else {
					 $('#contact_person_position').css('border', '1px solid #DCDCDC');
					 count =count +parseInt(1);
				 }
				 if (contactperson_imgpath == '' || contactperson_imgpath == 'undefined') {
					 $('#imgcontactperson').focus();
					 $('#imgcontactperson').css('border', '1px solid red');
					 
				 } else {
					 $('#imgcontactperson').css('border', '1px solid #DCDCDC');
					 count =count +parseInt(1);
				 }
				 if (contact_password == '' || contact_password == 'undefined') {
					 $('#contact_password').focus();
					 $('#contact_password').css('border', '1px solid red');
					 
				 } else {
					 $('#contact_password').css('border', '1px solid #DCDCDC');
					 count =count +parseInt(1);
				 }
				 if( count == 7)
				 {
					 return 1;
					 
				 } else {
					 return 0;
				 }
	} else {
		return 1;
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
function checkEmailExistContactperson(email,busi_id) {
	var result;
	$.ajax({
		url: base_url + "account/check_emailcontactperson",
		type: "post",
		async: false,
		data: {"email": email,"busi_id":busi_id},
		success: function (response) {
			result = response;
		}
	});
	return result;
}
function openCompanyInfo() {
	ajaxindicatorstart('Loading...');
	$.get(base_url+"mystation/account/companyinfo",{},function(data){
		$("#company").html(data);
		$("#company_info_div").show();
		$("#company_edit_div").hide();
		$("#company_edit_btn").removeClass("btn-custom_active");
		$("#company_info_btn").addClass("btn-custom_active");
		$("#savecompanybtn").hide();
	});
	ajaxindicatorstop();
}
function saveCompanyInfo() {
	ajaxindicatorstart("Please wait .. System is Processing...");
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showCompanyinfoRequest, // pre-submit callback 
 			success :  showCompanyinfoResponse,
 			url : base_url+'mystation/editcompanyinfo',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmeditcompanyinfo').ajaxSubmit(options);
}
function showCompanyinfoRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showCompanyinfoResponse(resp, statusText, xhr, $form){
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		//alert(resp.msg);
		openCompanyInfo(); 
		} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		//alert(resp.msg);
		openCompanyInfo(); 
	}
	ajaxindicatorstop();
}
function readBuisnessURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#buisnessImg').css('display', 'none');
            $('#business_img').show();
            $('#business_img').attr('src', e.target.result).css('width', '100px').css('height', '100px').css('border-radius', '50% 50% 50% 50%');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
function removeBuisnessURL() {
    $('#business_img').attr('src', '');
    $('#business_img').hide()
    $('#buisnessImg').css('display', 'block');
    $('#bprofilepath').val('');
    
}
$('#company_intro').on('keyup',function(){
    var vcount = parseInt($(this).val().length);
    var rem = 4000 - vcount;
    $("#intro_count").html(rem);
});
$('#company_presentation').on('keyup',function(){
    var vcount = parseInt($(this).val().length);
    var rem = 400 - vcount;
    $("#presentation_count").html(rem);
});
function openFactoryInfoEditForm() {
	ajaxindicatorstart('Loading...');
	$("#factory_info_div").hide();
	$("#factory_edit_div").show();
	$("#factory_info_btn").removeClass("btn-custom_active");
	$("#factory_edit_btn").addClass("btn-custom_active");
	$("#savefactorybtn").show();
	ajaxindicatorstop();
	$(document).ready(function(){
		$('#frmeditfactoryinfo').bootstrapValidator({
		 container: function($field, validator) {
	     	return $field.parent().next('.messageContainer');
	     },
	    feedbackIcons: {
	        validating: 'glyphicon glyphicon-refresh'
	    },
	    excluded: ':disabled',
	    fields: {
	    	   	'data[fact_province]': {
	    	   		validators: {
	                 	notEmpty: {
	                     	message: 'The Factory Province  is required and cannot be empty'
	                 	}
	             	}
	    	   	},
	    		'data[fact_city]': {
	    	   		validators: {
	                 	notEmpty: {
	                     	message: 'The Factory City  is required and cannot be empty'
	                 	}
	             	}
	    	   	},
	    		'data[fact_street]': {
	    	   		validators: {
	                 	notEmpty: {
	                     	message: 'The Factory Street  is required and cannot be empty'
	                 	}
	             	}
	    	   	},
	    	   	'data[fact_license_province]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Factory License Province  is required and cannot be empty'
	    	   			}
	    	   		}
	    	   	},
	    	   	'data[fact_license_city]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Factory License City  is required and cannot be empty'
	    	   			}
	    	   		}
	    	   	},
	    	   	'data[fact_license_street]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Factory License Street  is required and cannot be empty'
	    	   			}
	    	   		}
	    	   	},
	    	   	'data[telephone_code]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Telephone Code  is required and cannot be empty'
	    	   			}
	    	   		}
	    	   	},
	    	   	'data[telephone_city_code]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Telephone City Code  is required and cannot be empty'
	    	   			}
	    	   		}
	    	   	},
	    	   	'data[telephone]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Telephone  is required and cannot be empty'
	    	   			},
	    	   			integer: {
	                        message: 'The value is not an integer'
	                    }
		    	   		
	    	   		}
	    	   	},
	    	   	'data[fact_size]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Factory Size  is required and cannot be empty'
	    	   			}
	    	   		}
	    	   	},
	    	   	'data[no_of_production_line]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Number of Production Line  is required and cannot be empty'
	    	   			},
	    	   			integer: {
		                    message: 'Invalid Number of Production Line.'
		           		}
	    	   			
	    	   		}
	    	   	},
	    	   	'data[production_lead_time]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Production Lead Time  is required and cannot be empty'
	    	   			},
	    	   			integer: {
		                    message: 'Invalid Production Lead Time.'
		           		}
	    	   			
	    	   		}
	    	   	},
//	    	   	'data[no_of_rnd_staff]': {
//	    	   		validators: {
//	    	   			notEmpty: {
//	    	   				message: 'The Number of RND Staff  is required and cannot be empty'
//	    	   			},
//	    	   			integer: {
//		                    message: 'Invalid Number of RND Staff.'
//		           		}
//		    	   		 
//	    	   		}
//	    	   	},
//	    	   	'data[no_of_control_staff]': {
//	    	   		validators: {
//	    	   			notEmpty: {
//	    	   				message: 'The Number of Control Staff  is required and cannot be empty'
//	    	   			},
//	    	   			integer: {
//		                    message: 'Invalid Number of Control Staff.'
//		           		}
//		    	   		 
//	    	   		}
//	    	   	},
	    	   	/*'data[rnd_capacity]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The RND Capacity  is required and cannot be empty'
	    	   			}
	    	   			
	    	   		}
	    	   	},*/
	    	   	'data[annual_turnover]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Annual Turnover  is required and cannot be empty'
	    	   			},
			    	   	integer: {
		                    message: 'Invalid Annual Turnover.'
		           		}
	    	   		}
	    	   	},
	    	   	'rndtype[]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The RND Type  is required and cannot be empty'
	    	   			}
	    	   			
	    	   		}
	    	   	}
	    	  
			   }
			}).on('error.field.bv', function(e, data) {
				if (data.bv.getSubmitButton()) {
					data.bv.disableSubmitButtons(false);
				}
	    	}).on( 'status.field.bv', function( e, data ) {
	    	    $( '#savefactorybtn').attr( 'disabled', false );
	    	}).on('success.form.bv', function(e) {
			   // Prevent form submission
			   e.preventDefault();
			   var response = validateotherrnd();
			   if(response == true)
			   {	
				   saveFactoryInfo();
			   } else {
				   $( '#savefactorybtn').attr( 'disabled', false );
			   }
			});
		});

}
function validateotherrnd()
{
	 var checkboxes = document.getElementsByName('rndtype[]');
	  var vals = "";
	  for (var i=0, n=checkboxes.length;i<n;i++) 
	  {
		 var vals = checkboxes[i].value;
		 if(vals == 4)
		 {
		      if (checkboxes[i].checked) 
		      {
		    	  var other_r_d_capacity = $("#other_r_d_capacity").val();
			        if (other_r_d_capacity == '' || other_r_d_capacity == 'undefined') {
			            $('#other_r_d_capacity').focus();
			            $('#other_r_d_capacity').css('border', '1px solid red');
			            return false;
			        } else {
			            $('#other_r_d_capacity').css('border', '1px solid #DCDCDC');
			            return true;
			        }
		      } else {
		    	  return true;
		      }
		 }
	  }
	
}

function openFactoryInfo() {
	ajaxindicatorstart('Loading...');
	$.get(base_url+"mystation/account/factoryinfo",{},function(data){
		$("#factory").html(data);
		$("#factory_info_div").show();
		$("#factory_edit_div").hide();
		$("#factory_edit_btn").removeClass("btn-custom_active");
		$("#factory_info_btn").addClass("btn-custom_active");
		$("#factory").addClass("in active");
		$("#company").removeClass("in active");
		$("#personal").removeClass("in active");
		$("#trade").removeClass("in active");
		$("#certificate").removeClass("in active");
		$("#savefactorybtn").hide();
	
	});
	ajaxindicatorstop();
}
function saveFactoryInfo() {
	ajaxindicatorstart("Please wait .. System is Processing...");
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showFactoryinfoRequest, // pre-submit callback 
 			success :  showFactoryinfoResponse,
 			url : base_url+'mystation/editfactoryinfo',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmeditfactoryinfo').ajaxSubmit(options);
}
function showFactoryinfoRequest(formData, jqForm, options){
	var queryString = $.param(formData);
return true;
}
function showFactoryinfoResponse(resp, statusText, xhr, $form){
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		//alert(resp.msg);
		openFactoryInfo();
		} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		//alert(resp.msg);
		openFactoryInfo(); 
	}
	ajaxindicatorstop();
}
function openTradeInfoEditForm() {
	ajaxindicatorstart('Loading...');
	$("#trade_info_div").hide();
	$("#trade_edit_div").show();
	$("#trade_info_btn").removeClass("btn-custom_active");
	$("#trade_edit_btn").addClass("btn-custom_active");
	$("#savetradebtn").show();
	ajaxindicatorstop();
	$(document).ready(function(){
		$('#frmedittradeinfo').bootstrapValidator({
		 container: function($field, validator) {
	     	return $field.parent().next('.messageContainer');
	     },
	    feedbackIcons: {
	        validating: 'glyphicon glyphicon-refresh'
	    },
	    excluded: ':disabled',
	    fields: {
	    	   	'market[]': {
	    	   		validators: {
	                 	notEmpty: {
	                     	message: 'The Market  is required and cannot be empty'
	                 	}
	             	}
	    	   	},
	    		'port1': {
	    	   		validators: {
	                 	notEmpty: {
	                     	message: 'The Port1  is required and cannot be empty'
	                 	}
	             	}
	    	   	},
//	    		'port2': {
//	    	   		validators: {
//	                 	notEmpty: {
//	                     	message: 'The Port2  is required and cannot be empty'
//	                 	}
//	             	}
//	    	   	},
	    	   	/*'port3': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Port3 is required and cannot be empty'
	    	   			},
	    	   			integer: {
		                    message: 'Invalid Port3.'
		           		}
	    	   		}
	    	   	},*/
	    	   	'trade[]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Trade  is required and cannot be empty'
	    	   			}
	    	   		}
	    	   	},
	    	   	'payment[]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Payment is required and cannot be empty'
	    	   			}
	    	   		}
	    	   	},
	    	   	'currency[]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Currency is required and cannot be empty'
	    	   			}
	    	   		}
	    	   	}
			   }
			}).on('error.field.bv', function(e, data) {
				if (data.bv.getSubmitButton()) {
					data.bv.disableSubmitButtons(false);
				}
	    	}).on( 'status.field.bv', function( e, data ) {
	    	    $( '#savetradebtn').attr( 'disabled', false );
	    	}).on('success.form.bv', function(e) {
			   // Prevent form submission
			   e.preventDefault();
			   saveTradeInfo();
			});
		});
}
function openTradeInfo() {
	ajaxindicatorstart('Loading...');
	$.get(base_url+"mystation/account/tradeinfo",{},function(data){
		$("#trade").html(data);
		$("#trade_info_div").show();
		$("#trade_edit_div").hide();
		$("#trade_edit_btn").removeClass("btn-custom_active");
		$("#trade_info_btn").addClass("btn-custom_active");
		$("#savetradebtn").hide();
	});
	ajaxindicatorstop();
}
function saveTradeInfo() {
	ajaxindicatorstart("Please wait .. System is Processing...");
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showTradeinfoRequest, // pre-submit callback 
 			success :  showTradeinfoResponse,
 			url : base_url+'mystation/edittradeinfo',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmedittradeinfo').ajaxSubmit(options);
}
function showTradeinfoRequest(formData, jqForm, options){
	var queryString = $.param(formData);
return true;
}
function showTradeinfoResponse(resp, statusText, xhr, $form){
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		//alert(resp.msg);
		openTradeInfo();
		} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		//alert(resp.msg);
		openTradeInfo();
	}
	ajaxindicatorstop();
}
function openCertificateInfoEditForm() {
	$("#certificate_info_div").hide();
	$("#certificate_edit_div").show();
	$("#certificate_info_btn").removeClass("btn-custom_active");
	$("#certificate_edit_btn").addClass("btn-custom_active");
	$("#savecertificatebtn").show();
	$("#start_datepicker").datepicker({
        showOn: "button",
        buttonImage: base_url+"assets/images/calendar.png",
        buttonImageOnly: true,
        buttonText: "Select date"
    });
    $(".ui-datepicker-trigger").css("margin-top", "-52px").css("margin-left", "100%");
    $("#end_datepicker").datepicker({
        showOn: "button",
        buttonImage: base_url+"assets/images/calendar.png",
        buttonImageOnly: true,
        buttonText: "Select date"
    });
    $(".ui-datepicker-trigger").css("margin-top", "-52px").css("margin-left", "100%");
	$(document).ready(function(){
		$('#frmeditcertificateinfo').bootstrapValidator({
		 container: function($field, validator) {
	     	return $field.parent().next('.messageContainer');
	     },
	    feedbackIcons: {
	        validating: 'glyphicon glyphicon-refresh'
	    },
	    excluded: ':disabled',
	    fields: {
	    	   	'data[license]': {
	    	   		validators: {
	                 	notEmpty: {
	                     	message: 'The License  is required and cannot be empty'
	                 	}
	             	}
	    	   	},
	    		'data[start_date]': {
	    	   		validators: {
	                 	notEmpty: {
	                     	message: 'The Start Date  is required and cannot be empty'
	                 	}
	                 	
	             	}
	    	   	},
	    		'data[end_date]': {
	    	   		validators: {
	                 	notEmpty: {
	                     	message: 'The End Date  is required and cannot be empty'
	                 	}
	                 	
	             	}
	    	   	},
	    	   	'data[scope]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Scope is required and cannot be empty'
	    	   			}
	    	   			
	    	   		}
	    	   	},
	    	   	'certificate_type[]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Certificate Type  is required and cannot be empty'
	    	   			}
	    	   		}
	    	   	},
	    	   	'certificate_name[]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Certificate Name is required and cannot be empty'
	    	   			}
	    	   		}
	    	   	},
	    	   	'certificate_no[]': {
	    	   		validators: {
	    	   			notEmpty: {
	    	   				message: 'The Certificate Number is required and cannot be empty'
	    	   			}
	    	   		}
	    	   	}
	    	  
			   }
			}).on('error.field.bv', function(e, data) {
				if (data.bv.getSubmitButton()) {
					data.bv.disableSubmitButtons(false);
				}
	    	}).on( 'status.field.bv', function( e, data ) {
	    	    $( '#savecertificatebtn').attr( 'disabled', false );
	    	}).on('success.form.bv', function(e) {
			   // Prevent form submission
			   e.preventDefault();
			   saveCertificateInfo();
			});
		});
}
function readCertImageURL(input) {
	var filecount = $(input)[0].files.length;
	if(filecount <5) {
            for(var i=0; i< filecount; i++) {
            	setup_readercert($(input)[0].files, i);
            }
	} else {
		customAlert('You can not select more than 4 files');
	}
}

function setup_readercert(files, i) {
    var file = files[i];
    var name = file.name;
    var extension = name.replace(/^.*\./, '');
    var reader = new FileReader();
    reader.onload = function(e){
    	//readerLoaded(e, files, i, name);
    	var j = parseInt(i) + 1;
        $('#certimgupload').css('display', 'none');
        if(extension == "pdf") {
        	$('#companyphoto'+j).replaceWith($('<embed id="companyphoto'+j+'" src="" />'));
        }
        $('#companyphoto'+j).show();
        $('#companyphoto'+j).attr('src', e.target.result).css('width', '60px').css('height', '60px');
    };
    reader.readAsDataURL(files[i]);
}

function removeCertImage() {
	$('#companyphoto1').attr('src', '');
    $('#companyphoto1').hide();
    $('#companyphoto2').attr('src', '');
    $('#companyphoto2').hide();
    $('#companyphoto3').attr('src', '');
    $('#companyphoto3').hide();
    $('#companyphoto4').attr('src', '');
    $('#companyphoto4').hide();
    $('#certimgupload').attr('val', '');
    $('#certimgupload').css('display', 'block');
}

function readMoreCertImageURL(input) {
	if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#morecertimgupload').css('display', 'none');
            $('#morecertimage').show();
            $('#morecertimage').attr('src', e.target.result).css('width', '120px').css('height', '120px').css('border-radius', '50% 50% 50% 50%').css('cursor','pointer');
        }

        reader.readAsDataURL(input.files[0]);
    }
}



function addMoreCertificate() {
	//add more
}
function openCertificateInfo() {
	ajaxindicatorstart('Loading...');
	$.get(base_url+"mystation/account/certificateinfo",{},function(data){
		$("#certificate").html(data);
		$("#certificate_info_div").show();
		$("#certificate_edit_div").hide();
		$("#certificate_edit_btn").removeClass("btn-custom_active");
		$("#certificate_info_btn").addClass("btn-custom_active");
		$("#savecertificatebtn").hide();
		
	});
	ajaxindicatorstop();
}
function saveCertificateInfo() {
	ajaxindicatorstart("Please wait .. System is Processing...");
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showCertificateinfoRequest, // pre-submit callback 
 			success :  showCertificateinfoResponse,
 			url : base_url+'mystation/editcertificateinfo',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmeditcertificateinfo').ajaxSubmit(options);
}
function showCertificateinfoRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showCertificateinfoResponse(resp, statusText, xhr, $form){
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		//alert(resp.msg);
		ajaxindicatorstop();
		openCertificateInfo();
		
	} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		//alert(resp.msg);
		ajaxindicatorstop();
		openCertificateInfo();
	}
}
function openSubuserInfo() {
	ajaxindicatorstart('Loading...');
	$.get(base_url+"mystation/account/subuserinfo",{},function(data){
		ajaxindicatorstop();
		$("#subusers").html(data);
		$(document).ready(function(){
			$('#frmaddsubuser').bootstrapValidator({
			 container: function($field, validator) {
		     	return $field.parent().next('.messageContainer');
		     },
		    feedbackIcons: {
		        validating: 'glyphicon glyphicon-refresh'
		    },
		    excluded: ':disabled',
		    fields: {
		    	   	'data[name]': {
		    	   		validators: {
		                 	notEmpty: {
		                     	message: 'The User Email  is required and cannot be empty'
		                 	},
		                 	 regexp: {
		                         regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
		                         message: 'The value is not a valid email address'
		                     }
		                 	
		             	}
		    	   	},
		    	   	'data[subusername]': {
		    	   		validators: {
		    	   			notEmpty: {
		    	   				message: 'The Subuser Name is required and cannot be empty'
		    	   			},
		    	   		}
		    	   	},
				    'data[password]': {
				    	validators: {
				    		notEmpty: {
				    			message: 'The Password  is required and cannot be empty'
				    		}
				    	}
				    },
		    	   	'subusercpassword': {
			    	   	 validators: {
			                 notEmpty: {
			                     message: 'The ConfirmPassword is required and cannot be empty'
			                 },
			                 identical: {
			                     field: 'data[password]',
			                     message: 'The password and its confirm must be the same'
			                 }
			             }
		    	   	}
		    	
				   }
				}).on('error.field.bv', function(e, data) {
					if (data.bv.getSubmitButton()) {
						data.bv.disableSubmitButtons(false);
					}
		    	}).on( 'status.field.bv', function( e, data ) {
		    	    //$( '#savecertificatebtn').attr( 'disabled', false );
		    	}).on('success.form.bv', function(e) {
				   // Prevent form submission
				   e.preventDefault();
				   saveSubuser();
				});
			});
	});
}
function saveSubuser()
{		
	//ajaxindicatorstart("Please wait .. System is Processing...");
	var email = $('#subuseremail').val();
	 checkEmail = checkEmailExist(email);
	    if (!jQuery.isEmptyObject(checkEmail) && $.trim(checkEmail) != 'null') {
	        $('#subuseremail').focus();
	        $('#subuseremail').css('border', '1px solid red');
	        $('#subuserEmailErrMsg').html('Email already exist.').css('font-weight', 'bold').css('padding-bottom', '5px').css('padding-left', '37%').css('color','red');
	        $('#subuserEmailErrMsg').show();
	       // ajaxindicatorstop();
	        return false;
	    } else {
	    	 $('#subuserEmailErrMsg').hide();
	         $('#subuseremail').css('border', '1px solid #ccc');
			var options = {
		 			target : '#response', // target element(s) to be updated with server response 
		 			beforeSubmit : showSubUserRequest, // pre-submit callback 
		 			success :  showSubUserResponse,
		 			url : base_url+'mystation/createsubuser',
		 			semantic : true,
		 			dataType : 'json'
		 		};
			$('#frmaddsubuser').ajaxSubmit(options);
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
function showSubUserRequest(formData, jqForm, options){
	var queryString = $.param(formData);
return true;
}
function showSubUserResponse(resp, statusText, xhr, $form){
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		//alert(resp.msg);
		openSubuserInfo();
		} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
	//	alert(resp.msg);
		ajaxindicatorstop();
		openSubuserInfo();
	}
}
function suspendsubuser(id)
{
	if(confirm("Are you sure you want to suspend subuser?"))
	{
		ajaxindicatorstart("Please wait .. System is Processing...");
		$.post(base_url+"mystation/suspendsubuser",{'id':id},function(data) {
				if(data.status == 1)
				{
					//alert(data.msg);
				} else {
					customAlert(data.msg);
				}
				ajaxindicatorstop();
				openSubuserInfo();
		},'json');
	}
}
function allowsubuser(id)
{
	if(confirm("Are you sure you want to allow subuser?"))
	{
		ajaxindicatorstart("Please wait .. System is Processing...");
		$.post(base_url+"mystation/allowsubuser",{'id':id},function(data) {
			if(data.status == 1)
			{
				//alert(data.msg);
			} else {
				alert(data.msg);
			}
			ajaxindicatorstop();
			openSubuserInfo();
		},'json');
	}
}
function deletesubuser(id)
{
	if(confirm("Are you sure you want to delete subuser?"))
	{
		ajaxindicatorstart("Please wait .. System is Processing...");
		$.post(base_url+"mystation/deletesubuser",{'id':id},function(data) {
				if(data.status == 1)
				{
					//alert(data.msg);
				} else {
					alert(data.msg);
				}
				ajaxindicatorstop();
				openSubuserInfo();
		},'json');
	}
}
function removeProfileImage() {
    $('#profileImage').attr('src', '');
    $('#divprofileImage').hide();
    $('#profilepath').val('');
    $('#divfileprofileImg').css('display', 'block');
    
}
function readProfileImgURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#fileprofileImg').css('display', 'none');
            $('#profileImage').show();
            $('#profileImage').attr('src', e.target.result).css('width', '120px').css('height', '120px').css('border-radius', '50% 50% 50% 50%');
        }

        reader.readAsDataURL(input.files[0]);
    }
}
function displaycontact()
{
	var value = $("#frmeditcompanyinfo input[type='radio']:checked").val();
//	$('#frmeditcompanyinfo').bootstrapValidator('revalidateField', 'contactpersone_name');
//	$('#frmeditcompanyinfo').bootstrapValidator('revalidateField', 'contact_person_email');
//	$('#frmeditcompanyinfo').bootstrapValidator('revalidateField', 'contact_person_code');
//	$('#frmeditcompanyinfo').bootstrapValidator('revalidateField', 'contact_person_mobile');
//	$('#frmeditcompanyinfo').bootstrapValidator('revalidateField', 'contact_person_position');
	if(value == 1)
	{
		$('#contact').hide();
		
	}
	if(value == 2)
	{
		$('#contact').show();
		
		
	}

	//$("#contact_number").val('');
}

function readCompanyImageURL(input) {
	var filecount = $(input)[0].files.length;
	if(filecount <5) {
            for(var i=0; i< filecount; i++) {
            	setup_readercert($(input)[0].files, i);
            }
	} else {
		customAlert('You can not select more than 4 files');
	}
}
function removeCompanyImage() {
	$('#companyphoto1').attr('src', '');
    $('#companyphoto1').hide();
    $('#companyphoto2').attr('src', '');
    $('#companyphoto2').hide();
    $('#companyphoto3').attr('src', '');
    $('#companyphoto3').hide();
    $('#companyphoto4').attr('src', '');
    $('#companyphoto4').hide();
    $('#imgupload').attr('val', '');
    $('#imgupload').css('display', 'block');
}

function deleteBusinessAccount() {
	var r = confirm("Are you sure, you want to delete this account?");
	if (r == true) {
		$.post(base_url+"account/business/delete",{},function(data){
			customAlert(data.msg);
			window.location.reload();
		},'json');
	}
}

function disableBusinessAccount(is_disable) {
	if(is_disable == 0) {
		var r = confirm("Are you sure, you want to disable this account?");
		if (r == true) {
			$.post(base_url+"account/business/disable",{is_disable:is_disable},function(data){
				//alert(data.msg);
				getMyAccount();
				//window.location.reload();
			},'json');
		}
	} else {
		var r = confirm("Are you sure, you want to enable this account?");
		if (r == true) {
			$.post(base_url+"account/business/disable",{is_disable:is_disable},function(data){
			//	alert(data.msg);
				getMyAccount();
				//window.location.reload();
			},'json');
		}
	}
}

function getMyPackages() {
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/mypackage",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer174', 1, 'scale', 500, 'swing');
		$("#Layer174_Container").html(data);
		return false;
	});
}

function getBusinessRanking() {
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/ranking",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer130', 1, 'scale', 500, 'swing');
		$("#Layer130_Container").html(data);
		return false;
	});
}

function getBusinessVerification() {
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/verification",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer130', 1, 'scale', 500, 'swing');
		$("#Layer130_Container").html(data);
		return false;
	});
}

function getBusinessBuyerVerification() {
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/buyerverification",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer130', 1, 'scale', 500, 'swing');
		$("#Layer130_Container").html(data);
		return false;
	});
}

function verifiedLogoRequeted() {
	ajaxindicatorstart('Loading...');
	var html = '<div class="col-sm-8"><div class="vlogo-request text-center">'
		  +'<br><strong>Your request has been received successfully..</strong><br><br>'
		  +'</div>'
		  +'<div class="vlogo-request-msg text-center">'
		  +'It takes up to 7 working days to end our verifications process and activate your verification logo..<br>'
		  +'Once we end the required process, this message will be disappeared and a successful message will be displayed instead..<br><br>'
		  +'<strong>GOOD LUCK</strong><br><br>'
		  +'</div></div>';
	$.get(base_url+"mystation/verifiedlogo/request",{},function(data){
		ajaxindicatorstop();
		if(data.status == 1) {
			$("#vlogo-area").html(html);
			$("#vlogo-area").addClass('vlogo-wbg');
		} else {
			customAlert("Failed to upload logo.");
		}
	},'json');
	
}

function verifiedBuyerLogoRequeted() {
	ajaxindicatorstart('Loading...');
	var options = {
		target : '#response', // target element(s) to be updated with server response 
		beforeSubmit : showBReqRequest, // pre-submit callback 
		success :  showBReqResponse,
		url : base_url+'mystation/verifiedlogo/buyerrequest',
		semantic : true,
		dataType : 'json'
	};
	$('#attachmentupload').ajaxSubmit(options);
}
function showBReqRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	if($("#fileattachs").val()) {
		return true;
	} else {
		ajaxindicatorstop();
		customAlert("Please attach files.");
		return false;
	}
}
function showBReqResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 1) {
		var html = '<div class="col-sm-8"><div class="vlogo-request text-center">'
			  +'<br><strong>Your request has been received successfully..</strong><br><br>'
			  +'</div>'
			  +'<div class="vlogo-request-msg text-center">'
			  +'It takes up to 7 working days to end our verifications process and activate your verification logo..<br>'
			  +'Once we end the required process, this message will be disappeared and a successful message will be displayed instead..<br><br>'
			  +'<strong>GOOD LUCK</strong><br><br>'
			  +'</div></div>';
		$("#vlogo-area").html(html);
		$("#vlogo-area").addClass('vlogo-wbg');
	} else {
		alert("Failed to upload attachments.");
	}
}

function openAdsMainScreen() {
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/mybusinessads",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer275', 1, 'scale', 500, 'swing');
		$("#Layer275_Container").html(data);
		return false;
	});
}
function openMoreScreen() {
	$("#Layer275_Container").html('');
	$("#Layer149_Container").html('');
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	ShowObjectWithEffect('Layer149', 0, 'scale', 500, 'swing');
	$.get(base_url+"mystation/mybusinessmore",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer275', 1, 'scale', 500, 'swing');
		$("#Layer275_Container").html(data);
		return false;
	});
}

function openMainScreenAds() {
	ajaxindicatorstart('Loading...');
	$.get(base_url+"mystation/ads/mainscreen",{},function(data){
		ajaxindicatorstop();
		$("#mainscreenads").html(data);
		return false;
	});
}
function openFeaturedAds() {
	ajaxindicatorstart('Loading...');
	$.get(base_url+"mystation/ads/featuredproducts",{},function(data){
		ajaxindicatorstop();
		$("#featuredcarousel").html(data);
		return false;
	});
}

function viewMyTools() {
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/mytools",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer528', 1, 'scale', 500, 'swing');
		$("#Layer528_Container").html(data);
		return false;
	});
}

function viewShipperTools() {
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/shippertools",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer528', 1, 'scale', 500, 'swing');
		$("#Layer528_Container").html(data);
		return false;
	});
}

function viewMyBuyerTools() {
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/buyertools",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer528', 1, 'scale', 500, 'swing');
		$("#Layer528_Container").html(data);
		return false;
	});
}

function viewMyCatalogueBook(id) {
	ajaxindicatorstart('Loading...');
	$.get(base_url+"catalogue/popup/"+id,{},function(data){
		ajaxindicatorstop();
		$("#mycatalogue_page_content").html(data);
		$("#mypcatalogue_id").val(id);
		$("#myvcatalogue_overlay").modal('show');
		var $mybook 		= $('#mybook');
		var $bttn_next		= $('#next_page_button');
		var $bttn_prev		= $('#prev_page_button');
		var $loading		= $('#loading');
		var $mybook_images	= $mybook.find('img');
		var cnt_images		= $mybook_images.length;
		var loaded			= 0;
		$mybook_images.each(function(){
			var $img 	= $(this);
			var source	= $img.attr('src');
			$('<img/>').load(function(){
				++loaded;
				if(loaded == cnt_images){
					$loading.hide();
					$bttn_next.show();
					$bttn_prev.show();
					$mybook.show().booklet({
						name:               null,                            // name of the booklet to display in the document title bar
						width:              740,                             // container width
						height:             450,                             // container height
						speed:              600,                             // speed of the transition between pages
						direction:          'LTR',                           // direction of the overall content organization, default LTR, left to right, can be RTL for languages which read right to left
						startingPage:       0,                               // index of the first page to be displayed
						easing:             'easeInOutQuad',                 // easing method for complete transition
						easeIn:             'easeInQuad',                    // easing method for first half of transition
						easeOut:            'easeOutQuad',                   // easing method for second half of transition

						closed:             false,                           // start with the book "closed", will add empty pages to beginning and end of book
						closedFrontTitle:   null,                            // used with "closed", "menu" and "pageSelector", determines title of blank starting page
						closedFrontChapter: null,                            // used with "closed", "menu" and "chapterSelector", determines chapter name of blank starting page
						closedBackTitle:    null,                            // used with "closed", "menu" and "pageSelector", determines chapter name of blank ending page
						closedBackChapter:  null,                            // used with "closed", "menu" and "chapterSelector", determines chapter name of blank ending page
						covers:             false,                           // used with  "closed", makes first and last pages into covers, without page numbers (if enabled)

						pagePadding:        10,                              // padding for each page wrapper
						pageNumbers:        false,                            // display page numbers on each page

						hovers:             false,                            // enables preview pageturn hover animation, shows a small preview of previous or next page on hover
						overlays:           false,                            // enables navigation using a page sized overlay, when enabled links inside the content will not be clickable
						tabs:               false,                           // adds tabs along the top of the pages
						tabWidth:           60,                              // set the width of the tabs
						tabHeight:          20,                              // set the height of the tabs
						arrows:             true,                           // adds arrows overlayed over the book edges
						cursor:             'pointer',                       // cursor css setting for side bar areas

						hash:               false,                           // enables navigation using a hash string, ex: #/page/1 for page 1, will affect all booklets with 'hash' enabled
						keyboard:           true,                            // enables navigation with arrow keys (left: previous, right: next)
						next:               $bttn_next,          			// selector for element to use as click trigger for next page
						prev:               $bttn_prev,          			// selector for element to use as click trigger for previous page

						menu:               null,                            // selector for element to use as the menu area, required for 'pageSelector'
						pageSelector:       false,                           // enables navigation with a dropdown menu of pages, requires 'menu'
						chapterSelector:    false,                           // enables navigation with a dropdown menu of chapters, determined by the "rel" attribute, requires 'menu'

						shadows:            true,                            // display shadows on page animations
						shadowTopFwdWidth:  166,                             // shadow width for top forward anim
						shadowTopBackWidth: 166,                             // shadow width for top back anim
						shadowBtmWidth:     50,                              // shadow width for bottom shadow

						before:             function(){},                    // callback invoked before each page turn animation
						after:              function(){}                     // callback invoked after each page turn animation
					});
					//Cufon.refresh();
				}
			}).attr('src',source);
		});
		$("#popcatalogue_id").val(id);
	},'html');
}

function addToMyFavourite(fav_id,type) {
	$.get(base_url+"addtofavourite/"+fav_id+"/"+type,{},function(data) {
		customAlert(data.msg);
	},'json');
}

function likeCatalogue() {
	var id = $("#mypcatalogue_id").val();
	$.get(base_url+"desksite/catalogue/like/"+id,{},function(data) {
		customAlert(data.msg);
	},'json');
}
function likeCatalogue(id) {
	$.get(base_url+"desksite/catalogue/like/"+id,{},function(data) {
		customAlert(data.msg);
		var likes = parseInt($("#sdiv"+id).html());
		likes++;
		$("#sdiv"+id).html(likes);
	},'json');
}
function commentCatalogue() {
	var id = $("#mypcatalogue_id").val();
	$.get(base_url+"catalogue/like/"+id,{},function(data) {
		customAlert(data.msg);
	},'json');
}
function shareCatalogue() {
	var id = $("#mypcatalogue_id").val();
	$.get(base_url+"catalogue/like/"+id,{},function(data) {
		customAlert(data.msg);
	},'json');
}

function viewUDTalk() {
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/udtalk",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer338', 1, 'scale', 500, 'swing');
		$("#Layer338_Container").html(data);
		return false;
	});
}