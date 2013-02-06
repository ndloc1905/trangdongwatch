{foreach from=$arrResult item=row key=i}
<div class="rowDAadmin"{if $intTotal<=$intLimit && $i==$intTotal-1} style="border:0px;"{/if}>
	<div class="col1"><a href="{$smarty.const.HOST}/{$row.username}"><img src="{img_user image=$row.image}" class="picDA" /></a></div>
	<div class="col2">
		<a href="{$smarty.const.HOST}/{$row.username}" class="titleDA">{$row.username}</a>
		{if $AppUI->id==$row.userid || $AppUI->id==$row.ownerid}<span style="float:right"><a href="#">Xóa</a></span>{/if}
		<div class="clr"></div>
		{$row.content}<div class="clr"></div>
		<div class="datex" style="float:right;">Lúc {$row.postdate|date_format:"%H:%M %d/%m/%Y"}</div>
	</div>
	<div class="clr"></div>
</div>
{/foreach}
<div class="padT5 alignC">
{if $intTotal>$intLimit}
	<div class="alignR">{paging total=$intTotal limit=$intLimit page=$intPage url=$strUrl div='idUComment'}</div>
{/if}
</div>