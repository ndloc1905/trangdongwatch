var colours = ['red', '#eee', '#eee', '#ccc', '#ccc', '#ccc', '#ccc', '#ccc', '#ccc', '#ccc'];
var canvasDiv=document.getElementById("canvas");
var gr=new jsGraphics(canvasDiv);

function drawCurve(points, idA, idB, p)
{
	var col = new jsColor(colours[random(1, 1)]);
	var pen = new jsPen(col, 2);
	gr.drawCurve(pen, points, 0, false, idA, idB);
	for (i = 0; i < points.length; i++) {
		var col = new jsColor(colours[0]);
		//gr.fillCircle(col, points[i], 2);
	}
	var col0 = new jsColor(colours[0]);
	var col1 = new jsColor(colours[1]);
	if (p == 1) {
		gr.fillCircle(col1, points[0], 2, idA, idB);
		//gr.fillCircle(col1, points[points.length-1], 2);
	} else {
		//gr.fillCircle(col1, points[0], 4);
		gr.fillCircle(col1, points[points.length-1], 2, idA, idB);
	}
}

function random(min, max) {
	var value = Math.floor(Math.random() * (max - min + 1)) + min;
	return Math.floor(value);
}

function xyh(id) {
	if ($('#'+id).length) {
		var containment = $('#containment').offset().top;
		var l = Math.floor($('#'+id).offset().left);
		var t = Math.floor($('#'+id).offset().top - 3);
		var h = Math.floor($('#'+id).height());
		if ($.browser.mozilla==true) {
			//l+=132;
			t+=2;
		}
		if ($.browser.msie==true) {
			if ($.browser.version == '6.0' || $.browser.version == '7.0') {
				l-=6;
			}
			if ($.browser.version == '8.0') {
				//l+=130;
				//t+=2;
			}
		}
		return {x:l, y:t, h:h};
	}
	return {x:0, y:0, h:0};
}

var w   = 180;
var DY  = 30;
var DX  = 5;
var DX1 = 0;
var DX2 = 2;

draw2 = function(P1, P2, id1, id2, p) {
	var points = new Array();
	var y1 = random(P1.y + DY, P1.y + P1.h - DY);
	var y2 = random(P2.y + DY, P2.y + P2.h - DY);// alert(P1.x);
	if (P1.x == P2.x) {
		points.push(new jsPoint(P1.x + w + DX1, y1));
		if (y2 - y1 >= w) {
			var d12 = Math.floor((y2 - y1)/4);
			var rx1 = random(10, 20);
			points.push(new jsPoint(P1.x + w + rx1, y1 + d12));
			points.push(new jsPoint(P1.x + w + rx1 + random(5, 10), y1 + 2*d12));
			points.push(new jsPoint(P1.x + w + rx1, y1 + 3*d12));
		} else {
			points.push(new jsPoint(P2.x + w + random(15, 30), y1 + Math.floor((y2 - y1)/2)));
		}
		points.push(new jsPoint(P2.x + w + DX2, y2));
		drawCurve(points, id1, id2, p);
		return;
	} else {
		points.push(new jsPoint(P1.x + w + DX1, y1));
		if (y1 < y2) {
			if (y2 - y1 > w) {
				var rx1 = random(10, 20);
				var rx3 = random(30, 40);
				var rx2 = Math.floor(rx1 + Math.abs(rx1 - rx3)/2);
				var d12 = Math.floor((y2 - y1)/4);
				points.push(new jsPoint(P1.x + w + rx1, y1 + d12));
				points.push(new jsPoint(P1.x + w + rx2, y1 + 2*d12));
				points.push(new jsPoint(P1.x + w + rx3, y1 + 3*d12));
			} else {
				points.push(new jsPoint(P1.x + w + random(10, 20), y2));
			}
		} else if (y1 > y2) {
			if (y1 - y2 > w) {
				var rx1 = random(10, 30);
				var rx2 = random(40, 60);
				var k = 0;
				for (var i=y1-150; i>y2; i-=150) {
					if (i-50>y2) {
						if (k%2==0) {
							points.push(new jsPoint(P1.x + w + rx1, i));
						} else {
							points.push(new jsPoint(P1.x + w + rx2, i));
						}
						k++;
					}
				}		
				/*
				var rx1 = random(10, 20);
				var rx3 = random(30, 40);
				var rx2 = Math.floor(rx1 + Math.abs(rx1 - rx3)/2);
				var d12 = Math.floor((y1 - y2)/4);
				points.push(new jsPoint(P1.x + w + rx1, y1 - d12));
				points.push(new jsPoint(P1.x + w + rx2, y1 - 2*d12));
				points.push(new jsPoint(P1.x + w + rx3, y1 - 3*d12));
				*/
			}
		}
		points.push(new jsPoint(P2.x - DX2, y2));
		drawCurve(points, id1, id2, p);
		return;
	}
}

draw3 = function(P1, P2, P3, id1, id2, p) {
	var points = new Array();
	if (P1.y <= P3.y) {
		var y1 = random(P1.y + P1.h/2, P1.y + P1.h - DY);
		var y2 = P2.y + P2.h;
		var y3 = random(P3.y + DY, P3.y + P1.h/2);
		var rx = random(10, 20);
		points.push(new jsPoint(P1.x + w + DX1, y1));
		points.push(new jsPoint(P2.x - rx, y2 + random(25, 35)));
		points.push(new jsPoint(P2.x + w + rx, y2 + random(35, 45)));
		if (y2 < y3) {
			if (y3 - y2 > w) {
				var rx1 = random(10, 30);
				var rx2 = random(40, 60);
				var k = 0;
				for (var i=y2+w; i<y3; i+=150) {
					if (i-100 < y3) {
						if (k%2==0) {
							points.push(new jsPoint(P2.x + w + rx1, i));
						} else {
							points.push(new jsPoint(P2.x + w + rx2, i));
						}
						k++;
					}
				}				
			}
		}
		points.push(new jsPoint(P3.x - DX2, y3));
		drawCurve(points, id1, id2, p);
		return;
	} else {
		var y1 = random(P1.y + DY, P1.y + P1.h/2);
		var y2 = P2.y;
		var y3 = random(P3.y + P1.h/2, P3.y + P3.h - DY);
		var rx = random(10, 20);
		points.push(new jsPoint(P1.x + w + DX1, y1));
		points.push(new jsPoint(P2.x - rx, y2 - random(25, 35)));
		points.push(new jsPoint(P2.x + w + rx, y2 - random(25, 35)));
		if (y2 > y3) {
			if (y2 - y3 > w) {
				var rx1 = random(10, 30);
				var rx2 = random(40, 60);
				var k = 0;
				for (var i=y2-w; i>y3; i-=150) {
					if (i-100>y3) {
						if (k%2==0) {
							points.push(new jsPoint(P2.x + w + rx1, i));
						} else {
							points.push(new jsPoint(P2.x + w + rx2, i));
						}
						k++;
					}
				}				
			}
		}
		points.push(new jsPoint(P3.x - DX2, y3));
		drawCurve(points, id1, id2, p);
		return;
	}
}

draw4 = function(P1, P2, P3, P4, id1, id2, p) {
	var points = new Array();
	if (P1.y <= P4.y) {
		var y1 = random(P1.y + P1.h/2, P1.y + P1.h - DY);
		var y2 = P2.y + P2.h;
		var y3 = P3.y + P3.h;
		var y4 = random(P4.y + DY, P4.y + P4.h - DY);
		var rx = random(10, 20);
		points.push(new jsPoint(P1.x + w + DX1, y1));
		points.push(new jsPoint(P2.x - rx, y2 + random(25, 35)));
		if (Math.abs(y2-y3) > 100) {
			points.push(new jsPoint(P2.x + w, y2 + random(25, 35)));
			points.push(new jsPoint(P3.x, y3 + random(25, 35)));
		} else {
			points.push(new jsPoint(P2.x + w + 50, y2 + random(25, 35)));
		}		
		points.push(new jsPoint(P3.x + w + rx, y3 + random(25, 35)));
		if (y3 < y4) {
			if (y4 - y3 > w) {
				var rx1 = random(20, 40);
				var rx2 = random(40, 60);
				var k = 0;
				for (var i=y3+w; i<y4; i+=150) {
					if (i+100 < y4) {
						if (k%2==0) {
							points.push(new jsPoint(P3.x + w + rx1, i));
						} else {
							points.push(new jsPoint(P3.x + w + rx2, i));
						}
						k++;
					}
				}				
			}
		}
		points.push(new jsPoint(P4.x - DX2, y4));
		drawCurve(points, id1, id2, p);
		return;
	} else {
		var y1 = random(P1.y + DY, P1.y + P1.h/2 - DY);
		var y2 = P2.y;
		var y3 = P3.y;
		var y4 = random(P4.y + P1.h/2 + DY, P4.y + P4.h - DY);
		var rx = random(10, 20);
		points.push(new jsPoint(P1.x + w + DX1, y1));
		points.push(new jsPoint(P2.x - rx, y2 - random(25, 35)));
		if (Math.abs(y2-y3) > 100) {
			points.push(new jsPoint(P2.x + w, y2 - random(25, 35)));
			points.push(new jsPoint(P3.x, y3 - random(25, 35)));
		} else {
			points.push(new jsPoint(P2.x + w, y2 - random(25, 35)));
		}
		points.push(new jsPoint(P3.x + w + rx, y3 - random(25, 35)));
		if (y3 > y4) {
			if (y3 - y4 > w) {
				var rx1 = random(20, 40);
				var rx2 = random(40, 60);
				var k = 0;
				for (var i=y3-w; i>y4; i-=150) {
					if (i - 100 > y4) {
						if (k%2==0) {
							points.push(new jsPoint(P3.x + w + rx1, i));
						} else {
							points.push(new jsPoint(P3.x + w + rx2, i));
						}
						k++;
					}
				}
			}
		}
		points.push(new jsPoint(P4.x - DX2, y4));
		drawCurve(points, id1, id2, p);
		return;
	}
}

function connect(xA, yA, xB, yB, idA, idB, p) {
	if (xA > xB) {
		var xT = xB;
		xB = xA;
		xA = xT;
		var yT = yB;
		yB = yA;
		yA = yT;
	}
	var id1 = 'ID_'+xA+yA;
	if (xB-xA == 0 || xB-xA == 1) {
		var id2 = 'ID_'+xB+yB;
	} else if (xB-xA == 2) {
		var id2 = 'ID_'+(xA+1)+yA;
		if ($('#'+id2).length==0) {
			var id2 = 'ID_'+(xA+1)+(yA-1);
		}
		var id3 = 'ID_'+xB+yB;
	} else if (xB-xA == 3) {
		var id2 = 'ID_'+(xA+1)+yA;
		var id3 = 'ID_'+(xA+2)+yA;
		if ($('#'+id2).length==0) {
			var id2 = 'ID_'+(xA+1)+(yA-1);
		}
		if ($('#'+id3).length==0) {
			var id3 = 'ID_'+(xA+2)+(yA-1);
		}
		var id4 = 'ID_'+xB+yB;
	}
	var P1 = xyh(id1);
	var P2 = xyh(id2);
	var P3 = xyh(id3);
	var P4 = xyh(id4);
	if ($('#IDM_'+idA).length && $('#IDM_'+idB).length) {
		if (id3 == undefined  && id4== undefined ) {
			draw2(P1, P2, idA, idB, p);
		} else if (id4 == undefined) {
			draw3(P1, P2, P3, idA, idB, p);
		} else {
			draw4(P1, P2, P3, P4, idA, idB, p);
		}
	}
}

function clearCanvas()
{
	gr.clear();
}

function setPos(x, y, l, t) {
	$('#ID_'+x+y).offset({ top: t, left: l });
}

focusContent = function() {
	$('#pcontent').focus();
}

reply=function(pparent) {
	$('#pparent').val(pparent);
	$('#pcontent').val('');
	setTimeout("focusContent()",250);
}

scrollToId = function(id){
    $('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}

message=function(refresh, id) {
	var proom = $('#proom').val();
	var pplace = $('#pplace').val();
	var pdata = {
		r: proom,
		p: pplace,
		refresh: refresh,
		swidth: screenWidth,
		sheight: screenHeight
	}
	var purl = HOST+'/ajax/message';
	$.ajax({
		cache	: false,
		async	: true,
		data	: pdata,
		url		: purl,
		type	: 'post',
		success	: function(response) {
			if (response) {
				$('#containment').html(response);
				if (id!='') scrollToId(id);
			}
		}
	});
}

sendMsg = function() {
	var proom = $('#proom').val();
	var pcontent= $('#pcontent').val();
	var pparent	= $('#pparent').val();
	var pstyle	= $('#pstyle').val();
	if (pcontent != '' && proom > 0) {
		var purl = HOST+'/ajax/sendmsg';
		var pdata = {
			pcontent: pcontent,
			proom: proom,
			pparent: pparent,
			pstyle: pstyle
		}
		$.ajax({
			cache	: false,
			async	: true,
			data	: pdata,
			url		: purl,
			dataType: 'jsonp',
			jsonp	: 'callback',
			success	: function(response) {
				var error = response['error'];
				var msg = response['msg'];
				var id = response['id'];
				if (error == 1) {
					alert(msg);
				} else if (id > 0) {
					$('#idCounter').html($('#pchars').val());
					$('#pcontent').val('');
					$('#pparent').val(0);
					message(1, 'IDM_'+id);
				}
			}
		});
	}
}
style = function(s,bg,c) {
	$('#pstyle').val(s);
	$('#pcontent').css('background', bg);
	$('#pcontent').css('color', c);
	$('#pcontent').focus();
}
$('#pcontent').keyup(function(){
	var chars = $('#pchars').val();
	limitChars('pcontent', chars, 'idCounter');
});
$(document).ready(function() {
	message(1, '');
	setInterval("message(0, '')", 3000);
	$('#pane1').jScrollPane({scrollbarWidth:20, scrollbarMargin:5, dragMaxHeight:20, dragMinHeight:15, animateTo:true, animateInterval:30});
});
activeBox = function(id, subid) {
	$('.tabChat').removeClass('activeChat');
	$('#IDM_'+id).addClass('activeChat');
	//if (subid) {
		resetLine();
		var arrId = subid.split(',');
		for (i = 0; i < arrId.length; i++) {
			$('#IDM_'+arrId[i]).addClass('activeChat');
			if ($('#'+id+'_'+arrId[i]).length) {
				var lineDiv = document.getElementById(id+'_'+arrId[i]);
				fillLine(lineDiv);
			}
			if ($('#'+arrId[i]+'_'+id).length) {
				var lineDiv = document.getElementById(arrId[i]+'_'+id);
				fillLine(lineDiv);
			}
		}
	//}
}
activeLine = function(lineDiv) {
	$('.tabChat').removeClass('activeChat');
	var strId = lineDiv.id;
	var arrId = strId.split('_');
	for (i = 0; i < arrId.length; i++) {
		//$('#IDM_'+arrId[i]).addClass('activeChat');
	}
	resetLine();
	fillLine(lineDiv);
}
fillLine = function(lineDiv) {
	var children = lineDiv.getElementsByTagName('div');
	for (var i = 0; i < children.length; i++) {
		children[i].style.backgroundColor = 'red';
		children[i].style.zIndex=3000;
	}
	var	circle = document.getElementById('C_' + lineDiv.id);
	var children = circle.getElementsByTagName('div');
	for (var i = 0; i < children.length; i++) {
		children[i].style.backgroundColor = 'red';
		children[i].style.zIndex=3000;
	}
}
resetLine = function() {
	var canvas = document.getElementById('canvas');
	var lineDivs = canvas.getElementsByTagName('div');
	for (var l = 0; l < lineDivs.length; l++) {
		var lineDiv = lineDivs[l];
		var children = lineDiv.getElementsByTagName('div');
		for (var i = 0; i < children.length; i++) {
			children[i].style.backgroundColor = '#eee';
			children[i].style.zIndex=1000;
		}
	}
}
