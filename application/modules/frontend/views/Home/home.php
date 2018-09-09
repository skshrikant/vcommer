<link href="<?php echo asset_url(); ?>css/pages/home.css" rel="stylesheet">
<!--script src="<?php echo asset_url(); ?>js/jquery-1.11.1.min.js"></script-->
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fade.min.js"></script>
<script src="<?php echo asset_url(); ?>js/wb.slideshow.min.js"></script>
<script src="<?php echo asset_url(); ?>js/wb.stickylayer.min.js"></script>
<script src="<?php echo asset_url(); ?>js/wb.carousel.effects.min.js"></script>
<script src="<?php echo asset_url(); ?>js/wb.carousel.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.core.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.widget.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.position.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.tooltip.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-blind.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-bounce.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-clip.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-drop.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-explode.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fold.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-highlight.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-pulsate.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-scale.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-shake.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-slide.min.js"></script>
<script src="<?php echo asset_url(); ?>js/wwb10.min.js"></script>
<script src="<?php echo asset_url(); ?>js/custom/home.js"></script>
<link href="<?php echo asset_url(); ?>css/jquery.booklet.1.1.0.css?1.1" rel="stylesheet">
<script src="<?php echo asset_url(); ?>js/jquery.booklet.1.1.0.min.js?1.1"></script>
<script src="<?php echo asset_url(); ?>js/jquery.easing.1.3.js?1.1"></script>
<link rel="stylesheet" href="<?php echo asset_url(); ?>css/style-jq-3d-flip-book.css">
<script src="<?php echo asset_url(); ?>js/html2canvas.min.js"></script>
<script src="<?php echo asset_url(); ?>js/three.min.js"></script>
<script src="<?php echo asset_url(); ?>js/pdf.min.js"></script>
<script src="<?php echo asset_url(); ?>js/3dflipbook.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.cookie.js"></script>
<style>
    .carousel_img {
        padding: 0% 23% !important; 
    }
    .hover-menu {
        position: absolute;
        height: 50px;
        width: 100%;
        bottom: 1px;
        /*     background: rgba(0,0,0,0.70); */
        left: 0;
        display: none;
    }
    #Carousel5 .frame,#Carousel4 .frame
    {
        width: 517px;
        display: inline-block;
        float: left;
        /*height: 267px;*/
    }
    a.style16:hover {
        color: #FF7F50;
        text-decoration: underline;
    } 
	a.style261:hover {
        color: #FF6347 !important;
        text-decoration: underline;
    } 
	a.main_prod:hover {
        color: #FF6347 !important;
    }
    a.style16 {
        color: #4169E1;
        text-decoration: underline;
        width: 250px;
    }
    #divtestproduct{
        padding-top:12px;
    }
	.bottom_cat > a:hover{
		background-color:#ff6347 !important;
		color:#fff !important;
	}
</style>
<?php
setlocale(LC_ALL, ''); // Locale will be different on each system.
$locale = localeconv();
?>
<div class="container-fluid" style="background: #f1f1f1; padding: 30px 0px">
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-md-2 text-center" style="padding-left:0;">
            <div class="panel categary-list" style="background-color: #f1f1f1 !important;box-shadow: none !important;">
                <img src="<?php echo asset_url(); ?>images/Main-Category-icon.png" id="Image216" alt="" style="width: 28px; vertical-align: bottom;">
                <a href="javascript:void(0);" style="color:#303030;font-family:Georgia;font-size:17px;" class="style261" onclick="ShowObjectWithEffect('Cat_main_layer', 1, 'slideup', 500, 'swing');return false;">Categories</a>
            </div>
        </div>
        <div class="col-md-10" style="padding-right:0;padding-left:0;">
            <div class="search-div"> 
                <form method="get" action="search" id="search-form">
                    <div class="col-sm-7 col-xs-11" style="padding: 0px;">
                        <input type="text" class="search-box" required="required" name="keyword" placeholder="Type a keyword to search ( product, company or name )...">
                    </div>
                    <div class="col-sm-2 col-xs-3 " style="padding: 0px;">
                        <div class="dropdown">
                            <select class="search-box" id="search-for" onchange ="validate();" class="required" required name=''>
                                <option value="" >Search for</option>
                                <option value="1">Sellers</option>
                                <option value="2">Shippers</option>
                                <option value="3">Buyers</option>
                                <option value="4">Products</option>
                            </select>
                        </div>
                    </div>
					<div class="col-md-3">
						<div style="padding: 0px;" class="col-sm-8 col-xs-3 ">
							<div class="dropdown" style="width:115%">
								<select class="search-box" name='country'>
									<option value="">Country</option>
									<?php foreach ($Country as $country) { ?>
										<option value="<?= $country['name'];?>"><?php echo $country['name']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-sm-4 col-xs-1 " style="padding-right:0px;">
							<button class="btn btn-block search-btn" style="float:right;width:60px;" type="submit" style=""><span aria-hidden="true" class="glyphicon glyphicon-search"></span></button>
						</div>
					</div>
				</form>
			</div>
		</div>
					 
		<div class="col-md-12">
			<div id="Cat_main_layer" style="position: absolute; text-align: left; visibility: hidden; height: 758px; z-index: 1762; left: -39px; width: 100%; top: 20px;"  onmouseleave="ShowObjectWithEffect('Cat_main_layer', 0, 'fade', 5, 'swing');return false;">
				<div class="row">
					<div id="myCarousel" class="carousel slide" style="height: 197px; border: medium none ! important; background-color: #fafafa; left: 3.1%; width: 100%;">
						<div class="carousel-inner" >
							<?php
							$i = 1;
							foreach ($procategories as $product) {
								if ($i % 6 == 1) {
									?>
									<div class="item <?php echo($i == 1) ? 'active' : ''; ?>">
									<?php } ?>
									<div class="col-md-2" style="padding-top:25px 10px 0px 10px;">
										<a href="#" id="tab<?php echo $i; ?>" style="text-decoration:none !important">
											<div class="tumb-slide cat_slide" alt="cat_slider_<?php echo $i; ?>" style="height:106px;width:106px;margin: 0 auto;">
												<img src="<?php echo asset_url(); ?>images/category-images/<?php echo $product['cat_image'];?>" height="106" width="106">
											</div>
											<h4 class="text-center " style="color:#2D2D2D;font-family:Arial;font-size:16px;"><?php echo ucfirst($product['name']); ?></h4>
										</a>
										<div class="panel-heading text-center slide-details cat_slider_<?php echo $i; ?>" style="background-color: #fafafa;display:none;">
											<div class="col-xs-11">
												<img src="<?php echo asset_url(); ?>images/img3681.png" style="width:25px;">
											</div>
										</div>
									</div>
									<?php if ($i % 6 == 0) { ?>
									</div>
								<?php } ?>    

								<?php
								$i++;
							}
							?>
						</div>
					</div>								
					<a style="position: absolute; height: 61px; z-index: 999; background-image: none ! important; top: 20%; width: 30px; left: 3px;" class="left carousel-control" href="#myCarousel" data-slide="prev"><img height="53px;" alt="Back" style="border-width:0" src="<?php echo asset_url(); ?>images/previ.png"></a>
					<a style="position: absolute; z-index: 999; background-image: none ! important; top: 20%; height: 61px; width: 30px;" class="right carousel-control" href="#myCarousel" data-slide="next"><img height="53px;" alt="Next" style="border-width:0" src="<?php echo asset_url(); ?>images/nex.png"></a>
					<form method="post" action="search" id="filter_by_category">
						<input type="hidden" name="main_cat_id" id="filter_cat" value="">
						<input type="hidden" name="cat_id" id="filter_sub_cat" value="">
						<input type="hidden" name="main_prod" id="main_prod" value="">
						<input type="hidden" name="type" id="type" value="4">
					</form>
				</div>
				<div class="col-xs-12" style="position:relative;display:none;padding:0 !important;z-index: 300;" id="Details">
					<div class="panel categary-detials" style="position:absolute;width: 100%;margin: auto;left: 3.1%;z-index: 1;top:-10px;">
							
							<?php
						$i = 1;
						foreach ($procategories as $product) {
							?>
							<div class="panel-body panel slide-details" id="cat_slider_<?php echo $i; ?>" style="background-color: rgb(255, 255, 255); box-shadow: none ! important; padding-top: 60px; margin-left: 0px ! important; margin-right: 0px ! important;">
								<div class="row" style="padding-bottom:50px;z-index: 200;">
									<div class="col-md-offset-1">
										<?php
										$j = 1;
										foreach ($prosubcategories as $res) {
											if ($res['mcat_id'] == $product['id']) {
												?>
												<div class="col-md-3">
													<ul style="list-style:none;margin-bottom: -5px;">
														<li>
															<a class="btn btn-link sub_cat <?php echo strtolower(substr($res['name'], 0, 1)); ?>" href="javascript:void(0);" onclick="get_main_products('<?php echo $res['mcat_id'];?>','<?php echo $res['id'];?>','<?php echo $res['name']; ?>')" style="color:#337ab7;"><?php echo $res['name']; ?></a>
														</li>
													</ul>    
												</div>
												<?php
											}
										}
										?>
									</div>
								</div>
								<div class="row" style="padding-bottom:30px;">
									<div class="col-sm-12 text-center bottom_cat">
										<a href="javascript:void(0)" onclick="highlight_keywords('a');" class="btn btn-default ">A</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('b');" class="btn btn-default">B</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('c');" class="btn btn-default">C</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('d');" class="btn btn-default">D</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('e');" class="btn btn-default">E</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('f');" class="btn btn-default">F</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('g');" class="btn btn-default">G</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('h');" class="btn btn-default">H</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('i');" class="btn btn-default">I</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('j');" class="btn btn-default">J</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('k');" class="btn btn-default">K</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('l');" class="btn btn-default">L</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('m');" class="btn btn-default">M</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('n');" class="btn btn-default">N</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('o');" class="btn btn-default">O</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('p');" class="btn btn-default">P</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('q');" class="btn btn-default">Q</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('r');" class="btn btn-default">R</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('s');" class="btn btn-default">S</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('t');" class="btn btn-default">T</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('u');" class="btn btn-default">U</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('v');" class="btn btn-default">V</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('w');" class="btn btn-default">W</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('x');" class="btn btn-default">X</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('y');" class="btn btn-default">Y</a>
										<a href="javascript:void(0)" onclick="highlight_keywords('z');" class="btn btn-default">Z</a>
									</div>
								</div>
							</div>
							<?php
							$i++;
						}
						?>
						<div id="sub_cat_main_prod">
						</div>
					</div>
				</div>
			</div><!-- End Carousel --> 
		</div>
    </div>
</div>
<div class="col-lg-13">
    <div id="carousel-example-generic" class="carousel  carousel1 slide"  style="background: #fff; padding-bottom: 50px;height:640px;" data-ride="carousel"><!-- -->
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
            $i = '0';
            foreach ($homeAds as $banner) {
                ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) {
                echo 'active';
            } ?>" style="border-color: #F05235;"></li>
    <?php $i++;
} ?>	
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
            $i = '0';
            foreach ($homeAds as $banner) {
                $i++;
                ?>
                <div class="item <?php if ($i == 1) {
                    echo 'active';
                } ?>">
                    <a href="#" target="_blank" style="opacity: 1"><img src="<?php echo asset_url() . $banner['main_banner']; ?>" alt="..." style="padding:0px !important;border-radius:0px;"></a><!-- <?php echo base_url(); ?>advertisement/<?php echo $banner['id'] ?> -->
                    <div id="Layer354" style="position:relative;text-align:left;top: -300px;left: 1200px;width:62px;height:115px;z-index:1361;">
                        <div id="Layer356" style="position:relative;text-align:left;/*left:16px;top:8px;*/width:40px;height:40px;z-index:1358;">
                            <div id="wb_Image262" style="position:relative;/*left:9px;top:0px;*/width:25px;height:18px;z-index:1355;padding-left: 10px;padding-top: 2px;">
                                <img src="<?php echo asset_url(); ?>images/view.png" id="Image262" alt="">
                            </div>
                            <div id="wb_Text494" style="position:relative;/*left:8px;top:22px;*/width:30px;height:14px;z-index:1354;text-align:center;padding-left: 6px;padding-top: 0px;">
                                <span style="color:#FFFFFF;font-family:Arial;font-size:11px;">500K</span>
                            </div>
                        </div>
                        <div id="Layer357" style="position:relative;text-align:left;/*left:17px;top:62px;*/width:40px;height:40px;z-index:1359;">
                            <div id="wb_Image263" style="position:relative;/*left:10px;top:2px;*/width:25px;height:17px;z-index:1356;padding-left: 10px;padding-top: 2px;">
                                <img src="<?php echo asset_url(); ?>images/like_icon.png" id="Image263" alt="">
                            </div>
                            <div id="wb_Text495" style="position:relative;/*left:8px;top:23px;*/width:29px;height:14px;z-index:1357;text-align:center;padding-left: 6px;">
                                <span style="color:#FFFFFF;font-family:Arial;font-size:11px;">500K</span>
                            </div>
                        </div>
                    </div>
                </div>
<?php } ?>
        </div>
    </div>
</div>
</div>
<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-12 col-lg-4">
            <div class="panel disk-tab">
                <div class="panel-heading" style="padding-left: 0px;">
                    <h2 class="font2">DESKSITES</h2>
                    <p style="text-indent: 0px;">
                        <small class="font3">Experience A New Vision Of Websites Techniques With Quick
                            Access, Rich Information And Much More..</small>
                    </p>
                </div>
                <div class="panel-body discoverbtn" style="position: relative;margin-left:0px;">
                    <div id="tab-slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner section1" role="listbox">
                            <?php
                            $i = "0";
                            foreach ($desksites as $desksite) {
                                $i++;
                                ?>
                                <div  style="padding-top:30px;" class="item <?php if ($i == 1) {
                                    echo "active";
                                } ?>">
                                    <div class="col-sm-12 text-center" style="padding:5px 0px;">
                                        <span style="color:#1E90FF;font-family:Arial;font-size:12px;"><a href="<?php echo base_url() . 'desksite/' . $desksite['id']; ?>" target="_blank" class="hstyle19"><?php echo $desksite['company_name'] ?></a></span>
                                    </div>
                                    <div class="col-sm-offset-1 col-sm-12 text-center" style="margin-left: 0px;">
                                        <small style="color:#2D2D2D;font-family:Arial;font-size:11px;"><?php
                                        if ($desksite['user_category_id'] == 2) {
                                            echo substr($desksite['shipper_service_name'], 0, 70);
                                        } else {
                                            echo substr($desksite['main_product'], 0, 70);
                                        }
                                ?></small>
                                    </div>
                                    <div class="col-sm-12 text-center uppercase" style="padding:8px 0px;"><?php echo $desksite['company_country'] ?> | <?php echo $desksite['company_province'] ?></div>
                                    <div class="col-xs-12 text-center">
                                        <?php if (!empty($tsuserid) && $desksite['community_id'] != '' && $desksite['plan_id'] > 1) { ?>
                                            <img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image1" style="width:26px;height:26px; display: inline-block;"> 
                                        <?php } else { ?>
                                            <img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image1" style="opacity :0.15;width:26px;height:26px; display: inline-block;">
                                        <?php
                                        }
                                        if ($desksite['user_category_id'] == 1) {
                                            if ($desksite['plan_id'] > 1 && $desksite['gaurantee_period'] != '') {
                                                ?>
                                                <img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image1" style="width:34px;height:26px;display: inline-block;"> 
                                            <?php } else { ?>
                                                <img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image1" style="opacity :0.15;width:34px;height:26px;display: inline-block;" >
                                            <?php
                                            }
                                        }
                                        if ($desksite['plan_id'] > 1 && $desksite['is_logo_verified'] > 1) {
                                            ?>
                                            <img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" style="width:26px; display: inline-block;"> 
    <?php } else { ?>
                                            <img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" style="opacity :0.15;width:26px; display: inline-block;" >
    <?php } ?>

    <?php if ($desksite['plan_id'] > 1) { ?><img src="<?php echo asset_url(); ?>images/member-logo.png" style="width:25px; display: inline-block;">
                                <?php } else { ?>
                                            <img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image1" style="opacity :0.15;width:25px; display: inline-block;">
    <?php } ?>
                                    </div>
                                    <div class="col-xs-12" style="margin-top: 30px;">
                                        <a href="#" class=""><img src="<?php echo asset_url() . $desksite['desksite_bg1']; ?>" class="img-responsive" style="padding: 0px !important;max-height:283px;max-width:383px;"></a>
                                    </div>
                                    <div class="discover">
                                        <?php if($desksite['user_category_id'] != 2) { ?>
                                        <a target="_blank" href="<?php echo base_url() . 'desksite/' . $desksite['id']; ?>" class="btn btn-danger btn-lg">Discover</a>
                                        <?php }else{ ?>
                                        <a target="_blank" href="<?php echo base_url() . 'shipper/profile/' . $desksite['id']; ?>" class="btn btn-danger btn-lg">Discover</a>
                                        <?php } ?>
                                    </div>
                                </div>
<?php } ?>
                        </div>
                    </div>
                    <div style="position: relative;top: -30px;width: 345px;left: 35px;">
                        <a class="left carousel-control control" href="#tab-slider" role="button" data-slide="prev">
                            <img alt="Back" style="border-width:0" src="<?php echo asset_url(); ?>images/previoustxt0blk.png">
                        </a> 
                        <a class="right carousel-control control" href="#tab-slider" role="button" data-slide="next">
                            <img alt="Next" style="border-width:0" src="<?php echo asset_url(); ?>images/nexttxt0blk.png">
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-4">
            <div class="panel disk-tab">
                <div class="panel-heading">
                    <h2 class="font2">PRODUCTS IN 3D</h2>
                    <p style="text-indent: 0px;">
                        <small class="font3">Click on the product to enlarge, then move mouse right and left over it for 360 degree view</small>
                    </p>
                </div>
                <div class="panel-body mytab">
                    <div id="tab-slider2" class="carousel slide" data-ride="carousel"><!--  -->
                        <div class="carousel-inner section2" role="listbox" style="height:552px;">
                                  <?php 
                                  $i ="0"; 
                                  foreach ($products3D as $product3D) { 
                                    $product_id = $product3D['product_id'];
                                    $i++;
                                    ?>
                                  <div class="item <?php if($i == 1){ echo "active"; } ?>" style="height:546px;padding-top:30px;">
                                    <div class="text-center col-sm-12">
                                      <span style="color:#303030;font-family:Georgia;font-size:13px;"><strong><?php echo $product3D['name']?></strong></span>
                                    </div>
                                    <div class="col-sm-12 text-center" style="padding:5px 0px;">
                                      <span style="color:#1E90FF;font-family:Arial;font-size:12px;"><a href="<?php echo base_url().'desksite/'.$product3D['busi_id'];?>" target="_blank" class="hstyle19"><?php echo $product3D['company_name']?></a></span>
                                    </div>
                                    <div class="text-center col-sm-12">
                                      <span style="color:#808080;font-family:Arial;font-size:12px;"><?php echo $product3D['company_country']?> | <?php echo $product3D['company_province']?></span>
                                    </div>

                                    <!--<p class="text-center col-sm-12"></p>-->
                                    <div class="col-xs-12 text-center">
                                      <?php if(!empty($tsuserid) && !empty($product3D['community_id']) && $product3D['community_id'] !=''){?><img src="<?php echo asset_url(); ?>images/ts/community.png"  style="width:26px;height:26px; display: inline-block;"> <?php } else {?>
                                        <img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image1" style="opacity :0.15;width:26px;height:26px; display: inline-block;">
                                      <?php } ?>
                                      <?php if($product3D['gaurantee_period'] !=''){?>
                                        <img src="<?php echo asset_url(); ?>images/ts/guarantee.png"  style="width:34px;height:26px; display: inline-block;"> <?php }else{?>
                                        <img src="<?php echo asset_url(); ?>images/ts/guarantee.png" style="opacity :0.15;width:34px;height:26px;" >
                                      <?php } ?>
                                      <?php if($product3D['is_logo_verified'] > 1){?>
                                        <img src="<?php echo asset_url(); ?>images/trusted.png" style="width:26px; display: inline-block;"> <?php } else { ?>
                                        <img src="<?php echo asset_url(); ?>images/ts/trusted.png" style="opacity :0.15; width: 26px;" >
                                      <?php } ?>
                                      <?php if($product3D['plan_id'] > 1){?>
                                        <img src="<?php echo asset_url(); ?>images/member-logo.png" style="width:25px; display: inline-block;"><?php } else { ?>
                                        <img src="<?php echo asset_url(); ?>images/member-logo.png" style="width:25px;opacity :0.15">
                                      <?php } ?>
                                    </div>
                                    <div class="col-xs-12"
                                      style="text-align: center; margin-bottom: 5px; height: 320px;cursor: pointer;" onclick="open3DProduct(<?php echo $product3D['id']; ?>);">
                                      <img src="<?php echo asset_url().$product3D['image']; ?>" class="img-responsive" style="display: inline-block;max-height: 340px !important;max-width: 310px !important;">
                                    </div>
                                    <div class="text-center">
                                      <div><span style="color:#2D2D2D;font-family:Arial;font-size:11px;">USD</span> <span style="color:#2D2D2D;font-family:Arial;font-size:16px;"><?php echo number_format($product3D['unit_price'], 2, $locale['decimal_point'], $locale['thousands_sep']); ?></span></div>
                                      <p style="text-indent: 0px;"><span style="color:#787878;font-family:Arial;font-size:12px;">Min. Qty. <?php echo $product3D['quantity']?> / <?php echo $product3D['unit']?></span> </p>
                                    </div>
                                    
                                    <div class="hover-menu text-center" style="bottom: 0px;">
                                        <a target="_blank" href="<?php echo base_url() . 'products/details/' . $product_id; ?>" class="btn">
                                            <img src="<?php echo asset_url(); ?>images/view-3D.png" onmouseover="hover(this, 'view');" onmouseout="unhover(this, 'view');" style="width: 40px;"></a>
                                        <a target="_blank" href="<?php echo base_url(); ?>3dproducts" class="btn" >
                                            <img src="<?php echo asset_url(); ?>images/same.png" style="width: 40px;" onmouseover="hover(this, 'same');" onmouseout="unhover(this, 'same');">
                                        </a> 
                                        <a href="javascript:addToMyFavourite(<?php echo $product3D['product_id']; ?>, 6);" class="btn">
                                            <img src="<?php echo asset_url(); ?>images/favorite.png" style="width: 40px;" onmouseover="hover(this, 'favorite');" onmouseout="unhover(this, 'favorite');">
                                        </a> 
                                        <a class="btn" href="javascript:addToItemToCart(<?php echo $product3D['product_id']; ?>)">
                                            <img src="<?php echo asset_url(); ?>images/cart.png" style="width: 40px;" onmouseover="hover(this, 'cart');" onmouseout="unhover(this, 'cart');">
                                        </a>
                                    </div>
                                </div>
                        <?php } ?>
                            <a class="left carousel-control" href="#tab-slider2" role="button" data-slide="prev" style="background: none;padding-top:70%;text-align:center;"> 
                                <span><img alt="Back" style="border-width:0" src="<?php echo asset_url(); ?>images/previous0.png"></span> 
                            </a> 
                            <a class="right carousel-control" href="#tab-slider2" role="button" data-slide="next" style="background: none;padding-top:70%;text-align:center;"> 
                                <span><img alt="Next" style="border-width:0" src="<?php echo asset_url(); ?>images/next0.png"></span> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-4">
            <div class="panel disk-tab">
                <div class="panel-heading" style="padding-right: 0px;">
                    <h2 class="font2">V-CATALOGUES</h2>
                    <p style="text-indent: 0px;">
                        <small class="font3">Follow The Latest Collection Of Global Sellers And Famouse
                            <br>Brands..</small>
                    </p>
                </div>
                <div class="panel-body mytab" style="margin-right: 0px;">
                    <div id="tab-slider3" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner section3" role="listbox" style="height:552px;">
<?php
$i = "0";
foreach ($vCatalogues as $vCatalogue) {
    $i++;
    ?>
                                <div class="row item <?php if ($i == 1) {
        echo "active";
    } ?>" style="height:552px;padding-top:30px;">
                                    <div class="text-center"><span style="color:#303030;font-family:Georgia;font-size:13px;"><strong><?php echo $vCatalogue['catalogue_title']; ?></strong></span></div>
                                    <!--<div class="text-center"><span style="color:#696969;font-family:Arial;font-size:12px;"><strong>BY</strong></span></div>-->
                                    <div class="col-sm-12 text-center" style="padding:5px 0px;">
                                        <span style="color:#1E90FF;font-family:Arial;font-size:12px;"><a href="<?php echo base_url() . 'desksite/' . $vCatalogue['busi_id']; ?>" target="_blank" class="hstyle19"><?php echo $vCatalogue['company_name'] ?></a></span>
                                    </div>
                                    <div class="col-xs-12 text-center" style="padding-bottom: 10px;">
                                        <p class="text-center" style="text-indent: 0px;color:#808080;font-family:Arial;font-size:12px;"><?php echo $vCatalogue['company_country']; ?> | <?php echo $vCatalogue['company_province']; ?></p>
                                        <div class="col-xs-12 text-center">
    <?php if (!empty($vCatalogue['community_id']) && $vCatalogue['community_id'] != "") { ?>
                                                <img src="<?php echo asset_url(); ?>images/CommMember.png"  style="width:26px;height:26px; display: inline-block;"> <?php } else { ?>
                                                <img src="<?php echo asset_url(); ?>images/CommMember.png"  style="width:26px;height:26px; display: inline-block;opacity: 0.15">
    <?php } ?>
    <?php if ($vCatalogue['gaurantee_period'] != '') { ?>
                                                <img src="<?php echo asset_url(); ?>images/ts/guarantee.png"  style="width:34px;height:26px; display: inline-block;"> <?php } else { ?>
                                                <img src="<?php echo asset_url(); ?>images/ts/guarantee.png"  style="width:34px;height:26px; display: inline-block;opacity: 0.15;">
    <?php } ?>
    <?php if ($vCatalogue['is_logo_verified'] > 1) { ?><img src="<?php echo asset_url(); ?>images/trusted.png" style="width:26px; display: inline-block;"> <?php } else { ?>
                                                <img src="<?php echo asset_url(); ?>images/trusted.png" style="width:26px; display: inline-block;opacity: 0.15">
    <?php } ?>
    <?php if ($vCatalogue['plan_id'] > 1) { ?><img src="<?php echo asset_url(); ?>images/member-logo.png" style="width:25px; display: inline-block;"><?php } else { ?>
                                                <img src="<?php echo asset_url(); ?>images/member-logo.png" style="width:25px; display: inline-block;opacity: 0.15;">
    <?php } ?>
                                        </div>
                                    </div>

                                    <div style="width:35px;height:34px;z-index:1;position: relative;top: 262px;left: 105px;">
                                        <img src="<?php echo asset_url(); ?>images/img0001.gif" alt="" style="width:10px;height:34px;">
                                    </div>
                                    <div class="col-sm-5" style="width: 220px;height: 328px;padding-top: 105px;background-image:url('<?php echo asset_url(); ?>images/vCAT2.png'); left:100px;" >
                                        <br/>
                                        <div style="padding-left: 23px;z-index: 4;">
                                            <img src="<?php echo asset_url(); ?><?php echo $vCatalogue['catalogue_cover']; ?>"  style="width:160px;height:155px;border-radius:50%;border:1.5px solid #F05539">
                                        </div>
                                        <div id="Layer232" style="text-align:left;width:190px;height:30px;z-index:4;background-color: #1E90FF;position: relative;left:-10px;top:-5px;">
                                            <div id="wb_Text2" style="width:192px;height:30px;text-align:center;z-index:0;padding-top:5px;">
                                                <span style="color:#FFFFFF;font-family:Georgia;font-size:13px;"><strong><?php echo $vCatalogue['catalogue_title']; ?></strong></span>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-xs-12 hover-menu text-center blue" style="bottom: 4px;">
                                      <a href="javascript:viewCatalogueBook(<?php echo $vCatalogue['id'];?>);"  class="btn">
                                        <img src="<?php echo asset_url(); ?>images/vcat.png" style="width: 40px;" onmouseover="hover(this,'vcat');" onmouseout="unhover(this,'vcat');">
                                      </a> 
                                      <a href="<?php echo base_url().'desksite/'.$vCatalogue['busi_id'];?>" target="_blank" class="btn" >
                                        <img src="<?php echo asset_url(); ?>images/desksite-icon.png" style="width: 40px;" onmouseover="hover(this,'desksite');" onmouseout="unhover(this,'desksite');">
                                      </a> 
                                      <a href="<?php echo base_url().'vcatalogues';?>" target="_blank" class="btn">
                                        <img src="<?php echo asset_url(); ?>images/same.png" style="width: 40px;" onmouseover="hover(this,'same');" onmouseout="unhover(this,'same');">
                                      </a> 
                                      <a href="javascript:addToMyFavourite(<?php echo $vCatalogue['id'];?>, 7);" class="btn">
                                        <img src="<?php echo asset_url(); ?>images/favorite.png" style="width: 40px;" onmouseover="hover(this,'favorite');" onmouseout="unhover(this,'favorite');"style="width: 40px;">
                                      </a>
                                    </div>	
                                  </div>

                                  <?php } ?>
                            <a class="left carousel-control" href="#tab-slider3" role="button" data-slide="prev" style="background: none;padding-top:70%;text-align:center;"> 
                                <span><img alt="Back" style="border-width:0" src="<?php echo asset_url(); ?>images/previous0.png"></span> 
                            </a> 
                            <a class="right carousel-control" href="#tab-slider3" role="button" data-slide="next" style="background: none;padding-top:70%;text-align:center;"> 
                                <span><img alt="Next" style="border-width:0" src="<?php echo asset_url(); ?>images/next0.png"></span> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-12 margintop">
    <div class="row"> 
        <div class="col-sm-12 tab-slider maxheight1">
            <div class="col-sm-3 col-lg-2 product1">
                <div class="row" style="margin: 0px">
                    <h3 style="color: #fff; text-align: center;">
                        <span class="product-feature">FEATURED</span><br> 
                        <span class="product-feature-title">PRODUCTS</span>
                    </h3>
                    <div class="text-center displaydesktop">
                        <img src="<?php echo asset_url(); ?>/images/ts/dice0.png"
                             class="img-responsive">
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-lg-10" style="background: #fff; min-height: 272px;padding-left: 0px;">
                <div class="panel disk-tab" style="border: 1px solid transparent">
                    <div class="panel-body mytab">
                        <div id="tab-slider4" class="carousel slide" data-ride="carousel" style="height: 280px;width: 100%;border:none;">
                            <div class="carousel-inner section3" role="listbox" style="height: 318px;overflow: hidden;border:none;">

<?php
$i = "0";
foreach ($FeaturedProducts as $FeaturedProduct) {

    if ($i % 4 == 0) {
        $frame = $i;
        ?>
                                        <div class="item <?php if ($i == 0) {
            echo "active";
        } ?>" style="height:543px;padding-top:5px;border:none;padding-left: 25px;padding-right:30px;">
    <?php } $i++; ?>
                                        <div class="col-md-3" style="padding:0px 15px;border:none;">
                                            <div style="position: relative;border:none;">
                                                <h4 class="text-center product-strong-text" style="margin-top: 0px;border:none;">
                                                    <strong><?php echo $FeaturedProduct['name']; ?></strong>
                                                </h4>
                                                <p class="text-center product-text ptext" style="text-indent: 0px;padding-top:10px;padding-bottom: 0px;"><?php echo $FeaturedProduct['about']; ?></p>
                                                <div class="tumb-slide" style="border:none;">
                                                    <img src="<?php echo asset_url() . $FeaturedProduct['main_image']; ?>" class="imgresponsive" style="width:218px;height:177px;">
                                                    <div class="hover-thumb text-center" style="height:66% !important;width:103% !important;padding-bottom:0px;top:0px !important">
                                                        <div id="wb_Image13" style="position:absolute;left: 75px;top: 70px;width:35px;height:35px;"><!-- z-index:851;-->
                                                            <a href="javascript:openProduct(<?php echo $FeaturedProduct['id']; ?>,'<?php echo $FeaturedProduct['name'];?>');">
                                                                <img src="<?php echo asset_url(); ?>images/window-layer.png" id="Image13" alt="View" onmouseover="hover(this, 'window');" onmouseout="unhover(this, 'window');">
                                                            </a>
                                                        </div>
                                                        <div id="RollOver37" style="position:absolute;left: 120px;top: 70px;overflow:hidden;width: 40px;height: 40px;"><!-- z-index:770;-->
                                                            <a href="<?php echo base_url(); ?>products/details/<?php echo $FeaturedProduct['id']; ?>" target="_blank">
                                                                    <!--<img class="hover" alt="View Desksite" src="<?php echo asset_url(); ?>images/view1.png">-->
                                                                <span><img alt="View Desksite" src="<?php echo asset_url(); ?>images/view1.png" onmouseover="hover(this, 'view2');" onmouseout="unhover(this, 'view1');"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="text-center product-money-symbol" style="padding-top: 10px;">USD <span class="product-price"><?php echo number_format($FeaturedProduct['unit_price'], 2, $locale['decimal_point'], $locale['thousands_sep']); ?></span></h4>
                                                <p class="text-center product-money-text" style="text-indent: 0px;padding-top: 3px;">Min. Qty. <?php echo $FeaturedProduct['quantity']; ?> / <?php echo $FeaturedProduct['unit'] ?></p>
                                            </div>
                                        </div>
    <?php if ($frame + 4 == $i) { ?>
                                        </div>
    <?php } ?>
<?php } ?>
                                <a class="left carousel-control" href="#tab-slider4" role="button" data-slide="prev" style="background: none;padding-top:13%;text-align:center;width:2%;"> 
                                    <span><img alt="Back" style="border-width:0" src="<?php echo asset_url(); ?>images/previ.png"></span> 
                                </a> 
                                <a class="right carousel-control" href="#tab-slider4" role="button" data-slide="next" style="background: none;padding-top:13%;text-align:center;width:3%;"> 
                                    <span><img alt="Next" style="border-width:0" src="<?php echo asset_url(); ?>images/nex.png"></span> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div></div>

                <div id="Layer_details" class="class1" data-pause="true">
                    <div id="Layer_details_Container" class="class2">
                                
                    </div>
                </div>

                <div id="start_load" style="display: none;">
                    <div id="wb_Image51" style="position:absolute;left:262px;top:8px;width:35px;height:35px;z-index:1297;">
                            <a href="#" onclick="ShowObjectWithEffect('Layer_details', 0, 'scale', 500, 'swing');ShowObjectWithEffect('Layer_details2', 0, 'scale', 500, 'swing');return false;">
                                <img src="<?php echo asset_url();?>images/close.png" id="Image51" alt="Close">
                            </a>
                    </div>
                    <div id="wb_Text161" style="position:absolute;left:27px;top:27px;width:174px;height:16px;z-index:1296;text-align:left;">
                        <span style="color:#303030;font-family:Georgia;font-size:13px;">
                            <strong id="product_name_disp">Product Name<br></strong>
                        </span>
                    </div>
                    <div id="wb_Image18" style="position:absolute;left:2px;top:0px;width:305px;height:372px;z-index:1291;background-color:white;text-align: center;">
                        <img src="<?php echo asset_url();?>images/loader.gif" style="padding-top: 185px;"/>
                    </div>
                    <div id="Layer111" style="position:absolute;text-align:left;left:0px;top:372px;width:308px;height:141px;z-index:1295;background-color: #E1E1E1">
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="col-sm-12 margintop" >
    <div class="row">
        <div class="col-sm-12 tab-slider maxheight1" >
            <div class="col-sm-3 col-lg-2 product2">
                <div class="row" style="margin: 0px">
                    <h3 style="color: #fff; text-align: center;">
                        <span class="product-feature">FEATURED</span><br>
                        <span class="product-feature-title">PRODUCTS VIDEOS</span>
                    </h3>
                    <div class="text-center displaydesktop">
                        <img src="<?php echo asset_url(); ?>/images/ts/porcube.png"
                             class="img-responsive">
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-lg-10" style="background: #fff; min-height: 272px;">
                <div class="panel disk-tab" style="border: 1px solid transparent">
                    <div class="panel-body mytab" style="margin-bottom:0px;">
                        <div id="tab-slider5" class="carousel slide" data-ride="carousel" style="height: 280px;width: 100%;border:none;">
                            <div class="carousel-inner section3" role="listbox" style="height: 315px;overflow: hidden;border:none;">

<?php
$i = 0;
foreach ($FeaturedVideos as $FeaturedVideo) {

    if ($i % 4 == 0) {
        $frame = $i;
        ?>
                                        <div class="item <?php if ($i == 0) {
            echo "active";
        } ?>" style="height:280px;padding-top:5px;border:none;padding-left: 30px;padding-right:30px;margin-left: 5px;">
    <?php } $i++; ?>
                                        <div class="col-md-3">
                                            <div class="imgsection">
                                                <h4 class="text-center product-strong-text" style="margin-top: 0px;">
                                                    <strong><?php echo $FeaturedVideo['name']; ?></strong>
                                                </h4>
                                                <p class="text-center product-text" style="text-indent: 0px;"><?php echo $FeaturedVideo['about']; ?>.</p>
                                                <div class="tumb-slide">
                                                    <div id="wb_MediaPlayer1" style="width:218px;height:142px;z-index:677;" class="imgresponsive">
                                                        <video src="<?php echo asset_url() . $FeaturedVideo['vedio_file']; ?>" id="MediaPlayer1" style="width:218px !important;height:140px;z-index:677;"></video>
                                                    </div>
                                                    <div class="hover-thumb text-center" style="height:60% !important">
                                                        <div id="wb_Image13" style="position:absolute;left: 75px;top: 70px;width:35px;height:35px;"><!-- z-index:851;-->
                                                            <a href="javascript:openVideo(<?php echo $FeaturedVideo['id']; ?>,'<?php echo $FeaturedVideo['name'];?>')"><img src="<?php echo asset_url(); ?>/images/play1.png" id="Image34" alt="" onmouseover="hover(this, 'play');" onmouseout="unhover(this, 'play');"></a> 
                                                        </div>
                                                        <div id="RollOver37" style="position:absolute;left: 120px;top: 70px;overflow:hidden;width: 40px;height: 40px;"><!-- z-index:770;-->
                                                            <a href="<?php echo base_url().'video/details/'.$FeaturedVideo['id'];?>" target="_blank">
                                                                <img src="<?php echo asset_url(); ?>/images/view1.png" onmouseover="hover(this, 'view1');" onmouseout="unhover(this, 'view1');">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br/>
                                                <h4 class="text-center product-money-symbol" style="padding-top: 1px;">USD <span class="product-price"><?php echo number_format($FeaturedVideo['unit_price'], 2, $locale['decimal_point'], $locale['thousands_sep']); ?></span></h4>
                                                <p class="text-center product-money-text" style="text-indent: 0px;">Min. Qty. <?php echo $FeaturedVideo['quantity']; ?>/<?php echo $FeaturedVideo['unit']; ?></p>
                                            </div>
                                        </div>
    <?php if ($frame + 4 == $i) { ?>
                                        </div>
    <?php } ?>
<?php } ?>
                                <a class="left carousel-control" href="#tab-slider5" role="button" data-slide="prev" style="background: none;padding-top:11%;text-align:center;width:2%;"> 
                                    <span><img alt="Back" style="border-width:0" src="<?php echo asset_url(); ?>images/previ.png"></span> 
                                </a> 
                                <a class="right carousel-control" href="#tab-slider5" role="button" data-slide="next" style="background: none;padding-top:11%;text-align:center;width:3%;"> 
                                    <span><img alt="Next" style="border-width:0" src="<?php echo asset_url(); ?>images/nex.png"></span> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Layer_details3" class="class1">
                <div id="Layer_details_Container3" class="class2">
                </div>
            </div>
            <div id="start_load_video" style="display: none;">
                <div id="wb_Image43" class="class23">
                    <a href="#" onclick="ShowObject('Layer_details3', 0);ShowObject('Layer_details', 0);StopAudio('MediaPlayer7');return false;">
                        <img src="<?php echo asset_url(); ?>images/close.png" id="Image43" alt="">
                    </a>
                </div>
                <div id="wb_Text161" style="position:absolute;left:27px;top:27px;width:174px;height:16px;z-index:1296;text-align:left;">
                        <span style="color:#303030;font-family:Georgia;font-size:13px;">
                            <strong id="video_name">Product Name<br></strong>
                        </span>
                </div>
                            
                <div id="wb_Image18" style="position:absolute;left:2px;top:0px;width:305px;height:372px;z-index:1291;background-color:white;text-align: center;">
                    <img src="<?php echo asset_url();?>images/loader.gif" style="padding-top: 185px;"/>
                </div>
                <div id="Layer111" style="position:absolute;text-align:left;left:0px;top:372px;width:308px;height:141px;z-index:1295;background-color: #E1E1E1">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-12 margintop" >
    <div class="row">
        <div class="col-sm-12 tab-slider">
            <div class="col-sm-3 col-lg-2 maxheight1 product3">
                <div class="row" style="margin: 0px">
                    <h3 style="color: #fff; text-align: center;">
                        <span class="product-feature">FEATURED WORLD</span><br> 
                        <span class="product-feature-title"> SELLERS</span>
                    </h3>
                    <div class="text-center displaydesktop">
                        <img src="<?php echo asset_url(); ?>images/ts/Fsellersok.png"
                             class="img-responsive" style="height: 200px;padding-bottom: 0px !important;">
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-lg-10" style="background: #fff; min-height: 272px;padding-left:0px !important;">
                <div class="panel disk-tab" style="border: 1px solid transparent">
                    <div class="panel-body mytab" style="margin-top: 0px;margin-bottom:8px;">
                        <div id="tab-slider6" class="carousel slide" data-ride="carousel" style="height: 280px;width: 100%;border:none;">
                            <div class="carousel-inner section3" role="listbox" style="height: 315px;overflow: hidden;border:none;">
<?php
$i = 0;

foreach ($FWSellers as $key => $FWSeller) {
    if ($i % 4 == 0) {
        $frame = $i;
        ?>
                                        <div class="item <?php if ($i == 0) {
            echo "active";
        } ?>" style="height:285px;border:none;padding-left: 40px;padding-right: 30px;">
    <?php } $i++; ?>
                                        <div  class="col-md-3" id="Layer140-<?php echo $key; ?>" style="position: relative;" onmouseenter="ShowObjectWithEffect('Layer143-<?php echo $key; ?>', 1, 'fade', 300, 'swing');ShowObjectWithEffect('Layer144-<?php echo $key; ?>', 1, 'fade', 300, 'swing');return false;" onmouseleave="ShowObjectWithEffect('Layer143-<?php echo $key; ?>', 0, 'fade', 10, 'swing');ShowObjectWithEffect('Layer144-<?php echo $key; ?>', 0, 'fade', 10, 'swing');return false;">
                                            <div id="wb_Shape24" style="position:absolute;left:0px;top:0px;width:218px;height:218px;z-index:509;">
    <?php if (file_exists("assets/" . $FWSeller['picture'])) { ?>
                                                    <img src="<?php echo asset_url() . $FWSeller['picture']; ?>" id="Shape24" alt="" style="width:218px;height:218px;">
    <?php } else { ?>
                                                    <img src="<?php echo asset_url() . 'images/img1004.png' ?>" id="Shape24" alt="" style="width:218px;height:218px;">
    <?php } ?>

                                            </div>
                                            <div id="Layer141" style="position:absolute;text-align:left;left:0px;top:202px;width:218px;height:65px;z-index:510;">
                                                <div id="wb_Text204" style="position:absolute;left:55px;top:25px;width:116px;height:16px;z-index:503;text-align:left;">
                                                    <span style="color:#000000;font-family:Arial;font-size:11px;"><strong><?php echo $FWSeller['contact_person'] ?></strong></span>
                                                </div>
                                                <div id="wb_Text205" style="position:absolute;left:55px;top:40px;width:150px;height:16px;z-index:504;text-align:left;">
                                                    <span style="color:#696969;font-family:Arial;font-size:12px;"><?php echo $FWSeller['position'] ?></span>
                                                </div>
                                                <div id="Layer142" style="position:absolute;text-align:left;left:0px;top:64px;width:218px;height:22px;z-index:505;background-color: #A9A9A9;">
                                                    <div id="wb_Text206" style="position:absolute;left:3px;top:2px;width:206px;height:16px;text-align:center;z-index:502;">
                                                        <span style="color:#000000;font-family:Arial;font-size:11px;"><?php echo substr($FWSeller['main_product'], 0,35);?></span>
                                                    </div>
                                                </div>
                                                <div id="wb_Shape25" style="position:absolute;left:11px;top:24px;width:35px;height:26px;z-index:506;">
                                                    <img src="<?php echo asset_url(); ?>images/flags/<?php echo $FWSeller['flag']; ?>" id="Shape25" alt="" style="width:35px;height:35px;">
                                                </div>
                                            </div>
                                            <div id="Layer143-<?php echo $key; ?>" class="Layer143" style="position: absolute; text-align: left; visibility: visible; left: 0px; top: 0px; width: 218px; height: 218px; z-index: 511; display: none;">
                                            </div>
                                            <div id="Layer144-<?php echo $key; ?>" style="position: absolute; text-align: left; visibility: visible; left: 30px; top: 48px; width: 156px; height: 136px; z-index: 512; display: none;">
                                                <div id="wb_Image96" style="position:absolute;left:34px;top:55px;width:35px;height:35px;z-index:507;">
                                                    <a href="javascript:openSeller(<?php echo $FWSeller['id']; ?>,'<?php echo $FWSeller['contact_person'];?>');" >
                                                        <img src="<?php echo asset_url(); ?>images/window-layer.png" id="Image96" alt="" onmouseover="hover(this, 'window');" onmouseout="unhover(this, 'window');">
                                                    </a>
                                                </div>
                                                <div id="RollOver87" style="position:absolute;left:86px;top:55px;overflow:hidden;width:35px;height:35px;z-index:508">
                                                    <a href="<?php echo base_url(); ?>desksite/<?php echo $FWSeller['busi_id']; ?>" target="_blank">
                                                        <span><img alt="" src="<?php echo asset_url(); ?>images/desksite1.png" onmouseover="hover(this, 'desksite1');" onmouseout="unhover(this, 'desksite1');"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
    <?php if ($frame + 4 == $i) { ?>
                                        </div>
    <?php } ?>
<?php } ?>
                                <a class="left carousel-control" href="#tab-slider6" role="button" data-slide="prev" style="background: none;padding-top:12%;text-align:center;width:2%;"> 
                                    <span><img alt="Back" style="border-width:0" src="<?php echo asset_url(); ?>images/previ.png"></span> 
                                </a> 
                                <a class="right carousel-control" href="#tab-slider6" role="button" data-slide="next" style="background: none;padding-top:12%;text-align:center;width:3%;"> 
                                    <span><img alt="Next" style="border-width:0" src="<?php echo asset_url(); ?>images/nex.png"></span> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div></div>

            <div id="Layer_sellers" class="class1 layer_details">
                <div id="Layer_details_Container4" class="class2">
                </div>
            </div>
            <div id="start_load_seller" style="display: none;">
                <div id="wb_Image152" class="style64">
                        <a href="#" onclick="ShowObject('Layer_sellers', 0);return false;"><img src="<?php echo asset_url();?>images/close.png" id="Image152" alt=""></a>
                </div>
                <div id="wb_Text200" class="style69" style="width: 200px;">
                    <span class="style70"><strong id="seller_name">Seller Name</strong></span>
                </div>      
                <div id="wb_Image18" style="position:absolute;left:0px;top:50px;width:305px;height:372px;z-index:1291;background-color:white;text-align: center;">
                    <img src="<?php echo asset_url();?>images/loader.gif" style="padding-top: 185px;"/>
                </div>
                <div id="Layer111" style="position:absolute;text-align:left;left:0px;top:372px;width:308px;height:141px;z-index:1295;background-color: #E1E1E1">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12 margintop" >
    <div class="row">
        <div class="col-sm-12 tab-slider" style="min-height:365px;">
            <div class="col-sm-3 col-lg-2 maxheight1 product4">
                <div class="row" style="margin: 0px">
                    <h3 style="color: #fff; text-align: center;">
                        <small>REAL-TIME</small><br><span class="product-feature-title"> BUSINESS STATION</span>
                    </h3>
                    <div class="text-center displaydesktop">
                        <img src="<?php echo asset_url(); ?>images/ts/trade-satation.png"
                             class="img-responsive">
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-lg-10">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12" style="background: #FF8C00; height: 60px; padding-top: 15px; text-align: center; color: #fff;">
                                <div id="wb_Text244" style="position:absolute;left:13px;top:24px;width:84px;height:15px;z-index:896;text-align:left;">
                                    <span style="color:#FFFFFF;font-family:Arial;font-size:12px;"><strong>REAL-TIME</strong></span>
                                </div>
                                <h3 class="head1">WORLD NEW ARRIVALS</h3>
                            </div>
                            <div id="wb_Carousel4" style="position: absolute;top:60px;">
<?php if (count($NewArrivals) > 3) { ?>
                                    <div id="Carousel4">
<?php } else { ?>
                                        <div id="Carousel14">
<?php
} $i = 0;
foreach ($NewArrivals as $NewArrival) {
    if ($i % 3 == 0) {
        $frame = $i;
        ?>
                                                <div class="frame" style="display: block;">
    <?php } $i++; //title,
    ?>
                                                <div class="col-sm-12 margins">
                                                    <div class="sectionrow">
                                                        <div class="row" style="margin: 0px;">
                                                            <div class="col-xs-2" style="padding: 1% 0px" style="height: 90px;">
                                                            	<?php if($NewArrival['image1'] != "") { ?>
                                                                <img src="<?php echo asset_url() . $NewArrival['image1']; ?>"
                                                                     class="img-responsive" style="padding: 0px !important;max-height: 85px;max-width: 85px !important;">
                                                                <?php }else if($NewArrival['product_item_id'] == 0){ ?>
                                                                	<img src="<?php echo asset_url() . $NewArrival['main_image']; ?>"
                                                                     class="img-responsive" style="padding: 0px !important;max-height: 85px;max-width: 85px !important;">
                                                                <?php } ?>
                                                                <img src="<?php echo asset_url();?>images/flags/<?php echo $NewArrival['flag'];?>" class="roundflag">

                                                            </div>
                                                            <div class="col-xs-9 text-left">
                                                                <h5>
                                                                    <div style="color:#303030;font-family:Georgia;font-size:13px;"><strong><?php echo $NewArrival['title'] ?></strong></div>
                                                                </h5>
                                                                <p style="text-indent: 0px;">
                                                                <div style="color:#696969;font-family:Arial;font-size:12px;"><?php echo substr($NewArrival['description'], 0, 115);
    if (strlen($NewArrival['description']) > 115) {
        echo "...";
    }
    ?>

                                                                </div>
                                                                </p>
                                                            </div>
                                                            <div class="col-xs-1 orange">
                                                                <a href="javascript:gotonewarrival_request('<?php echo $NewArrival['title']; ?>','<?php echo $NewArrival['company_country']; ?>','arrival',<?php echo $this->session->userdata('busi_id'); ?>)" style="text-decoration:none">Go</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
    <?php if ($frame + 3 == $i || count($NewArrivals) == $i) { ?>
    	</div>
    <?php } 
    		if(count($NewArrivals) < 3) {
	$pending = 3 - count($NewArrivals);
	for($i=0;$i<$pending;$i++){ ?>
		<div class="col-sm-12 margins">
	        <div class="sectionrow">
	            <div class="row" style="margin: 0px;">
	                <div class="col-xs-2" style="padding: 1% 0px" style="height: 90px;">
	                                                            	
	                  	<img src="<?php echo asset_url();?>images/no-posts-logo.png"
	                                                                     class="img-responsive" style="padding: 0px !important;max-height: 85px;max-width: 85px !important;">
	                </div>
	                <div class="col-xs-9 text-left">
	                    <h5>
	                        <div style="color:#303030;font-family:Georgia;font-size:13px;">
	                        	<strong>&nbsp;</strong>
	                        </div>
	                    </h5>
	                    <p style="text-indent: 0px;">
	                        <div style="color:#787878;font-family:Arial;font-size:12px;">
	                        	No more posts available at the moment.Please try again later.
	                        </div>
	                    </p>
	                </div>
	            </div>
	        </div>
	    </div>
	<?php } } } 
    if(count($NewArrivals) == 0){
        $pending = 3;
        for($i=0;$i<$pending;$i++){ ?>
            <div class="col-sm-12 margins">
                <div class="sectionrow">
                    <div class="row" style="margin: 0px;">
                        <div class="col-xs-2" style="padding: 1% 0px" style="height: 90px;">
                                                                        
                            <img src="<?php echo asset_url();?>images/no-posts-logo.png"
                                                                             class="img-responsive" style="padding: 0px !important;max-height: 85px;max-width: 85px !important;">
                        </div>
                        <div class="col-xs-9 text-left">
                            <h5>
                                <div style="color:#303030;font-family:Georgia;font-size:13px;">
                                    <strong>&nbsp;</strong>
                                </div>
                            </h5>
                            <p style="text-indent: 0px;">
                                <div style="color:#787878;font-family:Arial;font-size:12px;">
                                    No more posts available at the moment.Please try again later.
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php }} ?>

                                    </div></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-12" style="background: #1E90FF; height: 60px; padding-top: 15px; text-align: center; color: #fff;">
                                    <div id="wb_Text244" style="position:absolute;left:13px;top:24px;width:84px;height:15px;z-index:896;text-align:left;">
                                        <span style="color:#FFFFFF;font-family:Arial;font-size:12px;"><strong>REAL-TIME</strong></span></div>
                                    <h3 class="head1">WORLD PURCHASE REQUESTS</h3>
                                </div>
                                <br/>
                                <div id="wb_Carousel5" style="position: absolute;top:60px;">
                                	<?php if (count($NewOrders) > 3) { ?>
                                    <div id="Carousel5" style="max-width: 530px !important;">
									<?php } else { ?>
                                        <div id="Carousel15">
									<?php }
$i = 0;
foreach ($NewOrders as $NewOrder) {
    if ($i % 3 == 0) {
        $frame = $i;
        ?>
                                                <div class="frame">
                                                <?php } $i++; ?>

                                                <div class="col-sm-12 margins">
                                                    <div class="sectionrow"><div class="row" style="margin: 0px;">
                                                            <div class="col-xs-2" style="padding: 1% 0px" style="height: 90px;">
                                                                <img src="<?php echo asset_url() . $NewOrder['image1']; ?>"
                                                                     class="img-responsive" style="padding: 0px !important;max-height: 85px;max-width: 85px !important;">
                                                                <img src="<?php echo asset_url();?>images/flags/<?php echo $NewOrder['flag'];?>" class="roundflag">
                                                            </div>
                                                            <div class="col-xs-9 text-left">
                                                                <h5>
                                                                    <div style="color:#303030;font-family:Georgia;font-size:13px;"><strong><?php echo $NewOrder['title'] ?></strong></div>
                                                                </h5>
                                                                <p style="text-indent: 0px;">
                                                                <div style="color:#696969;font-family:Arial;font-size:12px;"><?php
                                            echo substr($NewOrder['description'], 0, 103);
                                            if (strlen($NewOrder['description']) > 103) {
                                                echo "...";
                                            }
                                            ?></div>
                                                                </p>
                                                            </div>
                                                            <div class="col-xs-1 blue1" >
                                                                <a href="javascript:gotonewarrival_request('<?php echo $NewOrder['title']; ?>','<?php echo $NewOrder['company_country']; ?>','request',<?php echo $this->session->userdata('busi_id'); ?>)" style="text-decoration:none">Go</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
    <?php if ($frame + 3 == $i || count($NewOrders) == $i) { ?>
    	</div>
    <?php 
    		if(count($NewOrders) < 3) {
	$pending = 3 - count($NewOrders);
	for($i=0;$i<$pending;$i++){ ?>

		<div class="col-sm-12 margins">
	        <div class="sectionrow">
	            <div class="row" style="margin: 0px;">
	                <div class="col-xs-2" style="padding: 1% 0px" style="height: 90px;">
	                                                            	
	                  	<img src="<?php echo asset_url();?>images/no-posts-logo.png"
	                                                                     class="img-responsive" style="padding: 0px !important;max-height: 85px;max-width: 85px !important;">
	                </div>
	                <div class="col-xs-9 text-left">
	                    <h5>
	                        <div style="color:#303030;font-family:Georgia;font-size:13px;">
	                        	<strong>&nbsp;</strong>
	                        </div>
	                    </h5>
	                    <p style="text-indent: 0px;">
	                        <div style="color:#787878;font-family:Arial;font-size:12px;">
	                        	No more posts available at the moment.Please try again later.
	                        </div>
	                    </p>
	                </div>
	            </div>
	        </div>
	    </div>
	<?php } } } ?>
                                               
    <?php }
    if(count($NewOrders) == 0){
        $pending = 3;
        for($i=0;$i<$pending;$i++){ ?>

            <div class="col-sm-12 margins">
                <div class="sectionrow">
                    <div class="row" style="margin: 0px;">
                        <div class="col-xs-2" style="padding: 1% 0px" style="height: 90px;">
                                                                        
                            <img src="<?php echo asset_url();?>images/no-posts-logo.png"
                                                                             class="img-responsive" style="padding: 0px !important;max-height: 85px;max-width: 85px !important;">
                        </div>
                        <div class="col-xs-9 text-left">
                            <h5>
                                <div style="color:#303030;font-family:Georgia;font-size:13px;">
                                    <strong>&nbsp;</strong>
                                </div>
                            </h5>
                            <p style="text-indent: 0px;">
                                <div style="color:#787878;font-family:Arial;font-size:12px;">
                                    No more posts available at the moment.Please try again later.
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    <?php } } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 margintop" >
                <div class="row">
                    <div class="col-sm-12 tab-slider">
                        <div class="col-sm-3 col-lg-2 maxheight1 product1 productb">
                            <div class="row" style="margin: 0px">
                                <h3 style="color: #fff; text-align: center;">
                                    <span class="product-feature">FEATURED WORLD</span><br> 
                                    <span class="product-feature-title"> BUYERS</span>
                                </h3>
                                <div class="text-center displaydesktop">
                                    <img src="<?php echo asset_url(); ?>images/fbuyers.png"
                                         class="img-responsive" style="height: 210px;">
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-sm-9 col-lg-10"
                                style="background: #fff; min-height: 272px;">
                                
                                <section class="center slider">-->
                        <div class="col-sm-9 col-lg-10" style="background: #fff; min-height: 285px;">
                            <div class="panel disk-tab">
                                <div class="panel-body mytab" style="margin: 0px;">
                                    <div id="tab-slider7" class="carousel slide" data-ride="carousel" style="height: 285px;width: 100%;border:none;">
                                        <div class="carousel-inner section3" role="listbox" style="height: 285px;overflow: hidden;border:none;">
<?php
$i = 0;

foreach ($FWBuyers as $key => $FWBuyer) {
    if ($i % 4 == 0) {
        $frame = $i;
        ?>
                                                    <div class="item <?php if ($i == 0) {
            echo "active";
        } ?>" style="height:285px;border:none;padding-right: 30px;padding-left: 50px;">
    <?php } $i++; ?>
                                                    <div  class="col-md-3" id="Layer140-<?php echo $key; ?>" onmouseenter="ShowObjectWithEffect('Layer145-<?php echo $key; ?>', 1, 'fade', 300, 'swing');ShowObjectWithEffect('Layer146-<?php echo $key; ?>', 1, 'fade', 300, 'swing');return false;" onmouseleave="ShowObjectWithEffect('Layer146-<?php echo $key; ?>', 0, 'fade', 10, 'swing');ShowObjectWithEffect('Layer145-<?php echo $key; ?>', 0, 'fade', 10, 'swing');return false;">

                                                        <div id="wb_Shape24" style="position:absolute;left:0px;top:0px;width:218px;height:218px;z-index:509;">
    <?php if (file_exists("assets/" . $FWBuyer['picture'])) { ?>
                                                                <img src="<?php echo asset_url() . $FWBuyer['picture']; ?>" id="Shape24" alt="" style="width:218px;height:218px;">
    <?php } else { ?>
                                                                <img src="<?php echo asset_url() . 'images/img1004.png' ?>" id="Shape24" alt="" style="width:218px;height:218px;">
    <?php } ?>

                                                        </div>
                                                        <div id="Layer141" style="position:absolute;text-align:left;left:0px;top:202px;width:218px;height:65px;z-index:510;">
                                                            <div id="wb_Text204" style="position:absolute;left:55px;top:25px;width:116px;height:16px;z-index:503;text-align:left;">
                                                                <span style="color:#000000;font-family:Arial;font-size:11px;"><strong><?php echo $FWBuyer['contact_person'] ?></strong></span>
                                                            </div>
                                                            <div id="wb_Text205" style="position:absolute;left:55px;top:40px;width:130px;height:16px;z-index:504;text-align:left;">
                                                                <span style="color:#696969;font-family:Arial;font-size:12px;"><?php echo $FWBuyer['position'] ?></span>
                                                            </div>
                                                            <div id="Layer142" style="position:absolute;text-align:left;left:0px;top:64px;width:218px;height:19px;z-index:505;background-color: #A9A9A9;">
                                                                <div id="wb_Text206" style="position:absolute;left:3px;top:2px;width:206px;height:20px;text-align:center;z-index:502;">
                                                                    <span style="color:#000000;font-family:Arial;font-size:11px;"><?php echo substr($FWBuyer['main_product'], 0, 70);?></span>
                                                                </div>
                                                            </div>
                                                            <div id="wb_Shape25" style="position:absolute;left:11px;top:24px;width:35px;height:26px;z-index:506;">
                                                                <img src="<?php echo asset_url(); ?>images/flags/<?php echo $FWBuyer['flag']; ?>" id="Shape25" alt="" style="width:35px;height:35px;">
                                                            </div>
                                                        </div>
                                                        <div id="Layer145-<?php echo $key; ?>" class="Layer143" style="position: absolute; text-align: left; visibility: visible; left: 0px; top: 0px; width: 218px; height: 218px; z-index: 511; display: none;">
                                                        </div>
                                                        <div id="Layer146-<?php echo $key; ?>" style="position: absolute; text-align: left; visibility: visible; left: 30px; top: 48px; width: 156px; height: 136px; z-index: 512; display: none;">
                                                            <div id="wb_Image96" style="position:absolute;left:34px;top:55px;width:35px;height:35px;z-index:507;">
                                                                <a href="javascript:openBuyer(<?php echo $FWBuyer['id']; ?>,'<?php echo $FWBuyer['contact_person']; ?>')">
                                                                    <!--<img src="<?php echo asset_url(); ?>images/window-layer.png" style="width: 40px;" onmouseover="hover(this, 'window');" onmouseout="unhover(this, 'window');">-->
                                                                    <img src="<?php echo asset_url(); ?>images/window-layer.png" id="Image96" alt="" onmouseover="hover(this, 'window');" onmouseout="unhover(this, 'window');">

                                                                </a>
                                                            </div>
                                                            <div id="RollOver87" style="position:absolute;left:86px;top:55px;overflow:hidden;width:35px;height:35px;z-index:508">
                                                                <a href="<?php echo base_url(); ?>buyer/profile/<?php echo $FWBuyer['busi_id']; ?>" target="_blank">
                                                                    <!--<img src="<?php echo asset_url(); ?>images/buyer-desksite1.png" style="width: 42px;" onmouseover="hover(this, 'buyer_desksite');" onmouseout="unhover(this, 'buyer_desksite');">-->
                                                                    <span><img alt="" src="<?php echo asset_url(); ?>images/desksite1.png" onmouseover="hover(this, 'desksite1');" onmouseout="unhover(this, 'desksite1');"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
    <?php if ($frame + 4 == $i) { ?>
                                                    </div>
    <?php } ?>
<?php } ?>
                                            <a class="left carousel-control" href="#tab-slider7" role="button" data-slide="prev" style="background: none;padding-top:10%;text-align:center;width:4%;"> 
                                                <span><img alt="Back" style="border-width:0" src="<?php echo asset_url(); ?>images/previ.png"></span> 
                                            </a> 
                                            <a class="right carousel-control" href="#tab-slider7" role="button" data-slide="next" style="background: none;padding-top:10%;text-align:center;width:6%;"> 
                                                <span><img alt="Next" style="border-width:0" src="<?php echo asset_url(); ?>images/nex.png"></span> 
                                            </a>
                                        </div></div>
                                </div>
                            </div></div>
                    </div>
                </div>
            </div>
            <div id="Layer_buyers" class="class1 class1_bottom layer_details">
                <div id="Layer_details_Container5" class="class2"></div>
            </div>
            <div id="start_load_buyer" style="display: none;">
                <div id="wb_Image152" class="style64">
                        <a href="#" onclick="ShowObject('Layer_buyers', 0);return false;"><img src="<?php echo asset_url();?>images/close.png" id="Image152" alt=""></a>
                </div>
                <div id="wb_Text200" class="style69" style="width: 200px;">
                        <span class="style70"><strong id="buyer_name">Buyer Name</strong></span>
                </div>    
                <div id="wb_Image18" style="position:absolute;left:0px;top:50px;width:305px;height:372px;z-index:1291;background-color:white;text-align: center;">
                    <img src="<?php echo asset_url();?>images/loader.gif" style="padding-top: 185px;"/>
                </div>
                <div id="Layer111" style="position:absolute;text-align:left;left:0px;top:372px;width:308px;height:141px;z-index:1295;background-color: #E1E1E1">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Add to catalogue -->
<div id="Layer_catalogue" class="catalogue1">
    <div id="Layer_catalogue_Container" class="catalogue2">
    </div>
</div>   
<!-- add to catalogue end -->
<div id="Layer_details2" class="class1">
    <div id="Layer_details_Container2" class="class2">
    </div>
</div>
<div id="Layer_buyers" class="class1">
    <div id="Layer_details_Container5" class="class2">
    </div>
</div>
<?php echo $template['partials']['vcatalogue']; ?>

<div id="promodal">
</div>
<div id="vcatalogue_overlay_home" class="modal fade" style="background-color:#404040;z-index: 10000;">
    <div class="modal-dialog" style="background-color:#404040;width:1050px;">
        <div class="modal-content" style="background: transparent;box-shadow:none;-webkit-box-shadow:none;border: 0px;">
            <div style="position:absolute;right:0;width:50px;height:50px;z-index:5000;"><button type="button" class="pull-right" data-dismiss="modal" aria-hidden="true" style="background:transparent;border:0px;"><img src="<?php echo asset_url(); ?>images/newicons/closeround.png" id="Image47" alt="" style="width:35px;"></button></div>
            <div class="modal-body" style="width:1050px;height:640px;">
                <input type="hidden" id="pcatalogue_id" value="" />
                <div class="row">
                    <div class="col-md-1" style="float:left;padding:0px;width:155px;" id="catalogue_links">

                    </div>
                    <div class="col-md-9" style="width:770px;padding-top:42px;">
                        <div id="catalogue_page_content" class="catalogue_outer_body">
                        </div>
                    </div>
                    <div class="col-md-1" style="padding:0px;width:80px;" id="share_it">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo asset_url(); ?>js/slick.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
     function hover(element, type) {
        if (type == 'cart') {
        	element.setAttribute('src', '<?php echo asset_url(); ?>images/cart-hover.png');
        } else if (type == 'favorite') {
        	element.setAttribute('src', '<?php echo asset_url(); ?>images/favorite-hover.png');
        } else if (type == 'same') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/same-hover.png');
        } else if (type == 'view') {
         	element.setAttribute('src', '<?php echo asset_url(); ?>images/view-hover.png');
        } else if (type == 'desksite') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/desksite-hover.png');
        } else if (type == 'vcat') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/vcat-hover.png');
        } else if (type == 'window') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/window-layer-hover.png');
        } else if (type == 'desksite1') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/desksite-hover1.png');
        } else if (type == 'play') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/play-hover.png');
        } else if (type == 'view1') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/view-hover1.png');
        } else if (type == 'buyer_desksite') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/buyer-desksite-hover.png');
        } else if (type == 'view2') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/view-hover2.png');
        }
	}

    function unhover(element, type) {
        if (type == 'cart') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/cart.png');
        }else if (type == 'favorite') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/favorite.png');
        } else if (type == 'same') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/same.png');
        } else if (type == 'view') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/view-3D.png');
        } else if (type == 'desksite') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/desksite-icon.png');
        } else if (type == 'vcat') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/vcat.png');
        } else if (type == 'window') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/window-layer.png');
        } else if (type == 'view1') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/view1.png');
        } else if (type == 'desksite1') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/desksite1.png');
        } else if (type == 'play') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/play1.png');
        } else if (type == 'buyer_desksite') {
            element.setAttribute('src', '<?php echo asset_url(); ?>images/buyer-desksite1.png');
        }
    }

   	var template = {
                    html: 'application/modules/frontend/views/default/default-book-view.html',
                    styles: [
                                   '<?php echo asset_url(); ?>css/font-awesome.min.css',
                              	'<?php echo asset_url(); ?>css/short-white-book-view.css'
                            ],
                    script: '<?php echo asset_url(); ?>js/default-book-view.js'
                    };

    var booksOptions = {
                       	pageCallback: orwell1984PageCallback,
                        pages: 10,
                        propertiesCallback: function (props) {
                            props.page.depth /= 2;
                            props.cover.padding = 0.002;
                            return props;
                        },
                   		template: template
                        };


    function orwell1984PageCallback(n) {
        return {
                type: 'html',
                //src: 'books/html/1984/'+(n+1)+'.html',
                src: base_url + "catalogue/pages/" + catalogue_id + "/" + (n + 1),
                interactive: true
                };
    }

    $(document).on('ready', function () {
	    $(".center").slick({
	        infinite: false,
	        speed: 300,
	        slidesToShow: 4,
	        slidesToScroll: 4,
	        responsive: [
		        {
		            breakpoint: 1024,
		            settings: {
		                        slidesToShow: 3,
		                        slidesToScroll: 3,
		                        infinite: true,
		                      }
		         },
		         {
		            breakpoint: 600,
		            settings: {
		                        slidesToShow: 2,
		                        slidesToScroll: 2
		                      }
		        },
		        {
		            breakpoint: 480,
		            settings: {
		                       slidesToShow: 1,
		                       slidesToScroll: 1
		            }
		        }
	        ]
	    });
	});

    $(document).ready(function () {
        var boxWidth = $(".open-div1").width();
        $(".menu-arrow").click(function () {
            $(".reminder-div").animate({
                width: boxWidth
            });
      		$(".menu-arrow").hide();
        	$(".menu-arrow2").show();
        	$(".myalert").show();
    	});
    	$(".menu-arrow2").click(function () {
    		$(".reminder-div").animate({
                width: 60
            });
            $(".menu-arrow").show();
            $(".menu-arrow2").hide();
            $(".myalert").hide();
        });
    });

    $("div.product-text").text(function (index, currentText) {
      	return currentText.substr(0, 30);
    });
	
	var catalogue_id = 0;
    function viewCatalogueBook(id){
        $.get(base_url + "catalogue/popup/" + id, {}, function (data) {
            catalogue_id = id;
            //$("#catalogue_page_content_inner").html(data);
         	//$("#pcatalogue_id").val(id);
            $("#catalogue_page_content").html(data);
            $("#vcatalogue_overlay_home").modal('show');
            var page_count = parseInt($("#product_count").val());
            booksOptions.pages = parseInt(page_count*2);
            var instance = {
                scene: undefined,
                options: undefined,
                node: $('#flip-book-window').find('.mount-node')
            };

      		instance.options = booksOptions;
            instance.scene = instance.node.FlipBook(instance.options);
            var shareIt = '<ul class="share pull-right text-center">'
		      + '<li class="share-button"><label style="width:70px;height:70px;border-radius:50%;border:1px solid #fff;background-color:#24A7DB;color:#fff;text-align:center;line-height:15px;padding-top:20px;">Views<br> <span id="vdiv' + data.id + '">' + data.views + '</span></label></li>'
		      + '<li class="share-button"><label style="width:70px;height:70px;border-radius:50%;border:1px solid #fff;background-color:#32AA2B;color:#fff;text-align:center;line-height:15px;padding-top:20px;">Likes<br> <span id="sdiv' + data.id + '">' + data.likes + '<span></label></li>'
		      + '</ul>'
		      + '<div id="RollOver5" class="" style="position:absolute;left: 30px;top: 245px;width:35px;height:35px;z-index:380;" onclick="chat_with(' + data.user_id + ');">'
		      + '<a>'
		      + '<img class="hover" src="<?php echo asset_url() ?>images/chatwhite.png" alt="view">'
		      + '<span><img alt="View" src="<?php echo asset_url() ?>images/chat_button2.png"></span>'
		      + '</a>'
		      + '</div>'
		      + '<div id="RollOver5" class="" style="position:absolute;left: 30px;top: 290px;width:35px;height:35px;z-index:380;">'
		      + '<a href="javascript:likeCatalogue(' + data.id + ');">'
		      + '<img class="hover" src="<?php echo asset_url() ?>images/items_likewhite.png" alt="view">'
		      + '<span><img alt="View" src="<?php echo asset_url() ?>images/items_like2.png"></span>'
		      + '</a>'
		      + '</div>'
		      + '<div id="RollOver5" class="" style="position:absolute;left: 30px;top: 335px;width:35px;height:35px;z-index:380;">'
		      + '<a href="javascript:addToMyFavourite(' + data.busi_id + ',7);">'
		      + '<img class="hover" src="<?php echo asset_url() ?>images/addtofav.png" alt="view">'
		      + '<span><img alt="View" src="<?php echo asset_url() ?>images/favorite_chery.gif"></span>'
		      + '</a>'
		      + '</div>';
		      $("#share_it").html(shareIt);
		      });
	}
    function openCatalogue(id) {
                                
        $.get(base_url + "catalogue/popup/" + id, {}, function (data) {
            $("#Layer_catalogue_Container").html(data);
            ShowObjectWithEffect('Layer_catalogue', 1, 'scale', 500, 'swing');
       	}, 'html');
    }
    function openSeller(id,name) {
        $("#Layer_details_Container4").html($("#start_load_seller").html());
        ShowObjectWithEffect('Layer_sellers', 1, 'scale', 500, 'swing');
        $("#seller_name").html(name);
        $.get(base_url+"seller/popup/"+id,{},function(data) {
            $("#Layer_details_Container4").html(data);
        },'html');
        
    }
    function openBuyer(id,name) {
        /*$.get(base_url + "buyer/popup/" + id, {}, function (data) {
      		$("#Layer_details_Container5").html(data);
            ShowObjectWithEffect('Layer_buyers', 1, 'scale', 500, 'swing');
        }, 'html');*/
        $("#Layer_details_Container5").html($("#start_load_buyer").html());
        ShowObjectWithEffect('Layer_buyers', 1, 'scale', 500, 'swing');
        $("#buyer_name").html(name);
            $.get(base_url + "buyer/popup/" + id, {}, function (data) {
           $("#Layer_details_Container5").html(data);
            },'html');
    }
    function open3DProduct(id) {
        ajaxindicatorstart("Please wait while we load 3D Product.");
        $.get(base_url + "mystation/3dpro/show/" + id, {}, function (data) {
            ajaxindicatorstop();
            $("#promodal").html(data);
            $("#my3DModal").modal('show');
            init3D('my3dimg');
        }, 'html');
    }
</script>
<script>
    $(document).ready(function () {
        $("#Carousel5").carousel();
        var Carousel5Opts =
                {
                    delay: 5000,
                    duration: 20,
                    easing: 'easeInSine',
                    mode: 'blind',
                    direction: 'vertical',
                    pagination: false,
                    start: 0
                };
        $("#Carousel5").carouseleffects(Carousel5Opts);
        $("#Carousel4").carousel();
        var Carousel4Opts =
                {
                    delay: 4000,
                    duration: 20,
                    easing: 'easeInSine',
                    mode: 'blind',
                    direction: 'vertical',
                    pagination: false,
                    start: 0
                };
        $("#Carousel4").carouseleffects(Carousel4Opts);
        $("#SlideShow1").slideshow({
            interval: 3000,
            type: 'sequence',
            effect: 'none',
            direction: '',
            pagination: false,
            effectlength: 1000
        });
        searchParseURL();
        var $autocomplete = $('<ul class="autocomplete"></ul>').hide().insertAfter('#SiteSearch4');
        var selectedItem = null;
        var setSelectedItem = function (item) {
            selectedItem = item;
            if (selectedItem === null) {
                $autocomplete.hide();
                return;
            }
            if (selectedItem < 0) {
                selectedItem = 0;
            }
            if (selectedItem >= $autocomplete.find('li').length) {
                selectedItem = $autocomplete.find('li').length - 1;
            }
            $autocomplete.find('li').removeClass('selected').eq(selectedItem).addClass('selected');
            $autocomplete.css('left', $('#SiteSearch4').position().left);
            $autocomplete.css('top', $('#SiteSearch4').position().top + $('#SiteSearch4').outerHeight());
            $autocomplete.show();
        };
        var populateSearchField = function () {
            $('#SiteSearch4').val($autocomplete.find('li').eq(selectedItem).text());
            setSelectedItem(null);
        };
        $('#SiteSearch4').attr('autocomplete', 'off').keyup(function (event) {
            if (event.keyCode > 40 || event.keyCode == 8) {
                var data = new Array();
                var keywordVal = $('#SiteSearch4').val();
                keywordVal = keywordVal.toLowerCase();
                for (i = 0; i < database_length; i++) {
                    var words = (searchDatabase[i].title + " " + searchDatabase[i].description + " " + searchDatabase[i].keywords).toLowerCase();
                    var array = words.split(" ");
                    data = $.merge(data, array);
                }

                var unique = new Array();
                o: for (var i = 0; i < data.length; i++) {
                    for (var j = 0; j < unique.length; j++) {
                        if (unique[j] == data[i])
                            continue o;
                    }
                    unique[unique.length] = data[i];
                }

                unique.sort();
                if (keywordVal.length && unique.length) {
                    $autocomplete.empty();
                    var item = 0;
                    $.each(unique, function (index, term) {
                        term = term.toLowerCase();
                        if (term.indexOf(keywordVal) == 0) {
                            $('<li></li>').text(term).data('item', item).appendTo($autocomplete).mouseover(function () {
                                var item = $(this).data('item');
                                setSelectedItem(item);
                            }).click(populateSearchField);
                            item++;
                        }
                    });
                    setSelectedItem(0);
                } else {
                    setSelectedItem(null);
                }
            } else
            if (event.keyCode == 38 && selectedItem !== null) {
                setSelectedItem(selectedItem - 1);
                event.preventDefault();
            } else
            if (event.keyCode == 40 && selectedItem !== null) {
                setSelectedItem(selectedItem + 1);
                event.preventDefault();
            } else
            if (event.keyCode == 27 && selectedItem !== null) {
                setSelectedItem(null);
            }
        }).keypress(function (event) {
            if (event.keyCode == 13 && selectedItem !== null) {
                populateSearchField();
                event.preventDefault();
            }
        }).blur(function (event) {
            setTimeout(function () {
                setSelectedItem(null);
            }, 250);
        });
        var Carousel2Opts = {
            delay: 4000,
            duration: 500,
            easing: 'easeInOutBounce',
            mode: 'fade',
            direction: '',
            pagination: false,
            start: 0
        };
        $("#Carousel2").carouseleffects(Carousel2Opts);
        $("#Carousel2_back a").click(function () {
            $('#Carousel2').carouseleffects('prev');
        });
        $("#Carousel2_next a").click(function () {
            $('#Carousel2').carouseleffects('next');
        });
        var Carousel1Opts = {
            delay: 4000,
            duration: 500,
            easing: 'easeInOutBounce',
            mode: 'rotate',
            direction: '',
            pagination: true,
            start: 0
        };
        $("#Carousel1").carouseleffects(Carousel1Opts);
        $("#Carousel1_back a").click(function () {
            $('#Carousel1').carouseleffects('prev');
        });
        $("#Carousel1_next a").click(function () {
            $('#Carousel1').carouseleffects('next');
        });

        $("#Layer_details").stickylayer({
            orientation: 9,
            position: [0, 0],
            delay: 300
        });
        $("#Layer_details3").stickylayer({
            orientation: 9,
            position: [0, 0],
            delay: 300
        });
        $("#Layer_details2").stickylayer({
            orientation: 9,
            position: [0, 0],
            delay: 300
        });
    });
    
    function addToMyFavourite(fav_id, type) {
        $.get(base_url + "addtofavourite/" + fav_id + "/" + type, {}, function (data) {
            $("#Layer99 > #Layer99_Container > #wb_Text145 > #msg_cont").html(data.msg);
            ShowObject('Layer99', 1);
        }, 'json');
    }
    function validate() {
        if ($('select').val() == 'default') {
            alert('Please, choose an option');
            return false;
        }else{
            switch($('#search-for').val()){ 
                case '1': $('#search-form').attr('action','seller');break;
                case '2': $('#search-form').attr('action','shipper');break;
                case '3': $('#search-form').attr('action','buyer');break;
                case '4': $('#search-form').attr('action','products');break;
            }
        }
    }

    function addToItemToCart(id) {
        $.post(base_url + "additemtocart", {product_id: id}, function (data) {
            $("#Layer99 > #Layer99_Container > #wb_Text145 > #msg_cont").html(data.msg);
            ShowObject('Layer99', 1);
        }, 'json');
    }
    function gotonewarrival_request(keyword, country, type, busi_id) {
        if (busi_id == "" || busi_id == undefined) {
            $("#Layer99 > #Layer99_Container > #wb_Text145 > #msg_cont").html("PLEASE LOGIN TO ACCESS MEMBER AREA.");
            ShowObject('Layer99', 1);
        } else {
            $.cookie('bstation-landing', '1', {expires: 365});
            $.cookie('bstation-keyword', keyword, {expires: 365});
            $.cookie('bstation-country', country, {expires: 365});
            if (type == 'request') {
                $.cookie('bstation-buyer-request', '1', {expires: 365});
            } else {
                $.cookie('bstation-buyer-request', '0', {expires: 365});
            }
            window.open(base_url + 'b-station', '_blank');
        }

    }
    var hoverTimeout, keepOpen = false, stayOpen = $('#Details');
    $(document).on('mouseenter', '.cat_slide', function () {
        clearTimeout(hoverTimeout);
        var curr_slide = $(this).attr("alt");
        $(".sub_cat").css('color', '#337ab7');
        $(".slide-details").hide();
        $("#sub_cat_main_prod").hide();
        $("#" + curr_slide).show();
        $("." + curr_slide).show();
        stayOpen.addClass('show');
    }).on('mouseleave', '.slide', function () {
        clearTimeout(hoverTimeout);
        hoverTimeout = setTimeout(function () {
            if (!keepOpen) {
                $(".slide-details").hide();
                stayOpen.removeClass('show');
            }
        }, 1000);
    });
    $(document).on('mouseenter', '#Details', function () {
        keepOpen = true;
        setTimeout(function () {
            keepOpen = false;
        }, 1500);
    }).on('mouseleave', '#Details', function () {
        keepOpen = false;
        $(".slide-details").hide();
        stayOpen.removeClass('show');
    });

function openVideo(id,name) {
	//ajaxindicatorstart("Please wait while we load the video.");
	$("#Layer_details_Container3").html($("#start_load_video").html());
	ShowObjectWithEffect('Layer_details3', 1, 'scale', 500, 'swing');
	$("#video_name").html(name);
	$.get(base_url+"seller/video/view/"+id,{},function(data) {
		/*ajaxindicatorstop();
		$("#Layer_details_Container3").html(data);
		ShowObjectWithEffect('Layer_details3', 1, 'scale', 500, 'swing');*/
			$("#Layer_details_Container3").html(data);
	},'html');
}
function openProduct(id,name) {
	//ajaxindicatorstart("Please wait while we load the Product.");
	$("#Layer_details_Container").html($("#start_load").html());
	ShowObjectWithEffect('Layer_details', 1, 'scale', 500, 'swing');
	$("#product_name_disp").html(name);
	$.get(base_url+"seller/product/view/"+id,{},function(data) {
			$("#Layer_details_Container").html(data);
	},'html');
}

  function highlight_keywords(str) {
        $(".sub_cat").css('color', '#337ab7');
        $("." + str).css('color', 'orange');
    }
   function filter_by_subcat(cat_id, cat_sub_id,main_prod) {
        $("#filter_cat").val(cat_id);
        $("#filter_sub_cat").val(cat_sub_id);
        $("#main_prod").val(main_prod);
        $("#filter_by_category").submit();
    }
	function get_main_products(main_cat,id,sub_cat_name){
		$.ajax({
			url: base_url + "home/get_main_products",
			type: "post",
			data : { id : id,name:sub_cat_name,main_cat:main_cat },
			success: function (response) {
				$("#sub_cat_main_prod").html('');
				$("#sub_cat_main_prod").append(response);
				$("#sub_cat_main_prod").show();
			}
		})
    }
</script>