<style>
	.form-group {
		margin-bottom:0px;
	}
	ul.dropdown-menu {
		background-color:#EEEEEE;
	}
	ul.dropdown-menu li a {
		text-decoration:none;
	}
	ul.dropdown-menu li a:hover {
		background-color:#ccc;
	}
</style>
<div class="personal_info_div" id="desk_site_step_1" style="padding:0px 60px;">
	<div class="row">
		<div class="col-sm-3">
		&nbsp;
		</div>
		<div class="col-sm-6">
			<div class="row" style="margin-top:15px;">
		  		<div class="col-sm-12" id="wb_Text358" style="text-align:left;">
					<div style="margin-bottom:10px;"><span style="color:#2D2D2D;font-family:Georgia;font-size:21px;"><span style="color: #F05539; font-family: Arial; font-size: 13px;">*</span> Main Products</span></div>
					<div style="margin-bottom:10px;margin-left:10px;">
						<span class="desk-site-text-sm">
						The Main Products are the products your business focus on, or the products your looking for. <br>
						Type only one product in each field, and select the main category, which it sorted under.<br>
						</span>
					</div>
				</div>
			</div>
			<form name="mainproductfrm" id="mainproductfrm" action="" method="post">
				<input type="hidden" name="bmp_count" id="bmp_count" value="10" />
				<div class="row" style="margin-top:30px;">
					<div class="col-sm-12">
						<div class="row">
							<div class="form-group col-sm-5" >
								<div class="">
									<input type="text" name="main_product1" id="ds_main_product_1" class="ds-product-input" placeholder="Only one product"/>
								</div>
								<div class="messageContainer"></div>
							</div>
							<div class="form-group col-sm-7">
								<div class="dropdown hover-dp">
								  	<button class="btn btn-default btn-main-cat dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" id="ds_main_cat_label_1">
								   		Select The Main Category <span class="caret" style="color:#d9574d;"></span>
								  	</button>
								  	<ul class="dropdown-menu">
								  		<?php foreach ($mcats as $mcat) { ?>
								    	<li class="dropdown">
								      		<a href="#"><?php echo $mcat['name'];?></a>
								      		<ul class="dropdown-menu">
								      			<?php foreach ($mcat['subcats'] as $scat) { ?>
								        		<li><a href="javascript:selectScat(<?php echo $scat['id'];?>,'1',`<?php echo $scat['name'];?>`);"><?php echo $scat['name'];?></a></li>
								        		<?php } ?>
								       		</ul>
								    	</li>
								    	<?php } ?>
								  	</ul>
								</div>
								<div class="form-group" >
									<div>
										<input type="hidden" name="main_category1" id="ds_main_cat_1" value=""/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:10px;">
					<div class="col-sm-12">
						<div class="row">
							<div class="form-group col-sm-5">
								<div>
									<input type="text" name="main_product[]" id="ds_main_product_2" class="ds-product-input ds-mp-input" placeholder="Only one product"/>
								</div>
								<div class="messageContainer"></div>
							</div>
							<div class="col-sm-7">
								<div class="dropdown hover-dp">
								  	<button class="btn btn-default btn-main-cat dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" id="ds_main_cat_label_2">
								   		Select The Main Category <span class="caret" style="color:#d9574d;"></span>
								  	</button>
								  	<ul class="dropdown-menu">
								    	<?php foreach ($mcats as $mcat) { ?>
								    	<li class="dropdown">
								      		<a href="#"><?php echo $mcat['name'];?></a>
								      		<ul class="dropdown-menu">
								      			<?php foreach ($mcat['subcats'] as $scat) { ?>
								        		<li><a href="javascript:selectScat(<?php echo $scat['id'];?>,'2',`<?php echo $scat['name'];?>`);"><?php echo $scat['name'];?></a></li>
								        		<?php } ?>
								       		</ul>
								    	</li>
								    	<?php } ?>
								  	</ul>
								</div>
								<div>
							  		<input type="hidden" name="main_category[]" id="ds_main_cat_2" value=""/>
							  	</div>
							  	<div class="messageContainer"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:10px;">
					<div class="col-sm-12">
						<div class="row">
							<div class="form-group col-sm-5">
								<div>
									<input type="text" name="main_product[]" id="ds_main_product_3" class="ds-product-input ds-mp-input" placeholder="Only one product"/>
								</div>
								<div class="messageContainer"></div>
							</div>
							<div class="form-group col-sm-7">
								<div class="dropdown hover-dp">
								  	<button class="btn btn-default btn-main-cat dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" id="ds_main_cat_label_3">
								   		Select The Main Category <span class="caret" style="color:#d9574d;"></span>
								  	</button>
								  	<ul class="dropdown-menu">
								    	<?php foreach ($mcats as $mcat) { ?>
								    	<li class="dropdown">
								      		<a href="#"><?php echo $mcat['name'];?></a>
								      		<ul class="dropdown-menu">
								      			<?php foreach ($mcat['subcats'] as $scat) { ?>
								        		<li><a href="javascript:selectScat(<?php echo $scat['id'];?>,'3',`<?php echo $scat['name'];?>`);"><?php echo $scat['name'];?></a></li>
								        		<?php } ?>
								       		</ul>
								    	</li>
								    	<?php } ?>
								  	</ul>
								</div>
								<div>
									<input type="hidden" name="main_category[]" id="ds_main_cat_3" value=""/>
								</div>
								<div class="messageContainer"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:10px;">
					<div class="col-sm-12">
						<div class="row">
							<div class="form-group col-sm-5">
								<div>
									<input type="text" name="main_product[]" id="ds_main_product_4" class="ds-product-input ds-mp-input" placeholder="Only one product"/>
								</div>
								<div class="messageContainer"></div>
							</div>
							<div class="form-group col-sm-7">
								<div class="dropdown hover-dp">
								  	<button class="btn btn-default btn-main-cat dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" id="ds_main_cat_label_4">
								   		Select The Main Category <span class="caret" style="color:#d9574d;"></span>
								  	</button>
								  	<ul class="dropdown-menu">
								    	<?php foreach ($mcats as $mcat) { ?>
								    	<li class="dropdown">
								      		<a href="#"><?php echo $mcat['name'];?></a>
								      		<ul class="dropdown-menu">
								      			<?php foreach ($mcat['subcats'] as $scat) { ?>
								        		<li><a href="javascript:selectScat(<?php echo $scat['id'];?>,'4',`<?php echo $scat['name'];?>`);"><?php echo $scat['name'];?></a></li>
								        		<?php } ?>
								       		</ul>
								    	</li>
								    	<?php } ?>
								  	</ul>
								</div>
								<div>
									<input type="hidden" name="main_category[]" id="ds_main_cat_4" value=""/>
								</div>
								<div class="messageContainer"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:10px;">
					<div class="col-sm-12">
						<div class="row">
							<div class="form-group col-sm-5">
								<div>
									<input type="text" name="main_product[]" id="ds_main_product_5" class="ds-product-input ds-mp-input" placeholder="Only one product"/>
								</div>
								<div class="messageContainer"></div>
							</div>
							<div class="form-group col-sm-7">
								<div class="dropdown hover-dp">
								  	<button class="btn btn-default btn-main-cat dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" id="ds_main_cat_label_5">
								   		Select The Main Category <span class="caret" style="color:#d9574d;"></span>
								  	</button>
								  	<ul class="dropdown-menu">
								    	<?php foreach ($mcats as $mcat) { ?>
								    	<li class="dropdown">
								      		<a href="#"><?php echo $mcat['name'];?></a>
								      		<ul class="dropdown-menu">
								      			<?php foreach ($mcat['subcats'] as $scat) { ?>
								        		<li><a href="javascript:selectScat(<?php echo $scat['id'];?>,'5',`<?php echo $scat['name'];?>`);"><?php echo $scat['name'];?></a></li>
								        		<?php } ?>
								       		</ul>
								    	</li>
								    	<?php } ?>
								  	</ul>
								</div>
								<div>
									<input type="hidden" name="main_category[]" id="ds_main_cat_5" value=""/>
								</div>
								<div class="messageContainer"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:10px;">
					<div class="col-sm-12">
						<div class="row">
							<div class="form-group col-sm-5">
								<div>
									<input type="text" name="main_product[]" id="ds_main_product_6" class="ds-product-input ds-mp-input" placeholder="Only one product"/>
								</div>
								<div class="messageContainer"></div>
							</div>
							<div class="form-group col-sm-7">
								<div class="dropdown hover-dp">
								  	<button class="btn btn-default btn-main-cat dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" id="ds_main_cat_label_6">
								   		Select The Main Category <span class="caret" style="color:#d9574d;"></span>
								  	</button>
								  	<ul class="dropdown-menu">
								    	<?php foreach ($mcats as $mcat) { ?>
								    	<li class="dropdown">
								      		<a href="#"><?php echo $mcat['name'];?></a>
								      		<ul class="dropdown-menu">
								      			<?php foreach ($mcat['subcats'] as $scat) { ?>
								        		<li><a href="javascript:selectScat(<?php echo $scat['id'];?>,'6',`<?php echo $scat['name'];?>`);"><?php echo $scat['name'];?></a></li>
								        		<?php } ?>
								       		</ul>
								    	</li>
								    	<?php } ?>
								  	</ul>
								</div>
								<div>
									<input type="hidden" name="main_category[]" id="ds_main_cat_6" value=""/>
								</div>
								<div class="messageContainer"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:10px;">
					<div class="col-sm-12">
						<div class="row">
							<div class="form-group col-sm-5">
								<div>
									<input type="text" name="main_product[]" id="ds_main_product_7" class="ds-product-input ds-mp-input" placeholder="Only one product"/>
								</div>
								<div class="messageContainer"></div>
							</div>
							<div class="form-group col-sm-7">
								<div class="dropdown hover-dp">
								  	<button class="btn btn-default btn-main-cat dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" id="ds_main_cat_label_7">
								   		Select The Main Category <span class="caret" style="color:#d9574d;"></span>
								  	</button>
								  	<ul class="dropdown-menu">
								    	<?php foreach ($mcats as $mcat) { ?>
								    	<li class="dropdown">
								      		<a href="#"><?php echo $mcat['name'];?></a>
								      		<ul class="dropdown-menu">
								      			<?php foreach ($mcat['subcats'] as $scat) { ?>
								        		<li><a href="javascript:selectScat(<?php echo $scat['id'];?>,'7',`<?php echo $scat['name'];?>`);"><?php echo $scat['name'];?></a></li>
								        		<?php } ?>
								       		</ul>
								    	</li>
								    	<?php } ?>
								  	</ul>
								</div>
								<div>
									<input type="hidden" name="main_category[]" id="ds_main_cat_7" value=""/>
								</div>
								<div class="messageContainer"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:10px;">
					<div class="col-sm-12">
						<div class="row">
							<div class="form-group col-sm-5">
								<div>
									<input type="text" name="main_product[]" id="ds_main_product_8" class="ds-product-input ds-mp-input" placeholder="Only one product"/>
								</div>
								<div class="messageContainer"></div>
							</div>
							<div class="form-group col-sm-7">
								<div class="dropdown hover-dp">
								  	<button class="btn btn-default btn-main-cat dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" id="ds_main_cat_label_8">
								   		Select The Main Category <span class="caret" style="color:#d9574d;"></span>
								  	</button>
								  	<ul class="dropdown-menu">
								    	<?php foreach ($mcats as $mcat) { ?>
								    	<li class="dropdown">
								      		<a href="#"><?php echo $mcat['name'];?></a>
								      		<ul class="dropdown-menu">
								      			<?php foreach ($mcat['subcats'] as $scat) { ?>
								        		<li><a href="javascript:selectScat(<?php echo $scat['id'];?>,'8',`<?php echo $scat['name'];?>`);"><?php echo $scat['name'];?></a></li>
								        		<?php } ?>
								       		</ul>
								    	</li>
								    	<?php } ?>
								  	</ul>
								</div>
								<div>
									<input type="hidden" name="main_category[]" id="ds_main_cat_8" value=""/>
								</div>
								<div class="messageContainer"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:10px;">
					<div class="col-sm-12">
						<div class="row">
							<div class="form-group col-sm-5">
								<div>
									<input type="text" name="main_product[]" id="ds_main_product_9" class="ds-product-input ds-mp-input" placeholder="Only one product"/>
								</div>
								<div class="messageContainer"></div>
							</div>
							<div class="form-group col-sm-7">
								<div class="dropdown hover-dp">
								  	<button class="btn btn-default btn-main-cat dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" id="ds_main_cat_label_9">
								   		Select The Main Category <span class="caret" style="color:#d9574d;"></span>
								  	</button>
								  	<ul class="dropdown-menu">
								    	<?php foreach ($mcats as $mcat) { ?>
								    	<li class="dropdown">
								      		<a href="#"><?php echo $mcat['name'];?></a>
								      		<ul class="dropdown-menu">
								      			<?php foreach ($mcat['subcats'] as $scat) { ?>
								        		<li><a href="javascript:selectScat(<?php echo $scat['id'];?>,'9',`<?php echo $scat['name'];?>`);"><?php echo $scat['name'];?></a></li>
								        		<?php } ?>
								       		</ul>
								    	</li>
								    	<?php } ?>
								  	</ul>
								</div>
								<div>
									<input type="hidden" name="main_category[]" id="ds_main_cat_9" value=""/>
								</div>
								<div class="messageContainer"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:10px;" id="optionTemplate">
					<div class="col-sm-12">
						<div class="row">
							<div class="form-group col-sm-5">
								<div>
									<input type="text" name="main_product[]" id="ds_main_product_10" class="ds-product-input ds-mp-input" placeholder="Only one product"/>
								</div>
								<div class="messageContainer"></div>
							</div>
							<div class="form-group col-sm-7">
								<div class="dropdown hover-dp">
								  	<button class="btn btn-default btn-main-cat dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" id="ds_main_cat_label_10">
								   		Select The Main Category <span class="caret" style="color:#d9574d;"></span>
								  	</button>
								  	<ul class="dropdown-menu">
								    	<?php foreach ($mcats as $mcat) { ?>
								    	<li class="dropdown">
								      		<a href="#"><?php echo $mcat['name'];?></a>
								      		<ul class="dropdown-menu">
								      			<?php foreach ($mcat['subcats'] as $scat) { ?>
								        		<li><a href="javascript:selectScat(<?php echo $scat['id'];?>,'10',`<?php echo $scat['name'];?>`);"><?php echo $scat['name'];?></a></li>
								        		<?php } ?>
								       		</ul>
								    	</li>
								    	<?php } ?>
								  	</ul>
								</div>
								<div>
									<input type="hidden" name="main_category[]" id="ds_main_cat_10" value=""/>
								</div>
								<div class="messageContainer"></div>
							</div>
						</div>
					</div>
				</div>
				<div id="buyer_more_product_area">
				
				</div>
				<br>
				<div class="row">
					<div class="col-sm-12" id="addmoredive">
						<button type="button" class="btn btn-default addButton">
							<span style="color:#1E90FF;font-family:Arial;font-size:13px;"><strong><u>Add More</u></strong></span>
						</button>
					</div>
				</div>
				<div class="pull-right">
					<input type="submit" name="mpsubmitbtn" class="btn btn-sm btn-danger-custom" value="Save & Continue" />
				</div>
			</form>
		
		</div>
	</div>
	<br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<script src="<?php echo asset_url();?>js/bootstrap-dropdownhover.min.js"></script>
<script>
var MAX_OPTIONS = 13;
/*function addMoreMainProducts() {
	var bmp_count = parseInt($("#bmp_count").val());
	bmp_count++;
	var html = '<div class="row" style="margin-top:10px;">'
			  +'<div class="col-sm-12">'
			  +'<div class="row">'
			  +'<div class="form-group col-sm-5">'
			  +'<div>'
			  +'<input type="text" name="main_product[]" id="ds_main_product_'+bmp_count+'" class="ds-product-input ds-mp-input" placeholder="Only one product"/>'
			  +'</div>'
			  +'<div class="messageContainer"></div>'
			  +'</div>'
			  +'<div class="form-group col-sm-7">'
			  +'<div class="dropdown hover-dp">'
			  +'<button class="btn btn-default btn-main-cat dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" id="ds_main_cat_label_'+bmp_count+'">'
			  +'Select The Main Category <span class="caret" style="color:#d9574d;"></span>'
			  +'</button>'
			  +'<ul class="dropdown-menu">'
			    	<?php foreach ($mcats as $mcat) { ?>
			    	+'<li class="dropdown">'
			    	+'<a href="#"><?php echo $mcat['name'];?></a>'
			    	+'<ul class="dropdown-menu">'
			      			<?php foreach ($mcat['subcats'] as $scat) { ?>
			      			+'<li><a href="javascript:selectScat(<?php echo $scat['id'];?>,\''+bmp_count+'\',`<?php echo $scat['name'];?>`);"><?php echo $scat['name'];?></a></li>'
			        		<?php } ?>
			        +'</ul>'
			        +'</li>'
			    	<?php } ?>
			 +'</ul>'
			 +'</div>'
			 +'<div>'
			 +'<input type="hidden" name="main_category[]" id="ds_main_cat_'+bmp_count+'" value=""/>'
			 +'</div>'
			 +'<div class="messageContainer"></div>'
			 +'</div>'
			 +'</div>'
			 +'</div>'
			 +'</div>';
		var mps = $('.ds-product-input').length;
		if(mps < 14) {
			$("#bmp_count").val(bmp_count);
			$("#buyer_more_product_area").append(html);
			var dom_nodes = $($.parseHTML(html));
			$option   = dom_nodes.find('[name="main_product[]"]');
			$optioncat   = dom_nodes.find('[name="main_category[]"]');
			$('#mainproductfrm').bootstrapValidator('addField', $option);
			$('#mainproductfrm').bootstrapValidator('addField', $optioncat);
			$('#mainproductfrm').bootstrapValidator ('revalidateField', 'main_product[]');
			$('#mainproductfrm').bootstrapValidator ('revalidateField', 'main_category[]');
			$("#ds_main_product_"+bmp_count).focusout(function() {
				$('#mainproductfrm').bootstrapValidator ('revalidateField', 'main_category[]');	
			});
			if(mps == 13) {
				$("#addmoredive").hide();
			}
		} 
}*/
$(document).ready(function(){
	$('#mainproductfrm').data('bootstrapValidator', null);
	
	$('#mainproductfrm').bootstrapValidator({
	 container: function($field, validator) {
     	return $field.parent().next('.messageContainer');
     },
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
    	   	'main_product1': {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Main product name is required'
                 	}
             	}
    	   	},
    	   	'main_category1': {
    	   		validators: {
    	   			notEmpty: {
    	   				message: 'Category name is required'
    	   			}
    	   		}
    	   	},
    	   	'main_product[]': {
    	   		validators: {
    	   			callback: {
                        message: 'Duplicate main product',
                        callback: function(value, validator, $field) {
                        	var set = [];
                            $(".ds-mp-input").each(function(){
	                            if($( this ).val() != "")
                            	set.push($( this ).val());
                            });
                            return set.length === new Set(set).size ? true : false;
                        }
                    }
             	}
    	   	},
    	   	'main_category[]': {
    	   		validators: {
		    	   	callback: {
                        message: 'Category name is required and cannot be empty',
                        callback: function (value, validator, $field) {
                        	var myid = $($field).attr('id');
                        	var id_arr = myid.split("_");
                        	var input_id = 'ds_main_product_'+id_arr[3];
                        	var val = $("#"+input_id).val();
                        	if(val != "") {
	                        	if(parseInt(value) > 0) {
	                        		return true;
	                        	} else {
									return false;
	                        	}
                        	} else {
                        		return true;
                        	}
                        }
                    }
    	   		}
    	   	},
		     
		}
	})
	.on('click', '.addButton', function() {
	        var $template = $('#optionTemplate');
	        var bmp_count = parseInt($("#bmp_count").val());
	    	bmp_count++;
	        var html = '<div class="row" style="margin-top:10px;" id="optionTemplate">'
				  +'<div class="col-sm-12">'
				  +'<div class="row">'
				  +'<div class="form-group col-sm-5">'
				  +'<div>'
				  +'<input type="text" name="main_product[]" id="ds_main_product_'+bmp_count+'" class="ds-product-input ds-mp-input" placeholder="Only one product"/>'
				  +'</div>'
				  +'<div class="messageContainer"></div>'
				  +'</div>'
				  +'<div class="form-group col-sm-7">'
				  +'<div class="dropdown hover-dp">'
				  +'<button class="btn btn-default btn-main-cat dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" id="ds_main_cat_label_'+bmp_count+'">'
				  +'Select The Main Category <span class="caret" style="color:#d9574d;"></span>'
				  +'</button>'
				  +'<ul class="dropdown-menu">'
				    	<?php foreach ($mcats as $mcat) { ?>
				    	+'<li class="dropdown">'
				    	+'<a href="#"><?php echo $mcat['name'];?></a>'
				    	+'<ul class="dropdown-menu">'
				      			<?php foreach ($mcat['subcats'] as $scat) { ?>
				      			+'<li><a href="javascript:selectScat(<?php echo $scat['id'];?>,\''+bmp_count+'\',`<?php echo $scat['name'];?>`);"><?php echo $scat['name'];?></a></li>'
				        		<?php } ?>
				        +'</ul>'
				        +'</li>'
				    	<?php } ?>
				 +'</ul>'
				 +'</div>'
				 +'<div>'
				 +'<input type="hidden" name="main_category[]" id="ds_main_cat_'+bmp_count+'" value=""/>'
				 +'</div>'
				 +'<div class="messageContainer"></div>'
				 +'</div>'
				 +'</div>'
				 +'</div>'
				 +'</div>';
	    var $dom_nodes = $($.parseHTML(html));
	    $template.removeClass('hide').removeAttr('id');
	    $dom_nodes.insertAfter($template);
	    $("#bmp_count").val(bmp_count);
	    $option   = $dom_nodes.find('[name="main_product[]"]');
	    $option2   = $dom_nodes.find('[name="main_category[]"]');
	    // Add new field
	    $('[data-hover="dropdown"]').each(function () {
          var $target = $(this)
          $.fn.dropdownhover.call($target, $target.data())
        });
	    $('#mainproductfrm').bootstrapValidator('addField', $option);
	    $('#mainproductfrm').bootstrapValidator('addField', $option2);
	    $("#ds_main_product_"+bmp_count).focusout(function() {
			$('#mainproductfrm').bootstrapValidator ('revalidateField', 'main_category[]');	
		});
	})
	.on('added.field.bv', function(e, data) {
	    if (data.field === 'main_product[]') {
	        if ($('#mainproductfrm').find(':visible[name="main_product[]"]').length >= MAX_OPTIONS) {
	            $('#mainproductfrm').find('.addButton').attr('disabled', 'disabled');
	        }
	    }
	})
	.on('error.field.bv', function(e, data) {
			if (data.bv.getSubmitButton()) {
				data.bv.disableSubmitButtons(false);
			}
	   	}).on( 'status.field.bv', function( e, data ) {
	    	$( '#savepersonalbtn').attr( 'disabled', false );
	    }).on('success.form.bv', function(e) {
		   // Prevent form submission
		   e.preventDefault();
		   saveMainProducts();
		});
});
$(".ds-mp-input").focusout(function() {
	$('#mainproductfrm').bootstrapValidator ('revalidateField', 'main_category[]');	
});
</script>
