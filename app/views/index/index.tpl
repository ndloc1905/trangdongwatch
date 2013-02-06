{include file="common/header.tpl"}
<div id="bodyMain">
{include file="common/left.tpl"}
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
			<h4 class="titleNewsH">20 TIN TỔNG HỢP GẦN ĐÂY NHẤT</h4>
			<div class="inTabNewsH" id="idhottopic"></div>
		</div>
	</div>
	{include file="common/right.tpl"}
</div>
</div>
{include file="common/footer.tpl"}
./