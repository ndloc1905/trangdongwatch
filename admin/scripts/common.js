function paging(url, div) {	
	$.get(url,{},function(result){if(result){$('#'+div).html(result);}});
}
function isValidDate(dateStr, format) {
	if (format == null) { format = "MDY"; }
	format = format.toUpperCase();
	if (format.length != 3) { format = "MDY"; }
	if ( (format.indexOf("M") == -1) || (format.indexOf("D") == -1) || (format.indexOf("Y") == -1) ) { format = "MDY"; }
	if (format.substring(0, 1) == "Y") {
	  var reg1 = /^\d{2}(\-|\/|\.)\d{1,2}\1\d{1,2}$/
	  var reg2 = /^\d{4}(\-|\/|\.)\d{1,2}\1\d{1,2}$/
	} else if (format.substring(1, 2) == "Y") {
	  var reg1 = /^\d{1,2}(\-|\/|\.)\d{2}\1\d{1,2}$/
	  var reg2 = /^\d{1,2}(\-|\/|\.)\d{4}\1\d{1,2}$/
	} else {
	  var reg1 = /^\d{1,2}(\-|\/|\.)\d{1,2}\1\d{2}$/
	  var reg2 = /^\d{1,2}(\-|\/|\.)\d{1,2}\1\d{4}$/
	}
	if ( (reg1.test(dateStr) == false) && (reg2.test(dateStr) == false) ) { return false; }
	var parts = dateStr.split(RegExp.$1);
	if (format.substring(0, 1) == "M") { var mm = parts[0]; } else if (format.substring(1, 2) == "M") { var mm = parts[1]; } else { var mm = parts[2]; }
	if (format.substring(0, 1) == "D") { var dd = parts[0]; } else if (format.substring(1, 2) == "D") { var dd = parts[1]; } else { var dd = parts[2]; }
	if (format.substring(0, 1) == "Y") { var yy = parts[0]; } else if (format.substring(1, 2) == "Y") { var yy = parts[1]; } else { var yy = parts[2]; }
	if (parseFloat(yy) <= 50) { yy = (parseFloat(yy) + 2000).toString(); }
	if (parseFloat(yy) <= 99) { yy = (parseFloat(yy) + 1900).toString(); }
	var dt = new Date(parseFloat(yy), parseFloat(mm)-1, parseFloat(dd), 0, 0, 0, 0);
	if (parseFloat(dd) != dt.getDate()) { return false; }
	if (parseFloat(mm)-1 != dt.getMonth()) { return false; }
	return true;
}
function isPhoneNumber(str){
	var alphaExp = /^((\(\+?84\)[\-\.\s]?)|(\+?84[\-\.\s]?)|(0))((\d{3}[\-\.\s]?\d{6})|(\d{2}[\-\.\s]?\d{8}))$/;
	if(str.match(alphaExp)){
		return true;
	}
	return false;
}
function isAlphabet(str){
	var alphaExp = /^[a-zA-Z]+$/;
	if(str.match(alphaExp)){
		return true;
	}
	return false;
}
function isAlphabetAndNumber(str) {
	var alphaExp = /^[a-zA-Z0-9_]+$/;
	if (str.match(alphaExp)){
		return true;
	}
	return false;
}
function isUserName(str) {
	var alphaExp = /^[a-zA-Z0-9_.\-]+$/;
	if (str.match(alphaExp)){
		return true;
	}
	return false;
}
function isNumber(str) {
	var alphaExp = /^[0-9]+$/;
	if(str.match(alphaExp)){
		return true;
	}
	return false;
}
function strip_tags(str) {
    str = str.replace(/&nbsp;/g,'');
	str = jQuery.trim(str);
	allowed_tags = '';
	var key = '', allowed = false;
    var matches = [];
    var allowed_array = [];
    var allowed_tag = '';
    var i = 0;
    var k = '';
    var html = '';
    var replacer = function(search, replace, str) {
        return str.split(search).join(replace);
    };
    // Build allowes tags associative array
    if (allowed_tags) {
        allowed_array = allowed_tags.match(/([a-zA-Z]+)/gi);
    }
    str += '';
    // Match tags
    matches = str.match(/(<\/?[\S][^>]*>)/gi);
    // Go through all HTML tags
    for (key in matches) {
        if (isNaN(key)) {
            // IE7 Hack
            continue;
        }
        // Save HTML tag
        html = matches[key].toString();
        // Is tag not in allowed list? Remove from str!
        allowed = false;
        // Go through all allowed tags
        for (k in allowed_array) {
            // Init
            allowed_tag = allowed_array[k];
            i = -1;
            if (i != 0) { i = html.toLowerCase().indexOf('<'+allowed_tag+'>');}
            if (i != 0) { i = html.toLowerCase().indexOf('<'+allowed_tag+' ');}
            if (i != 0) { i = html.toLowerCase().indexOf('</'+allowed_tag)   ;}

            // Determine
            if (i == 0) {
                allowed = true;
                break;
            }
        }
        if (!allowed) {
            str = replacer(html, "", str); // Custom replace. No regexing
        }
    }
    return str;
}
function checkAll(strItemName, value) {
	var x=document.getElementsByName(strItemName);
	for (var i=0; i<x.length; i++) {
	  	if (value == 1 && !x[i].disabled) {
			if( !x[i].checked ) x[i].checked = 'checked';
		} else {
			if(x[i].checked) x[i].checked = '';
		}
	}
}
function getItemsChecked(strItemName, sep) {
	var x=document.getElementsByName(strItemName);
	var p="";
	for(var i=0; i<x.length; i++) {
		if(x[i].checked) {
			p += x[i].value + sep;
		}
	}
	var result = (p != '' ? p.substr(0, p.length - 1) : '');
	return result;
}
function hideUI() {
	$.unblockUI();
	return false;
}
function showUI(msg) {
	if (msg!='') {
		$.blockUI({
			message: msg, 
			css: {
				background:'#fffbba', 
				color:'#a90a0e', 
				border:'1px solid #ffc407', 
				showOverlay: false, 
				width:'300px', 
				top: ($(window).height()-200)/2 + 'px', 
				left:($(window).width()-300)/2 + 'px', 
				padding:'10px'
			}, 
			overlayCSS: {opacity:'0'}
		});
		$('.blockOverlay').click($.unblockUI);
		setTimeout($.unblockUI, 2*20*60);
	}
	return false;
}
doaction = function (pact) {
	if (pact == 0) return;
	if (getItemsChecked('items[]')=='') {
		return;
	}
	if (confirm(msg_confirm_action)==false) {
		return;
	}
	$('#paction').val(pact);
	document.form1.submit();
}
search_onsubmit = function(vdefault) {
	var pkeyword=$('#pkeyword').val();
	if (pkeyword=='' || pkeyword==vdefault) {
		return false;
	}
	return true;
}
search_focus = function(vdefault) {
	var pkeyword=$('#pkeyword').val();
	if (pkeyword==vdefault) {
		$('#pkeyword').val('');
	}
}
search_blur = function(vdefault) {
	var pkeyword=$('#pkeyword').val();
	if (pkeyword=='') {
		$('#pkeyword').val(vdefault);
	}
}
checkURL = function(url) {
	var urlRegxp = /^(ftp:\/\/|https:\/\/|http:\/\/|www.|http:\/\/www.|https:\/\/www.|ftp:\/\/www.|www.){1}([\w]+)(.[\w]+){1,2}$/;
	if (urlRegxp.test(url) != true) {
		return false;
	} else {
		return true;
	}
}
checkPassword = function(ppassword) {
	if (ppassword.length < 6) {
		return false;
	}
	return true;
}