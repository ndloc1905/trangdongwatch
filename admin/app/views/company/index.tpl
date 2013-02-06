{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">{$t->_('common_info')}</h3>
<form method="POST" enctype="multipart/form-data" action="{$smarty.const.HOST_COMPANY}/save">
<table width="100%" cellpadding="0" cellspacing="0" border="1">		
	<tr>
		<td colspan="2" class="pageTitle" style="font-weight:bold;">{$t->_('company')}</td>			
	</tr>
	<tr>
		<td width="150px">{$t->_('name_en')}</td>
		<td><input style="width:600px" type="text" id="pname_en" name="pname_en" value="{$arrCompany.name_en}" /></td>
	</tr>
	<tr>
		<td>{$t->_('name_vi')}</td>
		<td><input style="width:600px" type="text" id="pname_vi" name="pname_vi" value="{$arrCompany.name_vi}" /></td>
	</tr>				
	<tr>
		<td>{$t->_('address')}</td>
		<td><input style="width:600px" id="paddress" name="paddress" type="text" value="{$arrCompany.address}" /></td>
	</tr>			
	<tr>
		<td>{$t->_('sologan')}</td>
		<td><input style="width:600px" id="psologan" name="psologan" type="text" value="{$arrCompany.sologan}" /></td>
	</tr>		
	<tr>
		<td>{$t->_('phone')}</td>
		<td><input style="width:600px" id="pphone" name="pphone" type="text" value="{$arrCompany.phone}" /></td>
	</tr>
	<tr>
		<td>{$t->_('mobile')}</td>
		<td><input style="width:600px" id="pmobile" name="pmobile" type="text" value="{$arrCompany.mobile}" /></td>
	</tr>
	<tr>
		<td>Fax</td>
		<td><input style="width:600px" id="pfax" name="pfax" type="text" value="{$arrCompany.fax}" /></td>
	</tr>
	<tr>
		<td>Hot Line</td>
		<td><input style="width:600px" id="photline" name="photline" type="text" value="{$arrCompany.hotline}" /></td>
	</tr>		
	<tr>
		<td>Email</td>
		<td><input style="width:600px" type="text" id="pemail" name="pemail" value="{$arrCompany.email}" /></td>
	</tr>	
</table>
<div class="padT2">
	{if $intPermission&2}<input type="submit" value="{$t->_('save')}" class="btnAction" />{/if}
</div>
</form>
</div>
{include file="common/footer.tpl"}