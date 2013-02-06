<?php /* Smarty version 2.6.20, created on 2011-07-22 16:24:02
         compiled from title/update.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'intval', 'title/update.tpl', 4, false),array('function', 'select_title', 'title/update.tpl', 9, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="navMain">
<h3 class="pageTitle">Cấp danh hiệu cho thành viên <?php echo $this->_tpl_vars['arrUser']['username']; ?>
</h3>
<form method="POST" enctype="multipart/form-data" onsubmit="return validateForm();" action="<?php echo @HOST_TITLE; ?>
/save?puserid=<?php echo $this->_tpl_vars['intUserId']; ?>
&id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['id'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
<tr>
	<td width="150px">(*) Chọn danh hiệu</td>
	<td>
		<?php echo smarty_function_select_title(array('name' => 'ptitleid','item0' => $this->_tpl_vars['t']->_('select'),'selected' => $this->_tpl_vars['arrResult']['titleid']), $this);?>

		<div id="idErrorName" class="error"><?php echo $this->_tpl_vars['t']->_('msg_required_titleofmember'); ?>
</div>
	</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td><input class="inputText" type="text" id="ptxt" name="ptxt" value="<?php echo $this->_tpl_vars['arrResult']['txt']; ?>
" /></td>
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