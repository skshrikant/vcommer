<style>
.accordion {
    background-color: #FFFFFF;
    color: #444;
    cursor: pointer;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}
.accordion.active, div.accordion:hover {
    background-color: #C9DFF4;
}
div.panel1 { 
     padding: 0 18px; 
     background-color: white; 
     max-height: 0; 
     overflow: hidden; 
    transition: max-height 0.2s ease-out; 
} 
.fa {
 	color: red;
}
.myrow {
 	padding:2px;
}
.mypropic {
	border:1px solid #e1e1e1;
}
.imgdownload {
	padding:5px;
	text-decoration:none;
}
.imgdownload:hover {
	text-decoration:none;
}
</style>
<script src="<?php echo asset_url();?>js/bootstrap-typeahead.min.js"></script>

 
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
	  if($(this).find($(".fa")).hasClass('fa-caret-down')) 
      {
  		$(this).find($(".fa")).removeClass('fa-caret-down').addClass('fa-caret-up');
  		markAsread($(this).attr("data-id"));
      } else {
      	$(this).find($(".fa")).removeClass('fa-caret-up').addClass('fa-caret-down');
      }
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}

function replayoffer()
{
	var values = new Array();
    $.each($("input[name='chkinquiry']:checked"), function(){            
    	values.push($(this).val());
    });
	values = values.filter(v=>v!=null);
	if(values.length > 0 ) {
		 	
	} else {
		customAlert('Please select inquiry.');
	}
}
 function deleteinquiry()
 {
		var values = new Array();
		//$('#state option:contains("'+state.trim()+'")').prop('selected', true);
	    $.each($("input[name= 'chkinquiry']:checked"), function(){    
	    	values.push($(this).val());
	    });
		values = values.filter(v=>v!=null);
		if(values.length > 0 ) {
			 	//var productid = values[0];
				$.post("<?php echo base_url();?>mystation/deleteinquiry",{values:values},function(data) {
			 		customAlert(data.msg);
			 		openInquiry();
			 	},'json');
				
		} else {
			alert('Please select inquiry.');
		}
 }
 function pinquiry()
 {
	 var values = new Array();
		//$('#state option:contains("'+state.trim()+'")').prop('selected', true);
	    $.each($("input[name= 'chkinquiry']:checked"), function(){    
	    	values.push($(this).val());
	    });
		values = values.filter(v=>v!=null);
		if(values.length > 0 ) {
			 	//var productid = values[0];
				$.post("<?php echo base_url();?>mystation/pininquiry",{values:values},function(data) {
					customAlert(data.msg);
			 		openInquiry();
			 	},'json');
				
		} else {
			alert('Please select inquiry.');
		}
 }
 function unreadinquiry()
 {
	 var values = new Array();
		//$('#state option:contains("'+state.trim()+'")').prop('selected', true);
	    $.each($("input[name= 'chkinquiry']:checked"), function(){    
	    	values.push($(this).val());
	    });
		values = values.filter(v=>v!=null);
		if(values.length > 0 ) {
			 	//var productid = values[0];
				$.post("<?php echo base_url();?>mystation/unreadinquiry",{values:values},function(data) {
					customAlert(data.msg);
			 		openInquiry();
			 	},'json');
				
		} else {
			alert('Please select inquiry.');
		}
 }
function markAsread(id) {
	$.post("<?php echo base_url();?>mystation/readinquiry",{id: id},function(data) {
 		//remove read mark
		$(".markAsRead"+id).remove();
 	},'json');
}

 var inquiry = document.getElementById('totalinquiry').innerHTML ;
 var offer = document.getElementById('totaloffer').innerHTML ;
 var request = document.getElementById('totalrequest').innerHTML ;
 var order = document.getElementById('totalorder').innerHTML ;
 document.getElementById('totalalert').textContent = parseInt(inquiry) + parseInt(offer) + parseInt(request) +parseInt(order);

 $("#Checkbox148").change(function(){
	    if(this.checked){
	      $(".chkinquiry").each(function(){
	        this.checked=true;
	      })              
	    }else{
	      $(".chkinquiry").each(function(){
	        this.checked=false;
	      })              
	    }
	  });

	  $(".chkinquiry").click(function () {
	    if ($(this).is(":checked")){
	      var isAllChecked = 0;
	      $(".chkinquiry").each(function(){
	        if(!this.checked)
	           isAllChecked = 1;
	      })              
	      if(isAllChecked == 0){ $("#Checkbox148").prop("checked", true); }     
	    }else {
	      $("#Checkbox148").prop("checked", false);
	    }
	  });
</script>
<div id="ppp">
<form name="frmaddvedio" method="post" action=""  style="background-color: #C0C0C0;" enctype="multipart/form-data" id="frmaddvedio">
	<div class="panel-heading custom-panel-heading">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6" style="text-align: left; padding-top: 13px;">
					<span style="color:#A9A9A9;font-family:Georgia;font-size:19px;">Inquiries <?php echo count($inquiry);?></span> 
				</div>
				<div class="col-md-5">
<!--					<div class="col-md-4" style="width: 216px;">-->
						<span class="productCount" style="color:#A9A9A9;font-family:Arial;font-size:17px;">storage</span>
						<span style="color:#F05539;font-family:Arial;font-size:29px;margin-left:20px;"><?php echo $used; ?></span> 
						<span style="color:#F05539;font-family:Arial;font-size:29px;">MB</span> 
<!--					</div>-->
					
						<span class="sellerCount" style="color:#A9A9A9;font-family:Arial;font-size:17px;padding-left: 30px;">Remains <?php echo $remain; ?> MB</span>
					
				</div>
				<div class="col-md-1" style="text-align: right">
					<span class="pull-right-close" style="text-align: right"><a href="javascript:closeAlert();" class="btn-custom-close">X</a></span>
				</div>
			</div>
		</div>
  		
  	</div>
  	<div class="panel-body panel-body-custom" id="" style="padding-top: 15px;height:703px !important;">	
  		<div id="inquiry_div" >
  			<?php if($tscategory_id == 1 || $tscategory_id == 2) {?>
			<div class="row">
				<div class="col-md-10" >
						<div class="col-md-1" style="padding-left: 0px;" >
							<div style="background-color:#1e90ff;text-align:center;height: 28px; width: 40px;padding-top: 3px;">
								<input type="checkbox" id="Checkbox148" name="" value="on" >
							</div>
						</div>
						<div class="col-md-2" >
							<button type="button" style="color:white;background-color:#1e90ff;border:none;height: 28px; width: 140px;" onclick="javascript:inquiryreplay();" value="">Reply With Offer</button>
						</div>
						<div class="col-md-2">
							<button type="button" style="color:white;background-color:#1e90ff;border:none;height: 28px; width: 141px;"  onclick="javascript:deleteinquiry();" value="">Delete</button>
						</div>
						<div class="col-md-2" >
							<button type="button" style="color:white;background-color:#1e90ff;border:none;height: 28px; width: 140px;"  value="">Chat</button>
						</div>
						<div class="col-md-2" >
						<button type="button" style="color:white;background-color:#1e90ff;border:none;height: 28px; width: 141px;" onclick="javascript:unreadinquiry();"  value="">Marked as Unread</button>
						</div>
						<div class="col-md-2" >
							<button type="button" style="color:white;background-color:#1e90ff;border:none;height: 28px; width: 140px;"  onclick="javascript:pinquiry();" value="">Pin/Unpin</button>
						</div>
				</div>		
			</div>
			<?php } else { ?>
				<div class="row">
				<div class="col-md-10" >
						<div class="col-md-1" style="padding-left: 0px;" >
							<div style="background-color:#1e90ff;text-align:center;height: 28px; width: 40px;padding-top: 3px;">
								<input type="checkbox" id="Checkbox148" name="" value="on" >
							</div>
						</div>
						<div class="col-md-2">
							<button type="button" style="color:white;background-color:#1e90ff;border:none;height: 28px; width: 141px;"  onclick="javascript:deleteinquiry();" value="">Delete</button>
						</div>
						<div class="col-md-2" >
							<button type="button" style="color:white;background-color:#1e90ff;border:none;height: 28px; width: 140px;"  value="">Chat</button>
						</div>
						<div class="col-md-2" >
							<button type="button" style="color:white;background-color:#1e90ff;border:none;height: 28px; width: 141px;" onclick="javascript:unreadinquiry();"  value="">Marked as Unread</button>
						</div>
						<div class="col-md-2" >
							<button type="button" style="color:white;background-color:#1e90ff;border:none;height: 28px; width: 140px;"  onclick="javascript:pinquiry();" value="">Pin/Unpin</button>
						</div>
				</div>		
			</div>
			<?php } ?>
			<div style="padding-top:20px;">
			<?php $count=0; foreach ($inquiry as $row) { $count++;?>
				<div class="accordion" data-id="<?php echo $row['inqury_id'];?>">
					<div class="row myrow">
						<div class="col-md-12">
							<div class="col-md-1" style="padding-right: 0;padding-left: 12px;">
								<?php if($row['unreadmark'] == 0) { ?>
									<div class="markAsRead<?php echo $row['inqury_id'];?>" style="width:4px;height:36px;background-color: red;position: absolute;left: 1px;top: 1px;"></div>
								<?php } ?>	
								<input type="checkbox" id="chkinquiry" class="chkinquiry" name="chkinquiry" value="<?php echo $row['inqury_id'];?>" style="float: left;margin-right: 7px;">
								<img src="<?php echo asset_url().$row['profile_image'];?>" id="" alt="" style="width: 40px;border-radius: 50px;" class="mypropic">
							</div>
							<div class="col-md-3" style="padding:5px 0px;">
								<span style="color:#1E90FF;font-family:Arial;font-size:12px;"><strong><?php echo $row['company_name'];?></strong></span><br>
								<span style="color:#4B4B4B;font-family:Arial;font-size:11px;"><?php echo $row['name_prefix']."  ".$row['name'];?></span>
								<span style="color:#4B4B4B;font-family:Arial;font-size:11px;"><strong><?php echo $row['company_country'];?></strong>| <?php echo $row['company_province'];?></span>
							</div>
							<div class="col-md-1" style="padding-top: 12px;">
								<?php if($row['pin_unpin'] == 1) { ?>
									<img src="<?php echo asset_url();?>images/Pin-icon.png" id="" alt="" style="height: 22px;">
								<?php }?>	
							</div>
							<div class="col-md-3" style="padding:5px 3px;text-align: left">
								<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php echo $row['inquiry_subject'];?></span>
							</div>
							<div class="col-md-1" style="padding:5px 0px;">
								<span style="color:#1E90FF;font-family:Arial;font-size:13px;">View</span><br>
								&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i>
								
							</div>
							<div class="col-md-2" style="padding:5px">
								<span style="color:#1E90FF;font-family:Arial;font-size:13px;"><?php echo $row['inqury_type'];?></span>
							</div>
							<div class="col-md-1" style="padding:5px 0px;">
								<span style="color:#1E90FF;font-family:Arial;font-size:13px;"><?php echo date('l', strtotime($row['actual_date']));?><br><?php echo date("j M Y",strtotime($row['actual_date']));?></span>
							</div>
						</div>
					</div>
				</div>
				<div class="panel1">
					<div style="padding-top: 22px;padding-bottom:22px;">
<!--						<div>
                            <div id="wb_Shape2" style="position:absolute;left: 0px;top: 110px;width:67px;height:63px;z-index:19;">
                                <img src="" id="Shape2" alt="" style="width:67px;height:63px;border: 1px solid #e1e1e1;border-radius: 3px;">
                            </div>
                            <div id="wb_Text5" style="position:absolute;left: 85px;top: 115px;width:287px;height:17px;z-index:16;text-align:left;">
                                <span style="color:#3C3C3C;font-family:Arial;font-size:12px;">I'de like to inquire about</span>
                                <br>
                                <span style="color:#4B4B4B;font-family:Arial;font-size:16px;"><strong>Lady Pink sandals</strong></span>
                                <br>
                                <span style="color:#3C3C3C;font-family:Arial;font-size:12px;">item no.</span>
                                <span style="color:#4B4B4B;font-family:Arial;font-size:16px;"><strong>hh5200</strong></span>
                            </div>
					  		<?php echo $row['inquiry_body'];?>
					  	</div><br><br>-->
					  	<div style="text-align:center;">
					  		<?php if($row['attachment1'] != "") { ?>
						  		<a href="<?php echo asset_url().$row['attachment1'];?>" download="<?php echo basename(asset_url().$row['attachment1']);?>" class="imgdownload">
						  			<img src="<?php echo asset_url().getFileName($row['attachment1']);?>"  style="width:100px;height:100px;">
						  		</a>
					  		<?php } ?>	
					  		<?php if($row['attachment2'] != "") { ?>
					  			<a href="<?php echo asset_url().$row['attachment2'];?>" download="<?php echo basename(asset_url().$row['attachment2']);?>" class="imgdownload">
					  				<img src="<?php echo asset_url().getFileName($row['attachment2']);?>" style="width:100px;height:100px;">
					  			</a>
					  		<?php } ?>
					  		<?php if($row['attachment3'] != "") { ?>
					  			<a href="<?php echo asset_url().$row['attachment3'];?>" download="<?php echo basename(asset_url().$row['attachment3']);?>" class="imgdownload">	
					  				<img src="<?php echo asset_url().getFileName($row['attachment3']);?>" style="width:100px;height:100px;">
					  			</a>
					  		<?php } ?>
					  		<?php if($row['attachment4'] != "") { ?>	
					  			<a href="<?php echo asset_url().$row['attachment4'];?>" download="<?php echo basename(asset_url().$row['attachment4']);?>" class="imgdownload">
					  				<img  src="<?php echo asset_url().getFileName($row['attachment4']);?>" style="width:100px;height:100px;">
					  			</a>
					  		<?php } ?>	
					  	</div>
					  </div>	
				</div>
				<br>
			<?php } ?>
				</div>
   		</div>
   </div>
 </form>
 </div>
 <!--   <div id="Layer232" style="display;none">
<!--  <label>lll</label> -->
 
<!--  </div> -->