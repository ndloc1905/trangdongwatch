{include file="common/header.tpl"}
<div id="bodyMain">
<div class="navigation">
	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>
	<a class="active" href="javascript:void(0);">Đổi mật khẩu</a>
</div>
{include file="common/left.tpl"}
<div class="mainRight">
	<div class="bodyCol">
	<form id="frmRegister" name="frmRegister" onsubmit="return checkForm();" method="post" enctype="multipart/form-data" action="{$smarty.const.HOST}/index/dogetpassword?pcode={$smarty.get.pcode}">
		<div class="tabNewsH">
			<h4 class="titleNewsH">Đổi mật khẩu</h4>
			<div class="inTabNewsH">
			<div class="padT10">
			<table cellpadding="6" cellspacing="0" border="0">
				<tr>
					<td valign="top" align="right">Mật khẩu mới<span class="red">*</span></td>
					<td>
						<input class="userInput" type="password" id="ppassword" name="ppassword" value="" />
						<div class="error" id="idErrorPassword1">{$t->_('msg_required_password')}</div>
						<div class="error" id="idErrorPassword2">{$t->_('msg_invalid_password')}</div>
						<div class="note">{$t->_('note_password')}</div>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">Xác nhận mật khẩu mới<span class="red">*</span></td>
					<td>
						<input class="userInput" type="password" id="ppassword2" name="ppassword2" value="" />
						<div class="error" id="idErrorConfirmPassword">{$t->_('msg_invalid_confirmpassword')}</div>
						<div class="note">{$t->_('note_confirm_password')}
					</td>
				</tr>			
				<tr>
					<td valign="top" align="right">&nbsp;</td>
					<td valign="top">
						<input type="submit" style="float:left;margin-left:5px;" class="bntLogin" value="Đổi" />
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