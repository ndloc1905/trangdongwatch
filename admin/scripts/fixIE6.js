function fixFixed(element, isbottom) {
	var root= document.compatMode==='CSS1Compat'? document.documentElement : document.body;
	function setPosition() {
		if (isbottom)
			element.style.top= (root.scrollTop+root.clientHeight-element.offsetHeight)+'px';
		else
			element.style.top= root.scrollTop+'px';
	}
	element.style.position= 'absolute';
	window.attachEvent('onscroll', setPosition);
	window.attachEvent('onresize', setPosition);
	window.setInterval(setPosition, 500);
}
if (document.body.className==='ie6') {
	fixFixed(document.getElementById('footer'), true);
}