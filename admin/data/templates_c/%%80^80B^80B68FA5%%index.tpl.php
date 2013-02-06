<?php /* Smarty version 2.6.20, created on 2011-07-21 14:07:53
         compiled from company/index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="navMain">
<h3 class="pageTitle"><?php echo $this->_tpl_vars['t']->_('common_info'); ?>
</h3>
<form method="POST" enctype="multipart/form-data" action="<?php echo @HOST_COMPANY; ?>
/save">
<table width="100%" cellpadding="0" cellspacing="0" border="1">		
	<tr>
		<td colspan="2" class="pageTitle" style="font-weight:bold;"><?php echo $this->_tpl_vars['t']->_('company'); ?>
</td>			
	</tr>
	<tr>
		<td width="150px"><?php echo $this->_tpl_vars['t']->_('name_en'); ?>
</td>
		<td><input style="width:600px" type="text" id="pname_en" name="pname_en" value="<?php echo $this->_tpl_vars['arrCompany']['name_en']; ?>
" /></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['t']->_('name_vi'); ?>
</td>
		<td><input style="width:600px" type="text" id="pname_vi" name="pname_vi" value="<?php echo $this->_tpl_vars['arrCompany']['name_vi']; ?>
" /></td>
	</tr>				
	<tr>
		<td><?php echo $this->_tpl_vars['t']->_('address'); ?>
</td>
		<td><input style="width:600px" id="paddress" name="paddress" type="text" value="<?php echo $this->_tpl_vars['arrCompany']['address']; ?>
" /></td>
	</tr>			
	<tr>
		<td><?php echo $this->_tpl_vars['t']->_('sologan'); ?>
</td>
		<td><input style="width:600px" id="psologan" name="psologan" type="text" value="<?php echo $this->_tpl_vars['arrCompany']['sologan']; ?>
" /></td>
	</tr>		
	<tr>
		<td><?php echo $this->_tpl_vars['t']->_('phone'); ?>
</td>
		<td><input style="width:600px" id="pphone" name="pphone" type="text" value="<?php echo $this->_tpl_vars['arrCompany']['phone']; ?>
" /></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['t']->_('mobile'); ?>
</td>
		<td><input style="width:600px" id="pmobile" name="pmobile" type="text" value="<?php echo $this->_tpl_vars['arrCompany']['mobile']; ?>
" /></td>
	</tr>
	<tr>
		<td>Fax</td>
		<td><input style="width:600px" id="pfax" name="pfax" type="text" value="<?php echo $this->_tpl_vars['arrCompany']['fax']; ?>
" /></td>
	</tr>
	<tr>
		<td>Hot Line</td>
		<td><input style="width:600px" id="photline" name="photline" type="text" value="<?php echo $this->_tpl_vars['arrCompany']['hotline']; ?>
" /></td>
	</tr>		
	<tr>
		<td>Email</td>
		<td><input style="width:600px" type="text" id="pemail" name="pemail" value="<?php echo $this->_tpl_vars['arrCompany']['email']; ?>
" /></td>
	</tr>	
</table>
<div class="padT2">
	<?php if ($this->_tpl_vars['intPermission'] & 2): ?><input type="submit" value="<?php echo $this->_tpl_vars['t']->_('save'); ?>
" class="btnAction" /><?php endif; ?>
</div>
</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>