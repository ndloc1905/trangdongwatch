<?php /* Smarty version 2.6.20, created on 2011-07-21 14:08:11
         compiled from /home/donghoom/public_html/library/Plugins/Tpl/select_cateparent.tpl */ ?>
<select id="<?php echo $this->_tpl_vars['name']; ?>
" name="<?php echo $this->_tpl_vars['name']; ?>
" <?php echo $this->_tpl_vars['attribs']; ?>
>
<?php if ($this->_tpl_vars['item0']): ?><option value="-1" <?php if ($this->_tpl_vars['selected'] == '-1'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['item0']; ?>
</option><?php endif; ?>
<?php if ($this->_tpl_vars['filter']): ?><option value="0" <?php if ($this->_tpl_vars['selected'] == '0'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['t']->_('parent_name'); ?>
</option><?php endif; ?>
<?php $_from = $this->_tpl_vars['parent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['row']):
?>
<option value="<?php echo $this->_tpl_vars['row']['cateid']; ?>
" <?php if ($this->_tpl_vars['row']['cateid'] == $this->_tpl_vars['selected']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['row']['name']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select> 