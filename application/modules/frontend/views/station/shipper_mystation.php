<?php if(!isset($tsuserid)) { 
		redirect(base_url());
} ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My Station</title>
<meta name="description" content="The World's First Social B2B Platform">
<meta name="keywords"
	content="sourcing product, e-commerce, business, trade, commerce, community, video tube, business chat, buyers, sellers, shippers, products, china. exporters, suppliers">
<meta name="author" content="Hazem Zaki">
<meta name="categories" content="E-Commerce">
<meta name="generator" content="Hotline Internet & Technology Co. Ltd.">
<script type="text/javascript">
var base_url = "<?php echo base_url();?>";
var asset_url = "<?php echo asset_url();?>";
</script>
<link href="<?php echo asset_url();?>css/jquery.ui.all.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/station.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/my_station.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/pages/mystation_shipper.css?1.1" rel="stylesheet">
<link href="<?php echo asset_url();?>css/animate.min.css?1.1" rel="stylesheet">
<link href="<?php echo asset_url();?>css/bootstrap-dropdownhover.min.css?1.1" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo asset_url();?>images/Homekit.png">
<script src="<?php echo asset_url();?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo asset_url();?>js/bootstrap.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-scale.min.js"></script>
<script src="<?php echo asset_url();?>js/wb.stickylayer.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-fade.min.js"></script>
<script src="<?php echo asset_url();?>js/wb.carousel.effects.min.js"></script>
<script src="<?php echo asset_url();?>js/wb.slideshow.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.core.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.widget.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.mouse.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.sortable.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.tabs.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-blind.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-bounce.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-clip.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-drop.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-explode.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-fold.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-highlight.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-pulsate.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-shake.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-slide.min.js"></script>
<script src="<?php echo asset_url();?>js/custom/mystation.js?1.1"></script>
<script src="<?php echo asset_url();?>js/custom/mydeskside.js"></script>
<script src="<?php echo asset_url();?>js/custom/myfile.js"></script>
<script src="<?php echo asset_url();?>js/custom/dpro.js"></script>
<script src="<?php echo asset_url();?>js/custom/catalouge.js"></script>
<script src="<?php echo asset_url();?>js/custom/vedio.js"></script>
<script src="<?php echo asset_url();?>js/custom/alert.js"></script>
<script src="<?php echo asset_url();?>js/custom/language.js"></script>
<script src="<?php echo asset_url();?>js/bootstrapValidator.min.js"></script>
<!-- <script src="https://www.paypalobjects.com/api/checkout.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script> -->
<script src="<?php echo asset_url();?>js/jquery.wiggle.js"></script>
<link href="<?php echo asset_url(); ?>css/jquery.booklet.1.1.0.css?1.1" rel="stylesheet">
<script src="<?php echo asset_url(); ?>js/jquery.booklet.1.1.0.min.js?1.1"></script>
<script src="<?php echo asset_url(); ?>js/jquery.easing.1.3.js?1.1"></script>
<link rel="stylesheet" href="<?php echo asset_url(); ?>css/style-jq-3d-flip-book.css">
<script src="<?php echo asset_url(); ?>js/html2canvas.min.js"></script>
<script src="<?php echo asset_url(); ?>js/three.min.js"></script>
<script src="<?php echo asset_url(); ?>js/pdf.min.js"></script>
<script src="<?php echo asset_url(); ?>js/3dflipbook.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.cookie.js"></script>
<script>
$(document).click(function (event) {     
	$.get("<?php echo base_url();?>mystation/getloginstatus",{},function(data) {
		if(data.status == 0) {
    		window.location.href = "<?php echo base_url();?>";
		}
	},'json');
});
function ValidateLayer1(theForm)
{
   var regexp;
   if (theForm.Editbox3.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox3.focus();
      return false;
   }
   if (theForm.Editbox3.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox3.focus();
      return false;
   }
   if (theForm.Editbox3.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox3.focus();
      return false;
   }
   if (theForm.Editbox2.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox2.focus();
      return false;
   }
   if (theForm.Editbox2.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox2.focus();
      return false;
   }
   if (theForm.Editbox2.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox2.focus();
      return false;
   }
   if (theForm.Editbox4.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox4.focus();
      return false;
   }
   if (theForm.Editbox4.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox4.focus();
      return false;
   }
   if (theForm.Editbox4.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox4.focus();
      return false;
   }
   if (theForm.Editbox8.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox8.focus();
      return false;
   }
   if (theForm.Editbox8.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox8.focus();
      return false;
   }
   if (theForm.Editbox8.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox8.focus();
      return false;
   }
   if (theForm.Editbox9.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox9.focus();
      return false;
   }
   if (theForm.Editbox9.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox9.focus();
      return false;
   }
   if (theForm.Editbox9.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox9.focus();
      return false;
   }
   if (theForm.Editbox10.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox10.focus();
      return false;
   }
   if (theForm.Editbox10.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox10.focus();
      return false;
   }
   if (theForm.Editbox10.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox10.focus();
      return false;
   }
   if (theForm.Editbox11.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox11.focus();
      return false;
   }
   if (theForm.Editbox11.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox11.focus();
      return false;
   }
   if (theForm.Editbox11.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox11.focus();
      return false;
   }
   if (theForm.Editbox12.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox12.focus();
      return false;
   }
   if (theForm.Editbox12.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox12.focus();
      return false;
   }
   if (theForm.Editbox12.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox12.focus();
      return false;
   }
   if (theForm.Editbox13.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox13.focus();
      return false;
   }
   if (theForm.Editbox13.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox13.focus();
      return false;
   }
   if (theForm.Editbox13.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox13.focus();
      return false;
   }
   if (theForm.Editbox14.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox14.focus();
      return false;
   }
   if (theForm.Editbox14.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox14.focus();
      return false;
   }
   if (theForm.Editbox14.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox14.focus();
      return false;
   }
   return true;
}
</script>
<script>
function ValidateLayer1(theForm)
{
   var regexp;
   if (theForm.Editbox21.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox21.focus();
      return false;
   }
   if (theForm.Editbox21.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox21.focus();
      return false;
   }
   if (theForm.Editbox21.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox21.focus();
      return false;
   }
   if (theForm.Editbox22.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox22.focus();
      return false;
   }
   if (theForm.Editbox22.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox22.focus();
      return false;
   }
   if (theForm.Editbox22.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox22.focus();
      return false;
   }
   if (theForm.Editbox23.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox23.focus();
      return false;
   }
   if (theForm.Editbox23.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox23.focus();
      return false;
   }
   if (theForm.Editbox23.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox23.focus();
      return false;
   }
   if (theForm.Editbox24.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox24.focus();
      return false;
   }
   if (theForm.Editbox24.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox24.focus();
      return false;
   }
   if (theForm.Editbox24.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox24.focus();
      return false;
   }
   if (theForm.Editbox25.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox25.focus();
      return false;
   }
   if (theForm.Editbox25.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox25.focus();
      return false;
   }
   if (theForm.Editbox25.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox25.focus();
      return false;
   }
   if (theForm.Editbox1.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox1.focus();
      return false;
   }
   if (theForm.Editbox1.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox1.focus();
      return false;
   }
   if (theForm.Editbox1.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox1.focus();
      return false;
   }
   if (theForm.Editbox5.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox5.focus();
      return false;
   }
   if (theForm.Editbox5.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox5.focus();
      return false;
   }
   if (theForm.Editbox5.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox5.focus();
      return false;
   }
   if (theForm.Editbox6.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox6.focus();
      return false;
   }
   if (theForm.Editbox6.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox6.focus();
      return false;
   }
   if (theForm.Editbox6.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox6.focus();
      return false;
   }
   if (theForm.Editbox7.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox7.focus();
      return false;
   }
   if (theForm.Editbox7.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox7.focus();
      return false;
   }
   if (theForm.Editbox7.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox7.focus();
      return false;
   }
   if (theForm.Editbox15.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox15.focus();
      return false;
   }
   if (theForm.Editbox15.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox15.focus();
      return false;
   }
   if (theForm.Editbox15.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox15.focus();
      return false;
   }
   if (theForm.Editbox16.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox16.focus();
      return false;
   }
   if (theForm.Editbox16.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox16.focus();
      return false;
   }
   if (theForm.Editbox16.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox16.focus();
      return false;
   }
   if (theForm.Editbox17.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox17.focus();
      return false;
   }
   if (theForm.Editbox17.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox17.focus();
      return false;
   }
   if (theForm.Editbox17.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox17.focus();
      return false;
   }
   if (theForm.Editbox18.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox18.focus();
      return false;
   }
   if (theForm.Editbox18.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox18.focus();
      return false;
   }
   if (theForm.Editbox18.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox18.focus();
      return false;
   }
   if (theForm.Editbox19.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox19.focus();
      return false;
   }
   if (theForm.Editbox19.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox19.focus();
      return false;
   }
   if (theForm.Editbox19.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox19.focus();
      return false;
   }
   if (theForm.Editbox20.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox20.focus();
      return false;
   }
   if (theForm.Editbox20.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox20.focus();
      return false;
   }
   if (theForm.Editbox20.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox20.focus();
      return false;
   }
   if (theForm.Editbox26.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox26.focus();
      return false;
   }
   if (theForm.Editbox26.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox26.focus();
      return false;
   }
   if (theForm.Editbox26.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox26.focus();
      return false;
   }
   if (theForm.Editbox27.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox27.focus();
      return false;
   }
   if (theForm.Editbox27.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox27.focus();
      return false;
   }
   if (theForm.Editbox27.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox27.focus();
      return false;
   }
   if (theForm.Editbox28.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox28.focus();
      return false;
   }
   if (theForm.Editbox28.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox28.focus();
      return false;
   }
   if (theForm.Editbox28.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox28.focus();
      return false;
   }
   if (theForm.Editbox29.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox29.focus();
      return false;
   }
   if (theForm.Editbox29.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox29.focus();
      return false;
   }
   if (theForm.Editbox29.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox29.focus();
      return false;
   }
   if (theForm.Editbox30.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox30.focus();
      return false;
   }
   if (theForm.Editbox30.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox30.focus();
      return false;
   }
   if (theForm.Editbox30.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox30.focus();
      return false;
   }
   return true;
}
</script>
<script src="<?php echo asset_url();?>js/searchindex.js"></script>
<script>
var features = 'toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes,status=no,left=,top=,width=,height=';
var searchDatabase = new SearchDatabase();
var searchResults_length = 0;
var searchResults = new Object();
function searchPage(features)
{
   var element = document.getElementById('SiteSearch2');
   if (element.value.length != 0 || element.value != " ")
   {
      var value = unescape(element.value);
      var keywords = value.split(" ");
      searchResults_length = 0;
      for (var i=0; i<database_length; i++)
      {
         var matches = 0;
         var words = searchDatabase[i].title + " " + searchDatabase[i].description + " " + searchDatabase[i].keywords;
         for (var j = 0; j < keywords.length; j++)
         {
            var pattern = new RegExp(keywords[j], "i");
            var result = words.search(pattern);
            if (result >= 0)
            {
               matches++;
            }
            else
            {
               matches = 0;
            }
         }
         if (matches == keywords.length)
         {
            searchResults[searchResults_length++] = searchDatabase[i];
         }
      }
      var wndResults = window.open('about:blank', '', features);
      setTimeout(function()
      {
         var results = '';
         var html = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Search results<\/title><\/head>';
         html = html + '<body style="background-color:#FFFFFF;margin:0;padding:2px 2px 2px 2px;">';
         html = html + '<span style="font-family:Arial;font-size:13px;color:#000000">';
         for (var n=0; n<searchResults_length; n++)
         {
            var page_keywords = searchResults[n].keywords;
            results = results + '<strong><a style="color:#0000FF" target="_parent" href="'+searchResults[n].url+'">'+searchResults[n].title +'<\/a><\/strong><br>Keywords: ' + page_keywords +'<br><br>\n';
         }
         if (searchResults_length == 0)
         {
            results = 'No results';
         }
         else
         {
            html = html + searchResults_length;
            html = html + ' result(s) found for search term: ';
            html = html + value;
            html = html + '<br><br>';
         }
         html = html + results;
         html = html + '<\/span>';
         html = html + '<\/body><\/html>';
         wndResults.document.write(html);
     },100);
   }
   return false;
}
function searchParseURL()
{
   var url = decodeURIComponent(window.location.href);
   if (url.indexOf('?') > 0)
   {
      var terms = '';
      var params = url.split('?');
      var values = params[1].split('&');
      for (var i=0;i<values.length;i++)
      {
         var param = values[i].split('=');
         if (param[0] == 'q')
         {
            terms = unescape(param[1]);
            break;
         }
      }
      if (terms != '')
      {
         var element = document.getElementById('SiteSearch2');
         element.value = terms;
         searchPage('');
      }
   }
}
</script>
<script src="<?php echo asset_url();?>js/searchindex.js"></script>
<script>
var features = 'toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes,status=no,left=,top=,width=,height=';
var searchDatabase = new SearchDatabase();
var searchResults_length = 0;
var searchResults = new Object();
function searchPage(features)
{
   var element = document.getElementById('SiteSearch1');
   if (element.value.length != 0 || element.value != " ")
   {
      var value = unescape(element.value);
      var keywords = value.split(" ");
      searchResults_length = 0;
      for (var i=0; i<database_length; i++)
      {
         var matches = 0;
         var words = searchDatabase[i].title + " " + searchDatabase[i].description + " " + searchDatabase[i].keywords;
         for (var j = 0; j < keywords.length; j++)
         {
            var pattern = new RegExp(keywords[j], "i");
            var result = words.search(pattern);
            if (result >= 0)
            {
               matches++;
            }
            else
            {
               matches = 0;
            }
         }
         if (matches == keywords.length)
         {
            searchResults[searchResults_length++] = searchDatabase[i];
         }
      }
      var wndResults = window.open('about:blank', '', features);
      setTimeout(function()
      {
         var results = '';
         var html = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Search results<\/title><\/head>';
         html = html + '<body style="background-color:#FFFFFF;margin:0;padding:2px 2px 2px 2px;">';
         html = html + '<span style="font-family:Arial;font-size:13px;color:#000000">';
         for (var n=0; n<searchResults_length; n++)
         {
            var page_keywords = searchResults[n].keywords;
            results = results + '<strong><a style="color:#0000FF" target="_parent" href="'+searchResults[n].url+'">'+searchResults[n].title +'<\/a><\/strong><br>Keywords: ' + page_keywords +'<br><br>\n';
         }
         if (searchResults_length == 0)
         {
            results = 'No results';
         }
         else
         {
            html = html + searchResults_length;
            html = html + ' result(s) found for search term: ';
            html = html + value;
            html = html + '<br><br>';
         }
         html = html + results;
         html = html + '<\/span>';
         html = html + '<\/body><\/html>';
         wndResults.document.write(html);
     },100);
   }
   return false;
}
function searchParseURL()
{
   var url = decodeURIComponent(window.location.href);
   if (url.indexOf('?') > 0)
   {
      var terms = '';
      var params = url.split('?');
      var values = params[1].split('&');
      for (var i=0;i<values.length;i++)
      {
         var param = values[i].split('=');
         if (param[0] == 'q')
         {
            terms = unescape(param[1]);
            break;
         }
      }
      if (terms != '')
      {
         var element = document.getElementById('SiteSearch1');
         element.value = terms;
         searchPage('');
      }
   }
}
</script>
<script src="<?php echo asset_url();?>js/searchindex.js"></script>
<script>
var features = 'toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes,status=no,left=,top=,width=,height=';
var searchDatabase = new SearchDatabase();
var searchResults_length = 0;
var searchResults = new Object();
function searchPage(features)
{
   var element = document.getElementById('SiteSearch3');
   if (element.value.length != 0 || element.value != " ")
   {
      var value = unescape(element.value);
      var keywords = value.split(" ");
      searchResults_length = 0;
      for (var i=0; i<database_length; i++)
      {
         var matches = 0;
         var words = searchDatabase[i].title + " " + searchDatabase[i].description + " " + searchDatabase[i].keywords;
         for (var j = 0; j < keywords.length; j++)
         {
            var pattern = new RegExp(keywords[j], "i");
            var result = words.search(pattern);
            if (result >= 0)
            {
               matches++;
            }
            else
            {
               matches = 0;
            }
         }
         if (matches == keywords.length)
         {
            searchResults[searchResults_length++] = searchDatabase[i];
         }
      }
      var wndResults = window.open('about:blank', '', features);
      setTimeout(function()
      {
         var results = '';
         var html = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Search results<\/title><\/head>';
         html = html + '<body style="background-color:#FFFFFF;margin:0;padding:2px 2px 2px 2px;">';
         html = html + '<span style="font-family:Arial;font-size:13px;color:#000000">';
         for (var n=0; n<searchResults_length; n++)
         {
            var page_keywords = searchResults[n].keywords;
            results = results + '<strong><a style="color:#0000FF" target="_parent" href="'+searchResults[n].url+'">'+searchResults[n].title +'<\/a><\/strong><br>Keywords: ' + page_keywords +'<br><br>\n';
         }
         if (searchResults_length == 0)
         {
            results = 'No results';
         }
         else
         {
            html = html + searchResults_length;
            html = html + ' result(s) found for search term: ';
            html = html + value;
            html = html + '<br><br>';
         }
         html = html + results;
         html = html + '<\/span>';
         html = html + '<\/body><\/html>';
         wndResults.document.write(html);
     },100);
   }
   return false;
}
function searchParseURL()
{
   var url = decodeURIComponent(window.location.href);
   if (url.indexOf('?') > 0)
   {
      var terms = '';
      var params = url.split('?');
      var values = params[1].split('&');
      for (var i=0;i<values.length;i++)
      {
         var param = values[i].split('=');
         if (param[0] == 'q')
         {
            terms = unescape(param[1]);
            break;
         }
      }
      if (terms != '')
      {
         var element = document.getElementById('SiteSearch3');
         element.value = terms;
         searchPage('');
      }
   }
}
</script>
<link rel="stylesheet"
	href="<?php echo asset_url();?>js/prettyPhoto/css/prettyPhoto.css">
<script
	src="<?php echo asset_url();?>js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo asset_url();?>js/searchindex.js"></script>
<script>
var features = 'toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes,status=no,left=,top=,width=,height=';
var searchDatabase = new SearchDatabase();
var searchResults_length = 0;
var searchResults = new Object();
function searchPage(features)
{
   var element = document.getElementById('SiteSearch4');
   if (element.value.length != 0 || element.value != " ")
   {
      var value = unescape(element.value);
      var keywords = value.split(" ");
      searchResults_length = 0;
      for (var i=0; i<database_length; i++)
      {
         var matches = 0;
         var words = searchDatabase[i].title + " " + searchDatabase[i].description + " " + searchDatabase[i].keywords;
         for (var j = 0; j < keywords.length; j++)
         {
            var pattern = new RegExp(keywords[j], "i");
            var result = words.search(pattern);
            if (result >= 0)
            {
               matches++;
            }
            else
            {
               matches = 0;
            }
         }
         if (matches == keywords.length)
         {
            searchResults[searchResults_length++] = searchDatabase[i];
         }
      }
      var wndResults = window.open('about:blank', '', features);
      setTimeout(function()
      {
         var results = '';
         var html = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Search results<\/title><\/head>';
         html = html + '<body style="background-color:#FFFFFF;margin:0;padding:2px 2px 2px 2px;">';
         html = html + '<span style="font-family:Arial;font-size:13px;color:#000000">';
         for (var n=0; n<searchResults_length; n++)
         {
            var page_keywords = searchResults[n].keywords;
            results = results + '<strong><a style="color:#0000FF" target="_parent" href="'+searchResults[n].url+'">'+searchResults[n].title +'<\/a><\/strong><br>Keywords: ' + page_keywords +'<br><br>\n';
         }
         if (searchResults_length == 0)
         {
            results = 'No results';
         }
         else
         {
            html = html + searchResults_length;
            html = html + ' result(s) found for search term: ';
            html = html + value;
            html = html + '<br><br>';
         }
         html = html + results;
         html = html + '<\/span>';
         html = html + '<\/body><\/html>';
         wndResults.document.write(html);
     },100);
   }
   return false;
}
function searchParseURL()
{
   var url = decodeURIComponent(window.location.href);
   if (url.indexOf('?') > 0)
   {
      var terms = '';
      var params = url.split('?');
      var values = params[1].split('&');
      for (var i=0;i<values.length;i++)
      {
         var param = values[i].split('=');
         if (param[0] == 'q')
         {
            terms = unescape(param[1]);
            break;
         }
      }
      if (terms != '')
      {
         var element = document.getElementById('SiteSearch4');
         element.value = terms;
         searchPage('');
      }
   }
}
</script>
<script>
function ValidateLayer1(theForm)
{
   var regexp;
   if (theForm.Editbox38.value == "")
   {
      alert("Please Enter The Catqlouge Name");
      theForm.Editbox38.focus();
      return false;
   }
   if (theForm.Editbox38.value.length < 2)
   {
      alert("Please Enter The Catqlouge Name");
      theForm.Editbox38.focus();
      return false;
   }
   if (theForm.Editbox38.value.length > 20)
   {
      alert("Please Enter The Catqlouge Name");
      theForm.Editbox38.focus();
      return false;
   }
   return true;
}
</script>
<script src="<?php echo asset_url();?>js/searchindex.js"></script>
<script>
var features = 'toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes,status=no,left=,top=,width=,height=';
var searchDatabase = new SearchDatabase();
var searchResults_length = 0;
var searchResults = new Object();
function searchPage(features)
{
   var element = document.getElementById('SiteSearch5');
   if (element.value.length != 0 || element.value != " ")
   {
      var value = unescape(element.value);
      var keywords = value.split(" ");
      searchResults_length = 0;
      for (var i=0; i<database_length; i++)
      {
         var matches = 0;
         var words = searchDatabase[i].title + " " + searchDatabase[i].description + " " + searchDatabase[i].keywords;
         for (var j = 0; j < keywords.length; j++)
         {
            var pattern = new RegExp(keywords[j], "i");
            var result = words.search(pattern);
            if (result >= 0)
            {
               matches++;
            }
            else
            {
               matches = 0;
            }
         }
         if (matches == keywords.length)
         {
            searchResults[searchResults_length++] = searchDatabase[i];
         }
      }
      var wndResults = window.open('about:blank', '', features);
      setTimeout(function()
      {
         var results = '';
         var html = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Search results<\/title><\/head>';
         html = html + '<body style="background-color:#FFFFFF;margin:0;padding:2px 2px 2px 2px;">';
         html = html + '<span style="font-family:Arial;font-size:13px;color:#000000">';
         for (var n=0; n<searchResults_length; n++)
         {
            var page_keywords = searchResults[n].keywords;
            results = results + '<strong><a style="color:#0000FF" target="_parent" href="'+searchResults[n].url+'">'+searchResults[n].title +'<\/a><\/strong><br>Keywords: ' + page_keywords +'<br><br>\n';
         }
         if (searchResults_length == 0)
         {
            results = 'No results';
         }
         else
         {
            html = html + searchResults_length;
            html = html + ' result(s) found for search term: ';
            html = html + value;
            html = html + '<br><br>';
         }
         html = html + results;
         html = html + '<\/span>';
         html = html + '<\/body><\/html>';
         wndResults.document.write(html);
     },100);
   }
   return false;
}
function searchParseURL()
{
   var url = decodeURIComponent(window.location.href);
   if (url.indexOf('?') > 0)
   {
      var terms = '';
      var params = url.split('?');
      var values = params[1].split('&');
      for (var i=0;i<values.length;i++)
      {
         var param = values[i].split('=');
         if (param[0] == 'q')
         {
            terms = unescape(param[1]);
            break;
         }
      }
      if (terms != '')
      {
         var element = document.getElementById('SiteSearch5');
         element.value = terms;
         searchPage('');
      }
   }
}
</script>
<script>
function ValidateLayer1(theForm)
{
   var regexp;
   if (theForm.Editbox39.value == "")
   {
      alert("Please Enter The Catqlouge Name");
      theForm.Editbox39.focus();
      return false;
   }
   if (theForm.Editbox39.value.length < 2)
   {
      alert("Please Enter The Catqlouge Name");
      theForm.Editbox39.focus();
      return false;
   }
   if (theForm.Editbox39.value.length > 20)
   {
      alert("Please Enter The Catqlouge Name");
      theForm.Editbox39.focus();
      return false;
   }
   return true;
}
</script>
<script>
function ValidateLayer1(theForm)
{
   var regexp;
   if (theForm.Editbox42.value == "")
   {
      alert("Please Enter A Product Title");
      theForm.Editbox42.focus();
      return false;
   }
   if (theForm.Editbox42.value.length < 10)
   {
      alert("Please Enter A Product Title");
      theForm.Editbox42.focus();
      return false;
   }
   if (theForm.Editbox42.value.length > 30)
   {
      alert("Please Enter A Product Title");
      theForm.Editbox42.focus();
      return false;
   }
   if (theForm.TextArea3.value == "")
   {
      alert("Please enter a value for the \"TextArea1\" field.");
      theForm.TextArea3.focus();
      return false;
   }
   if (theForm.TextArea3.value.length < 10)
   {
      alert("Please enter at least 10 characters in the \"TextArea1\" field.");
      theForm.TextArea3.focus();
      return false;
   }
   if (theForm.TextArea3.value.length > 60)
   {
      alert("Please enter at most 60 characters in the \"TextArea1\" field.");
      theForm.TextArea3.focus();
      return false;
   }
   if (theForm.Editbox73.value == "")
   {
      alert("Please Enter A Product Title");
      theForm.Editbox73.focus();
      return false;
   }
   if (theForm.Editbox73.value.length < 2)
   {
      alert("Please Enter A Product Title");
      theForm.Editbox73.focus();
      return false;
   }
   if (theForm.Editbox73.value.length > 6)
   {
      alert("Please Enter A Product Title");
      theForm.Editbox73.focus();
      return false;
   }
   if (theForm.Editbox74.value == "")
   {
      alert("Please Enter A Product Title");
      theForm.Editbox74.focus();
      return false;
   }
   if (theForm.Editbox74.value.length < 2)
   {
      alert("Please Enter A Product Title");
      theForm.Editbox74.focus();
      return false;
   }
   if (theForm.Editbox74.value.length > 6)
   {
      alert("Please Enter A Product Title");
      theForm.Editbox74.focus();
      return false;
   }
   return true;
}
</script>
<script src="<?php echo asset_url();?>js/searchindex.js"></script>
<script>
var features = 'toolbar=no,menubar=no,location=no,scrollbars=yes,resizable=yes,status=no,left=,top=,width=,height=';
var searchDatabase = new SearchDatabase();
var searchResults_length = 0;
var searchResults = new Object();
function searchPage(features)
{
   var element = document.getElementById('SiteSearch6');
   if (element.value.length != 0 || element.value != " ")
   {
      var value = unescape(element.value);
      var keywords = value.split(" ");
      searchResults_length = 0;
      for (var i=0; i<database_length; i++)
      {
         var matches = 0;
         var words = searchDatabase[i].title + " " + searchDatabase[i].description + " " + searchDatabase[i].keywords;
         for (var j = 0; j < keywords.length; j++)
         {
            var pattern = new RegExp(keywords[j], "i");
            var result = words.search(pattern);
            if (result >= 0)
            {
               matches++;
            }
            else
            {
               matches = 0;
            }
         }
         if (matches == keywords.length)
         {
            searchResults[searchResults_length++] = searchDatabase[i];
         }
      }
      var wndResults = window.open('about:blank', '', features);
      setTimeout(function()
      {
         var results = '';
         var html = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Search results<\/title><\/head>';
         html = html + '<body style="background-color:#FFFFFF;margin:0;padding:2px 2px 2px 2px;">';
         html = html + '<span style="font-family:Arial;font-size:13px;color:#000000">';
         for (var n=0; n<searchResults_length; n++)
         {
            var page_keywords = searchResults[n].keywords;
            results = results + '<strong><a style="color:#0000FF" target="_parent" href="'+searchResults[n].url+'">'+searchResults[n].title +'<\/a><\/strong><br>Keywords: ' + page_keywords +'<br><br>\n';
         }
         if (searchResults_length == 0)
         {
            results = 'No results';
         }
         else
         {
            html = html + searchResults_length;
            html = html + ' result(s) found for search term: ';
            html = html + value;
            html = html + '<br><br>';
         }
         html = html + results;
         html = html + '<\/span>';
         html = html + '<\/body><\/html>';
         wndResults.document.write(html);
     },100);
   }
   return false;
}
function searchParseURL()
{
   var url = decodeURIComponent(window.location.href);
   if (url.indexOf('?') > 0)
   {
      var terms = '';
      var params = url.split('?');
      var values = params[1].split('&');
      for (var i=0;i<values.length;i++)
      {
         var param = values[i].split('=');
         if (param[0] == 'q')
         {
            terms = unescape(param[1]);
            break;
         }
      }
      if (terms != '')
      {
         var element = document.getElementById('SiteSearch6');
         element.value = terms;
         searchPage('');
      }
   }
}
</script>
<script>
function Validatecontact(theForm)
{
   var regexp;
   var extension = theForm.FileUpload1.value.substr(theForm.FileUpload1.value.lastIndexOf('.'));
   /*if ((extension.toLowerCase() != ".gif") &&
       (extension.toLowerCase() != ".jpg") &&
       (extension.toLowerCase() != ".pdf") &&
       (extension.toLowerCase() != ".png") &&
       (extension != ""))
   {
      alert("The \"FileUpload1\" field contains an unapproved filename.");
      theForm.FileUpload1.focus();
      return false;
   }*/
   
   if (theForm.Editbox47.value == "")
   {
      alert("Please enter a value for the \"Subject\" field.");
      theForm.Editbox47.focus();
      return false;
   }
   if (theForm.Editbox47.value.length < 10)
   {
      alert("Please enter at least 10 characters in the \"Subject\" field.");
      theForm.Editbox47.focus();
      return false;
   }
   if (theForm.Editbox47.value.length > 40)
   {
      alert("Please enter at most 40 characters in the \"Subject\" field.");
      theForm.Editbox47.focus();
      return false;
   }
   return true;
}
</script>
<script>
function Validatecontact(theForm)
{
   var regexp;
   var extension = theForm.FileUpload2.value.substr(theForm.FileUpload2.value.lastIndexOf('.'));
   /*if ((extension.toLowerCase() != ".gif") &&
       (extension.toLowerCase() != ".jpg") &&
       (extension.toLowerCase() != ".pdf") &&
       (extension.toLowerCase() != ".png") &&
       (extension != ""))
   {
      alert("The \"FileUpload1\" field contains an unapproved filename.");
      theForm.FileUpload2.focus();
      return false;
   }*/
   
   if (theForm.Editbox46.value == "")
   {
      alert("Please enter a value for the \"Subject\" field.");
      theForm.Editbox46.focus();
      return false;
   }
   if (theForm.Editbox46.value.length < 10)
   {
      alert("Please enter at least 10 characters in the \"Subject\" field.");
      theForm.Editbox46.focus();
      return false;
   }
   if (theForm.Editbox46.value.length > 40)
   {
      alert("Please enter at most 40 characters in the \"Subject\" field.");
      theForm.Editbox46.focus();
      return false;
   }
   return true;
}
</script>
<script>
function ValidateLayer1(theForm)
{
   var regexp;
   if (theForm.Editbox45.value == "")
   {
      alert("Please enter a value for the \"Editbox45\" field.");
      theForm.Editbox45.focus();
      return false;
   }
   if (theForm.Editbox45.value.length < 12)
   {
      alert("Please enter at least 12 characters in the \"Editbox45\" field.");
      theForm.Editbox45.focus();
      return false;
   }
   if (theForm.Editbox45.value.length > 12)
   {
      alert("Please enter at most 12 characters in the \"Editbox45\" field.");
      theForm.Editbox45.focus();
      return false;
   }
   if (theForm.Editbox49.value == "")
   {
      alert("Please enter a value for the \"Editbox45\" field.");
      theForm.Editbox49.focus();
      return false;
   }
   if (theForm.Editbox49.value.length < 4)
   {
      alert("Please enter at least 4 characters in the \"Editbox45\" field.");
      theForm.Editbox49.focus();
      return false;
   }
   if (theForm.Editbox49.value.length > 40)
   {
      alert("Please enter at most 40 characters in the \"Editbox45\" field.");
      theForm.Editbox49.focus();
      return false;
   }
   if (theForm.Editbox50.value == "")
   {
      alert("Please enter a value for the \"Editbox45\" field.");
      theForm.Editbox50.focus();
      return false;
   }
   if (theForm.Editbox50.value.length < 3)
   {
      alert("Please enter at least 3 characters in the \"Editbox45\" field.");
      theForm.Editbox50.focus();
      return false;
   }
   if (theForm.Editbox50.value.length > 3)
   {
      alert("Please enter at most 3 characters in the \"Editbox45\" field.");
      theForm.Editbox50.focus();
      return false;
   }
   return true;
}
</script>
<script>
function ValidateLayer1(theForm)
{
   var regexp;
   if (theForm.Editbox48.value == "")
   {
      alert("Please Enter The Catqlouge Name");
      theForm.Editbox48.focus();
      return false;
   }
   if (theForm.Editbox48.value.length < 2)
   {
      alert("Please Enter The Catqlouge Name");
      theForm.Editbox48.focus();
      return false;
   }
   if (theForm.Editbox48.value.length > 20)
   {
      alert("Please Enter The Catqlouge Name");
      theForm.Editbox48.focus();
      return false;
   }
   return true;
}
</script>
<script>
function ValidateLayer1(theForm)
{
   var regexp;
   if (theForm.TextArea9.value == "")
   {
      alert("Please enter a value for the \"TextArea9\" field.");
      theForm.TextArea9.focus();
      return false;
   }
   if (theForm.TextArea9.value.length < 100)
   {
      alert("Please enter at least 100 characters in the \"TextArea9\" field.");
      theForm.TextArea9.focus();
      return false;
   }
   if (theForm.TextArea9.value.length > 2000)
   {
      alert("Please enter at most 2000 characters in the \"TextArea9\" field.");
      theForm.TextArea9.focus();
      return false;
   }
   return true;
}
</script>
<script>
function ValidateLayer1(theForm)
{
   var regexp;
   if (theForm.Editbox51.value == "")
   {
      alert("Please enter a value for the \"Editbox45\" field.");
      theForm.Editbox51.focus();
      return false;
   }
   if (theForm.Editbox51.value.length < 12)
   {
      alert("Please enter at least 12 characters in the \"Editbox45\" field.");
      theForm.Editbox51.focus();
      return false;
   }
   if (theForm.Editbox51.value.length > 12)
   {
      alert("Please enter at most 12 characters in the \"Editbox45\" field.");
      theForm.Editbox51.focus();
      return false;
   }
   if (theForm.Editbox52.value == "")
   {
      alert("Please enter a value for the \"Editbox45\" field.");
      theForm.Editbox52.focus();
      return false;
   }
   if (theForm.Editbox52.value.length < 4)
   {
      alert("Please enter at least 4 characters in the \"Editbox45\" field.");
      theForm.Editbox52.focus();
      return false;
   }
   if (theForm.Editbox52.value.length > 40)
   {
      alert("Please enter at most 40 characters in the \"Editbox45\" field.");
      theForm.Editbox52.focus();
      return false;
   }
   if (theForm.Editbox53.value == "")
   {
      alert("Please enter a value for the \"Editbox45\" field.");
      theForm.Editbox53.focus();
      return false;
   }
   if (theForm.Editbox53.value.length < 3)
   {
      alert("Please enter at least 3 characters in the \"Editbox45\" field.");
      theForm.Editbox53.focus();
      return false;
   }
   if (theForm.Editbox53.value.length > 3)
   {
      alert("Please enter at most 3 characters in the \"Editbox45\" field.");
      theForm.Editbox53.focus();
      return false;
   }
   return true;
}
</script>
<link rel="stylesheet"
	href="<?php echo asset_url();?>js/slimbox/css/slimbox2.css">
<script src="<?php echo asset_url();?>js/slimbox/js/slimbox2.js"></script>
<script>
function ValidateForm1(theForm)
{
   var regexp;
   if (theForm.Editbox41.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox41.focus();
      return false;
   }
   if (theForm.Editbox41.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox41.focus();
      return false;
   }
   if (theForm.Editbox41.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox41.focus();
      return false;
   }
   if (theForm.Editbox43.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox43.focus();
      return false;
   }
   if (theForm.Editbox43.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox43.focus();
      return false;
   }
   if (theForm.Editbox43.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox43.focus();
      return false;
   }
   if (theForm.Editbox54.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox54.focus();
      return false;
   }
   if (theForm.Editbox54.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox54.focus();
      return false;
   }
   if (theForm.Editbox54.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox54.focus();
      return false;
   }
   if (theForm.Editbox55.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox55.focus();
      return false;
   }
   if (theForm.Editbox55.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox55.focus();
      return false;
   }
   if (theForm.Editbox55.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox55.focus();
      return false;
   }
   if (theForm.Editbox56.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox56.focus();
      return false;
   }
   if (theForm.Editbox56.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox56.focus();
      return false;
   }
   if (theForm.Editbox56.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox56.focus();
      return false;
   }
   if (theForm.Editbox57.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox57.focus();
      return false;
   }
   if (theForm.Editbox57.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox57.focus();
      return false;
   }
   if (theForm.Editbox57.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox57.focus();
      return false;
   }
   if (theForm.Editbox58.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox58.focus();
      return false;
   }
   if (theForm.Editbox58.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox58.focus();
      return false;
   }
   if (theForm.Editbox58.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox58.focus();
      return false;
   }
   if (theForm.Editbox59.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox59.focus();
      return false;
   }
   if (theForm.Editbox59.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox59.focus();
      return false;
   }
   if (theForm.Editbox59.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox59.focus();
      return false;
   }
   if (theForm.Editbox60.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox60.focus();
      return false;
   }
   if (theForm.Editbox60.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox60.focus();
      return false;
   }
   if (theForm.Editbox60.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox60.focus();
      return false;
   }
   if (theForm.Editbox61.value == "")
   {
      alert("Please Enter The Contact Name");
      theForm.Editbox61.focus();
      return false;
   }
   if (theForm.Editbox61.value.length < 2)
   {
      alert("Please Enter The Contact Name");
      theForm.Editbox61.focus();
      return false;
   }
   if (theForm.Editbox61.value.length > 20)
   {
      alert("Please Enter The Contact Name");
      theForm.Editbox61.focus();
      return false;
   }
   if (theForm.Combobox17.selectedIndex < 0)
   {
      alert("Please Select Your Price Terms");
      theForm.Combobox17.focus();
      return false;
   }
   return true;
}
</script>
<script>
function ValidateForm1(theForm)
{
   var regexp;
   if (theForm.Editbox92.value == "")
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox92.focus();
      return false;
   }
   if (theForm.Editbox92.value.length < 10)
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox92.focus();
      return false;
   }
   if (theForm.Editbox92.value.length > 30)
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox92.focus();
      return false;
   }
   if (theForm.Editbox93.value == "")
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox93.focus();
      return false;
   }
   if (theForm.Editbox93.value.length < 10)
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox93.focus();
      return false;
   }
   if (theForm.Editbox93.value.length > 30)
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox93.focus();
      return false;
   }
   if (theForm.Editbox94.value == "")
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox94.focus();
      return false;
   }
   if (theForm.Editbox94.value.length < 10)
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox94.focus();
      return false;
   }
   if (theForm.Editbox94.value.length > 30)
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox94.focus();
      return false;
   }
   if (theForm.TextArea10.value == "")
   {
      alert("Enter The Scope Of Your Business Mentioed In License");
      theForm.TextArea10.focus();
      return false;
   }
   if (theForm.TextArea10.value.length < 10)
   {
      alert("Enter The Scope Of Your Business Mentioed In License");
      theForm.TextArea10.focus();
      return false;
   }
   if (theForm.TextArea10.value.length > 150)
   {
      alert("Enter The Scope Of Your Business Mentioed In License");
      theForm.TextArea10.focus();
      return false;
   }
   if (theForm.Editbox95.value == "")
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox95.focus();
      return false;
   }
   if (theForm.Editbox95.value.length < 10)
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox95.focus();
      return false;
   }
   if (theForm.Editbox95.value.length > 30)
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox95.focus();
      return false;
   }
   if (theForm.Editbox96.value == "")
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox96.focus();
      return false;
   }
   if (theForm.Editbox96.value.length < 10)
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox96.focus();
      return false;
   }
   if (theForm.Editbox96.value.length > 30)
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox96.focus();
      return false;
   }
   return true;
}
</script>
<script>
function ValidateForm1(theForm)
{
   var regexp;
   if (theForm.Editbox85.value == "")
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox85.focus();
      return false;
   }
   if (theForm.Editbox85.value.length < 10)
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox85.focus();
      return false;
   }
   if (theForm.Editbox85.value.length > 30)
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox85.focus();
      return false;
   }
   if (theForm.Editbox86.value == "")
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox86.focus();
      return false;
   }
   if (theForm.Editbox86.value.length < 10)
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox86.focus();
      return false;
   }
   if (theForm.Editbox86.value.length > 30)
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox86.focus();
      return false;
   }
   if (theForm.Editbox87.value == "")
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox87.focus();
      return false;
   }
   if (theForm.Editbox87.value.length < 10)
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox87.focus();
      return false;
   }
   if (theForm.Editbox87.value.length > 30)
   {
      alert("Please Enter A Valid Port Name");
      theForm.Editbox87.focus();
      return false;
   }
   return true;
}
</script>
<script>
function ValidateForm1(theForm)
{
   var regexp;
   if (theForm.Editbox81.value == "")
   {
      alert("Please enter a value for the \"No. Of Production line\" field.");
      theForm.Editbox81.focus();
      return false;
   }
   if (theForm.Editbox81.value.length < 1)
   {
      alert("Please enter at least 1 characters in the \"No. Of Production line\" field.");
      theForm.Editbox81.focus();
      return false;
   }
   if (theForm.Editbox81.value.length > 3)
   {
      alert("Please enter at most 3 characters in the \"No. Of Production line\" field.");
      theForm.Editbox81.focus();
      return false;
   }
   if (theForm.Editbox82.value == "")
   {
      alert("Please enter a value for the \"R&D Staff\" field.");
      theForm.Editbox82.focus();
      return false;
   }
   if (theForm.Editbox82.value.length < 1)
   {
      alert("Please enter at least 1 characters in the \"R&D Staff\" field.");
      theForm.Editbox82.focus();
      return false;
   }
   if (theForm.Editbox82.value.length > 3)
   {
      alert("Please enter at most 3 characters in the \"R&D Staff\" field.");
      theForm.Editbox82.focus();
      return false;
   }
   if (theForm.Editbox83.value == "")
   {
      alert("Please enter a value for the \"QC Staff\" field.");
      theForm.Editbox83.focus();
      return false;
   }
   if (theForm.Editbox83.value.length < 1)
   {
      alert("Please enter at least 1 characters in the \"QC Staff\" field.");
      theForm.Editbox83.focus();
      return false;
   }
   if (theForm.Editbox83.value.length > 3)
   {
      alert("Please enter at most 3 characters in the \"QC Staff\" field.");
      theForm.Editbox83.focus();
      return false;
   }
   if (theForm.Editbox88.value == "")
   {
      alert("Please enter a value for the \"No. Of Production line\" field.");
      theForm.Editbox88.focus();
      return false;
   }
   if (theForm.Editbox88.value.length < 1)
   {
      alert("Please enter at least 1 characters in the \"No. Of Production line\" field.");
      theForm.Editbox88.focus();
      return false;
   }
   if (theForm.Editbox88.value.length > 3)
   {
      alert("Please enter at most 3 characters in the \"No. Of Production line\" field.");
      theForm.Editbox88.focus();
      return false;
   }
   if (theForm.Editbox89.value == "")
   {
      alert("Please Enter A Valid Tell");
      theForm.Editbox89.focus();
      return false;
   }
   if (theForm.Editbox89.value.length < 10)
   {
      alert("Please Enter A Valid Tell");
      theForm.Editbox89.focus();
      return false;
   }
   if (theForm.Editbox89.value.length > 30)
   {
      alert("Please Enter A Valid Tell");
      theForm.Editbox89.focus();
      return false;
   }
   return true;
}
</script>
<script>
function ValidateForm1(theForm)
{
   var regexp;
   if (theForm.Editbox90.value == "")
   {
      alert("Please enter a value for the \"Province\" field.");
      theForm.Editbox90.focus();
      return false;
   }
   if (theForm.Editbox90.value.length < 10)
   {
      alert("Please enter at least 10 characters in the \"Province\" field.");
      theForm.Editbox90.focus();
      return false;
   }
   if (theForm.Editbox90.value.length > 30)
   {
      alert("Please enter at most 30 characters in the \"Province\" field.");
      theForm.Editbox90.focus();
      return false;
   }
   if (theForm.Editbox91.value == "")
   {
      alert("Please enter a value for the \"city\" field.");
      theForm.Editbox91.focus();
      return false;
   }
   if (theForm.Editbox91.value.length < 10)
   {
      alert("Please enter at least 10 characters in the \"city\" field.");
      theForm.Editbox91.focus();
      return false;
   }
   if (theForm.Editbox91.value.length > 30)
   {
      alert("Please enter at most 30 characters in the \"city\" field.");
      theForm.Editbox91.focus();
      return false;
   }
   if (theForm.Editbox97.value == "")
   {
      alert("Please enter a value for the \"Address\" field.");
      theForm.Editbox97.focus();
      return false;
   }
   if (theForm.Editbox97.value.length < 10)
   {
      alert("Please enter at least 10 characters in the \"Address\" field.");
      theForm.Editbox97.focus();
      return false;
   }
   if (theForm.Editbox97.value.length > 30)
   {
      alert("Please enter at most 30 characters in the \"Address\" field.");
      theForm.Editbox97.focus();
      return false;
   }
   if (theForm.Editbox98.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox98.focus();
      return false;
   }
   if (theForm.Editbox98.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox98.focus();
      return false;
   }
   if (theForm.Editbox98.value.length > 30)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox98.focus();
      return false;
   }
   if (theForm.Editbox99.value == "")
   {
      alert("Please enter a value for the \"city\" field.");
      theForm.Editbox99.focus();
      return false;
   }
   if (theForm.Editbox99.value.length < 10)
   {
      alert("Please enter at least 10 characters in the \"city\" field.");
      theForm.Editbox99.focus();
      return false;
   }
   if (theForm.Editbox99.value.length > 30)
   {
      alert("Please enter at most 30 characters in the \"city\" field.");
      theForm.Editbox99.focus();
      return false;
   }
   if (theForm.Editbox100.value == "")
   {
      alert("Please enter a value for the \"Address\" field.");
      theForm.Editbox100.focus();
      return false;
   }
   if (theForm.Editbox100.value.length < 10)
   {
      alert("Please enter at least 10 characters in the \"Address\" field.");
      theForm.Editbox100.focus();
      return false;
   }
   if (theForm.Editbox100.value.length > 30)
   {
      alert("Please enter at most 30 characters in the \"Address\" field.");
      theForm.Editbox100.focus();
      return false;
   }
   if (theForm.Editbox101.value == "")
   {
      alert("Please Enter A Valid Code");
      theForm.Editbox101.focus();
      return false;
   }
   if (theForm.Editbox101.value.length < 4)
   {
      alert("Please Enter A Valid Code");
      theForm.Editbox101.focus();
      return false;
   }
   if (theForm.Editbox101.value.length > 8)
   {
      alert("Please Enter A Valid Code");
      theForm.Editbox101.focus();
      return false;
   }
   if (theForm.Editbox102.value == "")
   {
      alert("Please Enter A Valid City Code");
      theForm.Editbox102.focus();
      return false;
   }
   if (theForm.Editbox102.value.length < 2)
   {
      alert("Please Enter A Valid City Code");
      theForm.Editbox102.focus();
      return false;
   }
   if (theForm.Editbox102.value.length > 6)
   {
      alert("Please Enter A Valid City Code");
      theForm.Editbox102.focus();
      return false;
   }
   if (theForm.Editbox103.value == "")
   {
      alert("Please Enter A Valid Tell");
      theForm.Editbox103.focus();
      return false;
   }
   if (theForm.Editbox103.value.length < 10)
   {
      alert("Please Enter A Valid Tell");
      theForm.Editbox103.focus();
      return false;
   }
   if (theForm.Editbox103.value.length > 30)
   {
      alert("Please Enter A Valid Tell");
      theForm.Editbox103.focus();
      return false;
   }
   if (theForm.Editbox104.value == "")
   {
      alert("Please enter a value for the \"No. Of Production line\" field.");
      theForm.Editbox104.focus();
      return false;
   }
   if (theForm.Editbox104.value.length < 1)
   {
      alert("Please enter at least 1 characters in the \"No. Of Production line\" field.");
      theForm.Editbox104.focus();
      return false;
   }
   if (theForm.Editbox104.value.length > 3)
   {
      alert("Please enter at most 3 characters in the \"No. Of Production line\" field.");
      theForm.Editbox104.focus();
      return false;
   }
   if (theForm.Editbox105.value == "")
   {
      alert("Please enter a value for the \"R&D Staff\" field.");
      theForm.Editbox105.focus();
      return false;
   }
   if (theForm.Editbox105.value.length < 1)
   {
      alert("Please enter at least 1 characters in the \"R&D Staff\" field.");
      theForm.Editbox105.focus();
      return false;
   }
   if (theForm.Editbox105.value.length > 3)
   {
      alert("Please enter at most 3 characters in the \"R&D Staff\" field.");
      theForm.Editbox105.focus();
      return false;
   }
   if (theForm.Editbox106.value == "")
   {
      alert("Please enter a value for the \"QC Staff\" field.");
      theForm.Editbox106.focus();
      return false;
   }
   if (theForm.Editbox106.value.length < 1)
   {
      alert("Please enter at least 1 characters in the \"QC Staff\" field.");
      theForm.Editbox106.focus();
      return false;
   }
   if (theForm.Editbox106.value.length > 3)
   {
      alert("Please enter at most 3 characters in the \"QC Staff\" field.");
      theForm.Editbox106.focus();
      return false;
   }
   if (theForm.Editbox107.value == "")
   {
      alert("Please enter a value for the \"R&D Capacity\" field.");
      theForm.Editbox107.focus();
      return false;
   }
   if (theForm.Editbox107.value.length < 2)
   {
      alert("Please enter at least 2 characters in the \"R&D Capacity\" field.");
      theForm.Editbox107.focus();
      return false;
   }
   if (theForm.Editbox107.value.length > 10)
   {
      alert("Please enter at most 10 characters in the \"R&D Capacity\" field.");
      theForm.Editbox107.focus();
      return false;
   }
   if (theForm.Editbox108.value == "")
   {
      alert("Please enter a value for the \"No. Of Production line\" field.");
      theForm.Editbox108.focus();
      return false;
   }
   if (theForm.Editbox108.value.length < 1)
   {
      alert("Please enter at least 1 characters in the \"No. Of Production line\" field.");
      theForm.Editbox108.focus();
      return false;
   }
   if (theForm.Editbox108.value.length > 3)
   {
      alert("Please enter at most 3 characters in the \"No. Of Production line\" field.");
      theForm.Editbox108.focus();
      return false;
   }
   if (theForm.Editbox109.value == "")
   {
      alert("Please Enter A Valid Tell");
      theForm.Editbox109.focus();
      return false;
   }
   if (theForm.Editbox109.value.length < 10)
   {
      alert("Please Enter A Valid Tell");
      theForm.Editbox109.focus();
      return false;
   }
   if (theForm.Editbox109.value.length > 30)
   {
      alert("Please Enter A Valid Tell");
      theForm.Editbox109.focus();
      return false;
   }
   return true;
}
</script>
<script>
function ValidateLayer1(theForm)
{
   var regexp;
   if (theForm.Editbox31.value == "")
   {
      alert("Please Enter A Product No.");
      theForm.Editbox31.focus();
      return false;
   }
   if (theForm.Editbox31.value.length < 2)
   {
      alert("Please Enter A Product No.");
      theForm.Editbox31.focus();
      return false;
   }
   if (theForm.Editbox31.value.length > 15)
   {
      alert("Please Enter A Product No.");
      theForm.Editbox31.focus();
      return false;
   }
   if (theForm.Editbox36.value == "")
   {
      alert("Please Enter A Product Name");
      theForm.Editbox36.focus();
      return false;
   }
   if (theForm.Editbox36.value.length < 2)
   {
      alert("Please Enter A Product Name");
      theForm.Editbox36.focus();
      return false;
   }
   if (theForm.Editbox36.value.length > 30)
   {
      alert("Please Enter A Product Name");
      theForm.Editbox36.focus();
      return false;
   }
   if (theForm.Editbox33.value == "")
   {
      alert("Please Enter A Valid Price");
      theForm.Editbox33.focus();
      return false;
   }
   if (theForm.Editbox33.value.length < 2)
   {
      alert("Please Enter A Valid Price");
      theForm.Editbox33.focus();
      return false;
   }
   if (theForm.Editbox33.value.length > 10)
   {
      alert("Please Enter A Valid Price");
      theForm.Editbox33.focus();
      return false;
   }
   if (theForm.Editbox34.value == "")
   {
      alert("Please Enter A Valid Quantity");
      theForm.Editbox34.focus();
      return false;
   }
   if (theForm.Editbox34.value.length < 2)
   {
      alert("Please Enter A Valid Quantity");
      theForm.Editbox34.focus();
      return false;
   }
   if (theForm.Editbox34.value.length > 10)
   {
      alert("Please Enter A Valid Quantity");
      theForm.Editbox34.focus();
      return false;
   }
   if (theForm.Editbox35.value == "")
   {
      alert("Please Enter A Valid Unit");
      theForm.Editbox35.focus();
      return false;
   }
   if (theForm.Editbox35.value.length < 3)
   {
      alert("Please Enter A Valid Unit");
      theForm.Editbox35.focus();
      return false;
   }
   if (theForm.Editbox35.value.length > 15)
   {
      alert("Please Enter A Valid Unit");
      theForm.Editbox35.focus();
      return false;
   }
   if (theForm.Editbox37.value == "")
   {
      alert("Please Enter A Valid Price");
      theForm.Editbox37.focus();
      return false;
   }
   if (theForm.Editbox37.value.length < 2)
   {
      alert("Please Enter A Valid Price");
      theForm.Editbox37.focus();
      return false;
   }
   if (theForm.Editbox37.value.length > 10)
   {
      alert("Please Enter A Valid Price");
      theForm.Editbox37.focus();
      return false;
   }
   if (theForm.TextArea1.value == "")
   {
      alert("Please enter a value for the \"TextArea1\" field.");
      theForm.TextArea1.focus();
      return false;
   }
   if (theForm.TextArea1.value.length < 100)
   {
      alert("Please enter at least 100 characters in the \"TextArea1\" field.");
      theForm.TextArea1.focus();
      return false;
   }
   if (theForm.TextArea1.value.length > 2500)
   {
      alert("Please enter at most 2500 characters in the \"TextArea1\" field.");
      theForm.TextArea1.focus();
      return false;
   }
   if (theForm.TextArea2.value == "")
   {
      alert("Please enter a value for the \"TextArea1\" field.");
      theForm.TextArea2.focus();
      return false;
   }
   if (theForm.TextArea2.value.length < 100)
   {
      alert("Please enter at least 100 characters in the \"TextArea1\" field.");
      theForm.TextArea2.focus();
      return false;
   }
   if (theForm.TextArea2.value.length > 2500)
   {
      alert("Please enter at most 2500 characters in the \"TextArea1\" field.");
      theForm.TextArea2.focus();
      return false;
   }
   return true;
}
</script>
<script>
function ValidateLayer159(theForm)
{
   var regexp;
   if (theForm.Editbox72.value == "")
   {
      alert("Please enter a value for the \"Editbox71\" field.");
      theForm.Editbox72.focus();
      return false;
   }
   if (theForm.Editbox72.value.length < 4)
   {
      alert("Please enter at least 4 characters in the \"Editbox71\" field.");
      theForm.Editbox72.focus();
      return false;
   }
   if (theForm.Editbox72.value.length > 15)
   {
      alert("Please enter at most 15 characters in the \"Editbox71\" field.");
      theForm.Editbox72.focus();
      return false;
   }
   return true;
}
</script>
<script>
function ValidateLayer612(theForm)
{
   var regexp;
   if (theForm.Editbox71.value == "")
   {
      alert("Please enter a value for the \"Editbox71\" field.");
      theForm.Editbox71.focus();
      return false;
   }
   if (theForm.Editbox71.value.length < 1)
   {
      alert("Please enter at least 1 characters in the \"Editbox71\" field.");
      theForm.Editbox71.focus();
      return false;
   }
   if (theForm.Editbox71.value.length > 2)
   {
      alert("Please enter at most 2 characters in the \"Editbox71\" field.");
      theForm.Editbox71.focus();
      return false;
   }
   return true;
}
</script>
<script src="<?php echo asset_url();?>js/wwb10.min.js"></script>
<script>
$(document).ready(function()
{
   var $RollOver18_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver18 a").hover(function(e)
   {
      var cx = 95;
      var cy = 95;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver18_Large.hide();
      $RollOver18_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver18_Large.attr('src', 'images/Desksite-big.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver18_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver18_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   searchParseURL();
   var $RollOver19_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver19 a").hover(function(e)
   {
      var cx = 95;
      var cy = 95;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver19_Large.hide();
      $RollOver19_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver19_Large.attr('src', 'images/Desksite-big.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver19_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver19_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   searchParseURL();
   searchParseURL();
   var $RollOver20_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver20 a").hover(function(e)
   {
      var cx = 95;
      var cy = 95;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver20_Large.hide();
      $RollOver20_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver20_Large.attr('src', 'images/Desksite-big.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver20_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver20_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver21_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver21 a").hover(function(e)
   {
      var cx = 95;
      var cy = 95;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver21_Large.hide();
      $RollOver21_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver21_Large.attr('src', 'images/Desksite-big.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver21_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver21_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver15_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver15 a").hover(function(e)
   {
      var cx = 95;
      var cy = 95;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver15_Large.hide();
      $RollOver15_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver15_Large.attr('src', 'images/Desksite-big.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver15_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver15_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver22_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver22 a").hover(function(e)
   {
      var cx = 95;
      var cy = 95;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver22_Large.hide();
      $RollOver22_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver22_Large.attr('src', 'images/Desksite-big.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver22_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver22_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver16_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver16 a").hover(function(e)
   {
      var cx = 95;
      var cy = 95;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver16_Large.hide();
      $RollOver16_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver16_Large.attr('src', 'images/Desksite-big.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver16_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver16_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver17_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver17 a").hover(function(e)
   {
      var cx = 95;
      var cy = 95;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver17_Large.hide();
      $RollOver17_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver17_Large.attr('src', 'images/Desksite-big.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver17_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver17_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver23_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver23 a").hover(function(e)
   {
      var cx = 95;
      var cy = 95;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver23_Large.hide();
      $RollOver23_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver23_Large.attr('src', 'images/Desksite-big.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver23_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver23_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver24_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver24 a").hover(function(e)
   {
      var cx = 95;
      var cy = 95;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver24_Large.hide();
      $RollOver24_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver24_Large.attr('src', 'images/Desksite-big.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver24_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver24_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver25_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver25 a").hover(function(e)
   {
      var cx = 95;
      var cy = 95;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver25_Large.hide();
      $RollOver25_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver25_Large.attr('src', 'images/Desksite-big.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver25_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver25_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver26_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver26 a").hover(function(e)
   {
      var cx = 95;
      var cy = 95;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver26_Large.hide();
      $RollOver26_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver26_Large.attr('src', 'images/Desksite-big.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver26_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver26_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver1_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver1 a").hover(function(e)
   {
      var cx = 50;
      var cy = 50;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver1_Large.hide();
      $RollOver1_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver1_Large.attr('src', 'images/my_file.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver1_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver1_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   $("a[data-rel='prettyPhoto_SlideShow3[SlideShow3]']").attr('rel', 'prettyPhoto_SlideShow3[SlideShow3]');
   $("a[rel^='prettyPhoto_SlideShow3']").prettyPhoto({theme:'facebook',social_tools:false});
   var $RollOver2_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver2 a").hover(function(e)
   {
      var cx = 64;
      var cy = 64;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver2_Large.hide();
      $RollOver2_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver2_Large.attr('src', 'images/3Dpro.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver2_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver2_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   searchParseURL();
   var $RollOver3_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver3 a").hover(function(e)
   {
      var cx = 64;
      var cy = 64;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver3_Large.hide();
      $RollOver3_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver3_Large.attr('src', 'images/Catalogue1.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver3_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver3_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   searchParseURL();
   var $RollOver4_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver4 a").hover(function(e)
   {
      var cx = 64;
      var cy = 64;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver4_Large.hide();
      $RollOver4_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver4_Large.attr('src', 'images/video%20%281%29.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver4_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver4_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   searchParseURL();
   var $RollOver5_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver5 a").hover(function(e)
   {
      var cx = 64;
      var cy = 64;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver5_Large.hide();
      $RollOver5_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver5_Large.attr('src', 'images/Alerts1.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver5_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver5_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   $("#Layer248").stickylayer({orientation: 2, position: [0, 0], delay: 0});
   var $RollOver13_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver13 a").hover(function(e)
   {
      var cx = 64;
      var cy = 64;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver13_Large.hide();
      $RollOver13_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver13_Large.attr('src', 'images/video%20%281%29.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver13_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver13_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver27_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver27 a").hover(function(e)
   {
      var cx = 64;
      var cy = 64;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver27_Large.hide();
      $RollOver27_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver27_Large.attr('src', 'images/video%20%281%29.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver27_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver27_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver28_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver28 a").hover(function(e)
   {
      var cx = 64;
      var cy = 64;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver28_Large.hide();
      $RollOver28_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver28_Large.attr('src', 'images/video%20%281%29.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver28_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver28_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver29_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver29 a").hover(function(e)
   {
      var cx = 64;
      var cy = 64;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver29_Large.hide();
      $RollOver29_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver29_Large.attr('src', 'images/video%20%281%29.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver29_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver29_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver31_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver31 a").hover(function(e)
   {
      var cx = 48;
      var cy = 48;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver31_Large.hide();
      $RollOver31_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver31_Large.attr('src', 'images/Globe1.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver31_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver31_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver30_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver30 a").hover(function(e)
   {
      var cx = 64;
      var cy = 64;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver30_Large.hide();
      $RollOver30_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver30_Large.attr('src', 'images/UD-0.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver30_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver30_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   $("a[data-rel='PhotoGallery1']").attr('rel', 'PhotoGallery1');
   $("a[rel^='PhotoGallery1']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery2']").attr('rel', 'PhotoGallery2');
   $("a[rel^='PhotoGallery2']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery3']").attr('rel', 'PhotoGallery3');
   $("a[rel^='PhotoGallery3']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   var $RollOver32_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver32 a").hover(function(e)
   {
      var cx = 64;
      var cy = 64;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver32_Large.hide();
      $RollOver32_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver32_Large.attr('src', 'images/Ranking1.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver32_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver32_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver33_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver33 a").hover(function(e)
   {
      var cx = 95;
      var cy = 95;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver33_Large.hide();
      $RollOver33_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver33_Large.attr('src', 'images/Desksite-big.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver33_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver33_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver34_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver34 a").hover(function(e)
   {
      var cx = 95;
      var cy = 95;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver34_Large.hide();
      $RollOver34_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver34_Large.attr('src', 'images/Desksite-big.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver34_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver34_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver35_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver35 a").hover(function(e)
   {
      var cx = 95;
      var cy = 95;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver35_Large.hide();
      $RollOver35_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver35_Large.attr('src', 'images/Desksite-big.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver35_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver35_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver36_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver36 a").hover(function(e)
   {
      var cx = 95;
      var cy = 95;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver36_Large.hide();
      $RollOver36_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver36_Large.attr('src', 'images/Desksite-big.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver36_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver36_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver37_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver37 a").hover(function(e)
   {
      var cx = 95;
      var cy = 95;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver37_Large.hide();
      $RollOver37_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver37_Large.attr('src', 'images/Desksite-big.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver37_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver37_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var $RollOver38_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver38 a").hover(function(e)
   {
      var cx = 95;
      var cy = 95;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver38_Large.hide();
      $RollOver38_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver38_Large.attr('src', 'images/Desksite-big.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver38_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver38_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   $("#SlideShow2").slideshow(
   {
      interval: 3000,
      type: 'sequence',
      effect: 'none',
      direction: '',
      pagination: false,
      effectlength: 1000
   });
   $("#SlideShow4").slideshow(
   {
      interval: 3000,
      type: 'sequence',
      effect: 'none',
      direction: '',
      pagination: false,
      effectlength: 1000
   });
   var $RollOver12_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver12 a").hover(function(e)
   {
      var cx = 64;
      var cy = 64;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver12_Large.hide();
      $RollOver12_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver12_Large.attr('src', 'images/Statistics1.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver12_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver12_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   var jQueryTabs1Opts =
   {
      show: true,
      event: 'click',
      collapsible: false
   };
   $("#jQueryTabs1").tabs(jQueryTabs1Opts);
   var jQueryTabs2Opts =
   {
      show: true,
      event: 'click',
      collapsible: false
   };
   $("#jQueryTabs2").tabs(jQueryTabs2Opts);
   $("a[data-rel='PhotoGallery4']").attr('rel', 'PhotoGallery4');
   $("a[rel^='PhotoGallery4']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery5']").attr('rel', 'PhotoGallery5');
   $("a[rel^='PhotoGallery5']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("#Layer262").stickylayer({orientation: 1, position: [400, 150], delay: 0});
   var $RollOver14_Large = $('<img style="border-width:0"/>').hide().appendTo('body');
   $("#RollOver14 a").hover(function(e)
   {
      var cx = 95;
      var cy = 95;
      var x = $(this).offset().left + $(this).parent().width()/2 - cx/2;
      var y = $(this).offset().top + $(this).parent().height()/2 - cy/2;
      $RollOver14_Large.hide();
      $RollOver14_Large.attr('title', $(this).find('img').attr('title'));
      $RollOver14_Large.attr('src', 'images/Desksite-big.png').css({
       'position' : 'absolute',
       'z-index' : 9000,
       'left': x,
       'top' : y,
       'width': cx,
       'height': cy,
      })
      .stop().show('scale', 100)
      .one('click', function()
      {
        $RollOver14_Large.stop().fadeOut();
      })
      .one('mouseout', function()
      {
        $RollOver14_Large.stop().hide('scale', 100);
      });
   }, function()
   {
   });
   $("#SlideShow1").slideshow(
   {
      interval: 2000,
      type: 'sequence',
      effect: 'none',
      direction: '',
      pagination: false,
      effectlength: 1000
   });
});
function customAlert(msg) {
	$("#customAlertText").html(msg);
	$('#customAlertBox').modal({show:true,backdrop: 'static',keyboard: false});
}
var interval = null;
function startWiggle(input) {
	$(input).wiggle();
}
function stopWiggle(input) {
	$(input).wiggle('stop');
	clearInterval(interval);
}
function showIncompleteModal() {
	$('#incompleteAccountModal').modal({show:true,backdrop: 'static',keyboard: false});
}
function confirmbox(msg, yesCallback, noCallback) {
    $('#cnb_message').html(msg);
    $('#confirmBoxModal').modal({show:true,backdrop: 'static',keyboard: false});

    $('#cnbYes').click(function() {
        $("#confirmBoxModal").modal('hide');
        yesCallback();
    });

    $('#cnbNo').click(function() {
    	$("#confirmBoxModal").modal('hide');
        noCallback();
    });
}
</script>
</head>
<body>
<div id="customAlertBox" class="modal fade" role="dialog" style="z-index:13000;">
  	<div class="modal-dialog" style="width:400px;">
    	<div class="modal-content" style="border-radius:0px;margin-top:25%;">
      		<div class="modal-body">
      			<div class="row" style="padding-top:10px;">
      				<div class="col-sm-2"></div>
      				<div class="col-sm-8">
	      				<div style="text-align: center;">
							<span style="color: #F05539; font-family: 'Arial Black'; font-size: 16px;"></span>
						</div>
						<br><br>
						<div style="text-align: center;" id="customAlertText">
							My Alert
						</div>
					</div>
					<div class="col-sm-2"></div>
      			</div>
      			<br>
      			<div class="row text-center">
      				<a href="" class="btn btn-sm btn-danger-custom" data-dismiss="modal" style="width:100px;">OK</a>
      			</div>
      			<br><br>
      		</div>
    	</div>
  	</div>
</div>
<div id="confirmBoxModal" class="modal fade" role="dialog" style="z-index:13000;">
  	<div class="modal-dialog" style="width:400px;">
    	<div class="modal-content" style="border-radius:0px;margin-top:25%;">
      		<div class="modal-body">
      			<div class="row" style="padding-top:10px;">
      				<div class="col-sm-2"></div>
      				<div class="col-sm-8">
	      				<div style="text-align: center;">
							<span style="color: #F05539; font-family: 'Arial Black'; font-size: 16px;">WARNING</span>
						</div>
						<br><br>
						<div style="text-align: center;" id="cnb_message">
							
						</div>
					</div>
					<div class="col-sm-2"></div>
      			</div>
      			<br>
      			<div class="row text-center">
      				<input type="button" class="btn btn-sm btn-danger-custom" style="width:100px;" id="cnbYes" value="Yes"/>
      				<input type="button" class="btn btn-sm btn-danger-custom" style="width:100px;" id="cnbNo" value="No"/>
      			</div>
      			<br><br>
      		</div>
    	</div>
  	</div>
</div>
<div id="incompleteAccountModal" class="modal fade" role="dialog" style="z-index:13000;">
  	<div class="modal-dialog" style="width:400px;">
    	<div class="modal-content" style="border-radius:0px;margin-top:25%;">
      		<div class="modal-body">
      			<div class="row" style="padding-top:10px;">
      				<div class="col-sm-2"></div>
      				<div class="col-sm-8">
	      				<div style="text-align: center;">
							<span style="color: #F05539; font-family: 'Arial Black'; font-size: 16px;">WARNING</span>
						</div>
						<br><br>
						<div style="text-align: center;">
							Please complete build your <strong>Desksite</strong> first
						</div>
					</div>
					<div class="col-sm-2"></div>
      			</div>
      			<br>
      			<div class="row text-center">
      				<a href="" class="btn btn-sm btn-danger-custom" data-dismiss="modal" style="width:100px;">OK</a>
      			</div>
      			<br><br>
      		</div>
    	</div>
  	</div>
</div>
<div id="myvcatalogue_overlay" class="modal fade" style="background-color:#404040;z-index:13000;">
	<div class="modal-dialog" style="background-color:#404040;width:990px;">
		<div class="modal-content" style="background: transparent;box-shadow:none;-webkit-box-shadow:none;border: 0px;">
			<div class="modal-header" style="border:0px;">
				<button type="button" class="close catalogue_modal_close" data-dismiss="modal" aria-hidden="true">x</button>
			</div>
			<div class="modal-body catalogue_modal_body" style="width:960px;height:603px;">
				<input type="hidden" id="mypcatalogue_id" value="" />
				<div class="row">
					<div class="col-md-10">
						<div id="mycatalogue_page_content" class="catalogue_outer_body">
						</div>
					</div>
					<div class="col-md-2 " style="float:left">
						<ul class="share pull-right">
							<li class="share-button"><a href=""><i class="fa fa-thumbs-up" aria-hidden="true">&nbsp;</i></a></li>
							<li class="share-button"><a href=""><i class="fa fa-comments" aria-hidden="true">&nbsp;</i></a></li>
							<li class="share-button"><a href=""><i class="fa fa-share-alt" aria-hidden="true">&nbsp;</i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<div id="Layer84"
		style="position: fixed; text-align: center; left: 0; top: 0; right: 0; bottom: 0; z-index: 12762;">
		<div id="Layer84_Container"
			style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
			<div id="Layer630"
				style="position: absolute; text-align: left; left: 384px; top: 50px; width: 519px; height: 153px; z-index: 3697;">
				<div id="wb_Text1672"
					style="position: absolute; left: 6px; top: 5px; width: 504px; height: 132px; z-index: 2; text-align: left;">
					<span
						style="color: #FFFFFF; font-family: Impact; font-size: 107px;">MY
						STATION</span>
				</div>
				<div id="wb_Text1673"
					style="position: absolute; left: 113px; top: 119px; width: 299px; height: 15px; z-index: 3; text-align: left;">
					<span style="color: #FFFFFF; font-family: Arial; font-size: 12px;">Built
						For Your Innovation, Fast Access And Full Control</span>
				</div>
			</div>
			<div id="Layer1" class="mystation_layer1" >
				<div id="Layer1_Container" class="mystation_layer1_container" >
					<div id="Layer2" class="mystation_layer2" >
					</div>
					<div id="wb_Text355" class="layer1_wb_text wb_text_335" >
						<span class="layer1_wb_span">Help</span>
					</div>
					<div id="wb_Text1" class="layer1_wb_text wb_text_1" >
						<span class="layer1_wb_span">Tools</span>
					</div>
					<div id="wb_Text2" class="layer1_wb_text wb_text_2" >
						<span class="layer1_wb_span">Alerts</span>
					</div>
					<div id="wb_Text3" class="layer1_wb_text wb_text_3" >
						<span class="layer1_wb_span">Verification</span>
					</div>
					<div id="wb_Text5" class="layer1_wb_text wb_text_5" >
						<span class="layer1_wb_span">My Videos</span>
					</div>
<!-- 					<div id="wb_Text6" class="layer1_wb_text wb_text_6" > -->
<!-- 						<span class="layer1_wb_span">3D Pro</span> -->
<!-- 					</div> -->
					<div id="wb_Text7" class="layer1_wb_text wb_text_7" >
						<span class="layer1_wb_span">More</span>
					</div>
					<div id="wb_Text8" class="layer1_wb_text wb_text_8" >
						<span class="layer1_wb_span">UDtalks</span>
					</div>
					<div id="wb_Text9" class="layer1_wb_text wb_text_9" >
						<span class="layer1_wb_span">My Account</span>
					</div>
					<div id="wb_Text10" class="layer1_wb_text wb_text_10" >
						<span class="layer1_wb_span">Membership</span>
					</div>
					<div id="wb_Text11" class="layer1_wb_text wb_text_11" >
						<span class="layer1_wb_span">My Desksite</span>
					</div>
<!-- 					<div id="wb_Text4" class="layer1_wb_text wb_text_4" > -->
<!-- 						<span class="layer1_wb_span">Catalogues</span> -->
<!-- 					</div> -->
					<div id="wb_Text12" class="layer1_wb_text wb_text_12" >
						<span class="layer1_wb_span">Exit</span>
					</div>
					<div id="wb_Text241" class="layer1_wb_text wb_text_241" >
						<span class="layer1_wb_span">My Files</span>
					</div>
					<div id="wb_Text242" class="layer1_wb_text wb_text_242" >
						<span class="layer1_wb_span">Languages</span>
					</div>
					<div id="wb_Image33" class="wb_img_33" >
						<a href="#" onclick="getMyShipperDeskside();">
							<img src="<?php echo asset_url();?>images/Desksite-big_br.png" id="Image33" alt="" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
						</a>
					</div>
					<div id="wb_Image37" class="wb_img_37" >
						<a href="#" onclick="getMyAccount();">
                     <?php if(!empty($profile_img) && file_exists(asset_url().$profile_img)) { ?>
							  <img src="<?php echo asset_url().$profile_img;?>" id="Image37" alt="" class="myaccountimg" style="width:50px;height:50px;margin-top:4px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
                     <?php }else { ?>
                        <img src="<?php echo asset_url().'/images/Account2_new.png';?>" id="Image37" alt="" class="myaccountimg" style="width:50px;height:50px;margin-top:4px;" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
                     <?php } ?>
						</a>
					</div>
					<div id="wb_Image40" class="wb_img_40" >
	 					<a href="#" onclick="getVedios();">
							<img src="<?php echo asset_url();?>images/video_br.png" id="Image40" alt="" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
						</a>
					</div>
					<div id="wb_Image41" class="wb_img_41" >
						<a href="#" onclick="viewUDTalk();">
							<img src="<?php echo asset_url();?>images/UD-0_br.png" id="Image41" alt="" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
						</a>
					</div>
					<div id="wb_Image39" class="wb_img_39" >
						<a href="#" onclick="getBusinessVerification();">
							<img src="<?php echo asset_url();?>images/img1090_br.png" id="Image39" alt="" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
 						</a> 
 					</div> 
					<div id="wb_Image42" class="wb_img_42" >
 						<a href="#" onclick="openMoreScreen();">
							<img src="<?php echo asset_url();?>images/More.png" id="Image42" alt="" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
 						</a> 
 					</div> 
					<div id="wb_Image43" class="wb_img_43" >
						<a href="#" onclick="getMyFiles();">
							<img src="<?php echo asset_url();?>images/folder-user_br.png" id="Image43" alt="" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
						</a>
					</div>
					<div id="Layer631" class="mystation_layer631" >
						<div id="wb_Text295" class="wb_text_295" >
							<span style="color: #FFFFFF; font-family: Arial; font-size: 9.3px;vertical-align: middle;"><strong><span id="totalalert"><?php echo $totalcount;?></span></strong></span>
						</div>
					</div>
					<div id="wb_Image44" class="wb_img_44" >
						<a href="#" onclick="getLanguage();">
							<img src="<?php echo asset_url();?>images/Globe1_br.png" id="Image44" alt="" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
						</a>
					</div>
					<div id="wb_Image45" class="wb_img_45" >
						<a href="#" class="triggerClick" onclick="getAlerts();">
							<img src="<?php echo asset_url();?>images/Alerts1_br.png" id="Image45" alt="" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
						</a>
					</div>
					<div id="wb_Image47" class="wb_img_47" >
						<a href="#" onclick="ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');return false;">
							<img src="<?php echo asset_url();?>images/help-small_br.png" id="Image47" alt="" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
						</a>
					</div>
					<div id="wb_Image48" class="wb_img_48" >
						<a href="<?php echo base_url();?>">
							<img src="<?php echo asset_url();?>images/exit_br.png" id="Image48" alt="" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
						</a>
					</div>
					<div id="wb_Image36" class="wb_img_36" >
						<a href="#" onclick="getMyPackages();">
							<img src="<?php echo asset_url();?>images/img2048_br.png" id="Image36" alt="" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
						</a>
					</div>
					<div id="wb_Image46" class="wb_img_46" >
						<a href="javascript:viewShipperTools();">
							<img src="<?php echo asset_url();?>images/configure-2_br.png" id="Image46" alt="" onmouseover="startWiggle(this);" onmouseleave="stopWiggle(this);">
						</a>
					</div>
				</div>
			</div>
			<div id="Layer39"
				style="position: absolute; text-align: center; visibility: hidden; left: 0px; top: 11px; width: 1279px; height: 807px; z-index: 3702;">
				<div id="Layer39_Container"
					style="width: 1279px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer41"
						style="position: absolute; text-align: center; left: 0%; top: 18px; width: 99%; height: 784px; z-index: 199;">
						<div id="Layer41_Container"
							style="width: 1273px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
						</div>
					</div>
					<div id="wb_Text156"
						style="position: absolute; left: 18px; top: 687px; width: 148px; height: 20px; text-align: center; z-index: 200;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 8px;">Copyrights
							| TRDSTATION 2013-2016@All Rights Reserved</span>
					</div>
					<div id="wb_Text157"
						style="position: absolute; left: 55px; top: 644px; width: 72px; height: 14px; text-align: center; z-index: 201;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 11px;">TRADE</span>
					</div>
					<div id="wb_Text158"
						style="position: absolute; left: 59px; top: 655px; width: 72px; height: 25px; z-index: 202; text-align: left;">
						<span
							style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">STATION</span>
					</div>
					<div id="Layer43"
						style="position: absolute; overflow: auto; text-align: center; left: 171px; top: 24px; width: 1086px; height: 759px; z-index: 203;">
						<div id="Layer43_Container"
							style="width: 1086px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<form name="SiteSearch3_form" id="SiteSearch3_form"
								accept-charset="UTF-8" onsubmit="return searchPage(features)">
								<input type="text" id="SiteSearch3"
									style="position: absolute; left: 240px; top: 202px; width: 487px; height: 29px; line-height: 29px; z-index: 189;"
									name="SiteSearch1" value=""
									placeholder="Type products name or no.">
							</form>
							<div id="wb_Text159"
								style="position: absolute; left: 80px; top: 76px; width: 405px; height: 25px; z-index: 190; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Georgia; font-size: 21px;">Manage
									Your New Arrivals Menu</span>
							</div>
							<div id="wb_Text160"
								style="position: absolute; left: 81px; top: 106px; width: 509px; height: 42px; z-index: 191; text-align: left;">
								<span
									style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Select
									the required products, then click on add icon to add to your
									New Arrivals menu..<br>To display your products click on main
									&amp; Sub paroducts drop down list, make a selection and click
									on search icon. You can also type a specific product name in
									search field then click on search icon..
								</span>
							</div>
							<div id="Layer44"
								style="position: absolute; text-align: left; left: 37px; top: 271px; width: 1008px; height: 166px; z-index: 192;">
								<div id="wb_Text162"
									style="position: absolute; left: 578px; top: 58px; width: 123px; height: 15px; z-index: 170; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Product
										No.: JS0123</span>
								</div>
								<div id="wb_Text163"
									style="position: absolute; left: 578px; top: 80px; width: 329px; height: 15px; z-index: 171; text-align: left;">
									<span
										style="color: #1E90FF; font-family: Arial; font-size: 12px;">Location:
										Shoes &gt; Sport shoes&gt; Brown High Neck Shoes</span>
								</div>
								<div id="wb_Text164"
									style="position: absolute; left: 259px; top: 38px; width: 175px; height: 15px; z-index: 172; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Brown
										High Neck Shoes</span>
								</div>
								<div id="wb_Text165"
									style="position: absolute; left: 258px; top: 61px; width: 278px; height: 42px; z-index: 173; text-align: left;">
									<span
										style="color: #808080; font-family: Arial; font-size: 11px;">Our
										men&#8217;s shoes department covers virtually every,
										men&#8217;s shoes department,Our men&#8217;s shoes department
										covers virtually every, men&#8217;s shoes department, wit...</span>
								</div>
								<div id="wb_Text166"
									style="position: absolute; left: 259px; top: 111px; width: 78px; height: 15px; z-index: 174; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Arial; font-size: 12px;">USD
										60.00</span>
								</div>
								<div id="wb_Text167"
									style="position: absolute; left: 378px; top: 112px; width: 167px; height: 15px; z-index: 175; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Min.
										Qty : 2 Containers</span>
								</div>
								<div id="wb_Shape42"
									style="position: absolute; left: 112px; top: 33px; width: 129px; height: 103px; z-index: 176;">
									<a href="./desk_details.php" target="_blank"><img
										src="<?php echo asset_url();?>images/img1295.png" id="Shape42"
										alt="" style="width: 129px; height: 103px;"></a>
								</div>
								<input type="checkbox" id="Checkbox12" name="" value="on"
									style="position: absolute; left: 82px; top: 68px; z-index: 177;">
							</div>
							<div id="Layer45"
								style="position: absolute; text-align: left; left: 37px; top: 440px; width: 1008px; height: 166px; z-index: 193;">
								<div id="wb_Text168"
									style="position: absolute; left: 578px; top: 57px; width: 123px; height: 15px; z-index: 178; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Product
										No.: JS0123</span>
								</div>
								<div id="wb_Text169"
									style="position: absolute; left: 578px; top: 79px; width: 329px; height: 15px; z-index: 179; text-align: left;">
									<span
										style="color: #1E90FF; font-family: Arial; font-size: 12px;">Location:
										Shoes &gt; Sport shoes&gt; Brown High Neck Shoes</span>
								</div>
								<div id="wb_Text170"
									style="position: absolute; left: 259px; top: 38px; width: 175px; height: 15px; z-index: 180; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Brown
										High Neck Shoes</span>
								</div>
								<div id="wb_Text171"
									style="position: absolute; left: 258px; top: 62px; width: 279px; height: 42px; z-index: 181; text-align: left;">
									<span
										style="color: #808080; font-family: Arial; font-size: 11px;">Our
										men&#8217;s shoes department covers virtually every,
										men&#8217;s shoes department,Our men&#8217;s shoes department
										covers virtually every, men&#8217;s shoes department, wit...</span>
								</div>
								<div id="wb_Text172"
									style="position: absolute; left: 259px; top: 111px; width: 78px; height: 15px; z-index: 182; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Arial; font-size: 12px;">USD
										60.00</span>
								</div>
								<div id="wb_Text173"
									style="position: absolute; left: 378px; top: 112px; width: 167px; height: 15px; z-index: 183; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Min.
										Qty : 2 Containers</span>
								</div>
								<div id="wb_Shape62"
									style="position: absolute; left: 112px; top: 33px; width: 129px; height: 103px; z-index: 184;">
									<a href="./desk_details.php" target="_blank"><img
										src="<?php echo asset_url();?>images/img1297.png" id="Shape62"
										alt="" style="width: 129px; height: 103px;"></a>
								</div>
								<input type="checkbox" id="Checkbox13" name="" value="on"
									style="position: absolute; left: 82px; top: 68px; z-index: 185;">
							</div>
							<div id="Layer46"
								style="position: absolute; text-align: center; left: 0px; top: 0px; width: 1085px; height: 45px; z-index: 194;">
								<div id="Layer46_Container"
									style="width: 1085px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
									<button id="AdvancedButton9"
										onclick="ShowObjectWithEffect('Layer39', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');return false;"
										type="button"
										style="position: absolute; left: 1038px; top: 0px; width: 47px; height: 45px; z-index: 186;"
										onclick="window.location=''" name="" value="">
										<div style="text-align: center">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 20px">X</span>
										</div>
									</button>
								</div>
							</div>
							<input type="button" id="Button3"
								onclick="searchPage();return false;" name="Search" value=""
								style="position: absolute; left: 690px; top: 201px; width: 45px; height: 33px; z-index: 195;">
							<select name="Combobox1" size="1" id="Combobox8"
								style="position: absolute; left: 80px; top: 201px; width: 156px; height: 34px; z-index: 196;">
								<option>Main & Sub Product</option>
								<option>Lady Fashion</option>
								<option>Kids Fashion</option>
								<option>include sub menu</option>
							</select>
							<div id="Layer47"
								style="position: absolute; text-align: left; left: 443px; top: 0px; width: 178px; height: 45px; z-index: 197;"
								onclick="ShowObject('Layer39', 1);return false;">
								<button id="AdvancedButton11"
									onclick="ShowObject('Layer39', 1);return false;" type="button"
									style="position: absolute; left: 0px; top: 0px; width: 150px; height: 45px; z-index: 187;"
									onclick="window.location=''" name="" value="">
									<div style="text-align: center">
										<span
											style="color: #1E90FF; font-family: Arial; font-size: 13px">
										</span><span
											style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>Add
												Product</b></span>
									</div>
								</button>
								<div id="wb_Image12"
									style="position: absolute; left: 1px; top: 6px; width: 32px; height: 32px; z-index: 188;">
									<img src="<?php echo asset_url();?>images/img1299.png"
										id="Image12" alt="">
								</div>
							</div>
							<div id="wb_Text174"
								style="position: absolute; left: 81px; top: 160px; width: 507px; height: 44px; z-index: 198; text-align: left;">
								<span
									style="color: #FF6347; font-family: Arial; font-size: 11px;">To
									add a product to your New Arrivals menu, the product must be
									added first to your Main or Sub Products.<br>
								</span>
							</div>
						</div>
					</div>
					<div id="wb_Shape63"
						style="position: absolute; left: 13px; top: 416px; width: 150px; height: 54px; z-index: 204;">
						<a href=""
							onclick="ShowObject('Layer69', 0);ShowObject('Layer93', 0);ShowObject('Layer83', 0);ShowObject('Layer22', 0);ShowObject('Layer33', 1);ShowObject('Layer39', 0);return false;"><div
								id="Shape63">
								<div id="Shape63_text">
									<span
										style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 13px;">Hot
										Sale Menu</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape64"
						style="position: absolute; left: 13px; top: 472px; width: 150px; height: 54px; z-index: 205;">
						<a href=""
							onclick="ShowObject('Layer69', 0);ShowObject('Layer93', 0);ShowObject('Layer83', 0);ShowObject('Layer22', 0);ShowObject('Layer33', 0);ShowObject('Layer39', 1);return false;"><div
								id="Shape64">
								<div id="Shape64_text">
									<span
										style="color: #2D2D2D; font-family: 'MS Shell Dlg'; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #2D2D2D; font-family: 'MS Shell Dlg'; font-size: 13px;">New
										Arrivals Menu</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape65"
						style="position: absolute; left: 13px; top: 528px; width: 150px; height: 39px; z-index: 206;">
						<a href="./desksite.php" target="_blank"><div id="Shape65">
								<div id="Shape65_text">
									<span
										style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">View
										My Desksite</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Text175"
						style="position: absolute; left: 49px; top: 127px; width: 81px; height: 16px; text-align: center; z-index: 207;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 13px;">My
							Website</span>
					</div>
					<div id="RollOver20"
						style="position: absolute; left: 66px; top: 69px; overflow: hidden; width: 52px; height: 52px; z-index: 208">
						<a href=""> <img class="hover" alt=""
							src="<?php echo asset_url();?>images/Desksite-small.png">

						</a>
					</div>
					<div id="wb_Shape67"
						style="position: absolute; left: 12px; top: 325px; width: 150px; height: 54px; z-index: 209;">
						<a href=""
							onclick="ShowObject('Layer69', 0);ShowObject('Layer93', 0);ShowObject('Layer83', 0);ShowObject('Layer22', 1);ShowObject('Layer33', 0);ShowObject('Layer39', 0);return false;"><div
								id="Shape67">
								<div id="Shape67_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Products</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape68"
						style="position: absolute; left: 12px; top: 269px; width: 150px; height: 54px; z-index: 210;">
						<a href=""
							onclick="ShowObject('Layer69', 1);ShowObject('Layer93', 0);ShowObject('Layer83', 0);ShowObject('Layer22', 0);ShowObject('Layer33', 0);ShowObject('Layer39', 0);return false;"><div
								id="Shape68">
								<div id="Shape68_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Sub
										Products</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape69"
						style="position: absolute; left: 12px; top: 213px; width: 150px; height: 54px; z-index: 211;">
						<a href=""
							onclick="ShowObject('Layer69', 0);ShowObject('Layer93', 0);ShowObject('Layer83', 1);ShowObject('Layer22', 0);ShowObject('Layer33', 0);ShowObject('Layer39', 0);return false;"><div
								id="Shape69">
								<div id="Shape69_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Main
										Products</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape70"
						style="position: absolute; left: 12px; top: 157px; width: 150px; height: 54px; z-index: 212;">
						<a href=""
							onclick="ShowObject('Layer69', 0);ShowObject('Layer93', 1);ShowObject('Layer83', 0);ShowObject('Layer22', 0);ShowObject('Layer33', 0);ShowObject('Layer39', 0);return false;"><div
								id="Shape70">
								<div id="Shape70_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Backgrounds</span>
								</div>
							</div></a>
					</div>
				</div>
			</div>
			<div id="Layer69"
				style="position: absolute; text-align: center; visibility: hidden; left: 0px; top: 11px; width: 1279px; height: 807px; z-index: 3703;">
				<div id="Layer69_Container"
					style="width: 1279px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer74"
						style="position: absolute; text-align: center; left: 0%; top: 18px; width: 99%; height: 784px; z-index: 333;">
						<div id="Layer74_Container"
							style="width: 1273px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
						</div>
					</div>
					<div id="wb_Text206"
						style="position: absolute; left: 18px; top: 687px; width: 148px; height: 20px; text-align: center; z-index: 334;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 8px;">Copyrights
							| TRDSTATION 2013-2016@All Rights Reserved</span>
					</div>
					<div id="wb_Text207"
						style="position: absolute; left: 55px; top: 644px; width: 72px; height: 14px; text-align: center; z-index: 335;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 11px;">TRADE</span>
					</div>
					<div id="wb_Text208"
						style="position: absolute; left: 59px; top: 655px; width: 72px; height: 25px; z-index: 336; text-align: left;">
						<span
							style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">STATION</span>
					</div>
					<div id="wb_Shape156"
						style="position: absolute; left: 13px; top: 416px; width: 150px; height: 54px; z-index: 337;">
						<a href=""
							onclick="ShowObject('Layer69', 0);ShowObject('Layer93', 0);ShowObject('Layer83', 0);ShowObject('Layer22', 0);ShowObject('Layer33', 1);ShowObject('Layer39', 0);return false;"><div
								id="Shape156">
								<div id="Shape156_text">
									<span
										style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 13px;">Hot
										Sales Menu</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape157"
						style="position: absolute; left: 13px; top: 472px; width: 150px; height: 54px; z-index: 338;">
						<a href=""
							onclick="ShowObject('Layer69', 0);ShowObject('Layer93', 0);ShowObject('Layer83', 0);ShowObject('Layer22', 0);ShowObject('Layer33', 0);ShowObject('Layer39', 1);return false;"><div
								id="Shape157">
								<div id="Shape157_text">
									<span
										style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 13px;">New
										Arrivals Menu</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape158"
						style="position: absolute; left: 13px; top: 528px; width: 150px; height: 39px; z-index: 339;">
						<a href="./desksite.php" target="_blank"><div id="Shape158">
								<div id="Shape158_text">
									<span
										style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">View
										My Desksite</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Text229"
						style="position: absolute; left: 49px; top: 127px; width: 81px; height: 16px; text-align: center; z-index: 340;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 13px;">My
							Website</span>
					</div>
					<div id="RollOver24"
						style="position: absolute; left: 66px; top: 69px; overflow: hidden; width: 52px; height: 52px; z-index: 341">
						<a href=""> <img class="hover" alt=""
							src="<?php echo asset_url();?>images/Desksite-small.png">

						</a>
					</div>
					<div id="wb_Shape159"
						style="position: absolute; left: 12px; top: 325px; width: 150px; height: 54px; z-index: 342;">
						<a href=""
							onclick="ShowObject('Layer69', 0);ShowObject('Layer93', 0);ShowObject('Layer83', 0);ShowObject('Layer22', 1);ShowObject('Layer33', 0);ShowObject('Layer39', 0);return false;"><div
								id="Shape159">
								<div id="Shape159_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Products</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape160"
						style="position: absolute; left: 12px; top: 269px; width: 150px; height: 54px; z-index: 343;">
						<a href=""
							onclick="ShowObject('Layer69', 1);ShowObject('Layer93', 0);ShowObject('Layer83', 0);ShowObject('Layer22', 0);ShowObject('Layer33', 0);ShowObject('Layer39', 0);return false;"><div
								id="Shape160">
								<div id="Shape160_text">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FF6347; font-family: Arial; font-size: 13px;">Sub
										Products</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape161"
						style="position: absolute; left: 12px; top: 213px; width: 150px; height: 54px; z-index: 344;">
						<a href=""
							onclick="ShowObject('Layer69', 0);ShowObject('Layer93', 0);ShowObject('Layer83', 1);ShowObject('Layer22', 0);ShowObject('Layer33', 0);ShowObject('Layer39', 0);return false;"><div
								id="Shape161">
								<div id="Shape161_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Main
										Products</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape162"
						style="position: absolute; left: 12px; top: 157px; width: 150px; height: 54px; z-index: 345;">
						<a href=""
							onclick="ShowObject('Layer69', 0);ShowObject('Layer93', 1);ShowObject('Layer83', 0);ShowObject('Layer22', 0);ShowObject('Layer33', 0);ShowObject('Layer39', 0);return false;"><div
								id="Shape162">
								<div id="Shape162_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Backgrounds</span>
								</div>
							</div></a>
					</div>
					<div id="Layer75"
						style="position: absolute; text-align: center; left: 170px; top: 24px; width: 1088px; height: 692px; z-index: 346;">
						<div id="Layer75_Container"
							style="width: 1088px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<div id="wb_Text209"
								style="position: absolute; left: 485px; top: 80px; width: 148px; height: 25px; z-index: 231; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Georgia; font-size: 21px;">Sub
									Products</span>
							</div>
							<div id="wb_Text210"
								style="position: absolute; left: 203px; top: 115px; width: 654px; height: 14px; text-align: center; z-index: 232;">
								<span
									style="color: #3C3C3C; font-family: Arial; font-size: 11px;">The
									Sub Products are the products listed under each selected Main
									Product. </span>
							</div>
							<div id="wb_CssMenu15"
								style="position: absolute; left: 94px; top: 68px; width: 157px; height: 192px; visibility: hidden; z-index: 233;">
								<ul>
									<li class="firstmain"><a class="withsubmenu" href="#"
										target="_self">Men&nbsp;Fashion</a>

										<ul>
											<li class="firstitem"><a href="#" target="_self">Suits</a></li>
											<li><a href="#" target="_self">Shirts</a></li>
											<li><a href="#" target="_self">T-Shirts</a></li>
											<li><a href="#" target="_self">Trousers</a></li>
											<li class="lastitem"><a href="#" target="_self">More</a></li>
										</ul></li>
									<li><a class="withsubmenu" href="#" target="_self">Lady&nbsp;Fashion</a>

										<ul>
											<li class="firstitem"><a href="#" target="_self">Skirt</a></li>
											<li><a href="#" target="_self">Blouse</a></li>
											<li><a href="#" target="_self">T-Shirts</a></li>
											<li><a href="#" target="_self">Long&nbsp;Dress</a></li>
											<li class="lastitem"><a href="#" target="_self">Evening&nbsp;Dress</a>
											</li>
										</ul></li>
									<li><a href="#" target="_self">Kids&nbsp;Fashion</a></li>
									<li><a href="#" target="_self">More</a></li>
									<li><a href="#" target="_self">More</a></li>
									<li><a href="#" target="_self">Up&nbsp;to&nbsp;10&nbsp;products</a>
									</li>
								</ul>
								<br>
							</div>
							<div id="Layer76"
								style="position: absolute; text-align: center; left: 1px; top: 0px; width: 1085px; height: 45px; z-index: 234;">
								<div id="Layer76_Container"
									style="width: 1085px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
									<button id="AdvancedButton25"
										onclick="ShowObjectWithEffect('Layer69', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');return false;"
										type="button"
										style="position: absolute; left: 1038px; top: 0px; width: 47px; height: 45px; z-index: 225;"
										onclick="window.location=''" name="" value="">
										<div style="text-align: center">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 20px">X</span>
										</div>
									</button>
									<div id="Layer77"
										style="position: absolute; text-align: left; left: 133px; top: 0px; width: 118px; height: 45px; z-index: 226;">
										<button id="AdvancedButton31"
											onclick="ShowObject('Layer69', 1);return false;"
											type="button"
											style="position: absolute; left: 0px; top: 0px; width: 103px; height: 45px; z-index: 213;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px">
													<b>Edit</b>
												</span>
											</div>
										</button>
										<div id="wb_Image10"
											style="position: absolute; left: 13px; top: 13px; width: 20px; height: 20px; z-index: 214;">
											<img src="<?php echo asset_url();?>images/img1302.png"
												id="Image10" alt="">
										</div>
									</div>
									<div id="Layer78"
										style="position: absolute; text-align: left; left: 236px; top: 0px; width: 119px; height: 45px; z-index: 227;">
										<button id="AdvancedButton32"
											onclick="ShowObject('Layer69', 1);return false;"
											type="button"
											style="position: absolute; left: 0px; top: 0px; width: 103px; height: 45px; z-index: 215;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #1E90FF; font-family: Arial; font-size: 13px">
												</span><span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>Delete</b></span>
											</div>
										</button>
										<div id="wb_Image20"
											style="position: absolute; left: 12px; top: 12px; width: 20px; height: 20px; z-index: 216;">
											<img src="<?php echo asset_url();?>images/img1412.png"
												id="Image20" alt="">
										</div>
									</div>
									<div id="Layer79"
										style="position: absolute; text-align: left; left: 342px; top: 0px; width: 143px; height: 45px; z-index: 228;">
										<button id="AdvancedButton33"
											onclick="ShowObject('Layer69', 1);return false;"
											type="button"
											style="position: absolute; left: 3px; top: 0px; width: 128px; height: 45px; z-index: 217;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>Move
														Up</b></span>
											</div>
										</button>
										<div id="wb_Image25"
											style="position: absolute; left: 4px; top: 6px; width: 31px; height: 31px; z-index: 218;">
											<img src="<?php echo asset_url();?>images/img1413.png"
												id="Image25" alt="">
										</div>
									</div>
									<div id="Layer81"
										style="position: absolute; text-align: left; left: 468px; top: 0px; width: 142px; height: 45px; z-index: 229;">
										<button id="AdvancedButton34"
											onclick="ShowObject('Layer69', 1);return false;"
											type="button"
											style="position: absolute; left: 0px; top: 0px; width: 133px; height: 45px; z-index: 219;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>
														Move Down</b></span>
											</div>
										</button>
										<div id="wb_Image26"
											style="position: absolute; left: 0px; top: 8px; width: 31px; height: 31px; z-index: 220;">
											<img src="<?php echo asset_url();?>images/img1414.png"
												id="Image26" alt="">
										</div>
									</div>
									<div id="Layer82"
										style="position: absolute; text-align: left; left: 612px; top: 0px; width: 367px; height: 45px; z-index: 230;"
										onclick="ShowObject('Layer69', 1);return false;">
										<button id="AdvancedButton35"
											onclick="ShowObject('Layer69', 1);return false;"
											type="button"
											style="position: absolute; left: 3px; top: 0px; width: 118px; height: 45px; z-index: 221;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>
														Move To</b></span>
											</div>
										</button>
										<div id="wb_Image27"
											style="position: absolute; left: 7px; top: 10px; width: 25px; height: 25px; z-index: 222;">
											<img src="<?php echo asset_url();?>images/img1415.png"
												id="Image27" alt="">
										</div>
										<select name="Combobox1" size="1" id="Combobox9"
											style="position: absolute; left: 121px; top: 10px; width: 177px; height: 25px; z-index: 223;">
											<option>Men Fashion</option>
											<option>Lady Fashion</option>
											<option>Kids Fashion</option>
											<option>include sub menu</option>
										</select>
										<button id="AdvancedButton36"
											onclick="ShowObject('Layer69', 1);return false;"
											type="button"
											style="position: absolute; left: 301px; top: 0px; width: 61px; height: 45px; z-index: 224;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>Confirm
												</b></span>
											</div>
										</button>
									</div>
								</div>
							</div>
							<div id="wb_Shape60"
								style="position: absolute; left: 116px; top: 229px; width: 144px; height: 29px; z-index: 235;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape60">
										<div id="Shape60_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Man
												Fashion</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Text211"
								style="position: absolute; left: 347px; top: 135px; width: 450px; height: 42px; z-index: 236; text-align: left;">
								<span
									style="color: #3C3C3C; font-family: Arial; font-size: 11px;">*
									Click the checkbox next to each Sub Product, then edit using
									the tools bar buttons.<br>* To add a new Sub Product, simply
									click on add field under the required Main Product, then type a
									name.
								</span>
							</div>
							<div id="wb_Text212"
								style="position: absolute; left: 129px; top: 545px; width: 77px; height: 16px; z-index: 237; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">6&nbsp;
									out of 10</span>
							</div>
							<div id="wb_Shape154"
								style="position: absolute; left: 116px; top: 266px; width: 104px; height: 22px; z-index: 238;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape154">
										<div id="Shape154_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox24" name="" value="on"
								style="position: absolute; left: 89px; top: 268px; z-index: 239;">
							<div id="wb_Shape155"
								style="position: absolute; left: 116px; top: 293px; width: 104px; height: 22px; z-index: 240;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape155">
										<div id="Shape155_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox25" name="" value="on"
								style="position: absolute; left: 89px; top: 295px; z-index: 241;">
							<div id="wb_Shape163"
								style="position: absolute; left: 116px; top: 347px; width: 104px; height: 22px; z-index: 242;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape163">
										<div id="Shape163_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox28" name="" value="on"
								style="position: absolute; left: 89px; top: 349px; z-index: 243;">
							<input type="checkbox" id="Checkbox29" name="" value="on"
								style="position: absolute; left: 89px; top: 322px; z-index: 244;">
							<div id="wb_Shape164"
								style="position: absolute; left: 116px; top: 320px; width: 104px; height: 22px; z-index: 245;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape164">
										<div id="Shape164_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox38" name="" value="on"
								style="position: absolute; left: 89px; top: 404px; z-index: 246;">
							<div id="wb_Shape165"
								style="position: absolute; left: 116px; top: 402px; width: 104px; height: 22px; z-index: 247;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape165">
										<div id="Shape165_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape166"
								style="position: absolute; left: 116px; top: 375px; width: 104px; height: 22px; z-index: 248;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape166">
										<div id="Shape166_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox39" name="" value="on"
								style="position: absolute; left: 89px; top: 377px; z-index: 249;">
							<div id="wb_Shape167"
								style="position: absolute; left: 296px; top: 229px; width: 144px; height: 29px; z-index: 250;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape167">
										<div id="Shape167_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Lady
												Fashion</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox47" name="" value="on"
								style="position: absolute; left: 269px; top: 268px; z-index: 251;">
							<div id="wb_Shape168"
								style="position: absolute; left: 296px; top: 266px; width: 104px; height: 22px; z-index: 252;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape168">
										<div id="Shape168_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox48" name="" value="on"
								style="position: absolute; left: 269px; top: 295px; z-index: 253;">
							<div id="wb_Shape169"
								style="position: absolute; left: 296px; top: 293px; width: 104px; height: 22px; z-index: 254;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape169">
										<div id="Shape169_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox49" name="" value="on"
								style="position: absolute; left: 269px; top: 322px; z-index: 255;">
							<div id="wb_Shape170"
								style="position: absolute; left: 296px; top: 320px; width: 104px; height: 22px; z-index: 256;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape170">
										<div id="Shape170_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox58" name="" value="on"
								style="position: absolute; left: 269px; top: 349px; z-index: 257;">
							<div id="wb_Shape171"
								style="position: absolute; left: 296px; top: 347px; width: 104px; height: 22px; z-index: 258;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape171">
										<div id="Shape171_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox59" name="" value="on"
								style="position: absolute; left: 269px; top: 377px; z-index: 259;">
							<div id="wb_Shape172"
								style="position: absolute; left: 296px; top: 375px; width: 104px; height: 22px; z-index: 260;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape172">
										<div id="Shape172_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox67" name="" value="on"
								style="position: absolute; left: 269px; top: 404px; z-index: 261;">
							<div id="wb_Shape173"
								style="position: absolute; left: 296px; top: 402px; width: 104px; height: 22px; z-index: 262;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape173">
										<div id="Shape173_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox68" name="" value="on"
								style="position: absolute; left: 269px; top: 431px; z-index: 263;">
							<div id="wb_Shape174"
								style="position: absolute; left: 296px; top: 429px; width: 104px; height: 22px; z-index: 264;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape174">
										<div id="Shape174_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox69" name="" value="on"
								style="position: absolute; left: 269px; top: 458px; z-index: 265;">
							<div id="wb_Shape175"
								style="position: absolute; left: 296px; top: 456px; width: 104px; height: 22px; z-index: 266;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape175">
										<div id="Shape175_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape176"
								style="position: absolute; left: 655px; top: 229px; width: 144px; height: 29px; z-index: 267;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape176">
										<div id="Shape176_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Mom
												Fashion</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox70" name="" value="on"
								style="position: absolute; left: 628px; top: 268px; z-index: 268;">
							<div id="wb_Shape177"
								style="position: absolute; left: 655px; top: 266px; width: 104px; height: 22px; z-index: 269;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape177">
										<div id="Shape177_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox71" name="" value="on"
								style="position: absolute; left: 628px; top: 295px; z-index: 270;">
							<div id="wb_Shape178"
								style="position: absolute; left: 655px; top: 293px; width: 104px; height: 22px; z-index: 271;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape178">
										<div id="Shape178_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox72" name="" value="on"
								style="position: absolute; left: 628px; top: 322px; z-index: 272;">
							<div id="wb_Shape179"
								style="position: absolute; left: 655px; top: 320px; width: 104px; height: 22px; z-index: 273;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape179">
										<div id="Shape179_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox73" name="" value="on"
								style="position: absolute; left: 628px; top: 349px; z-index: 274;">
							<div id="wb_Shape180"
								style="position: absolute; left: 655px; top: 347px; width: 104px; height: 22px; z-index: 275;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape180">
										<div id="Shape180_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox74" name="" value="on"
								style="position: absolute; left: 628px; top: 377px; z-index: 276;">
							<div id="wb_Shape181"
								style="position: absolute; left: 655px; top: 375px; width: 104px; height: 22px; z-index: 277;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape181">
										<div id="Shape181_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox75" name="" value="on"
								style="position: absolute; left: 628px; top: 404px; z-index: 278;">
							<div id="wb_Shape182"
								style="position: absolute; left: 655px; top: 402px; width: 104px; height: 22px; z-index: 279;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape182">
										<div id="Shape182_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox76" name="" value="on"
								style="position: absolute; left: 628px; top: 431px; z-index: 280;">
							<div id="wb_Shape183"
								style="position: absolute; left: 655px; top: 429px; width: 104px; height: 22px; z-index: 281;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape183">
										<div id="Shape183_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape184"
								style="position: absolute; left: 655px; top: 456px; width: 104px; height: 22px; z-index: 282;">
								<a href="" onclick="ShowObject('wb_Text207', 1);return false;"><div
										id="Shape184">
										<div id="Shape184_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape185"
								style="position: absolute; left: 655px; top: 484px; width: 104px; height: 22px; z-index: 283;">
								<a href="" onclick="ShowObject('wb_Text207', 1);return false;"><div
										id="Shape185">
										<div id="Shape185_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape186"
								style="position: absolute; left: 655px; top: 511px; width: 104px; height: 22px; z-index: 284;">
								<a href="" onclick="ShowObject('wb_Text207', 1);return false;"><div
										id="Shape186">
										<div id="Shape186_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape187"
								style="position: absolute; left: 475px; top: 229px; width: 144px; height: 29px; z-index: 285;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape187">
										<div id="Shape187_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Kids
												Fashion</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox77" name="" value="on"
								style="position: absolute; left: 448px; top: 268px; z-index: 286;">
							<div id="wb_Shape188"
								style="position: absolute; left: 475px; top: 266px; width: 104px; height: 22px; z-index: 287;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape188">
										<div id="Shape188_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox78" name="" value="on"
								style="position: absolute; left: 448px; top: 295px; z-index: 288;">
							<div id="wb_Shape189"
								style="position: absolute; left: 475px; top: 293px; width: 104px; height: 22px; z-index: 289;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape189">
										<div id="Shape189_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox79" name="" value="on"
								style="position: absolute; left: 448px; top: 322px; z-index: 290;">
							<div id="wb_Shape190"
								style="position: absolute; left: 475px; top: 320px; width: 104px; height: 22px; z-index: 291;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape190">
										<div id="Shape190_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox80" name="" value="on"
								style="position: absolute; left: 448px; top: 349px; z-index: 292;">
							<div id="wb_Shape191"
								style="position: absolute; left: 475px; top: 347px; width: 104px; height: 22px; z-index: 293;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape191">
										<div id="Shape191_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape192"
								style="position: absolute; left: 475px; top: 375px; width: 104px; height: 22px; z-index: 294;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape192">
										<div id="Shape192_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox81" name="" value="on"
								style="position: absolute; left: 448px; top: 377px; z-index: 295;">
							<input type="checkbox" id="Checkbox82" name="" value="on"
								style="position: absolute; left: 448px; top: 404px; z-index: 296;">
							<div id="wb_Shape193"
								style="position: absolute; left: 475px; top: 402px; width: 104px; height: 22px; z-index: 297;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape193">
										<div id="Shape193_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape194"
								style="position: absolute; left: 475px; top: 429px; width: 104px; height: 22px; z-index: 298;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape194">
										<div id="Shape194_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox83" name="" value="on"
								style="position: absolute; left: 448px; top: 431px; z-index: 299;">
							<input type="checkbox" id="Checkbox84" name="" value="on"
								style="position: absolute; left: 448px; top: 458px; z-index: 300;">
							<div id="wb_Shape195"
								style="position: absolute; left: 475px; top: 456px; width: 104px; height: 22px; z-index: 301;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape195">
										<div id="Shape195_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape196"
								style="position: absolute; left: 475px; top: 484px; width: 104px; height: 22px; z-index: 302;">
								<a href="" onclick="ShowObject('wb_Text207', 1);return false;"><div
										id="Shape196">
										<div id="Shape196_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Text213"
								style="position: absolute; left: 309px; top: 545px; width: 77px; height: 16px; z-index: 303; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">8&nbsp;
									out of 10</span>
							</div>
							<div id="wb_Text214"
								style="position: absolute; left: 470px; top: 545px; width: 77px; height: 16px; z-index: 304; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">8&nbsp;
									out of 10</span>
							</div>
							<div id="wb_Text215"
								style="position: absolute; left: 654px; top: 545px; width: 77px; height: 16px; z-index: 305; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">7&nbsp;
									out of 10</span>
							</div>
							<div id="wb_Shape197"
								style="position: absolute; left: 836px; top: 229px; width: 144px; height: 29px; z-index: 306;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape197">
										<div id="Shape197_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Mom
												Fashion</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape198"
								style="position: absolute; left: 836px; top: 266px; width: 104px; height: 22px; z-index: 307;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape198">
										<div id="Shape198_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox85" name="" value="on"
								style="position: absolute; left: 809px; top: 268px; z-index: 308;">
							<input type="checkbox" id="Checkbox86" name="" value="on"
								style="position: absolute; left: 809px; top: 295px; z-index: 309;">
							<div id="wb_Shape199"
								style="position: absolute; left: 836px; top: 293px; width: 104px; height: 22px; z-index: 310;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape199">
										<div id="Shape199_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape200"
								style="position: absolute; left: 836px; top: 320px; width: 104px; height: 22px; z-index: 311;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape200">
										<div id="Shape200_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox87" name="" value="on"
								style="position: absolute; left: 809px; top: 322px; z-index: 312;">
							<input type="checkbox" id="Checkbox88" name="" value="on"
								style="position: absolute; left: 809px; top: 349px; z-index: 313;">
							<div id="wb_Shape201"
								style="position: absolute; left: 836px; top: 347px; width: 104px; height: 22px; z-index: 314;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape201">
										<div id="Shape201_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape202"
								style="position: absolute; left: 836px; top: 375px; width: 104px; height: 22px; z-index: 315;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape202">
										<div id="Shape202_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox89" name="" value="on"
								style="position: absolute; left: 809px; top: 377px; z-index: 316;">
							<input type="checkbox" id="Checkbox90" name="" value="on"
								style="position: absolute; left: 809px; top: 404px; z-index: 317;">
							<div id="wb_Shape203"
								style="position: absolute; left: 836px; top: 402px; width: 104px; height: 22px; z-index: 318;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape203">
										<div id="Shape203_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape204"
								style="position: absolute; left: 836px; top: 429px; width: 104px; height: 22px; z-index: 319;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape204">
										<div id="Shape204_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox91" name="" value="on"
								style="position: absolute; left: 809px; top: 431px; z-index: 320;">
							<div id="wb_Shape205"
								style="position: absolute; left: 836px; top: 456px; width: 104px; height: 22px; z-index: 321;">
								<a href="" onclick="ShowObject('wb_Text207', 1);return false;"><div
										id="Shape205">
										<div id="Shape205_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape206"
								style="position: absolute; left: 836px; top: 484px; width: 104px; height: 22px; z-index: 322;">
								<a href="" onclick="ShowObject('wb_Text207', 1);return false;"><div
										id="Shape206">
										<div id="Shape206_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape207"
								style="position: absolute; left: 836px; top: 511px; width: 104px; height: 22px; z-index: 323;">
								<a href="" onclick="ShowObject('wb_Text207', 1);return false;"><div
										id="Shape207">
										<div id="Shape207_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Text216"
								style="position: absolute; left: 835px; top: 545px; width: 77px; height: 16px; z-index: 324; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">7&nbsp;
									out of 10</span>
							</div>
							<div id="wb_Shape208"
								style="position: absolute; left: 475px; top: 511px; width: 104px; height: 22px; z-index: 325;">
								<a href="" onclick="ShowObject('wb_Text207', 1);return false;"><div
										id="Shape208">
										<div id="Shape208_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape209"
								style="position: absolute; left: 295px; top: 484px; width: 104px; height: 22px; z-index: 326;">
								<a href="" onclick="ShowObject('wb_Text207', 1);return false;"><div
										id="Shape209">
										<div id="Shape209_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape210"
								style="position: absolute; left: 295px; top: 511px; width: 104px; height: 22px; z-index: 327;">
								<a href="" onclick="ShowObject('wb_Text207', 1);return false;"><div
										id="Shape210">
										<div id="Shape210_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape211"
								style="position: absolute; left: 115px; top: 484px; width: 104px; height: 22px; z-index: 328;">
								<a href="" onclick="ShowObject('wb_Text207', 1);return false;"><div
										id="Shape211">
										<div id="Shape211_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape212"
								style="position: absolute; left: 115px; top: 511px; width: 104px; height: 22px; z-index: 329;">
								<a href="" onclick="ShowObject('wb_Text207', 1);return false;"><div
										id="Shape212">
										<div id="Shape212_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape213"
								style="position: absolute; left: 116px; top: 457px; width: 104px; height: 22px; z-index: 330;">
								<a href="" onclick="ShowObject('wb_Text207', 1);return false;"><div
										id="Shape213">
										<div id="Shape213_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape214"
								style="position: absolute; left: 116px; top: 430px; width: 104px; height: 22px; z-index: 331;">
								<a href="" onclick="ShowObject('Layer69', 1);return false;"><div
										id="Shape214">
										<div id="Shape214_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape215"
								style="position: absolute; left: 911px; top: 614px; width: 127px; height: 35px; z-index: 332;">
								<a href="#" onclick="window.location.href='';return false;"><img
									src="<?php echo asset_url();?>images/img1478.gif" id="Shape215"
									alt="" style="width: 127px; height: 35px;"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="Layer83"
				style="position: absolute; text-align: center; visibility: hidden; left: 0px; top: 11px; width: 1279px; height: 807px; z-index: 3704;">
				<div id="Layer83_Container"
					style="width: 1279px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer85"
						style="position: absolute; text-align: center; left: 0%; top: 18px; width: 99%; height: 784px; z-index: 384;">
						<div id="Layer85_Container"
							style="width: 1273px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
						</div>
					</div>
					<div id="wb_Text217"
						style="position: absolute; left: 18px; top: 687px; width: 148px; height: 20px; text-align: center; z-index: 385;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 8px;">Copyrights
							| TRDSTATION 2013-2016@All Rights Reserved</span>
					</div>
					<div id="wb_Text218"
						style="position: absolute; left: 55px; top: 644px; width: 72px; height: 14px; text-align: center; z-index: 386;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 11px;">TRADE</span>
					</div>
					<div id="wb_Text219"
						style="position: absolute; left: 59px; top: 655px; width: 72px; height: 25px; z-index: 387; text-align: left;">
						<span
							style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">STATION</span>
					</div>
					<div id="wb_Shape216"
						style="position: absolute; left: 13px; top: 416px; width: 150px; height: 54px; z-index: 388;">
						<a href=""
							onclick="ShowObject('Layer69', 0);ShowObject('Layer93', 0);ShowObject('Layer83', 0);ShowObject('Layer22', 0);ShowObject('Layer33', 1);ShowObject('Layer39', 0);return false;"><div
								id="Shape216">
								<div id="Shape216_text">
									<span
										style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 13px;">Hot
										Sales Menu</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape217"
						style="position: absolute; left: 13px; top: 472px; width: 150px; height: 54px; z-index: 389;">
						<a href=""
							onclick="ShowObject('Layer69', 0);ShowObject('Layer93', 0);ShowObject('Layer83', 0);ShowObject('Layer22', 0);ShowObject('Layer33', 0);ShowObject('Layer39', 1);return false;"><div
								id="Shape217">
								<div id="Shape217_text">
									<span
										style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 13px;">New
										Arrivals Menu</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape218"
						style="position: absolute; left: 13px; top: 528px; width: 150px; height: 39px; z-index: 390;">
						<a href="./desksite.php" target="_blank"><div id="Shape218">
								<div id="Shape218_text">
									<span
										style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">View
										My Desksite</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Text220"
						style="position: absolute; left: 49px; top: 127px; width: 81px; height: 16px; text-align: center; z-index: 391;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 13px;">My
							Website</span>
					</div>
					<div id="RollOver25"
						style="position: absolute; left: 66px; top: 69px; overflow: hidden; width: 52px; height: 52px; z-index: 392">
						<a href=""> <img class="hover" alt=""
							src="<?php echo asset_url();?>images/Desksite-small.png">

						</a>
					</div>
					<div id="wb_Shape219"
						style="position: absolute; left: 12px; top: 325px; width: 150px; height: 54px; z-index: 393;">
						<a href=""
							onclick="ShowObject('Layer69', 0);ShowObject('Layer93', 0);ShowObject('Layer83', 0);ShowObject('Layer22', 1);ShowObject('Layer33', 0);ShowObject('Layer39', 0);return false;"><div
								id="Shape219">
								<div id="Shape219_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Products</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape220"
						style="position: absolute; left: 12px; top: 269px; width: 150px; height: 54px; z-index: 394;">
						<a href=""
							onclick="ShowObject('Layer69', 1);ShowObject('Layer93', 0);ShowObject('Layer83', 0);ShowObject('Layer22', 0);ShowObject('Layer33', 0);ShowObject('Layer39', 0);return false;"><div
								id="Shape220">
								<div id="Shape220_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Sub
										Products</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape221"
						style="position: absolute; left: 12px; top: 213px; width: 150px; height: 54px; z-index: 395;">
						<a href=""
							onclick="ShowObject('Layer69', 0);ShowObject('Layer93', 0);ShowObject('Layer83', 1);ShowObject('Layer22', 0);ShowObject('Layer33', 0);ShowObject('Layer39', 0);return false;"><div
								id="Shape221">
								<div id="Shape221_text">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FF6347; font-family: Arial; font-size: 13px;">Main
										Products</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape222"
						style="position: absolute; left: 12px; top: 157px; width: 150px; height: 54px; z-index: 396;">
						<a href=""
							onclick="ShowObject('Layer69', 0);ShowObject('Layer93', 1);ShowObject('Layer83', 0);ShowObject('Layer22', 0);ShowObject('Layer33', 0);ShowObject('Layer39', 0);return false;"><div
								id="Shape222">
								<div id="Shape222_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Backgrounds</span>
								</div>
							</div></a>
					</div>
					<div id="Layer86"
						style="position: absolute; text-align: center; left: 172px; top: 25px; width: 1088px; height: 694px; z-index: 397;">
						<div id="Layer86_Container"
							style="width: 1088px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<div id="wb_Text221"
								style="position: absolute; left: 319px; top: 120px; width: 481px; height: 56px; z-index: 363; text-align: left;">
								<span
									style="color: #3C3C3C; font-family: Arial; font-size: 11px;">The
									Main Products are the contents of your Desksite/Website menu,
									which shows the main products you work for. <br>* Click the
									checkbox next to each Main Product then edit using the tools
									bar. <br>* To add new Main Product, simply click on add icon,
									then type the name.
								</span>
							</div>
							<div id="wb_Text222"
								style="position: absolute; left: 318px; top: 87px; width: 153px; height: 25px; z-index: 364; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Georgia; font-size: 21px;">Main
									Products</span>
							</div>
							<div id="wb_CssMenu16"
								style="position: absolute; left: 95px; top: 72px; width: 157px; height: 221px; visibility: hidden; z-index: 365;">
								<ul>
									<li class="firstmain"><a href="#" target="_self">Men&nbsp;Fashion</a>
									</li>
									<li><a href="#" target="_self">Lady&nbsp;Fashion</a></li>
									<li><a href="#" target="_self">Kids&nbsp;Fashion</a></li>
									<li><a href="#" target="_self">More&nbsp;</a></li>
									<li><a href="#" target="_self">More</a></li>
									<li><a href="#" target="_self">More</a></li>
									<li><a href="#" target="_self">Up&nbsp;to&nbsp;10&nbsp;products</a>
									</li>
								</ul>
								<br>
							</div>
							<div id="wb_Shape223"
								style="position: absolute; left: 320px; top: 210px; width: 185px; height: 40px; z-index: 366;">
								<a href="" onclick="ShowObject('Layer83', 1);return false;"><div
										id="Shape223">
										<div id="Shape223_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Man
												Fashion</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox92" name="" value="on"
								style="position: absolute; left: 249px; top: 226px; z-index: 367;">
							<input type="checkbox" id="Checkbox93" name="" value="on"
								style="position: absolute; left: 249px; top: 268px; z-index: 368;">
							<div id="wb_Shape224"
								style="position: absolute; left: 320px; top: 252px; width: 185px; height: 40px; z-index: 369;">
								<a href="" onclick="ShowObject('Layer83', 1);return false;"><div
										id="Shape224">
										<div id="Shape224_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Lady
												Fashion</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox94" name="" value="on"
								style="position: absolute; left: 249px; top: 345px; z-index: 370;">
							<div id="wb_Shape225"
								style="position: absolute; left: 320px; top: 336px; width: 185px; height: 40px; z-index: 371;">
								<a href="" onclick="ShowObject('Layer83', 1);return false;"><div
										id="Shape225">
										<div id="Shape225_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Mom
												Fashion</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox95" name="" value="on"
								style="position: absolute; left: 249px; top: 307px; z-index: 372;">
							<div id="wb_Shape226"
								style="position: absolute; left: 320px; top: 294px; width: 185px; height: 40px; z-index: 373;">
								<a href="" onclick="ShowObject('Layer83', 1);return false;"><div
										id="Shape226">
										<div id="Shape226_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Kids
												Fashion</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape227"
								style="position: absolute; left: 320px; top: 505px; width: 185px; height: 40px; z-index: 374;">
								<a href="#" onclick="ShowObject('Layer83', 1);return false;"><div
										id="Shape227">
										<div id="Shape227_text">
											<span
												style="color: #696969; font-family: Arial; font-size: 13px;">10</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape228"
								style="position: absolute; left: 320px; top: 463px; width: 185px; height: 40px; z-index: 375;">
								<a href="" onclick="ShowObject('Layer83', 1);return false;"><div
										id="Shape228">
										<div id="Shape228_text">
											<span
												style="color: #696969; font-family: Arial; font-size: 13px;">9</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox96" name="" value="on"
								style="position: absolute; left: 249px; top: 436px; z-index: 376;">
							<div id="wb_Shape229"
								style="position: absolute; left: 320px; top: 420px; width: 185px; height: 40px; z-index: 377;">
								<a href="" onclick="ShowObject('Layer83', 1);return false;"><div
										id="Shape229">
										<div id="Shape229_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Family
												Fashion</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox97" name="" value="on"
								style="position: absolute; left: 249px; top: 394px; z-index: 378;">
							<div id="wb_Shape230"
								style="position: absolute; left: 320px; top: 378px; width: 185px; height: 40px; z-index: 379;">
								<a href="" onclick="ShowObject('Layer83', 1);return false;"><div
										id="Shape230">
										<div id="Shape230_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Parent
												Fashion</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Text223"
								style="position: absolute; left: 387px; top: 569px; width: 98px; height: 24px; z-index: 380; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 21px;">8&nbsp;
								</span><span
									style="color: #2D2D2D; font-family: Arial; font-size: 12px;">out
									of </span><span
									style="color: #2D2D2D; font-family: Arial; font-size: 21px;">10</span>
							</div>
							<div id="wb_Text224"
								style="position: absolute; left: 324px; top: 568px; width: 98px; height: 24px; z-index: 381; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 21px;">Total:</span>
							</div>
							<div id="Layer87"
								style="position: absolute; text-align: center; left: 0px; top: 0px; width: 1086px; height: 45px; z-index: 382;">
								<div id="Layer87_Container"
									style="width: 1086px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
									<button id="AdvancedButton37"
										onclick="ShowObjectWithEffect('Layer83', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');return false;"
										type="button"
										style="position: absolute; left: 1039px; top: 0px; width: 47px; height: 45px; z-index: 357;"
										onclick="window.location=''" name="" value="">
										<div style="text-align: center">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 20px">X</span>
										</div>
									</button>
									<div id="Layer88"
										style="position: absolute; text-align: left; left: 254px; top: 0px; width: 118px; height: 45px; z-index: 358;"
										onclick="ShowObject('Layer83', 1);return false;">
										<button id="AdvancedButton38"
											onclick="ShowObject('Layer83', 1);return false;"
											type="button"
											style="position: absolute; left: 0px; top: 0px; width: 103px; height: 45px; z-index: 347;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px">
													<b>Edit</b>
												</span>
											</div>
										</button>
										<div id="wb_Image28"
											style="position: absolute; left: 13px; top: 13px; width: 20px; height: 20px; z-index: 348;">
											<img src="<?php echo asset_url();?>images/img1494.png"
												id="Image28" alt="">
										</div>
									</div>
									<div id="Layer89"
										style="position: absolute; text-align: left; left: 364px; top: 0px; width: 119px; height: 45px; z-index: 359;">
										<button id="AdvancedButton39"
											onclick="ShowObject('Layer83', 1);return false;"
											type="button"
											style="position: absolute; left: 0px; top: 0px; width: 103px; height: 45px; z-index: 349;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #1E90FF; font-family: Arial; font-size: 13px">
												</span><span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>Add</b></span>
											</div>
										</button>
										<div id="wb_Image29"
											style="position: absolute; left: 12px; top: 11px; width: 24px; height: 24px; z-index: 350;">
											<img src="<?php echo asset_url();?>images/img1495.png"
												id="Image29" alt="">
										</div>
									</div>
									<div id="Layer90"
										style="position: absolute; text-align: left; left: 457px; top: 0px; width: 119px; height: 45px; z-index: 360;">
										<button id="AdvancedButton40"
											onclick="ShowObject('Layer83', 1);return false;"
											type="button"
											style="position: absolute; left: 0px; top: 0px; width: 104px; height: 45px; z-index: 351;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #1E90FF; font-family: Arial; font-size: 13px">
												</span><span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>Delete</b></span>
											</div>
										</button>
										<div id="wb_Image30"
											style="position: absolute; left: 12px; top: 12px; width: 20px; height: 20px; z-index: 352;">
											<img src="<?php echo asset_url();?>images/img1496.png"
												id="Image30" alt="">
										</div>
									</div>
									<div id="Layer91"
										style="position: absolute; text-align: left; left: 563px; top: 0px; width: 143px; height: 45px; z-index: 361;">
										<button id="AdvancedButton41"
											onclick="ShowObject('Layer83', 1);return false;"
											type="button"
											style="position: absolute; left: 3px; top: 0px; width: 128px; height: 45px; z-index: 353;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>Move
														Up</b></span>
											</div>
										</button>
										<div id="wb_Image31"
											style="position: absolute; left: 4px; top: 6px; width: 31px; height: 31px; z-index: 354;">
											<img src="<?php echo asset_url();?>images/img1497.png"
												id="Image31" alt="">
										</div>
									</div>
									<div id="Layer92"
										style="position: absolute; text-align: left; left: 689px; top: 0px; width: 142px; height: 45px; z-index: 362;"
										onclick="ShowObject('Layer83', 1);return false;">
										<button id="AdvancedButton42"
											onclick="ShowObject('Layer83', 1);return false;"
											type="button"
											style="position: absolute; left: 0px; top: 0px; width: 133px; height: 45px; z-index: 355;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>
														Move Down</b></span>
											</div>
										</button>
										<div id="wb_Image32"
											style="position: absolute; left: 0px; top: 8px; width: 31px; height: 31px; z-index: 356;">
											<img src="<?php echo asset_url();?>images/img1498.png"
												id="Image32" alt="">
										</div>
									</div>
								</div>
							</div>
							<div id="wb_Shape231"
								style="position: absolute; left: 912px; top: 614px; width: 127px; height: 35px; z-index: 383;">
								<a href="#" onclick="window.location.href='';return false;"><img
									src="<?php echo asset_url();?>images/img1499.gif" id="Shape231"
									alt="" style="width: 127px; height: 35px;"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="Layer54"
				style="position: absolute; text-align: center; visibility: hidden; left: 0px; top: 13px; width: 1279px; height: 759px; z-index: 3705;">
				<div id="Layer54_Container"
					style="width: 1279px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer55"
						style="position: absolute; text-align: center; left: 0%; top: 18px; width: 99%; height: 710px; z-index: 435;">
						<div id="Layer55_Container"
							style="width: 1273px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
						</div>
					</div>
					<div id="wb_Text184"
						style="position: absolute; left: 18px; top: 687px; width: 148px; height: 20px; text-align: center; z-index: 436;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 8px;">Copyrights
							| TRDSTATION 2013-2016@All Rights Reserved</span>
					</div>
					<div id="wb_Text185"
						style="position: absolute; left: 56px; top: 644px; width: 72px; height: 14px; text-align: center; z-index: 437;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 11px;">TRADE</span>
					</div>
					<div id="wb_Text186"
						style="position: absolute; left: 60px; top: 655px; width: 72px; height: 25px; z-index: 438; text-align: left;">
						<span
							style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">STATION</span>
					</div>
					<div id="Layer56"
						style="position: absolute; text-align: center; left: 172px; top: 24px; width: 1088px; height: 694px; z-index: 439;">
						<div id="Layer56_Container"
							style="width: 1088px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<div id="wb_Text189"
								style="position: absolute; left: 319px; top: 120px; width: 481px; height: 56px; z-index: 414; text-align: left;">
								<span
									style="color: #3C3C3C; font-family: Arial; font-size: 11px;">The
									Main Products are the contents of your Desksite/Website menu,
									which shows the main products you work for. <br>* Click the
									checkbox next to each Main Product then edit using the tools
									bar. <br>* To add new Main Product, simply click on add icon,
									then type the name.
								</span>
							</div>
							<div id="wb_Text190"
								style="position: absolute; left: 318px; top: 87px; width: 153px; height: 25px; z-index: 415; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Georgia; font-size: 21px;">Main
									Products</span>
							</div>
							<div id="wb_CssMenu13"
								style="position: absolute; left: 95px; top: 72px; width: 157px; height: 221px; visibility: hidden; z-index: 416;">
								<ul>
									<li class="firstmain"><a href="#" target="_self">Men&nbsp;Fashion</a>
									</li>
									<li><a href="#" target="_self">Lady&nbsp;Fashion</a></li>
									<li><a href="#" target="_self">Kids&nbsp;Fashion</a></li>
									<li><a href="#" target="_self">More&nbsp;</a></li>
									<li><a href="#" target="_self">More</a></li>
									<li><a href="#" target="_self">More</a></li>
									<li><a href="#" target="_self">Up&nbsp;to&nbsp;10&nbsp;products</a>
									</li>
								</ul>
								<br>
							</div>
							<div id="wb_Shape75"
								style="position: absolute; left: 320px; top: 210px; width: 185px; height: 40px; z-index: 417;">
								<a href=""><div id="Shape75">
										<div id="Shape75_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Man
												Fashion</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox14" name="" value="on"
								style="position: absolute; left: 249px; top: 226px; z-index: 418;">
							<input type="checkbox" id="Checkbox15" name="" value="on"
								style="position: absolute; left: 249px; top: 268px; z-index: 419;">
							<div id="wb_Shape86"
								style="position: absolute; left: 320px; top: 252px; width: 185px; height: 40px; z-index: 420;">
								<a href=""><div id="Shape86">
										<div id="Shape86_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Lady
												Fashion</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox16" name="" value="on"
								style="position: absolute; left: 249px; top: 345px; z-index: 421;">
							<div id="wb_Shape87"
								style="position: absolute; left: 320px; top: 336px; width: 185px; height: 40px; z-index: 422;">
								<a href=""><div id="Shape87">
										<div id="Shape87_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Mom
												Fashion</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox17" name="" value="on"
								style="position: absolute; left: 249px; top: 307px; z-index: 423;">
							<div id="wb_Shape88"
								style="position: absolute; left: 320px; top: 294px; width: 185px; height: 40px; z-index: 424;">
								<a href=""><div id="Shape88">
										<div id="Shape88_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Kids
												Fashion</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape89"
								style="position: absolute; left: 320px; top: 505px; width: 185px; height: 40px; z-index: 425;">
								<div id="Shape89">
									<div id="Shape89_text">
										<span
											style="color: #696969; font-family: Arial; font-size: 13px;">10</span>
									</div>
								</div>
							</div>
							<div id="wb_Shape90"
								style="position: absolute; left: 320px; top: 463px; width: 185px; height: 40px; z-index: 426;">
								<a href=""><div id="Shape90">
										<div id="Shape90_text">
											<span
												style="color: #696969; font-family: Arial; font-size: 13px;">9</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox20" name="" value="on"
								style="position: absolute; left: 249px; top: 436px; z-index: 427;">
							<div id="wb_Shape91"
								style="position: absolute; left: 320px; top: 420px; width: 185px; height: 40px; z-index: 428;">
								<a href=""
									onclick="ShowObject('Layer5', 0);ShowObject('Layer49', 1);return false;"><div
										id="Shape91">
										<div id="Shape91_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Family
												Fashion</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox21" name="" value="on"
								style="position: absolute; left: 249px; top: 394px; z-index: 429;">
							<div id="wb_Shape92"
								style="position: absolute; left: 320px; top: 378px; width: 185px; height: 40px; z-index: 430;">
								<a href=""><div id="Shape92">
										<div id="Shape92_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Parent
												Fashion</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Text187"
								style="position: absolute; left: 387px; top: 569px; width: 98px; height: 24px; z-index: 431; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 21px;">8&nbsp;
								</span><span
									style="color: #2D2D2D; font-family: Arial; font-size: 12px;">out
									of </span><span
									style="color: #2D2D2D; font-family: Arial; font-size: 21px;">10</span>
							</div>
							<div id="wb_Text191"
								style="position: absolute; left: 324px; top: 568px; width: 98px; height: 24px; z-index: 432; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 21px;">Total:</span>
							</div>
							<div id="Layer57"
								style="position: absolute; text-align: center; left: 0px; top: 0px; width: 1086px; height: 45px; z-index: 433;">
								<div id="Layer57_Container"
									style="width: 1086px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
									<button id="AdvancedButton15"
										onclick="ShowObjectWithEffect('Layer54', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');return false;"
										type="button"
										style="position: absolute; left: 1039px; top: 0px; width: 47px; height: 45px; z-index: 408;"
										onclick="window.location=''" name="" value="">
										<div style="text-align: center">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 20px">X</span>
										</div>
									</button>
									<div id="Layer59"
										style="position: absolute; text-align: left; left: 254px; top: 0px; width: 118px; height: 45px; z-index: 409;">
										<button id="AdvancedButton17" type="button"
											style="position: absolute; left: 0px; top: 0px; width: 103px; height: 45px; z-index: 398;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px">
													<b>Edit</b>
												</span>
											</div>
										</button>
										<div id="wb_Image1"
											style="position: absolute; left: 13px; top: 13px; width: 20px; height: 20px; z-index: 399;">
											<img src="<?php echo asset_url();?>images/img1341.png"
												id="Image1" alt="">
										</div>
									</div>
									<div id="Layer60"
										style="position: absolute; text-align: left; left: 364px; top: 0px; width: 119px; height: 45px; z-index: 410;">
										<button id="AdvancedButton18" type="button"
											style="position: absolute; left: 0px; top: 0px; width: 103px; height: 45px; z-index: 400;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #1E90FF; font-family: Arial; font-size: 13px">
												</span><span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>Add</b></span>
											</div>
										</button>
										<div id="wb_Image2"
											style="position: absolute; left: 12px; top: 11px; width: 24px; height: 24px; z-index: 401;">
											<img src="<?php echo asset_url();?>images/img1342.png"
												id="Image2" alt="">
										</div>
									</div>
									<div id="Layer61"
										style="position: absolute; text-align: left; left: 457px; top: 0px; width: 119px; height: 45px; z-index: 411;">
										<button id="AdvancedButton19" type="button"
											style="position: absolute; left: 0px; top: 0px; width: 104px; height: 45px; z-index: 402;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #1E90FF; font-family: Arial; font-size: 13px">
												</span><span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>Delete</b></span>
											</div>
										</button>
										<div id="wb_Image5"
											style="position: absolute; left: 12px; top: 12px; width: 20px; height: 20px; z-index: 403;">
											<img src="<?php echo asset_url();?>images/img1343.png"
												id="Image5" alt="">
										</div>
									</div>
									<div id="Layer62"
										style="position: absolute; text-align: left; left: 563px; top: 0px; width: 143px; height: 45px; z-index: 412;">
										<button id="AdvancedButton20" type="button"
											style="position: absolute; left: 3px; top: 0px; width: 128px; height: 45px; z-index: 404;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>Move
														Up</b></span>
											</div>
										</button>
										<div id="wb_Image17"
											style="position: absolute; left: 4px; top: 6px; width: 31px; height: 31px; z-index: 405;">
											<img src="<?php echo asset_url();?>images/img1344.png"
												id="Image17" alt="">
										</div>
									</div>
									<div id="Layer63"
										style="position: absolute; text-align: left; left: 689px; top: 0px; width: 142px; height: 45px; z-index: 413;">
										<button id="AdvancedButton21" type="button"
											style="position: absolute; left: 0px; top: 0px; width: 133px; height: 45px; z-index: 406;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>
														Move Down</b></span>
											</div>
										</button>
										<div id="wb_Image18"
											style="position: absolute; left: 0px; top: 8px; width: 31px; height: 31px; z-index: 407;">
											<img src="<?php echo asset_url();?>images/img1345.png"
												id="Image18" alt="">
										</div>
									</div>
								</div>
							</div>
							<div id="wb_Shape152"
								style="position: absolute; left: 912px; top: 614px; width: 127px; height: 35px; z-index: 434;">
								<a href="#" onclick="window.location.href='';return false;"><img
									src="<?php echo asset_url();?>images/img1352.gif" id="Shape152"
									alt="" style="width: 127px; height: 35px;"></a>
							</div>
						</div>
					</div>
					<div id="wb_Text192"
						style="position: absolute; left: 51px; top: 126px; width: 81px; height: 16px; text-align: center; z-index: 440;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 13px;">My
							Website</span>
					</div>
					<div id="RollOver22"
						style="position: absolute; left: 68px; top: 68px; overflow: hidden; width: 52px; height: 52px; z-index: 441">
						<a href=""> <img class="hover" alt=""
							src="<?php echo asset_url();?>images/Desksite-small.png">

						</a>
					</div>
					<div id="wb_Shape82"
						style="position: absolute; left: 14px; top: 156px; width: 150px; height: 54px; z-index: 442;">
						<a href=""
							onclick="ShowObject('Layer5', 0);ShowObject('Layer49', 1);ShowObject('Layer54', 0);return false;"><div
								id="Shape82">
								<div id="Shape82_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit<br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Backgrounds</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape83"
						style="position: absolute; left: 14px; top: 212px; width: 150px; height: 54px; z-index: 443;">
						<a href=""
							onclick="ShowObject('Layer54', 1);ShowObject('Layer49', 0);return false;"><div
								id="Shape83">
								<div id="Shape83_text">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 11px;">View
										| Edit<br>
									</span><span
										style="color: #FF6347; font-family: Arial; font-size: 13px;">Main
										Products</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape84"
						style="position: absolute; left: 14px; top: 268px; width: 150px; height: 54px; z-index: 444;">
						<a href=""
							onclick="ShowObject('Layer54', 0);ShowObject('Layer8', 1);return false;"><div
								id="Shape84">
								<div id="Shape84_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Add<br></span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Sub
										Products</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape85"
						style="position: absolute; left: 14px; top: 324px; width: 150px; height: 54px; z-index: 445;">
						<a href="" onclick="ShowObject('wb_Text1', 1);return false;"><div
								id="Shape85">
								<div id="Shape85_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Add<br></span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Products</span>
								</div>
							</div></a>
					</div>
				</div>
			</div>
			<div id="Layer93"
				style="position: absolute; text-align: center; visibility: hidden; left: 0px; top: 11px; width: 1279px; height: 807px; z-index: 3706;">
				<div id="Layer93_Container"
					style="width: 1279px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer94"
						style="position: absolute; text-align: center; left: 0%; top: 18px; width: 99%; height: 784px; z-index: 463;">
						<div id="Layer94_Container"
							style="width: 1273px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
						</div>
					</div>
					<div id="wb_Text225"
						style="position: absolute; left: 18px; top: 687px; width: 148px; height: 20px; text-align: center; z-index: 464;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 8px;">Copyrights
							| TRDSTATION 2013-2016@All Rights Reserved</span>
					</div>
					<div id="wb_Text226"
						style="position: absolute; left: 55px; top: 644px; width: 72px; height: 14px; text-align: center; z-index: 465;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 11px;">TRADE</span>
					</div>
					<div id="wb_Text227"
						style="position: absolute; left: 59px; top: 655px; width: 72px; height: 25px; z-index: 466; text-align: left;">
						<span
							style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">STATION</span>
					</div>
					<div id="wb_Shape232"
						style="position: absolute; left: 13px; top: 416px; width: 150px; height: 54px; z-index: 467;">
						<a href=""
							onclick="ShowObject('Layer69', 0);ShowObject('Layer22', 0);ShowObject('Layer83', 0);ShowObject('Layer93', 0);ShowObject('Layer33', 1);ShowObject('Layer39', 0);return false;"><div
								id="Shape232">
								<div id="Shape232_text">
									<span
										style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 13px;">Hot
										Sales Menu</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape233"
						style="position: absolute; left: 13px; top: 472px; width: 150px; height: 54px; z-index: 468;">
						<a href=""
							onclick="ShowObject('Layer69', 0);ShowObject('Layer22', 0);ShowObject('Layer83', 0);ShowObject('Layer93', 0);ShowObject('Layer33', 0);ShowObject('Layer39', 1);return false;"><div
								id="Shape233">
								<div id="Shape233_text">
									<span
										style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 13px;">New
										Arrivals Menu</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape234"
						style="position: absolute; left: 13px; top: 528px; width: 150px; height: 39px; z-index: 469;">
						<a href="./desksite.php" target="_blank"><div id="Shape234">
								<div id="Shape234_text">
									<span
										style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">View
										My Desksite</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Text228"
						style="position: absolute; left: 49px; top: 127px; width: 81px; height: 16px; text-align: center; z-index: 470;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 13px;">My
							Website</span>
					</div>
					<div id="RollOver26"
						style="position: absolute; left: 66px; top: 69px; overflow: hidden; width: 52px; height: 52px; z-index: 471">
						<a href=""> <img class="hover" alt=""
							src="<?php echo asset_url();?>images/Desksite-small.png">

						</a>
					</div>
					<div id="wb_Shape235"
						style="position: absolute; left: 12px; top: 325px; width: 150px; height: 54px; z-index: 472;">
						<a href=""
							onclick="ShowObject('Layer69', 0);ShowObject('Layer22', 1);ShowObject('Layer83', 0);ShowObject('Layer93', 0);ShowObject('Layer33', 0);ShowObject('Layer39', 0);return false;"><div
								id="Shape235">
								<div id="Shape235_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Products</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape236"
						style="position: absolute; left: 12px; top: 269px; width: 150px; height: 54px; z-index: 473;">
						<a href=""
							onclick="ShowObject('Layer69', 1);ShowObject('Layer33', 0);ShowObject('Layer39', 0);ShowObject('Layer22', 0);ShowObject('Layer83', 0);ShowObject('Layer93', 0);return false;"><div
								id="Shape236">
								<div id="Shape236_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Sub
										Products</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape237"
						style="position: absolute; left: 12px; top: 213px; width: 150px; height: 54px; z-index: 474;">
						<a href=""
							onclick="ShowObject('Layer83', 1);ShowObject('Layer33', 0);ShowObject('Layer39', 0);ShowObject('Layer22', 0);ShowObject('Layer69', 0);ShowObject('Layer93', 0);return false;"><div
								id="Shape237">
								<div id="Shape237_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Main
										Products</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape238"
						style="position: absolute; left: 12px; top: 157px; width: 150px; height: 54px; z-index: 475;">
						<a href=""
							onclick="ShowObject('Layer69', 0);ShowObject('Layer93', 1);ShowObject('Layer83', 0);ShowObject('Layer22', 0);ShowObject('Layer33', 0);ShowObject('Layer39', 0);return false;"><div
								id="Shape238">
								<div id="Shape238_text">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 11px;">View
										| Edit <br>
									</span><span
										style="color: #FF6347; font-family: Arial; font-size: 13px;">Backgrounds</span>
								</div>
							</div></a>
					</div>
					<div id="Layer95"
						style="position: absolute; text-align: center; left: 171px; top: 24px; width: 1088px; height: 697px; z-index: 476;">
						<div id="Layer95_Container"
							style="width: 1088px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<div id="wb_Shape239"
								style="position: absolute; left: 327px; top: 147px; width: 205px; height: 100px; z-index: 447;">
								<a href="#" onclick="alert('upload');return false;"><img
									src="<?php echo asset_url();?>images/img1507.png" id="Shape239"
									alt="" style="width: 205px; height: 100px;"></a>
							</div>
							<div id="wb_Text230"
								style="position: absolute; left: 361px; top: 91px; width: 405px; height: 25px; z-index: 448; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Georgia; font-size: 21px;">Main
									Desksite Background/Slide Show</span>
							</div>
							<div id="wb_Text231"
								style="position: absolute; left: 787px; top: 185px; width: 55px; height: 14px; z-index: 449; text-align: left;">
								<span
									style="color: #1E90FF; font-family: Georgia; font-size: 11px;">Change</span>
							</div>
							<div id="wb_Shape240"
								style="position: absolute; left: 557px; top: 147px; width: 205px; height: 100px; z-index: 450;">
								<a href="#" onclick="alert('upload');return false;"><img
									src="<?php echo asset_url();?>images/img1508.png" id="Shape240"
									alt="" style="width: 205px; height: 100px;"></a>
							</div>
							<div id="wb_Text232"
								style="position: absolute; left: 391px; top: 297px; width: 332px; height: 25px; z-index: 451; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Georgia; font-size: 21px;">Main
									Website Images/Slide Show</span>
							</div>
							<div id="wb_Shape241"
								style="position: absolute; left: 328px; top: 341px; width: 205px; height: 100px; z-index: 452;">
								<a href="#" onclick="alert('upload');return false;"><img
									src="<?php echo asset_url();?>images/img1509.png" id="Shape241"
									alt="" style="width: 205px; height: 100px;"></a>
							</div>
							<div id="wb_Shape242"
								style="position: absolute; left: 558px; top: 342px; width: 205px; height: 100px; z-index: 453;">
								<a href="#" onclick="alert('upload');return false;"><img
									src="<?php echo asset_url();?>images/img1510.png" id="Shape242"
									alt="" style="width: 205px; height: 100px;"></a>
							</div>
							<div id="wb_Text233"
								style="position: absolute; left: 401px; top: 490px; width: 377px; height: 25px; z-index: 454; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Georgia; font-size: 21px;">Information
									Images/Slide Show</span>
							</div>
							<div id="wb_Shape243"
								style="position: absolute; left: 415px; top: 542px; width: 136px; height: 95px; z-index: 455;">
								<a href="#" onclick="alert('upload');return false;"><img
									src="<?php echo asset_url();?>images/img1511.png" id="Shape243"
									alt="" style="width: 136px; height: 95px;"></a>
							</div>
							<div id="wb_Shape244"
								style="position: absolute; left: 565px; top: 542px; width: 136px; height: 95px; z-index: 456;">
								<a href="#" onclick="alert('upload');return false;"><img
									src="<?php echo asset_url();?>images/img1512.png" id="Shape244"
									alt="" style="width: 136px; height: 95px;"></a>
							</div>
							<div id="Layer96"
								style="position: absolute; text-align: center; left: 1px; top: 1px; width: 1085px; height: 45px; z-index: 457;">
								<div id="Layer96_Container"
									style="width: 1085px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
									<button id="AdvancedButton43"
										onclick="ShowObjectWithEffect('Layer93', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');return false;"
										type="button"
										style="position: absolute; left: 1038px; top: 0px; width: 47px; height: 45px; z-index: 446;"
										onclick="window.location=''" name="" value="">
										<div style="text-align: center">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 20px">X</span>
										</div>
									</button>
								</div>
							</div>
							<div id="wb_Text234"
								style="position: absolute; left: 787px; top: 380px; width: 55px; height: 14px; z-index: 458; text-align: left;">
								<span
									style="color: #1E90FF; font-family: Georgia; font-size: 11px;">Change</span>
							</div>
							<div id="wb_Text235"
								style="position: absolute; left: 787px; top: 583px; width: 55px; height: 14px; z-index: 459; text-align: left;">
								<span
									style="color: #1E90FF; font-family: Georgia; font-size: 11px;">Change</span>
							</div>
							<div id="wb_Text236"
								style="position: absolute; left: 862px; top: 186px; width: 55px; height: 14px; z-index: 460; text-align: left;">
								<span
									style="color: #1E90FF; font-family: Georgia; font-size: 11px;">Save</span>
							</div>
							<div id="wb_Text237"
								style="position: absolute; left: 862px; top: 381px; width: 55px; height: 14px; z-index: 461; text-align: left;">
								<span
									style="color: #1E90FF; font-family: Georgia; font-size: 11px;">Save</span>
							</div>
							<div id="wb_Text238"
								style="position: absolute; left: 862px; top: 584px; width: 55px; height: 14px; z-index: 462; text-align: left;">
								<span
									style="color: #1E90FF; font-family: Georgia; font-size: 11px;">Save</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="Layer49"
				style="position: absolute; text-align: center; visibility: hidden; left: 0px; top: 14px; width: 1279px; height: 759px; z-index: 3707;">
				<div id="Layer49_Container"
					style="width: 1279px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer50"
						style="position: absolute; text-align: center; left: 0%; top: 18px; width: 99%; height: 713px; z-index: 494;">
						<div id="Layer50_Container"
							style="width: 1273px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
						</div>
					</div>
					<div id="wb_Text25"
						style="position: absolute; left: 18px; top: 680px; width: 148px; height: 20px; text-align: center; z-index: 495;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 8px;">Copyrights
							| TRDSTATION 2013-2016@All Rights Reserved</span>
					</div>
					<div id="wb_Text100"
						style="position: absolute; left: 56px; top: 637px; width: 72px; height: 14px; text-align: center; z-index: 496;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 11px;">TRADE</span>
					</div>
					<div id="wb_Text101"
						style="position: absolute; left: 60px; top: 648px; width: 72px; height: 25px; z-index: 497; text-align: left;">
						<span
							style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">STATION</span>
					</div>
					<div id="Layer51"
						style="position: absolute; text-align: center; left: 171px; top: 23px; width: 1088px; height: 697px; z-index: 498;">
						<div id="Layer51_Container"
							style="width: 1088px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<div id="wb_Shape10"
								style="position: absolute; left: 327px; top: 147px; width: 205px; height: 100px; z-index: 478;">
								<a href="#" onclick="alert('upload');return false;"><img
									src="<?php echo asset_url();?>images/img1319.png" id="Shape10"
									alt="" style="width: 205px; height: 100px;"></a>
							</div>
							<div id="wb_Text178"
								style="position: absolute; left: 361px; top: 91px; width: 405px; height: 25px; z-index: 479; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Georgia; font-size: 21px;">Main
									Desksite Background/Slide Show</span>
							</div>
							<div id="wb_Text179"
								style="position: absolute; left: 787px; top: 185px; width: 55px; height: 14px; z-index: 480; text-align: left;">
								<span
									style="color: #1E90FF; font-family: Georgia; font-size: 11px;">Change</span>
							</div>
							<div id="wb_Shape72"
								style="position: absolute; left: 557px; top: 147px; width: 205px; height: 100px; z-index: 481;">
								<a href="#" onclick="alert('upload');return false;"><img
									src="<?php echo asset_url();?>images/img1320.png" id="Shape72"
									alt="" style="width: 205px; height: 100px;"></a>
							</div>
							<div id="wb_Text183"
								style="position: absolute; left: 391px; top: 297px; width: 332px; height: 25px; z-index: 482; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Georgia; font-size: 21px;">Main
									Website Images/Slide Show</span>
							</div>
							<div id="wb_Shape73"
								style="position: absolute; left: 328px; top: 341px; width: 205px; height: 100px; z-index: 483;">
								<a href="#" onclick="alert('upload');return false;"><img
									src="<?php echo asset_url();?>images/img1321.png" id="Shape73"
									alt="" style="width: 205px; height: 100px;"></a>
							</div>
							<div id="wb_Shape74"
								style="position: absolute; left: 558px; top: 342px; width: 205px; height: 100px; z-index: 484;">
								<a href="#" onclick="alert('upload');return false;"><img
									src="<?php echo asset_url();?>images/img1322.png" id="Shape74"
									alt="" style="width: 205px; height: 100px;"></a>
							</div>
							<div id="wb_Text188"
								style="position: absolute; left: 401px; top: 490px; width: 377px; height: 25px; z-index: 485; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Georgia; font-size: 21px;">Information
									Images/Slide Show</span>
							</div>
							<div id="wb_Shape76"
								style="position: absolute; left: 415px; top: 542px; width: 136px; height: 95px; z-index: 486;">
								<a href="#" onclick="alert('upload');return false;"><img
									src="<?php echo asset_url();?>images/img1324.png" id="Shape76"
									alt="" style="width: 136px; height: 95px;"></a>
							</div>
							<div id="wb_Shape77"
								style="position: absolute; left: 565px; top: 542px; width: 136px; height: 95px; z-index: 487;">
								<a href="#" onclick="alert('upload');return false;"><img
									src="<?php echo asset_url();?>images/img1325.png" id="Shape77"
									alt="" style="width: 136px; height: 95px;"></a>
							</div>
							<div id="Layer52"
								style="position: absolute; text-align: center; left: 1px; top: 1px; width: 1085px; height: 45px; z-index: 488;">
								<div id="Layer52_Container"
									style="width: 1085px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
									<button id="AdvancedButton13"
										onclick="ShowObjectWithEffect('Layer49', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');return false;"
										type="button"
										style="position: absolute; left: 1038px; top: 0px; width: 47px; height: 45px; z-index: 477;"
										onclick="window.location=''" name="" value="">
										<div style="text-align: center">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 20px">X</span>
										</div>
									</button>
								</div>
							</div>
							<div id="wb_Text176"
								style="position: absolute; left: 787px; top: 380px; width: 55px; height: 14px; z-index: 489; text-align: left;">
								<span
									style="color: #1E90FF; font-family: Georgia; font-size: 11px;">Change</span>
							</div>
							<div id="wb_Text177"
								style="position: absolute; left: 787px; top: 583px; width: 55px; height: 14px; z-index: 490; text-align: left;">
								<span
									style="color: #1E90FF; font-family: Georgia; font-size: 11px;">Change</span>
							</div>
							<div id="wb_Text180"
								style="position: absolute; left: 862px; top: 186px; width: 55px; height: 14px; z-index: 491; text-align: left;">
								<span
									style="color: #1E90FF; font-family: Georgia; font-size: 11px;">Save</span>
							</div>
							<div id="wb_Text181"
								style="position: absolute; left: 862px; top: 381px; width: 55px; height: 14px; z-index: 492; text-align: left;">
								<span
									style="color: #1E90FF; font-family: Georgia; font-size: 11px;">Save</span>
							</div>
							<div id="wb_Text182"
								style="position: absolute; left: 862px; top: 584px; width: 55px; height: 14px; z-index: 493; text-align: left;">
								<span
									style="color: #1E90FF; font-family: Georgia; font-size: 11px;">Save</span>
							</div>
						</div>
					</div>
					<div id="wb_Shape78"
						style="position: absolute; left: 13px; top: 155px; width: 150px; height: 54px; z-index: 499;">
						<a href="" onclick="ShowObject('wb_Text1', 1);return false;"><div
								id="Shape78">
								<div id="Shape78_text">
									<span
										style="color: #F05539; font-family: Arial; font-size: 11px;">View
										| Edit<br>
									</span><span
										style="color: #F05539; font-family: Arial; font-size: 13px;">Backgrounds</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Text194"
						style="position: absolute; left: 50px; top: 125px; width: 81px; height: 16px; text-align: center; z-index: 500;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 13px;">My
							Website</span>
					</div>
					<div id="RollOver21"
						style="position: absolute; left: 67px; top: 67px; overflow: hidden; width: 52px; height: 52px; z-index: 501">
						<a href=""> <img class="hover" alt=""
							src="<?php echo asset_url();?>images/Desksite-small.png">

						</a>
					</div>
					<div id="wb_Shape79"
						style="position: absolute; left: 13px; top: 211px; width: 150px; height: 54px; z-index: 502;">
						<a href=""
							onclick="ShowObject('Layer5', 1);ShowObject('Layer49', 0);return false;"><div
								id="Shape79">
								<div id="Shape79_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Add<br></span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Main
										Products</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape80"
						style="position: absolute; left: 13px; top: 267px; width: 150px; height: 54px; z-index: 503;">
						<a href="" onclick="ShowObject('wb_Text1', 1);return false;"><div
								id="Shape80">
								<div id="Shape80_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Add<br></span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Sub
										Products</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape81"
						style="position: absolute; left: 13px; top: 323px; width: 150px; height: 54px; z-index: 504;">
						<a href=""><div id="Shape81">
								<div id="Shape81_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Add<br></span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Products</span>
								</div>
							</div></a>
					</div>
				</div>
			</div>
			<div id="Layer64"
				style="position: absolute; text-align: center; visibility: hidden; left: 0px; top: 12px; width: 1279px; height: 759px; z-index: 3708;">
				<div id="Layer64_Container"
					style="width: 1279px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer65"
						style="position: absolute; text-align: center; left: 0%; top: 18px; width: 99%; height: 710px; z-index: 625;">
						<div id="Layer65_Container"
							style="width: 1273px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
						</div>
					</div>
					<div id="wb_Text193"
						style="position: absolute; left: 18px; top: 687px; width: 148px; height: 20px; text-align: center; z-index: 626;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 8px;">Copyrights
							| TRDSTATION 2013-2016@All Rights Reserved</span>
					</div>
					<div id="wb_Text195"
						style="position: absolute; left: 56px; top: 644px; width: 72px; height: 14px; text-align: center; z-index: 627;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 11px;">TRADE</span>
					</div>
					<div id="wb_Text196"
						style="position: absolute; left: 60px; top: 655px; width: 72px; height: 25px; z-index: 628; text-align: left;">
						<span
							style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">STATION</span>
					</div>
					<div id="Layer66"
						style="position: absolute; text-align: center; left: 172px; top: 25px; width: 1088px; height: 692px; z-index: 629;">
						<div id="Layer66_Container"
							style="width: 1088px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<div id="wb_Text197"
								style="position: absolute; left: 485px; top: 80px; width: 148px; height: 25px; z-index: 523; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Georgia; font-size: 21px;">Sub
									Products</span>
							</div>
							<div id="wb_Text198"
								style="position: absolute; left: 203px; top: 115px; width: 654px; height: 14px; text-align: center; z-index: 524;">
								<span
									style="color: #3C3C3C; font-family: Arial; font-size: 11px;">The
									Sub Products are the products listed under each selected Main
									Product. </span>
							</div>
							<div id="wb_CssMenu14"
								style="position: absolute; left: 94px; top: 68px; width: 157px; height: 192px; visibility: hidden; z-index: 525;">
								<ul>
									<li class="firstmain"><a class="withsubmenu" href="#"
										target="_self">Men&nbsp;Fashion</a>

										<ul>
											<li class="firstitem"><a href="#" target="_self">Suits</a></li>
											<li><a href="#" target="_self">Shirts</a></li>
											<li><a href="#" target="_self">T-Shirts</a></li>
											<li><a href="#" target="_self">Trousers</a></li>
											<li class="lastitem"><a href="#" target="_self">More</a></li>
										</ul></li>
									<li><a class="withsubmenu" href="#" target="_self">Lady&nbsp;Fashion</a>

										<ul>
											<li class="firstitem"><a href="#" target="_self">Skirt</a></li>
											<li><a href="#" target="_self">Blouse</a></li>
											<li><a href="#" target="_self">T-Shirts</a></li>
											<li><a href="#" target="_self">Long&nbsp;Dress</a></li>
											<li class="lastitem"><a href="#" target="_self">Evening&nbsp;Dress</a>
											</li>
										</ul></li>
									<li><a href="#" target="_self">Kids&nbsp;Fashion</a></li>
									<li><a href="#" target="_self">More</a></li>
									<li><a href="#" target="_self">More</a></li>
									<li><a href="#" target="_self">Up&nbsp;to&nbsp;10&nbsp;products</a>
									</li>
								</ul>
								<br>
							</div>
							<div id="Layer67"
								style="position: absolute; text-align: center; left: 1px; top: 0px; width: 1085px; height: 45px; z-index: 526;">
								<div id="Layer67_Container"
									style="width: 1085px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
									<button id="AdvancedButton23"
										onclick="ShowObjectWithEffect('Layer64', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');return false;"
										type="button"
										style="position: absolute; left: 1038px; top: 0px; width: 47px; height: 45px; z-index: 517;"
										onclick="window.location=''" name="" value="">
										<div style="text-align: center">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 20px">X</span>
										</div>
									</button>
									<div id="Layer68"
										style="position: absolute; text-align: left; left: 133px; top: 0px; width: 118px; height: 45px; z-index: 518;">
										<button id="AdvancedButton24" type="button"
											style="position: absolute; left: 0px; top: 0px; width: 103px; height: 45px; z-index: 505;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px">
													<b>Edit</b>
												</span>
											</div>
										</button>
										<div id="wb_Image19"
											style="position: absolute; left: 13px; top: 13px; width: 20px; height: 20px; z-index: 506;">
											<img src="<?php echo asset_url();?>images/img1351.png"
												id="Image19" alt="">
										</div>
									</div>
									<div id="Layer70"
										style="position: absolute; text-align: left; left: 236px; top: 0px; width: 119px; height: 45px; z-index: 519;">
										<button id="AdvancedButton26" type="button"
											style="position: absolute; left: 0px; top: 0px; width: 103px; height: 45px; z-index: 507;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #1E90FF; font-family: Arial; font-size: 13px">
												</span><span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>Delete</b></span>
											</div>
										</button>
										<div id="wb_Image21"
											style="position: absolute; left: 12px; top: 12px; width: 20px; height: 20px; z-index: 508;">
											<img src="<?php echo asset_url();?>images/img1353.png"
												id="Image21" alt="">
										</div>
									</div>
									<div id="Layer71"
										style="position: absolute; text-align: left; left: 342px; top: 0px; width: 143px; height: 45px; z-index: 520;">
										<button id="AdvancedButton27" type="button"
											style="position: absolute; left: 3px; top: 0px; width: 128px; height: 45px; z-index: 509;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>Move
														Up</b></span>
											</div>
										</button>
										<div id="wb_Image22"
											style="position: absolute; left: 4px; top: 6px; width: 31px; height: 31px; z-index: 510;">
											<img src="<?php echo asset_url();?>images/img1354.png"
												id="Image22" alt="">
										</div>
									</div>
									<div id="Layer72"
										style="position: absolute; text-align: left; left: 468px; top: 0px; width: 142px; height: 45px; z-index: 521;">
										<button id="AdvancedButton28" type="button"
											style="position: absolute; left: 0px; top: 0px; width: 133px; height: 45px; z-index: 511;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>
														Move Down</b></span>
											</div>
										</button>
										<div id="wb_Image23"
											style="position: absolute; left: 0px; top: 8px; width: 31px; height: 31px; z-index: 512;">
											<img src="<?php echo asset_url();?>images/img1355.png"
												id="Image23" alt="">
										</div>
									</div>
									<div id="Layer73"
										style="position: absolute; text-align: left; left: 612px; top: 0px; width: 367px; height: 45px; z-index: 522;">
										<button id="AdvancedButton29" type="button"
											style="position: absolute; left: 3px; top: 0px; width: 118px; height: 45px; z-index: 513;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>
														Move To</b></span>
											</div>
										</button>
										<div id="wb_Image24"
											style="position: absolute; left: 7px; top: 10px; width: 25px; height: 25px; z-index: 514;">
											<img src="<?php echo asset_url();?>images/img1356.png"
												id="Image24" alt="">
										</div>
										<select name="Combobox1" size="1" id="Combobox11"
											style="position: absolute; left: 121px; top: 10px; width: 177px; height: 25px; z-index: 515;">
											<option>Men Fashion</option>
											<option>Lady Fashion</option>
											<option>Kids Fashion</option>
											<option>include sub menu</option>
										</select>
										<button id="AdvancedButton30" type="button"
											style="position: absolute; left: 301px; top: 0px; width: 61px; height: 45px; z-index: 516;"
											onclick="window.location=''" name="" value="">
											<div style="text-align: center">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>Confirm
												</b></span>
											</div>
										</button>
									</div>
								</div>
							</div>
							<div id="wb_Shape102"
								style="position: absolute; left: 116px; top: 229px; width: 144px; height: 29px; z-index: 527;">
								<a href=""><div id="Shape102">
										<div id="Shape102_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Man
												Fashion</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Text201"
								style="position: absolute; left: 347px; top: 135px; width: 450px; height: 42px; z-index: 528; text-align: left;">
								<span
									style="color: #3C3C3C; font-family: Arial; font-size: 11px;">*
									Click the checkbox next to each Sub Product, the edit using the
									tools bar.<br>* To add a new Sub Product, simply click on add
									field under the required Main Product, then type a name.
								</span>
							</div>
							<div id="wb_Text200"
								style="position: absolute; left: 129px; top: 545px; width: 77px; height: 16px; z-index: 529; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">6&nbsp;
									out of 10</span>
							</div>
							<div id="wb_Shape103"
								style="position: absolute; left: 116px; top: 266px; width: 104px; height: 22px; z-index: 530;">
								<a href=""><div id="Shape103">
										<div id="Shape103_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox22" name="" value="on"
								style="position: absolute; left: 89px; top: 268px; z-index: 531;">
							<div id="wb_Shape93"
								style="position: absolute; left: 116px; top: 293px; width: 104px; height: 22px; z-index: 532;">
								<a href=""><div id="Shape93">
										<div id="Shape93_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox18" name="" value="on"
								style="position: absolute; left: 89px; top: 295px; z-index: 533;">
							<div id="wb_Shape98"
								style="position: absolute; left: 116px; top: 347px; width: 104px; height: 22px; z-index: 534;">
								<a href=""><div id="Shape98">
										<div id="Shape98_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox19" name="" value="on"
								style="position: absolute; left: 89px; top: 349px; z-index: 535;">
							<input type="checkbox" id="Checkbox23" name="" value="on"
								style="position: absolute; left: 89px; top: 322px; z-index: 536;">
							<div id="wb_Shape99"
								style="position: absolute; left: 116px; top: 320px; width: 104px; height: 22px; z-index: 537;">
								<a href=""><div id="Shape99">
										<div id="Shape99_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox26" name="" value="on"
								style="position: absolute; left: 89px; top: 404px; z-index: 538;">
							<div id="wb_Shape104"
								style="position: absolute; left: 116px; top: 402px; width: 104px; height: 22px; z-index: 539;">
								<a href=""><div id="Shape104">
										<div id="Shape104_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape105"
								style="position: absolute; left: 116px; top: 375px; width: 104px; height: 22px; z-index: 540;">
								<a href=""><div id="Shape105">
										<div id="Shape105_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox27" name="" value="on"
								style="position: absolute; left: 89px; top: 377px; z-index: 541;">
							<div id="wb_Shape108"
								style="position: absolute; left: 296px; top: 229px; width: 144px; height: 29px; z-index: 542;">
								<a href=""><div id="Shape108">
										<div id="Shape108_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Lady
												Fashion</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox30" name="" value="on"
								style="position: absolute; left: 269px; top: 268px; z-index: 543;">
							<div id="wb_Shape109"
								style="position: absolute; left: 296px; top: 266px; width: 104px; height: 22px; z-index: 544;">
								<a href=""><div id="Shape109">
										<div id="Shape109_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox31" name="" value="on"
								style="position: absolute; left: 269px; top: 295px; z-index: 545;">
							<div id="wb_Shape110"
								style="position: absolute; left: 296px; top: 293px; width: 104px; height: 22px; z-index: 546;">
								<a href=""><div id="Shape110">
										<div id="Shape110_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox32" name="" value="on"
								style="position: absolute; left: 269px; top: 322px; z-index: 547;">
							<div id="wb_Shape111"
								style="position: absolute; left: 296px; top: 320px; width: 104px; height: 22px; z-index: 548;">
								<a href=""><div id="Shape111">
										<div id="Shape111_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox33" name="" value="on"
								style="position: absolute; left: 269px; top: 349px; z-index: 549;">
							<div id="wb_Shape112"
								style="position: absolute; left: 296px; top: 347px; width: 104px; height: 22px; z-index: 550;">
								<a href=""><div id="Shape112">
										<div id="Shape112_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox34" name="" value="on"
								style="position: absolute; left: 269px; top: 377px; z-index: 551;">
							<div id="wb_Shape113"
								style="position: absolute; left: 296px; top: 375px; width: 104px; height: 22px; z-index: 552;">
								<a href=""><div id="Shape113">
										<div id="Shape113_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox35" name="" value="on"
								style="position: absolute; left: 269px; top: 404px; z-index: 553;">
							<div id="wb_Shape114"
								style="position: absolute; left: 296px; top: 402px; width: 104px; height: 22px; z-index: 554;">
								<a href=""><div id="Shape114">
										<div id="Shape114_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox36" name="" value="on"
								style="position: absolute; left: 269px; top: 431px; z-index: 555;">
							<div id="wb_Shape115"
								style="position: absolute; left: 296px; top: 429px; width: 104px; height: 22px; z-index: 556;">
								<a href=""><div id="Shape115">
										<div id="Shape115_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox37" name="" value="on"
								style="position: absolute; left: 269px; top: 458px; z-index: 557;">
							<div id="wb_Shape116"
								style="position: absolute; left: 296px; top: 456px; width: 104px; height: 22px; z-index: 558;">
								<a href=""><div id="Shape116">
										<div id="Shape116_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape119"
								style="position: absolute; left: 655px; top: 229px; width: 144px; height: 29px; z-index: 559;">
								<a href=""><div id="Shape119">
										<div id="Shape119_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Mom
												Fashion</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox40" name="" value="on"
								style="position: absolute; left: 628px; top: 268px; z-index: 560;">
							<div id="wb_Shape120"
								style="position: absolute; left: 655px; top: 266px; width: 104px; height: 22px; z-index: 561;">
								<a href=""><div id="Shape120">
										<div id="Shape120_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox41" name="" value="on"
								style="position: absolute; left: 628px; top: 295px; z-index: 562;">
							<div id="wb_Shape121"
								style="position: absolute; left: 655px; top: 293px; width: 104px; height: 22px; z-index: 563;">
								<a href=""><div id="Shape121">
										<div id="Shape121_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox42" name="" value="on"
								style="position: absolute; left: 628px; top: 322px; z-index: 564;">
							<div id="wb_Shape122"
								style="position: absolute; left: 655px; top: 320px; width: 104px; height: 22px; z-index: 565;">
								<a href=""><div id="Shape122">
										<div id="Shape122_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox43" name="" value="on"
								style="position: absolute; left: 628px; top: 349px; z-index: 566;">
							<div id="wb_Shape123"
								style="position: absolute; left: 655px; top: 347px; width: 104px; height: 22px; z-index: 567;">
								<a href=""><div id="Shape123">
										<div id="Shape123_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox44" name="" value="on"
								style="position: absolute; left: 628px; top: 377px; z-index: 568;">
							<div id="wb_Shape124"
								style="position: absolute; left: 655px; top: 375px; width: 104px; height: 22px; z-index: 569;">
								<a href=""><div id="Shape124">
										<div id="Shape124_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox45" name="" value="on"
								style="position: absolute; left: 628px; top: 404px; z-index: 570;">
							<div id="wb_Shape125"
								style="position: absolute; left: 655px; top: 402px; width: 104px; height: 22px; z-index: 571;">
								<a href=""><div id="Shape125">
										<div id="Shape125_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox46" name="" value="on"
								style="position: absolute; left: 628px; top: 431px; z-index: 572;">
							<div id="wb_Shape126"
								style="position: absolute; left: 655px; top: 429px; width: 104px; height: 22px; z-index: 573;">
								<a href=""><div id="Shape126">
										<div id="Shape126_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape127"
								style="position: absolute; left: 655px; top: 456px; width: 104px; height: 22px; z-index: 574;">
								<a href=""><div id="Shape127">
										<div id="Shape127_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape128"
								style="position: absolute; left: 655px; top: 484px; width: 104px; height: 22px; z-index: 575;">
								<a href=""><div id="Shape128">
										<div id="Shape128_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape129"
								style="position: absolute; left: 655px; top: 511px; width: 104px; height: 22px; z-index: 576;">
								<a href=""><div id="Shape129">
										<div id="Shape129_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape130"
								style="position: absolute; left: 475px; top: 229px; width: 144px; height: 29px; z-index: 577;">
								<a href=""><div id="Shape130">
										<div id="Shape130_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Kids
												Fashion</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox50" name="" value="on"
								style="position: absolute; left: 448px; top: 268px; z-index: 578;">
							<div id="wb_Shape131"
								style="position: absolute; left: 475px; top: 266px; width: 104px; height: 22px; z-index: 579;">
								<a href=""><div id="Shape131">
										<div id="Shape131_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox51" name="" value="on"
								style="position: absolute; left: 448px; top: 295px; z-index: 580;">
							<div id="wb_Shape132"
								style="position: absolute; left: 475px; top: 293px; width: 104px; height: 22px; z-index: 581;">
								<a href=""><div id="Shape132">
										<div id="Shape132_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox52" name="" value="on"
								style="position: absolute; left: 448px; top: 322px; z-index: 582;">
							<div id="wb_Shape133"
								style="position: absolute; left: 475px; top: 320px; width: 104px; height: 22px; z-index: 583;">
								<a href=""><div id="Shape133">
										<div id="Shape133_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox53" name="" value="on"
								style="position: absolute; left: 448px; top: 349px; z-index: 584;">
							<div id="wb_Shape134"
								style="position: absolute; left: 475px; top: 347px; width: 104px; height: 22px; z-index: 585;">
								<a href=""><div id="Shape134">
										<div id="Shape134_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape135"
								style="position: absolute; left: 475px; top: 375px; width: 104px; height: 22px; z-index: 586;">
								<a href=""><div id="Shape135">
										<div id="Shape135_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox54" name="" value="on"
								style="position: absolute; left: 448px; top: 377px; z-index: 587;">
							<input type="checkbox" id="Checkbox55" name="" value="on"
								style="position: absolute; left: 448px; top: 404px; z-index: 588;">
							<div id="wb_Shape136"
								style="position: absolute; left: 475px; top: 402px; width: 104px; height: 22px; z-index: 589;">
								<a href=""><div id="Shape136">
										<div id="Shape136_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape137"
								style="position: absolute; left: 475px; top: 429px; width: 104px; height: 22px; z-index: 590;">
								<a href=""><div id="Shape137">
										<div id="Shape137_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox56" name="" value="on"
								style="position: absolute; left: 448px; top: 431px; z-index: 591;">
							<input type="checkbox" id="Checkbox57" name="" value="on"
								style="position: absolute; left: 448px; top: 458px; z-index: 592;">
							<div id="wb_Shape138"
								style="position: absolute; left: 475px; top: 456px; width: 104px; height: 22px; z-index: 593;">
								<a href=""><div id="Shape138">
										<div id="Shape138_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape139"
								style="position: absolute; left: 475px; top: 484px; width: 104px; height: 22px; z-index: 594;">
								<a href=""><div id="Shape139">
										<div id="Shape139_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Text199"
								style="position: absolute; left: 309px; top: 545px; width: 77px; height: 16px; z-index: 595; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">8&nbsp;
									out of 10</span>
							</div>
							<div id="wb_Text203"
								style="position: absolute; left: 470px; top: 545px; width: 77px; height: 16px; z-index: 596; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">8&nbsp;
									out of 10</span>
							</div>
							<div id="wb_Text204"
								style="position: absolute; left: 654px; top: 545px; width: 77px; height: 16px; z-index: 597; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">7&nbsp;
									out of 10</span>
							</div>
							<div id="wb_Shape141"
								style="position: absolute; left: 836px; top: 229px; width: 144px; height: 29px; z-index: 598;">
								<a href=""><div id="Shape141">
										<div id="Shape141_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Mom
												Fashion</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape142"
								style="position: absolute; left: 836px; top: 266px; width: 104px; height: 22px; z-index: 599;">
								<a href=""><div id="Shape142">
										<div id="Shape142_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox60" name="" value="on"
								style="position: absolute; left: 809px; top: 268px; z-index: 600;">
							<input type="checkbox" id="Checkbox61" name="" value="on"
								style="position: absolute; left: 809px; top: 295px; z-index: 601;">
							<div id="wb_Shape143"
								style="position: absolute; left: 836px; top: 293px; width: 104px; height: 22px; z-index: 602;">
								<a href=""><div id="Shape143">
										<div id="Shape143_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape144"
								style="position: absolute; left: 836px; top: 320px; width: 104px; height: 22px; z-index: 603;">
								<a href=""><div id="Shape144">
										<div id="Shape144_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox62" name="" value="on"
								style="position: absolute; left: 809px; top: 322px; z-index: 604;">
							<input type="checkbox" id="Checkbox63" name="" value="on"
								style="position: absolute; left: 809px; top: 349px; z-index: 605;">
							<div id="wb_Shape145"
								style="position: absolute; left: 836px; top: 347px; width: 104px; height: 22px; z-index: 606;">
								<a href=""><div id="Shape145">
										<div id="Shape145_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape146"
								style="position: absolute; left: 836px; top: 375px; width: 104px; height: 22px; z-index: 607;">
								<a href=""><div id="Shape146">
										<div id="Shape146_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox64" name="" value="on"
								style="position: absolute; left: 809px; top: 377px; z-index: 608;">
							<input type="checkbox" id="Checkbox65" name="" value="on"
								style="position: absolute; left: 809px; top: 404px; z-index: 609;">
							<div id="wb_Shape147"
								style="position: absolute; left: 836px; top: 402px; width: 104px; height: 22px; z-index: 610;">
								<a href=""><div id="Shape147">
										<div id="Shape147_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape148"
								style="position: absolute; left: 836px; top: 429px; width: 104px; height: 22px; z-index: 611;">
								<a href=""><div id="Shape148">
										<div id="Shape148_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Suits</span>
										</div>
									</div></a>
							</div>
							<input type="checkbox" id="Checkbox66" name="" value="on"
								style="position: absolute; left: 809px; top: 431px; z-index: 612;">
							<div id="wb_Shape149"
								style="position: absolute; left: 836px; top: 456px; width: 104px; height: 22px; z-index: 613;">
								<a href=""><div id="Shape149">
										<div id="Shape149_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape150"
								style="position: absolute; left: 836px; top: 484px; width: 104px; height: 22px; z-index: 614;">
								<a href=""><div id="Shape150">
										<div id="Shape150_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape151"
								style="position: absolute; left: 836px; top: 511px; width: 104px; height: 22px; z-index: 615;">
								<a href=""><div id="Shape151">
										<div id="Shape151_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Text205"
								style="position: absolute; left: 835px; top: 545px; width: 77px; height: 16px; z-index: 616; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">7&nbsp;
									out of 10</span>
							</div>
							<div id="wb_Shape106"
								style="position: absolute; left: 475px; top: 511px; width: 104px; height: 22px; z-index: 617;">
								<a href=""><div id="Shape106">
										<div id="Shape106_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape107"
								style="position: absolute; left: 295px; top: 484px; width: 104px; height: 22px; z-index: 618;">
								<a href=""><div id="Shape107">
										<div id="Shape107_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape117"
								style="position: absolute; left: 295px; top: 511px; width: 104px; height: 22px; z-index: 619;">
								<a href=""><div id="Shape117">
										<div id="Shape117_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape100"
								style="position: absolute; left: 115px; top: 484px; width: 104px; height: 22px; z-index: 620;">
								<a href=""><div id="Shape100">
										<div id="Shape100_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape101"
								style="position: absolute; left: 115px; top: 511px; width: 104px; height: 22px; z-index: 621;">
								<a href=""><div id="Shape101">
										<div id="Shape101_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape118"
								style="position: absolute; left: 116px; top: 457px; width: 104px; height: 22px; z-index: 622;">
								<a href=""><div id="Shape118">
										<div id="Shape118_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape140"
								style="position: absolute; left: 116px; top: 430px; width: 104px; height: 22px; z-index: 623;">
								<a href=""><div id="Shape140">
										<div id="Shape140_text">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Add</span>
										</div>
									</div></a>
							</div>
							<div id="wb_Shape153"
								style="position: absolute; left: 911px; top: 614px; width: 127px; height: 35px; z-index: 624;">
								<a href="#" onclick="window.location.href='';return false;"><img
									src="<?php echo asset_url();?>images/img1411.gif" id="Shape153"
									alt="" style="width: 127px; height: 35px;"></a>
							</div>
						</div>
					</div>
					<div id="wb_Text202"
						style="position: absolute; left: 51px; top: 127px; width: 81px; height: 16px; text-align: center; z-index: 630;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 13px;">My
							Website</span>
					</div>
					<div id="RollOver23"
						style="position: absolute; left: 68px; top: 69px; overflow: hidden; width: 52px; height: 52px; z-index: 631">
						<a href=""> <img class="hover" alt=""
							src="<?php echo asset_url();?>images/Desksite-small.png">

						</a>
					</div>
					<div id="wb_Shape94"
						style="position: absolute; left: 14px; top: 157px; width: 150px; height: 54px; z-index: 632;">
						<a href=""
							onclick="ShowObject('Layer8', 0);ShowObject('Layer49', 1);ShowObject('Layer54', 0);return false;"><div
								id="Shape94">
								<div id="Shape94_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit<br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Backgrounds</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape95"
						style="position: absolute; left: 14px; top: 213px; width: 150px; height: 54px; z-index: 633;">
						<a href=""
							onclick="ShowObject('Layer49', 0);ShowObject('Layer8', 0);ShowObject('Layer54', 1);return false;"><div
								id="Shape95">
								<div id="Shape95_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit<br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Main
										Products</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape96"
						style="position: absolute; left: 14px; top: 269px; width: 150px; height: 54px; z-index: 634;">
						<a href=""
							onclick="ShowObject('Layer49', 0);ShowObject('Layer169', 0);ShowObject('Layer54', 0);ShowObject('Layer8', 0);ShowObject('Layer64', 1);return false;"><div
								id="Shape96">
								<div id="Shape96_text">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 11px;">View
										| Edit<br>
									</span><span
										style="color: #FF6347; font-family: Arial; font-size: 13px;">Sub
										Products</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape97"
						style="position: absolute; left: 14px; top: 325px; width: 150px; height: 54px; z-index: 635;">
						<a href=""
							onclick="ShowObject('Layer49', 0);ShowObject('Layer169', 0);ShowObject('Layer54', 0);ShowObject('Layer8', 0);ShowObject('Layer64', 0);ShowObject('Layer11', 1);return false;"><div
								id="Shape97">
								<div id="Shape97_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Add<br></span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Products</span>
								</div>
							</div></a>
					</div>
				</div>
			</div>
			<div id="Layer98"
				style="position: fixed; text-align: center; visibility: hidden; left: 0; top: 0; right: 0; bottom: 0; z-index: 3710;">
				<div id="Layer98_Container"
					style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer100"
						style="position: fixed; text-align: center; left: 0; top: 0; right: 0; bottom: 0; z-index: 685;">
						<div id="Layer100_Container"
							style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
						</div>
					</div>
					<div id="Layer99"
						style="position: absolute; text-align: center; left: 31%; top: 72px; width: 43%; height: 466px; z-index: 686;">
						<div id="Layer99_Container"
							style="width: 554px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<div id="wb_Form1"
								style="position: absolute; left: 0px; top: 143px; width: 525px; height: 299px; z-index: 684;">
								<form name="Offer_for_you_post_in_RT_Business" method="post"
									action="" enctype="multipart/form-data" id="Form1">
									<input type="button" id="Button4"
										onclick="ShowObjectWithEffect('Layer98', 0, 'fade', 500);return false;"
										name="" value="Ok"
										style="position: absolute; left: 180px; top: 250px; width: 182px; height: 31px; z-index: 679;">
									<div id="wb_Text243"
										style="position: absolute; left: 231px; top: 192px; width: 72px; height: 14px; text-align: center; z-index: 680;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 11px;">TRADE</span>
									</div>
									<div id="wb_Text244"
										style="position: absolute; left: 234px; top: 203px; width: 72px; height: 25px; z-index: 681; text-align: left;">
										<span
											style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">STATION</span>
									</div>
									<div id="wb_Text245"
										style="position: absolute; left: 99px; top: 37px; width: 343px; height: 46px; text-align: center; z-index: 682;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 20px;">Your
											First Product Has Been Added Successfully..</span>
									</div>
									<div id="wb_Text246"
										style="position: absolute; left: 60px; top: 122px; width: 412px; height: 51px; text-align: center; z-index: 683;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 13px;">Click
											OK button to View, Edit or Add new product<br>
										<br>
										</span>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="Layer101"
				style="position: absolute; text-align: center; visibility: hidden; left: 0px; top: 13px; width: 1279px; height: 759px; z-index: 3711;">
				<div id="Layer101_Container"
					style="width: 1279px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">

				</div>
			</div>
			<div id="Layer108" style="position: absolute; text-align: center; visibility: hidden; left: 0px; top: 11px; width: 1279px; height: 759px; z-index: 3712;">
				<div id="Layer108_Container" style="width: 1279px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
				
				</div>
			</div>
			<div id="Layer124"
				style="position: absolute; text-align: center; visibility: hidden; left: 0px; top: 11px; width: 1279px; height: 759px; z-index: 3713;">
				<div id="Layer124_Container"
					style="width: 1279px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
				
				</div>
			</div>
			<div id="Layer149"
				style="position: absolute; text-align: center; visibility: hidden; left: 0px; top: 11px; width: 1279px; height: 799px; z-index: 3714;">
				<div id="Layer149_Container"
					style="width: 1279px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
				
				</div>
			</div>
			<div id="Layer180"
				style="position: absolute; text-align: center; visibility: hidden; left: 0px; top: 11px; width: 1279px; height: 759px; z-index: 3716;">
				<div id="Layer180_Container"
					style="width: 1279px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
		
				</div>
			</div>
			<div id="Layer245"
				style="position: absolute; text-align: left; visibility: hidden; left: 0px; top: 0px; width: 1279px; height: 817px; z-index: 3717;">
			
			</div>
			<div id="Layer263"
				style="position: fixed; text-align: left; visibility: hidden; left: 0; top: 0; right: 0; bottom: 0; z-index: 3718;">
				<div id="Layer264"
					style="position: fixed; text-align: center; left: 0; top: 0; right: 0; bottom: 0; z-index: 2026;">
					<div id="Layer264_Container"
						style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					</div>
				</div>
				<div id="Recover_password"
					style="position: absolute; text-align: left; visibility: hidden; left: 0px; top: 0px; width: 626px; height: 775px; z-index: 2027;">
					<div id="wb_PasswordRecovery1"
						style="position: absolute; left: 121px; top: 190px; width: 401px; height: 129px; z-index: 2000;">
						<form name="forgotpasswordform" method="post"
							action="<?php echo basename(__FILE__); ?>"
							id="forgotpasswordform">
							<input type="hidden" name="form_name" value="forgotpasswordform">
							<table id="PasswordRecovery1">
								<tr>
									<td class="PasswordRecovery1_header" colspan="2"
										style="height: 17px;">Forgot your password?</td>
								</tr>
								<tr>
									<td style="height: 37px; width: 60px">Email</td>
									<td style="text-align: left"><input
										class="PasswordRecovery1_input" name="email" type="text"
										id="email"></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td style="text-align: left; vertical-align: bottom"><input
										class="PasswordRecovery1_button" type="submit" name="submit"
										value="Submit" id="submit"></td>
								</tr>
							</table>
						</form>
					</div>
					<div id="wb_Text993"
						style="position: absolute; left: 226px; top: 177px; width: 230px; height: 25px; z-index: 2001; text-align: left;">
						<span
							style="color: #3C3C3C; font-family: Georgia; font-size: 21px;">Retrieve
							your password</span>
					</div>
					<div id="wb_Text994"
						style="position: absolute; left: 304px; top: 524px; width: 72px; height: 14px; text-align: center; z-index: 2002;">
						<span style="color: #FA5C43; font-family: Arial; font-size: 11px;">TRADE</span>
					</div>
					<div id="wb_Text995"
						style="position: absolute; left: 308px; top: 536px; width: 72px; height: 25px; z-index: 2003; text-align: left;">
						<span
							style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">STATION</span>
					</div>
					<div id="wb_Text996"
						style="position: absolute; left: 216px; top: 574px; width: 300px; height: 12px; z-index: 2004; text-align: left;">
						<span
							style="color: #A9A9A9; font-family: Arial; font-size: 9.3px;">Copyrights
							| TRDSTATION 2013-2016@All Rights Reserved</span>
					</div>
				</div>
				<div id="Layer265"
					style="position: absolute; text-align: left; left: 548px; top: 339px; width: 436px; height: 342px; z-index: 2028;">
					<div id="Layer266"
						style="position: absolute; text-align: left; left: 0px; top: 0px; width: 436px; height: 39px; z-index: 2007;">
						<div id="wb_Text999"
							style="position: absolute; left: 117px; top: 7px; width: 215px; height: 25px; z-index: 2005; text-align: left;">
							<span
								style="color: #FFFFFF; font-family: Georgia; font-size: 21px;">Order
								Request Alarm</span>
						</div>
						<div id="Layer267"
							style="position: absolute; text-align: left; left: 29px; top: 3px; width: 27px; height: 32px; z-index: 2006;">
						</div>
					</div>
					<div id="wb_Text991"
						style="position: absolute; left: 92px; top: 57px; width: 268px; height: 18px; z-index: 2008; text-align: left;">
						<span style="color: #696969; font-family: Arial; font-size: 16px;">You
							have received a new order from</span>
					</div>
					<div id="wb_Text992"
						style="position: absolute; left: 106px; top: 197px; width: 135px; height: 18px; z-index: 2009; text-align: left;">
						<span style="color: #3C3C3C; font-family: Arial; font-size: 16px;">Mr.
							Mohamed Ali</span>
					</div>
					<div id="wb_Text997"
						style="position: absolute; left: 105px; top: 174px; width: 244px; height: 18px; z-index: 2010; text-align: left;">
						<span style="color: #3C3C3C; font-family: Arial; font-size: 16px;">Inspitation
							Import And Export Co.</span>
					</div>
					<div id="wb_Text998"
						style="position: absolute; left: 258px; top: 200px; width: 80px; height: 14px; z-index: 2011; text-align: left;">
						<span style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Egypt&nbsp;
							|&nbsp; Cairo</span>
					</div>
					<div id="wb_Shape418"
						style="position: absolute; left: 170px; top: 88px; width: 76px; height: 76px; z-index: 2012;">
						<img src="<?php echo asset_url();?>images/img1808.png"
							id="Shape418" alt="" style="width: 76px; height: 76px;">
					</div>
					<div id="wb_Text1000"
						style="position: absolute; left: 41px; top: 237px; width: 378px; height: 30px; z-index: 2013; text-align: left;">
						<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Click
							&quot;View&quot; to view and edit this order, or click &quot;
							Later On&quot; , you can view / edit this order once you open
							&quot;My Station&quot; / Alerts / My Order</span>
					</div>
					<input type="submit" id="Button13"
						onclick="ShowObject('Layer263', 0);return false;" name=""
						value="View"
						style="position: absolute; left: 122px; top: 300px; width: 96px; height: 25px; z-index: 2014;">
					<input type="submit" id="Button14"
						onclick="ShowObject('Layer263', 0);return false;" name=""
						value="Later On"
						style="position: absolute; left: 224px; top: 300px; width: 96px; height: 25px; z-index: 2015;">
				</div>
				<div id="Layer624"
					style="position: absolute; text-align: left; left: 261px; top: 17px; width: 436px; height: 307px; z-index: 2029;">
					<div id="Layer625"
						style="position: absolute; text-align: left; left: 0px; top: 0px; width: 436px; height: 39px; z-index: 2018;">
						<div id="wb_Text1655"
							style="position: absolute; left: 117px; top: 7px; width: 215px; height: 25px; z-index: 2016; text-align: left;">
							<span
								style="color: #FFFFFF; font-family: Georgia; font-size: 21px;">Order
								Request Alarm</span>
						</div>
						<div id="Layer626"
							style="position: absolute; text-align: left; left: 29px; top: 3px; width: 27px; height: 32px; z-index: 2017;">
						</div>
					</div>
					<div id="wb_Text1656"
						style="position: absolute; left: 67px; top: 57px; width: 327px; height: 36px; text-align: center; z-index: 2019;">
						<span style="color: #696969; font-family: Arial; font-size: 16px;">You
							Order Notification Has Been Sent To The Seller Successfully..</span>
					</div>
					<div id="wb_Text1657"
						style="position: absolute; left: 134px; top: 150px; width: 135px; height: 18px; z-index: 2020; text-align: left;">
						<span style="color: #3C3C3C; font-family: Arial; font-size: 16px;">Ms.
							Rose</span>
					</div>
					<div id="wb_Text1658"
						style="position: absolute; left: 133px; top: 127px; width: 244px; height: 18px; z-index: 2021; text-align: left;">
						<span style="color: #3C3C3C; font-family: Arial; font-size: 16px;">Joystar
							Shoes Manufacturer Co. </span>
					</div>
					<div id="wb_Text1659"
						style="position: absolute; left: 259px; top: 153px; width: 98px; height: 28px; z-index: 2022; text-align: left;">
						<span style="color: #3C3C3C; font-family: Arial; font-size: 11px;">China&nbsp;
							|&nbsp; Guangzhou</span>
					</div>
					<div id="wb_Shape573"
						style="position: absolute; left: 38px; top: 107px; width: 76px; height: 76px; z-index: 2023;">
						<img src="<?php echo asset_url();?>images/img2105.png"
							id="Shape573" alt="" style="width: 76px; height: 76px;">
					</div>
					<div id="wb_Text1660"
						style="position: absolute; left: 41px; top: 210px; width: 378px; height: 30px; text-align: center; z-index: 2024;">
						<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Give
							the seller chance to view and edit the order, both of you are now
							able to click on <strong>Online Meeting </strong>
						</span>
					</div>
					<input type="submit" id="Button22"
						onclick="ShowObject('Layer624', 0);return false;" name=""
						value="Ok"
						style="position: absolute; left: 165px; top: 265px; width: 96px; height: 25px; z-index: 2025;">
				</div>
			</div>
			<div id="Layer275" class="mystation_layer275">
				<div id="Layer275_Container" class="mystation_layer275_container">
				</div>
			</div>
			<div id="Layer335"
				style="position: absolute; text-align: center; visibility: hidden; left: 0px; top: 11px; width: 1279px; height: 759px; z-index: 3720;">
				<div id="Layer335_Container"
					style="width: 1279px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer336"
						style="position: absolute; text-align: center; left: 0%; top: 18px; width: 99%; height: 710px; z-index: 2399;">
						<div id="Layer336_Container"
							style="width: 1273px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
						</div>
					</div>
					<div id="wb_Text1042"
						style="position: absolute; left: 18px; top: 687px; width: 148px; height: 20px; text-align: center; z-index: 2400;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 8px;">Copyrights
							| TRDSTATION 2013-2016@All Rights Reserved</span>
					</div>
					<div id="wb_Text1043"
						style="position: absolute; left: 56px; top: 644px; width: 72px; height: 14px; text-align: center; z-index: 2401;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 11px;">TRADE</span>
					</div>
					<div id="wb_Text1044"
						style="position: absolute; left: 60px; top: 655px; width: 72px; height: 25px; z-index: 2402; text-align: left;">
						<span
							style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">STATION</span>
					</div>
					<div id="Layer337"
						style="position: absolute; text-align: center; left: 172px; top: 24px; width: 1088px; height: 694px; z-index: 2403;">
						<div id="Layer337_Container"
							style="width: 1088px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<div id="wb_Text1162"
								style="position: absolute; left: 379px; top: 134px; width: 354px; height: 15px; z-index: 2382; text-align: left;">
								<span
									style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Your
									Desksite / Website has been completed and displayed in</span>
							</div>
							<div id="wb_Text1163"
								style="position: absolute; left: 436px; top: 95px; width: 228px; height: 25px; z-index: 2383; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Georgia; font-size: 21px;">Add
									More Languages</span>
							</div>
							<div id="Layer339"
								style="position: absolute; text-align: center; left: 0px; top: 0px; width: 1086px; height: 45px; z-index: 2384;">
								<div id="Layer339_Container"
									style="width: 1086px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
									<button id="AdvancedButton137"
										onclick="ShowObjectWithEffect('Layer335', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');return false;"
										type="button"
										style="position: absolute; left: 1039px; top: 0px; width: 47px; height: 45px; z-index: 2381;"
										onclick="window.location=''" name="" value="">
										<div style="text-align: center">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 20px">X</span>
										</div>
									</button>
								</div>
							</div>
							<div id="wb_Text1168"
								style="position: absolute; left: 389px; top: 259px; width: 360px; height: 14px; z-index: 2385; text-align: left;">
								<span
									style="color: #696969; font-family: Arial; font-size: 11px;">To
									do this, simply select the other language and click
									&quot;Start&quot;</span>
							</div>
							<div id="wb_Shape521"
								style="position: absolute; left: 618px; top: 305px; width: 122px; height: 35px; z-index: 2386;">
								<a href="" onclick="ShowObject('Layer335', 1);return false;"><div
										id="Shape521">
										<div id="Shape521_text">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 19px;">Start</span>
										</div>
									</div></a>
							</div>
							<select name="Expiry Year" size="1" id="Combobox18"
								style="position: absolute; left: 361px; top: 306px; width: 227px; height: 34px; z-index: 2387;">
								<option value="Add More Language">Add More Language</option>
								<option value="中文">中文</option>
								<option value="العربية">العربية</option>
								<option value="Türk Dili">Türk Dili</option>
								<option value="日本語">日本語</option>
								<option value="한국어">한국어</option>
							</select>
							<div id="wb_Text1164"
								style="position: absolute; left: 495px; top: 158px; width: 106px; height: 25px; z-index: 2388; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Georgia; font-size: 21px;">ENGLISH</span>
							</div>
							<div id="wb_Text1165"
								style="position: absolute; left: 284px; top: 217px; width: 525px; height: 30px; text-align: center; z-index: 2389;">
								<span
									style="color: #3C3C3C; font-family: Arial; font-size: 12px;">However,
									we offer an Auto - Translation into many languages, but we
									still recommend you to upload your own translation ( for a
									professional world-wide site ) ..</span>
							</div>
							<div id="wb_Text1166"
								style="position: absolute; left: 523px; top: 403px; width: 64px; height: 27px; z-index: 2390; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: SimSun; font-size: 21px;">中文</span>
							</div>
							<div id="wb_Image241"
								style="position: absolute; left: 608px; top: 161px; width: 16px; height: 16px; z-index: 2391;">
								<img
									src="<?php echo asset_url();?>images/tick-octagon-frame.png"
									id="Image241" alt="">
							</div>
							<div id="wb_Image242"
								style="position: absolute; left: 583px; top: 407px; width: 20px; height: 20px; z-index: 2392;">
								<img src="<?php echo asset_url();?>images/Error.png"
									id="Image242" alt="">
							</div>
							<div id="wb_Text1167"
								style="position: absolute; left: 401px; top: 447px; width: 328px; height: 45px; text-align: center; z-index: 2393;">
								<span
									style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Chinese
									language has been added to the following link, copy the link
									and share it with your translator. When you complete the
									translation press <strong>Publish </strong>button.
								</span>
							</div>
							<div id="wb_Text1169"
								style="position: absolute; left: 518px; top: 570px; width: 67px; height: 15px; z-index: 2394; text-align: left;">
								<span
									style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong><a
										href="#" class="style16"
										onclick="ShowObject('Layer335', 1);return false;">Publish</a></strong></span>
							</div>
							<div id="wb_Text1170"
								style="position: absolute; left: 589px; top: 570px; width: 67px; height: 15px; z-index: 2395; text-align: left;">
								<span
									style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong><a
										href="#" class="style16"
										onclick="ShowObject('Layer335', 1);return false;">Delete</a></strong></span><span
									style="color: #000000; font-family: Arial; font-size: 12px;"> </span>
							</div>
							<div id="wb_Text1649"
								style="position: absolute; left: 394px; top: 538px; width: 361px; height: 16px; z-index: 2396; text-align: left;">
								<span
									style="color: #1E90FF; font-family: Arial; font-size: 13px;"><a
									href="./member_siteinfo_translate_chinese.php" target="_blank"
									class="style23">www.trdstation.com/member_siteinfo_translate_chinese.php</a></span>
							</div>
							<div id="wb_Text1650"
								style="position: absolute; left: 647px; top: 407px; width: 106px; height: 16px; z-index: 2397; text-align: left;">
								<span
									style="color: #FF0000; font-family: Arial; font-size: 13px;">Under
									Process</span>
							</div>
							<div id="wb_Text1651"
								style="position: absolute; left: 401px; top: 497px; width: 328px; height: 28px; text-align: center; z-index: 2398;">
								<span
									style="color: #FF4500; font-family: Arial; font-size: 11px;">Don't
									publish the new language, before you completely translate all
									the information with all products details</span>
							</div>
						</div>
					</div>
					<div id="wb_Text1175"
						style="position: absolute; left: 41px; top: 126px; width: 99px; height: 16px; text-align: center; z-index: 2404;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Languages</span>
					</div>
					<div id="RollOver31"
						style="position: absolute; left: 67px; top: 67px; overflow: hidden; width: 48px; height: 48px; z-index: 2405">
						<a href=""> <img class="hover" alt=""
							src="<?php echo asset_url();?>images/Globe1.png">

						</a>
					</div>
				</div>
			</div>
			<div id="Layer338" style="position: absolute; text-align: center; visibility: hidden; left: 0px; top: 11px; width: 1279px; height: 759px; z-index: 3721;">
				<div id="Layer338_Container" style="width: 1279px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
				</div>
			</div>
			<div id="Layer130" class="mystation_Layer130" style="overflow:hidden;">
				<div id="Layer130_Container" class="mystation_layer130_container" >
				</div>
			</div>
			<div id="Layer162" class="mystation_layer162" >
				<div id="Layer162_Container" class="mystation_layer162_container" >
				</div>
			</div>
			<div id="Layer164" class="mystation_layer164">
				<div id="Layer164_Container" class="mystation_layer164_container">
				</div>
			</div>
			<div id="Layer14" style="position: absolute; text-align: center; visibility: hidden; left: 0%; top: 6px; width: 99%; height: 788px; z-index: 3725;">
				<div id="Layer14_Container" style="width: 1277px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer15"
						style="position: absolute; text-align: center; left: 0%; top: 26px; width: 99%; height: 713px; z-index: 2648;">
						<div id="Layer15_Container"
							style="width: 1273px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
						</div>
					</div>
					<div id="RollOver34"
						style="position: absolute; left: 54px; top: 71px; overflow: hidden; width: 64px; height: 64px; z-index: 2649">
						<a href=""> <img class="hover" alt=""
							src="<?php echo asset_url();?>images/Account1.png">

						</a>
					</div>
					<div id="wb_Text89"
						style="position: absolute; left: 46px; top: 133px; width: 81px; height: 16px; text-align: center; z-index: 2650;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 13px;">My
							Account</span>
					</div>
					<div id="Layer16"
						style="position: absolute; text-align: center; left: 167px; top: 31px; width: 1088px; height: 697px; z-index: 2651;">
						<div id="Layer16_Container"
							style="width: 1088px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<div id="Layer17"
								style="position: absolute; text-align: center; left: 1px; top: 1px; width: 1085px; height: 45px; z-index: 2646;">
								<div id="Layer17_Container"
									style="width: 1085px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
									<button id="AdvancedButton53"
										onclick="ShowObjectWithEffect('Layer14', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');return false;"
										type="button"
										style="position: absolute; left: 1038px; top: 0px; width: 47px; height: 45px; z-index: 2642;"
										onclick="window.location=''" name="" value="">
										<div style="text-align: center">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 20px">X</span>
										</div>
									</button>
									<div id="wb_Shape322"
										style="position: absolute; left: 358px; top: 1px; width: 113px; height: 44px; z-index: 2643;">
										<a href=""
											onclick="ShowObject('wb_Shape319', 1);return false;"><div
												id="Shape322">
												<div id="Shape322_text">
													<span
														style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">EDIT</span>
												</div>
											</div></a>
									</div>
									<div id="wb_Shape323"
										style="position: absolute; left: 476px; top: 1px; width: 113px; height: 44px; z-index: 2644;">
										<a href=""
											onclick="ShowObject('wb_Shape319', 1);return false;"><div
												id="Shape323">
												<div id="Shape323_text">
													<span
														style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">RESET</span>
												</div>
											</div></a>
									</div>
									<div id="wb_Shape324"
										style="position: absolute; left: 593px; top: 1px; width: 113px; height: 44px; z-index: 2645;">
										<a href=""
											onclick="ShowObject('wb_Shape319', 1);return false;"><div
												id="Shape324">
												<div id="Shape324_text">
													<span
														style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">SAVE</span>
												</div>
											</div></a>
									</div>
								</div>
							</div>
							<div id="wb_Text111"
								style="position: absolute; left: 434px; top: 238px; width: 250px; height: 64px; z-index: 2647; text-align: left;">
								<span
									style="color: #000000; font-family: Arial; font-size: 13px;">To
									be same other buttons, the basic sceen display the information
									in Copmany Information registration form and when click edit,
									it open the same in edit mode..</span>
							</div>
						</div>
					</div>
					<div id="wb_Shape318"
						style="position: absolute; left: 9px; top: 163px; width: 150px; height: 54px; z-index: 2652;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 1);ShowObject('Layer507', 0);return false;"><div
								id="Shape318">
								<div id="Shape318_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Personal
										<br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape319"
						style="position: absolute; left: 9px; top: 219px; width: 150px; height: 54px; z-index: 2653;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 1);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape319">
								<div id="Shape319_text">
									<span
										style="color: #F05539; font-family: Arial; font-size: 11px;">Company<br></span><span
										style="color: #F05539; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape320"
						style="position: absolute; left: 9px; top: 275px; width: 150px; height: 54px; z-index: 2654;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 1);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape320">
								<div id="Shape320_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Factory<br></span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape321"
						style="position: absolute; left: 9px; top: 331px; width: 150px; height: 54px; z-index: 2655;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 1);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape321">
								<div id="Shape321_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Trade
										/ Export<br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape327"
						style="position: absolute; left: 9px; top: 386px; width: 150px; height: 54px; z-index: 2656;">
						<a href=""
							onclick="ShowObject('Layer170', 1);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape327">
								<div id="Shape327_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Edit<br></span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Certificates</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape563"
						style="position: absolute; left: 9px; top: 441px; width: 150px; height: 54px; z-index: 2657;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 1);return false;"><div
								id="Shape563">
								<div id="Shape563_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit<br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Sub
										Users</span>
								</div>
							</div></a>
					</div>
				</div>
			</div>
			<div id="Layer18" style="position: absolute; text-align: center; visibility: hidden; left: 0%; top: 6px; width: 99%; height: 788px; z-index: 3726;">
				<div id="Layer18_Container" style="width: 1277px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer19"
						style="position: absolute; text-align: center; left: 0%; top: 26px; width: 99%; height: 713px; z-index: 2726;">
						<div id="Layer19_Container"
							style="width: 1273px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
						</div>
					</div>
					<div id="RollOver35"
						style="position: absolute; left: 54px; top: 71px; overflow: hidden; width: 64px; height: 64px; z-index: 2727">
						<a href=""> <img class="hover" alt=""
							src="<?php echo asset_url();?>images/Account1.png">

						</a>
					</div>
					<div id="wb_Text542"
						style="position: absolute; left: 46px; top: 133px; width: 81px; height: 16px; text-align: center; z-index: 2728;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 13px;">My
							Account</span>
					</div>
					<div id="Layer20"
						style="position: absolute; text-align: center; left: 167px; top: 31px; width: 1088px; height: 697px; z-index: 2729;">
						<div id="Layer20_Container"
							style="width: 1088px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<div id="Layer80"
								style="position: absolute; text-align: center; left: 1px; top: 1px; width: 1085px; height: 45px; z-index: 2723;">
								<div id="Layer80_Container"
									style="width: 1085px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
									<button id="AdvancedButton56"
										onclick="ShowObjectWithEffect('Layer18', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');return false;"
										type="button"
										style="position: absolute; left: 1038px; top: 0px; width: 47px; height: 45px; z-index: 2658;"
										onclick="window.location=''" name="" value="">
										<div style="text-align: center">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 20px">X</span>
										</div>
									</button>
									<div id="wb_Shape516"
										style="position: absolute; left: 358px; top: 1px; width: 113px; height: 44px; z-index: 2659;">
										<a href=""
											onclick="ShowObject('wb_Form10', 0);ShowObject('wb_Form11', 1);return false;"><div
												id="Shape516">
												<div id="Shape516_text">
													<span
														style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">EDIT</span>
												</div>
											</div></a>
									</div>
									<div id="wb_Shape517"
										style="position: absolute; left: 476px; top: 1px; width: 113px; height: 44px; z-index: 2660;">
										<a href=""
											onclick="ShowObjectWithEffect('wb_Form10', 1, 'fade', 100);ShowObjectWithEffect('wb_Form11', 0, 'fade', 100);return false;"><div
												id="Shape517">
												<div id="Shape517_text">
													<span
														style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">RESET</span>
												</div>
											</div></a>
									</div>
									<div id="wb_Shape518"
										style="position: absolute; left: 593px; top: 1px; width: 113px; height: 44px; z-index: 2661;">
										<a href=""
											onclick="ShowObjectWithEffect('wb_Form10', 1, 'fade', 100);ShowObjectWithEffect('wb_Form11', 0, 'fade', 100);return false;"><div
												id="Shape518">
												<div id="Shape518_text">
													<span
														style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">SAVE</span>
												</div>
											</div></a>
									</div>
								</div>
							</div>
							<div id="wb_Form10"
								style="position: absolute; left: 199px; top: 116px; width: 858px; height: 463px; z-index: 2724;">
								<form name="Form1" method="post"
									action="mailto:yourname@yourdomain.com" enctype="text/plain"
									id="Form10" onsubmit="return ValidateForm1(this)">
									<div id="wb_Text545"
										style="position: absolute; left: 80px; top: 355px; width: 114px; height: 15px; z-index: 2662; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">R&amp;D
											Capacity</span>
									</div>
									<div id="wb_Text547"
										style="position: absolute; left: 81px; top: 208px; width: 114px; height: 15px; z-index: 2663; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Factory
											Size</span>
									</div>
									<div id="wb_Text549"
										style="position: absolute; left: 82px; top: 93px; width: 114px; height: 30px; z-index: 2664; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Location
											In English</span>
									</div>
									<div id="wb_Text551"
										style="position: absolute; left: 81px; top: 127px; width: 114px; height: 30px; z-index: 2665; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Location
											In<br>License Language
										</span>
									</div>
									<div id="wb_Text554"
										style="position: absolute; left: 81px; top: 173px; width: 114px; height: 15px; z-index: 2666; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Tel</span>
									</div>
									<div id="wb_Text555"
										style="position: absolute; left: 83px; top: 50px; width: 143px; height: 16px; z-index: 2667; text-align: left;">
										<span
											style="color: #F05539; font-family: Georgia; font-size: 13px;">Factory
											Details</span>
									</div>
									<div id="wb_Text556"
										style="position: absolute; left: 83px; top: 251px; width: 130px; height: 30px; z-index: 2668; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">No.
											Of Production line</span>
									</div>
									<input type="text" id="Editbox81"
										style="position: absolute; left: 246px; top: 242px; width: 23px; height: 29px; line-height: 29px; z-index: 2669;"
										name="No. Of Production line" value="5" maxlength="3">
									<div id="wb_Text557"
										style="position: absolute; left: 534px; top: 251px; width: 34px; height: 15px; z-index: 2670; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Days</span>
									</div>
									<div id="wb_Text558"
										style="position: absolute; left: 82px; top: 299px; width: 130px; height: 30px; z-index: 2671; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">No.
											Of Research &amp; Development Staff</span>
									</div>
									<input type="text" id="Editbox82"
										style="position: absolute; left: 245px; top: 297px; width: 28px; height: 29px; line-height: 29px; z-index: 2672;"
										name="R&D Staff" value="50" maxlength="3">
									<div id="wb_Text559"
										style="position: absolute; left: 326px; top: 304px; width: 171px; height: 15px; z-index: 2673; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">No.
											Of Quality Control Staff</span>
									</div>
									<input type="text" id="Editbox83"
										style="position: absolute; left: 506px; top: 293px; width: 25px; height: 29px; line-height: 29px; z-index: 2674;"
										name="QC Staff" value="5" maxlength="3">
									<div id="wb_Text621"
										style="position: absolute; left: 251px; top: 358px; width: 36px; height: 15px; z-index: 2675; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 12px;">OEM</span>
									</div>
									<div id="wb_Text624"
										style="position: absolute; left: 303px; top: 357px; width: 75px; height: 15px; z-index: 2676; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 12px;">Own
											Brand</span>
									</div>
									<div id="wb_Text625"
										style="position: absolute; left: 80px; top: 406px; width: 114px; height: 15px; z-index: 2677; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Annual
											Turnover</span>
									</div>
									<div id="wb_Text543"
										style="position: absolute; left: 327px; top: 253px; width: 130px; height: 15px; z-index: 2678; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Production
											Lead Time</span>
									</div>
									<div id="wb_Text626"
										style="position: absolute; left: 304px; top: 405px; width: 75px; height: 15px; z-index: 2679; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Arial; font-size: 12px;">Million
											USD</span>
									</div>
									<input type="text" id="Editbox88"
										style="position: absolute; left: 479px; top: 243px; width: 23px; height: 29px; line-height: 29px; z-index: 2680;"
										name="No. Of Production line" value="60" maxlength="3"> <input
										type="text" id="Editbox89"
										style="position: absolute; left: 245px; top: 395px; width: 29px; height: 29px; line-height: 29px; z-index: 2681;"
										name="Tel" value="1" maxlength="12">
									<div id="wb_Text641"
										style="position: absolute; left: 244px; top: 94px; width: 440px; height: 15px; z-index: 2682; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Arial; font-size: 12px;">207,
											shengsheng building210, Guangdond province, Guangzhou, China</span>
									</div>
									<div id="wb_Text648"
										style="position: absolute; left: 245px; top: 131px; width: 440px; height: 16px; z-index: 2683; text-align: left;">
										<span
											style="color: #1E90FF; font-family: SimSun; font-size: 12px;">才三于上不牙爾奏柬事柬鬲奏</span><span
											style="color: #1E90FF; font-family: Arial; font-size: 12px;">,
										</span>
									</div>
									<div id="wb_Text672"
										style="position: absolute; left: 244px; top: 171px; width: 196px; height: 16px; z-index: 2684; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Arial; font-size: 13px;">+86
											020 865213593</span>
									</div>
									<div id="wb_Text675"
										style="position: absolute; left: 246px; top: 206px; width: 250px; height: 15px; z-index: 2685; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Arial; font-size: 12px;">3000
											to 5000 Square Meter</span>
									</div>
								</form>
							</div>
							<div id="wb_Form11"
								style="position: absolute; visibility: hidden; left: 46px; top: 65px; width: 1009px; height: 587px; z-index: 2725;">
								<form name="Form1" method="post"
									action="mailto:yourname@yourdomain.com" enctype="text/plain"
									id="Form11" onsubmit="return ValidateForm1(this)">
									<div id="wb_Text544"
										style="position: absolute; left: 80px; top: 385px; width: 114px; height: 15px; z-index: 2686; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">R&amp;D
											Capacity</span>
									</div>
									<div id="wb_Text546"
										style="position: absolute; left: 79px; top: 267px; width: 114px; height: 15px; z-index: 2687; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Factory
											Size</span>
									</div>
									<div id="wb_Text548"
										style="position: absolute; left: 84px; top: 93px; width: 114px; height: 30px; z-index: 2688; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Location
											In English</span>
									</div>
									<input type="text" id="Editbox90"
										style="position: absolute; left: 243px; top: 82px; width: 93px; height: 29px; line-height: 29px; z-index: 2689;"
										name="Province" value="" maxlength="30"
										placeholder="Guangdong"> <input type="text" id="Editbox91"
										style="position: absolute; left: 359px; top: 82px; width: 94px; height: 29px; line-height: 29px; z-index: 2690;"
										name="city" value="" maxlength="30" placeholder="Guangzhou"> <input
										type="text" id="Editbox97"
										style="position: absolute; left: 476px; top: 82px; width: 455px; height: 29px; line-height: 29px; z-index: 2691;"
										name="Address" value="" maxlength="40"
										placeholder="207, Building No.200, Hengsheng Area">
									<div id="wb_Text550"
										style="position: absolute; left: 84px; top: 142px; width: 114px; height: 30px; z-index: 2692; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Location
											In<br>License Language
										</span>
									</div>
									<input type="text" id="Editbox98"
										style="position: absolute; left: 243px; top: 141px; width: 93px; height: 29px; line-height: 29px; z-index: 2693;"
										name="Province" value="" maxlength="30"
										placeholder="&#19987;&#22825;"> <input type="text"
										id="Editbox99"
										style="position: absolute; left: 359px; top: 141px; width: 94px; height: 29px; line-height: 29px; z-index: 2694;"
										name="city" value="" maxlength="30"
										placeholder="&#31639;&#27861; "> <input type="text"
										id="Editbox100"
										style="position: absolute; left: 476px; top: 141px; width: 454px; height: 29px; line-height: 29px; z-index: 2695;"
										name="Address" value="" maxlength="40"
										placeholder="&#25165;&#19977;&#20110;&#19978;&#19981;&#29273;&#29246;&#22863;&#26604;&#20107;&#26604;&#39730;&#22863;">
									<div id="wb_Text552"
										style="position: absolute; left: 82px; top: 210px; width: 114px; height: 15px; z-index: 2696; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Tel</span>
									</div>
									<input type="tel" id="Editbox101"
										style="position: absolute; left: 243px; top: 198px; width: 43px; height: 29px; line-height: 29px; z-index: 2697;"
										name="email" value="" maxlength="8" placeholder="+86"> <input
										type="tel" id="Editbox102"
										style="position: absolute; left: 308px; top: 198px; width: 72px; height: 29px; line-height: 29px; z-index: 2698;"
										name="City Code" value="" maxlength="6" placeholder="020"> <input
										type="tel" id="Editbox103"
										style="position: absolute; left: 403px; top: 197px; width: 116px; height: 29px; line-height: 29px; z-index: 2699;"
										name="Tel" value="" maxlength="12" placeholder="865213593">
									<div id="wb_Text553"
										style="position: absolute; left: 83px; top: 50px; width: 143px; height: 16px; z-index: 2700; text-align: left;">
										<span
											style="color: #F05539; font-family: Georgia; font-size: 13px;">Factory
											Details</span>
									</div>
									<div id="wb_Text627"
										style="position: absolute; left: 464px; top: 267px; width: 130px; height: 30px; z-index: 2701; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">No.
											Of Production line</span>
									</div>
									<input type="number" id="Editbox104"
										style="position: absolute; left: 614px; top: 256px; width: 23px; height: 29px; line-height: 29px; z-index: 2702;"
										name="No. Of Production line" value="5" maxlength="3">
									<div id="wb_Text628"
										style="position: absolute; left: 915px; top: 267px; width: 34px; height: 15px; z-index: 2703; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Days</span>
									</div>
									<div id="wb_Text629"
										style="position: absolute; left: 78px; top: 315px; width: 130px; height: 30px; z-index: 2704; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">No.
											Of Research &amp; Development Staff</span>
									</div>
									<input type="number" id="Editbox105"
										style="position: absolute; left: 244px; top: 311px; width: 162px; height: 29px; line-height: 29px; z-index: 2705;"
										name="R&D Staff" value="50" maxlength="3">
									<div id="wb_Text630"
										style="position: absolute; left: 464px; top: 323px; width: 171px; height: 15px; z-index: 2706; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">No.
											Of Quality Control Staff</span>
									</div>
									<input type="number" id="Editbox106"
										style="position: absolute; left: 648px; top: 312px; width: 146px; height: 29px; line-height: 29px; z-index: 2707;"
										name="QC Staff" value="5" maxlength="3"> <input
										type="checkbox" id="Checkbox114" name="Checkbox102" value="on"
										checked
										style="position: absolute; left: 244px; top: 383px; z-index: 2708;">
									<div id="wb_Text631"
										style="position: absolute; left: 272px; top: 385px; width: 36px; height: 15px; z-index: 2709; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">OEM</span>
									</div>
									<div id="wb_Text632"
										style="position: absolute; left: 362px; top: 385px; width: 43px; height: 15px; z-index: 2710; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">ODM</span>
									</div>
									<input type="checkbox" id="Checkbox115" name="" value="on"
										style="position: absolute; left: 334px; top: 383px; z-index: 2711;">
									<div id="wb_Text633"
										style="position: absolute; left: 584px; top: 385px; width: 43px; height: 15px; z-index: 2712; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Other</span>
									</div>
									<input type="checkbox" id="Checkbox116" name="" value="on"
										style="position: absolute; left: 556px; top: 383px; z-index: 2713;">
									<div id="wb_Text634"
										style="position: absolute; left: 457px; top: 385px; width: 75px; height: 15px; z-index: 2714; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Own
											Brand</span>
									</div>
									<input type="checkbox" id="Checkbox117" name="Checkbox113"
										value="on" checked
										style="position: absolute; left: 429px; top: 383px; z-index: 2715;">
									<input type="text" id="Editbox107"
										style="position: absolute; left: 631px; top: 373px; width: 161px; height: 29px; line-height: 29px; z-index: 2716;"
										name="R&D Capacity" value="" maxlength="10">
									<div id="wb_Text635"
										style="position: absolute; left: 78px; top: 434px; width: 114px; height: 15px; z-index: 2717; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Annual
											Turnover</span>
									</div>
									<div id="wb_Text636"
										style="position: absolute; left: 708px; top: 269px; width: 130px; height: 15px; z-index: 2718; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Production
											Lead Time</span>
									</div>
									<div id="wb_Text637"
										style="position: absolute; left: 394px; top: 435px; width: 75px; height: 15px; z-index: 2719; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Million
											USD</span>
									</div>
									<input type="number" id="Editbox108"
										style="position: absolute; left: 860px; top: 260px; width: 23px; height: 29px; line-height: 29px; z-index: 2720;"
										name="No. Of Production line" value="60" maxlength="3"> <input
										type="number" id="Editbox109"
										style="position: absolute; left: 247px; top: 422px; width: 116px; height: 29px; line-height: 29px; z-index: 2721;"
										name="Tel" value="1" maxlength="12"> <select name="Combobox1"
										size="1" id="Combobox22"
										style="position: absolute; left: 245px; top: 263px; width: 193px; height: 25px; z-index: 2722;">
										<option>3000 to 5000 Square Meter</option>
										<option>5000 to 10000 Square Meter</option>
										<option>10000 to 30000 Square Meter</option>
										<option>30000 to 50000 Square Meter</option>
										<option>50000 to 100000 Square Meter</option>
										<option>More Than100000 Square Meter</option>
									</select>
								</form>
							</div>
						</div>
					</div>
					<div id="wb_Shape328"
						style="position: absolute; left: 9px; top: 163px; width: 150px; height: 54px; z-index: 2730;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 1);ShowObject('Layer507', 0);return false;"><div
								id="Shape328">
								<div id="Shape328_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Personal
										<br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape501"
						style="position: absolute; left: 9px; top: 219px; width: 150px; height: 54px; z-index: 2731;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 1);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape501">
								<div id="Shape501_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Company<br></span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape513"
						style="position: absolute; left: 9px; top: 275px; width: 150px; height: 54px; z-index: 2732;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 1);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape513">
								<div id="Shape513_text">
									<span
										style="color: #F05539; font-family: Arial; font-size: 11px;">Factory<br></span><span
										style="color: #F05539; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape514"
						style="position: absolute; left: 9px; top: 331px; width: 150px; height: 54px; z-index: 2733;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 1);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape514">
								<div id="Shape514_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Trade
										/ Export<br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape523"
						style="position: absolute; left: 9px; top: 386px; width: 150px; height: 54px; z-index: 2734;">
						<a href=""
							onclick="ShowObject('Layer170', 1);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape523">
								<div id="Shape523_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Edit<br></span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Certificates</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape562"
						style="position: absolute; left: 9px; top: 441px; width: 150px; height: 54px; z-index: 2735;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 1);return false;"><div
								id="Shape562">
								<div id="Shape562_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit<br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Sub
										Users</span>
								</div>
							</div></a>
					</div>
				</div>
			</div>
			<div id="Layer121"
				style="position: absolute; text-align: center; visibility: hidden; left: 0%; top: 6px; width: 99%; height: 788px; z-index: 3727;">
				<div id="Layer121_Container"
					style="width: 1277px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer122"
						style="position: absolute; text-align: center; left: 0%; top: 26px; width: 99%; height: 713px; z-index: 2854;">
						<div id="Layer122_Container"
							style="width: 1273px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
						</div>
					</div>
					<div id="RollOver36"
						style="position: absolute; left: 54px; top: 71px; overflow: hidden; width: 64px; height: 64px; z-index: 2855">
						<a href=""> <img class="hover" alt=""
							src="<?php echo asset_url();?>images/Account1.png">

						</a>
					</div>
					<div id="wb_Text638"
						style="position: absolute; left: 46px; top: 133px; width: 81px; height: 16px; text-align: center; z-index: 2856;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 13px;">My
							Account</span>
					</div>
					<div id="Layer123"
						style="position: absolute; text-align: center; left: 167px; top: 31px; width: 1088px; height: 697px; z-index: 2857;">
						<div id="Layer123_Container"
							style="width: 1088px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<div id="Layer168"
								style="position: absolute; text-align: center; left: 1px; top: 1px; width: 1085px; height: 45px; z-index: 2851;">
								<div id="Layer168_Container"
									style="width: 1085px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
									<button id="AdvancedButton57"
										onclick="ShowObjectWithEffect('Layer121', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');return false;"
										type="button"
										style="position: absolute; left: 1038px; top: 0px; width: 47px; height: 45px; z-index: 2736;"
										onclick="window.location=''" name="" value="">
										<div style="text-align: center">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 20px">X</span>
										</div>
									</button>
									<div id="wb_Shape528"
										style="position: absolute; left: 358px; top: 1px; width: 113px; height: 44px; z-index: 2737;">
										<a href=""
											onclick="ShowObject('wb_Form12', 0);ShowObject('wb_Form13', 1);return false;"><div
												id="Shape528">
												<div id="Shape528_text">
													<span
														style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">EDIT</span>
												</div>
											</div></a>
									</div>
									<div id="wb_Shape529"
										style="position: absolute; left: 476px; top: 1px; width: 113px; height: 44px; z-index: 2738;">
										<a href=""
											onclick="ShowObjectWithEffect('wb_Form12', 1, 'fade', 100);ShowObjectWithEffect('wb_Form13', 0, 'fade', 100);return false;"><div
												id="Shape529">
												<div id="Shape529_text">
													<span
														style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">RESET</span>
												</div>
											</div></a>
									</div>
									<div id="wb_Shape530"
										style="position: absolute; left: 593px; top: 1px; width: 113px; height: 44px; z-index: 2739;">
										<a href=""
											onclick="ShowObjectWithEffect('wb_Form12', 1, 'fade', 100);ShowObjectWithEffect('wb_Form13', 0, 'fade', 100);return false;"><div
												id="Shape530">
												<div id="Shape530_text">
													<span
														style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">SAVE</span>
												</div>
											</div></a>
									</div>
								</div>
							</div>
							<div id="wb_Form12"
								style="position: absolute; left: 159px; top: 65px; width: 887px; height: 611px; z-index: 2852;">
								<form name="Form1" method="post" action="" enctype="text/plain"
									id="Form12">
									<div id="wb_Text640"
										style="position: absolute; left: 186px; top: 257px; width: 114px; height: 15px; z-index: 2740; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Nearst
											Port/Ports</span>
									</div>
									<div id="wb_Text643"
										style="position: absolute; left: 186px; top: 124px; width: 143px; height: 16px; z-index: 2741; text-align: left;">
										<span
											style="color: #F05539; font-family: Georgia; font-size: 13px;">Trade
											&amp; Export Details</span>
									</div>
									<div id="wb_Text645"
										style="position: absolute; left: 187px; top: 158px; width: 114px; height: 15px; z-index: 2742; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Main
											Markets</span>
									</div>
									<div id="wb_Text646"
										style="position: absolute; left: 374px; top: 160px; width: 99px; height: 15px; z-index: 2743; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 12px;">North
											America </span>
									</div>
									<div id="wb_Text649"
										style="position: absolute; left: 504px; top: 179px; width: 99px; height: 15px; z-index: 2744; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 12px;">Southeast
											Asia</span>
									</div>
									<div id="wb_Text650"
										style="position: absolute; left: 374px; top: 183px; width: 99px; height: 15px; z-index: 2745; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 12px;">Africa</span>
									</div>
									<div id="wb_Text673"
										style="position: absolute; left: 375px; top: 208px; width: 99px; height: 15px; z-index: 2746; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 12px;">Middle
											East</span>
									</div>
									<div id="wb_Text674"
										style="position: absolute; left: 503px; top: 158px; width: 99px; height: 15px; z-index: 2747; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 12px;">Eastern
											Asia</span>
									</div>
									<div id="wb_Text680"
										style="position: absolute; left: 187px; top: 296px; width: 114px; height: 45px; z-index: 2748; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Terms
											Of International Trade</span>
									</div>
									<div id="wb_Text681"
										style="position: absolute; left: 374px; top: 305px; width: 34px; height: 15px; z-index: 2749; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 12px;">FOB</span>
									</div>
									<div id="wb_Text684"
										style="position: absolute; left: 419px; top: 305px; width: 34px; height: 15px; z-index: 2750; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 12px;">CIF</span>
									</div>
									<div id="wb_Text693"
										style="position: absolute; left: 187px; top: 362px; width: 114px; height: 15px; z-index: 2751; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Terms
											Of Payment</span>
									</div>
									<div id="wb_Text1205"
										style="position: absolute; left: 414px; top: 362px; width: 34px; height: 15px; z-index: 2752; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 12px;">LC</span>
									</div>
									<div id="wb_Text1206"
										style="position: absolute; left: 374px; top: 362px; width: 34px; height: 15px; z-index: 2753; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 12px;">T/T</span>
									</div>
									<div id="wb_Text1211"
										style="position: absolute; left: 488px; top: 362px; width: 72px; height: 15px; z-index: 2754; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 12px;">Credit
											Card</span>
									</div>
									<div id="wb_Text1212"
										style="position: absolute; left: 446px; top: 362px; width: 34px; height: 15px; z-index: 2755; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 12px;">Cash</span>
									</div>
									<div id="wb_Text1214"
										style="position: absolute; left: 187px; top: 388px; width: 114px; height: 15px; z-index: 2756; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Payment
											Curency</span>
									</div>
									<div id="wb_Text1215"
										style="position: absolute; left: 374px; top: 389px; width: 34px; height: 15px; z-index: 2757; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 12px;">USD</span>
									</div>
									<div id="wb_Text1216"
										style="position: absolute; left: 414px; top: 389px; width: 34px; height: 15px; z-index: 2758; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 12px;">EUR</span>
									</div>
									<div id="wb_Text1222"
										style="position: absolute; left: 457px; top: 389px; width: 34px; height: 15px; z-index: 2759; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 12px;">CNY</span>
									</div>
									<div id="wb_Text647"
										style="position: absolute; left: 372px; top: 254px; width: 150px; height: 15px; z-index: 2760; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 12px;">Shenzen
											and Guangzhou</span>
									</div>
								</form>
							</div>
							<div id="wb_Form13"
								style="position: absolute; visibility: hidden; left: 174px; top: 72px; width: 887px; height: 611px; z-index: 2853;">
								<form name="Form1" method="post" action="" enctype="text/plain"
									id="Form13" onsubmit="return ValidateForm1(this)">
									<input type="text" id="Editbox85"
										style="position: absolute; left: 166px; top: 199px; width: 115px; height: 29px; line-height: 29px; z-index: 2761;"
										name="Port" value="" maxlength="12" placeholder="Shenzen">
									<div id="wb_Text639"
										style="position: absolute; left: 6px; top: 207px; width: 114px; height: 15px; z-index: 2762; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Nearst
											Port/Ports</span>
									</div>
									<div id="wb_Text642"
										style="position: absolute; left: 291px; top: 567px; width: 260px; height: 12px; z-index: 2763; text-align: left;">
										<span
											style="color: #A9A9A9; font-family: Arial; font-size: 9.3px;">Copyrights
											| TRDSTATION 2013-2016@All Rights Reserved</span>
									</div>
									<div id="wb_Text644"
										style="position: absolute; left: 6px; top: 44px; width: 143px; height: 16px; z-index: 2764; text-align: left;">
										<span
											style="color: #F05539; font-family: Georgia; font-size: 13px;">Trade
											&amp; Export Details</span>
									</div>
									<div id="wb_Text679"
										style="position: absolute; left: 7px; top: 78px; width: 114px; height: 15px; z-index: 2765; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Main
											Markets</span>
									</div>
									<input type="checkbox" id="Checkbox189" name="" value="on"
										style="position: absolute; left: 166px; top: 78px; z-index: 2766;">
									<div id="wb_Text692"
										style="position: absolute; left: 194px; top: 80px; width: 99px; height: 15px; z-index: 2767; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">North
											America </span>
									</div>
									<input type="checkbox" id="Checkbox190" name="" value="on"
										style="position: absolute; left: 346px; top: 78px; z-index: 2768;">
									<div id="wb_Text1213"
										style="position: absolute; left: 374px; top: 80px; width: 99px; height: 15px; z-index: 2769; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">South
											America </span>
									</div>
									<input type="checkbox" id="Checkbox191" name="" value="on"
										style="position: absolute; left: 515px; top: 78px; z-index: 2770;">
									<div id="wb_Text1225"
										style="position: absolute; left: 543px; top: 80px; width: 99px; height: 15px; z-index: 2771; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Estern
											Europe</span>
									</div>
									<input type="checkbox" id="Checkbox192" name="" value="on"
										style="position: absolute; left: 681px; top: 78px; z-index: 2772;">
									<div id="wb_Text1226"
										style="position: absolute; left: 709px; top: 80px; width: 99px; height: 15px; z-index: 2773; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Southeast
											Asia</span>
									</div>
									<input type="checkbox" id="Checkbox193" name="" value="on"
										style="position: absolute; left: 166px; top: 108px; z-index: 2774;">
									<div id="wb_Text1227"
										style="position: absolute; left: 194px; top: 110px; width: 99px; height: 15px; z-index: 2775; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Africa</span>
									</div>
									<input type="checkbox" id="Checkbox194" name="" value="on"
										style="position: absolute; left: 346px; top: 108px; z-index: 2776;">
									<div id="wb_Text1228"
										style="position: absolute; left: 374px; top: 110px; width: 99px; height: 15px; z-index: 2777; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Oceania</span>
									</div>
									<input type="checkbox" id="Checkbox195" name="" value="on"
										style="position: absolute; left: 515px; top: 108px; z-index: 2778;">
									<div id="wb_Text1229"
										style="position: absolute; left: 543px; top: 110px; width: 99px; height: 15px; z-index: 2779; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Middle
											East</span>
									</div>
									<input type="checkbox" id="Checkbox196" name="" value="on"
										style="position: absolute; left: 681px; top: 108px; z-index: 2780;">
									<div id="wb_Text1230"
										style="position: absolute; left: 709px; top: 110px; width: 99px; height: 15px; z-index: 2781; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Eastern
											Asia</span>
									</div>
									<input type="checkbox" id="Checkbox197" name="" value="on"
										style="position: absolute; left: 166px; top: 141px; z-index: 2782;">
									<div id="wb_Text1231"
										style="position: absolute; left: 194px; top: 143px; width: 99px; height: 15px; z-index: 2783; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Western
											Europe</span>
									</div>
									<input type="checkbox" id="Checkbox198" name="" value="on"
										style="position: absolute; left: 346px; top: 141px; z-index: 2784;">
									<div id="wb_Text1232"
										style="position: absolute; left: 374px; top: 143px; width: 153px; height: 15px; z-index: 2785; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Worldwide
											( to select all )</span>
									</div>
									<input type="text" id="Editbox86"
										style="position: absolute; left: 359px; top: 199px; width: 115px; height: 29px; line-height: 29px; z-index: 2786;"
										name="Port" value="" maxlength="12" placeholder="Guangzhou">
									<div id="wb_Text1233"
										style="position: absolute; left: 322px; top: 210px; width: 31px; height: 15px; z-index: 2787; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">And</span>
									</div>
									<div id="wb_Text1234"
										style="position: absolute; left: 515px; top: 210px; width: 31px; height: 15px; z-index: 2788; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">And</span>
									</div>
									<input type="text" id="Editbox87"
										style="position: absolute; left: 552px; top: 199px; width: 115px; height: 29px; line-height: 29px; z-index: 2789;"
										name="Port" value="" maxlength="12" placeholder="Port">
									<div id="wb_Text1235"
										style="position: absolute; left: 7px; top: 255px; width: 114px; height: 45px; z-index: 2790; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Terms
											Of International Trade</span>
									</div>
									<input type="checkbox" id="Checkbox199" name="" value="on"
										style="position: absolute; left: 166px; top: 255px; z-index: 2791;">
									<div id="wb_Text1236"
										style="position: absolute; left: 194px; top: 257px; width: 34px; height: 15px; z-index: 2792; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">FOB</span>
									</div>
									<input type="checkbox" id="Checkbox200" name="" value="on"
										style="position: absolute; left: 256px; top: 255px; z-index: 2793;">
									<div id="wb_Text1237"
										style="position: absolute; left: 284px; top: 257px; width: 34px; height: 15px; z-index: 2794; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">CFR</span>
									</div>
									<input type="checkbox" id="Checkbox201" name="" value="on"
										style="position: absolute; left: 430px; top: 255px; z-index: 2795;">
									<div id="wb_Text1238"
										style="position: absolute; left: 458px; top: 257px; width: 34px; height: 15px; z-index: 2796; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">DAT</span>
									</div>
									<div id="wb_Text1239"
										style="position: absolute; left: 368px; top: 257px; width: 34px; height: 15px; z-index: 2797; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">CIF</span>
									</div>
									<input type="checkbox" id="Checkbox202" name="" value="on"
										style="position: absolute; left: 340px; top: 255px; z-index: 2798;">
									<input type="checkbox" id="Checkbox203" name="" value="on"
										style="position: absolute; left: 603px; top: 255px; z-index: 2799;">
									<div id="wb_Text1240"
										style="position: absolute; left: 631px; top: 257px; width: 34px; height: 15px; z-index: 2800; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">DDP</span>
									</div>
									<div id="wb_Text1241"
										style="position: absolute; left: 544px; top: 257px; width: 34px; height: 15px; z-index: 2801; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">FAS</span>
									</div>
									<input type="checkbox" id="Checkbox204" name="" value="on"
										style="position: absolute; left: 516px; top: 255px; z-index: 2802;">
									<input type="checkbox" id="Checkbox205" name="" value="on"
										style="position: absolute; left: 256px; top: 277px; z-index: 2803;">
									<div id="wb_Text1242"
										style="position: absolute; left: 284px; top: 280px; width: 34px; height: 15px; z-index: 2804; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">CIP</span>
									</div>
									<div id="wb_Text1243"
										style="position: absolute; left: 194px; top: 280px; width: 34px; height: 15px; z-index: 2805; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">DAP</span>
									</div>
									<input type="checkbox" id="Checkbox206" name="" value="on"
										style="position: absolute; left: 166px; top: 277px; z-index: 2806;">
									<input type="checkbox" id="Checkbox207" name="" value="on"
										style="position: absolute; left: 340px; top: 277px; z-index: 2807;">
									<div id="wb_Text1244"
										style="position: absolute; left: 368px; top: 280px; width: 34px; height: 15px; z-index: 2808; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">CPT</span>
									</div>
									<input type="checkbox" id="Checkbox208" name="" value="on"
										style="position: absolute; left: 430px; top: 277px; z-index: 2809;">
									<div id="wb_Text1245"
										style="position: absolute; left: 458px; top: 280px; width: 34px; height: 15px; z-index: 2810; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">EXW</span>
									</div>
									<input type="checkbox" id="Checkbox209" name="" value="on"
										style="position: absolute; left: 516px; top: 277px; z-index: 2811;">
									<div id="wb_Text1246"
										style="position: absolute; left: 544px; top: 280px; width: 51px; height: 15px; z-index: 2812; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Express</span>
									</div>
									<div id="wb_Text1247"
										style="position: absolute; left: 7px; top: 337px; width: 114px; height: 15px; z-index: 2813; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Terms
											Of Payment</span>
									</div>
									<input type="checkbox" id="Checkbox210" name="" value="on"
										style="position: absolute; left: 166px; top: 335px; z-index: 2814;">
									<input type="checkbox" id="Checkbox211" name="" value="on"
										style="position: absolute; left: 256px; top: 335px; z-index: 2815;">
									<div id="wb_Text1248"
										style="position: absolute; left: 284px; top: 337px; width: 34px; height: 15px; z-index: 2816; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">LC</span>
									</div>
									<div id="wb_Text1249"
										style="position: absolute; left: 194px; top: 337px; width: 34px; height: 15px; z-index: 2817; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">T/T</span>
									</div>
									<input type="checkbox" id="Checkbox212" name="" value="on"
										style="position: absolute; left: 431px; top: 335px; z-index: 2818;">
									<div id="wb_Text1250"
										style="position: absolute; left: 459px; top: 337px; width: 47px; height: 15px; z-index: 2819; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Paypal</span>
									</div>
									<input type="checkbox" id="Checkbox213" name="" value="on"
										style="position: absolute; left: 517px; top: 335px; z-index: 2820;">
									<div id="wb_Text1251"
										style="position: absolute; left: 545px; top: 337px; width: 96px; height: 15px; z-index: 2821; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Western
											Union</span>
									</div>
									<input type="checkbox" id="Checkbox214" name="" value="on"
										style="position: absolute; left: 340px; top: 336px; z-index: 2822;">
									<div id="wb_Text1252"
										style="position: absolute; left: 368px; top: 338px; width: 34px; height: 15px; z-index: 2823; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">D/P</span>
									</div>
									<input type="checkbox" id="Checkbox215" name="" value="on"
										style="position: absolute; left: 654px; top: 335px; z-index: 2824;">
									<div id="wb_Text1253"
										style="position: absolute; left: 682px; top: 337px; width: 89px; height: 15px; z-index: 2825; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Money
											Gram</span>
									</div>
									<input type="checkbox" id="Checkbox216" name="" value="on"
										style="position: absolute; left: 256px; top: 359px; z-index: 2826;">
									<div id="wb_Text1254"
										style="position: absolute; left: 283px; top: 361px; width: 72px; height: 15px; z-index: 2827; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Credit
											Card</span>
									</div>
									<input type="checkbox" id="Checkbox217" name="" value="on"
										style="position: absolute; left: 166px; top: 360px; z-index: 2828;">
									<div id="wb_Text1255"
										style="position: absolute; left: 194px; top: 362px; width: 34px; height: 15px; z-index: 2829; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Cash</span>
									</div>
									<div id="wb_Text1256"
										style="position: absolute; left: 7px; top: 417px; width: 114px; height: 15px; z-index: 2830; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Payment
											Curency</span>
									</div>
									<input type="checkbox" id="Checkbox218" name="" value="on"
										style="position: absolute; left: 166px; top: 415px; z-index: 2831;">
									<div id="wb_Text1257"
										style="position: absolute; left: 194px; top: 417px; width: 34px; height: 15px; z-index: 2832; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">USD</span>
									</div>
									<input type="checkbox" id="Checkbox219" name="" value="on"
										style="position: absolute; left: 256px; top: 415px; z-index: 2833;">
									<div id="wb_Text1258"
										style="position: absolute; left: 284px; top: 417px; width: 34px; height: 15px; z-index: 2834; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">EUR</span>
									</div>
									<input type="checkbox" id="Checkbox220" name="" value="on"
										style="position: absolute; left: 340px; top: 416px; z-index: 2835;">
									<div id="wb_Text1259"
										style="position: absolute; left: 368px; top: 418px; width: 34px; height: 15px; z-index: 2836; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">JPY</span>
									</div>
									<input type="checkbox" id="Checkbox221" name="" value="on"
										style="position: absolute; left: 431px; top: 415px; z-index: 2837;">
									<div id="wb_Text1260"
										style="position: absolute; left: 459px; top: 417px; width: 47px; height: 15px; z-index: 2838; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">CAD</span>
									</div>
									<input type="checkbox" id="Checkbox222" name="" value="on"
										style="position: absolute; left: 518px; top: 415px; z-index: 2839;">
									<div id="wb_Text1261"
										style="position: absolute; left: 547px; top: 417px; width: 96px; height: 15px; z-index: 2840; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">AUD</span>
									</div>
									<input type="checkbox" id="Checkbox223" name="" value="on"
										style="position: absolute; left: 607px; top: 415px; z-index: 2841;">
									<div id="wb_Text1262"
										style="position: absolute; left: 635px; top: 417px; width: 89px; height: 15px; z-index: 2842; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">HKD</span>
									</div>
									<input type="checkbox" id="Checkbox224" name="" value="on"
										style="position: absolute; left: 166px; top: 440px; z-index: 2843;">
									<div id="wb_Text1263"
										style="position: absolute; left: 194px; top: 442px; width: 72px; height: 15px; z-index: 2844; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">GBP</span>
									</div>
									<input type="checkbox" id="Checkbox225" name="" value="on"
										style="position: absolute; left: 257px; top: 440px; z-index: 2845;">
									<div id="wb_Text1264"
										style="position: absolute; left: 285px; top: 442px; width: 34px; height: 15px; z-index: 2846; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">CNY</span>
									</div>
									<div id="wb_Text1265"
										style="position: absolute; left: 368px; top: 442px; width: 34px; height: 15px; z-index: 2847; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">CHF</span>
									</div>
									<input type="checkbox" id="Checkbox226" name="" value="on"
										style="position: absolute; left: 340px; top: 440px; z-index: 2848;">
									<input type="checkbox" id="Checkbox227" name="" value="on"
										style="position: absolute; left: 603px; top: 278px; z-index: 2849;">
									<div id="wb_Text1266"
										style="position: absolute; left: 631px; top: 281px; width: 75px; height: 15px; z-index: 2850; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Select
											All</span>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div id="wb_Shape524"
						style="position: absolute; left: 9px; top: 163px; width: 150px; height: 54px; z-index: 2858;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 1);ShowObject('Layer507', 0);return false;"><div
								id="Shape524">
								<div id="Shape524_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Personal
										<br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape525"
						style="position: absolute; left: 9px; top: 219px; width: 150px; height: 54px; z-index: 2859;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 1);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape525">
								<div id="Shape525_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Company<br></span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape526"
						style="position: absolute; left: 9px; top: 275px; width: 150px; height: 54px; z-index: 2860;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 1);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape526">
								<div id="Shape526_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Factory<br></span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape527"
						style="position: absolute; left: 9px; top: 331px; width: 150px; height: 54px; z-index: 2861;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 1);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape527">
								<div id="Shape527_text">
									<span
										style="color: #F05539; font-family: Arial; font-size: 11px;">Trade
										/ Export<br>
									</span><span
										style="color: #F05539; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape533"
						style="position: absolute; left: 9px; top: 386px; width: 150px; height: 54px; z-index: 2862;">
						<a href=""
							onclick="ShowObject('Layer170', 1);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape533">
								<div id="Shape533_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Edit<br></span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Certificates</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape561"
						style="position: absolute; left: 9px; top: 441px; width: 150px; height: 54px; z-index: 2863;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 1);return false;"><div
								id="Shape561">
								<div id="Shape561_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit<br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Sub
										Users</span>
								</div>
							</div></a>
					</div>
				</div>
			</div>
			<div id="Layer170"
				style="position: absolute; text-align: center; visibility: hidden; left: 0%; top: 6px; width: 99%; height: 788px; z-index: 3728;">
				<div id="Layer170_Container"
					style="width: 1277px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer171"
						style="position: absolute; text-align: center; left: 0%; top: 26px; width: 99%; height: 713px; z-index: 2921;">
						<div id="Layer171_Container"
							style="width: 1273px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
						</div>
					</div>
					<div id="RollOver37"
						style="position: absolute; left: 54px; top: 71px; overflow: hidden; width: 64px; height: 64px; z-index: 2922">
						<a href=""> <img class="hover" alt=""
							src="<?php echo asset_url();?>images/Account1.png">

						</a>
					</div>
					<div id="wb_Shape534"
						style="position: absolute; left: 9px; top: 163px; width: 150px; height: 54px; z-index: 2923;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 1);ShowObject('Layer507', 0);return false;"><div
								id="Shape534">
								<div id="Shape534_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Personal
										<br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Text694"
						style="position: absolute; left: 46px; top: 133px; width: 81px; height: 16px; text-align: center; z-index: 2924;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 13px;">My
							Account</span>
					</div>
					<div id="wb_Shape535"
						style="position: absolute; left: 9px; top: 219px; width: 150px; height: 54px; z-index: 2925;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 1);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape535">
								<div id="Shape535_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Company<br></span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape536"
						style="position: absolute; left: 9px; top: 275px; width: 150px; height: 54px; z-index: 2926;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 1);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape536">
								<div id="Shape536_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Factory<br></span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape537"
						style="position: absolute; left: 9px; top: 331px; width: 150px; height: 54px; z-index: 2927;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 1);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape537">
								<div id="Shape537_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Trade
										/ Export<br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="Layer172"
						style="position: absolute; text-align: center; left: 167px; top: 31px; width: 1088px; height: 697px; z-index: 2928;">
						<div id="Layer172_Container"
							style="width: 1088px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<div id="Layer173"
								style="position: absolute; text-align: center; left: 1px; top: 1px; width: 1085px; height: 45px; z-index: 2918;">
								<div id="Layer173_Container"
									style="width: 1085px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
									<button id="AdvancedButton68"
										onclick="ShowObjectWithEffect('Layer170', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');return false;"
										type="button"
										style="position: absolute; left: 1038px; top: 0px; width: 47px; height: 45px; z-index: 2864;"
										onclick="window.location=''" name="" value="">
										<div style="text-align: center">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 20px">X</span>
										</div>
									</button>
									<div id="wb_Shape538"
										style="position: absolute; left: 358px; top: 1px; width: 113px; height: 44px; z-index: 2865;">
										<a href=""
											onclick="ShowObject('wb_Form15', 0);ShowObject('wb_Form14', 1);return false;"><div
												id="Shape538">
												<div id="Shape538_text">
													<span
														style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">EDIT</span>
												</div>
											</div></a>
									</div>
									<div id="wb_Shape539"
										style="position: absolute; left: 475px; top: 1px; width: 113px; height: 44px; z-index: 2866;">
										<a href=""
											onclick="ShowObjectWithEffect('wb_Form15', 1, 'fade', 100);ShowObjectWithEffect('wb_Form14', 0, 'fade', 100);return false;"><div
												id="Shape539">
												<div id="Shape539_text">
													<span
														style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">RESET</span>
												</div>
											</div></a>
									</div>
									<div id="wb_Shape540"
										style="position: absolute; left: 593px; top: 1px; width: 113px; height: 44px; z-index: 2867;">
										<a href=""
											onclick="ShowObjectWithEffect('wb_Form15', 1, 'fade', 100);ShowObjectWithEffect('wb_Form14', 0, 'fade', 100);return false;"><div
												id="Shape540">
												<div id="Shape540_text">
													<span
														style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">SAVE</span>
												</div>
											</div></a>
									</div>
								</div>
							</div>
							<div id="wb_Form14"
								style="position: absolute; visibility: hidden; left: 102px; top: 58px; width: 921px; height: 611px; z-index: 2919;">
								<form name="Form1" method="post" action="" enctype="text/plain"
									id="Form14" onsubmit="return ValidateForm1(this)">
									<input type="text" id="Editbox92"
										style="position: absolute; left: 164px; top: 68px; width: 186px; height: 29px; line-height: 29px; z-index: 2868;"
										name="Registeration No." value="" maxlength="30"
										placeholder="HT1255-123123/66">
									<div id="wb_Text695"
										style="position: absolute; left: 10px; top: 320px; width: 178px; height: 16px; z-index: 2869; text-align: left;">
										<span
											style="color: #F05539; font-family: Georgia; font-size: 13px;">More
											Certificates / License</span>
									</div>
									<div id="wb_Text697"
										style="position: absolute; left: 27px; top: 75px; width: 114px; height: 30px; z-index: 2870; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Business/Industry
											Certificate/License</span>
									</div>
									<input type="date" id="Editbox93"
										style="position: absolute; left: 165px; top: 116px; width: 148px; height: 29px; line-height: 29px; z-index: 2871;"
										name="Registeration Start Date" value="" maxlength="12"
										placeholder="15/2/2016"> <input type="date" id="Editbox94"
										style="position: absolute; left: 165px; top: 165px; width: 147px; height: 29px; line-height: 29px; z-index: 2872;"
										name="Registeration Start Date" value="" maxlength="12"
										placeholder="15/2/2017">
									<div id="wb_Text698"
										style="position: absolute; left: 28px; top: 451px; width: 107px; height: 15px; z-index: 2873; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Reference
											No.</span>
									</div>
									<div id="wb_Text699"
										style="position: absolute; left: 29px; top: 125px; width: 68px; height: 15px; z-index: 2874; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Start
											Date</span>
									</div>
									<div id="wb_Image72"
										style="position: absolute; left: 341px; top: 169px; width: 27px; height: 27px; z-index: 2875;">
										<img src="<?php echo asset_url();?>images/calendar.png"
											id="Image72" alt="" title="Select Date">
									</div>
									<div id="wb_Image73"
										style="position: absolute; left: 340px; top: 121px; width: 27px; height: 27px; z-index: 2876;">
										<img src="<?php echo asset_url();?>images/calendar.png"
											id="Image73" alt="" title="Select Date">
									</div>
									<div id="wb_Image74"
										style="position: absolute; left: 638px; top: 227px; width: 16px; height: 16px; z-index: 2877;">
										<img src="<?php echo asset_url();?>images/Clock.png"
											id="Image74" alt="" title="Expiry Date Alarm">
									</div>
									<textarea name="TextArea1" id="TextArea10"
										style="position: absolute; left: 165px; top: 218px; width: 439px; height: 68px; z-index: 2878;"
										rows="4" cols="60" maxlength="150" readonly
										placeholder="Type the scope of your business/Industry mentioned in licnese">Fashion Manufackturing, specialized for manufacturing 
skirts, shirts, trousers, Shasion Manufackturing, specialized 
for manufacturing skirts, shirts, trousers, Shasion 
Manufackturing, specialized for manufacturing skirts, shirts,
 trousers.
</textarea>
									<div id="wb_Text700"
										style="position: absolute; left: 634px; top: 87px; width: 232px; height: 14px; z-index: 2879; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 11px;">Upload
											a clear copy of your certificates</span>
									</div>
									<div id="wb_Text701"
										style="position: absolute; left: 636px; top: 149px; width: 55px; height: 14px; z-index: 2880; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 11px;">Remove</span>
									</div>
									<div id="wb_Text702"
										style="position: absolute; left: 635px; top: 106px; width: 209px; height: 36px; z-index: 2881; text-align: left;">
										<span
											style="color: #666666; font-family: Arial; font-size: 9.3px;">jpg
											or png,bmp, pdf Resolution: 75, with Max. size 500 KB. <br>You
											can upload up to 4 images one time
										</span>
									</div>
									<div id="wb_Shape542"
										style="position: absolute; left: 477px; top: 68px; width: 108px; height: 132px; z-index: 2882;">
										<a href="#"
											onclick="alert('this acts as a button to upload 4 images together');return false;"><img
											src="<?php echo asset_url();?>images/img2041.png"
											id="Shape542" alt="" style="width: 108px; height: 132px;"></a>
									</div>
									<div id="wb_Text703"
										style="position: absolute; left: 27px; top: 361px; width: 114px; height: 15px; z-index: 2883; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">More
											Certificate</span>
									</div>
									<input type="text" id="Editbox95"
										style="position: absolute; left: 165px; top: 440px; width: 204px; height: 29px; line-height: 29px; z-index: 2884;"
										name="Ref. No." value="" maxlength="30" placeholder="TH41563">
									<select name="Combobox1" size="1" id="Combobox26"
										style="position: absolute; left: 165px; top: 358px; width: 222px; height: 25px; z-index: 2885;">
										<option>Management System Certifications</option>
										<option>Product Certificatations / Test Report</option>
										<option>License</option>
										<option>Intellectual Property Rights/Copy Right</option>
										<option>Honor</option>
									</select>
									<div id="wb_Text704"
										style="position: absolute; left: 29px; top: 405px; width: 107px; height: 15px; z-index: 2886; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Name</span>
									</div>
									<input type="text" id="Editbox96"
										style="position: absolute; left: 164px; top: 393px; width: 206px; height: 29px; line-height: 29px; z-index: 2887;"
										name="Cerificate Name" value="" maxlength="30"
										placeholder="ISO 2001">
									<div id="wb_Text705"
										style="position: absolute; left: 639px; top: 254px; width: 234px; height: 36px; z-index: 2888; text-align: left;">
										<span
											style="color: #808080; font-family: Arial; font-size: 9.3px;">Your
											will be requested to renew your business certificate
											documents ( dates, inforamtions and images) after expiry
											date..</span>
									</div>
									<div id="wb_Shape544"
										style="position: absolute; left: 481px; top: 363px; width: 124px; height: 93px; z-index: 2889;">
										<a href="#"
											onclick="alert('this acts as a button to upload 2 images together');return false;"><img
											src="<?php echo asset_url();?>images/img2042.png"
											id="Shape544" alt="" style="width: 124px; height: 93px;"></a>
									</div>
									<div id="wb_Text706"
										style="position: absolute; left: 634px; top: 373px; width: 232px; height: 14px; z-index: 2890; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 11px;">Upload
											a clear copy of your certificate</span>
									</div>
									<div id="wb_Text707"
										style="position: absolute; left: 635px; top: 392px; width: 209px; height: 36px; z-index: 2891; text-align: left;">
										<span
											style="color: #666666; font-family: Arial; font-size: 9.3px;">jpg
											or png,bmp, pdf Resolution: 75, with Max. size 500 KB. <br>
										</span>
									</div>
									<div id="wb_Text1183"
										style="position: absolute; left: 636px; top: 435px; width: 55px; height: 14px; z-index: 2892; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Georgia; font-size: 11px;">Remove</span>
									</div>
									<div id="wb_Text1185"
										style="position: absolute; left: 8px; top: 41px; width: 143px; height: 16px; z-index: 2893; text-align: left;">
										<span
											style="color: #F05539; font-family: Georgia; font-size: 13px;">Certificates
											&amp; License</span>
									</div>
									<div id="wb_Text1186"
										style="position: absolute; left: 29px; top: 175px; width: 68px; height: 15px; z-index: 2894; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">End
											Date</span>
									</div>
									<div id="wb_Image75"
										style="position: absolute; left: 11px; top: 512px; width: 32px; height: 32px; z-index: 2895;">
										<img src="<?php echo asset_url();?>images/add.png"
											id="Image75" alt="">
									</div>
									<div id="wb_Text1187"
										style="position: absolute; left: 53px; top: 520px; width: 178px; height: 16px; z-index: 2896; text-align: left;">
										<span
											style="color: #F05539; font-family: Georgia; font-size: 13px;">Add
											More </span>
									</div>
								</form>
							</div>
							<div id="wb_Form15"
								style="position: absolute; left: 102px; top: 58px; width: 921px; height: 611px; z-index: 2920;">
								<form name="Form1" method="post" action="" enctype="text/plain"
									id="Form15">
									<div id="wb_Text696"
										style="position: absolute; left: 258px; top: 393px; width: 178px; height: 16px; z-index: 2897; text-align: left;">
										<span
											style="color: #F05539; font-family: Georgia; font-size: 13px;">More
											Certificates </span>
									</div>
									<div id="wb_Text1188"
										style="position: absolute; left: 258px; top: 75px; width: 114px; height: 30px; z-index: 2898; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Business/Industry
											Certificate/License</span>
									</div>
									<div id="wb_Text1189"
										style="position: absolute; left: 260px; top: 488px; width: 107px; height: 15px; z-index: 2899; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Reference
											No.</span>
									</div>
									<div id="wb_Text1191"
										style="position: absolute; left: 258px; top: 125px; width: 68px; height: 15px; z-index: 2900; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Start
											Date</span>
									</div>
									<div id="wb_Image78"
										style="position: absolute; left: 392px; top: 195px; width: 16px; height: 16px; z-index: 2901;">
										<img src="<?php echo asset_url();?>images/Clock.png"
											id="Image78" alt="" title="Expiry Date Alarm">
									</div>
									<div id="wb_Text1195"
										style="position: absolute; left: 259px; top: 428px; width: 114px; height: 15px; z-index: 2902; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Certificate
											No.</span>
									</div>
									<div id="wb_Text1196"
										style="position: absolute; left: 261px; top: 458px; width: 107px; height: 15px; z-index: 2903; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Name</span>
									</div>
									<div id="wb_Text1197"
										style="position: absolute; left: 423px; top: 183px; width: 234px; height: 48px; z-index: 2904; text-align: left;">
										<span
											style="color: #FF0000; font-family: Arial; font-size: 9.3px;">ALARM
											HAS SET<br>
										</span><span
											style="color: #1E90FF; font-family: Arial; font-size: 9.3px;">Your
											will be requested to renew your business certificate
											documents ( dates, inforamtions and images) after expiry
											date..</span>
									</div>
									<div id="wb_Text1201"
										style="position: absolute; left: 258px; top: 41px; width: 143px; height: 16px; z-index: 2905; text-align: left;">
										<span
											style="color: #F05539; font-family: Georgia; font-size: 13px;">Certificates
											&amp; License</span>
									</div>
									<div id="wb_Text1202"
										style="position: absolute; left: 259px; top: 155px; width: 68px; height: 15px; z-index: 2906; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">End
											Date</span>
									</div>
									<div id="wb_Text1192"
										style="position: absolute; left: 384px; top: 125px; width: 78px; height: 14px; z-index: 2907; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Arial; font-size: 11px;">15/2/2016</span>
									</div>
									<div id="wb_Text1193"
										style="position: absolute; left: 385px; top: 155px; width: 78px; height: 14px; z-index: 2908; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Arial; font-size: 11px;">15/2/2017</span>
									</div>
									<div id="wb_Text1198"
										style="position: absolute; left: 388px; top: 253px; width: 411px; height: 92px; z-index: 2909; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Arial; font-size: 12px;">Fashion
											Manufackturing, specialized for manufacturing skirts, shirts,
											trousers, Shasion Manufackturing, specialized for
											manufacturing skirts, shirts, trousers, Shasion
											Manufackturing, specialized for manufacturing skirts, shirts,
											trousers, <br>
										<br>
										<br>
										</span>
									</div>
									<div id="wb_Shape545"
										style="position: absolute; left: 21px; top: 389px; width: 189px; height: 140px; z-index: 2910;">
										<a href="#"
											onclick="alert('this acts as a button to upload 4 images together');return false;"><img
											src="<?php echo asset_url();?>images/img2043.png"
											id="Shape545" alt="" style="width: 189px; height: 140px;"></a>
									</div>
									<div id="wb_Text1194"
										style="position: absolute; left: 384px; top: 77px; width: 104px; height: 14px; z-index: 2911; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Arial; font-size: 11px;">HL21361233/66</span>
									</div>
									<div id="wb_Shape541"
										style="position: absolute; left: 23px; top: 39px; width: 179px; height: 234px; z-index: 2912;">
										<a href="#"
											onclick="alert('this acts as a button to upload 4 images together');return false;"><img
											src="<?php echo asset_url();?>images/img2044.png"
											id="Shape541" alt="" style="width: 179px; height: 234px;"></a>
									</div>
									<div id="wb_Text1199"
										style="position: absolute; left: 258px; top: 253px; width: 114px; height: 15px; z-index: 2913; text-align: left;">
										<span
											style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Scope
											of Business</span>
									</div>
									<div id="wb_Text1200"
										style="position: absolute; left: 389px; top: 428px; width: 104px; height: 14px; z-index: 2914; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Arial; font-size: 11px;">HL21361233/66</span>
									</div>
									<div id="wb_Text1204"
										style="position: absolute; left: 389px; top: 488px; width: 104px; height: 14px; z-index: 2915; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Arial; font-size: 11px;">TH-20153</span>
									</div>
									<div id="wb_Text1203"
										style="position: absolute; left: 389px; top: 458px; width: 104px; height: 14px; z-index: 2916; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Arial; font-size: 11px;">ISO
											2001, Certificate</span>
									</div>
									<div id="wb_Text1190"
										style="position: absolute; left: 389px; top: 395px; width: 180px; height: 14px; z-index: 2917; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Arial; font-size: 11px;">Management
											System Cerificate</span>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div id="wb_Shape543"
						style="position: absolute; left: 9px; top: 386px; width: 150px; height: 54px; z-index: 2929;">
						<a href=""
							onclick="ShowObject('Layer170', 1);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape543">
								<div id="Shape543_text">
									<span
										style="color: #FF6347; font-family: Arial; font-size: 11px;">Edit<br></span><span
										style="color: #FF6347; font-family: Arial; font-size: 13px;">Certificates</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape560"
						style="position: absolute; left: 9px; top: 441px; width: 150px; height: 54px; z-index: 2930;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 1);return false;"><div
								id="Shape560">
								<div id="Shape560_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">View
										| Edit<br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Sub
										Users</span>
								</div>
							</div></a>
					</div>
				</div>
			</div>
			<div id="Layer174" class="mystation_Layer174" style="overflow:scroll;">
				<div id="Layer174_Container" class="mystation_layer174_container">
				</div>
				<br><br>
			</div>
			<div id="Layer189"
				style="position: fixed; text-align: center; visibility: hidden; left: 0; top: 0; right: 0; bottom: 0; z-index: 3730;">
				<div id="Layer189_Container"
					style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer418"
						style="position: fixed; text-align: center; left: 0; top: 0; right: 0; bottom: 0; z-index: 3274;">
						<div id="Layer418_Container"
							style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
						</div>
					</div>
					<button id="AdvancedButton70"
						onclick="ShowObjectWithEffect('Layer189', 0, 'dropup', 500, 'easeInBounce');return false;"
						type="button"
						style="position: absolute; left: 1212px; top: 26px; width: 40px; height: 39px; z-index: 3275;"
						onclick="window.location=''" name="" value="">
						<div style="text-align: center">
							<span style="color: #FFFFFF; font-family: Arial; font-size: 20px">X</span>
						</div>
					</button>
					<div id="Layer419"
						style="position: absolute; text-align: left; left: 25px; top: 209px; width: 311px; height: 26px; z-index: 3276;">
						<div id="wb_Text1295"
							style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; z-index: 3119; text-align: left;">
							<span
								style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Display
								Priority</span>
						</div>
					</div>
					<div id="Layer420"
						style="position: absolute; text-align: left; left: 25px; top: 290px; width: 309px; height: 26px; z-index: 3277;">
						<div id="wb_Text1296"
							style="position: absolute; left: 19px; top: 6px; width: 230px; height: 16px; z-index: 3120; text-align: left;">
							<span
								style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Desksite/Website
								Slide Background</span>
						</div>
					</div>
					<div id="wb_Text1297"
						style="position: absolute; left: 342px; top: 22px; width: 523px; height: 24px; z-index: 3278; text-align: left;">
						<span
							style="color: #FFFFFF; font-family: Georgia; font-size: 20px;"><strong>Trade
								Station Membership Plans </strong></span><span
							style="color: #FF8C00; font-family: Georgia; font-size: 20px;"><strong>(For
								One Year).</strong></span>
					</div>
					<div id="wb_Text1298"
						style="position: absolute; left: 347px; top: 50px; width: 398px; height: 15px; z-index: 3279; text-align: left;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 12px;">All
							members of our paid plans are ( BLACK HORSE MEMBERS).</span>
					</div>
					<div id="Layer421"
						style="position: absolute; text-align: left; left: 25px; top: 236px; width: 309px; height: 26px; z-index: 3280;">
						<div id="wb_Text1299"
							style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; z-index: 3121; text-align: left;">
							<span
								style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Ranking
								Percentage</span>
						</div>
					</div>
					<div id="Layer422"
						style="position: absolute; text-align: left; left: 25px; top: 182px; width: 311px; height: 26px; z-index: 3281;">
						<div id="wb_Text1300"
							style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; z-index: 3122; text-align: left;">
							<span
								style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Member
								Logo</span>
						</div>
					</div>
					<div id="Layer423"
						style="position: absolute; text-align: left; left: 934px; top: 112px; width: 180px; height: 588px; z-index: 3282;">
						<div id="Layer424"
							style="position: absolute; text-align: left; left: 0px; top: 96px; width: 180px; height: 26px; z-index: 3138;">
							<div id="wb_Text1301"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3123;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">4<sup>th</sup></span>
							</div>
						</div>
						<div id="Layer425"
							style="position: absolute; text-align: left; left: 0px; top: 0px; width: 180px; height: 12px; z-index: 3139;">
						</div>
						<div id="wb_Text1302"
							style="position: absolute; left: 69px; top: 25px; width: 68px; height: 24px; z-index: 3140; text-align: left;">
							<span
								style="color: #696969; font-family: Georgia; font-size: 20px;"><strong>Free</strong></span>
						</div>
						<div id="Layer426"
							style="position: absolute; text-align: left; left: 0px; top: 123px; width: 180px; height: 26px; z-index: 3141;">
							<div id="wb_Text1303"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3124;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">0</span>
							</div>
						</div>
						<div id="Layer427"
							style="position: absolute; text-align: left; left: 0px; top: 177px; width: 180px; height: 26px; z-index: 3142;">
						</div>
						<div id="Layer428"
							style="position: absolute; text-align: left; left: 0px; top: 150px; width: 180px; height: 26px; z-index: 3143;">
							<div id="wb_Text1304"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3125;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Yes</span>
							</div>
						</div>
						<div id="Layer429"
							style="position: absolute; text-align: left; left: 0px; top: 69px; width: 180px; height: 26px; z-index: 3144;">
							<div id="wb_Text1305"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3126;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">--</span>
							</div>
						</div>
						<div id="wb_Text1306"
							style="position: absolute; left: 11px; top: 184px; width: 163px; height: 16px; text-align: center; z-index: 3145;">
							<span
								style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Fixed
								Background</span>
						</div>
						<div id="Layer430"
							style="position: absolute; text-align: left; left: 0px; top: 204px; width: 180px; height: 29px; z-index: 3146;">
							<div id="wb_Text1307"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3127;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">50
									MB</span>
							</div>
						</div>
						<div id="Layer431"
							style="position: absolute; text-align: left; left: 0px; top: 258px; width: 180px; height: 26px; z-index: 3147;">
							<div id="wb_Text1308"
								style="position: absolute; left: 19px; top: 5px; width: 134px; height: 16px; text-align: center; z-index: 3128;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">No</span>
							</div>
						</div>
						<div id="Layer432"
							style="position: absolute; text-align: left; left: 0px; top: 285px; width: 180px; height: 26px; z-index: 3148;">
							<div id="wb_Text1309"
								style="position: absolute; left: 18px; top: 7px; width: 134px; height: 16px; text-align: center; z-index: 3129;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">No</span>
							</div>
						</div>
						<div id="Layer433"
							style="position: absolute; text-align: left; left: 0px; top: 230px; width: 180px; height: 26px; z-index: 3149;">
							<div id="wb_Text1310"
								style="position: absolute; left: 18px; top: 7px; width: 134px; height: 16px; text-align: center; z-index: 3130;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">No</span>
							</div>
						</div>
						<div id="Layer434"
							style="position: absolute; text-align: left; left: 0px; top: 365px; width: 180px; height: 26px; z-index: 3150;">
							<div id="wb_Text1311"
								style="position: absolute; left: 18px; top: 7px; width: 134px; height: 16px; text-align: center; z-index: 3131;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">--</span>
							</div>
						</div>
						<div id="Layer435"
							style="position: absolute; text-align: left; left: 0px; top: 423px; width: 180px; height: 26px; z-index: 3151;">
							<div id="wb_Text1312"
								style="position: absolute; left: 18px; top: 4px; width: 134px; height: 16px; text-align: center; z-index: 3132;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">--</span>
							</div>
						</div>
						<div id="Layer436"
							style="position: absolute; text-align: left; left: 0px; top: 393px; width: 180px; height: 26px; z-index: 3152;">
							<div id="wb_Text1313"
								style="position: absolute; left: 19px; top: 5px; width: 134px; height: 16px; text-align: center; z-index: 3133;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">--</span>
							</div>
						</div>
						<div id="Layer437"
							style="position: absolute; text-align: left; left: 0px; top: 339px; width: 180px; height: 26px; z-index: 3153;">
							<div id="wb_Text1314"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3134;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">10
									MB</span>
							</div>
						</div>
						<div id="Layer438"
							style="position: absolute; text-align: left; left: 0px; top: 312px; width: 180px; height: 26px; z-index: 3154;">
							<div id="wb_Text1315"
								style="position: absolute; left: 18px; top: 7px; width: 134px; height: 16px; text-align: center; z-index: 3135;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">--</span>
							</div>
						</div>
						<div id="Layer439"
							style="position: absolute; text-align: left; left: 0px; top: 453px; width: 180px; height: 26px; z-index: 3155;">
							<div id="wb_Text1316"
								style="position: absolute; left: 19px; top: 5px; width: 134px; height: 16px; text-align: center; z-index: 3136;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">--</span>
							</div>
						</div>
						<div id="Layer440"
							style="position: absolute; text-align: left; left: 0px; top: 481px; width: 180px; height: 26px; z-index: 3156;">
							<div id="wb_Text1317"
								style="position: absolute; left: 18px; top: 7px; width: 134px; height: 16px; text-align: center; z-index: 3137;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">--</span>
							</div>
						</div>
						<div id="wb_Shape531"
							style="position: absolute; left: 0px; top: 515px; width: 180px; height: 73px; z-index: 3157;">
							<a href="#" onclick="ShowObject('Layer189', 1);return false;"><img
								src="<?php echo asset_url();?>images/img2050.gif" id="Shape531"
								alt="" style="width: 180px; height: 73px;"></a>
						</div>
					</div>
					<div id="wb_Line12"
						style="position: absolute; left: 413px; top: 80px; width: 403px; height: 0px; z-index: 3283;">
						<img src="<?php echo asset_url();?>images/img2051.png" id="Line12"
							alt="">
					</div>
					<div id="wb_Line14"
						style="position: absolute; left: 610px; top: 71px; width: 0px; height: 42px; z-index: 3284;">
						<img src="<?php echo asset_url();?>images/img2052.png" id="Line14"
							alt="">
					</div>
					<div id="wb_Line15"
						style="position: absolute; left: 816px; top: 85px; width: 0px; height: 24px; z-index: 3285;">
						<img src="<?php echo asset_url();?>images/img2053.png" id="Line15"
							alt="">
					</div>
					<div id="Layer441"
						style="position: absolute; text-align: left; left: 734px; top: 112px; width: 180px; height: 588px; z-index: 3286;">
						<div id="Layer442"
							style="position: absolute; text-align: left; left: 0px; top: 96px; width: 180px; height: 26px; z-index: 3173;">
							<div id="wb_Text1318"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3158;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">3<sup>rd</sup></span>
							</div>
						</div>
						<div id="Layer443"
							style="position: absolute; text-align: left; left: 0px; top: 0px; width: 180px; height: 12px; z-index: 3174;">
						</div>
						<div id="wb_Text1319"
							style="position: absolute; left: 66px; top: 28px; width: 69px; height: 24px; z-index: 3175; text-align: left;">
							<span
								style="color: #1E90FF; font-family: Georgia; font-size: 20px;"><strong>Basic</strong></span>
						</div>
						<div id="Layer444"
							style="position: absolute; text-align: left; left: 0px; top: 123px; width: 180px; height: 26px; z-index: 3176;">
							<div id="wb_Text1320"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3159;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">%
									59</span>
							</div>
						</div>
						<div id="Layer445"
							style="position: absolute; text-align: left; left: 0px; top: 177px; width: 180px; height: 26px; z-index: 3177;">
						</div>
						<div id="Layer446"
							style="position: absolute; text-align: left; left: 0px; top: 150px; width: 180px; height: 26px; z-index: 3178;">
							<div id="wb_Text1321"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3160;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Yes</span>
							</div>
						</div>
						<div id="Layer447"
							style="position: absolute; text-align: left; left: 0px; top: 69px; width: 180px; height: 29px; z-index: 3179;">
							<div id="wb_Text1322"
								style="position: absolute; left: 26px; top: 6px; width: 130px; height: 18px; text-align: center; z-index: 3161;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Black
									Horse member<br>
								</span>
							</div>
						</div>
						<div id="wb_Image70"
							style="position: absolute; left: 30px; top: 21px; width: 32px; height: 32px; z-index: 3180;">
							<img src="<?php echo asset_url();?>images/member-logo.png"
								id="Image70" alt="Black Horse Member" title="Black Horse Member">
						</div>
						<div id="Layer448"
							style="position: absolute; text-align: left; left: 0px; top: 285px; width: 180px; height: 26px; z-index: 3181;">
							<div id="wb_Text1323"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3162;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">No</span>
							</div>
						</div>
						<div id="Layer449"
							style="position: absolute; text-align: left; left: 0px; top: 258px; width: 180px; height: 26px; z-index: 3182;">
							<div id="wb_Text1324"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3163;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Yes</span>
							</div>
						</div>
						<div id="Layer450"
							style="position: absolute; text-align: left; left: 0px; top: 231px; width: 180px; height: 26px; z-index: 3183;">
							<div id="wb_Text1325"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3164;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Yes</span>
							</div>
						</div>
						<div id="Layer451"
							style="position: absolute; text-align: left; left: 0px; top: 204px; width: 180px; height: 26px; z-index: 3184;">
							<div id="wb_Text1326"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3165;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">2.5
									GB</span>
							</div>
						</div>
						<div id="Layer452"
							style="position: absolute; text-align: left; left: 0px; top: 423px; width: 180px; height: 26px; z-index: 3185;">
							<div id="wb_Text1327"
								style="position: absolute; left: 19px; top: 2px; width: 134px; height: 16px; text-align: center; z-index: 3166;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Up
									to 10</span>
							</div>
						</div>
						<div id="Layer453"
							style="position: absolute; text-align: left; left: 0px; top: 393px; width: 180px; height: 26px; z-index: 3186;">
							<div id="wb_Text1328"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3167;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">1
									Catalogues</span>
							</div>
						</div>
						<div id="Layer454"
							style="position: absolute; text-align: left; left: 0px; top: 366px; width: 180px; height: 26px; z-index: 3187;">
							<div id="wb_Text1329"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3168;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">1
									Videos</span>
							</div>
						</div>
						<div id="Layer455"
							style="position: absolute; text-align: left; left: 0px; top: 339px; width: 180px; height: 26px; z-index: 3188;">
							<div id="wb_Text1330"
								style="position: absolute; left: 33px; top: 6px; width: 134px; height: 18px; z-index: 3169; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">100
									MB + 100 MB<br>
								</span>
							</div>
						</div>
						<div id="wb_Text1331"
							style="position: absolute; left: 22px; top: 183px; width: 134px; height: 16px; text-align: center; z-index: 3189;">
							<span
								style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Fixed
								Background</span>
						</div>
						<div id="Layer456"
							style="position: absolute; text-align: left; left: 0px; top: 312px; width: 180px; height: 26px; z-index: 3190;">
							<div id="wb_Text1332"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3170;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">--</span>
							</div>
						</div>
						<div id="Layer457"
							style="position: absolute; text-align: left; left: 0px; top: 453px; width: 180px; height: 26px; z-index: 3191;">
							<div id="wb_Text1333"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 18px; text-align: center; z-index: 3171;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Up
									to 5 MB<br>
								</span>
							</div>
						</div>
						<div id="Layer458"
							style="position: absolute; text-align: left; left: 0px; top: 481px; width: 180px; height: 26px; z-index: 3192;">
							<div id="wb_Text1334"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3172;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Up
									to 5</span>
							</div>
						</div>
						<div id="wb_Shape532"
							style="position: absolute; left: 0px; top: 515px; width: 180px; height: 73px; z-index: 3193;">
							<a href="./access-denid-layer.html"
								onclick="ShowObject('Layer189', 1);return false;"><img
								class="hover"
								src="<?php echo asset_url();?>images/img2054_hover.gif" alt=""
								style="border-width: 0; width: 180px; height: 73px;"><span><img
									src="<?php echo asset_url();?>images/img2054.gif" id="Shape532"
									alt="" style="width: 180px; height: 73px;"></span></a>
						</div>
					</div>
					<div id="wb_Line16"
						style="position: absolute; left: 413px; top: 85px; width: 0px; height: 24px; z-index: 3287;">
						<img src="<?php echo asset_url();?>images/img2055.png" id="Line16"
							alt="">
					</div>
					<div id="Layer459"
						style="position: absolute; text-align: left; left: 534px; top: 112px; width: 180px; height: 590px; z-index: 3288;">
						<div id="Layer460"
							style="position: absolute; text-align: left; left: 0px; top: 96px; width: 180px; height: 26px; z-index: 3210;">
							<div id="wb_Text1335"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3194;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">2<sup>nd</sup></span>
							</div>
						</div>
						<div id="Layer461"
							style="position: absolute; text-align: left; left: 0px; top: 0px; width: 180px; height: 12px; z-index: 3211;">
						</div>
						<div id="wb_Text1336"
							style="position: absolute; left: 69px; top: 27px; width: 53px; height: 24px; z-index: 3212; text-align: left;">
							<span
								style="color: #FF8C00; font-family: Georgia; font-size: 20px;"><strong>VIP</strong></span>
						</div>
						<div id="Layer462"
							style="position: absolute; text-align: left; left: 0px; top: 123px; width: 180px; height: 26px; z-index: 3213;">
							<div id="wb_Text1337"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3195;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">%
									61 </span>
							</div>
						</div>
						<div id="Layer463"
							style="position: absolute; text-align: left; left: 0px; top: 177px; width: 180px; height: 26px; z-index: 3214;">
							<div id="wb_Text1338"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3196;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Yes</span>
							</div>
						</div>
						<div id="Layer464"
							style="position: absolute; text-align: left; left: 0px; top: 150px; width: 180px; height: 26px; z-index: 3215;">
							<div id="wb_Text1339"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3197;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Yes</span>
							</div>
						</div>
						<div id="Layer465"
							style="position: absolute; text-align: left; left: 0px; top: 69px; width: 180px; height: 26px; z-index: 3216;">
							<div id="wb_Text1340"
								style="position: absolute; left: 28px; top: 6px; width: 128px; height: 16px; text-align: center; z-index: 3198;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Black
									Horse Member</span>
							</div>
						</div>
						<div id="wb_Image71"
							style="position: absolute; left: 29px; top: 20px; width: 32px; height: 32px; z-index: 3217;">
							<img src="<?php echo asset_url();?>images/member-logo.png"
								id="Image71" alt="Black Horse Member" title="Black Horse Member">
						</div>
						<div id="Layer466"
							style="position: absolute; text-align: left; left: 0px; top: 204px; width: 180px; height: 26px; z-index: 3218;">
							<div id="wb_Text1341"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3199;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">4
									GB</span>
							</div>
						</div>
						<div id="Layer467"
							style="position: absolute; text-align: left; left: 0px; top: 231px; width: 180px; height: 26px; z-index: 3219;">
							<div id="wb_Text1342"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3200;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Yes</span>
							</div>
						</div>
						<div id="Layer468"
							style="position: absolute; text-align: left; left: 0px; top: 258px; width: 180px; height: 26px; z-index: 3220;">
							<div id="wb_Text1343"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3201;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Yes</span>
							</div>
						</div>
						<div id="Layer469"
							style="position: absolute; text-align: left; left: 0px; top: 285px; width: 180px; height: 26px; z-index: 3221;">
							<div id="wb_Text1344"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3202;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">No</span>
							</div>
						</div>
						<div id="Layer470"
							style="position: absolute; text-align: left; left: 0px; top: 423px; width: 180px; height: 26px; z-index: 3222;">
							<div id="wb_Text1345"
								style="position: absolute; left: 19px; top: 2px; width: 134px; height: 16px; text-align: center; z-index: 3203;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Up
									to 20</span>
							</div>
						</div>
						<div id="Layer471"
							style="position: absolute; text-align: left; left: 0px; top: 393px; width: 180px; height: 26px; z-index: 3223;">
							<div id="wb_Text1346"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3204;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">2
									Catalogues</span>
							</div>
						</div>
						<div id="Layer472"
							style="position: absolute; text-align: left; left: 0px; top: 366px; width: 180px; height: 26px; z-index: 3224;">
							<div id="wb_Text1347"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3205;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">5
									Videos</span>
							</div>
						</div>
						<div id="Layer473"
							style="position: absolute; text-align: left; left: 0px; top: 339px; width: 180px; height: 26px; z-index: 3225;">
							<div id="wb_Text1348"
								style="position: absolute; left: 35px; top: 6px; width: 134px; height: 18px; z-index: 3206; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">150
									MB + 150 MB<br>
								</span>
							</div>
						</div>
						<div id="Layer474"
							style="position: absolute; text-align: left; left: 0px; top: 312px; width: 180px; height: 26px; z-index: 3226;">
							<div id="wb_Text1349"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3207;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">--</span>
							</div>
						</div>
						<div id="Layer475"
							style="position: absolute; text-align: left; left: 0px; top: 453px; width: 180px; height: 26px; z-index: 3227;">
							<div id="wb_Text1350"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 18px; text-align: center; z-index: 3208;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Up
									to 15 MB<br>
								</span>
							</div>
						</div>
						<div id="Layer476"
							style="position: absolute; text-align: left; left: 0px; top: 478px; width: 180px; height: 26px; z-index: 3228;">
							<div id="wb_Text1351"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3209;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Up
									to 5</span>
							</div>
						</div>
						<div id="wb_Shape546"
							style="position: absolute; left: 0px; top: 517px; width: 180px; height: 73px; z-index: 3229;">
							<a href="./access-denid-layer.html"
								onclick="ShowObject('Layer189', 1);return false;"><img
								class="hover"
								src="<?php echo asset_url();?>images/img2056_hover.gif" alt=""
								style="border-width: 0; width: 180px; height: 73px;"><span><img
									src="<?php echo asset_url();?>images/img2056.gif" id="Shape546"
									alt="" style="width: 180px; height: 73px;"></span></a>
						</div>
					</div>
					<div id="Layer477"
						style="position: absolute; text-align: left; left: 25px; top: 398px; width: 309px; height: 26px; z-index: 3289;">
					</div>
					<div id="Layer478"
						style="position: absolute; text-align: left; left: 25px; top: 371px; width: 311px; height: 26px; z-index: 3290;">
					</div>
					<div id="Layer479"
						style="position: absolute; text-align: left; left: 25px; top: 317px; width: 311px; height: 26px; z-index: 3291;">
					</div>
					<div id="Layer480"
						style="position: absolute; text-align: left; left: 25px; top: 344px; width: 309px; height: 26px; z-index: 3292;">
					</div>
					<div id="Layer481"
						style="position: absolute; text-align: left; left: 25px; top: 263px; width: 311px; height: 26px; z-index: 3293;">
						<div id="wb_Text1356"
							style="position: absolute; left: 18px; top: 6px; width: 254px; height: 16px; z-index: 3230; text-align: left;">
							<span
								style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Customized
								Desksite &amp; Website</span>
						</div>
					</div>
					<div id="Layer482"
						style="position: absolute; text-align: left; left: 25px; top: 506px; width: 311px; height: 26px; z-index: 3294;">
						<div id="wb_Text1357"
							style="position: absolute; left: 20px; top: 6px; width: 238px; height: 16px; z-index: 3231; text-align: left;">
							<span
								style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Virtual
								Catalogues ( Interactive)</span>
						</div>
					</div>
					<div id="Layer483"
						style="position: absolute; text-align: left; left: 25px; top: 452px; width: 311px; height: 26px; z-index: 3295;">
						<div id="wb_Text1358"
							style="position: absolute; left: 19px; top: 6px; width: 266px; height: 16px; z-index: 3232; text-align: left;">
							<span
								style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Offers
								+ Inquiries Storage Box</span>
						</div>
					</div>
					<div id="Layer484"
						style="position: absolute; text-align: left; left: 25px; top: 479px; width: 309px; height: 26px; z-index: 3296;">
						<div id="wb_Text1359"
							style="position: absolute; left: 19px; top: 6px; width: 239px; height: 16px; z-index: 3233; text-align: left;">
							<span
								style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Videos
								Posting</span>
						</div>
					</div>
					<div id="Layer485"
						style="position: absolute; text-align: left; left: 25px; top: 563px; width: 311px; height: 26px; z-index: 3297;">
						<div id="wb_Text1360"
							style="position: absolute; left: 20px; top: 6px; width: 238px; height: 16px; z-index: 3234; text-align: left;">
							<span
								style="color: #2D2D2D; font-family: Arial; font-size: 13px;">My
								Files</span>
						</div>
					</div>
					<div id="Layer486"
						style="position: absolute; text-align: left; left: 25px; top: 590px; width: 309px; height: 26px; z-index: 3298;">
						<div id="wb_Text1361"
							style="position: absolute; left: 19px; top: 6px; width: 230px; height: 16px; z-index: 3235; text-align: left;">
							<span
								style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Sub
								Users</span>
						</div>
					</div>
					<div id="Layer487"
						style="position: absolute; text-align: left; left: 334px; top: 112px; width: 180px; height: 590px; z-index: 3299;">
						<div id="Layer488"
							style="position: absolute; text-align: left; left: 0px; top: 96px; width: 180px; height: 26px; z-index: 3248;">
							<div id="wb_Text1362"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3236;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">1<sup>st</sup></span>
							</div>
						</div>
						<div id="Layer489"
							style="position: absolute; text-align: left; left: 0px; top: 0px; width: 180px; height: 12px; z-index: 3249;">
						</div>
						<div id="wb_Text1363"
							style="position: absolute; left: 66px; top: 27px; width: 64px; height: 24px; z-index: 3250; text-align: left;">
							<span
								style="color: #FF6347; font-family: Georgia; font-size: 20px;"><strong>Elite</strong></span>
						</div>
						<div id="Layer490"
							style="position: absolute; text-align: left; left: 0px; top: 123px; width: 180px; height: 26px; z-index: 3251;">
							<div id="wb_Text1364"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3237;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">%
									63</span>
							</div>
						</div>
						<div id="Layer491"
							style="position: absolute; text-align: left; left: 0px; top: 177px; width: 180px; height: 26px; z-index: 3252;">
							<div id="wb_Text1365"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3238;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Yes</span>
							</div>
						</div>
						<div id="Layer492"
							style="position: absolute; text-align: left; left: 0px; top: 150px; width: 180px; height: 26px; z-index: 3253;">
							<div id="wb_Text1366"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3239;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Yes</span>
							</div>
						</div>
						<div id="Layer493"
							style="position: absolute; text-align: left; left: 0px; top: 69px; width: 180px; height: 26px; z-index: 3254;">
							<div id="wb_Text1367"
								style="position: absolute; left: 30px; top: 6px; width: 126px; height: 18px; text-align: center; z-index: 3240;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Black
									Horse Member<br>
								</span>
							</div>
						</div>
						<div id="wb_Image76"
							style="position: absolute; left: 29px; top: 20px; width: 32px; height: 32px; z-index: 3255;">
							<img src="<?php echo asset_url();?>images/member-logo.png"
								id="Image76" alt="Black Horse Member" title="Black Horse Member">
						</div>
						<div id="Layer494"
							style="position: absolute; text-align: left; left: 0px; top: 285px; width: 180px; height: 26px; z-index: 3256;">
							<div id="wb_Text1368"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3241;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Yes</span>
							</div>
						</div>
						<div id="Layer495"
							style="position: absolute; text-align: left; left: 0px; top: 258px; width: 180px; height: 26px; z-index: 3257;">
							<div id="wb_Text1369"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3242;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Yes</span>
							</div>
						</div>
						<div id="Layer496"
							style="position: absolute; text-align: left; left: 0px; top: 231px; width: 180px; height: 26px; z-index: 3258;">
							<div id="wb_Text1370"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3243;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Yes</span>
							</div>
						</div>
						<div id="Layer497"
							style="position: absolute; text-align: left; left: 0px; top: 204px; width: 180px; height: 26px; z-index: 3259;">
							<div id="wb_Text1371"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3244;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">6
									GB</span>
							</div>
						</div>
						<div id="Layer498"
							style="position: absolute; text-align: left; left: 0px; top: 339px; width: 180px; height: 26px; z-index: 3260;">
						</div>
						<div id="Layer499"
							style="position: absolute; text-align: left; left: 0px; top: 366px; width: 180px; height: 26px; z-index: 3261;">
							<div id="wb_Text1372"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3245;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">10
									Videos</span>
							</div>
						</div>
						<div id="Layer500"
							style="position: absolute; text-align: left; left: 0px; top: 393px; width: 180px; height: 26px; z-index: 3262;">
							<div id="wb_Text1373"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3246;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">4
									Catalogues</span>
							</div>
						</div>
						<div id="Layer501"
							style="position: absolute; text-align: left; left: 0px; top: 420px; width: 180px; height: 29px; z-index: 3263;">
						</div>
						<div id="Layer502"
							style="position: absolute; text-align: left; left: 0px; top: 480px; width: 180px; height: 26px; z-index: 3264;">
						</div>
						<div id="wb_Text1374"
							style="position: absolute; left: 19px; top: 346px; width: 134px; height: 16px; text-align: center; z-index: 3265;">
							<span
								style="color: #2D2D2D; font-family: Arial; font-size: 13px;">200
								MB + 200 MB</span>
						</div>
						<div id="Layer503"
							style="position: absolute; text-align: left; left: 0px; top: 312px; width: 180px; height: 26px; z-index: 3266;">
							<div id="wb_Text1375"
								style="position: absolute; left: 19px; top: 6px; width: 134px; height: 16px; text-align: center; z-index: 3247;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 13px;">600
									MB</span>
							</div>
						</div>
						<div id="Layer504"
							style="position: absolute; text-align: left; left: 0px; top: 453px; width: 180px; height: 26px; z-index: 3267;">
						</div>
						<div id="wb_Text1376"
							style="position: absolute; left: 17px; top: 457px; width: 134px; height: 16px; text-align: center; z-index: 3268;">
							<span
								style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Up
								to 20 MB</span>
						</div>
						<div id="wb_Text1377"
							style="position: absolute; left: 17px; top: 485px; width: 134px; height: 16px; text-align: center; z-index: 3269;">
							<span
								style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Up
								to 5 </span>
						</div>
						<div id="wb_Text1378"
							style="position: absolute; left: 19px; top: 426px; width: 134px; height: 16px; text-align: center; z-index: 3270;">
							<span
								style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Up
								to 30 </span>
						</div>
						<div id="wb_Shape547"
							style="position: absolute; left: 0px; top: 517px; width: 180px; height: 73px; z-index: 3271;">
							<a href="./access-denid-layer.html"
								onclick="ShowObject('Layer189', 1);return false;"><img
								class="hover"
								src="<?php echo asset_url();?>images/img2057_hover.gif" alt=""
								style="border-width: 0; width: 180px; height: 73px;"><span><img
									src="<?php echo asset_url();?>images/img2057.gif" id="Shape547"
									alt="" style="width: 180px; height: 73px;"></span></a>
						</div>
					</div>
					<div id="Layer505"
						style="position: absolute; text-align: left; left: 25px; top: 533px; width: 309px; height: 29px; z-index: 3300;">
						<div id="wb_Text1379"
							style="position: absolute; left: 19px; top: 6px; width: 230px; height: 16px; z-index: 3272; text-align: left;">
							<span
								style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Real
								In 3D products</span>
						</div>
					</div>
					<div id="Layer506"
						style="position: absolute; text-align: left; left: 25px; top: 425px; width: 309px; height: 26px; z-index: 3301;">
						<div id="wb_Text1380"
							style="position: absolute; left: 19px; top: 6px; width: 230px; height: 16px; z-index: 3273; text-align: left;">
							<span
								style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Community
								+ Posts Storage</span>
						</div>
					</div>
					<div id="wb_Image77"
						style="position: absolute; left: 102px; top: 7px; width: 142px; height: 98px; z-index: 3302;">
						<img src="<?php echo asset_url();?>images/img2058.png"
							id="Image77" alt="">
					</div>
					<div id="wb_Text1354"
						style="position: absolute; left: 44px; top: 323px; width: 286px; height: 16px; z-index: 3303; text-align: left;">
						<span style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Storage
							Box ( With Unlimited Products Posting)</span>
					</div>
					<div id="wb_Text1355"
						style="position: absolute; left: 44px; top: 350px; width: 279px; height: 16px; z-index: 3304; text-align: left;">
						<span style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Business
							Station Posts&nbsp; (Send &amp; Receive)</span>
					</div>
					<div id="wb_Text1353"
						style="position: absolute; left: 45px; top: 377px; width: 276px; height: 16px; z-index: 3305; text-align: left;">
						<span style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Stock
							Market Posts&nbsp; (Send &amp; Receive)</span>
					</div>
					<div id="wb_Text1352"
						style="position: absolute; left: 44px; top: 404px; width: 272px; height: 16px; z-index: 3306; text-align: left;">
						<span style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Community
							+ Adding Buyers ( And members)</span>
					</div>
				</div>
			</div>
			<div id="Layer507"
				style="position: absolute; text-align: center; visibility: hidden; left: 0%; top: 6px; width: 99%; height: 788px; z-index: 3731;">
				<div id="Layer507_Container"
					style="width: 1277px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer508"
						style="position: absolute; text-align: center; left: 0%; top: 26px; width: 99%; height: 713px; z-index: 3342;">
						<div id="Layer508_Container"
							style="width: 1273px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
						</div>
					</div>
					<div id="RollOver38"
						style="position: absolute; left: 54px; top: 71px; overflow: hidden; width: 64px; height: 64px; z-index: 3343">
						<a href=""> <img class="hover" alt=""
							src="<?php echo asset_url();?>images/Account1.png">

						</a>
					</div>
					<div id="wb_Shape548"
						style="position: absolute; left: 9px; top: 163px; width: 150px; height: 54px; z-index: 3344;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 1);ShowObject('Layer507', 0);return false;"><div
								id="Shape548">
								<div id="Shape548_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Personal
										<br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Text1383"
						style="position: absolute; left: 46px; top: 133px; width: 81px; height: 16px; text-align: center; z-index: 3345;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 13px;">My
							Account</span>
					</div>
					<div id="wb_Shape549"
						style="position: absolute; left: 9px; top: 219px; width: 150px; height: 54px; z-index: 3346;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 1);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape549">
								<div id="Shape549_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Company<br></span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape550"
						style="position: absolute; left: 9px; top: 275px; width: 150px; height: 54px; z-index: 3347;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 1);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape550">
								<div id="Shape550_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Factory<br></span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape551"
						style="position: absolute; left: 9px; top: 331px; width: 150px; height: 54px; z-index: 3348;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 1);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape551">
								<div id="Shape551_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Trade
										/ Export<br>
									</span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Information</span>
								</div>
							</div></a>
					</div>
					<div id="Layer509"
						style="position: absolute; text-align: center; left: 167px; top: 31px; width: 1088px; height: 697px; z-index: 3349;">
						<div id="Layer509_Container"
							style="width: 1088px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<div id="Layer516"
								style="position: absolute; text-align: left; left: 68px; top: 355px; width: 974px; height: 81px; z-index: 3335;">
								<div id="wb_Text1394"
									style="position: absolute; left: 31px; top: 15px; width: 62px; height: 18px; z-index: 3307; text-align: left;">
									<span
										style="color: #1E90FF; font-family: Arial; font-size: 15px;"><strong>USER
											2</strong></span>
								</div>
								<div id="wb_Text1395"
									style="position: absolute; left: 30px; top: 39px; width: 62px; height: 17px; z-index: 3308; text-align: left;">
									<span
										style="color: #2D2D2D; font-family: Arial; font-size: 15px;">Hazem</span>
								</div>
								<div id="wb_Text1396"
									style="position: absolute; left: 311px; top: 43px; width: 166px; height: 15px; z-index: 3309; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">************</span>
								</div>
								<div id="wb_Text1397"
									style="position: absolute; left: 165px; top: 16px; width: 119px; height: 15px; z-index: 3310; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Station
										ID</span>
								</div>
								<div id="wb_Text1398"
									style="position: absolute; left: 310px; top: 16px; width: 166px; height: 15px; z-index: 3311; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Zaki-Hazem@hotmail.com</span>
								</div>
								<div id="wb_Text1399"
									style="position: absolute; left: 166px; top: 40px; width: 114px; height: 15px; z-index: 3312; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Password</span>
								</div>
								<div id="wb_Shape558"
									style="position: absolute; left: 605px; top: 24px; width: 108px; height: 32px; z-index: 3313;">
									<a href="" onclick="ShowObject('Layer507', 1);return false;"><div
											id="Shape558">
											<div id="Shape558_text">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px;">Suspense</span>
											</div>
										</div></a>
								</div>
								<div id="wb_Shape559"
									style="position: absolute; left: 722px; top: 23px; width: 112px; height: 32px; z-index: 3314;">
									<a href="" onclick="ShowObject('Layer507', 1);return false;"><div
											id="Shape559">
											<div id="Shape559_text">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px;">Delete</span>
											</div>
										</div></a>
								</div>
							</div>
							<div id="Layer510"
								style="position: absolute; text-align: center; left: 1px; top: 1px; width: 1085px; height: 45px; z-index: 3336;">
								<div id="Layer510_Container"
									style="width: 1085px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
									<button id="AdvancedButton71"
										onclick="ShowObjectWithEffect('Layer507', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');return false;"
										type="button"
										style="position: absolute; left: 1038px; top: 0px; width: 47px; height: 45px; z-index: 3315;"
										onclick="window.location=''" name="" value="">
										<div style="text-align: center">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 20px">X</span>
										</div>
									</button>
									<div id="wb_Text1400"
										style="position: absolute; left: 674px; top: 3px; width: 86px; height: 36px; z-index: 3316; text-align: left;">
										<span
											style="color: #1E90FF; font-family: Arial; font-size: 32px;">2</span><span
											style="color: #1E90FF; font-family: Arial; font-size: 21px;">
										</span><span
											style="color: #1E90FF; font-family: Arial; font-size: 19px;">Users
										</span>
									</div>
									<div id="wb_Text1401"
										style="position: absolute; left: 759px; top: 14px; width: 125px; height: 22px; z-index: 3317; text-align: left;">
										<span
											style="color: #808080; font-family: Arial; font-size: 19px;">|
											Remains 3</span>
									</div>
								</div>
							</div>
							<div id="wb_Text1387"
								style="position: absolute; left: 68px; top: 100px; width: 385px; height: 25px; z-index: 3337; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Georgia; font-size: 21px;">Sub
									Users Accounts</span>
							</div>
							<div id="wb_Text1388"
								style="position: absolute; left: 69px; top: 135px; width: 691px; height: 84px; z-index: 3338; text-align: left;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 11px;">For
									more sercurity, we not allow members Double Login &quot; Log in
									The Trade Station Account from 2 devices at the same
									time&quot;.<br>In case you require to add more users &quot; Sub
									Users Account&quot; to login your account at the same time, for
									uploading and building your site more faster, please click on
									&quot;Create New Sub User Account&quot; link then type &quot;
									the user name and password&quot;.<br>Once you have created
									&quot; User Account &quot;, you will be able to delete or
									suspense it any time .<br>
								<br>
								</span><span
									style="color: #000000; font-family: Arial; font-size: 11px;">Note:
									Sub Users will not be able to delete, change account name or
									password or create new users.</span>
							</div>
							<div id="Layer513"
								style="position: absolute; text-align: left; left: 68px; top: 265px; width: 974px; height: 81px; z-index: 3339;">
								<div id="wb_Text1386"
									style="position: absolute; left: 31px; top: 15px; width: 62px; height: 18px; z-index: 3318; text-align: left;">
									<span
										style="color: #1E90FF; font-family: Arial; font-size: 15px;"><strong>USER
											1</strong></span>
								</div>
								<div id="wb_Text1389"
									style="position: absolute; left: 30px; top: 39px; width: 62px; height: 17px; z-index: 3319; text-align: left;">
									<span
										style="color: #2D2D2D; font-family: Arial; font-size: 15px;">Jesica</span>
								</div>
								<div id="wb_Text1385"
									style="position: absolute; left: 311px; top: 43px; width: 166px; height: 15px; z-index: 3320; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">*********</span>
								</div>
								<div id="wb_Text1410"
									style="position: absolute; left: 165px; top: 16px; width: 119px; height: 15px; z-index: 3321; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Station
										ID</span>
								</div>
								<div id="wb_Text1411"
									style="position: absolute; left: 310px; top: 16px; width: 166px; height: 15px; z-index: 3322; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Zaki-Hazem@hotmail.com</span>
								</div>
								<div id="wb_Text1408"
									style="position: absolute; left: 166px; top: 40px; width: 114px; height: 15px; z-index: 3323; text-align: left;">
									<span
										style="color: #3C3C3C; font-family: Georgia; font-size: 12px;">Password</span>
								</div>
								<div id="wb_Shape553"
									style="position: absolute; left: 605px; top: 24px; width: 108px; height: 32px; z-index: 3324;">
									<a href="" onclick="ShowObject('Layer507', 1);return false;"><div
											id="Shape553">
											<div id="Shape553_text">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px;">Suspense</span>
											</div>
										</div></a>
								</div>
								<div id="wb_Shape554"
									style="position: absolute; left: 722px; top: 23px; width: 112px; height: 32px; z-index: 3325;">
									<a href="" onclick="ShowObject('Layer507', 1);return false;"><div
											id="Shape554">
											<div id="Shape554_text">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px;">Delete</span>
											</div>
										</div></a>
								</div>
							</div>
							<div id="wb_Text1390"
								style="position: absolute; left: 98px; top: 471px; width: 303px; height: 18px; z-index: 3340; text-align: left;">
								<span
									style="color: #1E90FF; font-family: Arial; font-size: 15px;"><strong><a
										href="#" class="style23"
										onclick="ShowObject('Layer514', 1);return false;">Create New
											Sub User Account</a></strong></span>
							</div>
							<div id="Layer514"
								style="position: absolute; text-align: left; visibility: hidden; left: 289px; top: 210px; width: 431px; height: 266px; z-index: 3341;">
								<div id="Layer515"
									style="position: absolute; text-align: left; left: 0px; top: 0px; width: 431px; height: 48px; z-index: 3326;">
								</div>
								<div id="wb_Text1391"
									style="position: absolute; left: 118px; top: 14px; width: 185px; height: 25px; z-index: 3327; text-align: left;">
									<span
										style="color: #FFFFFF; font-family: Georgia; font-size: 21px;">Add
										New Sub User</span>
								</div>
								<div id="wb_Text1392"
									style="position: absolute; left: 42px; top: 84px; width: 78px; height: 16px; z-index: 3328; text-align: left;">
									<span
										style="color: #2D2D2D; font-family: Arial; font-size: 13px;">User
										Name</span>
								</div>
								<div id="wb_Text1393"
									style="position: absolute; left: 44px; top: 126px; width: 78px; height: 16px; z-index: 3329; text-align: left;">
									<span
										style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Password</span>
								</div>
								<div id="wb_Shape555"
									style="position: absolute; left: 160px; top: 223px; width: 87px; height: 32px; z-index: 3330;">
									<a href="" onclick="ShowObject('Layer514', 0);return false;"><div
											id="Shape555">
											<div id="Shape555_text">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px;">Create</span>
											</div>
										</div></a>
								</div>
								<div id="wb_Shape556"
									style="position: absolute; left: 250px; top: 223px; width: 79px; height: 32px; z-index: 3331;">
									<a href="" onclick="ShowObject('Layer514', 0);return false;"><div
											id="Shape556">
											<div id="Shape556_text">
												<span
													style="color: #A9A9A9; font-family: Arial; font-size: 13px;">Reset</span>
											</div>
										</div></a>
								</div>
								<input type="text" id="Editbox62"
									style="position: absolute; left: 133px; top: 75px; width: 193px; height: 28px; line-height: 28px; z-index: 3332;"
									name="Editbox62" value=""> <input type="text" id="Editbox63"
									style="position: absolute; left: 134px; top: 118px; width: 193px; height: 28px; line-height: 28px; z-index: 3333;"
									name="Editbox62" value=""> <input type="text" id="Editbox64"
									style="position: absolute; left: 135px; top: 162px; width: 193px; height: 28px; line-height: 28px; z-index: 3334;"
									name="Editbox62" value="">
							</div>
						</div>
					</div>
					<div id="wb_Shape557"
						style="position: absolute; left: 9px; top: 386px; width: 150px; height: 54px; z-index: 3350;">
						<a href=""
							onclick="ShowObject('Layer170', 1);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 0);return false;"><div
								id="Shape557">
								<div id="Shape557_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Edit<br></span><span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Certificates</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape552"
						style="position: absolute; left: 9px; top: 441px; width: 150px; height: 54px; z-index: 3351;">
						<a href=""
							onclick="ShowObject('Layer170', 0);ShowObject('Layer121', 0);ShowObject('Layer18', 0);ShowObject('Layer14', 0);ShowObject('Layer164', 0);ShowObject('Layer507', 1);return false;"><div
								id="Shape552">
								<div id="Shape552_text">
									<span
										style="color: #F05539; font-family: Arial; font-size: 11px;">View
										| Edit<br>
									</span><span
										style="color: #F05539; font-family: Arial; font-size: 13px;">Sub
										Users</span>
								</div>
							</div></a>
					</div>
				</div>
			</div>
			<div id="Layer528"
				style="position: absolute; text-align: center; visibility: hidden; left: 0px; top: 11px; width: 1279px; height: 759px; z-index: 3732;">
				<div id="Layer528_Container"
					style="width: 1279px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer529"
						style="position: absolute; text-align: center; left: 0%; top: 18px; width: 99%; height: 710px; z-index: 3607;">
						<div id="Layer529_Container"
							style="width: 1273px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
						</div>
					</div>
					<div id="wb_Text1450"
						style="position: absolute; left: 18px; top: 687px; width: 148px; height: 20px; text-align: center; z-index: 3608;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 8px;">Copyrights
							| TRDSTATION 2013-2016@All Rights Reserved</span>
					</div>
					<div id="wb_Text1451"
						style="position: absolute; left: 56px; top: 644px; width: 72px; height: 14px; text-align: center; z-index: 3609;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 11px;">TRADE</span>
					</div>
					<div id="wb_Text1452"
						style="position: absolute; left: 60px; top: 655px; width: 72px; height: 25px; z-index: 3610; text-align: left;">
						<span
							style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">STATION</span>
					</div>
					<div id="Layer530"
						style="position: absolute; text-align: center; left: 172px; top: 24px; width: 1088px; height: 694px; z-index: 3611;">
						<div id="Layer530_Container"
							style="width: 1088px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
							<div id="jQueryTabs1"
								style="position: absolute; left: 16px; top: 6px; width: 1054px; height: 668px; z-index: 3604;">
								<ul>
									<li><a href="#jquerytabs1-page-0"><span>Performance</span></a></li>
									<li><a href="#jquerytabs1-page-1"><span>Storage</span></a></li>
									<li><a href="#jquerytabs1-page-2"><span>Backup</span></a></li>
								</ul>
								<div style="height: 626px; overflow: auto; padding: 0;"
									id="jquerytabs1-page-0">
									<div id="wb_Text1457"
										style="position: absolute; left: 108px; top: 85px; width: 675px; height: 77px; z-index: 3399; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Trade
											Station &quot;<strong>Tools Feature</strong>&quot; provide
											you will the
										</span><span
											style="color: #2D2D2D; font-family: Calibri; font-size: 13px;">with
											a unique method to get a quick and major details about each
											part in your site, with a final result helps your company to
											evaluate the displayed products,&nbsp; find the right markets
											looking for your products, set a suitable punctual market
											plans and much more.<br>
										<strong>Tools Feature </strong>includes additional functions
											to manage your storage and create a regular backups of your
											whole site.&nbsp; <br>
										</span>
									</div>
									<div id="Layer531"
										style="position: absolute; text-align: left; left: 108px; top: 209px; width: 247px; height: 390px; z-index: 3400;">
										<div id="Layer534"
											style="position: absolute; text-align: left; left: 0px; top: 0px; width: 247px; height: 198px; z-index: 3352;">
										</div>
										<div id="wb_Shape16"
											style="position: absolute; left: 20px; top: 59px; width: 206px; height: 108px; z-index: 3353;">
											<img src="<?php echo asset_url();?>images/img1268.png"
												id="Shape16" alt="" style="width: 206px; height: 108px;">
										</div>
										<div id="wb_Text1454"
											style="position: absolute; left: 106px; top: 15px; width: 85px; height: 16px; z-index: 3354; text-align: left;">
											<span
												style="color: #D3D3D3; font-family: Georgia; font-size: 16px;">Desksite</span>
										</div>
										<div id="wb_Image132"
											style="position: absolute; left: 69px; top: 11px; width: 30px; height: 30px; z-index: 3355;">
											<img src="<?php echo asset_url();?>images/Desksite-small.png"
												id="Image132" alt="">
										</div>
										<div id="wb_Text1453"
											style="position: absolute; left: 123px; top: 272px; width: 60px; height: 16px; text-align: center; z-index: 3356;">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>1650</strong></span>
										</div>
										<div id="wb_Text1461"
											style="position: absolute; left: 67px; top: 271px; width: 51px; height: 16px; z-index: 3357; text-align: left;">
											<span
												style="color: #2688E4; font-family: Arial; font-size: 12px;"><strong>Visitors</strong></span>
										</div>
										<div id="wb_Text1456"
											style="position: absolute; left: 123px; top: 292px; width: 60px; height: 16px; text-align: center; z-index: 3358;">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>500</strong></span>
										</div>
										<div id="wb_Text1458"
											style="position: absolute; left: 67px; top: 291px; width: 51px; height: 16px; z-index: 3359; text-align: left;">
											<span
												style="color: #2688E4; font-family: Arial; font-size: 12px;"><strong>Likes</strong></span>
										</div>
										<div id="wb_Text1459"
											style="position: absolute; left: 67px; top: 311px; width: 51px; height: 16px; z-index: 3360; text-align: left;">
											<span
												style="color: #2688E4; font-family: Arial; font-size: 12px;"><strong>Shares</strong></span>
										</div>
										<div id="wb_Text1460"
											style="position: absolute; left: 123px; top: 312px; width: 60px; height: 16px; text-align: center; z-index: 3361;">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>3</strong></span>
										</div>
										<div id="wb_Text1464"
											style="position: absolute; left: 23px; top: 212px; width: 33px; height: 16px; text-align: center; z-index: 3362;">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>URL</strong></span>
										</div>
										<div id="wb_Text1463"
											style="position: absolute; left: 27px; top: 229px; width: 202px; height: 16px; z-index: 3363; text-align: left;">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong><a
													href="./desksite.php" target="_blank" class="style16">www.trdstation.com/h?=fkl/kfme
														i/sellerst</a></strong></span>
										</div>
										<div id="wb_Shape364"
											style="position: absolute; left: 40px; top: 348px; width: 164px; height: 33px; z-index: 3364;">
											<a href=""
												onclick="ShowObjectWithEffect('jQueryTabs1', 0, 'fade', 500);ShowObjectWithEffect('jQueryTabs2', 1, 'fade', 500);return false;"><div
													id="Shape364">
													<div id="Shape364_text">
														<span
															style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">VIEW</span>
													</div>
												</div></a>
										</div>
									</div>
									<div id="Layer532"
										style="position: absolute; text-align: left; left: 392px; top: 210px; width: 247px; height: 389px; z-index: 3401;">
										<div id="Layer535"
											style="position: absolute; text-align: left; left: 0px; top: 0px; width: 247px; height: 198px; z-index: 3365;">
										</div>
										<div id="wb_Text1465"
											style="position: absolute; left: 84px; top: 16px; width: 114px; height: 16px; z-index: 3366; text-align: left;">
											<span
												style="color: #D3D3D3; font-family: Georgia; font-size: 16px;">Total
												Products</span>
										</div>
										<div id="wb_Image133"
											style="position: absolute; left: 44px; top: 7px; width: 36px; height: 36px; z-index: 3367;">
											<img src="<?php echo asset_url();?>images/products.png"
												id="Image133" alt="">
										</div>
										<div id="wb_Text1466"
											style="position: absolute; left: 124px; top: 219px; width: 60px; height: 16px; text-align: center; z-index: 3368;">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>1650</strong></span>
										</div>
										<div id="wb_Text1467"
											style="position: absolute; left: 68px; top: 218px; width: 51px; height: 16px; z-index: 3369; text-align: left;">
											<span
												style="color: #2688E4; font-family: Arial; font-size: 12px;"><strong>Total</strong></span>
										</div>
										<div id="wb_Text1468"
											style="position: absolute; left: 124px; top: 239px; width: 60px; height: 16px; text-align: center; z-index: 3370;">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>500</strong></span>
										</div>
										<div id="wb_Text1471"
											style="position: absolute; left: 124px; top: 259px; width: 60px; height: 16px; text-align: center; z-index: 3371;">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>3</strong></span>
										</div>
										<div id="wb_Shape15"
											style="position: absolute; left: 43px; top: 116px; width: 50px; height: 50px; z-index: 3372;">
											<img src="<?php echo asset_url();?>images/img1288.png"
												id="Shape15" alt="" style="width: 50px; height: 50px;">
										</div>
										<div id="wb_Shape17"
											style="position: absolute; left: 43px; top: 60px; width: 50px; height: 50px; z-index: 3373;">
											<img src="<?php echo asset_url();?>images/img1673.png"
												id="Shape17" alt="" style="width: 50px; height: 50px;">
										</div>
										<div id="wb_Shape44"
											style="position: absolute; left: 98px; top: 116px; width: 50px; height: 50px; z-index: 3374;">
											<img src="<?php echo asset_url();?>images/img1716.png"
												id="Shape44" alt="" style="width: 50px; height: 50px;">
										</div>
										<div id="wb_Shape23"
											style="position: absolute; left: 152px; top: 116px; width: 50px; height: 50px; z-index: 3375;">
											<img src="<?php echo asset_url();?>images/img1724.png"
												id="Shape23" alt="" style="width: 50px; height: 50px;">
										</div>
										<div id="wb_Shape19"
											style="position: absolute; left: 98px; top: 60px; width: 50px; height: 50px; z-index: 3376;">
											<img src="<?php echo asset_url();?>images/img1725.png"
												id="Shape19" alt="" style="width: 50px; height: 50px;">
										</div>
										<div id="wb_Shape20"
											style="position: absolute; left: 153px; top: 60px; width: 50px; height: 50px; z-index: 3377;">
											<img src="<?php echo asset_url();?>images/img1747.png"
												id="Shape20" alt="" style="width: 50px; height: 50px;">
										</div>
										<div id="wb_Text1469"
											style="position: absolute; left: 69px; top: 239px; width: 51px; height: 16px; z-index: 3378; text-align: left;">
											<span
												style="color: #2688E4; font-family: Arial; font-size: 12px;"><strong>Likes</strong></span>
										</div>
										<div id="wb_Text1470"
											style="position: absolute; left: 69px; top: 260px; width: 51px; height: 16px; z-index: 3379; text-align: left;">
											<span
												style="color: #2688E4; font-family: Arial; font-size: 12px;"><strong>Shares</strong></span>
										</div>
										<div id="wb_Shape362"
											style="position: absolute; left: 44px; top: 347px; width: 164px; height: 33px; z-index: 3380;">
											<a href=""
												onclick="ShowObjectWithEffect('jQueryTabs1', 0, 'fade', 500);ShowObjectWithEffect('jQueryTabs2', 1, 'fade', 500);return false;"><div
													id="Shape362">
													<div id="Shape362_text">
														<span
															style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">VIEW</span>
													</div>
												</div></a>
										</div>
									</div>
									<div id="Layer533"
										style="position: absolute; text-align: left; left: 678px; top: 210px; width: 247px; height: 387px; z-index: 3402;">
										<div id="Layer536"
											style="position: absolute; text-align: left; left: 0px; top: 0px; width: 247px; height: 198px; z-index: 3381;">
										</div>
										<div id="wb_Text1472"
											style="position: absolute; left: 78px; top: 17px; width: 122px; height: 16px; z-index: 3382; text-align: left;">
											<span
												style="color: #D3D3D3; font-family: Georgia; font-size: 16px;">Active
												Products</span>
										</div>
										<div id="wb_Text1473"
											style="position: absolute; left: 142px; top: 238px; width: 60px; height: 16px; text-align: center; z-index: 3383;">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>500</strong></span>
										</div>
										<div id="wb_Text1474"
											style="position: absolute; left: 66px; top: 237px; width: 51px; height: 16px; z-index: 3384; text-align: left;">
											<span
												style="color: #2688E4; font-family: Arial; font-size: 12px;"><strong>Views</strong></span>
										</div>
										<div id="wb_Text1475"
											style="position: absolute; left: 142px; top: 258px; width: 60px; height: 16px; text-align: center; z-index: 3385;">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>350</strong></span>
										</div>
										<div id="wb_Text1478"
											style="position: absolute; left: 142px; top: 278px; width: 60px; height: 16px; text-align: center; z-index: 3386;">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>3</strong></span>
										</div>
										<div id="wb_Image134"
											style="position: absolute; left: 37px; top: 9px; width: 36px; height: 36px; z-index: 3387;">
											<img src="<?php echo asset_url();?>images/img1748.png"
												id="Image134" alt="">
										</div>
										<div id="wb_Text1479"
											style="position: absolute; left: 66px; top: 216px; width: 65px; height: 16px; z-index: 3388; text-align: left;">
											<span
												style="color: #2688E4; font-family: Arial; font-size: 12px;"><strong>Active
													Pro.</strong></span>
										</div>
										<div id="wb_Text1480"
											style="position: absolute; left: 142px; top: 217px; width: 60px; height: 16px; text-align: center; z-index: 3389;">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>55</strong></span>
										</div>
										<div id="wb_Shape46"
											style="position: absolute; left: 37px; top: 66px; width: 50px; height: 50px; z-index: 3390;">
											<img src="<?php echo asset_url();?>images/img1749.png"
												id="Shape46" alt="" style="width: 50px; height: 50px;">
										</div>
										<div id="wb_Shape71"
											style="position: absolute; left: 92px; top: 66px; width: 50px; height: 50px; z-index: 3391;">
											<img src="<?php echo asset_url();?>images/img1750.png"
												id="Shape71" alt="" style="width: 50px; height: 50px;">
										</div>
										<div id="wb_Shape310"
											style="position: absolute; left: 91px; top: 122px; width: 50px; height: 50px; z-index: 3392;">
											<img src="<?php echo asset_url();?>images/img1760.png"
												id="Shape310" alt="" style="width: 50px; height: 50px;">
										</div>
										<div id="wb_Shape339"
											style="position: absolute; left: 37px; top: 122px; width: 50px; height: 50px; z-index: 3393;">
											<img src="<?php echo asset_url();?>images/img1761.png"
												id="Shape339" alt="" style="width: 50px; height: 50px;">
										</div>
										<div id="wb_Shape21"
											style="position: absolute; left: 147px; top: 66px; width: 50px; height: 50px; z-index: 3394;">
											<img src="<?php echo asset_url();?>images/img1762.png"
												id="Shape21" alt="" style="width: 50px; height: 50px;">
										</div>
										<div id="wb_Shape22"
											style="position: absolute; left: 147px; top: 121px; width: 50px; height: 50px; z-index: 3395;">
											<img src="<?php echo asset_url();?>images/img1763.png"
												id="Shape22" alt="" style="width: 50px; height: 50px;">
										</div>
										<div id="wb_Text1476"
											style="position: absolute; left: 67px; top: 256px; width: 51px; height: 16px; z-index: 3396; text-align: left;">
											<span
												style="color: #2688E4; font-family: Arial; font-size: 12px;"><strong>Likes</strong></span>
										</div>
										<div id="wb_Text1477"
											style="position: absolute; left: 67px; top: 276px; width: 51px; height: 16px; z-index: 3397; text-align: left;">
											<span
												style="color: #2688E4; font-family: Arial; font-size: 12px;"><strong>Shares</strong></span>
										</div>
										<div id="wb_Shape363"
											style="position: absolute; left: 38px; top: 347px; width: 164px; height: 33px; z-index: 3398;">
											<a href=""
												onclick="ShowObjectWithEffect('jQueryTabs1', 0, 'fade', 500);ShowObjectWithEffect('jQueryTabs2', 1, 'fade', 500);return false;"><div
													id="Shape363">
													<div id="Shape363_text">
														<span
															style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">VIEW</span>
													</div>
												</div></a>
										</div>
									</div>
								</div>
								<div style="height: 626px; overflow: auto; padding: 0;"
									id="jquerytabs1-page-1">
									<div id="wb_Image135"
										style="position: absolute; left: 157px; top: 120px; width: 300px; height: 300px; z-index: 3418;">
										<img src="<?php echo asset_url();?>images/main-chart.png"
											id="Image135" alt="">
									</div>
									<div id="wb_Text1482"
										style="position: absolute; left: 900px; top: 125px; width: 65px; height: 40px; z-index: 3419; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 20px;"><strong>1.56
										</strong></span><span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;">GB</span>
									</div>
									<div id="wb_Text1483"
										style="position: absolute; left: 900px; top: 97px; width: 65px; height: 24px; z-index: 3420; text-align: left;">
										<span
											style="color: #F05539; font-family: Arial; font-size: 20px;"><strong>6
										</strong></span><span
											style="color: #F05539; font-family: Arial; font-size: 13px;">GB</span>
									</div>
									<div id="wb_Text1484"
										style="position: absolute; left: 722px; top: 130px; width: 165px; height: 32px; z-index: 3421; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Your
											total USAGE</span><span
											style="color: #2D2D2D; font-family: Calibri; font-size: 13px;"><br></span>
									</div>
									<div id="wb_Text1485"
										style="position: absolute; left: 261px; top: 94px; width: 108px; height: 32px; z-index: 3422; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;"><strong>USAGE
												CHART</strong></span><span
											style="color: #2D2D2D; font-family: Calibri; font-size: 13px;"><strong><br></strong></span>
									</div>
									<div id="Layer537"
										style="position: absolute; text-align: left; left: 686px; top: 98px; width: 200px; height: 22px; z-index: 3423;">
										<div id="wb_Text1481"
											style="position: absolute; left: 33px; top: 3px; width: 159px; height: 16px; z-index: 3403; text-align: left;">
											<span
												style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Your
												total STORAGE BOX</span>
										</div>
									</div>
									<div id="Layer539"
										style="position: absolute; text-align: left; left: 691px; top: 201px; width: 200px; height: 22px; z-index: 3424;">
										<div id="Layer540"
											style="position: absolute; text-align: left; left: 0px; top: 0px; width: 21px; height: 22px; z-index: 3404;">
										</div>
										<div id="wb_Text1486"
											style="position: absolute; left: 33px; top: 3px; width: 159px; height: 16px; z-index: 3405; text-align: left;">
											<span
												style="color: #2D2D2D; font-family: Arial; font-size: 13px;">All
												Products Storage</span>
										</div>
									</div>
									<div id="wb_Text1487"
										style="position: absolute; left: 725px; top: 177px; width: 165px; height: 16px; z-index: 3425; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;">USAGE
											DETAILS</span>
									</div>
									<div id="wb_Text1488"
										style="position: absolute; left: 906px; top: 201px; width: 94px; height: 24px; z-index: 3426; text-align: left;">
										<span
											style="color: #E76C1A; font-family: Arial; font-size: 20px;"><strong>1000
										</strong></span><span
											style="color: #E76C1A; font-family: Arial; font-size: 13px;">MB</span>
									</div>
									<div id="Layer541"
										style="position: absolute; text-align: left; left: 691px; top: 231px; width: 200px; height: 22px; z-index: 3427;">
										<div id="Layer542"
											style="position: absolute; text-align: left; left: 0px; top: 0px; width: 21px; height: 22px; z-index: 3406;">
										</div>
										<div id="wb_Text1489"
											style="position: absolute; left: 33px; top: 3px; width: 159px; height: 16px; z-index: 3407; text-align: left;">
											<span
												style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Community
												Posts Storage</span>
										</div>
									</div>
									<div id="wb_Text1490"
										style="position: absolute; left: 908px; top: 231px; width: 65px; height: 24px; z-index: 3428; text-align: left;">
										<span
											style="color: #E7241A; font-family: Arial; font-size: 20px;"><strong>130
										</strong></span><span
											style="color: #E7241A; font-family: Arial; font-size: 13px;">MB</span>
									</div>
									<div id="wb_Text1491"
										style="position: absolute; left: 906px; top: 262px; width: 94px; height: 24px; z-index: 3429; text-align: left;">
										<span
											style="color: #AF0F07; font-family: Arial; font-size: 20px;"><strong>75
										</strong></span><span
											style="color: #AF0F07; font-family: Arial; font-size: 13px;">MB</span>
									</div>
									<div id="Layer543"
										style="position: absolute; text-align: left; left: 691px; top: 262px; width: 200px; height: 22px; z-index: 3430;">
										<div id="Layer544"
											style="position: absolute; text-align: left; left: 0px; top: 0px; width: 21px; height: 22px; z-index: 3408;">
										</div>
										<div id="wb_Text1492"
											style="position: absolute; left: 33px; top: 3px; width: 159px; height: 16px; z-index: 3409; text-align: left;">
											<span
												style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Offers
												Storage</span>
										</div>
									</div>
									<div id="Layer545"
										style="position: absolute; text-align: left; left: 691px; top: 292px; width: 200px; height: 22px; z-index: 3431;">
										<div id="Layer546"
											style="position: absolute; text-align: left; left: 0px; top: 0px; width: 21px; height: 22px; z-index: 3410;">
										</div>
										<div id="wb_Text1493"
											style="position: absolute; left: 33px; top: 3px; width: 159px; height: 16px; z-index: 3411; text-align: left;">
											<span
												style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Inquiries
												Storage</span>
										</div>
									</div>
									<div id="wb_Text1494"
										style="position: absolute; left: 908px; top: 292px; width: 65px; height: 24px; z-index: 3432; text-align: left;">
										<span
											style="color: #890D06; font-family: Arial; font-size: 20px;"><strong>80
										</strong></span><span
											style="color: #890D06; font-family: Arial; font-size: 13px;">MB</span>
									</div>
									<div id="wb_Text1495"
										style="position: absolute; left: 906px; top: 322px; width: 94px; height: 24px; z-index: 3433; text-align: left;">
										<span
											style="color: #2688E4; font-family: Arial; font-size: 20px;"><strong>75
										</strong></span><span
											style="color: #2688E4; font-family: Arial; font-size: 13px;">MB</span>
									</div>
									<div id="Layer547"
										style="position: absolute; text-align: left; left: 691px; top: 322px; width: 200px; height: 22px; z-index: 3434;">
										<div id="Layer548"
											style="position: absolute; text-align: left; left: 0px; top: 0px; width: 21px; height: 22px; z-index: 3412;">
										</div>
										<div id="wb_Text1496"
											style="position: absolute; left: 33px; top: 3px; width: 159px; height: 16px; z-index: 3413; text-align: left;">
											<span
												style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Videos
												Storage</span>
										</div>
									</div>
									<div id="wb_Text1497"
										style="position: absolute; left: 908px; top: 352px; width: 65px; height: 24px; z-index: 3435; text-align: left;">
										<span
											style="color: #40BFB5; font-family: Arial; font-size: 20px;"><strong>120
										</strong></span><span
											style="color: #40BFB5; font-family: Arial; font-size: 13px;">MB</span>
									</div>
									<div id="Layer549"
										style="position: absolute; text-align: left; left: 691px; top: 352px; width: 200px; height: 22px; z-index: 3436;">
										<div id="Layer550"
											style="position: absolute; text-align: left; left: 0px; top: 0px; width: 21px; height: 22px; z-index: 3414;">
										</div>
										<div id="wb_Text1498"
											style="position: absolute; left: 33px; top: 3px; width: 159px; height: 16px; z-index: 3415; text-align: left;">
											<span
												style="color: #2D2D2D; font-family: Arial; font-size: 13px;">B.
												Station Posts Storage</span>
										</div>
									</div>
									<div id="Layer551"
										style="position: absolute; text-align: left; left: 691px; top: 381px; width: 200px; height: 22px; z-index: 3437;">
										<div id="Layer552"
											style="position: absolute; text-align: left; left: 0px; top: 0px; width: 21px; height: 22px; z-index: 3416;">
										</div>
										<div id="wb_Text1499"
											style="position: absolute; left: 33px; top: 3px; width: 159px; height: 16px; z-index: 3417; text-align: left;">
											<span
												style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Stock
												M. Posts Storage</span>
										</div>
									</div>
									<div id="wb_Text1500"
										style="position: absolute; left: 908px; top: 381px; width: 65px; height: 24px; z-index: 3438; text-align: left;">
										<span
											style="color: #1A9F75; font-family: Arial; font-size: 20px;"><strong>30
										</strong></span><span
											style="color: #1A9F75; font-family: Arial; font-size: 13px;">MB</span>
									</div>
									<div id="wb_Image136"
										style="position: absolute; left: 68px; top: 455px; width: 146px; height: 146px; z-index: 3439;">
										<img src="<?php echo asset_url();?>images/community-chart.png"
											id="Image136" alt="">
									</div>
									<div id="wb_Image137"
										style="position: absolute; left: 261px; top: 457px; width: 146px; height: 146px; z-index: 3440;">
										<img src="<?php echo asset_url();?>images/st-chart.png"
											id="Image137" alt="">
									</div>
									<div id="wb_Image138"
										style="position: absolute; left: 461px; top: 460px; width: 146px; height: 146px; z-index: 3441;">
										<img src="<?php echo asset_url();?>images/bs-chat.png"
											id="Image138" alt="">
									</div>
									<div id="Layer553"
										style="position: absolute; text-align: left; left: 101px; top: 613px; width: 15px; height: 15px; z-index: 3442;">
									</div>
									<div id="Layer555"
										style="position: absolute; text-align: left; left: 508px; top: 614px; width: 15px; height: 15px; z-index: 3443;">
									</div>
									<div id="Layer554"
										style="position: absolute; text-align: left; left: 303px; top: 613px; width: 15px; height: 15px; z-index: 3444;">
									</div>
									<div id="wb_Text1501"
										style="position: absolute; left: 124px; top: 612px; width: 39px; height: 16px; z-index: 3445; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Used</span>
									</div>
									<div id="wb_Text1502"
										style="position: absolute; left: 124px; top: 632px; width: 134px; height: 16px; z-index: 3446; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Free
											Space 470MB</span>
									</div>
									<div id="Layer556"
										style="position: absolute; text-align: left; left: 101px; top: 633px; width: 15px; height: 15px; z-index: 3447;">
									</div>
									<div id="wb_Text1503"
										style="position: absolute; left: 326px; top: 612px; width: 39px; height: 16px; z-index: 3448; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Used</span>
									</div>
									<div id="wb_Text1504"
										style="position: absolute; left: 326px; top: 632px; width: 114px; height: 32px; z-index: 3449; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Free
											Space 125MB</span>
									</div>
									<div id="Layer557"
										style="position: absolute; text-align: left; left: 303px; top: 633px; width: 15px; height: 15px; z-index: 3450;">
									</div>
									<div id="wb_Text1505"
										style="position: absolute; left: 531px; top: 612px; width: 39px; height: 16px; z-index: 3451; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Used</span>
									</div>
									<div id="wb_Text1506"
										style="position: absolute; left: 531px; top: 632px; width: 129px; height: 16px; z-index: 3452; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Free
											Space 120MB</span>
									</div>
									<div id="Layer558"
										style="position: absolute; text-align: left; left: 508px; top: 633px; width: 15px; height: 15px; z-index: 3453;">
									</div>
									<div id="wb_Text1509"
										style="position: absolute; left: 159px; top: 606px; width: 65px; height: 24px; z-index: 3454; text-align: left;">
										<span
											style="color: #E7241A; font-family: Arial; font-size: 20px;"><strong>130
										</strong></span><span
											style="color: #E7241A; font-family: Arial; font-size: 13px;">MB</span>
									</div>
									<div id="wb_Text1510"
										style="position: absolute; left: 84px; top: 438px; width: 124px; height: 16px; z-index: 3455; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;"><strong>Community
												Usage</strong></span>
									</div>
									<div id="wb_Text1511"
										style="position: absolute; left: 294px; top: 438px; width: 92px; height: 16px; z-index: 3456; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;"><strong>Offers
												Usage</strong></span>
									</div>
									<div id="wb_Text1512"
										style="position: absolute; left: 483px; top: 438px; width: 102px; height: 16px; z-index: 3457; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;"><strong>Inquiries
												Usage</strong></span>
									</div>
									<div id="wb_Text1507"
										style="position: absolute; left: 364px; top: 607px; width: 59px; height: 24px; z-index: 3458; text-align: left;">
										<span
											style="color: #AF0F07; font-family: Arial; font-size: 20px;"><strong>75
										</strong></span><span
											style="color: #AF0F07; font-family: Arial; font-size: 13px;">MB</span>
									</div>
									<div id="wb_Text1508"
										style="position: absolute; left: 570px; top: 606px; width: 65px; height: 24px; z-index: 3459; text-align: left;">
										<span
											style="color: #890D06; font-family: Arial; font-size: 20px;"><strong>200
										</strong></span><span
											style="color: #890D06; font-family: Arial; font-size: 13px;">MB</span>
									</div>
								</div>
								<div style="height: 626px; overflow: auto; padding: 0;"
									id="jquerytabs1-page-2">
									<div id="wb_Text1455"
										style="position: absolute; left: 195px; top: 142px; width: 675px; height: 162px; z-index: 3460; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Enjoy
											high level of security, save your the whole contents of your
											website ( to your PC) in one compressed file and restore it
											by one click to recover any damaged of lost data.<br>
										<br>
										<strong>When I should backup my website..?<br></strong>You
											only should backup your website, once you finish adding all
											of your products, and keep doing it when you make some
											changes or adding new contents.<br>
										<br>
										<strong>When i should restore my website from backup?<br></strong>Never
											do restore, unless something serious happened in your website
											such as losing data..etc, in this case be sure that your will
											going to restore a recent Backup file.<br>
										</span>
									</div>
									<div id="wb_Shape340"
										style="position: absolute; left: 398px; top: 389px; width: 133px; height: 33px; z-index: 3461;">
										<a href=""
											onclick="ShowObject('jQueryTabs1', 1);return false;"><div
												id="Shape340">
												<div id="Shape340_text">
													<span
														style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">BACKUP</span>
												</div>
											</div></a>
									</div>
									<div id="wb_Shape361"
										style="position: absolute; left: 536px; top: 389px; width: 133px; height: 33px; z-index: 3462;">
										<a href=""
											onclick="ShowObject('jQueryTabs1', 1);return false;"><div
												id="Shape361">
												<div id="Shape361_text">
													<span
														style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 11px;">RESTORE</span>
												</div>
											</div></a>
									</div>
									<div id="wb_Text1513"
										style="position: absolute; left: 196px; top: 312px; width: 311px; height: 30px; z-index: 3463; text-align: left;">
										<span
											style="color: #808080; font-family: Arial; font-size: 12px;">Note:<br>Each
											new backup file will overwrite the previous one.
										</span>
									</div>
								</div>
							</div>
							<div id="jQueryTabs2"
								style="position: absolute; left: 11px; top: 6px; visibility: hidden; width: 1057px; height: 664px; z-index: 3605;">
								<ul>
									<li><a href="#jquerytabs2-page-0"><span>Desksite Statistics</span></a></li>
									<li><a href="#jquerytabs2-page-1"><span>Products Statistics</span></a></li>
									<li><a href="#jquerytabs2-page-2"><span>Active Products
												Statistics</span></a></li>
								</ul>
								<div style="height: 622px; overflow: auto; padding: 0;"
									id="jquerytabs2-page-0">
									<div id="wb_Image139"
										style="position: absolute; left: 108px; top: 69px; width: 30px; height: 30px; z-index: 3488;">
										<img src="<?php echo asset_url();?>images/Desksite-small.png"
											id="Image139" alt="">
									</div>
									<div id="wb_Text1515"
										style="position: absolute; left: 146px; top: 71px; width: 230px; height: 18px; z-index: 3489; text-align: left;">
										<span
											style="color: #292929; font-family: Georgia; font-size: 16px;">Desksite
											( website ) Statistics</span>
									</div>
									<div id="wb_Text1516"
										style="position: absolute; left: 146px; top: 434px; width: 60px; height: 15px; text-align: center; z-index: 3490;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>1650</strong></span>
									</div>
									<div id="wb_Text1518"
										style="position: absolute; left: 221px; top: 436px; width: 60px; height: 15px; text-align: center; z-index: 3491;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>500</strong></span>
									</div>
									<div id="wb_Text1521"
										style="position: absolute; left: 296px; top: 435px; width: 60px; height: 15px; text-align: center; z-index: 3492;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>3</strong></span>
									</div>
									<div id="Layer575"
										style="position: absolute; text-align: left; left: 104px; top: 223px; width: 769px; height: 200px; z-index: 3493;">
										<div id="Layer572"
											style="position: absolute; text-align: left; left: 518px; top: 47px; width: 173px; height: 28px; z-index: 3476;">
											<div id="wb_Text1544"
												style="position: absolute; left: 14px; top: 7px; width: 139px; height: 15px; text-align: center; z-index: 3464;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>15
														Jan 2016</strong></span>
											</div>
										</div>
										<div id="Layer571"
											style="position: absolute; text-align: left; left: 387px; top: 47px; width: 130px; height: 28px; z-index: 3477;">
											<div id="wb_Text1543"
												style="position: absolute; left: 3px; top: 7px; width: 123px; height: 15px; text-align: center; z-index: 3465;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Pune</strong></span>
											</div>
										</div>
										<div id="Layer570"
											style="position: absolute; text-align: left; left: 265px; top: 47px; width: 121px; height: 28px; z-index: 3478;">
											<div id="wb_Text1542"
												style="position: absolute; left: 33px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3466;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>India</strong></span>
											</div>
										</div>
										<div id="Layer573"
											style="position: absolute; text-align: left; left: 191px; top: 47px; width: 73px; height: 28px; z-index: 3479;">
											<div id="wb_Text1545"
												style="position: absolute; left: 3px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3467;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>1</strong></span>
											</div>
										</div>
										<div id="Layer569"
											style="position: absolute; text-align: left; left: 117px; top: 47px; width: 73px; height: 28px; z-index: 3480;">
											<div id="wb_Text1541"
												style="position: absolute; left: 3px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3468;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>2</strong></span>
											</div>
										</div>
										<div id="Layer568"
											style="position: absolute; text-align: left; left: 41px; top: 47px; width: 75px; height: 28px; z-index: 3481;">
											<div id="wb_Text1540"
												style="position: absolute; left: 5px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3469;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>3</strong></span>
											</div>
										</div>
										<div id="Layer567"
											style="position: absolute; text-align: left; left: 518px; top: 18px; width: 173px; height: 28px; z-index: 3482;">
											<div id="wb_Text1523"
												style="position: absolute; left: 14px; top: 7px; width: 139px; height: 15px; text-align: center; z-index: 3470;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Date</strong></span>
											</div>
										</div>
										<div id="Layer566"
											style="position: absolute; text-align: left; left: 387px; top: 18px; width: 130px; height: 28px; z-index: 3483;">
											<div id="wb_Text1522"
												style="position: absolute; left: 3px; top: 7px; width: 123px; height: 15px; text-align: center; z-index: 3471;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>City</strong></span>
											</div>
										</div>
										<div id="Layer565"
											style="position: absolute; text-align: left; left: 265px; top: 18px; width: 121px; height: 28px; z-index: 3484;">
											<div id="wb_Text1520"
												style="position: absolute; left: 33px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3472;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Country</strong></span>
											</div>
										</div>
										<div id="Layer574"
											style="position: absolute; text-align: left; left: 191px; top: 18px; width: 73px; height: 28px; z-index: 3485;">
											<div id="wb_Text1546"
												style="position: absolute; left: 3px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3473;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Share</strong></span>
											</div>
										</div>
										<div id="Layer560"
											style="position: absolute; text-align: left; left: 117px; top: 18px; width: 73px; height: 28px; z-index: 3486;">
											<div id="wb_Text1519"
												style="position: absolute; left: 3px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3474;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Likes</strong></span>
											</div>
										</div>
										<div id="Layer559"
											style="position: absolute; text-align: left; left: 41px; top: 18px; width: 75px; height: 28px; z-index: 3487;">
											<div id="wb_Text1517"
												style="position: absolute; left: 5px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3475;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Visitors</strong></span>
											</div>
										</div>
									</div>
									<select name="country" size="1" id="Combobox20"
										style="position: absolute; left: 145px; top: 186px; width: 243px; height: 25px; z-index: 3494;">
										<option selected value="Select">Sort according to the country</option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Aland Islands">Aland Islands</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antarctica">Antarctica</option>
										<option value="Antigua and Barbuda">Antigua and Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Aruba">Aruba</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Bouvet Island">Bouvet Island</option>
										<option value="Brazil">Brazil</option>
										<option value="British Indian Ocean Territory">British Indian
											Ocean Territory</option>
										<option value="Brunei Darussalam">Brunei Darussalam</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burundi">Burundi</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Cayman Islands">Cayman Islands</option>
										<option value="Central African Republic">Central African
											Republic</option>
										<option value="Chad">Chad</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Christmas Island">Christmas Island</option>
										<option value="Cocos (Keeling) Islands">Cocos (Keeling)
											Islands</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo">Congo</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Cote D'Ivoire">Cote D'Ivoire</option>
										<option value="Croatia">Croatia</option>
										<option value="Cuba">Cuba</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Falkland Islands">Falkland Islands</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="French Guiana">French Guiana</option>
										<option value="French Polynesia">French Polynesia</option>
										<option value="French Southern Territories">French Southern
											Territories</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Ghana">Ghana</option>
										<option value="Gibraltar">Gibraltar</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guadeloupe">Guadeloupe</option>
										<option value="Guam">Guam</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guinea">Guinea</option>
										<option value="Guinea-Bissau">Guinea-Bissau</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Heard Island and Mcdonald Islands">Heard Island
											and Mcdonald Islands</option>
										<option value="Vatican City">Vatican City</option>
										<option value="Honduras">Honduras</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="India">India</option>
										<option value="Indonesia">Indonesia</option>
										<option value="Iran">Iran</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland">Ireland</option>
										<option value="Israel">Israel</option>
										<option value="Italy">Italy</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="South Korea">South Korea</option>
										<option value="North Korea">North Korea</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Laos">Laos</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libya">Libya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macao">Macao</option>
										<option value="Macedonia">Macedonia</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malawi">Malawi</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall Islands">Marshall Islands</option>
										<option value="Martinique">Martinique</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mayotte">Mayotte</option>
										<option value="Mexico">Mexico</option>
										<option value="Micronesia">Micronesia</option>
										<option value="Moldova">Moldova</option>
										<option value="Monaco">Monaco</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montserrat">Montserrat</option>
										<option value="Morocco">Morocco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Myanmar">Myanmar</option>
										<option value="Namibia">Namibia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherlands">Netherlands</option>
										<option value="Netherlands Antilles">Netherlands Antilles</option>
										<option value="New Caledonia">New Caledonia</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nicaragua">Nicaragua</option>
										<option value="Niger">Niger</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Niue">Niue</option>
										<option value="Norfolk Island">Norfolk Island</option>
										<option value="Northern Mariana Islands">Northern Mariana
											Islands</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau">Palau</option>
										<option value="Palestinian Territory">Palestinian Territory</option>
										<option value="Panama">Panama</option>
										<option value="Papua New Guinea">Papua New Guinea</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Philippines">Philippines</option>
										<option value="Pitcairn">Pitcairn</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Puerto Rico">Puerto Rico</option>
										<option value="Qatar">Qatar</option>
										<option value="Reunion">Reunion</option>
										<option value="Romania">Romania</option>
										<option value="Russian Federation">Russian Federation</option>
										<option value="Rwanda">Rwanda</option>
										<option value="Saint Helena">Saint Helena</option>
										<option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
										<option value="Saint Lucia">Saint Lucia</option>
										<option value="Saint Pierre and Miquelon">Saint Pierre and
											Miquelon</option>
										<option value="Saint Vincent and The Grenadines">Saint Vincent
											and The Grenadines</option>
										<option value="Samoa">Samoa</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome and Principe">Sao Tome and Principe</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Serbia and Montenegro">Serbia and Montenegro</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra Leone">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovakia">Slovakia</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syrian Arab Republic">Syrian Arab Republic</option>
										<option value="Taiwan">Taiwan</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania">Tanzania</option>
										<option value="Thailand">Thailand</option>
										<option value="Timor-Leste">Timor-Leste</option>
										<option value="Togo">Togo</option>
										<option value="Tokelau">Tokelau</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad and Tobago">Trinidad and Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Turks and Caicos Islands">Turks and Caicos
											Islands</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Emirates">United Arab Emirates</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="United States">United States</option>
										<option value="Uruguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Vietnam">Vietnam</option>
										<option value="Virgin Islands">Virgin Islands</option>
										<option value="Wallis and Futuna">Wallis and Futuna</option>
										<option value="Western Sahara">Western Sahara</option>
										<option value="Yemen">Yemen</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
									</select> <input type="date" id="Editbox65"
										style="position: absolute; left: 492px; top: 188px; width: 114px; height: 19px; line-height: 19px; z-index: 3495;"
										name="Editbox65" value="">
									<div id="wb_Text1547"
										style="position: absolute; left: 407px; top: 190px; width: 91px; height: 16px; z-index: 3496; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Period
											From</span>
									</div>
									<input type="date" id="Editbox66"
										style="position: absolute; left: 638px; top: 188px; width: 114px; height: 19px; line-height: 19px; z-index: 3497;"
										name="Editbox65" value="">
									<div id="wb_Text1548"
										style="position: absolute; left: 614px; top: 190px; width: 27px; height: 16px; z-index: 3498; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;">To</span>
									</div>
									<input type="button" id="Button7"
										onclick="searchPage();return false;" name="Search" value=""
										style="position: absolute; left: 760px; top: 188px; width: 32px; height: 22px; z-index: 3499;">
									<div id="wb_Text1549"
										style="position: absolute; left: 639px; top: 554px; width: 60px; height: 15px; text-align: center; z-index: 3500;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Page&nbsp;&nbsp;&nbsp;
										</strong></span><span
											style="color: #2688E4; font-family: Arial; font-size: 12px;"><strong><u>1</u></strong></span>
									</div>
									<div id="wb_Text1550"
										style="position: absolute; left: 699px; top: 555px; width: 19px; height: 15px; text-align: center; z-index: 3501;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>2</strong></span>
									</div>
									<div id="wb_Text1551"
										style="position: absolute; left: 720px; top: 555px; width: 19px; height: 15px; text-align: center; z-index: 3502;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>3</strong></span>
									</div>
									<div id="wb_Text1514"
										style="position: absolute; left: 147px; top: 97px; width: 263px; height: 16px; z-index: 3503; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Reported
											from 1 Jan 2016&nbsp;&nbsp; to&nbsp;&nbsp; 1 July 2016</span>
									</div>
									<button id="AdvancedButton77"
										onclick="ShowObjectWithEffect('jQueryTabs2', 0, 'fade', 500, 'easeInBounce');ShowObjectWithEffect('jQueryTabs1', 1, 'fade', 500, 'easeInBounce');return false;"
										type="button"
										style="position: absolute; left: 1022px; top: 43px; width: 35px; height: 35px; z-index: 3504;"
										onclick="window.location=''" name="" value="">
										<div style="text-align: center">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 20px">X</span>
										</div>
									</button>
								</div>
								<div style="height: 622px; overflow: auto; padding: 0;"
									id="jquerytabs2-page-1">
									<div id="wb_Image141"
										style="position: absolute; left: 102px; top: 66px; width: 36px; height: 36px; z-index: 3537;">
										<img src="<?php echo asset_url();?>images/products.png"
											id="Image141" alt="">
									</div>
									<div id="Layer561"
										style="position: absolute; text-align: left; left: 145px; top: 225px; width: 862px; height: 200px; z-index: 3538;">
										<div id="Layer562"
											style="position: absolute; text-align: left; left: 625px; top: 47px; width: 173px; height: 28px; z-index: 3520;">
											<div id="wb_Text1524"
												style="position: absolute; left: 14px; top: 7px; width: 139px; height: 15px; text-align: center; z-index: 3505;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>15
														Jan 2016</strong></span>
											</div>
										</div>
										<div id="Layer576"
											style="position: absolute; text-align: left; left: 494px; top: 47px; width: 130px; height: 28px; z-index: 3521;">
											<div id="wb_Text1525"
												style="position: absolute; left: 3px; top: 7px; width: 123px; height: 15px; text-align: center; z-index: 3506;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Pune</strong></span>
											</div>
										</div>
										<div id="Layer577"
											style="position: absolute; text-align: left; left: 372px; top: 47px; width: 121px; height: 28px; z-index: 3522;">
											<div id="wb_Text1526"
												style="position: absolute; left: 33px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3507;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>India</strong></span>
											</div>
										</div>
										<div id="Layer578"
											style="position: absolute; text-align: left; left: 298px; top: 47px; width: 73px; height: 28px; z-index: 3523;">
											<div id="wb_Text1527"
												style="position: absolute; left: 3px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3508;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>1</strong></span>
											</div>
										</div>
										<div id="Layer579"
											style="position: absolute; text-align: left; left: 224px; top: 47px; width: 73px; height: 28px; z-index: 3524;">
											<div id="wb_Text1528"
												style="position: absolute; left: 3px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3509;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>5</strong></span>
											</div>
										</div>
										<div id="Layer580"
											style="position: absolute; text-align: left; left: 148px; top: 47px; width: 75px; height: 28px; z-index: 3525;">
											<div id="wb_Text1529"
												style="position: absolute; left: 5px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3510;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>20</strong></span>
											</div>
										</div>
										<div id="Layer581"
											style="position: absolute; text-align: left; left: 625px; top: 18px; width: 173px; height: 28px; z-index: 3526;">
											<div id="wb_Text1530"
												style="position: absolute; left: 14px; top: 7px; width: 139px; height: 15px; text-align: center; z-index: 3511;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Date</strong></span>
											</div>
										</div>
										<div id="Layer582"
											style="position: absolute; text-align: left; left: 494px; top: 18px; width: 130px; height: 28px; z-index: 3527;">
											<div id="wb_Text1552"
												style="position: absolute; left: 3px; top: 7px; width: 123px; height: 15px; text-align: center; z-index: 3512;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>City</strong></span>
											</div>
										</div>
										<div id="Layer583"
											style="position: absolute; text-align: left; left: 372px; top: 18px; width: 121px; height: 28px; z-index: 3528;">
											<div id="wb_Text1553"
												style="position: absolute; left: 33px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3513;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Country</strong></span>
											</div>
										</div>
										<div id="Layer584"
											style="position: absolute; text-align: left; left: 298px; top: 18px; width: 73px; height: 28px; z-index: 3529;">
											<div id="wb_Text1554"
												style="position: absolute; left: 3px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3514;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Share</strong></span>
											</div>
										</div>
										<div id="Layer585"
											style="position: absolute; text-align: left; left: 224px; top: 18px; width: 73px; height: 28px; z-index: 3530;">
											<div id="wb_Text1555"
												style="position: absolute; left: 3px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3515;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Likes</strong></span>
											</div>
										</div>
										<div id="Layer586"
											style="position: absolute; text-align: left; left: 148px; top: 18px; width: 75px; height: 28px; z-index: 3531;">
											<div id="wb_Text1556"
												style="position: absolute; left: 5px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3516;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Views</strong></span>
											</div>
										</div>
										<div id="Layer587"
											style="position: absolute; text-align: left; left: 49px; top: 47px; width: 98px; height: 28px; z-index: 3532;">
											<div id="wb_Text1567"
												style="position: absolute; left: 14px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3517;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Mh-1235</strong></span>
											</div>
										</div>
										<div id="Layer588"
											style="position: absolute; text-align: left; left: 49px; top: 18px; width: 98px; height: 28px; z-index: 3533;">
											<div id="wb_Text1568"
												style="position: absolute; left: 9px; top: 7px; width: 79px; height: 15px; text-align: center; z-index: 3518;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Product
														No</strong></span>
											</div>
										</div>
										<div id="Layer563"
											style="position: absolute; text-align: left; left: 9px; top: 47px; width: 46px; height: 28px; z-index: 3534;">
											<div id="wb_Text1531"
												style="position: absolute; left: 14px; top: 7px; width: 19px; height: 15px; text-align: center; z-index: 3519;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>1</strong></span>
											</div>
										</div>
										<div id="Layer564"
											style="position: absolute; text-align: left; left: 9px; top: 18px; width: 46px; height: 28px; z-index: 3535;">
										</div>
										<div id="wb_Text1532"
											style="position: absolute; left: 19px; top: 26px; width: 25px; height: 30px; text-align: center; z-index: 3536;">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>S.
													N</strong></span>
										</div>
									</div>
									<div id="wb_Text1569"
										style="position: absolute; left: 397px; top: 435px; width: 60px; height: 15px; text-align: center; z-index: 3539;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>3</strong></span>
									</div>
									<div id="wb_Text1564"
										style="position: absolute; left: 149px; top: 435px; width: 60px; height: 15px; text-align: center; z-index: 3540;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>55</strong></span>
									</div>
									<div id="wb_Text1563"
										style="position: absolute; left: 245px; top: 436px; width: 60px; height: 15px; text-align: center; z-index: 3541;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>500</strong></span>
									</div>
									<div id="wb_Text1562"
										style="position: absolute; left: 320px; top: 435px; width: 60px; height: 15px; text-align: center; z-index: 3542;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>350</strong></span>
									</div>
									<input type="text" id="Editbox67"
										style="position: absolute; left: 434px; top: 188px; width: 312px; height: 19px; line-height: 19px; z-index: 3543;"
										name="Editbox65" value=""
										placeholder="Type product name or no. to view statistics"> <input
										type="button" id="Button18"
										onclick="searchPage();return false;" name="Search" value=""
										style="position: absolute; left: 759px; top: 188px; width: 32px; height: 22px; z-index: 3544;">
									<div id="wb_Text1565"
										style="position: absolute; left: 154px; top: 98px; width: 263px; height: 16px; z-index: 3545; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Reported
											from 1 Jan 2016&nbsp;&nbsp; to&nbsp;&nbsp; 1 July 2016</span>
									</div>
									<div id="wb_Text1566"
										style="position: absolute; left: 154px; top: 74px; width: 230px; height: 18px; z-index: 3546; text-align: left;">
										<span
											style="color: #292929; font-family: Georgia; font-size: 16px;">Products
											Statistics</span>
									</div>
									<div id="wb_Text1559"
										style="position: absolute; left: 805px; top: 574px; width: 60px; height: 15px; text-align: center; z-index: 3547;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Page&nbsp;&nbsp;&nbsp;
										</strong></span><span
											style="color: #2688E4; font-family: Arial; font-size: 12px;"><strong><u>1</u></strong></span>
									</div>
									<div id="wb_Text1560"
										style="position: absolute; left: 865px; top: 575px; width: 19px; height: 15px; text-align: center; z-index: 3548;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>2</strong></span>
									</div>
									<div id="wb_Text1561"
										style="position: absolute; left: 886px; top: 575px; width: 19px; height: 15px; text-align: center; z-index: 3549;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>3</strong></span>
									</div>
									<div id="wb_Text1586"
										style="position: absolute; left: 155px; top: 151px; width: 91px; height: 16px; z-index: 3550; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Period
											From</span>
									</div>
									<input type="date" id="Editbox69"
										style="position: absolute; left: 240px; top: 149px; width: 138px; height: 19px; line-height: 19px; z-index: 3551;"
										name="Editbox65" value="">
									<div id="wb_Text1587"
										style="position: absolute; left: 388px; top: 151px; width: 27px; height: 16px; z-index: 3552; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;">To</span>
									</div>
									<input type="date" id="Editbox70"
										style="position: absolute; left: 416px; top: 149px; width: 153px; height: 19px; line-height: 19px; z-index: 3553;"
										name="Editbox65" value=""> <select name="country" size="1"
										id="Combobox23"
										style="position: absolute; left: 154px; top: 186px; width: 243px; height: 25px; z-index: 3554;">
										<option selected value="Select">Sort according to the country</option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Aland Islands">Aland Islands</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antarctica">Antarctica</option>
										<option value="Antigua and Barbuda">Antigua and Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Aruba">Aruba</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Bouvet Island">Bouvet Island</option>
										<option value="Brazil">Brazil</option>
										<option value="British Indian Ocean Territory">British Indian
											Ocean Territory</option>
										<option value="Brunei Darussalam">Brunei Darussalam</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burundi">Burundi</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Cayman Islands">Cayman Islands</option>
										<option value="Central African Republic">Central African
											Republic</option>
										<option value="Chad">Chad</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Christmas Island">Christmas Island</option>
										<option value="Cocos (Keeling) Islands">Cocos (Keeling)
											Islands</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo">Congo</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Cote D'Ivoire">Cote D'Ivoire</option>
										<option value="Croatia">Croatia</option>
										<option value="Cuba">Cuba</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Falkland Islands">Falkland Islands</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="French Guiana">French Guiana</option>
										<option value="French Polynesia">French Polynesia</option>
										<option value="French Southern Territories">French Southern
											Territories</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Ghana">Ghana</option>
										<option value="Gibraltar">Gibraltar</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guadeloupe">Guadeloupe</option>
										<option value="Guam">Guam</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guinea">Guinea</option>
										<option value="Guinea-Bissau">Guinea-Bissau</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Heard Island and Mcdonald Islands">Heard Island
											and Mcdonald Islands</option>
										<option value="Vatican City">Vatican City</option>
										<option value="Honduras">Honduras</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="India">India</option>
										<option value="Indonesia">Indonesia</option>
										<option value="Iran">Iran</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland">Ireland</option>
										<option value="Israel">Israel</option>
										<option value="Italy">Italy</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="South Korea">South Korea</option>
										<option value="North Korea">North Korea</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Laos">Laos</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libya">Libya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macao">Macao</option>
										<option value="Macedonia">Macedonia</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malawi">Malawi</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall Islands">Marshall Islands</option>
										<option value="Martinique">Martinique</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mayotte">Mayotte</option>
										<option value="Mexico">Mexico</option>
										<option value="Micronesia">Micronesia</option>
										<option value="Moldova">Moldova</option>
										<option value="Monaco">Monaco</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montserrat">Montserrat</option>
										<option value="Morocco">Morocco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Myanmar">Myanmar</option>
										<option value="Namibia">Namibia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherlands">Netherlands</option>
										<option value="Netherlands Antilles">Netherlands Antilles</option>
										<option value="New Caledonia">New Caledonia</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nicaragua">Nicaragua</option>
										<option value="Niger">Niger</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Niue">Niue</option>
										<option value="Norfolk Island">Norfolk Island</option>
										<option value="Northern Mariana Islands">Northern Mariana
											Islands</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau">Palau</option>
										<option value="Palestinian Territory">Palestinian Territory</option>
										<option value="Panama">Panama</option>
										<option value="Papua New Guinea">Papua New Guinea</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Philippines">Philippines</option>
										<option value="Pitcairn">Pitcairn</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Puerto Rico">Puerto Rico</option>
										<option value="Qatar">Qatar</option>
										<option value="Reunion">Reunion</option>
										<option value="Romania">Romania</option>
										<option value="Russian Federation">Russian Federation</option>
										<option value="Rwanda">Rwanda</option>
										<option value="Saint Helena">Saint Helena</option>
										<option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
										<option value="Saint Lucia">Saint Lucia</option>
										<option value="Saint Pierre and Miquelon">Saint Pierre and
											Miquelon</option>
										<option value="Saint Vincent and The Grenadines">Saint Vincent
											and The Grenadines</option>
										<option value="Samoa">Samoa</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome and Principe">Sao Tome and Principe</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Serbia and Montenegro">Serbia and Montenegro</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra Leone">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovakia">Slovakia</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syrian Arab Republic">Syrian Arab Republic</option>
										<option value="Taiwan">Taiwan</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania">Tanzania</option>
										<option value="Thailand">Thailand</option>
										<option value="Timor-Leste">Timor-Leste</option>
										<option value="Togo">Togo</option>
										<option value="Tokelau">Tokelau</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad and Tobago">Trinidad and Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Turks and Caicos Islands">Turks and Caicos
											Islands</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Emirates">United Arab Emirates</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="United States">United States</option>
										<option value="Uruguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Vietnam">Vietnam</option>
										<option value="Virgin Islands">Virgin Islands</option>
										<option value="Wallis and Futuna">Wallis and Futuna</option>
										<option value="Western Sahara">Western Sahara</option>
										<option value="Yemen">Yemen</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
									</select>
									<button id="AdvancedButton73"
										onclick="ShowObjectWithEffect('jQueryTabs2', 0, 'fade', 500, 'easeInBounce');ShowObjectWithEffect('jQueryTabs1', 1, 'fade', 500, 'easeInBounce');return false;"
										type="button"
										style="position: absolute; left: 1022px; top: 43px; width: 35px; height: 35px; z-index: 3555;"
										onclick="window.location=''" name="" value="">
										<div style="text-align: center">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 20px">X</span>
										</div>
									</button>
								</div>
								<div style="height: 622px; overflow: auto; padding: 0;"
									id="jquerytabs2-page-2">
									<div id="wb_Image140"
										style="position: absolute; left: 102px; top: 66px; width: 36px; height: 36px; z-index: 3588;">
										<img src="<?php echo asset_url();?>images/img2078.png"
											id="Image140" alt="">
									</div>
									<div id="wb_Text1533"
										style="position: absolute; left: 154px; top: 74px; width: 230px; height: 18px; z-index: 3589; text-align: left;">
										<span
											style="color: #292929; font-family: Georgia; font-size: 16px;">Active
											Products Statistics</span>
									</div>
									<div id="wb_Text1534"
										style="position: absolute; left: 154px; top: 128px; width: 263px; height: 32px; z-index: 3590; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Reported
											Each 3 Months&nbsp; <br>from 1 Jan 2016&nbsp;&nbsp;
											to&nbsp;&nbsp; 1 March 2016
										</span>
									</div>
									<select name="country" size="1" id="Combobox21"
										style="position: absolute; left: 151px; top: 186px; width: 243px; height: 25px; z-index: 3591;">
										<option selected value="Select">Sort according to the country</option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Aland Islands">Aland Islands</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antarctica">Antarctica</option>
										<option value="Antigua and Barbuda">Antigua and Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Aruba">Aruba</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Bouvet Island">Bouvet Island</option>
										<option value="Brazil">Brazil</option>
										<option value="British Indian Ocean Territory">British Indian
											Ocean Territory</option>
										<option value="Brunei Darussalam">Brunei Darussalam</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burundi">Burundi</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Cayman Islands">Cayman Islands</option>
										<option value="Central African Republic">Central African
											Republic</option>
										<option value="Chad">Chad</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Christmas Island">Christmas Island</option>
										<option value="Cocos (Keeling) Islands">Cocos (Keeling)
											Islands</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo">Congo</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Cote D'Ivoire">Cote D'Ivoire</option>
										<option value="Croatia">Croatia</option>
										<option value="Cuba">Cuba</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Falkland Islands">Falkland Islands</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="French Guiana">French Guiana</option>
										<option value="French Polynesia">French Polynesia</option>
										<option value="French Southern Territories">French Southern
											Territories</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Ghana">Ghana</option>
										<option value="Gibraltar">Gibraltar</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guadeloupe">Guadeloupe</option>
										<option value="Guam">Guam</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guinea">Guinea</option>
										<option value="Guinea-Bissau">Guinea-Bissau</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Heard Island and Mcdonald Islands">Heard Island
											and Mcdonald Islands</option>
										<option value="Vatican City">Vatican City</option>
										<option value="Honduras">Honduras</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="India">India</option>
										<option value="Indonesia">Indonesia</option>
										<option value="Iran">Iran</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland">Ireland</option>
										<option value="Israel">Israel</option>
										<option value="Italy">Italy</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="South Korea">South Korea</option>
										<option value="North Korea">North Korea</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Laos">Laos</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libya">Libya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macao">Macao</option>
										<option value="Macedonia">Macedonia</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malawi">Malawi</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall Islands">Marshall Islands</option>
										<option value="Martinique">Martinique</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mayotte">Mayotte</option>
										<option value="Mexico">Mexico</option>
										<option value="Micronesia">Micronesia</option>
										<option value="Moldova">Moldova</option>
										<option value="Monaco">Monaco</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montserrat">Montserrat</option>
										<option value="Morocco">Morocco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Myanmar">Myanmar</option>
										<option value="Namibia">Namibia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherlands">Netherlands</option>
										<option value="Netherlands Antilles">Netherlands Antilles</option>
										<option value="New Caledonia">New Caledonia</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nicaragua">Nicaragua</option>
										<option value="Niger">Niger</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Niue">Niue</option>
										<option value="Norfolk Island">Norfolk Island</option>
										<option value="Northern Mariana Islands">Northern Mariana
											Islands</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau">Palau</option>
										<option value="Palestinian Territory">Palestinian Territory</option>
										<option value="Panama">Panama</option>
										<option value="Papua New Guinea">Papua New Guinea</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Philippines">Philippines</option>
										<option value="Pitcairn">Pitcairn</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Puerto Rico">Puerto Rico</option>
										<option value="Qatar">Qatar</option>
										<option value="Reunion">Reunion</option>
										<option value="Romania">Romania</option>
										<option value="Russian Federation">Russian Federation</option>
										<option value="Rwanda">Rwanda</option>
										<option value="Saint Helena">Saint Helena</option>
										<option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
										<option value="Saint Lucia">Saint Lucia</option>
										<option value="Saint Pierre and Miquelon">Saint Pierre and
											Miquelon</option>
										<option value="Saint Vincent and The Grenadines">Saint Vincent
											and The Grenadines</option>
										<option value="Samoa">Samoa</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome and Principe">Sao Tome and Principe</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Serbia and Montenegro">Serbia and Montenegro</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra Leone">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovakia">Slovakia</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syrian Arab Republic">Syrian Arab Republic</option>
										<option value="Taiwan">Taiwan</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania">Tanzania</option>
										<option value="Thailand">Thailand</option>
										<option value="Timor-Leste">Timor-Leste</option>
										<option value="Togo">Togo</option>
										<option value="Tokelau">Tokelau</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad and Tobago">Trinidad and Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Turks and Caicos Islands">Turks and Caicos
											Islands</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Emirates">United Arab Emirates</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="United States">United States</option>
										<option value="Uruguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Vietnam">Vietnam</option>
										<option value="Virgin Islands">Virgin Islands</option>
										<option value="Wallis and Futuna">Wallis and Futuna</option>
										<option value="Western Sahara">Western Sahara</option>
										<option value="Yemen">Yemen</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>
									</select>
									<div id="Layer589"
										style="position: absolute; text-align: left; left: 145px; top: 225px; width: 862px; height: 200px; z-index: 3592;">
										<div id="Layer590"
											style="position: absolute; text-align: left; left: 625px; top: 47px; width: 173px; height: 28px; z-index: 3571;">
											<div id="wb_Text1535"
												style="position: absolute; left: 14px; top: 7px; width: 139px; height: 15px; text-align: center; z-index: 3556;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>15
														Jan 2016</strong></span>
											</div>
										</div>
										<div id="Layer591"
											style="position: absolute; text-align: left; left: 494px; top: 47px; width: 130px; height: 28px; z-index: 3572;">
											<div id="wb_Text1536"
												style="position: absolute; left: 3px; top: 7px; width: 123px; height: 15px; text-align: center; z-index: 3557;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Pune</strong></span>
											</div>
										</div>
										<div id="Layer592"
											style="position: absolute; text-align: left; left: 372px; top: 47px; width: 121px; height: 28px; z-index: 3573;">
											<div id="wb_Text1537"
												style="position: absolute; left: 33px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3558;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>India</strong></span>
											</div>
										</div>
										<div id="Layer593"
											style="position: absolute; text-align: left; left: 298px; top: 47px; width: 73px; height: 28px; z-index: 3574;">
											<div id="wb_Text1538"
												style="position: absolute; left: 3px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3559;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>1</strong></span>
											</div>
										</div>
										<div id="Layer594"
											style="position: absolute; text-align: left; left: 224px; top: 47px; width: 73px; height: 28px; z-index: 3575;">
											<div id="wb_Text1539"
												style="position: absolute; left: 3px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3560;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>5</strong></span>
											</div>
										</div>
										<div id="Layer595"
											style="position: absolute; text-align: left; left: 148px; top: 47px; width: 75px; height: 28px; z-index: 3576;">
											<div id="wb_Text1557"
												style="position: absolute; left: 5px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3561;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>20</strong></span>
											</div>
										</div>
										<div id="Layer596"
											style="position: absolute; text-align: left; left: 625px; top: 18px; width: 173px; height: 28px; z-index: 3577;">
											<div id="wb_Text1558"
												style="position: absolute; left: 14px; top: 7px; width: 139px; height: 15px; text-align: center; z-index: 3562;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Date</strong></span>
											</div>
										</div>
										<div id="Layer597"
											style="position: absolute; text-align: left; left: 494px; top: 18px; width: 130px; height: 28px; z-index: 3578;">
											<div id="wb_Text1570"
												style="position: absolute; left: 3px; top: 7px; width: 123px; height: 15px; text-align: center; z-index: 3563;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>City</strong></span>
											</div>
										</div>
										<div id="Layer598"
											style="position: absolute; text-align: left; left: 372px; top: 18px; width: 121px; height: 28px; z-index: 3579;">
											<div id="wb_Text1571"
												style="position: absolute; left: 33px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3564;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Country</strong></span>
											</div>
										</div>
										<div id="Layer599"
											style="position: absolute; text-align: left; left: 298px; top: 18px; width: 73px; height: 28px; z-index: 3580;">
											<div id="wb_Text1572"
												style="position: absolute; left: 3px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3565;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Share</strong></span>
											</div>
										</div>
										<div id="Layer600"
											style="position: absolute; text-align: left; left: 224px; top: 18px; width: 73px; height: 28px; z-index: 3581;">
											<div id="wb_Text1573"
												style="position: absolute; left: 3px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3566;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Likes</strong></span>
											</div>
										</div>
										<div id="Layer601"
											style="position: absolute; text-align: left; left: 148px; top: 18px; width: 75px; height: 28px; z-index: 3582;">
											<div id="wb_Text1574"
												style="position: absolute; left: 5px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3567;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Views</strong></span>
											</div>
										</div>
										<div id="Layer602"
											style="position: absolute; text-align: left; left: 49px; top: 47px; width: 98px; height: 28px; z-index: 3583;">
											<div id="wb_Text1575"
												style="position: absolute; left: 14px; top: 7px; width: 60px; height: 15px; text-align: center; z-index: 3568;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Mh-1235</strong></span>
											</div>
										</div>
										<div id="Layer603"
											style="position: absolute; text-align: left; left: 49px; top: 18px; width: 98px; height: 28px; z-index: 3584;">
											<div id="wb_Text1576"
												style="position: absolute; left: 9px; top: 7px; width: 79px; height: 15px; text-align: center; z-index: 3569;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Product
														No</strong></span>
											</div>
										</div>
										<div id="Layer604"
											style="position: absolute; text-align: left; left: 9px; top: 47px; width: 46px; height: 28px; z-index: 3585;">
											<div id="wb_Text1577"
												style="position: absolute; left: 14px; top: 7px; width: 19px; height: 15px; text-align: center; z-index: 3570;">
												<span
													style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>1</strong></span>
											</div>
										</div>
										<div id="Layer605"
											style="position: absolute; text-align: left; left: 9px; top: 18px; width: 46px; height: 28px; z-index: 3586;">
										</div>
										<div id="wb_Text1578"
											style="position: absolute; left: 19px; top: 26px; width: 25px; height: 30px; text-align: center; z-index: 3587;">
											<span
												style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>S.
													N</strong></span>
										</div>
									</div>
									<div id="wb_Text1579"
										style="position: absolute; left: 149px; top: 435px; width: 60px; height: 15px; text-align: center; z-index: 3593;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>55</strong></span>
									</div>
									<div id="wb_Text1580"
										style="position: absolute; left: 245px; top: 436px; width: 60px; height: 15px; text-align: center; z-index: 3594;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>500</strong></span>
									</div>
									<div id="wb_Text1581"
										style="position: absolute; left: 320px; top: 435px; width: 60px; height: 15px; text-align: center; z-index: 3595;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>350</strong></span>
									</div>
									<div id="wb_Text1582"
										style="position: absolute; left: 397px; top: 435px; width: 60px; height: 15px; text-align: center; z-index: 3596;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>3</strong></span>
									</div>
									<div id="wb_Text1583"
										style="position: absolute; left: 805px; top: 574px; width: 60px; height: 15px; text-align: center; z-index: 3597;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>Page&nbsp;&nbsp;&nbsp;
										</strong></span><span
											style="color: #2688E4; font-family: Arial; font-size: 12px;"><strong><u>1</u></strong></span>
									</div>
									<div id="wb_Text1584"
										style="position: absolute; left: 865px; top: 575px; width: 19px; height: 15px; text-align: center; z-index: 3598;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>2</strong></span>
									</div>
									<div id="wb_Text1585"
										style="position: absolute; left: 886px; top: 575px; width: 19px; height: 15px; text-align: center; z-index: 3599;">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><strong>3</strong></span>
									</div>
									<input type="button" id="Button19"
										onclick="searchPage();return false;" name="Search" value=""
										style="position: absolute; left: 694px; top: 188px; width: 32px; height: 22px; z-index: 3600;">
									<input type="text" id="Editbox68"
										style="position: absolute; left: 434px; top: 188px; width: 249px; height: 19px; line-height: 19px; z-index: 3601;"
										name="Editbox65" value=""
										placeholder="Sort by product name or no.">
									<button id="AdvancedButton78"
										onclick="ShowObjectWithEffect('jQueryTabs2', 0, 'fade', 500, 'easeInBounce');ShowObjectWithEffect('jQueryTabs1', 1, 'fade', 500, 'easeInBounce');return false;"
										type="button"
										style="position: absolute; left: 1022px; top: 43px; width: 35px; height: 35px; z-index: 3602;"
										onclick="window.location=''" name="" value="">
										<div style="text-align: center">
											<span
												style="color: #FFFFFF; font-family: Arial; font-size: 20px">X</span>
										</div>
									</button>
									<div id="wb_Text1588"
										style="position: absolute; left: 154px; top: 98px; width: 461px; height: 16px; z-index: 3603; text-align: left;">
										<span
											style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Active
											products are the most liked products by the Visitors and
											Buyers </span>
									</div>
								</div>
							</div>
							<button id="AdvancedButton74"
								onclick="ShowObjectWithEffect('Layer528', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');return false;"
								type="button"
								style="position: absolute; left: 1048px; top: 4px; width: 35px; height: 33px; z-index: 3606;"
								onclick="window.location=''" name="" value="">
								<div style="text-align: center">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 20px">X</span>
								</div>
							</button>
						</div>
					</div>
					<div id="wb_Text1462"
						style="position: absolute; left: 41px; top: 126px; width: 99px; height: 16px; text-align: center; z-index: 3612;">
						<span style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Tools</span>
					</div>
					<div id="RollOver12"
						style="position: absolute; left: 70px; top: 68px; overflow: hidden; width: 45px; height: 45px; z-index: 3613">
						<a href=""> <img class="hover" alt=""
							src="<?php echo asset_url();?>images/configure-2.png">

						</a>
					</div>
				</div>
			</div>
			<div id="Layer97"
				style="position: fixed; text-align: center; left: 0; top: 0; right: 0; bottom: 0; z-index: 3733;<?php if(empty($this->session->userdata('mystation_popup'))){?>display:none;<?php }?>">
				<?php 
			if(!empty($this->session->userdata('mystation_popup'))){
				$this->session->set_userdata('mystation_popup',0);
			}
			?>
				<div id="Layer97_Container"
					style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="Layer197"
						style="position: absolute; text-align: center; left: 29%; top: 37px; width: 43%; height: 575px; z-index: 3619;">
						<div id="Layer197_Container"
							style="width: 554px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
						</div>
					</div>
					<div id="wb_Form2"
						style="position: absolute; left: 381px; top: 48px; width: 525px; height: 549px; z-index: 3620;">
						<form name="Offer_for_you_post_in_RT_Business" method="post"
							action="" enctype="multipart/form-data" id="Form2">
							<div id="wb_Text239"
								style="position: absolute; left: 72px; top: 30px; width: 386px; height: 46px; text-align: center; z-index: 3614;">
								<span
									style="color: #3C3C3C; font-family: Arial; font-size: 20px;">Congrats
									<?php echo $this->session->userdata('tsuser')['name'];?><br>Your Station Has Been Built Successfully..
								</span>
							</div>
							<div id="wb_Text240"
								style="position: absolute; left: 59px; top: 346px; width: 412px; height: 118px; text-align: center; z-index: 3615;">
								<span
									style="color: #3C3C3C; font-family: Arial; font-size: 13px;">Now
									you can start our &quot;step by step&quot; site builder to
									create your own Desksite &quot; The new vision of ecommerce
									websites&quot;..<br>
								<br>
								</span><span
									style="color: #3C3C3C; font-family: Arial; font-size: 17px;">Are
									you ready..?</span><span
									style="color: #3C3C3C; font-family: Arial; font-size: 13px;"><br>Click
									get started and click on &quot;</span><span
									style="color: #1E90FF; font-family: Arial; font-size: 13px;"><strong>My
										Desksite&quot; </strong></span><span
									style="color: #3C3C3C; font-family: Arial; font-size: 13px;">to
									start your innovation..<br>
								<br>
								</span><span
									style="color: #3C3C3C; font-family: Arial; font-size: 17px;">GOOD
									LUCK</span>
							</div>
							<div id="wb_Shape256"
								style="position: absolute; left: 181px; top: 488px; width: 169px; height: 35px; z-index: 3616;">
								<a href="" onclick="ShowObjectWithEffect('Layer97', 0, 'fade', 500);return false;" class="btn btn-custom-orange ">
									Get Started
								</a>
							</div>
							<div id="wb_Text1675"
								style="position: absolute; left: 80px; top: 85px; width: 378px; height: 28px; text-align: center; z-index: 3617;">
								<span
									style="color: #2D2D2D; font-family: Arial; font-size: 11px;">&quot;
									The Station&quot; is a sophisticated control panel, helps you
									to build your Desksite&quot;website&quot;&nbsp; fast and step
									by step..</span>
							</div>
							<div id="wb_Image261"
								style="position: absolute; left: 172px; top: 142px; width: 210px; height: 176px; z-index: 3618;">
								<img
									src="<?php echo asset_url();?>images/boy-1300226_960_720.png"
									id="Image261" alt="">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="Layer169" class="mystation_layer169">
				<div id="Layer169_Container" class="mystation_layer169_container">
					
				</div>
			</div>
			<div id="Layer518" style="position: fixed; text-align: right; visibility: hidden; left: 0px; top: 0px; right: 0px; bottom: 0px; z-index: 3750; display: block;">
					<div id="Layer526" style="position:fixed;text-align:center;left:0;top:0;right:0;bottom:0;z-index:4361;">
						<div id="Layer526_Container" style="width:1280px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
						</div>
					</div>
					<div id="Layer518_Container" style="width:1280px;position:relative;text-align:center;margin:auto auto;z-index:4362;">
					<div id="Layer519" style="position:relative;text-align:left;top:250px;width:1032px;height:185px;z-index:3681;margin:auto auto;">
					<div id="Layer520" style="position:absolute;text-align:left;left:1px;top:1px;width:1029px;height:174px;z-index:3668;">
					<div id="" style="position:absolute;right: -15px;top: -15px;width:35px;height:35px;z-index:3682;">
						<a href="#" onclick="ShowObjectWithEffect('Layer518', 0, 'slidedown', 300, 'swing');return false;"><img src="<?php echo asset_url();?>images/closeround.png" id="Image264" alt=""></a>
					</div>
					<div id="wb_Text1430" style="position: relative;left: 281px;top: 42px;width:228px;height:15px;z-index:3680;text-align:left;">
					<span style="color:#4B4B4B;font-family:Arial;font-size:12px;">Presented By: Mr. Shipper Name</span></div>
					<div id="wb_Text1426" style="position:absolute;left:236px;top:132px;width:130px;height:16px;z-index:3665;text-align:left;">
					<span style="color:#303030;font-family:Georgia;font-size:13px;"><strong>Main services | </strong></span></div>
					<div id="wb_Text1427" style="position:absolute;left:282px;top:20px;width:351px;height:18px;z-index:3666;text-align:left;">
					<span style="color:#1E90FF;font-family:Georgia;font-size:15px;"><strong>Shipping Company Name Co. </strong></span></div>
					<div id="wb_Text1429" style="position:absolute;left:358px;top:132px;width:376px;height:15px;z-index:3667;text-align:left;">
					<span style="color:#4B4B4B;font-family:Arial;font-size:12px;">Air Freight, Sea Freight, Land Freight, Port Agensies.</span></div>
					</div>
					<div id="wb_Image144" style="position:absolute;left:233px;top:18px;width:40px;height:40px;z-index:3669;">
					<img src="<?php echo asset_url();?>images/login.jpg" id="Image144" alt=""></div>
					<div id="SlideShow1" style="position:absolute;left:2px;top:1px;width:208px;height:174px;z-index:3670;">
					<img class="image" src="<?php echo asset_url();?>images/shipping-a.jpg" alt="" title="" style="z-index: 0; position: absolute; top: 0px; left: 0px; display: none;">
					<img class="image" src="<?php echo asset_url();?>images/shipping-b.jpg" style="z-index: 1; position: absolute; top: 0px; left: 0px;" alt="" title="">
					</div>
					<div id="wb_Text1428" style="position:absolute;left:239px;top:69px;width:551px;height:45px;z-index:3671;text-align:left;">
					<span style="color:#696969;font-family:Arial;font-size:12px;">Shipping &amp; Services began its activities in 1998. Over the years, the transportation and logistics industry has evolved into an environment lead by single-source providers. To meet market demands, the shipping company has successfully combined a comprehensive logistics ...</span></div>
					<div id="wb_Image145" style="position:absolute;left:869px;top:52px;width:25px;height:25px;z-index:3672;">
					<img src="<?php echo asset_url();?>images/CommMember.png" id="Image145" alt="Member In My Community" title="Member In My Community"></div>
					<div id="wb_Image262" style="position:absolute;left:902px;top:53px;width:25px;height:25px;z-index:3673;">
					<img src="<?php echo asset_url();?>images/trusted.png" id="Image262" alt="" title="Verified Member"></div>
					<div id="wb_Image263" style="position:absolute;left:934px;top:53px;width:25px;height:25px;z-index:3674;">
					<img src="<?php echo asset_url();?>images/member-logo.png" id="Image263" alt="Black Horse Member" title="Black Horse Member"></div>
					<div id="wb_Text1421" style="position:absolute;left:833px;top:92px;width:96px;height:30px;z-index:3675;text-align:left;">
					<span style="color:#303030;font-family:Georgia;font-size:12px;"><strong>Shipper Type | </strong></span></div>
					<div id="wb_Text597" style="position:absolute;left:918px;top:92px;width:97px;height:15px;text-align:center;z-index:3676;">
					<span style="color:#808080;font-family:Georgia;font-size:12px;">Forwarder</span></div>
					<div id="wb_Text1423" style="position:absolute;left:914px;top:115px;width:86px;height:15px;z-index:3677;text-align:left;">
					<span style="color:#808080;font-family:Georgia;font-size:12px;">Guangzhou</span></div>
					<div id="wb_Text1422" style="position:absolute;left:863px;top:115px;width:76px;height:15px;z-index:3678;text-align:left;">
					<span style="color:#303030;font-family:Georgia;font-size:12px;"><strong>China | </strong></span></div>
					</div>
					</div>
				</div>
		</div>
	</div>
	<div id="Layer_catalogue"
		style="position: fixed; text-align: right; visibility: hidden; left: 0; top: 0; right: 0; bottom: 0; z-index: 12763;">
		<div id="Layer_catalogue_Container"
			style="width: 1280px; position: relative; margin-left: auto; margin-right: 0; text-align: left;">
			<div id="wb_Image100"
				style="position: absolute; left: 58px; top: 60px; width: 911px; height: 602px; z-index: 5964;">
				<img src="<?php echo asset_url();?>images/vcat_insider.png"
					id="Image100" alt="">
			</div>
			<div id="wb_Shape274"
				style="position: absolute; left: 538px; top: 178px; width: 303px; height: 268px; z-index: 5965;">
				<img src="<?php echo asset_url();?>images/img1636.png" id="Shape274"
					alt="" style="width: 303px; height: 268px;">
			</div>
			<div id="wb_Shape275"
				style="position: absolute; left: 537px; top: 451px; width: 150px; height: 115px; z-index: 5966;">
				<img src="<?php echo asset_url();?>images/img1637.png" id="Shape275"
					alt="" style="width: 150px; height: 115px;">
			</div>
			<div id="wb_Shape276"
				style="position: absolute; left: 692px; top: 451px; width: 150px; height: 115px; z-index: 5967;">
				<img src="<?php echo asset_url();?>images/img1638.png" id="Shape276"
					alt="" style="width: 150px; height: 115px;">
			</div>
			<div id="wb_Shape277"
				style="position: absolute; left: 179px; top: 298px; width: 303px; height: 268px; z-index: 5968;">
				<a href="./item_details.php" target="_blank"><img
					src="<?php echo asset_url();?>images/img1639.png" id="Shape277"
					alt="" style="width: 303px; height: 268px;"></a>
			</div>
			<div id="wb_Text526"
				style="position: absolute; left: 180px; top: 190px; width: 143px; height: 16px; z-index: 5969; text-align: left;">
				<span style="color: #303030; font-family: Georgia; font-size: 13px;"><strong><a
						href="./desk_details.php" target="_blank" class="style16">Fabric
							Sofa Set</a></strong></span>
			</div>
			<div id="wb_Text525"
				style="position: absolute; left: 179px; top: 210px; width: 222px; height: 57px; z-index: 5970; text-align: left;">
				<span style="color: #787878; font-family: Arial; font-size: 11px;">Brown
					classic shoes with good price,Brown classic shoes with good price,
					good price,Brown classic shoes with good price... <br>
				</span>
			</div>
			<div id="wb_Text529"
				style="position: absolute; left: 181px; top: 257px; width: 124px; height: 14px; z-index: 5971; text-align: left;">
				<span style="color: #1E90FF; font-family: Arial; font-size: 11px;">Min.
					Order: 1 Container</span>
			</div>
			<div id="wb_Text519"
				style="position: absolute; left: 180px; top: 287px; width: 295px; height: 19px; text-align: center; z-index: 5972;">
				<span
					style="background-color: #FF0000; color: #FFFFFF; font-family: Arial; font-size: 17px;">&nbsp;
					USD 1200.00 / Set&nbsp; </span>
			</div>
			<div id="wb_Image101"
				style="position: absolute; left: 895px; top: 80px; width: 40px; height: 40px; z-index: 5973;">
				<a href="#" onclick="ShowObject('Layer_catalogue', 0);return false;"><img
					src="<?php echo asset_url();?>images/closeround.png" id="Image101"
					alt=""></a>
			</div>
			<div id="wb_Text508"
				style="position: absolute; left: 437px; top: 572px; width: 62px; height: 23px; z-index: 5974; text-align: left;">
				<span style="color: #D3D3D3; font-family: Arial; font-size: 11px;">Page
				</span><span
					style="color: #FF6347; font-family: 'Arial Black'; font-size: 16px;">1</span><span
					style="color: #FF6347; font-family: Arial; font-size: 16px;"> </span>
			</div>
			<div id="wb_Text527"
				style="position: absolute; left: 539px; top: 571px; width: 64px; height: 23px; z-index: 5975; text-align: left;">
				<span style="color: #D3D3D3; font-family: Arial; font-size: 11px;">Page
				</span><span
					style="color: #FF6347; font-family: 'Arial Black'; font-size: 16px;">2</span><span
					style="color: #FF6347; font-family: Arial; font-size: 19px;"> </span>
			</div>
			<div id="wb_Shape279"
				style="position: absolute; left: 358px; top: 661px; width: 150px; height: 32px; z-index: 5976;">
				<a href=""
					onclick="ShowObject('Layer_catalogue', 0);ShowObject('Layer135', 0);ShowObject('Layer137', 1);ShowObject('Layer141', 0);return false;"><div
						id="Shape279">
						<div id="Shape279_text">
							<span
								style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Publish</span>
						</div>
					</div></a>
			</div>
			<div id="wb_Shape278"
				style="position: absolute; left: 511px; top: 661px; width: 150px; height: 32px; z-index: 5977;">
				<a href=""
					onclick="ShowObject('Layer_catalogue', 0);ShowObject('Layer135', 0);ShowObject('Layer137', 0);ShowObject('Layer141', 1);return false;"><div
						id="Shape278">
						<div id="Shape278_text">
							<span
								style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Edit</span>
						</div>
					</div></a>
			</div>
		</div>
	</div>
	<div id="Layer240"
		style="position: fixed; text-align: right; visibility: hidden; left: 0; top: 0; right: 0; bottom: 0; z-index: 12764;">
		<div id="Layer240_Container"
			style="width: 1280px; position: relative; margin-left: auto; margin-right: 0; text-align: left;">
			<div id="wb_Image176"
				style="position: absolute; left: 58px; top: 60px; width: 911px; height: 602px; z-index: 7323;">
				<img src="<?php echo asset_url();?>images/vcat_insider.png"
					id="Image176" alt="">
			</div>
			<div id="wb_Shape395"
				style="position: absolute; left: 538px; top: 178px; width: 303px; height: 268px; z-index: 7324;">
				<img src="<?php echo asset_url();?>images/img1779.png" id="Shape395"
					alt="" style="width: 303px; height: 268px;">
			</div>
			<div id="wb_Shape396"
				style="position: absolute; left: 537px; top: 451px; width: 150px; height: 115px; z-index: 7325;">
				<img src="<?php echo asset_url();?>images/img1780.png" id="Shape396"
					alt="" style="width: 150px; height: 115px;">
			</div>
			<div id="wb_Shape397"
				style="position: absolute; left: 692px; top: 451px; width: 150px; height: 115px; z-index: 7326;">
				<img src="<?php echo asset_url();?>images/img1781.png" id="Shape397"
					alt="" style="width: 150px; height: 115px;">
			</div>
			<div id="wb_Shape398"
				style="position: absolute; left: 179px; top: 298px; width: 303px; height: 268px; z-index: 7327;">
				<a href="./item_details.php" target="_blank"><img
					src="<?php echo asset_url();?>images/img1782.png" id="Shape398"
					alt="" style="width: 303px; height: 268px;"></a>
			</div>
			<div id="wb_Text839"
				style="position: absolute; left: 180px; top: 190px; width: 143px; height: 16px; z-index: 7328; text-align: left;">
				<span style="color: #303030; font-family: Georgia; font-size: 13px;"><strong><a
						href="./desk_details.php" target="_blank" class="style16">Fabric
							Sofa Set</a></strong></span>
			</div>
			<div id="wb_Text840"
				style="position: absolute; left: 179px; top: 210px; width: 222px; height: 57px; z-index: 7329; text-align: left;">
				<span style="color: #787878; font-family: Arial; font-size: 11px;">Brown
					classic shoes with good price,Brown classic shoes with good price,
					good price,Brown classic shoes with good price... <br>
				</span>
			</div>
			<div id="wb_Text841"
				style="position: absolute; left: 181px; top: 257px; width: 124px; height: 14px; z-index: 7330; text-align: left;">
				<span style="color: #1E90FF; font-family: Arial; font-size: 11px;">Min.
					Order: 1 Container</span>
			</div>
			<div id="wb_Text842"
				style="position: absolute; left: 180px; top: 287px; width: 295px; height: 19px; text-align: center; z-index: 7331;">
				<span
					style="background-color: #FF0000; color: #FFFFFF; font-family: Arial; font-size: 17px;">&nbsp;
					USD 1200.00 / Set&nbsp; </span>
			</div>
			<div id="wb_Image177"
				style="position: absolute; left: 895px; top: 80px; width: 40px; height: 40px; z-index: 7332;">
				<a href="#" onclick="ShowObject('Layer240', 0);return false;"><img
					src="<?php echo asset_url();?>images/closeround.png" id="Image177"
					alt=""></a>
			</div>
			<div id="wb_Text843"
				style="position: absolute; left: 437px; top: 572px; width: 62px; height: 23px; z-index: 7333; text-align: left;">
				<span style="color: #D3D3D3; font-family: Arial; font-size: 11px;">Page
				</span><span
					style="color: #FF6347; font-family: 'Arial Black'; font-size: 16px;">1</span><span
					style="color: #FF6347; font-family: Arial; font-size: 16px;"> </span>
			</div>
			<div id="wb_Text844"
				style="position: absolute; left: 539px; top: 571px; width: 64px; height: 23px; z-index: 7334; text-align: left;">
				<span style="color: #D3D3D3; font-family: Arial; font-size: 11px;">Page
				</span><span
					style="color: #FF6347; font-family: 'Arial Black'; font-size: 16px;">2</span><span
					style="color: #FF6347; font-family: Arial; font-size: 19px;"> </span>
			</div>
		</div>
	</div>
	<div id="Layer268"
		style="position: fixed; text-align: left; visibility: hidden; left: 0; top: 0; right: 0; bottom: 0; z-index: 12765;">
		<div id="Layer269"
			style="position: fixed; text-align: center; left: 0; top: 0; right: 0; bottom: 0; z-index: 7989;">
			<div id="Layer269_Container"
				style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
			</div>
		</div>
		<div id="Layer270"
			style="position: absolute; text-align: left; visibility: hidden; left: 0px; top: 0px; width: 626px; height: 775px; z-index: 7990;">
			<div id="wb_PasswordRecovery2"
				style="position: absolute; left: 121px; top: 190px; width: 401px; height: 129px; z-index: 7974;">
				<form name="forgotpasswordform" method="post"
					action="<?php echo basename(__FILE__); ?>" id="forgotpasswordform">
					<input type="hidden" name="form_name" value="forgotpasswordform">
					<table id="PasswordRecovery2">
						<tr>
							<td class="PasswordRecovery2_header" colspan="2"
								style="height: 17px;">Forgot your password?</td>
						</tr>
						<tr>
							<td style="height: 37px; width: 60px">Email</td>
							<td style="text-align: left"><input
								class="PasswordRecovery2_input" name="email" type="text"
								id="email"></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td style="text-align: left; vertical-align: bottom"><input
								class="PasswordRecovery2_button" type="submit" name="submit"
								value="Submit" id="submit"></td>
						</tr>
					</table>
				</form>
			</div>
			<div id="wb_Text1001"
				style="position: absolute; left: 226px; top: 177px; width: 230px; height: 16px; z-index: 7975; text-align: left;">
				<span style="color: #3C3C3C; font-family: Georgia; font-size: 21px;">Retrieve
					your password</span>
			</div>
			<div id="wb_Text1002"
				style="position: absolute; left: 304px; top: 524px; width: 72px; height: 16px; text-align: center; z-index: 7976;">
				<span style="color: #FA5C43; font-family: Arial; font-size: 11px;">TRADE</span>
			</div>
			<div id="wb_Text1003"
				style="position: absolute; left: 308px; top: 536px; width: 72px; height: 16px; z-index: 7977; text-align: left;">
				<span
					style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">STATION</span>
			</div>
			<div id="wb_Text1004"
				style="position: absolute; left: 216px; top: 574px; width: 300px; height: 16px; z-index: 7978; text-align: left;">
				<span style="color: #A9A9A9; font-family: Arial; font-size: 9.3px;">Copyrights
					| TRDSTATION 2013-2016@All Rights Reserved</span>
			</div>
		</div>
		<div id="Layer271"
			style="position: absolute; text-align: left; left: 546px; top: 179px; width: 436px; height: 326px; z-index: 7991;">
			<div id="Layer272"
				style="position: absolute; text-align: left; left: 0px; top: 0px; width: 436px; height: 39px; z-index: 7981;">
				<div id="Layer273"
					style="position: absolute; text-align: left; left: 29px; top: 3px; width: 43px; height: 33px; z-index: 7979;">
				</div>
				<div id="wb_Text1005"
					style="position: absolute; left: 98px; top: 7px; width: 256px; height: 25px; z-index: 7980; text-align: left;">
					<span
						style="color: #FFFFFF; font-family: Georgia; font-size: 21px;">Real-Time
						Order Meeting</span>
				</div>
			</div>
			<div id="wb_Text1007"
				style="position: absolute; left: 115px; top: 164px; width: 135px; height: 18px; z-index: 7982; text-align: left;">
				<span style="color: #3C3C3C; font-family: Arial; font-size: 16px;">Mr.
					Mohamed Ali</span>
			</div>
			<div id="wb_Text1008"
				style="position: absolute; left: 114px; top: 141px; width: 244px; height: 18px; z-index: 7983; text-align: left;">
				<span style="color: #3C3C3C; font-family: Arial; font-size: 16px;">Inspitation
					Import And Export Co.</span>
			</div>
			<div id="wb_Text1009"
				style="position: absolute; left: 267px; top: 167px; width: 80px; height: 14px; z-index: 7984; text-align: left;">
				<span style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Egypt&nbsp;
					|&nbsp; Cairo</span>
			</div>
			<div id="wb_Shape419"
				style="position: absolute; left: 179px; top: 55px; width: 76px; height: 76px; z-index: 7985;">
				<img src="<?php echo asset_url();?>images/img1813.png" id="Shape419"
					alt="" style="width: 76px; height: 76px;">
			</div>
			<input type="submit" id="Button15"
				onclick="ShowObject('Layer268', 0);return false;" name=""
				value="Join"
				style="position: absolute; left: 122px; top: 270px; width: 96px; height: 25px; z-index: 7986;">
			<input type="submit" id="Button16"
				onclick="ShowObject('Layer268', 0);return false;" name=""
				value="Excuse"
				style="position: absolute; left: 224px; top: 270px; width: 96px; height: 25px; z-index: 7987;">
			<div id="wb_Text1006"
				style="position: absolute; left: 38px; top: 210px; width: 383px; height: 36px; text-align: center; z-index: 7988;">
				<span style="color: #696969; font-family: Arial; font-size: 16px;">Invites
					you to join the Real-Time Order Meeting to chat, negociate and edit
					your order as in real.</span>
			</div>
		</div>
	</div>
	<div id="wb_Text1181"
		style="position: absolute; left: 1060px; top: 240px; width: 50px; height: 15px; z-index: 12766; text-align: left;">
		&nbsp;</div>
	<div id="Layer127"
		style="position: fixed; text-align: center; visibility: hidden; left: 0; top: 0; right: 0; bottom: 0; z-index: 12767;">
		<div id="Layer127_Container"
			style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
			<div id="Layer128"
				style="position: fixed; text-align: left; left: 0; top: 0; right: 0; bottom: 0; z-index: 8944;">
			</div>
			<div id="Layer129"
				style="position: absolute; text-align: left; left: 512px; top: 143px; width: 294px; height: 406px; z-index: 8945;">
				<div id="wb_Text495"
					style="position: absolute; left: 19px; top: 13px; width: 258px; height: 18px; text-align: center; z-index: 8936;">
					<span style="color: #1E90FF; font-family: Arial; font-size: 16px;"><a
						href="./desk_details.php" target="_blank" class="style16">Red
							Miditation</a></span>
				</div>
				<div id="wb_Text496"
					style="position: absolute; left: 22px; top: 35px; width: 254px; height: 30px; text-align: center; z-index: 8937;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;">Our
						men’s shoes department covers virtually every, men’s shoes
						department ...</span>
				</div>
				<div id="wb_Text497"
					style="position: absolute; left: 56px; top: 327px; width: 176px; height: 27px; text-align: center; z-index: 8938;">
					<span style="color: #A9A9A9; font-family: Arial; font-size: 13px;">USD</span><span
						style="color: #C0C0C0; font-family: Arial; font-size: 13px;"> </span><span
						style="color: #3C3C3C; font-family: Arial; font-size: 24px;">600.00</span>
				</div>
				<div id="wb_Text498"
					style="position: absolute; left: 70px; top: 356px; width: 161px; height: 16px; text-align: center; z-index: 8939;">
					<span
						style="background-color: #FFFFFF; color: #3C3C3C; font-family: Arial; font-size: 13px;">Min.
						Order: 1 Set&nbsp;&nbsp;&nbsp; </span>
				</div>
				<div id="wb_Shape257"
					style="position: absolute; left: 92px; top: 83px; width: 109px; height: 227px; z-index: 8940;">
					<img src="<?php echo asset_url();?>images/img1608.png"
						id="Shape257" alt="" style="width: 109px; height: 227px;">
				</div>
				<div id="wb_Text333"
					style="position: absolute; left: 161px; top: 379px; width: 63px; height: 14px; z-index: 8941; text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 11px;">1000</span>
				</div>
				<div id="wb_Image67"
					style="position: absolute; left: 137px; top: 373px; width: 25px; height: 25px; z-index: 8942;">
					<img src="<?php echo asset_url();?>images/items_like0.png"
						id="Image67" alt="">
				</div>
				<div id="wb_Text334"
					style="position: absolute; left: 113px; top: 379px; width: 29px; height: 14px; z-index: 8943; text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 11px;">Likes</span>
				</div>
			</div>
			<div id="wb_Shape258"
				style="position: absolute; left: 606px; top: 569px; width: 107px; height: 32px; z-index: 8946;">
				<a href="" onclick="ShowObject('Layer127', 0);return false;"><div
						id="Shape258">
						<div id="Shape258_text">
							<span
								style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Close</span>
						</div>
					</div></a>
			</div>
		</div>
	</div>
	<div id="Layer527"
		style="position: fixed; text-align: right; visibility: hidden; left: 0; top: 0; right: 0; bottom: 0; z-index: 12768;">
		<div id="Layer527_Container"
			style="width: 1280px; position: relative; margin-left: auto; margin-right: 0; text-align: left;">
			<div id="wb_Image124"
				style="position: absolute; left: 58px; top: 60px; width: 911px; height: 602px; z-index: 11434;">
				<img src="<?php echo asset_url();?>images/vcat_insider.png"
					id="Image124" alt="">
			</div>
			<div id="wb_Shape9"
				style="position: absolute; left: 538px; top: 178px; width: 303px; height: 268px; z-index: 11435;">
				<img src="<?php echo asset_url();?>images/img1249.png" id="Shape9"
					alt="" style="width: 303px; height: 268px;">
			</div>
			<div id="wb_Shape11"
				style="position: absolute; left: 537px; top: 451px; width: 150px; height: 115px; z-index: 11436;">
				<img src="<?php echo asset_url();?>images/img1250.png" id="Shape11"
					alt="" style="width: 150px; height: 115px;">
			</div>
			<div id="wb_Shape12"
				style="position: absolute; left: 692px; top: 451px; width: 150px; height: 115px; z-index: 11437;">
				<img src="<?php echo asset_url();?>images/img1251.png" id="Shape12"
					alt="" style="width: 150px; height: 115px;">
			</div>
			<div id="wb_Shape14"
				style="position: absolute; left: 179px; top: 298px; width: 303px; height: 268px; z-index: 11438;">
				<a href="./item_details.php" target="_blank"><img
					src="<?php echo asset_url();?>images/img1252.png" id="Shape14"
					alt="" style="width: 303px; height: 268px;"></a>
			</div>
			<div id="wb_Text1435"
				style="position: absolute; left: 180px; top: 190px; width: 143px; height: 16px; z-index: 11439; text-align: left;">
				<span style="color: #303030; font-family: Georgia; font-size: 13px;"><strong><a
						href="./desk_details.php" target="_blank" class="style16">Fabric
							Sofa Set</a></strong></span>
			</div>
			<div id="wb_Text1436"
				style="position: absolute; left: 179px; top: 210px; width: 222px; height: 57px; z-index: 11440; text-align: left;">
				<span style="color: #787878; font-family: Arial; font-size: 11px;">Brown
					classic shoes with good price,Brown classic shoes with good price,
					good price,Brown classic shoes with good price... <br>
				</span>
			</div>
			<div id="wb_Text1437"
				style="position: absolute; left: 181px; top: 257px; width: 124px; height: 14px; z-index: 11441; text-align: left;">
				<span style="color: #1E90FF; font-family: Arial; font-size: 11px;">Min.
					Order: 1 Container</span>
			</div>
			<div id="wb_Text1438"
				style="position: absolute; left: 180px; top: 287px; width: 295px; height: 19px; text-align: center; z-index: 11442;">
				<span
					style="background-color: #FF0000; color: #FFFFFF; font-family: Arial; font-size: 17px;">&nbsp;
					USD 1200.00 / Set&nbsp; </span>
			</div>
			<div id="wb_Image126"
				style="position: absolute; left: 895px; top: 80px; width: 40px; height: 40px; z-index: 11443;">
				<a href="#" onclick="ShowObject('Layer_catalogue', 0);return false;"><img
					src="<?php echo asset_url();?>images/closeround.png" id="Image126"
					alt=""></a>
			</div>
			<div id="wb_Text1439"
				style="position: absolute; left: 437px; top: 572px; width: 62px; height: 23px; z-index: 11444; text-align: left;">
				<span style="color: #D3D3D3; font-family: Arial; font-size: 11px;">Page
				</span><span
					style="color: #FF6347; font-family: 'Arial Black'; font-size: 16px;">1</span><span
					style="color: #FF6347; font-family: Arial; font-size: 16px;"> </span>
			</div>
			<div id="wb_Text1440"
				style="position: absolute; left: 539px; top: 571px; width: 64px; height: 23px; z-index: 11445; text-align: left;">
				<span style="color: #D3D3D3; font-family: Arial; font-size: 11px;">Page
				</span><span
					style="color: #FF6347; font-family: 'Arial Black'; font-size: 16px;">2</span><span
					style="color: #FF6347; font-family: Arial; font-size: 19px;"> </span>
			</div>
		</div>
	</div>
	<div id="Layer156"
		style="position: fixed; text-align: center; visibility: hidden; left: 0; top: 0; right: 0; bottom: 0; z-index: 12769;">
		<div id="Layer156_Container"
			style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
			<div id="Layer607"
				style="position: fixed; text-align: left; left: 0; top: 0; right: 0; bottom: 0; z-index: 12448;">
			</div>
			<div id="Layer608"
				style="position: absolute; text-align: center; left: 398px; top: 34px; width: 546px; height: 586px; z-index: 12449;">
				<div id="Layer608_Container"
					style="width: 546px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="wb_Shape378"
						style="position: absolute; left: 151px; top: 528px; width: 137px; height: 32px; z-index: 12428;">
						<a href=""
							onclick="ShowObjectWithEffect('Layer156', 0, 'fade', 300);ShowObject('Layer613', 1);return false;"><div
								id="Shape378">
								<div id="Shape378_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Continue</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Shape379"
						style="position: absolute; left: 297px; top: 527px; width: 137px; height: 32px; z-index: 12429;">
						<a href=""
							onclick="ShowObjectWithEffect('Layer156', 0, 'fade', 300);return false;"><div
								id="Shape379">
								<div id="Shape379_text">
									<span
										style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Cancel</span>
								</div>
							</div></a>
					</div>
					<div id="wb_Text372"
						style="position: absolute; left: 104px; top: 96px; width: 390px; height: 32px; z-index: 12430; text-align: left;">
						<span style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Provide
							the buyer with %20 spare parts of the total goods, to be shipped
							with the order.</span>
					</div>
					<div id="wb_Text1592"
						style="position: absolute; left: 80px; top: 23px; width: 333px; height: 22px; text-align: center; z-index: 12431;">
						<span style="color: #3A973F; font-family: Arial; font-size: 19px;"><strong>Guarantee
								Terms</strong></span>
					</div>
					<div id="wb_Image83"
						style="position: absolute; left: 109px; top: 20px; width: 44px; height: 46px; z-index: 12432;">
						<img src="<?php echo asset_url();?>images/guarantee-lock.png"
							id="Image83" alt="">
					</div>
					<input type="radio" id="RadioButton7" name="Name" value="on"
						style="position: absolute; left: 55px; top: 102px; z-index: 12433;">
					<div id="wb_Text1593"
						style="position: absolute; left: 104px; top: 146px; width: 395px; height: 32px; z-index: 12434; text-align: left;">
						<span style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Send
							spare parts of the non-working products, to the buyer country and
							carry its shipping cost.</span>
					</div>
					<input type="radio" id="RadioButton8" name="Name" value="on"
						style="position: absolute; left: 55px; top: 152px; z-index: 12435;">
					<input type="radio" id="RadioButton9" name="Name" value="on"
						style="position: absolute; left: 55px; top: 252px; z-index: 12436;">
					<div id="wb_Text1594"
						style="position: absolute; left: 104px; top: 246px; width: 396px; height: 32px; z-index: 12437; text-align: left;">
						<span style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Replace
							the non-working products, with other new one with the same
							specifications. Total shipping cost to be carried by both of us.</span>
					</div>
					<input type="radio" id="RadioButton10" name="Name" value="on"
						style="position: absolute; left: 55px; top: 317px; z-index: 12438;">
					<div id="wb_Text1595"
						style="position: absolute; left: 104px; top: 311px; width: 389px; height: 65px; z-index: 12439; text-align: left;">
						<span style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Replace
							the items doesn't match the buyer specifications which mentioned
							in the contract. Total shipping cost to be carried by both of us.</span><span
							style="color: #000000; font-family: Arial; font-size: 13px;"><br></span>
					</div>
					<input type="radio" id="RadioButton11" name="Name" value="on"
						style="position: absolute; left: 55px; top: 202px; z-index: 12440;">
					<div id="wb_Text1596"
						style="position: absolute; left: 104px; top: 196px; width: 397px; height: 32px; z-index: 12441; text-align: left;">
						<span style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Money
							back for the products not match the buyer specification which
							mentioned in the contract.</span>
					</div>
					<input type="radio" id="RadioButton12" name="Name" value="on"
						style="position: absolute; left: 55px; top: 380px; z-index: 12442;">
					<div id="wb_Text1597"
						style="position: absolute; left: 104px; top: 381px; width: 333px; height: 33px; z-index: 12443; text-align: left;">
						<span style="color: #2D2D2D; font-family: Arial; font-size: 13px;">Type
							your own terms:</span><span
							style="color: #000000; font-family: Arial; font-size: 13px;"><br></span>
					</div>
					<textarea name="TextArea1" id="TextArea11"
						style="position: absolute; left: 107px; top: 408px; width: 336px; height: 83px; z-index: 12444;"
						rows="5" cols="45"></textarea>
					<div id="wb_Text1598"
						style="position: absolute; left: 458px; top: 436px; width: 35px; height: 14px; z-index: 12445; text-align: left;">
						<span style="color: #FF6347; font-family: Arial; font-size: 11px;">400</span>
					</div>
					<div id="wb_Text1599"
						style="position: absolute; left: 458px; top: 452px; width: 54px; height: 14px; z-index: 12446; text-align: left;">
						<span style="color: #2D2D2D; font-family: Arial; font-size: 11px;">Remains</span>
					</div>
					<div id="wb_Text1600"
						style="position: absolute; left: 168px; top: 51px; width: 277px; height: 14px; z-index: 12447; text-align: left;">
						<span style="color: #2D2D2D; font-family: Arial; font-size: 11px;">Select
							one of the following terms and press continue</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>