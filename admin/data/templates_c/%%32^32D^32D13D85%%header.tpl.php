<?php /* Smarty version 2.6.20, created on 2011-07-21 11:33:57
         compiled from common/header.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="robots" content="index, all"/>
<meta name="distribution" content="Global"/>
<title>Admin</title>
<base href="<?php echo @HOST_ADMIN; ?>
/"></base>
<link href="css/themes/base/ui.all.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/setup.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/index.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/tag.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/chromestyle.css" rel="stylesheet" type="text/css" media="screen"/>
<?php if ($this->_tpl_vars['arrCSS']): ?><?php $_from = $this->_tpl_vars['arrCSS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['css']):
?><link href="<?php echo $this->_tpl_vars['css']; ?>
" rel="stylesheet" type="text/css" /><?php endforeach; endif; unset($_from); ?><?php endif; ?>
</head>
<!--[if lte IE 6]><body class="ie6"><![endif]-->
<!--[if gte IE 7]><!--><body><!--<![endif]-->
<div class="navBody">
	<div class="navHeader">
		<div class="bannerAcl" style="margin-left:10px;"><h1>DONGHOOMEGA.VN CMS</h1></div>
		<ul style="margin-right:10px;">
			<li class="firstChild"><a href="<?php echo @HOST_LOGOUT; ?>
"><?php echo $this->_tpl_vars['t']->_('logout'); ?>
</a></li>
			<li><a href="<?php echo @HOST_CHANGEPASSWORD; ?>
?id=<?php echo $this->_tpl_vars['AppUI']->id; ?>
"><?php echo $this->_tpl_vars['t']->_('changepassword'); ?>
</a></li>
			<li><strong><?php echo $this->_tpl_vars['AppUI']->username; ?>
</strong></li>
		</ul>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>