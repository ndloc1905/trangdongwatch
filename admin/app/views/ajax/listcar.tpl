{if $arrResult}
<select id="{$strLst}" name="{$strLst}" style="border:0px;" multiple="" onclick="searchSelectItem('{$strLst}')"> 
{foreach from=$arrResult item=row key=i}
<option value="{$row.code}">{$row.code}</option>
{/foreach}
</select> 
{/if}