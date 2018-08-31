					<?php 
					foreach($Company as $company){?>
					 
				            <p class="box1font2"><strong><?php echo $company['company_name']?> </strong></p>
				            	<img src="<?php echo asset_url().$company['business_logo']; ?>" id="Shape7" alt="" style="width:112px;height:116px;">
				            <p class="left style-font-1">Rank</p>
				            <div class="progress">
				                <div class="progress-bar orange1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $company['rank']; ?>%">
				                </div>
				            </div>
				            <p class="font121">%<?php echo $company['rank']; ?></p>
				            <div class="inline">
				                <p class="be2">Business Type : </p>
				                <p class="be1"> <?php echo " ".$company['sub_category'];?></p>
				            </div>
				            <p class="be2">Main Products :</p>
				            <p class="be1">  <?php echo substr($company['main_product'], 0, 150);?> </p>
				            <p class="be1"><hr style="margin: 5px 0px; height: 1px; border-top: 1px dotted #000;"/></p>
				            <div class="inline">
				                <p class="be2">Year of Establish: </p>
				                <p class="be1"> <?php echo " ".$company['year_of_registration'];?></p>
				            </div>
				            <div class="inline">
				                <p class="be2">Annual revenue: </p>
				                <p class="be1"> <?php echo $company['annual_trad_volume'];?></p>
				            </div>
				            <div class="inline">
				                <p class="be2">Employees : </p>
				                <p class="be1"> <?php echo " ".$company['total_no_of_emp'];?></p>
				            </div>
				            <?php 
				            $size = "";
				            if($company['company_size'] == 100) {
				            	$size = "Less Than 100 Square Meter";	
				            } else if($company['company_size'] == 500) {
				            	$size = "100 to 500 Square Meter";
			            	} else if($company['company_size'] == 1000) {
			            		$size = "501 to 1000 Square Meter";
		            		} else if($company['company_size'] == 2000) {
		            			$size = "1001 to 2000 Square Meter";
	            			} else if($company['company_size'] == 2100) {
	            				$size = "More Than 2000 Square Meter";
				            }
				            ?>
				            <div class="inline">
				                <p class="be2">Company Size : </p>
				                <p class="be1"><?php echo $size;?></p>
				            </div>
				            <?php 
				            $size = "N/A";
				            if($company['fact_size'] == 100) {
				            	$size = "Less Than 100 Square Meter";	
				            } else if($company['fact_size'] == 500) {
				            	$size = "100 to 500 Square Meter";
			            	} else if($company['fact_size'] == 1000) {
			            		$size = "501 to 1000 Square Meter";
		            		} else if($company['fact_size'] == 2000) {
		            			$size = "1001 to 2000 Square Meter";
	            			} else if($company['fact_size'] == 2100) {
	            				$size = "More Than 2000 Square Meter";
				            }
				            ?>
				            <div class="inline">
				                <p class="be2">Factory Size : </p>
				                <p class="be1"><?php echo $size;?></p>
				            </div>
				            <div class="inline">
				                <p class="be2">Production Lines : </p>
				                <p class="be1"><?php if(!empty($company['no_of_production_line'])) { echo $company['no_of_production_line'];} else { echo "N/A";}?></p>
				            </div>
				            <div class="">
				                <p class="be2">Main Market : 
				                <span class="be1">
				                <?php 
				                	foreach ($market_info as $key=>$market) {
				                		if($key > 0) {
				                			echo ", ";
				                		}
				                		echo $market['name'];
				                	}
				                ?>
				                </span>
				                </p>
				            </div>
				            <div class="inline">
				                <p class="be2">Nearest Ports : </p>
				                <p class="be1"><?php if(!empty($trade_info[0]['part1'])) { echo $trade_info[0]['part1'];} ?><?php if(!empty($trade_info[0]['part2'])) { echo ", ".$trade_info[0]['part2'];} ?><?php if(!empty($trade_info[0]['part3'])) { echo ", ".$trade_info[0]['part3'];} ?></p>
				            </div>
				            <p class="be2">R&D Capacity : 
				            <span class="be1"><?php foreach ($user_rnd as $row) { ?>
	  							<?php if($row['rnd_type_id'] == 4) { ?>
	  							<?php echo $company['rnd_capacity'];?>
	  							<?php } else { ?>
	  							<?php echo $row['name']?>&nbsp;
	  							<?php } ?>
	  							<?php } ?>
	  						</span>
		  					</p>
				            <!-- p class="be1"><hr style="margin: 5px 0px; height: 1px; border-top: 1px dotted #000;"/></p>
				            <div>
				            	<p class="be2">Contact Person : </p>
				                <p class="name"><?php echo $company['name'];?></p>
				                <img src="<?php echo asset_url().$company['profile_image']; ?>" id="Image63" alt="" class="img66">
			                </div-->
				      		<p class="be1"><hr style="margin: 5px 0px; height: 1px; border-top: 1px dotted #000;"/></p>
				    <div class="">
				        <div class="row">
					        <div class="col-sm-6 text-center">
					        	<div class="text-center"><span style="color:#1E90FF;font-family:Georgia;font-size:12px;"><strong>View</strong></span></div>
					        	<div class="count text-center"><?php echo $company['visit'];?></div>
					        </div>
					        <div class="col-sm-6 text-center">
					        	<div class="text-center"><span style="color:#1E90FF;font-family:Georgia;font-size:12px;"><strong>Like</strong></span></div>
					        	<div class="count text-center"><?php echo $company['likes'];?></div>
					        </div>
				        </div>
				    </div>
					<?php } ?>