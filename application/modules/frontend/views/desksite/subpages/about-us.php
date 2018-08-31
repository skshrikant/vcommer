<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
#Image6
{
   border: 0px #000000 solid;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
}
#Image7
{
   border: 0px #000000 solid;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
}
#Image8
{
   border: 0px #000000 solid;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
}
#Image9
{
   border: 0px #000000 solid;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
}
#Carousel2
{
   position: absolute;
}
#wb_Carousel2
{
   background-color: transparent;
}
#Carousel2 .frame
{
   width: 455px;
   display: inline-block;
   float: left;
   height: 357px;
}
#wb_Carousel2 .pagination
{
   bottom: 0;
   left: 0;
   position: absolute;
   text-align: center;
   vertical-align: middle;
   width: 100%;
   z-index: 999;
}
#wb_Carousel2 .pagination img
{
   border-style: none;
   padding: 5px 5px 5px 5px;
}
#wb_Image6
{
   position: absolute;
   left: 0px;
   top: 5px;
   width: 455px;
   height: 320px;
   z-index: 55;
}
#wb_Carousel2
{
   position: absolute;
   width: 455px;
   height: 370px;
   z-index: 60;
   overflow: hidden;
   left:5px;
}
#wb_Image7
{
   position: absolute;
   left: 455px;
   top: 5px;
   width: 455px;
   height: 320px;
   z-index: 56;
}
#wb_Image8
{
   position: absolute;
   left: 910px;
   top: 5px;
   width: 455px;
   height: 320px;
   z-index: 57;
}
#wb_Image9
{
   position: absolute;
   left: 1365px;
   top: 5px;
   width: 455px;
   height: 320px;
   z-index: 58;
}
#wb_Shape7
{
   position: absolute;
   left: 5px;
   width: 72px;
   height: 60px;
   z-index: 61;
}
#Shape7
{
   width: 72px;
   height: 60px;
   border-width:0;
}
</style>
<div style="height: 540px;width: 470px;overflow-y:scroll;overflow-x:hidden;position: absolute;left:15px;">
<?php foreach($Company as $company){?>
	<div id="wb_Carousel2">
		<div id="Carousel2">
			<div class="frame">
				<div id="wb_Image6">
				<img src="<?php echo asset_url().$company['company_info_img1']; ?>" id="Image6" alt=""></div>
				</div>
			<div class="frame">
				<div id="wb_Image7">
				<img src="<?php echo asset_url().$company['company_info_img2']; ?>" id="Image7" alt=""></div>
				</div>
			<div class="frame">
				<div id="wb_Image8">
				<img src="<?php echo asset_url().$company['company_info_img3']; ?>" id="Image8" alt=""></div>
				</div>
			<div class="frame">
				<div id="wb_Image9">
				<img src="<?php echo asset_url().$company['company_info_img4']; ?>" id="Image9" alt=""></div>
			</div>
		</div>
	</div>
	<!-- div id="wb_Shape7">
		<img src="<?php echo asset_url();?><?php echo $company['business_logo'];?>" id="Shape7" alt="">
	</div-->
	<div class="row" style="margin:0px;">
	    <div class="be2" style="position:absolute;top:360px;width:465px;padding:15px 15px;">
	    	<?php echo $company['company_introduction'];?>
	    		<br>
	    </div>
    </div>
    <br>
<?php } ?>
</div>
<script>
$(document).ready(function(){
    //$("#myCarouselAbout").carousel();

	var Carousel2Opts =
   	{
      	delay: 3000,
      	duration: 500,
      	easing: 'swing',
      	mode: 'forward',
      	direction: '',
      	scalemode: 2,
      	pagination: true,
      	pagination_img_default: '<?php echo asset_url();?>images/page_default.png',
      	pagination_img_active: '<?php echo asset_url();?>images/page_active.png',
      	start: 0
   	};
   	$("#Carousel2").carousel(Carousel2Opts);
});
</script>