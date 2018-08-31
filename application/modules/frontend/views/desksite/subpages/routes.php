	<?php foreach($Routes as $key=>$route){?>
		<div id="wb_Text17" style="text-align:left;padding-top:10px;">
			<span style="color:#1E90FF;font-family:Arial;font-size:12px;"><strong><u>ROUTE <?php echo ($key+1);?></u></strong></span>
		</div>
		<div id="wb_Text76" style="text-align:left;padding-top:5px;">
			<span style="color:#1E90FF;font-family:Arial;font-size:12px;">From <?php if($route['from_country'] != "Worldwide"){ echo $route['from_country'];}?></span>
		</div>
		<div id="wb_Text103" style="text-align:left;">
			<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php if($route['from_country'] != "Worldwide") { ?><?php echo $route['from_location'];?><?php } else {?>Worldwide<?php } ?></span>
		</div>
		<div id="wb_Text105" style="text-align:left;padding-top:5px;">
			<span style="color:#1E90FF;font-family:Arial;font-size:12px;">To <?php if($route['to_country'] != "Worldwide") { echo $route['to_location']; }?></span>
		</div>
		<div id="wb_Text107" style="text-align:left;">
			<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php if($route['to_country'] != "Worldwide") { ?><?php echo $route['to_location'];?><?php } else {?>Worldwide<?php } ?></span>
		</div>
		<hr>
<?php } ?>