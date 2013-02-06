{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">Biểu tượng vui</h3>
<form id="form1" name="form1" method="POST" action="{$smarty.const.HOST_FILE}/doaction">
<table width="100%" cellpadding="0" cellspacing="0" border="1">			
	<tr>
		<td>
			<div class="fl">		
				<input id="btnUpload" type="button" value="Upload" onclick="dodelete()" class="btnAction" />
			</div>	
			<div class="fr">						
				<input type="button" value="{$t->_('delete')}" onclick="dodelete()" class="btnAction" />
				<input type="hidden" id="paction" name="paction" value="0"/>
				<input type="hidden" id="pimage" name="pimage" value=""/>
			</div>	
		</td>
	</tr>		
	<tr>		
		<td class="imageManager" align="center" width="100%">
			{foreach from=$arrResult item=row key=i}				
			<a href="javascript:checkitem('id{$i}')">
				<div><img src="{$smarty.const.HOST_UPLOAD}/image/{$row.file}" width="140px" height="140px" /></div>
				<div rel="{$row.id}" style="display:none" class="checkICon" name="items[]" id="id{$i}">
					<img src="images/icon/check.jpg" />
				</div>
			</a>			
			{/foreach}		
		</td>		
	</tr>	
</table>
</form>
</div>
{include file="common/footer.tpl"}