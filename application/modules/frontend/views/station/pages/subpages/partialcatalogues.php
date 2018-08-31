<div class="row">
<?php foreach ($catalogues as $catalogue) { ?>
  		<div class="col-md-12">
  			<div class="col-sm-12">
	  			<div class="col-sm-2" style="padding-top: 25px;">
  				<input type="radio" id="catalogue_ads_id" name="catalogue_ads_id" value="<?php echo $catalogue['id'];?>" />
  			</div>
  			<div class="col-sm-5" style="width: 161px;height: 180px;padding-top: 90px;padding-left: 40px;background-image:url('<?php echo asset_url();?>images/vCAT2.png');background-size:cover;" >
  				<img src="<?php echo asset_url();?><?php echo $catalogue['catalogue_cover'];?>" style="width:60px;border-radius:50%;padding-bottom:5px;margin-left: 15px;"><br>
  				<span style="background-color:#F05539;color:#FFFFFF;font-family:Georgia;font-size:13px;"><strong><?php echo $catalogue['catalogue_title'];?> </strong></span>
  			</div>
  			<div class="col-sm-4"  style="padding-top: 25px;">
  				<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Created on: <?php echo date('M Y',strtotime($catalogue['created_date']));?></span><br>
  				<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Pages: <?php echo $catalogue['pages'];?></span><br>
  				<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Viewed: <?php echo $catalogue['views'];?> times</span><br>
  				<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Likes: <?php echo $catalogue['likes'];?></span><br><br>
  				<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong><!-- a href="javascript:viewCatalogueBook(<?php echo $catalogue['id'];?>);" class="style23">View</a--></strong></span>
	  			</div>
		  	</div>		
  		</div>
	<?php } ?>
</div>