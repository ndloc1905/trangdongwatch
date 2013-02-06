<?php /* Smarty version 2.6.20, created on 2011-07-24 16:42:22
         compiled from cate/update.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'intval', 'cate/update.tpl', 4, false),array('function', 'select_cateparent', 'cate/update.tpl', 19, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="navMain">
<h3 class="pageTitle"><?php echo $this->_tpl_vars['t']->_('category'); ?>
</h3>
<form method="POST" enctype="multipart/form-data" onsubmit="return validateForm();" action="<?php echo @HOST_CATE; ?>
/save?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['cateid'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<td width="150px">(*) <?php echo $this->_tpl_vars['t']->_('name'); ?>
 </td>
		<td>
			<input class="inputText" type="text" id="pname" name="pname" value="<?php echo $this->_tpl_vars['arrResult']['name']; ?>
" />
			<div id="idErrorName" class="error"><?php echo $this->_tpl_vars['t']->_('msg_required_catename'); ?>
</div>
		</td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['t']->_('zorder'); ?>
</td>
		<td><input class="inputText" type="text" id="pzorder" name="pzorder" value="<?php echo $this->_tpl_vars['arrResult']['zorder']; ?>
" /></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['t']->_('parent_name'); ?>
</td>
		<td><?php echo smarty_function_select_cateparent(array('item0' => $this->_tpl_vars['t']->_('select'),'selected' => $this->_tpl_vars['arrResult']['parent_id']), $this);?>
</td>
	</tr>		
</table>
<div class="padT2">
	<input type="hidden" id="pbackurl" name="pbackurl"  value="<?php echo $this->_tpl_vars['strBackUrl']; ?>
" />
	<input type="submit" value="<?php echo $this->_tpl_vars['t']->_('save'); ?>
" class="btnAction" />
	<input type="button" value="<?php echo $this->_tpl_vars['t']->_('cancel'); ?>
" class="btnAction" onclick="history.back();"/>
</div>
</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>