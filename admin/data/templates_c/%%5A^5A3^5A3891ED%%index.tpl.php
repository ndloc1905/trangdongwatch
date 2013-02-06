<?php /* Smarty version 2.6.20, created on 2012-12-24 08:36:31
         compiled from topic/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'select_cateparent', 'topic/index.tpl', 33, false),array('function', 'select_cate', 'topic/index.tpl', 35, false),array('function', 'apaging', 'topic/index.tpl', 110, false),array('modifier', 'number_format', 'topic/index.tpl', 82, false),array('modifier', 'date_format', 'topic/index.tpl', 88, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="navMain">

	<h3 class="pageTitle"><?php echo $this->_tpl_vars['t']->_('topic'); ?>
</h3>

	<form onsubmit="return false;" id="form1" name="form1" method="POST" action="<?php echo @HOST_TOPIC; ?>
/doaction">

	<div class="padT2">

		<input style="width:150px;float:left;margin-right:2px;" type="text" id="pkeyword" name="pkeyword" value="<?php if ($_GET['pkeyword']): ?><?php echo $_GET['pkeyword']; ?>
<?php else: ?><?php echo $this->_tpl_vars['t']->_('keyword'); ?>
<?php endif; ?>" onfocus="search_focus('<?php echo $this->_tpl_vars['t']->_('keyword'); ?>
')" onblur="search_blur('<?php echo $this->_tpl_vars['t']->_('keyword'); ?>
')"/>

		<select id="pstatus" name="pstatus" style="float:left;margin-right:2px;">

			<option value="-1"><strong><?php echo $this->_tpl_vars['t']->_('all'); ?>
</strong></div>			

			<option value="1"<?php if ($this->_tpl_vars['intStatus'] == 1): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['t']->_('active'); ?>
</div>

			<option value="0"<?php if ($this->_tpl_vars['intStatus'] == 2): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['t']->_('inactive'); ?>
</div>			

			<option value="3"<?php if ($this->_tpl_vars['intStatus'] == 3): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['t']->_('lock'); ?>
</div>

			<option value="4"<?php if ($this->_tpl_vars['intStatus'] == 4): ?> selected="selected"<?php endif; ?>>Tổng Hợp</div>			

			<option value="5"<?php if ($this->_tpl_vars['intStatus'] == 5): ?> selected="selected"<?php endif; ?>>Đóng Đinh</div>			

			<option value="6"<?php if ($this->_tpl_vars['intStatus'] == 6): ?> selected="selected"<?php endif; ?>>Đã xác nhận đặt gạch</div>			

			<option value="7"<?php if ($this->_tpl_vars['intStatus'] == 7): ?> selected="selected"<?php endif; ?>>Chờ xác nhận đặt gạch</div>

		</select>		

		<?php echo smarty_function_select_cateparent(array('item0' => $this->_tpl_vars['t']->_('parent_name'),'selected' => $_GET['pparentid'],'attribs' => 'onchange="subcate(this.value);" style="float:left;margin-right:2px;"'), $this);?>


		<span id="idSubCate" style="float:left;margin-right:2px;"><?php echo smarty_function_select_cate(array('item0' => $this->_tpl_vars['t']->_('category'),'selected' => $_GET['pcateid'],'parentid' => $_GET['pparentid']), $this);?>
</span>

		<input type="button" value="<?php echo $this->_tpl_vars['t']->_('search'); ?>
" onclick="filter('<?php echo $this->_tpl_vars['t']->_('keyword'); ?>
')" class="btnAction" />

	</div>	

	<div class="space"></div>

	<table width="100%" cellpadding="0" cellspacing="0" border="1">

		<tr>

			<th width="20px"><input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" /></th>

			<th width="120px">Đăng bởi</th>

			<th><?php echo $this->_tpl_vars['t']->_('title'); ?>
</th>

			<th width="100px"><?php echo $this->_tpl_vars['t']->_('price'); ?>
</th>

			<th width="80px">Phản hồi</th>			

			<th width="80px">Tổng hợp</th>

			<th width="150px">Đóng đinh</th>

			<th width="80px"><?php echo $this->_tpl_vars['t']->_('lock'); ?>
</th>

			<th width="80px"><?php echo $this->_tpl_vars['t']->_('status'); ?>
</th>

			<th width="120px">Đăng lúc</th>

			<th width="50px"><?php echo $this->_tpl_vars['t']->_('edit'); ?>
</th>
            <th width="50px">Today</th>

		</tr>

		<?php $_from = $this->_tpl_vars['arrResult']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['row']):
?>

		<tr>

			<td><input type="checkbox" name="items[]" value="<?php echo $this->_tpl_vars['row']['id']; ?>
" /></td>

			<td><?php echo $this->_tpl_vars['row']['username']; ?>
</td>

			<td><?php echo $this->_tpl_vars['row']['title']; ?>
</td>

			<td align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['price'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : smarty_modifier_number_format($_tmp)); ?>
</td>

			<td align="center"><a href="<?php echo @HOST_COMMENT; ?>
?ptopicid=<?php echo $this->_tpl_vars['row']['id']; ?>
"><?php echo $this->_tpl_vars['row']['comments']; ?>
</a></td>			

			<td align="center"><?php if ($this->_tpl_vars['row']['status'] & 2): ?>Yes<?php else: ?>No<?php endif; ?></td>

			<td align="center"><?php if ($this->_tpl_vars['row']['top'] == 1): ?>Yes (<?php echo ((is_array($_tmp=$this->_tpl_vars['row']['topdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M %d/%m/%Y") : smarty_modifier_date_format($_tmp, "%H:%M %d/%m/%Y")); ?>
)<?php else: ?>No<?php endif; ?></td>

			<td align="center"><?php if ($this->_tpl_vars['row']['flags'] == 2): ?>Yes<?php else: ?>No<?php endif; ?></td>			

			<td align="center"><?php if ($this->_tpl_vars['row']['status'] == 0): ?><?php echo $this->_tpl_vars['t']->_('inactive'); ?>
<?php else: ?><?php echo $this->_tpl_vars['t']->_('active'); ?>
<?php endif; ?></td>

			<td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['postdate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M %d/%m/%Y") : smarty_modifier_date_format($_tmp, "%H:%M %d/%m/%Y")); ?>
</td>

			<td align="center"><a href="<?php echo @HOST_TOPIC; ?>
/update?id=<?php echo $this->_tpl_vars['row']['id']; ?>
"><?php echo $this->_tpl_vars['t']->_('edit'); ?>
</a></td>
<td align="center"><a href="<?php echo @HOST_TOPIC; ?>
/update?id=<?php echo $this->_tpl_vars['row']['id']; ?>
">Make today</a></td>
		</tr>

		<?php endforeach; endif; unset($_from); ?>

		<tr>

			<td colspan="11" align="right">

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
" onclick="doaction(1)" class="btnAction60" />

		<input type="button" value="<?php echo $this->_tpl_vars['t']->_('active'); ?>
" onclick="doaction(2)" class="btnAction60" />

		<input type="button" value="<?php echo $this->_tpl_vars['t']->_('inactive'); ?>
" onclick="doaction(3)" class="btnAction60" />

		<input type="button" value="<?php echo $this->_tpl_vars['t']->_('unlock'); ?>
" onclick="doaction(4)" class="btnAction60" />

		<input type="button" value="<?php echo $this->_tpl_vars['t']->_('lock'); ?>
" onclick="doaction(5)" class="btnAction60" />		

		<input type="button" value="Tổng hợp" onclick="doaction(6)" class="btnAction" />

		<input type="button" value="Xóa Tổng Hợp" onclick="doaction(7)" class="btnAction" />

		<input type="button" value="Đóng đinh" onclick="doaction(8)" class="btnAction" />

		<input type="button" value="Xóa Đóng Đinh" onclick="doaction(9)" class="btnAction" />

		<input type="hidden" id="paction" name="paction" value="0"/>

		
	</div>

	</form>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>