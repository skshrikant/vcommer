function init3D(id) {
	var pic_X=$('#'+id).offset().left;
	var pic_Y=$('#'+id).offset().top;
	var pic_W=$('#'+id).width()/2;
	var pic_H=$('#'+id).height()/2;
	var center_X=pic_X+pic_W;
	var center_Y=pic_Y+pic_H;
	var movestop=pic_W/10;
	$('#'+id).mousemove(function(event){
		var mouse_X=event.pageX;
		var mouse_Y=event.pageY;
		if(mouse_X-center_X<=0){
			moveImg(mouse_X,mouse_Y)
		}else{
			moveImg(mouse_X,mouse_Y,'left')
		}
	});
	function moveImg(m_X,m_Y,dir){
		var index=Math.ceil(Math.abs(m_X-center_X)/movestop);
		if(dir){
			$('#'+id+' li').eq(index).show().siblings().hide();
		}else{
			$('#'+id+' li').eq(18-index).show().siblings().hide();
		}
	}
}
