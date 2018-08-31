<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $template['title']; ?></title>
	<meta charset="utf-8">    
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">   
	<meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT"> 
	<link rel="shortcut icon" href="<?php echo asset_url();?>images/icons/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo asset_url();?>images/icons/favicon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo asset_url();?>images/icons/favicon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo asset_url();?>images/icons/favicon-114x114.png">

	
	<!--Loading bootstrap css-->
	<link type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,400,700,800">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/font-awesome.min.css">
    <?php $version = "v1.1";?>
	<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/bootstrap.min.css?<?php echo $version;?>">
    <link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/yellow-blue.css" id="theme-change" class="style-change color-change"> 
    <link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/datepicker3.css">
    <script src="<?php echo asset_url();?>js/jquery-1.10.2.min.js"></script>
 	<script src="<?php echo asset_url();?>js/jquery-migrate-1.2.1.min.js"></script>
 	<script type="text/javascript">
		var base_url = '<?php echo base_url(); ?>';
		var asset_url = '<?php echo asset_url();?>'; 
	</script>
	<style type="text/css">
		.bootstrap-timepicker-widget .glyphicon {
			color:#428bca;
		}
		
		.bootstrap-timepicker-widget {
		    background-color: #fff !important;
		    -webkit-background-clip: padding-box !important;
		    background-clip: padding-box !important;
		    border: 1px solid #ccc !important;
		    border: 1px solid rgba(0, 0, 0, .35) !important;
		    border-radius: 4px !important;
		    -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175) !important;
		    box-shadow: 0 6px 12px rgba(0, 0, 0, .275) !important;
		}
	</style>
</head>
<body>
	<div>
		<?php echo $template['partials']['header']; ?>
		<?php echo $template['body']; ?>
		<?php echo $template['partials']['footer']; ?>
	</div>
</body>
</html>
<script src="<?php echo asset_url();?>js/jquery-ui.min.js"></script>
<script src="<?php echo asset_url();?>js/bootstrap.min.js"></script>
<script src="<?php echo asset_url();?>js/backend.min.js?<?php echo $version;?>"></script>
<script src="<?php echo asset_url();?>js/bootstrap-datepicker.min.js"></script> 

<script>
function ajaxindicatorstart(text)
{
	if(jQuery('body').find('#resultLoading').attr('id') != 'resultLoading'){
	jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="'+base_url+'assets/images/icons/loading.gif"><div  id="loader_div">'+text+'</div></div><div class="bg"></div></div>');
	}

	jQuery('#resultLoading').css({
		'width':'100%',
		'height':'100%',
		'position':'fixed',
		'z-index':'10000000',
		'top':'0',
		'left':'0',
		'right':'0',
		'bottom':'0',
		'margin':'auto'
	});

	jQuery('#resultLoading .bg').css({
		'background':'#000000',
		'opacity':'0.7',
		'width':'100%',
		'height':'100%',
		'position':'absolute',
		'top':'0'
	});

	jQuery('#resultLoading>div:first').css({
		'width': '250px',
		'height':'75px',
		'text-align': 'center',
		'position': 'fixed',
		'top':'0',
		'left':'0',
		'right':'0',
		'bottom':'0',
		'margin':'auto',
		'font-size':'16px',
		'z-index':'10',
		'color':'#ffffff'

	});

    jQuery('#resultLoading .bg').height('100%');
       jQuery('#resultLoading').fadeIn(300);
    jQuery('body').css('cursor', 'wait');
}
function ajaxindicatorstop()
{
    jQuery('#resultLoading .bg').height('100%');
       jQuery('#resultLoading').fadeOut(300);
    jQuery('body').css('cursor', 'default');
}


</script>
