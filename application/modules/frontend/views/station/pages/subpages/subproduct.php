<div class="personal_info_div" id="desk_site_step_1">
	<div class="row">
		<div class="col-sm-12">
			<div class="row" style="margin-top:15px;padding:0px 60px;">
				<div class="col-sm-3">
					<div id="wb_CssMenu3" style="width: 157px; height: 192px; visibility: hidden;">
						<ul>
							<li class="firstmain">
								<a class="withsubmenu" href="#" target="_self">Men&nbsp;Fashion</a>
								<ul>
									<li class="firstitem"><a href="#" target="_self">Suits</a></li>
									<li><a href="#" target="_self">Shirts</a></li>
									<li><a href="#" target="_self">T-Shirts</a></li>
									<li><a href="#" target="_self">Trousers</a></li>
									<li class="lastitem"><a href="#" target="_self">More</a></li>
								</ul>
							</li>
							<li>
								<a class="withsubmenu" href="#" target="_self">Lady&nbsp;Fashion</a>
								<ul>
									<li class="firstitem"><a href="#" target="_self">Skirt</a></li>
									<li><a href="#" target="_self">Blouse</a></li>
									<li><a href="#" target="_self">T-Shirts</a></li>
									<li><a href="#" target="_self">Long&nbsp;Dress</a></li>
									<li class="lastitem"><a href="#" target="_self">Evening&nbsp;Dress</a>
									</li>
								</ul>
							</li>
							<li><a href="#" target="_self">Kids&nbsp;Fashion</a></li>
							<li><a href="#" target="_self">More</a></li>
							<li><a href="#" target="_self">More</a></li>
							<li><a href="#" target="_self">Up&nbsp;to&nbsp;10&nbsp;products</a>
							</li>
						</ul>
						<br>
					</div>
				</div>
		  		<div class="col-sm-6" id="wb_Text358" style="text-align:left;">
					<div style="margin-bottom:10px;"><span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Sub Products Directory</span></div>
					<div style="margin-bottom:10px;">
						<span class="desk-site-text-sm">
							The Sub Products considered a sub menu listed under each selected Main Product. When <br>
							one of your main product contains other sub product, an arrow icon will be displyed next to <br>
							the main product. <span style="color: #F05539; font-family: Arial; font-size: 11px;">( You can avoid adding sub product under some main products and <br>
							move to the next step to add product ( items) directly).</span>
						</span>
					</div>
					<div>
						<span class="desk-site-text-sm">
							<span style="color: #1E90FF; font-family: Georgia; font-size: 11px;">
								<a href="javascript:ShowObjectWithEffect('wb_CssMenu3', 1, 'slideup', 500);" class="style19" >I not understand clear, please show me where.</a>
							</span><br>
						</span>
					</div>
				</div>
			</div>
			<form name="subp_frm" id="subp_frm" action="" enctype="multipart/form-data" method="post">
				<input type="hidden" name="subpro_count" id="subpro_count" value="2" />
				<div class="col-sm-12">
					<div class="row" style="margin-top:10px;">
						<div class="col-sm-12">
							<div class="row" style="padding:5px 0px;">
								<div class="col-sm-1"></div>
								<div class="col-sm-2">
									<div class="form-group" >
										<div>
											<select name="mainproduct[]" id="mainproduct_1" class="mproductsel">
												<option value="0">Select Main Product</option>
												<?php foreach ($mproducts as $mproduct) { ?>
												<option value="<?php echo $mproduct['id'];?>"><?php echo $mproduct['name'];?></option>
												<?php } ?>
											</select>
										</div>
										<div class="messageContainer"></div>
									</div>
								</div>
								<div class="col-sm-8" style="color: #666666; font-family: Arial; font-size: 9.3px;">
									First select the main product which required sub product, then type the sub product name. You can add up to 10 sub <br>products ( one in each field ).
								</div>
							</div>
							<div class="row" style="padding:5px 0px;">
								<div class="col-sm-1"></div>
								<div class="col-sm-2">
									<input type="text" name="sub_product1[]" id="ds_main_product_1" class="ds-product-input spcl1" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
								<div class="col-sm-2">
									<input type="text" name="sub_product1[]" id="ds_main_product_1" class="ds-product-input spcl1" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
								<div class="col-sm-2">
									<input type="text" name="sub_product1[]" id="ds_main_product_1" class="ds-product-input spcl1" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
								<div class="col-sm-2">
									<input type="text" name="sub_product1[]" id="ds_main_product_1" class="ds-product-input spcl1" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
								<div class="col-sm-2">
									<input type="text" name="sub_product1[]" id="ds_main_product_1" class="ds-product-input spcl1" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
							</div>
							<div class="row" style="padding:5px 0px;">
								<div class="col-sm-1"></div>
								<div class="col-sm-2">
									<input type="text" name="sub_product1[]" id="ds_main_product_1" class="ds-product-input spcl1" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
								<div class="col-sm-2">
									<input type="text" name="sub_product1[]" id="ds_main_product_1" class="ds-product-input spcl1" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
								<div class="col-sm-2">
									<input type="text" name="sub_product1[]" id="ds_main_product_1" class="ds-product-input spcl1" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
								<div class="col-sm-2">
									<input type="text" name="sub_product1[]" id="ds_main_product_1" class="ds-product-input spcl1" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
								<div class="col-sm-2">
									<input type="text" name="sub_product1[]" id="ds_main_product_1" class="ds-product-input spcl1" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
							</div>
						</div>
					</div>
					<div class="row" style="margin-top:50px;">
						<div class="col-sm-12">
							<div class="row" style="padding:5px 0px;">
								<div class="col-sm-1"></div>
								<div class="col-sm-2">
									<div class="form-group" >
										<div>
											<select name="mainproduct[]" id="mainproduct_2" class="mproductsel">
												<option value="0">Select Main Product</option>
												<?php foreach ($mproducts as $mproduct) { ?>
												<option value="<?php echo $mproduct['id'];?>"><?php echo $mproduct['name'];?></option>
												<?php } ?>
											</select>
										</div>
										<div class="messageContainer"></div>
									</div>
								</div>
								<div class="col-sm-8" style="color: #666666; font-family: Arial; font-size: 9.3px;">
									First select the main product which required sub product, then type the sub product name. You can add up to 10 sub <br>products ( one in each field ).
								</div>
							</div>
							<div class="row" style="padding:5px 0px;">
								<div class="col-sm-1"></div>
								<div class="col-sm-2">
									<input type="text" name="sub_product2[]" id="ds_main_product_1" class="ds-product-input spcl2" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
								<div class="col-sm-2">
									<input type="text" name="sub_product2[]" id="ds_main_product_1" class="ds-product-input spcl2" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
								<div class="col-sm-2">
									<input type="text" name="sub_product2[]" id="ds_main_product_1" class="ds-product-input spcl2" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
								<div class="col-sm-2">
									<input type="text" name="sub_product2[]" id="ds_main_product_1" class="ds-product-input spcl2" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
								<div class="col-sm-2">
									<input type="text" name="sub_product2[]" id="ds_main_product_1" class="ds-product-input spcl2" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
							</div>
							<div class="row" style="padding:5px 0px;">
								<div class="col-sm-1"></div>
								<div class="col-sm-2">
									<input type="text" name="sub_product2[]" id="ds_main_product_1" class="ds-product-input spcl2" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
								<div class="col-sm-2">
									<input type="text" name="sub_product2[]" id="ds_main_product_1" class="ds-product-input spcl2" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
								<div class="col-sm-2">
									<input type="text" name="sub_product2[]" id="ds_main_product_1" class="ds-product-input spcl2" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
								<div class="col-sm-2">
									<input type="text" name="sub_product2[]" id="ds_main_product_1" class="ds-product-input spcl2" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
								<div class="col-sm-2">
									<input type="text" name="sub_product2[]" id="ds_main_product_1" class="ds-product-input spcl2" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>
								</div>
							</div>
						</div>
					</div>
					<div id="suproduct_landing">
					
					
					</div>
					<div class="text-left">
						<div class="row" style="margin-top:50px;">
							<div class="col-sm-1">&nbsp;</div>
							<div class="col-sm-10">
								<div class="pull-left" style="width:50px;">
									<a href="javascript:addMoreSubProducts();">
										<img src="http://trdstation.com/trdStation/assets/images/add.png" id="Image7" alt="" style="width:32px;height:32px;">
									</a>
								</div>
								<div class="col-sm-1" style="width:35px;padding:0px;">
									<a href="javascript:addMoreSubProducts();">
										<img src="<?php echo asset_url();?>images/add.png" id="Image7" alt="" style="width:32px;"/>
									</a>
								</div>
								<div class="pull-left">
									<span style="color: #666666; font-family: Arial; font-size: 9.3px;">Click the plus icon to select main product, then type sub products. You <br>can add up to 10 sub products ( type one in each field ).</span>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="pull-right">
						<a href="javascript:saveSubProducts();" class="btn btn-sm btn-danger-custom">Save & Continue</a>
					</div>
				</div>
			</form>
		
		</div>
	</div>
	<br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<script>
function addMoreSubProducts() {
	var mpcount = parseInt($("#subpro_count").val());
	mpcount++;
	var html = '<div class="row" style="margin-top:50px;">'
			  +'<div class="col-sm-12">'
			  +'<div class="row" style="padding:5px 0px;">'
			  +'<div class="col-sm-1"></div>'
			  +'<div class="col-sm-2">'
			  +'<div class="form-group" >'
			  +'<div>'
			  +'<select name="mainproduct[]" id="mainproduct_'+mpcount+'" class="mproductsel">'
			  +'<option value="">Select Main Product</option>'
				<?php if(!empty($mproducts)) { foreach ($mproducts as $mproduct) { ?>
			  +'<option value="<?php echo $mproduct['id'];?>"><?php echo $mproduct['name'];?></option>'
				<?php }} ?>
			  +'</select>'
			  +'</div>'
			  +'<div class="messageContainer"></div>'
			  +'</div>'
			  +'</div>'
			  +'<div class="col-sm-8" style="color: #666666; font-family: Arial; font-size: 9.3px;">&nbsp;'
			  +'</div>'
			  +'</div>'
			  +'<div class="row" style="padding:5px 0px;">'
			  +'<div class="col-sm-1"></div>'
			  +'<div class="col-sm-2">'
			  +'<input type="text" name="sub_product'+mpcount+'[]" id="ds_main_product_1" class="ds-product-input spcl'+mpcount+'" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>'
			  +'</div>'
			  +'<div class="col-sm-2">'
			  +'<input type="text" name="sub_product'+mpcount+'[]" id="ds_main_product_1" class="ds-product-input spcl'+mpcount+'" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>'
			  +'</div>'
			  +'<div class="col-sm-2">'
			  +'<input type="text" name="sub_product'+mpcount+'[]" id="ds_main_product_1" class="ds-product-input spcl'+mpcount+'" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>'
			  +'</div>'
			  +'<div class="col-sm-2">'
			  +'<input type="text" name="sub_product'+mpcount+'[]" id="ds_main_product_1" class="ds-product-input spcl'+mpcount+'" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>'
			  +'</div>'
			  +'<div class="col-sm-2">'
			  +'<input type="text" name="sub_product'+mpcount+'[]" id="ds_main_product_1" class="ds-product-input spcl'+mpcount+'" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>'
			  +'</div>'
			  +'</div>'
			  +'<div class="row" style="padding:5px 0px;">'
			  +'<div class="col-sm-1"></div>'
			  +'<div class="col-sm-2">'
			  +'<input type="text" name="sub_product'+mpcount+'[]" id="ds_main_product_1" class="ds-product-input spcl'+mpcount+'" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>'
			  +'</div>'
			  +'<div class="col-sm-2">'
			  +'<input type="text" name="sub_product'+mpcount+'[]" id="ds_main_product_1" class="ds-product-input spcl'+mpcount+'" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>'
			  +'</div>'
			  +'<div class="col-sm-2">'
			  +'<input type="text" name="sub_product'+mpcount+'[]" id="ds_main_product_1" class="ds-product-input spcl'+mpcount+'" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>'
			  +'</div>'
			  +'<div class="col-sm-2">'
			  +'<input type="text" name="sub_product'+mpcount+'[]" id="ds_main_product_1" class="ds-product-input spcl'+mpcount+'" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>'
			  +'</div>'
			  +'<div class="col-sm-2">'
			  +'<input type="text" name="sub_product'+mpcount+'[]" id="ds_main_product_1" class="ds-product-input spcl'+mpcount+'" placeholder="Only one product" autocorrect="on" spellcheck="true" maxlength="25"/>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'</div>';
	$("#suproduct_landing").append(html);
	$("#subpro_count").val(mpcount);
}
</script>