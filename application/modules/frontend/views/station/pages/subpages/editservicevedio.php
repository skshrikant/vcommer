<form name="frmeditservicevedio" method="post" action="" enctype="multipart/form-data" id="frmeditservicevedio">
	<div class="panel-heading custom-panel-heading">
		<a href="javascript:deleteservicevedio();" class="btn btn-default btn-custom" id="personal_info_btn"  >
  		<img src="<?php echo asset_url();?>images/img1594.png" style="padding-right: 4px;height: 78%;" alt="">Delete</a>
  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer149', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
  	</div>
  	<div class="panel-body panel-body-custom" id="" style="padding-top: 15px;padding-left: 45px;">		
  		<div id="addproduct_div">
	  		<div class="row ">
		  		<div class="col-md-12">
		  			<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Manage Products Videos</span>
		  		</div>
		  	</div><br>
	  		<div class="row">
		  		<div class="col-md-12">
		  			<span style="color:#2D2D2D;font-family:Arial;font-size:16px;">You have total:</span>
		  			<span style="color:#F05539;font-family:Arial;font-size:21px;"><?php echo $totalvedio;?></span>
		  			<span style="color:#F05539;font-family:Arial;font-size:12px;">out of </span>
		  			<span style="color:#F05539;font-family:Arial;font-size:21px;"><?php echo $max_videos;?></span>
		  			<span style="color:#2D2D2D;font-family:Arial;font-size:16px;">Videos</span>
		  		</div>
		  	</div><br>
	  		<div class="row">
		  		<div class="col-md-12">
		  			<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Click on checkbox next to the required video to delete.</span>
		  		</div>
		  	</div><br><br>
		  	<input type="hidden" id="fileid" name="fileid" />
		  	<input type="file" style="display: none" name="vediofile" id="vediofile"  onchange="setBackground('vediofile',this,30);" />
		  <?php foreach ($multiproductvedio as $row) { ?>
		  <input type="hidden" value="<?php echo $row['id']; ?>" name="vedio_id"  id="vedio_id" />
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="col-md-5">
			  			<div class="col-md-1">
			  				<input type="checkbox" id="Checkbox125" name="chkvedio[]" value="<?php echo $row['id'];?>" >
			  			</div>
			  			<div class="col-md-4" id="wb_MediaPlayer1" >
								<video src="<?php echo asset_url().$row['vedio_file']?>" id="MediaPlayer1" style="width: 231%;" controls="controls"></video><br>
								<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Size : <?php echo $row['vedio_size']?></span>
								
								<a href="javascript:changevedio(<?php echo $row['id'];?>);"   id="changevedio"><span style="color:#1E90FF;font-family:Arial;font-size:12px;"><strong><u>Edit</u></strong></a></span>
			  			</div>
		  			</div>
		  			<div class="col-md-6">
			  				<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><strong>Video Title: </strong><?php echo $row['vedio_title'];?></span>
			  				<a href="javascript:edittitle(<?php echo $row['id'];?>);"><span style="color:#1E90FF;font-family:Arial;font-size:12px;"><strong><u>Edit</u></strong></span></a><br>
			  				<input type="text" class="form-control"  name="vediotitle-<?php echo $row['id']?>" Placeholder="Ex. The Best Of TV's Screens" id="vediotitle-<?php echo $row['id']?>"  style="display: none"/>
			  				<input type="button"  class="from-control" value="update"  onclick="changetitle(<?php echo $row['id'];?>);"  name="btntitle-<?php echo $row['id']?>" id="btntitle-<?php echo $row['id']?>"  style="display: none"/><br><br>
			  				<span style="color:#808080;font-family:Arial;font-size:11px;"><?php echo $row['vedio_description'];?></span>
			  				<a href="javascript:editdescription(<?php echo $row['id'];?>);" ><span style="color:#1E90FF;font-family:Arial;font-size:12px;"><strong><u>Edit</u></strong></a></span><br>
			  				<textarea rows="5" cols="42" name="description-<?php echo $row['id']?>" id="description-<?php echo $row['id']?>"  Placeholder="About this video" style="display: none"></textarea>
			  				<input type="button"  class="from-control" value="update"  onclick="changedescription(<?php echo$row['id'];?>);"  name="btndescription-<?php echo $row['id']?>" id="btndescription-<?php echo $row['id']?>"  style="display: none"/>
		  			</div>
		  		</div>
		  	</div><br><br>
		  <?php }?>
	  	</div>	
   </div>
 </form>
 
<script src="<?php echo asset_url();?>js/bootstrap-typeahead.min.js"></script>
<script>
function edittitle(id)
{
	document.getElementById('vediotitle-'+id).style.display = 'block';
	document.getElementById('btntitle-'+id).style.display = 'block';
}
function editdescription(id)
{
	document.getElementById('description-'+id).style.display = 'block';
	document.getElementById('btndescription-'+id).style.display = 'block';
	
}
function changetitle(id)
{
	var title = document.getElementById('vediotitle-'+id).value;
	$.post("<?php echo base_url();?>mystation/updatevediotitle",{id:id,'title':title},function(data){
		//alert(data.msg);
		openEditvedio();
 	},'json');
}
function changedescription(id)
{
	var description = document.getElementById('description-'+id).value;
	$.post("<?php echo base_url();?>mystation/updatevediodescription",{id:id,'description':description},function(data){
		//alert(data.msg);
		openEditvedio();
	},'json');
}
// $(function(){
//     $("#changevedio").unbind().on('click', function(e){
//         e.preventDefault();
//         $("#vediofile-:hidden").trigger('click');
//     });
// });
function changevedio(id)
{
	document.getElementById('fileid').value = id;
	$("#vediofile:hidden").trigger('click');
}
 function setBackground(id,input,size) {
	  	if (input.files && input.files[0]) {
	    	var reader = new FileReader();
	       	reader.onload = function (e) {
	       		var ext = input.files[0].name.split('.').pop();
	       		var file_size = parseInt(input.files[0].size);
	       		var filesizeinkb = (file_size/1024);
               	var kbsize = size*1024;
                if(ext == 'mp3' || ext == 'mp4') {
	                if(filesizeinkb > kbsize) {
	                	alert("Vedio size should be "+size+" MB max.");
	                    $('#'+id).val('');
	                } else {
	                	changeVedio();
	                }
                } else {
                	alert("Image should be MP3 or MP4.");
                    $('#'+id).val('');
                }
	      	}
	        reader.readAsDataURL(input.files[0]);
	   	}
	}

</script>
 
 
