<?php /* Smarty version 2.6.20, created on 2011-07-22 11:57:26
         compiled from banner/update.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="navMain">
<h3 class="pageTitle">Banner</h3>
<form method="POST" onsubmit="return checkForm();" enctype="multipart/form-data" action="<?php echo @HOST_BANNER; ?>
/save?id=<?php echo $this->_tpl_vars['arrResult']['id']; ?>
">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<td width="200" valign="top">(*) <?php echo $this->_tpl_vars['t']->_('page'); ?>
</td>
		<td>
			<div style="float:left;width:600px;">
			<table style="width:580px" cellpadding="0" cellspacing="0" border="0">
			<tr><td><input value="0" type="checkbox" onclick="checkAll('pageid[]', this.checked ? 1 : 0)" /> <?php echo $this->_tpl_vars['t']->_('all'); ?>
</td></tr>
			<?php $_from = $this->_tpl_vars['arrPage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['row']):
?>
				<tr><td><input type="checkbox" name="pageid[]" value="<?php echo $this->_tpl_vars['row']['id']; ?>
" <?php if ($this->_tpl_vars['row']['id'] == $this->_tpl_vars['row']['pageid']): ?>checked="checked"<?php endif; ?> /> <?php if ($this->_tpl_vars['l'] == 'vi'): ?><?php echo $this->_tpl_vars['row']['name_vi']; ?>
<?php else: ?><?php echo $this->_tpl_vars['row']['name_en']; ?>
<?php endif; ?></td></tr>
			<?php endforeach; endif; unset($_from); ?>
			</table>
			</div>
			<div class="clr"></div>
			<div id="idErrorPage" class="error">Vui lòng chọn trang đặt Banner.</div>
		</td>
	</tr>
	<tr>
		<td>(*) <?php echo $this->_tpl_vars['t']->_('name'); ?>
</td>
		<td>
			<input style="width:600px" type="text" id="pname" name="pname" value="<?php echo $this->_tpl_vars['arrResult']['name']; ?>
" />
			<div class="clr"></div>
			<div id="idErrorName" class="error">Vui lòng nhập tên Banner.</div>
		</td>
	</tr>
	<tr>
		<td>(*) <?php echo $this->_tpl_vars['t']->_('column'); ?>
</td>
		<td>
			<select id="pcolumn" name="pcolumn" style="width:605px;">				
				<option value="-1"><?php echo $this->_tpl_vars['t']->_('select'); ?>
</option>				
				<option value="0"<?php if ($this->_tpl_vars['arrResult']['col'] == 0 && $this->_tpl_vars['arrResult']['col'] != ''): ?> selected="selected"<?php endif; ?>>Top banner (width:440px, height:80px) - Banner chổ đặt logo</option>				
				<option value="1"<?php if ($this->_tpl_vars['arrResult']['col'] == 1): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['t']->_('left'); ?>
 (width:90px)</option>				
				<option value="3"<?php if ($this->_tpl_vars['arrResult']['col'] == 3): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['t']->_('right'); ?>
 (width:132px)</option>
			</select>
			<div class="clr"></div>
			<div id="idErrorColumn" class="error">Vui lòng chọn cột.</div>
		</td>
	</tr>		
	<tr>
		<td>(*) Banner</td>
		<td>			
			<input type="button" value="Upload" id="btnUpload" class="btnAction" style="float:left;" /><span id="idstatus" style="display:none;">Đang upload...</span>
			<span id="idbanner" style="margin-top:5px;<?php if ($this->_tpl_vars['strBanner'] == ''): ?>display:none;<?php endif; ?>">
				<input style="margin-top:3px;" type="checkbox" id="pbanner" name="pbanner" value="<?php echo $this->_tpl_vars['strBanner']; ?>
" checked="checked"/> <label for="pbanner" id="idfilename"><?php echo $this->_tpl_vars['strBanner']; ?>
</label>
			</span>
			<div class="clr"></div>
			<div id="idErrorBanner" class="error">Vui lòng chọn Banner (File hình hoặc Flash)</div>		
			<div class="note" style="width:600px;">
				- Hình: .jpg,.png,.jpeg,.gif hoặc Flash: .swf <div class="clr"></div>
				- Hình hoặc Flash banner phải có width=190 (cột trái) và width=132 (cột phải) 
			</div>			
		</td>
	</tr>
	<tr>
		<td>(*) Kích thước (px) = width x height</td>
		<td>
			<input type="text" style="width:50px;" id="pwidth" name="pwidth" value="<?php echo $this->_tpl_vars['arrResult']['width']; ?>
" /> x
			<input type="text" style="width:50px;" id="pheight" name="pheight" value="<?php echo $this->_tpl_vars['arrResult']['height']; ?>
" />
			<div class="clr"></div>
			<div id="idErrorSize" class="error">Vui lòng nhập kích thước banner.</div>
		</td>
	</tr>	
	<tr>
		<td>Link</td>
		<td><input type="text" style="width:600px;" id="plink" name="plink" value="<?php echo $this->_tpl_vars['arrResult']['link']; ?>
" /></td>
	</tr>
	<tr>
		<td><?php echo $this->_tpl_vars['t']->_('zorder'); ?>
</td>
		<td><input type="text" style="width:600px;" id="pzorder" name="pzorder" value="<?php echo $this->_tpl_vars['arrResult']['zorder']; ?>
" /></td>
	</tr>
</table>
<div class="padT2">
	<input type="hidden" id="ptype" name="ptype"  value="<?php echo $this->_tpl_vars['arrResult']['type']; ?>
" />
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