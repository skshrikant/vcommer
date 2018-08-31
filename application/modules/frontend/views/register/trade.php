
<?php $this->load->view('default/header_after_login'); ?>
<?php if($registration_step >= 4) { 
	redirect(base_url());
 } ?>

<div class="container" style="background:#f1f1f1;">
    <div class="row">
        <div class="col-md-2" style="background:#DCDCDC; padding-top:10%; padding-bottom:30%;">
            <div class="form-group">
                <h1 class="text-center"><span style="color:#2D2D2D;font-family:Georgia;font-size:19px;">Account</span></h1>
                <ul style="list-style:none; margin-left:15px; position:relative;">
                    <div style="position:absolute; margin:auto; margin-left:4px; top:0px; height:89% ;width:5px; overflow:hidden; background:#F05539; border-radius:50px;">
                        <div style="height:10%; width:5px; background:#F05539" id="account-steps"></div>
                    </div>
                    <li style="position:relative; margin-bottom:10px;"> <span style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span>Profile</li>
                    <li ><span id="account-steps1" style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span>Personal Info.</li>
                </ul>
            </div>
            <div class="form-group" id="business">
                <h1 class="text-center"><span style="color:#2D2D2D;font-family:Georgia;font-size:19px;">Buisness Info</span></h1>
                <ul style="list-style:none; position:relative; padding-left:30px;">
                    <div style="position:absolute; margin:auto; margin-left:4px; top:7px; height:80% ;width:5px; overflow:hidden; background:#fff; border-radius:50px;">
                        <div style="height:70%; width:5px; background:#F05539" id="business-steps"></div>
                    </div>
                    <li style="position:relative; margin-bottom:10px;"> <span style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span>General Info.</li>
                    <li style="position:relative; margin-bottom:10px;"><span id="business-step1" style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span> Factory Details</li>
                    <li style="position:relative;margin-bottom:10px;"><span id="business-step2" style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span> Trade / Export Info.</li>
                    <li style="position:relative;"><span id="business-step3" style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#fff; margin-right:10px; position:relative; z-index:11;"></span>Certificates</li>
                </ul>
            </div>
        </div>
        <div class="col-md-10" style="padding-top:5%;">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="col-xs-3 col-md-2"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Account</span></div>
                    <div class="col-xs-3 col-md-2 text-center"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Profile</span></div>
                    <div class="col-xs-3 col-md-3 text-center"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Buisness Information</span></div>
                    <div class="col-xs-3 col-md-5 text-right"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Complete</span></div>
                </div>
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="col-xs-12 " style="margin-top:20px;">
                        <div class="row" style="position:relative; margin:0px;">
                            <div class="col-xs-12" style="position:relative;">
                                <div class="horizontal-step" style="position:absolute; margin:auto; left:0px; right:0px; top:7px; height:8px;width:95%; overflow:hidden; background:#fff; border-radius:50px;">
                                    <div style="height:8px; width:70%; background:#F05539" id="main-steps"></div>
                                </div>
                                <span style="color:#F05539;font-family:Arial;font-size:19px;position:absolute; right:-35px;" id="count">70 %</span> </div>
                            <div class="col-xs-3 col-md-2"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span></div>
                            <div class="col-xs-3 col-md-2 text-center"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span></div>
                            <div class="col-xs-3 col-md-3 text-center"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span></div>
                            <div class="col-xs-3 col-md-5 text-right"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#FFFFFF; margin-right:0px; position:relative; z-index:11;"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="step4">
                <form method="post" action="<?php echo base_url(); ?>account/save_trade_info" name="trade" onsubmit="return validateTradeInfo();" enctype="multipart/form-data">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1" style="margin-top:50px;">
                        <div class="row" style="margin-top:50px;">
                            <div class="col-sm-12">
                                <div class="form-group ">
                                    <h1 class="col-md-12"><span style="color:#F05539;font-family:Georgia;font-size:13px;"> Trade & Export Details</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-md-2" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Main Markets</span></label>
                                    <div class="col-md-10" style="padding-right:2px;">
											<div class="form-group">
												<div class="label-text-input">
													<?php foreach ($market as $row) { ?>
															<div class="col-sm-4" style="padding-left:0px;">
																<input class="markets"  onchange="removewordwild(this)" name="market[]"   id="north_america" value="<?php echo $row['id'];?>"   type="checkbox">
																 <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"><?php echo $row['name']?></span>
															</div>
													<?php } ?>
													<div class="col-sm-4" style="padding-left:0px;">
														<input class="markets" id="worldwide" value="" name="market[]" type="checkbox">worldwide(to select all)
													</div>		
												</div>
												<div class="messageContainer"></div>
											</div>
                                        <div style="display: none;" id="marketErr">

                                            <h1><span style="color:#F05539;font-family:Georgia;font-size:13px;"> Please select atleast one main market.</span></h1>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-md-2" style="padding-top:5px; font-weight:normal; padding-right:0px;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Nearst Port/Ports</span></label>
                                    <div class="col-md-10" style="padding-right:2px;">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3" >
                                                <input type="text" id="port1" name="port1" class="Combobox2" placeholder="" style="height:35px">
                                            </div>
                                            <label class="col-xs-12 col-md-1" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> And</span></label>
                                            <div class="col-xs-12 col-sm-3" >
                                                <input type="text" id="port2" name="port2" class="Combobox2" placeholder="" style="height:35px">
                                            </div>
                                            <label class="col-xs-12 col-md-1" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> And</span></label>
                                            <div class="col-xs-12 col-sm-3" >
                                                <input type="text" id="port3" name="port3" class="Combobox2" placeholder="" style="height:35px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-md-2" style="padding-top:5px; font-weight:normal; padding-right:0px;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Terms Of International Trade</span></label>
                                    <div class="col-md-10" style="padding-right:2px;">
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-2" >
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="trade" id="fob" value="1" name="trade[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">FOB</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="trade" id="dap" value="7" name="trade[]" type="checkbox"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> DAP</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-2" >
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="trade" id="cfr" value="2" name="trade[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">CFR</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="trade" id="cip" value="8" name="trade[]" type="checkbox"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">CIP</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-2" >
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="trade" id="cif" value="3" name="trade[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">CIF</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="trade" id="cpt" value="9" name="trade[]" type="checkbox"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">CPT</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-2" >
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="trade" id="dat" value="4" name="trade[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> DAT</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="trade" id="exw" value="10" name="trade[]" type="checkbox"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">EXW</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-2" >
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="trade" id="fas" value="5" name="trade[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> FAS</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="trade" id="express" value="11" name="trade[]" type="checkbox"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Express</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-2" >
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="trade" id="ddp" value="6" name="trade[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> DDP</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="trade" id="allTrade" type="checkbox"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Select All</span>
                                                    </label>
                                                </div>

                                            </div>
                                            <div  style="display: none; " id="tradeErr">

                                                <h1><span style="color:#F05539;font-family:Georgia;font-size:13px;"> Please select atleast one Trade.</span></h1>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-md-2" style="padding-top:5px; font-weight:normal; padding-right:0px;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Terms Of Payment</span></label>
                                    <div class="col-md-10" style="padding-right:2px;">
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-2" >
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="payment" id="tt" value="1" name="payment[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> T/T</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="payment" id="cash" value="7" name="payment[]" type="checkbox"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Cash</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-2" style="padding:0px;">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="payment" id="lc" value="2" name="payment[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">LC</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="payment" id="credit_card" value="8" name="payment[]" type="checkbox"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Credit Card</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-2" >
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="payment" id="dp" value="3" name="payment[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> D/P</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-2" >
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="payment" id="paypal" value="4" name="payment[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Paypal</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-2" style="padding:0px;">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="payment" id="western_union" value="5" name="payment[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Western Union </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-2" style="padding:0px;" >
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="payment" id="money_gram" value="6" name="payment[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">  Money Gram</span>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div style="display: none;" id="paymentErr">

                                            <h1 ><span style="color:#F05539;font-family:Georgia;font-size:13px;"> Please select atleast one payment Type.</span></h1>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-md-2" style="padding-top:5px; font-weight:normal; padding-right:0px;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Payment Curency</span></label>
                                    <div class="col-md-10" style="padding-right:2px;">
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-2" >
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="currency" id="usd" value="1" name="currency[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">USD</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="currency" id="gbp" value="7" name="currency[]" type="checkbox"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> GBP</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-2" style="padding:0px;">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="currency" id="eur" value="2" name="currency[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">EUR</span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="currency" id="cny" value="8" name="currency[]" type="checkbox"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">CNY</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-2" >
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="currency" id="jpy" value="3" name="currency[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> JPY</span>
                                                    </label>
                                                </div>

                                                <div class="checkbox">
                                                    <label>
                                                        <input class="currency" id="chf" value="9" name="currency[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> CHF</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-2" >
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="currency" id="cad" value="4" name="currency[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">CAD</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-2" style="padding:0px;">
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="currency" id="aud" value="5" name="currency[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">AUD</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-4 col-sm-2" style="padding:0px;" >
                                                <div class="checkbox">
                                                    <label>
                                                        <input class="currency" id="hkd" value="6" name="currency[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">HKD</span>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div style="display: none;" id="currencyErr">

                                            <h1 ><span style="color:#F05539;font-family:Georgia;font-size:13px;"> Please select atleast one currency type.</span></h1>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row" style="margin-top:30px;">
                            <div class="col-sm-12">
                                <div class="form-group text-center" id="next4"> 
                                    <button type="submit" style="padding:0px;border:0px;">
                                        <img src="<?php echo asset_url(); ?>images/ts/img1190.gif" >
                                    </button>
                              </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
function removewordwild(chkelement)
{
	if (chkelement.checked) {
		
	} else {
		document.getElementById("worldwide").checked = false;
		
	}
}


</script>

