<?php /* Smarty version 2.6.20, created on 2011-07-21 11:37:10
         compiled from member/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'select_status', 'member/index.tpl', 7, false),array('function', 'apaging', 'member/index.tpl', 52, false),array('modifier', 'intval', 'member/index.tpl', 35, false),array('modifier', 'number_format', 'member/index.tpl', 49, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="navMain">
<h3 class="pageTitle"><?php echo $this->_tpl_vars['t']->_('member'); ?>
</h3>
<form onsubmit="filter();return false;" id="form1" name="form1" method="POST" action="<?php echo @HOST_MEMBER; ?>
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
', 2)" class="btnAction" />
</div>
<div class="space"></div>
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<th width="20px"><input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" /></th>
		<th width="100px"><?php echo $this->_tpl_vars['t']->_('username'); ?>
</th>
		<th width="120px"><?php echo $this->_tpl_vars['t']->_('email'); ?>
</th>
		<th><?php echo $this->_tpl_vars['t']->_('fullname'); ?>
</th>		
		<th width="60px">Số topic</th>
		<th width="60px">Số sao</th>		
		<th width="100px"><?php echo $this->_tpl_vars['t']->_('phone'); ?>
</th>
		<th width="100px"><?php echo $this->_tpl_vars['t']->_('mobile'); ?>
</th>
		<th width="80px">Xác thực</th>
		<th width="80px"><?php echo $this->_tpl_vars['t']->_('status'); ?>
</th>
		<th width="80px">Danh hiệu</th>
		<th width="80px"><?php echo $this->_tpl_vars['t']->_('id_image'); ?>
</th>
		<th width="80px"><?php echo $this->_tpl_vars['t']->_('password'); ?>
</th>
		<th width="50px"><?php echo $this->_tpl_vars['t']->_('edit'); ?>
</th>
	</tr>
	<?php $_from = $this->_tpl_vars['arrResult']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['row']):
?>
	<tr>
		<td width="20px" align="center"><input type="checkbox" name="items[]" value="<?php echo $this->_tpl_vars['row']['id']; ?>
" /></td>
		<td title="<?php echo $this->_tpl_vars['row']['sologan']; ?>
"><?php echo $this->_tpl_vars['row']['username']; ?>
</td>
		<td><?php echo $this->_tpl_vars['row']['email']; ?>
</td>
		<td><?php echo $this->_tpl_vars['row']['fullname']; ?>
</td>		
		<td align="center"><a href="<?php echo @HOST_TOPIC; ?>
?pkeyword=<?php echo $this->_tpl_vars['row']['username']; ?>
"><?php echo $this->_tpl_vars['row']['topics']; ?>
</a></td>
		<td align="center"><a title="Click vào đây để tăng/giảm sao của thành viên này" href="<?php echo @HOST_MEMBER; ?>
/star?id=<?php echo $this->_tpl_vars['row']['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['ratings'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
</a></td>
		<td align="center"><?php echo $this->_tpl_vars['row']['phone']; ?>
</td>
		<td align="center"><?php echo $this->_tpl_vars['row']['mobile']; ?>
</td>
		<td align="center"><?php if ($this->_tpl_vars['row']['certify'] == 1): ?>Yes<?php else: ?>No<?php endif; ?></td>
		<td align="center"><?php if ($this->_tpl_vars['row']['status'] == 1): ?><?php echo $this->_tpl_vars['t']->_('unlock_nick'); ?>
<?php else: ?><?php echo $this->_tpl_vars['t']->_('lock_nick'); ?>
<?php endif; ?></td>
		<td align="center"><a href="<?php echo @HOST_TITLE; ?>
?puserid=<?php echo $this->_tpl_vars['row']['id']; ?>
"><?php echo $this->_tpl_vars['t']->_('view'); ?>
</a></td>
		<td align="center"><a target="_blank" href="<?php if ($this->_tpl_vars['row']['id_image']): ?><?php echo @HOST_UPLOAD_USER; ?>
/<?php echo $this->_tpl_vars['row']['id_image']; ?>
<?php else: ?>javascript:void(0);<?php endif; ?>"><?php echo $this->_tpl_vars['t']->_('view'); ?>
</a></td>
		<td align="center"><a href="<?php echo @HOST_CHANGEPASSWORD; ?>
?id=<?php echo $this->_tpl_vars['row']['id']; ?>
"><?php echo $this->_tpl_vars['t']->_('change'); ?>
</a></td>
		<td align="center"><a href="<?php echo @HOST_MEMBER; ?>
/update?id=<?php echo $this->_tpl_vars['row']['id']; ?>
"><?php echo $this->_tpl_vars['t']->_('edit'); ?>
</a></td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>

	<tr>
		<td colspan="15" align="right">
		<div style="float:left;font-weight:bold;"><?php echo $this->_tpl_vars['t']->_('total'); ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['intTotal'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : smarty_modifier_number_format($_tmp)); ?>
</div>
		<?php if ($this->_tpl_vars['intTotal'] > $this->_tpl_vars['intLimit']): ?>
		<?php if ($_GET['ptype'] != ''): ?>
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
" onclick="document.location.href='<?php echo @HOST_MEMBER; ?>
/update'" class="btnAction" />
	<input type="button" value="<?php echo $this->_tpl_vars['t']->_('delete'); ?>
" onclick="doaction(1)" class="btnAction" />
	<input type="button" value="<?php echo $this->_tpl_vars['t']->_('unlock_nick'); ?>
" onclick="doaction(2)" class="btnAction" />
	<input type="button" value="<?php echo $this->_tpl_vars['t']->_('lock_nick'); ?>
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