					<table style="text-align:center;">
					<?php foreach($Contacts as $contact){?>
						<tr>
							<td class="col-md-5">
				                <img src="<?php echo asset_url().$contact['picture'];?>" id="Image74" width="184px;" alt="">
				            </td>
				            <td class="col-md-7">
				                <p class="s12"><strong><?php echo $contact['company_name']?> </strong></p>
				                <p class="s13" style="font-size:16px;margin-bottom: 0px;"><strong><?php echo $contact['name']?></strong></p>
				                <p class="s12"><?php echo $contact['position']?></p>
				                <p class="s13" style="margin-bottom: 0px;"><?php echo $contact['mobile_code'].$contact['mobile'];?></p>
				                <p class="s12"><?php echo $contact['email']; ?></p>
				                <p class="s14"><?php echo $contact['company_street'];?>, <?php echo $contact['company_city'];?>, <?php echo $contact['company_province'];?>, <?php echo $contact['company_country'];?></p>
				            </td>
				       	</tr>
					<?php } ?>
					</table>