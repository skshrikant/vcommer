<?php 
if(isset($tsuserid)) { 
	//auto_admin_logout();
} else {
	redirect(base_url());
} 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trade Station</title>
        <link rel="shortcut icon" href="<?php echo asset_url();?>images/Homekit.png">
        <!-- Bootstrap -->
        <link href="<?php echo asset_url(); ?>css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo asset_url(); ?>css/style.css" rel="stylesheet">
        <link href="<?php echo asset_url(); ?>css/slick.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo asset_url(); ?>css/slick-theme.css">
        <link href="<?php echo asset_url(); ?>css/profile_personal_info.css" rel="stylesheet">
        <!--Files for datepicker at certificates page?-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="<?php echo asset_url(); ?>js/bootstrap.js"></script> 
        <script src="<?php echo asset_url(); ?>js/slick.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo asset_url(); ?>js/custom/account.js" type="text/javascript" charset="utf-8"></script>
        <!--Files for datepicker at certificates page?-->
        <style>
        	ul.dropdown-menu li > a:hover {
			    background-color: #f1f1f1 !important;
			}
        	a:focus,.btn:active {
			   outline: none !important;
			}
            input#imgInp {
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
             input#imgupload {
                display: inline-block;
                width: 100%;
                padding: 120px 0 0 0;
                height: 100px;
                overflow: hidden;
                /*-webkit-box-sizing: border-box;*/
                /*-moz-box-sizing: border-box;*/    
                box-sizing: border-box;
                background: url('<?php echo asset_url(); ?>images/img1208.gif') center center no-repeat ;
                /*border-radius: 20px;*/
                /*background-size: 150px 100px;*/
            }
            input#certimgupload {
                display: inline-block;
                width: 100%;
                padding: 120px 0 0 0;
                height: 100px;
                overflow: hidden;
                /*-webkit-box-sizing: border-box;*/
                /*-moz-box-sizing: border-box;*/    
                box-sizing: border-box;
                background: url('<?php echo asset_url(); ?>images/ts/img1237.png') center center no-repeat ;
                /*border-radius: 20px;*/
                /*background-size: 150px 100px;*/
            }
            input#certimgupload1 {
                display: inline-block;
                width: 100%;
                padding: 60px 0 0 0;
                height: 60px;
                overflow: hidden;
                box-sizing: border-box;
                background: url('<?php echo asset_url(); ?>images/ts/img1237.png') center center no-repeat ;
                background-size:cover;
                border:1px solid #ccc;
            }
            input#certimgupload2 {
                display: inline-block;
                width: 100%;
                padding: 60px 0 0 0;
                height: 60px;
                overflow: hidden;
                box-sizing: border-box;
                background: url('<?php echo asset_url(); ?>images/ts/img1237.png') center center no-repeat ;
                background-size:cover;
                border:1px solid #ccc;
            }
            input#certimgupload3 {
                display: inline-block;
                width: 100%;
                padding: 60px 0 0 0;
                height: 60px;
                overflow: hidden;
                box-sizing: border-box;
                background: url('<?php echo asset_url(); ?>images/ts/img1237.png') center center no-repeat ;
                background-size:cover;
                border:1px solid #ccc;
            }
            input#certimgupload4 {
                display: inline-block;
                width: 100%;
                padding: 60px 0 0 0;
                height: 60px;
                overflow: hidden;
                box-sizing: border-box;
                background: url('<?php echo asset_url(); ?>images/ts/img1237.png') center center no-repeat ;
                background-size:cover;
                border:1px solid #ccc;
            }
            input.morecertimgupload {
                display: inline-block;
                width: 100%;
                padding: 120px 0 0 0;
                height: 100px;
                overflow: hidden;
                /*-webkit-box-sizing: border-box;*/
                /*-moz-box-sizing: border-box;*/    
                box-sizing: border-box;
                background: url('<?php echo asset_url(); ?>images/ts/img1237.png') center center no-repeat ;
                /*border-radius: 20px;*/
                /*background-size: 150px 100px;*/
            }
            input#buisnessImg {
                display: inline-block;
                width: 157%;
                padding: 120px 0 0 0;
                height: 100px;
                overflow: hidden;
                /*-webkit-box-sizing: border-box;*/
                /*-moz-box-sizing: border-box;*/    
                box-sizing: border-box;
                background: url('<?php echo asset_url(); ?>images/ts/img1179.png') center center no-repeat ;
                /*border-radius: 20px;*/
                /*background-size: 150px 100px;*/
            }
            .companyImg{
                display: inline-block;
                width: 80px;
                padding: 80px 0 0 0;
                height: 80px;
                overflow: hidden;
                /*-webkit-box-sizing: border-box;*/
                /*-moz-box-sizing: border-box;*/    
                box-sizing: border-box;
                background: url('<?php echo asset_url(); ?>images/ts/img1191.png') center center no-repeat ;
                border-radius: 10% 10% 10% 10%;
            }


        </style>
        <script>
			function ajaxindicatorstart(text)
			{
				if(jQuery('body').find('#resultLoading').attr('id') != 'resultLoading'){
				jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="<?php echo asset_url();?>images/loading.gif" alt="Loading..."><div></div></div><div class="bg"></div></div>');
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
			function myloadingstart(id)
			{
				if(jQuery('#'+id).find('#resultLoading').attr('id') != 'resultLoading'){
				jQuery('#'+id).append('<div id="resultLoading" style="display:none"><div><img src="<?php echo asset_url();?>images/loading.gif" alt="Loading..."></div><div class="bg"></div></div>');
				}

				jQuery('#resultLoading').css({
					'width':'100%',
					'height':'100%',
					'position':'absolute',
					'z-index':'10000000',
					'top':'0',
					'left':'0',
					'right':'0',
					'bottom':'0',
					'margin':'auto'
				});

				jQuery('#resultLoading .bg').css({
					'background':'#fff',
					'opacity':'1',
					'width':'100%',
					'height':'100%',
					'position':'absolute',
					'top':'0'
				});

				jQuery('#resultLoading>div:first').css({
					'width': '250px',
					'height':'75px',
					'text-align': 'center',
					'position': 'absolute',
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
			    jQuery('#'+id).css('cursor', 'wait');
			}
			function myloadingstop(id)
			{
			    jQuery('#resultLoading .bg').height('100%');
			       jQuery('#resultLoading').fadeOut(300);
			    jQuery('#'+id).css('cursor', 'default');
			}
		</script>
        <script>
            $(function () {
                $("#start_datepicker").datepicker({
                    showOn: "button",
                    buttonImage: "<?php echo asset_url(); ?>/images/calendar.png",
                    buttonImageOnly: true,
                    buttonText: "Select date"
                });
                $(".ui-datepicker-trigger").css("margin-top", "-52px").css("margin-left", "180px");
                $("#end_datepicker").datepicker({
                    showOn: "button",
                    buttonImage: "<?php echo asset_url(); ?>/images/calendar.png",
                    buttonImageOnly: true,
                    buttonText: "Select date"
                });
                $(".ui-datepicker-trigger").css("margin-top", "-52px").css("margin-left", "180px");

            });
            function remove() {

                $('#blah').attr('src', '');
                $('#blah').hide();
                $('#imgInp').attr('val', '');
                $('#imgInp').css('display', 'block');
            }

            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#imgInp').css('display', 'none');
                        $('#blah').show();
                       // $('#blah').attr('src', e.target.result).css('width', '120px').css('height', '120px').css('border-radius', '50% 50% 50% 50%');
                        $('#blah').attr('src', e.target.result).css('width', '120px').css('height', '120px');
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }
         
            function removeBuisnessURL() {

                $('#businesslogo_picture').attr('src', '');
                $('#logopath').val('');
                $('#businesslogo_picture').hide()
                $('#change-logo-pic').css('display', 'block');
            }

            $(document).ready(function(){
	            $(".morecertimgupload").change(function (){
	            	if (this.files && this.files[0]) {
	                	var inps = $(this).attr('id').split("-");
	                    var reader = new FileReader();
	                    var name = this.files[0].name;
	                    var extension = name.replace(/^.*\./, '');
	                    reader.onload = function (e) {
	                    	$('#morecertimgupload-'+inps[1]).css('display', 'none');
	                    	if(extension == "pdf") {
	                        	$('#blah-'+inps[1]).replaceWith($('<embed id="blah-'+inps[1]+'" src="" />'));
	                        }
	                        $('#blah-'+inps[1]).show();
	                       // $('#blah-'+inps[1]).attr('src', e.target.result).css('width', '120px').css('height', '120px').css('border-radius', '50% 50% 50% 50%');
	                        $('#blah-'+inps[1]).attr('src', e.target.result).css('width', '120px').css('height', '120px').css('cursor', 'pointer')
	                    }
	                    reader.readAsDataURL(this.files[0]);
	                }
	          	});
            });

            /*function readMoreCertImageURL(input) {
            	if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#morecertimgupload').css('display', 'none');
                        $('#blah').show();
                        $('#blah').attr('src', e.target.result).css('width', '120px').css('height', '120px').css('border-radius', '50% 50% 50% 50%');
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }*/

            function removeMoreCertURL(id) {
                $('#blah-'+id).attr('src', '');
                $('#blah-'+id).hide()
                $('#morecertimgupload-'+id).css('display', 'block');
                $("#morecertimgupload-"+id).val('');
            }

            function readCompanyImageURL(input) {
				var filecount = $(input)[0].files.length;
				if(filecount <5) {
		                for(var i=0; i< filecount; i++) {
		                   setup_reader($(input)[0].files, i);
		                }
				} else {
					alert('You can not select more than 4 files');
				}

            }
            function setup_reader(files, i) {
                var file = files[i];
                var name = file.name;
                var reader = new FileReader();
                reader.onload = function(e){
                	//readerLoaded(e, files, i, name);
                	var j = parseInt(i) + 1;
                    $('#imgupload').css('display', 'none');
                    $('#companyphoto'+j).show();
                    $('#companyphoto'+j).attr('src', e.target.result).css('width', '120px').css('height', '120px');
                };
                reader.readAsDataURL(files[i]);
            }
            function readerLoaded(e, files, i, name) {
                // get file content  
               // var bin = e.target.result;
               var j = parseInt(i) + 1;
               //	alert('companyphoto'+j);
                $('#imgupload').css('display', 'none');
               $('#companyphoto'+j).show();
               $('#companyphoto'+j).attr('src', e.target.result).css('width', '120px').css('height', '120px');
                // If there's a file left to load
                if (i < files.length - 1) {
                    setup_reader(files, i+1);
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

            function readBuisnessURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#buisnessImg').css('display', 'none');
                        $('#blah').show();
                        $('#blah').attr('src', e.target.result).css('width', '120px').css('height', '120px').css('border-radius', '50% 50% 50% 50%');
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            function readCertImageURL(input) {
				var filecount = $(input)[0].files.length;
				if(filecount <5) {
		                for(var i=0; i< filecount; i++) {
		                	setup_readercert($(input)[0].files, i);
		                }
				} else {
					alert('You can not select more than 4 files');
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
                    	$('#certiphoto'+j).replaceWith($('<embed id="certiphoto'+j+'" src="" />'));
                    }
                    $('#certiphoto'+j).show();
                    $('#certiphoto'+j).attr('src', e.target.result).css('width', '60px').css('height', '60px');
                };
                reader.readAsDataURL(files[i]);
            }

            function removeCertImage() {
            	$('#certiphoto1').attr('src', '');
                $('#certiphoto1').hide();
                $('#certiphoto2').attr('src', '');
                $('#certiphoto2').hide();
                $('#certiphoto3').attr('src', '');
                $('#certiphoto3').hide();
                $('#certiphoto4').attr('src', '');
                $('#certiphoto4').hide();
                $('#certimgupload').attr('val', '');
                $('#certimgupload').css('display', 'block');
            }

            function readCompanyImgURL(input) {
                var id = input.id;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        if (id == 'companyImgFirst') {
                            $('#companyImgFirst').css('display', 'none');
                            $('#cmpnyImg1').show();
                            $('#cmpnyImg1').attr('src', e.target.result).css('width', '80px').css('height', '80px').css('border-radius', '10% 10% 10% 10%');
                        } else if (id == 'companyImgSecond') {
                            $('#companyImgSecond').css('display', 'none');
                            $('#cmpnyImg2').show();
                            $('#cmpnyImg2').attr('src', e.target.result).css('width', '80px').css('height', '80px').css('border-radius', '10% 10% 10% 10%');

                        } else if (id == 'companyImageThird') {
                            $('#companyImageThird').css('display', 'none');
                            $('#cmpnyImg3').show();
                            $('#cmpnyImg3').attr('src', e.target.result).css('width', '80px').css('height', '80px').css('border-radius', '10% 10% 10% 10%');

                        } else if (id == 'companyImageFour') {
                            $('#companyImageFour').css('display', 'none');
                            $('#cmpnyImg4').show();
                            $('#cmpnyImg4').attr('src', e.target.result).css('width', '80px').css('height', '80px').css('border-radius', '10% 10% 10% 10%');
                        }

                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }





        </script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]
        -->        
        <script type="text/javascript">
        	$(document).ready(function(){
	        	$("#mobileCode").keypress(function() {
	        		$('#mobileCodeErr').hide();
	        	});
	        	$("#mobileNumber").keypress(function() {
	        		$('#mobileNumberErr').hide();
	        	});
	        	$("#timezone").keypress(function() {
	        		$('#timeZoneErr').hide();
	        	});
	        	$("#position").keypress(function() {
	        		$('#positionErr').hide();
	        	});
	        	$("#country").keypress(function() {
	        		$('#countryErr').hide();
	        	});
	        	$("#province").keypress(function() {
	        		$('#provinceErr').hide();
	        	});
	        	$("#city").keypress(function() {
	        		$('#cityErr').hide();
	        	});
	        	$("#street").keypress(function() {
	        		$('#streetErr').hide();
	        	});
	        	$("#alternateEmail").keypress(function() {
	        		$('#alternateEmailErr').hide();
	        	});
        	});
            function ValidateForm1() {
            	ajaxindicatorstart("Please wait .. while we save personal info ..");
                var regexp;
                var numbers = /^[0-9]+$/;
                var regex = new RegExp("^[a-zA-Z]+$");
                if (document.myprofile.profilepath.value == "" || document.myprofile.profilepath.value == 'undefined') {
                    $('#imgInp').show().html('Please enter email.');
                    $('#imgInp').css('border', '1px solid red');
                    $('#imgInp').focus();
                    ajaxindicatorstop();
                    return false;
                } else {
                    $('#imgInp').css('border', 'none');
                }
                if (document.myprofile.alternateEmail.value == "") {
                    $('#alternateEmailErr').show().html('Please enter email.');
                    $('#alternateEmail').focus();
                    ajaxindicatorstop();
                    return false;
                } else {
                    isValid = validateEmail(document.myprofile.alternateEmail.value);
                    if (isValid == true) {
                        $('#alternateEmailErr').hide();
                    } else {
                        $('#alternateEmailErr').show().html('Please enter correct emails.');
                        $('#alternateEmail').focus();
                        ajaxindicatorstop();
                        return false;
                    }
                }
                if (document.myprofile.position.value == "") {
                    $('#positionErr').show().html('Please enter Position / title.');
                    $('#position').focus();
                    ajaxindicatorstop();
                    return false;
                } else if (document.myprofile.position.value.length < 3) {
                    $('#positionErr').show().html('Please enter position more than two characters.');
                    $('#position').focus();
                    ajaxindicatorstop();
                    return false;
                } else if (document.myprofile.position.value.length > 30) {
                    $('#positionErr').show().html('Please enter position should not more than thirty characters.');
                    $('#position').focus();
                    ajaxindicatorstop();
                    return false;
                } else {
                    $('#positionErr').hide();
                }

                if (document.myprofile.timezone.value == "") {
                    $('#mobile').show();
                    $('#timeZoneErr').show().html('Please enter Timezone.');
                    $('#timezone').focus();
                    ajaxindicatorstop();
                    return false;
                } else {
                    $('#timeZoneErr').hide();
                    $('#mobile').hide();
                }
                if (document.myprofile.mobileCode.value == "") {
                    $('#mobile').show();
                    $('#mobileCodeErr').show().html('Please enter phone code.');
                    $('#mobileCode').focus();
                    ajaxindicatorstop();
                    return false;
                } else if (!/^[0-9]+$/.test(document.myprofile.mobileCode.value)) {
                    $('#mobile').show();
                    $('#mobileCodeErr').show().html('Please enter only numbers.');
                    $('#mobileCode').focus();
                    ajaxindicatorstop();
                    return false;
                } else {
                    $('#mobileCodeErr').hide();
                    $('#mobile').hide();
                }
                if (document.myprofile.mobileNumber.value == "") {
                    $('#mobile').show();
                    $('#mobileNumberErr').show().html('Please enter phone number.');
                    $('#mobileNumber').focus();
                    ajaxindicatorstop();
                    return false;
                } else if (document.myprofile.mobileNumber.value.length < 4) {
                    $('#mobile').show();
                    $('#mobileNumberErr').show().html('Phone number should be four digit or more.');
                    $('#mobileNumber').focus();
                    ajaxindicatorstop();
                    return false;
                } else if (!/^[0-9]+$/.test(document.myprofile.mobileNumber.value)) {
                    $('#mobile').show();
                    $('#mobileNumberErr').show().html('Please enter only numbers.');
                    $('#mobileNumber').focus();
                    ajaxindicatorstop();
                    return false;
                } else {
                    $('#mobileNumberErr').hide();
                    $('#mobile').hide();
                }

                if (document.myprofile.country.value.length == "") {
                    $('#contact').show();
                    $('#countryErr').show().html('Please enter country.');
                    $('#country').focus();
                    ajaxindicatorstop();
                    return false;
                } else {
                    $('#countryErr').hide();
                    $('#contact').hide();
                }
                if (document.myprofile.province.value == "") {
                    $('#contact').show();
                    $('#provinceErr').show().html('Please enter province.');
                    $('#province').focus();
                    ajaxindicatorstop();
                    return false;
                } else {
                    $('#contact').hide();
                    $('#provinceErr').hide();
                }
                if (document.myprofile.city.value == "") {
                    $('#contact').show();
                    $('#cityErr').show().html('Please enter city.');
                    $('#city').focus();
                    ajaxindicatorstop();
                    return false;
                } else if (document.myprofile.city.value.length < 3) {
                    $('#contact').show();
                    $('#cityErr').show().html('City name should be greater than two character.');
                    $('#city').focus();
                    ajaxindicatorstop();
                    return false;
                } else {
                    $('#cityErr').hide();
                    $('#contact').hide();
                }
                if (document.myprofile.street.value == "") {
                    $('#contact').show();
                    $('#streetErr').show().html('Please enter street address.');
                    $('#street').focus();
                    ajaxindicatorstop();
                    return false;
                } else {
                    $('#streetErr').hide();
                    $('#contact').hide();
                }

                if (document.myprofile.name.value == "") {
                    $('#nameErr').show().html('Please enter email.');
                    $('#name').focus();
                    ajaxindicatorstop();
                    return false;
                } else if (document.myprofile.name.value.length < 3) {
                    $('#nameErr').show().html('Name should be greater than three characters.');
                    theForm.Editbox1.focus();
                    ajaxindicatorstop();
                    return false;
                } else {
                    $('#nameErr').hide();
                }

                document.getElementById('myprofile').submit();
            }
        </script>
  	</head>
<body style="background-color: #F5F5F5;">      
    <!-- register -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center" style="background:url(<?php echo asset_url(); ?>images/ts/hiker-984083_1920.jpg) no-repeat center center; background-size:cover;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <p style="color:#fff;">Get started, Join free, Add a unique value to your business, discover a new vision of e-commerce and much more..!</p>
                    <h4 class="modal-title" id="myModalLabel" style="color:#fff;">SOCIAL B2B COMMUNITY</h4>
                </div>
                <div class="modal-body">
                    <div class="panel">
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <table>
                                        <tr>
                                            <td class="col-xs-4 col-sm-2">
                                                <select class="form-control input-box">
                                                    <option>Mr.</option>
                                                    <option>Miss.</option>
                                                    <option>Mrs.</option>
                                                    <option>Ms.</option>
                                                </select>
                                            </td>
                                            <td class="col-xs-7 col-sm-9"><input class="input-box form-control" type="text" placeholder="Full Name"></td>
                                            <td class="col-xs-1 text-center" style="vertical-align:middle;"><img src="<?php echo asset_url(); ?>images/ts/tick-octagon-frame.png"></td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-11" colspan="2"><input class="input-box form-control" type="text" placeholder="Email"></td>
                                            <td class="col-xs-1 text-center" style="vertical-align:middle;" colspan="3"><img src="<?php echo asset_url(); ?>images/ts/tick-octagon-frame.png"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center" colspan="3"><small> Your Email will be your unique Trade Station ID, and couldn't be changed after.</small></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="form-group" style="margin-top:50px;">
                                    <h5> Select your registration type </h5>
                                    <table>
                                        <tr>
                                            <td class="col-xs-1 col-sm-1">
                                                <input type="checkbox" class="input-box form-control">
                                            </td>
                                            <td class="col-xs-6 col-sm-5">
                                                <img src="<?php echo asset_url(); ?>images/ts/seller.png" style="width:30px"><small>Seller</small>
                                            </td>
                                            <td class="col-xs-7 col-sm-9">
                                                <select class="form-control input-box">
                                                    <option>Business type</option>
                                                    <option>Manufacturer</option>
                                                    <option>Supplier</option>
                                                    <option>Trading Company</option>
                                                    <option>Product/Brand Agent</option>
                                                </select>
                                            </td>
                                            <td class="col-xs-1 text-center" style="vertical-align:middle;"><img src="<?php echo asset_url(); ?>images/ts/tick-octagon-frame.png"></td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-1 col-sm-1">
                                                <input type="checkbox" class="input-box form-control">
                                            </td>
                                            <td class="col-xs-6 col-sm-5">
                                                <img src="<?php echo asset_url(); ?>images/ts/shipper.png" style="width:30px"><small>Shipper</small>
                                            </td>
                                            <td class="col-xs-7 col-sm-9">
                                                <select class="form-control input-box">
                                                    <option>Business type</option>
                                                    <option>Manufacturer</option>
                                                    <option>Supplier</option>
                                                    <option>Trading Company</option>
                                                    <option>Product/Brand Agent</option>
                                                </select>
                                            </td>
                                            <td class="col-xs-1 text-center" style="vertical-align:middle;"><img src="<?php echo asset_url(); ?>images/ts/tick-octagon-frame.png"></td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-1 col-sm-1">
                                                <input type="checkbox" class="input-box form-control">
                                            </td>
                                            <td class="col-xs-6 col-sm-5">
                                                <img src="<?php echo asset_url(); ?>images/ts/buyer.png" style="width:30px"><small>Buyer</small>
                                            </td>
                                            <td class="col-xs-7 col-sm-9">
                                                <select class="form-control input-box">
                                                    <option>Business type</option>
                                                    <option>Manufacturer</option>
                                                    <option>Supplier</option>
                                                    <option>Trading Company</option>
                                                    <option>Product/Brand Agent</option>
                                                </select>
                                            </td>
                                            <td class="col-xs-1 text-center" style="vertical-align:middle;"><img src="<?php echo asset_url(); ?>images/ts/tick-octagon-frame.png"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h2 class="text-center"><small> TRADE</small><br>
                                            <b style="color:#F05235;">STATION</b></h2>
                                        <p class="text-center">Press next to Agree & Accept our<a href="#"> Terms of use & Privacy policy.</a></p>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-sm-offset-4 text-center"><a href="#" class="btn btn-danger btn-lg btn-block">NEXT</a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- register -->
    <!-- login -->
    <div class="modal fade" id="myModallogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center" style="padding:10% 0; background:url(<?php echo asset_url(); ?>images/ts/background0.jpg) no-repeat center center; background-size:cover;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position:relative; top:-50px; opacity:1; right:10px;"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title" id="myModalLabel" style="color:#fff;">SOCIAL B2B PLATFORM</h2>
                    <h4 class="modal-title" id="myModalLabel" style="color:#fff;"> Generating Customers Each Second</h4>
                </div>
                <div class="modal-body">
                    <div class="panel">
                        <div class="panel-body">
                            <form>
                                <h3 class="text-center">Sign in to the Trade Station</h3>
                                <div class="form-group">
                                    <table style="width:100%">
                                        <tr>
                                            <td class="col-xs-12"><input class="input-box form-control" name="email" type="text" placeholder="Email"></td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-12"><input class="input-box form-control" name="password" type="text" placeholder="Password"></td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox">Remember me
                                                    </label>
                                                </div>
                                            </td>
                                        <tr>
                                            <td class="col-xs-12"> <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center"><a href="#" class="btn btn-danger btn-lg btn-block">SIGN IN</a></div></td>
                                        </tr>
                                        <tr>
                                            <td class="col-xs-12">
                                                <div class="col-xs-12 text-center"><a href="#" class="btn btn-link">I forgot my password</a></div>
                                                <div class="col-xs-12 text-center"><a href="#" class="btn btn-link">Join us and create your free account</a></div>
                                            </td>
                                        </tr>
                                        </tr>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <h3> Sign in with</h3>
                                        <a href="#" class="btn"><img src="<?php echo asset_url(); ?>images/ts/face0.png" style="width:40px;"></a>
                                        <a href="#" class="btn"><img src="<?php echo asset_url(); ?>images/ts/google0.png" style="width:40px;"></a>
                                        <a href="#" class="btn"><img src="<?php echo asset_url(); ?>images/ts/qqlogin.png" style="width:40px;"></a>
                                    </div>
                                    <div class="col-xs-12">
                                        <h2 class="text-center"><small> TRADE</small><br>
                                            <b style="color:#F05235;">STATION</b></h2>
                                        <p class="text-center">Copyrights | TRDSTATION 2013-2016@All Rights Reserved</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- login -->
    <div class="container-fluid top-div">
        <div class="navbar-header"> <a href="<?php echo base_url()?>" class="navbar-brand"><span style="color:#A9A9A9;font-family:Arial;font-size:16px;">TRD</span><span style="color:#F05539;font-family:Impact;font-size:16px;">STATION</span></a> </div>
        <ul class="nav navbar-nav pull-right top-nav login-user-nav">
            <li style="padding-top:20px;">
                <span style="color:#FFFFFF;font-family:Georgia;font-size:13px;">
                    <?php echo $tsprefix."  ".$tsusername; ?> 
              	</span>
           	</li>
            <li class="dropdown "><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <?php if ($this->session->userdata('sess_profile_img') == '') { ?>
                        <img src="<?php echo asset_url(); ?>images/img0982.png" class="img-circle" style="width:30px; height:30px; margin-right:5px;">
                    <?php } else { ?>
                        <img src="<?php echo asset_url(); ?><?php echo $this->session->userdata('sess_profile_img') ?>" class="img-circle" style="width:30px; height:30px; margin-right:5px;">
                    <?php } ?>
                    <img src="<?php echo asset_url(); ?>images/img1188.png" id="Shape17" alt="" style="width:14px;height:7px;"></a>
                <ul class="dropdown-menu" role="menu" style="font-weight: bold; left: -25px;font-size: 12px;text-align: center;min-width: 100px;">
                	<?php if($activstatus == 0) { ?>
                   		 <li class="firstmain"><a href="<?php echo base_url()?>continueregistration" target="_self">Continue</a> </li>
                   	<?php } else { ?>
                    		<li class="firstmain"><a href="<?php echo base_url()?>mystation" target="_self">My Station</a> </li>
                    <?php } ?>
                    <li><a href="<?php echo base_url(); ?>logout" target="_self" >Save & Logout</a> </li>
                </ul>
            </li>
            <li class="dropdown " style="margin-top:5px;"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Language 
                    <img src="<?php echo asset_url(); ?>images/img1188.png" id="Shape17" alt="" style="width:14px;height:7px;"></a>
                <ul class="dropdown-menu" role="menu">
                        <li class="firstmain"><a href="#" target="_self">English</a> </li>
                        <li><a href="#" target="_self">中文</a> </li>
                        <li><a href="#" target="_self">العربية</a> </li>
                        <li><a href="#" target="_self">Türk</a> </li>
                        <li><a href="#" target="_self">日本語</a> </li>
                        <li><a href="#" target="_self">한국어</a> </li>
                        <li><a href="#" target="_self">भारतीय</a> </li>
                        <li><a href="#" target="_self">русский</a> </li>
                        <li><a href="#" target="_self">Dutch</a> </li>
                    </ul>
            </li>
        </ul>
    </div>
