{include file="common/header.tpl"}
<div id="bodyMain">
<div class="navigation">
	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>
	<a class="active" href="javascript:void(0);">Giới thiệu diễn đàn</a>
</div>
{include file="common/left.tpl"}
<div class="mainRight">
	<div class="bodyCol">	
		<div class="tabNewsH">
			<h4 class="titleNewsH">Giới thiệu diễn đàn</h4>
			<div class="inTabNewsH">
				<div class="padT10">{$arrResult.content_vi}</div>
				<div class="space"></div>
			</div>
		</div>
	</div>
	{include file="common/right.tpl"}
</div>
</div>
{include file="common/footer.tpl"}