{include file="common/header.tpl"}
<div id="bodyMain">
<div class="navigation">
	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>
	<a href="{$smarty.const.HOST}/{$objUser->username}">Trang nhà của <strong>{if $AppUI->id==$objUser->id}Bạn{else}{$objUser->fullname}{/if}</strong></a>
	<a class="active" href="#">Thông tin cá nhân</a>
</div>
<div class="mainLeft" style="border:1px solid #e3e3e3;padding:0px;">
	{item_profile item=$arrUser}
	{include file="profile/tipcertify.tpl"}	
</div>
<div class="mainRight">
	<div class="bodyAdmin">
		{include file="profile/tabmenu.tpl"}		
		<div class="padT10">						
			<table cellpadding="6" cellspacing="0" border="0">				
				<tr>
					<td valign="top" align="right" width="180">{$t->_('username')}:</td>
					<td>{$objUser->username}</td>
				</tr>
				<tr>
					<td valign="top" align="right">Email:</td>
					<td>{$objUser->email}</td>
				</tr>
				<tr>
					<td valign="top" align="right">{$t->_('fullname')}:</td>
					<td>{$objUser->fullname|blank}</td>
				</tr>
				<tr>
					<td valign="top" align="right">{$t->_('address')}:</td>
					<td>{$objUser->address|blank}</td>
				</tr>					
				<tr>
					<td valign="top" align="right">{$t->_('gender')}:</td>
					<td>{if $objUser->gender}{$objUser->gender|gender}{else}...{/if}</td>
				</tr>
				<tr>
					<td valign="top" align="right">{$t->_('phone')}:</td>
					<td>{$objUser->phone|blank}</td>
				</tr>
				<tr>
					<td valign="top" align="right">{$t->_('mobile')}:</td>
					<td>{$objUser->mobile|blank}</td>
				</tr>
				<tr>
					<td valign="top" align="right">{$t->_('bank_name')}</td>
					<td>{$objUser->bank_name|blank}</td>
				</tr>
				<tr>
					<td valign="top" align="right">{$t->_('bank_account')}:</td>
					<td>{$objUser->bank_account|blank}</td>
				</tr>
				<tr>
					<td valign="top" align="right">{$t->_('bank_number')}:</td>
					<td>{$objUser->bank_no|blank}</td>
				</tr>
				{*
				<tr>
					<td valign="top" align="right">{$t->_('sologan')}:</td>
					<td>{$objUser->sologan|blank}</td>
				</tr>				
				<tr>
					<td valign="top" align="right">{$t->_('introduce')}:</td>
					<td>{$objUser->introduce|blank}</td>
				</tr>
				*}
				{if $AppUI->id==$objUser->id}
				<tr>
					<td valign="top" align="right">&nbsp;</td></td>
					<td valign="top">							
						<input onclick="document.location.href='{$smarty.const.HOST_ACCOUNT}';" type="button" class="bntSe" value="{$t->_('edit')}" /></td>
					</td>
				</tr>
				{/if}
			</table>							
		</div>
	</div>
</div>
</div>
{include file="common/footer.tpl"}