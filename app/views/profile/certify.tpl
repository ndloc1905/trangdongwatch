{include file="common/header.tpl"}
<div id="bodyMain">
<div class="navigation">
	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>
	<a href="{$smarty.const.HOST}/{$objUser->username}">Trang nhà của <strong>{if $AppUI->id==$objUser->id}Bạn{else}{$objUser->fullname}{/if}</strong></a>
	<a class="active" href="javascript:void(0)">Thông tin xác thực</a>
</div>
<div class="mainLeft" style="border:1px solid #e3e3e3;padding:0px;">
	{item_profile item=$arrUser}
</div>
<div class="mainRight">
	<div class="bodyAdmin">
		{include file="profile/tabmenu.tpl"}
		<form onsubmit="return checkForm({$AppUI->id});" method="post" enctype="multipart/form-data" action="{$smarty.const.HOST}/profile/docertify">
		<div class="tabNewsH">			
			<div class="inTabNewsH">
				<div class="padT10">						
				<table cellpadding="6" cellspacing="0" border="0">
					<tr>
						<td></td>
						<td><div class="padT10">Vui lòng cung cấp các thông tin xác thực bên dưới:</div></td>
					</tr>					
					<tr>
						<td valign="top" align="right">{$t->_('fullname')}<span class="red">*</span></td>
						<td>
							<input class="userInput" type="text" id="pfullname" name="pfullname" value="{$AppUI->fullname}" />
							<div class="error" id="idErrorFullName">{$t->_('msg_required_fullname')}</div>
						</td>
					</tr>
					<tr>
						<td valign="top" align="right">Email<span class="red">*</span></td>
						<td>
							<input class="userInput" type="text" id="pemail" name="pemail" value="{$AppUI->email}" />
							<div id="idErrorEmail1" class="error">{$t->_('msg_required_email')}</div>
							<div id="idErrorEmail2" class="error">{$t->_('msg_invalid_email')}</div>
							<div id="idErrorEmail3" class="error">{$t->_('msg_duplicate_email')}</div>
						</td>
					</tr>
					<tr>
						<td valign="top" align="right">{$t->_('address')}<span class="red">*</span></td>
						<td>
							<input class="userInput" type="text" id="paddress" name="paddress" value="{$AppUI->address}" />
							<div class="error" id="idErrorAddress">{$t->_('msg_required_address')}</div>
						</td>
					</tr>
					<tr>
						<td valign="top" align="right">{$t->_('phone')} <span class="red">*</span></td>
						<td><input class="userInput" type="text" id="pphone" name="pphone" value="{$AppUI->phone}" /></td>
					</tr>
					<tr>
						<td width="180px" align="right">Hình CMND <span class="red">*</span></td>
						<td>				
							<input type="file" id="fimage" name="fimage">	
							<input type="hidden" id="pimage" name="pimage" value="{$AppUI->image}" />
						</td>
					</tr>
					<tr>
						<td valign="top" align="right">{$t->_('captcha')}<span class="red">*</span></td>
						<td>
							<input class="userInput" type="text" id="pcaptcha" name="pcaptcha" value="" />
							<div class="error" id="idErrorCaptcha1" style="display:none;">{$t->_('msg_required_captcha')}</div>
							<div class="error" id="idErrorCaptcha2" style="display:none;">{$t->_('msg_invalid_captcha')}</div>
							<div class="captcha"><span id="idCaptCha">{captcha}</span><img onclick="refreshCaptcha('idCaptCha');" style="margin-left:10px;margin-bottom:12px;cursor:pointer;" src="images/ico/refresh.png" /></div>
						</td>
					</tr>
					<tr>
						<td valign="top" align="right">&nbsp;</td></td>
						<td valign="top">							
							<input type="submit" class="bntLogin" value="{$t->_('send')}" /></td>
						</td>
					</tr>
				</table>			
				</div>				
			</div>
		</div>
		</form>
	</div>
</div>
</div>
{include file="common/footer.tpl"}