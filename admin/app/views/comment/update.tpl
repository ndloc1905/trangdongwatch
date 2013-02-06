{include file="common/header.tpl"}
<div class="navMain">
	<h3 class="pageTitle">{$t->_('comment')}</h3>
	<form method="POST" enctype="multipart/form-data" onsubmit="return validateForm();" action="{$smarty.const.HOST_COMMENT}/save?id={$arrResult.id|intval}">
	<table width="100%" cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td width="100px" valign="top">{$t->_('content')}</td>
			<td>{ckeditor name="pcontent" value=$arrResult.content height="300" width="600"}</td>
		</tr>		
	</table>	
	<div class="padT2">
		<input type="hidden" id="pbackurl" name="pbackurl" value="{$strBackUrl}" />
		<input type="hidden" id="ptopicid" name="ptopicid" value="{$intTopicId}" />
		<input type="submit" value="{$t->_('save')}" class="btnAction" />
		<input type="button" value="{$t->_('cancel')}" class="btnAction" onclick="history.back();"/>
	</div>
	</form>
</div>
{include file="common/footer.tpl"}