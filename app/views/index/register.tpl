{include file="common/header.tpl"}
<div id="bodyMain">
<div class="navigation">
	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>
	<a class="active" href="javascript:void(0);">Đăng ký</a>
</div>
{include file="common/left.tpl"}
<div class="mainRight">
	<div class="bodyCol">
	<form id="frmRegister" name="frmRegister" onsubmit="return checkForm();" method="post" enctype="multipart/form-data" action="{$smarty.const.HOST}/index/doregister">
		<div class="tabNewsH">
			<h4 class="titleNewsH">Đăng ký</h4>
			<div class="inTabNewsH">
			<div class="padT10">
			<table cellpadding="6" cellspacing="0" border="0">				
				<tr>
					<td width="180px" valign="top" align="right">{$t->_('username')}<span class="red">*</span></td>
					<td>
						<input class="userInput" type="text" id="pusername" name="pusername" value="{$arrResult.username}" />
						<div id="idErrorUserName1" class="error">{$t->_('msg_required_username')}</div>
						<div id="idErrorUserName2" class="error">{$t->_('msg_invalid_username')}</div>
						<div id="idErrorUserName3" class="error">{$t->_('msg_duplicate_username')}</div>
						<div class="note">{$t->_('note_username')}</div>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">{$t->_('password')}<span class="red">*</span></td>
					<td>
						<input class="userInput" type="password" id="ppassword" name="ppassword" value="" />
						<div class="error" id="idErrorPassword1">{$t->_('msg_required_password')}</div>
						<div class="error" id="idErrorPassword2">{$t->_('msg_invalid_password')}</div>
						<div class="note">{$t->_('note_password')}</div>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">{$t->_('confirm_password')}<span class="red">*</span></td>
					<td>
						<input class="userInput" type="password" id="ppassword2" name="ppassword2" value="" />
						<div class="error" id="idErrorConfirmPassword">{$t->_('msg_invalid_confirmpassword')}</div>
						<div class="note">{$t->_('note_confirm_password')}
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">Email<span class="red">*</span></td>
					<td>
						<input class="userInput" type="text" id="pemail" name="pemail" value="" />
						<div id="idErrorEmail1" class="error">{$t->_('msg_required_email')}</div>
						<div id="idErrorEmail2" class="error">{$t->_('msg_invalid_email')}</div>
						<div id="idErrorEmail3" class="error">{$t->_('msg_duplicate_email')}</div>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">{$t->_('fullname')}<span class="red">*</span></td>
					<td>
						<input class="userInput" type="text" id="pfullname" name="pfullname" value="" />
						<div class="error" id="idErrorFullName">{$t->_('msg_required_fullname')}</div>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">{$t->_('address')}<span class="red">*</span></td>
					<td>
						<input class="userInput" type="text" id="paddress" name="paddress" value="" />
						<div class="error" id="idErrorAddress">{$t->_('msg_required_address')}</div>
					</td>
				</tr>
				<tr>
					<td width="180px" align="right">Ảnh đại diện</td>
					<td>				
						<a href="javascript:void(0);" class="bntS1" id="btnUpload"><span>Chọn hình</span></a>&nbsp;<span id="idstatus" style="display:none;">Đang upload...</span>
						<div class="clr"></div>
						<span id="idimage" style="{if $strImage==''}display:none;{/if}">
							<input type="checkbox" id="pimage" name="pimage" value="{$strImage}" checked="checked"/> <label for="pimage" id="idfilename">{$strImage}</label>
						</span>
					</td>
				</tr>
				{*
				<tr>
					<td valign="top" align="right">{$t->_('gender')}</td>
					<td>{select_gender item0=$t->_('select')}</td>
				</tr>
				*}
				<tr>
					<td valign="top" align="right">{$t->_('phone')}</td>
					<td><input class="userInput" type="text" id="pphone" name="pphone" value="" /></td>
				</tr>
				{*
				<tr>
					<td valign="top" align="right">{$t->_('mobile')}</td>
					<td><input class="userInput" type="text" id="pmobile" name="pmobile" value="" /></td>
				</tr>
				*}
				<tr>
					<td valign="top" align="right">{$t->_('bank_name')}</td>
					<td><input class="userInput" type="text" id="pbank_name" name="pbank_name" value="" /></td>
				</tr>
				<tr>
					<td valign="top" align="right">{$t->_('bank_account')}</td>
					<td><input class="userInput" type="text" id="pbank_account" name="pbank_account" value="" /></td>
				</tr>
				<tr>
					<td valign="top" align="right">{$t->_('bank_number')}</td>
					<td><input class="userInput" type="text" id="pbank_no" name="pbank_no" value="" /></td>
				</tr>
				
				<tr>
					<td valign="top" align="right">{$t->_('captcha')}<span class="red">*</span></td>
					<td>
						<input class="userInput" type="text" id="pcaptcha" name="pcaptcha" value="" />
						<div class="error" id="idErrorCaptcha1" style="display:none;">{$t->_('msg_required_captcha')}</div>
						<div class="error" id="idErrorCaptcha2" style="display:none;">{$t->_('msg_invalid_captcha')}</div>
						<div class="space"></div>
						<div class="captcha"><span id="idCaptCha">{captcha}</span><img onclick="refreshCaptcha('idCaptCha');" style="margin-left:10px;margin-bottom:12px;cursor:pointer;" src="{$smarty.const.HOST}/images/ico/refresh.png" /></div>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">&nbsp;</td></td>
					<td valign="top">
						<input style="float:left;" type="submit" class="bntLogin" value="Đăng ký" /></td>
						<span id="idLoading" style="float:left;margin-left:5px;display:none;"><img src="images/loading.gif" /></span>
					</td>
				</tr>
			</table>			
			</div>
			<div class="space"></div>
			</div>
		</div>
	</form>
	</div>
	{include file="common/right.tpl"}
</div>
</div>
{include file="common/footer.tpl"}