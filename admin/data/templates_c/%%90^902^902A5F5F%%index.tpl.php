<?php /* Smarty version 2.6.20, created on 2011-07-21 14:08:10
         compiled from rating/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'rating/index.tpl', 35, false),array('modifier', 'number_format', 'rating/index.tpl', 40, false),array('function', 'apaging', 'rating/index.tpl', 43, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="navMain">
<h3 class="pageTitle">Tặng sao</h3>
<form onsubmit="return false;" id="form1" name="form1" method="POST" action="<?php echo @HOST_RATING; ?>
/doaction">
<div class="padT2">
	<input style="width:150px;float:left;margin-right:2px;" type="text" id="pkeyword" name="pkeyword" value="<?php if ($_GET['pkeyword']): ?><?php echo $_GET['pkeyword']; ?>
<?php else: ?><?php echo $this->_tpl_vars['t']->_('keyword'); ?>
<?php endif; ?>" onfocus="search_focus('<?php echo $this->_tpl_vars['t']->_('keyword'); ?>
')" onblur="search_blur('<?php echo $this->_tpl_vars['t']->_('keyword'); ?>
')"/>
	<select id="pstatus" name="pstatus" style="float:left;margin-right:2px;">
		<option value="-1"><?php echo $this->_tpl_vars['t']->_('status'); ?>
</option>
		<option value="1">Đã duyệt</option>			
		<option value="2">Chờ duyệt</option>			
	</select>		
	<input type="button" value="<?php echo $this->_tpl_vars['t']->_('search'); ?>
" onclick="filter('<?php echo $this->_tpl_vars['t']->_('keyword'); ?>
')" class="btnAction" />
</div>
<div class="space"></div> 
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<th width="20px"><input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" /></th>
		<th width="150px">Người tặng </th>
		<th width="150px">Người nhận</th>
		<th>Lý do tặng sao</th>
		<th>Nhận xét</th>
		<th width="80px">Sao</th>
		<th width="120px"><?php echo $this->_tpl_vars['t']->_('status'); ?>
</th>
		<th width="120px"><?php echo $this->_tpl_vars['t']->_('postdate'); ?>
</th>
	</tr>
	<?php $_from = $this->_tpl_vars['arrResult']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['row']):
?>
	<tr>
		<td><input type="checkbox" name="items[]" value="<?php echo $this->_tpl_vars['row']['id']; ?>
" /></td>
		<td><?php echo $this->_tpl_vars['row']['username']; ?>
</td>
		<td><?php echo $this->_tpl_vars['row']['rusername']; ?>
</td>
		<td><?php echo $this->_tpl_vars['row']['content2']; ?>
</td>
		<td><?php echo $this->_tpl_vars['row']['content']; ?>
</td>		
		<td align="center"><?php if ($this->_tpl_vars['row']['point'] == 1): ?>Tốt<?php else: ?>Xấu<?php endif; ?></td>
		<td align="center"><?php if ($this->_tpl_vars['row']['status'] == 1): ?>Đã duyệt<?php else: ?>Chờ duyệt<?php endif; ?></td>
		<td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['lastupdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M %d/%m/%Y") : smarty_modifier_date_format($_tmp, "%H:%M %d/%m/%Y")); ?>
</td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	<tr>
		<td colspan="8" align="right">
		<div style="float:left;font-weight:bold;"><?php echo $this->_tpl_vars['t']->_('total'); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['intTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : smarty_modifier_number_format($_tmp)); ?>
</div>
		<?php if ($this->_tpl_vars['intTotal'] > $this->_tpl_vars['intLimit']): ?>
		<?php if ($_GET['pkeyword'] != ''): ?>
			<?php echo smarty_function_apaging(array('total' => $this->_tpl_vars['intTotal'],'limit' => $this->_tpl_vars['intLimit'],'page' => $this->_tpl_vars['intPage'],'params' => 1), $this);?>

		<?php else: ?>
			<?php echo smarty_function_apaging(array('total' => $this->_tpl_vars['intTotal'],'limit' => $this->_tpl_vars['intLimit'],'page' => $this->_tpl_vars['intPage']), $this);?>

		<?php endif; ?>
		<?php endif; ?>
		</td>
	</tr>	
</table>
<div class="padT2">
	<input type="button" value="<?php echo $this->_tpl_vars['t']->_('delete'); ?>
" onclick="doaction(1)" class="btnAction" />
		<input type="button" value="Duyệt" onclick="doaction(3)" class="btnAction" />
	<input type="hidden" id="paction" name="paction" value="0"/>
</div> 
</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>