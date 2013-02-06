{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">{$t->_('topic')}</h3>
<form method="POST" enctype="multipart/form-data" onsubmit="return validateForm();" action="{$smarty.const.HOST_TOPIC}/save?id={$arrResult.id|intval}">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td>(*) {$t->_('category')}</td>
		<td>
			{select_cateparent item0=$t->_('select') selected=$arrResult.parentid attribs="style=\"float:left;margin-right:2px;\" onchange=\"subcate(this.value)\""} 
			<span id="idSubCate">{if $arrResult.parentid}{select_cate item0=$t->_('select') parentid=$arrResult.parentid selected=$arrResult.cateid}{/if}</span>				
			<div id="idErrorCate" class="error">{$t->_('msg_required_category')}</div>
		</td>
	</tr>
	<tr>
		<td width="150px" valign="top">Từ khóa tìm kiếm</td>
		<td>
			<input class="inputText" type="text" id="ptags" name="ptags" value="{$arrResult.tags}" />
		</td>
	</tr>
	<tr>
		<td width="150px" valign="top">(*) {$t->_('title')}</td>
		<td>
			<input class="inputText" type="text" id="ptitle" name="ptitle" value="{$arrResult.title}" />
			<div id="idErrorTitle" class="error">{$t->_('msg_required_title')}</div>
		</td>
	</tr>
	<tr>
		<td valign="top">{$t->_('content')}</td>
		<td>{ckeditor name="pcontent" value=$arrResult.content height="300" width="600"}</td>
	</tr>
	<tr>
		<td valign="top">{$t->_('price')}</td>
		<td>
			<input class="inputText" type="text" id="pprice" name="pprice" value="{$arrResult.price}" />				
		</td>
	</tr>				
</table>
<div class="padT2">
	<input type="hidden" id="pbackurl" name="pbackurl"  value="{$strBackUrl}" />
	<input type="submit" value="{$t->_('save')}" class="btnAction" />
	<input type="button" value="{$t->_('cancel')}" class="btnAction" onclick="history.back();"/>
</div>
</form>
</div>
{include file="common/footer.tpl"}