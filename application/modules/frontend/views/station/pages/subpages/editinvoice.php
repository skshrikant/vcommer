<link href="<?php echo asset_url();?>css/pages/invoice.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/bootstrap.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo asset_url();?>images/Homekit.png">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/jquery.dataTables.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/dataTables.bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/buttons.dataTables.min.css">
<script src="<?php echo asset_url();?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo asset_url();?>js/bootstrap.js"></script>
<script src="<?php echo asset_url();?>js/bootstrapValidator.min.js"></script>
<form name="frmeditinvoice"   method="post" action="" enctype="multipart/form-data" id="frmeditinvoice" >
	<div class="invoice" >
		<input type="hidden" value="<?php echo $order_id;?>" name="order_id"  id="order_id"/>
		<div id="buyeraddresspopup" style="display:none" >  
			<div class="row">
				<div class="col-md-12" style="text-align: center;padding-top: 17px;">
					<span style="color: #A9A9A9; font-family: Arial; font-size: 16px;">EDIT TEXT BOX</span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="padding: 10px; text-align: center;">
					<textarea id="txtbuyeradress" name="data[buyer_address]" class="inputboxstyle"><?php echo $orderdata[0]['buyer_address'];?></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="text-align: center;padding-top: 13px;">
					<button type="button"  onclick="updateaddress()" class="btnaddress">Change & Save</button>
					<button type="button"  onclick="closeaddresspopup();" class="btnaddress">Cancel</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-9" style="padding-bottom:60px;">
					<div style="margin:0 auto;background-color: #2D2D2D; width:900px;">
						<div class="row" >
							<div class="col-md-4" style="padding-left:30px;">
								<img alt="" src="<?php echo asset_url();?>images/Edit-order.png" /><span style="color:#D3D3D3;font-family:Arial;font-size:13px;"><strong>EDIT MODE</strong></span>
							</div>
							<div class="col-md-2">
								<input type="button" name="btnedit" onclick="editinvoice()"  value="Save and Close"  style="height:55px;width:144px;color:white;border:none;background-color:#0E9DF5;"/>
							</div>
							<div class="col-md-4">
								<input type="button" name="btnclose"  onclick="invoice(<?php echo $order_id;?>);"   value="Cancel and Close"  style="height:55px;width:144px;color:white;border:none;background-color:#0E9DF5;"/>
							</div>
						</div>
					</div>
					<div style="margin:0 auto;width:900px;padding-top:22px;">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-12">
											<span style="color:#2D2D2D;font-family:Arial;font-size:21px;"><strong>FIRST PARTY</strong></span>
										</div>
									</div>		
									<div class="row">
										<div class="col-sm-12">
											<div class="col-md-2">
												<img src="<?php echo asset_url();?>images/rseller3.png" id="Image182" style="width: 44px;">
											</div>
											<div class="col-sm-10">
												<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><strong><?php echo $orderdata[0]['sellercompany'];?></strong></span><br>
												<span style="color:#4B4B4B;font-family:Arial;font-size:12px;">Presented By: <?php echo $orderdata[0]['sellernameprefix']." ".$orderdata[0]['sellername'];?></span>
											</div>
										</div>
									</div>		
									<div class="row">
										<div class="col-sm-12">
											<span style="color:#4B4B4B;font-family:Arial;font-size:12px;"><?php echo $orderdata[0]['sellerstreet'].",".$orderdata[0]['sellercity'].",".$orderdata[0]['sellerprovince'].",".$orderdata[0]['sellercountry'].",".$orderdata[0]['sellerpobox']?></span>
										</div>
									</div>		
									<div class="row">
										<div class="col-sm-12">
											<span style="color:#4B4B4B;font-family:Arial;font-size:12px;"><strong>Tel: </strong>
											<?php echo $orderdata[0]['sellercitycode'];?> (<?php echo $orderdata[0]['sellertelcode'];?>) <?php echo $orderdata[0]['sellertelephone'];?>/ (<?php echo $orderdata[0]['sellertelcode'];?>) <?php echo $orderdata[0]['selleralttelnumber'];?> 
											</span>
										</div>
									</div>		
									<div class="row">
										<div class="col-sm-12">
											<span style="color:#4B4B4B;font-family:Arial;font-size:12px;"><strong>Mobile: </strong><?php echo $orderdata[0]['sellermobilecode']."  ".$orderdata[0]['sellermobile']?></span>
										</div>
									</div>		
								</div>	
								<div class="col-md-6" >
									<div class="row">
										<div class="col-md-12">
											<span style="color:#2D2D2D;font-family:Arial;font-size:21px;"><strong>SECOND PARTY</strong></span>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12" style="padding-bottom: 13px;">
											<div class="col-md-2">
												<img src="<?php echo asset_url();?>images/rseller3.png" id="Image182" style="width: 44px;">
											</div>
											<div class="col-sm-10">
												<div class="row" >
													<div class="col-sm-10 editlink" >
														<a  onclick="openaddressbox();"><span class="edit-textcolor"><strong><?php echo $orderdata[0]['buyercompany'];?></strong></span></a><br>
														<a  onclick="openaddressbox();"><span class="edit-textcolor">Presented By: <?php echo $orderdata[0]['buyernameprefix']." ".$orderdata[0]['buyername'];?></span></a>
														<!--  <input type="text" placeholder="Buyer Company Name"  name="buyer_companyname"  
														class="form-control edit-textcolor" value="<?php //echo $orderdata[0]['buyercompany'];?>"  /> -->
													</div>
												</div>
<!-- 												<div class="row"> -->
<!--													<div class="col-sm-12" style="padding-bottom: 13px;">
														<span class="col-sm-3 edit-textcolor"   style="font-family:Arial;font-size:12px;">Presented By: </span>
<!-- 														<div class="col-sm-4"> -->
<!-- 															<select  name="buyer_prefix" class="form-control edit-textcolor"> -->
<!--																<option <?php if($orderdata[0]['buyernameprefix'] == "Mr") { ?> selected <?php } ?> value="Mr">Mr.</option>
																<option <?php if($orderdata[0]['buyernameprefix'] == "Mrs") { ?> selected <?php } ?> value="Mrs">Mrs</option>
																<option <?php if($orderdata[0]['buyernameprefix'] == "Miss") { ?> selected <?php } ?> value="Miss">Miss</option>
<!-- 															</select> -->
<!-- 														</div> -->
	<!--													<div class="col-sm-5" style="margin-left: -28px;width: 213px;">
																<input type="text" placeholder="Buyer Name"  name="buyer_name"  class="form-control edit-textcolor" value="<?php echo $orderdata[0]['buyername'];?>"  />
<!-- 														</div> -->
<!-- 													</div> -->
<!-- 												</div> -->
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 editlink" >
											<a onclick="openaddressbox();"><span class="edit-textcolor"><?php echo $orderdata[0]['buyer_address'];?></span></a>
<!--											<div class="col-sm-3" style="width: 218px;">
												<input type="text" placeholder="Street/Bilding No"  name="buyer_street"  class="form-control edit-textcolor" value="<?php echo $orderdata[0]['buyerstreet'];?>"  />
<!-- 											</div> -->
<!--											<div class="col-sm-2" style="margin-left: -28px;">	
												<input type="text" placeholder="City"  name="buyer_city"  class="form-control edit-textcolor" value="<?php echo $orderdata[0]['buyercity'];?>"  />
<!-- 											</div> -->
<!--											<div class="col-sm-2" style="margin-left: -28px;">	
												<input type="text" placeholder="Province"  name="buyer_province"  class="form-control edit-textcolor" value="<?php echo $orderdata[0]['buyerprovince'];?>"  />
<!-- 											</div> -->
<!--											<div class="col-sm-3" style="margin-left: -28px;">
												<input type="text" placeholder="City" name="buyer_city"  class="form-control edit-textcolor" value="<?php echo $orderdata[0]['buyercontry'];?>"  />
<!-- 											</div> -->
<!--											<div class="col-sm-2" style="margin-left: -28px;">	
												<input type="text" placeholder="P.O.Box"  name="buyer_poboxno"  class="form-control edit-textcolor" value="<?php echo $orderdata[0]['buyerpobox'];?>"  />
<!-- 											</div>	 -->
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 editlink " style="padding-bottom: 13px;">
											<a onclick="openaddressbox();"><span class="edit-textcolor" style="font-family:Arial;font-size:12px;"><strong>Tel: </strong>
												<?php echo $orderdata[0]['buyercitycode'];?> (<?php echo $orderdata[0]['buyertelcode'];?>) <?php echo $orderdata[0]['buyertelephone'];?>/ (<?php echo $orderdata[0]['buyertelcode'];?>) <?php echo $orderdata[0]['buyeralttelnumber'];?>
											</span><br>
											<span class="edit-textcolor" style="font-family:Arial;font-size:12px;"><strong>Mobile: </strong><?php echo $orderdata[0]['buyermobilecode']."  ".$orderdata[0]['buyermobile']?></span></a>
<!--											<div class="col-sm-2" style="margin-left: -20px;">
												<input type="text" placeholder="City Code"  name="buyer_citycode" class="form-control edit-textcolor" value="<?php echo $orderdata[0]['buyercitycode'];?>"  />
<!-- 											</div> -->
<!--											<div class="col-sm-2" style="margin-left: -28px;">
												<input type="text" placeholder="Telephone Code"  name="buyer_telcode" class="form-control edit-textcolor" value="<?php echo $orderdata[0]['buyertelcode'];?>"  />
<!-- 											</div> -->
<!--											<div class="col-sm-3" style="margin-left: -28px;">
												<input type="text" placeholder="Telephone"  name="buyer_telephone" class="form-control edit-textcolor" value="<?php echo $orderdata[0]['buyertelephone'];?>"  />
<!-- 											</div> -->
<!--											<div class="col-sm-2" style="margin-left: -20px;">
												<input type="text" placeholder="Telephone Code" name="buyer_telcode" class="form-control edit-textcolor" value="<?php echo $orderdata[0]['buyertelcode'];?>"  />
<!-- 											</div> -->
<!--											<div class="col-sm-3" style="margin-left: -28px;">
												<input type="text" placeholder="Alternative Telephone" name="buyer_telephone1" class="form-control edit-textcolor" value="<?php echo $orderdata[0]['buyeralttelnumber'];?>"  />
<!-- 											</div> -->
										</div>
									</div>			
<!--									<div class="row">
	<!--									<div class="col-sm-12" >
	<!--										<span class="edit-textcolor" style="font-family:Arial;font-size:12px;"><strong>Mobile: </strong><?php echo $orderdata[0]['buyermobilecode']."  ".$orderdata[0]['buyermobile']?></span>
<!--											<div class="col-sm-3" style="margin-left:-30px">
												<input type="text" placeholder="Mobile Code"  name="buyer_mobilecode"  class="form-control edit-textcolor" value="<?php echo $orderdata[0]['buyermobilecode'];?>"  />
<!-- 											</div> -->
<!--											<div class="col-sm-5" style="margin-left:-28px">
												<input type="text" placeholder="Mobile"  name="buyer_mobile" class="form-control edit-textcolor" value="<?php echo $orderdata[0]['buyermobile'];?>"  />
<!-- 											</div> -->
	<!--									</div>
									</div>		-->	
								</div>	
							</div>
						</div><br><br>
						<div class="row">
							<div class="col-md-12">
								<table style="font-family:arial;font-size:12px;"  id="table_id1" class="table table-hover table-striped table-bordered table-advanced tablesorter display" >
									<thead  style="border: none">
										<tr style="background-color:#D3D3D3">
											<th style="background-color:white;"></th>
											<th>S</th>
											<th>Product Image</th>
											<th>Model No.</th>
											<th>Name</th>
											<th>USD Price</th>
											<th>Qty/Pair</th>
											<th>Total CBM</th>
											<th>USD Amount</th>
										</tr>
									<tbody>
												<?php  $j = 1; $totalqty = 0;  for($i=0; $i<count($orderitemdata);$i++) { $totalqty = $totalqty + $orderitemdata[$i]['quantity']; ?>
											<tr>
												<td style="background-color: white"><input type="checkbox" /></td>
												<td class="editinvoicetd"><?php echo $j;?></td>
												<td class="editinvoicetd">
												<img src="<?php echo asset_url().$orderitemdata[$i]['main_image'];?>"  name="proimg"  style="height:50px;width:50px;border-radius:50%;"/></td>
												<td class="editinvoicetd"><?php echo $orderitemdata[$i]['model_no'];?></td>
												<td class="editinvoicetd"><?php echo $orderitemdata[$i]['product_name'];?></td>
												<td class="editinvoicetd editlink">
													<a onclick="openpricebox(<?php echo $i;?>);"><span class="edit-textcolor" style="font-family:Arial;font-size:12px;"><?php echo $orderitemdata[$i]['product_price'];?></span></a>
													<div class="productpricepopup"   id="productpricepopup-<?php echo $i;?>"  style="display:none;">  
														<div class="row">
															<div class="col-md-12" style="text-align: center;padding-top: 17px;">
																<span style="color: #A9A9A9; font-family: Arial; font-size: 16px;">EDIT TEXT BOX</span>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12" style="padding: 10px; text-align: center;">
																<input type="text" placeholder="Price" id="price-<?php echo $i;?>" name="product_price[]" class="form-control edit-textcolor " onchange="changetotalprice();"  value="<?php echo $orderitemdata[$i]['product_price'];?>"  />
															</div>
														</div>
														<div class="row">
															<div class="col-md-12" style="text-align: center;padding-top: 13px;">
																<button type="button"  onclick="updateprice(<?php echo $i;?>)" class="btnaddress">Change & Save</button>
																<button type="button"  onclick="closeprice(<?php echo $i;?>);" class="btnaddress">Cancel</button>
															</div>
														</div>
													</div>
												</td>
												<td class="editinvoicetd editlink">
													<a onclick="openquantitybox(<?php echo $i;?>);"><span class="edit-textcolor" style="font-family:Arial;font-size:12px;"><?php echo $orderitemdata[$i]['quantity'];?></span></a>
													<div class="productpricepopup"   id="productquantitypopup-<?php echo $i;?>"  style="display:none;">  
														<div class="row">
															<div class="col-md-12" style="text-align: center;padding-top: 17px;">
																<span style="color: #A9A9A9; font-family: Arial; font-size: 16px;">EDIT TEXT BOX</span>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12" style="padding: 10px; text-align: center;">
																<input type="text" placeholder="Quantity"  id="quantity-<?php echo $i;?>" name="quantity[]"  class="form-control edit-textcolor" value="<?php echo $orderitemdata[$i]['quantity'];?>"  />
															</div>
														</div>
														<div class="row">
															<div class="col-md-12" style="text-align: center;padding-top: 13px;">
																<button type="button"  onclick="updatequantity(<?php echo $i;?>)" class="btnaddress">Change & Save</button>
																<button type="button"  onclick="closequantity(<?php echo $i;?>);" class="btnaddress">Cancel</button>
															</div>
														</div>
													</div>
												</td>
												<td class="editinvoicetd editlink">
													<a onclick="opencbmbox(<?php echo $i;?>);"><span class="edit-textcolor" style="font-family:Arial;font-size:12px;"><?php echo $orderitemdata[$i]['product_cbm'];?></span></a>
													<div class="productpricepopup"   id="productcbmpopup-<?php echo $i;?>"  style="display:none;">  
														<div class="row">
															<div class="col-md-12" style="text-align: center;padding-top: 17px;">
																<span style="color: #A9A9A9; font-family: Arial; font-size: 16px;">EDIT TEXT BOX</span>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12" style="padding: 10px; text-align: center;">
																<input type="text" placeholder="CBM" id="cbm-<?php echo $i;?>"  name="cbm[]"   class="form-control edit-textcolor" value="<?php echo $orderitemdata[$i]['product_cbm'];?>"  />
															</div>
														</div>
														<div class="row">
															<div class="col-md-12" style="text-align: center;padding-top: 13px;">
																<button type="button"  onclick="updatecbm(<?php echo $i;?>)" class="btnaddress">Change & Save</button>
																<button type="button"  onclick="closecbm(<?php echo $i;?>);" class="btnaddress">Cancel</button>
															</div>
														</div>
													</div>
												</td>
												<td class="editinvoicetd"><?php echo $orderitemdata[$i]['quantity'] *$orderitemdata[$i]['product_price'];?></td>
											</tr>
											<tr class="differentTable">
												<td></td>
											<td colspan="8" class="invoicetdclass editlink" >
												<a onclick="openspecificationbox(<?php echo $i;?>);"><span class="edit-textcolor" style="font-family:Arial;font-size:12px;"><?php echo $orderitemdata[$i]['product_specification'];?></span></a>
												<span>
													<div class="productpricepopup"   id="productspecificationpopup-<?php echo $i;?>"  style="display:none;">  
														<div class="row">
															<div class="col-md-12" style="text-align: center;padding-top: 17px;">
																<span style="color: #A9A9A9; font-family: Arial; font-size: 16px;">EDIT TEXT BOX</span>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12 " style=" text-align: center;">
																<textarea name="product_specification[]" id="specification-<?php echo $i;?>" class="edit-textcolor inputboxstyle"><?php echo $orderitemdata[$i]['product_specification']; ?></textarea>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12" style="text-align: center;padding-top: 13px;">
																<button type="button"  onclick="updatespecification(<?php echo $i;?>)" class="btnaddress">Change & Save</button>
																<button type="button"  onclick="closespecification(<?php echo $i;?>);" class="btnaddress">Cancel</button>
															</div>
														</div>
													</div>
												</span>
											</td>
										</tr>
									<?php $j++;
									} ?>
									</tbody>
									</thead>
								</table>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-8">
								</div>
								<div class="col-md-4">
									<div class="row">
										<div class="col-md-12">
											<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><strong>Totals:</strong></span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<span  style="color:#2D2D2D;font-family:Arial;font-size:12px;"><strong>
											Order Amount&nbsp;&nbsp; &nbsp;&nbsp; : USD <span id="totalamount"> <?php echo $orderdata[0]['total'];?></span></strong></span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<span style="color:#2D2D2D;font-family:Arial;font-size:12px;">QTY : <?php echo $totalqty;?></span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<span style="color:#2D2D2D;font-family:Arial;font-size:12px;">CBM : 64 </span>
										</div>
									</div><br>
									<div class="row">
										<div class="col-md-12">
											<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><strong>Shipping Charges: USD 0.0</strong></span>
										</div>
									</div>
									<hr style="background-color: #948c8c !important; height: 2px !important;">
									<div class="row">
										<div class="col-md-12">
											<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><strong>Total Amount&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; : USD <?php echo $orderdata[0]['total'];?></strong></span>
										</div>
									</div>
									<hr style="background-color: #948c8c !important; height: 2px !important;"><hr style="background-color: #948c8c !important; height: 2px !important;">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong><u>Preamble:<br></u>Whereas the first party is a seller has many type of products offered for sale. Whereas the second party has a certain intention to purchase the above listed products offered by the first party.<br>Now Therefore, Both desire of the two parties met and they agree and contracted according to the terms &amp; conditions mentioned below:</strong></span>
							</div>
						</div><br><br>
						<div class="row">
							<div class="col-md-12 editlink">
								<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong><u>Payment:</u></strong></span><br>
								<a onclick="opencurrencybox();"><span class="edit-textcolor">Currency: USD</span></a>
								<br>
								<a onclick="openpaymethodbox();"><span class="edit-textcolor">
								Method: <?php echo $orderdata[0]['payment_method']; ?>, 30% in advance, plus 70% to be paid against documents</span></a><br>
								<div class="termspopup"   id="productcurrencypopup"  style="display:none;">  
									<div class="row">
										<div class="col-md-12" style="text-align: center;padding-top: 17px;">
											<span style="color: #A9A9A9; font-family: Arial; font-size: 16px;">EDIT TEXT BOX</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 " style=" text-align: center;">
											<textarea  name="data[currency]"  id="currency"  class="textstyle"><?php echo $orderdata[0]['currency'];?></textarea>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12" style="text-align: center;padding-top: 13px;">
											<button type="button"  onclick="updatecurrency()" class="btnaddress">Change & Save</button>
											<button type="button"  onclick="closecurrency();" class="btnaddress">Cancel</button>
										</div>
									</div>
								</div>
								<div class="termspopup"   id="productpaymethodpopup"  style="display:none;">  
									<div class="row">
										<div class="col-md-12" style="text-align: center;padding-top: 17px;">
											<span style="color: #A9A9A9; font-family: Arial; font-size: 16px;">EDIT TEXT BOX</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 " style=" text-align: center;">
											<textarea  name="data[payment_method]"  id="paymethod"  class="textstyle"><?php echo $orderdata[0]['payment_method'].", 30% in advance, plus 70% to be paid against documents";?></textarea>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12" style="text-align: center;padding-top: 13px;">
											<button type="button"  onclick="updatepaymethod()" class="btnaddress">Change & Save</button>
											<button type="button"  onclick="closepaymethod();" class="btnaddress">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-12 editlink">
								<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong><u>First Party Bank Account:<br></u></strong></span><br>
								<a onclick="openbankaccountbox();"><span class="edit-textcolor"><?php echo $orderdata[0]['seller_bankaccount'];?></span></a>
								<div class="termspopup"   id="productbankaccountpopup"  style="display:none;">  
									<div class="row">
										<div class="col-md-12" style="text-align: center;padding-top: 17px;">
											<span style="color: #A9A9A9; font-family: Arial; font-size: 16px;">EDIT TEXT BOX</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 " style=" text-align: center;">
											<textarea  name="data[seller_bankaccount]"  id="bankaccount"  class="textstyle"><?php echo $orderdata[0]['seller_bankaccount'];?></textarea>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12" style="text-align: center;padding-top: 13px;">
											<button type="button"  onclick="updatebankaccount()" class="btnaddress">Change & Save</button>
											<button type="button"  onclick="closebankaccount();" class="btnaddress">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-12 editlink">
								<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong><u>Production &amp; Lead time:<br></u></strong></span>
								<a onclick="openproductionbox();"><span class="edit-textcolor"><?php echo $orderdata[0]['production_leadtime'];?></span></a>
								<div class="termspopup"   id="productproductionpopup"  style="display:none;">  
									<div class="row">
										<div class="col-md-12" style="text-align: center;padding-top: 17px;">
											<span style="color: #A9A9A9; font-family: Arial; font-size: 16px;">EDIT TEXT BOX</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 " style=" text-align: center;">
											<textarea name="data[production_leadtime]"  id="production" class="textstyle"><?php echo $orderdata[0]['production_leadtime']?></textarea>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12" style="text-align: center;padding-top: 13px;">
											<button type="button"  onclick="updateproduction()" class="btnaddress">Change & Save</button>
											<button type="button"  onclick="closeproduction();" class="btnaddress">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-12 editlink">
								<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong><u>Products Warranty:<br></u></strong><font color="#2863F5">
								</font></span>
								<a onclick="openwarrantybox();"><span class="edit-textcolor"><?php echo $orderdata[0]['product_warranty'];?></span></a>
								<div class="termspopup"   id="productwarrantypopup"  style="display:none;">  
									<div class="row">
										<div class="col-md-12" style="text-align: center;padding-top: 17px;">
											<span style="color: #A9A9A9; font-family: Arial; font-size: 16px;">EDIT TEXT BOX</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 " style=" text-align: center;">
											<textarea name="data[product_warranty]"  id="warranty" class="textstyle"><?php echo $orderdata[0]['product_warranty']?></textarea>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12" style="text-align: center;padding-top: 13px;">
											<button type="button"  onclick="updatewarranty()" class="btnaddress">Change & Save</button>
											<button type="button"  onclick="closewarranty();" class="btnaddress">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-12 editlink">
								<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong><u>Documents &amp; Certificates to be provided by the first party:<br></u></strong><font color="#2863F5">
								</font></span>
								<a onclick="opendocumentbox();"><span class="edit-textcolor"><?php echo $orderdata[0]['document_certificate'];?></span></a>
								<div class="termspopup"   id="productdocumentpopup"  style="display:none;">  
									<div class="row">
										<div class="col-md-12" style="text-align: center;padding-top: 17px;">
											<span style="color: #A9A9A9; font-family: Arial; font-size: 16px;">EDIT TEXT BOX</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 " style=" text-align: center;">
											<textarea name="data[document_certificate]"   class="textstyle"><?php echo $orderdata[0]['document_certificate']?></textarea>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12" style="text-align: center;padding-top: 13px;">
											<button type="button"  onclick="updatedocument()" class="btnaddress">Change & Save</button>
											<button type="button"  onclick="closedocument();" class="btnaddress">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-12">
								<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><strong><a href="javascript:addclause()" class="style23" >ADD CLAUSE</a></strong></span><br>
								<div class="termspopup"   id="productclausepopup"  style="display:none;">  
									<div class="row">
										<div class="col-md-12" style="text-align: center;padding-top: 17px;">
											<span style="color: #A9A9A9; font-family: Arial; font-size: 16px;">EDIT TEXT BOX</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 " style=" text-align: center;">
											<textarea  name="data[clause]"  id="clause"  class="textstyle"><?php echo $orderdata[0]['clause'];?></textarea>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12" style="text-align: center;padding-top: 13px;">
											<button type="button"  onclick="updateclause()" class="btnaddress">Change & Save</button>
											<button type="button"  onclick="closeclause();" class="btnaddress">Cancel</button>
										</div>
									</div>
								</div>
							</div>
						</div><br><br>
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-6" style="text-align:right">
									<input type="button" name="btnedit"   onclick="editinvoice(<?php echo $order_id?>)"  value="Save and Close"  style="height:55px;width:200px;color:white;border:none;background-color:#0E9DF5;"/>
								</div>
								<div class="col-md-6">
									<input type="button" name="btnclose" onclick="invoice(<?php echo $order_id?>);"  value="Cancel and Close"  style="height:55px;width:200px;color:white;border:none;background-color:#0E9DF5;"/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
			 		<div class="row" style="background-color: transparent;background-image: url(<?php echo asset_url();?>images/hiker-984083_1920.jpg);
						background-repeat: no-repeat; background-position: left top;  background-size: cover;height:110px;" > 
						<div class="col-md-12" >
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-10" style="padding-top:15px">
										<span style="color:#FFFFFF;font-family:Arial;font-size:12px;"><strong>WELCOME TO</strong></span>
									</div>
									<div class="col-md-2" style="padding-top:15px">
										<a href="javascript:sellerOrder();" ><button type="button">X</button></a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
										<span style="color:#FFFFFF;font-family:Impact;font-size:35px;">REAL-TIME ORDER </span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
										<span style="color:#FFFFFF;font-family:Arial;font-size:11px;">Turn your online contracting into reality </span>
								</div>
							</div>
						</div> 
 					</div>
					<div class="row" style="background-color:#F9F7F3;padding:25px;">
						<div class="col-md-12" >
							<div class="row"  style="padding-top: 22px;">
								<div class="col-md-12" >
									<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><strong>You only are allowed to change the bule color text, to do this:<br><br></strong>Click on the blue text , on the edit box start change or add, then save. <br><br>Click on " Add Clause" button to add new clause or remarks to the contract.<br><br>When you complete editing the whole contract click on " Save and close" button, or " Cancel and close"..<br><br></span>
								</div>	
							</div><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>

<script>
function openaddressbox()
{
	document.getElementById('buyeraddresspopup').style.display = 'block';
}
function updateaddress()
{
	
	var buyeraddress  = $('#txtbuyeradress').val();
	if(buyeraddress == "")
	{
		alert('Address is required.');
	} else {
		document.getElementById('buyeraddresspopup').style.display = 'none';
	}
}
function closeaddresspopup()
{
	document.getElementById('buyeraddresspopup').style.display = 'none';
}

// price 
function openpricebox(id)
{
	document.getElementById('productpricepopup-'+id).style.display = 'block';
}
function updateprice(id)
{
	
	var price  = $('#price-'+id).val();
	if(price == "")
	{
		alert('Price is required.');
	} else {
		document.getElementById('productpricepopup-'+id).style.display = 'none';
	}
}
function closeprice(id)
{
	document.getElementById('productpricepopup-'+id).style.display = 'none';
}

// quantiy
function openquantitybox(id)
{
	document.getElementById('productquantitypopup-'+id).style.display = 'block';
}
function updatequantity(id)
{
	
	var quantity  = $('#quantity-'+id).val();
	if(quantity == "")
	{
		alert('Quantity is required.');
	} else {
		document.getElementById('productquantitypopup-'+id).style.display = 'none';
	}
}
function closequantity(id)
{
	document.getElementById('productquantitypopup-'+id).style.display = 'none';
}

// cbm
function opencbmbox(id)
{
	document.getElementById('productcbmpopup-'+id).style.display = 'block';
}
function updatecbm(id)
{
	
	var quantity  = $('#cbm-'+id).val();
	if(quantity == "")
	{
		alert('CBM is required.');
	} else {
		document.getElementById('productcbmpopup-'+id).style.display = 'none';
	}
}
function closecbm(id)
{
	document.getElementById('productcbmpopup-'+id).style.display = 'none';
}

// specification
function openspecificationbox(id)
{
	document.getElementById('productspecificationpopup-'+id).style.display = 'block';
}
function updatespecification(id)
{
	
	var specification  = $('#specification-'+id).val();
	if(specification == "")
	{
		alert('Product Specification is required.');
	} else {
		document.getElementById('productspecificationpopup-'+id).style.display = 'none';
	}
}
function closespecification(id)
{
	document.getElementById('productspecificationpopup-'+id).style.display = 'none';
}

//payment
function openpaymethodbox()
{
	document.getElementById('productpaymethodpopup').style.display = 'block';
}
function updatepaymethod()
{
	
	var paymethod  = $('#paymethod').val();
	if(paymethod == "")
	{
		alert('Payment Method is required.');
	} else {
		document.getElementById('productpaymethodpopup').style.display = 'none';
	}
}
function closepaymethod()
{
	document.getElementById('productpaymethodpopup').style.display = 'none';
}
function opencurrencybox()
{
	document.getElementById('productcurrencypopup').style.display = 'block';
}
function updatecurrency()
{
	
	var currency  = $('#currency').val();
	if(currency == "")
	{
		alert('Currency is required.');
	} else {
		document.getElementById('productcurrencypopup').style.display = 'none';
	}
}
function closecurrency()
{
	document.getElementById('productcurrencypopup').style.display = 'none';
}


// bank account
function openbankaccountbox()
{
	document.getElementById('productbankaccountpopup').style.display = 'block';
}
function updatebankaccount()
{
	
	var bankaccount  = $('#bank_account').val();
	if(bankaccount == "")
	{
		alert('Bank Account is required.');
	} else {
		document.getElementById('productbankaccountpopup').style.display = 'none';
	}
}
function closebankaccount()
{
	document.getElementById('productbankaccountpopup').style.display = 'none';
}

// production
function openproductionbox()
{
	document.getElementById('productproductionpopup').style.display = 'block';
}
function updateproduction()
{
	
	var bankaccount  = $('#production').val();
	if(bankaccount == "")
	{
		alert('Production & Lead Time is required.');
	} else {
		document.getElementById('productproductionpopup').style.display = 'none';
	}
}
function closeproduction()
{
	document.getElementById('productproductionpopup').style.display = 'none';
}

// warranty
function openwarrantybox()
{
	document.getElementById('productwarrantypopup').style.display = 'block';
}
function updatewarranty()
{
	
	var warranty  = $('#warranty').val();
	if(warranty == "")
	{
		alert('Warranty is required.');
	} else {
		document.getElementById('productwarrantypopup').style.display = 'none';
	}
}
function closewarranty()
{
	document.getElementById('productwarrantypopup').style.display = 'none';
}



// opendocumentbox
function opendocumentbox()
{
	document.getElementById('productdocumentpopup').style.display = 'block';
}
function updatedocument()
{
	
	var warranty  = $('#document').val();
	if(warranty == "")
	{
		alert('Document is required.');
	} else {
		document.getElementById('productdocumentpopup').style.display = 'none';
	}
}
function closedocument()
{
	document.getElementById('productdocumentpopup').style.display = 'none';
}

// terms
function addclause()
{
	document.getElementById('productclausepopup').style.display = 'block';
	
}
function closeclause()
{
	document.getElementById('productclausepopup').style.display = 'none';
}
function updateclause()
{
	var clause  = $('#clause').val();
	if(clause == "")
	{
		alert('Clause is required.');
	} else {
		document.getElementById('productclausepopup').style.display = 'none';
	}
}

function changetotalprice()
{
	//document.getElementById('price-
	//document.getElementById('totalamount').textContent = 
}
function invoice(order_id)
{
	window.location = "<?php echo base_url();?>mystation/invoice/"+order_id;
}
// function editinvoice(order_id)
// {
	//$.post("<?php //echo base_url();?> mystation/updateinvoice",{order_id:order_id},function(data) {
		
// 	});
// }

function editinvoice()
{
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showinfoRequest, // pre-submit callback 
 			success :  showinfoResponse,
 			url : "<?php echo base_url();?>mystation/updateinvoice",
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmeditinvoice').ajaxSubmit(options);
}

function showinfoRequest(formData, jqForm, options){
	var queryString = $.param(formData);
return true;
}
function showinfoResponse(resp, statusText, xhr, $form){
	var order_id = document.getElementById('order_id').value;
if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		alert(resp.msg);
		window.location = "<?php echo base_url();?>mystation/invoice/"+order_id;
	} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		alert(resp.msg);
		window.location = "<?php echo base_url();?>mystation/invoice/"+order_id;
	}
}

</script>
<style>
.differentTable td {
	border:dotted;border-color:red;
}
</style>
