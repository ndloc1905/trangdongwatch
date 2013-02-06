var input = null;
function searchKeyUp(txt, e, lst, multi, top, left) {
	input = $("#"+txt);
	var str = input.val();
	switch(e.keyCode) {
		case 186: // ;
			if (multi == 0) {
				input.val(input.val().replace(';',''));
			}
			break;
		case 188: // ,
			if (multi == 0) {
				input.val(input.val().replace(',',''));
			} else {
				input.val(input.val().replace(',',';'));
			}
			break;
		case 32: // space
			//input.val(input.val().replace(' ',''));
			break;
		case 38: // up
		case 40: // down
			$('#'+lst).focus();
			break;
		case 59: // ;
			if (multi == 0) {
				input.val(input.val().replace(';',''));
			}
		case 8:  // backspace
		case 9:  // tab
		case 13: // return
			break;
		default:
			if (input.val().length < 2) {
				$(".ac_results").hide();
				return;
			}
			var rows = input.val().split(';');
			var value = $.trim(rows[rows.length-1]);			
			if (value.length >= 2) {
				var val = input.val();
				var offset = $(input).offset();
				var iWidth = parseInt(input.css('width'));
				if (top == 0 || left == 0) {
					var t = (offset.top + input.attr('offsetHeight')) + "px";
					var l = (offset.left) + "px";
				} else {
					var l = left + 'px';
					var t = top  + 'px';
				}				
				$("#id"+txt).css({width:iWidth,top:t,left:l,display:'none'});
				$.getJSON (
					HOST_ADMIN+'/ajax/listcar?val='+value+'&lst='+lst+'&callback=?',{},
					function(data) {
						if (data) {
							$("#id"+txt).show();
							$("#id"+txt).html(data);
						}
					}
				);
			}
	}
}
function searchSelectItem(lst) {	
	var value = $('#'+lst+' option:selected').text();	
	var result = '';
	var rows = input.val().split(';');
	for (var i=0; i < rows.length; i++) {
		var row = $.trim(rows[i]);
		if (row) {
			if (i < rows.length - 1)
				result += ';' + row;
			else
				result += ';' + row.replace(row, value);
		}
	}
	$(".ac_results").hide();
	input.focus();
	input.val(result.substr(1, 10000));
	return;
}
$("body").click(function(){
	 $('.ac_results').hide();
});