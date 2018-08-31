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
			<div id="wb_CssMenu2" style="width: 157px; height: 221px; z-index: 44;visibility: hidden;">
				<ul>
					<li class="firstmain"><a href="#" target="_self">Men&nbsp;Fashion</a>
					</li>
					<li><a href="#" target="_self">Lady&nbsp;Fashion</a></li>
					<li><a href="#" target="_self">Kids&nbsp;Fashion</a></li>
					<li><a href="#" target="_self">More&nbsp;</a></li>
					<li><a href="#" target="_self">More</a></li>
					<li><a href="#" target="_self">More</a></li>
					<li><a href="#" target="_self">Up&nbsp;to&nbsp;10&nbsp;products</a>
					</li>
				</ul>
				<br>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="row" style="margin-top:15px;">
		  		<div class="col-sm-12" id="wb_Text358" style="text-align:left;">
					<div style="margin-bottom:10px;"><span style="color:#2D2D2D;font-family:Georgia;font-size:21px;"><span style="color: #F05539; font-family: Arial; font-size: 13px;">*</span> Main Products Directory</span></div>
					<div style="margin-bottom:10px;margin-left:10px;">
						<span class="desk-site-text-sm">
						The Main Products are the contents of your Desksite/Website menu, which shows the main products you work for. <br>
						Each main product can contains number of sub products or Products (items).<br>
						</span>
					</div>
					<div style="margin-left:10px;">
						<span class="desk-site-text-sm">
							<span style="color: #1E90FF; font-family: Georgia; font-size: 11px;">
								<a href="javascript:ShowObjectWithEffect('wb_CssMenu2', 1, 'slideup', 500);" class="style19" >I not understand clear, please show me where.</a>
							</span><br>
						</span>
					</div>
				</div>
			</div>
			<form name="mainproductfrm" id="mainproductfrm" action="" method="post">
				<div class="row" style="margin-top:30px;">
					<div class="col-sm-12">
						<div class="row">
							<div class="form-group col-sm-5" >
								<div class="">
									<input type="text" name="main_product[]" id="ds_main_product_1" class="ds-product-input ds-mp-input" placeholder="Only one product" autocorrect="on" maxlength="25" spellcheck="true"/>
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
										<input type="hidden" name="main_category[]" id="ds_main_cat_1" value=""/>
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
									<input type="text" name="main_product[]" id="ds_main_product_2" class="ds-product-input ds-mp-input" placeholder="Only one product" autocorrect="on" maxlength="25" spellcheck="true"/>
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
									<input type="text" name="main_product[]" id="ds_main_product_3" class="ds-product-input ds-mp-input" placeholder="Only one product" autocorrect="on" maxlength="25" spellcheck="true"/>
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
									<input type="text" name="main_product[]" id="ds_main_product_4" class="ds-product-input ds-mp-input" placeholder="Only one product" autocorrect="on" maxlength="25" spellcheck="true"/>
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
									<input type="text" name="main_product[]" id="ds_main_product_5" class="ds-product-input ds-mp-input" placeholder="Only one product" autocorrect="on" maxlength="25" spellcheck="true"/>
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
									<input type="text" name="main_product[]" id="ds_main_product_6" class="ds-product-input ds-mp-input" placeholder="Only one product" autocorrect="on" maxlength="25" spellcheck="true"/>
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
									<input type="text" name="main_product[]" id="ds_main_product_7" class="ds-product-input ds-mp-input" placeholder="Only one product" autocorrect="on" maxlength="25" spellcheck="true"/>
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
									<input type="text" name="main_product[]" id="ds_main_product_8" class="ds-product-input ds-mp-input" placeholder="Only one product" autocorrect="on" maxlength="25" spellcheck="true"/>
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
									<input type="text" name="main_product[]" id="ds_main_product_9" class="ds-product-input ds-mp-input" placeholder="Only one product" autocorrect="on" maxlength="25" spellcheck="true"/>
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
				<div class="row" style="margin-top:10px;">
					<div class="col-sm-12">
						<div class="row">
							<div class="form-group col-sm-5">
								<div>
									<input type="text" name="main_product[]" id="ds_main_product_10" class="ds-product-input ds-mp-input" placeholder="Only one product" autocorrect="on" maxlength="25" spellcheck="true"/>
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
				<br>
				<div class="pull-right">
					<input type="submit" href="" name="mpsubmitbtn" class="btn btn-sm btn-danger-custom" value="Save & Continue" />
				</div>
			</form>
		
		</div>
	</div>
	<br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<script src="<?php echo asset_url();?>js/bootstrap-dropdownhover.min.js"></script>
<script>
//$(document).ready(function(){
	$('#mainproductfrm').bootstrapValidator({
	 container: function($field, validator) {
     	return $field.parent().next('.messageContainer');
     },
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
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
	}).on('error.field.bv', function(e, data) {
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
//});
	$(".ds-mp-input").focusout(function() {
		$('#mainproductfrm').bootstrapValidator ('revalidateField', 'main_category[]');	
	});
</script>
