{include file="common/header.tpl"}
<div class="navigation">
	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>
	<a class="active" href="javascript:void(0);">Tìm kiếm</a>
</div>
<div id="bodyMain">
{include file="common/left.tpl"}
<div class="mainRight">
	<div class="bodyCol">
		<div class="tabNewsH">
			<h4 class="titleNewsH">Kết quả tìm kiếm ({$intTotal})</h4>
			<div class="inTabNewsH">
			{if $intTotal == 0}
				<div class="listEmpty">Không tìm thấy.</div>
			{else}				
				<div class="itemHeaderTopics">
					<div class="col1">Tiêu đề</div>
					<div class="col2">Đăng bởi</div>
				</div>
				{foreach from=$arrResult item=row key=i}
					{item_topic item=$row}
				{/foreach}
				{if $intTotal > $intLimit}
				<div class="space"></div>
				<div class="padT2 alignC">
					{paging total=$intTotal limit=$intLimit page=$intPage params=1}
				</div>
				{/if}
			{/if}
			<div class="space"></div>
			</div>
		</div>
		<div class="space"></div>
	</div>
	{include file="common/right.tpl"}
</div>
</div>
{include file="common/footer.tpl"}