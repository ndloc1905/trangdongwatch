<?php /* Smarty version 2.6.20, created on 2011-07-22 16:49:32
         compiled from content/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'ckeditor', 'content/index.tpl', 21, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="navMain">
<h3 class="pageTitle">
<?php if ($_GET['id'] == 1): ?>
	Giới thiệu diễn đàn
<?php elseif ($_GET['id'] == 2): ?>
	Nội quy diễn đàn
<?php elseif ($_GET['id'] == 3): ?>
	Giới thiệu chức năng đặt gạch
<?php elseif ($_GET['id'] == 4): ?>
	Hướng dẫn sử dụng diễn đàn
<?php elseif ($_GET['id'] == 5): ?>
	Giới thiệu ngắn ở header
<?php elseif ($_GET['id'] == 6): ?>
	Nội quy ngắn ở footer
<?php endif; ?>
</h3>
<form id="form1" name="form1" method="POST" action="<?php echo @HOST_CONTENT; ?>
/save?id=<?php echo $this->_tpl_vars['arrResult']['id']; ?>
">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<td><?php echo smarty_function_ckeditor(array('name' => 'pcontent_vi','value' => $this->_tpl_vars['arrResult']['content_vi'],'height' => '400','width' => '600'), $this);?>
</td>
	</tr>		
</table>
<?php if (( $this->_tpl_vars['intPermission'] & 2 )): ?>
<div class="padT2">
	<input type="submit" value="<?php echo $this->_tpl_vars['t']->_('save'); ?>
" class="btnAction" />
</div>
<?php endif; ?>
</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>