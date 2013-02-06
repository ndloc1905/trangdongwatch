<?php /* Smarty version 2.6.20, created on 2011-08-09 18:02:35
         compiled from ajax/subcate.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'select_cate', 'ajax/subcate.tpl', 1, false),)), $this); ?>
<?php if ($_GET['pparentid']): ?><?php echo smarty_function_select_cate(array('item0' => $this->_tpl_vars['t']->_('select'),'parentid' => $_GET['pparentid']), $this);?>
<?php endif; ?>