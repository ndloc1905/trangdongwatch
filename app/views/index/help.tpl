{include file="common/header.tpl"}
<div class="navigation">
	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>
	<a class="active" href="javascript:void(0);">Hướng dẫn sử dụng diễn đàn</a>
</div>
<div id="bodyMain">
{include file="common/left.tpl"}
<div class="mainRight">
	<div class="bodyCol">
	<form id="frmRegister" name="frmRegister" onsubmit="return checkForm();" method="post" enctype="multipart/form-data" action="{$smarty.const.HOST}/index/doregister">
		<div class="tabNewsH">
			<h4 class="titleNewsH">Hướng dẫn sử dụng diễn đàn</h4>
			<div class="inTabNewsH">
				<div class="padT10">{$arrResult.content_vi}</div>
				<div class="space"></div>
			</div>
		</div>
	</form>
	</div>
	{include file="common/right.tpl"}
</div>
</div>
{include file="common/footer.tpl"}