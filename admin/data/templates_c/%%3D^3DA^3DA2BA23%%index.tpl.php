<?php /* Smarty version 2.6.20, created on 2011-08-02 13:46:14
         compiled from file/index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="navMain">
<h3 class="pageTitle">Biểu tượng vui</h3>
<form id="form1" name="form1" method="POST" action="<?php echo @HOST_FILE; ?>
/doaction">
<table width="100%" cellpadding="0" cellspacing="0" border="1">			
	<tr>
		<td>
			<div class="fl">		
				<input id="btnUpload" type="button" value="Upload" onclick="dodelete()" class="btnAction" />
			</div>	
			<div class="fr">						
				<input type="button" value="<?php echo $this->_tpl_vars['t']->_('delete'); ?>
" onclick="dodelete()" class="btnAction" />
				<input type="hidden" id="paction" name="paction" value="0"/>
				<input type="hidden" id="pimage" name="pimage" value=""/>
			</div>	
		</td>
	</tr>		
	<tr>		
		<td class="imageManager" align="center" width="100%">
			<?php $_from = $this->_tpl_vars['arrResult']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['row']):
?>				
			<a href="javascript:checkitem('id<?php echo $this->_tpl_vars['i']; ?>
')">
				<div><img src="<?php echo @HOST_UPLOAD; ?>
/image/<?php echo $this->_tpl_vars['row']['file']; ?>
" width="140px" height="140px" /></div>
				<div rel="<?php echo $this->_tpl_vars['row']['id']; ?>
" style="display:none" class="checkICon" name="items[]" id="id<?php echo $this->_tpl_vars['i']; ?>
">
					<img src="images/icon/check.jpg" />
				</div>
			</a>			
			<?php endforeach; endif; unset($_from); ?>		
		</td>		
	</tr>	
</table>
</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>