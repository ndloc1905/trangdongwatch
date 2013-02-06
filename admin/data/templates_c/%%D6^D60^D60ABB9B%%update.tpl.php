<?php /* Smarty version 2.6.20, created on 2011-07-22 17:01:25
         compiled from member/update.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'intval', 'member/update.tpl', 4, false),array('function', 'select_gender', 'member/update.tpl', 70, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="navMain">
<h3 class="pageTitle"><?php echo $this->_tpl_vars['t']->_('member'); ?>
</h3>
<form method="POST" enctype="multipart/form-data" onsubmit="return validateForm();" action="<?php echo @HOST_MEMBER; ?>
/save?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['id'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<td width="150px" valign="top"><?php echo $this->_tpl_vars['t']->_('account'); ?>
</td>
		<td valign="top">
			<table style="width:600px;" cellpadding="0" cellspacing="0" border="1">
				<tr>
					<td width="150px" valign="top">(*) <?php echo $this->_tpl_vars['t']->_('username'); ?>
</td>
					<td>
						<input style="width:440px" type="text" id="pusername" name="pusername" value="<?php echo $this->_tpl_vars['arrResult']['username']; ?>
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
					<td valign="top">(*) <?php echo $this->_tpl_vars['t']->_('password'); ?>
</td>
					<td>
						<input style="width:440px" type="password" id="ppassword" name="ppassword" value="" />
						<div class="error" id="idErrorPassword1"><?php echo $this->_tpl_vars['t']->_('msg_required_password'); ?>
</div>
						<div class="error" id="idErrorPassword2"><?php echo $this->_tpl_vars['t']->_('msg_invalid_password'); ?>
</div>
					</td>
				</tr>
			</table>
		</td>
	</tr>

	<tr>
		<td width="150px" valign="top"><?php echo $this->_tpl_vars['t']->_('basic_info'); ?>
</td>
		<td valign="top">
			<table style="width:600px;" cellpadding="0" cellspacing="0" border="1">
				<tr>
					<td width="150px" valign="top"><?php echo $this->_tpl_vars['t']->_('avatar'); ?>
</td>
					<td>
						<input type="file" id="fimage" name="fimage">
						<input type="hidden" id="pimage" name="pimage" value="<?php echo $this->_tpl_vars['arrResult']['image']; ?>
" />
						<?php if ($this->_tpl_vars['arrResult']['image']): ?>
							<br/><input type="checkbox" name="poldimage" value="<?php echo $this->_tpl_vars['arrResult']['image']; ?>
" /> <?php echo $this->_tpl_vars['t']->_('delete'); ?>

						<?php endif; ?>
					</td>
				</tr>
				<tr>
					<td valign="top">(*) <?php echo $this->_tpl_vars['t']->_('email'); ?>
</td>
					<td>
						<input style="width:440px" type="text" id="pemail" name="pemail" value="<?php echo $this->_tpl_vars['arrResult']['email']; ?>
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
					<td valign="top">(*) <?php echo $this->_tpl_vars['t']->_('fullname'); ?>
</td>
					<td>
						<input style="width:440px" type="text" id="pfullname" name="pfullname" value="<?php echo $this->_tpl_vars['arrResult']['fullname']; ?>
" />
						<div id="idErrorFullName" class="error"><?php echo $this->_tpl_vars['t']->_('msg_required_fullname'); ?>
</div>							
					</td>
				</tr>
				<tr>
					<td valign="top">(*) <?php echo $this->_tpl_vars['t']->_('address'); ?>
</td>
					<td>
						<input style="width:440px" type="text" id="paddress" name="paddress" value="<?php echo $this->_tpl_vars['arrResult']['address']; ?>
" />
						<div id="idErrorAddress" class="error"><?php echo $this->_tpl_vars['t']->_('msg_required_address'); ?>
</div>							
					</td>
				</tr>
				<tr>
					<td valign="top"><?php echo $this->_tpl_vars['t']->_('gender'); ?>
</td>
					<td><?php echo smarty_function_select_gender(array('item0' => $this->_tpl_vars['t']->_('select')), $this);?>
</td>
				</tr>
								<tr>
					<td valign="top"><?php echo $this->_tpl_vars['t']->_('phone'); ?>
</td>
					<td><input style="width:440px" type="text" id="pphone" name="pphone" value="<?php echo $this->_tpl_vars['arrResult']['phone']; ?>
" /></td>
				</tr>
				<tr>
					<td valign="top"><?php echo $this->_tpl_vars['t']->_('mobile'); ?>
</td>
					<td><input style="width:440px" type="text" id="pmobile" name="pmobile" value="<?php echo $this->_tpl_vars['arrResult']['mobile']; ?>
" /></td>
				</tr>
							</table>
		</td>
	</tr>


	<tr>
		<td valign="top"><?php echo $this->_tpl_vars['t']->_('bank'); ?>
</td>
		<td valign="top">
			<table style="width:600px;" cellpadding="0" cellspacing="0" border="1">
				<tr>
					<td valign="top" style="width:150px;"><?php echo $this->_tpl_vars['t']->_('bank_name'); ?>
</td>
					<td><input style="width:440px" type="text" id="pbank_name" name="pbank_name" value="<?php echo $this->_tpl_vars['arrResult']['bank_name']; ?>
" /></td>
				</tr>
				<tr>
					<td valign="top"><?php echo $this->_tpl_vars['t']->_('bank_account'); ?>
</td>
					<td><input style="width:440px" type="text" id="pbank_account" name="pbank_account" value="<?php echo $this->_tpl_vars['arrResult']['bank_account']; ?>
" /></td>
				</tr>
				<tr>
					<td valign="top"><?php echo $this->_tpl_vars['t']->_('bank_number'); ?>
</td>
					<td><input style="width:440px" type="text" id="pbank_no" name="pbank_no" value="<?php echo $this->_tpl_vars['arrResult']['pbank_no']; ?>
" /></td>
				</tr>
			</table>
		</td>
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
<?php echo '<script language="javascript">
$(function() {
$("#pbirthdate").datepicker({showButtonPanel: true});
$(\'#pbirthdate\').datepicker(\'option\', {dateFormat: \'dd/mm/yy\'});
$("#pbirthdate").datepicker({showButtonPanel: true});
$(\'#pbirthdate\').datepicker(\'option\', {dateFormat: \'dd/mm/yy\'});
});
</script>'; ?>