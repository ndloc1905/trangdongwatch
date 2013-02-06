{if $arrResult}
<div class="itemHeaderTopics">
	<div class="col1">Tiêu đề</div>
	<div class="col2">Đăng bởi</div>
</div>
{foreach from=$arrResult item=row key=i}
	{item_topic item=$row}
{/foreach}
<div class="clr"></div>
{/if}
{*
{if $intTotal > $intLimit}
<div class="alignC">{paging total=$intTotal limit=$intLimit page=$intPage div="idhottopic"}</div>
{/if}
*}