<?php /* Smarty version 2.6.20, created on 2011-07-22 17:01:34
         compiled from member/star.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'intval', 'member/star.tpl', 4, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="navMain">
<h3 class="pageTitle">Cập nhật sao cho thành viên <?php echo $this->_tpl_vars['arrResult']['username']; ?>
</h3>
<form id="form1" name="form1" method="POST" enctype="multipart/form-data" onsubmit="return checkFormStar();" action="<?php echo @HOST_MEMBER; ?>
/doaction?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['id'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&paction=5">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<td width="150px" valign="top">Số sao hiện tại</td>
		<td valign="top"><input style="width:440px" type="text" value="<?php echo $this->_tpl_vars['arrResult']['ratings']; ?>
" readonly="readonly"/></td>
	</tr>
	<tr>
		<td valign="top">Số sao mới</td>
		<td valign="top">	
			<input style="width:440px" type="text" id="pratings" name="pratings" value="<?php echo $this->_tpl_vars['arrResult']['ratings']; ?>
" />		
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