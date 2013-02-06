<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$strPageTitle}</title>
<meta name="description" content="{$strPageDesc}" />
<meta name="keywords" content="{$strPageKeyword}" />
<meta name="ROBOTS" content="NOFOLLOW">
<base href="{$smarty.const.HOST}"/>
<link rel="icon" type="image/ico" href="favicon.ico">
<link href="{$smarty.const.HOST}/css/setup.css" rel="stylesheet" type="text/css" />
<link href="{$smarty.const.HOST}/css/style.css" rel="stylesheet" type="text/css" />
<link href="{$smarty.const.HOST}/css/autocomplate.css" rel="stylesheet" type="text/css" />
{foreach from=$arrCSS item=css}<link href="{$css}" rel="stylesheet" type="text/css" />{/foreach}
</head>
<body>
<div id="site">
<div id="header">
	<div class="logo">
		{banner item=$arrBanner0.0}
		{*<a href="{$smarty.const.HOST}"><img src="{$smarty.const.HOST}/images/logo1.gif" /></a>*}
	</div>
	{if $AppUI->id<=0}
	<div class="boxLogin">
		<form id="frmLogin" name="frmLogin" onsubmit="return checkForm();" method="post" action="{$smarty.const.HOST}/index/dologin">
			<div class="emailInput">
				<label for="ploginemail">{$t->_('username')}:</label>
				<input type="text" id="ploginusername" name="ploginusername" value="{$arrRemember.0}" onkeydown="goLogin(event);">
			</div>
			<div class="passInput">
				<label for="ploginpassword">{$t->_('password')}:</label>
				<input type="password" id="ploginpassword" name="ploginpassword" value="{$arrRemember.1}" onkeydown="goLogin(event);">
			</div>
			<div class="rememberInput">
				<input type="checkbox" id="premember" name="premember" value="1" checked="checked"> <label for="premember">Lưu mật khẩu</label>
				<a href="javascript:void(0);" onclick="doLogin();" class="bntS1"><span>Đăng nhập</span></a>
			</div>
		</form>
	</div>
	<div class="underBoxLogin">
		<ul>
			<li style="background:none;"><a href="{$smarty.const.HOST_FORGETPASSWORD}">Quên mật khẩu</a></li>
			<li><a href="{$smarty.const.HOST_REGISTER}">Đăng ký</a></li>
		</ul>
	</div>
	{else}
	<div class="underBoxLogin">
		<ul>
			<li style="background:none;">
				<div class="nickName">
					<span class="normal">Xin chào</span>
					<a href="{url_user_rating username=$AppUI->username}">{$AppUI->username}</a>
					{star ratings=$AppUI->ratings username=$AppUI->username}
				</div>
			</li>
			<li class="bold"><a href="{$smarty.const.HOST_INBOX}">Hộp Thư</a> (<a href="{$smarty.const.HOST_INBOX}" class="urmail">{$arrStatistic.urmail|intval}</a>)</li>
			<li><a href="{$smarty.const.HOST_LOGOUT}">Thoát</a></li>
		</ul>
	</div>
	{/if}
</div>
<div class="clr"></div>
<div class="rowTop">{$arrContent5.content_vi}</div>
<div class="clr"></div>
<div class="rowHeader">
	<div class="tabSearch">		
		{select_cateparent item0='Chuyên mục' name="sc" selected=$smarty.get.sc attribs="class=\"selSe\""}
		{if $smarty.get.sk}
			{ac_search name='sk' multi=0 attr='class="inSe" onfocus="search_focus()" onblur="search_blur()"' value=$smarty.get.sk}
		{else}
			{ac_search name='sk' multi=0 attr='class="inSe" onfocus="search_focus()" onblur="search_blur()"' value=$t->_('keyword_default')}
		{/if}
		{*<input type="text" class="inSe" id="sk" name="sk" value="{if $smarty.get.sk}{$smarty.get.sk}{else}{$t->_('keyword_default')}{/if}" value="{$smarty.const.sk}" onfocus="search_focus('{$t->_('keyword_default')}')" onblur="search_blur('{$t->_('keyword_default')}')" />*}
		<input type="submit" class="bntSe" value="Tìm" onclick="search('{$t->_('keyword_default')}')" />
	</div>
	<div style="float:right;padding:11px 4px;">
		 {if $AppUI->id>0}<input type="button" onclick="document.location.href='{$smarty.const.HOST}/{$AppUI->username}';" class="bnt150" value="Trang nhà của Bạn" />{/if}
		 <input type="button" onclick="document.location.href='{$smarty.const.HOST_POSTTOPIC}';" class="bntLogin" value="Đăng tin" />
	</div>
	<div class="clr"></div>
</div>
<div class="clr"></div>