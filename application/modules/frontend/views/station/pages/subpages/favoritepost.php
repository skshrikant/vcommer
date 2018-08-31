<link rel="" href="<?php echo base_url();?>assets/css/pages/community.css">
<?php
	if(isset($favoritepost)) { 
if(count($favoritepost) > 0 && $favoritepost[0]['id'] !='') {
	$i =1; foreach($favoritepost as $seller) { ?>
<style>
#Layer179
{
   background-color: #FAFAFA;
   border: 1px #D3D3D3 solid;
}
#wb_Text656 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#SlideShow2 .image
{
   border-width: 0;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
}
#Image119
{
   border: 0px #000000 solid;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
}
#Image14 {
    border: 0px #000000 solid;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
}
.margin3 {
    margin-bottom: 10px;
}
.img35 {
    width: 35px !important;
    height: 35px !important;
}
.postfav:hover .hover {
    visibility: visible;
    position:absolute;
}
.postfav .hover {
    visibility: hidden;
    position:absolute;
}.margin3{
	    margin-bottom: 10px;
}.img35{
	width:35px !important;
	height:35px !important;;
}
.img36{
	
    width: 36px !important;;
    height: 36px !important;;
}
#wb_Text653 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#wb_Text654 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}

.background11{
	    background-color: #00D4C3;
    background-color: rgba(0,212,195,0.99);
    color: white;
    font-family: Georgia;
    font-size: 13px;
    text-align: left;
    padding: 9px;


}
.cstyle5 {
    color: #303030;
    font-family: Georgia;
    font-size: 35px;
}
#Layer11
{
   background-color: #FAFAFA;
   -moz-box-shadow: -3px 1px 12px #1E1E1E;
   -webkit-box-shadow: -3px 1px 12px #1E1E1E;
   box-shadow: -3px 1px 12px #1E1E1E;
       width: 505px;
       height: 754px;
    overflow: auto;
       /* margin-left: -151px*/
}

.cstyle1 {
    background-color: rgba(0,212,195,0.99);
    color: #303030;
    font-family: Georgia;
    font-size: 13px;
    padding: 7px 20px;
}
b, strong {
    font-weight: bold;
    overflow-wrap: break-word;
}
.space1 {
    padding: 20px;
}.padding1 {
    padding: 20px;
}

.center1 {
    text-align: center;
}.cstyle4 {
    color: #3C3C3C;
    font-family: Arial;
    font-size: 12px;
}.cstyle2 {
    background-color: #FFA500;
    color: #3C3C3C;
    font-family: Arial;
    font-size: 15px;
}.cstyle3 {
    background-color: #DCDCDC;
    color: #3C3C3C;
    font-family: Arial;
    font-size: 13px;
}

#Layer19
{
   background-color: #00D4C3;
   background-color: rgba(0,212,195,0.99);
   filter: alpha(opacity=75);
   opacity: 0.75;
}
#wb_Text23 
{
   background-color: transparent;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#wb_Text23 div
{
   text-align: left;
}
#RollOver2 a
{
   display: block;
   position: relative;
   height: 100%;
   width: 100%;
}
 div#mainLayer18 {
    position: absolute;
    text-align: left;
    visibility: visible;
    right: 0px;
    top: 1px;
    width: 545px;
    height: 804px;
    z-index: 10000 ! important;
    background: rgba(0, 0, 0, 0.6);
}


#Shape54 {
    width: 148px;
    height: 52px;
    background-color: #FFFFFF;
    border: 1px #A0A0A0 solid;
}

.img65 {
    width: 65px !important;
    height: 65px !important;
}
</style>	
		<div class="row">
			<div class="col-md-12">
				<!-- <div class="col-md-1" style="padding-top: 66px;text-align:center;">

					<input type="checkbox" id="chkpost-<?php echo $i;?>" onclick="ShowObjectWithEffecttoggleDeleteDive('btnpostdelete-<?php echo $seller['postid'];?>', 1, 'scale', 500, 'swing');return false;" name="chkpost-<?php echo $i;?>"  value="on" >
					<div id="btnpostdelete-<?php echo $seller['postid'];?>" style="width:100%; visibility: hidden;padding-top:10px;">
						<a href="#" onclick="delete_favorite(<?php echo $seller['postid'];?>,9);"><img src="<?php echo asset_url();?>images/delete.png" id="Image160" alt="" style="width:24px;height:24px;"></a>
					</div>
				</div>  -->


				 <div class="col-sm-1 chkbox-div text-center" style="padding-left:1px !important;width: 42px;">
				<input type="checkbox" id="chkpost-<?php echo $i;?>" onclick="toggleDeleteDive('btnpostdelete-<?php echo $seller['postid'];?>','chkpost-<?php echo $i;?>');" name="chkpost-<?php echo $i;?>"  value="on" />
				<div id="btnpostdelete-<?php echo $seller['postid'];?>" style="width: 24px; height: 34px; padding-top:10px;display:none;">
					<a href="#" onclick="delete_favoritepost(<?php echo $seller['postid'];?>,9);"><img src="<?php echo asset_url();?>images/delete.png" id="Image160" alt=""></a>
				</div>
			</div> 



			<div onclick="openPostDetails(<?php echo $seller['postid'];?>);">
				<div class="col-md-11" >			
					<div id="Layer178" style="width:950px;height:185px;" onmouseenter="ShowObjectWithEffect('Layer525', 1, 'slideright', 300, 'swing');return false;" onmouseleave="ShowObject('Layer213', 0);ShowObject('Layer525', 0);return false;">
					<div id="Layer179" style="position: absolute; text-align: left; left: 1px; top: 1px; width:740px; height: 174px; z-index: 1258;">
						<div id="wb_Text653" style="position: absolute; left: 282px; top: 20px; width: 351px; height: 18px; z-index: 1246; text-align: left;">
							<span style="color: #303030; font-family: Georgia; font-size: 15px;"><strong><a href="<?php echo base_url('community');?>" target="_blank" class="style5"><?php echo $seller['company_name'];?> </a></strong></span>
						</div>
						<div id="wb_Text654" style="position: absolute; left: 235px; top: 75px; width:486px; height: 62px; z-index: 1247; text-align: left;">
							<span
								style="color: #696969; font-family: Arial; font-size: 12px;"><?php $string1 = (strlen($seller['description']) > 13) ? substr($seller['description'],0,250).'...' : $seller['description']; echo $string1;?><br>
							<br>
							</span> 							
							<span style="color: #4B4B4B; font-family: Arial; font-size: 12px;">Post Views :
							<?php echo $seller['postviews'];?></span> &nbsp; &nbsp; &nbsp; &nbsp;
							<span style="color: #4B4B4B; font-family: Arial; font-size: 12px;">    Likes :
							<i class="fa fa-thumbs-up" aria-hidden="true" style="color: red"></i>   <?php echo $seller['likes'];?></span><br></a><br>
							
						</div>
				   </div>
						<div id="wb_Text656" style="position: absolute; left: 285px; top: 44px;height: 15px; z-index: 1259; text-align: left;">
							<!-- <a href="<?php echo base_url();?>community" target="_blank" class="style5"> --><span style="color: #4B4B4B; font-family: Arial; font-size: 12px;">Post Title:
								<?php echo $seller['title'];?></span><!-- </a> --><br>
						</div>
						<div id="wb_Image119" style="position: absolute; left: 233px; top: 18px; width: 45px; height: 45px; z-index: 1260;">
							<img src="<?php echo asset_url();?><?php echo $seller['profile_image']?>" id="Image119" alt="" style="border-radius: 50px 50px 50px 50px;">
						</div>
						<div id="SlideShow2" style="position: absolute; left: 2px; top: 2px; width: 210px; height: 172px; z-index: 1261;">
							<img class="image" style="border: solid;border-color: honeydew;" src="<?php echo asset_url();?><?php echo $seller['image1'];?>" alt="" title="">
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>		
<?php $i++; } }  else { ?>
  <div class="row" style="margin:0px;">
 	<h4 class="center"> No Item Found!</h4>
 </div>
<?php } } ?>


<div style="position:absolute;top:0px;left: 0;right: 0;width:1280px;margin: 0 auto;">
	<!-- post details -->
	<div class="Layer18" id="mainLayer18" style="position: absolute; text-align: left; visibility: hidden; right:15%; top: 1px; width: 545px; height: 604px; z-index: 587;background: rgba(0,0,0,0.6);">
	</div>
</div>



<?php if(isset($favoritepost)) {  foreach($favoritepost as $allpost ) { ?>
<script>
function ajaxindicatorstart(text)
{
	if(jQuery('body').find('#resultLoading').attr('id') != 'resultLoading'){
	jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="<?php echo asset_url();?>images/loading.gif" alt=""><div></div></div><div class="bg"></div></div>');
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
function myajaxindicatorstart(id)
{
	if(jQuery('#'+id).find('#resultLoading').attr('id') != 'resultLoading'){
	jQuery('#'+id).append('<div id="resultLoading" style="display:none"><div><img src="<?php echo asset_url();?>images/loading.gif" alt=""><div></div></div><div class="bg"></div></div>');
	}

	jQuery('#resultLoading').css({
		'width':'100%',
		'height':'100%',
		'position':'absolute',
		'z-index':'10000000',
		'top':'0',
		'left':'0',
		'right':'0',
		'bottom':'0',
		'margin':'auto'
	});

	jQuery('#resultLoading .bg').css({
		'background':'#fff',
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
		'position': 'absolute',
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
    jQuery('#'+id).css('cursor', 'wait');
}
function myajaxindicatorstop(id)
{
    jQuery('#resultLoading .bg').height('100%');
       jQuery('#resultLoading').fadeOut(300);
    jQuery('#'+id).css('cursor', 'default');
}

//$(".showmenulist").click(function (event) {
$('div').on('click', '.showmenulist', function(event) {
	event.stopImmediatePropagation();

    if ($("#Layer47-"+$(this).attr("data-id")).is(":hidden")) {
        $("#Layer47-"+$(this).attr("data-id")).slideDown("slow");
    } else {
        $("#Layer47-"+$(this).attr("data-id")).hide();
    }

    if ($("#Layer47-1-"+$(this).attr("data-id")).is(":hidden")) {
        $("#Layer47-1-"+$(this).attr("data-id")).slideDown("slow");
    } else {
        $("#Layer47-1-"+$(this).attr("data-id")).hide();
    }
    event.preventDefault();
    ShowObject('mainLayer18', 0);
});

$("#Layer47<?php echo $allpost['postid'];?>").mouseleave(function(){
	$(this).hide();
});

</script>
<?php } }?>

<script type="text/javascript">
	function loadRealtimePosts(){
	/*myajaxindicatorstart('Layer1');
	myajaxindicatorstart('Layer32');*/
    $.post(base_url+"Station/posts/realtime", {}, function(data){
    	myajaxindicatorstop('Layer1');
    	myajaxindicatorstop('Layer32');
		$('#Layer1').html(data.html1);
		$('#Layer32').html(data.html2);
	},'json');
}
function openPostDetails(id){
	ShowObject('Layer20', 0);
	ShowObject('Layer101', 0);
	ShowObjectWithEffect('mainLayer18', 1, 'slideright', 500, 'swing');
	ShowObject('Layer71', 0);
	addPageVisit(id);
	//myajaxindicatorstart('mainLayer18');
    $.post(base_url+"Station/posts/detail/"+id, {}, function(data){
       $('#mainLayer18').html(data);
    },'html');
}
function addPageVisit(postid) {
	$.get(base_url+"mycommunity/post/visit/"+postid,{},function(data) {
		//
	},'json');
}


function openEnquiryAndOfferForm(postid) {
	<?php if($tscategory_id != 3) {} else {} ?>
}

function shareThePost(postid) {
	confirmbox("Do you like to share this post to your community?",
		function() {
		$.get(base_url+"mycommunity/post/share/"+postid,{},function(data) {
			loadRealtimePosts();
			$("#msg_cont").html(data.msg);
			ShowObject('Layer99', 1);
		},'json');
		},
		function() {
           //
        }
	);
}
</script>