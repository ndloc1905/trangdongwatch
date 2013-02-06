<?php /* Smarty version 2.6.20, created on 2011-07-22 11:57:23
         compiled from banner/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'selectbox', 'banner/index.tpl', 6, false),array('function', 'apaging', 'banner/index.tpl', 47, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="navMain">
<h3 class="pageTitle">Banner</h3>
<form id="form1" name="form1" method="POST" action="<?php echo @HOST_BANNER; ?>
/doaction">
<div class="padT2">
	<?php echo smarty_function_selectbox(array('name' => 'ppageid','arr' => $this->_tpl_vars['arrPage'],'selected' => $this->_tpl_vars['intPageId'],'fkey' => 'id','fvalue' => 'name_vi','item0' => $this->_tpl_vars['t']->_('page'),'attribs' => "style=\"float:left;margin-right:2px;\""), $this);?>

	<select id="pcolumn" name="pcolumn" style="width:110px;float:left;margin-right:2px;">
		<option value="-1"><?php echo $this->_tpl_vars['t']->_('column'); ?>
</option>		
		<option value="0"<?php if ($this->_tpl_vars['intCol'] == '0'): ?> selected="selected"<?php endif; ?>>Top banner</option>
		<option value="1"<?php if ($this->_tpl_vars['intCol'] == '1'): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['t']->_('left'); ?>
</option>
		<option value="3"<?php if ($this->_tpl_vars['intCol'] == '3'): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['t']->_('right'); ?>
</option>
	</select>
	<select id="ptype" name="ptype" style="width:110px;float:left;margin-right:2px;">
		<option value="0">Loại Banner</option>
		<option value="1"<?php if ($this->_tpl_vars['intType'] == '1'): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['t']->_('image'); ?>
</option>
		<option value="2"<?php if ($this->_tpl_vars['intType'] == '2'): ?> selected="selected"<?php endif; ?>>Flash</option>
	</select>
	<input type="button" value="<?php echo $this->_tpl_vars['t']->_('search'); ?>
" onclick="filter('<?php echo $this->_tpl_vars['t']->_('keyword'); ?>
')" class="btnAction" />
</div>
<div class="space"></div>
<table width="100%" cellpadding="0" cellspacing="0" border="1">	
	<tr>
		<th width="20px"><input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" /></th>
		<th width="250px"><?php echo $this->_tpl_vars['t']->_('page'); ?>
</th>
		<th><?php echo $this->_tpl_vars['t']->_('name'); ?>
</th>
		<th width="80px"><?php echo $this->_tpl_vars['t']->_('column'); ?>
</th>
		<th width="110px"><?php echo $this->_tpl_vars['t']->_('zorder'); ?>
</th>
		<th width="80px"><?php echo $this->_tpl_vars['t']->_('type'); ?>
</th>
		<th width="80px"><?php echo $this->_tpl_vars['t']->_('status'); ?>
</th>
		<th width="50px"><?php echo $this->_tpl_vars['t']->_('edit'); ?>
</th>
	</tr>
	<?php $_from = $this->_tpl_vars['arrResult']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['row']):
?>
	<tr>
		<td align="center"><input type="checkbox" name="items[]" value="<?php echo $this->_tpl_vars['row']['id']; ?>
" /></td>
		<td><?php if ($this->_tpl_vars['l'] == 'vi'): ?><?php echo $this->_tpl_vars['row']['name_vi']; ?>
<?php else: ?><?php echo $this->_tpl_vars['row']['name_en']; ?>
<?php endif; ?></td>
		<td><?php echo $this->_tpl_vars['row']['name']; ?>
</td>
		<td align="center"><?php if ($this->_tpl_vars['row']['col'] == 0): ?>Top<?php elseif ($this->_tpl_vars['row']['col'] == 1): ?><?php echo $this->_tpl_vars['t']->_('left'); ?>
<?php elseif ($this->_tpl_vars['row']['col'] == 2): ?><?php echo $this->_tpl_vars['t']->_('center'); ?>
<?php elseif ($this->_tpl_vars['row']['col'] == 3): ?><?php echo $this->_tpl_vars['t']->_('right'); ?>
<?php endif; ?></td>
		<td align="center"><?php echo $this->_tpl_vars['row']['zorder']; ?>
</td>
		<td align="center"><?php if ($this->_tpl_vars['row']['type'] == 1): ?><?php echo $this->_tpl_vars['t']->_('image'); ?>
<?php else: ?>Flash<?php endif; ?></td>
		<td align="center"><?php if ($this->_tpl_vars['row']['status'] == 0): ?><?php echo $this->_tpl_vars['t']->_('inactive'); ?>
<?php else: ?><?php echo $this->_tpl_vars['t']->_('active'); ?>
<?php endif; ?></td>
		<td align="center"><?php if (( $this->_tpl_vars['intPermission'] & 2 )): ?><a href="<?php echo @HOST_BANNER; ?>
/update?id=<?php echo $this->_tpl_vars['row']['id']; ?>
"><?php echo $this->_tpl_vars['t']->_('edit'); ?>
</a><?php else: ?>&nbsp;<?php endif; ?></td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	<?php if ($this->_tpl_vars['intTotal'] > $this->_tpl_vars['intLimit']): ?>
	<tr>
		<td colspan="8" align="right">
			<?php echo smarty_function_apaging(array('total' => $this->_tpl_vars['intTotal'],'limit' => $this->_tpl_vars['intLimit'],'page' => $this->_tpl_vars['intPage'],'params' => $this->_tpl_vars['intParams']), $this);?>

		</td>
	</tr>
	<?php endif; ?>	
</table>
<div class="padT2">
	<input type="button" value="<?php echo $this->_tpl_vars['t']->_('addnew'); ?>
" onclick="document.location.href='<?php echo @HOST_BANNER; ?>
/update'" class="btnAction" />
	<input type="button" value="<?php echo $this->_tpl_vars['t']->_('delete'); ?>
" onclick="doaction(1)" class="btnAction" />
	<input type="button" value="<?php echo $this->_tpl_vars['t']->_('active'); ?>
" onclick="doaction(2)" class="btnAction" />
	<input type="button" value="<?php echo $this->_tpl_vars['t']->_('inactive'); ?>
" onclick="doaction(3)" class="btnAction" />
	<input type="hidden" id="paction" name="paction" value="0"/>
</div>
</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>