<?php /* Smarty version 2.6.20, created on 2011-08-02 12:13:13
         compiled from user/update.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'intval', 'user/update.tpl', 4, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="navMain">
<h3 class="pageTitle"><?php if ($_GET['ptype'] == 1): ?><?php echo $this->_tpl_vars['t']->_('admin'); ?>
<?php else: ?><?php echo $this->_tpl_vars['t']->_('member'); ?>
<?php endif; ?></h3>
<form method="POST" enctype="multipart/form-data" onsubmit="return validateForm();" action="<?php echo @HOST_USER; ?>
/save?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['id'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
&ptype=<?php echo $_GET['ptype']; ?>
&page=<?php echo $this->_tpl_vars['intPage']; ?>
">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<td width="150px">(*) <?php echo $this->_tpl_vars['t']->_('username'); ?>
</td>
		<td>
			<input style="width:600px" type="text" id="pusername" name="pusername" value="<?php echo $this->_tpl_vars['arrResult']['username']; ?>
" />
			<div id="idErrorUserName1" class="error"><?php echo $this->_tpl_vars['t']->_('msg_required_username'); ?>
</div>
			<div id="idErrorUserName2" class="error"><?php echo $this->_tpl_vars['t']->_('msg_invalid_username'); ?>
</div>
			<div id="idErrorUserName3" class="error"><?php echo $this->_tpl_vars['t']->_('msg_duplicate_username'); ?>
</div>
		</td>
	</tr>
	<tr<?php if ($this->_tpl_vars['arrResult']): ?> style="display:none;"<?php endif; ?>>
		<td width="150px">(*) <?php echo $this->_tpl_vars['t']->_('password'); ?>
</td>
		<td>
			<input style="width:600px" type="password" id="ppassword" name="ppassword" value="" />
			<div class="error" id="idErrorPassword1"><?php echo $this->_tpl_vars['t']->_('msg_required_password'); ?>
</div>
			<div class="error" id="idErrorPassword2"><?php echo $this->_tpl_vars['t']->_('msg_invalid_password'); ?>
</div>
		</td>
	</tr>
	<tr>
		<td>(*) Email</td>
		<td>
			<input style="width:600px" type="text" id="pemail" name="pemail" value="<?php echo $this->_tpl_vars['arrResult']['email']; ?>
" />
			<div id="idErrorEmail1" class="error"><?php echo $this->_tpl_vars['t']->_('msg_required_email'); ?>
</div>
			<div id="idErrorEmail2" class="error"><?php echo $this->_tpl_vars['t']->_('msg_invalid_email'); ?>
</div>
			<div id="idErrorEmail3" class="error"><?php echo $this->_tpl_vars['t']->_('msg_duplicate_email'); ?>
</div>
		</td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['t']->_('fullname'); ?>
</td>
		<td><input style="width:600px" type="text" id="pfullname" name="pfullname" value="<?php echo $this->_tpl_vars['arrResult']['fullname']; ?>
" /></td>
	</tr>		
	<tr>
		<td valign="top"><?php echo $this->_tpl_vars['t']->_('content2'); ?>
</td>
		<td><textarea style="width:602px;height:100px;" id="pcontent" name="pcontent"><?php echo $this->_tpl_vars['arrResult']['content']; ?>
</textarea></td>
	</tr>	
</table>
<div class="padT2">
	<input type="hidden" id="pbackurl" name="pbackurl"  value="<?php echo $this->_tpl_vars['strBackUrl']; ?>
" />
	<input type="hidden" id="puserid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['id'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
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