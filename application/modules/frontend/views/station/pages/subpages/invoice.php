<link href="<?php echo asset_url();?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/pages/invoice.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/font-awesome.min.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo asset_url();?>images/Homekit.png">
<!--  <link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/jquery.dataTables.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/dataTables.bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/buttons.dataTables.min.css">-->
<script src="<?php echo asset_url();?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo asset_url();?>js/bootstrap.js"></script>
<script src="<?php echo asset_url();?>js/bootstrapValidator.min.js"></script>
<script src="<?php echo asset_url();?>js/custom/alert.js"></script>
<script src="<?php echo asset_url();?>js/html2pdf.bundle.min.js"></script>
	<div class="invoice" >
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-9" style="background-color: #FBF3A0;padding-bottom:60px;">
					<div style="margin:0 auto;background-color: #2D2D2D; width:900px;height:153px;">
						<div class="row">
							<div class="col-md-12">
								<span style="color:#A9A9A9;font-family:Arial;font-size:12px;">No. TS0<?php echo $orderdata[0]['invoice_id'];?></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" style="text-align: center">
								<span style="color:#A9A9A9;font-family:Georgia;font-size:53px;">Proforma Invoice</span>
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
										<div class="col-sm-12">
											<div class="col-md-2">
												<img src="<?php echo asset_url();?>images/rseller3.png" id="Image182" style="width: 44px;">
											</div>
											<div class="col-sm-10">
												<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><strong><?php echo $orderdata[0]['buyercompany'];?></strong></span><br>
												<span style="color:#4B4B4B;font-family:Arial;font-size:12px;">Presented By: <?php echo $orderdata[0]['buyernameprefix']." ".$orderdata[0]['buyername'];?></span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<span style="color:#4B4B4B;font-family:Arial;font-size:12px;"><?php echo $orderdata[0]['buyer_address'];?></span>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<span style="color:#4B4B4B;font-family:Arial;font-size:12px;"><strong>Tel: </strong>
											<?php echo $orderdata[0]['buyercitycode'];?> (<?php echo $orderdata[0]['buyertelcode'];?>) <?php echo $orderdata[0]['buyertelephone'];?>/ (<?php echo $orderdata[0]['buyertelcode'];?>) <?php echo $orderdata[0]['buyeralttelnumber'];?></span>
										</div>
									</div>			
									<div class="row">
										<div class="col-sm-12">
											<span style="color:#4B4B4B;font-family:Arial;font-size:12px;"><strong>Mobile: </strong><?php echo $orderdata[0]['buyermobilecode']."  ".$orderdata[0]['buyermobile']?></span>
										</div>
									</div>			
								</div>	
							</div>
						</div><br><br>
						<div class="row">
							<input type="hidden"  value="<?php echo count($orderitemdata);?>" id="orderitemcount" />
							<div class="col-md-12">
								<table style="font-family:arial;font-size:12px;"   id="table_id1" class="table table-hover table-striped table-bordered table-advanced tablesorter display" >
									<thead class="blue"  style="border: none">
										<tr style="background-color:#D3D3D3">
											<th style="background-color:#FBF3A0"></th>
											<th>S</th>
											<th>Product Image</th>
											<th>Model No.</th>
											<th>Name</th>
											<th>USD Price</th>
											<th>Qty/Pair</th>
											<th>Total CBM</th>
											<th>USD Amount</th>
										</tr>
									<tbody style="background-color: #FBF3A0;">
										<?php  $j = 1; $totalqty = 0; for($i=0; $i<count($orderitemdata);$i++) {  $totalqty = $totalqty + $orderitemdata[$i]['quantity'];?>
											<tr class="differentTable"  style="background-color: #FBF3A0">
												<td><input type="checkbox"  value="<?php echo $orderitemdata[$i]['orderitem_id']; ?>"  id="product-<?php echo $j;?>"  name="productid[]" /></td>
												<td class="invoicetdclass" ><?php echo $j;?></td>
												<td class="invoicetdclass">
												<img src="<?php echo asset_url().$orderitemdata[$i]['main_image'];?>"  name="proimg"  style="height:50px;width:50px;border-radius:50%;"/></td>
												<td class="invoicetdclass"><?php echo $orderitemdata[$i]['model_no'];?></td>
												<td class="invoicetdclass"><?php echo $orderitemdata[$i]['product_name'];?></td>
												<td class="invoicetdclass"><?php echo $orderitemdata[$i]['product_price'];?></td>
												<td class="invoicetdclass"><?php echo $orderitemdata[$i]['quantity'];?></td>
												<td class="invoicetdclass"><?php echo $orderitemdata[$i]['product_cbm'];?></td>
												<td class="invoicetdclass"><?php echo $orderitemdata[$i]['quantity'] *$orderitemdata[$i]['product_price'];?></td>
											</tr>
											<tr class="differentTable"  style="background-color: #FBF3A0;">
												<td></td>
												<td colspan="8" class="invoicetdclass" ><span><?php echo $orderitemdata[$i]['product_specification']; ?></span></td>
<!-- 												<td colspan="8" class="invoicetdclass"> -->
												<?php  //for($p=0;$p< count($orderitemspecdata);$p++) {
// 																		if($orderitemspecdata[$p]['orderid'] == $orderitemdata[$i]['orderid']) { ?>
<!-- 																			<br> -->
																			<span><strong><?php //echo $orderitemspecdata[$p]['spec_name'].": ";?></strong></span>
																			<span><?php //echo $orderitemspecdata[$p]['spec_value'];?></span>
												
																<?php //} 
// 															} ?>
<!-- 												</td> -->
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
											<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><strong>Order Amount&nbsp;&nbsp; &nbsp;&nbsp; : USD <?php echo $orderdata[0]['total'];?></strong></span>
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
							<div class="col-md-12">
								<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong><u>Payment:<br></u></strong>Currency: <?php echo $orderdata[0]['currency'];?><br>Method:<?php echo $orderdata[0]['payment_method'];?>, 30% in advance, plus 70% to be paid against documents</span>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-12">
								<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong><u>First Party Bank Account:<br></u></strong></span><br>
								<span style="color:#3C3C3C;font-family:Arial;font-size:11px;"><?php echo $orderdata[0]['seller_bankaccount'];?><br></span>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-12">
								<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong><u>Production &amp; Lead time:<br></u></strong><?php echo $orderdata[0]['production_leadtime']?></span>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-12">
								<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong><u>Products Warranty:<br></u></strong>
								<?php echo $orderdata[0]['product_warranty']?></span>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-12">
								<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong><u>Documents &amp; Certificates to be provided by the first party:<br></u></strong>
								<?php echo $orderdata[0]['document_certificate']?></span>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-12">
								<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong><u>Obligation:<br></u></strong>
								<?php echo $orderdata[0]['obligation']?></span>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-12">
								<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong><u>Declaration:</u></strong></span><br>
								<span style="color:#3C3C3C;font-family:Arial;font-size:11px;">
								<?php echo $orderdata[0]['declaration']?></span>
							</div>
						</div><br><br>
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-5">
									<div id="btnfirstparty"  <?php if($orderdata[0]['selller_status'] !=1) { ?> style="display: none;" <?php } ?> >
										<button type="button"  onclick="firstpartyconfirm(<?php echo  $orderdata[0]['orderid'];?>,<?php echo $orderdata[0]['sellerbusi_id']; ?>);"  style="background-color:#FF6347;border:none;color:white;width: 236px;height: 35px;">First Party Confirmation</button>
									</div>	
									<div id="firstpartydiv" <?php if($orderdata[0]['selller_status'] ==1) { ?> style="display: none;" <?php } ?>>
										<span style="color:#2D2D2D;font-family:Arial;font-size:13px;"><strong>Agreed &amp; Accepted By</strong></span><br>
										<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong><?php echo $orderdata[0]['sellercompany'];?></strong></span>
									</div>	
								</div>
								<div class="col-md-2">
									<!--  <button type="button"  data-toggle="modal" data-backdrop="static"  data-target="#example_modal"  style="color:white;background-color:#209172;height:70px;width:70px;border-radius:50%;border:none;">Example</button> -->
								</div>
								<div class="col-md-5">
									<div id="btnsecondparty" <?php if($orderdata[0]['buyer_status'] !=1) { ?> style="display: none;" <?php } ?> >
										<button type="button" onclick="secondpartyconfirm(<?php echo  $orderdata[0]['orderid'];?>,<?php echo $orderdata[0]['buyerbusi_id']; ?>);" style="background-color:#FF6347;border:none;color:white;width: 236px;height: 35px;">Second Party Confirmation</button>
									</div>	
									<div id="secondpartydiv" <?php if($orderdata[0]['buyer_status'] ==1) { ?> style="display: none;" <?php } ?>>
										<span style="color:#2D2D2D;font-family:Arial;font-size:13px;"><strong>Agreed &amp; Accepted By</strong></span><br>
										<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong><?php echo $orderdata[0]['buyercompany']; ?></strong></span>
									</div>	
								</div>
							</div>
						</div>
						<div class="row" >
							<div class="col-md-12">
								<div class="col-md-5">
									<div id="firstpartytextdiv" <?php if($orderdata[0]['selller_status'] !=1) { ?> style="display: none;" <?php } ?> >
										<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Press only when you agree and confirm the final copy without any more changes</span>
									</div>	
								</div>
								<div class="col-md-2">
									
								</div>
								<div class="col-md-5">
									<div id="secondpartytextdiv" <?php if($orderdata[0]['buyer_status'] !=1) { ?> style="display: none;" <?php } ?> >
										<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Press only when you agree and confirm the final copy without any more changes</span>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3" style="position: fixed; margin-left: 1080px;">
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
					<div class="row" style="background-color:#F9F7F3;">
						<div class="col-md-12" >
							<div class="row"  style="padding-top: 22px;">
								<div class="col-md-12" >
									<div class="col-md-3">
										<a href="javascript:editinvice(<?php echo $orderdata[0]['orderid'];?>,<?php echo $orderdata[0]['buyer_status'];?>);"><img alt="" src="<?php echo asset_url();?>images/Edit-order.png" /></a>
									</div>
									<div class="col-md-9">
										<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><strong>EDIT </strong></span>
										<span style="color:#4B4B4B;font-family:Arial;font-size:11px;"><br>Use this button to edit Texts or Digits displyed in blue color.</span>
									</div>
								</div>	
							</div><br>
							<div class="row"  style="padding-top: 22px;">
								<div class="col-md-12" >
									<div class="col-md-3">
										<a href="javascript:addproduct(<?php echo $orderdata[0]['orderid'];?>,<?php echo $orderdata[0]['buyer_status'];?>);" ><img alt=""  style="width:50px;"  src="<?php echo asset_url();?>images/add-product.png" /></a>
									</div>
									<div class="col-md-9">
										<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><strong>Add Product </strong></span>
										<span style="color:#4B4B4B;font-family:Arial;font-size:11px;"><br>Use this button to add more product from the same seller, to the current order.</span>
									</div>
								</div>	
							</div><br>
							<div class="row"  style="padding-top: 22px;">
								<div class="col-md-12" >
									<div class="col-md-3">
										<a href="javascript:deleteinvoice(<?php echo $orderdata[0]['orderid'];?>,<?php echo $orderdata[0]['buyer_status'];?>);" ><img alt=""  style="width:50px;"  src="<?php echo asset_url();?>images/trash-empty-2.png" /></a>
									</div>
									<div class="col-md-9">
										<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><strong>Remove Product </strong></span>
										<span style="color:#4B4B4B;font-family:Arial;font-size:11px;"><br>Use this button to delete a selected product, <br>from the current order.</span>
									</div>
								</div>	
							</div><br>
							<div class="row"  style="padding-top: 22px;">
								<div class="col-md-12" >
									<div class="col-md-3">
										<img alt=""  style="width:50px;"  src="<?php echo asset_url();?>images/Send-order.png" />
									</div>
									<div class="col-md-9">
										<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><strong>Send and notify </strong></span>
										<span style="color:#4B4B4B;font-family:Arial;font-size:11px;"><br>Send a notification with your order to the other party and invite him to </span>
									</div>
								</div>	
							</div><br>
							<div class="row"  style="padding-top: 22px;padding-bottom:25px;">
								<div class="col-md-12" >
									<div class="col-md-3">
										<img alt=""  style="width:50px;"  src="<?php echo asset_url();?>images/meet-order.png" />
									</div>
									<div class="col-md-9">
										<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><strong>Online Meeting</strong></span>
										<span style="color:#4B4B4B;font-family:Arial;font-size:11px;"><br>Send a request to the other party to Real-Time edit or negotiate about this order online.</span>
									</div>
								</div>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<span style="color:#2D2D2D;font-family:Arial;font-size:9.6px;"><strong>Before you send the order to the other part:<br></strong>Click on <strong>EDIT </strong>button to type the required quantity of each item, add specifications or remarks under each item, add terms or conditions and complete your order. You may also click on the Add or Remove Product buttons. Once you finish editing click on " <strong>Save &amp; close</strong>" then click on "<strong>Send &amp; Notify</strong>" button, to send your order to the seller .</span>
						</div>
					</div><br>
					<div class="row">
						<div class="col-md-12">
							<span style="color:#2D2D2D;font-family:Arial;font-size:9.6px;"><strong>Once the other part receive your order and complete his editing:<br>"Online Meeting"</strong> button will be activated, and allow both of you to have a new expeirence. <br>Once you click on <strong>"Online Meeting", </strong>both of you will be able to have an REL_TIME ORDER MEETING, to chat, View, Edit, Negotiate about the same contract in Real-time mode. </span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<div id="addproduct_modal" class="modal fade">
	<div class="modal-dialog" style="">
		<div class="modal-content">
			<div class="modal-body" >
				<form id="frmaddinvoiceproduct" method="post" enctype="multipart/form-data" action="">
						<div style="margin:0 auto;" >
							<div class="row" style="text-align: center;padding-bottom:22px;">
								<div class="col-md-12">
									<img alt=""  style="width:50px;"  src="<?php echo asset_url();?>images/add-product.png" />
									<span style="color:#3C3C3C;font-family:Arial;font-size:16px;">ADD PRODUCT</span>
								</div>
							</div>
							<div class="row" style="text-align: center;padding-bottom:22px;">
								<div class="col-md-12">
									<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Open the seller desksite / Products Menu / Click on the product you would like to add / View the product details page / Copy the product Name &amp; No. and paste it below, then click " Add" <br></span>
								</div>
							</div>
							<div class="row" style="padding-bottom:22px;">
								<div class="col-md-12">
									<div class="col-md-6 form-group" style="text-align: right;">
										<input type="hidden" name="order_id" value="<?php echo $orderdata[0]['orderid']; ?>" class="form-control"  />
										<input type="text" placeholder="Type The Product Name" name="product_name" class="form-control"  />
									</div>
									<div class="col-md-6 form-group" style="text-align:left;">
										<input type="text" placeholder="Product No." name="product_modal" class="form-control" />
									</div>
								</div>
							</div>
							<div class="row" style="padding-bottom:22px;">
								<div class="col-md-12" >
									<div class="col-md-6" style="text-align: right;">
										<button  type="submit" value="Add" name="btnproductadd"  style="width: 108px;height: 29px;background-color: #696969;border: 0px #A0A0A0 solid;" >
											<span style="color:#D3D3D3;font-family:'MS Shell Dlg';font-size:11px;">Add</span></button>
									</div>
									<div class="col-md-6" style="text-align: left;">
										<button type="button" value="Cancel"  onclick="closeproductpopup();" name="btnproductcancel"  style="width: 108px;height: 29px;background-color: #696969;border: 0px #A0A0A0 solid;" >
											<span style="color:#D3D3D3;font-family:'MS Shell Dlg';font-size:11px;">Cancel</span></button>
									</div>
								</div>
							</div>
						</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div id="example_modal" class="modal fade">
	<div class="modal-dialog" style="">
		<div class="modal-content">
			<div class="modal-body" >
				<form id="frmcropimageproduct" method="post" enctype="multipart/form-data" action="">
						<div style="margin:0 auto;padding-left: 22px;">
							<div class="row" style="text-align: center;padding-bottom:22px;">
								<div class="col-md-12">
									<div class="col-md-11">
										<span style="color:#FF6347;font-family:Arial;font-size:19px;"><strong>ACCESS DENIED</strong></span>
									</div>
									<div class="col-md-1">
										<a href="javascript:closepopup();"><img src="<?php echo asset_url();?>images/closeround.png" id="Image258"  style="width: 40px;"></a>
									</div>
								</div>
							</div>
							<div class="row" style="text-align: center;padding-bottom:22px;">
								<div class="col-md-12">
									<img src="<?php echo asset_url();?>images/padlock-154684_640.png" id="Image257" alt="" style="width:128px">
								</div>
							</div>
							<div class="row" style="text-align: center;padding-bottom:22px;">
								<div class="col-md-12">
									<span style="color:#2D2D2D;font-family:Arial;font-size:15px;">Since both of the parties have been agreed and signed on this contract, the order is get locked and couldn't be edited any more. </span>
								</div>
							</div>
							<div class="row" style="text-align: center;padding-bottom:22px;">
								<div class="col-md-12">
									<span style="color:#2D2D2D;font-family:Arial;font-size:15px;"><strong>However you still able to:</strong></span>
								</div>
							</div>
							<div class="row" style="padding-bottom:6px;">
								<div class="col-md-12">
									<div class="col-md-6" style="text-align: right;" onclick="window.print();">
										<img src="<?php echo asset_url();?>images/print.png" style="width: 64px;" id="Image259" alt="">
									</div>
									<div class="col-md-6" style="text-align: left;">
										<img src="<?php echo asset_url();?>images/i_145.gif" style="padding-top: 12px;"  id="Image260" alt="" onclick="saveToPdf()">
									</div>
								</div>
							</div>
							<div class="row" style="padding-bottom:22px;">
								<div class="col-md-12">
									<div class="col-md-6" style="text-align: right;">
										<span style="color:#2D2D2D;font-family:Arial;font-size:15px;">Print</span>
									</div>
									<div class="col-md-6" style="text-align: left;">
										<span style="color:#2D2D2D;font-family:Arial;font-size:15px;">Save</span>
									</div>
								</div>
							</div>
							<div class="row" >
								<div class="col-md-12"  style="padding-left: 27px;">
									<span style="color:#FF6347;font-family:Arial;font-size:12px;"><strong>The seller </strong></span>
									<span style="color:#2D2D2D;font-family:Arial;font-size:12px;">are requested to type and renew the order status in brief:</span>
								</div>
							</div>
							<div class="row" style="padding-bottom:22px;">
								<div class="col-md-12">
									<div class="col-md-10">
										<input type="text"  class="form-control" />
									</div>	
									<div class="col-md-2">
										<button style="border:none;color:white;background-color:#FF6347;width: 80px;height: 33px;margin-left: -32px;">Search</button>
									</div>
								</div>
							</div>
							<div class="row" style="padding-bottom:22px;">
								<div class="col-md-12"  style="padding-left: 27px;">
									<span style="color:#1E90FF;font-family:Arial;font-size:12px;"><strong>The buyer </strong></span>
									<span style="color:#2D2D2D;font-family:Arial;font-size:12px;">will be requested to descripe the seller performance ( Only on goods arrival and check)..</span>
								</div>
							</div>
							<div class="row" style="padding-bottom:22px;">
								<div class="col-md-12" >
									<div class="col-md-6" style="text-align: right;">
										<div class="dropdown hover-dp">
											  	<button class="btn btn-default btn-main-cat dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" id="ds_main_cat_label">
											   		Select Performance <span class="caret" style="color:#d9574d;"></span>
											  	</button>
											  	<ul class="dropdown-menu">
											    	<li class="dropdown">
											      		<a href="#"></a>
											      		<ul class="dropdown-menu">
											        		<li><a href="javascript:selectScat();"></a></li>
											       		</ul>
											    	</li>
											  	 </ul>
											</div>
										</div>
									<div class="col-md-6" style="text-align: left;">
										<button value="Cancel"  name="product_modal"  style="width: 108px;height: 29px;background-color: #1E90FF;border:none;" >
											<span style="color:white;font-family:'MS Shell Dlg';font-size:11px;"><b>Send</b></span></button>
									</div>
								</div>
							</div>
						</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo asset_url();?>js/jquery.form.js"></script>

<script>
var base_url = "<?php echo base_url();?>";
function editinvice(orderid,buyerstatus)
{
	if(buyerstatus >1)
	{
		alert("After confirmation Invoice can not be edit.");
	} else {
		window.location ="<?php echo base_url();?>mystation/editinvoice/"+orderid;
	}
}
function addproduct(orderid,buyerstatus)
{
	if(buyerstatus >1)
	{
		alert("After confirmation Invoice can not add product.");
	} else {
		$('#addproduct_modal').modal('show');
	}
}
function firstpartyconfirm(order_id,busi_id)
{
	$.post("<?php echo base_url();?>mystation/firstpartyconfirm",{order_id:order_id,busi_id:busi_id},function(data){
		document.getElementById('btnfirstparty').style.display = 'none';
		document.getElementById('firstpartydiv').style.display = 'block';
		document.getElementById('firstpartytextdiv').style.display = 'none';
	},'json');
}
function secondpartyconfirm(order_id,busi_id)
{
	$.post("<?php echo base_url();?>mystation/secondpartyconfirm",{order_id:order_id,busi_id:busi_id},function(data){
		document.getElementById('btnsecondparty').style.display = 'none';
		document.getElementById('secondpartydiv').style.display = 'block';
		document.getElementById('secondpartytextdiv').style.display = 'none';
	},'json');
}
$('#frmaddinvoiceproduct').bootstrapValidator({
	container: function($field, validator) {
		return $field.parent().next('.messageContainer');
   	},
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
  		'product_name': {
            validators: {
                notEmpty: {
                    message: ''
                }
            }
        }, 
  		'product_modal': {
            validators: {
                notEmpty: {
                    message: ''
                }
            }
        }, 
     
        
    }
}).on('success.form.bv', function(e) {
// Prevent form submission
	e.preventDefault();
	addInvoiceProduct();
});

function closeinvoice()
{
	sellerOrder();
}
function addInvoiceProduct() {
	//ajaxindicatorstart("Please wait .. System is Processing...");
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showProductRequest, // pre-submit callback 
 			success :  showProductResponse,
 			url : '<?php echo base_url();?>mystation/addinvoiceproduct',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmaddinvoiceproduct').ajaxSubmit(options);
}
function showProductRequest(formData, jqForm, options){
	var queryString = $.param(formData);
return true;
}
function showProductResponse(resp, statusText, xhr, $form){
if(resp.status == 0) {
	$("#response").addClass('alert-danger');
	$("#response").html(resp.msg);
	$("#response").show();
	alert(resp.msg);
	} else {
	$("#response").addClass('alert-success');
	$("#response").html(resp.msg);
	$("#response").show();
	alert(resp.msg);
	location.reload();
	//window.location.reload();
	}
}

function closeproductpopup()
{
	$('#addproduct_modal').modal('hide');
}
function deleteinvoice(order_id,buyerstatus)
{
	if(buyerstatus <= 1)
	{ 
		var orderitemcount = document.getElementById('orderitemcount').value;
		var values = new Array();
		//$('#state option:contains("'+state.trim()+'")').prop('selected', true);
	    $.each($("input[name= 'productid[]']:checked"), function(){    
	    	values.push($(this).val());
	    });
		values = values.filter(v=>v!=null);
		if(values.length > 0 ) {
			if(orderitemcount != values.length) {
				$.post("<?php echo base_url();?>mystation/deleteinvoice",{values:values,order_id:order_id},function(data) {
				 		alert(data.msg);
	 			 	},'json');
				location.reload();
			} else {
				alert('Invoice has to be one item, you can not delete All.');
			}
				
		} else {
			alert('Please select product Item.');
		}
	} else {
		alert('After confirmation you can not delete items.');
	}
}
function closepopup()
{
	$('#example_modal').modal('hide');
}
function saveToPdf() {
	var element = document.getElementById('body');
	html2pdf(element, {
	  margin:       0,
	  filename:     'invoice.pdf',
	  image:        { type: 'jpeg', quality: 0.98 },
	  html2canvas:  { dpi: 192, letterRendering: true },
	  jsPDF:        { unit: 'in', format: 'A4', orientation: 'portrait' }
	});
}
</script>
<style>
.differentTable td {
	border:dotted;border-color:red;
}
</style>
