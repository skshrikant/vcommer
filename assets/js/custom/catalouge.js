var template = {
                    html: 'application/modules/frontend/views/default/default-book-view.html',
                    styles: [
                                asset_url+'css/font-awesome.min.css',
                              	asset_url+'css/short-white-book-view.css'
                            ],
                    script: asset_url+'js/default-book-view.js'
                };

var booksOptions = {
                       	pageCallback: orwell1984PageCallback,
                        pages: 10,
                        propertiesCallback: function (props) {
                            props.page.depth /= 2;
                            props.cover.padding = 0.002;
                            return props;
                        },
                   		template: template
                    };

function orwell1984PageCallback(n) {
    return {
            type: 'html',
            src: base_url + "catalogue/pages/" + catalogue_id + "/" + (n + 1),
            interactive: true
            };
}
function getCatalouge()
{
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/catalouge",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer124', 1, 'scale', 500, 'swing');
		$("#Layer124_Container").html(data);
		return false;
	});
}
function openAddCatalouge()
{
	$.get(base_url+"mystation/addCatelough",{},function(data){
		$("#addcatalouge").html(data);
		$("#addcatelough_div").show();
		$("#editcatalouge").html("");
	});
}
function openEditCatalouge()
{
	$.get(base_url+"mystation/editCatelough",{},function(data){
		$("#addcatalouge").html("");
		$("#editcatalouge").html(data);
		$("#editcatalouge_div").show();
	});
}
function openEditCatalougeForm()
{
	var checkcount = 0;
	var item_id = "";
	$('input[name="catalogue_chk_id"]:checked').each(function() {
		item_id = this.value;
	   	checkcount++;
	});
	if(checkcount <=0 ){
		alert("Select catalogue to update.");
	} else if(checkcount > 1) {
		alert("You can edit only one catalogue at a time.");
	} else {
		ajaxindicatorstart("Please wait .. while we load catalogue...");
		$.get(base_url+"mystation/editCatelougeForm",{catalogue_id: item_id},function(data){
			ajaxindicatorstop();
			$("#addcatalouge").html("");
			$("#editcatalouge").html(data);
			$("#editcatalouge_div").show();
		});
	}
}
var catalogue_id = 0;
function viewCatalogueBook(id) {
	$.get(base_url+"catalogue/popup/"+id,{},function(data){
		catalogue_id = id;
		/*$("#catalogue_page_content").html(data);
		$("#pcatalogue_id").val(id);
		$("#vcatalogue_overlay").modal('show');*/
		$("#catalogue_page_content").html(data);
        $("#vcatalogue_overlay_home").modal('show');
        var page_count = parseInt($("#product_count").val());
        booksOptions.pages = parseInt(page_count*2);
        var instance = {
            scene: undefined,
            options: undefined,
            node: $('#flip-book-window').find('.mount-node')
        };

     	instance.options = booksOptions;
        instance.scene = instance.node.FlipBook(instance.options);
	},'html');
}

function deleteCatalogues() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="catalogue_chk_id"]:checked').each(function() {
		if(item_id != "") {
			item_id = item_id+","+this.value;
		} else {
			item_id = this.value;
		}
	   	checkcount++;
	});
	if(checkcount <= 0 ){
		alert("Select product first.");
	} else {
		ajaxindicatorstart("Please wait .. while we delete catalogue...");
		$.post(base_url+"mystation/catalogue/delete",{ catalogue_id: item_id},function(resp){
			if(resp.status == 0) {
				alert(resp.msg);
			} else {
				$.get(base_url+"mystation/editCatelough",{},function(data){
					$("#addcatalouge").html("");
					$("#editcatalouge").html(data);
					$("#editcatalouge_div").show();
				});
				alert(resp.msg);
			}
			ajaxindicatorstop();
		},'json');
	}
}
