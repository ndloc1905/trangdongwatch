<?php /* Smarty version 2.6.20, created on 2011-07-21 14:08:00
         compiled from tool/index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="navMain">
<h3 class="pageTitle">Tools</h3>
<form onsubmit="return false;" id="form1" name="form1" method="POST" action="<?php echo @HOST_TOOL; ?>
/doaction">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
	<td>
		<strong class="red">Xóa topic thành viên:</strong><div class="space"></div>
		Xoá tất cả topic đã đăng quá 1 tháng
		<div class="space"></div>
		<input type="button" value="Xóa topic" onclick="dojob(1)" class="btnAction" />
	</td>
</tr>
</table>
<div class="space"></div>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
	<td>
		<strong class="red">Xóa tin nhắn thành viên:</strong><div class="space"></div>		
		Xoá tất cả tin nhắn đã đăng quá 10 ngày
		<div class="space"></div>
		<input type="button" value="Xóa tin nhắn" onclick="dojob(2)" class="btnAction" />
	</td>
</tr>
</table>
<input type="hidden" id="paction" name="paction" value="0"/>
</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>