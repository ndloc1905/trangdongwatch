<?php /* Smarty version 2.6.20, created on 2011-07-22 17:01:25
         compiled from /home/donghoom/public_html/library/Plugins/Tpl/select_gender.tpl */ ?>
<select id="pgender" name="pgender" <?php echo $this->_tpl_vars['attribs']; ?>
>
	<?php if ($this->_tpl_vars['item0']): ?><option value="0"><?php echo $this->_tpl_vars['t']->_('select'); ?>
</option><?php endif; ?>
	<option value="1"<?php if ($this->_tpl_vars['selected'] == 1): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['t']->_('male'); ?>
</option>
	<option value="2"<?php if ($this->_tpl_vars['selected'] == 2): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['t']->_('female'); ?>
</option>
</select>