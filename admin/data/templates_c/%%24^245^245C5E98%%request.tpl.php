<?php /* Smarty version 2.6.20, created on 2011-07-21 14:29:24
         compiled from member/request.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'member/request.tpl', 24, false),array('modifier', 'number_format', 'member/request.tpl', 35, false),array('function', 'img_user', 'member/request.tpl', 30, false),array('function', 'apaging', 'member/request.tpl', 37, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="navMain">
<h3 class="pageTitle">Yêu cầu xác thực</h3>
<form onsubmit="filterRequest('<?php echo $this->_tpl_vars['t']->_('keyword'); ?>
');return false;" id="form1" name="form1" method="POST" action="<?php echo @HOST_MEMBER; ?>
/doaction">
<div class="padT2">
	<input style="width:196px;float:left;margin-right:2px;" type="text" id="pkeyword" name="pkeyword" value="<?php if ($_GET['pkeyword']): ?><?php echo $_GET['pkeyword']; ?>
<?php else: ?><?php echo $this->_tpl_vars['t']->_('keyword'); ?>
<?php endif; ?>" onfocus="search_focus('<?php echo $this->_tpl_vars['t']->_('keyword'); ?>
')" onblur="search_blur('<?php echo $this->_tpl_vars['t']->_('keyword'); ?>
')"/>
	<input type="button" value="<?php echo $this->_tpl_vars['t']->_('search'); ?>
" onclick="filterRequest('<?php echo $this->_tpl_vars['t']->_('keyword'); ?>
')" class="btnAction" />
</div>
<div class="space"></div> 
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<th width="20px"><input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" /></th>
		<th width="120px"><?php echo $this->_tpl_vars['t']->_('postdate'); ?>
</th>
		<th width="120px"><?php echo $this->_tpl_vars['t']->_('username'); ?>
</th>
		<th width="150px"><?php echo $this->_tpl_vars['t']->_('email'); ?>
</th>
		<th width="150px"><?php echo $this->_tpl_vars['t']->_('fullname'); ?>
</th>		
		<th><?php echo $this->_tpl_vars['t']->_('address'); ?>
</th>		
		<th width="100px"><?php echo $this->_tpl_vars['t']->_('phone'); ?>
</th>				
		<th width="80px"><?php echo $this->_tpl_vars['t']->_('id_image'); ?>
</th>		
	</tr>
	<?php $_from = $this->_tpl_vars['arrResult']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['row']):
?>
	<tr>
		<td width="20px" align="center"><input type="checkbox" name="items[]" value="<?php echo $this->_tpl_vars['row']['id']; ?>
" /></td>
		<td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M %d/%m/%Y") : smarty_modifier_date_format($_tmp, "%H:%M %d/%m/%Y")); ?>
</td>
		<td><?php echo $this->_tpl_vars['row']['username']; ?>
</td>
		<td><?php echo $this->_tpl_vars['row']['email']; ?>
</td>
		<td><?php echo $this->_tpl_vars['row']['fullname']; ?>
</td>				
		<td><?php echo $this->_tpl_vars['row']['address']; ?>
</td>				
		<td align="center"><?php echo $this->_tpl_vars['row']['phone']; ?>
</td>		
		<td align="center"><a target="_blank" href="<?php if ($this->_tpl_vars['row']['id_image']): ?><?php echo smarty_function_img_user(array('username' => $this->_tpl_vars['row']['username'],'image' => $this->_tpl_vars['row']['id_image']), $this);?>
<?php else: ?>javascript:void(0);<?php endif; ?>"><?php echo $this->_tpl_vars['t']->_('view'); ?>
</a></td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	<tr>
		<td colspan="8" align="right">
		<div style="float:left;font-weight:bold;"><?php echo $this->_tpl_vars['t']->_('total'); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['intTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : smarty_modifier_number_format($_tmp)); ?>
</div>
		<?php if ($this->_tpl_vars['intTotal'] > $this->_tpl_vars['intLimit']): ?>		
			<?php echo smarty_function_apaging(array('total' => $this->_tpl_vars['intTotal'],'limit' => $this->_tpl_vars['intLimit'],'page' => $this->_tpl_vars['intPage'],'params' => $this->_tpl_vars['intParams']), $this);?>

		<?php endif; ?>
		</td>
	</tr>	
</table>
<div class="padT2">
	<input type="button" value="<?php echo $this->_tpl_vars['t']->_('delete'); ?>
" onclick="doaction(6)" class="btnAction" />
	<input type="button" value="Xác thực" onclick="doaction(7)" class="btnAction" />
	<input type="hidden" id="paction" name="paction" value="0"/>
</div>
</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>