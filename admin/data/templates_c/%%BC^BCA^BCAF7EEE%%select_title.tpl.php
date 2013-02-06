<?php /* Smarty version 2.6.20, created on 2011-07-21 11:37:24
         compiled from /home/donghoom/public_html/library/Plugins/Tpl/select_title.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'selectbox', '/home/donghoom/public_html/library/Plugins/Tpl/select_title.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_selectbox(array('name' => $this->_tpl_vars['name'],'arr' => $this->_tpl_vars['arrTitle'],'selected' => $this->_tpl_vars['selected'],'fkey' => 'id','fvalue' => 'name','item0' => $this->_tpl_vars['item0'],'attribs' => $this->_tpl_vars['attribs']), $this);?>