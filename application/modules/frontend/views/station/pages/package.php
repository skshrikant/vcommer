<style>
.pkg_one {
	height:73px;color: #fff;text-decoration: none;text-align:center;display:block;background-color: #ff6347;padding-top:15px;
}
.pkg_one:hover {
	height:73px;color: #fff;text-decoration: none;text-align:center;display:block;background-color: #fa8072;padding-top:15px;
}
.pkg_two {
	height:73px;color: #fff;text-decoration: none;text-align:center;display:block;background-color: #ff8c00;padding-top:15px;
}
.pkg_two:hover {
	height:73px;color: #fff;text-decoration: none;text-align:center;display:block;background-color: #f4a460;padding-top:15px;
}
.pkg_three {
	height:73px;color: #fff;text-decoration: none;text-align:center;display:block;background-color: #1e90ff;padding-top:15px;
}
.pkg_three:hover {
	height:73px;color: #fff;text-decoration: none;text-align:center;display:block;background-color: #00bfff;padding-top:15px;
}
</style>
<div id="Layer188" style="position:fixed;text-align:center;left:0;top:0;right:0;bottom:0;z-index:3090;">
</div>
<div class="row">
	<div class="col-sm-3" style="z-index:3118;">
		<div id="wb_Image69" style="margin-top:7px;z-index:3118;text-align:right;">
			<img src="<?php echo asset_url();?>images/img2049.png" id="Image69" alt="" style="width:142px;height:98px;">
		</div>
	</div>
	<div id="wb_Text533" class="col-sm-6 text-center" style="text-align:left;margin-top:22px;height:24px;z-index:3094;padding-left:60px;">
		<span style="color:#FFFFFF;font-family:Georgia;font-size:20px;"><strong>Trade Station Membership Plans </strong></span>
		<span style="color:#FF8C00;font-family:Georgia;font-size:20px;"><strong>(For One Year).</strong></span>
		<div id="wb_Text534" style="width:398px;height:15px;z-index:3095;text-align:left;">
			<span style="color:#FFFFFF;font-family:Arial;font-size:12px;">All members of our paid plans are ( BLACK HORSE MEMBERS).</span>
		</div>
		<div class="text-center" style="height:0px;z-index:3099;text-align:center;padding-top:10px;">
			<img src="<?php echo asset_url();?>images/img2011.png" id="Line1" alt="">
		</div>
		<div class="col-sm-4" style="text-align:center;padding-top: 5px;">
			<img src="<?php echo asset_url();?>images/img2022.png" id="Line11" alt="">
		</div>
		<div class="col-sm-4" style="text-align:center;padding-top: 5px;">
			<img src="<?php echo asset_url();?>images/img2022.png" id="Line11" alt="">
		</div>
		<div class="col-sm-4" style="text-align:center;padding-top: 5px;">
			<img src="<?php echo asset_url();?>images/img2022.png" id="Line11" alt="">
		</div>
	</div>
	<div class="col-sm-3" style="padding-top:26px;z-index:3091;text-align:center">
		<button id="AdvancedButton69" onclick="ShowObjectWithEffect('Layer174', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');return false;" type="button" style="width:40px;height:39px;z-index:3091;" name="" value="">
			<div><span style="color:#FFFFFF;font-family:Arial;font-size:20px">X</span></div>
		</button>
	</div>
</div>
<div class="row">
	<div class="col-sm-1" style="width:60px;">&nbsp;</div>
	<div class="col-sm-11">
	<div class="col-sm-3" style="z-index:3091;padding-right:0px;">
		<div style="height:64px;">
			
		</div>
		<?php 
		$i = 0;
		foreach ($packages as $package) { 
			if($package['plan_id'] == 2) {
		?>
		<div style="height:26px;z-index:3097;background-color: <?php if($i%2 == 1) { ?>#E0FFFF;<?php } else { ?>#FFFFFF;<?php } ?>padding-top:6px;border-right:1px solid #000;border-bottom:1px solid #000;">
			<span style="color:#2D2D2D;font-family:Arial;font-size:12px;padding-left:19px;"><?php echo $package['name'];?></span>
		</div>
		<?php 
			$i++;
			}
		} 
		?>
	</div>
	
	<div class="col-sm-6" style="z-index:3090;padding:0px;">
		<div class="col-sm-4" style="z-index:3065;padding-left:0px;">
			<div id="Layer203" style="height:12px;z-index:3065;">
			</div>
			<div style="background: #fff;text-align: center;padding: 10px;">
				<img src="<?php echo asset_url();?>images/member-logo.png" style="height: 32px;" alt="Black Horse Member" title="Black Horse Member">
				<span style="color:#FF6347;font-family:Georgia;font-size:20px;"><strong>Elite</strong></span>
			</div>
			<?php 
			$i = 0;
			$pkg_val = 0;
			foreach ($packages as $package) { 
				if($package['plan_id'] == 4) {
					if($cust_type == 1) {
						$pkg_val = $package['price'];
					} else {
						$pkg_val = $package['shipper_price'];
					}
			?>
			<div style="height:26px;z-index:3097;background-color: <?php if($i%2 == 1) { ?>#E0FFFF;<?php } else { ?>#FFFFFF;<?php } ?>padding-top:6px;">
				<span style="color:#2D2D2D;font-family:Arial;font-size:12px;padding-left:19px;"><?php echo $package['value'];?></span>
			</div>
			<?php 
				$i++;
				}
			} 
			?>
			<div id="wb_Shape325" style="height:73px;z-index:3087;">
				<?php if($this->session->userdata('tsuser')['plan_id'] < 4) { ?>
				<a href="<?php echo base_url();?>4/subscription-checkout" class="pkg_one pkgstyle">
					<div><label style="font-weight: normal;">USD</label> <label style="font-weight:normal;font-size:18px;"><?php echo $pkg_val;?>.00</label></div>
					<div class="text-center">START</div>
				</a>
				<?php } else { ?>
				<?php if($this->session->userdata('tsuser')['plan_id'] == 4) { ?>
				<div style="background-color:#FF6347;color:#fff;font-size:16px;padding:15px;">
					Current Plan
				</div>
				<?php } ?>
				<?php } ?>
			</div>
		</div>
		<div class="col-sm-4" style="z-index:3023;padding-left: 0px;">
			<div id="Layer200" style="height:12px;z-index:3023;">
			</div>
			<div style="background: #fff;text-align: center;padding: 10px;">
				<img src="<?php echo asset_url();?>images/member-logo.png" style="height: 32px;" alt="Black Horse Member" title="Black Horse Member">
				<span style="color:#FF8C00;font-family:Georgia;font-size:20px;"><strong>VIP</strong></span>
			</div>
			<?php 
			$i = 0;
			$pkg_val = 0;
			foreach ($packages as $package) { 
				if($package['plan_id'] == 3) {
					if($cust_type == 1) {
						$pkg_val = $package['price'];
					} else {
						$pkg_val = $package['shipper_price'];
					}
			?>
			<div style="height:26px;z-index:3097;background-color: <?php if($i%2 == 1) { ?>#E0FFFF;<?php } else { ?>#FFFFFF;<?php } ?>padding-top:6px;">
				<span style="color:#2D2D2D;font-family:Arial;font-size:12px;padding-left:19px;"><?php echo $package['value'];?></span>
			</div>
			<?php 
				$i++;
				}
			} 
			?>
			<div id="wb_Shape325" style="height:73px;z-index:3087;">
				<?php if($this->session->userdata('tsuser')['plan_id'] < 3) { ?>
				<a href="<?php echo base_url();?>3/subscription-checkout" class="pkg_two pkgstyle">
					<div><label style="font-weight: normal;">USD</label> <label style="font-weight:normal;font-size:18px;"><?php echo $pkg_val;?>.00</label></div>
					<div class="text-center">START</div>
				</a>
				<?php } else { ?>
				<?php if($this->session->userdata('tsuser')['plan_id'] == 3) { ?>
				<div style="background-color:#FF8C00;color:#fff;font-size:16px;padding:15px;">
					Current Plan
				</div>
				<?php } ?>
				<?php } ?>
			</div>
		</div>
		<div class="col-sm-4" style="z-index:2986;padding-left: 0px;">
			<div id="Layer195" style="height:12px;z-index:2986;">
			</div>
			<div style="background: #fff;text-align: center;padding: 10px;">
				<img src="<?php echo asset_url();?>images/member-logo.png" style="height: 32px;" alt="Black Horse Member" title="Black Horse Member">
				<span style="color:#1E90FF;font-family:Georgia;font-size:20px;"><strong>Basic</strong></span>
			</div>
			<?php 
			$i = 0;
			$pkg_val = 0;
			foreach ($packages as $package) { 
				if($package['plan_id'] == 2) {
					if($cust_type == 1) {
						$pkg_val = $package['price'];
					} else {
						$pkg_val = $package['shipper_price'];
					}
			?>
			<div style="height:26px;z-index:3097;background-color: <?php if($i%2 == 1) { ?>#E0FFFF;<?php } else { ?>#FFFFFF;<?php } ?>padding-top:6px;">
				<span style="color:#2D2D2D;font-family:Arial;font-size:12px;padding-left:19px;"><?php echo $package['value'];?></span>
			</div>
			<?php 
				$i++;
				}
			} 
			?>
			<div id="wb_Shape325" style="height:73px;z-index:3087;">
				<?php if($this->session->userdata('tsuser')['plan_id'] < 2) { ?>
				<a href="<?php echo base_url();?>2/subscription-checkout" class="pkg_three pkgstyle">
					<div><label style="font-weight: normal;">USD</label> <label style="font-weight:normal;font-size:18px;"><?php echo $pkg_val;?>.00</label></div>
					<div class="text-center">START</div>
				</a>
				<?php } else { ?>
				<?php if($this->session->userdata('tsuser')['plan_id'] == 2) { ?>
				<div style="background-color:#1E90FF;color:#fff;font-size:16px;padding:15px;">
					Current Plan
				</div>
				<?php } ?>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="col-sm-3" style="z-index:3090;padding:0px;">
		<div class="col-sm-8" style="padding-left: 0px;">
			<div id="Layer343" style="height:12px;z-index:2986;">
			</div>
			<div style="background: #fff;text-align: center;padding: 14px;">
				<span style="color:#696969;font-family:Georgia;font-size:20px;"><strong>Free</strong></span>
			</div>
			<?php 
			$i = 0;
			foreach ($packages as $package) { 
				if($package['plan_id'] == 1) {
			?>
			<div style="height:26px;z-index:3097;background-color: <?php if($i%2 == 1) { ?>#E0FFFF;<?php } else { ?>#FFFFFF;<?php } ?>padding-top:6px;">
				<span style="color:#2D2D2D;font-family:Arial;font-size:12px;padding-left:19px;"><?php echo $package['value'];?></span>
			</div>
			<?php 
				$i++;
				}
			} 
			?>
			<div id="wb_Shape325" style="height:73px;z-index:3087;">
				<div style="background-color:#696969;color:#fff;font-size:16px;padding:27px;text-align:center;">
					FREE
				</div>
			</div>
		</div>
	</div>
	<br><br>
	</div>
</div>
<div id="paymentModal" class="modal fade" role="dialog" style="z-index: 5051;">
  	<div class="modal-dialog" style="width:546px;">
    	<div class="modal-content">
    		<div class="modal-header" style="background-color: #FF6347;padding: 8px;text-align: center;">
    			<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title" style="color:#FFFFFF; font-family:Georgia;font-size:21px;font-style:normal;text-align:center;">Upgrade Your Package</h4>
      		</div>
      		<div class="modal-body">
      			<input type="hidden" id="pkg_price" />
      			<input type="hidden" id="pkg_id" />
				<div id="paypal-button-pkg"></div>
			</div>
		</div>
  	</div>
</div>

<script>
function payNow(id,price) {
	$("#pkg_id").val(id);
	$("#pkg_price").val(price);
	$('#paymentModal').modal({
	    backdrop: 'static',
	    keyboard: false
	});
	paypal.Button.render({
		env: 'sandbox',
		style: {
	        size: 'small',
	        color: 'gold',
	        shape: 'rect',
	        label: 'pay'
	    },
		client: {
		  	sandbox:    'AVZifqGdMaus7NSP8_Ps5dIGAo3NCPDBZ-pwa0hF0S--EBz8hOC3iaXr9mSS_0zf2p_7xK-_bkAjrIvO',
		  	production: 'AcIyXBUkURUQDSH_4ILWnFzoC4utWCuD2sr9RCRf2mFDWchhpeFCg8vrY_gq3HOcmwD-uWFVtRML3wuH' 	
		},
		payment: function(data, actions) {
		     return actions.payment.create({
		         transactions: [
		             {
		                 amount: {
		                     total: $("#pkg_price").val(),
		                     currency: 'USD'
		                 }
		             }
		         ]
		     });
		},
		commit: true,
		onAuthorize: function(data, actions) {
			$('#paymentModal').modal('hide');
		   	return actions.payment.execute().then(function(response) {
		       	pkgPaymentReceived(response,$("#pkg_id").val());
		   	});
		},
		onCancel: function(data) {
			$('#paymentModal').modal('hide');
			$('#paypal-button-pkg').html('');
		   	alert('The payment was cancelled!');
		}

	}, '#paypal-button-pkg');
}

function pkgPaymentReceived(paydata,id) {
	$.post(base_url+"mystation/ads/package/payment",{paydata: paydata, id:id},function(data) {
		alert("Payment received successfully.");
		ShowObjectWithEffect('Layer174', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');
	},'json');
}
</script>