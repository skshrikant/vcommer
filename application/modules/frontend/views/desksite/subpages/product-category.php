          <ul>
          <?php 
          	foreach($productCategories as $mainCategory) { 
          ?>
           	<li class="firstmain">
           		<a class="<?php if(count($mainCategory['subproducts']) > 0) {?>withsubmenu<?php }?>" href= "javascript:viewCatProducts(0,0,<?php echo $mainCategory['id'];?>,<?php echo $mainCategory['busi_id'];?>);" target="_self"><?php echo $mainCategory['name']; ?></a>
              	<ul style="margin-left:-18px;">
              		<?php foreach($mainCategory['subproducts'] as $subproduct){ ?>
                   	  <li class="firstitem">
                       	<a href="javascript:viewCatProducts(0,<?php echo $subproduct['id'];?>,0,<?php echo $mainCategory['busi_id'];?>);" target="_self"><?php echo $subproduct['name'];?></a>
                      </li>
                  <?php } ?>
               	</ul>
             	</li>
          <?php 
          	} 
          ?>
             	<li>
             		<a href="javascript:viewSCatProducts(<?php echo $mybid;?>,1);" target="_self">New&nbsp;Arrivals</a>
             	</li>
            	<li>
            		<a href="javascript:viewSCatProducts(<?php echo $mybid;?>,2);" target="_self">Hot&nbsp;Sales</a>
            	</li>
          </ul>