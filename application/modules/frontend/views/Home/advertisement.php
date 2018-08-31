<link href="<?php echo asset_url(); ?>css/station.css" rel="stylesheet">
<script src="<?php echo asset_url(); ?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo asset_url(); ?>js/wb.stickylayer.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-blind.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-bounce.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-clip.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-drop.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-explode.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fade.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fold.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-highlight.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-pulsate.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-scale.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-shake.min.js"></script>
<script src="<?php echo asset_url(); ?>js/wwb10.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-slide.min.js"></script>
<script>
$(document).ready(function()
{
   $("#Layer3").stickylayer({orientation: 1, position: [0, 232], delay: 350});
   $("#Layer97").stickylayer({orientation: 2, position: [0, 250], delay: 350});
   $("#Layer2").stickylayer({orientation: 1, position: [0, 250], delay: 350});
});
</script>
	<?php
	//print_r($bannerAds);
	foreach ($bannerAds as $banner) {?>
	<div id="Layer1" style="position: fixed; text-align: left; left: 0; top: 0; right: 0; bottom: 0; z-index: 26; background: url(<?php echo asset_url().$banner['main_banner']; ?>) no-repeat; background-size:cover; width:100% ">
		<div id="Layer3" style="position: absolute; text-align: right; visibility: hidden; left: 0px; top: 189px; width: 391px; height: 477px; z-index: 14;">
			<div id="Layer3_Container" style="width: 391px; position: relative; margin-left: auto; margin-right: 0; text-align: left;">
				<div id="Layer4" style="position: absolute; text-align: left; left: 58px; top: 18px; width: 297px; height: 391px; z-index: 4;">
					<div id="wb_Text335" style="position: absolute; left: 16px; top: 21px; width: 243px; height: 16px; z-index: 3; text-align: left;">
						<span style="color: #1E1E1E; font-family: Arial; font-size: 11px;"><?php echo $banner['content']; ?><br></span>
						<span style="color: #FFFFFF; font-family: Arial; font-size: 11px;"><br></span>
						<span style="color: #FFFFFF; font-family: Arial; font-size: 8px;"><br></span>
					</div>
				</div>
				<div id="wb_Image3" style="position: absolute; left: 333px; top: 7px; width: 35px; height: 35px; z-index: 5;">
					<a href="#" onclick="ShowObjectWithEffect('Layer3', 0, 'slideleft', 500, 'swing');return false;">
						<img src="<?php echo asset_url(); ?>images/close.png" id="Image3" alt=""></a>
				</div>
			</div>
		</div>
		<div id="Layer97" style="position: absolute; text-align: right; right: 0; top: 202px; width: 51px; height: 263px; z-index: 15;">
			<div id="Layer97_Container" style="width: 51px; position: relative; margin-left: auto; margin-right: 0; text-align: left;">
				<div id="RollOver6" style="position: absolute; left: 6px; top: 63px; overflow: hidden; width: 40px; height: 40px; z-index: 6">
					<a href="javascript:addToMyFavourite(<?php echo $banner['busi_id'];?>,8);"> 
						<img class="hover" alt="" title="Add to favorite" src="<?php echo asset_url(); ?>images/favoriteclick.png"> 
						<span>
							<img alt="" title="Add to favorite" src="<?php echo asset_url(); ?>images/addtofav.png">
						</span>
					</a>
				</div>
				<div id="RollOver1" style="position: absolute; left: 6px; top: 14px; overflow: hidden; width: 40px; height: 40px; z-index: 7">
					<a href="<?php echo base_url(); ?>/desksite/<?php echo $banner['busi_id'];?>" target="_blank"> 
						<img class="hover" alt="View Desksite" title="View Desksite" src="<?php echo asset_url(); ?>images/deskiste-blk.png">
						 <span>
						 	<img alt="View Desksite" title="View Desksite" src="<?php echo asset_url(); ?>images/deskiste-white.png">
					 	</span>
					</a>
				</div>
				<div id="RollOver2" style="position: absolute; left: 6px; top: 160px; overflow: hidden; width: 40px; height: 40px; z-index: 8">
					<a href=""> 
						<img class="hover" alt="Like This Ad" title="Like This Ad" src="<?php echo asset_url(); ?>images/like-blk.png"> 
						<span><img alt="Like This Ad" title="Like This Ad" src="<?php echo asset_url(); ?>images/likewhite.png"></span>
					</a>
				</div>
				<div id="RollOver3" style="position: absolute; left: 6px; top: 112px; overflow: hidden; width: 40px; height: 40px; z-index: 9">
					<a href="" target="_blank">
						 <img class="hover" alt="Live Chat " title="Live Chat " src="<?php echo asset_url(); ?>images/chaTBLACK.png"> <span>
						 <img alt="Live Chat " title="Live Chat " src="<?php echo asset_url(); ?>images/chatwhite.png"></span>
					</a>
				</div>
				<div id="RollOver4" style="position: absolute; left: 6px; top: 209px; overflow: hidden; width: 40px; height: 40px; z-index: 10">
					<a href=""> 
						<img class="hover" alt="Share This Ad" title="Share This Ad" src="<?php echo asset_url(); ?>images/shareblack.png"> <span>
						<img alt="Share This Ad" title="Share This Ad" src="<?php echo asset_url(); ?>images/share0.png"></span>
					</a>
				</div>
			</div>
		</div>
		<div id="Layer2" style="position: absolute; text-align: right; left: 0px; top: 207px; width: 55px; height: 180px; z-index: 16;">
			<div id="Layer2_Container" style="width: 55px; position: relative; margin-left: auto; margin-right: 0; text-align: left;">
				<div id="RollOver7" style="position: absolute; left: 9px; top: 68px; overflow: hidden; width: 40px; height: 40px; z-index: 11">
					<a href="javascript:viewCatalogueBook(<?php echo $banner['catalogue_id'];?>);"> 
						<img class="hover" alt="View V-Catalogue" title="View V-Catalogue" src="<?php echo asset_url(); ?>images/vacticonorange.png"> <span>
						<img alt="View V-Catalogue" title="View V-Catalogue" src="<?php echo asset_url(); ?>images/vacticonwhite.png"></span>
					</a>
				</div>
				<div id="wb_Image1"
					style="position: absolute; left: 9px; top: 18px; width: 40px; height: 40px; z-index: 12;">
					<a href="#" onclick="ShowObjectWithEffect('Layer3', 1, 'slideleft', 400, 'swing');return false;">
					<img src="<?php echo asset_url(); ?>images/about-this-ad.png" id="Image1" alt="About This Ad" title="About This Ad"></a>
				</div>
				<div id="wb_Image2" style="position: absolute; left: 9px; top: 118px; width: 40px; height: 40px; z-index: 13;">
					<a href="#" onclick="ShowObjectWithEffect('Layer58', 1, 'slideleft', 500, 'swing');" class="navigation2" >
						<img src="<?php echo asset_url(); ?>images/video-white.png" id="Image2" alt="" title="Watch video">
					</a>
				</div>
			</div>
		</div>
		<div id="Layer58" class="box1 s5" style="position: absolute; text-align: center; visibility: visible; left: 305px; top: 73px; width: 50%; height: 628px; z-index: 3847;" >
			   <div id=" Layer58_Container ">
				   <a href="# " onclick="ShowObjectWithEffect( 'Layer58', 0, 'slidedown', 300, 'swing');return false; "><br><br>
					<img src="<?php echo asset_url(); ?>images/closeround.png" id="Image135" alt="" class="imgre">
				    </a>
				    <div class="greybox center" id="post">
				        <div class="item active">
						<div class="row">
							<video src="<?php echo asset_url().$banner['vedio_file']; ?>" width="100%" id="MediaPlayer3" controls="controls">
							</video>
						</div>
						<div class="row">
							<p>
								<a href="#" class="style16" onclick="ShowObjectWithEffect('Layer46', 0, 'slideup', 500);ShowObjectWithEffect('Layer24', 1, 'slidedown', 500, 'swing');ShowObject('Layer_products', 0);ShowObjectWithEffect('Layer_details', 1, 'fade', 10, 'swing');return false;">
									<?php echo $banner['product_name']?>
								</a>
							</p>
						</div>
						<div class="row">
							<p class="c14">
								<?php echo substr($banner['description'],0,100); ?>
							</p>
						</div>
						<p class="c16">USD <?php echo " ".$banner['unit_price']; ?></p><span>
						<div class="row">
							<div class="col-md-6">
							<p class="c14">&nbsp; Min. Order: <?php echo $banner['quantity'].' '.$banner['unit'];?> </p></div>
							<div class="col-md-6">
								<p class="c14">&nbsp; Likes <i class="fa fa-thumbs-o"></i><?php echo $banner['video_likes'];?> </p>
							</div>
						</div>
						<div class="row  inline m1" >
							<a href="#" onclick="ShowObjectWithEffect('Layer46', 0, 'slideup', 500);ShowObjectWithEffect('Layer24', 1, 'slidedown', 500, 'swing');ShowObject('Layer_products', 0);ShowObjectWithEffect('Layer_details', 1, 'fade', 10, 'swing');return false;">
									<img src="<?php echo asset_url(); ?>images/view-detailsb.png" id="Image136" alt="" width="35px">
								</a> 
							<a href="javascript:popupwnd('./likes_blogs.php','no','no','no','no','no','no','750','50','380','750')"target="_self"> 
								<img class="hover" alt="" src="<?php echo asset_url(); ?>images/like-videoa.png" width="35px"> 
								<!-- <span><img alt="" src="<?php echo asset_url(); ?>images/like-videob.png" width="35px"></span>  -->
							</a>
						</div>
					</div>
				    </div>
				</div>
			</div>
		</div>
		
	<?php }?>

<div id="vcatalogue_overlay" class="modal fade" style="background-color:#404040;z-index:5051;">
	<div class="modal-dialog" style="background-color:#404040;width:990px;">
		<div class="modal-content" style="background: transparent;box-shadow:none;-webkit-box-shadow:none;border: 0px;">
				<div class="modal-header" style="border:0px;">
					<button type="button" class="close catalogue_modal_close" data-dismiss="modal" aria-hidden="true">x</button>
				</div>
				<div class="modal-body catalogue_modal_body" style="width:960px;height:603px;">
					<input type="hidden" id="pcatalogue_id" value="" />
					<div class="row">
						<div class="col-md-10">
							<div id="catalogue_page_content_inner" class="catalogue_outer_body">
							</div>
						</div>
						<div class="col-md-2 " style="float:left">
							<ul class="share pull-right">
								<li class="share-button"><a href=""><i class="fa fa-thumbs-up" aria-hidden="true">&nbsp;</i></a></li>
								<li class="share-button"><a href=""><i class="fa fa-comments" aria-hidden="true">&nbsp;</i></a></li>
								<li class="share-button"><a href=""><i class="fa fa-share-alt" aria-hidden="true">&nbsp;</i></a></li>
							</ul>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>
	<script type="text/javascript">
 
    $(document).on('ready', function() {
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
    
    $(document).ready(function(){
        var boxWidth = $(".open-div1").width();
        $(".menu-arrow").click(function(){
            $(".reminder-div").animate({
                width: boxWidth
            });
            $(".menu-arrow").hide();
            $(".menu-arrow2").show();
            $(".myalert").show();
        });
         $(".menu-arrow2").click(function(){
            $(".reminder-div").animate({
                width:60
            });
            $(".menu-arrow").show();
            $(".menu-arrow2").hide();
            $(".myalert").hide();
        });
    });
    
$(document).ready(function()
{
   $("#SlideShow1").slideshow(
   {
      interval: 3000,
      type: 'sequence',
      effect: 'none',
      direction: '',
      pagination: false,
      effectlength: 1000
   });
   $("#Layer32").stickylayer({orientation: 9, position: [0, 0], delay: 300});
   $("#Layer35").stickylayer({orientation: 9, position: [0, 0], delay: 300});
   $("#Layer145").stickylayer({orientation: 9, position: [0, 0], delay: 300});
   var Carousel3Opts =
   {
      delay: 4000,
      duration: 500,
      easing: 'easeInOutBounce',
      mode: 'fade',
      direction: '',
      pagination: false,
      start: 0
   };
   $("#Carousel3").carouseleffects(Carousel3Opts);
   $("#Carousel3_back a").click(function()
   {
      $('#Carousel3').carouseleffects('prev');
   });
   $("#Carousel3_next a").click(function()
   {
      $('#Carousel3').carouseleffects('next');
   });
   $("#Layer185").stickylayer({orientation: 9, position: [0, 0], delay: 300});
   //searchParseURL();
   var $autocomplete = $('<ul class="autocomplete"></ul>').hide().insertAfter('#SiteSearch4');
   var selectedItem = null;
   var setSelectedItem = function(item)
   {
      selectedItem = item;
      if (selectedItem === null)
      {
         $autocomplete.hide();
         return;
      }
      if (selectedItem < 0)
      {
         selectedItem = 0;
      }
      if (selectedItem >= $autocomplete.find('li').length)
      {
         selectedItem = $autocomplete.find('li').length - 1;
      }
      $autocomplete.find('li').removeClass('selected').eq(selectedItem).addClass('selected');
      $autocomplete.css('left', $('#SiteSearch4').position().left);
      $autocomplete.css('top', $('#SiteSearch4').position().top + $('#SiteSearch4').outerHeight());
      $autocomplete.show();
   };
   var populateSearchField = function()
   {
      $('#SiteSearch4').val($autocomplete.find('li').eq(selectedItem).text());
      setSelectedItem(null);
   };
   $('#SiteSearch4').attr('autocomplete', 'off').keyup(function(event)
   {
      if (event.keyCode > 40 || event.keyCode == 8)
      {
         var data = new Array();
         var keywordVal = $('#SiteSearch4').val();
         keywordVal = keywordVal.toLowerCase();
         for (i=0; i<database_length; i++)
         {
            var words = (searchDatabase[i].title + " " + searchDatabase[i].description + " " + searchDatabase[i].keywords).toLowerCase();
            var array = words.split(" ");
            data = $.merge(data, array);
         }

         var unique = new Array();
         o:for(var i = 0; i < data.length; i++)
         {
            for(var j = 0; j < unique.length; j++)
            {
               if(unique[j]==data[i]) continue o;
            }
            unique[unique.length] = data[i];
         }

         unique.sort();
         if (keywordVal.length && unique.length)
         {
            $autocomplete.empty();
            var item = 0;
            $.each(unique, function(index, term)
            {
               term = term.toLowerCase();
               if (term.indexOf(keywordVal) == 0)
               {
                  $('<li></li>').text(term).data('item', item).appendTo($autocomplete).mouseover(function()
                  {
                     var item = $(this).data('item');
                     setSelectedItem(item);
                  }).click(populateSearchField);
                  item++;
               }
            });
            setSelectedItem(0);
         }
         else
         {
            setSelectedItem(null);
         }
      }
      else
      if (event.keyCode == 38 && selectedItem !== null)
      {
         setSelectedItem(selectedItem - 1);
         event.preventDefault();
      }
      else
      if (event.keyCode == 40 && selectedItem !== null)
      {
         setSelectedItem(selectedItem + 1);
         event.preventDefault();
      }
      else
      if (event.keyCode == 27 && selectedItem !== null)
      {
         setSelectedItem(null);
      }
   }).keypress(function(event)
   {
      if (event.keyCode == 13 && selectedItem !== null)
      {
         populateSearchField();
         event.preventDefault();
      }
   }).blur(function(event)
   {
      setTimeout(function()
      {
         setSelectedItem(null);
      }, 250);
   });
   var jQueryToolTip2Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Buyer has a current request,<br>Visit his Desksite to view and deal.</span>',
      items: '#wb_Image2',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image2").tooltip(jQueryToolTip2Opts);
   var jQueryToolTip3Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">This buyer is an active..</span>',
      items: '#wb_Image1',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image1").tooltip(jQueryToolTip3Opts);
   var jQueryToolTip1Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Buyer is a member <br>in your community</span>',
      items: '#wb_Image10',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image10").tooltip(jQueryToolTip1Opts);
   $("#Layer_buyer").stickylayer({orientation: 9, position: [0, 0], delay: 0, keepOriginalPos: true});
});
function viewCatalogueBook(id) {
	$.get(base_url+"catalogue/popup/"+id,{},function(data){
		$("#catalogue_page_content_inner").html(data);
		$("#pcatalogue_id").val(id);
		$("#vcatalogue_overlay").modal('show');
		var $mybook 		= $('#mybook');
		var $bttn_next		= $('#next_page_button');
		var $bttn_prev		= $('#prev_page_button');
		var $loading		= $('#loading');
		var $mybook_images	= $mybook.find('img');
		var cnt_images		= $mybook_images.length;
		var loaded			= 0;
		//preload all the images in the book,
		//and then call the booklet plugin
		$mybook_images.each(function(){
			var $img 	= $(this);
			var source	= $img.attr('src');
			$('<img/>').load(function(){
				++loaded;
				if(loaded == cnt_images){
					$loading.hide();
					$bttn_next.show();
					$bttn_prev.show();
					$mybook.show().booklet({
						name:               null,                            // name of the booklet to display in the document title bar
						width:              740,                             // container width
						height:             450,                             // container height
						speed:              600,                             // speed of the transition between pages
						direction:          'LTR',                           // direction of the overall content organization, default LTR, left to right, can be RTL for languages which read right to left
						startingPage:       0,                               // index of the first page to be displayed
						easing:             'easeInOutQuad',                 // easing method for complete transition
						easeIn:             'easeInQuad',                    // easing method for first half of transition
						easeOut:            'easeOutQuad',                   // easing method for second half of transition

						closed:             false,                           // start with the book "closed", will add empty pages to beginning and end of book
						closedFrontTitle:   null,                            // used with "closed", "menu" and "pageSelector", determines title of blank starting page
						closedFrontChapter: null,                            // used with "closed", "menu" and "chapterSelector", determines chapter name of blank starting page
						closedBackTitle:    null,                            // used with "closed", "menu" and "pageSelector", determines chapter name of blank ending page
						closedBackChapter:  null,                            // used with "closed", "menu" and "chapterSelector", determines chapter name of blank ending page
						covers:             false,                           // used with  "closed", makes first and last pages into covers, without page numbers (if enabled)

						pagePadding:        10,                              // padding for each page wrapper
						pageNumbers:        false,                            // display page numbers on each page

						hovers:             false,                            // enables preview pageturn hover animation, shows a small preview of previous or next page on hover
						overlays:           false,                            // enables navigation using a page sized overlay, when enabled links inside the content will not be clickable
						tabs:               false,                           // adds tabs along the top of the pages
						tabWidth:           60,                              // set the width of the tabs
						tabHeight:          20,                              // set the height of the tabs
						arrows:             true,                           // adds arrows overlayed over the book edges
						cursor:             'pointer',                       // cursor css setting for side bar areas

						hash:               false,                           // enables navigation using a hash string, ex: #/page/1 for page 1, will affect all booklets with 'hash' enabled
						keyboard:           true,                            // enables navigation with arrow keys (left: previous, right: next)
						next:               $bttn_next,          			// selector for element to use as click trigger for next page
						prev:               $bttn_prev,          			// selector for element to use as click trigger for previous page

						menu:               null,                            // selector for element to use as the menu area, required for 'pageSelector'
						pageSelector:       false,                           // enables navigation with a dropdown menu of pages, requires 'menu'
						chapterSelector:    false,                           // enables navigation with a dropdown menu of chapters, determined by the "rel" attribute, requires 'menu'

						shadows:            true,                            // display shadows on page animations
						shadowTopFwdWidth:  166,                             // shadow width for top forward anim
						shadowTopBackWidth: 166,                             // shadow width for top back anim
						shadowBtmWidth:     50,                              // shadow width for bottom shadow

						before:             function(){},                    // callback invoked before each page turn animation
						after:              function(){}                     // callback invoked after each page turn animation
					});
					//Cufon.refresh();
				}
			}).attr('src',source);
		});
	},'html');
}

function addToMyFavourite(fav_id,type) {
	$.get(base_url+"addtofavourite/"+fav_id+"/"+type,{},function(data) {
		alert(data.msg);
	},'json');
}
</script>	