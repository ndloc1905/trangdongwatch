{include file="common/header.tpl"}
<div id="bodyMain">
<div class="navigation">
	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>
	<a href="{$smarty.const.HOST}/{$objUser->username}">Trang nhà của <strong>{if $AppUI->id==$objUser->id}Bạn{else}{$objUser->fullname}{/if}</strong></a>
	<a class="active" href="#">Sửa thông tin cá nhân</a>
</div>
<div class="mainLeft" style="border:1px solid #e3e3e3;padding:0px;">
	{item_profile item=$arrUser}
	{include file="profile/tipcertify.tpl"}
</div>
<div class="mainRight">
	<div class="bodyAdmin">
		{include file="profile/tabmenu.tpl"}
		<div class="space"></div>
		<div class="space"></div>
		<form onsubmit="return checkUpdatePassword();" method="post" action="{$smarty.const.HOST}/profile/dosavepassword">
		<div class="tabNewsH">
			<h4 class="titleNewsH">Thông tin đăng nhập</h4>
			<div class="inTabNewsH">
				<div class="padT10">
				<table cellpadding="6" cellspacing="0" border="0">
					<tr>
						<td width="180px" valign="top" align="right">{$t->_('username')}<span class="red">*</span></td>
						<td>
							<input class="userInput" type="text" id="pusername" name="pusername" value="{$AppUI->username}" readonly="readonly"/>
						</td>
					</tr>
					<tr>
						<td valign="top" align="right">Đổi mật khẩu mới<span class="red">*</span></td>
						<td>
							<input class="userInput" type="password" id="ppassword" name="ppassword" value="" />
							<div class="error" id="idErrorPassword1">Vui lòng nhập mật khẩu mới.</div>
							<div class="error" id="idErrorPassword2">Mật khẩu mới không hợp lệ.</div>
							<div class="note">{$t->_('note_password')}</div>
						</td>
					</tr>
					<tr>
						<td valign="top" align="right">Mật khẩu xác nhận mới<span class="red">*</span></td>
						<td>
							<input class="userInput" type="password" id="ppassword2" name="ppassword2" value="" />
							<div class="error" id="idErrorConfirmPassword">Mật khẩu xác nhận không hợp lệ.</div>
							<div class="note">{$t->_('note_confirm_password')}
						</td>
					</tr>
					<tr>
						<td valign="top" align="right">&nbsp;</td></td>
						<td valign="top"><input type="submit" class="bntLogin" value="Cập nhật" /></td></td>
					</tr>
				</table>
				</div>
			</div>
		</div>
		</form>

		<form onsubmit="return checkUpdateProfile({$AppUI->id});" method="post" enctype="multipart/form-data" action="{$smarty.const.HOST}/profile/dosaveprofile">
		<div class="tabNewsH">
			<h4 class="titleNewsH">Thông tin cá nhân</h4>
			<div class="inTabNewsH">
				<div class="padT10">
				<table cellpadding="6" cellspacing="0" border="0">
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
						<td valign="top" align="right">{$t->_('fullname')}<span class="red">*</span></td>
						<td>
							<input class="userInput" type="text" id="pfullname" name="pfullname" value="{$AppUI->fullname}" maxlength="100"/>
							<div class="error" id="idErrorFullName">{$t->_('msg_required_fullname')}</div>
							<div class="note">Nhập tối đa 30 ký tự.</div>
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
						<td width="180px" align="right" valign="top">Ảnh đại diện</td>
						<td>
							<a href="javascript:uifile(2);" class="bntS1"><span>Chọn hình</span></a>&nbsp;
							<div class="clr"></div>
							<span id="idimage" style="{if $AppUI->image==''}display:none;{/if}">
								<input type="checkbox" id="pimage" name="pimage" value="{$AppUI->image}" checked="checked"/> <label for="pimage" id="idfilename">{$AppUI->image}</label>
							</span>
						</td>
					</tr>
					<tr>
						<td valign="top" align="right">{$t->_('gender')}</td>
						<td>{select_gender selected=$AppUI->gender item0=$t->_('select')}</td>
					</tr>
					<tr>
						<td valign="top" align="right">{$t->_('phone')}</td>
						<td><input class="userInput" type="text" id="pphone" name="pphone" value="{$AppUI->phone}" /></td>
					</tr>
					<tr>
						<td valign="top" align="right">{$t->_('mobile')}</td>
						<td><input class="userInput" type="text" id="pmobile" name="pmobile" value="{$AppUI->mobile}" /></td>
					</tr>
					<tr>
						<td valign="top" align="right">{$t->_('bank_name')}</td>
						<td><input class="userInput" type="text" id="pbank_name" name="pbank_name" value="{$AppUI->bank_name}" /></td>
					</tr>
					<tr>
						<td valign="top" align="right">{$t->_('bank_account')}</td>
						<td><input class="userInput" type="text" id="pbank_account" name="pbank_account" value="{$AppUI->bank_account}" /></td>
					</tr>
					<tr>
						<td valign="top" align="right">{$t->_('bank_number')}</td>
						<td><input class="userInput" type="text" id="pbank_no" name="pbank_no" value="{$AppUI->bank_no}" /></td>
					</tr>
					<tr>
						<td valign="top" align="right">{$t->_('signature')}</td>
						<td><textarea style="width:352px;height:100px;padding:2px;" id="psignature" name="psignature">{$AppUI->signature}</textarea></td>
					</tr>
					{*
					<tr>
						<td valign="top" align="right">{$t->_('sologan')}</td>
						<td><input class="userInput" type="text" id="psologan" name="psologan" value="{$AppUI->sologan}" /></td>
					</tr>
					<tr>
						<td valign="top" align="right">{$t->_('introduce')}</td>
						<td><textarea style="width:352px;height:100px;padding:2px;" id="pcontent" name="pcontent">{$AppUI->introduce}</textarea></td>
					</tr>
					*}
					<tr>
						<td valign="top" align="right">&nbsp;</td></td>
						<td valign="top">
							<input type="submit" class="bntLogin" value="Cập nhật" /></td>
						</td>
					</tr>
				</table>
				</div>
			</div>
		</div>
		</form>

		{if $AppUI->certify==0}
		<form onsubmit="return checkRequestCertify();" method="post" enctype="multipart/form-data" action="{$smarty.const.HOST}/profile/dosendrequest">
		<div class="tabNewsH" id="certify">
			<h4 class="titleNewsH">Yêu cầu xác thực CMND</h4>
			<div class="inTabNewsH">
				<div class="padT10">
				<table cellpadding="6" cellspacing="0" border="0">
					<tr>
						<td></td>
						<td><div class="padT5">Vui lòng cập nhật đầy đủ các thông tin cá nhân ở trên và gửi hình CMND đến BQT:</div></td>
					</tr>
					<tr>
						<td width="180px" align="right" valign="top">Hình CMND <span class="red">*</span></td>
						<td>
							<a href="javascript:uifile(4);" class="bntS1"><span>Chọn hình</span></a>&nbsp;<span id="idfilename2"></span><div class="clr"></div>
							<input type="hidden" id="pidimage" name="pidimage" value=""/>
							<div class="error" id="idErrorIDImage" style="display:none;">Vùi lòng chọn hình CMND.</div>
						</td>
					</tr>
					<tr>
						<td valign="top" align="right">{$t->_('captcha')}<span class="red">*</span></td>
						<td>
							<input class="userInput" type="text" id="pcaptcha" name="pcaptcha" value="" />
							<div class="error" id="idErrorCaptcha1" style="display:none;">{$t->_('msg_required_captcha')}</div>
							<div class="error" id="idErrorCaptcha2" style="display:none;">{$t->_('msg_invalid_captcha')}</div>
							<div class="space"></div>
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
		{/if}
	</div>
</div>
</div>
{include file="common/footer.tpl"}