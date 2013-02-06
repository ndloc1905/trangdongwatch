{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">{$t->_('category')}</h3>
<form method="POST" enctype="multipart/form-data" onsubmit="return validateForm();" action="{$smarty.const.HOST_CATE}/save?id={$arrResult.cateid|intval}">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<td width="150px">(*) {$t->_('name')} </td>
		<td>
			<input class="inputText" type="text" id="pname" name="pname" value="{$arrResult.name}" />
			<div id="idErrorName" class="error">{$t->_('msg_required_catename')}</div>
		</td>
	</tr>
	<tr>
		<td>{$t->_('zorder')}</td>
		<td><input class="inputText" type="text" id="pzorder" name="pzorder" value="{$arrResult.zorder}" /></td>
	</tr>
	<tr>
		<td>{$t->_('parent_name')}</td>
		<td>{select_cateparent item0=$t->_('select') selected=$arrResult.parent_id}</td>
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