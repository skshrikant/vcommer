<form name="frmorder"   method="post" action="" enctype="multipart/form-data" id="frmorder" >
	<div class="panel-heading custom-panel-heading">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6" style="text-align: left; padding-top: 13px;">
					<span style="color:#A9A9A9;font-family:Georgia;font-size:19px;">My Orders <?php echo count($order);?></span> 
				</div>
				<div class="col-md-5" >
					
				</div>
				<div class="col-md-1" style="text-align: right">
					<span class="pull-right-close" style="text-align: right"><a href="javascript:ShowObjectWithEffect('Layer180', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
				</div>
			</div>
		</div>
  	</div>
  	<div class="panel-body panel-body-custom" id="" style="padding-top: 22px;padding-left: 45px;">		
  		<div id="addproduct_div">
  		<?php $proname = "";  for ($i=0; $i<count($order);$i++) { $itemcount = 0;?>
	  		<div class="row">
	  			<div class="col-md-12">
	  				<div class="col-md-6">
	  					<div class="row">
	  						<div class="col-sm-2"  style="padding-top: 50px;">
	  						<!--  <span style="color:#303030;font-family:Georgia;font-size:12px;"><strong><a href="#" target="_blank" class="style5" onclick="ShowObjectWithEffect('Layer245', 1, 'scale', 500, 'swing');ShowObjectWithEffect('wb_Shape417', 1, 'scale', 500, 'swing');return false;">View</a></strong></span> -->
	  							<span style="color:#303030;font-family:Georgia;font-size:12px;"><strong>
	  							<a href="<?php echo base_url();?>mystation/invoice/<?php echo $order[$i]['orderid'];?>" target="_blank" class="style5">View</a></strong></span>
	  							<?php if($order[$i]['status'] == 1) {?>
	  								<span style="color:#303030;font-family:Georgia;font-size:12px;"><strong><a href="javascript:deleteorder(<?php echo $order[$i]['orderid'];?>);" target="_blank" class="style5">Delete</a></strong></span>
	  							<?php } ?>
	  						</div>
		  					<div class="col-sm-10">
		  						<?php foreach($orderitem as $row) { 
		  							if($row['order_id'] == $order[$i]['orderid']) { ?>
		  							<img alt="" src="<?php echo asset_url().$row['main_image'];?>" style="width:60px;height:60px;border-radius: 8px;">
		  							<?php 
		  							if($itemcount == 0) {
		  								$proname = $row['product_name'];
		  							} else {
		  								$proname = $proname.",".$row['product_name'];
		  							}
		  										$itemcount ++;  ?>
		  						<?php } } ?>	
		  					</div>
		  				</div><br>
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
		  					<div class="col-sm-10" >
		  						<img alt="" src="<?php echo asset_url().$order[$i]['profile_image'];?>" style="width:60px;height:60px;border-radius: 50px;">
		  					</div>
		  				</div><br>
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
		  					<div class="col-sm-3" >
		  						<span style="color:#696969;font-family:Arial;font-size:12px;">From: </span>
		  					</div>
		  					<div class="col-sm-7" >
		  						<a href="./desksite.php" target="_blank" class=""><?php echo $order[$i]['company_name']?></a>
		  					</div>
		  				</div>	
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
		  					</div>
		  					<div class="col-sm-7" >
		  						<span style="color:#4B4B4B;font-family:Arial;font-size:12px;">Presented By: <?php echo $order[$i]['name_prefix']." ".$order[$i]['name'];?></span>
		  					</div>
		  				</div>	
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
	  							<span style="color:#696969;font-family:Arial;font-size:12px;">Product: </span>
		  					</div>
		  					<div class="col-sm-7" >
		  						<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php echo $proname;?></span>
		  					</div>
		  				</div>	
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
	  							<span style="color:#696969;font-family:Arial;font-size:12px;">Total Amount: </span>
		  					</div>
		  					<div class="col-sm-7" >
		  						<span style="color:#2D2D2D;font-family:Arial;font-size:12px;">USD <?php echo $order[$i]['total'];?></span>
		  					</div>
		  				</div>	
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
	  							<span style="color:#696969;font-family:Arial;font-size:12px;">Total Products: </span>
		  					</div>
		  					<div class="col-sm-7" >
		  						<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php echo $itemcount;?> Product</span>
		  					</div>
		  				</div>	
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
	  							<span style="color:#696969;font-family:Arial;font-size:12px;">Status: </span>
		  					</div>
		  					<div class="col-sm-5" >
		  						<span style="color:#F05539;font-family:Arial;font-size:12px;"><?php if($order[$i]['status'] == 1) {?> Under Negotiations <?php } else {?> Confirmed On <?php echo date('j M Y',strtotime($order[$i]['confirmed_on'])); } ?></span>
		  					</div>
		  					<?php if($order[$i]['status'] == 2 || $order[$i]['status'] == 3) { ?>
			  					<div class="col-sm-1" >
			  						<img src="<?php echo asset_url();?>images/lock.png" id="Image186" style="width:29px;">
			  					</div>
			  					<div class="col-sm-1" >
			  						<img src="<?php echo asset_url();?>images/tick-octagon-frame.png" id="" style="width:17px;">
			  					</div>
			  				<?php } ?>	
			  			</div>
			  		<?php if($order[$i]['status'] == 2 || $order[$i]['status'] == 3) { ?>
			  			<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
		  					</div>
		  					<div class="col-sm-5" >
		  						<span style="color:#2D2D2D;font-family:Arial;font-size:12px;">Started on <?php echo date('j M Y',strtotime($order[$i]['started_on']));?></span>
		  					</div>
		  					<div class="col-sm-1" >
		  					</div>
		  					<div class="col-sm-1" >
		  						<img src="<?php echo asset_url();?>images/tick-octagon-frame.png" id="" style="width:17px;">
		  					</div>
			  			</div>
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
		  					</div>
		  					<div class="col-sm-5" >
		  						<span style="color:#2D2D2D;font-family:Arial;font-size:12px;">Loaded on <?php echo date('j M Y',strtotime($order[$i]['loaded_on']));?></span>
		  					</div>
		  					<div class="col-sm-1" >
		  					</div>
		  					<div class="col-sm-1" >
		  						<img src="<?php echo asset_url();?>images/tick-octagon-frame.png" id="" style="width:17px;">
		  					</div>
			  			</div>
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
		  					</div>
		  					<div class="col-sm-5" >
		  						<span style="color:#2D2D2D;font-family:Arial;font-size:12px;">Shipped on <?php echo date('j M Y',strtotime($order[$i]['shipped_on']));?></span>
		  					</div>
		  					<div class="col-sm-1" >
		  					</div>
		  					<div class="col-sm-1" >
		  						<img src="<?php echo asset_url();?>images/tick-octagon-frame.png" id="" style="width:17px;">
		  					</div>
			  			</div>
			  			<?php if($order[$i]['delivery_date'] != "" || $order[$i]['delivery_date'] != "0000-00-00") { ?>
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
		  					</div>
		  					<div class="col-sm-7" >
		  						<span style="color:#FF6347;font-family:Arial;font-size:12px;"><strong>GOODS RECEIVED BY THE BUYER</strong></span>
		  					</div>
			  			</div>
			  			<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
		  					</div>
		  					<div class="col-sm-3" >
		  						<span style="color:#2D2D2D;font-family:Arial;font-size:12px;">Buyer Rate</span>
		  					</div>
		  					<div class="col-sm-2" >
		  						<span style="color:#228B22;font-family:Arial;font-size:12px;">
		  						<?php if($order[$i]['buyer_rate'] == 1) { 
		  										echo "EXCELLENT" ;
		  									} else if($order[$i]['buyer_rate'] == 2) { 
		  										echo "GOOD";
		  									} else if($order[$i]['buyer_rate'] == 3)  { 
		  										echo "AVERAGE";
		  									} else if($order[$i]['buyer_rate'] == 3)  {
		  										echo "POOR"; }?>
		  						
		  						</span>
		  					</div>
			  			</div>
			  			<?php }
						} ?>
	  				</div>
	  				<?php $proname = ""; $i++; if($i<count($order)) {  $itemcount = 0; ?>
	  				<div class="col-md-6">
	  					<div class="row">
	  						<div class="col-sm-2"  style="padding-top: 50px;">
	  							<span style="color:#303030;font-family:Georgia;font-size:12px;"><strong>
	  							<a href="<?php echo base_url();?>mystation/invoice/<?php echo $order[$i]['orderid'];?>" target="_blank" class="style5" >View</a></strong></span>
	  							<?php if($order[$i]['status'] == 1) {?>
	  								<span style="color:#303030;font-family:Georgia;font-size:12px;"><strong><a href="javascript:deleteorder(<?php echo $order[$i]['orderid'];?>);" target="_blank" class="style5">Delete</a></strong></span>
	  							<?php } ?>
	  						</div>
		  					<div class="col-sm-10">
		  						<?php foreach($orderitem as $row) { 
		  							if($row['order_id'] == $order[$i]['orderid']) { ?>
		  							<img alt="" src="<?php echo asset_url().$row['main_image'];?>" style="width:60px;height:60px;border-radius: 8px;">
		  							<?php 
		  							if($itemcount == 0) {
		  								$proname = $row['product_name'];
		  							} else {
		  								$proname = $proname.",".$row['product_name'];
		  							}
		  							$itemcount ++;  ?>
		  						<?php } } ?>	
		  					</div>
		  				</div><br>
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
		  					<div class="col-sm-10" >
		  						<img alt="" src="<?php echo asset_url().$order[$i]['profile_image'];?>" style="width:60px;height:60px;border-radius: 50px;">
		  					</div>
		  				</div><br>
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
		  					<div class="col-sm-3" >
		  						<span style="color:#696969;font-family:Arial;font-size:12px;">From: </span>
		  					</div>
		  					<div class="col-sm-7" >
		  						<a href="./desksite.php" target="_blank" class=""><?php echo $order[$i]['company_name']?></a>
		  					</div>
		  				</div>	
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
		  					</div>
		  					<div class="col-sm-7" >
		  						<span style="color:#4B4B4B;font-family:Arial;font-size:12px;">Presented By: <?php echo $order[$i]['name_prefix']." ".$order[$i]['name'];?></span>
		  					</div>
		  				</div>	
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
	  							<span style="color:#696969;font-family:Arial;font-size:12px;">Product: </span>
		  					</div>
		  					<div class="col-sm-7" >
		  						<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php echo $proname;?></span>
		  					</div>
		  				</div>	
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
	  							<span style="color:#696969;font-family:Arial;font-size:12px;">Total Amount: </span>
		  					</div>
		  					<div class="col-sm-7" >
		  						<span style="color:#2D2D2D;font-family:Arial;font-size:12px;">USD <?php echo $order[$i]['total'];?></span>
		  					</div>
		  				</div>	
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
	  							<span style="color:#696969;font-family:Arial;font-size:12px;">Total Products: </span>
		  					</div>
		  					<div class="col-sm-7" >
		  						<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php echo $itemcount;?> Product</span>
		  					</div>
		  				</div>	
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
	  							<span style="color:#696969;font-family:Arial;font-size:12px;">Status: </span>
		  					</div>
		  					<div class="col-sm-5" >
		  						<span style="color:#F05539;font-family:Arial;font-size:12px;"><?php if($order[$i]['status'] == 1) {?> Under Negotiations <?php } else {?> Confirmed On <?php echo date('j M Y',strtotime($order[$i]['confirmed_on'])); }?></span>
		  					</div>
		  					<?php if($order[$i]['status'] == 2 || $order[$i]['status'] == 3) { ?>
			  					<div class="col-sm-1" >
			  						<img src="<?php echo asset_url();?>images/lock.png" id="Image186" style="width:29px;">
			  					</div>
			  					<div class="col-sm-1" >
			  						<img src="<?php echo asset_url();?>images/tick-octagon-frame.png" id="" style="width:17px;">
			  					</div>
		  					<?php } ?>
			  			</div>
			  		<?php if($order[$i]['status'] == 2 || $order[$i]['status'] == 3) { ?>
			  			<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
		  					</div>
		  					<div class="col-sm-5" >
		  						<span style="color:#2D2D2D;font-family:Arial;font-size:12px;">Started on <?php echo date('j M Y',strtotime($order[$i]['started_on']));?></span>
		  					</div>
		  					<div class="col-sm-1" >
		  					</div>
		  					<div class="col-sm-1" >
		  						<img src="<?php echo asset_url();?>images/tick-octagon-frame.png" id="" style="width:17px;">
		  					</div>
			  			</div>
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
		  					</div>
		  					<div class="col-sm-5" >
		  						<span style="color:#2D2D2D;font-family:Arial;font-size:12px;">Loaded on <?php echo date('j M Y',strtotime($order[$i]['loaded_on']));?></span>
		  					</div>
		  					<div class="col-sm-1" >
		  					</div>
		  					<div class="col-sm-1" >
		  						<img src="<?php echo asset_url();?>images/tick-octagon-frame.png" id="" style="width:17px;">
		  					</div>
			  			</div>
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
		  					</div>
		  					<div class="col-sm-5" >
		  						<span style="color:#2D2D2D;font-family:Arial;font-size:12px;">Shipped on <?php echo date('j M Y',strtotime($order[$i]['shipped_on']));?></span>
		  					</div>
		  					<div class="col-sm-1" >
		  					</div>
		  					<div class="col-sm-1" >
		  						<img src="<?php echo asset_url();?>images/tick-octagon-frame.png" id="" style="width:17px;">
		  					</div>
			  			</div>
			  			<?php if($order[$i]['delivery_date'] != "" || $order[$i]['delivery_date'] != "0000-00-00") { ?>
	  					<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
		  					</div>
		  					<div class="col-sm-7" >
		  						<span style="color:#FF6347;font-family:Arial;font-size:12px;"><strong>GOODS RECEIVED BY THE BUYER</strong></span>
		  					</div>
			  			</div>
			  			<div class="row" style="padding-top:15px">
	  						<div class="col-sm-2" >
	  						</div>
	  						<div class="col-sm-3" >
		  					</div>
		  					<div class="col-sm-3" >
		  						<span style="color:#2D2D2D;font-family:Arial;font-size:12px;">Buyer Rate</span>
		  					</div>
		  					<div class="col-sm-2" >
		  						<span style="color:#228B22;font-family:Arial;font-size:12px;">
		  						<?php if($order[$i]['buyer_rate'] == 1) { 
		  										echo "EXCELLENT" ;
		  									} else if($order[$i]['buyer_rate'] == 2) { 
		  										echo "GOOD";
		  									} else if($order[$i]['buyer_rate'] == 3)  { 
		  										echo "AVERAGE";
		  									} else if($order[$i]['buyer_rate'] == 3)  {
		  										echo "POOR"; }?>
		  						
		  						</span>
		  					</div>
			  			</div>
			  			<?php }
						} ?>
	  				</div>
	  				<?php } ?>
	  			</div>
	  		</div>
	  		<hr>
	  	<?php } ?>	
   		</div>
   </div>
 </form>
<script src="<?php echo asset_url();?>js/bootstrap-typeahead.min.js"></script>
<script type="text/javascript">
//document.getElementById('totalorder').innerHTML = <?php  echo count($order);?>;
function deleteorder(id)
{
	var r = confirm("Are you sure, you want to delete this order?");
	if (r == true) {
		$.post("<?php echo base_url();?>mystation/deleteorder",{id:id},function(data) {
			alert(data.msg);
			sellerOrder();
		},'json');
	}
}

var inquiry = document.getElementById('totalinquiry').innerHTML ;
var offer = document.getElementById('totaloffer').innerHTML ;
var request = document.getElementById('totalrequest').innerHTML ;
var order = document.getElementById('totalorder').innerHTML ;
document.getElementById('totalalert').textContent = parseInt(inquiry) + parseInt(offer) + parseInt(request) +parseInt(order);
</script>
 
 
