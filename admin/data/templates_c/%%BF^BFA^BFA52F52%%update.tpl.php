<?php /* Smarty version 2.6.20, created on 2011-08-02 13:07:22
         compiled from comment/update.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'intval', 'comment/update.tpl', 4, false),array('function', 'ckeditor', 'comment/update.tpl', 8, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="navMain">
	<h3 class="pageTitle"><?php echo $this->_tpl_vars['t']->_('comment'); ?>
</h3>
	<form method="POST" enctype="multipart/form-data" onsubmit="return validateForm();" action="<?php echo @HOST_COMMENT; ?>
/save?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['id'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
">
	<table width="100%" cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td width="100px" valign="top"><?php echo $this->_tpl_vars['t']->_('content'); ?>
</td>
			<td><?php echo smarty_function_ckeditor(array('name' => 'pcontent','value' => $this->_tpl_vars['arrResult']['content'],'height' => '300','width' => '600'), $this);?>
</td>
		</tr>		
	</table>	
	<div class="padT2">
		<input type="hidden" id="pbackurl" name="pbackurl" value="<?php echo $this->_tpl_vars['strBackUrl']; ?>
" />
		<input type="hidden" id="ptopicid" name="ptopicid" value="<?php echo $this->_tpl_vars['intTopicId']; ?>
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