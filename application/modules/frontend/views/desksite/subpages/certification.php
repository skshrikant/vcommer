<link rel="stylesheet" href="<?php echo asset_url();?>js/prettyPhoto/css/prettyPhoto.css">
<script src="<?php echo asset_url();?>js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<style>
      ul.myudtalk {         
          padding:0 0 0 0;
          margin:0 0 0 0;
      }
      ul.myudtalk li {     
          list-style:none;
          margin-bottom:25px;           
      }
      ul.myudtalk li img {
          cursor: pointer;
      }
      .modal-body-certs {
          padding:5px !important;
      }
      .modal-content-certs {
          border-radius:0;
      }
      .modal-dialog-certs img {
          text-align:center;
          margin:0 auto;
          width: 100%;
      }
    .controls{          
        width:50px;
        display:block;
        font-size:11px;
        padding-top:8px;
        font-weight:bold;          
    }
    .next {
         float:right; 
         text-align:right; 
    }
    .next:hover { 
    background-color: #FF6347;
    color:white;
    }
    .previous:hover { 
    background-color: #FF6347;
    color:white;
    }
    .previous {
    background-color: #f1f1f1;
    color: black;
    
	}
.modal-dialog-certs {
  	max-width:500px;
  	padding-top: 90px;
}
@media screen and (min-width: 768px){
  	.modal-dialog-certs {
      	width:500px;
      	padding-top: 90px;
  	}          
}
@media screen and (max-width:1500px){
 	#ads {
      	display:none;
   	}
}
.card {
	background-color:#fff;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	transition: 0.3s;
	padding:10px;
}
.card:hover {
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
div.pp_overlay {
	z-index:12800 !important;
}
div.pp_pic_holder {
	z-index:12801 !important;
}
  </style>
<div class="row" style="margin:0px;padding-top:10px;">
<ul class="myudtalk text-left">
	<?php foreach ($licences as $key=>$image) { ?>
		<?php if(!empty($image['cert_image1'])) { ?>
      	<li class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          	<div class="card" id="<?php echo $key;?>">
           		<a href="<?php echo asset_url().$image['cert_image1'];?>" data-rel="prettyPhoto_SlideShow311[SlideShow311]" rel="prettyPhoto_SlideShow311[SlideShow311]">
               		<img class="img-responsive imageborderclass" src="<?php echo asset_url().$image['cert_image1'];?>" style="width: 180px;" />
              </a>
          	</div>
          	<div class="text-center" style="padding:5px;color:#3C3C3C;font-family:Arial;font-size:12px;"><?php echo $image['license']; ?></div>
     	</li>
     	<?php } ?>
     	<?php if(!empty($image['cert_image2'])) { ?>
      	<li class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          	<div class="card" id="<?php echo $key;?>">
           		<a href="<?php echo asset_url().$image['cert_image2'];?>" data-rel="prettyPhoto_SlideShow311[SlideShow311]" rel="prettyPhoto_SlideShow311[SlideShow311]">
               		<img class="img-responsive imageborderclass" src="<?php echo asset_url().$image['cert_image2'];?>" style="width: 180px;" />
               	</a>
          	</div>
          	<div class="text-center" style="padding:5px;color:#3C3C3C;font-family:Arial;font-size:12px;"><?php echo $image['license']; ?></div>
     	</li>
     	<?php } ?>
     	<?php if(!empty($image['cert_image3'])) { ?>
      	<li class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          	<div class="card" id="<?php echo $key;?>">
           		<a href="<?php echo asset_url().$image['cert_image3'];?>" data-rel="prettyPhoto_SlideShow311[SlideShow311]" rel="prettyPhoto_SlideShow311[SlideShow311]">
               		<img class="img-responsive imageborderclass" src="<?php echo asset_url().$image['cert_image3'];?>" style="width: 180px;" />
               	</a>
          	</div>
          	<div class="text-center" style="padding:5px;color:#3C3C3C;font-family:Arial;font-size:12px;"><?php echo $image['license']; ?></div>
     	</li>
     	<?php } ?>
     	<?php if(!empty($image['cert_image4'])) { ?>
      	<li class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          	<div class="card" id="<?php echo $key;?>">
           		<a href="<?php echo asset_url().$image['cert_image4'];?>" data-rel="prettyPhoto_SlideShow311[SlideShow311]" rel="prettyPhoto_SlideShow311[SlideShow311]">
               		<img class="img-responsive imageborderclass" src="<?php echo asset_url().$image['cert_image4'];?>" style="width: 180px;" />
               	</a>
          	</div>
          	<div class="text-center" style="padding:5px;color:#3C3C3C;font-family:Arial;font-size:12px;"><?php echo $image['license']; ?></div>
     	</li>
     	<?php } ?>
   	<?php } ?>
	<?php foreach ($Certificate as $key=>$image) { ?>
      	<li class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
          	<div class="card" id="<?php echo $key;?>">
           		<a href="<?php echo asset_url().$image['certificate_url'];?>" data-rel="prettyPhoto_SlideShow311[SlideShow311]" rel="prettyPhoto_SlideShow311[SlideShow311]">
               		<img class="img-responsive imageborderclass" src="<?php echo asset_url().$image['certificate_url'];?>" style="width: 180px;" />
               	</a>
          	</div>
          	<div class="text-center" style="padding:5px;color:#3C3C3C;font-family:Arial;font-size:12px;"><?php echo $image['certificate_name']; ?></div>
     	</li>
   	<?php } ?>
</ul>	
</div>				
<script type="text/javascript">
$("a[data-rel='prettyPhoto_SlideShow311[SlideShow311]']").attr('rel', 'prettyPhoto_SlideShow311[SlideShow311]');
$("a[rel^='prettyPhoto_SlideShow311']").prettyPhoto({theme:'facebook',social_tools:false});
</script>					 
