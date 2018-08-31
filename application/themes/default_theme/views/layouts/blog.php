<!DOCTYPE html>
<html lang="en">
<head>
<?php if(!empty($page_title)) { ?>
<title><?php echo $page_title; ?></title>
<?php } else { ?>
<title><?php echo $template['title']; ?></title>
<?php } ?>
<meta charset="utf-8">
<?php if(!empty($page_description)) { ?>
<meta name="google" content="<?php echo $page_description;?>" />
<meta name="description" content="<?php echo $page_description;?>">
<?php } else { ?>
<meta name="google" content="FreightBazaar is a fast & easy way to find truck and load availability." />
<meta name="description" content="FreightBazaar is a fast & easy way to find truck and load availability.">
<?php } ?>
<meta name="keywords" content="freightbazaar, freight, truck, trucking, trailer, tipper, load, lorry, transport, transport service, transport companies, transportation, transportation companies, indian transporter, truck transport india, trucking business india, truck transport companies india, trucks and trucking business, truck transport business in india, freight exchange, truck exchange, trucking exchange, fleet exchange, logistic, logistics, 3PL, 3 PL, third party logistics, booking, hire, 04dd99ae56c35733fcdf">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate, max-age=0">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta itemprop="name" content="<?php echo $page_title;?>">
<?php if($page_description != "") { ?>
<meta itemprop="description" content="<?php echo $page_description;?>">
<?php } else { ?>
<meta itemprop="description" content="FreightBazaar is a fast & easy way to find truck and load availability, truck booking, hiring and complete trip management.">
<?php } ?>
<meta itemprop="image" content="<?php echo $page_image;?>">
<meta property="og:title" content="<?php echo $page_title;?>" />
<meta property="og:url" content="<?php echo current_url();?>" />
<meta property="og:type" content="website" />
<meta property="og:description" content="<?php echo $page_description;?>" />
<meta property="og:image" content="<?php echo $page_image;?>" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?php echo $page_title;?>" />
<meta name="twitter:description" content="<?php echo $page_description;?>" />
<meta name="twitter:url" content="<?php echo current_url();?>" />
<meta name="twitter:image" content="<?php echo $page_image;?>" />
<link rel="shortcut icon" href="<?php echo asset_url();?>images/icons/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo asset_url();?>images/icons/favicon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo asset_url();?>images/icons/favicon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo asset_url();?>images/icons/favicon-114x114.png">

<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
<link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Oswald:400,700,300">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/pages/common.css">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/pages/<?php echo $page;?>.css">
<script type="text/javascript">
	var base_url = '<?php echo base_url(); ?>';
	var asset_url = '<?php echo asset_url();?>';
	var fbpage = '<?php echo $page;?>';
        
</script>
<!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo asset_url();?>js/bootstrapValidator.min.js"></script>
</head>
<body>
    <?php echo $template['partials']['header']; ?>
    <?php echo $template['body']; ?>
	<?php echo $template['partials']['footer']; ?>
</body>
</html>
<script src="<?php echo asset_url();?>js/bootstrap.min.js"></script>
<script>
function ajaxindicatorstart(text)
{
	if(jQuery('body').find('#resultLoading').attr('id') != 'resultLoading'){
	jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="<?php echo base_url();?>assets/images/icons/loading.gif" alt="Loading truck availability"><div>'+text+'</div></div><div class="bg"></div></div>');
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

