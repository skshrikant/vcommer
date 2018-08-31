<link rel="stylesheet" href="<?php echo asset_url(); ?>css/pages/responsive.css">
<div id="main-page">
    <div class="container" id="Layer106_Container">
        <div class="container-fluid top-div">
            <ul class="nav navbar-nav navbar-left top-nav">
                <li class="inline"><a href="#" onclick="ShowObjectWithEffect('Layer106', 1, 'fold', 500, 'easeOutBounce');return false;"><img src="<?php echo asset_url(); ?>images/img0235.png" id="Image25" alt="" class="imgus"></a></li>
                <li class="inline"><a href="#" onclick="ShowObjectWithEffect('Layer106', 1, 'fold', 500, 'easeOutBounce');return false;"><span class="navtrd1">TRD</span><span class="navtrd2">STATION</span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right top-nav">
                <li><a href="#" class="headerMenu" style="padding-right: 0px;">GOOD LUCK</a></li>
                
                <?php if(empty($this->session->userdata('tsuserid')) && $this->session->userdata('tsuserid') <= 0) { ?>
                     <li><a data-toggle="modal" style="color:#FFFFFF;font-family:Georgia;font-size:15px;">Tang Lee</a></li>
                <?php }else { ?>
                     <li><a data-toggle="modal" style="color:#FFFFFF;font-family:Georgia;font-size:15px;"><?php echo $tsprefix."  ".$tsusername; ?></a></li>
                <?php  } ?>
                <li class="dropdown ">
                    <a href="#" onclick="ShowObjectWithEffect('Layer29', 1, 'fold', 300);return false;">
                       <?php if ($profile_img == '') { ?>
							 <img src="<?php echo asset_url(); ?>images/rseller2.png" id="Image24" alt="" class="img35">
	                    <?php } else { ?>
	                        <img src="<?php echo asset_url().$profile_img?>" id="Image24" alt="" class="img35">
	                    <?php } ?>
                    </a>
                </li>
                <div id="Layer29" onmouseleave="ShowObjectWithEffect('Layer29', 0, 'fold', 300);return false;">
                    <div id="wb_CssMenu7">
                        <ul>
                            <li class="firstmain"><a href="#" target="_self">Account</a>
                            </li>
                            <li><a href="#" target="_self">Membership</a>
                            </li>
                            <li><a href="#" target="_self">Control&nbsp;Panel</a>
                            </li>
                            <li><a href="#" target="_self">Logout</a>
                            </li>
                        </ul>
                        <br>
                    </div>
                </div>
            </ul>
        </div>
            <nav class="navbar" style="visibility: hidden;" id="Layer106" onmouseleave="ShowObjectWithEffect('Layer106', 0, 'fold', 500);return false;">
                <div id="Layer106_Container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="row" style="padding-top:1px;padding-right:1px;">
                        <div class="col-lg-2 col-sm-4 logo">
                            <div style="color:#E8AD8F;font-family:Georgia;font-size:12px;">WELCOME TO THE</div>
                            <div style="color:#FFFFFF;font-family:Arial;font-size:27px;margin-top:35px;">TRD</div>
                            <div style="color:#FFFFFF;font-family:Impact;font-size:48px;letter-spacing:0.07px;margin-top:-15px;">STATION</div>
                            <div style="color:#E8AD8F;font-family:Arial;font-size:12px;margin-top:-7px;">The new ear of ecommerce</div>
                        </div>
                        <div class="col-lg-4 col-sm-8" style="background:url(assets/images/ts/homeheader0.jpg) no-repeat center center; background-size:100% 100%; height:235px;">
                        </div>
                         <div class="col-lg-6 col-sm-12">
                            <div class="row open-div1 bgwhite" style="position: relative; min-height: 235px;">
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="col-xs-11">
                                    <ul class="nav navbar-nav trd-nav">
                                        <li class=" col-sm-2 col-xs-6">
                                          <a href="<?php echo base_url();?>"><img src="assets/images/ts/Homekit.png " style="width: 50px; "><h5>Home</h5></a></li>
										<li class="col-sm-2 col-xs-6 ">
										       <a href="<?php echo base_url();?>seller"><img src="assets/images/ts/seller.png" style="width: 50px;"><h5>Sellers</h5></a>
			                            </li>
			                            <li class="col-sm-2 col-xs-6">
			                                   <a href="<?php echo base_url();?>products"><img src="assets/images/ts/products.png " style="width: 50px; "><h5>Products</h5></a>
										</li>
										<li class="col-sm-2 col-xs-6 ">
                                            <?php if(empty($this->session->userdata('tsuserid')) && $this->session->userdata('tsuserid') <= 0) { ?>
                                                <a href="javascript:login_message()">
                                            <?php }else{ ?>
                                                <a href="<?php echo base_url();?>b-station">
                                            <?php } ?>
                                            <img src="assets/images/ts/trade.png" style="width: 50px;"><h5>B-Station</h5></a>
			                             </li>
			                             <li class="col-sm-2 col-xs-6">
			                                   <a href="<?php echo base_url();?>pro-video"><img src="assets/images/ts/vidtube0.png" style="width: 50px;"><h5>Pro-Videos</h5></a>
			                              </li>
										  <li class="col-sm-2 col-xs-6 ">
												   <a href="<?php echo base_url();?>buyer"><img src="assets/images/ts/buyer.png" style="width: 50px;"><h5>Buyers</h5></a>
				                          </li>
			                               <li class="col-sm-2 col-xs-6">
			                                    <a href="<?php echo base_url();?>shipper"><img src="assets/images/ts/shipper.png " style="width: 50px;"><h5>Shippers</h5></a>
			                               </li>
										   <li class="col-sm-2 col-xs-6 ">
                                            <?php if(empty($this->session->userdata('tsuserid')) && $this->session->userdata('tsuserid') <= 0) { ?>
                                                <a href="javascript:login_message()">
                                            <?php }else{ ?>
                                                <a href="<?php echo base_url();?>stock-goods">
                                            <?php } ?>
												<img src="assets/images/ts/stock.png" style="width: 50px;"><h5>Stock Goods</h5></a>
			                                </li>
			                                <li class="col-sm-2 col-xs-6">
                                            <?php if(empty($this->session->userdata('tsuserid')) && $this->session->userdata('tsuserid') <= 0) { ?>
                                                <a href="javascript:login_message()">
                                            <?php }else{ ?>
                                                <a href="<?php echo base_url();?>community">
                                            <?php } ?>
			                                    <img src="assets/images/ts/CommMember.png " style="width: 50px; "><h5>Community</h5></a>
			                                </li>
											<li class="col-sm-2 col-xs-6 ">
                                                <?php if(empty($this->session->userdata('tsuserid')) && $this->session->userdata('tsuserid') <= 0) { ?>
                                                    <a href="javascript:login_message()">
                                                <?php }else{ ?>
                                                    <a href="<?php echo base_url();?>my-alert" data-toggle="modal" data-target=".bs-example-modal-lg">
                                                <?php } ?>
												<img src="assets/images/ts/Alerts1.png" style="width: 50px;"><h5>My Alerts</h5></a>
			                                </li>
                                    </ul>
                                </div>
                                <div class="reminder-div">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 myalert" style="padding-top: 30px; display: none;">
                                        <h4 style="color: #ccc; text-align: center;">TRD STATION ALERTS
								BOX</h4>
                                        <p class="text-center">
                                            <img src="assets/images/ts/Alerts1.png" style="display: inline-block">
                                        </p>
                                        <p class="text-center">You Have Received A New Alert</p>
                                        <p style="color: #FF3033; text-align: center;">Add Request</p>
                                    </div>
                                    <a href="#" class="menu-arrow"><img src="assets/images/ts/img0020.png"><img src="assets/images/ts/img0020.png"></a>
                                    <a href="#" class="menu-arrow2"><img src="assets/images/ts/img0020.png"><img src="assets/images/ts/img0020.png"></a>
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </nav>
       
        <!--my alert-->
        <div class="fixed-lock" id="main-page-lock">
            <div id="Layer46" style="position: fixed; text-align: center; left: 0; top: 0; right: 0; bottom: 0; z-index: 1265;">
                <div id="Layer46_Container" class="top4">
                    <div id="wb_Image58" class="top5">
                        <img src="<?php echo asset_url(); ?>images/img0162.png" id="Image58" alt="">
                    </div>
                    <div id="wb_Text84" class="top1">
                        <span class="top1font">THE BUSINESS</span>
                    </div>
                    <div class="container-fluid">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="inline"><a href="#"><span class="navtrd1">TRD</span><span class="navtrd3">STATION</span></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" class="navtrd4">GOOD LUCK</a></li>
                            <li class="displaydesktop"><a class="navtrd4">|</a></li>
                            <li><a data-toggle="modal" class="user1">Tang Lee</a></li>
                            <li class="dropdown ">
                                <a href="#"><img src="<?php echo asset_url(); ?>images/rseller2.png" id="Image24" alt="" class="img35">
   
                       </a>
                            </li>
                        </ul>
                    </div>
                    <div id="wb_Text85" class="top2">
                        <span class="top2font">STATION</span>
                    </div>
                    <div id="wb_Text86" class="top3">
                        <span class="top3font">A Real-Time Business Platform, Allows Worldwide Businessmen To Sell &  Buy, Offer & Request, And Much More..  <br>
			        </span>
                    </div>
                    <div id="Layer66" class="top7">
                        <div id="Layer66_Container" class="top8">
                            <div id="wb_CssMenu6" class="top11">
                                <ul>
                                    <li class="firstmain"><a class="withsubmenu" href="#" target="_self">Country</a>
                                        <ul>
                                            <li class="firstitem"><a href="#" target="_self">America</a></li>
                                            <li><a href="#" target="_self">Arbanyia</a></li>
                                            <li><a href="#" target="_self">Belguiam</a></li>
                                            <li><a href="#" target="_self">Billa&nbsp;Rose</a></li>
                                            <li class="lastitem"><a href="#" target="_self">Camiron</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <br>
                            </div>
                            <form name="SiteSearch3_form" id="SiteSearch3_form" accept-charset="UTF-8" onsubmit="return searchPage(features)">
                                <input type="text" id="SiteSearch3" class="top6" name="SiteSearch1" value="" placeholder="Type a product name to access the real-time station">
                            </form>
                            <div id="wb_Image57" class="top9">
                                <img src="<?php echo asset_url(); ?>images/img0204.png" id="Image57" alt="">
                            </div>
                            <input type="button" id="Button14" onclick="ShowObjectWithEffect('Layer46', 0, 'slideup', 500, 'swing');ShowObjectWithEffect('Layer2', 1, 'slidedown', 500, 'swing');return false;" name="Search" value="GO" class="top10">
                        </div>
                    </div>
                    <div id="wb_Text89" class="top15">
                    <span class="top15font"> High You Voice, Ask For Whatever ..</span></div>
                </div>
            </div>
            <script type="text/javascript">
            $(document).on('ready', function() {
                $(".center").slick({
                    infinite: false,
                    speed: 300,
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                        }
                    }, {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    }, {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }]
                });
            });

            $(document).ready(function() {
                var boxWidth = $(".open-div1").width();
                $(".menu-arrow").click(function() {
                    $(".reminder-div").animate({
                        width: boxWidth
                    });
                    $(".menu-arrow").hide();
                    $(".menu-arrow2").show();
                    $(".myalert").show();
                });
                $(".menu-arrow2").click(function() {
                    $(".reminder-div").animate({
                        width: 60
                    });
                    $(".menu-arrow").show();
                    $(".menu-arrow2").hide();
                    $(".myalert").hide();
                });
            });
            </script>
     
            <script>
            $(document).ready(function() {
                $("#SlideShow1").slideshow({
                    interval: 3000,
                    type: 'sequence',
                    effect: 'none',
                    direction: '',
                    pagination: false,
                    effectlength: 1000
                });
                $("#Layer32").stickylayer({
                    orientation: 9,
                    position: [0, 0],
                    delay: 300
                });
                $("#Layer35").stickylayer({
                    orientation: 9,
                    position: [0, 0],
                    delay: 300
                });
                $("#Layer145").stickylayer({
                    orientation: 9,
                    position: [0, 0],
                    delay: 300
                });
                var Carousel3Opts = {
                    delay: 4000,
                    duration: 500,
                    easing: 'easeInOutBounce',
                    mode: 'fade',
                    direction: '',
                    pagination: false,
                    start: 0
                };
                $("#Carousel3").carouseleffects(Carousel3Opts);
                $("#Carousel3_back a").click(function() {
                    $('#Carousel3').carouseleffects('prev');
                });
                $("#Carousel3_next a").click(function() {
                    $('#Carousel3').carouseleffects('next');
                });
                $("#Layer185").stickylayer({
                    orientation: 9,
                    position: [0, 0],
                    delay: 300
                });
                searchParseURL();
                var $autocomplete = $('<ul class="autocomplete"></ul>').hide().insertAfter('#SiteSearch4');
                var selectedItem = null;
                var setSelectedItem = function(item) {
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
                var populateSearchField = function() {
                    $('#SiteSearch4').val($autocomplete.find('li').eq(selectedItem).text());
                    setSelectedItem(null);
                };
                $('#SiteSearch4').attr('autocomplete', 'off').keyup(function(event) {
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
                                if (unique[j] == data[i]) continue o;
                            }
                            unique[unique.length] = data[i];
                        }

                        unique.sort();
                        if (keywordVal.length && unique.length) {
                            $autocomplete.empty();
                            var item = 0;
                            $.each(unique, function(index, term) {
                                term = term.toLowerCase();
                                if (term.indexOf(keywordVal) == 0) {
                                    $('<li></li>').text(term).data('item', item).appendTo($autocomplete).mouseover(function() {
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
                }).keypress(function(event) {
                    if (event.keyCode == 13 && selectedItem !== null) {
                        populateSearchField();
                        event.preventDefault();
                    }
                }).blur(function(event) {
                    setTimeout(function() {
                        setSelectedItem(null);
                    }, 250);
                });
                var jQueryToolTip2Opts = {
                    hide: true,
                    show: true,
                    content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Buyer has a current request,<br>Visit his Desksite to view and deal.</span>',
                    items: '#wb_Image2',
                    position: {
                        my: "right bottom",
                        at: "left top",
                        collision: "flipfit"
                    }
                };
                $("#wb_Image2").tooltip(jQueryToolTip2Opts);
                var jQueryToolTip3Opts = {
                    hide: true,
                    show: true,
                    content: '<span style="color:#696969;font-family:Arial;font-size:12px;">This buyer is an active..</span>',
                    items: '#wb_Image1',
                    position: {
                        my: "right bottom",
                        at: "left top",
                        collision: "flipfit"
                    }
                };
                $("#wb_Image1").tooltip(jQueryToolTip3Opts);
                var jQueryToolTip1Opts = {
                    hide: true,
                    show: true,
                    content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Buyer is a member <br>in your community</span>',
                    items: '#wb_Image10',
                    position: {
                        my: "right bottom",
                        at: "left top",
                        collision: "flipfit"
                    }
                };
                $("#wb_Image10").tooltip(jQueryToolTip1Opts);
                $("#Layer_buyer").stickylayer({
                    orientation: 9,
                    position: [0, 0],
                    delay: 0,
                    keepOriginalPos: true
                });
            });
    
        function login_message(){
            $("#Layer99 > #Layer99_Container > #wb_Text145 > #msg_cont").html("PLEASE LOGIN TO ACCESS MEMBER AREA.");
            ShowObject('Layer99', 1);
        }

            </script>
