<div id="Layer99" style="position:fixed;left:0;top:80px; text-align: center; visibility: hidden; margin: 300px 0px 0px 550px; width: 380px; height: 110px; float: left; display: block; z-index: 1000000;background-color: #4B4B4B;border: 1px #A9A9A9 solid;-moz-border-radius: 2px; -webkit-border-radius: 2px; border-radius: 2px; -moz-box-shadow: 2px 2px 12px #000000;-webkit-box-shadow: 2px 2px 12px #000000;box-shadow: 2px 2px 12px #000000;">
	<div id="Layer99_Container" style="width:332px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
		<div id="wb_Text145" style="padding-top: 15px;width:332px;position:relative;margin-left:auto;margin-right:auto;text-align:left;z-index:3529;text-align: center;">
		<span style="color:#C0C0C0;font-family:Georgia;font-size:12px;" id="msg_cont">ADDED SUCCESFULLY TO YOUR FAVORITE</span></div>
		<div id="Layer282" style="position:absolute;text-align:left;left:100px;top:75px;width:133px;height:24px;z-index:3530;background-color: #787878;" onclick="ShowObject('Layer99', 0);return false;">
		<div id="wb_Text146" style="position:absolute;left:45px;top:4px;width:49px;height:16px;text-align:center;z-index:3528;">
		<span style="color:#FFFFFF;font-family:Georgia;font-size:13px;"><a href="#" class="style5_99" onclick="ShowObject('Layer99', 0);return false;">OK</a></span></div>
		</div>
	</div>
</div>
<script>
function addToMyFavourite(fav_id,type) {
	$.get(base_url+"addtofavourite/"+fav_id+"/"+type,{},function(data) {
		if(data.status == 1) {
			$("#msg_cont").html(data.msg);
		} else {
			$("#msg_cont").html(data.msg);
		}
		ShowObject('Layer99', 1);
	},'json');
}
function openChatWithBuyer(buyer_id,accept_chat=true) {
	if(accept_chat == 1) {
		jqcc.cometchat.chatWith(buyer_id);
        document.getElementById('cometchat_chatboxes').style.right='0px';
	} else {
		customAlert('Sorry.. Buyer status is " Don\'t Disturb".. Please try again on other time, status may be changed soon.');
	}
}
</script>