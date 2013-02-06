<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="robots" content="index, all"/>
<meta name="distribution" content="Global"/>
<title>Admin</title>
<base href="{$smarty.const.HOST_ADMIN}/"></base>
<link href="css/themes/base/ui.all.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/setup.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/index.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/tag.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/chromestyle.css" rel="stylesheet" type="text/css" media="screen"/>
{if $arrCSS}{foreach from=$arrCSS item=css}<link href="{$css}" rel="stylesheet" type="text/css" />{/foreach}{/if}
</head>
<!--[if lte IE 6]><body class="ie6"><![endif]-->
<!--[if gte IE 7]><!--><body><!--<![endif]-->
<div class="navBody">
	<div class="navHeader">
		<div class="bannerAcl" style="margin-left:10px;"><h1>DONGHOOMEGA.VN CMS</h1></div>
		<ul style="margin-right:10px;">
			<li class="firstChild"><a href="{$smarty.const.HOST_LOGOUT}">{$t->_('logout')}</a></li>
			<li><a href="{$smarty.const.HOST_CHANGEPASSWORD}?id={$AppUI->id}">{$t->_('changepassword')}</a></li>
			<li><strong>{$AppUI->username}</strong></li>
		</ul>
		{include file="common/menu.tpl"}
	</div>