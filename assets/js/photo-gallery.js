$(document).ready(function(){        
	$('.maincertificateimg  li img').on('click',function(){
		var src = $(this).attr('src');
		var img = '<img src="' + src + '" class="img-responsive"/>';
		
		//start of new code new code
		var index = $(this).parent('li').index();   
		
		var html = '';
		html += img;                
		html += '<div style="margin-bottom:22px;height:25px;clear:both;display:block;">';
		html += '<a class="controls next btn btn-default "  href="'+ (index+2) + '">next &raquo;</a>';
		html += '<a class="controls previous btn btn-default " href="' + (index) + '">&laquo; prev</a>';
		html += '</div>';
		
		$('#myModal').modal();
		$('#myModal').on('shown.bs.modal', function(){
			$('#myModal .modal-body').html(html);
			//new code
			$('a.controls').trigger('click');
		})
		$('#myModal').on('hidden.bs.modal', function(){
			$('#myModal .modal-body').html('');
		});
		
		
		
		
   });	
})
        
         
$(document).on('click', 'a.controls', function(){
	var index = $(this).attr('href');
	var src = $('.maincertificateimg li:nth-child('+ index +') img').attr('src');             
	$('.modal-body img').attr('src', src);
	
	var newPrevIndex = parseInt(index) - 1; 
	var newNextIndex = parseInt(newPrevIndex) + 2; 
	
	if($(this).hasClass('previous')){               
		$(this).attr('href', newPrevIndex); 
		$('a.next').attr('href', newNextIndex);
	}else{
		$(this).attr('href', newNextIndex); 
		$('a.previous').attr('href', newPrevIndex);
	}
	
	var total = $('.maincertificateimg li').length + 1; 
	//hide next button
	if(total === newNextIndex){
		$('a.next').hide();
	}else{
		$('a.next').show()
	}            
	//hide previous button
	if(newPrevIndex === 0){
		$('a.previous').hide();
	}else{
		$('a.previous').show()
	}
	
	
	return false;
});

$(document).ready(function(){        
	$('.myudtalk  li div.card img').on('click',function(){
		var src = $(this).attr('src');
		var img = '<img src="' + src + '" class="img-responsive"/>';
		
		//start of new code new code
		var index = parseInt($(this).parent('li div.card').attr('id'));   
		
		var html = '';
		html += img;                
		html += '<div style="height:45px;clear:both;display:block;background-color: #f2f2f2;padding: 8px 5px;">';
		html += '<a class="mycontrols next btn btn-default "  href="'+ (index+2) + '">next &raquo;</a>';
		html += '<a class="mycontrols previous btn btn-default " href="' + (index) + '">&laquo; prev</a>';
		html += '</div>';
		
		$('#myUDModal').modal();
		$('#myUDModal').on('shown.bs.modal', function(){
			$('#myUDModal .modal-body').html(html);
			//new code
			$('a.mycontrols').trigger('click');
		})
		$('#myUDModal').on('hidden.bs.modal', function(){
			$('#myUDModal .modal-body').html('');
		});
		
		
		
		
   });	
})
        
         
$(document).on('click', 'a.mycontrols', function(){
	var index = $(this).attr('href');
	var src = $('.myudtalk li:nth-child('+ index +') img').attr('src');             
	$('.modal-body img').attr('src', src);
	var newPrevIndex = parseInt(index) - 1; 
	var newNextIndex = parseInt(newPrevIndex) + 2; 
	
	if($(this).hasClass('previous')){               
		$(this).attr('href', newPrevIndex); 
		$('a.next').attr('href', newNextIndex);
	}else{
		$(this).attr('href', newNextIndex); 
		$('a.previous').attr('href', newPrevIndex);
	}
	var total = $('.myudtalk li div.card').length + 1; 
	//hide next button
	if(total === newNextIndex){
		$('a.next').hide();
	}else{
		$('a.next').show()
	}            
	//hide previous button
	if(newPrevIndex === 0){
		$('a.previous').hide();
	}else{
		$('a.previous').show()
	}
	
	
	return false;
});