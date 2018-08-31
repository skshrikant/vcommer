<style>

.wb_Image45
{
position: absolute; left: 865px; top: 0px; width: 28px; height: 28px; z-index: 82;
}
.wb_Image52{
	position: absolute; left: 905px; top: 0px; width: 28px; height: 28px; z-index: 83;
}
img.sm-img{
margin : 10px;
verical-align:middle;
}
.v-middle{
verical-align:middle;
}
.b-gray{
background:grey;
}
p.blue,h1.blue,h2.blue,h3.blue,h4.blue,h5.blue,h6.blue {
color: blue;
}
img.sm-image-border{
    border-style: solid;
    border-width: 1px;
    border-radius: 10px;
    text-align:center;
    padding:8px;
    width: 80px;
    margin-bottom: 4px;
    margin-top:4px;
}
.text-grey{
	color : #696969;
}
.available-colors{
    border: 2px solid #c1aeae;
    height: 20px;
    -moz-border-radius:75px;
    -webkit-border-radius: 75px;
    width: 20px;
    float: left;
    margin-right:10px;
}
.share-icons a{
	color:#fa5035;
	font-size:26px;
	font-weight:bold;
	float:left;
	margin-right:26px;
}
.share-icons a:hover{
	color:#999;
	font-size:26px;
	font-weight:bold;
	float:left;
	margin-right:26px; 
}
.like{
color: #fa5035;
font-size: 14px;
}
.main-image{
	width: 368px;
    height: 333px;
    border-radius:10px;
}
.product-braedcrumbs{
font-size:14px;
}
.heading{
margin : 20px;
}
.flyr-img{
	width:100%;
}

#body {
    clear: both;
    margin: 0 auto;
    max-width: 1140px;
}
.center{
text-align:center;
}
.product-box{
	height: 450px;
	padding: 4px;
	line-height: 20px;
	background-color: #FFFFFF;
    border: 1px #D3D3D3 solid;
}
.product-box a{
	color: #1E90FF;
    font-family: Arial;
    font-size: 16px;
}
.grey{
  text-size:18px;
  weight:500;
  color:grey; 
}
.price{
  text-size:20px;
  weight:500;
}
pre {
	background: transparent;
    border: 0px;
    color: #3C3C3C;
    font-family: Arial;
    font-size: 13px;
    border-radius: 0px;
}
</style>
	<div class="container">
		<?php if(count($productList) > 0) { ?>
		<div class="row" style="padding:25px 0px;margin:5px;">
			<div class="col-md-12 text-left"><span style="color:#3C3C3C;font-family:Arial;font-size:13px;"><?php  echo $productList[0]['mainproduct'];  ?></span></div>
			<div class="col-md-12 text-left" style="margin-left:20px;"><img src="<?php echo asset_url();?>images/page_location.png" id="Image102" alt="" style="width:16px;"> <span style="color:#4B4B4B;font-family:Arial;font-size:17px;"><strong><?php  echo $productList[0]['subproduct'];  ?></strong></span></div>
		</div>
		<div class="row center " style="margin:0px;">

			<?php
			foreach ($productList as $item) {?>
			<div class="col-md-4">
				<div class="panel panel-default product-box" style="height:430px;">
				    <div class="panel-body center">
				    	<div class="row">
				    		<h6><span style="color:#1E90FF;font-family:Arial;font-size:16px;"><?php echo $item['name']?></span></h6>
			    		</div>
				    	<div class="row" style="padding:0px 30px;">
					    	<div style="padding-bottom:15px;"><?php echo substr($item['about'],0,87);?> <?php if(strlen($item['about']) > 87) { ?>...<?php } ?></div>
					    	<a href="javascript:productDetail2(<?php echo $item['id'];?>,<?php echo $item['busi_id'];?>);"><img src="<?php echo asset_url().$item['main_image'];?>" width="300px" width="250px" class="img-responsive" /></a>
					    	<br>
				    		<div><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">USD</span>&nbsp;&nbsp; <span style="color:#3C3C3C;font-family:Arial;font-size:24px;"><?php echo $item['unit_price'];?></span></div>
		    				<div><span style="background-color:#FFFFFF;color:#3C3C3C;font-family:Arial;font-size:13px;">Min. Order: <?php echo $item['quantity'].' '.$item['unit'];?> </span></div>
		    				<div><span style="color:#3C3C3C;font-family:Arial;font-size:11px;">Likes</span> <img src="<?php echo asset_url();?>images/items_like0.png" id="Image31" alt="" style="width:26px;height:26px;"> <span style="color:#3C3C3C;font-family:Arial;font-size:11px;"><?php echo $item['likes'];?></span></div>
	    				</div>
			    	</div>
		    	</div>
		    </div>
			<?php }?>
		</div>
		<?php } else { ?>
			

			<div class="col-md-12">
				<div style="height:440px;">
				   <h4>Opps there are no products for this category.</h4>
		    	</div>
		    </div>

		<?php } ?>
	</div>
	

			<?php
			foreach ($productCompany as $cmpny) {?>

	<div id="Layer28" style="margin-top:80px;margin-left:85px;width:1580px">
		<div id="Layer89" style="width:1580px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
			<div id="Layer90" style="position:absolute;text-align:center;height:53px;z-index:190;background-color: #4B4B4B;">
				<div id="Layer90_Container" style="width:1200px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
					<div id="wb_Text76" style="position:absolute;left:444px;top:12px;width:415px;height:12px;z-index:188;text-align:left;">
					<span style="color:#FFFFFF;font-family:Georgia;font-size:9.3px;">All contents in this Desksite ( Images, Information, Videos ...etc) are a private property for </span></div>
					<div id="wb_Text131" style="position:absolute;left:582px;top:29px;width:102px;height:15px;z-index:189;text-align:left;">
						<span style="color:#FFFFFF;font-family:Arial;font-size:12px;"><?php echo $cmpny['company_name']; ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>

		<?php } ?>
	<br><br>
