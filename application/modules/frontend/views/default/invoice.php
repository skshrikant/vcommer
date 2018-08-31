<table style="width:500px; height:auto; margin:50px auto; border:1px solid #aaa;" cellpadding="0" cellspacing="0">
<tr>
<td>
<img src="<?php echo asset_url();?>images/invoice-header.png">
</td>
</tr>
<tr>
<td>
 <table>
 <tr>
 <td style="padding:10px 50px;"><img src="<?php echo asset_url();?>images/vlogo.png" style="position: relative; top: 10px; margin-right:10px;"><span style="color:#FF6347;font-family:Impact;font-size:21px;">V</span><span style="color:#3C3C3C;font-family:Impact;font-size:21px;">Commers</span></td>
 <td style="padding-left:100px; padding-top:20px;">
 <span style="color:#3C3C3C;font-family:Arial;font-size:13px;">Bill To:<br><strong><?php echo $invoice['uname'];?><br></strong><?php echo $invoice['company_name'];?><br><?php echo $invoice['company_country'];?><br><?php echo $invoice['telephone_number'];?></span><br><br>
 <span style="color:#3C3C3C;font-family:Arial;font-size:13px;"><strong>Invoice Number : <?php echo $invoice['invoice_id'];?><br></strong></span>
 </td>
 </tr>
 </table>
</td>
</tr>
<tr>
<td style="padding:50px 50px;">
  <span style="color:#3C3C3C;font-family:Impact;font-size:35px;"><strong>Thanks for your order<br><?php echo $invoice['uname'];?><br></strong></span>
</td>
</tr>
<tr>
<td style="padding:0px 50px;">
  <span style="color:#000000;font-family:Arial;font-size:13px;">Here's invoice details for order number <?php echo $invoice['invoice_id'];?>. Review your receipt and get started<br> using your products.</span>
</td>
</tr>
<tr>
<td style="padding:50px 50px 0px;">
 <hr style="height:2px; width:100%; background:#FF6347; border:0px;">
</td>
</tr>
<tr>
 <td style="padding:10px 50px 20px;"><img src="<?php echo asset_url();?>images/black-horse.png" style="position: relative; top: 10px; margin-right:10px; width:50px"><span style="color:#3C3C3C;font-family:Impact;font-size:19px;letter-spacing:0.07px;">VCommers Membership Subscription </span></td>
</tr>
<tr>
<td style="padding-left:120px; padding-bottom:50px;">
<span style="color:#000000;font-family:Arial;font-size:13px;">1 Subscription ( <?php echo $invoice['ucategory'];?> | <?php echo $invoice['usubcategory'];?> )</span><br>
<span style="color:#000000;font-family:Arial;font-size:13px;">Black Horse Membership</span><br>
<span style="color:#000000;font-family:Arial;font-size:13px;"><?php echo $invoice['plan_name'];?> Plan</span><br>
<span style="color:#000000;font-family:Arial;font-size:13px;">12 Months | 366 Days</span><br>
<span style="color:#000000;font-family:Arial;font-size:13px;">Starting On <?php echo $invoice['starting_on'];?></span>


</td>
</tr>
<tr>
<td style="padding:10px 50px;">
 <div style="border-bottom:1px solid #ddd; border-top:1px solid #ddd; height:40px; line-height:40px; text-align:right;">
 <span style="color:#2D2D2D;font-family:Arial;font-size:17px;">Total amount</span>
 <span style="color:#FFFFFF;font-family:Arial;font-size:16px; display:inline-block; height:38px; padding:0 20px; background:#FF6347; margin-top:1px;"><strong>USD <?php echo $invoice['amount'];?>.00</strong></span>
 </div>
</td>
</tr>
<tr>
<td style="padding:10px 50px 150px;">
<span style="color:#000000;font-family:Arial;font-size:13px;">Thanks for using vCommers<br></span>
</td>
</tr>
</table>
