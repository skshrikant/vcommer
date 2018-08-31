function getMyFiles()
{
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/myfile",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer101', 1, 'scale', 500, 'swing');
		$("#Layer101_Container").html(data);
		
		$(document).ready(function(){
			$('#frmprivatepassword').bootstrapValidator({
			 container: function($field, validator) {
		     	return $field.parent().next('.messageContainer');
		     },
		    feedbackIcons: {
		        validating: 'glyphicon glyphicon-refresh'
		    },
		    excluded: ':disabled',
		    fields: {
				    'password': {
				    	validators: {
				    		notEmpty: {
				    			message: 'The Password  is required and cannot be empty'
				    		}
				    	}
				    },
				    'privatefileupload': {
				    	validators: {
				    		notEmpty: {
				    			message: 'The File  is required and cannot be empty'
				    		}
				    	}
				    }
//		    	   	'subusercpassword': {
//			    	   	 validators: {
//			                 notEmpty: {
//			                     message: 'The ConfirmPassword is required and cannot be empty'
//			                 },
//			                 identical: {
//			                     field: 'data[password]',
//			                     message: 'The password and its confirm must be the same'
//			                 }
//			             }
//		    	   	}
		    	
				   }
				}).on('error.field.bv', function(e, data) {
					if (data.bv.getSubmitButton()) {
						data.bv.disableSubmitButtons(false);
					}
		    	}).on( 'status.field.bv', function( e, data ) {
		    	    $( '#btnprivatefilepassword').attr( 'disabled', false );
		    	}).on('success.form.bv', function(e) {
				   // Prevent form submission
				   e.preventDefault();
				   uploadPrivatefile();
				});
			});
		
		
		return false;
	});
	
}
function uploadPrivatefile()
{
	ajaxindicatorstart('Loading...');
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showFileUploadRequest, // pre-submit callback 
 			success :  showFileUploadResponse,
 			url : base_url+'mystation/privatefileupload',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmprivatepassword').ajaxSubmit(options);
}
function savePublicFile()
{
	ajaxindicatorstart('Loading...');
	var options = {
		target : '#response', // target element(s) to be updated with server response 
		beforeSubmit : showFileUploadRequest, // pre-submit callback 
		success :  showFileUploadResponse,
		url : base_url+'mystation/publicfileupload',
		semantic : true,
		dataType : 'json'
	};
	$('#frmfileupload').ajaxSubmit(options);
}
function showFileUploadRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showFileUploadResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		alert(resp.msg);
		} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		getMyFiles();
	}
}

function delteUploadedFiles()
{
	var r = confirm("Are you sure, you want to delete files?");
	if (r == true) {
		ajaxindicatorstart('Loading...');
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showfileDeleteRequest, // pre-submit callback 
 			success :  showfileDeleteResponse,
 			url : base_url+'mystation/deletefile',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmfileupload').ajaxSubmit(options);
		ajaxindicatorstop();
		getMyFiles();
	}
}
function showfileDeleteRequest(formData, jqForm, options){
	var queryString = $.param(formData);
return true;
}
function showfileDeleteResponse(resp, statusText, xhr, $form){
if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		alert(resp.msg);
	} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		//alert(resp.msg);
	}
	getMyFiles();
}
function Filelist()
{ 
		var values = new Array();
	        $.each($("input[name='filearray[]']:checked"), function(){            
	        	values.push($(this).val());
            });
	values = values.filter(v=>v!=null);
	if(values.length > 0 ) {
		delteUploadedFiles();
		
	} else {
		alert("Please select File ");
	}
}	
