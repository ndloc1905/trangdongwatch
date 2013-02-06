{include file="common/header.tpl"}
<div id="bodyMain">
<div class="navigation">
	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>
	{if $arrCateDetail.parent_id > 0}
		<a href="{$smarty.const.HOST_FORUM}?id={$arrCateDetail.parent_id}">{$arrCateDetail.parent_name}</a>
		<a class="active" href="{$smarty.const.HOST_FORUM}?id={$arrCateDetail.cateid}">{$arrCateDetail.name}</a>
	{else}
		<a class="active" href="{$smarty.const.HOST_FORUM}?id={$arrCateDetail.cateid}">{$arrCateDetail.name}</a>
	{/if}
</div>
<div class="mainLeft">
	<div class="menuLeft">
		<ul class="categoties">
		<li>
			<a href="{$smarty.const.HOST_FORUM}?id={$intParentId}"><span>{if $arrCateDetail.parent_id==0}{$arrCateDetail.name}{else}{$arrCateDetail.parent_name}{/if}</span></a>
			<ul>
			{foreach from=$arrSubCate item=row key=i}
				<li{if $i>=$arrSubCate|@count-1} style="border-bottom:0px;"{/if}><a href="{$smarty.const.HOST_FORUM}?id={$row.cateid}"><span>{$row.name}</span></a></li>
			{/foreach}
			</ul>
		</li>
		</ul>
	</div>
	<div class="clr padT2"></div>
	{foreach from=$arrBanner1 item=row key=i}	
		<div class="padT2">{banner item=$row}</div>	
	{/foreach}
</div>
<div class="mainRight">
	<div class="bodyCol">
		{if $arrNewTopic}
		<div class="tabNewsH">
			<h4 class="titleNewsH">Tin mới đăng hôm nay</h4>
			<div class="inTabNewsH">
				<div class="itemHeaderTopics">
					<div class="col1">Tiêu đề</div>
					<div class="col2">Đăng bởi</div>			
				</div>
				{foreach from=$arrNewTopic item=row key=i}
					{item_topic item=$row}
				{/foreach}
				<div class="space"></div>			
			</div>
		</div>
		<div class="space"></div>
		{/if}		
		<div class="tabNewsH">
			<h4 class="titleNewsH">{$arrCateDetail.name}</h4>
			<div class="inTabNewsH">
			{if $arrResult}
				<div class="itemHeaderTopics">
					<div class="col1">Tiêu đề</div>
					<div class="col2">Đăng bởi</div>
				</div>
				{foreach from=$arrResult item=row key=i}
					{item_topic item=$row}
				{/foreach}
				<div class="clr"></div>				
				{if $intTotal > $intLimit}
					<div class="alignC">{paging total=$intTotal limit=$intLimit page=$intPage params=1}</div>
				{/if}
			{else}
				<div class="listEmpty">Hiện tại, chưa có tin trong chuyên mục này.</div>
			{/if}
			</div>
		</div>
	</div>
	{include file="common/right.tpl"}
</div>
</div>
{include file="common/footer.tpl"}