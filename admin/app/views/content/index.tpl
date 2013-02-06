{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">
{if $smarty.get.id==1}
	Giới thiệu diễn đàn
{elseif $smarty.get.id==2}
	Nội quy diễn đàn
{elseif $smarty.get.id==3}
	Giới thiệu chức năng đặt gạch
{elseif $smarty.get.id==4}
	Hướng dẫn sử dụng diễn đàn
{elseif $smarty.get.id==5}
	Giới thiệu ngắn ở header
{elseif $smarty.get.id==6}
	Nội quy ngắn ở footer
{/if}
</h3>
<form id="form1" name="form1" method="POST" action="{$smarty.const.HOST_CONTENT}/save?id={$arrResult.id}">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<td>{ckeditor name="pcontent_vi" value=$arrResult.content_vi height="400" width="600"}</td>
	</tr>		
</table>
{if ($intPermission&2)}
<div class="padT2">
	<input type="submit" value="{$t->_('save')}" class="btnAction" />
</div>
{/if}
</form>
</div>
{include file="common/footer.tpl"}