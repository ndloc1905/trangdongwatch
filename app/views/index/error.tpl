{include file="common/header.tpl"}
<div class="bodyMain">
	{room}{shared}
    <div class="clr"></div>
	<h4 class="titleAll"><span>{$t->_('page_not_found')}</span></h4>
	<div class="padT10"></div>
	<div class="tabAd_detail">
		<div class="padT10"></div>
		<div class="colLeft">			
			<div class="tabListAD"></div>			
		</div>
		<div class="colRight">
			<div class="araeAD">
				{$arrOtherAdv.text}
			</div>
			<div class="padT10 bgLink">			
				{$t->_('note_page_not_found')} <br/>
				<a target="_blank" style="color:#3A414B;" href="{$smarty.const.HOST}">http://timemsg.com <img src="images/ico/link.gif" /></a>
			</div>
		</div>
		<div class="padT10"></div>
		<div class="padT10"></div>
		<div class="padT10"></div>
    </div>	
</div>
{include file="common/footer.tpl"}
{*
{literal}<script language="javascript">
setTimeout(function() { document.location.href="{/literal}{$smarty.const.HOST}{literal}"; }, 3000);
</script>{/literal}
*}