{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">Cập nhật sao cho thành viên {$arrResult.username}</h3>
<form id="form1" name="form1" method="POST" enctype="multipart/form-data" onsubmit="return checkFormStar();" action="{$smarty.const.HOST_MEMBER}/doaction?id={$arrResult.id|intval}&paction=5">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<td width="150px" valign="top">Số sao hiện tại</td>
		<td valign="top"><input style="width:440px" type="text" value="{$arrResult.ratings}" readonly="readonly"/></td>
	</tr>
	<tr>
		<td valign="top">Số sao mới</td>
		<td valign="top">	
			<input style="width:440px" type="text" id="pratings" name="pratings" value="{$arrResult.ratings}" />		
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