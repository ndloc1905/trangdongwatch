<?php /* Smarty version 2.6.20, created on 2011-07-22 16:23:55
         compiled from title/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'select_status', 'title/index.tpl', 10, false),array('function', 'apaging', 'title/index.tpl', 36, false),array('modifier', 'date_format', 'title/index.tpl', 26, false),array('modifier', 'status', 'title/index.tpl', 27, false),array('modifier', 'number_format', 'title/index.tpl', 33, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="navMain">
<h3 class="pageTitle">
	Danh hiệu của thành viên <?php echo $this->_tpl_vars['arrUser']['username']; ?>

	<span class="red"><?php if ($this->_tpl_vars['arrUser']['certify'] == 0): ?> (THÀNH VIÊN CHƯA XÁC THỰC CMND) <?php else: ?> (THÀNH VIÊN ĐÃ XÁC THỰC CMND) <?php endif; ?></span>
</h3>
<form onsubmit="return false;" id="form1" name="form1" method="POST" action="<?php echo @HOST_TITLE; ?>
/doaction">
<div class="padT2">
	<input style="width:150px;float:left;margin-right:2px;" type="text" id="pkeyword" name="pkeyword" value="<?php if ($_GET['pkeyword']): ?><?php echo $_GET['pkeyword']; ?>
<?php else: ?><?php echo $this->_tpl_vars['t']->_('keyword'); ?>
<?php endif; ?>" onfocus="search_focus('<?php echo $this->_tpl_vars['t']->_('keyword'); ?>
')" onblur="search_blur('<?php echo $this->_tpl_vars['t']->_('keyword'); ?>
')"/>
	<?php echo smarty_function_select_status(array('item0' => $this->_tpl_vars['t']->_('status'),'selected' => $this->_tpl_vars['intStatus'],'attribs' => 'style="float:left;margin-right:2px;"'), $this);?>
			
	<input type="button" value="<?php echo $this->_tpl_vars['t']->_('search'); ?>
" onclick="filter('<?php echo $this->_tpl_vars['t']->_('keyword'); ?>
')" class="btnAction" />
</div>
<div class="space"></div>
<table width="100%" cellpadding="0" cellspacing="0" border="1">
<tr>
	<th width="20px"><input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" /></th>
	<th>Tên danh hiệu</th>		
	<th width="120px">Cấp lúc</th>
	<th width="80px"><?php echo $this->_tpl_vars['t']->_('status'); ?>
</th>					
	<th width="50px"><?php echo $this->_tpl_vars['t']->_('edit'); ?>
</th>
</tr>
<?php $_from = $this->_tpl_vars['arrResult']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['row']):
?>
<tr>
	<td><input type="checkbox" name="items[]" value="<?php echo $this->_tpl_vars['row']['id']; ?>
" /></td>
	<td><?php echo $this->_tpl_vars['row']['name']; ?>
 <?php echo $this->_tpl_vars['row']['txt']; ?>
</td>							
	<td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['postdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M %d/%m/%Y") : smarty_modifier_date_format($_tmp, "%H:%M %d/%m/%Y")); ?>
</td>
	<td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['status'])) ? $this->_run_mod_handler('status', true, $_tmp) : smarty_modifier_status($_tmp)); ?>
</td>		
	<td align="center"><a href="<?php echo @HOST_TITLE; ?>
/update?id=<?php echo $this->_tpl_vars['row']['id']; ?>
"><?php echo $this->_tpl_vars['t']->_('edit'); ?>
</a></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
<tr>
	<td colspan="5" align="right">
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
	<input type="button" value="<?php echo $this->_tpl_vars['t']->_('addnew'); ?>
" onclick="document.location.href='<?php echo @HOST_TITLE; ?>
/update?puserid=<?php echo $this->_tpl_vars['intUserId']; ?>
'" class="btnAction" />
	<input type="button" value="<?php echo $this->_tpl_vars['t']->_('delete'); ?>
" onclick="doaction(1)" class="btnAction60" />
	<input type="button" value="<?php echo $this->_tpl_vars['t']->_('active'); ?>
" onclick="doaction(2)" class="btnAction60" />
	<input type="button" value="<?php echo $this->_tpl_vars['t']->_('inactive'); ?>
" onclick="doaction(3)" class="btnAction60" />
	<input type="hidden" id="paction" name="paction" value="0"/>
	<input type="hidden" id="puserid" name="puserid" value="<?php echo $this->_tpl_vars['arrUser']['id']; ?>
"/>
</div>
</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>