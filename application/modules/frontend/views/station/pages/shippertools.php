<style>
.skyblue {
	width:100%;
	text-align:center;
}
.skyblue th {
	background-color: #E0FFFF;
    border: 1px #DCDCDC solid;
    padding: 5px 10px;
    text-align: center;
}
.skyblue td {
	background-color: #FFFFFF;
    border: 1px #DCDCDC solid;
    padding: 5px 10px;
    text-align: center;
}
.page-active {
	color:#2688E4;
	text-decoration:underline;
}
.page-inactive {
	color:#3C3C3C;
	text-decoration:none;
}
.mytoolsts-div {
	min-height:626px;
	overflow-y:scroll;
}
</style>
<div class="row editaccount_outer">
	<div class="col-md-2 account-left-nav"> 
		<div class="col-md-12" style="padding: 9px;">
			<div class="account-image">
				<a href="javascript:false;"> 
					<img class="hover" alt="" class="img-circle" src="<?php echo asset_url();?>images/configure-2.png" style="width:45px;">
				</a>
			</div>
			<div style="color:#FFFFFF;font-family:Arial;font-size:13px;text-align: center;padding-bottom: 15px;">Tools</div>
		</div>
		<div class="col-md-12" style="padding: 9px;">
			<!-- div class="" style="text-align: center;padding-top: 400px;">
			<span style="color: #FFFFFF; font-family: Arial; font-size: 11px;">TRADE</span><br>
				<span style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">STATION</span><br>
				<span style="color: #FFFFFF; font-family: Arial; font-size: 8px;">Copyrights
							| TRDSTATION 2013-2016@All Rights Reserved</span>
			</div-->
		</div>
	</div>
	<div class="col-md-10 account-content-area">
		<div class="tab-content main-tab-content">
			<div class="panel panel-default tab-pane fade in active" id="maintoolscreen">
				<div class="panel-heading custom-panel-heading mn-heading" style="text-align:left;padding-top: 5px !important;border-bottom: 0px;background-color:#fff !important;">
					<br>
					<a href="javascript:showPerformance();" id="busi_performance" class="btn btn-sm btn-tool btn-tool-active" style="margin-left:20px;">Performance</a>
					<a href="javascript:showStorage();" id="busi_storage" class="btn btn-sm btn-tool btn-tool">Storage</a>
					<a href="javascript:showBackup();" id="busi_backup" class="btn btn-sm btn-tool btn-tool">Backup</a>
					<span class="pull-right-close" style="padding-top: 0px;padding-right: 5px;margin-top: -5px;"><a href="javascript:ShowObjectWithEffect('Layer528', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close" style="padding:6px 12px;font-size:22px;">x</a></span>
				</div>
				<div class="panel-inner">
					<div id="myperformance" class="mytool-div">
						<div style="height: 626px; overflow: auto; padding: 0px; display: block;border: 0px;" id="jquerytabs1-page-0" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false">
						<div id="wb_Text1457" style="position:absolute;left:108px;top:85px;width:675px;height:77px;z-index:3399;text-align:left;">
						<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Trade Station "<strong>Tools Feature</strong>" provide you will the </span><span style="color:#2D2D2D;font-family:Calibri;font-size:13px;">with a unique method to get a quick and major details about each part in your site, with a final result helps your company to evaluate the displayed products,&nbsp; find the right markets looking for your products, set a suitable punctual market plans and much more.<br><strong>Tools Feature </strong>includes additional functions to manage your storage and create a regular backups of your whole site.&nbsp; <br></span></div>
						<div id="Layer531" style="position:absolute;text-align:left;left:108px;top:209px;width:247px;height:390px;z-index:3400;">
						<div id="Layer534" style="position:absolute;text-align:left;left:0px;top:0px;width:247px;height:198px;z-index:3352;">
						</div>
						<div id="wb_Shape16" style="position:absolute;left:20px;top:59px;width:206px;height:108px;z-index:3353;">
						<?php if(!empty($business_stats[0]['desksite_bg1'])) { ?>
						<img src="<?php echo asset_url();?><?php echo $business_stats[0]['desksite_bg1'];?>" id="Shape16" alt="" style="width:206px;height:108px;">
						<?php } else { ?>
						<img src="<?php echo asset_url();?>images/member-desksite.jpg" id="Shape16" alt="" style="width:206px;height:108px;">
						<?php } ?>
						</div>
						<div id="wb_Text1454" style="position:absolute;left:106px;top:15px;width:85px;height:16px;z-index:3354;text-align:left;">
						<span style="color:#D3D3D3;font-family:Georgia;font-size:16px;">Desksite</span></div>
						<div id="wb_Image132" style="position:absolute;left:69px;top:11px;width:30px;height:30px;z-index:3355;">
						<img src="<?php echo asset_url();?>images/Desksite-small.png" id="Image132" alt=""></div>
						<div id="wb_Text1453" style="position:absolute;left:123px;top:272px;width:60px;height:16px;text-align:center;z-index:3356;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><strong><?php echo $business_stats[0]['visit'];?></strong></span></div>
						<div id="wb_Text1461" style="position:absolute;left:67px;top:271px;width:51px;height:16px;z-index:3357;text-align:left;">
						<span style="color:#2688E4;font-family:Arial;font-size:12px;"><strong>Visitors</strong></span></div>
						<div id="wb_Text1456" style="position:absolute;left:123px;top:292px;width:60px;height:16px;text-align:center;z-index:3358;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><strong><?php echo $business_stats[0]['likes'];?></strong></span></div>
						<div id="wb_Text1458" style="position:absolute;left:67px;top:291px;width:51px;height:16px;z-index:3359;text-align:left;">
						<span style="color:#2688E4;font-family:Arial;font-size:12px;"><strong>Likes</strong></span></div>
						<div id="wb_Text1459" style="position:absolute;left:67px;top:311px;width:51px;height:16px;z-index:3360;text-align:left;">
						<span style="color:#2688E4;font-family:Arial;font-size:12px;"><strong>Shares</strong></span></div>
						<div id="wb_Text1460" style="position:absolute;left:123px;top:312px;width:60px;height:16px;text-align:center;z-index:3361;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><strong><?php echo $business_stats[0]['shares'];?></strong></span></div>
						<div id="wb_Text1464" style="position:absolute;left:10px;top:212px;width:33px;height:16px;text-align:center;z-index:3362;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><strong>URL</strong></span></div>
						<?php 
							$msurl = base_url()."shipper/profile/".$business_stats[0]['id'];
						?>
						<div id="wb_Text1463" style="position:absolute;left:14px;top:229px;width:202px;height:16px;z-index:3363;text-align:left;">

							<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><strong><a href="<?php echo base_url();?>shipper/profile/<?php echo $business_stats[0]['id'];?>" target="_blank" class="style16"><?php echo substr($msurl,0,30);?><?php if(strlen($msurl) > 30) {?>..<?php }?></a></strong></span>

						</div>
						<div id="wb_Shape364" style="position:absolute;left:40px;top:348px;width:164px;height:33px;z-index:3364;">
							<a href="javascript:showStatHistory(1);"><div id="Shape364"><div id="Shape364_text"><span style="color:#FFFFFF;font-family:'MS Shell Dlg';font-size:11px;">VIEW</span></div></div></a></div>
						</div>
						<?php if($cust_type == 1) { ?>
						<div id="Layer532" style="position:absolute;text-align:left;left:392px;top:210px;width:247px;height:389px;z-index:3401;">
						<div id="Layer535" style="position:absolute;text-align:left;left:0px;top:0px;width:247px;height:198px;z-index:3365;">
						</div>
						<div id="wb_Text1465" style="position:absolute;left:84px;top:16px;width:114px;height:16px;z-index:3366;text-align:left;">
							<span style="color:#D3D3D3;font-family:Georgia;font-size:16px;">Total Products</span>
						</div>
						<div id="wb_Image133" style="position:absolute;left:44px;top:7px;width:36px;height:36px;z-index:3367;">
							<img src="<?php echo asset_url();?>images/products.png" id="Image133" alt="">
						</div>
						<div id="wb_Text1466" style="position:absolute;left:124px;top:219px;width:60px;height:16px;text-align:center;z-index:3368;">
							<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><strong><?php echo $product_stats[0]['products'];?></strong></span>
						</div>
						<div id="wb_Text1467" style="position:absolute;left:68px;top:218px;width:51px;height:16px;z-index:3369;text-align:left;">
							<span style="color:#2688E4;font-family:Arial;font-size:12px;"><strong>Total</strong></span>
						</div>
						<div id="wb_Text1468" style="position:absolute;left:124px;top:239px;width:60px;height:16px;text-align:center;z-index:3370;">
							<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><strong><?php echo $product_stats[0]['likes'];?></strong></span>
						</div>
						<div id="wb_Text1471" style="position:absolute;left:124px;top:259px;width:60px;height:16px;text-align:center;z-index:3371;">
							<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><strong><?php echo $product_stats[0]['shares'];?></strong></span>
						</div>
						<?php $images = explode(",",$product_stats[0]['images']);?>
						<div style="position:absolute;left:38px;top:50px;width:170px;height:110px;z-index:3372;">
						<?php foreach ($images as $key=>$image) { ?>
						<?php if($key <= 5) { ?>
						<div id="wb_Shape15" style="padding:5px;float:left;width:55px;height:55px;margin-bottom:5px;">
							<img src="<?php echo asset_url();?><?php echo $image;?>" id="Shape15" alt="" style="width:50px;height:50px;border-radius:4px;">
						</div>
						<?php } ?>
						<?php } ?>
						</div>
						<div id="wb_Text1469" style="position:absolute;left:69px;top:239px;width:51px;height:16px;z-index:3378;text-align:left;">
						<span style="color:#2688E4;font-family:Arial;font-size:12px;"><strong>Likes</strong></span></div>
						<div id="wb_Text1470" style="position:absolute;left:69px;top:260px;width:51px;height:16px;z-index:3379;text-align:left;">
						<span style="color:#2688E4;font-family:Arial;font-size:12px;"><strong>Shares</strong></span></div>
						<div id="wb_Shape362" style="position:absolute;left:44px;top:347px;width:164px;height:33px;z-index:3380;">
						<a href="javascript:showStatHistory(2);" ><div id="Shape362"><div id="Shape362_text"><span style="color:#FFFFFF;font-family:'MS Shell Dlg';font-size:11px;">VIEW</span></div></div></a></div>
						</div>
						<div id="Layer533" style="position:absolute;text-align:left;left:678px;top:210px;width:247px;height:387px;z-index:3402;">
						<div id="Layer536" style="position:absolute;text-align:left;left:0px;top:0px;width:247px;height:198px;z-index:3381;">
						</div>
						<div id="wb_Text1472" style="position:absolute;left:78px;top:17px;width:122px;height:16px;z-index:3382;text-align:left;">
						<span style="color:#D3D3D3;font-family:Georgia;font-size:16px;">Active Products</span></div>
						<div id="wb_Text1473" style="position:absolute;left:142px;top:238px;width:60px;height:16px;text-align:center;z-index:3383;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><strong><?php echo $aproduct_stats[0]['visit'];?></strong></span></div>
						<div id="wb_Text1474" style="position:absolute;left:66px;top:237px;width:51px;height:16px;z-index:3384;text-align:left;">
						<span style="color:#2688E4;font-family:Arial;font-size:12px;"><strong>Views</strong></span></div>
						<div id="wb_Text1475" style="position:absolute;left:142px;top:258px;width:60px;height:16px;text-align:center;z-index:3385;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><strong><?php echo $aproduct_stats[0]['likes'];?></strong></span></div>
						<div id="wb_Text1478" style="position:absolute;left:142px;top:278px;width:60px;height:16px;text-align:center;z-index:3386;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><strong><?php echo $aproduct_stats[0]['shares'];?></strong></span></div>
						<div id="wb_Image134" style="position:absolute;left:37px;top:9px;width:36px;height:36px;z-index:3387;">
						<img src="<?php echo asset_url();?>images/img1748.png" id="Image134" alt=""></div>
						<div id="wb_Text1479" style="position:absolute;left:66px;top:216px;width:65px;height:16px;z-index:3388;text-align:left;">
						<span style="color:#2688E4;font-family:Arial;font-size:12px;"><strong>Active Pro.</strong></span></div>
						<div id="wb_Text1480" style="position:absolute;left:142px;top:217px;width:60px;height:16px;text-align:center;z-index:3389;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><strong><?php echo $aproduct_stats[0]['products'];?></strong></span></div>
						<div id="wb_Shape46" style="position:absolute;left:37px;top:66px;width:50px;height:50px;z-index:3390;">
						<img src="<?php echo asset_url();?>images/img1749.png" id="Shape46" alt="" style="width:50px;height:50px;"></div>
						<div id="wb_Shape71" style="position:absolute;left:92px;top:66px;width:50px;height:50px;z-index:3391;">
						<img src="<?php echo asset_url();?>images/img1750.png" id="Shape71" alt="" style="width:50px;height:50px;"></div>
						<div id="wb_Shape310" style="position:absolute;left:91px;top:122px;width:50px;height:50px;z-index:3392;">
						<img src="<?php echo asset_url();?>images/img1760.png" id="Shape310" alt="" style="width:50px;height:50px;"></div>
						<div id="wb_Shape339" style="position:absolute;left:37px;top:122px;width:50px;height:50px;z-index:3393;">
						<img src="<?php echo asset_url();?>images/img1761.png" id="Shape339" alt="" style="width:50px;height:50px;"></div>
						<div id="wb_Shape21" style="position:absolute;left:147px;top:66px;width:50px;height:50px;z-index:3394;">
						<img src="<?php echo asset_url();?>images/img1762.png" id="Shape21" alt="" style="width:50px;height:50px;"></div>
						<div id="wb_Shape22" style="position:absolute;left:147px;top:121px;width:50px;height:50px;z-index:3395;">
						<img src="<?php echo asset_url();?>images/img1763.png" id="Shape22" alt="" style="width:50px;height:50px;"></div>
						<div id="wb_Text1476" style="position:absolute;left:67px;top:256px;width:51px;height:16px;z-index:3396;text-align:left;">
						<span style="color:#2688E4;font-family:Arial;font-size:12px;"><strong>Likes</strong></span></div>
						<div id="wb_Text1477" style="position:absolute;left:67px;top:276px;width:51px;height:16px;z-index:3397;text-align:left;">
						<span style="color:#2688E4;font-family:Arial;font-size:12px;"><strong>Shares</strong></span></div>
						<div id="wb_Shape363" style="position:absolute;left:38px;top:347px;width:164px;height:33px;z-index:3398;">
						<a href="javascript:showStatHistory(3);" ><div id="Shape363"><div id="Shape363_text"><span style="color:#FFFFFF;font-family:'MS Shell Dlg';font-size:11px;">VIEW</span></div></div></a></div>
						</div>
						<?php } ?>
						</div>
					</div>
					<div id="mystorage" style="display:none;overflow-y:hidden;height:630px;" class="mytool-div">
						<div class="row" style="margin:0px;">
							<div class="col-sm-7">
								<div class="text-center"><span style="color:#2D2D2D;font-family:Arial;font-size:13px;"><strong>USAGE CHART</strong></span></div>
								<div class="text-center" id="pie-chart" style="height:300px;width:300px;margin: auto auto;">
									<canvas id="myChart" width="300" height="300"></canvas>
								</div>
								<br>
								<div class="row">
									<div class="col-sm-4 text-center">
										<span style="color:#2D2D2D;font-family:Arial;font-size:13px;"><strong>Community Usage</strong></span>
									</div>
									<div class="col-sm-4 text-center">
										<span style="color:#2D2D2D;font-family:Arial;font-size:13px;"><strong>Offer Usage</strong></span>
									</div>
									<div class="col-sm-4 text-center">
										<span style="color:#2D2D2D;font-family:Arial;font-size:13px;"><strong>Inquiries Usage</strong></span>
									</div>
									<div class="col-sm-4" id="community_usage" style="height:130px;">
										<div style="width:130px;height:130px;margin:auto auto;text-align:center;">
											<?php if($comm_plan > 0) { ?><canvas id="communityChart" width="130" height="130">N/A</canvas><?php } else { ?><label style="padding-top:45px;font-size:26px;">N/A</label><?php }?>
										</div>
									</div>
									<div class="col-sm-4" id="offers_usage" style="height:130px;">
										<div style="width:130px;height:130px;margin:auto auto;">
											<canvas id="offersChart" width="130" height="130">N/A</canvas>
										</div>
									</div>
									<div class="col-sm-4" id="inquiry_usage" style="height:130px;">
										<div style="width:130px;height:130px;margin:auto auto;">
											<canvas id="inquiryChart" width="130" height="130">N/A</canvas>
										</div>
									</div>
									<div class="col-sm-4 text-left">
										<div style="margin-left:25px;">
											<label id="Layer553" style="width:15px;height:15px;background-color: #E7241A;vertical-align: middle;">
											</label>
											<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Used</span>
											<span style="color:#E7241A;font-family:Arial;font-size:20px;"><strong><?php echo $community_storage;?> </strong></span>
										</div>
										<div style="margin-left:25px;">
											<label id="Layer553" style="width:15px;height:15px;background-color: #292929;vertical-align: middle;">
											</label>
											<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Free Space <?php echo ($comm_plan - $community_storage)?>MB</span>
										</div>
									</div>
									<div class="col-sm-4 text-left">
										<div style="margin-left:25px;">
											<label id="Layer553" style="width:15px;height:15px;background-color: #af0f07;vertical-align: middle;">
											</label>
											<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Used</span>
											<span style="color:#E7241A;font-family:Arial;font-size:20px;"><strong><?php echo $offer_storage;?> </strong></span>
										</div>
										<div style="margin-left:25px;">
											<label id="Layer553" style="width:15px;height:15px;background-color: #292929;vertical-align: middle;">
											</label>
											<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Free Space <?php echo ($ois_plan - $community_storage)?>MB</span>
										</div>
									</div>
									<div class="col-sm-4 text-left">
										<div style="margin-left:25px;">
											<label id="Layer553" style="width:15px;height:15px;background-color: #890d06;vertical-align: middle;">
											</label>
											<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Used</span>
											<span style="color:#E7241A;font-family:Arial;font-size:20px;"><strong><?php echo $inquiry_storage;?> </strong></span>
										</div>
										<div style="margin-left:25px;">
											<label id="Layer553" style="width:15px;height:15px;background-color: #292929;vertical-align: middle;">
											</label>
											<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Free Space <?php echo ($ois_plan - $community_storage)?>MB</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="row" style="padding-bottom:5px;">
									<div class="col-sm-6">
										<div id="Layer537" style="width:200px;height:22px;z-index:3423;">
											<div id="wb_Text1481" style="position:absolute;left:40px;top:3px;width:159px;height:16px;z-index:3403;text-align:left;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Your total STORAGE BOX</span>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div id="wb_Text1483" style="width:80px;height:24px;z-index:3420;text-align:left;">
											<span style="color:#F05539;font-family:Arial;font-size:20px;"><strong><?php echo round($storage_plan,2);?> </strong></span><span style="color:#F05539;font-family:Arial;font-size:13px;">MB</span>
										</div>
									</div>
								</div>
								<div class="row" style="padding-bottom:5px;">
									<div class="col-sm-6">
										<div id="wb_Text1484" style="margin-left:40px;width:165px;height:32px;z-index:3421;text-align:left;">
											<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Your total USAGE</span><span style="color:#2D2D2D;font-family:Calibri;font-size:13px;"><br></span>
										</div>
									</div>
									<div class="col-sm-6">
										<div id="wb_Text1482" style="width:80px;height:40px;z-index:3419;text-align:left;">
											<span style="color:#2D2D2D;font-family:Arial;font-size:20px;"><strong><?php echo round($total_storage,2);?> </strong></span><span style="color:#2D2D2D;font-family:Arial;font-size:13px;">MB</span>
										</div>
									</div>
								</div>
								<div class="row" style="padding-bottom:5px;">
									<div class="col-sm-6">
										<div id="Layer539" style="width:200px;height:22px;z-index:3424;">
											<div id="Layer540" style="width:21px;height:22px;z-index:3404;">
											</div>
											<div id="wb_Text1486" style="position:absolute;left:40px;top:3px;width:159px;height:16px;z-index:3405;text-align:left;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">All Desksite Storage</span>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div id="wb_Text1488" style="width:94px;height:24px;z-index:3426;text-align:left;">
											<span style="color:#E76C1A;font-family:Arial;font-size:20px;"><strong><?php echo $product_storage;?> </strong></span><span style="color:#E76C1A;font-family:Arial;font-size:13px;">MB</span>
										</div>
									</div>
								</div>
								<div class="row" style="padding-bottom:5px;">
									<div class="col-sm-6">
										<div id="Layer541" style="width:200px;height:22px;z-index:3427;">
											<div id="Layer542" style="width:21px;height:22px;z-index:3406;">
											</div>
											<div id="wb_Text1489" style="position:absolute;left:40px;top:3px;width:159px;height:16px;z-index:3407;text-align:left;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Community Posts Storage</span>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div id="wb_Text1490" style="width:65px;height:24px;z-index:3428;text-align:left;">
											<span style="color:#E7241A;font-family:Arial;font-size:20px;"><strong><?php echo $community_storage;?> </strong></span><span style="color:#E7241A;font-family:Arial;font-size:13px;">MB</span>
										</div>
									</div>
								</div>
								<div class="row" style="padding-bottom:5px;">
									<div class="col-sm-6">
										<div id="Layer543" style="width:200px;height:22px;z-index:3430;">
											<div id="Layer544" style="width:21px;height:22px;z-index:3408;">
											</div>
											<div id="wb_Text1492" style="position:absolute;left:40px;top:3px;width:159px;height:16px;z-index:3409;text-align:left;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Offers Storage</span>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div id="wb_Text1491" style="width:94px;height:24px;z-index:3429;text-align:left;">
											<span style="color:#AF0F07;font-family:Arial;font-size:20px;"><strong><?php echo $offer_storage;?> </strong></span><span style="color:#AF0F07;font-family:Arial;font-size:13px;">MB</span>
										</div>
									</div>
								</div>
								<div class="row" style="padding-bottom:5px;">
									<div class="col-sm-6">
										<div id="Layer545" style="width:200px;height:22px;z-index:3431;">
											<div id="Layer546" style="width:21px;height:22px;z-index:3410;">
											</div>
											<div id="wb_Text1493" style="position:absolute;left:40px;top:3px;width:159px;height:16px;z-index:3411;text-align:left;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Inquiries Storage</span>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div id="wb_Text1494" style="width:65px;height:24px;z-index:3432;text-align:left;">
											<span style="color:#890D06;font-family:Arial;font-size:20px;"><strong><?php echo $inquiry_storage;?> </strong></span><span style="color:#890D06;font-family:Arial;font-size:13px;">MB</span>
										</div>
									</div>
								</div>
								<div class="row" style="padding-bottom:5px;">
									<div class="col-sm-6">
										<div id="Layer547" style="width:200px;height:22px;z-index:3434;">
											<div id="Layer548" style="width:21px;height:22px;z-index:3412;">
											</div>
											<div id="wb_Text1496" style="position:absolute;left:40px;top:3px;width:159px;height:16px;z-index:3413;text-align:left;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Videos Storage</span>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div id="wb_Text1495" style="width:94px;height:24px;z-index:3433;text-align:left;">
											<span style="color:#2688E4;font-family:Arial;font-size:20px;"><strong><?php echo $video_storage; ?> </strong></span><span style="color:#2688E4;font-family:Arial;font-size:13px;">MB</span>
										</div>
									</div>
								</div>
								<div class="row" style="padding-bottom:5px;">
									<div class="col-sm-6">
										<div id="Layer549" style="width:200px;height:22px;z-index:3436;">
											<div id="Layer550" style="width:21px;height:22px;z-index:3414;">
											</div>
											<div id="wb_Text1498" style="position:absolute;left:40px;top:3px;width:159px;height:16px;z-index:3415;text-align:left;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">B. Station Posts Storage</span>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div id="wb_Text1497" style="width:65px;height:24px;z-index:3435;text-align:left;">
											<span style="color:#40BFB5;font-family:Arial;font-size:20px;"><strong><?php echo $bstation_storage;?> </strong></span><span style="color:#40BFB5;font-family:Arial;font-size:13px;">MB</span>
										</div>
									</div>
								</div>
								<div class="row" style="padding-bottom:5px;">
									<div class="col-sm-6">
										<div id="Layer551" style="width:200px;height:22px;z-index:3437;">
											<div id="Layer552" style="width:21px;height:22px;z-index:3416;">
											</div>
											<div id="wb_Text1499" style="position:absolute;left:40px;top:3px;width:159px;height:16px;z-index:3417;text-align:left;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Stock M. Posts Storage</span>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div id="wb_Text1500" style="width:65px;height:24px;z-index:3438;text-align:left;">
											<span style="color:#1A9F75;font-family:Arial;font-size:20px;"><strong><?php echo $stock_storage;?> </strong></span><span style="color:#1A9F75;font-family:Arial;font-size:13px;">MB</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<br><br><br><br><br><br>
					</div>
					<div id="mybackup" style="display:none;overflow-y:scroll;" class="mytool-div">
						<div style="height: 626px; overflow: auto; padding: 0px; display: block;border: 0px;" id="jquerytabs1-page-2" aria-labelledby="ui-id-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false">
						<div id="wb_Text1455" style="position:absolute;left:195px;top:142px;width:675px;height:162px;z-index:3460;text-align:left;">
						<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Enjoy high level of security, save your the whole contents of your website ( to your PC) in one compressed file and restore it by one click to recover any damaged of lost data.<br><br><strong>When I should backup my website..?<br></strong>You only should backup your website, once you finish adding all of your products, and keep doing it when you make some changes or adding new contents.<br><br><strong>When i should restore my website from backup?<br></strong>Never do restore, unless something serious happened in your website such as losing data..etc, in this case be sure that your will going to restore a recent Backup file.<br></span></div>
						<div id="wb_Shape340" style="position:absolute;left:398px;top:389px;width:133px;height:33px;z-index:3461;">
						<a href="" onclick="ShowObject('jQueryTabs1', 1);return false;"><div id="Shape340"><div id="Shape340_text"><span style="color:#FFFFFF;font-family:'MS Shell Dlg';font-size:11px;">BACKUP</span></div></div></a></div>
						<div id="wb_Shape361" style="position:absolute;left:536px;top:389px;width:133px;height:33px;z-index:3462;">
						<a href="" onclick="ShowObject('jQueryTabs1', 1);return false;"><div id="Shape361"><div id="Shape361_text"><span style="color:#FFFFFF;font-family:'MS Shell Dlg';font-size:11px;">RESTORE</span></div></div></a></div>
						<div id="wb_Text1513" style="position:absolute;left:196px;top:312px;width:311px;height:30px;z-index:3463;text-align:left;">
						<span style="color:#808080;font-family:Arial;font-size:12px;">Note:<br>Each new backup file will overwrite the previous one.</span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default tab-pane fade in" id="statstoolscreen">
				<div class="panel-heading custom-panel-heading sts-heading" style="text-align:left;padding-top: 5px !important;border-bottom: 0px;background-color:#fff !important;">
					<br>
					<a href="javascript:showStatPerformance();" id="busi_performance_sts" class="btn btn-sm btn-tool btn-tool-active" style="margin-left:20px;">Desksite Statistics</a>
					<!-- a href="javascript:showStatProduct();" id="busi_product_sts" class="btn btn-sm btn-tool btn-tool">Services Statistics</a>
					<a href="javascript:showStatActiveProduct();" id="busi_aproduct_sts" class="btn btn-sm btn-tool btn-tool">Active Services Statistics</a-->
					<span class="pull-right-close" style="padding-top: 0px;padding-right: 5px;margin-top: -5px;"><a href="javascript:closeStatsDiv();" class="btn-custom-close" style="padding:6px 12px;font-size:22px;">x</a></span>
				</div>
				<div class="panel-inner">
					<div id="myperformance_stats" class="mytoolsts-div">
						<div class="row" style="margin:0px;">
							<div class="col-sm-1 text-right">
								<img src="<?php echo asset_url();?>images/Desksite-small.png" id="Image139" alt="" style="width:30px;height:auto;">
							</div>
							<div class="col-sm-4">
								<span style="color:#292929;font-family:Georgia;font-size:16px;">Desksite ( website ) Statistics</span><br>
								<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Reported from <?php echo date('j M Y',strtotime($tsreg_date));?>&nbsp;&nbsp; to&nbsp;&nbsp; <?php echo date('j M Y');?></span>
							</div>
						</div>
						<br><br><br><br>
						<div class="row" style="margin:0px;">
							<div class="col-sm-1 text-right">
							</div>
							<div class="col-sm-9">
								<div class="row">
									<div class="col-sm-4">
										<select id="bcountry_id" name="bcountry_id" style="background-color: #FFFFFF;">
											<option value="">Sort according to the country</option>
											<?php foreach ($countries as $country) { ?>
											<option id="<?php echo $country['name'];?>"><?php echo $country['name'];?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-sm-4">
										Period From <input type="date" id="bfrom_date" style="height:19px;width:135px;"/>
									</div>
									<div class="col-sm-3">
										To <input type="date" id="bto_date" style="height:19px;width:135px;"/>
									</div>
									<div class="col-sm-1">
										<input type="button" id="Button7" onclick="searchBusiStats();" name="Search" value="" style="width:32px;height:22px;">
									</div>
								</div>
								<br><br>
								<div>
								<div class="row" id="busi_stats_area">
									<div class="col-sm-12">
										<table class="skyblue">
											<thead>
												<tr>
													<th>Visitors</th>
													<th>Likes</th>
													<th>Share</th>
													<th>Country</th>
													<th>City</th>
													<th>Date</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($busi_history as $busi_history_stat) { ?>
												<tr>
													<td><?php echo $busi_history_stat['visits'];?></td>
													<td><?php echo $busi_history_stat['likes'];?></td>
													<td><?php echo $busi_history_stat['shares'];?></td>
													<td><?php echo !empty($busi_history_stat['country_name']) ? $busi_history_stat['country_name']:'Unknown';?></td>
													<td><?php echo !empty($busi_history_stat['city_name']) ? $busi_history_stat['city_name']:'Unknown';?></td>
													<td><?php echo date('d M Y',strtotime($busi_history_stat['visit_date']));?></td>
												</tr>
												<?php } ?>
												<tr>
													<td style="border:0px;"><?php echo $busi_history_pages['visits'];?></td>
													<td style="border:0px;"><?php echo $busi_history_pages['likes'];?></td>
													<td style="border:0px;"><?php echo $busi_history_pages['shares'];?></td>
													<td style="border:0px;"></td>
													<td style="border:0px;"></td>
													<td style="border:0px;"></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="pull-right" style="padding-right:20px;">
										<strong>Page&nbsp;&nbsp;&nbsp; </strong>
										<?php for ($i = 1; $i <= $busi_history_pages['pages']; $i++) { ?>
										<a href="javascript:showNextBusinessStats(<?php echo $i;?>);" class="<?php if($i == 1) { ?>page-active<?php } ?>"><?php echo $i;?></a>
										<?php } ?>
									</div>
								</div>
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo asset_url();?>js/htmlchart.js"></script>
<script>
function showPerformance() {
	$(".mytool-div").hide();
	$(".mn-heading a").removeClass("btn-tool-active");
	$("#myperformance").show();
	$("#busi_performance").addClass("btn-tool-active");
}
function showStorage() {
	$(".mytool-div").hide();
	$(".mn-heading a").removeClass("btn-tool-active");
	$("#mystorage").show();
	$("#busi_storage").addClass("btn-tool-active");
	<?php if($tsplanid == 1) { ?>
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
	    type: 'pie',
	    data: {
	        labels: ["Total Storage", "Total Usage"],
	        datasets: [{
	            label: '# MB',
	            data: [<?php echo round($storage_plan,2);?>, <?php echo round($total_storage,2);?>],
	            backgroundColor: [
	                '#E76C1A',
	                '#E7241A',
	            ],
	            borderWidth: 1
	        }]
	    },
		options: {
	        legend: {
	            display: false,
	        }
		}
	});
	<?php } else { ?>
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
	    type: 'pie',
	    data: {
	        labels: ["Free Space", "All Desksite Storage", "Community Posts Storage", "Offers Storage", "Inquiries Storage", "Videos Storage", "B. Station Posts Storage","Stock M. Posts Storage"],
	        datasets: [{
	            label: '# MB',
	            data: [<?php echo round(($storage_plan-$total_storage),2);?>, <?php echo $product_storage;?>, <?php echo $community_storage;?>, <?php echo $offer_storage;?>, <?php echo $inquiry_storage;?>, <?php echo $video_storage; ?>, <?php echo $bstation_storage;?>, <?php echo $stock_storage;?>],
	            backgroundColor: [
					'#FF6347',
	                '#E76C1A',
	                '#E7241A',
	                '#AF0F07',
	                '#2688E4',
	                '#2688E4',
	                '#40BFB5',
	                '#1A9F75'
	            ],
	            borderWidth: 1
	        }]
	    },
		options: {
	        legend: {
	            display: false,
	        }
		}
	});
	<?php } ?>
	<?php if($comm_plan > 0) { ?>
	var cctx = document.getElementById("communityChart").getContext('2d');
	var communityChart = new Chart(cctx, {
	    type: 'pie',
	    data: {
	        labels: ["Used", "Free Space"],
	        datasets: [{
	            //label: '# MB',
	            data: [<?php echo $community_storage;?>, <?php echo ($comm_plan - $community_storage)?>],
	            backgroundColor: [
	                '#e7241a',
	                '#292929'
	            ],
	            borderWidth: 1
	        }]
	    },
		options: {
	        legend: {
	            display: false,
	        }
		}
	});
	<?php } ?>
	var octx = document.getElementById("offersChart").getContext('2d');
	var offersChart = new Chart(octx, {
	    type: 'pie',
	    data: {
	        labels: ["Used", "Free Space"],
	        datasets: [{
	            //label: '# MB',
	            data: [<?php echo $offer_storage;?>, <?php echo ($ois_plan - $offer_storage)?>],
	            backgroundColor: [
	                '#af0f07',
	                '#292929'
	            ],
	            borderWidth: 1
	        }]
	    },
		options: {
	        legend: {
	            display: false,
	        }
		}
	});

	var ictx = document.getElementById("inquiryChart").getContext('2d');
	var inquiryChart = new Chart(ictx, {
	    type: 'pie',
	    data: {
	        labels: ["Used", "Free Space"],
	        datasets: [{
	            label: '',
	            data: [<?php echo $inquiry_storage;?>, <?php echo ($ois_plan - $inquiry_storage)?>],
	            backgroundColor: [
	                '#890d06',
	                '#292929'
	            ],
	            borderWidth: 1
	        }]
	    },
		options: {
	        legend: {
	            display: false,
	        }
		}
	});
}
function showBackup() {
	$(".mytool-div").hide();
	$(".mn-heading a").removeClass("btn-tool-active");
	$("#mybackup").show();
	$("#busi_backup").addClass("btn-tool-active");
}

function showStatPerformance() {
	$(".mytoolsts-div").hide();
	$(".sts-heading a").removeClass("btn-tool-active");
	$("#myperformance_stats").show();
	$("#busi_performance_sts").addClass("btn-tool-active");
}
function showStatProduct() {
	$(".mytoolsts-div").hide();
	$(".sts-heading a").removeClass("btn-tool-active");
	$("#myproduct_stats").show();
	$("#busi_product_sts").addClass("btn-tool-active");
}
function showStatActiveProduct() {
	$(".mytoolsts-div").hide();
	$(".sts-heading a").removeClass("btn-tool-active");
	$("#myaproduct_stats").show();
	$("#busi_aproduct_sts").addClass("btn-tool-active");
}

function showStatHistory(id) {
	$("#maintoolscreen").hide();
	$("#statstoolscreen").show();
	if(id == 2) {
		showStatProduct();
	} else if(id == 3) {
		showStatActiveProduct();
	} else {
		showStatPerformance();
	}
}
function closeStatsDiv() {
	$("#maintoolscreen").show();
	$("#statstoolscreen").hide();
}
$("#bcountry_id").change(function(){
	searchBusiStats();
});
function searchBusiStats() {
	$.post(base_url+"mystation/business/stats",{country_name: $("#bcountry_id").val(), from_date: $("#bfrom_date").val(), to_date: $("#bto_date").val(), page: 1},function(data) {
		$("#busi_stats_area").html(data);
	},'html');	
}

function searchServiceStats() {
	$.post(base_url+"mystation/service/stats",{country_name: $("#pcountry_id").val(), from_date: $("#pfrom_date").val(), to_date: $("#pto_date").val(), product_name: $("#pro_name").val(), page: 1},function(data) {
		$("#product_stats_area").html(data);
	},'html');	
}

function searchAserviceStats() {
	$.post(base_url+"mystation/aservice/stats",{country_name: $("#apcountry_id").val(), product_name: $("#appro_name").val(), page: 1},function(data) {
		$("#aproduct_stats_area").html(data);
	},'html');	
}

function showNextBusinessStats(page) {
	$.post(base_url+"mystation/business/stats",{country_name: $("#bcountry_id").val(), from_date: $("#bfrom_date").val(), to_date: $("#bto_date").val(), page: page},function(data) {
		$("#busi_stats_area").html(data);
	},'html');	
}

function showNextProductStats(page) {
	$.post(base_url+"mystation/service/stats",{country_name: $("#pcountry_id").val(), from_date: $("#pfrom_date").val(), to_date: $("#pto_date").val(), product_name: $("#pro_name").val(), page: page},function(data) {
		$("#product_stats_area").html(data);
	},'html');
}

function showNextAProductStats(page) {
	$.post(base_url+"mystation/aservice/stats",{country_name: $("#pcountry_id").val(), from_date: $("#pfrom_date").val(), to_date: $("#pto_date").val(), product_name: $("#pro_name").val(), page: page},function(data) {
		$("#product_stats_area").html(data);
	},'html');
}

</script>
