function getLanguage()
{
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/language",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer335', 1, 'scale', 500, 'swing');
		$("#Layer335_Container").html(data);
	});
}
