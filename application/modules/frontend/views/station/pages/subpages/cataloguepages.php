<style>
.b-wrap {
	background:#fff !important;
}
</style>
<div class="book_wrapper">
	<div id="loading" class="loading">Loading pages...</div>
	<div id="mybook" style="display:none;">
		<div class="b-load row">
<?php foreach ($products as $key=>$product) { ?>
	<div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-14 catalogue_page_item_name">
					<strong>
						<a href="<?php echo base_url();?>deskdetails/<?php echo $product['id'];?>" target="_blank"  style="color: #337ab7"><?php echo $product['name'];?></a>
					</strong>
				</div>
				<div class="col-sm-14 catalogue_page_item_details">
					<?php echo substr($product['description'],0,160);?>
				</div>
				<div class="col-sm-14 catalogue_page_item_quantity">
					Min. Order: <?php echo $product['quantity'];?> <?php echo $product['unit'];?>
				</div>
				<div class="col-sm-14 catalogue_page_item_price_div">
					<span class="catalogue_page_item_price">USD <?php echo $product['unit_price'];?> / <?php echo $product['unit'];?></span>
				</div>
				<br/>
				<div class="col-sm-14 catalogue_page_item_mimg">
					<a href="<?php echo base_url();?>deskdetails/<?php echo $product['id'];?>" target="_blank">
						<img alt="<?php echo $product['name'];?>" src="<?php echo asset_url();?><?php echo $product['main_image'];?>" class="catalogue_main_img"/>
					</a>
				</div>
				<div class="col-sm-14 catalogue_page_left_num">
					<div class="pull-right">
						<span class="catalogue_page_no_text">Page</span>
						<span class="catalogue_page_no_num"><?php echo ($key*2+1);?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-12 catalogue_page_item_mimg">
					<a href="<?php echo base_url();?>deskdetails/<?php echo $product['id'];?>" target="_blank">
						<img alt="<?php echo $product['name'];?>" src="<?php echo asset_url();?><?php echo $product['sub_image1'];?>" class="catalogue_main_img">
					</a>
				</div>
				<div class="col-sm-6 catalogue_page_item_mimg-sm" style="margin-right: 5px;">
					<a href="<?php echo base_url();?>deskdetails/<?php echo $product['id'];?>" target="_blank">
						<img alt="<?php echo $product['name'];?>" src="<?php echo asset_url();?><?php echo $product['sub_image2'];?>" class="catalogue_sub_img">
					</a>
				</div>
				<div class="col-sm-6 catalogue_page_item_mimg-sm">
					<a href="<?php echo base_url();?>deskdetails/<?php echo $product['id'];?>" target="_blank">
						<img alt="<?php echo $product['name'];?>" src="<?php echo asset_url();?><?php echo $product['sub_image3'];?>" class="catalogue_sub_img">
					</a>
				</div><br/>
				<div class="col-sm-12 catalogue_page_right_num">
					<div class="pull-left">
						<span class="catalogue_page_no_text">Page</span>
						<span class="catalogue_page_no_num"><?php echo ($key*2+2);?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
</div></div></div>
<link href="<?php echo asset_url();?>css/jquery.booklet.1.1.0.css?1.1" rel="stylesheet">
<script src="<?php echo asset_url();?>js/jquery.booklet.1.1.0.min.js?1.1"></script>
<script src="<?php echo asset_url();?>js/jquery.easing.1.3.js?1.1"></script>
<script type="text/javascript">
			$(function() {
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
								arrows:             false,                           // adds arrows overlayed over the book edges
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
				
			});
        </script>