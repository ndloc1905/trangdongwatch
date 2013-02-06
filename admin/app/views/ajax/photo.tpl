{foreach from=$arrResult item=row key=i}
<div class="image">
	<a href="javascript:checkitem('id{$i}')">
	<div><img title="{$row.title_vi}" src="{img_photo item=$row}" width="108px" height="108px" /></div>
	<div rel="{$row.id}" style="display:none" class="checkICon" name="items[]" id="id{$i}">
		<img src="images/icon/check.jpg" />
	</div>
	</a>
	<a href="{$smarty.const.HOST_PHOTO}/update?id={$row.id}&palbum={$row.album}">{$objTranslate->_('edit')}</a> |
	{if $row.status==0}{$objTranslate->_('inactive')}{else}{$objTranslate->_('active')}{/if}
</div>
{/foreach}
<div style="clear:both;float:left;margin-top:15px;">
{apaging total=$intTotal limit=$intLimit page=$intPage params=1 div="idphoto"}
</div>