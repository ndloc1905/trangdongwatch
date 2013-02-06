<?php /* Smarty version 2.6.20, created on 2011-08-02 13:46:08
         compiled from common/menu.tpl */ ?>
<div id="menuTop">
	<div class="chromestyle" id="chromemenu">
		<ul>
			<li><a target="_blank" rel="m_home" href="<?php echo @HOST; ?>
"><span style="text-transform:none">HOME</span></a></li>
			<li><a rel="m_user" href="<?php echo @HOST_MEMBER; ?>
"><span><?php echo $this->_tpl_vars['t']->_('member'); ?>
</span></a></li>
			<li><a href="<?php echo @HOST_CATE; ?>
"><span>Chuyên mục</span></a></li>
			<li><a rel="m_topic" href="<?php echo @HOST_TOPIC; ?>
"><span><?php echo $this->_tpl_vars['t']->_('topic'); ?>
</span></a></li>
			<li><a href="<?php echo @HOST_RATING; ?>
"><span>Tặng sao</span></a></li>
			<li><a href="<?php echo @HOST_MB; ?>
"><span>Hợp thư</span></a></li>			
			<li><a href="<?php echo @HOST_BANNER; ?>
"><span>Banner</span></a></li>			
			<li><a href="<?php echo @HOST_TYPE; ?>
"><span>Hãng</span></a></li>
			<li><a href="<?php echo @HOST_TOOL; ?>
"><span>Tools</span></a></li>
		</ul>
	</div>
</div>
<div id="m_home" class="dropmenudiv" style="width:250px;">
	<a href="<?php echo @HOST_COMPANY; ?>
" class="firstChild"><?php echo $this->_tpl_vars['t']->_('common_info'); ?>
</a>
	<a href="<?php echo @HOST_CONTENT; ?>
?id=1">Giới thiệu diễn đàn</a>
	<a href="<?php echo @HOST_CONTENT; ?>
?id=2">Nội quy diễn đàn</a>
	<a href="<?php echo @HOST_CONTENT; ?>
?id=3">Giới thiệu chức năng đặt gạch</a>
	<a href="<?php echo @HOST_CONTENT; ?>
?id=4">Hướng dẫn sử dụng diễn đàn</a>	
	<a href="<?php echo @HOST_CONTENT; ?>
?id=5">Giới thiệu ngắn ở header</a>
	<a href="<?php echo @HOST_CONTENT; ?>
?id=6">Nội quy ngắn ở footer</a>
	<a href="<?php echo @HOST_FILE; ?>
">Biểu tượng vui</a>
</div>
<div id="m_user" class="dropmenudiv">
	<a href="<?php echo @HOST_USER; ?>
" class="firstChild"><?php echo $this->_tpl_vars['t']->_('admin'); ?>
</a>
	<a href="<?php echo @HOST_MEMBER; ?>
"><?php echo $this->_tpl_vars['t']->_('member'); ?>
</a>
	<a href="<?php echo @HOST_MEMBER; ?>
/request">Yêu cầu xác thực</a>
	<a href="<?php echo @HOST_UCOMMENT; ?>
">Tin nhắn Nhà tôi</a>
</div>
<div id="m_car" class="dropmenudiv">
	<a href="<?php echo @HOST_AGENT; ?>
" class="firstChild"><?php echo $this->_tpl_vars['t']->_('agent'); ?>
</a>
	<a href="<?php echo @HOST_CAR; ?>
"><?php echo $this->_tpl_vars['t']->_('cars'); ?>
</a>
</div>
<div id="m_topic" class="dropmenudiv">
	<a href="<?php echo @HOST_TOPIC; ?>
" class="firstChild"><?php echo $this->_tpl_vars['t']->_('topic'); ?>
</a>
	<a href="<?php echo @HOST_COMMENT; ?>
"><?php echo $this->_tpl_vars['t']->_('comment'); ?>
</a>
</div>