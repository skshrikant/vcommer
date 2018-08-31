function closeAlert() {
	ShowObjectWithEffect('Layer180', 0, 'dropup', 500, 'easeInBounce');
	ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');
}

function getAlerts()
{
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/alerts",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer180', 1, 'scale', 500, 'swing');
		$("#Layer180_Container").html(data);
		return false;
	});
}

function inquiryreplay()
{
	
	var values = new Array();
    $.each($("input[name= 'chkinquiry']:checked"), function(){    
    	values.push($(this).val());
    });
	values = values.filter(v=>v!=null);
	if(values.length > 0 ) {
		if(values.length == 1 ) {
			var inquiryid = values[0];
			$.post(base_url+"mystation/inquiryreplay",{inquiryid,inquiryid},function(data){
				$("#alertbodypanel").html("");
				$("#alertbodypanel").html(data);
		 	});
		} else {
			alert('Please select only one inquiry for replay.');
		}
	} else {
		alert('Please select inquiry.');
	}
	
}
function openFavoriteInfo(type)
{
	alertajaxindicatorstart('Loading...');
	$.post(base_url+"mystation/favoriteinfo",{type:type},function(data){
		$("#alertbodypanel").html(data);
		$(".alerts-btn-selected").removeClass('alerts-btn-selected');
		$("#alert-fab-"+type).addClass('alerts-btn-selected');
		
		if(type == 1)
		{
			$("#seller_div").show();
			$("#shipper_div").hide();
			$("#buyer_div").hide();
			$("#product_div").hide();
			$("#vedio_div").hide();
			$("#dproduct_div").hide();
			$("#catalouge_div").hide();
			$("#ads_div").hide();
			$("#post_div").hide();
			$('.product-carousel').carousel({
		        interval: 3000
		    });
		}
		if(type == 2)
		{
			$("#seller_div").hide();
			$("#shipper_div").show();
			$("#buyer_div").hide();
			$("#vedio_div").hide();
			$("#product_div").hide();
			$("#dproduct_div").hide();
			$("#catalouge_div").hide();
			$("#ads_div").hide();
			$("#post_div").hide();
			$('.alertcarousel2').carousel({
		        interval: 3000
		    });
		}
		if(type == 3)
		{
			$("#seller_div").hide();
			$("#shipper_div").hide();
			$("#product_div").hide();
			$("#vedio_div").hide();
			$("#buyer_div").show();
			$("#dproduct_div").hide();
			$("#catalouge_div").hide();
			$("#ads_div").hide();
			$("#post_div").hide();
			$('.alertcarousel3').carousel({
		        interval: 3000
		    });
		}
		if(type == 4)
		{
			$("#seller_div").hide();
			$("#shipper_div").hide();
			$("#buyer_div").hide();
			$("#vedio_div").hide();
			$("#product_div").show();
			$("#dproduct_div").hide();
			$("#catalouge_div").hide();
			$("#ads_div").hide();
			$("#post_div").hide();
			$('.alertcarousel4').carousel({
		        interval: 3000
		    });
		}
		if(type == 5)
		{
			$("#seller_div").hide();
			$("#shipper_div").hide();
			$("#buyer_div").hide();
			$("#product_div").hide();
			$("#dproduct_div").hide();
			$("#catalouge_div").hide();
			$("#vedio_div").show();
			$("#ads_div").hide();
			$("#post_div").hide();
		}
		if(type == 6)
		{
			$("#seller_div").hide();
			$("#shipper_div").hide();
			$("#buyer_div").hide();
			$("#product_div").hide();
			$("#vedio_div").hide();
			$("#catalouge_div").hide();
			$("#dproduct_div").show();
			$("#ads_div").hide();
			$("#post_div").hide();
		}
		if(type == 7)
		{
			$("#seller_div").hide();
			$("#shipper_div").hide();
			$("#buyer_div").hide();
			$("#product_div").hide();
			$("#vedio_div").hide();
			$("#dproduct_div").hide();
			$("#catalouge_div").show();
			$("#ads_div").hide();
			$("#post_div").hide();
		}
		if(type == 8)
		{
			$("#seller_div").hide();
			$("#shipper_div").hide();
			$("#buyer_div").hide();
			$("#product_div").hide();
			$("#vedio_div").hide();
			$("#dproduct_div").hide();
			$("#catalouge_div").hide();
			$("#ads_div").show();
			$("#post_div").hide();
		}
		if(type == 9)
		{
			$("#seller_div").hide();
			$("#shipper_div").hide();
			$("#buyer_div").hide();
			$("#product_div").hide();
			$("#vedio_div").hide();
			$("#dproduct_div").hide();
			$("#catalouge_div").hide();
			$("#ads_div").hide();
			$("#post_div").show();
		}
	});
	alertajaxindicatorstop();
}
function openMycart()
{
	$.get(base_url+"mystation/mycart",{},function(data){
		$("#alertbodypanel").html("");
		$("#alertbodypanel").html(data);
		
	});
}
function openInquiry()
{
	$.get(base_url+"mystation/inquiry",{},function(data){
		$("#alertbodypanel").html("");
		$("#alertbodypanel").html(data);
		var getCurrentRequestCount = parseInt($("#totalinquiry").html());
		$("#totalinquiry").html(0);
		$("#totalalert").html(parseInt($("#totalalert").html()-getCurrentRequestCount));
	});
}
function openOffer()
{
	$.get(base_url+"mystation/offer",{},function(data){
		$("#alertbodypanel").html("");
		$("#alertbodypanel").html(data);
		var getCurrentRequestCount = parseInt($("#totaloffer").html());
		$("#totaloffer").html(0);
		$("#totalalert").html(parseInt($("#totalalert").html()-getCurrentRequestCount));
	});
}
function openRequest()
{
	$.getJSON(base_url+"mystation/request",function(data){
		$("#alertbodypanel").html("");
		$("#alertbodypanel").html(data.dataHTML);
		$(".alerts-btn-selected").removeClass('alerts-btn-selected');
		$("#addcominityrequest_btn").addClass('alerts-btn-selected');
		var getCurrentRequestCount = parseInt($("#totalrequest").html());
		$("#totalrequest").html(0);
		$("#totalalert").html(parseInt($("#totalalert").html()-getCurrentRequestCount));
	});
}
function openAddedRequest()
{
	$.get(base_url+"mystation/addedrequest",{},function(data){
		$("#alertbodypanel").html("");
		$("#alertbodypanel").html(data);
		$(".alerts-btn-selected").removeClass('alerts-btn-selected');
		$("#addcominityrequest_btn").addClass('alerts-btn-selected');
		document.getElementById("request_type").textContent="You have been received requests from the following members to add you to their business community.";
		
	});
}
function openInvitation()
{
	$.get(base_url+"mystation/invitationrequest",{},function(data){
		$("#alertbodypanel").html("");
		$("#alertbodypanel").html(data);
		$(".alerts-btn-selected").removeClass('alerts-btn-selected');
		$("#communityinvitation_btn").addClass('alerts-btn-selected');
		document.getElementById("request_type").textContent="You have been send requests to the following members to add them to your business community";
		
	});
}
function sellerOrder()
{
	$.get(base_url+"mystation/sellerorder",{},function(data){
		$("#alertbodypanel").html("");
		$("#alertbodypanel").html(data);
		var getCurrentOrderCount = parseInt($("#totalorder").html());
		$("#totalorder").html(0);
		$("#totalalert").html(parseInt($("#totalalert").html()-getCurrentOrderCount));
	});
}
function delete_request(community_id)
{
	$.post(base_url+"mystation/deleterequest",{community_id:community_id},function(data){
		customAlert(data.msg);
		openRequest();
	},'json');
}
function readInquiryURL(input) {
	var filecount = $(input)[0].files.length;
	if(filecount <5) {
		
	} else {
		customAlert('You can not select more than 4 files');
		$('#inquiryreplay').val('');
		 
	}
}
function readOfferURL(input) {
    var filecount = $(input)[0].files.length;
    if(filecount > 5) {
        customAlert('You can not select more than 4 files');
        $('#inquiryreplay').val('');
    }
}
function offerreplay()
{
	var values = new Array();
    $.each($("input[name= 'chkoffer']:checked"), function(){    
    	values.push($(this).val());
    });
	values = values.filter(v=>v!=null);
	if(values.length > 0 ) {
		if(values.length == 1 ) {
			var offerid = values[0];
			$.post(base_url+"mystation/offerreplay",{offerid,offerid},function(data){
				$("#alertbodypanel").html("");
				$("#alertbodypanel").html(data);
		 	});
		} else {
			customAlert('Please select only one offer for replay.');
		}
	} else {
		customAlert('Please select offer.');
	}
	
}
function deleteoffer()
{
	var values = new Array();
    $.each($("input[name= 'chkoffer']:checked"), function(){    
    	values.push($(this).val());
    });
	values = values.filter(v=>v!=null);
	if(values.length > 0 ) {
			$.post(base_url+"mystation/deleteoffer",{values:values},function(data) {
				customAlert(data.msg);
		 		openOffer();
		 	},'json');
			
	} else {
		alert('Please select offer.');
	}
}
function unreadoffer()
{
	var values = new Array();
    $.each($("input[name= 'chkoffer']:checked"), function(){    
    	values.push($(this).val());
    });
	values = values.filter(v=>v!=null);
	if(values.length > 0 ) {
			$.post(base_url+"mystation/unreadoffer",{values:values},function(data) {
				customAlert(data.msg);
		 		openOffer();
		 	},'json');
			
	} else {
		alert('Please select offer.');
	}
}
function markOfferAsread(id)
{
	$.post(base_url+"mystation/readoffer",{id: id},function(data) {
		//remove read mark
		$(".markAsRead"+id).remove();
 	},'json');
}

function pinoffer()
{
	var values = new Array();
    $.each($("input[name= 'chkoffer']:checked"), function(){    
    	values.push($(this).val());
    });
	values = values.filter(v=>v!=null);
	if(values.length > 0 ) {
			$.post(base_url+"mystation/pinoffer",{values:values},function(data) {
				customAlert(data.msg);
		 		openOffer();
		 	},'json');
			
	} else {
		alert('Please select offer.');
	}
}
$(window).on("load", function () {
    var parameter = window.location.pathname.split('/');
    setTimeout(function () {
        if (parameter[3] == "home-alert") {

            $(".triggerClick").trigger("click");
            let type = (typeof (parameter[4]) !== "undefined" && parameter[4] !== null) ? parameter[4] : null;
            let busiId = (typeof (parameter[5]) !== "undefined" && parameter[5] !== null) ? parameter[5] : null;
            
            if (type && busiId) {
                //clear alert
                $.post(base_url + "home/clearAlert", {type: type, id: busiId}, function () {/*nothing to call*/});

                if (type == 'inquiry') {
                    $.get(base_url + "mystation/inquiry", {}, function (data) {
                        $("#alertbodypanel").html("");
                        $("#alertbodypanel").html(data);
                        $("#totalinquiry").html(0);
                    });
                }
                if (type == 'offer') {
                    $.get(base_url + "mystation/offer", {}, function (data) {
                        $("#alertbodypanel").html("");
                        $("#alertbodypanel").html(data);
                        $("#totaloffer").html(0);
                    });
                }
            }
        }
    }, 10);
});

function openChat()
{
    $.get(base_url + "mystation/chat", {}, function (data) {
        $("#alertbodypanel").html("");
        $("#alertbodypanel").html(data);
        $(".alerts-btn-selected").removeClass('alerts-btn-selected');
        $("#addcominityrequest_btn").addClass('alerts-btn-selected');
        document.getElementById("request_type").textContent = "You have been received requests from the following members to add you to their business community.";
    });
}