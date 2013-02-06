<?php /* Smarty version 2.6.20, created on 2011-07-28 12:43:06
         compiled from topic/update.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'intval', 'topic/update.tpl', 4, false),array('function', 'select_cateparent', 'topic/update.tpl', 9, false),array('function', 'select_cate', 'topic/update.tpl', 10, false),array('function', 'ckeditor', 'topic/update.tpl', 29, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="navMain">
<h3 class="pageTitle"><?php echo $this->_tpl_vars['t']->_('topic'); ?>
</h3>
<form method="POST" enctype="multipart/form-data" onsubmit="return validateForm();" action="<?php echo @HOST_TOPIC; ?>
/save?id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrResult']['id'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td>(*) <?php echo $this->_tpl_vars['t']->_('category'); ?>
</td>
		<td>
			<?php echo smarty_function_select_cateparent(array('item0' => $this->_tpl_vars['t']->_('select'),'selected' => $this->_tpl_vars['arrResult']['parentid'],'attribs' => "style=\"float:left;margin-right:2px;\" onchange=\"subcate(this.value)\""), $this);?>
 
			<span id="idSubCate"><?php if ($this->_tpl_vars['arrResult']['parentid']): ?><?php echo smarty_function_select_cate(array('item0' => $this->_tpl_vars['t']->_('select'),'parentid' => $this->_tpl_vars['arrResult']['parentid'],'selected' => $this->_tpl_vars['arrResult']['cateid']), $this);?>
<?php endif; ?></span>				
			<div id="idErrorCate" class="error"><?php echo $this->_tpl_vars['t']->_('msg_required_category'); ?>
</div>
		</td>
	</tr>
	<tr>
		<td width="150px" valign="top">Từ khóa tìm kiếm</td>
		<td>
			<input class="inputText" type="text" id="ptags" name="ptags" value="<?php echo $this->_tpl_vars['arrResult']['tags']; ?>
" />
		</td>
	</tr>
	<tr>
		<td width="150px" valign="top">(*) <?php echo $this->_tpl_vars['t']->_('title'); ?>
</td>
		<td>
			<input class="inputText" type="text" id="ptitle" name="ptitle" value="<?php echo $this->_tpl_vars['arrResult']['title']; ?>
" />
			<div id="idErrorTitle" class="error"><?php echo $this->_tpl_vars['t']->_('msg_required_title'); ?>
</div>
		</td>
	</tr>
	<tr>
		<td valign="top"><?php echo $this->_tpl_vars['t']->_('content'); ?>
</td>
		<td><?php echo smarty_function_ckeditor(array('name' => 'pcontent','value' => $this->_tpl_vars['arrResult']['content'],'height' => '300','width' => '600'), $this);?>
</td>
	</tr>
	<tr>
		<td valign="top"><?php echo $this->_tpl_vars['t']->_('price'); ?>
</td>
		<td>
			<input class="inputText" type="text" id="pprice" name="pprice" value="<?php echo $this->_tpl_vars['arrResult']['price']; ?>
" />				
		</td>
	</tr>				
</table>
<div class="padT2">
	<input type="hidden" id="pbackurl" name="pbackurl"  value="<?php echo $this->_tpl_vars['strBackUrl']; ?>
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