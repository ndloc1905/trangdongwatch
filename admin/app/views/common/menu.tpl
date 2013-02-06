<div id="menuTop">
	<div class="chromestyle" id="chromemenu">
		<ul>
			<li><a target="_blank" rel="m_home" href="{$smarty.const.HOST}"><span style="text-transform:none">HOME</span></a></li>
			<li><a rel="m_user" href="{$smarty.const.HOST_MEMBER}"><span>{$t->_('member')}</span></a></li>
			<li><a href="{$smarty.const.HOST_CATE}"><span>Chuyên mục</span></a></li>
			<li><a rel="m_topic" href="{$smarty.const.HOST_TOPIC}"><span>{$t->_('topic')}</span></a></li>
			<li><a href="{$smarty.const.HOST_RATING}"><span>Tặng sao</span></a></li>
			<li><a href="{$smarty.const.HOST_MB}"><span>Hợp thư</span></a></li>			
			<li><a href="{$smarty.const.HOST_BANNER}"><span>Banner</span></a></li>			
			<li><a href="{$smarty.const.HOST_TYPE}"><span>Hãng</span></a></li>
			<li><a href="{$smarty.const.HOST_TOOL}"><span>Tools</span></a></li>
		</ul>
	</div>
</div>
<div id="m_home" class="dropmenudiv" style="width:250px;">
	<a href="{$smarty.const.HOST_COMPANY}" class="firstChild">{$t->_('common_info')}</a>
	<a href="{$smarty.const.HOST_CONTENT}?id=1">Giới thiệu diễn đàn</a>
	<a href="{$smarty.const.HOST_CONTENT}?id=2">Nội quy diễn đàn</a>
	<a href="{$smarty.const.HOST_CONTENT}?id=3">Giới thiệu chức năng đặt gạch</a>
	<a href="{$smarty.const.HOST_CONTENT}?id=4">Hướng dẫn sử dụng diễn đàn</a>	
	<a href="{$smarty.const.HOST_CONTENT}?id=5">Giới thiệu ngắn ở header</a>
	<a href="{$smarty.const.HOST_CONTENT}?id=6">Nội quy ngắn ở footer</a>
	<a href="{$smarty.const.HOST_FILE}">Biểu tượng vui</a>
</div>
<div id="m_user" class="dropmenudiv">
	<a href="{$smarty.const.HOST_USER}" class="firstChild">{$t->_('admin')}</a>
	<a href="{$smarty.const.HOST_MEMBER}">{$t->_('member')}</a>
	<a href="{$smarty.const.HOST_MEMBER}/request">Yêu cầu xác thực</a>
	<a href="{$smarty.const.HOST_UCOMMENT}">Tin nhắn Nhà tôi</a>
</div>
<div id="m_car" class="dropmenudiv">
	<a href="{$smarty.const.HOST_AGENT}" class="firstChild">{$t->_('agent')}</a>
	<a href="{$smarty.const.HOST_CAR}">{$t->_('cars')}</a>
</div>
<div id="m_topic" class="dropmenudiv">
	<a href="{$smarty.const.HOST_TOPIC}" class="firstChild">{$t->_('topic')}</a>
	<a href="{$smarty.const.HOST_COMMENT}">{$t->_('comment')}</a>
</div>