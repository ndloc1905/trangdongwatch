<?php /* Smarty version 2.6.20, created on 2011-07-21 14:30:04
         compiled from index/changepassword.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="navMain">
<h3 class="pageTitle"><?php echo $this->_tpl_vars['t']->_('changepassword'); ?>
</h3>
<form id="form1" name="form1" method="POST" onsubmit="return checkform();" action="<?php echo @HOST_ADMIN; ?>
/index/dochangepassword?id=<?php echo $_GET['id']; ?>
">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<td width="150">(*)&nbsp;<label for="pnewpassword"><?php echo $this->_tpl_vars['t']->_('newpassword'); ?>
:</label></td>
		<td><input size="35" type="password" id="pnewpassword" name="pnewpassword"/></td>
	</tr>
	<tr>
		<td>(*)&nbsp;<label for="pconfirmpassword"><?php echo $this->_tpl_vars['t']->_('confirmnewpassword'); ?>
:</label></td>
		<td><input size="35" type="password" id="pconfirmpassword" name="pconfirmpassword" /></td>
	</tr>
</table>
<div class="padT2">
	<input type="submit" value="<?php echo $this->_tpl_vars['t']->_('save'); ?>
" class="btnAction"/>
</div>
</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script language="javascript">
checkform = function() {
var msg_required_newpassword = "'; ?>
<?php echo $this->_tpl_vars['t']->_('msg_required_newpassword'); ?>
<?php echo '";
var msg_invalid_confirmpassword = "'; ?>
<?php echo $this->_tpl_vars['t']->_('msg_invalid_confirmpassword'); ?>
<?php echo '";
var poldpassword = $(\'#poldpassword\').val();
var pnewpassword = $(\'#pnewpassword\').val();
var pconfirmpassword = $(\'#pconfirmpassword\').val();
if (pnewpassword==\'\') {
	alert(msg_required_newpassword);
	return false;
}
if (pnewpassword!=pconfirmpassword) {
	alert(msg_invalid_confirmpassword);
	return false;
}
return true;
}
</script>
'; ?>