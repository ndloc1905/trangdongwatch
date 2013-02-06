<?php /* Smarty version 2.6.20, created on 2011-07-21 11:37:10
         compiled from /home/donghoom/public_html/library/Plugins/Tpl/select_status.tpl */ ?>
<select id="<?php echo $this->_tpl_vars['name']; ?>
" name="<?php echo $this->_tpl_vars['name']; ?>
" <?php echo $this->_tpl_vars['attribs']; ?>
>
	<?php if ($this->_tpl_vars['item0']): ?><option value="-1"><?php echo $this->_tpl_vars['item0']; ?>
</option><?php endif; ?>
	<option value="1"<?php if ($this->_tpl_vars['selected'] == '1'): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['t']->_('active'); ?>
</option>
	<option value="0"<?php if ($this->_tpl_vars['selected'] == '0'): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['t']->_('inactive'); ?>
</option>
</select>