<div class="mainLeft">
	<div class="menuLeft">
		<ul class="categoties">
			{foreach from=$arrParent item=row key=i}
				<li><a href="{$smarty.const.HOST_FORUM}?id={$row.cateid}"><span>{$row.name}</span></a></li>
			{/foreach}			
		</ul>
	</div>
	<div class="clr padT2"></div>	
	{foreach from=$arrBanner1 item=row key=i}	
		<div class="padT2">{banner item=$row}</div>	
	{/foreach}	
</div>