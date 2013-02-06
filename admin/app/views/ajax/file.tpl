{if $arrResult}
<ul style="float:left;background:none;padding:0px;line-height:24px;width:600px">
{foreach from=$arrResult item=row key=i}
	<li style="float:left;background:none;clear:both;padding:0px;"><input value="{$row.id}" name="pfiles[]" type="checkbox" checked="checked" /> {$row.name}</li>
{/foreach}
</ul>
{/if}